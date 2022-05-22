@extends('layout.index')

@section('content')

        <div id="carouselExampleControls" class="carousel slide carousel-slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block " src="{{ asset('elephant.jpg') }}" alt="Beautiful Highlights">
                </div>
                @foreach($highlights as $highlight)
                    <div class="carousel-item">
                        <img class="d-block " src="{{ asset('/storage/'.$highlight->image) }}" alt="Beautiful Highlights" >
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span><i class="bi bi-arrow-left-circle-fill" style="font-size: 50px; color: #000000; "  aria-hidden="true"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span><i class="bi bi-arrow-right-circle-fill" style="font-size: 50px; color:#000000;"  aria-hidden="true"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <br>

        <div class="container">
            <h3 class="text-center">Exciting Holiday Offers</h3>
            <div class="row">
                @forelse($holidayOffers as $tour )
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('/storage/'.$tour->image) }}" alt="tour image"  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tour->sub_category }}</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">Single Room From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">{{ $tour->single_room }}</p>
                            </div>
                            <div class="blue"></div>
                                <br>
                            <div class="d-flex space-between">
                                <p class="card-text">Offers From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">{{ $tour->per_person_sharing }}</p>
                            </div>  
                            <div class="text-right">
                                <a href="{{ route('tour', 'Exciting Holiday Offers' ) }}" class="btn btn-primar">
                                    SEE ALL OFFERS <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
              @empty
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('elephant.jpg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lake Naivasha Offers</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">Single Rooms From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">USD 87878</p>
                            </div>
                            <div class="blue"></div>
                                <br>
                            <div class="d-flex space-between">
                                <p class="card-text">Offers From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">USD 3444</p>
                            </div> 
                             <div class="text-right">
                                <a href="{{ route('tour', 'Exciting Holiday Offers' ) }}" class="btn btn-primar">
                                    SEE ALL OFFERS <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('elephant.jpg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Maasai Mara Offers</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">Single RoomS From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">USD 87878</p>
                            </div>
                            <div class="blue"></div>
                            <br>
                            <div class="d-flex space-between">
                                <p class="card-text">Offers From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">USD 3444</p>
                            </div> 
                             <div class="text-right">
                                <a href="{{ route('tour', 'Exciting Holiday Offers' ) }}" class="btn btn-primar">
                                    SEE ALL OFFERS <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('elephant.jpg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nyali Offers</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">Single Rooms From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">USD 87878</p>
                            </div>
                                <div class="blue"></div>
                                <br>
                            <div class="d-flex space-between">
                                <p class="card-text">Offers From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">USD 3444</p>
                            </div> 
                             <div class="text-right">
                                <a href="{{ route('tour', 'Exciting Holiday Offers' ) }}" class="btn btn-primar">
                                    SEE ALL OFFERS <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>

        <br>

        <div class="container">
            <h5 class="text-center"> TEMBEA UJIONEE <script type="text/javascript"> document.write( new Date().getFullYear());</script></h5>
            <div class="row">
                @forelse($tembeaTours as $tours)
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('elephant.jpg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tours->category }}</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">{{ $tours->hotel }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            <div class="blue"></div>
                                <br>
                                <p class="price">KSH {{ $tours->single_room }}</p>
                            </div>
                            <div class="text-right">
                                <a href="{{ route('tour', 'Tembea Ujionee' ) }}" class="btn btn-primar">
                                    SEE ALL OFFERS <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>  
                        </div>
                    </div>
                </div>

                @empty
                
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('elephant.jpg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nairobi Staycation Tour | 2022</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">Hilton Hotel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">USD 24550</p>
                            </div>
                            <div class="text-right">
                                <a href="{{ route('tour', 'Tembea Ujionee' ) }}" class="btn btn-primar">
                                    SEE ALL OFFERS <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('elephant.jpg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nakuru Staycation Tour | 2022</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">Sarova Hotel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">USD 24550</p>
                            </div>
                            <div class="text-right">
                                <a href="{{ route('tour', 'Tembea Ujionee' ) }}" class="btn btn-primar">
                                    SEE ALL OFFERS <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('elephant.jpg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Narok Staycation Tour | 2022</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">The Lake Hotel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">USD 24550</p>
                            </div>
                            <div class="text-right">
                                <a href="{{ route('tour', 'Tembea Ujionee' ) }}" class="btn btn-primar">
                                    SEE ALL OFFERS <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>

        <br>

        <div class="container">
            <h3 class="text-center">Local Tours</h3>
            <div class="row">
                @forelse($localTours as $tour)
                <div class="col-lg-3 col-sm-3">
                    <div class="card">
                            <img src="{{ asset('/storage/'.$tour->image ) }}" alt="Tour Image" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text pri">{{ $tour->hotel }}</p>
                            <hr>
                            <p class="card-text">From {{ $tour->single_room}} per person</p>
                            <div class="text-center">
                                <a href="{{ route('bookings.create') }}" class="btn btn-primar">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                @empty

                <div class="col-lg-3 col-sm-3">
                    <div class="card">
                            <img src="{{ asset('elephant.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">Mombasa NorthCoast Beach</p>
                            <div class="blue"></div>
                                <br>
                            <p class="card-text">From USD 45000 per person</p>
                            
                            <div class="text-center">
                                <a href="{{ route('bookings.create') }}" class="btn btn-primar">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="card">
                            <img src="{{ asset('elephant.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">Kilifi NorthCoast Beach</p>
                            <div class="blue"></div>
                                <br>
                            <p class="card-text">From USD 45000 per person</p>
                            
                            <div class="text-center">
                                <a href="{{ route('bookings.create') }}" class="btn btn-primar">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="card">
                            <img src="{{ asset('elephant.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">Diani Surf Beach</p>
                            <div class="blue"></div>
                                <br>
                            <p class="card-text">From USD 45000 per person</p>
                            
                            <div class="text-center">
                                <a href="{{ route('bookings.create') }}" class="btn btn-primar">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="card">
                            <img src="{{ asset('elephant.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">Samburu Culture</p>
                            <div class="blue"></div>
                                <br>
                            <p class="card-text">From USD 45000 per person</p>
                            
                            <div class="text-center">
                                <a href="{{ route('bookings.create') }}" class="btn btn-primar">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
            <br>
        </div>
        <div class="container">
            <h3 class="text-center">Explore Latest Travel Tales</h3>
            <div class="row">
                @forelse($coverBlogs as $blog)
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('/storage/'. $blog->image) }}" alt="{{ $blog->title }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ \Illuminate\Support\Str::limit($blog->title, 30, $end='...') }}</h5>
                            <div class="blue"></div>
                                <br>
                            <p class="card-text">{!! \Illuminate\Support\Str::limit($blog->content, 100, $end='...') !!}</p>
                            <div class="text-right">
                                <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primar" >
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>

                @empty 

                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('elephant.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cool Title 2</h5>
                            <div class="blue"></div>
                                <br>
                            <p class="card-text">some cool blog content 3 here</p>
                            <div class="text-right">
                                <a href="{{ url('/') }}" class="btn btn-primar" >
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('elephant.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cool Title 1</h5>
                            <div class="blue"></div>
                                <br>
                            <p class="card-text">some cool blog content 2 here</p>
                            <div class="text-right">
                                <a href="{{ url('/') }}" class="btn btn-primar" >
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('elephant.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cool Title</h5>
                            <div class="blue"></div>
                                <br>
                            <p class="card-text">some cool blog content here</p>
                            <div class="text-right">
                                <a href="{{ url('/') }}" class="btn btn-primar" >
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                @endforelse
            </div>
        </div>
        <div class="container">
        <h3 class="text-center ">Discover videos about past our adventures.</h3>
        <br>
            <div class="row">
                @forelse($videos as $video)
                <div class="col-lg-3 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$video->url}}" allowfullscreen></iframe>
                            </div>
                            <br>
                            <div class="blue"></div>
                                <br>
                            <div class="card-title text-center">
                                <p>{{ $video->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                @empty 
                <div class="col-lg-3 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=cVecpIbonnU" allowfullscreen></iframe>
                            </div>
                            <br>
                            <div class="blue"></div>
                                <br>
                            <div class="card-title text-center">
                                <p>Majestic Travels</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-lg-3 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=cVecpIbonnU" allowfullscreen></iframe>
                            </div>
                            <br>
                            <div class="blue"></div>
                                <br>
                            <div class="card-title text-center">
                                <p>Good Content</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-lg-3 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=cVecpIbonnU" allowfullscreen></iframe>
                            </div>
                            <br>
                            <div class="blue"></div>
                                <br>
                            <div class="card-title text-center">
                                <p>Maasai Mara Tings</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-lg-3 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=cVecpIbonnU" allowfullscreen></iframe>
                            </div>
                            <br>
                            <div class="blue"></div>
                                <br>
                            <div class="card-title text-center">
                                <p>Mt. Kenya Peak</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
            <br>
            <div class="text-right">
                <a href="/videos" class="btn btn-primar">
                    Watch More <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
        <br>

@endsection