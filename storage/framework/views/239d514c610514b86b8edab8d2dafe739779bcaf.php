<!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Side Logo  -->
    <a href="" class="brand-link">
    <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/n logo.png" alt="logo-wrapper text-center vertical-center" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Laravel Asterisk</span>
    </a>

    <!-- Side User -->
    <div class="sidebar">

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/Yaze.webp" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Yaze Frost</a>
        </div>
      </div>

      <!-- Side Search -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Side Menu Start -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

               <li class="nav-item">
                <a href="<?php echo e(url('layouts.latestnews')); ?>" class="nav-link">
                  <i class="nav-icon fa fa-home"></i>
                  <p>
                    LATEST NEWS
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>

        <li class="nav-header">OTHERS</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                INFORMATION
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(route('nameusers.index')); ?>" class="nav-link"> 
                <i class=""></i>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME USERS</p>
              </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo e(url('Information.calendar')); ?>" class="nav-link">
                  <i class=""></i>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALENDAR</p>
                </a>
              </li>
          </ul>
        </li>

        <li class="nav-header">SYAFIQAH</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-american-sign-language-interpreting"></i>
              <p>
                MY DATABASE
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(route('mydatabase.index')); ?>" class="nav-link">
                <i class=""></i>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATA FOLDER</p>
              </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo e(route('mydatabase.create')); ?>" class="nav-link">
                  <i class=""></i>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CREATE NEW</p>
                </a>
              </li>
          </ul>
        </li>

        <li class="nav-header">COLLECTION</li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-life-ring"></i> 
            <p>
              ANIME DATABASE
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo e(route('anime.index')); ?>" class="nav-link">
              <i class=""></i>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ANIME WATCHED</p>
            </a>
          </li>
            <li class="nav-item">
              <a href="<?php echo e(route('anime.create')); ?>" class="nav-link">
                <i class=""></i>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CREATE NEW</p>
              </a>
            </li>
        </ul>
      </li>

        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-cubes"></i>
            <p>
              JAPANESE DATABASE
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo e(url('Japanese.movie_drama')); ?>" class="nav-link">
              <i class=""></i>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MOVIE & DRAMA</p>
            </a>
          </li>
            <li class="nav-item">
              <a href="<?php echo e(url('Japanese.create')); ?>" class="nav-link">
                <i class=""></i>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CREATE NEW</p>
              </a>
            </li>
        </ul>
      </li>

        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-bomb"></i>
            <p>
              KOREA DATABASE
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo e(url('Korea.movie_drama')); ?>" class="nav-link">
              <i class=""></i>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MOVIE & DRAMA</p>
            </a>
          </li>
            <li class="nav-item">
              <a href="<?php echo e(url('Korea.create')); ?>" class="nav-link">
                <i class=""></i>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CREATE NEW</p>
              </a>
            </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-heartbeat"></i>
          <p>
            ENGLISH DATABASE
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?php echo e(url('English.movie_drama')); ?>" class="nav-link">
            <i class=""></i>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MOVIE & DRAMA</p>
          </a>
        </li>
          <li class="nav-item">
            <a href="<?php echo e(url('English.create')); ?>" class="nav-link">
              <i class=""></i>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CREATE NEW</p>
            </a>
          </li>
      </ul>
    </li>

          <li class="nav-header">MY ANIME</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-paw"></i> 
              <p>
                DESTINY
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(url('Destiny.destiny_database')); ?>" class="nav-link">
                <i class=""></i>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME & STORY & CHARACTER & CATEGORY</p>
              </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo e(url('Destiny.add_plus')); ?>" class="nav-link">
                  <i class=""></i>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD ON NEW</p>
                </a>
              </li>
          </ul>
        </li>

<li class="nav-header">END</li>

</nav>
 </div>
 </div>
  </aside>

  <!-- Side Menu End -->
<?php /**PATH C:\xampp\htdocs\000Laravel_Asterisk\Laravel_Asterisk\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>