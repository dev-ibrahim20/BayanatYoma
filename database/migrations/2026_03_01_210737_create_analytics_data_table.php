<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('analytics_data', function (Blueprint $table) {
            $table->id();
            
            // Basic metrics
            $table->date('date')->index();
            $table->integer('visitors')->default(0);
            $table->integer('visits')->default(0);
            $table->integer('page_views')->default(0);
            $table->decimal('bounce_rate', 5, 2)->default(0);
            $table->decimal('avg_session_duration', 8, 2)->default(0); // in seconds
            
            // Traffic sources
            $table->json('traffic_sources')->nullable(); // organic, direct, referral, social, etc.
            
            // Geographic data
            $table->json('countries')->nullable(); // country codes and visitor counts
            $table->json('cities')->nullable(); // cities and visitor counts
            
            // Device data
            $table->json('devices')->nullable(); // desktop, mobile, tablet
            $table->json('browsers')->nullable(); // chrome, firefox, safari, etc.
            $table->json('operating_systems')->nullable(); // windows, mac, android, etc.
            
            // Popular pages
            $table->json('top_pages')->nullable(); // page URLs and view counts
            
            // Time-based data
            $table->json('hourly_visits')->nullable(); // visits by hour of day
            $table->json('daily_visits')->nullable(); // visits by day of week
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analytics_data');
    }
};
