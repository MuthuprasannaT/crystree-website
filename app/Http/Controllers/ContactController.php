<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminContactMail;
use App\Mail\UserThankYouMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname'   => 'required|string|max:255',
            'lname'   => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required',
        ], [
            'g-recaptcha-response.required' => 'Please complete the reCAPTCHA.',
        ]);

        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret'   => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]
        );

        $captcha = $response->json();

        if (!($captcha['success'] ?? false)) {
            return back()
                ->withErrors([
                    'captcha' => 'reCAPTCHA verification failed.'
                ])
                ->withInput();
        }

        $validated = $request->only([
            'fname',
            'lname',
            'email',
            'phone',
            'message'
        ]);

        Contact::create($validated);

        Mail::to('leads@crystreesolutions.com')
            ->send(new AdminContactMail($validated));

        Mail::to($validated['email'])
            ->send(new UserThankYouMail($validated));

        return redirect()->back()
            ->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
