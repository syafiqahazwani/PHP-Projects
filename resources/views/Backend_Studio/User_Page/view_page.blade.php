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
    <div class="col-md-6 col-xl-6">
        <h5>&nbsp;</h5>

    <div class="card mb-3">
		<div class="text-center mb-3">
            <img class="img-fluid"
                src="{{ (!empty($digimonShow->digimon_logo)) ? url('Images/Logo/'.$digimonShow->digimon_logo) : url('Images/digitama.png') }}" 
                alt="digimon image" height="200" width="200">
        </div>
            <div class="card-body text-center">
                <h5 class="card-title">{{ $digimonShow->digimon_name }}</h5>
            </div>
			<td class="text-center"> 
			<a href="{{ route('overall.page') }}" class="btn btn-primary">
				<i class="fas fa-reply"></i>&nbsp;&nbsp;Back to Main Page</a>
			</td>
        </div>
    </div>
</div>
<!-- [ Main Content ] -->

	</div>
</div>
<!-- [ Main Content ] -->

@endsection