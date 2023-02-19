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
             / Explore amazing Events.
        </h5>
    </div>
</div>
<div class="container">
     <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Concert') }}"
                >concert</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Art-and-Culture') }}"
                >art & culture</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Conferences') }}"
                >conferences</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Trade-Shows') }}"
                >trade shows</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Workshops') }}"
                >workshops</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Charities') }}"
                >charities</a
            >
             <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Parties') }}"
                >Parties</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Film-and-Music') }}"
                >Film and Music</a
            >
             <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Community') }}"
                >Community</a
            >
              <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Expos') }}"
                >Expos</a
            >
             <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Photography-and-Shoot') }}"
                >Photography and Shoot</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Rideshare-and-road-trips') }}"
                >Rideshare & road-trips</a
            >
        </nav>
    </div>
    <div class="row">
        @forelse($events as $event) @if($event->published == 1)
        <div class="col-lg-3 col-sm-12 col-md-4">
            <a href="{{ route('events.show', $event->slug) }}" class="p_link">
                <div class="card" >
                    <img
                        src="{{ asset('/storage/'. $event->image) }}"
                        alt="{{ $event->name }}"
                        class="card-img-top h-4"
                    />
                    <div class="card-body text-center pt-3">
                    <small class="text-muted"><i class="bi bi-geo-alt">{{ $event->location }}</i></small>
                    <p class="card-title">{{ $event->name }}</p>
                    <div class="">
                        <a
                            href="{{ route('events.show', $event->slug ) }}"
                            class="btn btn-outline-primar"
                        >
                        <i class="bi bi-calendar-event"></i> tickets - KES {{ $event->price }}
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
            <h1 class="">events coming soon...</h1>
            <a href="{{ url('/events') }}" class="btn btn-success">continue exploring <i class="bi bi-arrow-right"></i></a>
        </div>
        @endforelse
    </div>
    
</div>

@endsection
