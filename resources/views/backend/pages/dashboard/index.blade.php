@extends('backend.layouts.app')
@section('title', 'Cerindo | Dashboard')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="col-xxl-3 col-md-6">
                <div class="card info-card balance-card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Redirect</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('banner.create') }}">Add New</a></li>
                            <li><a class="dropdown-item" href="{{ route('banner.index') }}">Check All</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Banner</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-upc-scan"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $data['banners'] }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-6">
                <div class="card info-card balance-card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Redirect</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('client.create') }}">Add New</a></li>
                            <li><a class="dropdown-item" href="{{ route('client.index') }}">Check All</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Client</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $data['clients'] }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-6">
                <div class="card info-card balance-card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Redirect</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('service.create') }}">Add New</a></li>
                            <li><a class="dropdown-item" href="{{ route('service.index') }}">Check All</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Service</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $data['services'] }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-6">
                <div class="card info-card balance-card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Redirect</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('team.create') }}">Add New</a></li>
                            <li><a class="dropdown-item" href="{{ route('team.index') }}">Check All</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Team</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-bounding-box"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $data['teams'] }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection