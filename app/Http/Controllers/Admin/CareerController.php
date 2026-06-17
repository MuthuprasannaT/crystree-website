<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $careers = Career::when($search, function ($q) use ($search) {

            $q->where('job_title', 'like', "%$search%")
                ->orWhere('department', 'like', "%$search%")
                ->orWhere('location', 'like', "%$search%");
        })->latest()->paginate(10);

        return view('admin.careers.index', compact('careers', 'search'));
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'department' => 'required',
            'location' => 'required',
            'job_type' => 'required',
            'experience' => 'required',
            'salary' => 'required',
            'description' => 'required',
        ]);

        Career::create($request->all());

        return redirect()
            ->route('admin.careers.index')
            ->with('success', 'Job Created Successfully');
    }

    public function edit($id)
    {
        $career = Career::findOrFail($id);

        return view('admin.careers.edit', compact('career'));
    }

    public function update(Request $request, $id)
    {
        $career = Career::findOrFail($id);

        $career->update($request->all());

        return redirect()
            ->route('admin.careers.index')
            ->with('success', 'Job Updated Successfully');
    }

    public function destroy($id)
    {
        Career::findOrFail($id)->delete();

        return back()
            ->with('success', 'Job Deleted Successfully');
    }
}
