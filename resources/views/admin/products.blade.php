@extends('layout.admin')
<style>
    form {
        padding: 0;
        margin: 0;
    }
</style>
@section('content')

.<div class="container-fluid">
        <div class="text-left">
            <h2 class="pri">products</h2>
        </div>
        <div class="text-right">
            <a href="{{ route('addtour.create') }}" class="btn btn-primar">add product</a>
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
                <th scope="col">In stock</th>
                <th scope="col">description</th>
                <th scope="col">Image</th>
                <th scope="col" width="280px">Action</th>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->location }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity_available }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <img src="{{ asset('/storage/'.$product->image) }}" alt="" style="width: 100px; height: 50px;">
                    </td>
                    <td>
                    <form action="{{ route('products.publish', $product->id) }}" method="post">
                        @csrf 
                            @method('PUT')

                        @if($product->published == 0)
                        <button class="btn btn-success" type="submit"><i class="bi bi-bag-check"></i></button>
                        @else
                        <button class="btn btn-warning" type="submit"><i class="bi bi-x-square"></i></button>
                        @endif
                        </form>
                       
                        <form action="{{ route('products.delete', $product->id) }}" method="post">
                            <a href="{{ route('products.show', $product->slug) }}" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>

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
    {{ $products->links() }}
</div>
    <hr>
@endsection