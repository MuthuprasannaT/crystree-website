<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerApplication;
use Illuminate\Http\Request;

class CareerApplicationController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $applications = CareerApplication::when($search, function ($query) use ($search) {

            $query->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('position', 'like', "%{$search}%");
        })
            ->latest()
            ->paginate(10);

        return view('admin.career.index', compact(
            'applications',
            'search'
        ));
    }

    public function destroy($id)
    {
        $application = CareerApplication::findOrFail($id);

        $application->delete();

        return back()->with(
            'success',
            'Application deleted successfully.'
        );
    }
}
