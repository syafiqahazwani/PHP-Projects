@extends('Backend.Body.master')
@section('admin')

@section('title')
Exploredia | Quotes Edit
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Quotes Form Edit</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ route('quotes.page') }}" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Quotes Edit</li>
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
                            <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-chess-queen"></i>
                            </button>

                            <br>
                            <br>
                    <form method="POST" action="{{ route('quotes.update') }}" class="forms-sample" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $quotesEdit->id }}">


                        <h6 class="card-title">Quotes Image :</h6>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="quotes_image">
                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                        </div>

                        <br>
                    <h6 class="card-title"></h6>
                    <div class="custom-file">
                        <img id="showImage" src="{{ (!empty($quotesEdit->quotes_image)) ? url('Images/Quotes_Page/'.$quotesEdit->quotes_image) : url('Images/admin.png') }}"
                        alt="quotes_image" width="100" height="100">
                    </div>
                    <br>
                    <br>
                    <br>

                        <br>
                            <h6 class="card-title">Motivational Quotes :</h6>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="quotes_description"
                                placeholder="Add Description" value="{{ $quotesEdit->quotes_description }}">{{ $quotesEdit->quotes_description }}</textarea>
                                @if($errors->has('quotes_description'))
                                 <span class="text-danger">{{ $errors->first('quotes_description') }}</span>
                                @endif
                            </div>

                            <br>
                                <button type="submit"
                                class="btn waves-effect waves-light btn-rounded btn-primary"><i class="fas fa-chess-queen"></i>&nbsp; Update Data</button>

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
