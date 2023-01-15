<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="_wawiny" >
        <meta name="keywords" content="africa, okulink, safaris, socio-cultural, discoveries" />
        <meta name="description" content="Okulink safaris is the story of discoveries, exploration and transformation. We are on a journey of giving magical experiences through travel, branding and celebrating the beauty of Africa and socialcultural practices.">
        <meta name="robots" content="index, follow">
        <meta name="google-site-verification" content="YFUSoj09b1SvxCBLp5rcoHrN67CJdW6tnJXCfKbekiM" />
        <title>Okulink Safaris | magical experiences through tours & travel.</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Spinnaker&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('bootstrap/app.css') }}">
        <!-- bootstrap  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Icons  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
       <!-- faicon   -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ secure_asset('favicon_io/apple-touch-icon.png') }} ">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ secure_asset('favicon_io/favicon-32x32.png') }} ">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ secure_asset('favicon_io/favicon-16x16.png') }} ">
        <link rel="manifest" href="{{ secure_asset('favicon_ico/site.webmanifest') }}">
        @production
        <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}" />
        @endproduction
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

        <link
            rel="stylesheet"  
            href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide.min.css"
            />
    </head>
    <body class="scrollTop">
        <nav class="navbar navbar-expand-lg bg-primar text-white fixed-top mb-2">
            <div class="container">
                <a href="{{ url('/')}}" class="navbar-brand text-white">
                    <img src="{{ asset('okulink-1.png') }}" alt="Okulink" width="50" height="50" class="d-inline-block-align-top img-rounded">&nbsp;Okulink Safaris</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                <i class="bi bi-list text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> 
                            <a class="nav-link " href="{{ route('safaris') }}">
                                Safaris
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link " href="#">
                                Accomodation
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link " href="#">
                                Events
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link " href="{{ route('products') }}">
                                Products
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link " href="{{ route('services') }}">
                                Services
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{ route('blogs') }}">
                                Blog
                            </a>
                        </li> 
                    </ul>
                    <ul class="navbar-nav ms-auto">
                    @guest
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="bi bi-lock"></i> Log In
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('register') }}">
                            Sign up
                        </a>
                    </li>
                    @endguest

                    @auth
                    @if(Auth::user()->isAdmin == 1)
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('admin') }}">
                            <i class="bi bi-speedometer2"></i> Dashboard
                        </a>
                    </li> 

                    @else
                    <ul class="navbar-nav dropdown  ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-check"></i>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="bi bi-speedometer2"></i> Profile
                        </a>
                        <a href="{{ route('updatePage', Auth::user()->id) }}" class="dropdown-item">
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
            </ul>
                    @endif
                    @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <div class="bg-white navbar pt-2">
            <div class="container ">
                <a href="{{ url('/')}}" class="navbar-brand d-none d-lg-flex">
                    <img src="{{ asset('okulink-1.png') }}" alt="Okulink" width="130" height="90" class="d-inline-block-align-top">
                </a>
                <div class="navbar-nav text-center">
                    <form class="form-inline " action="{{ route('search') }}" method="GET" role="search">
                        <div class="form-group mx-sm-3 mb-2">
                            <input class="form-control mx-sm-2" type="search" placeholder="type hotel/location" name="term" id="term" aria-label="Search">
                        </div>
                        <button class="btn btn-outline-primar mb-2" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
                    <div class="" >
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">Call&nbsp;+254742659292|+254701700144</li>
                        <br />
                        <li class="nav-item  d-flex ">
                            Let us Connect.&nbsp;
                            <a href="https://www.facebook.com/okulinksafaris" target="_blank"><i class="bi bi-facebook bit"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="https://twitter.com/okulinksafaris" target="_blank"><i class="bi bi-twitter bit"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="https://www.tiktok.com/@okulinksafaris?_t=8WzTDf232YP&_r=1" target="_blank"><i class="bi bi-tiktok bit"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="http://www.instagram.com/okulinksafaris" target="_blank"><i class="bi bi-instagram bit"></i></a>
                        </li>
                    </ul>             
                    </div>
            </div>   
        </div>
        @yield('content')
    <div class="footer bg-primar text-white pt-5">
        <div class="container ">
            <div class="row">
                <div class="col-lg-3 col-sm-12 links p-2">
                    <h5>Useful Links</h5>
                    <div class="white_line"></div>
                    <br>
                        <p><a href="{{ route('enquiries.create') }}" class="text-white">Contact Us</a></p>
                        <p><a href="{{ route('about') }}" class="text-white">About Us</a></p>
                        <!-- <p><a href="{{ route('videos') }}" class="text-white">Safari Videos</a></p> -->
                        <p><a href="{{ url('/') }}" class="text-white">In the Media</a></p>
                        <p><a href="{{ url('/') }}" class="text-white">Travel Info</a></p>
                        <p><a href="{{ route('careers') }}" class="text-white">Careers</a></p>
                        <!-- <p><a href="{{ url('/') }}" class="text-white">Affiliations</a></p> -->
                        <!-- <p><a href="{{ url('/') }}" class="text-white">Our Team</a></p> -->
                        <p><a href="{{ route('about') }}" class="text-white">FAQs & Help</a></p>
                        <p><a href="{{ route('policy') }}" class="text-white">Privacy Policy</a></p>
                </div>
                <div class="col-lg-3  col-sm-12 p-2">
                    <h5>Our Values</h5>
                    <div class="white_line"></div>
                    <br>
                    <img src="{{ asset('okulink-1.png') }} " alt="about" class="about" heigth="400" width="200" >
                </div>
 
                <div class="col-lg-3  col-sm-12 p-2">
                    <h5 class="">About Us</h5>
                    <div class="white_line"></div>
                    <br>
                    <div class="">
                        <p>Okulink safaris is the story of discoveries, exploration and transformation. We are on a journey of giving magical experiences through travel, branding and celebrating the beauty of Africa and socialcultural practices.
                        </p>
                        <a href="{{ route('about') }}" class="btn btn-outline-light">About Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 blogs p-2">
                    <h5 class="">Latest from Blog</h5>
                    <div class="white_line"></div>
                    <br>
                    @foreach($blogs as $blog)
                    <a href="{{ route('blogs.show',$blog->id) }}">
                        <p> + {{ \Illuminate\Support\Str::limit($blog->title, 30, $end='...') }} | {!! \Illuminate\Support\Str::limit($blog->content, 100, $end='...') !!}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <br>
        <footer class="pb-2">
                <div class="text-center">
                    <h5 class="" id="year"> &copy; <script type="text/javascript"> document.write( new Date().getFullYear());</script> | Okulink Safaris.</h5>
                </div>
        </footer>
    </div>
        <span onclick="topFunction()" id="myBtn" title="Back to Top">
            <i class="bi bi-arrow-up text-white"></i>
        </span>
        <script>
            new Splide( '.splide' ).mount();
        </script>

        <script>
            myButton = document.getElementById("myBtn");
            //show button on scroll
            window.onscroll = function() {
                scrollFunction()
            }
            //when there is a scroll down 20px
            function scrollFunction() {
                if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    myButton.style.display = "block";
                } else{
                    myButton.style.display = "none";
                }
            }
            //when the button is clicked.
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/626fac607b967b11798d69cd/1g223inqk';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
