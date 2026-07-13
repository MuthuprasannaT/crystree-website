@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Website Visitors</h4>
                </div>
                <div class="col-md-6 text-right">
                    <span class="badge bg-info">Total: {{ $visitors->total() }}</span>
                </div>
            </div>
        </div>
        
        <div class="card-body">
            <!-- Search and Filter -->
            <form method="GET" class="mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" 
                               placeholder="Search by IP, Visitor ID, Country..." 
                               value="{{ request('search') }}">
                    </div>
                    <div class="col-md-3">
                        <select name="cookie_status" class="form-control">
                            <option value="">All Cookie Status</option>
                            <option value="accepted" {{ request('cookie_status') == 'accepted' ? 'selected' : '' }}>Accepted</option>
                            <option value="rejected" {{ request('cookie_status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            <option value="pending" {{ request('cookie_status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Filter</button>
                        <a href="{{ route('admin.visitor.index') }}" class="btn btn-secondary">Reset</a>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Visitor ID</th>
                            <th>Cookie</th>
                            <th>IP</th>
                            <th>Device</th>
                            <th>Browser</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Page</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($visitors as $visitor)
                            <tr>
                                <td>{{ $visitor->id }}</td>
                                <td>{{ $visitor->visitor_id }}</td>
                                <td>
                                    @if($visitor->cookie_status == 'accepted')
                                        <span class="badge bg-success">Accepted</span>
                                    @elseif($visitor->cookie_status == 'rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @else
                                        <span class="badge bg-warning">Pending</span>
                                    @endif
                                </td>
                                <td>{{ $visitor->ip_address }}</td>
                                <td>{{ $visitor->device ?? 'N/A' }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($visitor->browser, 40) }}</td>
                                <td>{{ $visitor->country ?? 'N/A' }}</td>
                                <td>{{ $visitor->city ?? 'N/A' }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($visitor->page_url, 50) }}</td>
                                <td>{{ $visitor->created_at->format('d-m-Y h:i A') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">
                                    No visitors found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center">
                {{ $visitors->links() }}
            </div>
        </div>
    </div>
</div>
@endsection