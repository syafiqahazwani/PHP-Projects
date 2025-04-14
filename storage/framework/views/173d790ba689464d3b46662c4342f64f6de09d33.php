<?php $__env->startSection('admin'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Admin Dashboard
<?php $__env->stopSection(); ?>


<?php
    $id = Auth::user()->id;
    $adminData = App\Models\User::find($id);
?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">

            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Welcome Back <?php echo e($adminData->username); ?> !</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Admin Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- End Bread crumb and right sidebar toggle -->

            <!-- Container fluid  -->
            <div class="container-fluid">

            <!-- Start First Cards -->
            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium" class="num" data-val="<?php echo e($numberQuotes); ?>"><?php echo e($numberQuotes); ?></h2>
                                    <span class="badge bg-success font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">QUOTES</span>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Daily Quotes</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7"><i class="icon-bubble"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium" class="num" data-val="<?php echo e($numberCity); ?>"><?php echo e($numberCity); ?></h2>
                                <span class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">CITY</span>
                            </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Daily City</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7"><i class="icon-plane"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium" class="num" data-val="<?php echo e($numberFood); ?>"><?php echo e($numberFood); ?></h2>
                                    <span class="badge bg-warning font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">FOOD</span>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Daily Food</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7"><i class="icon-fire"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium" class="num" data-val="<?php echo e($numberAnimal); ?>"><?php echo e($numberAnimal); ?></h2>
                                <span class="badge bg-secondary font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">ANIMAL</span>
                            </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Daily Animal</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7"><i class="icon-social-twitter"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End First Cards -->

       <!-- Start Location and Earnings Charts Section -->
                <div class="row">
                    <div class="col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <h4 class="card-title mb-0">View Everyday Chart</h4>
                                    <div class="ml-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-4 mb-5">
                                    <div class="stats ct-charts position-relative" style="height: 315px;"></div>
                                </div>
                                <ul class="list-inline text-center mt-4 mb-0">
                                    <li class="list-inline-item text-muted font-italic">Daily Everyday</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Data</h4>
                                <div class="mt-4 activity">

                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <a href="<?php echo e(route('quotes.page')); ?>" class="btn btn-success btn-circle mb-2 btn-item">
                                                <i class="icon-bubble"></i>
                                            </a>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Quotes Page</h5>
                                            <p class="font-14 mb-2 text-muted">Daily personal motivation Quotes</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <a href="<?php echo e(route('city.page')); ?>" class="btn btn-danger btn-circle mb-2 btn-item">
                                                <i class="icon-plane"></i>
                                            </a>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">City Page</h5>
                                            <p class="font-14 mb-2 text-muted">Dream place to travel around the world</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <a href="<?php echo e(route('food.page')); ?>" class="btn btn-warning btn-circle mb-2 btn-item">
                                                <i class="icon-fire"></i>
                                            </a>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Food Page</h5>
                                            <p class="font-14 mb-2 text-muted">Best delicious Food around the world</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <a href="<?php echo e(route('animal.page')); ?>" class="btn btn-secondary btn-circle mb-2 btn-item">
                                                <i class="icon-social-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Animal Page</h5>
                                            <p class="font-14 mb-2 text-muted">National Animal in every country araound the world</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Location and Earnings Charts Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Backend.Body.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Exploredia_Web\resources\views/Backend/Admin/dashboard_page.blade.php ENDPATH**/ ?>