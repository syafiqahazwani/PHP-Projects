@extends('Backend_Studio.Body_Back.master')
@section('user')

@section('title')
Digimon | User Dashboard
@endsection

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Cards</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">Basic Components</a></li>
							<li class="breadcrumb-item"><a href="#!">Cards</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ card ] start -->


			<div class="col-md-6 col-xl-4">

				<hr>
				<div class="card mb-3">
                    <center>
					<img class="rounded-circle" width="150" height="150" src="{{asset('Backend')}}/dist/assets/images/user/avatar-2.jpg" alt="Card image cap">
                    </center>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-7">

				<hr>
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
					<img class="img-fluid card-img-bottom" src="assets/images/slider/img-slide-6.jpg" alt="Card image cap">
				</div>
			</div>



			<!-- [ card ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>

@endsection
