@extends('layout.admin')

@section('content')

<div class="container">
    <h5 class="text-center">Edit Textual Content for your audience here.</h5>
    <br>
    <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data" >
        @csrf 
        @method('POST')

        <div class="form-group">
            <label for="title" class="form-label">Blog Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $blog->title }}" required>
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Blog Content</label>
            <textarea name="content" id="summernote" cols="30" rows="10"  value="{{ $blog->content }}" class="form-control" required>{{ $blog->content }}</textarea>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                <label for="image" class="form-label">Image Highlight</label>
            <input type="file" name="image" id="image" class="form-control-file" required>
                </div>
                <div class="col-md-6">
                <label for="image2" class="form-label">Image Highlight2</label>
            <input type="file" name="image2" id="image2" class="form-control-file" >
                </div>
            </div>
            
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                <label for="image3" class="form-label">Image Highlight3</label>
            <input type="file" name="image3" id="image3" class="form-control-file">
                </div>
                <div class="col-md-6">
                <label for="image4" class="form-label">Image Highlight4</label>
            <input type="file" name="image4" id="image4" class="form-control-file" >
                </div>
            </div>
            
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                <label for="image5" class="form-label">Image Highlight5</label>
            <input type="file" name="image5" id="image5" class="form-control-file">
                </div>
                <div class="col-md-6">
                <label for="image6" class="form-label">Image Highlight6</label>
            <input type="file" name="image6" id="image6" class="form-control-file" >
                </div>
            </div>
            
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primar">Edit Blog</button>
        </div>
        
    </form>
</div>

@endsection