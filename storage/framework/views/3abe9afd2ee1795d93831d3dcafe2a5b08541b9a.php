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
            <h1><strong>Anime Database</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/anime')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Anime Watched</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

  <!-- Anime Box -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-life-ring"></i></span>
        <div class="info-box-content">
          <span class="info-box-text"><b>Anime Episode & Movies</b></span>
          <span class="info-box-number">
          <?php echo e($numberAnime); ?>

          </span>
        </div>
      </div>
    </div>
</div>
</div>

      <!-- Anime Table -->
    <section class="content">
    <div class="col-sm-12 ">
      <div class="card card-absolute shadow b-dark border-1 wow slideInUp">
       <div class="card-header bg-info">
          <h5 class="text-white"><b>Anime Database</b></h5>
        </div>

      <div class="card card-primary">
      <div class="card-body">

      <form method="GET">
      <div class="col-md-3">
        <div class="form-group">
          <form action="/search">
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
          <th class="text-center" width="1%">No.</th>
          <th class="text-center" width="5%">Image</th>
          <th width="8%">Anime Name</th>
          <th width="10%">Anime Main Character</th>
          <th width="5%">Date Airing</th>
          <th class="text-center" width="5%">Episode Series</th>
          <th class="text-center" width="5%">Movie Series</th>
          <th class="text-center" width="3%">Status</th>
          <th class="text-center" width="3%">Rate</th>
          <th class="text-center" width="6%">Action</th>
          </tr>
          </thead>
            <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>
                    <td class="text-center"> <?php echo e($anime->id); ?> </td>
                    <td class="text-center"><img src="/images/Anime Folder/<?php echo e($anime->Image); ?>" height="150px" width="100px"></td>
                    <td> <?php echo e($anime->AnimeName); ?> </td>
                    <td> <?php echo e($anime->AnimeMainCharacter); ?> </td>
                    <td> <?php echo e($anime->DateAiring); ?> </td>
                    <td> <?php echo e($anime->EpisodeSeries); ?> </td>
                    <td> <?php echo e($anime->MovieSeries); ?> </td>
                    <td class="text-center"> <?php if($anime->Status==1): ?>
                          <a href="" class="badge rounded-pill bg-info">Finished</a>
                         <?php else: ?>
                        <a href="" class="badge rounded-pill bg-warning">Ongoing</a>
                        <?php endif; ?> </td>
                    <td class="text-center"> <?php if($anime->Rate==1): ?>
                          <a href="" class="badge rounded-pill bg-success">Awsome</a>
                         <?php else: ?>
                        <a href="" class="badge rounded-pill bg-danger">Not bad</a>
                         <?php endif; ?> </td>
                   <td class="text-center">

                          <a class="btn btn-warning btn-sm" data-toggle2="tooltip" data-placement="bottom" title="View Anime" href="<?php echo e(route('anime.show', ['anime' => $anime])); ?>">
                              <i class="fas fa-eye">
                              </i>
                          </a>

                          <a class="btn btn-info btn-sm" data-toggle2="tooltip" data-placement="bottom" title="Edit Anime" href="<?php echo e(route('anime.edit', ['anime' => $anime])); ?>">
                              <i class="fas fa-edit">
                              </i>
                          </a>

<!-- Delete Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="bottom" data-toggle2="tooltip" title="Delete Anime" data-target="#exampleModalAnime<?php echo e($anime->id); ?>"><i class="fas fa-trash" aria-hidden="true"></i>
</button>

<!-- Delete Modal -->
<form method="post" action="<?php echo e(route('anime.destroy', $anime->id)); ?>" accept-charset="UTF-8" style="display:inline">
<?php echo csrf_field(); ?>
<?php echo method_field('delete'); ?>

<div class="modal fade" id="exampleModalAnime<?php echo e($anime->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Delete Database</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-left">Confirm Delete <b><?php echo e($anime->AnimeName); ?></b>?</div>
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
                    <td colspan="10">Nothing Found</td>
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

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Laravel\htdocs\Laravel_Asterisk\resources\views/Anime/anime_watched.blade.php ENDPATH**/ ?>