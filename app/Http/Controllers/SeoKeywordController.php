<?php

namespace App\Http\Controllers;

use App\Models\SeoKeyword;

class SeoKeywordController extends Controller
{
    public function footer()
    {
        $categories = SeoKeyword::all()
            ->groupBy('category');

        return view('welcome', compact('categories'));
    }
}