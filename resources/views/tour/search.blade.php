@extends('layout.new')

@section('content')

    <div class="bg-primar p-3">
        <div class="container">
        <h5 class=" text-white"> <a href="{{ url('/') }}" class="text-white"> Home </a> / Exquisite places you can visit and special Deals.</h5>
        </div>
    </div> 
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="">
                <h5 class="text-center pt-2 pri">We found these amazing places!</h5>
                <div class="table-responsive">
                    @if(count($tours) > 1)
                    <table class="table table-bordered">
                        <thead>
                            <th scope="col">Hotel</th>
                            <th scope="col">Location</th>
                            <th scope="col">Transport</th>
                            <th scope="col">Per Person Sharing</th>
                            <th scope="col">Single Room</th>
                            <th scope="col">Meals on Board</th>
                            <th scope="col">ACTION</th>
                        </thead>
                        <tbody>
                       
                            @foreach($tours as $tour)
                            <tr>
                                <td>{{ $tour->hotel }}</td>
                                <td>{{ $tour->location }}</td>
                                <td>{{ $tour->transport }}</td>
                                <td>{{ $tour->per_person_sharing }}</td>
                                <td>{{ $tour->single_room }}</td>
                                <td>{{ $tour->meals}}</td>
                                <td>
                                    <a href="{{ route('bookings.create', $tour->sub_category) }}" class="btn btn-primar"> 
                                        Book Now
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                            @else
                                <h5 class="text-danger text-center" >Oops! No Deals were found, Try a different Search term</h5>

                            @endif
                </div>
                <br>
                <h5 class="pri text-center">More Information</h5>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <h5>Inclusions</h5>
                        <ul>
                            <li>1/2 nights Accomodation</li>
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
            <div>
            </div>
            </div>
        </div>
</div>
</div>
<br>
@endsection