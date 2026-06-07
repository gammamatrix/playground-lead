<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Lead\Models\Opportunity;

use Playground\Lead\Models\Opportunity;
use Tests\Unit\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Lead\Models\Opportunity\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Opportunity::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'campaign',
        'goal',
        'lead',
        'plan',
        'region',
        'report',
        'source',
        'task',
        'team',
        'teammate',
    ];
}
