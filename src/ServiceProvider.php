<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Playground\Lead;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider;

/**
 * \Playground\Lead\ServiceProvider
 */
class ServiceProvider extends AuthServiceProvider
{
    public const VERSION = '73.0.0';

    public string $package = 'playground-lead';

    /**
     * Bootstrap any package services.
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * @var array<string, mixed> $config
         */
        $config = config($this->package);

        if (! empty($config['load']) && is_array($config['load'])) {

            if ($this->app->runningInConsole()) {
                // Publish configuration
                $this->publishes([
                    sprintf('%1$s/config/%2$s.php', dirname(__DIR__), $this->package) => config_path(sprintf('%1$s.php', $this->package)),
                ], 'playground-config');

                // Publish migrations
                $this->publishMigrations();

                // Load migrations
                if (! empty($config['load']['migrations'])) {
                    $this->loadMigrationsFrom(dirname(__DIR__).'/database/migrations');
                }
            }
        }

        if (! empty($config['about'])) {
            $this->about();
        }
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/config/playground-lead.php',
            $this->package
        );
    }

    public function publishMigrations(): void
    {
        $migrations = [];

        foreach ([
            '2010_09_30_000000_create_lead_campaigns_table.php',
            '2010_09_30_000000_create_lead_goals_table.php',
            '2010_09_30_000000_create_lead_leads_table.php',
            '2010_09_30_000000_create_lead_opportunities_table.php',
            '2010_09_30_000000_create_lead_plans_table.php',
            '2010_09_30_000000_create_lead_regions_table.php',
            '2010_09_30_000000_create_lead_reports_table.php',
            '2010_09_30_000000_create_lead_sources_table.php',
            '2010_09_30_000000_create_lead_tasks_table.php',
            '2010_09_30_000000_create_lead_teammates_table.php',
            '2010_09_30_000000_create_lead_teams_table.php',
        ] as $file) {
            $migrations[dirname(__DIR__).'/database/migrations/'.$file] = database_path('migrations/'.$file);
        }

        $this->publishes($migrations, 'playground-migrations');
    }

    public function about(): void
    {
        $config = config($this->package);
        $config = is_array($config) ? $config : [];

        $load = ! empty($config['load']) && is_array($config['load']) ? $config['load'] : [];

        AboutCommand::add('Playground: Lead', fn () => [
            '<fg=yellow;options=bold>Load</> Migrations' => ! empty($load['migrations']) ? '<fg=green;options=bold>ENABLED</>' : '<fg=yellow;options=bold>DISABLED</>',
            'Package' => $this->package,
            'Version' => ServiceProvider::VERSION,
        ]);
    }
}
