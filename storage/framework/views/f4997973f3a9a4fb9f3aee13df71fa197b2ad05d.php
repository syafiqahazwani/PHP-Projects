<?php $__env->startSection('admin'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Change Password
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
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Change Password</li>
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
                        <h4 class="mb-0 text-white">Edit Password</h4>
                    </div>
                    <div class="card-body">

            <form method="POST" action="<?php echo e(route('admin.update.password')); ?>" class="forms-sample" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <h6 class="card-title">Old Password :</h6>
                        <input type="password" class="form-control <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="old_password" id="old_password" autocomplete="off">
                            <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <h6 class="card-title">New Password :</h6>
                        <input type="password" class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="new_password" id="new_password" autocomplete="off">
                            <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <h6 class="card-title">Confirm New Password :</h6>
                        <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" autocomplete="off">
                    </div>

                    <br>

                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary">Update Password</button>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Backend.Body.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\htdocs\Exploredia_Web\resources\views/Backend/Admin/change_password.blade.php ENDPATH**/ ?>