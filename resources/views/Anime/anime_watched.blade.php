@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')


 <div class="content-wrapper">
 <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">

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
              <li class="breadcrumb-item active">Anime Watched</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

  <!-- Anime Box -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-life-ring"></i></span>
        <div class="info-box-content">
          <span class="info-box-text"><b>Anime Episode & Movies</b></span>
          <span class="info-box-number">
          {{ $numberAnime }}
          </span>
        </div>
      </div>
    </div>
</div>
</div>

      <!-- Anime Table -->
    <section class="content">
    <div class="col-sm-12 ">
      <div class="card card-absolute shadow b-dark border-1 wow slideInUp">
       <div class="card-header bg-info">
          <h5 class="text-white"><b>Anime Database</b></h5>
        </div>

      <div class="card card-primary">
      <div class="card-body">

      <form method="GET">
      <div class="col-md-3">
        <div class="form-group">
          <form action="/search">
            <div class="input-group">
              <input type="text" class="form-control" value="" name="search" placeholder="Search..." autofocus value="{{ $search }}">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
     </div>
</form>

        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
          <th class="text-center" width="1%">No.</th>
          <th class="text-center" width="5%">Image</th>
          <th width="8%">Anime Name</th>
          <th width="10%">Anime Main Character</th>
          <th width="5%">Date Airing</th>
          <th class="text-center" width="5%">Episode Series</th>
          <th class="text-center" width="5%">Movie Series</th>
          <th class="text-center" width="3%">Status</th>
          <th class="text-center" width="3%">Rate</th>
          <th class="text-center" width="6%">Action</th>
          </tr>
          </thead>
            <tbody>

            @forelse ($data as $anime)

                <tr>
                    <td class="text-center"> {{ $anime->id }} </td>
                    <td class="text-center"><img src="/images/Anime Folder/{{ $anime->Image }}" height="150px" width="100px"></td>
                    <td> {{ $anime->AnimeName }} </td>
                    <td> {{ $anime->AnimeMainCharacter }} </td>
                    <td> {{ $anime->DateAiring }} </td>
                    <td> {{ $anime->EpisodeSeries }} </td>
                    <td> {{ $anime->MovieSeries }} </td>
                    <td class="text-center"> @if($anime->Status==1)
                          <a href="" class="badge rounded-pill bg-info">Finished</a>
                         @else
                        <a href="" class="badge rounded-pill bg-warning">Ongoing</a>
                        @endif </td>
                    <td class="text-center"> @if($anime->Rate==1)
                          <a href="" class="badge rounded-pill bg-success">Awsome</a>
                         @else
                        <a href="" class="badge rounded-pill bg-danger">Not bad</a>
                         @endif </td>
                   <td class="text-center">

                          <a class="btn btn-warning btn-sm" data-toggle2="tooltip" data-placement="bottom" title="View Anime" href="{{ route('anime.show', ['anime' => $anime]) }}">
                              <i class="fas fa-eye">
                              </i>
                          </a>

                          <a class="btn btn-info btn-sm" data-toggle2="tooltip" data-placement="bottom" title="Edit Anime" href="{{ route('anime.edit', ['anime' => $anime]) }}">
                              <i class="fas fa-edit">
                              </i>
                          </a>

<!-- Delete Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="bottom" data-toggle2="tooltip" title="Delete Anime" data-target="#exampleModalAnime{{$anime->id}}"><i class="fas fa-trash" aria-hidden="true"></i>
</button>

<!-- Delete Modal -->
<form method="post" action="{{ route('anime.destroy', $anime->id) }}" accept-charset="UTF-8" style="display:inline">
@csrf
@method('delete')

<div class="modal fade" id="exampleModalAnime{{$anime->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Delete Database</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-left">Confirm Delete <b>{{$anime->AnimeName}}</b>?</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>

</form>

                    </td>
                </tr>

                @empty

                <tr>
                    <td colspan="10">Nothing Found</td>
                </tr>

                @endforelse

            </tbody>
        </table>

        <div class="right">
        {{ $data->links() }}
        </div>
</div>
</div>

</section>
</div>

@include('layouts.footer')
