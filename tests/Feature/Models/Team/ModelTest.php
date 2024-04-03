<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Tests\Feature\Playground\Lead\Models\Team;

use Tests\Feature\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Lead\Models\Team\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Lead\Models\Team::class;

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
            'modelClass' => \Playground\Lead\Models\Team::class,
        ],
    ];
}
