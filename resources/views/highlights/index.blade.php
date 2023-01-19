@extends('layout.dash')

@section('content')

<div class="container">
    <br>
<p class="text-center pri lead">These Images Appear to your users in a slider fashion.</p>
<div class="text-right">
    <a href="{{ route('highlights.create' )}}" class="btn btn-primary">Add New</a>
</div>
<br>
    <div class="row">
        @foreach($highlights as $highlight)
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <img src="{{ asset('/storage/'. $highlight->image) }}" alt="Images Appear to your users" class="card-img-top">
                <div class="card-body">
                    <form action="{{ route('highlights.destroy', $highlight->id ) }}" method="post">
                        @csrf 
                        @method('DELETE')

                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection