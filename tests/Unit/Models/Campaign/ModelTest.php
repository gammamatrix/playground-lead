<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Playground\Lead\Models\Campaign;

use Tests\Unit\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Lead\Models\Campaign\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Lead\Models\Campaign::class;

    protected bool $hasRelationships = true;

    /**
     * @var array<int, string> Test has one relationships.
     */
    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
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
}
