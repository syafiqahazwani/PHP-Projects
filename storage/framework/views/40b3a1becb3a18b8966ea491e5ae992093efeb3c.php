<?php $__env->startSection('admin'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Food Add On
<?php $__env->stopSection(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
                            <li class="breadcrumb-item"><a href="<?php echo e(route('food.page')); ?>" class="text-muted">Home</a></li>
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
                        <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-utensils"></i>
                        </button>

                        <br>
                        <br>
            <form method="POST" action="<?php echo e(route('food.store')); ?>" class="forms-sample" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                    <h6 class="card-title">Food Image :</h6>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="food_image">
                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                    </div>

                    <br>
                    <h6 class="card-title"></h6>
                    <div class="custom-file">
                        <img id="showImage" src="<?php echo e(url('images/admin.png')); ?>" alt="food_image" width="100"
                        height="100">
                    </div>
                    <br>
                    <br>
                    <br>

                    <br>
                    <div class="form-group">
                        <h6 class="card-title">Food Name :</h6>
                        <input type="text" class="form-control" name="food_name"
                            placeholder="Add Name">
                    </div>

                    <br>
                    <div class="form-group">
                        <h6 class="card-title">Food Which Country :</h6>
                        <input type="text" class="form-control" name="food_which_country"
                            placeholder="Add Which Country">
                    </div>

                    <br>
                        <h6 class="card-title">Food Description :</h6>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="food_description" placeholder="Add Description"></textarea>
                        </div>

                        <br>
                        <button type="submit"
                        class="btn waves-effect waves-light btn-rounded btn-primary"><i class="fas fa-utensils"></i>&nbsp; Submit On Data</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Backend.Body.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Exploredia_Web\resources\views/Backend/Food_Page/add_on_food.blade.php ENDPATH**/ ?>