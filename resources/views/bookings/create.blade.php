@extends('layout.index')

@section('content')

<div class=" bg-success navbar expand-lg ">
    <div class="container">
    <p class="lead ">Home / Confirm Booking.</p>
    </div>
   
</div>

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
<div class="row">
    <div class="col-7 mr-2">
        <div class="text-center">
        <p>Booking Information</p>
            <small>Please fill all the details correctly!</small>
        </div>
        <div class="card mr-3">

        <div class="card-body">
           
        <form action="{{ route('bookings.store') }}" method="post" class="form-group">
            <div class="row">
                <div class="col">
                <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" required>
                </div>
                <div class="col">
                <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                <label for="email1" class="form-label"> Email Address</label>
            <input type="email" name="email1" id="email1" class="form-control" placeholder="example@mail.com" required>
                </div>
                <div class="col">
                    
            <label for="email2" class="form-label"> Confirm Email Address</label>
            <input type="email2" name="email2" id="email2" class="form-control" placeholder="example@mail.com" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                <label for="country" class="form-label">Country</label>
            <select name="country" id="country" class="form-control" required>
                <option value="">--choose country--</option>
                <option value="Kenya">Kenya</option>
                <option value="Uganda">Uganda</option>
                <option value="Tanzania">Tanzania</option>
            </select>
                </div>
                <div class="col">
                <label for="phone_number" class="form-label">Phone Number</label>
            <input type="tel" name="phone_number" id="phone_number" class="form-control" required>
                </div>
            </div>
          

            <div class="row">
                <div class="col">
                <label for="arrival_date" class="form-label">Arrival Date</label>
            <input type="date" name="arrival_date" id="arrival_date" class="form-control" required>
                </div>
                <div class="col">

            <label for="adults" class="form-label">Adults</label>
            <input type="number" name="adults" id="adults" class="form-control" required>
                </div>
                <div class="col">
                <label for="kids" class="form-label">Kids</label>
            <input type="number" name="kids" id="kids" class="form-control" required>

                </div>
            </div>

            <label for="special_requirements" class="form-label">Special Requirements</label>
            <textarea name="special_requirements" id="special_requirements" cols="30" rows="5" class="form-control">

            </textarea>

            <br>
            <button class="btn btn-success">
                Confirm Booking
            </button>
        </form>
        </div>
        </div> 
    </div>
    <div class="col-4">
        <p class="text-center">Top Holiday Deals</p>
        <div class="card">
            <div class="">
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <br>
            <div class="">
                <img src="" alt="">
                <p> Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <br>
            <div class="">
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>
    </div>

</div>
</div>

<hr>

@endsection