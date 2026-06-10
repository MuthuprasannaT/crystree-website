<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Logo;
use App\Models\Testimonial;


class FrontendController extends Controller
{
    public function home()
    {
$logos = \App\Models\Logo::latest()
            ->get()
            ->unique('image');

return view('index', compact('logos'));
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
        $faqs = Faq::orderBy('id', 'asc')->paginate(10);

        return view('faq', compact('faqs'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::orderBy('id', 'desc')
            ->simplePaginate(8);

        return view('testimonials', compact('testimonials'));
    }

    public function contact()
    {
        return view('contact');
    }
}
