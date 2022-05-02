<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Safaris</title>

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
            .nav-item {
                text-transform: uppercase;
            }
            .nav-link {
                color: white;
            }

            .safari {
                list-style-type: square;
                color: #28a745;
            }

            .carousel-item {
                height: 500px;
            }

            /* ul {
                list-style-type: bullets;
            } */
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-success text-white fixed-top">
            <div class="container">
                <a href="{{ url('/')}}" class="navbar-brand text-white">Safaris</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                <i class="bi bi-list text-white"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <div class="navbar-nav">
                        <li class="nav-item active"><a href="" class="nav-link">Home</a></li>
                        <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kenya Tours
                            </a>
                            <div class="dropdown-menu bg-success text-white" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Camping Safaris</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Lodges</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Walking</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Flight Safaris</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Season Holidays
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Camping Safaris</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Lodges</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Walking</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Flight Safaris</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Honey Moons
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Camping Safaris</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Lodges</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Walking</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Flight Safaris</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Top Deals
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Camping Safaris</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Lodges</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Walking</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Flight Safaris</a>
                            </div>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link btn btn-outline-light" href="{{ route('contact') }}">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="#">
                                Blog
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </nav>

        <br>
        <br>

        <div class="bg-white navbar d-none d-lg-flex">
            <div class="container p-2">
                <!-- <a href="{{ url('/')}}" class="navbar-brand ">Safaris</a> -->
               
                <div class="navbar-nav mr-auto">
                    <form class="form-inline ">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                    <div >
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><i class="bi bi-telephone-outbound text-success"></i> +2547 598 888</li>
                        <li class="nav-item">
                            <i class="bi bi-facebook text-success"></i>
                            <i class="bi bi-twitter text-success"></i>
                            <i class="bi bi-instagram text-success"></i>
                        </li>
                    </ul>             
                    </div>
            </div>   
        </div>

        @yield('content')

        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- <div class="row"> -->
                        <!-- <div class="col"> -->
                            <ul class="safari">
                                <li><a href="{{ route('about') }}" class="text-success">About Us</a></li>
                                <li><a href="{{ route('about') }}"class="text-success">Choose Us</a></li>
                                <li><a href="{{ route('testimony') }}" class="text-success">Testimonials</a></li>
                                <li><a href="{{ route('affiliation') }}" class="text-success">Affiliations</a></li>
                                <li><a href="{{ route('help') }}" class="text-success">Help</a></li>
                                <li><a href="{{ route('travel') }}" class="text-success">Travel Info</a></li>
                                <li><a href="{{ route('policy') }}" class="text-success">Privacy Policy</a></li>
                            </ul>
                        <!-- </div> -->
                        <!-- <div class="col"> -->
                            <ul class="safari">
                                <li><a href="{{ route('careers') }}" class="text-success">Careers</a></li>
                                <li><a href="{{ route('media') }}" class="text-success">In the Media</a></li>
                                <li><a href="{{ route('awards') }}" class="text-success">Awards</a></li>
                                <li><a href="{{ route('videos') }}" class="text-success">Safari Videos</a></li>
                                <li><a href="{{ route('faqs') }}" class="text-success">FAQs</a></li>
                                <li><a href="{{ route('team') }}" class="text-success">Our Team</a></li>
                                <li><a href="{{ route('contact') }}" class="text-success">Contact Us</a></li>
                            </ul>
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="row">
                    <p class="text-success">Secure Online Payment</p>
                        <div class="d-flex flex-row ">
                            <div class="p-2">Mpesa</div>
                            <div class="p-2">Airtel Money</div>
                        </div>
                    </div> -->
                </div>
                <div class="col">
                    <img src="{{ asset('index.jpeg') }} " alt="about">
                    <br>
                    <p class="text-success">About Us</p>
                    <div class="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, eaque odio. 
                            Dicta optio tempora unde eligendi amet laborum ipsum fugit quos cumque? Iusto.</p>
                    </div>
                </div>
                <div class="col">
                    <p class="text-success">Recent Tweets</p>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cumque officia sint ullam fugit dignissimos facilis ducimus harum accusamus nulla?</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cumque officia sint ullam fugit dignissimos facilis ducimus harum accusamus nulla?</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cumque officia sint ullam fugit dignissimos facilis ducimus harum accusamus nulla?</li>
                </div>
                <div class="col">
                    <p class="text-success">Latest from Blog</p>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cumque officia sint ullam fugit dignissimos facilis ducimus harum accusamus nulla?</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cumque officia sint ullam fugit dignissimos facilis ducimus harum accusamus nulla?</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cumque officia sint ullam fugit dignissimos facilis ducimus harum accusamus nulla?</li>
                </div>
            </div>
        </div>
        <br>
        <footer class="footer footer-expand-lg ">
                <div class="text-center">
                    <p class="lead text-success" id="year"> <script type="text/javascript"> document.write( new Date().getFullYear());</script> | Safaris Limited.</p>
                </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </body>
</html>
