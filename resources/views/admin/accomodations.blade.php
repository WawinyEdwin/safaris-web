@extends('layout.dash')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                   
                    <h2 class="pri">accomodations</h2>
                            <div class="text-right">
                            <a href="{{ route('accomodations.create') }}" class="btn btn-primary ">add accomodation</a>
                        </div>
                    
                            <div class="table-responsive">
                                <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                >
                    <thead>
                        <th>Id</th>
                        <th >name</th>
                        <th >category</th>
                        <th >location</th>
                        <th >rates</th>
                        <th >description</th>
                        <th >Image</th>
                        <th >Action</th>
                    </thead>
                    <tfoot>
                        <th>Id</th>
                        <th >name</th>
                        <th >category</th>
                        <th >location</th>
                        <th >rates</th>
                        <th >description</th>
                        <th >Image</th>
                        <th >Action</th>
                    </tfoot>
                    <tbody>
                        @foreach ($accomodations as $accomodation)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $accomodation->name }}</td>
                            <td>{{ $accomodation->category }}</td>
                            <td>{{ $accomodation->location }}</td>
                            <td>{{ $accomodation->rates }}</td>
                            
                            <td>{!! Str::limit($accomodation->description , 100) !!}</td>
                            <td>
                                <img
                                    src="{{ asset('/storage/'.$accomodation->image) }}"
                                    alt=""
                                    style="width: 100px; height: 50px"
                                />
                            </td>
                            <td>
                                <form
                                    action="{{ route('accomodations.publish', $accomodation->id) }}"
                                    method="post"
                                >
                                    @csrf @method('PUT') @if($accomodation->published
                                    == 0)
                                    <button
                                        class="btn btn-success"
                                        type="submit"
                                    >
                                        <i class="bi bi-bag-check"></i>
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
                                    action="{{ route('accomodations.delete', $accomodation->id) }}"
                                    method="post"
                                >
                                    <a
                                        href="{{ route('accomodations.show', $accomodation->slug) }}"
                                        class="btn btn-info"
                                        ><i class="bi bi-eye-fill"></i
                                    ></a>
                                    <a
                                        href="{{ route('accomodations.edit', $accomodation->id) }}"
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection