@extends('Backend_Studio.Body_Back.master')
@section('user')

@section('title')
Add
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- [ Main Content ] -->
<section class="pcoded-main-container">
    <div class="pcoded-content">

        <!-- [ Breadcrumb ] -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Add Digimon</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Add Digimon</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Breadcrumb ] -->

<!-- [ Main Content ] -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add Database</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('overall.store') }}" class="forms-sample" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="digimon_name" placeholder="Digimon Name">
                                @if($errors->has('digimon_name'))
                                    <span class="text-danger">{{ $errors->first('digimon_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showImage" src="{{ url('Images/digitama.png') }}" alt="digimon logo" width="200" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="image" name="digimon_logo">
                                @if($errors->has('digimon_logo'))
                                    <span class="text-danger">{{ $errors->first('digimon_logo') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-success btn-block">
                            <i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Add Data
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- [ End Main Content ] -->

    </div>
</section>
<!-- [ Main Content ] -->

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