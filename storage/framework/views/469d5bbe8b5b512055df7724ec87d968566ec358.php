<?php $__env->startSection('admin'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Animal Show
<?php $__env->stopSection(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Animal View Page</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('animal.page')); ?>" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Animal Show</li>
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

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-paw"></i>
                            </button>
                            <br><br>

                            <h5 class="card-title">Animal View Page</h5>
                            <div class="media">
                                <img class="align-self-center w-25 mr-3" src="<?php echo e((!empty($animalShow->animal_image)) ? url('Images/Animal_Page/'.$animalShow->animal_image) : url('Images/admin.png')); ?>"
                                height="250px;" width="200;" alt="animal image">
                                <div class="media-body">
                                    <br><br><br>
                                    <h3 class="card-title"><?php echo e($animalShow->animal_name); ?></h3>
                                    <br>
                                    <p><i class="fas fa-dove"></i> &nbsp;&nbsp;This Food come from Country called <b><?php echo e($animalShow->animal_which_country); ?><b></p>
                                    <p><i class="fas fa-chess-knight"></i> &nbsp;&nbsp;<?php echo e($animalShow->animal_description); ?></p>
                                </div>
                            </div>

                            <br>
                            <a href="<?php echo e(route('animal.page')); ?>" type="submit"
                                class="btn waves-effect waves-light btn-rounded btn-primary"><i class="fas fa-paw"></i>&nbsp; Return Back</a>
                        </div>

                    </div>
                </div>


            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Backend.Body.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Exploredia_Web\resources\views/Backend/Animal_Page/show_page.blade.php ENDPATH**/ ?>