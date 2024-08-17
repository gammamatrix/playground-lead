<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Playground\Lead\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Playground\Models\Model;

/**
 * \Playground\Lead\Models\Report
 *
 * @property string $id
 * @property ?string $report_type
 * @property ?scalar $created_by_id
 * @property ?scalar $modified_by_id
 * @property ?scalar $owned_by_id
 * @property ?string $parent_id
 * @property ?string $campaign_id
 * @property ?string $goal_id
 * @property ?string $lead_id
 * @property ?string $opportunity_id
 * @property ?string $plan_id
 * @property ?string $region_id
 * @property ?string $source_id
 * @property ?string $task_id
 * @property ?string $team_id
 * @property ?string $teammate_id
 * @property ?string $matrix_id
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 * @property ?Carbon $deleted_at
 * @property ?Carbon $canceled_at
 * @property ?Carbon $closed_at
 * @property ?Carbon $embargo_at
 * @property ?Carbon $fixed_at
 * @property ?Carbon $planned_end_at
 * @property ?Carbon $planned_start_at
 * @property ?Carbon $postponed_at
 * @property ?Carbon $published_at
 * @property ?Carbon $released_at
 * @property ?Carbon $resumed_at
 * @property ?Carbon $resolved_at
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
 * @property bool $cron
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
 * @property bool $resolved
 * @property bool $retired
 * @property bool $sms
 * @property bool $special
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
 * @property ?string $email
 * @property ?string $phone
 * @property ?string $team_role
 * @property string $currency
 * @property ?double $amount
 * @property ?double $bonus
 * @property ?double $bonus_rate
 * @property ?double $commission
 * @property ?double $commission_rate
 * @property ?double $estimate
 * @property ?double $fees
 * @property ?double $materials
 * @property ?double $services
 * @property ?double $shipping
 * @property ?double $subtotal
 * @property ?double $taxable
 * @property ?double $tax_rate
 * @property ?double $taxes
 * @property ?double $total
 * @property string $icon
 * @property string $image
 * @property string $avatar
 * @property ?array $ui
 * @property ?array $address
 * @property ?array $assets
 * @property ?array $contact
 * @property ?array $meta
 * @property ?array $notes
 * @property ?array $options
 * @property ?array $sources
 */
class Report extends Model
{
    protected $table = 'lead_reports';

    /**
     * The default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'report_type' => null,
        'created_by_id' => null,
        'modified_by_id' => null,
        'owned_by_id' => null,
        'parent_id' => null,
        'campaign_id' => null,
        'goal_id' => null,
        'lead_id' => null,
        'opportunity_id' => null,
        'plan_id' => null,
        'region_id' => null,
        'source_id' => null,
        'task_id' => null,
        'team_id' => null,
        'teammate_id' => null,
        'matrix_id' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
        'canceled_at' => null,
        'closed_at' => null,
        'embargo_at' => null,
        'fixed_at' => null,
        'planned_end_at' => null,
        'planned_start_at' => null,
        'postponed_at' => null,
        'published_at' => null,
        'released_at' => null,
        'resumed_at' => null,
        'resolved_at' => null,
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
        'matrix' => '{}',
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
        'resolved' => false,
        'retired' => false,
        'sms' => false,
        'special' => false,
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
        'email' => null,
        'phone' => null,
        'team_role' => null,
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
        'address' => '{}',
        'assets' => '{}',
        'contact' => '{}',
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
        'report_type',
        'owned_by_id',
        'parent_id',
        'campaign_id',
        'goal_id',
        'lead_id',
        'opportunity_id',
        'plan_id',
        'region_id',
        'source_id',
        'task_id',
        'team_id',
        'teammate_id',
        'matrix_id',
        'canceled_at',
        'closed_at',
        'embargo_at',
        'fixed_at',
        'planned_end_at',
        'planned_start_at',
        'postponed_at',
        'published_at',
        'released_at',
        'resumed_at',
        'resolved_at',
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
        'resolved',
        'retired',
        'sms',
        'special',
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
        'email',
        'phone',
        'team_role',
        'currency',
        'amount',
        'bonus',
        'bonus_rate',
        'commission',
        'commission_rate',
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
        'address',
        'assets',
        'contact',
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
            'report_type' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'canceled_at' => 'datetime',
            'closed_at' => 'datetime',
            'embargo_at' => 'datetime',
            'fixed_at' => 'datetime',
            'planned_end_at' => 'datetime',
            'planned_start_at' => 'datetime',
            'postponed_at' => 'datetime',
            'published_at' => 'datetime',
            'released_at' => 'datetime',
            'resumed_at' => 'datetime',
            'resolved_at' => 'datetime',
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
            'resolved' => 'boolean',
            'retired' => 'boolean',
            'sms' => 'boolean',
            'special' => 'boolean',
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
            'email' => 'string',
            'phone' => 'string',
            'team_role' => 'string',
            'currency' => 'string',
            'amount' => 'decimal',
            'bonus' => 'decimal',
            'bonus_rate' => 'decimal',
            'commission' => 'decimal',
            'commission_rate' => 'decimal',
            'estimate' => 'decimal',
            'fees' => 'decimal',
            'materials' => 'decimal',
            'services' => 'decimal',
            'shipping' => 'decimal',
            'subtotal' => 'decimal',
            'taxable' => 'decimal',
            'tax_rate' => 'decimal',
            'taxes' => 'decimal',
            'total' => 'decimal',
            'icon' => 'string',
            'image' => 'string',
            'avatar' => 'string',
            'ui' => 'array',
            'address' => 'array',
            'assets' => 'array',
            'contact' => 'array',
            'meta' => 'array',
            'notes' => 'array',
            'options' => 'array',
            'sources' => 'array',
        ];
    }

    /**
     * The campaign of the model.
     *
     * @return HasOne<Campaign>
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
     * The goal of the model.
     *
     * @return HasOne<Goal>
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
     * The lead of the model.
     *
     * @return HasOne<Lead>
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
     * The opportunity of the model.
     *
     * @return HasOne<Opportunity>
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
     * The plan of the model.
     *
     * @return HasOne<Plan>
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
     * The region of the model.
     *
     * @return HasOne<Region>
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
     * The source of the model.
     *
     * @return HasOne<Source>
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
     * The task of the model.
     *
     * @return HasOne<Task>
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
     * The team of the model.
     *
     * @return HasOne<Team>
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
     * The teammate of the model.
     *
     * @return HasOne<Teammate>
     */
    public function teammate(): HasOne
    {
        return $this->hasOne(
            Teammate::class,
            'id',
            'teammate_id'
        );
    }
}
