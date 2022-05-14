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

            .bg-primar {
                background-color: #4863a0;
                /* #87CEEB #87CEFA*/
            }
            .btn-primar {
            background-color: #550a35;
            color: #ffffff;
            }

            .card-title {
                color:  #4863a0;
            }

            a:hover {
                color: #ffffff;
            }

            .pri {
                color: #4863a0
            }
           
        </style>
    </head>
<body>
    <nav class="navbar navbar-expand-lg bg-primar text-white">
        <a href="{{ route('admin') }}" class="navbar-brand">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupported" aria-controls="navbarSupported" aria-expanded="false" aria-label="Toggle Navigation">
            <i class="bi bi-list text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupported">
            @auth
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="{{ route('bookings.index') }}" class="nav-link "><i class="bi bi-book"></i> Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tours.index') }}" class="nav-link"><i class="bi bi-geo-alt"></i> Tours</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categories.index') }}" class="nav-link"><i class="bi bi-tags"></i> Tour Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('enquiries.index') }}" class="nav-link"><i class="bi bi-card-checklist"></i> Customer Enquiries</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://dashboard.tawk.to/#/dashboard" target="_blank"  class="nav-link"><i class="bi bi-chat-dots"></i> Support Chat</a>
                    </li>  
            </ul>
            <ul class="navbar-nav dropdown  ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-check"></i>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{ route('updatePage') }}" class="dropdown-item">
                            <i class="bi bi-lock"></i>Reset Credentials
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="bi bi-power"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li>
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="bi bi-home"></i> Home

                    </a>
                </li>
            </ul>
            @endauth
        </div>
    </nav>
    <br>
    <div class="container-fluid">
        @yield('content')
    </div>
    <br>
    <footer class="footer footer-expand-lg ">
        <div class="text-center">
            <p class="lead pri " id="year"> <script type="text/javascript"> document.write( new Date().getFullYear());</script> | Safaris Limited.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>