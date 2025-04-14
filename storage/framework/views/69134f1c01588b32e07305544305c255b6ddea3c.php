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
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Animal Page</a></li>
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
                                    <h1 class="font-light text-white">2,064</h1>
                                    <h6 class="text-white">Animal World Data</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
            </div>

            <div class="col-12 align-self-center">
                <div class="customize-input float-right">
            <a href="<?php echo e(route('animal.add')); ?>" class="btn waves-effect waves-light btn-rounded btn-primary"><i class="fas fa-paw"></i>&nbsp;  Add On Animal Data</a>
            </div>
        </div>
        <br>
        <br>

            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Animal Image</th>
                            <th>Animal Name</th>
                            <th>Animal Which Country</th>
                            <th>Animal Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="badge badge-light-warning">In Progress</span></td>
                            <td><a href="javascript:void(0)" class="font-bold link">276377</a></td>
                            <td>Elegant Admin</td>
                            <td>Eric Pratt</td>
                            <td>2018/05/01</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip"
                                data-placement="bottom" title="" data-original-title="Edit"><i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-circle" data-toggle="tooltip"
                                data-placement="bottom" title="" data-original-title="View"><i class="fas fa-eye"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-circle" data-toggle="tooltip"
                                data-placement="bottom" title="" data-original-title="Delete"><i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>

                        </table>
                        <ul class="pagination float-right">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- End Container fluid  -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Backend.Body.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\htdocs\Exploredia_Web\resources\views/Backend/Animal_Page/main_page_animal.blade.php ENDPATH**/ ?>