@extends('layout.index')

@section('content')

<div class=" bg-success navbar expand-lg ">
    <div class="container">
    <p class="lead "> <a href="{{ url('/') }}" class="text-white">Home </a>/ Deals </p>
    </div>
   
</div>

<div class="container">
    <div class="">
        <br>
        <div class="text-right">
            <a href="{{ url('/') }}" class="btn btn-success">Back</a>
        </div>
        <div class="text-left">
            <p>Your Next Destination</p>
        </div>
    </div>
    <div class="">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $tours->hotel }}</h5>
                <p class="lead">Tour Information</p>
                <ul>
                    <li>Category : {{ $tours->category }}</li>
                    <li>PerPerson Sharing : {{ $tours->per_person_sharing }}</li>
                    <li>Transport : {{ $tours->transport }}</li>
                    <li>Single Room : {{ $tours->single_room }}</li>
                    <li>Meals : {{ $tours->meals }}</li>
                    <a href="{{ route('bookings.create', $tours->id ) }}" class="btn btn-success">Book Now</a>
                </ul>
            </div>
        </div>
    </div>
</div>

<hr>

@endsection