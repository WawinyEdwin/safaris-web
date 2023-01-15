@extends('layout.index')
<style>
    .h-4 {
        height: 200px;
        object-fit: cover;
    }
</style>
@section('content')
<div
    id="carouselExampleControls"
    class="carousel slide carousel-fade" data-bs-ride="carousel"
>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img
                class="d-block"
                src="{{ asset('elephant.jpg') }}"
                style="height: 249px; object-fit: cover"
                alt="Beautiful Highlights"
            />
        </div>
        @foreach($highlights as $highlight)
        <div class="carousel-item">
            <img
                class="d-block"
                src="{{ asset('/storage/'.$highlight->image) }}"
                style="height: 249px; object-fit: cover"
                alt="Beautiful Highlights"
            />
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br />
<div class="container">
    <h5 class="text-center">Exciting Holiday Offers</h5>
    <div class="row">
        @foreach($holidayOffers as $tour )
        @if($tour->published == 1)
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
                <img
                    src="{{ asset('/storage/'.$tour->image) }}"
                    alt="{{ $tour->hotel }}"
                    class="card-img-top h-4"
                />
                <div class="card-body">
                    <h5 class="card-title">{{ $tour->sub_category }}</h5>
                    <div class="d-flex space-between">
                        <small class="card-text"
                            >Single person per
                            room&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small
                        >
                        <p class="price">{{ $tour->single_room }}</p>
                    </div>
                    <div class="blue"></div>
                    <br />
                    <div class="d-flex space-between">
                        <small class="card-text"
                            >Offers
                            From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small
                        >
                        <p class="price">{{ $tour->per_person_sharing }}</p>
                    </div>
                    <div class="text-right">
                        <a
                            href="{{ route('tour', 'Exciting Holiday Offers' ) }}"
                            class="btn btn-primar"
                        >
                            SEE ALL OFFERS <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <br />
    <div class="text-center">
        <a href="{{ route('tour', 'Exciting Holiday Offers') }}" class="btn btn-primar">
            explore tours <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<br />

<div class="container">
    <h5 class="text-center">Nearby Products.</h5>
    <div class="row">
        @foreach($products as $product)
        @if($product->published == 1)
        
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
            <div class="text-center">
                    <small><i class="bi bi-geo-alt-fill"></i>  {{ $product->location }}</small>
                    </div>
                <img
                    src="{{ asset('/storage/'.$product->image ) }}"
                    alt="{{ $product->name }}"
                    class="card-img-top h-4"
                />
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <div class="text-center">
                        <a
                            href="{{ route('products.show', $product->slug ) }}"
                            class="btn btn-outline-primar"
                        >
                        <i class="bi bi-basket"></i>  KSH - {{ $product->price }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <br />
    <div class="text-center">
        <a href="/products" class="btn btn-primar">
            more products <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<br />

<div class="container">
    <h5 class="text-center">
        TEMBEA UJIONEE
        <script type="text/javascript">
            document.write(new Date().getFullYear());
        </script>
    </h5>
    <div class="row">
        @foreach($tembeaTours as $tours)
        @if($tours->published == 1)
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
                <img
                    src="{{ asset('/storage/'.$tours->image ) }}"
                    alt="{{ $tours->hotel }}"
                    class="card-img-top h-4"
                />
                <div class="card-body">
                    <h5 class="card-title">{{ $tours->category }}</h5>
                    <div class="d-flex space-between">
                        <small class="card-text"
                            >{{ $tours->hotel
                            }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small
                        >
                        <div class="blue"></div>
                        <br />
                        <br />
                        <p class="price">{{ $tours->single_room }}</p>
                    </div>
                    <div class="text-right">
                        <a
                            href="{{ route('tour', 'Tembea Ujionee' ) }}"
                            class="btn btn-primar"
                        >
                            SEE ALL OFFERS <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <br />
    <div class="text-center">
        <a href="{{ route('tour', 'Tembea Ujionee') }}" class="btn btn-primar">
            explore tours <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<br />

<div class="container">
    <h5 class="text-center">Nearby Services.</h5>
    <div class="row">
        @foreach($services as $service)
        @if($service->published == 1)
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
            <div class="text-center">
                    <small><i class="bi bi-geo-alt-fill"></i>  {{ $service->location }}</small>
                    </div>
                <img
                    src="{{ asset('/storage/'.$service->image ) }}"
                    alt="{{ $service->name }}"
                    class="card-img-top h-4"
                />
                <div class="card-body">
                    <h5 class="card-title">{{ $service->name }}</h5>
                    <div class="text-center">
                        <a
                            href="{{ route('services.show', $service->slug ) }}"
                            class="btn btn-outline-primar"
                        >
                        <i class="bi bi-basket"></i> KSH - {{ $service->price }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <br />
    <div class="text-center">
        <a href="/services" class="btn btn-primar">
            more services <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<br />

<div class="container">
    <h5 class="text-center">Urban Tours</h5>
    <div class="row">
        @foreach($localTours as $tour)
        @if($tour->published == 1)
        <div class="col-lg-3 col-sm-12 col-md-3">
            <div class="card">
                <img
                    src="{{ asset('/storage/'.$tour->image ) }}"
                    alt="{{ $tour->hotel }}"
                    class="card-img-top h-4"
                />
                <div class="card-body">
                    <p class="card-text pri">{{ $tour->hotel }}</p>
                    <hr />
                    <p class="card-text">
                        From {{ $tour->single_room}} per person
                    </p>
                    <div class="text-center">
                        <a
                            href="{{ route('addtour.show', $tour->id) }}"
                            class="btn btn-primar"
                            >View More</a
                        >
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <br />
    <div class="text-center">
        <a href="/safaris" class="btn btn-primar">
            explore tours <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>
<br />

<div class="container">
    <h5 class="text-center">Explore Latest Travel Tales</h5>

    <div class="row">
        @foreach($coverBlogs as $blog)
        @if($blog->published == 1)
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
                <img
                    src="{{ asset('/storage/'. $blog->image) }}"
                    alt="{{ $blog->title }}"
                    class="card-img-top h-4"
                />
                <div class="card-body">
                    <h5 class="card-title">
                        {{ \Illuminate\Support\Str::limit($blog->title, 30,
                        $end='...') }}
                    </h5>
                    <div class="blue"></div>
                    <br />
                    <!--<p class="card-text">{!! \Illuminate\Support\Str::limit($blog->content, 100, $end='...') !!}</p>-->
                    <div class="text-right">
                        <a
                            href="{{ route('blogs.show', $blog->id) }}"
                            class="btn btn-primar"
                        >
                            Read More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <br />
    <div class="text-center">
        <a href="/blogs" class="btn btn-primar">
            more tales <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<br />

<div class="container">
    <h5 class="text-center">Watch our videos about past adventures</h5>
    <br />
    <div class="row">
        @foreach($videos as $video)
        <div class="col-lg-3 col-sm-12 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            class="embed-responsive-item"
                            src="https://www.youtube.com/embed/{{$video->url}}"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <br />
                    <div class="blue"></div>
                    <br />
                    <div class="card-title text-center">
                        <p>{{ $video->name }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br />
    <div class="text-center">
        <a href="#" class="btn btn-primar">
            Watch More <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>
<br />
@endsection
