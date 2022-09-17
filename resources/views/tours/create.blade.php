@extends('layout.admin')

@section('content')

<div class="container">
    <div class="">
        <div class="text-right pt-2">
            <a href="{{ route('tours') }}" class="btn btn-primar">Back</a>
        </div>
        <div class="text-left">
            <p>Add Tour</p>
        </div>
    </div>
    
  
    <p class="text-center pri">Information you input here will be visible to your users, once posted</p>
    <form action="{{ route('addtour.store') }}" method="post" enctype="multipart/form-data">   
        @csrf
        @method('POST')    
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="image" class="form-label">Hotel Image</label>
                        <input type="file" name="image" id="image" class="form-control-file" required>
                        <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="image1" class="form-label">Hotel Image 2</label>
                        <input type="file" name="image1" id="image1" class="form-control-file" required>
                        <span class="text-danger">@error('image1') {{ $message }} @enderror</span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="image2" class="form-label">Hotel Image 3</label>
                        <input type="file" name="image2" id="image2" class="form-control-file " required>
                        <span class="text-danger">@error('image2') {{ $message }} @enderror</span>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                    <label for="category" class="form-label">Category</label>
                        <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                            <option value="">--choose category--</option>
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
                                <option value="">--choose category--</option>
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
                        <input type="text" name="hotel" id="hotel" class="form-control @error('hotel') is-invalid @enderror"  value="{{ old('hotel') }}" required>
                        <span class="text-danger">@error('hotel') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-lg-6 col-sm-12" >
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" id="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}" required>
                        <span class="text-danger">@error('location') {{ $message }} @enderror</span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12" >
                        <label for="transport" class="form-label">Transport</label>
                        <input type="text" name="transport" id="transport" class="form-control @error('transport') is-invalid @enderror" value="{{ old('transport') }}" required>
                        <small class="form-text text-muted">Information about transport facilities</small>
                        <span class="text-danger">@error('transport') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="per_person_sharing" class="form-label">PerPerson Sharing</label>
                        <input type="text" name="per_person_sharing" id="per_person_sharing" class="form-control @error('per_person_sharing') is-invalid @enderror"  value="{{ old('per_person_sharing') }}"placeholder="e.g KSH 000"required>
                        <small class="form-text text-muted">Prices of per person sharing</small>
                        <span class="text-danger">@error('per_person_sharing') {{ $message }} @enderror</span>
                    </div>
                </div>
                    <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="single_room" class="form-label">Single Room</label>
                        <input type="text" name="single_room" id="single_room"  class="form-control @error('single_room') is-invalid @enderror"  value="{{ old('single_room') }}" placeholder="e.g KSH 000" required>
                        <small class="form-text text-muted">Prices of single rooms</small>
                        <span class="text-danger">@error('single_room') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-lg-6 col-sm-12" class="form-label">
                        <label for="meals" class="form-label">Meals.</label>
                        <input type="text" name="meals" id="meals"class="form-control @error('meals') is-invalid @enderror"  value="{{ old('meals') }}"required>
                        <small class="form-text text-muted">Information about meals</small>
                        <span class="text-danger">@error('meals') {{ $message }} @enderror</span>
                    </div>
                </div>
                <br>
                <div class="">
                    <label for="additional_info" class="form-label">Additional Info</label>
                    <small class="form-text text-muted">Tell your visitor more...</small>
                    <textarea name="additional_info" id="summernote" cols="20" rows="10" class="form-control"></textarea>
                    <span class="text-danger">@error('additional_info') {{ $message }} @enderror</span>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primar" > 
                    Add Tour
                </button>
            </div>
    </form>
</div>

@endsection