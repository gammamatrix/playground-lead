<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Playground\Lead\Models;

use Database\Factories\Playground\Lead\Models\TaggedFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use Playground\Models\User;
use Playground\Models\UuidModel;

/**
 * \Playground\Lead\Models\Tagged
 *
 * @property string $id
 * @property ?scalar $created_by_id
 * @property ?string $tag_id
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
 */
class Tagged extends UuidModel
{
    const UPDATED_AT = null;

    /** @use HasFactory<TaggedFactory> */
    use HasFactory;

    protected $table = 'lead_tagged';

    protected $attributes = [
        'created_by_id' => null,
        'tag_id' => null,
        'campaign_id' => null,
        'goal_id' => null,
        'lead_id' => null,
        'opportunity_id' => null,
        'plan_id' => null,
        'region_id' => null,
        'report_id' => null,
        'source_id' => null,
        'task_id' => null,
        'team_id' => null,
        'teammate_id' => null,
        'created_at' => null,
    ];

    protected $fillable = [
        'tag_id',
        'campaign_id',
        'goal_id',
        'lead_id',
        'opportunity_id',
        'plan_id',
        'region_id',
        'report_id',
        'source_id',
        'task_id',
        'team_id',
        'teammate_id',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }

    /**
     * The creator.
     *
     * @return HasOne<User, $this>
     */
    public function creator(): HasOne
    {
        return $this->hasOne(
            User::class,
            'id',
            'created_by_id'
        );
    }

    /**
     * The tag.
     *
     * @return HasOne<Tag, $this>
     */
    public function tag(): HasOne
    {
        return $this->hasOne(
            Tag::class,
            'id',
            'tag_id'
        );
    }

    /**
     * The tagged campaign.
     *
     * @return HasOne<Campaign, $this>
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
     * The tagged goal.
     *
     * @return HasOne<Goal, $this>
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
     * The tagged lead.
     *
     * @return HasOne<Lead, $this>
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
     * The tagged opportunity.
     *
     * @return HasOne<Opportunity, $this>
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
     * The tagged plan.
     *
     * @return HasOne<Plan, $this>
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
     * The tagged region.
     *
     * @return HasOne<Region, $this>
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
     * The tagged report.
     *
     * @return HasOne<Report, $this>
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
     * The tagged source.
     *
     * @return HasOne<Source, $this>
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
     * The tagged task.
     *
     * @return HasOne<Task, $this>
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
     * The tagged team.
     *
     * @return HasOne<Team, $this>
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
     * The tagged teammate.
     *
     * @return HasOne<Teammate, $this>
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
