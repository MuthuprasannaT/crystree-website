@extends('admin.layout')

@section('title', 'View Submission')
@section('page_header', 'Contact Submission Details')

@section('content')
<div class="card border-0 shadow-sm rounded-12 p-4">
    <div class="card-body p-0">
        <h5 class="mb-4 text-dark font-weight-bold"><i class="fas fa-info-circle me-2 text-primary"></i> General Information</h5>
        
        <div class="row mb-3">
            <div class="col-md-3 text-muted">First Name:</div>
            <div class="col-md-9 font-weight-bold text-dark">{{ $contact->fname }}</div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-3 text-muted">Last Name:</div>
            <div class="col-md-9 font-weight-bold text-dark">{{ $contact->lname }}</div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-3 text-muted">Email Address:</div>
            <div class="col-md-9 font-weight-bold"><a href="mailto:{{ $contact->email }}" class="text-decoration-none" style="color: var(--primary-color);">{{ $contact->email }}</a></div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-3 text-muted">Phone Number:</div>
            <div class="col-md-9 font-weight-bold text-dark">{{ $contact->phone }}</div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-3 text-muted">Submitted Date:</div>
            <div class="col-md-9 text-secondary">{{ $contact->created_at->format('M d, Y H:i') }} ({{ $contact->created_at->diffForHumans() }})</div>
        </div>
        
        <hr class="my-4">
        
        <h5 class="mb-3 text-dark font-weight-bold"><i class="fas fa-align-left me-2 text-primary"></i> Message</h5>
        <div class="p-3 bg-light rounded text-dark" style="white-space: pre-wrap; font-size: 1.05rem; line-height: 1.6; border: 1px solid #eef2f6;">{{ $contact->message }}</div>
        
        <div class="d-flex gap-2 mt-4">
            <a href="{{ route('admin.contact-us.index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-1"></i> Back to List
            </a>
        </div>
    </div>
</div>
@endsection
