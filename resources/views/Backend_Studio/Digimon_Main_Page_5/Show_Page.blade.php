@extends('Backend_Studio.Body_Back.master')
@section('user')

@section('title')
Display
@endsection

<!-- [ Main Content ] -->
<div class="pcoded-main-container">
	<div class="pcoded-content">

		<!-- [ Breadcrumb ] -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Digimon Display</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">View Display</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ Breadcrumb ] -->

		<!-- [ Main Content ] -->
		<div class="row">

		<!-- [ Card ] -->		
		<div class="col-xl-12">
			<h5 class="mt-4">&nbsp;</h5>
        <div class="card-deck">

<div class="row">
    <!-- Card 1 -->
    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ (!empty($digimonsaversShow->character_img)) ? url('Images/Digimon_Savers/'.$digimonsaversShow->character_img) : url('Images/digitama.png') }}" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $digimonsaversShow->character_name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 2 -->
    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ (!empty($digimonsaversShow->digivise1_img)) ? url('Images/Digimon_Savers/'.$digimonsaversShow->digivise1_img) : url('Images/digitama.png') }}" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $digimonsaversShow->digivise1_name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 3 -->
    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ (!empty($digimonsaversShow->digivise2_img)) ? url('Images/Digimon_Savers/'.$digimonsaversShow->digivise2_img) : url('Images/digitama.png') }}" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $digimonsaversShow->digivise2_name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

		<div class="col-xl-12">
			<h5 class="mt-4">Digimon Exolution</h5>
		<div class="card-deck">

<div class="row">
    <!-- Card 1 -->
    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ (!empty($digimonsaversShow->child_evo_img)) ? url('Images/Digimon_Savers/'.$digimonsaversShow->child_evo_img) : url('Images/digitama.png') }}" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $digimonsaversShow->child_evo_name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 2 -->
    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ (!empty($digimonsaversShow->adult_evo_img)) ? url('Images/Digimon_Savers/'.$digimonsaversShow->adult_evo_img) : url('Images/digitama.png') }}" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $digimonsaversShow->adult_evo_name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Card 3 -->
    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ (!empty($digimonsaversShow->perfect_evo_img)) ? url('Images/Digimon_Savers/'.$digimonsaversShow->perfect_evo_img) : url('Images/digitama.png') }}" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $digimonsaversShow->perfect_evo_name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Card 4 -->
    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ (!empty($digimonsaversShow->ultimate_evo_img)) ? url('Images/Digimon_Savers/'.$digimonsaversShow->ultimate_evo_img) : url('Images/digitama.png') }}" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $digimonsaversShow->ultimate_evo_name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 5 -->
    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ (!empty($digimonsaversShow->ultimateburst_evo_img)) ? url('Images/Digimon_Savers/'.$digimonsaversShow->ultimateburst_evo_img) : url('Images/digitama.png') }}" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $digimonsaversShow->ultimateburst_evo_name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

			<div class="col-sm-3">
				<a href="{{ route('digimonsavers.page') }}" class="btn btn-primary">
				<i class="fas fa-reply"></i>&nbsp;&nbsp;Back to Main Page</a>
			</div>

           </div>
			<!-- [ Card ] -->
		</div>
		<!-- [ End Main Content ] -->
	</div>
</div>
<!-- [ Main Content ] -->

@endsection