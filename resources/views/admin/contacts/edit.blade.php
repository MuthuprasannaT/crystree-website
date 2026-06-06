@extends('admin.layout')

@section('title', 'Edit Contact')
@section('page_header', 'Edit Contact Inquiry')

@section('content')
<div class="card border-0 shadow-sm rounded-12 p-4">
    <div class="card-body p-0">
        <form action="{{ route('admin.contact-us.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="first_name" class="form-label font-weight-bold">First Name</label>
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name', $contact->first_name) }}" required>
                    @error('first_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="last_name" class="form-label font-weight-bold">Last Name</label>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name', $contact->last_name) }}" required>
                    @error('last_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="service" class="form-label font-weight-bold">Service</label>
                <input type="text" class="form-control @error('service') is-invalid @enderror" id="service" name="service" value="{{ old('service', $contact->service) }}" required>
                @error('service')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="enquiry" class="form-label font-weight-bold">Enquiry Description</label>
                <textarea class="form-control @error('enquiry') is-invalid @enderror" id="enquiry" name="enquiry" rows="6" required>{{ old('enquiry', $contact->enquiry) }}</textarea>
                @error('enquiry')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary-custom">
                    <i class="fas fa-save me-1"></i> Update Contact
                </button>
                <a href="{{ route('admin.contact-us.index') }}" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
