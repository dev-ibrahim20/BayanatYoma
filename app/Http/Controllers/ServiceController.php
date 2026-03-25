<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\OurWork;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display the specified service.
     */
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->where('status', 1)->firstOrFail();
        $portfolioImages = OurWork::where('is_active', true)->orderBy('created_at', 'desc')->get();
        return view('services-show', compact('service', 'portfolioImages'));
    }
}
