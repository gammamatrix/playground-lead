<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Lead\Models\Tagged;

use Playground\Lead\Models\Tagged;
use Tests\Unit\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Lead\Models\Tagged\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Tagged::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'tag',
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
        'teammate',
    ];
}
