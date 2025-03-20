

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Home
<?php $__env->stopSection(); ?>

<?php
    $aboutpage = App\Models\AboutPage::find(1);
    $quotes = App\Models\QuotesPage::find(4);
    $city = App\Models\CityPage::find(7);
    $food = App\Models\FoodPage::find(1);
    $animal = App\Models\AnimalPage::find(2);
    $work = App\Models\WorkPage::find(2);
?>

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 p-0">
                        <div class="hero__inside__item hero__inside__item--wide set-bg"
                            data-setbg="<?php echo e((!empty($food->food_image)) ? url('Images/Food_Page/'.$food->food_image) : url('Images/admin.png')); ?>">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span></span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li>Food</li>
                                        <li>Best Food</li>
                                    </ul>
                                    <h4><?php echo e($food->food_name); ?></h4>
                                    <ul class="widget">
                                        <li>by <span>Admin</span></li>
                                        <li><?php echo e($food->created_at); ?></li>
                                        <li><?php echo e($food->food_which_country); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6  p-0">
                        <div class="hero__inside__item hero__inside__item--small set-bg"
                            data-setbg="<?php echo e((!empty($city->city_image)) ? url('Images/City_Page/'.$city->city_image) : url('Images/admin.png')); ?>">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span><?php echo e($city->id); ?></span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li><?php echo e($city->created_at); ?></li>
                                        <li><?php echo e($city->city_which_country); ?></li>
                                    </ul>
                                    <h5><?php echo e($city->city_name); ?></h5>
                                </div>
                            </div>
                        </div>

                        <div class="hero__inside__item hero__inside__item--small set-bg"
                            data-setbg="<?php echo e(asset('Frontend')); ?>/img/categories/Quotes.png">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span><?php echo e($quotes->id); ?></span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li><?php echo e($quotes->created_at); ?></li>
                                    </ul>
                                    <h5><?php echo e($quotes->quotes_description); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6  p-0">
                        <div class="hero__inside__item set-bg"
                        data-setbg="<?php echo e((!empty($animal->animal_image)) ? url('Images/Animal_Page/'.$animal->animal_image) : url('Images/admin.png')); ?>">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span><?php echo e($animal->id); ?></span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li><?php echo e($animal->created_at); ?></li>
                                        <li><?php echo e($animal->animal_which_country); ?></li>
                                    </ul>
                                    <h5><?php echo e($animal->animal_name); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero__item">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="hero__inside__item hero__inside__item--wide set-bg"
                            data-setbg="<?php echo e((!empty($animal->animal_image)) ? url('Images/Animal_Page/'.$animal->animal_image) : url('Images/admin.png')); ?>">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span><?php echo e($animal->id); ?></span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li>Animal</li>
                                        <li>National Country</li>
                                    </ul>
                                    <h4><?php echo e($animal->animal_name); ?></h4>
                                    <ul class="widget">
                                        <li>by <span>Admin</span></li>
                                        <li><?php echo e($animal->created_at); ?></li>
                                        <li><?php echo e($animal->animal_which_country); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="hero__inside__item hero__inside__item--small set-bg"
                            data-setbg="<?php echo e(asset('Frontend')); ?>/img/categories/Quotes.png">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span><?php echo e($quotes->id); ?></span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <?php echo e($quotes->created_at); ?>

                                    </ul>
                                    <h5><?php echo e($quotes->quotes_description); ?></h5>
                                </div>
                            </div>
                        </div>

                        <div class="hero__inside__item hero__inside__item--small set-bg"
                            data-setbg="<?php echo e((!empty($city->city_image)) ? url('Images/City_Page/'.$city->city_image) : url('Images/admin.png')); ?>">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span><?php echo e($city->id); ?></span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li><?php echo e($city->created_at); ?></li>
                                        <li><?php echo e($city->city_which_country); ?></li>
                                    </ul>
                                    <h5><?php echo e($city->city_name); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="hero__inside__item set-bg"
                        data-setbg="<?php echo e((!empty($food->food_image)) ? url('Images/Food_Page/'.$food->food_image) : url('Images/admin.png')); ?>">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span><?php echo e($food->id); ?></span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li><?php echo e($food->created_at); ?></li>
                                        <li><?php echo e($food->food_which_country); ?></li>
                                    </ul>
                                    <h5><?php echo e($food->food_name); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Categories Section Begin -->
<section class="categories spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="<?php echo e(asset('Frontend')); ?>/img/categories/Quotes.png">
                    <div class="categories__hover__text">
                        <h5>Quotes</h5>
                        <p><?php echo e($numberQuotes); ?> Data</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="<?php echo e(asset('Frontend')); ?>/img/categories/kuala_lumpur.jpg">
                    <div class="categories__hover__text">
                        <h5>City</h5>
                        <p><?php echo e($numberCity); ?> Data</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="<?php echo e(asset('Frontend')); ?>/img/categories/nasi_lemak.jpg">
                    <div class="categories__hover__text">
                        <h5>Food</h5>
                        <p><?php echo e($numberFood); ?> Data</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="<?php echo e(asset('Frontend')); ?>/img/categories/tiger.webp">
                    <div class="categories__hover__text">
                        <h5>Animal</h5>
                        <p><?php echo e($numberAnimal); ?> Data</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    $aboutpage = App\Models\AboutPage::find(1);
    $quotes = App\Models\QuotesPage::find(4);
    $city = App\Models\CityPage::find(7);
    $food = App\Models\FoodPage::find(1);
    $animal = App\Models\AnimalPage::find(2);
    $work = App\Models\WorkPage::find(2);
