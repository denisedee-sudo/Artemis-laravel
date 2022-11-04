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
                        <x-admin-nav-link :href="route('admin.index')"
                            :active="request()->routeIs('admin.index')" class="list-group-item list-group-item-action bg-jindigo text-bubbles">
                            {{ __('Dashboard') }}
                        </x-admin-nav-link>

                    
                        <x-admin-nav-link :href="route('admin.tables.index')"
                            :active="request()->routeIs('admin.tables.index')" class="list-group-item list-group-item-action bg-jindigo text-bubbles">
                            {{ __('Doctors') }}
                        </x-admin-nav-link>
                        <x-admin-nav-link :href="route('admin.reservations.index')"
                            :active="request()->routeIs('admin.reservations.index')" class="list-group-item list-group-item-action bg-jindigo text-bubbles">
                            {{ __('Appointments') }}
                        </x-admin-nav-link>
                        
                    


                    
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
                        {{-- <li class="nav-item">
                        <a class="nav-link text-bubbles" href="#">Profile</a>
                        </li> --}}
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
                {{ $slot }}
                {{-- <div class="container-fluid py-4">
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



                </div> --}}
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
            {{-- {{ $slot }} --}}
        </main>
    
</body>

</html>

