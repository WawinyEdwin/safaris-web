@extends('layout.admin')

@section('content')

<div class="container">
    <div class="">
        <div class="text-right pt-2">
            <a href="{{ route('tours.index') }}" class="btn btn-primar">Back</a>
        </div>
        <div class="text-left">
            <p class="lead pri">Add Tour</p>
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

    <form action="{{ route('tours.update', $tours->id) }}" method="post" enctype="multipart/form-data">   
        @csrf
        @method('POST')    
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="image" class="form-label">Hotel Image</label>
                        <input type="file" name="image" id="image" class="form-control-file" required>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="image1" class="form-label">Hotel Image 2</label>
                        <input type="file" name="image1" id="image1" class="form-control-file" required>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="image2" class="form-label">Hotel Image 3</label>
                        <input type="file" name="image2" id="image2" class="form-control-file" required>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                    <label for="category" class="form-label">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="{{ $tours->category }}">{{ $tours->category }}</option>
                            <option value="Exciting Holiday Offers">Exciting Holiday Offers</option>
                            <option value="Tembea Ujionee">Tembea Ujionee</option>
                            <option value="Local Tours">Local Tours</option>
                            @foreach($categories as $category )
                                <option value="{{ $category->category }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="sub_category" class="form-label">Sub Category</label>
                        <select name="sub_category" id="sub_category" class="form-control">
                            <option value="{{ $tours->sub_category }}">{{ $tours->sub_category }}</option>
                            @foreach($sub_categories as $category )
                                <option value="{{ $category->sub_category }}">{{ $category->sub_category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="hotel" class="form-label">Hotel Name</label>
                        <input type="text" name="hotel" id="hotel" class="form-control" value="{{ $tours->hotel }}" required>
                    </div>
                    <div class="col-lg-6 col-sm-12" >
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" id="location" class="form-control"  value="{{ $tours->location }}" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12" >
                        <label for="transport" class="form-label">Transport</label>
                        <input type="text" name="transport" id="transport" class="form-control"  value="{{ $tours->transport }}" required>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="per_person_sharing" class="form-label">PerPerson Sharing</label>
                        <input type="text" name="per_person_sharing" id="per_person_sharing" class="form-control"  value="{{ $tours->per_person_sharing }}" required>
                    </div>
                </div>
                    <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="single_room" class="form-label">Single Room</label>
                        <input type="text" name="single_room" id="single_room" class="form-control"  value="{{ $tours->single_room }}" required>
                    </div>
                    <div class="col-lg-6 col-sm-12" class="form-label">
                        <label for="meals" class="form-label">Meals</label>
                        <input type="text" name="meals" id="meals"class="form-control"  value="{{ $tours->meals }}" required>
                    </div>
                </div>
                <br>
                <div class="">
                    <label for="additional_info" class="form-label">Additional Info</label>
                    <small class="form-text text-muted">Tell your visitor more...</small>
                    <textarea name="additonal_info" id="additonal_info" cols="20" rows="10" class="form-control" value="{{ $tours->additional_info }}"></textarea>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primar" > 
                    Edit Tour
                </button>
            </div>
    </form>
</div>

@endsection