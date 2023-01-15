@extends('layout.new')

@section('content')

<div class="bg-primar p-3">
    <div class="container">
    <h5 class=" text-white"> <a href="{{ url('/') }}" class="text-white"> Home </a> > Exciting videos about past travels.</h5>
    </div>
</div>
<br>

<div class="container">

        @auth
        <div class="text-right">
            <a href="{{ route('videos.create' )}}" class="btn btn-primar">Add New</a>
            <p>Videos Posted here will be visible to your users</p>
        </div>
        @endauth    
    <br>
    <div class="row">
        @forelse($videos as $video)
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-img-top">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$video->url}}" allowfullscreen></iframe>
                </div>
                </div>
               
                <p class="text-center">{{ $video->name }}</p>
                @auth
                <div class="card-body">
                    <form action="{{ route('videos.delete', $video->id ) }}" method="post">
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

        @empty
      
        <div class="text-center">
            <h2>videos coming soon...</h2>
        </div>
        @endforelse
    </div>
</div>

{{ $videos->links() }}

<br>
@endsection