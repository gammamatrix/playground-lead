<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Playground\Lead\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Playground\Models\Model as BaseModel;

/**
 * \Playground\Lead\Models\Model
 *
 * @property string $id
 * @property ?scalar $created_by_id
 * @property ?scalar $modified_by_id
 * @property ?scalar $owned_by_id
 * @property ?string $parent_id
 * @property string $model_type
 * @property ?string $campaign_id
 * @property ?string $goal_id
 * @property ?string $lead_id
 * @property ?string $opportunity_id
 * @property ?string $plan_id
 * @property ?string $region_id
 * @property ?string $report_id
 * @property ?string $source_id
 * @property ?string $task_id
 * @property ?string $team_id
 * @property ?string $teammate_id
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 * @property ?Carbon $deleted_at
 * @property ?Carbon $start_at
 * @property ?Carbon $planned_start_at
 * @property ?Carbon $end_at
 * @property ?Carbon $planned_end_at
 * @property ?Carbon $calculated_at
 * @property ?Carbon $canceled_at
 * @property ?Carbon $closed_at
 * @property ?Carbon $embargo_at
 * @property ?Carbon $fixed_at
 * @property ?Carbon $postponed_at
 * @property ?Carbon $published_at
 * @property ?Carbon $released_at
 * @property ?Carbon $reported_at
 * @property ?Carbon $resolved_at
 * @property ?Carbon $resumed_at
 * @property ?Carbon $suspended_at
 * @property int $gids
 * @property int $po
 * @property int $pg
 * @property int $pw
 * @property int $status
 * @property int $rank
 * @property int $size
 * @property ?array $matrix
 * @property ?int $x
 * @property ?int $y
 * @property ?int $z
 * @property ?double $r
 * @property ?double $theta
 * @property ?double $rho
 * @property ?double $phi
 * @property ?double $elevation
 * @property ?double $latitude
 * @property ?double $longitude
 * @property bool $active
 * @property bool $canceled
 * @property bool $closed
 * @property bool $completed
 * @property bool $duplicate
 * @property bool $featured
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
 * @property bool $retired
 * @property bool $resolved
 * @property bool $special
 * @property bool $suspended
 * @property bool $unknown
 * @property string $label
 * @property string $title
 * @property string $byline
 * @property string $timezone
 * @property string $slug
 * @property string $url
 * @property string $description
 * @property string $introduction
 * @property string $content
 * @property string $summary
 * @property string $locale
 * @property string $currency
 * @property ?float $amount
 * @property ?float $bonus
 * @property ?float $bonus_rate
 * @property ?float $commission
 * @property ?float $commission_rate
 * @property ?float $estimate
 * @property ?float $fees
 * @property ?float $materials
 * @property ?float $services
 * @property ?float $shipping
 * @property ?float $subtotal
 * @property ?float $taxable
 * @property ?float $tax_rate
 * @property ?float $taxes
 * @property ?float $total
 * @property string $icon
 * @property string $image
 * @property string $avatar
 * @property array $ui
 * @property array $assets
 * @property array $meta
 * @property array $notes
 * @property array $options
 * @property array $sources
 */
