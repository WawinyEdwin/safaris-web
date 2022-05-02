@extends('layout.index')

@section('content')



<div class="container">
<div class="col-lg-12">
        <div class="text-left">
            <h2>Available Tours</h2>
        </div>
        <div class="text-right">
            <a href="{{ route('tours.create') }}" class="btn btn-success">Add Tour</a>
        </div>
    </div>
    <div class="">
        <table class="table">
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
                <th scope="col">Charges</th>
                <th scope="col">Destination</th>
                <th>Action</th>
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
                    <td>{{ $booking->charges }}</td>
                    <td>
                        <a href="{{ route('bookings.edit') }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ !!$bookings->links() !!}}
    </div>
</div>

<hr>
@endsection