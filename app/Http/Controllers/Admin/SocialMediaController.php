<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use App\Services\SocialMediaService;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{

    public function __construct(private SocialMediaService $SocialMediaService){}
    public function index()
    {
        $socialMedia = SocialMedia::first();
        return view('admin.social-media.index', compact('socialMedia'));
    }

    public function create()
    {
        return view('admin.social-media.create');
    }

    public function store(Request $request)
    {
       $this->SocialMediaService->create($request->all());

        return redirect()->route('social-media.index')->with('success', 'تم إضافة وسائل التواصل الاجتماعي بنجاح');
    }

    public function edit($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);
        return view('admin.social-media.edit', compact('socialMedia'));
    }

    public function update(Request $request, $id)
    {
        $this->SocialMediaService->update($request->all(), $id);

        return redirect()->route('social-media.index')->with('success', 'تم تحديث وسائل التواصل الاجتماعي بنجاح');
    }

    public function destroy($id)
    {
        $this->SocialMediaService->destroy($id);

        return redirect()->route('social-media.index')->with('success', 'تم حذف وسائل التواصل الاجتماعي بنجاح');
    }
}
