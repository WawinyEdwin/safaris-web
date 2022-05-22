@extends('layout.new')

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

        @empty 

        <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('elephant.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cool Title 2</h5>
                            <div class="blue"></div>
                                <br>
                            <p class="card-text">some cool blog content 3 here</p>
                            <div class="text-right">
                                <a href="{{ url('/') }}" class="btn btn-primar" >
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('elephant.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cool Title 1</h5>
                            <div class="blue"></div>
                                <br>
                            <p class="card-text">some cool blog content 2 here</p>
                            <div class="text-right">
                                <a href="{{ url('/') }}" class="btn btn-primar" >
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('elephant.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cool Title</h5>
                            <div class="blue"></div>
                                <br>
                            <p class="card-text">some cool blog content here</p>
                            <div class="text-right">
                                <a href="{{ url('/') }}" class="btn btn-primar" >
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
        @endforelse
    </div>
    <h5 class="text-center pri">Explore More Tales</h5>
    {{ $coverBlogs->links() }}
</div>
@endsection