class Model extends BaseModel
{
    /**
     * The default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'created_by_id' => null,
        'modified_by_id' => null,
        'owned_by_id' => null,
        'parent_id' => null,
        'model_type' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
        'start_at' => null,
        'planned_start_at' => null,
        'end_at' => null,
        'planned_end_at' => null,
        'calculated_at' => null,
        'canceled_at' => null,
        'closed_at' => null,
        'embargo_at' => null,
        'fixed_at' => null,
        'postponed_at' => null,
        'published_at' => null,
        'released_at' => null,
        'reported_at' => null,
        'resolved_at' => null,
        'resumed_at' => null,
        'suspended_at' => null,
        'gids' => 0,
        'po' => 0,
        'pg' => 0,
        'pw' => 0,
        'status' => 0,
        'rank' => 0,
        'size' => 0,
        'matrix' => '',
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
        'duplicate' => false,
        'featured' => false,
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
        'retired' => false,
        'resolved' => false,
        'special' => false,
        'suspended' => false,
        'unknown' => false,
        'label' => '',
        'title' => '',
        'byline' => '',
        'slug' => null,
        'url' => '',
        'description' => '',
        'introduction' => '',
        'content' => null,
        'summary' => null,
        'locale' => '',
        'currency' => '',
        'amount' => null,
        'bonus' => null,
        'bonus_rate' => null,
        'commission' => null,
        'commission_rate' => null,
        'estimate' => null,
        'fees' => null,
        'materials' => null,
        'services' => null,
        'shipping' => null,
        'subtotal' => null,
        'taxable' => null,
        'tax_rate' => null,
        'taxes' => null,
        'total' => null,
        'icon' => '',
        'image' => '',
        'avatar' => '',
        'ui' => '{}',
        'assets' => '{}',
        'meta' => '{}',
        'notes' => '[]',
        'options' => '{}',
        'sources' => '{}',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'owned_by_id',
        'parent_id',
        'model_type',
        'start_at',
        'planned_start_at',
        'end_at',
        'planned_end_at',
        'calculated_at',
        'canceled_at',
        'closed_at',
        'embargo_at',
        'fixed_at',
        'postponed_at',
        'published_at',
        'released_at',
        'reported_at',
        'resolved_at',
        'resumed_at',
        'suspended_at',
        'gids',
        'po',
        'pg',
        'pw',
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
        'duplicate',
        'featured',
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
        'retired',
        'resolved',
        'special',
        'suspended',
        'unknown',
        'label',
        'title',
        'byline',
        'slug',
        'url',
        'description',
        'introduction',
        'content',
        'summary',
        'locale',
        'currency',
        'amount',
        'bonus',
        'bonus_rate',
        'estimate',
        'fees',
        'materials',
        'services',
        'shipping',
        'subtotal',
        'taxable',
        'tax_rate',
        'taxes',
        'total',
        'icon',
        'image',
        'avatar',
        'ui',
        'assets',
        'meta',
        'options',
        'sources',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'start_at' => 'datetime',
            'planned_start_at' => 'datetime',
            'end_at' => 'datetime',
            'planned_end_at' => 'datetime',
            'calculated_at' => 'datetime',
            'canceled_at' => 'datetime',
            'closed_at' => 'datetime',
            'embargo_at' => 'datetime',
            'fixed_at' => 'datetime',
            'postponed_at' => 'datetime',
            'published_at' => 'datetime',
            'released_at' => 'datetime',
            'reported_at' => 'datetime',
            'resolved_at' => 'datetime',
            'resumed_at' => 'datetime',
            'suspended_at' => 'datetime',
            'gids' => 'integer',
            'po' => 'integer',
            'pg' => 'integer',
            'pw' => 'integer',
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
            'duplicate' => 'boolean',
            'featured' => 'boolean',
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
            'retired' => 'boolean',
            'resolved' => 'boolean',
            'special' => 'boolean',
            'suspended' => 'boolean',
            'unknown' => 'boolean',
            'label' => 'string',
            'title' => 'string',
            'byline' => 'string',
            'slug' => 'string',
            'url' => 'string',
            'description' => 'string',
            'introduction' => 'string',
            'content' => 'string',
            'summary' => 'string',
            'locale' => 'string',
            'currency' => 'string',
            'amount' => 'float',
            'bonus' => 'float',
            'bonus_rate' => 'float',
            'commission' => 'float',
            'commission_rate' => 'float',
            'estimate' => 'float',
            'fees' => 'float',
            'materials' => 'float',
            'services' => 'float',
            'shipping' => 'float',
            'subtotal' => 'float',
            'taxable' => 'float',
            'tax_rate' => 'float',
            'taxes' => 'float',
            'total' => 'float',
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

    /**
     * The campaign of the model.
     */
    public function campaign(): HasOne
    {
        return $this->hasOne(
            Campaign::class,
            'id',
            'campaign_id'
        );
    }

