@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')


<div class="content-wrapper"> 
   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <legend>&nbsp;</legend>
          <h1><strong>Anime Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/anime') }}">Home</a></li>
              <li class="breadcrumb-item active">Anime View</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

 <!-- Title -->
 <section class="content">
    <div class="col-sm-12 ">
        <div class="card card-absolute shadow b-dark border-1 wow slideInUp">
          <div class="card-header bg-info">
           <h5 class="text-white">Anime Database View</h5>
      </div>
      <div class="container-fluid">
      <div class="row">  
      </div>

              
    <div class="card-body">
    <table border='0' width='100%'>
<tr> 
    <td class="text-center" width="300"><img src="/images/Anime Folder/{{ $anime->Image }}" height="290px" width="200px">
    <td style="padding:20px;">
    <p><strong>No.</strong> {{ $anime->id }}</p>
    <p><strong>Anime Name:</strong> {{ $anime->AnimeName }}</p>
    <p><strong>Anime Main Character:</strong> {{ $anime->AnimeMainCharacter }}</p>
    <p><strong>Date Airing:</strong> {{ $anime->DateAiring }}</p>
    <p><strong>Episode Series:</strong> {{ $anime->EpisodeSeries }}</p>
    <p><strong>Movie Series:</strong> {{ $anime->MovieSeries }}</p>
    <p><strong>Status:</strong> @if($anime->Status==1)
                                <a href="" class="badge rounded-pill bg-info">Finished</a>
                                @else
                                <a href="" class="badge rounded-pill bg-warning">Ongoing</a>
                                @endif </p>
    <p><strong>Rate:</strong> @if($anime->Rate==1)
                              <a href="" class="badge rounded-pill bg-success">Awsome</a>
                              @else
                              <a href="" class="badge rounded-pill bg-danger">Not bad</a>
                              @endif</p>
    </td>
</tr>
</table>
  </div>
    </div>
      </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/anime') }}">Return Back</a>
            </div>
        </div>
    </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@include('layouts.footer')