<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Playground\Lead\Models;

use Database\Factories\Playground\Lead\Models\TagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Playground\Models\Model;

/**
 * \Playground\Lead\Models\Tag
 *
 * @property string $id
 * @property ?string $tag_type
 * @property ?scalar $created_by_id
 * @property ?scalar $modified_by_id
 * @property ?scalar $owned_by_id
 * @property ?string $parent_id
 * @property ?string $matrix_id
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 * @property ?Carbon $deleted_at
 * @property ?Carbon $canceled_at
 * @property ?Carbon $closed_at
 * @property ?Carbon $embargo_at
 * @property ?Carbon $planned_end_at
 * @property ?Carbon $planned_start_at
 * @property ?Carbon $postponed_at
 * @property ?Carbon $published_at
 * @property ?Carbon $released_at
 * @property ?Carbon $resolved_at
 * @property ?Carbon $resumed_at
 * @property ?Carbon $suspended_at
 * @property ?Carbon $timer_end_at
 * @property ?Carbon $timer_start_at
 * @property int $gids
 * @property int $po
 * @property int $pg
 * @property int $pw
 * @property bool $only_admin
 * @property bool $only_user
 * @property bool $only_guest
 * @property bool $allow_public
 * @property int $status
 * @property int $rank
 * @property int $size
 * @property ?array<string, mixed> $matrix
 * @property ?int $x
 * @property ?int $y
 * @property ?int $z
 * @property ?float $r
 * @property ?float $theta
 * @property ?float $rho
 * @property ?float $phi
 * @property ?float $elevation
 * @property ?float $latitude
 * @property ?float $longitude
 * @property bool $active
 * @property bool $canceled
 * @property bool $closed
 * @property bool $completed
 * @property bool $cron
 * @property bool $duplicate
 * @property bool $fixed
 * @property bool $flagged
 * @property bool $internal
 * @property bool $locked
 * @property bool $pending
 * @property bool $planned
 * @property bool $prioritized
 * @property bool $problem
 * @property bool $published
 * @property bool $released
 * @property bool $resolved
 * @property bool $retired
 * @property bool $suspended
 * @property bool $unknown
 * @property string $locale
 * @property string $label
 * @property string $title
 * @property string $byline
 * @property ?string $slug
 * @property string $url
 * @property string $description
 * @property string $introduction
 * @property ?string $content
 * @property ?string $summary
 * @property string $icon
 * @property string $image
 * @property string $avatar
 * @property ?array<string, mixed> $ui
 * @property ?array<string, mixed> $assets
 * @property ?array<string, mixed> $meta
 * @property ?array<int, array<string, mixed>> $notes
 * @property ?array<string, mixed> $options
 * @property ?array<string, mixed> $sources
 */
class Tag extends Model
{
    /** @use HasFactory<TagFactory> */
    use HasFactory;

    protected $table = 'lead_tags';

    protected $attributes = [
        'tag_type' => null,
        'created_by_id' => null,
        'modified_by_id' => null,
        'owned_by_id' => null,
        'parent_id' => null,
        'matrix_id' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
        'canceled_at' => null,
        'closed_at' => null,
        'embargo_at' => null,
        'planned_end_at' => null,
        'planned_start_at' => null,
        'postponed_at' => null,
        'published_at' => null,
        'released_at' => null,
        'resolved_at' => null,
        'resumed_at' => null,
        'suspended_at' => null,
        'timer_end_at' => null,
        'timer_start_at' => null,
        'gids' => 0,
        'po' => 0,
        'pg' => 0,
        'pw' => 0,
        'only_admin' => false,
        'only_user' => false,
        'only_guest' => false,
        'allow_public' => false,
        'status' => 0,
        'rank' => 0,
        'size' => 0,
        'matrix' => null,
        'x' => null,
        'y' => null,
        'z' => null,
        'r' => null,
        'theta' => null,
        'rho' => null,
        'phi' => null,
        'elevation' => null,
        'latitude' => null,
        'longitude' => null,
        'active' => true,
        'canceled' => false,
        'closed' => false,
        'completed' => false,
        'cron' => false,
        'duplicate' => false,
        'fixed' => false,
        'flagged' => false,
        'internal' => false,
        'locked' => false,
        'pending' => false,
        'planned' => false,
        'prioritized' => false,
        'problem' => false,
        'published' => false,
        'released' => false,
        'resolved' => false,
        'retired' => false,
        'suspended' => false,
        'unknown' => false,
        'locale' => '',
        'label' => '',
        'title' => '',
        'byline' => '',
        'slug' => null,
        'url' => '',
        'description' => '',
        'introduction' => '',
        'content' => null,
        'summary' => null,
        'icon' => '',
        'image' => '',
        'avatar' => '',
        'ui' => null,
        'assets' => null,
        'meta' => null,
        'notes' => '[]',
        'options' => null,
        'sources' => null,
    ];

