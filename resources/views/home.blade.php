@extends('layout.index')

@section('content')

<div id="carouselExampleControls" class="carousel slide carousel-slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="{{ asset('image1.jpg') }}" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('image1.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('image2.jpg') }}" alt="Third slide">
    </div>
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
            <h3 class="text-center">Top Holiday Deals</h3>
            <div class="row">
                @forelse($tours as $tour )
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
                            <a href="{{ route('tour', $tour->category) }}" class="btn btn-primar">SEE ALL OFFERS</a>
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
                           
                            <a href="{{ route('tour', 'topDeals') }}" class="btn btn-primar">SEE ALL OFFERS</a>
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
                            
                            <a href="{{ route('tour', 'topDeals') }}" class="btn btn-primar">SEE ALL OFFERS</a>
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
                           
                            <a href="{{ route('tour', 'topDeals') }}" class="btn btn-primar">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>

        <br>

        <div class="container">
            <h5 class="text-center"> <script type="text/javascript"> document.write( new Date().getFullYear());</script> LEGENDARY DEALS - YOU CAN'T AFFORD TO MISS</h5>
            <div class="row">
                @forelse($olderTours as $tour)
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tour->category }}</h5>
                            <div class="d-flex space-between">
                                <p class="card-text">{{ $tour->hotel }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="price">KSH {{ $tour->single_room }}</p>
                            </div>
                            <a href="{{ route('tour', $tour->category ) }}" class="btn btn-primar">SEE ALL OFFERS</a>
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
                            
                        
                            <a href="{{ route('tour', 'seasonHolidays') }}" class="btn btn-primar">SEE ALL OFFERS</a>
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
                            
                           
                            <a href="{{ route('tour', 'seasonHolidays') }}" class="btn btn-primar">SEE ALL OFFERS</a>
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
                            
                         
                            <a href="{{ route('tour', 'seasonHolidays') }}" class="btn btn-primar">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>

        <br>

        <div class="container">
            <h3 class="text-center">Featured Tours</h3>
            <div class="row">
                @forelse($tuas as $tour)
                <div class="col-lg-3 col-sm-3">
                    <div class="card">
                            <img src="{{ asset('/storage/'.$tour->image ) }}" alt="Tour Image" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">{{ $tour->hotel }}</p>
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


            <p class="lead text-center">Romantic HoneyMoons || Couple Holidays</p>
            <div class="row">
                <div class="col-lg">
                    <div class="card mb-3" style="max-width: 540px">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <img src="{{ asset('index.jpeg') }}" alt="" class="card-img">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">Fascinating HoneyMoon</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, dolores!</p>
                                    <a href="{{ route('tour', 'HoneyMoon') }}" class="btn btn-primar">Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                <div class="card mb-3" style="max-width: 540px">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <img src="{{ asset('index.jpeg') }}" alt="" class="card-img">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">Fascinating HoneyMoon</h5>
                                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, sapiente.</p>
                                    <a href="{{ route('tour', 'HoneyMoon') }}" class="btn btn-primar">Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
@endsection