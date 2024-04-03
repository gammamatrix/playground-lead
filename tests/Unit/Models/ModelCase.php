<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Tests\Unit\Playground\Leads\Models;

use Playground\Leads\ServiceProvider;
use Playground\ServiceProvider as PlaygroundServiceProvider;
use Playground\Test\Unit\Models\ModelCase as BaseModelCase;

/**
 * \Tests\Unit\Playground\Leads\Models\ModelCase
 */
class ModelCase extends BaseModelCase
{
    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'campaigns',
        'goals',
        'leads',
        'opportunities',
        'plans',
        'regions',
        'reports',
        'sources',
        'tasks',
        'teammates',
        'teams',
    ];

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'campaign',
        'goal',
        'lead',
        'opportunity',
        'plan',
        'region',
        'report',
        'source',
        'task',
        'team',
        'teammate',
    ];

    protected function getPackageProviders($app)
    {
        return [
            PlaygroundServiceProvider::class,
            ServiceProvider::class,
        ];
    }

    /**
     * Set up the environment.
     *
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('auth.providers.users.model', 'Playground\\Test\\Models\\User');
        $app['config']->set('playground-auth.verify', 'user');
        $app['config']->set('auth.testing.password', 'password');
        $app['config']->set('auth.testing.hashed', false);

        $app['config']->set('playground-leads.load.migrations', true);
    }
}
