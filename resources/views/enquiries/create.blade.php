@extends('layout.new')

@section('content')

<div class=" bg-primar navbar expand-lg ">
    <div class="container">
    <p class="lead text-white"> <a href="{{ url('/') }}" class="text-white">Home </a>/ Contact-US</p>
    </div>
   
</div>
<br>

<div class="container">
    <div class="card">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="700" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=syokiamau&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

                </iframe>
                <br>
                <style>
                .mapouter{
                    position:relative;
                    text-align:right;
                    height:300px;
                    width:auto;
                    }
                </style>
                <style>
                .gmap_canvas {
                    overflow:hidden;
                    background:none!important;
                    height:300px;
                    width:auto;
                }
                </style>
            </div>
        </div>
    </div>
<br>   

  @if($errors->any())
    <div class="alert alert-danger">
        <strong>There was a problem, please retry1</strong>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

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
            <div class="card">
                <div class="card-body">
                    <p class="lead">Let's plan your dream holiday ~ Talk to us</p>

                        <form action="{{ route('enquiries.store') }}" method="post">
                            @csrf 
                            @method('POST')
                                
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="full_name" class="form-label">Full Name</label>
                                    <input type="text" name="full_name" id="full_name" class="form-control">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="email_address" class="form-label">Email Address</label>
                                    <input type="email" name="email_address" id="email_address" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="tel" name="phone_number" id="phone_number" class="form-control">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="destinations" class="form-label">Preffered Destinations</label>
                                    <input type="text" name="destinations" id="destinations" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="adults" class="form-label">No of Adults</label>
                                    <input type="number" name="adults" id="adults" class="form-control">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="kids" class="form-label">No of Kids</label>
                                    <input type="number" name="kids" id="kids" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="nationality" class="form-label">Nationality</label>
                                    <input type="text" name="nationality" id="nationality" class="form-control">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="travel_date" class="form-label">Travel Date</label>
                                    <input type="date" name="travel_date" id="travel_date" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4 col-sm-12">
                                    <label for="budget" class="form-label">Budget</label>
                                    <input type="number" name="budget" id="budget" class="form-control">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label for="medium" class="form-label">Medium</label>
                                    <input type="text" name="medium" id="medium" class="form-control">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label for="luxury" class="form-label">Luxury</label>
                                    <input type="text" name="luxury" id="luxury" class="form-control">
                                </div>
                            </div>

                            <label for="additional_info" class="form-label">Additional Info</label>
                            <textarea name="additional_info" id="additional_info" cols="30" rows="5" class="form-control">

                            </textarea>

                            <br>
                                    
                            {!! NoCaptcha::display() !!}
                     
                            <span>@error('g-recaptcha-response') {{ $message }} @enderror</span>
                            <br>

                            <button type="submit" class="btn btn-primar">
                                Send Message
                            </button>
                        </form>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5> <i class="bi bi-house text-primary"></i> Physical Address</h5>
                    <p>Victoria Plaza</p>
                    <p>Nairobi Kenya</p>
                    <br>
                    <h5><i class="bi bi-phone  text-primary"></i> Phone</h5>
                    <p>0742 659 292</p>
                    <p>0701 700 144</p>
                    <br>
                    <h5> <i class="bi bi-envelope  text-primary"></i> Email</h5>
                    <p>
                        <a href="mailto:info@okulinksafaris.com">info@okulinksafaris.com</a>
                    </p>
                    <h5>Website</h5>
                    <p>
                        <a href="http://www.okulinksafaris.com">www.okulinksafaris.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
{!! NoCaptcha::renderJs() !!}
@endsection