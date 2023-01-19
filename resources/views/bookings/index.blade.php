@extends('layout.dash')

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
                <th >TX-Code</th>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Adults</th>
                <th>Kids</th>
                <th>Arrival Date</th>
                <th>special_requirements</th>
                <th>Destination</th>
                <th>Action</th>
            </thead>
            <tfoot>
                <th >TX-Code</th>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Adults</th>
                <th>Kids</th>
                <th>Arrival Date</th>
                <th>special_requirements</th>
                <th>Destination</th>
                <th>Action</th>
            </tfoot>
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
                          <button type="submit"  class="btn btn-success"  title="confirm"><i class="bi bi-check"></i></button>
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