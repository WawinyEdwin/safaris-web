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
    <h5 class=" text-white"> <a href="{{ url('/') }}" class="text-white"> Home </a> > Explore Exemplary services.</h5>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        @forelse($services as $service)
        @if($service->published == 1)
        <div class="col-lg-3 col-sm-12 col-md-4">
        <a href="{{ route('services.show', $service->slug) }}" class="p_link">
            <div class="card">
            <div class="text-center">
                    <small><i class="bi bi-geo-alt-fill"></i>  {{ $service->location }}</small>
                    </div>
                <img src="{{ asset('/storage/'. $service->image) }}" alt="" class="card-img-top h-4">
                <div class="card-body">
                <div class="text-center">
                    <h5 class="card-title">{{ $service->name }}</h5>
                        <button class="btn btn-outline-primar"><i class="bi bi-basket"></i> KES {{ $service->price }}</button>
                    </div>
                    
                </div>
            </div>
            </a>
            @else
            <div class="pt-5 pb-5">
            <h1 class="text-center">No services to Explore</h1>
        </div>
           @endif
        </div>
        @empty 
        <div class="pt-5 pb-5">
            <h1 class="text-center">No services to Explore</h1>
        </div>
        @endforelse
    </div>
</div>
@endsection