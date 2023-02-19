@extends("layout.new")
<style>
    .card {
        border: none;
    }
    .product {
        background-color: #fff;
    }
    .brand {
        font-size: 13px;
    }
    .act-price {
        color: red;
        font-weight: 700;
    }
    .dis-price {
        text-decoration: line-through;
    }
    .about {
        font-size: 14px;
    }
    .color {
        margin-bottom: 10px;
    }
    label.radio {
        cursor: pointer;
    }
    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none;
    }
    label.radio span {
        padding: 2px 9px;
        border: 2px solid #ff0000;
        display: inline-block;
        color: #ff0000;
        border-radius: 3px;
        text-transform: uppercase;
    }
    label.radio input:checked + span {
        border-color: #ff0000;
        background-color: #ff0000;
        color: #fff;
    }
    .btn-danger {
        background-color: #ff0000 !important;
        border-color: #ff0000 !important;
    }
    .btn-danger:hover {
        background-color: #da0606 !important;
        border-color: #da0606 !important;
    }
    .btn-danger:focus {
        box-shadow: none;
    }
    .cart i {
        margin-right: 10px;
    }
    a {
        text-decoration: underline;
        color: #000000;
    }
</style>
@section("content")
<div class="bg-primar p-2">
    <div class="container">
        <h5 class="text-white">
             / accomodation : {{ $accomodation->name }}.
        </h5>
    </div>
</div>
<br />
<div class="container mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7 col-sm-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4">
                                <img
                                    id="main-image"
                                    src="{{ asset('/storage/'.$accomodation->image) }}"
                                    alt="{{ $accomodation->name }}"
                                    width="260"
                                />
                            </div>
                            <div class="thumbnail text-center">
                                <img
                                    onclick="change_image(this)"
                                    src="{{ asset('/storage/'.$accomodation->image2) }}"
                                    alt="{{ $accomodation->name }}"
                                    width="70"
                                />
                                <img
                                    onclick="change_image(this)"
                                    alt="{{ $accomodation->name }}"
                                    src="{{ asset('/storage/'.$accomodation->image) }}"
                                    width="70"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div
                                class="d-flex justify-content-between align-items-center"
                            >
                            <a href="{{ route('accomodations') }}" class="text-black">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-arrow-left bit"></i>
                                    <span class="ml-1 bit"> Back</span>
                                </div>
                                </a>
                                <i class="bi bi-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3">
                                <span class="text-uppercase text-muted brand"
                                    >{{ $accomodation->category}}</span
                                >
                                <h5 class="text-uppercase">
                                    {{ $accomodation->name }}
                                </h5>
                                <div
                                    class="price d-flex flex-row align-items-center"
                                >
                                    <span class="act-price">KES {{ $accomodation->rates }}</span>
                                </div>
                            </div>
                            <p class="about">
                               {!! $accomodation->description !!}
                            </p>
                            <div class="sizes mt-2">
                                <h6 class="text-uppercase"><i class="bi bi-geo-alt-fill"></i> {{ $accomodation->location }}</h6>
                            </div>
                            <!-- <div class="cart mt-4 align-items-center">
                                <button
                                    class="btn btn-danger text-uppercase mr-2 px-4"
                                >
                                    checkout
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="col-lg-5 col-sm-12">
            <div class="card mb-3">
                <div class="card-header bg-primar">
                    <h4 class="text-white text-center">Top accomodations</h4>
                </div>
                    <div class="card-body">
                        @foreach($accomodations as $prod)
                            <div class="row no gutters">
                                <div class="col">
                                    <img src="{{ asset('/storage/'. $prod->image ) }}" alt="{{$prod->name }}" class="card-img-top" style="height: 150px;">
                                </div>
                                <div class="col">
                                      <span class="text-uppercase text-muted brand"
                                    >{{ $prod->category}}</span
                                >
                                <h5 class="text-uppercase">
                                    {{ $prod->name }}
                                </h5>
                                <div
                                    class="price d-flex flex-row align-items-center"
                                >
                                    <span class="act-price">rates KES {{ $prod->rates }}</span>
                                </div>
                                <br />
                                    <a href="{{ route('accomodations.show', $prod->slug ) }}" class="btn btn-success"><i class="bi bi-eye-fill "></i> explore</a>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
