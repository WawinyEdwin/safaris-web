@extends('layout.admin')

@section('content')

<div class="row">
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-geo-alt"></i> Tours</h5>
                <p class="card-text">Easily Manage Tours, For your Users</p>
                <a href="{{ route('tours') }}" class="btn btn-primar">Tours</a>
                <a href="{{ route('addtour.create') }}" class="btn btn-primar">New</a>
            </div>
        </div> 
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-tags"></i> Categories </h5>
                <p class="card-text">Easily Manage Tour Categories</p>
                <a href="{{ route('categories.create') }}" class="btn btn-primar">Add</a>
                <a href="{{ route('categories.index') }}" class="btn btn-primar">Categories</a>
            </div>
        </div> 
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-book"></i> Bookings</h5>
                <p class="card-text">Easily Manage Bookings, For your Users</p>
                <a href="{{ route('bookings') }}" class="btn btn-primar">Bookings</a>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-3 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-card-checklist"></i> Enquiries</h5>
                <p class="card-text">Easily Manage Enquiries, For your Users</p>
                <a href="{{ route('enquiries.index') }}" class="btn btn-primar">Enquiries</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-pencil-square"></i> Blogs </h5>
                <p class="card-text">Easily Manage Blogs, Content you share</p>
                <a href="{{ route('blogs') }}" class="btn btn-primar">All Blogs </a>
                <a href="{{ route('blogs.create') }}" class="btn btn-primar">New </a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-check-square"></i> Highlights</h5>
                    <p class="card-text">Manage the images in the promo slider.</p>
                    <a href="{{ route('highlights.index') }}" class="btn btn-primar">All Highlights</a>
                    <a href="{{ route('highlights.create') }}" class="btn btn-primar">New </a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-file-earmark-play"></i> Videos</h5>
                    <p class="card-text">Manage the Videos users see in Safari.</p>
                    <a href="{{ route('videos') }}" class="btn btn-primar">All Videos</a>
                    <a href="{{ route('videos.create') }}" class="btn btn-primar">New </a>
            </div>
        </div>
    </div>
</div>

@endsection