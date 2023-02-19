@extends('layout.new')
<style>
    .h-4 {
        height: 200px;
        object-fit: cover;
    }
    .p_link {
        text-decoration: none !important;
        color: #4d1b0c;
    }
    .p_link:hover {
        text-decoration: none !important;
        color: #4d1b0c;
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
        <h5 class="text-white">
             / Explore accomodations.
        </h5>
    </div>
</div>
<br />
<div class="container">
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'guest-house') }}"
                >guest houses</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'botique-hotels') }}"
                >botique hotels</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'hostels') }}"
                >hostels</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'cottages') }}"
                >cottages</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'bed-and-brakfast') }}"
                >bed & breakfast</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'apartments') }}"
                >apartments</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'log-cabins') }}"
                >log cabins</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'aparthotels') }}"
                >aparthotels</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'motels') }}"
                >motels</a
            >
        </nav>
    </div>
    <div class="row">
        @forelse($accomodations as $accomodation) @if($accomodation->published == 1)
        <div class="col-lg-3 col-sm-12 col-md-4">
                <div class="card" >
                    <img
                        src="{{ asset('/storage/'. $accomodation->image) }}"
                        alt="{{ $accomodation->name }}"
                        class="card-img-top h-4"
                    />
                    <div class="card-body">
                        <small class="text-muted"><i class="bi bi-geo-alt">{{ $accomodation->location }}</i></small>
                    <p class="card-title">{{ $accomodation->name }}</p>
                    <p><b>rates - KES {{ $accomodation->rates }}  </b></p>
                     <div class="d-flex justify-content-between">
                      <a class="btn btn-success" href="{{ route('accomodations.show', $accomodation->slug) }}"><i class="bi bi-eye-fill xl"></i
                                    > explore</a>  
                    
                    <a
                                        href="{{ route('bookings.create', $accomodation->name ) }}"
                                        class="btn btn-primar"
                                    >
                                        book now
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                    </div>
                </div>
                </div>
                <br />
            @endif
        </div>
        
        @empty
        <div class="pt-5 pb-5 text-center">
            <h1 class="">accomodations coming soon...</h1>
            <a href="{{ url('/accomodations') }}" class="btn btn-success">continue exploring <i class="bi bi-arrow-right"></i></a>
        </div>
        @endforelse
    </div>
    <br />
    <div class="text-center">
         {{ $accomodations->links() }}
    </div>
   
</div>

@endsection
