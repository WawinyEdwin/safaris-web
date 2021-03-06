@extends('layout.admin')

@section('content')

<div class="">
    <br>
        <div class="text-left">
            <h2 class="pri">Enquiry</h2>
            <p>This are enquiries made by your users via the contact form.</p>
        </div>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Destinations</th>
                <th scope="col">Adults</th>
                <th scope="col">Kids</th>
                <th scope="col">Nationality</th>
                <th scope="col">Travel Date</th>
                <th scope="col">Budget</th>
                <th scope="col">Medium</th>
                <th scope="col">Luxury</th>
                <th scope="col">Additional Info</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                @foreach ($enquiries as $enquiry)
                <tr>
                    <td>{{ ++$i }}</td>
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