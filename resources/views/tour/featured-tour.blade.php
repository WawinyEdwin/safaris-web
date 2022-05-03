@extends('layout.index')

@section('content')

<div class=" bg-success navbar expand-lg ">
    <div class="container">
    <p class="lead text-white">Home / Lake Elementatita Deals.</p>
    </div>
   
</div> 
<br>
<div class="container">
    <div>
        <a href="{{ route('bookings.create') }}" class="btn btn-success"> 
            Book Now
        </a>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-7 col-sm-12">
            <div class="card">
                <h5 class="text-center pt-2">Lake Elementatita Deals | 2days, 1 Night</h5>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                            <th scope="col">Hotel</th>
                            <th scope="col">Transport</th>
                            <th scope="col">Per Person Sharing</th>
                            <th scope="col">Single Room</th>
                            <th scope="col">Meals on Board</th>
                        </thead>
                        <tbody>
                            <td>Sirvelle</td>
                            <td>Self Drive</td>
                            <td>Ksh.5500</td>
                            <td>Ksh.10500</td>
                            <td>All Inclusive</td>
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
                <div class="card-body">
                    <p>Whats Included?</p>
                    <ul>
                        <li>1 Night Accomodation.</li>
                        <li>Meals as per each Hotel specification.</li>
                        <li>Use of Hotel Facilities</li>
                        <li>Entertainment at the Hotel.</li>
                    </ul>
                </div>
                <br>
               
                <div class="card-body">
                    <a href="{{ route('bookings.create') }}" class="btn btn-success"> 
                        Book Now
                    </a>
                </div>
                <br>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            
            <div class="card mb-3">

                <div class="card-body">
                    <p class="text-success text-center">Top Holiday Deals</p>
                    <hr>
                    <div class="row no gutters">
                        <div class="col">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img">
                        </div>
                        <div class="col">
                            <p>5 days, 4 nights</p>
                            <p>Temebeza Wazazi Package</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row no gutters">
                        <div class="col">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img">
                        </div>
                        <div class="col">
                            <p>5 days, 4 nights</p>
                            <p>Temebeza Wazazi Package</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row no gutters">
                        <div class="col">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img">
                        </div>
                        <div class="col">
                            <p>5 days, 4 nights</p>
                            <p>Temebeza Wazazi Package</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Need Help planning Your Holiday?</h5>
                    <p class="card-text">We would be more than happy to help, our travel consultants are always available 24/7
                        for a chat/call,
                        <br>
                        <i class="bi bi-phone text-success"></i> 0723 344 567
                    </p>
                </div>
            </div>
            <br>
            <br>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Why Book With Us!</h5>
                    <p><i class="bi bi-geo-alt text-success"></i> 1000+ Destinations</p>
                    <small>Amazing places for you to explore</small>
                    <br>
                    <p><i class="bi bi-piggy-bank text-success"></i> Low Rates & Savings</p>
                    <small>Best Holidays at prices you like.</small>
                    <br>
                    <p><i class="bi bi-check2-circle text-success"></i> Excellent Customer Care</p>
                    <small>Always there to guide you all the way.</small>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
@endsection