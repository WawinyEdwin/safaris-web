@extends('layout.admin')
@section('content')

@if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
@endif


 
<section class="">
    <div class="fluid-container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="">
          <div class="card bg-white">
            <div class="card-header p-3">
              <a href="{{route('blogs.create')}}" class="btn btn-success float-right" data-toggle="tooltip" data-placement="left">
                <i class="bi bi-plus" aria-hidden="true"></i>
                <span class="hidden-xs">
                    write blog
                </span>
            </a>
            <h5 class="mb-0 text-center"><i class="bi bi-tasks me-2"></i>Blogs you can share to your users</h5>
            </div>
            <div class="card-body " data-mdb-perfect-scrollbar="true" >
              <table class="table mb-0" style="width: 1200px;">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date Posted</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col" width="280px">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($blogs as $blog)
                      <tr class="fw-normal">
                      <th>
                        <span class="ms-2">{{ $blog->id}}</span>
                      </th>
                      <td class="align-middle">
                        <span >{{$blog->created_at}}</span >
                      </td>
                      <td class="align-middle">
                        <h6 class="mb-0"><span >{{$blog->title}}</span></h6>
                      </td>
                      <td class="align-middle">
                        <span  ><img style="width:70px; height: 50px;" src="/storage/.{{$blog->image}}" alt="{{ $blog->title}}"></span >
                      </td>
                      <td class="align-middle d-flex w-20 justify-content-between">
                        <a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-primary" data-mdb-toggle="tooltip" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                        <a href="{{route('blogs.show', $blog->id)}}" class="btn btn-info" data-mdb-toggle="tooltip" title="View"><i class="bi bi-eye  me-3"></i></a>
                        <form method="POST" action="{{route('blogs.delete', $blog->id )}}">
                          @method('DELETE')
                          @csrf
                          <button type="submit"  class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                        <form method="POST" action="{{route('blogs.publish', $blog->id )}}">
                          @method('PUT')
                          @csrf
                          @if ($blog->published == 1)
                          <button type="submit"  class="btn btn-warning"  ><i class="bi bi-x-octagon"></i></button>
                          @else
                          <button type="submit"  class="btn btn-success"  title="publish"><i class="bi bi-upload"></i></button>
                          @endif
                        </form>
                      </td>
                      </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection