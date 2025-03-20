<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="content-wrapper"> 
   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <legend>&nbsp;</legend>
          <h1><strong>Anime Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/anime')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Anime View</li>
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
           <h5 class="text-white">Anime Database View</h5>
      </div>
      <div class="container-fluid">
      <div class="row">  
      </div>

              
    <div class="card-body">
    <table border='0' width='100%'>
<tr> 
    <td class="text-center" width="300"><img src="/images/Anime Folder/<?php echo e($anime->Image); ?>" height="290px" width="200px">
    <td style="padding:20px;">
    <p><strong>No.</strong> <?php echo e($anime->id); ?></p>
    <p><strong>Anime Name:</strong> <?php echo e($anime->AnimeName); ?></p>
    <p><strong>Anime Main Character:</strong> <?php echo e($anime->AnimeMainCharacter); ?></p>
    <p><strong>Date Airing:</strong> <?php echo e($anime->DateAiring); ?></p>
    <p><strong>Episode Series:</strong> <?php echo e($anime->EpisodeSeries); ?></p>
    <p><strong>Movie Series:</strong> <?php echo e($anime->MovieSeries); ?></p>
    <p><strong>Status:</strong> <?php if($anime->Status==1): ?>
                                <a href="" class="badge rounded-pill bg-info">Finished</a>
                                <?php else: ?>
                                <a href="" class="badge rounded-pill bg-warning">Ongoing</a>
                                <?php endif; ?> </p>
    <p><strong>Rate:</strong> <?php if($anime->Rate==1): ?>
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
                <a class="btn btn-primary" href="<?php echo e(url('/anime')); ?>">Return Back</a>
            </div>
        </div>
    </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Asterisk\Laravel_Asterisk\resources\views/Anime/view.blade.php ENDPATH**/ ?>