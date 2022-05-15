@extends('layout.admin')

@section('content')
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
                <div class="card-body">
                    <h5 class="card-title">Hotel {{ $tours->hotel }}</h5>
                    <p class="lead text-center">Tour Information</p>
                    <ul>
                        <li>Category : {{ $tours->category }}</li>
                        <br>
                        <li>Location: {{ $tours->location }}</li>
                        <br>
                        <li>PerPerson Sharing : {{ $tours->per_person_sharing }}</li>
                        <br>
                        <li>Transport : {{ $tours->transport }}</li>
                        <br>
                        <li>Single Room : {{ $tours->single_room }}</li>
                        <br>
                        <li>Meals : {{ $tours->meals }}</li>
                    </ul>
                    <div class="">
                        <p>Additional Info</p>
                        <p>{{ $tours->additional_info }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection