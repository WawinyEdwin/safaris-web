@extends('layout.index')
@section('content')
<div class=" bg-primar navbar expand-lg ">
    <div class="container">
    <h5 class=" text-white"> <a href="{{ url('/') }}" class="text-white" >Home </a>> {{ $category  }} </h5>
    </div>
</div>
<br>
<div class="container">
    <div class="text-center">
        <a href="{{ route('bookings.create', $category ) }}" class="btn btn-primar"> 
            Book Now
        </a>
    </div>
    <br>
    <h5 class="text-center pri">Exciting Holiday Offers</h5>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th scope="col">More</th>
                <th scope="col">Hotel Name</th>
                <th scope="col">Location</th>
                <th scope="col">Transport</th>
                <th scope="col">PerPerson Sharing</th>
                <th scope="col">Single person per room</th>
                <th scope="col">Meals</th>
            </thead>
            <tbody>
                @foreach ($tours as $tour)
                @if($tour->published == 1)
                <tr>
                <td> <a href="{{ route('addtour.show', $tour->id) }}" style="color: #000">info</a> </td>
                    <td>{{ $tour->hotel }}</td>
                    <td>{{ $tour->location }}</td>
                    <td>{{ $tour->transport }}</td>
                    <td>{{ $tour->per_person_sharing }}</td>
                    <td>{{ $tour->single_room }}</td>
                    <td>{{ $tour->meals }}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="text-center">
    <div class="">
        <h5 class="pri text-center">More Information</h5>
        @if($info)
        <div>{!! $info->additional_info !!}</div>
        @endif
    </div>
        <a href="{{ route('bookings.create', $category) }}" class="btn btn-primar"> 
            Book Now
        </a>
    </div>

<br>
</div>
@endsection