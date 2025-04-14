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
          <h1><strong>Create Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/anime') }}">Home</a></li>
              <li class="breadcrumb-item active">Anime Create</li> 
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
           <h5 class="text-white"><b>Create New Anime Database</b></h5>
      </div>
      <div class="container-fluid">
      <div class="row">
      </div>


<!-- Space -->
<legend>&nbsp;</legend>

@if (session('success'))
<script>
  Swal.fire({
  icon: "success",
  title: "Data Saved",
  text: "{{ session('success') }}",
  timer: 4500
})
  </script>
@endif


<form method="post" action="{{ route('anime.store') }}" enctypr="multipart/form-data">
@csrf


 <!-- Picture -->

 <img id="imagePreview" src="" style="max-width: 200px; display: none;">

<div class="col-md-4 form-group">
 <label for="exampleInputFile">Picture</label>
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


<!-- Anime Name -->

<div class="form-group">
  <label class="col-md-12 control-label" >Anime Name</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" placeholder="Insert Anime Name" class="form-control" name="AnimeName" id="formGroupExampleInput">
    </div>
  @if($errors->has('AnimeName'))
  <span class="text-danger">{{ $errors->first('AnimeName') }}</span>
  @endif
  </div>
</div>


<!-- Anime Main Character -->

<div class="form-group">
  <label class="col-md-12 control-label">Anime Main Character</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
      <textarea class="form-control" input type="text" name="AnimeMainCharacter" placeholder="Insert Anime Main Character" id="formGroupExampleInput1" ></textarea>
  </div>
  @if($errors->has('AnimeMainCharacter'))
  <span class="text-danger">{{ $errors->first('AnimeMainCharacter') }}</span>
  @endif
  </div>
</div>


 <!-- Date Airing -->

 <div class="form-group">
<label class="col-md-6 control-label">Date Airing</label>
   <div class="input-group">
   <div class="custom-file">
   <input type="month" name="DateAiring"/>
 </div>
 @if($errors->has('DateAiring'))
  <span class="text-danger">{{ $errors->first('DateAiring') }}</span>
  @endif
 </div>
 </div>


<!-- Episode Series -->

<div class="form-group">
  <label class="col-md-4 control-label">Episode Series</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="EpisodeSeries" name="EpisodeSeries" class="form-control selectpicker" >
      <option>Select Episode Series</option>
      <option value="1 - 12/13 Episode">1 - 12/13 Episode </option>
      <option value="1 - 24/25 Episode">1 - 24/25 Episode </option>
      <option value="1 - 50 Episode">1 - 50 Episode </option>
      <option value="1 - 100 Episode">1 - 100 Episode </option>
      <option value="More than 100 Episode">More than 100 Episode </option>
    </select>
  </div>
  @if($errors->has('EpisodeSeries'))
  <span class="text-danger">{{ $errors->first('EpisodeSeries') }}</span>
  @endif
</div>
</div>


<!-- Movie Series -->

<div class="form-group">
  <label class="col-md-4 control-label">Movie Series</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="MovieSeries" name="MovieSeries" class="form-control selectpicker" >
      <option>Select Movie Series</option>
      <option value="No Movie">No Movie </option>
      <option value="1 Movie">1 Movie </option>
      <option value="1 - 5 Movie">1 - 5 Movie </option>
      <option value="1 - 10 Movie">1 - 10 Movie </option>
      <option value="More than 10 Movie">More than 10 Movie </option>
    </select>
  </div>
  @if($errors->has('MovieSeries'))
  <span class="text-danger">{{ $errors->first('MovieSeries') }}</span>
  @endif
</div>
</div>


<!-- Status -->

<div class="form-group">
    <label class="col-md-4 control-label">Status</label>
      <div class="col-md-4">
      <div class="radio">
        <label>
      <input type="radio" name="Status" value="1" /> Finished
        </label>
      </div>
      <div class="radio">
        <label>
      <input type="radio" name="Status" value="0" /> Ongoing
        </label>
    </div>
  @if($errors->has('Status'))
  <span class="text-danger">{{ $errors->first('Status') }}</span>
  @endif
  </div>
</div>


<!-- Rate -->

<div class="form-group">
    <label class="col-md-4 control-label">Rate</label>
      <div class="col-md-4">
      <div class="radio">
        <label>
      <input type="radio" name="Rate" value="1" /> Awsome
        </label>
      </div>
      <div class="radio">
        <label>
      <input type="radio" name="Rate" value="0" /> Not bad
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
  <button type="submit" class="btn btn-primary">Submit Here</button>
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
