
<?php $__env->startSection('admin'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Animal Dashboard
<?php $__env->stopSection(); ?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Animal Main Page</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('animal.page')); ?>" class="text-muted">Animal Page</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Home</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- End Bread crumb and right sidebar toggle -->

            <!-- Container fluid  -->
            <div class="container-fluid">

                <!-- Start Page Content -->

    <!-- basic table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card card-hover">
                                <div class="p-2 bg-cyan text-center">
                                    <h1 class="font-light text-white" class="num" data-val="<?php echo e($numberAnimal); ?>"><?php echo e($numberAnimal); ?></h1>
                                    <h6 class="text-white">Animal World Data</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
            </div>

            <div class="col-12 align-self-center">
                <div class="customize-input float-right">
            <a href="<?php echo e(route('animal.add')); ?>" class="btn waves-effect waves-light btn-rounded btn-secondary">
                <i class="fas fa-paw"></i>&nbsp;  Add On Animal</a>
            </div>
        </div>
        <br>
        <br>

            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No.</th>
                            <th>Animal Image</th>
                            <th>Animal Name</th>
                            <th>Animal Which Country</th>
                            <th>Animal Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                <?php $__currentLoopData = $animal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>

                    <td class="text-center"><?php echo e($key+1); ?></td>
                    <td class="text-center"><img src="<?php echo e((!empty($item->animal_image)) ? url('Images/Animal_Page/'.$item->animal_image) : url('Images/admin.png')); ?>"
                        height="100px;" width="100;"></td>
                    <td><?php echo e($item->animal_name); ?></td>
                    <td><?php echo e($item->animal_which_country); ?></td>
                    <td><?php echo e($item->animal_description); ?></td>
                    <td class="text-center">
                        <a href="<?php echo e(route('animal.edit',$item->id)); ?>" class="btn btn-warning btn-circle" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="Edit"><i class="fas fa-edit"></i>
                        </a>
                        <a href="<?php echo e(route('animal.show',$item->id)); ?>" class="btn btn-success btn-circle" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="View"><i class="fas fa-eye"></i>
                    </a>

                    <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#animal<?php echo e($item->id); ?>" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="Delete"><i class="fas fa-trash-alt"></i></button>

    <!-- Delete Modal -->
    <form method="post" action="<?php echo e(route('animal.delete', $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>

    <div class="modal fade" id="animal<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b>Animal Delete</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <h5 class="text-left">Are You Sure Want To Delete <b><?php echo e($item->animal_name); ?></b>???</h5>
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

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                        </table>
                        <?php echo e($animal->links('pagination::bootstrap-5')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- End Container fluid  -->

            <script>
                let valueDisplays = document.querySelectorAll(".num");
                let interval = 4000;

                valueDisplays.forEach((valueDisplay) => {
                  let startValue = 0;
                  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
                  let duration = Math.floor(interval / endValue);
                  let counter = setInterval(function () {
                    startValue += 1;
                    valueDisplay.textContent = startValue;
                    if (startValue == endValue) {
                      clearInterval(counter);
                    }
                  }, duration);
                });
                </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Backend.Body.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\htdocs\Exploredia_Web\resources\views/Backend/Animal_Page/animal_page.blade.php ENDPATH**/ ?>