<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Safaris | Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('bootstrap/app.css') }}">

        <!-- favicon   -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }} ">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }} ">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }} ">
        <link rel="manifest" href="{{ asset('favicon_ico/site.webmanifest') }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">



    <!-- include summernote css/js -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

        <style>

            body {
                font-family: 'Varela Round', sans-serif;
            }

            a {
                color: #ffffff;
            }

            .bg-primar {
                background-color: #4863a0;
             
            }

            .card-body > a:hover {
                color: #ffffff;
            }


            .btn-primar {
            background-color: #550a35;
            color: #ffffff;
            }

            /* custom dropdown  */
            .dropdown:hover .dropdown-menu {
                display: block;
                background-color: #4863a0;
            }

            .dropdown-item {
                color: #ffffff;
            }

                 /* universal styles  */
   

    .nav-link {
        color: white;
    }

    .nav-item > a:hover {
        color: white;
    }

    .text-center > a:hover {
        color: #ffffff;
    }
    .text-right > a:hover {
        color: #ffffff;
    }

    .safari {
        list-style-type: square;
    }

    .price {
        color:  #550a35;
    }

    a:hover {
        text-decoration: none;
        color: #ffffff;
    }

    .bg-primar {
        background-color: #4863a0;
    }

    .carousel {
        max-height: 440px;
        overflow: hidden;
        margin:auto;

    }

    @media only screen and (max-width: 600px){
        
        .carousel {
        max-height: 300px;
        overflow: hidden;
        margin:auto;
        }
        .carousel-inner .carousel-item > img {
            /* position: absolute; */
            object-fit: cover;
            height: 300px;
            width:100%;
        }
    }

    .carousel-inner .carousel-item > img {
        /* position: absolute; */
        object-fit: cover;
        height: 440px;
        width:100%;
    }

    /* custom coloring */
    .bt-primar {
        background-color: #4863a0;
        color: #ffffff;
    }

    .text-primar {
        color:  #550a35;
    }
    .btn-outline-primar {
        color:  #ffffff;
        background-color: #4863a0;
    }

    .card-title {
        color: #4863a0;
    }

    .pri {
        color: #4863a0;
    }

    /* custom dropdown  */
    .dropdown:hover .dropdown-menu {
        display: block;
        background-color: #4863a0;
        color: #ffffff;
    }

    .dropdown-item {
        color: #ffffff;
    }

    /* scroll to top button  */
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        left: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #4863a0;
        color: #ffffff;
        cursor: pointer;
        padding: 15px;
        border-radius: 10px;
        font-size: 18px;
    }

    #myBtn:hover {
        background-color: #4863a0;
    }

    img {
        object-fit: cover;
    }

    .img-rounded {
        border-radius: 50%;
    }

    .blogs > a {
        text-decoration: none;
        color: #ffffff;
    }

    .blogs > a:hover {
        text-decoration: underline;
        color: #ffffff;
    }

    .info {
        padding: 10px;
        background-color: #4863a0;
        color: #ffffff;
        border-radius: 10px;
    }

    .blue {
        width: 124px;
        /* height: 112px; */
        border-bottom: 2px solid #4863a0;
        position: absolute;
    }

    .white_line {
        width: 144px;
        border-bottom: 2px solid #ffffff;
        position: absolute;
    }

    .about {
        border-radius: 10px;
    }
    .links > p > a:hover {
        text-decoration: underline;
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
                        <a href="{{ route('bookings') }}" class="nav-link "><i class="bi bi-book"></i> Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tours') }}" class="nav-link"><i class="bi bi-geo-alt"></i> Tours</a>
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
            <p class="lead pri " id="year"> <script type="text/javascript"> document.write( new Date().getFullYear());</script> | Okulink Safaris.</p>
        </div>
    </footer>
    <!-- summernote  -->
    <script>
      $('#summernote').summernote({
        placeholder: 'Share any type of content with your users',
        tabsize: 2,
        height: 300
      });
    </script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>