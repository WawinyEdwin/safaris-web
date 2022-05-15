@extends('layout.new')

@section('content')
<hr>
<div class="container">
<h3 class="text-center pri">Exciting videos about past travels.</h3>
@auth
<div class="text-right">
    <a href="{{ route('videos.create' )}}" class="btn btn-primar">Add New</a>
</div>
@endauth
<br>
    <div class="row">
        @foreach($videos as $video)
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$video->url}}" allowfullscreen></iframe>
                </div>
                <p class="text-center">{{ $video->name }}</p>
                @auth
                <div class="card-body">
                    <form action="{{ route('videos.destroy', $video->id ) }}" method="post">
                        @csrf 
                        @method('DELETE')
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
                @endauth
            </div>
        </div>
        @endforeach
    </div>
</div>

{{ $videos->links() }}
@endsection