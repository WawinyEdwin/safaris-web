@extends('layout.new')
<style>
    .h-4 {
        height: 200px;
        object-fit: cover;
    }
</style>
@section('content')

<div class="bg-primar p-3">
    <div class="container">
    <h5 class=" text-white"> <a href="{{ url('/') }}" class="text-white"> Home </a> > Explore Exciting Travel Tales and learn about places you are to visit</h5>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        @forelse($coverBlogs as $blog)
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <img src="{{ asset('/storage/'. $blog->image) }}" alt="" class="card-img-top h-4">
                <div class="card-body">
                    <h5 class="card-title">{{ \Illuminate\Support\Str::limit($blog->title, 30, $end='...') }}</h5>
                    <p class="card-text">{!! \Illuminate\Support\Str::limit($blog->content, 100, $end='...') !!}</p>
                    <a href="{{ route('blogs.show', $blog->id) }}"class="btn btn-primar" >Read More</a>
                  <br>
                   @auth
                    @if(Auth::user()->isAdmin == 1)
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                                <br>
                            <form action="{{ route('blogs.delete', $blog->id ) }}" method="post">
                                @csrf 
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                            <br>
                            @if($blog->published == 0)
                            <form action="{{ route('blogs.publish', $blog->id) }}" method="post">
                                <button class="btn btn-success" type="submit"><i class="bi bi-bag-check"></i></button>
                                @csrf 
                                @method('PUT')
                        </form>
                        @else
                        <form action="{{ route('blogs.publish', $blog->id) }}" method="post">
                                <button class="btn btn-warning" type="submit"><i class="bi bi-x-square"></i></button>
                                @csrf 
                                @method('PUT')
                        </form>
                        @endif
                         
                        
                    @endif
                    @endauth
                </div>
            </div>
            <br>
        </div>
        @empty 
        <div class="text-center">
            <h2>exciting stories coming soon....</h2>
        </div>
        @endforelse
    </div>
    <h5 class="text-center pri">Explore More Tales</h5>
    {{ $coverBlogs->links() }}
</div>
@endsection