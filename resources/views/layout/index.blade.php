<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="_wawiny" >
        <meta name="description" content="Okulink safaris is about discoveries, exploration and transformation. We believe that people are
        in pursuit of something new, identity and ability to transform themselves for better. We are on a journey of giving magical experiences
        through travel, branding and celebrating Africa's tourism industry.">
        <meta name="robots" content="index, follow">

        <title>Okulink Safaris | We are on a journey of giving magical experiences through travel, branding and celebrating Africa's tourism industry.</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" 
        rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">

        <!-- bootstrap  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
         integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- Icons  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

       <!-- favicon   -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }} ">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }} ">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }} ">
        <link rel="manifest" href="{{ asset('favicon_ico/site.webmanifest') }}">
                

        <meta name="google-site-verification" content="YFUSoj09b1SvxCBLp5rcoHrN67CJdW6tnJXCfKbekiM" />

        <style>

            /* universal styles  */
            body {
                font-family: 'Josefin Sans', sans-serif;
                
            }
  
            .nav-link {
                color: white;
            }

            .safari {
                list-style-type: square;
            }

            .safari li > a:hover {
                color: #4863a0;
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
                /* #87CEEB #87CEFA*/
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

            /* .w-100 {
                min-height: 440px;
                object-fit: cover;
                width:100%;
            } */
 
            
            .carousel-control-next,
            .carousel-control-prev ,  {
                /* filter: invert(100%); */
                color:  #ffffff;
            background-color: #4863a0;
            }

            /* custom coloring */
            .btn-primar {
                background-color: #550a35;
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
                color: #000;
            }
        </style>
    </head>
    <body class="scrollTop">
        <nav class="navbar navbar-expand-lg bg-primar text-white fixed-top mb-2">
            <div class="container">
                <a href="{{ url('/')}}" class="navbar-brand text-white">
                    <img src="{{ asset('okulink.jpg') }}" alt="Okulink" width="50" height="50" class="d-inline-block-align-top img-rounded">&nbsp;Okulink Safaris</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                <i class="bi bi-list text-white"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                        @foreach($categories as $category)
                        <li class="nav-item dropdown show"> 
                            <a class="nav-link dropdown-toggle" href="{{ route('tour',  $category->category ) }}" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ $category->category }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($sub_categories as $cat)
                                <a class="dropdown-item" href="{{ route('tour_cat', $cat->sub_category) }}">{{ $cat->sub_category }}</a>
                                <div class="dropdown-divider"></div>
                                @endforeach
                            </div>
                        </li> 
                        @endforeach
                        <li class="nav-item"> 
                            <a class="nav-link btn btn-outline-light" href="{{ route('enquiries.create') }}">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{ route('blogs') }}">
                                Blog
                            </a>
                        </li> 
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"> 
                                <a class="nav-link" href="{{ route('admin') }}">
                                    <i class="bi bi-lock"></i>
                                    Account
                                </a>
                            </li>
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
                    <img src="{{ asset('okulink.jpg') }}" alt="Okulink" width="130" height="100" class="d-inline-block-align-top">
                </a>
                <div class="navbar-nav text-center">
                    <form class="form-inline " action="{{ route('search') }}" method="GET" role="search">
                        <div class="form-group mx-sm-3 mb-2">
                            <input class="form-control mx-sm-2" type="search" placeholder="Search hotel" name="term" id="term" aria-label="Search">
                        </div>
                        <button class="btn btn-outline-primar mb-2" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
                    <div >
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">Call&nbsp;<i class="bi bi-telephone-outbound price"></i> &nbsp;0742 659 292&nbsp;/&nbsp;0701 700 144</li>
                        <li class="nav-item d-none d-lg-flex ">
                            <i class="bi bi-facebook text-primary fa-lg"></i>&nbsp;&nbsp;
                            <i class="bi bi-twitter text-primary"></i>&nbsp;&nbsp;
                            <a href="http://www.instagram.com/okulinksafaris"><i class="bi bi-instagram text-danger"></i></a>
                        </li>
                    </ul>             
                    </div>
            </div>   
        </div>
      
        @yield('content')

        <br>
        <hr>
        
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <ul class="safari">
                        <li><a href="{{ route('enquiries.create') }}" class="text-primar">Contact Us</a></li>
                        <li><a href="{{ route('about') }}" class="text-primar">About Us</a></li>
                        <li><a href="{{ route('videos') }}" class="text-primar">Safari Videos</a></li>
                        <li><a href="{{ url('/') }}" class="text-primar">In the Media</a></li>
                        <li><a href="{{ url('/') }}" class="text-primar">Travel Info</a></li>
                        <li><a href="{{ route('careers') }}" class="text-primar">Careers</a></li>
                        <li><a href="{{ url('/') }}" class="text-primar">Affiliations</a></li>
                        <li><a href="{{ url('/') }}" class="text-primar">Our Team</a></li>
                        <li><a href="{{ route('about') }}" class="text-primar">FAQs</a></li>
                        <li><a href="{{ route('enquiries.create') }}" class="text-primar">Help</a></li>
                        <li><a href="{{ route('policy') }}" class="text-primar">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4  col-sm-12">
                    <img src="{{ asset('okulink.jpg') }} " alt="about" height="150" >
                    <br>
                    <p class="text-primar">About Us</p>
                    <div class="">
                        <p>Okulink safaris is about discoveries, exploration and transformation. We are on a journey of giving magical experiences
                            through travel, branding and celebrating Africa's tourism industry.
                        </p>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-12">
                    <p class="pri">Recent Tweets</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cumque officia sint ullam fugit dignissimos facilis ducimus harum accusamus nulla?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cumque officia sint ullam fugit dignissimos facilis ducimus harum accusamus nulla?</p>
                </div> -->
                <div class="col-lg-4 col-sm-12 blogs">
                    <p class="pri">Latest from Blog</p>
                    @foreach($blogs as $blog)
                    <a href="{{ route('blogs.show',$blog->id) }}">
                        <p>{{ \Illuminate\Support\Str::limit($blog->title, 30, $end='...') }}</p>
                        <small>{!! \Illuminate\Support\Str::limit($blog->content, 100, $end='...') !!}</small>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <br>
        <footer class="footer footer-expand-lg ">
                <div class="text-center">
                    <p class="lead pri" id="year"> &copy; <script type="text/javascript"> document.write( new Date().getFullYear());</script> | Okulink Safaris.</p>
                </div>
        </footer>

        <span onclick="topFunction()" id="myBtn" title="Back to Top">
            <i class="bi bi-arrow-up text-white"></i>
        </span>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </body>
</html>
