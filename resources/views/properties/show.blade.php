@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-5 fw-bold text-body-emphasis">{{ $property->title }}</h1>

    <div class="row">
        <div class="col-md-8">
            <img src="{{ asset('storage/' . $property->photo) }}" class="img-fluid mb-3" alt="Property Photo">
            <p class="lead">{!! $property->description !!}</p>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Property Details</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="fw-bold">Price:</span>
                            <span class="badge bg-primary rounded-pill">{{ $property->price }}</span>
                        </li>
                        @if ($property->type)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Type:</span>
                                <span class="badge bg-warning rounded-pill">{{ $property->type }}</span>
                            </li>
                        @endif
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="fw-bold">Bedrooms:</span>
                            <span class="d-flex align-items-center">
                                <i class="bi bi-bed me-2"></i>
                                {{ $property->bedrooms }}
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="fw-bold">Bathrooms:</span>
                            <span class="d-flex align-items-center">
                                <i class="bi bi-bathtub me-2"></i>
                                {{ $property->bathrooms }}
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="fw-bold">Location:</span>
                            <span class="d-flex align-items-center">
                                <i class="bi bi-geo-alt me-2"></i>
                                {{ $property->location }}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="btn btn-primary w-100">Email Realtor</a>
        </div>
    </div>
</div>
@endsection
