@extends('layout.new')

@section('content')
<div class="container pt-2 pb-2">
    <div class="">
        <br>
        <div class="text-right">
            <a href="{{ route('safaris') }}" class="btn btn-primar"> <i class="bi bi-arrow-left"></i> Back</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <img src="{{ asset('/storage/'.$tours->image) }}" alt="{{ $tours->hotel }}" class="img-fluid" >
            <p>Other Images</p>
            <div class="row">
                <div class="col">
                    <img src="{{ asset('/storage/'.$tours->image1) }}" alt="{{ $tours->hotel }}" class="img-fluid" >
                </div>
                <div class="col">
                    <img src="{{ asset('/storage/'.$tours->image1) }}" alt="{{ $tours->hotel }}" class="img-fluid"  >
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card pb-3">
                <div class="card-body">
                <div class="text-center">
                    <p class="lead"> 
                        Book Package.
</p>
                </div>
                <div class="d-flex justify-content-around pb-2">
                    <a href="tel:+254701700144" class="btn btn-info"><i class="bi bi-telephone"></i> </a> 
                    <a href="https://wa.me/+254701700144?text=I'm%20inquiring%20about%20{{$tours->hotel}}" class="btn btn-success" target="_blank" ><i class="bi bi-whatsapp"></i></a>
                    <a  href="{{ route('bookings.create', $tours->category ) }}" class="btn btn-warning" ><i class="bi bi-card-text"></i></a>
                    <a href="mailto:okulinksafaris@gmail.com?subject=Booking - {{$tours->hotel}}&body=Hello Okulink, I would like to reserve a spot at {{ $tours->hotel }}.Kindly contact back with the details." class="btn btn-danger"><i class="bi bi-envelope-check"></i></a>
                </div>
                    <h5 class="card-title">Hotel {{ $tours->hotel }}</h5>
                    <ul>
                        <li>Category : {{ $tours->category }}</li>
                        <br>
                        <li>Location: {{ $tours->location }}</li>
                        <br>
                        <li>PerPerson Sharing : {{ $tours->per_person_sharing }}</li>
                        <br>
                        <li>Transport : {{ $tours->transport }}</li>
                        <br>
                        <li>Single Room : {{ $tours->single_room }}</li>
                        <br>
                        <li>Meals : {{ $tours->meals }}</li>
                    </ul>
                    <div class="">
                        <p>Additional Info</p>
                        <p>{!! $tours->additional_info !!}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between pb-2">
                    <a href="tel:+254701700144" class="btn btn-success"><i class="bi bi-phone"></i> Call</a> 
                    <a  href="{{ route('bookings.create', $tours->category ) }}" class="btn btn-primar" ><i class="bi bi-card-text"></i> Form</a>
                    <a href="mailto:okulinksafaris@gmail.com?subject=Booking - {{$tours->hotel}}&body=Hello Okulink, I would like to reserve a spot at {{ $tours->hotel }}.Kindly contact back with the details." class="btn btn-danger"><i class="bi bi-envelope-check"></i>Email</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection