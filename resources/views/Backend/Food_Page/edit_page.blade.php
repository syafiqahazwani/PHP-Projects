@extends('Backend.Body.master')
@section('admin')

@section('title')
Exploredia | Food Edit
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Food Form Edit</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ route('food.page') }}" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Food Edit</li>
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

                <div class="col-sm-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-utensils"></i>
                            </button>

                            <br>
                            <br>
                    <form method="POST" action="{{ route('food.update') }}" class="forms-sample" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $foodEdit->id }}">


                        <h6 class="card-title">Food Image :</h6>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="food_image">
                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                        </div>

                        <br>
                    <h6 class="card-title"></h6>
                    <div class="custom-file">
                        <img id="showImage" src="{{ (!empty($foodEdit->food_image)) ? url('Images/Food_Page/'.$foodEdit->food_image) : url('Images/admin.png') }}"
                        alt="food_image" width="100" height="100">
                    </div>
                    <br>
                    <br>
                    <br>

                    <br>
                        <div class="form-group">
                            <h6 class="card-title">Food Name :</h6>
                            <input type="text" class="form-control" name="food_name" value="{{ $foodEdit->food_name }}"
                                placeholder="Add Name">
                                @if($errors->has('food_name'))
                                <span class="text-danger">{{ $errors->first('food_name') }}</span>
                              @endif
                        </div>

                        <br>
                        <div class="form-group">
                            <h6 class="card-title">Food Which Country :</h6>
                            <input type="text" class="form-control" name="food_which_country" value="{{ $foodEdit->food_which_country }}"
                                placeholder="Add Which Country">
                                @if($errors->has('food_which_country'))
                                <span class="text-danger">{{ $errors->first('food_which_country') }}</span>
                              @endif
                        </div>

                        <br>
                            <h6 class="card-title">Food Description :</h6>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="food_description"
                                placeholder="Add Description" value="{{ $foodEdit->food_description }}">{{ $foodEdit->food_description }}</textarea>
                                @if($errors->has('food_description'))
                              <span class="text-danger">{{ $errors->first('food_description') }}</span>
                            @endif
                            </div>

                            <br>
                                <button type="submit"
                                class="btn waves-effect waves-light btn-rounded btn-primary"><i class="fas fa-utensils"></i>&nbsp; Update Data</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#image').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImage').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
            </script>

@endsection
