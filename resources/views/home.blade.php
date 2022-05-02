@extends('layout.index')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('index.jpeg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('index.jpeg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('index.jpeg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
        <div class="container">
            <h3 class="text-center">Top Holiday Deals</h3>
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lake Naivasha Offers</h5>
                            
                            <small class="card-text">2days Resort & Spa - KSH 13600</small>
                            <br> <br>
                            <small class="card-text">2days Resort & Spa</small>
                            <br> <br>
                            <small class="card-text">2days Resort & Spa</small>
                            <br>
                            <br>
                            <a href="{{ route('featured') }}" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lake Naivasha Offers</h5>
                            
                            <small class="card-text">2days Resort & Spa - KSH 13600</small>
                            <br> <br>
                            <small class="card-text">2days Resort & Spa</small>
                            <br> <br>
                            <small class="card-text">2days Resort & Spa</small>
                            <br>
                            <br>
                            <a href="{{ route('featured') }}" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lake Naivasha Offers</h5>
                            
                            <small class="card-text">2days Resort & Spa - KSH 13600</small>
                            <br> <br>
                            <small class="card-text">2days Resort & Spa</small>
                            <br> <br>
                            <small class="card-text">2days Resort & Spa</small>
                            <br>
                            <br>
                            <a href="{{ route('featured') }}" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <h5 class="text-center"> <script type="text/javascript"> document.write( new Date().getFullYear());</script> LEGENDARY DEALS - YOU CAN'T AFFORD TO MISS</h5>
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nairobi Staycation Tour | 2022</h5>
                            <small class="card-text">Radison Hotel - KSH 24550</small>
                            <br> <br>
                            <a href="" class="btn btn-success">SEE ALL TOUR OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nairobi Staycation Tour | 2022</h5>
                            <small class="card-text">Radison Hotel - KSH 24550</small>
                            <br> <br>
                            <a href="" class="btn btn-success">SEE ALL TOUR OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nairobi Staycation Tour | 2022</h5>
                            <small class="card-text">Radison Hotel - KSH 24550</small>
                            <br> <br>
                            <a href="" class="btn btn-success">SEE ALL TOUR OFFERS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <h3 class="text-center">Featured Tours</h3>
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Mombasa NorthCoast Beach</p>
                            <hr>
                            <small class="card-text">From Ksh 45000 per person</small>
                            <br>
                            <br>
                            <a href="{{ route('bookings.create') }}" class="btn btn-success">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Mombasa NorthCoast Beach</p>
                            <hr>
                            <small class="card-text">From Ksh 45000 per person</small>
                            <br>
                            <br>
                            <a href="{{ route('bookings.create') }}" class="btn btn-success">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Mombasa NorthCoast Beach</p>
                            <hr>
                            <small class="card-text">From Ksh 45000 per person</small>
                            <br>
                            <br>
                            <a href="{{ route('bookings.create') }}" class="btn btn-success">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Mombasa NorthCoast Beach</p>
                            <hr>
                            <small class="card-text">From Ksh 45000 per person</small>
                            <br>
                            <br>
                            <a href="{{ route('bookings.create') }}" class="btn btn-success">Book Now</a>
                        </div>
                    </div>
                </div>
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
                                    <a href="" class="btn btn-success">Read More</a>
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
                                    <a href="" class="btn btn-success">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
@endsection