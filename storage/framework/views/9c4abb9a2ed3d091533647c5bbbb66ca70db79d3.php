<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="content-wrapper"> 
   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <legend>&nbsp;</legend>
          <h1><strong>Japanese Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/japanese')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Japanese View</li>
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
           <h5 class="text-white"><b>Japanese Database View</b></h5>
      </div>
      <div class="container-fluid">
      <div class="row">  
      </div>

              
    <div class="card-body">
    <table border='0' width='100%'>
<tr>
    <td class="text-center" width="300"><img src="/images/Japanese Folder/<?php echo e($japanese->Image); ?>" height="290px" width="200px">
    <td style="padding:20px;">
    <p><strong>No.</strong> <?php echo e($japanese->id); ?> </p>
    <p><strong>Title Name:</strong> <?php echo e($japanese->TitleName); ?> </p>
    <p><strong>Main Character/Cast:</strong> <?php echo e($japanese->MainCharacterCast); ?> </p>
    <p><strong>Episode/Movie:</strong> <?php echo e($japanese->EpisodeMovie); ?> </p>
    <p><strong>List of Episode/Movie:</strong> <?php echo e($japanese->ListOfEpisodeMovie); ?> </p>
    <p><strong>Genre Category:</strong> <?php echo e($japanese->GenreCategory); ?> </p>
    <p><strong>Rate:</strong> <?php if($japanese->Rate==1): ?>
                              <a href="" class="badge rounded-pill bg-success">Awsome</a>
                              <?php else: ?>
                              <a href="" class="badge rounded-pill bg-danger">Not bad</a>
                              <?php endif; ?></p>
    </td>
</tr>
</table>
  </div>
    </div>
      </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(url('/japanese')); ?>">Return Back</a>
            </div>
        </div>
    </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\htdocs\Laravel_Asterisk\resources\views/Japanese/view.blade.php ENDPATH**/ ?>