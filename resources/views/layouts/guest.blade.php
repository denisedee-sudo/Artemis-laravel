<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Artemis Organization') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="bg-white shadow-md" x-data="{ isOpen: false }">
        <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-2xl hover:text-green-400"
                    href="#">
                    Artemis Organization
                </a>
                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button"
                        class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="/">Home</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="{{ route('categories.index') }}">About Us</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="{{ route('menus.index') }}">Articles</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="{{ route('reservations.step.one') }}">Appointment</a>

            </div>
        </nav>
    </div>
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
                    <p class="text-justify">Artemis Organization currently has over 6,000 members, from over 180 countries. Our members are part of a powerful base of feminist, women’s rights and gender justice defenders, activists and allies, connecting, exchanging, learning and acting together for transformative change.</p>
                    <button class="btn btn-lg btn-carmine text-jindigo hover-maxy hover-big" data-bs-toggle="modal" data-bs-target="#Donate"> BE A SPONSOR NOW</button>
                </div>
                <div class="col-12 col-lg-3">
                    <br><br>
                    <h3 class="text-carmine">DONATE</h3>
                    <p class="text-justify">You can also show your support for transformative change by making a donation to Artemis Organization. Your valuable contribution will help sustain the work we do across the globe to support women and youth in the poorest communities to achieve sexual and reproductive health and rights.

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
                    <a href="About.html" class=" text-play hover-big pt-1 hover-maxy pointer text-bubbles text-decoration-none ">Who We Are</a>
                </li>
                <li class="hover-big">
                    <a href="About.html#whatwedo" class=" text-play hover-big pt-1 hover-maxy pointer text-bubbles text-decoration-none ">What We Do</a>
                </li>
                <li class="hover-big">
                    <a href="About.html#FAQ" class=" pt-1  text-play hover-maxy pointer text-bubbles text-decoration-none ">FAQ's</a>
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
                    <a href="Articles.html#articles" class=" text-play hover-big pt-1 hover-maxy pointer text-bubbles text-decoration-none ">Articles</a>
                </li>
                <li class="hover-big"   >
                    <a href="Articles.html" class=" text-play hover-big pt-1 hover-maxy pointer text-bubbles text-decoration-none ">Project Highlights</a>
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
            © 2022 Copyright
        </div>
    </footer>
    <!-- End of Footer -->


    {{-- <footer class="bg-gray-800 border-t border-gray-200">
        <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
            <div class="flex flex-wrap justify-center">
                <ul class="flex items-center space-x-4 text-white">
                    <li>Home</li>
                    <li>About</li>
                    <li>Contact</li>
                    <li>Terms</li>
                </ul>
            </div>
            <div class="flex justify-center mt-4 lg:mt-0">
                <a>
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-6 h-6 text-blue-300" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6 text-pink-400" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-6 h-6 text-blue-500" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </div>
        </div>
    </footer> --}}



</body>

</html>
