<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Playground\Lead\Models\Region;

use Tests\Unit\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Lead\Models\Region\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Lead\Models\Region::class;

    protected bool $hasRelationships = true;

    /**
     * @var array<int, string> Test has one relationships.
     */
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
        'report',
        'source',
        'task',
        'team',
        'teammate',
    ];
}
