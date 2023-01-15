@extends('layout.admin')

@section('content')


<div class="row">
    <div class="col-lg-3 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-geo-alt"></i> Tours</h5>
                <p class="card-text">manage tours</p>
                <a href="{{ route('tours') }}" class="btn btn-primar">Tours</a>
                <a href="{{ route('addtour.create') }}" class="btn btn-primar"> <i class="bi bi-bag-plus"></i> new</a>
            </div>
        </div> 
    </div>
    <div class="col-lg-3 col-sm-12">
    <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-bag"></i> Products</h5>
                    <p class="card-text">Manage products on the platform</p>
                    <a href="{{ route('products.all') }}" class="btn btn-primar">All Products</a>
                    <a href="{{ route('products.create') }}" class="btn btn-primar"><i class="bi bi-bag-plus"></i> new </a>
            </div>
        </div> 
    </div>
    <div class="col-lg-3 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-book"></i> Bookings</h5>
                <p class="card-text">manage tour bookings</p>
                <a href="{{ route('bookings') }}" class="btn btn-primar">Bookings</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-12">
    <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-database"></i> Services</h5>
                    <p class="card-text">Manage services on the platform</p>
                    <a href="{{ route('services.all') }}" class="btn btn-primar">all services</a>
                    <a href="{{ route('services.create') }}" class="btn btn-primar"><i class="bi bi-bag-plus"></i> new </a>
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
                <p class="card-text">maanage user enquiries</p>
                <a href="{{ route('enquiries.index') }}" class="btn btn-primar">Enquiries</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-pencil-square"></i> Blogs </h5>
                <p class="card-text">manage blog content</p>
                <a href="{{ route('blogs') }}" class="btn btn-primar">all blogs </a>
                <a href="{{ route('blogs.create') }}" class="btn btn-primar"><i class="bi bi-bag-plus"></i> new </a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-check-square"></i> Highlights</h5>
                    <p class="card-text">manage promo highlights</p>
                    <a href="{{ route('highlights.index') }}" class="btn btn-primar">all highlights</a>
                    <a href="{{ route('highlights.create') }}" class="btn btn-primar"><i class="bi bi-bag-plus"></i> new </a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-file-earmark-play"></i> Videos</h5>
                    <p class="card-text">Manage safaris videos.</p>
                    <a href="{{ route('videos') }}" class="btn btn-primar">all Videos</a>
                    <a href="{{ route('videos.create') }}" class="btn btn-primar"><i class="bi bi-bag-plus"></i> new </a>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
<div class="col-lg-4 col-sm-12">
<div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-tags"></i> Categories </h5>
                <p class="card-text">manage tour categories</p>
                <a href="{{ route('category.create') }}" class="btn btn-primar"><i class="bi bi-bag-plus"></i> new</a>
                <a href="{{ route('categories') }}" class="btn btn-primar">Categories</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
    <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-people"></i> Users</h5>
                <p class="card-text">Interaction with your Users</p>
                <a href="{{ route('users') }}" class="btn btn-primar">Users.</a>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-sm-12">
    <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-people"></i> events.</h5>
                <p class="card-text">coming soon..</p>
                <a href="{{ route('users') }}" class="btn btn-primar">events.</a>
            </div>
        </div>
    </div>
</div>
@endsection