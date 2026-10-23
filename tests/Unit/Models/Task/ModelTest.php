<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Lead\Models\Task;

use Playground\Lead\Models\Task;
use Tests\Unit\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Lead\Models\Task\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Task::class;

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
        'teams',
        'teammates',
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
        'team',
        'teammate',
    ];
}
