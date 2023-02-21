@extends('layout.index')
<style>
    .h-4 {
        height: 170px !important;
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
        color: #ffffff !important;
        background-color: #e3a532;
        font-size: x-small;
        margin: 1px;
        text-decoration: none;
    }
    .link-secondary-1 {
        color: #ffffff !important;
        background-color: #4d1b0c;
        font-size: x-small;
        margin: 1px;
        text-decoration: none;
    }
    .swiper {
        /* width: 600px; */
        height: 349px !important;
    }

    .swiper-button-prev {
        color: #e3a532 !important;
    }
    .swiper-button-next {
        color: #e3a532 !important;
    }
</style>
@section('content')
<div class="">
    <div
        id="carouselExampleControls"
        class="carousel slide carousel-fade pt-1"
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
</div>

<br />
<div class="container">
    <h5 class="text-center">Tour Packages.</h5>
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a
                class="p-1 link-secondary"
                href="{{ route('tour', 'Exciting Holiday Offers') }}"
                >vacation offers</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('tour', 'Tembea Ujionee') }}"
                >tembea ujionee</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('tour', 'Local Tours') }}"
                >urban tours</a
            >
            @foreach($categories as $category)
            <a
                class="p-1 link-secondary"
                href="{{ route('tour', $category->category_name ) }}"
                >{{ $category->category_name }}</a
            >
            @endforeach
        </nav>
    </div>
    <div class="carousel-wrap">
        <div class="owl-carousel owl-theme">
            @foreach($tours as $tour )
            <div class="item">
                <div class="card">
                    <img
                        src="{{ asset('/storage/'.$tour->image) }}"
                        alt="{{ $tour->hotel }}"
                        class="card-img-top h-4 p-1"
                    />
                    <div class="card-body text-center pt-3">
                        <small class="text-muted"
                            ><i class="bi bi-geo-alt"
                                >{{ $tour->location }}</i
                            ></small
                        >
                        <p class="card-title">{{ $tour->hotel }}</p>
                        <div class="blue"></div>
                        <div class="d-flex pt-1 text-center">
                            <small class="card-text">
                                Offers From&nbsp;

                                <b>KES {{ $tour->per_person_sharing }}</b>
                            </small>
                        </div>
                        <br />
                        <div class="text-right">
                            <a
                                class="btn btn-success fw-bold"
                                href="{{ route('addtour.show', $tour->id) }}"
                                >explore <i class="bi bi-eye-fill"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="text-end">
        <a href="/safaris" class="p-2 link-secondary-1">
            explore tours <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<br />

<!-- Safaris  -->

<hr />

<!-- accomodation  -->
<div class="container">
    <h5 class="text-center">Exquisite Accomodations</h5>
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'guest-house') }}"
                >guest houses</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'botique-hotels') }}"
                >botique hotels</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'hostels') }}"
                >hostels</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'cottages') }}"
                >cottages</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'bed-and-brakfast') }}"
                >bed & breakfast</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'apartments') }}"
                >apartments</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'log-cabins') }}"
                >log cabins</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'aparthotels') }}"
                >aparthotels</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('accomodations.category', 'motels') }}"
                >motels</a
            >
        </nav>
    </div>
    <div class="carousel-wrap">
        <div class="owl-carousel owl-theme">
            @foreach($accomodations as $accomodation )
            @if($accomodation->published == 1)
            <div class="item">
                <div class="card">
                    <img
                        src="{{ asset('/storage/'.$accomodation->image) }}"
                        alt="{{ $accomodation->name }}"
                        class="card-img-top h-4 p-1"
                    />
                    <div class="card-body text-center pt-3">
                        <small class="text-muted"
                            ><i class="bi bi-geo-alt"
                                >{{ $accomodation->location }}</i
                            ></small
                        >
                        <p class="card-title">{{ $accomodation->category }}</p>
                        <div class="blue"></div>
                        <div class="d-flex space-between pt-1">
                            <small class="card-text">
                                Rates &nbsp;

                                <b>KES {{ $accomodation->rates }}</b>
                            </small>
                        </div>
                        <br />
                        <div class="text-right">
                            <a
                                class="btn btn-success fw-bold"
                                href="{{ route('accomodations.show', $accomodation->slug ) }}"
                                >explore <i class="bi bi-eye-fill"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            @endif @endforeach
        </div>
        <div class="text-end">
            <a href="/accomodations" class="p-2 link-secondary-1">
                more accomodations <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<br />

<!-- products  -->

<div class="container">
    <h5 class="text-center">Nearby Products.</h5>
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
    <div class="carousel-wrap">
        <div class="owl-carousel owl-theme">
            @foreach($products as $product) @if($product->published == 1)
            <div class="item">
                <a
                    href="{{ route('products.show', $product->slug) }}"
                    class="p_link"
                >
                    <div class="card" style="height: 349px !important">
                        <img
                            src="{{ asset('/storage/'.$product->image ) }}"
                            alt="{{ $product->name }}"
                            class="card-img-top h-4 p-1"
                        />
                        <br />
                        <div class="card-body text-center pt-3">
                            <small class="text-muted"
                                ><i class="bi bi-geo-alt"
                                    >{{ $product->location }}</i
                                ></small
                            >
                            <p class="card-title">{{ $product->name }}</p>
                            <div class="">
                                <a
                                    href="{{ route('products.show', $product->slug ) }}"
                                    class="btn btn-outline-primar"
                                >
                                    <i class="bi bi-cart-check"></i> View - KES {{
                                    $product->price }}
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif @endforeach
        </div>
    </div>
    <div class="text-end">
        <a href="/products" class="p-2 link-secondary-1">
            more products <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<hr />

