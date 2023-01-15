@extends('layout.admin')


@section('content')

.<div class="container-fluid">
        <div class="text-left">
            <h2 class="pri">Tours Posted</h2>
        </div>
        <div class="text-right">
            <a href="{{ route('addtour.create') }}" class="btn btn-primar">Add Tour</a>
        </div>
    <br>

<div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Category</th>
                <th scope="col">Sub-Category</th>
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
                    <td>{{ $tour->sub_category }}</td>
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
                    <form action="{{ route('addtour.publish', $tour->id) }}" method="post">
                        @csrf 
                            @method('PUT')

                        @if($tour->published == 0)
                            <button class="btn btn-success"><i class="bi bi-bag-check"></i></button>
                            @else 
                            <button class="btn btn-warning"><i class="bi bi-x-square"></i></button>
                            @endif
                           
                        </form>
                            <form action="{{ route('addtour.delete', $tour->id) }}" method="post">
                            @csrf 
                            @method('DELETE')
                            
                            <a href="{{ route('addtour.show', $tour->id) }}" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
                            <a href="{{ route('addtour.edit', $tour->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>

                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                            
                       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $tours->links() }}
</div>
    <hr>
@endsection