@extends('layout.index')

@section('content')

<div class=" bg-primary navbar expand-lg ">
    <div class="container">
    <p class="lead "> <a href="{{ url('/') }}" class="text-white">Home </a>/ Contact-US</p>
    </div>
   
</div>
<br>

<div class="container">
<div class="mapouter"><div class="gmap_canvas">
    <iframe width="700" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=syokiamau&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br><style>.mapouter{position:relative;text-align:right;height:300px;width:700px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:700px;}</style></div></div>
</div>

<br>
    
<div class="container">
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
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <p class="lead">Let's plan your dream holiday ~ Talk to us</p>

                        <form action="{{ route('enquiries.store') }}" method="post">
                            @csrf 
                            @method('POST')
                                
                            <div class="row">
                                <div class="col">
                                    <label for="full_name" class="form-label">Full Name</label>
                                    <input type="text" name="full_name" id="full_name" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="email_address" class="form-label">Email Address</label>
                                    <input type="email" name="email_address" id="email_address" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="tel" name="phone_number" id="phone_number" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="destinations" class="form-label">Preffered Destinations</label>
                                    <input type="text" name="destinations" id="destinations" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="adults" class="form-label">No of Adults</label>
                                    <input type="number" name="adults" id="adults" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="kids" class="form-label">No of Kids</label>
                                    <input type="number" name="kids" id="kids" class="form-control">
                                </div>
                            </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="nationality" class="form-label">Nationality</label>
                                            <input type="text" name="nationality" id="nationality" class="form-control">
                                        </div>
                                        <div class="col">
                                            <label for="travel_date" class="form-label">Travel Date</label>
                                            <input type="date" name="travel_date" id="travel_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="budget" class="form-label">Budget</label>
                                            <input type="number" name="budget" id="budget" class="form-control">
                                        </div>
                                        <div class="col">
                                            <label for="medium" class="form-label">Medium</label>
                                            <input type="text" name="medium" id="medium" class="form-control">
                                        </div>
                                        <div class="col">
                                            <label for="luxury" class="form-label">Luxury</label>
                                            <input type="text" name="luxury" id="luxury" class="form-control">
                                        </div>
                                    </div>

                                    <label for="additional_info" class="form-label">Additional Info</label>
                                    <textarea name="additional_info" id="additional_info" cols="30" rows="10" class="form-control">

                                    </textarea>
                                    <br>
                                    <button type="submit" class="btn btn-primary">
                                        Send Message
                                    </button>
                                </form>
                    </div>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5> <i class="bi bi-house"></i> Physical Address</h5>
            <p>Victoria Plaza</p>
            <p>Nairobi Kenya</p>
            <br>
            <h5><i class="bi bi-phone"></i> Phone</h5>
            <p>Tel : 00000000</p>
            <p>Mobile : 0000000</p>
            <br>
            <h5> <i class="bi bi-envelope"></i> Email</h5>
            <p>info@xxxxxxx.com</p>
            <p><a href="">wwww.xxxxxx.com</i></p>
        </div>
    </div>

    
</div>

@endsection