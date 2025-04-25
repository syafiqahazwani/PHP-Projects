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
                <form method="POST" action="{{ route('digimonxroswars.update') }}" class="forms-sample" enctype="multipart/form-data">
                  @csrf

                  <input type="hidden" name="id" value="{{ $digimonxroswarsEdit->id }}">

                    <!--Character Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="character_name" value="{{ $digimonxroswarsEdit->character_name }}" placeholder="Character Name">
                                @if($errors->has('character_name'))
                                    <span class="text-danger">{{ $errors->first('character_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showCharacterImage" src="{{ (!empty($digimonxroswarsEdit->character_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->character_img) : url('Images/admin.png') }}" width="150" height="250" class="mb-2">
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
                                <input type="text" class="form-control" name="digivise_name" value="{{ $digimonxroswarsEdit->digivise_name }}" placeholder="Digivise Name">
                                @if($errors->has('digivise_name'))
                                    <span class="text-danger">{{ $errors->first('digivise_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showDigiviseImage" src="{{ (!empty($digimonxroswarsEdit->digivise_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->digivise_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="digivise_img" name="digivise_img">
                                @if($errors->has('digivise_img'))
                                    <span class="text-danger">{{ $errors->first('digivise_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Team Logo Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="teamlogo_name" value="{{ $digimonxroswarsEdit->teamlogo_name }}" placeholder="Team Logo Name">
                                @if($errors->has('teamlogo_name'))
                                    <span class="text-danger">{{ $errors->first('teamlogo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showTeamlogoImage" src="{{ (!empty($digimonxroswarsEdit->teamlogo_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->teamlogo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="teamlogo_img" name="teamlogo_img">
                                @if($errors->has('teamlogo_img'))
                                    <span class="text-danger">{{ $errors->first('teamlogo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Child Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="child_evo_name" value="{{ $digimonxroswarsEdit->child_evo_name }}" placeholder="Child Evolution Name">
                                @if($errors->has('child_evo_name'))
                                    <span class="text-danger">{{ $errors->first('child_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showChildEvoImage" src="{{ (!empty($digimonxroswarsEdit->child_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->child_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="child_evo_img" name="child_evo_img">
                                @if($errors->has('child_evo_img'))
                                    <span class="text-danger">{{ $errors->first('child_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Ultimate Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="ultimate_evo_name" value="{{ $digimonxroswarsEdit->ultimate_evo_name }}" placeholder="Ultimate Evolution Name">
                                @if($errors->has('ultimate_evo_name'))
                                    <span class="text-danger">{{ $errors->first('ultimate_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showUltimateEvoImage" src="{{ (!empty($digimonxroswarsEdit->ultimate_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->ultimate_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="ultimate_evo_img" name="ultimate_evo_img">
                                @if($errors->has('ultimate_evo_img'))
                                    <span class="text-danger">{{ $errors->first('ultimate_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Xros 1 Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="xros1_evo_name" value="{{ $digimonxroswarsEdit->xros1_evo_name }}" placeholder="Xros 1 Evolution Name">
                                @if($errors->has('xros1_evo_name'))
                                    <span class="text-danger">{{ $errors->first('xros1_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showXros1EvoImage" src="{{ (!empty($digimonxroswarsEdit->xros1_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->xros1_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="xros1_evo_img" name="xros1_evo_img">
                                @if($errors->has('xros1_evo_img'))
                                    <span class="text-danger">{{ $errors->first('xros1_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                     <!--Xros 2 Evolution Preview-->
                     <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="xros2_evo_name" value="{{ $digimonxroswarsEdit->xros2_evo_name }}" placeholder="Xros 2 Evolution Name">
                                @if($errors->has('xros2_evo_name'))
                                    <span class="text-danger">{{ $errors->first('xros2_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showXros2EvoImage" src="{{ (!empty($digimonxroswarsEdit->xros2_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->xros2_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="xros2_evo_img" name="xros2_evo_img">
                                @if($errors->has('xros2_evo_img'))
                                    <span class="text-danger">{{ $errors->first('xros2_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Xros 3 Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="xros3_evo_name" value="{{ $digimonxroswarsEdit->xros3_evo_name }}" placeholder="Xros 3 Evolution Name">
                                @if($errors->has('xros3_evo_name'))
                                    <span class="text-danger">{{ $errors->first('xros3_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showXros3EvoImage" src="{{ (!empty($digimonxroswarsEdit->xros3_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->xros3_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="xros3_evo_img" name="xros3_evo_img">
                                @if($errors->has('xros3_evo_img'))
                                    <span class="text-danger">{{ $errors->first('xros3_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Xros 4 Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="xros4_evo_name" value="{{ $digimonxroswarsEdit->xros4_evo_name }}" placeholder="Xros 4 Evolution Name">
                                @if($errors->has('xros4_evo_name'))
                                    <span class="text-danger">{{ $errors->first('xros4_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showXros4EvoImage" src="{{ (!empty($digimonxroswarsEdit->xros4_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->xros4_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="xros4_evo_img" name="xros4_evo_img">
                                @if($errors->has('xros4_evo_img'))
                                    <span class="text-danger">{{ $errors->first('xros4_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Xros 5 Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="xros5_evo_name" value="{{ $digimonxroswarsEdit->xros5_evo_name }}" placeholder="Xros 5 Evolution Name">
                                @if($errors->has('xros5_evo_name'))
                                    <span class="text-danger">{{ $errors->first('xros5_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showXros5EvoImage" src="{{ (!empty($digimonxroswarsEdit->xros5_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->xros5_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="xros5_evo_img" name="xros5_evo_img">
                                @if($errors->has('xros5_evo_img'))
                                    <span class="text-danger">{{ $errors->first('xros5_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Xros 6 Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="xros6_evo_name" value="{{ $digimonxroswarsEdit->xros6_evo_name }}" placeholder="Xros 6 Evolution Name">
                                @if($errors->has('xros6_evo_name'))
                                    <span class="text-danger">{{ $errors->first('xros6_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showXros6EvoImage" src="{{ (!empty($digimonxroswarsEdit->xros6_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->xros6_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="xros6_evo_img" name="xros6_evo_img">
                                @if($errors->has('xros6_evo_img'))
                                    <span class="text-danger">{{ $errors->first('xros6_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Xros 7 Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="xros7_evo_name" value="{{ $digimonxroswarsEdit->xros7_evo_name }}" placeholder="Xros 7 Evolution Name">
                                @if($errors->has('xros7_evo_name'))
                                    <span class="text-danger">{{ $errors->first('xros7_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showXros7EvoImage" src="{{ (!empty($digimonxroswarsEdit->xros7_evo_img)) ? url('Images/Digimon_Xros_Wars/'.$digimonxroswarsEdit->xros7_evo_img) : url('Images/admin.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="xros7_evo_img" name="xros7_evo_img">
                                @if($errors->has('xros7_evo_img'))
                                    <span class="text-danger">{{ $errors->first('xros7_evo_img') }}</span>
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

        // Team Logo Image Preview
        $('#teamlogo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showTeamlogoImage').attr('src', e.target.result);
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

    // Ultimate Evolution Image Preview
    $('#ultimate_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showUltimateEvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Xros 1 Evolution Image Preview
    $('#xros1_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showXros1EvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Xros 2 Evolution Image Preview
    $('#xros2_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showXros2EvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Xros 3 Evolution Image Preview
    $('#xros3_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showXros3EvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Xros 4 Evolution Image Preview
    $('#xros4_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showXros4EvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Xros 5 Evolution Image Preview
    $('#xros5_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showXros5EvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Xros 6 Evolution Image Preview
    $('#xros6_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showXros6EvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Xros 7 Evolution Image Preview
    $('#xros7_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showXros7EvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>

@endsection