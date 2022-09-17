@extends('layout.index')

@section('content')

    <div class=" bg-primar navbar expand-lg ">
        <div class="container">
        <h2 class="lead text-white"> <a href="{{ url('/') }}" class="text-white" >Home </a>> {{ $sub_category  }} </h2>
        </div>
    </div>
    <br>

<div class="container">
    <div class="text-center">
        <a href="{{ route('bookings.create', $sub_category) }}" class="btn btn-primar"> 
            Book Now
        </a>
    </div>
    <br>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          
        @forelse($tours as $tour)
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('/storage/'.$tour->image) }}" alt="Second slide">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="{{ asset('/storage/'.$tour->image1) }}" alt="First slide">
            </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="{{ asset('/storage/'.$tour->image2) }}" alt="First slide">
          </div>

        @empty
          <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('okulink.jpg') }}" alt="Second slide">
            </div>

        @endforelse
      </div>
      <a class="carousel-control-prev kala" href="#carouselExampleControls" role="button" data-slide="prev">
            <span><i class="bi bi-arrow-left-circle-fill" style="font-size: 40px; color: #000;"  aria-hidden="true"></i></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next kala" href="#carouselExampleControls" role="button" data-slide="next">
            <span><i class="bi bi-arrow-right-circle-fill" style="font-size: 40px; color: #000;"  aria-hidden="true"></i></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
<br>
    
      <h5 class="text-center ">Exciting Holiday Offers</h5>
<div class="table-responsive">
        <table class="table table-bordered">
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
        <h5 class="pri text-center">More Information</h5>
        <br>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <h5>Inclusions</h5>
                <ul>
                    <li>Accomodation</li>
                    <li>Meals as indicated</li>
                    <li>Use of Hotel Facilities</li>
                    <li>Entertainment at the Hotel</li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-12">
                <h5>Exclusions</h5>
                <ul>
                    <li>Personal Expenses</li>
                    <li>Park/Conservancy Fees</li>
                    <li>Any other fees not included</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('bookings.create', $sub_category) }}" class="btn btn-primar"> 
            Book Now
        </a>
    </div>
</div>

<br>
@endsection