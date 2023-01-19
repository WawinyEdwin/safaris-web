@extends('layout.dash')


@section('content')

.<div class="container-fluid">
        <div class="text-left">
            <h2 class="pri">safaris</h2>
        </div>
        <div class="text-right">
            <a href="{{ route('addtour.create') }}" class="btn btn-primary">Add Tour</a>
        </div>
    <br>

<div class="table-responsive">
        <table class="table table-bordered"   id="dataTable"
                    width="100%"
                    cellspacing="0">
            <thead>
                <th >Id</th>
                <th >Category</th>
                <th >Sub-Category</th>
                <th >Hotel</th>
                <th >Location</th>
                <th >Transport</th>
                <th >PerPerson Sharing</th>
                <th >Single Room</th>
                
                <th >Meals</th>
                <th >Image</th>
                <th >Action</th>
            </thead>
            <tfoot>
                <th >Id</th>
                <th >Category</th>
                <th >Sub-Category</th>
                <th >Hotel</th>
                <th >Location</th>
                <th >Transport</th>
                <th >PerPerson Sharing</th>
                <th >Single Room</th>
                
                <th >Meals</th>
                <th >Image</th>
                <th >Action</th>
            </tfoot>
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