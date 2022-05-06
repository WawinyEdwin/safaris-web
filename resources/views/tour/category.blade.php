@extends('layout.index')

@section('content')

<div class=" bg-primar navbar expand-lg ">
    <div class="container">
    <h2 class="lead text-white"> <a href="{{ url('/') }}" class="text-white" >Home </a>/ {{ $category }}</h2>
    </div>
   
</div>

<br>
<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('image1.jpg') }}" alt="First slide">
    </div>
      @foreach ($tours as $tour)
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('/storage/'.$tour->image) }}" alt="Second slide">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('/storage/'.$tour->image) }}" alt="Third slide">
    </div> -->
    @endforeach
  </div>
  <a class="carousel-control-prev kala" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next kala" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div>
        <a href="{{ route('bookings.create') }}" class="btn btn-primar"> 
            Book Now
        </a>
    </div>

    <br>

<div class="table-responsive">
        <table class="table">
            <thead>
                <th scope="col">Hotel Name</th>
                <th scope="col">Location</th>
                <th scope="col">Transport</th>
                <th scope="col">PerPerson Sharing</th>
                <th scope="col">Single Room</th>
                
                <th scope="col">Meals</th>
            </thead>
            <tbody>
                @foreach ($tours as $tour)
                <tr>
                    
                    <td>{{ $tour->hotel }}</td>
                    <td>{{ $tour->location }}</td>
                    <td>{{ $tour->transport }}</td>
                    <td>{{ $tour->per_person_sharing }}</td>
                    <td>{{ $tour->single_room }}</td>
                    <td>{{ $tour->meals }}</td>
    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    

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

@endsection