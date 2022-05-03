@extends('layout.index')

@section('content')

<div class=" bg-success navbar expand-lg ">
    <div class="container">
    <p class="lead "> <a href="{{ url('/') }}" class="text-white">Home </a>/ {{ $category }}</p>
    </div>
   
</div>

<div class="container">
    <div class="row">
        @foreach($tours as $tour)
        <div class="col-lg">
            <div class="card">
                <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top" style=" height: 200px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $tour->hotel }}</h5>
                            <small class="card-text"> From - {{ $tour->single_room }}</small>
                                <br> <br>
                            <a href="{{ route('tours.show', $tour->id) }}" class="btn btn-success">View Details</a>
                    </div>
            </div>
        </div>
        @endforeach
    
    </div>
</div>

<hr>
@endsection