<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Artemis Organization') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> --}}
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="text-play">

        <nav class="navbar navbar-expand-lg  bg-diamond fixed-top text-play">
            <a class="navbar-brand p-3 pointer hover-big pointer" href="#">
                <img src="{{url('/images/ARTEMISFinal.png')}}" alt="logo" height="60px" />
            </a>

            <div class="collapse navbar-collapse" id="bar-toggle">
                <ul class="navbar-nav text-center">
                    <li class="nav-item active">
                    <a href="/"  class= "nav-link  active text-jindigo hover-carmine hover-big">Home</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class= "nav-link  text-jindigo hover-carmine hover-big">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('menus.index') }}" class= " nav-link  text-jindigo hover-carmine hover-big">Articles</a>
                    </li>
                    <li class="nav-item">
                    <a  href="{{ route('reservations.step.one') }}" class= " nav-link  text-jindigo hover-carmine hover-big">Appointment</a>
                    </li>

                    <li class="nav-item mx-auto d-block d-sm-none">
                        <button class="btn btn-lg btn-maxy text-jindigo hover-carmine hover-big m-2 p-2 pe-5 ps-5"  data-bs-toggle="modal" data-bs-target="#Donate">
                            <h5>Donate Now!</h5>
                        </button>
                    </li>
                    <li class="nav-item mx-auto d-block d-sm-none">
                        <div class="row align-items-center ms-4 me-4">
                            <div class="col-6">
                                <a href="{{route('login')}}" class="text-jindigo text-center hover-carmine hover-big"><h5>Login</h5></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="invisible-xs">
                <button  data-bs-toggle="modal" data-bs-target="#Donate" class="btn btn-lg btn-maxy text-jindigo hover-carmine hover-big m-2 p-2 pe-5 ps-5">
                    <h5>Donate Now!</h5>
                </button>
            </div>
            <div class="invisible-xs row align-items-center ms-4 me-4">
                <div class="col-6">
                    <a href="{{route('login')}}" class="text-jindigo text-center hover-carmine hover-big"><h5>Login</h5></a>
                </div>
                
            </div>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#bar-toggle">
                <span class="navbar-toggler-icon"></span>
            </button>



        </nav>
        <br><br><br>
    
    <div class="font-sans text-gray-900 antialiased min-h-screen">
        {{ $slot }}
    </div>
    <!-- Start of Footer -->
    <footer class="row bg-jindigo text-bubbles p-1 text-party">
        <div class="container-fluid bg-jindigo text-bubbles">
            <div class="row">
                <div class="col-12 col-lg-1"></div>
                <div class="col-12 col-lg-3">
                    <br><br>
                    <h3 class="text-maxy">JOIN US</h3>
                    <p class="text-justify">Artemis Organization currently has over 6,000 members, from over 180 countries. Our members are part of a powerful base of feminists, women???s rights and gender justice defenders, activists and allies, connecting, exchanging, learning and acting together for transformative change.</p>
                    <button class="btn btn-lg btn-carmine text-jindigo hover-maxy hover-big" data-bs-toggle="modal" data-bs-target="#Donate"> BE A SPONSOR NOW</button>
                </div>
                <div class="col-12 col-lg-3">
                    <br><br>
                    <h3 class="text-carmine">DONATE</h3>
                    <p class="text-justify">You can also show your support for transformative change by donating to Artemis Organization. Your valuable contribution helps sustain the work we do across the globe to support women and youth in the poorest communities achieve sexual and reproductive empowerment.

                    </p>
                    <button class="btn btn-lg btn-maxy text-jindigo hover-carmine hover-big"  data-bs-toggle="modal" data-bs-target="#Donate">DONATE NOW</button>
                </div>
                <div class="col-12 col-lg-4">
                    <br><br>
                    <h3 class="text-bubbles">Connect with us</h3>
                    <a class="col-1 text-decoration-none" href="">
                        <i class="hover-gradient text-bubbles hover-big p-2 rounded-circle bg-jindigo fa-brands fa-facebook fa-2x"></i>
                    </a>
                    <a class="col-1 text-decoration-none" href="">
                        <i class="hover-gradient text-bubbles hover-big p-2 rounded-circle bg-jindigo fa-brands fa-instagram fa-2x"></i>
                    </a>
                    <a class="col-1 text-decoration-none" href="">
                        <i class="hover-gradient text-bubbles hover-big p-2 rounded-circle bg-jindigo fa-brands fa-twitter fa-2x"></i>
                    </a>
                    <p>Join the conversation and stay connected with the community. Receive a regular selection of feminist analysis, resources and ways to get involved with the movements.</p>
                    
                    <form action="" class="input-group">
                        <input type="email" class="form-control" placeholder="Enter Email Address"/>
                        <button class="btn btn-lg btn-outline-bubbles text-bubbles hover-jindigo hover-big">SIGN ME UP</button>
                     </form>
                    <!-- <button data-bs-toggle="modal" data-bs-target="#nLetter" class="btn btn-lg btn-outline-bubbles text-bubbles hover-jindigo hover-big">SIGN ME UP</button> -->
                </div>
                
            </div>
            <br><br>
        </div>
        <hr>

        <div class="col-12 col-md-3 pt-2 pb-2 text-center">

            <img src="{{url('/images/ARTEMISlogoDark.png')}}" alt="logodark"/>

            <h5 class="hover-big hover-maxy" >Address:  27 Ofelia St., Ofelia Village, Bgy, Project 8, Quezon City, 1106 Metro Manila</h5>
            <h5 class="hover-big hover-maxy" >Phone: (02) 3454 3854</h5>
            <h5 class="hover-big hover-maxy" >Email: office@artemis.org</h5>
        </div>
        <div class="col-12 col-md-3  text-center">
            <div class="invisible-xs py-5">
                <br><br>
            </div>
            <h3 class="pt-2 text-play" >About Us</h3>
            <ul class="list-unstyled mb-0 ">
                <li class=" hover-big">
                    <a href="{{url('about') ."#whoweare"}}" class=" text-play hover-big pt-1 hover-maxy pointer text-bubbles text-decoration-none ">Who We Are</a>
                </li>
                <li class="hover-big">
                    <a href="{{url('about') ."#whatwedo"}}" class=" text-play hover-big pt-1 hover-maxy pointer text-bubbles text-decoration-none ">What We Do</a>
                </li>
                <li class="hover-big">
                    <a href="{{url('about') ."#FAQ"}}" class=" pt-1  text-play hover-maxy pointer text-bubbles text-decoration-none ">FAQ's</a>
                </li> 
            </ul>
            
        </div>
        <div class="col-12 col-md-3 text-center">
            <div class="invisible-xs py-5">
                <br><br>
            </div>
            <h3 class="pt-2 text-play" >Stay Informed</h3>
            <ul class="list-unstyled mb-0 ">
                <li class="hover-big">
                    <a href="{{url('articles')}}" class=" text-play hover-big pt-1 hover-maxy pointer text-bubbles text-decoration-none ">Articles</a>
                </li>
                <li class="hover-big"   >
                    <a href="{{url('articles')}}" class=" text-play hover-big pt-1 hover-maxy pointer text-bubbles text-decoration-none ">Project Highlights</a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-md-3 text-center">
            <div class="invisible-xs py-5">
                <br><br>
            </div>
            <h3 class="pt-2 text-play" >Get Involved</h3>
            <ul class="list-unstyled mb-0 ">
                <li class=" hover-big">
                    <a  class=" text-play hover-big pt-1 hover-maxy pointer text-bubbles text-decoration-none " data-bs-toggle="modal" data-bs-target="#Donate">Donate</a>
                </li>
                <li class="hover-big">
                    <a  class=" text-play hover-big pt-1 hover-maxy pointer text-bubbles text-decoration-none " data-bs-toggle="modal" data-bs-target="#Donate">Become a Sponsor</a>
                </li>
                <li class="hover-big">
                    <a  class=" pt-1  text-play hover-maxy pointer text-bubbles text-decoration-none ">Events</a>
                </li> 
            </ul>
        </div>
        <hr>
        <div class="col-12 text-center">
            ?? 2022 Copyright
        </div>
    </footer>
    <!-- End of Footer -->
     <!-- Start of Messenger Plugin  -->
            <!-- Messenger Chat Plugin Code -->
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="B9AlcXAW"></script>

            <!-- Your Chat Plugin code -->
            <div id="fb-customer-chat" class="fb-customerchat">
            </div>

            <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "101599836032258");
            chatbox.setAttribute("attribution", "biz_inbox");
            </script>

            <!-- Your SDK code -->
            <script>
            window.fbAsyncInit = function() {
                FB.init({
                xfbml            : true,
                version          : 'v14.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>
    <!-- End of Messenger Plugin  -->

            {{-- start of modal donate --}}
    <div class="modal" id="Donate">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
            <div class="modal-content text-play">
                <div class="modal-header bg-jindigo text-bubbles">
                    <h2>Donate Now!</h2>
                    <button class="btn btn-outline-carmine text-bubbles" data-bs-dismiss="modal">
                        X
                    </button>
                </div>
                <div class="modal-body">
                
                    <div class="row text-jindigo">
                        <div class="col-4 col-md-2 col-lg-1">
                            <img class="img-fluid " src="{{url('/images/Artemis logo.png')}}" alt="" />
                        </div>
                        <div class="col-8 col-md-10">
                            <div class="row">
                                <p class="text-start col-12 text-jindigo"> A nonprofit oraganization working with women and youth in the poorest communities to achieve sexual and reproductive health and rights.
                                </p>
                            </div>

                            <div class="row">
                            <p class="text-start col-12 text-jindigo"> 
                                We do community organizing, primary care clinics for women and youth, policy advocacy.
                            </p>
                            </div>
                        </div>
                        <hr />
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-6 col-lg-6">
                                    <img class="img-fluid w-100" src="{{url('/images/BDO.png')}}" alt="" />
                                </div>
                                <div class="col-6 col-lg-6">
                                    <h4 > Banco De Oro</h4>
                                    <h6>Account Name:</h6>
                                    <h5 class="font-weight-bold">Artemis Organization</h5>
                                    <h6>Account Number:</h6>
                                    <h5 class="font-weight-bold">00 123 456 7890</h5>

                                </div>
                                
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-6 col-lg-6">
                                    <img class="img-fluid w-100" src="{{url('/images/robinsonsbank.png')}}" alt="" />
                                </div>
                                <div class="col-6 col-lg-6">
                                    <h4 >Robinsons Bank</h4>
                                    <h6>Account Name:</h6>
                                    <h5 class="font-weight-bold">Artemis Organization</h5>
                                    <h6>Account Number:</h6>
                                    <h5 class="font-weight-bold">00 123 456 7890</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            
                            <div class="row">
                                <div class="col-6 col-lg-6">
                                    <img class="img-fluid w-100" src="{{url('/images/Gcash.png')}}" alt="" />
                                </div>
                                <div class="col-6 col-lg-6">
                                    <h4 >Gcash</h4>
                                    <h6>Account Name:</h6>
                                    <h5 class="font-weight-bold">Artemis Organization</h5>
                                    <h6>Gcash Number:</h6>
                                    <h5 class="font-weight-bold">09 99 123 4567</h5>

                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-6 col-lg-6">
                                    <img class="img-fluid w-100" src="{{url('/images/PayPal.png')}}" alt="" />
                                </div>
                                <div class="col-6 col-lg-6">
                                    <h4 >Paypal</h4>
                                    <h6>Paypal Email:</h6>
                                    <h5 class="font-weight-bold">office@artemis.org</h5>
                                </div>
                            </div>

                        </div>
                    </div>

                    </div>

                </div>
                
            </div>
        </div>
    </div>
     {{-- end of modal donate --}}


</body>

</html>
