

<?php $__env->startSection('admin'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Profile Page
<?php $__env->stopSection(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Admin</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Profile Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

            <!-- End Bread crumb and right sidebar toggle -->

            <!-- Container fluid  -->
            <div class="container-fluid">

                <!-- Start Page Content -->

                <!-- Row -->
                <br>
                <?php if(session('message')): ?>
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <span><?php echo e(session('message')); ?> </span>
                </div>
                <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <!-- Row -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-5 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <br>
                            <center>
                            <img src="<?php echo e((!empty($adminData->photo)) ? url('Images/Admin_Profile/'.$adminData->photo) : url('Images/admin.png')); ?>" class="rounded-circle" width="150"
                                height="150" />
                            </center>
                            <div class="card-body">
                                <h3 class="text-center" >Mine Profile &nbsp;&nbsp;<span class="badge badge-pill badge-warning"><?php echo e($adminData->status); ?></span>
                                    <br /></h3>
                                <br>

                            <h5 class="text-center"><i class="fas fa-user-circle"></i> &nbsp;&nbsp;<?php echo e($adminData->username); ?> </h5>
                            <h5 class="text-center"><i class="fas fa-user"></i> &nbsp;&nbsp;<?php echo e($adminData->name); ?> </h5>
                            <h5 class="text-center"><i class="fas fa-envelope"></i> &nbsp;&nbsp;<?php echo e($adminData->email); ?> </h5>
                            <h5 class="text-center"><i class="fas fa-mobile"></i> &nbsp;&nbsp;<?php echo e($adminData->phone); ?> </h5>
                            <h5 class="text-center"><i class="fas fa-map-marker-alt"></i> &nbsp;&nbsp;<?php echo e($adminData->address); ?> </h5>
                            <h5 class="text-center"><i class="fas fa-sitemap"></i> &nbsp;&nbsp;<?php echo e($adminData->role); ?> </h5>

                            <hr>
                                <div class="card-text text-sm-center">
                                    <a href="#"><i class="fab fa-windows"></i></a>
                                    <a href="#"><i class="fab fa-android"></i></a>
                                    <a href="#"><i class="fab fa-html5"></i></a>
                                    <a href="#"><i class="fab fa-nintendo-switch"></i></a>
                                </div>

                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- column -->
    <!-- Row -->

                <div class="col-md-7">
                    <div class="card border-info">
                        <div class="card-header bg-info">
                            <h4 class="mb-0 text-white">Edit Profile</h4>
                        </div>
                        <div class="card-body">

                    <form method="POST" action="<?php echo e(route('admin.profile.store')); ?>" class="forms-sample" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <h6 class="card-title">Username :</h6>
                            <input type="text" class="form-control" name="username" id="exampleInputUsername1" value="<?php echo e($adminData->username); ?>">
                        </div>

                        <div class="form-group">
                            <h6 class="card-title">Name :</h6>
                            <input type="text" class="form-control" name="name" id="exampleInputUsername1" value="<?php echo e($adminData->name); ?>">
                        </div>

                        <div class="form-group">
                            <h6 class="card-title">Email :</h6>
                            <input type="email" class="form-control" name="email" id="exampleInputUsername1" value="<?php echo e($adminData->email); ?>">
                        </div>

                        <div class="form-group">
                            <h6 class="card-title">Phone :</h6>
                            <input type="text" class="form-control" name="phone" id="exampleInputUsername1" value="<?php echo e($adminData->phone); ?>">
                        </div>

                        <br>
                            <h6 class="card-title">Address :</h6>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="address" id="exampleInputUsername1" value="<?php echo e($adminData->address); ?>"><?php echo e($adminData->address); ?></textarea>
                            </div>

                            <br>
                            <h6 class="card-title">Role :</h6>
                            <div class="form-group mb-4">
                                <select class="form-control" name="role" id="exampleInputUsername1">
                                    <option>Choose...</option>
                                    <option value="admin" <?php echo e($adminData->role === 'admin' ? 'selected' : ''); ?>>Admin</option>
                                    <option value="user" <?php echo e($adminData->role === 'user' ? 'selected' : ''); ?>>User</option>
                                </select>
                            </div>

                            <br>
                            <h6 class="card-title">Status :</h6>
                            <div class="form-group mb-4">
                                <select class="form-control" name="status" id="exampleInputUsername1">
                                    <option>Choose...</option>
                                    <option value="active" <?php echo e($adminData->status === 'active' ? 'selected' : ''); ?>>Active</option>
                                    <option value="inactive" <?php echo e($adminData->status === 'inactive' ? 'selected' : ''); ?>>Inactive</option>
                                </select>
                            </div>

                            <h6 class="card-title">Profile Image :</h6>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="photo" id="image">
                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                            </div>
                            <br>
                            <br>
                            <div class="custom-file">
                                <img id="showImage" src="<?php echo e((!empty($adminData->photo)) ? url('Images/Admin_Profile/'.$adminData->photo) : url('Images/admin.png')); ?>" alt="profile_image"  class="rounded-circle" width="100"
                                height="100">
                            </div>

                        <br>
                        <br>
                        <br>
                        <br>

                        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary">Save Profile</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>


                </div>
            </div>

                </div>
                <!-- Row -->
            </div>
        </div>
        <!-- End Row -->

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

<?php echo $__env->make('Backend.Body.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\htdocs\Exploredia_Web\resources\views/Backend/Admin/profile_page.blade.php ENDPATH**/ ?>