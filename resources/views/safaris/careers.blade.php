@extends('layout.index')

@section('content')


<div class=" bg-primar navbar expand-lg ">
            <div class="container">
            <h5 class="text-white"> <a href="{{ url('/') }}" class="text-white" >Home </a>> Careers</h5>
            </div>
        </div>
        <br>

<div class="container">
    <div class="career text-center">
        <h4>We currently do not have any open positions, keep watch of this section for updates.</h4>

        <div class="">
            <img src="{{ asset('okulink.jpg') }}" alt="" height="400" class="w-100">
        </div>
        <br>
        <a href="{{ url('/') }}" class="btn btn-primar">Back Home</a>
    </div>
</div>

<br>

@endsection