@extends('layout.index')
<style>
    .h-4 {
        height: 200px;
        object-fit: cover;
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
        color: #e3a532!important;
    }
    .swiper {
        /* width: 600px; */
        height: 430px;
    }
    .swiper-button-prev {
        color: #4d1b0c !important;
    }
    .swiper-button-next {
        color: #4d1b0c !important;
    }
</style>
@section('content')
<div
    id="carouselExampleControls"
    class="carousel slide carousel-fade"
    data-bs-ride="carousel"
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
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<br />

<!-- Safaris  -->

<div class="container">
    <h5 class="text-center">Safaris</h5>
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="{{ route('tour', 'Exciting Holiday Offers') }}">vacation offers</a>
            <a class="p-2 link-secondary" href="{{ route('tour', 'Tembea Ujionee') }}">tembea ujionee</a>
            <a class="p-2 link-secondary" href="{{ route('tour', 'Local Tours') }}">urban tours</a>
        </nav>
    </div>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row">
                    @foreach($holidayOffers as $tour ) @if($tour->published ==
                    1)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <img
                                src="{{ asset('/storage/'.$tour->image) }}"
                                alt="{{ $tour->hotel }}"
                                class="card-img-top h-4"
                            />
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $tour->sub_category }}
                                </h5>
                                <div class="d-flex space-between">
                                    <small class="card-text"
                                        >Single person per
                                        room&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small
                                    >
                                    <p class="price">
                                        {{ $tour->single_room }}
                                    </p>
                                </div>
                                <div class="blue"></div>
                                <br />
                                <div class="d-flex space-between">
                                    <small class="card-text"
                                        >Offers
                                        From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small
                                    >
                                    <p class="price">
                                        {{ $tour->per_person_sharing }}
                                    </p>
                                </div>
                                <div class="text-right">
                                    <a
                                        href="{{ route('tour', 'Exciting Holiday Offers' ) }}"
                                        class="btn btn-primar"
                                    >
                                        SEE ALL OFFERS
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif @endforeach
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    @foreach($tembea as $tour ) @if($tour->published ==
                    1)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <img
                                src="{{ asset('/storage/'.$tour->image) }}"
                                alt="{{ $tour->hotel }}"
                                class="card-img-top h-4"
                            />
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $tour->sub_category }}
                                </h5>
                                <div class="d-flex space-between">
                                    <small class="card-text"
                                        >Single person per
                                        room&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small
                                    >
                                    <p class="price">
                                        {{ $tour->single_room }}
                                    </p>
                                </div>
                                <div class="blue"></div>
                                <br />
                                <div class="d-flex space-between">
                                    <small class="card-text"
                                        >Offers
                                        From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small
                                    >
                                    <p class="price">
                                        {{ $tour->per_person_sharing }}
                                    </p>
                                </div>
                                <div class="text-right">
                                    <a
                                        href="{{ route('tour', 'Exciting Holiday Offers' ) }}"
                                        class="btn btn-primar"
                                    >
                                        SEE ALL OFFERS
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif @endforeach
                </div>
            </div>

            <div class="swiper-slide">
                <div class="row">
                    @foreach($localTours as $tour ) @if($tour->published ==
                    1)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <img
                                src="{{ asset('/storage/'.$tour->image) }}"
                                alt="{{ $tour->hotel }}"
                                class="card-img-top h-4"
                            />
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $tour->sub_category }}
                                </h5>
                                <div class="d-flex space-between">
                                    <small class="card-text"
                                        >Single person per
                                        room&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small
                                    >
                                    <p class="price">
                                        {{ $tour->single_room }}
                                    </p>
                                </div>
                                <div class="blue"></div>
                                <br />
                                <div class="d-flex space-between">
                                    <small class="card-text"
                                        >Offers
                                        From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small
                                    >
                                    <p class="price">
                                        {{ $tour->per_person_sharing }}
                                    </p>
                                </div>
                                <div class="text-right">
                                    <a
                                        href="{{ route('tour', 'Exciting Holiday Offers' ) }}"
                                        class="btn btn-primar"
                                    >
                                        SEE ALL OFFERS
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif @endforeach
                </div>
            </div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <br />
    <div class="text-center">
        <a
            href="/safaris"
            class="btn btn-primar"
        >
            explore tours <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<br />

<!-- products  -->

<div class="container">
    <h5 class="text-center">Nearby Products.</h5>
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="#">smartphones</a>
            <a class="p-2 link-secondary" href="#">hair & beauty</a>
            <a class="p-2 link-secondary" href="#">electronics</a>
            <a class="p-2 link-secondary" href="#">home appliances</a>
            <a class="p-2 link-secondary" href="#">baby store</a>
            <a class="p-2 link-secondary" href="#">food & groceries</a>
        </nav>
    </div>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row">
                    @foreach($products as $product) @if($product->published ==
                    1)

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="text-center">
                                <small
                                    ><i class="bi bi-geo-alt-fill"></i> {{
                                    $product->location }}</small
                                >
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
                                        <i class="bi bi-basket"></i> {{
                                        $product->price }} KES
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif @endforeach
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    @foreach($products as $product) @if($product->published ==
                    1)

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="text-center">
                                <small
                                    ><i class="bi bi-geo-alt-fill"></i> {{
                                    $product->location }}</small
                                >
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
                                        <i class="bi bi-basket"></i> {{
                                        $product->price }} KES
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif @endforeach
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    @foreach($products as $product) @if($product->published ==
                    1)

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="text-center">
                                <small
                                    ><i class="bi bi-geo-alt-fill"></i> {{
                                    $product->location }}</small
                                >
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
                                        <i class="bi bi-basket"></i> {{
                                        $product->price }} KES
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif @endforeach
                </div>
            </div>
            
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <br />
            <div class="text-center">
                <a href="/products" class="btn btn-primar">
                    more products <i class="bi bi-arrow-right"></i>
                </a>
            </div>
