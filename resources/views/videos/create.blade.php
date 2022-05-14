
@extends('layout.admin')

@section('content')

<div class="container">
    <br>
    <p class="text-center">The video will be shown to your users once you add them.</p>
    <div class="text-right">
        <a href="{{ route('highlights.index' )}}" class="btn btn-primar">Back</a>
    </div>
<br>
<br>
    <div class="card">
        <div class="card-body">
            <br>
            <form action="{{ route('videos.store') }}" method="post">
                @csrf 
                @method('POST')

                <div class="form-group">
                    <label for="url" class="form-label">New Video -- </label>
                    <small>Please paste the youtube url of the desired video</small>
                    <input type="text" name="url" id="url" class="form-control" required>
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-primar">Add</button>
                </div>
            </form>   
        </div>
    </div>
</div>


@endsection