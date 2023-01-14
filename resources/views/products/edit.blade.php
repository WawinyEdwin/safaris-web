@extends('layout.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">update product.</h5>
                    <form
                        action="{{ route('products.store') }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf @method('POST')

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label  class="form-label"
                                        >product name</label
                                    >
                                    <input
                                        type="text"
                                        name="name"
                                        id="title"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="col-6">
                                <label  class="form-label"
                                        >product category</label
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
                                        >product image</label
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
                                        >product image</label
                                    >
                                    <input
                                        type="file"
                                        name="image2"
                                        id="image2"
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
                                        >stock available</label
                                    >
                                    <input type="number" name="quantity_available" id="" class="form-control"/>
                                </div>
                                <div class="col-6">
                                    <label for="price" class="form-label"
                                        >product price</label
                                    >
                                    <input type="number" name="price" id="" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="form-label"
                                >product description</label
                            >
                            <textarea
                                name="description"
                                id="summernote"
                                cols="30"
                                rows="7"
                                class="form-control"
                                required
                            ></textarea>
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
