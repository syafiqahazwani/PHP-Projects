<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                    <div class="header__humberger">
                        <i class="fa fa-bars humberger__open"></i>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 order-md-2 order-3">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>

                            <li><a href="./about.html">About</a></li>

                            <li><a href="<?php echo e(route('quotes.main')); ?>">Quotes</a></li>

                            <li><a href="<?php echo e(route('work.main')); ?>">Programming</a></li>

                            <li><a href="<?php echo e(route('city.main')); ?>">City</a></li>

                            <li><a href="<?php echo e(route('food.main')); ?>">Food</a></li>

                            <li><a href="<?php echo e(route('animal.main')); ?>">Animal</a></li>

                            <li><a href="./contact.html">Contact</a></li>

                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-6">
                <div class="header__logo">
                    <a href=""><img src="<?php echo e(asset('Backend')); ?>/assets/images/logo.png" width="248" height="60"></a>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- Header Section End -->
<?php /**PATH C:\xampp\htdocs\Exploredia_Web\resources\views/Frontend/Body/header.blade.php ENDPATH**/ ?>