    /**
     * Get the campaigns of the model.
     */
    public function campaigns(): HasMany
    {
        return $this->hasMany(
            Campaign::class,
            'campaign_id',
            'id'
        );
    }

    /**
     * The goal of the model.
     */
    public function goal(): HasOne
    {
        return $this->hasOne(
            Goal::class,
            'id',
            'goal_id'
        );
    }

    /**
     * Get the goals of the model.
     */
    public function goals(): HasMany
    {
        return $this->hasMany(
            Goal::class,
            'goal_id',
            'id'
        );
    }

    /**
     * The lead of the model.
     */
    public function lead(): HasOne
    {
        return $this->hasOne(
            Lead::class,
            'id',
            'lead_id'
        );
    }

    /**
     * Get the leads of the model.
     */
    public function leads(): HasMany
    {
        return $this->hasMany(
            Lead::class,
            'lead_id',
            'id'
        );
    }

    /**
     * The opportunity of the model.
     */
    public function opportunity(): HasOne
    {
        return $this->hasOne(
            Opportunity::class,
            'id',
            'opportunity_id'
        );
    }

    /**
     * Get the opportunities of the model.
     */
    public function opportunities(): HasMany
    {
        return $this->hasMany(
            Opportunity::class,
            'opportunity_id',
            'id'
        );
    }

    /**
     * The plan of the model.
     */
    public function plan(): HasOne
    {
        return $this->hasOne(
            Plan::class,
            'id',
            'plan_id'
        );
    }

    /**
     * Get the plans of the model.
     */
    public function plans(): HasMany
    {
        return $this->hasMany(
            Plan::class,
            'plan_id',
            'id'
        );
    }

    /**
     * The region of the model.
     */
    public function region(): HasOne
    {
        return $this->hasOne(
            Region::class,
            'id',
            'region_id'
        );
    }

    /**
     * Get the regions of the model.
     */
    public function regions(): HasMany
    {
        return $this->hasMany(
            Region::class,
            'region_id',
            'id'
        );
    }

    /**
     * The report of the model.
     */
    public function report(): HasOne
    {
        return $this->hasOne(
            Report::class,
            'id',
            'report_id'
        );
    }

    /**
     * Get the reports of the model.
     */
    public function reports(): HasMany
    {
        return $this->hasMany(
            Report::class,
            'report_id',
            'id'
        );
    }

    /**
     * The source of the model.
     */
    public function source(): HasOne
    {
        return $this->hasOne(
            Source::class,
            'id',
            'source_id'
        );
    }

    /**
     * Get the sources of the model.
     */
    public function sources(): HasMany
    {
        return $this->hasMany(
            Source::class,
            'source_id',
            'id'
        );
    }

    /**
     * The task of the model.
     */
    public function task(): HasOne
    {
        return $this->hasOne(
            Task::class,
            'id',
            'task_id'
        );
    }

    /**
     * Get the tasks of the model.
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(
            Task::class,
            'task_id',
            'id'
        );
    }

    /**
     * The teammate of the model.
     */
    public function teammate(): HasOne
    {
        return $this->hasOne(
            Teammate::class,
            'id',
            'teammate_id'
        );
    }

    /**
     * Get the teammates of the model.
     */
    public function teammates(): HasMany
    {
        return $this->hasMany(
            Teammate::class,
            'teammate_id',
            'id'
        );
    }

    /**
     * The team of the model.
     */
    public function team(): HasOne
    {
        return $this->hasOne(
            Team::class,
            'id',
            'team_id'
        );
    }

    /**
     * Get the teams of the model.
     */
    public function teams(): HasMany
    {
        return $this->hasMany(
            Team::class,
            'team_id',
            'id'
        );
    }
}
