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

                        <input type="destination" name="destination" id="destination"  value={{ $destination }} class="form-control" required hidden>

                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="form-control @error('first_name') is-invalid @enderror" required>
                                <span class="text-danger">@error('first_name') {{ $message }} @enderror</span>

                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="form-control  @error('last_name') is-invalid @enderror" required>
                                <span class="text-danger" >@error('last_name') {{ $message }} @enderror</span>

                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <label for="email1" class="form-label"> Email Address</label>
                                <input type="email" name="email1" id="email1" value="{{ old('email1') }}" class="form-control @error('email') is-invalid @enderror" placeholder="example@mail.com" required>
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>

                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="email2" class="form-label"> Confirm Email Address</label>
                                <input type="email2" name="email2" id="email2" value="{{ old('email2') }}" class="form-control @error('email2') is-invalid @enderror" placeholder="example@mail.com" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <label for="country" class="form-label">Country</label>
                                <select name="country" id="country" class="form-control @error('country') is-invalid @enderror" required>
                                    <option value="">--choose country--</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span class="text-danger">@error('country') {{ $message }} @enderror</span>

                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="tel" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" class="form-control @error('phone_number') is-invalid @enderror" required>
                                <span class="text-danger">@error('phone_number') {{ $message }} @enderror</span>

                            </div>
                        </div>
                    

                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <label for="arrival_date" class="form-label">Arrival Date</label>
                                <input type="date" name="arrival_date" id="arrival_date" value="{{ old('arrival_date') }}" class="form-control @error('arrival_date') is-invalid @enderror" required>
                                <span class="text-danger">@error('arrival_date') {{ $message }} @enderror</span>

                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <label for="adults" class="form-label">Adults</label>
                                <input type="number" name="adults" id="adults" value="{{ old('adults') }}" class="form-control @error('adults') is-invalid @enderror" required>
                                <span class="text-danger">@error('adults') {{ $message }} @enderror</span>

                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <label for="kids" class="form-label">Kids</label>
                                <input type="number" name="kids" id="kids" value="{{ old('kids') }}" class="form-control @error('kids') is-invalid @enderror" required>
                                <span class="text-danger">@error('kids') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <label for="special_requirements" class="form-label">Special Requirements</label>
                        <textarea name="special_requirements" id="special_requirements" cols="30" rows="5" class="form-control">
                        {{ old('special_requirements') }}
                        </textarea>
                        <br>
                        <div class="row">
                            <div class="text-center">
                                {!! NoCaptcha::display() !!} 
                     
                                <span class="text-danger" >@error('g-recaptcha-response') {{ $message }} @enderror</span>
                            </div>
                        </div>
                        <br>
                        <div class="text-center text-success"><p>Once you book, you will be contacted immediately on next steps!</p></div>
                        <div class="row">
                            
                            <div class="col-lg-6">
                                <img src="{{ asset('mpesa.png') }}" alt="Pay With Mpesa" style="width: 100px; height: 30px;">
                                <br>
                                <label for="" class="form-label">PayBill No: <b>4047989</b></label>
                                <p>Account: <b>Your Name</b></p>
                            </div>
                            <div class="col-lg-6">
                                <label for="transaction_code" class="form-label">Mpesa Payment Transaction Code</label>
                                <input type="text" value="{{ old('transaction_code') }}" name="transaction_code" id="transaction_code"  class="form-control @error('transaction_code') is-invalid @enderror">
                                <span class="text-danger" >@error('transaction_code') {{ $message }} @enderror</span>
                                <small class="text-success">This is to be used to verify your booking.</small>
                            </div>
                        </div>
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
                    <p class="text-primar text-center">Top Holiday Deals</p>
                    <hr>
                    @foreach($tours as $tour)
                <div class="row no gutters">
                    <div class="col">
                        <img src="{{ asset('/storage/'. $tour->image ) }}" alt="Exciting tour offer" class="card-img-top">
                    </div>
                    <div class="col">
                        <p>{{ $tour->hotel }}
                        </p>
                        <p>Prices From Ksh <b class="text-success" >{{$tour->single_room }}</b></p>
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
                </p>
                <br>
                
                <a href="tel: 0701 700 144" class="btn btn-primar"><i class="bi bi-phone text-white"></i> <b>0701 700 144</b></a>
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