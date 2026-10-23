<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Lead\Models\Tag;

use Playground\Lead\Models\Tag;
use Tests\Unit\Playground\Lead\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Lead\Models\Tag\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Tag::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];
}
