<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
    <link rel="stylesheet" href="css/animate.css">
<?php $__env->stopSection(); ?>


 <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <legend>&nbsp;</legend>
          <h1><strong>Add On Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/destiny')); ?>">Home</a></li>
              <li class="breadcrumb-item active2">Destiny Add On</li> 
            </ol>
          </div>
        </div>
      </div>
    </section>


    <!-- Title -->
    <section class="content">
    <div class="col-sm-12 ">
        <div class="card card-absolute shadow b-dark border-1 wow slideInUp">
          <div class="card-header bg-dark">
           <h5 class="text-white"><b>Add On New Destiny Database</b></h5>
      </div>
      <div class="container-fluid">
      <div class="row">
      </div>


      <div class="nav nav-fill my-3">
      <a href="<?php echo e(url('/anime')); ?>" class="nav-link shadow-sm border active"><i class="fas fa-arrow-circle-right"></i> <b>Destiny</b></a>
      <a href="<?php echo e(url('/anime')); ?>" class="nav-link shadow-sm border"><i class="fas fa-arrow-circle-right"></i> <b>Kokosekatsu</b></a>
      <a href="<?php echo e(url('/anime')); ?>" class="nav-link shadow-sm border"><i class="fas fa-arrow-circle-right"></i> <b>Phantom</b></a>
      <a href="<?php echo e(url('/anime')); ?>" class="nav-link shadow-sm border"><i class="fas fa-arrow-circle-right"></i> <b>The Two</b></a>
      <a href="<?php echo e(url('/anime')); ?>" class="nav-link shadow-sm border"><i class="fas fa-arrow-circle-right"></i> <b>Tempest</b></a>
      <a href="<?php echo e(url('/anime')); ?>" class="nav-link shadow-sm border"><i class="fas fa-arrow-circle-right"></i> <b>Promise</b></a>
      <a href="<?php echo e(url('/anime')); ?>" class="nav-link shadow-sm border"><i class="fas fa-arrow-circle-right"></i> <b>Paladin</b></a>
      <a href="<?php echo e(url('/anime')); ?>" class="nav-link shadow-sm border"><i class="fas fa-arrow-circle-right"></i> <b>Fate</b></a>
      <a href="<?php echo e(url('/anime')); ?>" class="nav-link shadow-sm border"><i class="fas fa-arrow-circle-right"></i> <b>Fate Resedeum</b></a>
      <a href="<?php echo e(url('/anime')); ?>" class="nav-link shadow-sm border"><i class="fas fa-arrow-circle-right"></i> <b>Espada King</b></a>
      <a href="<?php echo e(url('/anime')); ?>" class="nav-link shadow-sm border"><i class="fas fa-arrow-circle-right"></i> <b>Time</b></a>
          
</div>


<!-- Space -->
<legend>&nbsp;</legend>


<form method="post" action="" enctypr="multipart/form-data">



<!-- Destiny Name -->

<div class="form-group">
  <label class="col-md-4 control-label">Destiny Name</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="EpisodeSeries" name="DestinyName" class="form-control selectpicker" >
      <option selected disabled>Select Destiny Name</option>
      <option value="DESTINY"> DESTINY </option>
      <option value="DESTINY KOKOSEKATSU"> DESTINY KOKOSEKATSU </option>
      <option value="DESTINY PHANTOM"> DESTINY PHANTOM </option>
      <option value="DESTINY THE TWO"> DESTINY THE TWO </option>
      <option value="DESTINY TEMPEST"> DESTINY TEMPEST </option>
      <option value="DESTINY PROMISE"> DESTINY PROMISE </option>
      <option value="DESTINY PALADIN"> DESTINY PALADIN </option>
      <option value="DESTINY FATE"> DESTINY FATE </option>
      <option value="DESTINY FATE RESEDEUM"> DESTINY FATE RESEDEUM </option>
      <option value="DESTINY ESPADA KING"> DESTINY ESPADA KING </option>
      <option value="DESTINY TIME"> DESTINY TIME </option>
    </select>
  </div>
  <?php if($errors->has('DestinyName')): ?>
  <span class="text-danger"><?php echo e($errors->first('DestinyName')); ?></span>
  <?php endif; ?>
</div>
</div>


<!-- Destiny Character -->

<div class="form-group">
  <label class="col-md-12 control-label" >Destiny Character</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" placeholder="Insert Anime Name" class="form-control" name="DestinyCharacter" id="formGroupExampleInput">
    </div>
  <?php if($errors->has('DestinyCharacter')): ?>
  <span class="text-danger"><?php echo e($errors->first('DestinyCharacter')); ?></span>
  <?php endif; ?>
  </div>
</div>


<!-- Status -->

<div class="form-group">
    <label class="col-md-4 control-label">Status</label>
      <div class="col-md-4">
      <div class="radio">
        <label>
      <input type="radio" name="Status" value="1" /> Alive
        </label>
      </div>
      <div class="radio">
        <label>
      <input type="radio" name="Status" value="0" /> Dead
        </label>
    </div>
  <?php if($errors->has('Status')): ?>
  <span class="text-danger"><?php echo e($errors->first('Status')); ?></span>
  <?php endif; ?>
  </div>
</div>


<!-- Submit -->

<div class="form-group">
  <label class="col-md-6 control-label"></label>
  <div class="col-md-6">
  <button type="submit" class="btn btn-primary">SUBMIT FORM</button>
  </div>
</div>
</form>

</div>
</div>
</div>
</div>
</section>
</div>


<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #666;
  color: white;
}
</style>


<?php /**PATH C:\xampp\htdocs\Laravel_Asterisk\Laravel_Asterisk\resources\views/Destiny/add_plus.blade.php ENDPATH**/ ?>