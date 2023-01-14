@extends('layout.new')
<style>
    .h-4 {
        height: 200px;
        object-fit: cover;
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
        <div class="col-lg-4 col-sm-12">
        <a href="{{ route('services.show', $service->id) }}">
            <div class="card">
                <img src="{{ asset('/storage/'. $service->image) }}" alt="" class="card-img-top h-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $service->name }}</h5>
                    <button class="btn btn-primar">{{ $service->price }}</button>
                </div>
            </div>
            </a>
            <br>
        </div>
        @empty 
        <div class="pt-5 pb-5">
            <h1 class="text-center">No services to Explore</h1>
        </div>
        @endforelse
    </div>
</div>
@endsection