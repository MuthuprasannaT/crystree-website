<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminContactMail;
use App\Mail\UserThankYouMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname'   => 'required|string|max:255',
            'lname'   => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        // Send Mail To Admin
        Mail::to('gopalakrishnanhky@gmail.com')
            ->send(new AdminContactMail($validated));

        // Send Thank You Mail To User
        Mail::to($validated['email'])
            ->send(new UserThankYouMail($validated));

        return redirect()->back()
            ->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
