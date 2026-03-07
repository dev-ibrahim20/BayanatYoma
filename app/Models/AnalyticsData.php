<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalyticsData extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date',
        'visitors',
        'visits',
        'page_views',
        'bounce_rate',
        'avg_session_duration',
        'traffic_sources',
        'countries',
        'cities',
        'devices',
        'browsers',
        'operating_systems',
        'top_pages',
        'hourly_visits',
        'daily_visits'
    ];
    
    protected $casts = [
        'date' => 'date',
        'traffic_sources' => 'array',
        'countries' => 'array',
        'cities' => 'array',
        'devices' => 'array',
        'browsers' => 'array',
        'operating_systems' => 'array',
        'top_pages' => 'array',
        'hourly_visits' => 'array',
        'daily_visits' => 'array',
        'bounce_rate' => 'decimal:2',
        'avg_session_duration' => 'decimal:2'
    ];
    
    // Scope for getting data within date range
    public function scopeDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('date', [$startDate, $endDate]);
    }
    
    // Scope for getting today's data
    public function scopeToday($query)
    {
        return $query->whereDate('date', today());
    }
    
    // Scope for getting this month's data
    public function scopeThisMonth($query)
    {
        return $query->whereMonth('date', now()->month)
                    ->whereYear('date', now()->year);
    }
    
    // Scope for getting this year's data
    public function scopeThisYear($query)
    {
        return $query->whereYear('date', now()->year);
    }
    
    // Get total visitors for a period
    public static function getTotalVisitors($startDate = null, $endDate = null)
    {
        $query = static::query();
        
        if ($startDate && $endDate) {
            $query->dateRange($startDate, $endDate);
        }
        
        return $query->sum('visitors');
    }
    
    // Get total visits for a period
    public static function getTotalVisits($startDate = null, $endDate = null)
    {
        $query = static::query();
        
        if ($startDate && $endDate) {
            $query->dateRange($startDate, $endDate);
        }
        
        return $query->sum('visits');
    }
    
    // Get total page views for a period
    public static function getTotalPageViews($startDate = null, $endDate = null)
    {
        $query = static::query();
        
        if ($startDate && $endDate) {
            $query->dateRange($startDate, $endDate);
        }
        
        return $query->sum('page_views');
    }
    
    // Get average bounce rate for a period
    public static function getAvgBounceRate($startDate = null, $endDate = null)
    {
        $query = static::query();
        
        if ($startDate && $endDate) {
            $query->dateRange($startDate, $endDate);
        }
        
        return $query->avg('bounce_rate');
    }
    
    // Get average session duration for a period
    public static function getAvgSessionDuration($startDate = null, $endDate = null)
    {
        $query = static::query();
        
        if ($startDate && $endDate) {
            $query->dateRange($startDate, $endDate);
        }
        
        return $query->avg('avg_session_duration');
    }
}
