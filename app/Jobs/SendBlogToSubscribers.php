<?php

namespace App\Jobs;

use App\Models\Blog;
use App\Models\Subscriber;
use App\Mail\NewBlogNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendBlogToSubscribers implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $blog;
    public $subscriber;

    public function __construct(Blog $blog, Subscriber $subscriber)
    {
        $this->blog = $blog;
        $this->subscriber = $subscriber;
    }

    public function handle()
    {
        Mail::to($this->subscriber->email)
            ->send(new NewBlogNotification($this->blog));
    }
}