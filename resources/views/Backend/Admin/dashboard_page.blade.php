
@extends('Backend.Body.master')
@section('admin')

@section('title')
Exploredia | Admin Dashboard
@endsection

        <!-- Page wrapper  -->
        <div class="page-wrapper">

            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Welcome Back !</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="#">Admin Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- End Bread crumb and right sidebar toggle -->

            <!-- Container fluid  -->
            <div class="container-fluid">

            <!-- Start First Cards -->
            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium" class="num" data-val="{{ $numberQuotes }}">{{ $numberQuotes }}</h2>
                                    <span class="badge bg-success font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">QUOTES</span>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Daily Quotes</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7"><i class="icon-bubble"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium" class="num" data-val="{{ $numberCity }}">{{ $numberCity }}</h2>
                                <span class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">CITY</span>
                            </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Daily City</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7"><i class="icon-plane"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium" class="num" data-val="{{ $numberFood }}">{{ $numberFood }}</h2>
                                    <span class="badge bg-warning font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">FOOD</span>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Daily Food</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7"><i class="icon-fire"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium" class="num" data-val="{{ $numberAnimal }}">{{ $numberAnimal }}</h2>
                                <span class="badge bg-secondary font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">ANIMAL</span>
                            </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Daily Animal</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7"><i class="icon-social-twitter"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End First Cards -->

        <div class="row">
            <div class="col-12">
                <!-- Row -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{asset('Frontend')}}/img/categories/Quotes.png" width="150"
                            height="150" alt="quotes">
                            <div class="card-body">
                                <h4 class="card-title">Quotes Page</h4>
                                <p class="card-text">Daily personal motivation Quotes</p>
                                <a href="{{ route('quotes.page') }}" class="btn btn-success"><i class="fas fa-chess-queen"></i></a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{asset('Frontend')}}/img/categories/kuala_lumpur.jpg" width="150"
                            height="150" alt="city">
                            <div class="card-body">
                                <h4 class="card-title">City Page</h4>
                                <p class="card-text">Dream place to travel around the world</p>
                                <a href="{{ route('city.page') }}" class="btn btn-danger"><i class="fas fa-plane"></i></a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{asset('Frontend')}}/img/categories/nasi_lemak.jpg" width="150"
                            height="150" alt="food">
                            <div class="card-body">
                                <h4 class="card-title">Food Page</h4>
                                <p class="card-text">Best delicious Food around the world</p>
                                <a href="{{ route('food.page') }}" class="btn btn-warning"><i class="fas fa-utensils"></i></a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6 img-fluid">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{asset('Frontend')}}/img/categories/tiger.webp" width="150"
                            height="150" alt="animal">
                            <div class="card-body">
                                <h4 class="card-title">Animal Page</h4>
                                <p class="card-text">National Animal in every country araound the world</p>
                                <a href="{{ route('animal.page') }}" class="btn btn-secondary"><i class="fas fa-paw"></i></a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                </div>
                <!-- Row -->
            </div>
        </div>
        <!-- End Row -->

@endsection
