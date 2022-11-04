<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
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
</x-admin-layout>
