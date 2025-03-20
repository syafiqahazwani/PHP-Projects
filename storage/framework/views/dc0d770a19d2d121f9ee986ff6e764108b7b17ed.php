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
            <h1><strong>Edit Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/mydatabase')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Mydatabase Edit</li>
            </ol>
          </div>
        </div>
      </div>
    </section>


    <!-- Title -->
    <section class="content">
    <div class="col-sm-12 ">
        <div class="card card-absolute shadow b-dark border-1 wow slideInUp">
          <div class="card-header bg-gray">
           <h5 class="text-white"><b>Edit New Information Database</b></h5>
      </div>
      <div class="container-fluid">
      <div class="row">  
      </div>
 
      
<!-- Space -->
<legend>&nbsp;</legend>


<form method="post" action="<?php echo e(route('mydatabase.update' , ['mydatabase' => $mydatabase])); ?>" enctypr="multipart/form-data"> 
<?php echo csrf_field(); ?>
<?php echo method_field('put'); ?> 


 <!-- Calendar -->

 <div class="form-group">
<label class="col-md-6 control-label">Calendar:</label>
   <div class="input-group">
   <div class="custom-file">
   <input type="date" name="Calendar" value="<?php echo e($mydatabase->Calendar); ?>"/>
 </div>
 <?php if($errors->has('Calendar')): ?>
  <span class="text-danger"><?php echo e($errors->first('Calendar')); ?></span>
  <?php endif; ?>
 </div>
 </div>


<!-- Folder Name -->

<div class="form-group">
  <label class="col-md-12 control-label" >Folder Name:</label> 
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input type="text" name="FolderName" value="<?php echo e($mydatabase->FolderName); ?>" placeholder="Insert Fail Name" class="form-control">
    </div>
    <?php if($errors->has('FolderName')): ?>
  <span class="text-danger"><?php echo e($errors->first('FolderName')); ?></span>
  <?php endif; ?>
  </div>
</div>


<!-- Folder Information -->
  
<div class="form-group">
  <label class="col-md-12 control-label">Folder Information:</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
      <textarea class="form-control" name="FolderInformation" value="<?php echo e($mydatabase->FolderInformation); ?>" placeholder="Insert Folder Information"><?php echo e($mydatabase->FolderInformation); ?></textarea>
  </div>
  <?php if($errors->has('FolderInformation')): ?>
  <span class="text-danger"><?php echo e($errors->first('FolderInformation')); ?></span>
  <?php endif; ?>
  </div>
</div>


<!-- Insert PDF -->

 <div class="form-group">
 <label class="col-md-6 control-label">Insert PDF:</label>
 <div class="col-md-6 inputGroupContainer">
  <input class="form-control" type="file" name="InsertPDF" value="/pdf/<?php echo e($mydatabase->InsertPDF); ?>" id="formFile" src="/pdf/<?php echo e($mydatabase->InsertPDF); ?>">
  <?php if($errors->has('InsertPDF')): ?>
  <span class="text-danger"><?php echo e($errors->first('InsertPDF')); ?></span>
  <?php endif; ?>
</div>
</div>


<!-- Submit -->

<div class="form-group">
  <label class="col-md-6 control-label"></label>
  <div class="col-md-6">
    <button type="submit" class="btn btn-primary" >Done Edit<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</form>
</div>
    </div>
</div>
        </div>
      </div>
    </section>
 </div>
</div>
 

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php /**PATH C:\xampp\htdocs\Laravel_Asterisk\resources\views/mydatabase/edit.blade.php ENDPATH**/ ?>