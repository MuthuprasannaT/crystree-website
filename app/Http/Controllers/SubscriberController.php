<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\NewBlogNotification;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Mail\GalleryNotification;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendBlogToSubscribers;



class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255|unique:subscribers,email',
        ]);

        Subscriber::create([
            'email' => $request->email,
        ]);

        return back()->with('success', 'Thank you for subscribing!');
    }

    public function blogIndex()
    {
        $subscribers = Subscriber::latest()->paginate(20);

        $blogs = Blog::where('status', 1)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('admin.Subscribers.index', compact(
            'subscribers',
            'blogs'
        ));
    }

    public function sendBlog(Request $request)
    {
        $request->validate([
            'blog_id' => 'required|exists:blogs,id',
        ]);

        $blog = Blog::findOrFail($request->blog_id);
        $subscribers = Subscriber::where('status', 1)->get();

        foreach ($subscribers as $subscriber) {
            dispatch(new SendBlogToSubscribers($blog, $subscriber));
        }

        return redirect()->back()
            ->with('success', 'Blog is being sent to all subscribers.');
    }

    public function galleryIndex()
    {
        $galleries = Gallery::latest()->get();

        $subscribers = Subscriber::latest()->get();

        return view(
            'admin.Subscribers.gallery',
            compact('galleries', 'subscribers')
        );
    }
    public function sendGallery(Request $request)
    {
        $request->validate([
            'gallery_id' => 'required|exists:galleries,id'
        ]);

        $gallery = Gallery::findOrFail($request->gallery_id);

        $subscribers = Subscriber::where('status', 1)->get();

        foreach ($subscribers as $subscriber) {

            Mail::to($subscriber->email)
                ->queue(new GalleryNotification($gallery));
        }

        return back()->with('success', 'Gallery sent successfully.');
    }
}
