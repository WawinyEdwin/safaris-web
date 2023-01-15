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
        <h5 class="text-white">
            <a href="{{ url('/') }}" class="text-white"> Home </a> > Explore
            Amazing Products.
        </h5>
    </div>
</div>
<br />
<div class="container">
    <div class="row">
        @forelse($products as $product) @if($product->published == 1)
        <div class="col-lg-3 col-sm-12 col-md-4">
            <a href="{{ route('products.show', $product->slug) }}">
                <div class="card" style="width: 18rem">
                    <img
                        src="{{ asset('/storage/'. $product->image) }}"
                        alt=""
                        class="card-img-top h-4"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <button class="btn btn-outline-primar">
                                <i class="bi bi-basket"></i> KES {{ $product->price }}
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            @endif
        </div>
        @empty
        <div class="pt-5 pb-5">
            <h1 class="text-center">No Products to Explore</h1>
        </div>
        @endforelse
    </div>
</div>

@endsection
