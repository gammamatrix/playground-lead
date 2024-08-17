<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Feature\Playground\Lead\Models\Teammate;

use Tests\Feature\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Lead\Models\Teammate\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Lead\Models\Teammate::class;

    protected bool $hasRelationships = true;

    /**
     * @var array<string, array<string, mixed>> Test has one relationships.
     */
    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'first',
            'modelClass' => \Playground\Models\User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'first',
            'modelClass' => \Playground\Models\User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => \Playground\Lead\Models\Teammate::class,
        ],
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
    ];
}
