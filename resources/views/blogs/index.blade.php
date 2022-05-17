@extends('layout.new')

@section('content')

<div class="container">
    <p class="pri text-center">Explore Exciting Travel Tales and learn about places you are to visit!</p>
    <hr>
    <div class="row">
        @foreach($coverBlogs as $blog)
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <img src="{{ asset('/storage/'. $blog->image) }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ \Illuminate\Support\Str::limit($blog->title, 30, $end='...') }}</h5>
                    <p class="card-text">{!! \Illuminate\Support\Str::limit($blog->content, 100, $end='...') !!}</p>
                    <a href="{{ route('blogs.show', $blog->id) }}"class="btn btn-primar" >Read More</a>
                    <br>
                    <br>
                    @auth
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-info">Edit</a>
                            </div>
                            <form action="{{ route('blogs.delete', $blog->id ) }}" method="post">
                                @csrf 
                                @method('DELETE')

                                <div class="col">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
            <br>
        </div>
        @endforeach
    </div>
    <p class="text-center">Explore More Tales</p>
    {{ $coverBlogs->links() }}
</div>
@endsection