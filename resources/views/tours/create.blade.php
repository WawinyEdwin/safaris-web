@extends('layout.admin')

@section('content')

<div class="">
    <div class="">
        <div class="text-right">
            <a href="{{ route('admin') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="text-left">
            <p>Add Tour</p>
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

    <form action="{{ route('tours.store') }}" method="post" enctype="multipart/form-data">   
        @csrf
        @method('POST')    
            <div class="form-group">
                <label for="image" class="form-label">Hotel Image</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="hotel" class="form-label">Hotel Name</label>
                <input type="text" name="hotel" id="hotel" class="form-control">
            </div>
            <div class="form-group" >
                <label for="transport" class="form-label">Transport</label>
                <input type="text" name="transport" id="transport" class="form-control">
            </div>
            <div class="form-group">
                <label for="per_person_sharing" class="form-label">PerPerson Sharing</label>
                <input type="text" name="per_person_sharing" id="per_person_sharing" class="form-control">
            </div>
            <div class="form-group">
                <label for="single_room" class="form-label">Single Room</label>
                <input type="text" name="single_room" id="single_room" class="form-control">
            </div>
            <div class="form-group" class="form-label">
                <label for="meals" class="form-label">Meals</label>
                <input type="text" name="meals" id="meals"class="form-control">
            </div>
            <div class="form-group" class="form-label">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-control">
                    <option value="">--choose category--</option>
                    <option value="KenyanTours">Kenya Tours</option>
                    <option value="seasonHolidays">Season Holiday</option>
                    <option value="HoneyMoons">Couple/HoneyMoon</option>
                    <option value="topDeals">Top Deals</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" > 
                    Add Tour
                </button>
            </div>
    </form>
</div>

@endsection