    protected $fillable = [
        'tag_type',
        'owned_by_id',
        'parent_id',
        'matrix_id',
        'canceled_at',
        'closed_at',
        'embargo_at',
        'planned_end_at',
        'planned_start_at',
        'postponed_at',
        'published_at',
        'released_at',
        'resolved_at',
        'resumed_at',
        'suspended_at',
        'timer_end_at',
        'timer_start_at',
        'gids',
        'po',
        'pg',
        'pw',
        'only_admin',
        'only_user',
        'only_guest',
        'allow_public',
        'status',
        'rank',
        'size',
        'matrix',
        'x',
        'y',
        'z',
        'r',
        'theta',
        'rho',
        'phi',
        'elevation',
        'latitude',
        'longitude',
        'active',
        'canceled',
        'closed',
        'completed',
        'cron',
        'duplicate',
        'fixed',
        'flagged',
        'internal',
        'locked',
        'pending',
        'planned',
        'prioritized',
        'problem',
        'published',
        'released',
        'resolved',
        'retired',
        'suspended',
        'unknown',
        'locale',
        'label',
        'title',
        'byline',
        'slug',
        'url',
        'description',
        'introduction',
        'content',
        'summary',
        'icon',
        'image',
        'avatar',
        'ui',
        'assets',
        'meta',
        'options',
        'sources',
    ];

    protected function casts(): array
    {
        return [
            'tag_type' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'canceled_at' => 'datetime',
            'closed_at' => 'datetime',
            'embargo_at' => 'datetime',
            'planned_end_at' => 'datetime',
            'planned_start_at' => 'datetime',
            'postponed_at' => 'datetime',
            'published_at' => 'datetime',
            'released_at' => 'datetime',
            'resolved_at' => 'datetime',
            'resumed_at' => 'datetime',
            'suspended_at' => 'datetime',
            'timer_end_at' => 'datetime',
            'timer_start_at' => 'datetime',
            'gids' => 'integer',
            'po' => 'integer',
            'pg' => 'integer',
            'pw' => 'integer',
            'only_admin' => 'boolean',
            'only_user' => 'boolean',
            'only_guest' => 'boolean',
            'allow_public' => 'boolean',
            'status' => 'integer',
            'rank' => 'integer',
            'size' => 'integer',
            'matrix' => 'array',
            'x' => 'integer',
            'y' => 'integer',
            'z' => 'integer',
            'r' => 'float',
            'theta' => 'float',
            'rho' => 'float',
            'phi' => 'float',
            'elevation' => 'float',
            'latitude' => 'float',
            'longitude' => 'float',
            'active' => 'boolean',
            'canceled' => 'boolean',
            'closed' => 'boolean',
            'completed' => 'boolean',
            'cron' => 'boolean',
            'duplicate' => 'boolean',
            'fixed' => 'boolean',
            'flagged' => 'boolean',
            'internal' => 'boolean',
            'locked' => 'boolean',
            'pending' => 'boolean',
            'planned' => 'boolean',
            'prioritized' => 'boolean',
            'problem' => 'boolean',
            'published' => 'boolean',
            'released' => 'boolean',
            'resolved' => 'boolean',
            'retired' => 'boolean',
            'suspended' => 'boolean',
            'unknown' => 'boolean',
            'locale' => 'string',
            'label' => 'string',
            'title' => 'string',
            'byline' => 'string',
            'slug' => 'string',
            'url' => 'string',
            'description' => 'string',
            'introduction' => 'string',
            'content' => 'string',
            'summary' => 'string',
            'icon' => 'string',
            'image' => 'string',
            'avatar' => 'string',
            'ui' => 'array',
            'assets' => 'array',
            'meta' => 'array',
            'notes' => 'array',
            'options' => 'array',
            'sources' => 'array',
        ];
    }
}
