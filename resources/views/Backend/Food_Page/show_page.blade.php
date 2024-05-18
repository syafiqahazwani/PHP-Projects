@extends('Backend.Body.master')
@section('admin')

@section('title')
Exploredia | Food Show
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Food View Page</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ route('food.page') }}" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Food Show</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- End Bread crumb and right sidebar toggle -->

        <!-- Container fluid  -->
        <div class="container-fluid">

            <!-- Start Page Content -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-plane"></i>
                            </button>
                            <br><br>

                            <h5 class="card-title">Food View Page</h5>
                            <div class="media">
                                <img class="align-self-center w-25 mr-3" src="{{ (!empty($foodShow->food_image)) ? url('Images/Food_Page/'.$foodShow->food_image) : url('Images/admin.png') }}"
                                height="250px;" width="200;" alt="city page">
                                <div class="media-body">
                                    <br><br><br>
                                    <h3 class="card-title">{{ $foodShow->food_name }}</h3>
                                    <br>
                                    <p><i class="fas fa-coffee"></i> &nbsp;&nbsp;This Food come from Country called <b>{{ $foodShow->food_which_country }}<b></p>
                                    <p><i class="fas fa-shopping-basket"></i> &nbsp;&nbsp;{{ $foodShow->food_description }}</p>
                                </div>
                            </div>

                            <br>
                            <a href="{{ route('food.page') }}" type="submit"
                                class="btn waves-effect waves-light btn-rounded btn-primary"><i class="fas fa-utensils"></i>&nbsp; Return Back</a>
                        </div>

                    </div>
                </div>


            </div>
        </div>

@endsection
