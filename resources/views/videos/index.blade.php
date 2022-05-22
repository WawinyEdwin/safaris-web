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
        </div>
        @endauth    
    <br>
    <div class="row">
        @forelse($videos as $video)
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$video->url}}" allowfullscreen></iframe>
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
      
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=cVecpIbonnU" allowfullscreen></iframe>
                            </div>
                            <br>
                            <div class="blue"></div>
                                <br>
                            <div class="card-title text-center">
                                <p>Good Content</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=cVecpIbonnU" allowfullscreen></iframe>
                            </div>
                            <br>
                            <div class="blue"></div>
                                <br>
                            <div class="card-title text-center">
                                <p>Maasai Mara Tings</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=cVecpIbonnU" allowfullscreen></iframe>
                            </div>
                            <br>
                            <div class="blue"></div>
                                <br>
                            <div class="card-title text-center">
                                <p>Mt. Kenya Peak</p>
                            </div>
                        </div>
                    </div>
                </div>
        @endforelse
    </div>
</div>

{{ $videos->links() }}

<br>
@endsection