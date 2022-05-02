@extends('layout.admin')

@section('content')

<div class="">
    <div class="">
        <br>
        <div class="text-right">
            <a href="{{ route('admin') }}" class="btn btn-success">Back</a>
        </div>
        <div class="text-left">
            <p>View Tour</p>
        </div>
    </div>
    <div class="">
        <div class="card">
            <img src="{{ $tour->image }}" alt="">
            <div class="card-body">
                <h5>Hotel Name -> {{ $tour->hotel }}</h5>
                <p>Information</p>
                <ul>
                    <li>Category -> {{ $tour->category }}</li>
                    <li>PerPerson Sharing -> {{ $tour->per_person_sharing }}</li>
                    <li>Transport -> {{ $tour->transport }}</li>
                    <li>Single Room -> {{ $tour->single_room }}</li>
                    <li>Meals -> {{ $tour->meals }}</li>

                </ul>
            </div>
        </div>
    </div>
</div>

@endsection