@extends('layout.index')

@section('content')

<div class=" bg-primar navbar expand-lg ">
    <div class="container">
    <p class="lead text-white"> <a href="{{ url('/') }}" class="text-white">Home </a>/ Deals </p>
    </div>
   
</div>

<div class="container">
    <div class="">
        <br>
        <div class="text-right">
            <a href="{{ route('tours.index') }}" class="btn btn-primar">Back</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
        <img src="{{ asset('/storage/'.$tours->image) }}" alt="" class="img-fluid" >
        </div>
        <div class="col-lg-6 col-sm-12">
        <div class="card">
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title">Hotel: {{ $tours->hotel }}</h5>
                <p class="lead">Tour Information</p>
                <ul>
                    <li>Category : {{ $tours->category }}</li>
                    <li>Location: {{ $tours->location }}</li>
                    <li>PerPerson Sharing : {{ $tours->per_person_sharing }}</li>
                    <li>Transport : {{ $tours->transport }}</li>
                    <li>Single Room : {{ $tours->single_room }}</li>
                    <li>Meals : {{ $tours->meals }}</li>
                </ul>
            </div>
        </div>
    </div>
        </div>
    </div>
    
</div>

<hr>

@endsection