<!-- events   -->

<div class="container">
    <h5 class="text-center">Upcoming Events</h5>
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Concert') }}"
                >concert</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Art-and-Culture') }}"
                >art & culture</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Conferences') }}"
                >conferences</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Trade-Shows') }}"
                >trade shows</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Workshops') }}"
                >workshops</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Charities') }}"
                >charities</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Parties') }}"
                >Parties</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Film-and-Music') }}"
                >Film and Music</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Community') }}"
                >Community</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Expos') }}"
                >Expos</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Photography-and-Shoot') }}"
                >Photography and Shoot</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('events.category', 'Rideshare-and-road-trips') }}"
                >Rideshare & road-trips</a
            >
        </nav>
    </div>
    <div class="carousel-wrap">
        <div class="owl-carousel owl-theme">
            @foreach($events as $event) @if($event->published == 1)
            <div class="item">
                <a
                    href="{{ route('events.show', $event->slug) }}"
                    class="p_link"
                >
                    <div class="card">
                        <img
                            src="{{ asset('/storage/'.$event->image ) }}"
                            alt="{{ $event->name }}"
                            class="card-img-top h-4 p-1"
                        />
                        <div class="card-body text-center pt-3">
                            <small class="text-muted"
                                ><i class="bi bi-geo-alt"
                                    >{{ $event->location }}</i
                                ></small
                            >
                            <p class="card-title">{{ $event->name }}</p>
                            <div class="">
                                <a
                                    href="{{ route('events.show', $event->slug ) }}"
                                    class="btn btn-outline-primar"
                                >
                                    <i class="bi bi-calendar-event"></i>
                                    tickets - KES {{ $event->price }}
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif @endforeach
        </div>
    </div>
    <br />
    <div class="text-end">
        <a href="/events" class="p-2 link-secondary-1">
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
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Photography-and-video-coverage') }}"
                >photography & video</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Tour-Guide-Operators') }}"
                >Tour Guide Operators</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Massage-and-Parlour') }}"
                >Massage and Parlour</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Housekeeping-and-Cleaning') }}"
                >house keeping</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Barber-and-Hair-Dressing') }}"
                >barber & hair dressing</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Graphics-and-Printing') }}"
                >graphics & printing</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'TV-mounting') }}"
                >tv mounting</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Internet-and-Network') }}"
                >cyber & internet</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Laundry-and-dry-cleaning') }}"
                >laundry & dry-cleaning</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Gas-Refilling') }}"
                >gas refiling</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Dj-and-Entertainment') }}"
                >dj & entertainment</a
            >
            <a
                class="p-1 link-secondary"
                href="{{ route('services.category', 'Gym-and-fitness') }}"
                >gym & fitness</a
            >
        </nav>
    </div>
    <div class="carousel-wrap">
        <div class="owl-carousel owl-theme">
            @foreach($services as $service) @if($service->published == 1)
            <div class="item">
                <a
                    href="{{ route('services.show', $service->slug) }}"
                    class="p_link"
                >
                    <div class="card">
                        <img
                            src="{{ asset('/storage/'.$service->image ) }}"
                            alt="{{ $service->name }}"
                            class="card-img-top h-4 p-1"
                        />
                        <div class="card-body text-center pt-3">
                            <small class="text-muted"
                                ><i class="bi bi-geo-alt"
                                    >{{ $service->location }}</i
                                ></small
                            >
                            <p class="card-title">{{ $service->name }}</p>
                            <div class="">
                                <a
                                    href="{{ route('services.show', $service->slug ) }}"
                                    class="btn btn-outline-primar"
                                >
                                    <i class="bi bi-cart-check"></i>
                                    from KES {{ $service->price }}
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif @endforeach
        </div>
    </div>
    <br />
    <div class="text-end">
        <a href="/services" class="p-2 link-secondary-1">
            more services <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<br />

<div class="container">
    <h5 class="text-center">Explore Latest Travel Tales</h5>

    <div class="row">
        @foreach($coverBlogs as $blog) @if($blog->published == 1)
        <div class="col-lg-3 col-md-3 col-sm-12 pt-2">
            <div class="card">
                <img
                    src="{{ asset('/storage/'. $blog->image) }}"
                    alt="{{ $blog->title }}"
                    class="card-img-top h-4 p-1"
                />
                <div class="card-body">
                    <h5 class="card-title">
                        {{ \Illuminate\Support\Str::limit($blog->title, 30,
                        $end='...') }}
                    </h5>
                    <div class="blue"></div>
                    <br />
                    <!--<p class="card-text">{!! \Illuminate\Support\Str::limit($blog->content, 100, $end='...') !!}</p>-->
                    <div class="text-end">
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
    <div class="text-end">
        <a href="/blogs" class="p-2 link-secondary-1">
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
        <div class="col-lg-4 col-sm-12 col-md-4 pt-2">
            <div class="card">
                <div class="card-body">
                    <div
                        class="embed-responsive embed-responsive-16by9 card-img-top"
                    >
                        <iframe
                            class="embed-responsive-item h-4"
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
    <div class="text-end">
        <a href="{{ url('/videos') }}" class="p-2 link-secondary">
            Watch More <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>
<br />
@endsection
