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
     <h5 class="text-white"> / Explore exemplary services.</h5>
    </div>
</div>
<br>
<div class="container">
     <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Photography-and-video-coverage') }}"
                >photography & video</a
            >
             <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Tour-Guide-Operators') }}"
                >Tour Guide Operators</a
            >
             <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Massage-and-Parlour') }}"
                >Massage and Parlour</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Housekeeping-and-Cleaning') }}"
                >house keeping</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Barber-and-Hair-Dressing') }}"
                >barber & hair dressing</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Graphics-and-Printing') }}"
                >graphics & printing</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'TV-mounting') }}"
                >tv mounting</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Internet-and-Network') }}"
                >cyber & internet</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Laundry-and-dry-cleaning') }}"
                >laundry & dry-cleaning</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Gas-Refilling') }}"
                >gas refiling</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Dj-and-Entertainment') }}"
                >dj & entertainment</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Gym-and-fitness') }}"
                >gym & fitness</a
            >
        </nav>
    </div>
    <div class="row">
        @forelse($services as $service)
        @if($service->published == 1)
        <div class="col-lg-3 col-sm-12 col-md-4">
        <a href="{{ route('services.show', $service->slug) }}" class="p_link">
            <div class="card">
                <img src="{{ asset('/storage/'. $service->image) }}" alt="" class="card-img-top h-4">
                <div class="card-body text-center pt-3">
                <small class="text-muted"><i class="bi bi-geo-alt">{{ $service->location }}</i></small>
                    <p class="card-title">{{ $service->name }}</p>
                    <div class="">
                        <a
                            href="{{ route('services.show', $service->slug ) }}"
                            class="btn btn-outline-primar"
                        >
                            <i class="bi bi-cart-plus"></i> from KES {{ $service->price }}
                        </a>
                    </div>
                </div>
            </div>
            <br />
            </a>
           @endif
        </div>
        @empty 
       <div class="pt-5 pb-5 text-center">
            <h1 class="">services coming soon...</h1>
            <a href="{{ url('/services') }}" class="btn btn-success">continue exploring <i class="bi bi-arrow-right"></i></a>
        </div>
        @endforelse
    </div>
   
</div>
@endsection