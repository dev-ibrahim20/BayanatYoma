<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'website_url',
        'site_name_ar',
        'site_name_en',
        'email',
        'description_ar',
        'description_en',
        'address_ar',
        'address_en',
        'clients_count',
        'projects_count',
        'experience_years',
        'satisfaction_rate',
    ];

    protected $casts = [
        'clients_count' => 'integer',
        'projects_count' => 'integer',
        'experience_years' => 'integer',
        'satisfaction_rate' => 'integer',
    ];
}
