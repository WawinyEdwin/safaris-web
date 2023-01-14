@extends('layout.new')

@section('content')

<div class="bg-primar p-3">
    <div class="container">
    <h5 class=" text-white"> <a href="{{ url('/') }}" class="text-white"> Home </a> > Explore Amazing Products.</h5>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        @forelse($products as $product)
        <div class="col-lg-4 col-sm-12">
        <a href="{{ route('products.show', $product->id) }}">
            <div class="card">
                <img src="{{ asset('/storage/'. $product->image) }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <button class="btn btn-primar">{{ $product-price }}</button>
                </div>
            </div>
            </a>
            <br>
        </div>
        @empty 
        <div class="pt-5 pb-5">
            <h1 class="text-center">No Products to Explore</h1>
        </div>
        @endforelse
    </div>
</div>
@endsection