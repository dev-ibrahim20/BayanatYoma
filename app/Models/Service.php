<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'image',
        'features_ar',
        'features_en',
        'slug',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function getFeaturesArAsStringAttribute()
    {
        if (is_array($this->features_ar)) {
            return implode(', ', $this->features_ar);
        }
        
        return '';
    }

    public function getFeaturesEnAsStringAttribute()
    {
        if (is_array($this->features_en)) {
            return implode(', ', $this->features_en);
        }
        
        return '';
    }

}
