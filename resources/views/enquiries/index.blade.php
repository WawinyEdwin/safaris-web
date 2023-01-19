@extends('layout.dash')

@section('content')

<div class="container-fluid">
    <br>
        <div class="text-left">
            <h2 class="pri">Enquiry</h2>
            <p>This are enquiries made by your users via the contact form.</p>
        </div>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th >Id</th>
                <th >Full Name</th>
                <th >Email Address</th>
                <th >Phone Number</th>
                <th >Destinations</th>
                <th >Adults</th>
                <th >Kids</th>
                <th >Nationality</th>
                <th >Travel Date</th>
                <th >Budget</th>
                <th >Medium</th>
                <th >Luxury</th>
                <th >Additional Info</th>
                <th >Action</th>
            </thead>
            <tfoot>
                <th >Id</th>
                <th >Full Name</th>
                <th >Email Address</th>
                <th >Phone Number</th>
                <th >Destinations</th>
                <th >Adults</th>
                <th >Kids</th>
                <th >Nationality</th>
                <th >Travel Date</th>
                <th >Budget</th>
                <th >Medium</th>
                <th >Luxury</th>
                <th >Additional Info</th>
                <th >Action</th>
            </tfoot>
            <tbody>
                @foreach ($enquiries as $enquiry)
                <tr>
                    <td><i class="bi bi-check-square text-success"></i> {{ ++$i }}</td>
                    <td>{{ $enquiry->full_name }}</td>
                    <td>{{ $enquiry->email_address }}</td>
                    <td>{{ $enquiry->phone_number }}</td>
                    <td>{{ $enquiry->destinations}}</td>
                    <td>{{ $enquiry->adults }}</td>
                    <td>{{ $enquiry->kids }}</td>
                    <td>{{ $enquiry->nationality }}</td>
                    <td>{{ $enquiry->travel_date }}</td>
                    <td>{{ $enquiry->budget}}</td>
                    <td>{{ $enquiry->medium }}</td>
                    <td>{{ $enquiry->luxury }}</td>
                    <td>{{ $enquiry->additional_info }}</td>
                
                    <td>
                        <form action="{{ route('enquiries.destroy', $enquiry->id) }}" method="post">

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
{!! $enquiries->links() !!}
<hr>
@endsection