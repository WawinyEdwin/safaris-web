@extends('layout.new')

@section('content')

<div class=" bg-primar navbar expand-lg ">
    <div class="container">
    <p class="lead text-white">Exquisite places you can visit and special Deals.</p>
    </div> 
</div> 
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="">
                <h5 class="text-center pt-2 pri">Your Search Results</h5>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th scope="col">Hotel</th>
                            <th scope="col">Location</th>
                            <th scope="col">Transport</th>
                            <th scope="col">Per Person Sharing</th>
                            <th scope="col">Single Room</th>
                            <th scope="col">Meals on Board</th>
                        </thead>
                        <tbody>

                            @forelse($tours as $tour)
                            <tr>
                            <td>{{ $tour->hotel }}</td>
                            <td>{{ $tour->location }}</td>
                            <td>{{ $tour->transport }}</td>
                            <td>{{ $tour->per_person_sharing }}</td>
                            <td>{{ $tour->single_room }}</td>
                            <td>{{ $tour-> meals}}</td>
                            </tr>
                        </tbody>
                    </table>
                            @empty
                                <p class="text-danger lead text-center" >Oops! No Deals were found, Try a different Search term</p>

                            @endforelse
                </div>
                <br>
                <br>
                <br>
                <div class="">
                    <h5>Inclusions</h5>
                    <ul>
                        <li>1/2 nights Accomodation</li>
                        <li>Meals as indicated</li>
                        <li>Use of Hotel Facilities</li>
                        <li>Entertainment at the Hotel</li>
                    </ul>
                    <br>
                    <br>
                    <h5>Exclusions</h5>
                    <ul>
                        <li>Peronal Expenses</li>
                        <li>Park/Conservancy Fees</li>
                        <li>Any other fees not included</li>
                    </ul>
                </div>

            <div>
                <a href="{{ route('bookings.create') }}" class="btn btn-primar"> 
                    Book Now
                </a>
            </div>
            </div>
        </div>
        <!-- <div class="col-lg-4 col-sm-12">
            
            <div class="card mb-3">

                <div class="card-body">
                    <p class="text-primary text-center">Top Holiday Deals</p>
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
                        <i class="bi bi-phone text-primary"></i> 0723 344 567
                    </p>
                </div>
            </div>
            <br>
            <br>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Why Book With Us!</h5>
                    <p><i class="bi bi-geo-alt text-primary"></i> 1000+ Destinations</p>
                    <small>Amazing places for you to explore</small>
                    <br>
                    <p><i class="bi bi-piggy-bank text-primary"></i> Low Rates & Savings</p>
                    <small>Best Holidays at prices you like.</small>
                    <br>
                    <p><i class="bi bi-check2-circle text-primary"></i> Excellent Customer Care</p>
                    <small>Always there to guide you all the way.</small>
                    <br>
                    
                </div>
            </div>
        </div>
    </div> -->
</div>

<hr>
@endsection