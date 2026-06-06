<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bts;
use Illuminate\Http\Request;

class BtsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Bts::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $btsRecords = $query->latest()->paginate(10)->withQueryString();

        return view('admin.bts.index', compact('btsRecords', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/bts'), $filename);
            $validated['image'] = 'uploads/bts/' . $filename;
        }

        Bts::create($validated);

        return redirect()->route('admin.bts.index')
            ->with('success', 'BTS record created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bts $bt)
    {
        // Route model binding automatically binds 'bt' since route uses singular resource name 'bts' which maps to 'bt' as the model variable
        return view('admin.bts.edit', ['bts' => $bt]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bts $bt)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($bt->image && file_exists(public_path($bt->image))) {
                @unlink(public_path($bt->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/bts'), $filename);
            $validated['image'] = 'uploads/bts/' . $filename;
        }

        $bt->update($validated);

        return redirect()->route('admin.bts.index')
            ->with('success', 'BTS record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bts $bt)
    {
        $bt->delete();

        return redirect()->route('admin.bts.index')
            ->with('success', 'BTS record deleted successfully.');
    }
}
