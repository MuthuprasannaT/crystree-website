<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function index()
    {
        $logos = Logo::latest()->get();
        return view('admin.logos.index', compact('logos'));
    }

    public function create()
    {
        return view('admin.logos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image'
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(
            public_path('uploads/logos'),
            $imageName
        );

        Logo::create([
            'title' => $request->title,
            'image' => $imageName
        ]);

        return redirect()
            ->route('admin.logos.index')
            ->with('success', 'Logo Added Successfully');
    }

    public function edit(Logo $logo)
    {
        return view('admin.logos.edit', compact('logo'));
    }

    public function update(Request $request, Logo $logo)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $imageName = $logo->image;

        if ($request->hasFile('image')) {

            if (file_exists(public_path('uploads/logos/'.$logo->image))) {
                unlink(public_path('uploads/logos/'.$logo->image));
            }

            $imageName = time().'.'.$request->image->extension();

            $request->image->move(
                public_path('uploads/logos'),
                $imageName
            );
        }

        $logo->update([
            'title' => $request->title,
            'image' => $imageName
        ]);

        return redirect()
            ->route('admin.logos.index')
            ->with('success', 'Logo Updated Successfully');
    }

    public function destroy(Logo $logo)
    {
        if (file_exists(public_path('uploads/logos/'.$logo->image))) {
            unlink(public_path('uploads/logos/'.$logo->image));
        }

        $logo->delete();

        return redirect()
            ->route('admin.logos.index')
            ->with('success', 'Logo Deleted Successfully');
    }
}