<?php

/**
 * Playground
 */

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Playground\Lead\Models\Tagged;

/**
 * @see Tagged
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lead_tagged', function (Blueprint $table) {

            // Primary key

            $table->uuid('id')->primary();

            // IDs

            $table->uuid('created_by_id')->nullable()->index();
            $table->uuid('tag_id')->nullable()->index();
            $table->uuid('campaign_id')->nullable()->index();
            $table->uuid('goal_id')->nullable()->index();
            $table->uuid('lead_id')->nullable()->index();
            $table->uuid('opportunity_id')->nullable()->index();
            $table->uuid('plan_id')->nullable()->index();
            $table->uuid('region_id')->nullable()->index();
            $table->uuid('report_id')->nullable()->index();
            $table->uuid('source_id')->nullable()->index();
            $table->uuid('task_id')->nullable()->index();
            $table->uuid('team_id')->nullable()->index();
            $table->uuid('teammate_id')->nullable()->index();

            // Dates

            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_tagged');
    }
};
