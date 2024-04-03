<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Tests\Feature\Playground\Leads\Models\Team;

use Tests\Feature\Playground\Leads\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Leads\Models\Team\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Leads\Models\Team::class;

    protected bool $hasRelationships = true;

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
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => \Playground\Leads\Models\Team::class,
        ],
    ];
}
