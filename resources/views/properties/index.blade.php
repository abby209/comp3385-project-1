@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-5 fw-bold text-body-emphasis">Property List</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($properties as $property)
            <div class="col">
                <div class="card">
                    <img src="{{ asset('images/' . $property->photo) }}" class="card-img-top" alt="Property Photo" style="max-width: 100px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $property->title }}</h5>
                        <p class="card-text">
                            <span class="fw-bold">Location:</span> {{ $property->location }}<br>
                            <span class="fw-bold">Price:</span> {{ $property->price }}
                        </p>
                        <a href="{{ route('properties.show', $property->id)}}" class="btn btn-sm btn-info">View Property</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