?>

    <div class="categories__post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="categories__post__item categories__post__item--large">
                        <div class="categories__post__item__pic set-bg"
                            data-setbg="<?php echo e((!empty($aboutpage->about_image)) ? url('Images/About_Page/'.$aboutpage->about_image) : url('Images/admin.png')); ?>">
                            <div class="post__meta">
                                <h4><?php echo e($aboutpage->id); ?></h4>
                                <span>No.Data</span>
                            </div>
                        </div>
                        <div class="categories__post__item__text">
                            <ul class="post__label--large">
                                <li>About Page</li>
                                <li>Introduction</li>
                            </ul>
                            <h3><?php echo e($aboutpage->about_title); ?></h3>
                            <ul class="post__widget">
                                <li>by <span>Admin</span></li>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                            <p><?php echo e($aboutpage->about_long_description); ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="categories__post__item">
                                <div class="categories__post__item__pic small__item set-bg"
                                    data-setbg="<?php echo e(asset('Frontend')); ?>/img/categories/single-post/languages.webp">
                                    <div class="post__meta">
                                        <h4><?php echo e($work->id); ?></h4>
                                        <span>No.Data</span>
                                    </div>
                                </div>
                                <div class="categories__post__item__text">
                                    <span class="post__label">Programming</span>
                                    <h3><?php echo e($work->programming_name); ?></a></h3>
                                    <ul class="post__widget">
                                        <li>by <span>Admin</span></li>
                                        <li><?php echo e($work->created_at); ?></li>
                                    </ul>
                                    <p><?php echo e($work->use_programming); ?></p>
                                </div>
                            </div>

                            <div class="categories__post__item">
                                <div class="categories__post__item__pic set-bg"
                                    data-setbg="<?php echo e((!empty($city->city_image)) ? url('Images/City_Page/'.$city->city_image) : url('Images/admin.png')); ?>">
                                    <div class="post__meta">
                                        <h4><?php echo e($city->id); ?></h4>
                                        <span>No.Data</span>
                                    </div>
                                </div>
                                <div class="categories__post__item__text">
                                    <ul class="post__label--large">
                                        <li>City</li>
                                        <li>Travel</li>
                                    </ul>
                                    <h3><?php echo e($city->city_name); ?></h3>
                                    <ul class="post__widget">
                                        <li>by <span>Admin</span></li>
                                        <li><?php echo e($city->created_at); ?></li>
                                        <li><?php echo e($city->city_which_country); ?></li>
                                    </ul>
                                    <p><?php echo e($city->city_description); ?></p>
                                </div>
                            </div>

                            <div class="categories__post__item">
                                <div class="categories__post__item__pic smaller__large set-bg"
                                    data-setbg="<?php echo e(asset('Frontend')); ?>/img/categories/Quotes.png">
                                    <div class="post__meta">
                                        <h4><?php echo e($quotes->id); ?></h4>
                                        <span>No.Data</span>
                                    </div>
                                </div>
                                <div class="categories__post__item__text">
                                    <span class="post__label">Quotes Daily</span>
                                    <h3>Motivational Day</a></h3>
                                    <ul class="post__widget">
                                        <li>by <span>Admin</span></li>
                                        <li><?php echo e($quotes->created_at); ?></li>
                                    </ul>
                                    <p><?php echo e($quotes->quotes_description); ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="categories__post__item">
                                <div class="categories__post__item__pic smaller__large set-bg"
                                    data-setbg="<?php echo e((!empty($food->food_image)) ? url('Images/Food_Page/'.$food->food_image) : url('Images/admin.png')); ?>">
                                    <div class="post__meta">
                                        <h4><?php echo e($food->id); ?></h4>
                                        <span>No.Data</span>
                                    </div>
                                </div>
                                <div class="categories__post__item__text">
                                    <span class="post__label">Best Food</span>
                                    <h3><?php echo e($food->food_name); ?></a>
                                    </h3>
                                    <ul class="post__widget">
                                        <li>by <span>Admin</span></li>
                                        <li><?php echo e($food->created_at); ?></li>
                                        <li><?php echo e($food->food_which_country); ?></li>
                                    </ul>
                                    <p><?php echo e($food->food_description); ?></p>
                                </div>
                            </div>

                            <div class="categories__post__item__small">
                                <img src="<?php echo e(asset('Frontend')); ?>/img/categories/categories-post/quote.png" alt="">
                                <p><?php echo e($quotes->quotes_description); ?></p>
                                <div class="posted__by">Quotes Of The Day</div>
                            </div>

                            <div class="categories__post__item">
                                <div class="categories__post__item__pic smaller__large set-bg"
                                    data-setbg="<?php echo e((!empty($animal->animal_image)) ? url('Images/Animal_Page/'.$animal->animal_image) : url('Images/admin.png')); ?>">
                                    <div class="post__meta">
                                        <h4><?php echo e($animal->id); ?></h4>
                                        <span>No.Data</span>
                                    </div>
                                </div>
                                <div class="categories__post__item__text">
                                    <span class="post__label">National Animal</span>
                                    <h3><?php echo e($animal->food_name); ?></h3>
                                    <ul class="post__widget">
                                        <li>by <span>Admin</span></li>
                                        <li><?php echo e($animal->created_at); ?></li>
                                        <li><?php echo e($animal->animal_which_country); ?></li>
                                    </ul>
                                    <p><?php echo e($animal->animal_description); ?></p>
                                </div>
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

<?php echo $__env->make('Frontend.Body.master_front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Exploredia_Web\resources\views/Frontend/Admin/dashboard_page_front.blade.php ENDPATH**/ ?>