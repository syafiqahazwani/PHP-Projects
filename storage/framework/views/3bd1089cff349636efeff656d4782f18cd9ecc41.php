<?php $__env->startSection('admin'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Animal Edit
<?php $__env->stopSection(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Animal Form Edit</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('animal.page')); ?>" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Animal Edit</li>
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
                            <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-paw"></i>
                            </button>

                            <br>
                            <br>
                    <form method="POST" action="<?php echo e(route('animal.update')); ?>" class="forms-sample" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($animalEdit->id); ?>">


                        <h6 class="card-title">Animal Image :</h6>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="animal_image">
                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                        </div>

                        <br>
                    <h6 class="card-title"></h6>
                    <div class="custom-file">
                        <img id="showImage" src="<?php echo e((!empty($animalEdit->animal_image)) ? url('Images/Animal_Page/'.$animalEdit->animal_image) : url('Images/admin.png')); ?>"
                        alt="animal_image" width="100" height="100">
                    </div>
                    <br>
                    <br>
                    <br>

                    <br>
                        <div class="form-group">
                            <h6 class="card-title">Animal Name :</h6>
                            <input type="text" class="form-control" name="animal_name" value="<?php echo e($animalEdit->animal_name); ?>"
                                placeholder="Add Name">
                                <?php if($errors->has('animal_name')): ?>
                              <span class="text-danger"><?php echo e($errors->first('animal_name')); ?></span>
                            <?php endif; ?>
                        </div>

                        <br>
                        <div class="form-group">
                            <h6 class="card-title">Animal Which Country :</h6>
                            <input type="text" class="form-control" name="animal_which_country" value="<?php echo e($animalEdit->animal_which_country); ?>"
                                placeholder="Add Which Country">
                                <?php if($errors->has('animal_which_country')): ?>
                              <span class="text-danger"><?php echo e($errors->first('animal_which_country')); ?></span>
                            <?php endif; ?>
                        </div>

                        <br>
                            <h6 class="card-title">Animal Description :</h6>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="animal_description"
                                placeholder="Add Description" value="<?php echo e($animalEdit->animal_description); ?>"><?php echo e($animalEdit->animal_description); ?></textarea>
                                <?php if($errors->has('animal_description')): ?>
                              <span class="text-danger"><?php echo e($errors->first('animal_description')); ?></span>
                            <?php endif; ?>
                            </div>

                            <br>
                                <button type="submit"
                                class="btn waves-effect waves-light btn-rounded btn-primary"><i class="fas fa-paw"></i>&nbsp; Update Data</button>

                                </div>

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

<?php echo $__env->make('Backend.Body.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\htdocs\Exploredia_Web\resources\views/Backend/Animal_Page/edit_page.blade.php ENDPATH**/ ?>