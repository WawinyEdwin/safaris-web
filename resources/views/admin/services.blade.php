@extends('layout.admin')

@section('content')

.<div class="container-fluid">
        <div class="text-left">
            <h2 class="pri">services</h2>
        </div>
        <div class="text-right">
            <a href="{{ route('services.create') }}" class="btn btn-primar">Add service</a>
        </div>
    <br>

<div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">name</th>
                <th scope="col">category</th>
                <th scope="col">location</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
                <th scope="col">Image</th>
                <th scope="col" width="280px">Action</th>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->category }}</td>
                    <td>{{ $service->location }}</td>
                    <td>{{ $service->price }}</td>
                    <td>{!! $service->description !!}</td>
                    <td>
                        <img src="{{ asset('/storage/'.$service->image) }}" alt="" style="width: 100px; height: 50px;">
                    </td>
                    <td>
                        <a href="{{ route('services.show', $service->slug) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('services.delete', $service->id) }}" method="post">            
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        @if($service->published == 0)
                        <form action="{{ route('services.publish', $service->id) }}" method="post">
                            @csrf 
                            @method('PUT')
                            <button class="btn btn-success" type="submit">publish</button>
                        </form>
                        @else
                        <form action="{{ route('services.publish', $service->id) }}" method="post">
                            @csrf 
                            @method('PUT')
                            <button class="btn btn-warning" type="submit">un-publish</button>
                        </form>
                        @endif
                      
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $services->links() }}
</div>
    <hr>
@endsection