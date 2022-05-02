@extends('layout.index')

@section('content')


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('index.jpeg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('index.jpeg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('index.jpeg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

<br>
        <div class="container">
            <h3 class="text-center">Top Holiday Deals</h3>
            <div class="row">
                <div class="col">
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
                            <a href="" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col">
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
                            <a href="" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col">
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
                            <a href="" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <h5 class="text-center"> <script type="text/javascript"> document.write( new Date().getFullYear());</script> LEGENDARY DEALS - YOU CAN'T AFFORD TO MISS</h5>
            <div class="row">
                <div class="col">
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
                <div class="col">
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
                <div class="col">
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
                            <a href="" class="btn btn-success">Book Now</a>
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
                            <a href="" class="btn btn-success">Book Now</a>
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
                            <a href="" class="btn btn-success">Book Now</a>
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