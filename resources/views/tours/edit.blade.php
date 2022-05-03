@extends('layout.admin')

@section('content')

<div class="">
    <div class="">
        <br>
        <div class="text-right">
            <a href="{{ route('admin') }}" class="btn btn-success">Back</a>
        </div>
        <div class="text-left">
            <p>Edit Tour</p>
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

    <form action="{{ route('tours.update', $tours->id) }}" method="post">
        @csrf 
        @method('PUT')

    <div class=" p-3">
        <div class="">
           
            <div class="form-group">
                <label for="image" class="form-label">Hotel Image</label>
                <input type="file" name="image" id="image" class="form-control-file" value="{{ $tour->image }}">
            </div>
            <div class="form-group">
                <label for="hotel" class="form-label">Hotel Name</label>
                <input type="text" name="hotel" id="hotel" class="form-control" value="{{ $tour->hotel }}">
            </div>
            <div class="form-group" >
                <label for="transport" class="form-label">transport</label>
                <input type="text" name="transport" id="transport" class="form-control" value="{{ $tour->transport }}">
            </div>
            <div class="form-group">
                <label for="per_person_sharing" class="form-label">PerPerson Sharing</label>
                <input type="text" name="per_person_sharing" id="per_person_sharing" class="form-control" value="{{ $tour->per_person_sharing }}">
            </div>
            <div class="form-group">
                <label for="single_room" class="form-label">Single Room</label>
                <input type="text" name="single_room" id="single_room" class="form-control" value="{{ $tour->single_room }}">
            </div>
            <div class="form-group" class="form-label">
                <label for="meals" class="form-label">Meals</label>
                <input type="text" name="meals" id="meals"class="form-control" value="{{ $tour->meals }}">
            </div>
            <div class="form-group" class="form-label">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-control">
                    <option value="{{ $tour->category }}"></option>
                    <option value="Kenyan Tours">Kenya Tours</option>
                    <option value="season Holidays">Season Holiday</option>
                    <option value="Honeymoons">Couple/HoneyMoon</option>
                    <option value="top deals">Top Deals</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success" > 
                    Edit Tour
                </button>
            </div>
            
        </div>
    </div>
    </form>
</div>

@endsection