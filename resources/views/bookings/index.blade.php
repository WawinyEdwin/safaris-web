@extends('layout.admin')

@section('content')



<div class="container-fluid">
<div class="col-lg-12">
        <div class="text-left">
            <h2>Bookings</h2>
        </div>
        <div class="text-right">
            <a href="{{ route('tours.create') }}" class="btn btn-primary">Add Booking</a>
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table ">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Adults</th>
                <th scope="col">Kids</th>
                <th scope="col">Arrival Date</th>
                <th scope="col">special_requirements</th>
                <!-- <th>Action</th> -->
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $booking->first_name }}</td>
                    <td>{{ $booking->last_name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone_number }}</td>
                    <td>{{ $booking->adults }}</td>
                    <td>{{ $booking->kids }}</td>
                    <td>{{ $booking->arrival_date }}</td>
                    <td>{{ $booking->special_requirements }}</td>
                
                    <!-- <td>
                        <a href="{{ route('bookings.edit', $booking->id ) }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ route('bookings.show', $booking->id ) }}" class="btn btn-info">Show</a>
                    </td> -->
                </tr>
                @endforeach
            </tbody>
        </table>

      
    </div>
</div>
{{ $bookings->links() }}
<hr>
@endsection