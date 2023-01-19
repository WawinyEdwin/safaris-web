@extends('layout.dash')
<style>
    form {
        padding: 0;
        margin: 0;
    }
</style>
@section('content')

.<div class="container-fluid">
        <div class="text-left">
            <h2 class="pri">events</h2>
        </div>
        <div class="text-right">
            <a href="{{ route('events.create') }}" class="btn btn-primar">add event</a>
        </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
       <p>manage events </p>
        </div>
        <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered"  id="dataTable"
                    width="100%"
                    cellspacing="0">
            <thead>
                <th >Id</th>
                <th >name</th>
                <th >category</th>
                <th >location</th>
                <th >price</th>
                <th >when</th>
                <th >starts</th>
                <th >ends</th>
                <th >description</th>
                <th >Image</th>
                <th>Action</th>
            </thead>
            <tfoot>
                <th >Id</th>
                <th >name</th>
                <th >category</th>
                <th >location</th>
                <th >price</th>
                <th >when</th>
                <th >starts</th>
                <th >ends</th>
                <th >description</th>
                <th >Image</th>
                <th>Action</th>
            </tfoot>
            <tbody>
                @foreach ($events as $event)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->category }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->price }}</td>
                    <td>{{ $event->when }}</td>
                    <td>{{ $event->starts }}</td>
                    <td>{{ $event->ends }}</td>
                    <td>{!! $event->description !!}</td>
                    <td>
                        <img src="{{ asset('/storage/'.$event->image) }}" alt="" style="width: 100px; height: 50px;">
                    </td>
                    <td>
                    <form action="{{ route('events.publish', $event->id) }}" method="post">
                        @csrf 
                            @method('PUT')

                        @if($event->published == 0)
                        <button class="btn btn-success" type="submit"><i class="bi bi-bag-check"></i></button>
                        @else
                        <button class="btn btn-warning" type="submit"><i class="bi bi-x-square"></i></button>
                        @endif
                        </form>
                       
                        <form action="{{ route('events.delete', $event->id) }}" method="post">
                            <a href="{{ route('events.show', $event->slug) }}" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>

                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                       
                       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        </div>
    </div>

    {{ $events->links() }}
</div>
    <hr>
@endsection