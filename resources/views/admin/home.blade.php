@extends('layout.admin')

@section('content')

<br>

        <div class="row">

            <div class="col-lg-3 col-sm-12">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-geo-alt"></i> Tours</h5>
                    <p class="card-text">Easily Manage Tours, For your Users</p>
                    <a href="{{ route('tours.index') }}" class="btn btn-primar">Tours</a>
                </div>
                </div> 
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-tags"></i> Categories </h5>
                    <p class="card-text">Easily Manage Tour Categories</p>
                    <a href="{{ route('categories.create') }}" class="btn btn-primar">Add</a>
                </div>
                </div> 
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-book"></i> Bookings</h5>
                    <p class="card-text">Easily Manage Bookings, For your Users</p>
                    <a href="{{ route('bookings.index') }}" class="btn btn-primar">Bookings</a>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-card-checklist"></i> Enquiries</h5>
                    <p class="card-text">Easily Manage Enquiries, For your Users</p>
                    <a href="{{ route('enquiries.index') }}" class="btn btn-primar">Enquiries</a>
</div>
                </div>
            </div>
</div>
@endsection