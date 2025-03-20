<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | About
<?php $__env->stopSection(); ?>

<?php
    $aboutpage = App\Models\AboutPage::find(1);
?>

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="about__text">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>About Page</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo e(route('about.main')); ?>">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic__item__large">
                        <img src="<?php echo e((!empty($aboutpage->about_image)) ? url('Images/About_Page/'.$aboutpage->about_image) : url('Images/admin.png')); ?>" alt="">
                    </div>
                    <div class="about__pic">
                        <div class="about__pic__item">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__right__text">
                        <h2><?php echo e($aboutpage->about_title); ?></h2>
                        <p><?php echo e($aboutpage->about_short_description); ?></p>
                        <ul>
                            <li>Quotes Page</li>
                            <li>City Page</li>
                            <li>Food Page</li>
                            <li>Animal Page</li>
                        </ul>
                        <p><?php echo e($aboutpage->about_long_description); ?></p>
                        <div class="about__right__text__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Body.master_front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\htdocs\Exploredia_Web\resources\views/Frontend/Admin/about_page_front.blade.php ENDPATH**/ ?>