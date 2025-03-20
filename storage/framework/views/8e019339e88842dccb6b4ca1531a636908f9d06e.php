<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left Navbar -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(url('/layouts.latestnews')); ?>" class="nav-link">Home/Latest News</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(url('/Information.calendar')); ?>" class="nav-link">Calendar</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout" class="nav-link">Log Out</a>
      </li>
    </ul>


    <!-- Right Navbar -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Start Search Navbar -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- End Search Navbar -->


      <!-- Start Databases -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="">
          <i class="far fa-bell"></i>
          <span class="badge badge-danger navbar-badge">5</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">

            <!-- My Database Start -->
            <div class="media">
              <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/hogwarts-logo.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  My Database
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Collection about Syafiqah</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- My Database End -->

          </a>
          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item">
            
          <!-- Anime Start -->
            <div class="media">
              <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/Ravenclaw.webp" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Anime Database
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Collection about Anime</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Anime End -->

          </a>
          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item">

           <!-- Japanese Start -->
           <div class="media">
              <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/Slytherin.webp" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Japanese Database
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Collection about Japanese</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Japanese End -->

          </a>
          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item">

           <!-- Korea Start -->
           <div class="media">
              <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/Hufflepuff.webp" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Korea Database
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Collection about Korea</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Korea End -->

          </a>
          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item">
            
          <!-- English Start -->
            <div class="media">
              <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/Gryffindor.webp" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  English Database
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Collection about English</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div> 
            </div>
            <!-- English End -->

          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">View All Database</a>
        </div>
      </li>
      <!-- End Databases -->


      <!-- Start User Login & Register -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="">
          <i class="far fa-comments"></i>
          <span class="badge badge-warning navbar-badge">2</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Authentication</span>

          <div class="dropdown-divider-center"></div>
          <a href="login" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>&nbsp;LOGIN   
          </a>

          <div class="dropdown-divider"></div>
          <a href="register" class="dropdown-item">
            <i class="fas fa-sign-in-alt"></i>&nbsp;REGISTER
          </a>

          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item dropdown-footer">...</a>
        </div>
      </li>
<!-- End User Login & Register -->


      <li class="nav-item">
        <a class="nav-link" data-widget="" data-slide="true" href="" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>

    </ul>
  </nav>
  
  
  <!-- End Navbar -->
<?php /**PATH C:\xampp\htdocs\Laravel_Asterisk\Laravel_Asterisk\resources\views/auth/navbar.blade.php ENDPATH**/ ?>