@extends('layout.admin')

@section('content')

<div class="container">
    <div class="">
        <div class="text-right pt-2">
            <a href="{{ route('tours') }}" class="btn btn-primar">Back</a>
        </div>
        <div class="text-left">
            <p class="lead pri">Add Tour</p>
        </div>
    </div>
    
  

    <form action="{{ route('addtour.update', $tours->id) }}" method="post" enctype="multipart/form-data">   
        @csrf
        @method('POST')    
            <div class="form-group">
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
                        <span class="text-danger">@error('category') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="sub_category" class="form-label">Sub Category</label>
                            <select name="sub_category" id="sub_category" class="form-control @error('sub_category') is-invalid @enderror">
                                <option value="{{ $tours->sub_category }}">--choose category--</option>
                                @foreach($categories as $category )
                                    <option value="{{ $category->sub_category }}">{{ $category->sub_category }}</option>
                                    <option value="{{ $category->sub_category1 }}">{{ $category->sub_category1 }}</option>
                                    <option value="{{ $category->sub_category2 }}">{{ $category->sub_category2 }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">@error('sub_category') {{ $message }} @enderror</span>
                        </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="hotel" class="form-label">Hotel Name</label>
                        <input type="text" name="hotel" id="hotel" class="form-control" value="{{ $tours->hotel }}" required>
                        <span class="text-danger">@error('hotel') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-lg-6 col-sm-12" >
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" id="location" class="form-control"  value="{{ $tours->location }}" required>
                        <span class="text-danger">@error('location') {{ $message }} @enderror</span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12" >
                        <label for="transport" class="form-label">Transport</label>
                        <input type="text" name="transport" id="transport" class="form-control"  value="{{ $tours->transport }}" required>
                        <span class="text-danger">@error('transport') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="per_person_sharing" class="form-label">PerPerson Sharing</label>
                        <input type="text" name="per_person_sharing" id="per_person_sharing" class="form-control"  value="{{ $tours->per_person_sharing }}" required>
                        <span class="text-danger">@error('per_person_sharing') {{ $message }} @enderror</span>
                    </div>
                </div>
                    <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="single_room" class="form-label">Single Room</label>
                        <input type="text" name="single_room" id="single_room" class="form-control"  value="{{ $tours->single_room }}" required>
                        <span class="text-danger">@error('single_room') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-lg-6 col-sm-12" class="form-label">
                        <label for="meals" class="form-label">Meals</label>
                        <input type="text" name="meals" id="meals"class="form-control"  value="{{ $tours->meals }}" required>
                        <span class="text-danger">@error('meals') {{ $message }} @enderror</span>
                    </div>
                </div>
                <br>
                <div class="">
                    <label for="additional_info" class="form-label">Additional Info</label>
                    <small class="form-text text-muted">Tell your visitor more...</small>
                    <textarea name="additional_info" id="summernote" cols="20" rows="10" class="form-control" value="{!! $tours->additional_info !!}"></textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="image" class="form-label">Hotel Image</label>
                        <input type="file" name="image" id="image" value="{!! $tours->image !!}" class="form-control-file" >
                        <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="image1" class="form-label">Hotel Image 2</label>
                        <input type="file" name="image1" id="image1" value="{{ $tours->image1 }}" class="form-control-file" >
                        <span class="text-danger">@error('image1') {{ $message }} @enderror</span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="image2" class="form-label">Hotel Image 3</label>
                        <input type="file" name="image2" id="image2" value="{{ $tours->image2 }}" class="form-control-file" >
                        <span class="text-danger">@error('image2') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                    <label for="image3" class="form-label">Hotel Image 4</label>
                        <input type="file" name="image3" id="image3" value="{{ $tours->image3 }}" class="form-control-file" >
                        <span class="text-danger">@error('image3') {{ $message }} @enderror</span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="image4" class="form-label">Hotel Image 5</label>
                        <input type="file" name="image4" id="image4" value="{{ $tours->image4 }}" class="form-control-file" >
                        <span class="text-danger">@error('image2') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                    <label for="image5" class="form-label">Hotel Image 6</label>
                        <input type="file" name="image5" id="image5" value="{{ $tours->image5 }}" class="form-control-file" >
                        <span class="text-danger">@error('image5') {{ $message }} @enderror</span>
                    </div>
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