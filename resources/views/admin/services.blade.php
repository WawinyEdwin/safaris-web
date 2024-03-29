@extends('layout.dash')

@section('content')

<div class="container-fluid">
<h2 class="pri">services</h2>
<div class="text-right">
                        <a href="{{ route('services.create') }}"class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> add service</a>
                    </div>
<br>
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
                <th >description</th>
                <th >Image</th>
                <th >Action</th>
            </thead>
            <tfoot>
                <th >Id</th>
                <th >name</th>
                <th >category</th>
                <th >location</th>
                <th >price</th>
                <th >description</th>
                <th >Image</th>
                <th >Action</th>
            </tfoot>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->category }}</td>
                    <td>{{ $service->location }}</td>
                    <td>{{ $service->price }}</td>
                    <td>{!! Str::limit($service->description, 100) !!}</td>
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