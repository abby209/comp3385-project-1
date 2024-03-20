@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-5 fw-bold text-body-emphasis text-center">About Us</h1>
    <div class="col-md-4 mx-auto">
        <img src="{{ asset('images/realtor.jpg') }}" class="img-fluid mb-3" alt="Realtor Image">
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <p class="lead">Welcome to our property realtor page! We are a team of experienced real estate agents dedicated to helping you find your dream property. Whether you're looking for a cozy apartment or a spacious house, we've got you covered.</p>
            <p class="lead">Our team consists of highly skilled professionals who are committed to providing exceptional service to our clients. We understand that buying or selling a property can be a daunting task, but with our expertise and guidance, we'll make the process as smooth as possible for you.</p>
            <p class="lead">Feel free to browse through our listings and get in touch with us if you have any questions or would like to schedule a viewing. We're here to help you every step of the way!</p>
            <p class="lead">Thank you for considering us as your trusted property realtor. We look forward to assisting you in finding your perfect home.</p>
        </div>
    </div>
</div>
@endsection
