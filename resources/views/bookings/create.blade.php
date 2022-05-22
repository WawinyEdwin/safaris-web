@extends('layout.new')

@section('content')

<div class=" bg-primar navbar expand-lg ">
    <div class="container">
    <p class="lead text-white"> <a href="{{ url('/') }}" class="text-white">Home </a>/ Confirm Booking.</p>
    </div>
   
</div>
<div class="container">

    @if($message = Session::get('failure'))
    <div class="alert alert-info">
        <p>{{ $message }}</p>
    </div>
    @endif

    
    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
        <div class="col-lg-7 col-sm-12">
            <div class="text-center">
                <p class="lead pri" >Booking Information</p>
                <small>Please fill all the details correctly!</small>
            </div>
            <div class="card mr-3">
                <div class="card-body">
                    <form action="{{ route('bookings.store') }}" method="post" class="form-group">
                        @csrf 
                        @method('POST')
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" required>
                                <span class="text-danger">@error('first_name') {{ $message }} @enderror</span>

                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" required>
                                <span class="text-danger" >@error('last_name') {{ $message }} @enderror</span>

                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <label for="email1" class="form-label"> Email Address</label>
                                <input type="email" name="email1" id="email1" class="form-control" placeholder="example@mail.com" required>
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>

                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="email2" class="form-label"> Confirm Email Address</label>
                                <input type="email2" name="email2" id="email2" class="form-control" placeholder="example@mail.com" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <label for="country" class="form-label">Country</label>
                                <select name="country" id="country" class="form-control" required>
                                    <option value="">--choose country--</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Tanzania">Tanzania</option>
                                </select>
                                <span class="text-danger">@error('country') {{ $message }} @enderror</span>

                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="tel" name="phone_number" id="phone_number" class="form-control" required>
                                <span class="text-danger">@error('phone_number') {{ $message }} @enderror</span>

                            </div>
                        </div>
                    

                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <label for="arrival_date" class="form-label">Arrival Date</label>
                                <input type="date" name="arrival_date" id="arrival_date" class="form-control" required>
                                <span class="text-danger">@error('arrival_date') {{ $message }} @enderror</span>

                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <label for="adults" class="form-label">Adults</label>
                                <input type="number" name="adults" id="adults" class="form-control" required>
                                <span class="text-danger">@error('adults') {{ $message }} @enderror</span>

                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <label for="kids" class="form-label">Kids</label>
                                <input type="number" name="kids" id="kids" class="form-control" required>
                                <span class="text-danger">@error('kids') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <label for="special_requirements" class="form-label">Special Requirements</label>
                        <textarea name="special_requirements" id="special_requirements" cols="30" rows="5" class="form-control">

                        </textarea>
                        <br>
                        {!! NoCaptcha::display() !!}
                     
                        <span class="text-danger" >@error('g-recaptcha-response') {{ $message }} @enderror</span>

                        <br>
                        <div class="text-center">
                            <button class="btn btn-primar" type="submit" onSubmit=" alert('Success, you will recieve an email with further details')">
                                Confirm Booking
                            </button>
                        </div>
                    </form>
                </div>
            </div> 
            <br>
            <div class="text-center">
                <a href="{{ url('/') }}" class="btn btn-primar"> 
                    More Holiday Deals <i class="bi bi-arrow-right text-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card mb-3">
                <div class="card-body">
                    <p class="text-primary text-center">Top Holiday Deals</p>
                    <hr>
                    @foreach($tours as $tour)
                <div class="row no gutters">
                    <div class="col">
                        <img src="{{ asset('/storage/'. $tour->image ) }}" alt="Exciting tour offer" class="card-img-top">
                    </div>
                    <div class="col">
                        <p>{{ $tour->hotel }}
                        </p>
                        <p>Prices From {{ $tour->single_room }}</p>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>

        <br>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Need Help planning Your Holiday?</h5>
                <p class="card-text">We would be more than happy to help, our travel consultants are always available 24/7
                    for a chat/call,
                <br>
                <i class="bi bi-phone text-primary"></i>0701 700 144
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
</div>
</div>
{!! NoCaptcha::renderJs() !!}
<br>
@endsection