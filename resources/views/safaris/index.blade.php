@extends('layout.new')
<style>
    .h-4 {
        height: 200px;
        object-fit: cover;
    }
    
</style>
@section('content')

<div class="container pt-3">
    <div class="row">
        @forelse($safaris as $safari)
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
                    <div class="text-end">
                    <a
                                        href="{{ route('bookings.create', $safari->hotel ) }}"
                                        class="p-2 link-secondary"
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