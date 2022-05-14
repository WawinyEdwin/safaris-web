@extends('layout.admin')

@section('content')

.<div class="container">
        <div class="text-left">
            <h2 class="pri">Tours Posted</h2>
        </div>
        <div class="text-right">
            <a href="{{ route('tours.create') }}" class="btn btn-primar">Add Tour</a>
        </div>
    <br>

<div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Category</th>
                <th scope="col">Hotel</th>
                <th scope="col">Location</th>
                <th scope="col">Transport</th>
                <th scope="col">PerPerson Sharing</th>
                <th scope="col">Single Room</th>
                
                <th scope="col">Meals</th>
                <th scope="col">Image</th>
                <th scope="col" width="280px">Action</th>
            </thead>
            <tbody>
                @foreach ($tours as $tour)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $tour->category }}</td>
                    <td>{{ $tour->hotel }}</td>
                    <td>{{ $tour->location }}</td>
                    <td>{{ $tour->transport }}</td>
                    <td>{{ $tour->per_person_sharing }}</td>
                    <td>{{ $tour->single_room }}</td>
                    <td>{{ $tour->meals }}</td>
                    <td>
                        <img src="{{ asset('/storage/'.$tour->image) }}" alt="" style="width: 100px; height: 50px;">
                    </td>
                    <td>
                        <form action="{{ route('tours.destroy', $tour->id) }}" method="post">
                            <a href="{{ route('tours.show', $tour->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-primary">Edit</a>

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
    <hr>
@endsection