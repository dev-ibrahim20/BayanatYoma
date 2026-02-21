<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch(Request $request, $locale)
    {
        if (in_array($locale, ['ar', 'en'])) {
            Session::put('locale', $locale);
        }
        
        // Get the previous URL to redirect back to the same page
        $previousUrl = url()->previous();
        if ($previousUrl) {
            return redirect($previousUrl);
        }
        
        return redirect()->back();
    }
}
