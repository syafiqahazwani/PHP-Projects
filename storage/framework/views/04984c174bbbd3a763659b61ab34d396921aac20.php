<?php $__env->startSection('admin'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Work Edit
<?php $__env->stopSection(); ?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Work Form Edit</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('work.page')); ?>" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Work Edit</li>
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
            <div class="row">

                <div class="col-sm-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-laptop"></i></button>

                            <br>
                            <br>
                    <form method="POST" action="<?php echo e(route('work.update')); ?>" class="forms-sample" >
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($work->id); ?>">

                        <div class="form-group">
                            <h6 class="card-title">Type of Programming :</h6>
                            <input type="text" class="form-control" name="programming_name" value="<?php echo e($work->programming_name); ?>"
                                placeholder="Programming Name">
                                <?php if($errors->has('programming_name')): ?>
                              <span class="text-danger"><?php echo e($errors->first('programming_name')); ?></span>
                            <?php endif; ?>
                        </div>

                        <br>
                            <h6 class="card-title">What Use For Programming :</h6>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="use_programming" placeholder="Use Programming"
                                value="<?php echo e($work->use_programming); ?>"><?php echo e($work->use_programming); ?></textarea>
                                <?php if($errors->has('use_programming')): ?>
                              <span class="text-danger"><?php echo e($errors->first('use_programming')); ?></span>
                            <?php endif; ?>
                            </div>

                        <br>
                            <h6 class="card-title">Easy Or Hard :</h6>
                            <div class="form-group mb-4">
                                <select class="form-control" id="inlineFormCustomSelect" name="easy_hard">
                                    <option>Choose...</option>
                                    <option value="1" <?php echo e($work->easy_hard === '1' ? 'selected' : ''); ?>>Easy</option>
                                    <option value="2" <?php echo e($work->easy_hard === '2' ? 'selected' : ''); ?>>Hard</option>
                                </select>
                                <?php if($errors->has('easy_hard')): ?>
                              <span class="text-danger"><?php echo e($errors->first('easy_hard')); ?></span>
                            <?php endif; ?>
                            </div>

                            <br>
                                <button type="submit"
                                class="btn waves-effect waves-light btn-rounded btn-primary"><i class="fas fa-laptop"></i>&nbsp; Submit On Data</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Backend.Body.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\htdocs\Exploredia_Web\resources\views/Backend/Work_Page/edit_page.blade.php ENDPATH**/ ?>