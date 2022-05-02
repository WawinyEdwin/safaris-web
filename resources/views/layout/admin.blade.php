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

        <style>
            .wrapper {
                display: flex;
                width: 100%;
                align-items: stretch;
            }

            a, a:hover, a:focus {
                text-decoration: none;
                color: inherit;
                transition: all 0.3s;
            }

            #sidebar {
                min-width: 250px;
                max-width: 250px;
                min-height: 100vh;
                transition: all 0.3s;
                background: #7386D5;
                color: #fff;
            }

            #sidebar ul .components {
                padding: 20px 0;
                border-bottom: 1px solid #47748b;
            }

            #sidebar ul li a {
                padding: 10px;
                font-size: 1.1rem;
                display: block;
            }

            #sidebar ul li a:hover {
                color: #7386d5;
                background: #fff;
            }

            ul {
                list-style-type: none;
            }


            ul ul a {
                font-size: 0.9rem !important;
                padding-left: 30px !important;
                background: #6d7fcc;
            }

            #sidebar ul p {
                color: #fff;
                padding: 10px;
            }

            #sidebar .active {
                margin-left: -250px;
            }

            #sidebar ul li:active > a, a[aria-expanded="true"] {
                color: #fff;
                background: #6d7fcc;
            }

            @media (max-width: 768px) {
                #sidebar {
                    margin-left: -250px;
                }
                #sidebar .active {
                    margin-left: 0;
                }
            }
        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg bg-dark text-white">
        <a href="" class="navbar-brand">Safaris</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupported" aria-controls="navbarSupported" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupported">
            <ul class="navbar-nav mr-auto">
                    <li class=" nav-item active">
                        <a href="" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('bookings.index') }}" class="nav-link">Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tours.index') }}" class="nav-link">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tours.index') }}" class="nav-link">Holidays</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tours.index') }}" class="nav-link">Top Deals</a>
                    </li>
            </ul>
            <ul class=" navbar-nav ml-auto">
                <li  class="nav-item">Logout</li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>