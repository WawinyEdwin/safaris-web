@extends('layout.new')

@section('content')

<div class="container">
    
    <div class="row">
        @foreach($blogs as $blog)
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <img src="{{ asset('/storage/'. $blog->image) }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ \Illuminate\Support\Str::limit($blog->title, 30, $end='...') }}</h5>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($blog->content, 100, $end='...') }}</p>
                    <a href="{{ route('blogs.show', $blog->id) }}"class="btn btn-primar" >Read More</a>
                    <br>
                    <br>
                    @auth
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-info">Edit</a>
                            </div>
                            <form action="{{ route('blogs.destroy', $blog->id ) }}" method="post">
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
</div>


@endsection