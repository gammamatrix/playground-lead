<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Lead\Models\Tag;

use Playground\Lead\Models\Tag;
use Playground\Models\User;
use Tests\Feature\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Lead\Models\Tag\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Tag::class;

    protected bool $hasRelationships = true;

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
            'modelClass' => Tag::class,
        ],
    ];
}
