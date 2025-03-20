<?php $__env->startSection('admin'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Food Add On
<?php $__env->stopSection(); ?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Food Form Add On</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Food Add On</li>
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
                        <a href="<?php echo e(route('food.add')); ?>" class="btn btn-primary btn-circle"><i class="fas fa-utensils"></i>
                        </a>

                        <br>
                        <br>
                <form>
                    <h6 class="card-title">Food Image :</h6>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile03">
                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                    </div>

                    <br>
                    <h6 class="card-title"></h6>
                    <div class="custom-file">
                        <img id="showImage" src="<?php echo e((!empty($adminData->photo)) ? url('Images/Admin_Profile/'.$adminData->photo) : url('Images/admin.png')); ?>" alt="animal_image"  class="rounded-circle" width="100"
                        height="100">
                    </div>
                    <br>
                    <br>
                    <br>

                    <br>
                    <div class="form-group">
                        <h6 class="card-title">Food Name :</h6>
                        <input type="text" class="form-control" id="nametext" aria-describedby="name"
                            placeholder="Name">
                    </div>

                    <br>
                    <div class="form-group">
                        <h6 class="card-title">Food Which Country :</h6>
                        <input type="text" class="form-control" id="nametext" aria-describedby="name"
                            placeholder="Name">
                    </div>

                    <br>
                        <h6 class="card-title">Food Description :</h6>
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <br>

                            <button type="button"
                            class="btn waves-effect waves-light btn-rounded btn-primary"><i class="fas fa-paw"></i>&nbsp; Submit On Data</button>


                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Backend.Body.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\htdocs\Exploredia_Web\resources\views/Backend/Food_Page/add_on_food.blade.php ENDPATH**/ ?>