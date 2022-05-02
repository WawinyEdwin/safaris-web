@extends('layout.admin')

@section('content')

<br>
<div class="">
    <div class="row">
        <div class="col">
            <div class="">
                <!-- <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top"> -->
                <div class="card-body">
                    <h5 class="card-title">Tours</h5>
                    <p class="card-text">Easily Manage Tours</p>
                    <a href="{{ route('tours.create') }}" class="btn btn-primary">NEW TOUR</a>
                </div>
            </div>
            <div class="col">
            <div class="">
        <table class="table">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Hotel</th>
                <th scope="col">Transport</th>
                <th scope="col">PerPerson Sharing</th>
                <th scope="col">Single Room</th>
                <th scope="col">Meals</th>
                <th scope="col" width="280px">Action</th>
            </thead>
            <tbody>
                @foreach ($tours as $tour)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $tour->hotel }}</td>
                    <td>{{ $tour->transport }}</td>
                    <td>{{ $tour->per_person_sharing }}</td>
                    <td>{{ $tour->single_room }}</td>
                    <td>{{ $tour->meals }}</td>
                    <td>
                        <form action="{{ route('tours.destroy', $tour->id') }}" method="post">
                            <a href="{{ route('tours.show', $tour->id') }}" class="btn btn-info">Show</a>
                            <a href="{{ route('tours.edit', $tour->id') }}" class="btn btn-primary">Edit</a>

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
        </div>
        <br>
</div>

@endsection