<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Safaris | Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <style>

body {
                font-family: 'Josefin Sans', sans-serif;
            }

            a {
                color: #ffffff;
            }
           
        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg bg-primary text-white">
        <a href="" class="navbar-brand">Safaris Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupported" aria-controls="navbarSupported" aria-expanded="false" aria-label="Toggle Navigation">
        <i class="bi bi-list text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupported">
            <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="{{ route('bookings.index') }}" class="nav-link ">Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin') }}" class="nav-link">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('enquiries.index') }}" class="nav-link">Customer Enquiries</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="{{ route('tour', 'seasonHolidays') }}" class="nav-link">Holidays</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tour', 'topDeals') }}" class="nav-link">Top Deals</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tour', 'HoneyMoon') }}" class="nav-link">Honey Moon</a>
                    </li> -->
            </ul>
            <li class="nav-item">
                    <a class="btn btn-light" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">Tours</h5>
                    <p class="card-text">Easily Manage Tours, For your Users</p>
                    <a href="{{ route('tours.create') }}" class="btn btn-primary">New Tour</a>
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">Bookings</h5>
                    <p class="card-text">Easily Manage Bookings, For your Users</p>
                    <a href="{{ route('bookings.index') }}" class="btn btn-primary">Bookings</a>
                </div>
            </div>
            <div class="card-body">
                    <h5 class="card-title">Enquiries</h5>
                    <p class="card-text">Easily Manage Enquiries, For your Users</p>
                    <a href="{{ route('enquiries.index') }}" class="btn btn-primary">Enquiries</a>
                </div>
            </div>
        </div>
<hr>
        @yield('content')
    </div>

    <br>
    <footer class="footer footer-expand-lg  bg-primary text-white">
                <div class="text-center">
                    <p class="lead " id="year"> <script type="text/javascript"> document.write( new Date().getFullYear());</script> | Safaris Limited.</p>
                </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>