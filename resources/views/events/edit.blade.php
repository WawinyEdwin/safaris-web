@extends('layout.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-12 offset-sm-1">
            <div class="card">
                <div class="card-header"><h5 class="text-center">edit event announced .</h5></div>
                <div class="card-body">
                    <form
                        action="{{ route('events.update', $event->id ) }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label  class="form-label"
                                        >event-name</label
                                    >
                                    <input
                                        type="text"
                                        name="name"
                                        value="{{old('name', $event->name)}}"
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
                                <label  class="form-label"
                                        >category</label
                                    >
                                    <select name="category" value="{{ old('category', $event->category) }}" class="form-control @error('category') is-invalid @enderror">
                                        <option value="{{ $event->category }}">--Select--</option>
                                        <option value="Concert">Concert</option>
                                        <option value="Art-and-Culture">art & culture</option>
                                        <option value="Conferences">conferences</option>
                                        <option value="Trade-Shows">trade shows</option>
                                        <option value="Workshops">workshops</option>
                                        <option value="Charities">charities</option>
                                    </select>
                                    </select>
                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label  class="form-label"
                                        >price(in ksh)</label
                                    >
                                    <input type="number" name="price" value="{{old('price', $event->price)}}"  class="form-control  @error('price') is-invalid @enderror"/>
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-6">
                                    <label
                                        class="form-label"
                                        >when</label 
                                    >
                                    <input type="date" name="when"  value="{{old('when', $event->when)}}" class="form-control  @error('when') is-invalid @enderror" />
                                    @error('when')
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
                                    <label  class="form-label"
                                        >starts at</label
                                    >
                                    <input type="time" name="starts" value="{{old('starts', $event->starts)}}"  class="form-control  @error('starts') is-invalid @enderror"/>
                                    @error('starts')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-6">
                                    <label
                                        class="form-label"
                                        >ends at</label
                                    >
                                    <input type="time" name="ends"  value="{{old('ends', $event->ends)}}" class="form-control  @error('ends') is-invalid @enderror" />
                                    @error('ends')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="" class="form-label">event location</label>
                            <input type="text" name="location" value="{{ old('location', $event->location) }}" class="form-control @error('location') is-invalid @enderror">
                            @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label"
                                >event description</label
                            >
                            <textarea
                            name="description"
                                id="summernote"
                                cols="30"
                                rows="5"
                                value="{{ old('description', $event->description) }}"
                                class="form-control @error('description') is-invalid @enderror"
                                required
                            >{{ $event->description }}</textarea>
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
                                        >event-image</label
                                    >
                                    <input
                                        type="file"
                                        name="image"
                                        value="{{ $event->image }}"
                                        class="form-control-file  @error('image') is-invalid @enderror"
                                
                                    />
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-6">
                                    <label for="image2" class="form-label"
                                        >eventimage2</label
                                    >
                                    <input
                                        type="file"
                                        name="image2"
                                        class="form-control-file  @error('image2') is-invalid @enderror"
                                
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
                                        >event-image3</label
                                    >
                                    <input
                                        type="file"
                                        name="image3"
                                        class="form-control-file  @error('image3') is-invalid @enderror"
                                
                                    />
                                    @error('image3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-6">
                                    <label for="image4" class="form-label"
                                        >eventimage4</label
                                    >
                                    <input
                                        type="file"
                                        name="image4"
                                        class="form-control-file  @error('image4') is-invalid @enderror"
                                
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
                                        >event-image5</label
                                    >
                                    <input
                                        type="file"
                                        name="image5"
                                        class="form-control-file  @error('image5') is-invalid @enderror"
                                
                                    />
                                    @error('image5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-6">
                                    <label for="image6" class="form-label"
                                        >eventimage6</label
                                    >
                                    <input
                                        type="file"
                                        name="image6"
                                        class="form-control-file  @error('image6') is-invalid @enderror"
                                
                                    />
                                    @error('image6')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primar">
                            update
                        </button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
