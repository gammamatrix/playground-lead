<?php
/**
 * Playground
 */

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * \Playground\Lead\Models\Lead
 */
return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lead_leads', function (Blueprint $table) {

            // Primary key

            $table->uuid('id')->primary();

            // IDs

            $table->string('lead_type')->nullable()->index();
            $table->uuid('created_by_id')->nullable()->index();
            $table->uuid('modified_by_id')->nullable()->index();
            $table->uuid('owned_by_id')->nullable()->index();
            $table->uuid('parent_id')->nullable()->index();
            $table->uuid('campaign_id')->nullable()->index();
            $table->uuid('goal_id')->nullable()->index();
            $table->uuid('opportunity_id')->nullable()->index();
            $table->uuid('plan_id')->nullable()->index();
            $table->uuid('region_id')->nullable()->index();
            $table->uuid('report_id')->nullable()->index();
            $table->uuid('source_id')->nullable()->index();
            $table->uuid('task_id')->nullable()->index();
            $table->uuid('team_id')->nullable()->index();
            $table->uuid('teammate_id')->nullable()->index();
            $table->uuid('matrix_id')->nullable()->index();

            // Dates

            $table->timestamps();

            $table->softDeletes();

            $table->dateTime('canceled_at')->nullable();
            $table->dateTime('closed_at')->nullable()->index();
            $table->dateTime('embargo_at')->nullable();
            $table->dateTime('fixed_at')->nullable();
            $table->dateTime('planned_end_at')->nullable();
            $table->dateTime('planned_start_at')->nullable();
            $table->dateTime('postponed_at')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->dateTime('released_at')->nullable();
            $table->dateTime('resumed_at')->nullable();
            $table->dateTime('resolved_at')->nullable()->index();
            $table->dateTime('suspended_at')->nullable();
            $table->dateTime('timer_end_at')->nullable()->index();
            $table->dateTime('timer_start_at')->nullable()->index();

            // Permissions

            $table->bigInteger('gids')->default(0)->unsigned();
            $table->tinyInteger('po')->default(0)->unsigned();
            $table->tinyInteger('pg')->default(0)->unsigned();
            $table->tinyInteger('pw')->default(0)->unsigned();
            $table->boolean('only_admin')->default(0);
            $table->boolean('only_user')->default(0);
            $table->boolean('only_guest')->default(0);
            $table->boolean('allow_public')->default(0);

            // Status

            $table->bigInteger('status')->default(0)->unsigned();
            $table->bigInteger('rank')->default(0);
            $table->bigInteger('size')->default(0);

            // Matrix

            $table->json('matrix')->nullable()->default(new Expression('(JSON_OBJECT())'));
            $table->bigInteger('x')->nullable();
            $table->bigInteger('y')->nullable();
            $table->bigInteger('z')->nullable();
            $table->decimal('r', 65, 10)->nullable();
            $table->decimal('theta', 10, 6)->nullable();
            $table->decimal('rho', 10, 6)->nullable();
            $table->decimal('phi', 10, 6)->nullable();
            $table->decimal('elevation', 65, 10)->nullable();
            $table->decimal('latitude', 8, 6)->nullable();
            $table->decimal('longitude', 9, 6)->nullable();

            // Flags

            $table->boolean('active')->default(1)->index();
            $table->boolean('canceled')->default(0);
            $table->boolean('closed')->default(0);
            $table->boolean('completed')->default(0);
            $table->boolean('cron')->default(0)->index();
            $table->boolean('duplicate')->default(0);
            $table->boolean('featured')->default(0);
            $table->boolean('fixed')->default(0);
            $table->boolean('flagged')->default(0);
            $table->boolean('internal')->default(0);
            $table->boolean('locked')->default(0);
            $table->boolean('pending')->default(0);
            $table->boolean('planned')->default(0);
            $table->boolean('prioritized')->default(0);
            $table->boolean('problem')->default(0);
            $table->boolean('published')->default(0);
            $table->boolean('released')->default(0);
            $table->boolean('resolved')->default(0);
            $table->boolean('retired')->default(0);
            $table->boolean('sms')->default(0);
            $table->boolean('special')->default(0);
            $table->boolean('suspended')->default(0);
            $table->boolean('unknown')->default(0);

            // Columns

            $table->string('locale', 255)->default('');
            $table->string('label', 128)->default('');
            $table->string('title', 255)->default('');
            $table->string('byline', 255)->default('');
            $table->string('slug', 128)->nullable()->index();
            $table->string('url', 512)->default('');
            $table->string('description', 512)->default('');
            $table->string('introduction', 512)->default('');
            $table->mediumText('content')->nullable();
            $table->mediumText('summary')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('team_role')->nullable();
            $table->string('currency')->default('');
            $table->decimal('amount', 19, 4)->nullable();
            $table->decimal('bonus', 19, 4)->nullable();
            $table->decimal('bonus_rate', 8, 4)->nullable();
            $table->decimal('commission', 19, 4)->nullable();
            $table->decimal('commission_rate', 8, 4)->nullable();
            $table->decimal('estimate', 19, 4)->nullable();
            $table->decimal('fees', 19, 4)->nullable();
            $table->decimal('materials', 19, 4)->nullable();
            $table->decimal('services', 19, 4)->nullable();
            $table->decimal('shipping', 19, 4)->nullable();
            $table->decimal('subtotal', 19, 4)->nullable();
            $table->decimal('taxable', 19, 4)->nullable();
            $table->decimal('tax_rate', 8, 4)->nullable();
            $table->decimal('taxes', 19, 4)->nullable();
            $table->decimal('total', 19, 4)->nullable();

            // Ui

            $table->string('icon', 128)->default('');
            $table->string('image', 512)->default('');
            $table->string('avatar', 512)->default('');
            $table->json('ui')->nullable()->default(new Expression('(JSON_OBJECT())'));

            // JSON

            $table->json('address')->nullable()->default(new Expression('(JSON_OBJECT())'));
            $table->json('assets')->nullable()->default(new Expression('(JSON_OBJECT())'));
            $table->json('contact')->nullable()->default(new Expression('(JSON_OBJECT())'));
            $table->json('meta')->nullable()->default(new Expression('(JSON_OBJECT())'));
            $table->json('notes')->nullable()->default(new Expression('(JSON_ARRAY())'))->comment('Array of note objects');
            $table->json('options')->nullable()->default(new Expression('(JSON_OBJECT())'));
            $table->json('sources')->nullable()->default(new Expression('(JSON_OBJECT())'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_leads');
    }
};
