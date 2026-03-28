<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title_ar',
        'title_en',
        'client_name',
        'project_date',
        'is_active',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
