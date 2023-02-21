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
<div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a
                class="p-1 link-secondary"
                href="{{ route('tour', 'Exciting Holiday Offers') }}"
                >vacation offers</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('tour', 'Tembea Ujionee') }}"
                >tembea ujionee</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('tour', 'Local Tours') }}"
                >urban tours</a
            >
            @foreach($categories as $category)
            <a
                class="p-1 link-secondary"
                href="{{ route('tour', $category->category_name ) }}"
                >{{ $category->category_name }}</a
            >
            @endforeach
        </nav>
    </div>
    <div class="row">
        @forelse($tours as $safari)
        @if($safari->published == 1)
        <div class="col-lg-3 col-sm-12 col-md-4">
            <div class="card">
                <img src="{{ asset('/storage/'. $safari->image) }}" alt="{{ $safari->hotel }}" class="card-img-top h-4 p-1">
                <div class="card-body">
                    <p class="card-text pri">{{ $safari->hotel }}</p>
                    <small class="text-muted"><i class="bi bi-geo-alt">{{ $safari->location }}</i></small>
                    <hr />
                    <p class="card-text">
                        From <b>{{ $safari->single_room}}</b> per person
                    </p>
                    <div class="text-center">
                      <a class="btn btn-success" href="{{ route('addtour.show', $safari->id) }}"><i class="bi bi-eye-fill xl"></i
                                    > explore</a>  
                    
                    </div>
                </div>
            </div>
            <br>
        </div>
        @endif
        @empty 
        <div class="pt-5 pb-5 text-center">
            <h1 class="">more tour packages coming soon...</h1>
            <a href="{{ url('/safaris') }}" class="btn btn-success">continue exploring <i class="bi bi-arrow-right"></i></a>
        </div>
        @endforelse
    </div>
</div>
@endsection
