@extends('Backend.Body.master')
@section('admin')

@section('title')
Exploredia | Add About Page
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">About Page Add On</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('about.add') }}" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">About Page</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- End Bread crumb and right sidebar toggle -->


    <!-- Container fluid  -->
    <div class="container-fluid">

        @if(session('message'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <span>{{ session('message') }} </span>
                </div>
                @endif

        <!-- Start Page Content -->
        <div class="col-md-12">
            <div class="card border-info">
                <div class="card-header bg-info">
                    <h4 class="mb-0 text-white">Edit Profile</h4>
                </div>
                <div class="card-body">

            <form method="POST" action="{{ route('about.update') }}" class="forms-sample" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $aboutpage->id }}">

                <br>
                <div class="form-group">
                    <h6 class="card-title">About Title :</h6>
                    <input type="text" class="form-control" name="about_title"
                        placeholder="Add Title" value="{{ $aboutpage->about_title }}">
                </div>

                <br>
                    <h6 class="card-title">About Short Title :</h6>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="about_short_description" value="{{ $aboutpage->about_short_description }}"
                            placeholder="Add Short Title">{{ $aboutpage->about_short_description }}</textarea>
                    </div>

                <br>
                    <h6 class="card-title">About Long Title :</h6>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="about_long_description" value="{{ $aboutpage->about_long_description }}"
                            placeholder="Add Long Title">{{ $aboutpage->about_long_description }}</textarea>
                    </div>

                    <h6 class="card-title">About Image :</h6>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="about_image">
                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                    </div>

                    <br>
                    <h6 class="card-title"></h6>
                    <div class="custom-file">
                        <img id="showImage" src="{{ (!empty($aboutpage->about_image)) ? url('Images/About_Page/'.$aboutpage->about_image) : url('Images/admin.png') }}"
                        alt="about_image" width="100" height="100">
                    </div>
                    <br>
                    <br>
                    <br>

                    <br>
                        <button type="submit"
                        class="btn waves-effect waves-light btn-rounded btn-primary"><i class="fas fa-address-card"></i>&nbsp; Submit Data</button>

                        </div>

                    </form>
        </div>
    </div>


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
