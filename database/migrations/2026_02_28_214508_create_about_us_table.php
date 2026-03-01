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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            
            // Arabic content
            $table->text('our_story_ar')->nullable();
            $table->text('our_vision_ar')->nullable();
            $table->text('our_mission_ar')->nullable();
            $table->text('our_message_ar')->nullable();
            $table->json('our_values_ar')->nullable();
            
            // English content
            $table->text('our_story_en')->nullable();
            $table->text('our_vision_en')->nullable();
            $table->text('our_mission_en')->nullable();
            $table->text('our_message_en')->nullable();
            $table->json('our_values_en')->nullable();
            
            // Additional fields
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
