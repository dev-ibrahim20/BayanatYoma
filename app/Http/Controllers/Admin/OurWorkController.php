<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurWork;
use Illuminate\Http\Request;

class OurWorkController extends Controller
{
    public function index()
    {
        $ourWork = OurWork::get();
        return view('admin.our-work.index', compact('ourWork'));
    }
}
