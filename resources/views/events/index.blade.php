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
</style>
@section('content')

<div class="bg-primar p-3">
    <div class="container">
        <h5 class="text-white">
            <a href="{{ url('/') }}" class="text-white"> Home </a> > Explore Events.
        </h5>
    </div>
</div>
<br />
<div class="container">
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
                    <div class="card-body">
                    <p class="card-title">{{ $event->name }}</p>
                    <p><b>tickets - KES {{ $event->price }}  </b></p>
                    <div class="text-end">
                        <a
                            href="{{ route('events.show', $event->slug ) }}"
                            class="btn btn-outline-primar"
                        >
                            <i class="bi bi-ticket"></i> 
                        </a>
                    </div>
                </div>
                    
                </div>
            </a>
            @endif
        </div>
        @empty
        <div class="pt-5 pb-5">
            <h1 class="text-center">No events to Explore</h1>
        </div>
        @endforelse
    </div>
</div>

@endsection
