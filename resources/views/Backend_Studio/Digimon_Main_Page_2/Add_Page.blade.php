@extends('Backend_Studio.Body_Back.master')
@section('user')

@section('title')
Digimon Add
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
                <h5 class="mb-0">Add Character & Digimon</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('digimon02.store') }}" class="forms-sample" enctype="multipart/form-data">
                    @csrf

                    <!--Character Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="character_name" placeholder="Character Name">
                                @if($errors->has('character_name'))
                                    <span class="text-danger">{{ $errors->first('character_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showCharacterImage" src="{{ url('Images/digitama.png') }}" width="150" height="250" class="mb-2">
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
                                <input type="text" class="form-control" name="digivise_name" placeholder="Digivise Name">
                                @if($errors->has('digivise_name'))
                                    <span class="text-danger">{{ $errors->first('digivise_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showDigiviseImage" src="{{ url('Images/digitama.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="digivise_img" name="digivise_img">
                                @if($errors->has('digivise_img'))
                                    <span class="text-danger">{{ $errors->first('digivise_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Armor Egg 1 Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="armoregg1_name" placeholder="Armor Egg 1 Name">
                                @if($errors->has('armoregg1_name'))
                                    <span class="text-danger">{{ $errors->first('armoregg1_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showArmoregg1Image" src="{{ url('Images/digitama.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="armoregg1_img" name="armoregg1_img">
                                @if($errors->has('armoregg1_img'))
                                    <span class="text-danger">{{ $errors->first('armoregg1_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Armor Egg 2 Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="armoregg2_name" placeholder="Armor Egg 2 Name">
                                @if($errors->has('armoregg2_name'))
                                    <span class="text-danger">{{ $errors->first('armoregg2_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showArmoregg2Image" src="{{ url('Images/digitama.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="armoregg2_img" name="armoregg2_img">
                                @if($errors->has('armoregg2_img'))
                                    <span class="text-danger">{{ $errors->first('armoregg2_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Baby Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="baby_evo_name" placeholder="Baby Evolution Name">
                                @if($errors->has('baby_evo_name'))
                                    <span class="text-danger">{{ $errors->first('baby_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showBabyEvoImage" src="{{ url('Images/digitama.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="baby_evo_img" name="baby_evo_img">
                                @if($errors->has('baby_evo_img'))
                                    <span class="text-danger">{{ $errors->first('baby_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Child Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="child_evo_name" placeholder="Child Evolution Name">
                                @if($errors->has('child_evo_name'))
                                    <span class="text-danger">{{ $errors->first('child_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showChildEvoImage" src="{{ url('Images/digitama.png') }}" width="150" height="150" class="mb-2">
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
                                <input type="text" class="form-control" name="adult_evo_name" placeholder="Adult Evolution Name">
                                @if($errors->has('adult_evo_name'))
                                    <span class="text-danger">{{ $errors->first('adult_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showAdultEvoImage" src="{{ url('Images/digitama.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="adult_evo_img" name="adult_evo_img">
                                @if($errors->has('adult_evo_img'))
                                    <span class="text-danger">{{ $errors->first('adult_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Armor 1 Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="armor1_evo_name" placeholder="Armor 1 Evolution Name">
                                @if($errors->has('armor1_evo_name'))
                                    <span class="text-danger">{{ $errors->first('armor1_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showArmor1EvoImage" src="{{ url('Images/digitama.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="armor1_evo_img" name="armor1_evo_img">
                                @if($errors->has('armor1_evo_img'))
                                    <span class="text-danger">{{ $errors->first('armor1_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Armor 2 Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="armor2_evo_name" placeholder="Armor 2 Evolution Name">
                                @if($errors->has('armor2_evo_name'))
                                    <span class="text-danger">{{ $errors->first('armor2_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showArmor2EvoImage" src="{{ url('Images/digitama.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="armor2_evo_img" name="armor2_evo_img">
                                @if($errors->has('armor2_evo_img'))
                                    <span class="text-danger">{{ $errors->first('armor2_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Dna Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="dna_evo_name" placeholder="Dna Evolution Name">
                                @if($errors->has('dna_evo_name'))
                                    <span class="text-danger">{{ $errors->first('dna_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showDnaEvoImage" src="{{ url('Images/digitama.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="dna_evo_img" name="dna_evo_img">
                                @if($errors->has('dna_evo_img'))
                                    <span class="text-danger">{{ $errors->first('dna_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Dna Perfect Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="dnaperfect_evo_name" placeholder="Dna Perfect Evolution Name">
                                @if($errors->has('dnaperfect_evo_name'))
                                    <span class="text-danger">{{ $errors->first('dnaperfect_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showDnaPerfectEvoImage" src="{{ url('Images/digitama.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="dnaperfect_evo_img" name="dnaperfect_evo_img">
                                @if($errors->has('dnaperfect_evo_img'))
                                    <span class="text-danger">{{ $errors->first('dnaperfect_evo_img') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Dna Ultimate Evolution Preview-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="dnaultimate_evo_name" placeholder="Dna Ultimate Evolution Name">
                                @if($errors->has('dnaultimate_evo_name'))
                                    <span class="text-danger">{{ $errors->first('dnaultimate_evo_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="showDnaUltimateEvoImage" src="{{ url('Images/digitama.png') }}" width="150" height="150" class="mb-2">
                                <input type="file" class="form-control-file" id="dnaultimate_evo_img" name="dnaultimate_evo_img">
                                @if($errors->has('dnaultimate_evo_img'))
                                    <span class="text-danger">{{ $errors->first('dnaultimate_evo_img') }}</span>
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

    // Armor Egg 1 Image Preview
    $('#armoregg1_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showArmoregg1Image').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Armor Egg 2 Image Preview
    $('#armoregg2_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showArmoregg2Image').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Baby Evolution Image Preview
    $('#baby_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showBabyEvoImage').attr('src', e.target.result);
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

    // Armor 1 Image Preview
    $('#armor1_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showArmor1EvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Armor 2 Image Preview
    $('#armor2_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showArmor2EvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Dna Evolution Image Preview
    $('#dna_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showDnaEvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Dna Perfect Evolution Image Preview
    $('#dnaperfect_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showDnaPerfectEvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    // Dna Ultimate Evolution Image Preview
    $('#dnaultimate_evo_img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showDnaUltimateEvoImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>

@endsection