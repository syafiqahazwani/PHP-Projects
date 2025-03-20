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
            <h1><strong>My Database (Syafiqah)</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/mydatabase')); ?>">Home</a></li>
              <li class="breadcrumb-item active">My Database</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

     <!-- My Database Box -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-gray elevation-1"><i class="fas fa-american-sign-language-interpreting"></i></span>
        <div class="info-box-content">
          <span class="info-box-text"><b>Folder & Information Data</b></span>
          <span class="info-box-number">
          <?php echo e($idnumber); ?>

          </span>
        </div>
      </div>
    </div>
</div>

    <!-- My Database Tabel -->
    <section class="content">
    <div class="col-sm-12 ">
      <div class="card card-absolute shadow b-dark border-1 wow slideInUp">
       <div class="card-header bg-gray">
          <h5 class="text-white"><b>My Database</b></h5>
        </div>

      <div class="card card-primary">
      <div class="card-body">

      <form method="GET">
      <div class="col-md-3">
        <div class="form-group"> 
          <form method="get" action="/search">
            <div class="input-group">
              <input type="text" class="form-control" value="" name="search" placeholder="Search..." autofocus value="<?php echo e($search); ?>">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
     </div>
</form>
        
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
          <th width="1%">No.</th>
          <th width="5%">Calendar</th>
          <th width="8%">Folder Name</th>
          <th width="10%">Folder Information</th>
          <th width="10%">PDF Name</th>
          <th width="10%">Action</th>
          </tr>
          </thead>
            <tbody>
            
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mydatabase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>
                    <td><?php echo e($mydatabase->id); ?></td>
                    <td><?php echo e($mydatabase->Calendar); ?></td>
                    <td><?php echo e($mydatabase->FolderName); ?></td>
                    <td><?php echo e($mydatabase->FolderInformation); ?></td>
                    <td><?php echo e($mydatabase->InsertPDF); ?></td>
                   <td>

                          <a class="btn btn-warning btn-sm" href="/pdf/<?php echo e($mydatabase->InsertPDF); ?>"><i class="fas fa-download">
                              View PDF</i>                     
                          </a>

                          <a class="btn btn-info btn-sm" href="<?php echo e(route('mydatabase.edit', ['mydatabase' => $mydatabase])); ?>"><i class="fas fa-edit">
                              Edit Folder</i>  
                          </a>

<!-- Delete Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal0<?php echo e($mydatabase->id); ?>"><i class="fas fa-trash" aria-hidden="true"></i>
<b>Delete</b></button>

<!-- Delete Modal -->
<form method="post" action="<?php echo e(route('mydatabase.destroy', $mydatabase->id)); ?>" accept-charset="UTF-8" style="display:inline">
<?php echo csrf_field(); ?>
<?php echo method_field('delete'); ?>

<div class="modal fade" id="exampleModal0<?php echo e($mydatabase->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Delete Database</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-left">Confirm Delete <b><?php echo e($mydatabase->FolderName); ?></b>?</div>
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

                    <td colspan="4">Nothing Found</td>

                </tr>

                <?php endif; ?>

            </tbody>
        </table>

        <div class="right">
        <?php echo e($data->links()); ?>

        </div>
        
    </div>
</div>
</section>
   </div>
   </div>
   </div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel_Asterisk\resources\views/Mydatabase/my_database.blade.php ENDPATH**/ ?>