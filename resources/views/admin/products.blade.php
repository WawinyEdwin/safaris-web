@extends('layout.dash')
@section('content') .
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h6 class="m-0 font-weight-bold text-primary">products</h6>
                        <a href="{{ route('addtour.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-comments  fa-sm text-white-50"></i>add product</a>
                    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                >
                    <thead>
                        <th>Id</th>
                        <th>name</th>
                        <th>category</th>
                        <th>location</th>
                        <th>price</th>
                        <th>In stock</th>
                        <th>description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tfoot>
                        <th>Id</th>
                        <th>name</th>
                        <th>category</th>
                        <th>location</th>
                        <th>price</th>
                        <th>In stock</th>
                        <th>description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tfoot>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->location }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity_available }}</td>
                            <td>{!! $product->description !!}</td>
                            <td>
                                <img
                                    src="{{ asset('/storage/'.$product->image) }}"
                                    alt=""
                                    style="width: 100px; height: 50px"
                                />
                            </td>
                            <td>
                                <form
                                    action="{{ route('products.publish', $product->id) }}"
                                    method="post"
                                >
                                    @csrf @method('PUT') @if($product->published
                                    == 0)
                                    <button
                                        class="btn btn-success"
                                        type="submit"
                                    >
                                        <i class="fa fa-bag-check"></i>
                                    </button>
                                    @else
                                    <button
                                        class="btn btn-warning"
                                        type="submit"
                                    >
                                        <i class="bi bi-x-square"></i>
                                    </button>
                                    @endif
                                </form>

                                <form
                                    action="{{ route('products.delete', $product->id) }}"
                                    method="post"
                                >
                                    <a
                                        href="{{ route('products.show', $product->slug) }}"
                                        class="btn btn-info"
                                        ><i class="bi bi-eye-fill"></i
                                    ></a>
                                    <a
                                        href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-primary"
                                        ><i class="bi bi-pencil-square"></i
                                    ></a>

                                    @csrf @method('DELETE')
                                    <button
                                        type="submit"
                                        class="btn btn-danger"
                                    >
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ $products->links() }}
</div>
<hr />
@endsection
