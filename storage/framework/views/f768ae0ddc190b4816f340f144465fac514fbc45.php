
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



        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
          <th width="8%">Anime Name</th>
          <th width="10%">Anime Character</th>
          <th width="10%">Appearances</th>
          <th width="10%">Ability</th>
          <th width="10%">Backstory</th>
          <th width="10%">Episode List</th>
          <th width="8%">PDF Picture</th>
          <th width="8%">Action</th>
          </tr>
          </thead>
            <tbody> 

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   <td>
                          <a class="btn btn-warning btn-sm" href="">
                              <i class="fas fa-solid fa-file-pdf">
                              </i>
                              
                          </a>
                          <a class="btn btn-info btn-sm" href="">
                              <i class="fas fa-edit">
                              </i>
                              
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              
                          </a>
                      </td> 
                       

                    </td>
                </tr>

                <tr>
                    <td colspan="8">No Result</td>
                </tr>

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
</style><?php /**PATH C:\xampp\htdocs\Laravel_Asterisk\Laravel_Asterisk\resources\views/Destiny/destiny_database.blade.php ENDPATH**/ ?>