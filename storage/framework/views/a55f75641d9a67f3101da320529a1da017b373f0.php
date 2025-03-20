<?php $__env->startSection('admin'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Work Add On
<?php $__env->stopSection(); ?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Work Form Add On</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('work.page')); ?>" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Work Add On</li>
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
                    <form method="POST" action="<?php echo e(route('work.store')); ?>" class="forms-sample">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <h6 class="card-title">Type of Programming :</h6>
                            <input type="text" class="form-control" name="programming_name"
                                placeholder="Programming Name">
                        </div>

                        <br>
                            <h6 class="card-title">What Use For Programming :</h6>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="use_programming" placeholder="Use Programming"></textarea>
                            </div>

                        <br>
                            <h6 class="card-title">Easy Or Hard :</h6>
                            <div class="form-group mb-4">
                                <select class="form-control" id="inlineFormCustomSelect" name="easy_hard">
                                    <option>Choose...</option>
                                    <option value="1">Easy</option>
                                    <option value="2">Hard</option>
                                </select>
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

<?php echo $__env->make('Backend.Body.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Exploredia_Web\resources\views/Backend/Work_Page/add_on_work.blade.php ENDPATH**/ ?>