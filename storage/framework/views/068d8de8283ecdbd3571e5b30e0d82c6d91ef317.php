<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


 <div class="content-wrapper">
 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <legend>&nbsp;</legend>
          <h1><strong>Edit On Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/english')); ?>">Home</a></li>
              <li class="breadcrumb-item active">English Edit</li> 
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
           <h5 class="text-white"><b>Update English Database</b></h5>
      </div>
      <div class="container-fluid">
      <div class="row">
      </div>


<!-- Space -->
<legend>&nbsp;</legend>


<form method="post" action="<?php echo e(route('english.update' , ['english' => $english])); ?>" enctypr="multipart/form-data"> 
<?php echo csrf_field(); ?>
<?php echo method_field('put'); ?> 

 <!-- Picture -->

 <img id="imagePreview" src="/images/English Folder/<?php echo e($english->Image); ?>" style="max-width: 200px;">

<div class="col-md-4 form-group">
 <label for="exampleInputFile">Image</label>
 <div class="input-group">
  <div class="custom-file">
  <input type="file" name="Image" class="form-control" id="exampleInputFile" onchange="previewImage(event)">
</div>
<?php if($errors->has('Image')): ?>
  <span class="text-danger"><?php echo e($errors->first('Image')); ?></span>
<?php endif; ?>
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
  <input type="text" placeholder="Insert Title" class="form-control" name="TitleName" value="<?php echo e($english->TitleName); ?>" id="id">
    </div>
<?php if($errors->has('TitleName')): ?>
  <span class="text-danger"><?php echo e($errors->first('TitleName')); ?></span>
<?php endif; ?>
  </div>
</div>


<!-- Main Character/Cast -->

<div class="form-group">
  <label class="col-md-12 control-label">Main Character/Cast</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
      <textarea class="form-control" input type="text" name="MainCharacterCast" placeholder="Insert Main Character/Cast" value="<?php echo e($english->MainCharacterCast); ?>" id="id" ><?php echo e($english->MainCharacterCast); ?></textarea>
  </div>
<?php if($errors->has('MainCharacterCast')): ?>
  <span class="text-danger"><?php echo e($errors->first('MainCharacterCast')); ?></span>
<?php endif; ?>
  </div>
</div>


<!-- Episode/Movie -->

<div class="form-group">
    <label class="col-md-4 control-label">Episode/Movie</label>
      <div class="col-md-4">
      <div class="radio">
        <label>
      <input type="radio" name="EpisodeMovie" value="Episode" <?php echo e($english->EpisodeMovie === 'Episode' ? 'checked' : ''); ?> /> Episode
        </label>
      </div>
      <div class="radio">
        <label>
      <input type="radio" name="EpisodeMovie" value="Movie" <?php echo e($english->EpisodeMovie === 'Movie' ? 'checked' : ''); ?> /> Movie
        </label>
    </div>
    <div class="radio">
        <label>
      <input type="radio" name="EpisodeMovie" value="Both Episode/Movie" <?php echo e($english->EpisodeMovie === 'Both Episode/Movie' ? 'checked' : ''); ?> /> Both Episode/Movie
        </label>
      </div>
<?php if($errors->has('EpisodeMovie')): ?>
  <span class="text-danger"><?php echo e($errors->first('EpisodeMovie')); ?></span>
<?php endif; ?>
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
      <option value="1 Season Episode" <?php echo e($english->ListOfEpisodeMovie === '1 Season Episode' ? 'selected' : ''); ?> >1 Season Episode </option>
      <option value="2 Season Episode" <?php echo e($english->ListOfEpisodeMovie === '2 Season Episode' ? 'selected' : ''); ?> >2 Season Episode </option>
      <option value="More than 3 Season Episode" <?php echo e($english->ListOfEpisodeMovie === 'More than 3 Season Episode' ? 'selected' : ''); ?> >More than 3 Season Episode </option>
      <option value="1 Movie" <?php echo e($english->ListOfEpisodeMovie === '1 Movie' ? 'selected' : ''); ?> >1 Movie </option>
      <option value="More than 2 Movie" <?php echo e($english->ListOfEpisodeMovie === 'More than 2 Movie' ? 'selected' : ''); ?> >More than 2 Movie </option>
    </select>
  </div>
<?php if($errors->has('ListOfEpisodeMovie')): ?>
  <span class="text-danger"><?php echo e($errors->first('ListOfEpisodeMovie')); ?></span>
<?php endif; ?>
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
      <option value="Animation & Cartoon"<?php echo e($english->GenreCategory === 'Animation & Cartoon' ? 'selected' : ''); ?> >Animation & Cartoon</option>
      <option value="Action & Adventure" <?php echo e($english->GenreCategory === 'Action & Adventure' ? 'selected' : ''); ?> >Action & Adventure</option>
      <option value="Crime & Horror" <?php echo e($english->GenreCategory === 'Crime & Horror' ? 'selected' : ''); ?> >Crime & Horror</option>
      <option value="Romantic & Love"<?php echo e($english->GenreCategory === 'Romantic & Love' ? 'selected' : ''); ?>  >Romantic & Love</option>
      <option value="Fantasy & Supernatural" <?php echo e($english->GenreCategory === 'Fantasy & Supernatural' ? 'selected' : ''); ?> >Fantasy & Supernatural</option>
      <option value="Drama & Life" <?php echo e($english->GenreCategory === 'Drama & Life' ? 'selected' : ''); ?> >Drama & Life</option>
    </select>
  </div>
<?php if($errors->has('GenreCategory')): ?>
  <span class="text-danger"><?php echo e($errors->first('GenreCategory')); ?></span>
<?php endif; ?> 
</div>
</div>


<!-- Rate -->

<div class="form-group">
    <label class="col-md-4 control-label">Rate</label>
      <div class="col-md-4">
      <div class="radio">
        <label>
      <input type="radio" name="Rate" value="1" <?php echo e($english->Rate === '1' ? 'checked' : ''); ?> /> Awsome
        </label>
      </div>
      <div class="radio">
        <label>
      <input type="radio" name="Rate" value="0" <?php echo e($english->Rate === '0' ? 'checked' : ''); ?> /> Not bad
        </label>
    </div>
  <?php if($errors->has('Rate')): ?>
  <span class="text-danger"><?php echo e($errors->first('Rate')); ?></span>
  <?php endif; ?>
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


 <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Asterisk\Laravel_Asterisk\resources\views/english/edit.blade.php ENDPATH**/ ?>