</div>

<br />

<!-- events   -->

<div class="container">
<h5 class="text-center">Events</h5>
    <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        <a class="p-2 link-secondary" href="{{ route('events.category', 'Concert') }}">concert</a>
        <a class="p-2 link-secondary" href="{{ route('events.category', 'Art-and-Culture') }}">art & culture</a>
        <a class="p-2 link-secondary" href="{{ route('events.category', 'Conferences') }}">conferences</a>
        <a class="p-2 link-secondary" href="{{ route('events.category', 'Trade-Shows') }}">trade shows</a>
        <a class="p-2 link-secondary" href="{{ route('events.category', 'Workshops') }}">workshops</a>
        <a class="p-2 link-secondary" href="{{ route('events.category', 'Charities') }}">charities</a>
    </nav>
    </div>
    <!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">    <div class="row">
        @foreach($events as $event) @if($event->published == 1)
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
                <img
                    src="{{ asset('/storage/'.$event->image ) }}"
                    alt="{{ $event->name }}"
                    class="card-img-top h-4"
                />
                <div class="card-body">
                    <h5 class="card-title">{{ $event->name }}</h5>
                    <div class="text-center">
                        <a
                            href="{{ route('events.show', $event->slug ) }}"
                            class="btn btn-outline-primar"
                        >
                            <i class="bi bi-ticket"></i> {{
                            $event->price }} KES
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif @endforeach
    </div></div>
    <div class="swiper-slide">
    <div class="row">
        @foreach($events as $event) @if($event->published == 1)
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
                <img
                    src="{{ asset('/storage/'.$event->image ) }}"
                    alt="{{ $event->name }}"
                    class="card-img-top h-4"
                />
                <div class="card-body">
                    <h5 class="card-title">{{ $event->name }}</h5>
                    <div class="text-center">
                        <a
                            href="{{ route('events.show', $event->slug ) }}"
                            class="btn btn-outline-primar"
                        >
                            <i class="bi bi-ticket"></i> {{
                            $event->price }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif @endforeach
    </div>
    </div>
    <div class="swiper-slide">
    <div class="row">
        @foreach($events as $event) @if($event->published == 1)
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
                <img
                    src="{{ asset('/storage/'.$event->image ) }}"
                    alt="{{ $event->name }}"
                    class="card-img-top h-4"
                />
                <div class="card-body">
                    <h5 class="card-title">{{ $event->name }}</h5>
                    <div class="text-center">
                        <a
                            href="{{ route('events.show', $event->slug ) }}"
                            class="btn btn-outline-primar"
                        >
                            <i class="bi bi-basket"></i>  {{
                            $event->price }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif @endforeach
    </div>
    </div>
   
  </div>
 

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
<br />
    <div class="text-center">
        <a href="/events" class="btn btn-primar">
            more events<i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<br />

<!-- services  -->

<div class="container">
<h5 class="text-center">Nearby Services.</h5>
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="{{ route('services.category', 'Photography-and-video-coverage') }}">photography & video</a>
            <a class="p-2 link-secondary" href="{{ route('services.category', 'Housekeeping-and-Cleaning') }}">house keeping</a>
            <a class="p-2 link-secondary" href="{{ route('services.category', 'Barber-and-Hair-Dressing') }}">barber & hair dressing</a>
            <a class="p-2 link-secondary" href="{{ route('services.category', 'Graphics-and-Printing') }}">graphics & printing</a>
            <a class="p-2 link-secondary" href="{{ route('services.category', 'TV-mounting') }}">tv mounting</a>
            <a class="p-2 link-secondary" href="{{ route('services.category', 'Internet-and-Network') }}">cyber & internet</a>
            <a class="p-2 link-secondary" href="{{ route('services.category', 'Laundry-and-dry-cleaning') }}">laundry & dry-cleaning</a>
            <a class="p-2 link-secondary" href="{{ route('services.category', 'Gas-Refilling') }}">gas refiling</a>
            <a class="p-2 link-secondary" href="{{ route('services.category', 'Dj-and-Entertainment') }}">dj & entertainment</a>
            <a class="p-2 link-secondary" href="{{ route('services.category', 'Gym-and-fitness') }}">gym & fitness</a>
        </nav>
    </div>
<div class="swiper">

  <div class="swiper-wrapper">

    <div class="swiper-slide"> <div class="row">
        @foreach($services as $service) @if($service->published == 1)
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
                <div class="text-center">
                    <small
                        ><i class="bi bi-geo-alt-fill"></i> {{
                        $service->location }}</small
                    >
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
                            <i class="bi bi-basket"></i> {{
                            $service->price }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif @endforeach
    </div></div>
    <div class="swiper-slide">
    <div class="row">
        @foreach($services as $service) @if($service->published == 1)
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
                <div class="text-center">
                    <small
                        ><i class="bi bi-geo-alt-fill"></i> {{
                        $service->location }}</small
                    >
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
                            <i class="bi bi-basket"></i> {{
                            $service->price }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif @endforeach
    </div>
    </div>
    <div class="swiper-slide">
    <div class="row">
        @foreach($services as $service) @if($service->published == 1)
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
                <div class="text-center">
                    <small
                        ><i class="bi bi-geo-alt-fill"></i> {{
                        $service->location }}</small
                    >
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
                            <i class="bi bi-basket"></i> {{
                            $service->price }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif @endforeach
    </div>
    </div>
  
  </div>
 
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
    
 
 
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
    <h5 class="text-center">Explore Latest Travel Tales</h5>

    <div class="row">
        @foreach($coverBlogs as $blog) @if($blog->published == 1)
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
        @endif @endforeach
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
