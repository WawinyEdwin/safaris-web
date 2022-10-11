@extends('layout.admin')

@section('content')

<div class="container-fluid">
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="col-lg-12">
        <div class="text-left">
            <h2  class="pri">Bookings</h2>
        </div>
    
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered ">
            <thead>
                <th scope="col">TX-Code</th>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Adults</th>
                <th scope="col">Kids</th>
                <th scope="col">Arrival Date</th>
                <th scope="col">special_requirements</th>
                <th scope="col">Destination</th>
                <th scope="col" width="280px">Action</th>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->transaction_code }}</td>
                    <td>{{ ++$i }}</td>
                    <td>{{ $booking->first_name }}</td>
                    <td>{{ $booking->last_name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone_number }}</td>
                    <td>{{ $booking->adults }}</td>
                    <td>{{ $booking->kids }}</td>
                    <td>{{ $booking->arrival_date }}</td>
                    <td>{{ $booking->destination }}</td>
                    <td>{{ $booking->special_requirements }}</td>
                    <td>
                        <form method="POST" action="{{route('bookings.confirm', $booking->id )}}">
                          @method('PUT')
                          @csrf
                          @if ($booking->status == 1)
                          <button type="submit"  class="btn btn-warning"  ><i class="bi bi-x-octagon"></i>Pending</button>
                          @else
                          <button type="submit"  class="btn btn-success"  title="confirm"><i class="bi bi-check"></i>Done</button>
                          @endif
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