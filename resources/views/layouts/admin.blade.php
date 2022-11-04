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

<body class="bg-bubbles font-sans antialiased">
    {{-- <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
        <div @click.away="open = false"
            class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-slate-100 md:w-64 dark:text-gray-200 dark:bg-gray-800"
            x-data="{ open: false }">
            <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
                <a href="#"
                    class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark:text-white focus:outline-none focus:shadow-outline">Artemis Organization</a>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div> --}}
            {{-- <nav :class="{'block': open, 'hidden': !open}"
                class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                <x-admin-nav-link :href="route('admin.tables.index')"
                    :active="request()->routeIs('admin.tables.index')">
                    {{ __('Doctors') }}
                </x-admin-nav-link>
                <x-admin-nav-link :href="route('admin.reservations.index')"
                    :active="request()->routeIs('admin.reservations.index')">
                    {{ __('Appointments') }}
                </x-admin-nav-link>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>{{ Auth::user()->name }}</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-700">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </div>
                </div>
            </nav> --}}
        {{-- </div> --}}


        <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <title>Laravel</title>
    
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

            <!-- Styles -->
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
            <script>
            jQuery(document).ready(function($){
                $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
                });
            })
            </script>
            <style>
                body {
            overflow-x: hidden;
            }
    
            #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
            }
    
            #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
            }
    
            #sidebar-wrapper .list-group {
            width: 15rem;
            }
    
            #page-content-wrapper {
            min-width: 100vw;
            }
    
            #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
            }
    
            @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }
    
            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }
    
            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
            }
            </style>    
        </head>
    <body>
        <div class="d-flex" id="wrapper">
    
            <!-- Sidebar -->
            <div class="bg-jindigo text-bubbles border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-jsan">Artemis Organization</div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-jindigo text-bubbles text-jsan">Dashboard</a>


              
                <x-admin-nav-link :href="route('admin.tables.index')"
                    :active="request()->routeIs('admin.tables.index')" class="list-group-item list-group-item-action bg-jindigo text-bubbles">
                    {{ __('Doctors') }}
                </x-admin-nav-link>
                <x-admin-nav-link :href="route('admin.reservations.index')"
                    :active="request()->routeIs('admin.reservations.index')" class="list-group-item list-group-item-action bg-jindigo text-bubbles">
                    {{ __('Appointments') }}
                </x-admin-nav-link>
                
                <a  class="list-group-item list-group-item-action bg-jindigo text-bubbles">Patients</a>
                <a  class="list-group-item list-group-item-action bg-jindigo text-bubbles">Profile</a>
             


              
            </div>
            </div>
            <!-- /#sidebar-wrapper -->
    
            <!-- Page Content -->
            <div id="page-content-wrapper">
    
            <nav class="navbar navbar-expand-lg navbar-light bg-carmine text-jsan  border-bottom">
                
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                    <a class="nav-link text-bubbles" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-bubbles" href="#">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-bubbles" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                  
                    
                    <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
    
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                    </li>
                </ul>
                </div>
            </nav>
    
                {{-- <div class="py-5">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-bubbles">
                            <div class="bg-bubbles">
                                <h2 class="text-jindigo">You're logged in!</h2>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card bg-jindigo text-bubbles">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8 ">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Appointments</p>
                                                <h5 class="font-weight-bolder">
                                                    250
                                                </h5>
                                                <p class="mb-0">
                                                    <span class="text-maxy text-sm font-weight-bolder">+55%</span>
                                                    since yesterday
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card bg-maxy text-jindigo">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Doctors</p>
                                                <h5 class="font-weight-bolder">
                                                    20
                                                </h5>
                                                <p class="mb-0">
                                                    <span class="text-carmine text-sm font-weight-bolder">-3%</span>
                                                    since last week
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card bg-diamond text-jindigo">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-uppercase font-weight-bold">New Patients</p>
                                                <h5 class="font-weight-bolder">
                                                    80
                                                </h5>
                                                <p class="mb-0">
                                                    <span class="text-carmine text-sm font-weight-bolder">-2%</span>
                                                    since last quarter
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card bg-jindigo text-bubbles">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Donations</p>
                                                <h5 class="font-weight-bolder">
                                                    P103,430
                                                </h5>
                                                <p class="mb-0">
                                                    <span class="text-maxy text-sm font-weight-bolder">+5%</span> than last month
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row mt-4">
                        <div class="col-lg-7 mb-lg-0 mb-4">
                            <div class="card bg-bubbles text-jindigo text-jsan">
                                <div class="card-header pb-0 p-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-2">Today's Appointments</h6>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-striped">
                                        <tbody>
                                            <tr>
                                                
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Name</p>
                                                        <h6 class="text-sm mb-0">Anna Belle</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Email</p>
                                                        <h6 class="text-sm mb-0">bela@gamail.com</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Phone Number</p>
                                                        <h6 class="text-sm mb-0">09123456789</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Doctor</p>
                                                        <h6 class="text-sm mb-0">Dra. Jill Morgan</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>    
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Name</p>
                                                        <h6 class="text-sm mb-0">Anna Belle</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Email</p>
                                                        <h6 class="text-sm mb-0">bela@gamail.com</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Phone Number</p>
                                                        <h6 class="text-sm mb-0">09123456789</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Doctor</p>
                                                        <h6 class="text-sm mb-0">Dra. Jill Morgan</h6>
                                                    </div>
                                                </td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Name</p>
                                                        <h6 class="text-sm mb-0">Anna Belle</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Email</p>
                                                        <h6 class="text-sm mb-0">bela@gamail.com</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Phone Number</p>
                                                        <h6 class="text-sm mb-0">09123456789</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Doctor</p>
                                                        <h6 class="text-sm mb-0">Dra. Jill Morgan</h6>
                                                    </div>
                                                </td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Name</p>
                                                        <h6 class="text-sm mb-0">Anna Belle</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Email</p>
                                                        <h6 class="text-sm mb-0">bela@gamail.com</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Phone Number</p>
                                                        <h6 class="text-sm mb-0">09123456789</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Doctor</p>
                                                        <h6 class="text-sm mb-0">Dra. Jill Morgan</h6>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card text-jsan text-jindigo">
                                <div class="card-header pb-0 p-3">
                                    <h6 class="mb-0">Available Doctors</h6>
                                </div>
                                <div class="card-body p-3 ">
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Name</h6>
                                                    <p>Days Available</p>
                                                </div>
                                            </div>
                                              
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



            </div>
            <!-- /#page-content-wrapper -->
    
            </div>
            <!-- /#wrapper -->


        <main class="m-2 p-8 w-full">
            <div>
                @if (session()->has('danger'))
                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('danger') }}!</span>
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('success') }}!</span>
                    </div>
                @endif
                @if (session()->has('warning'))
                    <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('warning') }}!</span>
                    </div>
                @endif
            </div>
            {{ $slot }}
        </main>
    </div>
</body>

</html>

