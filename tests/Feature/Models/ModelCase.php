<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Tests\Feature\Playground\Lead\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Carbon;
use Playground\Lead\ServiceProvider;
use Playground\ServiceProvider as PlaygroundServiceProvider;
use Playground\Test\Feature\Models\ModelCase as BaseModelCase;

/**
 * \Tests\Feature\Playground\Lead\Models\ModelCase
 */
class ModelCase extends BaseModelCase
{
    use DatabaseTransactions;

    protected bool $load_migrations_leads = true;

    protected bool $load_migrations_laravel = false;

    protected bool $load_migrations_playground = true;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'campaigns' => [
            'key' => 'campaign_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Campaign::class,
        ],
        'goals' => [
            'key' => 'goal_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Goal::class,
        ],
        'leads' => [
            'key' => 'lead_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Lead::class,
        ],
        'opportunities' => [
            'key' => 'opportunity_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Opportunity::class,
        ],
        'plans' => [
            'key' => 'plan_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Plan::class,
        ],
        'regions' => [
            'key' => 'region_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Region::class,
        ],
        'reports' => [
            'key' => 'report_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Report::class,
        ],
        'sources' => [
            'key' => 'source_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Source::class,
        ],
        'tasks' => [
            'key' => 'task_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Task::class,
        ],
        'teammates' => [
            'key' => 'teammate_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Teammate::class,
        ],
        'teams' => [
            'key' => 'team_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Team::class,
        ],
    ];

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        // 'parent' => [
        //     'key' => 'parent_id',
        //     'rule' => 'create',
        //     'modelClass' => \Playground\Lead\Models\Model::class,
        // ],
        'campaign' => [
            'key' => 'campaign_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Campaign::class,
        ],
        'goal' => [
            'key' => 'goal_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Goal::class,
        ],
        'lead' => [
            'key' => 'lead_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Lead::class,
        ],
        'opportunity' => [
            'key' => 'opportunity_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Opportunity::class,
        ],
        'plan' => [
            'key' => 'plan_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Plan::class,
        ],
        'region' => [
            'key' => 'region_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Region::class,
        ],
        'report' => [
            'key' => 'report_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Report::class,
        ],
        'source' => [
            'key' => 'source_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Source::class,
        ],
        'task' => [
            'key' => 'task_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Task::class,
        ],
        'team' => [
            'key' => 'team_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Team::class,
        ],
        'teammate' => [
            'key' => 'teammate_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Teammate::class,
        ],
    ];

    protected function getPackageProviders($app)
    {
        return [
            PlaygroundServiceProvider::class,
            ServiceProvider::class,
        ];
    }

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        Carbon::setTestNow(Carbon::now());

        if (! empty(env('TEST_DB_MIGRATIONS'))) {
            if ($this->load_migrations_leads) {
                $this->loadMigrationsFrom(dirname(dirname(dirname(__DIR__))).'/database/migrations');
            }
            // if ($this->load_migrations_laravel) {
            //     $this->loadMigrationsFrom(dirname(dirname(dirname(__DIR__))).'/database/migrations-laravel');
            // }
            if ($this->load_migrations_playground) {
                $this->loadMigrationsFrom(dirname(dirname(dirname(__DIR__))).'/database/migrations-playground');
            }
        }
    }

    /**
     * Set up the environment.
     *
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('auth.providers.users.model', 'Playground\\Models\\User');
        $app['config']->set('playground-auth.verify', 'user');

        $app['config']->set('playground-lead.load.migrations', true);
    }

    protected function test_parent_relationship(): void
    {
        /**
         * @var class-string<Model> $modelClass
         */
        $modelClass = $this->getModelClass();

        /**
         * @var ?Model $model
         */
        $model = null;

        /**
         * @var ?Model $model_parent
         */
        $model_parent = null;

        if (in_array(HasFactory::class, class_uses_recursive($modelClass))
            && is_callable([$modelClass, 'factory'])
        ) {
            $model = $modelClass::factory()->create();

            $model_parent = $modelClass::factory()->create();
        }

        $parent_has_one = $model && is_callable([$modelClass, 'parent']) ? $model->parent() : null;
        $this->assertInstanceOf(HasOne::class, $parent_has_one);

        if ($model && $model_parent) {

            $model->setAttribute('parent_id', $model_parent->getAttribute('id'));

            $model->save();
            $model->refresh();

            $this->assertSame(
                $model->getAttributeValue('parent_id'),
                $model_parent->getAttributeValue('id'),
                // strval($m->id),
                sprintf(
                    'Expecting the created HasOne model for the accessor [%1$s] to have m->id === model->%2$s - modelClass: %3$s - %4$s - %5$s',
                    'parent',
                    'parent_id',
                    $modelClass,
                    get_class($model_parent),
                    get_called_class()
                )
            );

            $o = is_callable([$modelClass, 'parent']) ? $model->parent()->first() : null;

            $this->assertInstanceOf($modelClass, $o, sprintf(
                'Expecting the created HasOne model for the accessor [%1$s] to be an instance of %2$s - found: %3$s - %4$s',
                'parent',
                $modelClass,
                $o ? get_class($o) : gettype($o),
                get_called_class()
            ));
            $this->assertSame(
                $o->getAttributeValue('id'),
                $model_parent->getAttributeValue('id'),
                sprintf(
                    'Expecting the created HasOne model for the accessor [%1$s] to have m->id === o->id - modelClass: %3$s - %4$s - %5$s',
                    'parent',
                    'parent_id',
                    $modelClass,
                    get_class($o),
                    get_called_class()
                )
            );
        }
    }
}
