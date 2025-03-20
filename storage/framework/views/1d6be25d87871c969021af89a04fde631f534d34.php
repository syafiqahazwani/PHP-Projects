
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
            <h1><strong>Destiny Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/destiny')); ?>">Home</a></li>
              <li class="breadcrumb-item active2">Destiny Database</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

<!-- Destiny Box -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-dark">
        <span class="info-box-icon bg-white elevation-1"><i class="fa fa-paw"></i></span>
        <div class="info-box-content">
          <span class="info-box-text"><b>Destiny Collection</b></span>
          <span class="info-box-number">
              011
          </span>
        </div>
      </div>
    </div>
</div>
     
    <!-- Destiny Table -->
    <section class="content">
    <div class="col-sm-12 ">
      <div class="card card-absolute shadow b-dark border-1 wow slideInUp">
       <div class="card-header bg-dark">
          <h5 class="text-white">Destiny Database</h5>
</div>

      <div class="card card-primary">
      <div class="card-body">

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
 

        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
          <th width="5%">Destiny Name</th>
          <th width="5%">Character</th>
          <th width="6%">User</th>
          <th width="6%">Appearance</th>
          <th width="6%">Memory</th>
          <th width="5%">Romance</th>
          <th width="5%">Death</th>
          <th width="6%">PDF Pic</th>
          <th width="6%">Action</th>
          </tr>
          </thead>
            <tbody> 

            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destiny): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>
                    <td><?php echo e($destiny->DestinyName); ?></td>
                    <td><?php echo e($destiny->DestinyCharacter); ?></td>
                    <td><?php echo e($destiny->User); ?></td>
                    <td><?php echo e($destiny->Appearance); ?></td>
                    <td><?php echo e($destiny->Memory); ?></td>
                    <td><?php echo e($destiny->Romance); ?></td>
                    <td><?php echo e($destiny->Death); ?></td>
                    <td><?php echo e($destiny->PDFPic); ?></td>
                   <td>

<!-- Download Button trigger modal -->
<a class="btn btn-primary btn-sm" href="/Destiny Folder/<?php echo e($destiny->PDFPic); ?>"><i class="fas fa-download"></i>
</a>


<!-- View Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-eye" aria-hidden="true"></i>
</button>

<!-- View Modal -->
<form method="post" action="<?php echo e(route('destiny.show', ['destiny' => $destiny])); ?>" accept-charset="UTF-8" style="display:inline">


<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>View Destiny</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <p><strong>Destiny Name:</strong> <?php echo e($destiny->DestinyName); ?></p>
    <p><strong>Character:</strong> <?php echo e($destiny->DestinyCharacter); ?></p>
    <p><strong>User:</strong> <?php echo e($destiny->User); ?></p>
    <p><strong>Appearance:</strong> <?php echo e($destiny->Appearance); ?></p>
    <p><strong>Memory:</strong> <?php echo e($destiny->Memory); ?></p>
    <p><strong>Romance:</strong> <?php echo e($destiny->Romance); ?></p>
    <p><strong>Death:</strong> <?php echo e($destiny->Death); ?></p>
    <p><strong>PDF Pic:</strong> <?php echo e($destiny->PDFPic); ?></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</form>


<!-- Edit Button trigger modal -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal3"><i class="fas fa-edit" aria-hidden="true"></i>
</button>

<!-- Edit Modal -->
<form method="post" action="<?php echo e(route('destiny.update', ['destiny' => $destiny])); ?>" accept-charset="UTF-8" style="display:inline">
<?php echo csrf_field(); ?>
<?php echo method_field('put'); ?> 

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Destiny</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<!-- Destiny Name -->

<div class="form-group">
  <label class="col-md-4 control-label">Destiny Name</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="DestinyName" name="DestinyName" class="form-control selectpicker" >
      <option selected disabled>Select Destiny Name</option>
      <option value="DESTINY" <?php echo e($destiny->DestinyName === 'DESTINY' ? 'selected' : ''); ?>> DESTINY </option> 
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
  <input type="text" placeholder="Insert Destiny Character" class="form-control" name="DestinyCharacter" id="formGroupExampleInput" value="<?php echo e($destiny->DestinyCharacter); ?>">
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
      <textarea class="form-control" input type="text" name="User" placeholder="Insert User" id="formGroupExampleInput1" value="<?php echo e($destiny->User); ?>"><?php echo e($destiny->User); ?></textarea>
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
      <textarea class="form-control" input type="text" name="Appearance" placeholder="Insert Appearance" id="formGroupExampleInput1" value="<?php echo e($destiny->Appearance); ?>"><?php echo e($destiny->Appearance); ?></textarea>
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
      <textarea class="form-control" input type="text" name="Memory" placeholder="Insert Memory" id="formGroupExampleInput1" value="<?php echo e($destiny->Memory); ?>"><?php echo e($destiny->Memory); ?></textarea>
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
  <input type="text" placeholder="Insert Romance" class="form-control" name="Romance" id="formGroupExampleInput" value="<?php echo e($destiny->Romance); ?>">
    </div>
    <?php if($errors->has('Romance')): ?>
  <span class="text-danger"><?php echo e($errors->first('Romance')); ?></span>
  <?php endif; ?>
  </div>
</div>


<!-- Death -->

<div class="form-group">
  <label class="col-md-12 control-label" >Death</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" placeholder="Insert Death" class="form-control" name="Death" id="formGroupExampleInput" value="<?php echo e($destiny->Death); ?>" >
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
  <input class="form-control" type="file" name="PDFPic" id="formFile" value="<?php echo e($destiny->PDFPic); ?>">
</div>
<?php if($errors->has('PDFPic')): ?>
  <span class="text-danger"><?php echo e($errors->first('PDFPic')); ?></span>
<?php endif; ?>
</div>
</div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Save Data</button>
      </div>
    </div>
  </div>
</div>

</form>


<!-- Delete Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal4"><i class="fas fa-trash" aria-hidden="true"></i>
</button>

<!-- Delete Modal -->
<form method="post" action="<?php echo e(route('destiny.destroy', $destiny->id)); ?>" accept-charset="UTF-8" style="display:inline">
<?php echo csrf_field(); ?>
<?php echo method_field('delete'); ?>

<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Delete Destiny</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure???
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

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>
                    <td colspan="9">No Result Found</td>
                </tr>

                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>
</section>
   </div>
   </div>
   </div>
  

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<style>
/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #666;
  color: white;
}
</style><?php /**PATH C:\xampp\htdocs\Laravel_Asterisk\Laravel_Asterisk\resources\views/Destiny/destiny.blade.php ENDPATH**/ ?>