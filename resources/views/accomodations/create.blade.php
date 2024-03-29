@extends('layout.admin') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-12 offset-sm-1">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">upload accomodation.</h5>
                </div>
                <div class="card-body">
                    <form
                        action="{{ route('accomodations.store') }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf @method('POST')

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">place-name</label>
                                    <input
                                        type="text"
                                        name="name"
                                        value="{{old('name')}}"
                                        class="form-control @error('name') is-invalid @enderror"
                                        required
                                    />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label">category</label>
                                    <select
                                        name="category"
                                        class="form-control @error('category') is-invalid @enderror"
                                    >
                                        <option value="">--Select--</option>
                                        <option value="guest-houses">
                                            guest houses
                                        </option>
                                        <option value="botique-hotels">
                                            botique hotels
                                        </option>
                                        <option value="hostels">hostels</option>
                                        <option value="chalets">chalets</option>
                                        <option value="cottages">
                                            cottages
                                        </option>
                                        <option value="bed-and-breakfast">
                                            bed and breakfast
                                        </option>
                                        <option value="apartments">
                                            apartments
                                        </option>
                                        <option value="boats">boats</option>
                                        <option value="log-cabins">
                                            log cabins
                                        </option>
                                        <option value="aparthotels">
                                            aparthotels
                                        </option>
                                        <option value="motels">motels</option>
                                    </select>
                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label"
                                        >rates(in ksh)</label
                                    >
                                    <input
                                        type="number"
                                        name="rates"
                                        value="{{old('rates')}}"
                                        class="form-control @error('rates') is-invalid @enderror"
                                    />
                                    @error('rates')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <br />
                        <div class="form-group">
                            <label for="" class="form-label"
                                >event location</label
                            >
                            <input
                                type="text"
                                name="location"
                                value="{{ old('location') }}"
                                class="form-control @error('location') is-invalid @enderror"
                            />
                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">details </label>
                            <textarea
                                name="description"
                                id="summernote"
                                cols="30"
                                rows="3"
                                class="form-control @error('description') is-invalid @enderror"
                                required
                            ></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label"
                                        >place-image</label
                                    >
                                    <input
                                        type="file"
                                        name="image"
                                        class="form-control-file @error('image') is-invalid @enderror"
                                        required
                                    />
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="image2" class="form-label"
                                        >placeimage2</label
                                    >
                                    <input
                                        type="file"
                                        name="image2"
                                        class="form-control-file @error('image2') is-invalid @enderror"
                                        required
                                    />
                                    @error('image2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label"
                                        >place-image 3</label
                                    >
                                    <input
                                        type="file"
                                        name="image3"
                                        class="form-control-file @error('image3') is-invalid @enderror"
                                      
                                    />
                                    @error('imag3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label  class="form-label"
                                        >place image 4</label
                                    >
                                    <input
                                        type="file"
                                        name="image4"
                                        class="form-control-file @error('image4') is-invalid @enderror"
                                        
                                    />
                                    @error('image4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label"
                                        >place-image5</label
                                    >
                                    <input
                                        type="file"
                                        name="image5"
                                        class="form-control-file @error('image5') is-invalid @enderror"
                                      
                                    />
                                    @error('image5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="image6" class="form-label"
                                        >placeimage6</label
                                    >
                                    <input
                                        type="file"
                                        name="image6"
                                        class="form-control-file @error('image6') is-invalid @enderror"
                                       
                                    />
                                    @error('image6')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="text-center">
                            <button type="submit" class="btn btn-primar">
                                Upload
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
