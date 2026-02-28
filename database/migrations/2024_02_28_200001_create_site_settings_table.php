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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->nullable();
            $table->string('website_url')->nullable();
            $table->string('site_name_ar')->nullable();
            $table->string('site_name_en')->nullable();
            $table->string('email')->nullable();
            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->text('address_ar')->nullable();
            $table->text('address_en')->nullable();
            $table->integer('clients_count')->default(0);
            $table->integer('projects_count')->default(0);
            $table->integer('experience_years')->default(0);
            $table->integer('satisfaction_rate')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
