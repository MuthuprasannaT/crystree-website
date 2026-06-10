<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\Gallery;
use App\Models\Bts;
use App\Models\Blog;




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
        $galleries = Gallery::orderBy('id', 'asc')->paginate(10);

        return view('gallery', compact('galleries'));
    }
    public function bts()
    {
        $teams = Bts::orderBy('id', 'asc')->paginate(10);

        return view('bts', compact('teams'));
    }
    public function blog()
    {
        $blogs = Blog::where('status', 1)
            ->latest()
            ->get();

        return view('blog', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $recentBlogs = Blog::where('status', 1)
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(5)
            ->get();

        return view('blog-detail', compact('blog', 'recentBlogs'));
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
