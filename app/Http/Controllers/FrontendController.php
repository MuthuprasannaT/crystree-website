<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        return view('products');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function bts()
    {
        return view('bts');
    }

    public function blog()
    {
        return view('blog');
    }

    public function faq()
    {
        return view('faq');
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function contact()
    {
        return view('contact');
    }
}