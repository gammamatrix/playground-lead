<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Lead\Models\Teammate;

use Playground\Lead\Models\Teammate;
use Tests\Unit\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Lead\Models\Teammate\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Teammate::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'campaigns',
        'goals',
        'leads',
        'opportunities',
        'plans',
        'regions',
        'reports',
        'sources',
        'tasks',
        'teams',
    ];

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
        'region',
        'report',
        'source',
        'task',
        'team',
    ];
}
