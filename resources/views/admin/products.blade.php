@extends('layout.admin')

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
                        <form action="{{ route('products.delete', $product->id) }}" method="post">
                            <a href="{{ route('products.show', $product->slug) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>

                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        @if($product->published == 0)
                        <form action="{{ route('products.publish', $product->id) }}" method="post">
                        <button class="btn btn-success">publish</button>
                        @csrf 
                            @method('PUT')
                        </form>
                        @else
                        <form action="{{ route('products.publish', $product->id) }}" method="post">
                        <button class="btn btn-warning">un-publish</button>
                        @csrf 
                            @method('PUT')
                        </form>
                        @endif
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