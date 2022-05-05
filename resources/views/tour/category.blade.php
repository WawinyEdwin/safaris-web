@extends('layout.index')

@section('content')

<div class=" bg-primary navbar expand-lg ">
    <div class="container">
    <p class="lead "> <a href="{{ url('/') }}" class="text-white">Home </a>/ {{ $category }}</p>
    </div>
   
</div>

<br>
<div class="container">

<div>
        <a href="{{ route('bookings.create') }}" class="btn btn-primary"> 
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

    <div>
        <a href="{{ route('bookings.create') }}" class="btn btn-primary"> 
            Book Now
        </a>
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


</div>

@endsection