@extends('layout.index')

@section('content')

<style>
    .career {
        background-attachment: fixed;
        background-size: cover;
        background-image: url('/index.jpg');
    }
</style>

<hr>
<div class="container">
    <div class="career text-center">
        <h4>We currently do not have any open positions, keep watch of this section for updates.</h4>
        <a href="{{ route('home')" class="btn btn-primar">Back Home</a>
    </div>
</div>

@endsection