@extends('admin.layout')

@section('title', 'Dashboard')
@section('page_header', 'Dashboard Overview')

@section('content')
<div class="row">
    <!-- Contacts Card -->
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card stat-card card-contacts">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <div>
                    <h6 class="text-muted text-uppercase mb-2">Total Contacts</h6>
                    <h2 class="display-5 font-weight-bold m-0" style="color: var(--primary-color);">{{ $stats['contacts'] }}</h2>
                </div>
                <div class="card-icon icon-contacts">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
            <div class="card-footer bg-white py-3 border-0">
                <a href="{{ route('admin.contact-us.index') }}" class="small font-weight-bold text-decoration-none" style="color: var(--primary-color);">
                    View inquiries <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Testimonials Card -->
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card stat-card card-testimonials">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <div>
                    <h6 class="text-muted text-uppercase mb-2">Testimonials</h6>
                    <h2 class="display-5 font-weight-bold m-0" style="color: var(--premium-gold);">{{ $stats['testimonials'] }}</h2>
                </div>
                <div class="card-icon icon-testimonials">
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>
            <div class="card-footer bg-white py-3 border-0">
                <a href="{{ route('admin.testimonials.index') }}" class="small font-weight-bold text-decoration-none" style="color: var(--premium-gold);">
                    Manage testimonials <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- FAQs Card -->
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card stat-card card-faqs">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <div>
                    <h6 class="text-muted text-uppercase mb-2">FAQs</h6>
                    <h2 class="display-5 font-weight-bold m-0" style="color: var(--premium-gold);">{{ $stats['faqs'] }}</h2>
                </div>
                <div class="card-icon icon-faqs">
                    <i class="fas fa-question-circle"></i>
                </div>
            </div>
            <div class="card-footer bg-white py-3 border-0">
                <a href="{{ route('admin.faqs.index') }}" class="small font-weight-bold text-decoration-none" style="color: var(--premium-gold);">
                    Manage FAQs <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Blogs Card -->
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card stat-card card-blogs">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <div>
                    <h6 class="text-muted text-uppercase mb-2">Blogs</h6>
                    <h2 class="display-5 font-weight-bold m-0" style="color: var(--technology-green);">{{ $stats['blogs'] }}</h2>
                </div>
                <div class="card-icon icon-blogs">
                    <i class="fas fa-blog"></i>
                </div>
            </div>
            <div class="card-footer bg-white py-3 border-0">
                <a href="{{ route('admin.blogs.index') }}" class="small font-weight-bold text-decoration-none" style="color: var(--technology-green);">
                    Manage blog posts <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- BTS Card -->
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card stat-card card-bts">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <div>
                    <h6 class="text-muted text-uppercase mb-2">BTS Records</h6>
                    <h2 class="display-5 font-weight-bold m-0 text-secondary">{{ $stats['bts'] }}</h2>
                </div>
                <div class="card-icon icon-bts">
                    <i class="fas fa-film"></i>
                </div>
            </div>
            <div class="card-footer bg-white py-3 border-0">
                <a href="{{ route('admin.bts.index') }}" class="small font-weight-bold text-decoration-none text-secondary">
                    Manage BTS clips <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Gallery Card -->
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card stat-card card-gallery">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <div>
                    <h6 class="text-muted text-uppercase mb-2">Gallery Items</h6>
                    <h2 class="display-5 font-weight-bold m-0 text-info">{{ $stats['gallery'] }}</h2>
                </div>
                <div class="card-icon icon-gallery">
                    <i class="fas fa-images"></i>
                </div>
            </div>
            <div class="card-footer bg-white py-3 border-0">
                <a href="{{ route('admin.gallery.index') }}" class="small font-weight-bold text-decoration-none text-info">
                    Manage gallery <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <!-- Recent Activities Timeline -->
    <div class="col-md-12 col-lg-8 mb-4">
        <div class="card border-0 shadow-sm rounded-12">
            <div class="card-header bg-white border-0 py-3">
                <h5 class="m-0 font-weight-bold text-dark"><i class="fas fa-history me-2 text-warning"></i> Recent Activities</h5>
            </div>
            <div class="card-body p-0">
                @if($recentActivities->isEmpty())
                    <div class="text-center py-5">
                        <i class="fas fa-info-circle fa-2x text-muted mb-2"></i>
                        <p class="text-muted mb-0">No recent activities recorded yet.</p>
                    </div>
                @else
                    <ul class="activity-feed mb-0">
                        @foreach($recentActivities as $activity)
                            <li class="feed-item">
                                <span class="date">{{ $activity->time->diffForHumans() }} ({{ $activity->time->format('M d, Y H:i') }})</span>
                                <div class="text">
                                    <span class="badge py-1 px-2 me-2" style="background-color: {{ $activity->color }}; color: #fff;">
                                        <i class="fas fa-{{ $activity->icon }} me-1"></i> {{ $activity->type }}
                                    </span>
                                    {!! $activity->title !!}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
