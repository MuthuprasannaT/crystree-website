<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Bts;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $stats = [
            'contacts' => Contact::count(),
            'testimonials' => Testimonial::count(),
            'faqs' => Faq::count(),
            'blogs' => Blog::count(),
            'bts' => Bts::count(),
            'gallery' => Gallery::count(),
        ];

        // Gather recent activities dynamically from database entries
        $activities = collect();

        Contact::latest()->take(5)->get()->each(function ($item) use ($activities) {
            $activities->push((object)[
                'type' => 'Contact Us',
                'title' => "New inquiry from {$item->fname} {$item->lname} ({$item->email})",
                'time' => $item->created_at,
                'color' => '#041A59',
                'icon' => 'envelope'
            ]);
        });

        Testimonial::latest()->take(5)->get()->each(function ($item) use ($activities) {
            $activities->push((object)[
                'type' => 'Testimonial',
                'title' => "Testimonial added by {$item->name} ({$item->designation})",
                'time' => $item->created_at,
                'color' => '#BD9424',
                'icon' => 'quote-left'
            ]);
        });

        Faq::latest()->take(5)->get()->each(function ($item) use ($activities) {
            $activities->push((object)[
                'type' => 'FAQ',
                'title' => "New FAQ added: \"{$item->question}\"",
                'time' => $item->created_at,
                'color' => '#E9C849',
                'icon' => 'question-circle'
            ]);
        });

        Blog::latest()->take(5)->get()->each(function ($item) use ($activities) {
            $activities->push((object)[
                'type' => 'Blog',
                'title' => "New Blog post: \"{$item->title}\"",
                'time' => $item->created_at,
                'color' => '#266004',
                'icon' => 'blog'
            ]);
        });

        Bts::latest()->take(5)->get()->each(function ($item) use ($activities) {
            $activities->push((object)[
                'type' => 'BTS',
                'title' => "Behind The Scenes record added: \"{$item->title}\"",
                'time' => $item->created_at,
                'color' => '#6c757d',
                'icon' => 'film'
            ]);
        });

        Gallery::latest()->take(5)->get()->each(function ($item) use ($activities) {
            $activities->push((object)[
                'type' => 'Gallery',
                'title' => "New gallery item uploaded: \"{$item->title}\"",
                'time' => $item->created_at,
                'color' => '#17a2b8',
                'icon' => 'images'
            ]);
        });

        $recentActivities = $activities->sortByDesc('time')->take(10);

        return view('admin.dashboard', compact('stats', 'recentActivities'));
    }
}
