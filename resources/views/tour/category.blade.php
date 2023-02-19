@extends('layout.new')
<style>
    .h-4 {
        height: 200px;
        object-fit: cover;
    }
    .link-secondary {
        color: #ffffff !important;
        background-color: #e3a532;
        font-size: x-small;
        margin: 1px;
        text-decoration: none;
    }
</style>
@section('content')
<div class=" bg-primar navbar expand-lg ">
    <div class="container">
    <h5 class=" text-white"> <a href="{{ url('/') }}" class="text-white" >Home </a>> {{ $category  }} </h5>
    </div>
</div>
<br>
<div class="container pt-3">
    <div class="row">
        @forelse($tours as $safari)
        @if($safari->published == 1)
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <img src="{{ asset('/storage/'. $safari->image) }}" alt="{{ $safari->hotel }}" class="card-img-top h-4">
                <div class="card-body">
                    <p class="card-text pri">{{ $safari->hotel }}</p>
                    <small class="text-muted"><i class="bi bi-geo-alt">{{ $safari->location }}</i></small>
                    <hr />
                    <p class="card-text">
                        From <b>{{ $safari->single_room}}</b> per person
                    </p>
                    <div class="d-flex justify-content-between">
                      <a class="btn btn-success" href="{{ route('addtour.show', $safari->id) }}"><i class="bi bi-eye-fill xl"></i
                                    > explore</a>  
                    
                    <a
                                        href="{{ route('bookings.create', $safari->hotel ) }}"
                                        class="btn btn-primar"
                                    >
                                        book now
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                    </div>
                </div>
            </div>
            <br>
        </div>
        @endif
        @empty 
        <div>
            <h1 class="text-center">No safaris to Explore</h1>
        </div>
        @endforelse
    </div>
</div>
@endsection
