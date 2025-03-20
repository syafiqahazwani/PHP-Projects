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
              <li class="breadcrumb-item active2">Destiny Add</li> 
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
      <a href="<?php echo e(url('/destiny')); ?>" class="nav-link shadow-sm border active"><i class="fas fa-arrow-circle-right"></i> <b>Destiny</b></a>
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


<form method="post" action="<?php echo e(route('destiny.store')); ?>" enctypr="multipart/form-data">
<?php echo csrf_field(); ?>


<!-- Destiny Name -->

<div class="form-group">
  <label class="col-md-4 control-label">Destiny Name</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="DestinyName" name="DestinyName" class="form-control selectpicker" >
      <option selected disabled>Select Destiny Name</option>
      <option value="DESTINY"> DESTINY </option>
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
  <input type="text" placeholder="Insert Destiny Character" class="form-control" name="DestinyCharacter" id="formGroupExampleInput">
    </div>
  <?php if($errors->has('DestinyCharacter')): ?>
  <span class="text-danger"><?php echo e($errors->first('DestinyCharacter')); ?></span>
  <?php endif; ?>
  </div>
</div>


<!-- User -->

<div class="form-group">
  <label class="col-md-12 control-label">User</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
      <textarea class="form-control" input type="text" name="User" placeholder="Insert User" id="formGroupExampleInput1" ></textarea>
  </div>
  <?php if($errors->has('User')): ?>
  <span class="text-danger"><?php echo e($errors->first('User')); ?></span>
  <?php endif; ?>
  </div>
</div>


<!-- Appearance -->

<div class="form-group">
  <label class="col-md-12 control-label">Appearance</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
      <textarea class="form-control" input type="text" name="Appearance" placeholder="Insert Appearance" id="formGroupExampleInput1" ></textarea>
  </div>
  <?php if($errors->has('Appearance')): ?>
  <span class="text-danger"><?php echo e($errors->first('Appearance')); ?></span>
  <?php endif; ?>
  </div>
</div>


<!-- Memory -->

<div class="form-group">
  <label class="col-md-12 control-label">Memory</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
      <textarea class="form-control" input type="text" name="Memory" placeholder="Insert Memory" id="formGroupExampleInput1" ></textarea>
  </div>
  <?php if($errors->has('Memory')): ?>
  <span class="text-danger"><?php echo e($errors->first('Memory')); ?></span>
  <?php endif; ?>
  </div>
</div>


<!-- Romance -->

<div class="form-group">
  <label class="col-md-12 control-label" >Romance</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" placeholder="Insert Romance" class="form-control" name="Romance" id="formGroupExampleInput">
    </div>
  <?php if($errors->has('DestinyCharacter')): ?>
  <span class="text-danger"><?php echo e($errors->first('DestinyCharacter')); ?></span>
  <?php endif; ?>
  </div>
</div>


<!-- Death -->

<div class="form-group">
  <label class="col-md-12 control-label" >Death</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" placeholder="Insert Death" class="form-control" name="Death" id="formGroupExampleInput">
    </div>
  <?php if($errors->has('Death')): ?>
  <span class="text-danger"><?php echo e($errors->first('Death')); ?></span>
  <?php endif; ?>
  </div>
</div>


<!-- PDF Pic -->

<div class="form-group">
 <label class="col-md-6 control-label">PDF Pic:</label>
 <div class="col-md-6 inputGroupContainer">
  <input class="form-control" type="file" name="PDFPic" id="formFile">
  <?php if($errors->has('PDFPic')): ?>
  <span class="text-danger"><?php echo e($errors->first('PDFPic')); ?></span>
  <?php endif; ?>
</div>
</div>


<!-- Submit -->

<div class="form-group">
  <label class="col-md-6 control-label"></label>
  <div class="col-md-6">
  <button type="submit" class="btn btn-primary"><b>SUBMIT</b></button>
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


<?php /**PATH C:\xampp\htdocs\Laravel_Asterisk\Laravel_Asterisk\resources\views/Destiny/add_destiny.blade.php ENDPATH**/ ?>