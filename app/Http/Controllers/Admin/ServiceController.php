<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\ServiceModelService;
use App\Services\ServiceService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $service;

    public function __construct(private ServiceModelService $serviceModelService){}

    public function index()
    {
        $serv = Service::get();
        return view('admin.services.index', compact('serv'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $this->serviceModelService->create($request->all());
        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));
    }
    
    public function update(Request $request, $id)
    {
        $this->serviceModelService->update($id, $request->all());
        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }
    
    public function destroy($id)
    {
        $this->serviceModelService->delete($id);
        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }

}