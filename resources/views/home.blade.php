@extends('layout.index')

@section('content')

<div id="carouselExampleControls" class="carousel slide carousel-slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 " src="{{ asset('image1.jpg') }}" alt="Beautiful Highlights" >
        </div>

        @foreach($highlights as $highlight)
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/storage/'.$highlight->image) }}" alt="Beautiful Highlights">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span><i class="bi bi-arrow-left-circle-fill" style="font-size: 40px; color: #550a35;"  aria-hidden="true"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span><i class="bi bi-arrow-right-circle-fill" style="font-size: 40px; color:#550a35;"  aria-hidden="true"></i></span>
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
                            <h5 class="card-title">{{ $tour->category }}</h5>
                    
                                <div class="d-flex space-between">
                                    <p class="card-text">From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="price">{{ $tour->single_room }}</p>
                                </div>
                            <div class="d-flex space-between">
                                    <p class="card-text">Offers From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="price">{{ $tour->per_person_sharing }}</p>
                                </div>  
                            <a href="{{ route('tour', 'Exciting Holiday Offers' ) }}" class="btn btn-primar">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
              @empty
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lake Naivasha Offers</h5>
                    
                                <div class="d-flex space-between">
                                    <p class="card-text">2days Resort & Spa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="price">KSH 13600</p>
                                </div>
                            <div class="d-flex space-between">
                                    <p class="card-text">2days Resort & Spa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="price">KSH 13600</p>
                                </div>
                            
                            <div class="d-flex space-between">
                                    <p class="card-text">2days Resort & Spa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="price">KSH 13600</p>
                                </div>
                           
                            <a href="{{ route('tour', 'Exciting Holiday Offers') }}" class="btn btn-primar">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lake Naivasha Offers</h5>
                            
                            <div class="d-flex space-between">
                                    <p class="card-text">2days Resort & Spa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="price">KSH 13600</p>
                                </div>
                            <div class="d-flex space-between">
                                    <p class="card-text">2days Resort & Spa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="price">KSH 13600</p>
                                </div>
                            
                            <div class="d-flex space-between">
                                    <p class="card-text">2days Resort & Spa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="price">KSH 13600</p>
                                </div>
                            
                            <a href="{{ route('tour', 'Exciting Holiday Offers') }}" class="btn btn-primar">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lake Naivasha Offers</h5>
                            
                            <div class="d-flex space-between">
                                    <p class="card-text">2days Resort & Spa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="price">KSH 13600</p>
                                </div>
                            
                            <div class="d-flex space-between">
                                    <p class="card-text">2days Resort & Spa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="price">KSH 13600</p>
                                </div>
                             
                            <div class="d-flex space-between">
                                    <p class="card-text">2days Resort & Spa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="price">KSH 13600</p>
                                </div>
                           
                            <a href="{{ route('tour', 'Exciting Holiday Offers') }}" class="btn btn-primar">SEE ALL OFFERS</a>
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
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tours->category }}</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">{{ $tours->hotel }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">KSH {{ $tours->single_room }}</p>
                            </div>
                            <a href="{{ route('tour', 'Tembea Ujionee' ) }}" class="btn btn-primar">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>

                @empty
                
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nairobi Staycation Tour | 2022</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">Radison Hotel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">KSH 24550</p>
                            </div>
                            <a href="{{ route('tour', 'Tembea Ujionee') }}" class="btn btn-primar">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nairobi Staycation Tour | 2022</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">Radison Hotel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">KSH 24550</p>
                            </div>
                            <a href="{{ route('tour', 'Tembea Ujionee') }}" class="btn btn-primar">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nairobi Staycation Tour | 2022</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">Radison Hotel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">KSH 24550</p>
                            </div>
                            <a href="{{ route('tour', 'Tembea Ujionee') }}" class="btn btn-primar">SEE ALL OFFERS</a>
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
                            <a href="{{ route('bookings.create') }}" class="btn btn-primar">Book Now</a>
                        </div>
                    </div>
                </div>

                @empty

                <div class="col-lg-3 col-sm-3">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Mombasa NorthCoast Beach</p>
                            <hr>
                            <p class="card-text">From Ksh 45000 per person</p>
                            
                            <a href="{{ route('bookings.create') }}" class="btn btn-primar">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Mombasa NorthCoast Beach</p>
                            <hr>
                            <p class="card-text">From Ksh 45000 per person</p>
                            
                            <a href="{{ route('bookings.create') }}" class="btn btn-primar">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Mombasa NorthCoast Beach</p>
                            <hr>
                            <p class="card-text">From Ksh 45000 per person</p>
                            
                            <a href="{{ route('bookings.create') }}" class="btn btn-primar">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Mombasa NorthCoast Beach</p>
                            <hr>
                            <p class="card-text">From Ksh 45000 per person</p>
                            
                            <a href="{{ route('bookings.create') }}" class="btn btn-primar">Book Now</a>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
            <br>
        </div>
        <div class="container">
            <h3 class="text-center">Latest Travel Tales</h3>
            <div class="row">
                @foreach($coverBlogs as $blog)
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('/storage/'. $blog->image) }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ \Illuminate\Support\Str::limit($blog->title, 30, $end='...') }}</h5>
                            <p class="card-text">{!! \Illuminate\Support\Str::limit($blog->content, 100, $end='...') !!}</p>
                            <a href="{{ route('blogs.show', $blog->id) }}"class="btn btn-primar" >Read More</a>
                        </div>
                    </div>
                    <br>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container">
        <h3 class="text-center ">Exciting videos about past adventures.</h3>
        <br>
            <div class="row">
                @foreach($videos as $video)
                <div class="col-lg-3 col-sm-12">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$video->url}}" allowfullscreen></iframe>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <br>

@endsection