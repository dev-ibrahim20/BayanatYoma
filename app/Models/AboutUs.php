<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'our_story_ar',
        'our_vision_ar', 
        'our_mission_ar',
        'our_message_ar',
        'our_values_ar',
        'our_story_en',
        'our_vision_en',
        'our_mission_en', 
        'our_message_en',
        'our_values_en',
        'image',
        'status'
    ];
    
    protected $casts = [
        'our_values_ar' => 'array',
        'our_values_en' => 'array',
        'status' => 'boolean'
    ];
}
