<?php

namespace App\Http\Controllers;

use App\Models\WebsiteVisitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VisitorController extends Controller
{
    public function store(Request $request)
    {
        try {

            $request->validate([
                'visitor_id' => 'required|string',
                'browser' => 'nullable|string',
                'device' => 'nullable|string',
                'platform' => 'nullable|string',
                'language' => 'nullable|string',
                'screen' => 'nullable|string',
                'timezone' => 'nullable|string',
                'page' => 'nullable|string',
                'referrer' => 'nullable|string',
                'cookie_status' => 'nullable|string',
            ]);

            $country = null;
            $city = null;

            try {

                $response = Http::timeout(5)
                    ->get("http://ip-api.com/json/" . $request->ip());

                if ($response->successful()) {

                    $location = $response->json();

                    $country = $location['country'] ?? null;
                    $city = $location['city'] ?? null;
                }
            } catch (\Exception $e) {
                // Ignore location lookup errors
            }

            WebsiteVisitor::updateOrCreate(

                [
                    'visitor_id' => $request->visitor_id
                ],

                [
                    'ip_address' => $request->ip(),

                    'browser' => $request->browser,

                    'device' => $request->device,

                    'platform' => $request->platform,

                    'language' => $request->language,

                    'screen_resolution' => $request->screen,

                    'timezone' => $request->timezone,

                    'country' => $country,

                    'city' => $city,

                    'page_url' => $request->page,

                    'referrer' => $request->referrer,

                    'cookie_status' => $request->cookie_status ?? 'pending',
                ]

            );

            return response()->json([
                'status' => true,
                'message' => 'Visitor saved successfully.'
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function index(Request $request)
    {
        // REMOVE the dd() line - it's stopping execution!
        // dd($visitors); // <-- DELETE THIS LINE

        // Optimize query with filters and proper pagination
        $query = WebsiteVisitor::query();

        // Add filters if present
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('visitor_id', 'LIKE', "%{$search}%")
                    ->orWhere('ip_address', 'LIKE', "%{$search}%")
                    ->orWhere('country', 'LIKE', "%{$search}%")
                    ->orWhere('city', 'LIKE', "%{$search}%")
                    ->orWhere('device', 'LIKE', "%{$search}%");
            });
        }

        // Filter by cookie status
        if ($request->has('cookie_status') && $request->cookie_status != '') {
            $query->where('cookie_status', $request->cookie_status);
        }

        // Filter by date range
        if ($request->has('from_date') && $request->has('to_date')) {
            $query->whereBetween('created_at', [
                $request->from_date . ' 00:00:00',
                $request->to_date . ' 23:59:59'
            ]);
        }

        // Get visitors with pagination (20 per page)
        $visitors = $query->latest()
            ->select(
                'id',
                'visitor_id',
                'cookie_status',
                'ip_address',
                'device',
                'browser',
                'country',
                'city',
                'page_url',
                'created_at'
            )
            ->paginate(20)
            ->appends($request->query());

        return view('admin.visitor.index', compact('visitors'));
    }
}
