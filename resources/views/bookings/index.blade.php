@extends('layout.admin')

@section('content')

<div class="container-fluid">
    <div class="col-lg-12">
        <div class="text-left">
            <h2  class="pri">Bookings</h2>
        </div>
        <div class="text-right">
            <a href="{{ route('bookings.create') }}" class="btn btn-primar">Add Booking</a>
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered ">
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
                <th scope="col" width="280px">Action</th>
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
                    <td>
                        <form action="{{ route('bookings.delete', $booking->id) }}" method="post">
                            @csrf 
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
{{ $bookings->links() }}
<hr>
@endsection