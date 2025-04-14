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
          <h1><strong>Edit On Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/japanese') }}">Home</a></li>
              <li class="breadcrumb-item active">Japanese Edit</li> 
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
           <h5 class="text-white"><b>Update Anime Database</b></h5>
      </div>
      <div class="container-fluid">
      <div class="row">
      </div>


<!-- Space -->
<legend>&nbsp;</legend>


<form method="post" action="{{ route('japanese.update' , ['japanese' => $japanese]) }}" enctypr="multipart/form-data"> 
@csrf
@method('put') 

 <!-- Picture -->

 <img id="imagePreview" src="/images/Japanese Folder/{{ $japanese->Image }}" style="max-width: 200px;">

<div class="col-md-4 form-group">
 <label for="exampleInputFile">Image</label>
 <div class="input-group">
  <div class="custom-file">
  <input type="file" name="Image" class="form-control" id="exampleInputFile" onchange="previewImage(event)">
</div>
@if($errors->has('Image'))
  <span class="text-danger">{{ $errors->first('Image') }}</span>
@endif
</div>
</div>

 <script>
        function previewImage(event) {
            var imagePreview = document.getElementById('imagePreview');
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.style.display = 'block';
                    imagePreview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.style.display = 'none';
                imagePreview.src = '#';
            }
        }
  </script>


<!-- Title Name -->

<div class="form-group">
  <label class="col-md-12 control-label" >Title Name</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" placeholder="Insert Title" class="form-control" name="TitleName" value="{{$japanese->TitleName}}" id="id">
    </div>
@if($errors->has('TitleName'))
  <span class="text-danger">{{ $errors->first('TitleName') }}</span>
@endif
  </div>
</div>


<!-- Main Character/Cast -->

<div class="form-group">
  <label class="col-md-12 control-label">Main Character/Cast</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
      <textarea class="form-control" input type="text" name="MainCharacterCast" placeholder="Insert Main Character/Cast" value="{{$japanese->MainCharacterCast}}" id="id" >{{$japanese->MainCharacterCast}}</textarea>
  </div>
@if($errors->has('MainCharacterCast'))
  <span class="text-danger">{{ $errors->first('MainCharacterCast') }}</span>
@endif
  </div>
</div>


<!-- Episode/Movie -->

<div class="form-group">
    <label class="col-md-4 control-label">Episode/Movie</label>
      <div class="col-md-4">
      <div class="radio">
        <label>
      <input type="radio" name="EpisodeMovie" value="Episode" {{$japanese->EpisodeMovie === 'Episode' ? 'checked' : ''}} /> Episode
        </label>
      </div>
      <div class="radio">
        <label>
      <input type="radio" name="EpisodeMovie" value="Movie" {{$japanese->EpisodeMovie === 'Movie' ? 'checked' : ''}} /> Movie
        </label>
    </div>
    <div class="radio">
        <label>
      <input type="radio" name="EpisodeMovie" value="Both Episode/Movie" {{$japanese->EpisodeMovie === 'Both Episode/Movie' ? 'checked' : ''}} /> Both Episode/Movie
        </label>
      </div>
@if($errors->has('EpisodeMovie'))
  <span class="text-danger">{{ $errors->first('EpisodeMovie') }}</span>
@endif
  </div>
</div>


<!-- List of Episode/Movie -->

<div class="form-group">
  <label class="col-md-4 control-label">List of Episode/Movie</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="ListOfEpisodeMovie" name="ListOfEpisodeMovie" class="form-control selectpicker" >
      <option>Select List Episode/Movie</option>
      <option value="1 Season Episode" {{$japanese->ListOfEpisodeMovie === '1 Season Episode' ? 'selected' : ''}} >1 Season Episode </option>
      <option value="2 Season Episode" {{$japanese->ListOfEpisodeMovie === '2 Season Episode' ? 'selected' : ''}} >2 Season Episode </option>
      <option value="More than 3 Season Episode" {{$japanese->ListOfEpisodeMovie === 'More than 3 Season Episode' ? 'selected' : ''}} >More than 3 Season Episode </option>
      <option value="1 Movie" {{$japanese->ListOfEpisodeMovie === '1 Movie' ? 'selected' : ''}} >1 Movie </option>
      <option value="More than 2 Movie" {{$japanese->ListOfEpisodeMovie === 'More than 2 Movie' ? 'selected' : ''}} >More than 2 Movie </option>
    </select>
  </div>
@if($errors->has('ListOfEpisodeMovie'))
  <span class="text-danger">{{ $errors->first('ListOfEpisodeMovie') }}</span>
@endif
</div>
</div>


<!-- Genre Category -->

<div class="form-group">
  <label class="col-md-4 control-label">Genre Category</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="GenreCategory" name="GenreCategory" class="form-control selectpicker" >
      <option>Select Genre Category</option>
      <option value="Action & Adventure" {{$japanese->GenreCategory === 'Action & Adventure' ? 'selected' : ''}} >Action & Adventure</option>
      <option value="Crime & Horror" {{$japanese->GenreCategory === 'Crime & Horror' ? 'selected' : ''}} >Crime & Horror</option>
      <option value="Romantic & Love"{{$japanese->GenreCategory === 'Romantic & Love' ? 'selected' : ''}}  >Romantic & Love</option>
      <option value="Fantasy & Supernatural" {{$japanese->GenreCategory === 'Fantasy & Supernatural' ? 'selected' : ''}} >Fantasy & Supernatural</option>
      <option value="Drama & Life" {{$japanese->GenreCategory === 'Drama & Life' ? 'selected' : ''}} >Drama & Life</option>
    </select>
  </div>
@if($errors->has('GenreCategory'))
  <span class="text-danger">{{ $errors->first('GenreCategory') }}</span>
@endif 
</div>
</div>


<!-- Rate -->

<div class="form-group">
    <label class="col-md-4 control-label">Rate</label>
      <div class="col-md-4">
      <div class="radio">
        <label>
      <input type="radio" name="Rate" value="1" {{$japanese->Rate === '1' ? 'checked' : ''}} /> Awsome
        </label>
      </div>
      <div class="radio">
        <label>
      <input type="radio" name="Rate" value="0" {{$japanese->Rate === '0' ? 'checked' : ''}} /> Not bad
        </label>
    </div>
  @if($errors->has('Rate'))
  <span class="text-danger">{{ $errors->first('Rate') }}</span>
  @endif
  </div>
</div>


<!-- Submit -->

<div class="form-group">
  <label class="col-md-6 control-label"></label>
  <div class="col-md-6">
  <button type="submit" class="btn btn-primary">Update Data</button>
  </div>
</div>
</form>

</div>
</div>
</div>
</div>
</section>
</div>


 @include('layouts.footer')