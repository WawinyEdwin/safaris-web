@extends('layout.admin')

@section('content')

<div class="container">
<br>
<div class="">
        <div class="text-right">
            <a href="{{ route('categories.index') }}" class="btn btn-primar">Back</a>
        </div>
        <div class="text-left">
            <p>Add Category</p>
        </div>
    </div>
    
    @if($errors->any())
    <div class="alert alert-danger">
        <p>Something went wrong!, Retry</p>
        <ul>
            @foreach($errors as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('update_sub', ) }}" method="post">
                @csrf 
                @method('POST')
                <div class="form-group">
                    <label for="category" class="form-label">category</label>
                    <input type="text" name="category" id="category" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primar">Add category</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection