
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <!-- Topbar header - style you can find in pages.scss -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>

                    <!-- Logo -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="<?php echo e(asset('Backend')); ?>/assets/images/logo-icon.png" alt="homepage" class="dark-logo"/>
                                <!-- Light Logo icon -->
                                <img src="<?php echo e(asset('Backend')); ?>/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?php echo e(asset('Backend')); ?>/assets/images/logo.png" alt="homepage" class="dark-logo" width="132" height="52"/>
                                <!-- Light Logo text -->
                                <img src="<?php echo e(asset('Backend')); ?>/assets/images/logo.png" class="light-logo" alt="homepage" width="132" height="52"/>
                            </span>
                        </a>
                    </div>
                    <!-- End Logo -->

                    <!-- Toggle which is visible on mobile only -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>

                <!-- End Logo -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">

            <!-- toggle and nav items -->
            <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                <!-- Notification -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                        id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span><i data-feather="bell" class="svg-icon"></i></span>
                        <span class="badge badge-primary notify-no rounded-circle">4</span>
                    </a>
    <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
        <ul class="list-style-none">
            <li>
                <div class="message-center notifications position-relative">
                    <!-- Message -->
                    <a href="<?php echo e(route('quotes.page')); ?>"
                        class="message-item d-flex align-items-center border-bottom px-3 py-2">
                        <span class="btn btn-success rounded-circle btn-circle"><i class="icon-bubble"></i></span>
                        <div class="w-75 d-inline-block v-middle pl-2">
                            <h6 class="message-title mb-0 mt-1">Quotes Page</h6>
                            <span class="font-12 text-nowrap d-block text-muted">Daily personal motivation Quotes</span>
                        </div>
                    </a>
                    <!-- Message -->
                    <a href="<?php echo e(route('city.page')); ?>"
                        class="message-item d-flex align-items-center border-bottom px-3 py-2">
                        <span class="btn btn-danger text-white rounded-circle btn-circle"><i class="icon-plane"></i></span>
                        <div class="w-75 d-inline-block v-middle pl-2">
                            <h6 class="message-title mb-0 mt-1">City Page</h6>
                            <span
                                class="font-12 text-nowrap d-block text-muted text-truncate">Dream place to travel around the world</span>
                        </div>
                    </a>
                    <!-- Message -->
                    <a href="<?php echo e(route('food.page')); ?>"
                        class="message-item d-flex align-items-center border-bottom px-3 py-2">
                        <span class="btn btn-warning rounded-circle btn-circle"><i class="icon-fire"></i></span>
                        <div class="w-75 d-inline-block v-middle pl-2">
                            <h6 class="message-title mb-0 mt-1">Food Page</h6>
                            <span
                                class="font-12 text-nowrap d-block text-muted text-truncate">Best delicious Food around the world</span>
                        </div>
                    </a>
                    <!-- Message -->
                    <a href="<?php echo e(route('animal.page')); ?>"
                        class="message-item d-flex align-items-center border-bottom px-3 py-2">
                        <span class="btn btn-secondary rounded-circle btn-circle"><i class="icon-social-twitter"></i></span>
                        <div class="w-75 d-inline-block v-middle pl-2">
                            <h6 class="message-title mb-0 mt-1">Animal Page</h6> <span
                                class="font-12 text-nowrap d-block text-muted">National Animal in every country araound the world</span>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <a class="nav-link pt-3 text-center text-dark" href="<?php echo e(route('admin.dashboard')); ?>">
                    <strong>View All Data</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </div>
</li>
<!-- End Notification -->

                <!-- create new -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="settings" class="svg-icon"></i>
                    </a>
                </li>
            </ul>

            <!-- Right side toggle and nav items -->
            <ul class="navbar-nav float-right">

                <!-- Search -->
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="javascript:void(0)">
                        <form>
                            <div class="customize-input">
                                <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                    type="search" placeholder="Search" aria-label="Search">
                                <i class="form-control-icon" data-feather="search"></i>
                            </div>
                        </form>
                    </a>
                </li>

                <!-- User profile and search -->

                <?php
                    $id = Auth::user()->id;
                    $adminData = App\Models\User::find($id);
                ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo e((!empty($adminData->photo)) ? url('Images/Admin_Profile/'.$adminData->photo) : url('Images/admin.png')); ?>" alt="user" class="rounded-circle"
                            width="40">
                        <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                class="text-dark"><?php echo e($adminData->username); ?></span> <i data-feather="chevron-down"
                                class="svg-icon"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item" href="<?php echo e(route('admin.profile')); ?>"><i data-feather="user"
                                class="svg-icon mr-2 ml-1"></i>
                            My Profile</a>
                        <a class="dropdown-item" href="<?php echo e(route('admin.register')); ?>"><i data-feather="mail"
                                class="svg-icon mr-2 ml-1"></i>
                            User Register Box</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(route('admin.change.password')); ?>"><i data-feather="settings"
                                class="svg-icon mr-2 ml-1"></i>
                            Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>"><i data-feather="power"
                                class="svg-icon mr-2 ml-1"></i>
                            Logout</a>
                </li>

                <!-- User profile and search -->

            </ul>
        </div>
    </nav>
</header>

    <!-- End Topbar header -->

<?php /**PATH C:\Laravel\htdocs\Exploredia_Web\resources\views/Backend/Body/header.blade.php ENDPATH**/ ?>