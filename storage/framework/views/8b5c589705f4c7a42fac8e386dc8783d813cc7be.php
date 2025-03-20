

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Animal
<?php $__env->stopSection(); ?>

<!-- Categories Section Begin -->
<section class="categories categories-grid spad">
    <div class="categories__post">
        <div class="container">
            <div class="categories__grid__post">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="breadcrumb__text">
                            <h2>Main Page: <span>Animal</span></h2>
                            <div class="breadcrumb__option">
                                <a href="<?php echo e(route('animal.main')); ?>">Home</a>
                                <span>Animal Page</span>
                            </div>
                        </div>

                        <?php $__currentLoopData = $animalMain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="categories__list__post__item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="categories__post__item__pic set-bg">
                                    <img src="<?php echo e((!empty($item->animal_image)) ? url('Images/Animal_Page/'.$item->animal_image) : url('Images/admin.png')); ?>"
                                    height="250px;" width="400;">
                                        <div class="post__meta">
                                            <h4><?php echo e($key+1); ?></h4>
                                            <span>No.Data</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Famous Animal</span>
                                        <h3><?php echo e($item->animal_name); ?></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li><?php echo e($item->created_at); ?></li>
                                            <li><?php echo e($item->animal_which_country); ?></li>
                                        </ul>
                                        <p><?php echo e($item->animal_description); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="categories__pagination">
                                <?php echo e($animalMain->links('pagination::simple-tailwind')); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar__item">

                            <div class="sidebar__follow__item">
                                <div class="sidebar__item__title">

                                </div>
                                <div class="sidebar__item__follow__links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                                </div>
                            </div>

                                <div class="sidebar__feature__item__list">
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4 class="num" data-val="<?php echo e($numberQuotes); ?>"><?php echo e($numberQuotes); ?></h4>
                                            <span>No.Data</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Quotes</span>
                                            <h5>Daily Motivation Quotes</h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4 class="num" data-val="<?php echo e($numberCity); ?>"><?php echo e($numberCity); ?></h4>
                                            <span>No.Data</span>
                                        </div>
                                        <div class="post__text">
                                            <span>City</span>
                                            <h5>Dream Place to Travel</h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4 class="num" data-val="<?php echo e($numberFood); ?>"><?php echo e($numberFood); ?></h4>
                                            <span>No.Data</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Food</span>
                                            <h5>Best Food in The World</h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4 class="num" data-val="<?php echo e($numberAnimal); ?>"><?php echo e($numberAnimal); ?></h4>
                                            <span>No.Data</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Animal</span>
                                            <h5>All National Animal around the World</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__item__banner">
                                <img src="<?php echo e(asset('Backend')); ?>/assets/images/big/2.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<script>
    let valueDisplays = document.querySelectorAll(".num");
    let interval = 4000;

    valueDisplays.forEach((valueDisplay) => {
      let startValue = 0;
      let endValue = parseInt(valueDisplay.getAttribute("data-val"));
      let duration = Math.floor(interval / endValue);
      let counter = setInterval(function () {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
          clearInterval(counter);
        }
      }, duration);
    });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Body.master_front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Exploredia_Web\resources\views/Frontend/Animal_Page/animal_page_front.blade.php ENDPATH**/ ?>