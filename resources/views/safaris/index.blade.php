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
     .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
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
<div class="bg-primar p-2">
        <div class="container">
        <h5 class=" text-white"> / Exquisite places you can visit and special Deals.</h5>
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
        @forelse($safaris as $safari)
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
            <h1 class="">safaris coming soon...</h1>
            <a href="{{ url('/safaris') }}" class="btn btn-success">continue exploring <i class="bi bi-arrow-right"></i></a>
        </div>
        @endforelse
    </div>
    <div class="text-center">
        {{ $safaris->links() }}
    </div>
      
</div>
@endsection