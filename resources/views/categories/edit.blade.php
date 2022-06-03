@extends('layout.admin')

@section('content')

<div class="container">
<br>
<div class="">
        <div class="text-right">
            <a href="{{ route('categories') }}" class="btn btn-primar">Back</a>
        </div>
        <div class="text-left">
            <p>Update Category</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('category.update', $category->id ) }}" method="post">
                @csrf 
                @method('POST')
                <div class="form-group">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" name="category_name" id="category_name" class="form-control" value="{{$category->category_name}}">
                    <span class="text-danger" >@error('category_name') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="sub_category" class="form-label">Sub Category1</label>
                    <input type="text" name="sub_category" id="sub_category" class="form-control" value="{{$category->sub_category}}">
                    <span class="text-danger" >@error('sub_category') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="sub_category1" class="form-label">Sub Category2</label>
                    <input type="text" name="sub_category1" id="sub_category1" class="form-control" value="{{$category->sub_category1}}">
                    <span class="text-danger" >@error('sub_category1') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="sub_category2" class="form-label">Sub Category3</label>
                    <input type="text" name="sub_category2" id="sub_category2" class="form-control" value="{{$category->sub_category2}}">
                    <span class="text-danger" >@error('sub_category2') {{ $message }} @enderror</span>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primar">Update Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection