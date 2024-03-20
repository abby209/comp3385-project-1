@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="mt-5">Create Property</h2>

    <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Property Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="bedrooms" class="form-label">No. of Bedrooms</label>
                <input type="number" class="form-control" id="bedrooms" name="bedrooms" placeholder="3" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="bathrooms" class="form-label">No. of Bathrooms</label>
                <input type="number" class="form-control" id="bathrooms" name="bathrooms" placeholder="2" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="15000000" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Property Type</label>
            <select class="form-select" id="type" name="type" required>
                <option value="House">House</option>
                <option value="Apartment">Apartment</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="10 Waterloo Rd" required>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Property Photo</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/png, image/jpeg, image/jpg" required>
            <small class="form-text text-muted">Only image files (e.g., jpg, png) are allowed. Files must be less than 2MB.</small>
        </div>

        <button type="submit" class="btn btn-primary">Add Property</button>
    </form>
</div>

@endsection
