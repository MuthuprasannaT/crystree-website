<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use App\Models\CareerApplication;


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
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'position' => 'required',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $resumeName = null;

        if ($request->hasFile('resume')) {

            $resumeName = time() . '_' . $request->resume->getClientOriginalName();

            $request->resume->move(
                public_path('uploads/resumes'),
                $resumeName
            );
        }

        CareerApplication::create([
            'career_id' => $request->career_id,
            'position' => $request->position,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'description' => $request->description,
            'resume' => $resumeName,
        ]);

        return back()->with(
            'success',
            'Application submitted successfully.'
        );
    }
}
