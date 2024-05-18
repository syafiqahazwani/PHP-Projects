
@extends('Backend.Body.master')
@section('admin')

@section('title')
Exploredia | Change Password
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Page wrapper  -->

        <div class="page-wrapper">

            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Admin</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Change Password</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

            <!-- End Bread crumb and right sidebar toggle -->

            <!-- Container fluid  -->
            <div class="container-fluid">

                <!-- Start Page Content -->

                <!-- Row -->
                <br>
                @if(session('message'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <span>{{ session('message') }} </span>
                </div>
                @endif

        <div class="row">
            <div class="col-12">
                <!-- Row -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-5 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <br>
                            <center>
                            <img src="{{ (!empty($adminData->photo)) ? url('Images/Admin_Profile/'.$adminData->photo) : url('Images/admin.png') }}" class="rounded-circle" width="150"
                                height="150" />
                            </center>
                            <div class="card-body">
                                <h3 class="text-center" >Mine Profile &nbsp;&nbsp;<span class="badge badge-pill badge-warning">{{ $adminData->status }}</span>
                                    <br /></h3>
                                <br>

                            <h5 class="text-center"><i class="fas fa-user-circle"></i> &nbsp;&nbsp;{{ $adminData->username }} </h5>
                            <h5 class="text-center"><i class="fas fa-user"></i> &nbsp;&nbsp;{{ $adminData->name }} </h5>
                            <h5 class="text-center"><i class="fas fa-envelope"></i> &nbsp;&nbsp;{{ $adminData->email }} </h5>
                            <h5 class="text-center"><i class="fas fa-mobile"></i> &nbsp;&nbsp;{{ $adminData->phone }} </h5>
                            <h5 class="text-center"><i class="fas fa-map-marker-alt"></i> &nbsp;&nbsp;{{ $adminData->address }} </h5>
                            <h5 class="text-center"><i class="fas fa-sitemap"></i> &nbsp;&nbsp;{{ $adminData->role }} </h5>

                            <hr>
                                <div class="card-text text-sm-center">
                                    <a href="#"><i class="fab fa-windows"></i></a>
                                    <a href="#"><i class="fab fa-android"></i></a>
                                    <a href="#"><i class="fab fa-html5"></i></a>
                                    <a href="#"><i class="fab fa-nintendo-switch"></i></a>
                                </div>

                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- column -->
    <!-- Row -->

            <div class="col-md-7">
                <div class="card border-info">
                    <div class="card-header bg-info">
                        <h4 class="mb-0 text-white">Edit Password</h4>
                    </div>
                    <div class="card-body">

            <form method="POST" action="{{ route('admin.update.password') }}" class="forms-sample" enctype="multipart/form-data">
                @csrf

                    <div class="form-group">
                        <h6 class="card-title">Old Password :</h6>
                        <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" id="old_password" autocomplete="off">
                            @error('old_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <h6 class="card-title">New Password :</h6>
                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="new_password" autocomplete="off">
                            @error('new_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <h6 class="card-title">Confirm New Password :</h6>
                        <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" autocomplete="off">
                    </div>

                    <br>

                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary">Update Password</button>
                    </div>
                </div>
            </form>
            </div>
        </div>


            </div>
        </div>

                    </div>
                    <!-- Row -->
                </div>
            </div>
            <!-- End Row -->

@endsection
