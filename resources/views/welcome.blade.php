<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Safaris</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .nav-item {
                text-transform: uppercase;
            }
            .nav-link {
                color: white;
            }

            .carousel-item {
                height: 500px;
            }

            /* ul {
                list-style-type: bullets;
            } */
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-success text-white">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a href="" class="nav-link">Home</a></li>
                        <li class="nav-item"> <a href="" class="nav-link">Kenya</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Tanzania</a></li>
                        <li class="nav-item"><a href="" class="nav-link">South Africa</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Seasonal Holidays</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Honey Moon</a></li>
                        <li class="nav-item"><a href="" class="nav-link">International</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Top Deals</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Blog</a></li>
                    </ul>
                </div>
        </div>
        </nav>
        <nav class="bg-white container d-lg-flex d-none">
        <div class="">
            <div class="row">
                <div class="col">
                    <a href="" class="navbar-brand ">Safaris</a>
                </div>
                <div class="col">
                    <form action="" method="post" class="form-inline my-2 my-lg-0">
                        <input type="search" class="form-control mr-sm-2" placeholder="Where do yo want to go?" aria-label="search">
                        <button class="btn btn-outline-success my-2 my-sm-0">search</button>
                    </form>
                </div>
                <div class="text-right col">
                    <p class="nav-item">Phone +2547 59888888</p>
                    <ul class="d-flex">
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
            </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('index.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('index.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('index.jpeg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

<br>
        <div class="container">
            <h3 class="text-center">Top Holiday Deals</h3>
            <div class="row">
                <div class="col">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lake Naivasha Offers</h5>
                            
                            <small class="card-text">2days Resort & Spa - KSH 13600</small>
                            <br> <br>
                            <small class="card-text">2days Resort & Spa</small>
                            <br> <br>
                            <small class="card-text">2days Resort & Spa</small>
                            <br>
                            <br>
                            <a href="" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Stunning Beach Vacation</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, iusto nostrum.</p>
                            <a href="" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Stunning Beach Vacation</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, iusto nostrum.</p>
                            <a href="" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <h5 class="text-center">2022 LEGENDARY DEALS - YOU CAN'T AFFORD TO MISS</h5>
            <div class="row">
                <div class="col">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Stunning Beach Vacation</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, iusto nostrum.</p>
                            <a href="" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Stunning Beach Vacation</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, iusto nostrum.</p>
                            <a href="" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt=""  class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Stunning Beach Vacation</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, iusto nostrum.</p>
                            <a href="" class="btn btn-success">SEE ALL OFFERS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <h3 class="text-center">Featured Tours</h3>
            <div class="row">
                <div class="col">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">Lorem ipsum dolor sit amet.</p>
                            <small class="card-text"> Lorem, ipsum.</small>
                            <br>
                            <a href="" class="btn btn-success">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">Lorem ipsum dolor sit amet.</p>
                            <small class="card-text"> Lorem, ipsum.</small>
                            <br>
                            <a href="" class="btn btn-success">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">Lorem ipsum dolor sit amet.</p>
                            <small class="card-text"> Lorem, ipsum.</small>
                            <br>
                            <a href="" class="btn btn-success">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                            <img src="{{ asset('index.jpeg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">Lorem ipsum dolor sit amet.</p>
                            <small class="card-text"> Lorem, ipsum.</small>
                            <br>
                            <a href="" class="btn btn-success">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Choose Us</a></li>
                                <li><a href="">Testimonials</a></li>
                                <li><a href="">Affiliations</a></li>
                                <li><a href="">Visa Help</a></li>
                                <li><a href="">Travel Info</a></li>
                                <li><a href="">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="">Careers</a></li>
                                <li><a href="">In the Media</a></li>
                                <li><a href="">Awards</a></li>
                                <li><a href="">Safari Videos</a></li>
                                <li><a href="">FAQs</a></li>
                                <li><a href="">Our Team</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <p>Secure Online Payment</p>
                        <ul class="d-flex">
                            <li>Mpesa</li>
                            <li>MasterCard</li>
                            <li>Airtel Money</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('index.jpeg') }} " alt="">
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
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <footer class="footer footer-expand-lg bg-success">
                <div class="text-center">
                    <p class="lead">2022 | Safaris Limited.</p>
                </div>
            </footer>
</html>
