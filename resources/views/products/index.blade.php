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
             / Explore
            Amazing Products.
        </h5>
    </div>
</div>
<br />
<div class="container">
     <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a
                class="p-1 link-secondary"
                href="{{ route('products.category', 'Smartphones-and-Accessories') }}"
                >smartphones</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('products.category', 'Hair-and-beauty') }}"
                >hair & beauty</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('products.category', 'Electronics-and-Appliances') }}"
                >electronics</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('products.category', 'Home-Appliances-and-Accessories') }}"
                >home appliances</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('products.category', 'Baby-store') }}"
                >baby store</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('products.category', 'Foods-and-Groceries') }}"
                >food & groceries</a
            >
             <a
                class="p-1 link-secondary"
                href="{{ route('products.category', 'Jewellery-and-Accessories') }}"
                >Jewellery-and-Accessories</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('products.category', 'Sports-Equipment-and-Art') }}"
                >Sports Equipment and Art</a
            >
             <a
                class="p-1 link-secondary"
                href="{{ route('products.category', 'Computer-and-Accessories') }}"
                >Computer and Accessories</a
            >
              <a
                class="p-1 link-secondary"
                href="{{ route('products.category', 'Motor-vehicle-parts') }}"
                >Motor vehicle parts</a
            >
             <a
                class="p-1 link-secondary"
                href="{{ route('products.category', 'Drinks-and-Beverages') }}"
                >Drinks and Beverages</a
            >
        </nav>
    </div>
    <div class="row">
        @forelse($products as $product) @if($product->published == 1)
        <div class="col-lg-3 col-sm-12 col-md-4">
            <a href="{{ route('products.show', $product->slug) }}" class="p_link">
                <div class="card" >
               
                    <img
                        src="{{ asset('/storage/'. $product->image) }}"
                        alt=""
                        class="card-img-top h-4"
                    />
                    <div class="card-body text-center">
                    <small class="text-muted"><i class="bi bi-geo-alt">{{ $product->location }}</i></small>
                                <p class="card-title">{{ $product->name }}</p>
                                <div class="">
                                    <a
                                        href="{{ route('products.show', $product->slug ) }}"
                                        class="btn btn-outline-primar"
                                    >
                                        <i class="bi bi-cart-check"></i> KES {{ $product->price }}
                                    </a>
                                </div>
                            </div>
                </div>
                <br />
            </a>
        </div>
        @endif
        @empty
        <div class="pt-5 pb-5 text-center">
            <h1 class="">products coming soon...</h1>
            <a href="{{ url('/products') }}" class="btn btn-success">continue exploring <i class="bi bi-arrow-right"></i></a>
        </div>
        @endforelse
    </div>
</div>

@endsection
