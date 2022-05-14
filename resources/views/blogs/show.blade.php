@extends('layout.new')

@section('content')

<style>
    .justify > img{
        padding: 10px 50px 0 50px ;
        width: auto;
        height: 300px;
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .justify > img{
        padding: 0;
        width: auto;
        height: 300px;
        object-fit: cover;
    }        
    }
    .dinline{
        display: inline-flex;
        justify-content: between;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-7 col-sm-12">
            <div class="card">
                <div class="justify">
                    <img src="{{ asset('/storage/'. $blog->image )}}" alt="{{ $blog->title }}" class="img-fluid">
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">{{ $blog->title }}</h5> 
                        <small>{{ $blog->created_at }}</small>
                    </div>
                    <div class="container">
                        <p>{{ $blog->content }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-sm-12">
            <div class="card mb-3">
                    <div class="card-body">
                        <p class="text-primary text-center">Top Holiday Stories</p>
                        <hr>
                        @foreach($blogs as $blog)
                            <div class="row no gutters">
                                <div class="col">
                                    <img src="{{ asset('/storage/'. $blog->image ) }}" alt="" class="card-img-top">
                                </div>
                                <div class="col">
                                    <p>{{ \Illuminate\Support\Str::limit($blog->title, 30, $end='...') }}</p>
                                    <a href="{{ route('blogs.show', $blog->id ) }}" class="btn btn-primar">Read More</a>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                       
                    </div>
            </div>
        </div>
</div>

@endsection