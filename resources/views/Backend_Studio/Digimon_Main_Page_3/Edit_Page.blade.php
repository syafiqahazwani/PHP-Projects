@extends('Backend_Studio.Body_Back.master')
@section('user')

@section('title')
Digimon Edit
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
                            <h5 class="m-b-10">Edit Digimon</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Edit Digimon</a></li>
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
                <h5 class="mb-0">Edit Character & Digimon</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('digimontamers.update') }}" class="forms-sample" enctype="multipart/form-data">
                  @csrf

                  <input type="hidden" name="id" value="{{ $digimontamersEdit->id }}">

                    <!--Character Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="character_name" value="{{ $digimontamersEdit->character_name }}" placeholder="Character Name">
                                @if($errors->has('character_name'))
                                    <span class="text-danger">{{ $errors->first('character_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showCharacterImage" src="{{ (!empty($digimontamersEdit->character_img)) ? url('Images/Digimon_Tamers/'.$digimontamersEdit->character_img) : url('Images/admin.png') }}" width="150" height="250" class="mb-2">
                                <input type="file" class="form-control-file" id="character_img" name="character_img">
                                @if($errors->has('character_img'))
                                    <span class="text-danger">{{ $errors->first('character_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Digivise Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="digivise_name" value="{{ $digimontamersEdit->digivise_name }}" placeholder="Digivise Name">
                                @if($errors->has('digivise_name'))
                                    <span class="text-danger">{{ $errors->first('digivise_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showDigiviseImage" src="{{ (!empty($digimontamersEdit->digivise_img)) ? url('Images/Digimon_Tamers/'.$digimontamersEdit->digivise_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="digivise_img" name="digivise_img">
                                @if($errors->has('digivise_img'))
                                    <span class="text-danger">{{ $errors->first('digivise_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Child Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="child_evo_name" value="{{ $digimontamersEdit->child_evo_name }}" placeholder="Child Evolution Name">
                                @if($errors->has('child_evo_name'))
                                    <span class="text-danger">{{ $errors->first('child_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showChildEvoImage" src="{{ (!empty($digimontamersEdit->child_evo_img)) ? url('Images/Digimon_Tamers/'.$digimontamersEdit->child_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="child_evo_img" name="child_evo_img">
                                @if($errors->has('child_evo_img'))
                                    <span class="text-danger">{{ $errors->first('child_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Adult Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="adult_evo_name" value="{{ $digimontamersEdit->adult_evo_name }}" placeholder="Adult Evolution Name">
                                @if($errors->has('adult_evo_name'))
                                    <span class="text-danger">{{ $errors->first('adult_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showAdultEvoImage" src="{{ (!empty($digimontamersEdit->adult_evo_img)) ? url('Images/Digimon_Tamers/'.$digimontamersEdit->adult_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="adult_evo_img" name="adult_evo_img">
                                @if($errors->has('adult_evo_img'))
                                    <span class="text-danger">{{ $errors->first('adult_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Perfect Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="perfect_evo_name" value="{{ $digimontamersEdit->perfect_evo_name }}" placeholder="Perfect Evolution Name">
                                @if($errors->has('perfect_evo_name'))
                                    <span class="text-danger">{{ $errors->first('perfect_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showPerfectEvoImage" src="{{ (!empty($digimontamersEdit->perfect_evo_img)) ? url('Images/Digimon_Tamers/'.$digimontamersEdit->perfect_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="perfect_evo_img" name="perfect_evo_img">
                                @if($errors->has('perfect_evo_img'))
                                    <span class="text-danger">{{ $errors->first('perfect_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Ultimate Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="ultimate_evo_name" value="{{ $digimontamersEdit->ultimate_evo_name }}" placeholder="Ultimate Evolution Name">
                                @if($errors->has('ultimate_evo_name'))
                                    <span class="text-danger">{{ $errors->first('ultimate_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showUltimateEvoImage" src="{{ (!empty($digimontamersEdit->ultimate_evo_img)) ? url('Images/Digimon_Tamers/'.$digimontamersEdit->ultimate_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="ultimate_evo_img" name="ultimate_evo_img">
                                @if($errors->has('ultimate_evo_img'))
                                    <span class="text-danger">{{ $errors->first('ultimate_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-success btn-block">
                            <i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Update Data
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
        // Character Image Preview
        $('#character_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showCharacterImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

        // Digivise Image Preview
        $('#digivise_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showDigiviseImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Child Ev0lution Image Preview
    $('#child_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showChildEvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Adult Evolution Image Preview
    $('#adult_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showAdultEvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Perfect Evolution Image Preview
    $('#perfect_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showPerfectEvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Ultimate Evolution Image Preview
    $('#ultimate_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showUltimateEvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>

@endsection