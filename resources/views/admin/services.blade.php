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
                        <form action="{{ route('services.publish', $service->id) }}" method="post">
                            @csrf 
                            @method('PUT')
                            @if($service->published == 0)
                            <button class="btn btn-success" type="submit"><i class="bi bi-bag-check"></i></button>
                            @else
                            <button class="btn btn-warning" type="submit"><i class="bi bi-x-square"></i></button>
                            @endif
                        </form>

                        <form action="{{ route('services.delete', $service->id) }}" method="post">   
                        <a href="{{ route('services.show', $service->slug) }}" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>         
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
    {{ $services->links() }}
</div>
    <hr>
@endsection