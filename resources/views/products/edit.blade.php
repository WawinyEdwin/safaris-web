@extends('layout.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-12 offset-sm-1">
            <div class="card">
                <div class="card-header"><h5 class="text-center">Update product.</h5></div>
                <div class="card-body">
                    <form
                        action="{{ route('products.update', $product->id ) }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label  class="form-label"
                                        >name</label
                                    >
                                    <input
                                        type="text"
                                        name="name"
                                        value="{{old('name', $product->name )}}"
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
                                    <select name="category" class="form-control @error('category') is-invalid @enderror">
                                        <option  value="{{old('category', $product->category )}}">--Select--</option>
                                        <option
                                            value="Smartphones-and-Accessories"
                                        >
                                            Smartphones and Accessories
                                        </option>
                                        <option
                                            value="Electronics-and-Appliances"
                                        >
                                            Electronics and Appliances
                                        </option>
                                        <option value="fashion">fashion</option>
                                        <option
                                            value="Furniture-and-accessories"
                                        >
                                            Furniture and accessories
                                        </option>
                                        <option
                                            value="Home-Appliances-and-Accessories"
                                        >
                                            Home Appliances and Accessories
                                        </option>
                                        <option value="Baby-store">
                                            Baby store
                                        </option>
                                        <option value="Foods-and-Groceries">
                                            Foods and Groceries
                                        </option>
                                        <option value="Hair-and-beauty">
                                            Hair and beauty
                                        </option>
                                        <option
                                            value="Jewellery-and-Accesories"
                                        >
                                            Jewellery and Accesories
                                        </option>
                                        <option
                                            value="Sports-Equipment-and-Art"
                                        >
                                            Sports Equipment and Art
                                        </option>
                                        <option
                                            value="Computer-and-Accessories"
                                        >
                                            Computer and Accessories
                                        </option>
                                        <option value="Motor-vehicle-parts<">
                                            Motor vehicle parts
                                        </option>
                                        <option value="Drinks">Drinks</option>
                                        <option value="Graphics-and-Printing">
                                            Graphics and Printing
                                        </option>
                                        <option value="Watch-Store">
                                            Watch Store
                                        </option>
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
                                    <label
                                        class="form-label"
                                        >in stock</label
                                    >
                                    <input type="number" name="quantity_available"  value="{{old('quantity_available', $product->quantity_available)}}" class="form-control  @error('quantity_available') is-invalid @enderror" />
                                    @error('quantity_available')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-6">
                                    <label  class="form-label"
                                        >price(in ksh)</label
                                    >
                                    <input type="number" name="price" value="{{old('price', $product->price)}}"  class="form-control  @error('price') is-invalid @enderror"/>
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="" class="form-label">product location</label>
                            <input type="text" name="location" value="{{ old('location', $product->location) }}" class="form-control @error('location') is-invalid @enderror">
                            @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label"
                                >product description</label
                            >
                            <textarea
                            name="description"
                                id="summernote"
                                cols="30"
                                rows="5"
                                value="{{old('description', $product->description )}}"
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
                                        >image</label
                                    >
                                    <input
                                        type="file"
                                        name="image"
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
                                        >image2</label
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
                                        >image3</label
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
                                        >image4</label
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
                                        >image5</label
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
                                        >image6</label
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
