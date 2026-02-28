<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurWork;
use App\Services\OurWorkService;
use Illuminate\Http\Request;

class OurWorkController extends Controller
{
    public function __construct(private OurWorkService $ourWorkService){}
    
    public function index()
    {
        $ourWork = OurWork::get();
        return view('admin.our-work.index', compact('ourWork'));
    }


    public function create()
    {
        return view('admin.our-work.create');
    }
    
    public function store(Request $request)
    {
        $this->ourWorkService->create($request->all());
        return redirect()->route('our-work.index')->with('success', 'Our Work created successfully');
    }

    public function edit($id)
    {
        $ourWork = OurWork::findOrFail($id);
        return view('admin.our-work.edit', compact('ourWork'));
    }


    public function update($id, Request $request)
    {
        $this->ourWorkService->update($id, $request->all());
        return redirect()->route('our-work.index')->with('success', 'Our Work updated successfully');
    }

    public function destroy($id)
    {
        $this->ourWorkService->delete($id);
        return redirect()->route('our-work.index')->with('success', 'Our Work deleted successfully');
    }
}
