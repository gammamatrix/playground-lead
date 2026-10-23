<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Lead\Models\Opportunity;

use Playground\Lead\Models\Campaign;
use Playground\Lead\Models\Goal;
use Playground\Lead\Models\Lead;
use Playground\Lead\Models\Opportunity;
use Playground\Lead\Models\Plan;
use Playground\Lead\Models\Region;
use Playground\Lead\Models\Report;
use Playground\Lead\Models\Source;
use Playground\Lead\Models\Task;
use Playground\Lead\Models\Team;
use Playground\Lead\Models\Teammate;
use Playground\Models\User;
use Tests\Feature\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Lead\Models\Opportunity\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Opportunity::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'campaigns' => [
            'key' => 'opportunity_id',
            'modelClass' => Campaign::class,
        ],
        'goals' => [
            'key' => 'opportunity_id',
            'modelClass' => Goal::class,
        ],
        'leads' => [
            'key' => 'opportunity_id',
            'modelClass' => Lead::class,
        ],
        'plans' => [
            'key' => 'opportunity_id',
            'modelClass' => Plan::class,
        ],
        'regions' => [
            'key' => 'opportunity_id',
            'modelClass' => Region::class,
        ],
        'reports' => [
            'key' => 'opportunity_id',
            'modelClass' => Report::class,
        ],
        'sources' => [
            'key' => 'opportunity_id',
            'modelClass' => Source::class,
        ],
        'tasks' => [
            'key' => 'opportunity_id',
            'modelClass' => Task::class,
        ],
        'teams' => [
            'key' => 'opportunity_id',
            'modelClass' => Team::class,
        ],
        'teammates' => [
            'key' => 'opportunity_id',
            'modelClass' => Teammate::class,
        ],
    ];

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => Opportunity::class,
        ],
        'campaign' => [
            'key' => 'campaign_id',
            'rule' => 'create',
            'modelClass' => Campaign::class,
        ],
        'goal' => [
            'key' => 'goal_id',
            'rule' => 'create',
            'modelClass' => Goal::class,
        ],
        'lead' => [
            'key' => 'lead_id',
            'rule' => 'create',
            'modelClass' => Lead::class,
        ],
        'plan' => [
            'key' => 'plan_id',
            'rule' => 'create',
            'modelClass' => Plan::class,
        ],
        'region' => [
            'key' => 'region_id',
            'rule' => 'create',
            'modelClass' => Region::class,
        ],
        'report' => [
            'key' => 'report_id',
            'rule' => 'create',
            'modelClass' => Report::class,
        ],
        'source' => [
            'key' => 'source_id',
            'rule' => 'create',
            'modelClass' => Source::class,
        ],
        'task' => [
            'key' => 'task_id',
            'rule' => 'create',
            'modelClass' => Task::class,
        ],
        'team' => [
            'key' => 'team_id',
            'rule' => 'create',
            'modelClass' => Team::class,
        ],
        'teammate' => [
            'key' => 'teammate_id',
            'rule' => 'create',
            'modelClass' => Teammate::class,
        ],
    ];
}
