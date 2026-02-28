<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Services\SiteSettingService;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{


    public function __construct(private SiteSettingService $siteSettingService){}
    public function index()
    {
        $settings = SiteSetting::first();
        
        if (!$settings) {
            return view('admin.site-settings.index', ['settings' => null]);
        }
        
        return view('admin.site-settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.site-settings.create');
    }

    public function store(Request $request)
    {
        $this->siteSettingService->create($request->all());
        return redirect()->route('site-settings.index')->with('success', 'تم إضافة إعدادات الموقع بنجاح');
    }

    public function edit($id)
    {
        $setting = SiteSetting::findOrFail($id);
        return view('admin.site-settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $this->siteSettingService->update($request->all(), $id);
        return redirect()->route('site-settings.index')->with('success', 'تم تحديث إعدادات الموقع بنجاح');
    }

    public function destroy($id)
    {
        $this->siteSettingService->destroy($id);
        return redirect()->route('site-settings.index')->with('success', 'تم حذف إعدادات الموقع بنجاح');
    }
}
