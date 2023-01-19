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
            <a href="{{ url('/') }}" class="text-white"> Home </a> > Explore accomodations.
        </h5>
    </div>
</div>
<br />
<div class="container">
    <div class="row">
        @forelse($accomodations as $accomodation) @if($accomodation->published == 1)
        <div class="col-lg-3 col-sm-12 col-md-4">
            <a href="{{ route('accomodations.show', $accomodation->slug) }}" class="p_link">
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
                    <div class="text-end">
                        <a
                            href="{{ route('accomodations.show', $accomodation->slug ) }}"
                            class="btn btn-outline-primar"
                        >
                        <i class="bi bi-house text-white"></i>
                        </a>
                    </div>
                </div>
                    
                </div>
            </a>
            @endif
        </div>
        @empty
        <div class="pt-5 pb-5">
            <h1 class="text-center">No accomodations to Explore</h1>
        </div>
        @endforelse
    </div>
</div>

@endsection
