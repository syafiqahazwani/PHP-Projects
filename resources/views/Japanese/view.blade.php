@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')


<div class="content-wrapper"> 
   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <legend>&nbsp;</legend>
          <h1><strong>Japanese Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/japanese') }}">Home</a></li>
              <li class="breadcrumb-item active">Japanese View</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

 <!-- Title -->
 <section class="content">
    <div class="col-sm-12 ">
        <div class="card card-absolute shadow b-dark border-1 wow slideInUp">
          <div class="card-header bg-success">
           <h5 class="text-white"><b>Japanese Database View</b></h5>
      </div>
      <div class="container-fluid">
      <div class="row">  
      </div>

              
    <div class="card-body">
    <table border='0' width='100%'>
<tr>
    <td class="text-center" width="300"><img src="/images/Japanese Folder/{{ $japanese->Image }}" height="290px" width="200px">
    <td style="padding:20px;">
    <p><strong>No.</strong> {{ $japanese->id }} </p>
    <p><strong>Title Name:</strong> {{ $japanese->TitleName }} </p>
    <p><strong>Main Character/Cast:</strong> {{ $japanese->MainCharacterCast }} </p>
    <p><strong>Episode/Movie:</strong> {{ $japanese->EpisodeMovie }} </p>
    <p><strong>List of Episode/Movie:</strong> {{ $japanese->ListOfEpisodeMovie }} </p>
    <p><strong>Genre Category:</strong> {{ $japanese->GenreCategory }} </p>
    <p><strong>Rate:</strong> @if($japanese->Rate==1)
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
                <a class="btn btn-primary" href="{{ url('/japanese') }}">Return Back</a>
            </div>
        </div>
    </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@include('layouts.footer')