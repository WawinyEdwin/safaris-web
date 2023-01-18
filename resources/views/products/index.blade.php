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
            <a href="{{ route('products.show', $product->slug) }}" class="p_link">
                <div class="card" >
                    <div class="text-center">
                    <small><i class="bi bi-geo-alt-fill"></i>  {{ $product->location }}</small>
                    </div>
               
                    <img
                        src="{{ asset('/storage/'. $product->image) }}"
                        alt=""
                        class="card-img-top h-4"
                    />
                    <div class="card-body">
                                <p class="card-title">{{ $product->name }}</p>
                                <p><b>KES {{ $product->price }}/piece</b> </p>
                                <div class="text-end">
                                    <a
                                        href="{{ route('products.show', $product->slug ) }}"
                                        class="btn btn-outline-primar"
                                    >
                                        <i class="bi bi-basket"></i> 
                                    </a>
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
