<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Playground\Lead\Models\Lead;

use Tests\Unit\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Lead\Models\Lead\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Lead\Models\Lead::class;

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
