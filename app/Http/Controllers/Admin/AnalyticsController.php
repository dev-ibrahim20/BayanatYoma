<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnalyticsData;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function index()
    {
        // Get today's data
        $todayData = AnalyticsData::today()->first();
        
        // Get this month's data
        $thisMonthData = AnalyticsData::thisMonth()->get();
        
        // Get this year's data
        $thisYearData = AnalyticsData::thisYear()->get();
        
        // Get last 30 days data for charts
        $last30Days = AnalyticsData::dateRange(
            Carbon::now()->subDays(29)->toDateString(),
            Carbon::now()->toDateString()
        )->orderBy('date')->get();
        
        // Calculate totals
        $totalVisitors = AnalyticsData::getTotalVisitors();
        $totalVisits = AnalyticsData::getTotalVisits();
        $totalPageViews = AnalyticsData::getTotalPageViews();
        $avgBounceRate = AnalyticsData::getAvgBounceRate();
        $avgSessionDuration = AnalyticsData::getAvgSessionDuration();
        
        // Get traffic sources data
        $trafficSources = $this->getAggregatedData($thisYearData, 'traffic_sources');
        
        // Get countries data
        $countries = $this->getAggregatedData($thisYearData, 'countries');
        
        // Get devices data
        $devices = $this->getAggregatedData($thisYearData, 'devices');
        
        // Get browsers data
        $browsers = $this->getAggregatedData($thisYearData, 'browsers');
        
        // Get top pages data
        $topPages = $this->getAggregatedData($thisYearData, 'top_pages');
        
        return view('admin.analytics.index', compact(
            'todayData',
            'thisMonthData',
            'thisYearData',
            'last30Days',
            'totalVisitors',
            'totalVisits',
            'totalPageViews',
            'avgBounceRate',
            'avgSessionDuration',
            'trafficSources',
            'countries',
            'devices',
            'browsers',
            'topPages'
        ));
    }
    
    public function show(Request $request)
    {
        $startDate = $request->get('start_date', Carbon::now()->subDays(29)->toDateString());
        $endDate = $request->get('end_date', Carbon::now()->toDateString());
        
        $analyticsData = AnalyticsData::dateRange($startDate, $endDate)
            ->orderBy('date')
            ->get();
        
        // Calculate totals for the selected period
        $totalVisitors = $analyticsData->sum('visitors');
        $totalVisits = $analyticsData->sum('visits');
        $totalPageViews = $analyticsData->sum('page_views');
        $avgBounceRate = $analyticsData->avg('bounce_rate');
        $avgSessionDuration = $analyticsData->avg('avg_session_duration');
        
        // Get aggregated data
        $trafficSources = $this->getAggregatedData($analyticsData, 'traffic_sources');
        $countries = $this->getAggregatedData($analyticsData, 'countries');
        $devices = $this->getAggregatedData($analyticsData, 'devices');
        $browsers = $this->getAggregatedData($analyticsData, 'browsers');
        $topPages = $this->getAggregatedData($analyticsData, 'top_pages');
        
        return view('admin.analytics.show', compact(
            'analyticsData',
            'startDate',
            'endDate',
            'totalVisitors',
            'totalVisits',
            'totalPageViews',
            'avgBounceRate',
            'avgSessionDuration',
            'trafficSources',
            'countries',
            'devices',
            'browsers',
            'topPages'
        ));
    }
    
    private function getAggregatedData($data, $field)
    {
        $aggregated = [];
        
        foreach ($data as $item) {
            if ($item->$field && is_array($item->$field)) {
                foreach ($item->$field as $key => $value) {
                    if (isset($aggregated[$key])) {
                        $aggregated[$key] += is_numeric($value) ? $value : 1;
                    } else {
                        $aggregated[$key] = is_numeric($value) ? $value : 1;
                    }
                }
            }
        }
        
        // Sort by value (descending)
        arsort($aggregated);
        
        return $aggregated;
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'date' => 'required|date',
            'visitors' => 'required|integer|min:0',
            'visits' => 'required|integer|min:0',
            'page_views' => 'required|integer|min:0',
            'bounce_rate' => 'nullable|numeric|min:0|max:100',
            'avg_session_duration' => 'nullable|numeric|min:0',
            'traffic_sources' => 'nullable|array',
            'countries' => 'nullable|array',
            'cities' => 'nullable|array',
            'devices' => 'nullable|array',
            'browsers' => 'nullable|array',
            'operating_systems' => 'nullable|array',
            'top_pages' => 'nullable|array',
            'hourly_visits' => 'nullable|array',
            'daily_visits' => 'nullable|array',
        ]);
        
        // Check if data for this date already exists
        $existingData = AnalyticsData::where('date', $data['date'])->first();
        
        if ($existingData) {
            $existingData->update($data);
        } else {
            AnalyticsData::create($data);
        }
        
        return redirect()->route('analytics.index')
            ->with('success', 'تم حفظ بيانات التحليلات بنجاح');
    }
    
    public function create()
    {
        return view('admin.analytics.create');
    }
    
    public function edit($id)
    {
        $analyticsData = AnalyticsData::findOrFail($id);
        return view('admin.analytics.edit', compact('analyticsData'));
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'date' => 'required|date',
            'visitors' => 'required|integer|min:0',
            'visits' => 'required|integer|min:0',
            'page_views' => 'required|integer|min:0',
            'bounce_rate' => 'nullable|numeric|min:0|max:100',
            'avg_session_duration' => 'nullable|numeric|min:0',
            'traffic_sources' => 'nullable|array',
            'countries' => 'nullable|array',
            'cities' => 'nullable|array',
            'devices' => 'nullable|array',
            'browsers' => 'nullable|array',
            'operating_systems' => 'nullable|array',
            'top_pages' => 'nullable|array',
            'hourly_visits' => 'nullable|array',
            'daily_visits' => 'nullable|array',
        ]);
        
        $analyticsData = AnalyticsData::findOrFail($id);
        $analyticsData->update($data);
        
        return redirect()->route('analytics.index')
            ->with('success', 'تم تحديث بيانات التحليلات بنجاح');
    }
    
    public function destroy($id)
    {
        $analyticsData = AnalyticsData::findOrFail($id);
        $analyticsData->delete();
        
        return redirect()->route('analytics.index')
            ->with('success', 'تم حذف بيانات التحليلات بنجاح');
    }
}
