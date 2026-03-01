<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Services\AboutUsService;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function __construct(private AboutUsService $aboutUsService){}

    public function index()
    {
        $aboutUs = AboutUs::first();
        return view('admin.about-us.index', compact('aboutUs'));
    }

    public function create()
    {
        return view('admin.about-us.create');
    }

    public function store(Request $request)
    {
        $this->aboutUsService->create($request->all());

        return redirect()->route('about-us.index')->with('success', 'تم إضافة صفحة من نحن بنجاح');
    }

    public function show(string $id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        return view('admin.about-us.show', compact('aboutUs'));
    }

    public function edit(string $id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        return view('admin.about-us.edit', compact('aboutUs'));
    }

    public function update(Request $request, string $id)
    {
        $this->aboutUsService->update($request->all(), $id);

        return redirect()->route('about-us.index')->with('success', 'تم تحديث صفحة من نحن بنجاح');
    }

    public function destroy(string $id)
    {
        $this->aboutUsService->destroy($id);

        return redirect()->route('about-us.index')->with('success', 'تم حذف صفحة من نحن بنجاح');
    }
}
