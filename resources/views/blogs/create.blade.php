@extends('layout.new')

@section('content')

<div class="container">
    <h5 class="text-center">Create Textual Content for your audience here.</h5>
    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data" >
        @csrf 
        @method('POST')

        <div class="form-group">
            <label for="title" class="form-label">Blog Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Image Highlight</label>
            <input type="file" name="image" id="image" class="form-control-file" required>
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Blog Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primar">Create Blog</button>
    </form>
</div>

@endsection