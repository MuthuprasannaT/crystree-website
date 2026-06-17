<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use App\Models\CareerApplication;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerApplicationAdminMail;
use App\Mail\CareerApplicationUserMail;


class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::where('status', 'Active')
            ->latest()
            ->get();

        return view('career', compact('careers'));
    }


    public function apply(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'mobile'      => 'required|max:20',
            'position'    => 'required',
            'resume'      => 'required|mimes:pdf,doc,docx|max:5120',
            'description' => 'nullable'
        ]);

        $resumeName = null;

        if ($request->hasFile('resume')) {

            $resumeName = time() . '_' . $request->resume->getClientOriginalName();

            $request->resume->move(
                public_path('uploads/resumes'),
                $resumeName
            );
        }

        $application = CareerApplication::create([
            'career_id'   => $request->career_id,
            'position'    => $request->position,
            'name'        => $request->name,
            'email'       => $request->email,
            'mobile'      => $request->mobile,
            'description' => $request->description,
            'resume'      => $resumeName,
        ]);

        // Admin Mail
        Mail::to('hr@crystreesolutions.com')
            ->send(new CareerApplicationAdminMail($application));

        // Candidate Mail
        Mail::to($request->email)
            ->send(new CareerApplicationAdminMail($application));

        return redirect()->back()->with(
            'success',
            'Application submitted successfully.'
        );
    }
}
