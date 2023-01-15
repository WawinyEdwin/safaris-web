@extends('layout.admin') 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                <h5 class="text-center">update service.</h5>
                </div>
                <div class="card-body">
                   
                    <form
                        action="{{ route('services.update', $service->id ) }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf @method('POST')

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label  class="form-label"
                                        >service name</label
                                    >
                                    <input
                                        type="text"
                                        name="name"
                                       value="{{old('name', $service->name)}}" 
                                        class="form-control"
                                        required
                                    />
                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                </div>
                                <div class="col-6">
                                <label  class="form-label"
                                        >category</label
                                    >
                                    <select name="category" class="form-control" >
                                        <option value="{{old('category', $service->category)}}" >--select--</option>
                                    <option value="Photography-and-video-coverage">Photography and video coverage</option>
                                        <option value="Housekeeping-and-Cleaning">Housekeeping and Cleaning</option>
                                        <option value="Barber-and-Hair-Dressing">Barber and Hair Dressing</option>
                                        <option value="Fast-Foods-delivery">Fast Foods delivery</option>
                                        <option value="Beauty-and-Makeup">Beauty and Makeup</option>
                                        <option value="Graphics-and-Printing">Graphics and Printing</option>
                                        <option value="Plumbing">Plumbing </option>
                                        <option value="TV-mounting">TV mounting</option>
                                        <option value="Home-Tutoring-and-Classes">Home Tutoring and Classes</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Laundry-and-dry-cleaning">Laundry and dry cleaning </option>
                                        <option value="Building-and-Trade-Services">Building and Trade Services</option>
                                        <option value="Internet-and-Network">Internet and Network</option>
                                        <option value="Dj-and-Entertainment">Dj and Entertainment </option>
                                        <option value="Gas-Refilling">Gas Refilling</option>
                                        <option value="Smartphones-and-Electronics-Repair">Smartphones and Electronics Repair</option>
                                        <option value="Gym-and-fitness">Gym and fitness</option>
                                        <option value="Security">Security</option>
                                        <option value="Massage-and-Parlour">Massage and Parlour</option>
                                        <option value="Babysitting">Babysitting</option>
                                        <option value="Events-and-Catering">Events and Catering</option>
                                        <option value="Professional-Consultants">Professional Consultants</option>
                                        <option value="Automotive-and-Mechanics">Automotive and Mechanics</option>
                                        <option value="Plumbing-and-Installation">Plumbing and Installation</option>
                                        <option value="Waste-and-Gabagge-Collection">Waste and Gabagge Collection</option>
                                        <option value="Logistics">Logistics </option>
                                        <option value="Movers-and-Transport">Movers and Transport</option>
                                        <option value="Homebased-Care">Homebased Care</option>
                                        <option value="Pet-and-animal-training">Pet and animal training</option>
                                        <option value="Personal-Section">Personal Section</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label  class="form-label"
                                        >image</label
                                    >
                                    <input
                                        type="file"
                                        name="image"
                                        
                                        class="form-control-file"
                                    
                                    />
                                    <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label"
                                        >image2</label
                                    >
                                    <input
                                        type="file"
                                        name="image2"
                                        
                                        class="form-control-file"
                                      
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                <label for="price">price(in ksh)</label>
                                    <input type="number" name="price" value="{{old('price', $service->price )}}"  class="form-control" />
                                </div>
                                <div class="col-md-6 col-sm-12">
                                <label for="" class="form-label">location</label>
                            <input type="text" name="location" value="{{ old('location', $service->location) }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="form-label"
                                >service description</label
                            >
                            <textarea
                                name="description"
                                id="summernote"
                                cols="30"
                                rows="5"
                                class="form-control"
                                value="{{old('description', $service->description)}}" 
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
