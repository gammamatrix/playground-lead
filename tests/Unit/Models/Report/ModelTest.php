<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Lead\Models\Report;

use Playground\Lead\Models\Report;
use Tests\Unit\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Lead\Models\Report\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Report::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'campaigns',
        'goals',
        'leads',
        'opportunities',
        'plans',
        'regions',
        'sources',
        'tasks',
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
        'source',
        'task',
        'team',
        'teammate',
    ];
}
