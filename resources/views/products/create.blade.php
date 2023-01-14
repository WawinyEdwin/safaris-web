@extends('layout.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-12 offset-sm-1">
            <div class="card">
                <div class="card-header"><h5 class="text-center">Upload product.</h5></div>
                
                <div class="card-body">
                    
                    <form
                        action="{{ route('products.store') }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf @method('POST')

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="title" class="form-label"
                                        >name</label
                                    >
                                    <input
                                        type="text"
                                        name="title"
                                        id="title"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="col-6">
                                <label for="title" class="form-label"
                                        >category</label
                                    >
                                    <select name="category" id="" class="form-control">
                                        <option value="">Select</option>
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
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="image" class="form-label"
                                        >image</label
                                    >
                                    <input
                                        type="file"
                                        name="image"
                                        id="image"
                                        class="form-control-file"
                                        required
                                    />
                                </div>
                                <div class="col-6">
                                    <label for="image2" class="form-label"
                                        >image2</label
                                    >
                                    <input
                                        type="file"
                                        name="image"
                                        id="image"
                                        class="form-control-file"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label
                                        for="quantity_available"
                                        class="form-label"
                                        >in stock</label
                                    >
                                    <input type="number" name="quantity_available" id="" class="form-control"/>
                                </div>
                                <div class="col-6">
                                    <label for="price" class="form-label"
                                        >price(in ksh)</label
                                    >
                                    <input type="number" name="price" id="" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="" class="form-label">product location</label>
                            <input type="text" name="location" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content" class="form-label"
                                >product description</label
                            >
                            <textarea
                                name="content"
                                id="summernote"
                                cols="30"
                                rows="5"
                                class="form-control"
                                required
                            ></textarea>
                        </div>
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
