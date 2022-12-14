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
    
            <title>Artemis Organization</title>
    
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
                {{-- {{ $slot }} --}}
                <h2 class="text-center text-play text-jindigo py-5">Welcome, {{ Auth::user()->name }}</h2>
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
        </main>
    
</body>

</html>

