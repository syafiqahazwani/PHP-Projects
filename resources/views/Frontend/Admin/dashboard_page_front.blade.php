
@extends('Frontend.Body.master_front')
@section('content')

@section('title')
Exploredia | Home
@endsection

@php
    $aboutpage = App\Models\AboutPage::find(1);
    $quotes = App\Models\QuotesPage::find(4);
    $city = App\Models\CityPage::find(7);
    $food = App\Models\FoodPage::find(1);
    $animal = App\Models\AnimalPage::find(2);
    $work = App\Models\WorkPage::find(2);
@endphp

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 p-0">
                        <div class="hero__inside__item hero__inside__item--wide set-bg"
                            data-setbg="{{ (!empty($food->food_image)) ? url('Images/Food_Page/'.$food->food_image) : url('Images/admin.png') }}">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span>{{ $food->id }}</span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li>Food</li>
                                        <li>Best Food</li>
                                    </ul>
                                    <h4>{{ $food->food_name }}</h4>
                                    <ul class="widget">
                                        <li>by <span>Admin</span></li>
                                        <li>{{ $food->created_at }}</li>
                                        <li>{{ $food->food_which_country }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6  p-0">
                        <div class="hero__inside__item hero__inside__item--small set-bg"
                            data-setbg="{{ (!empty($city->city_image)) ? url('Images/City_Page/'.$city->city_image) : url('Images/admin.png') }}">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span>{{ $city->id }}</span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li>{{ $city->created_at }}</li>
                                        <li>{{ $city->city_which_country }}</li>
                                    </ul>
                                    <h5>{{ $city->city_name }}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="hero__inside__item hero__inside__item--small set-bg"
                            data-setbg="{{asset('Frontend')}}/img/categories/Quotes.png">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span>{{ $quotes->id }}</span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li>{{ $quotes->created_at }}</li>
                                    </ul>
                                    <h5>{{ $quotes->quotes_description }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6  p-0">
                        <div class="hero__inside__item set-bg"
                        data-setbg="{{ (!empty($animal->animal_image)) ? url('Images/Animal_Page/'.$animal->animal_image) : url('Images/admin.png') }}">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span>{{ $animal->id }}</span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li>{{ $animal->created_at }}</li>
                                        <li>{{ $animal->animal_which_country }}</li>
                                    </ul>
                                    <h5>{{ $animal->animal_name }}</h5>
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
                            data-setbg="{{ (!empty($animal->animal_image)) ? url('Images/Animal_Page/'.$animal->animal_image) : url('Images/admin.png') }}">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span>{{ $animal->id }}</span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li>Animal</li>
                                        <li>National Country</li>
                                    </ul>
                                    <h4>{{ $animal->animal_name }}</h4>
                                    <ul class="widget">
                                        <li>by <span>Admin</span></li>
                                        <li>{{ $animal->created_at }}</li>
                                        <li>{{ $animal->animal_which_country }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="hero__inside__item hero__inside__item--small set-bg"
                            data-setbg="{{asset('Frontend')}}/img/categories/Quotes.png">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span>{{ $quotes->id }}</span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        {{ $quotes->created_at }}
                                    </ul>
                                    <h5>{{ $quotes->quotes_description }}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="hero__inside__item hero__inside__item--small set-bg"
                            data-setbg="{{ (!empty($city->city_image)) ? url('Images/City_Page/'.$city->city_image) : url('Images/admin.png') }}">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span>{{ $city->id }}</span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li>{{ $city->created_at }}</li>
                                        <li>{{ $city->city_which_country }}</li>
                                    </ul>
                                    <h5>{{ $city->city_name }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="hero__inside__item set-bg"
                        data-setbg="{{ (!empty($food->food_image)) ? url('Images/Food_Page/'.$food->food_image) : url('Images/admin.png') }}">
                            <div class="hero__inside__item__text">
                                <div class="hero__inside__item--meta">
                                    <span>{{ $food->id }}</span>
                                    <p>No</p>
                                </div>
                                <div class="hero__inside__item--text">
                                    <ul class="label">
                                        <li>{{ $food->created_at }}</li>
                                        <li>{{ $food->food_which_country }}</li>
                                    </ul>
                                    <h5>{{ $food->food_name }}</h5>
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
                <div class="categories__item set-bg" data-setbg="{{asset('Frontend')}}/img/categories/Quotes.png">
                    <div class="categories__hover__text">
                        <h5>Quotes</h5>
                        <p>{{ $numberQuotes }} Data</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="{{asset('Frontend')}}/img/categories/kuala_lumpur.jpg">
                    <div class="categories__hover__text">
                        <h5>City</h5>
                        <p>{{ $numberCity }} Data</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="{{asset('Frontend')}}/img/categories/nasi_lemak.jpg">
                    <div class="categories__hover__text">
                        <h5>Food</h5>
                        <p>{{ $numberFood }} Data</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="{{asset('Frontend')}}/img/categories/tiger.webp">
                    <div class="categories__hover__text">
                        <h5>Animal</h5>
                        <p>{{ $numberAnimal }} Data</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@php
    $aboutpage = App\Models\AboutPage::find(1);
    $quotes = App\Models\QuotesPage::find(4);
    $city = App\Models\CityPage::find(7);
    $food = App\Models\FoodPage::find(1);
    $animal = App\Models\AnimalPage::find(2);
    $work = App\Models\WorkPage::find(2);
@endphp

    <div class="categories__post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="categories__post__item categories__post__item--large">
                        <div class="categories__post__item__pic set-bg"
                            data-setbg="{{ (!empty($aboutpage->about_image)) ? url('Images/About_Page/'.$aboutpage->about_image) : url('Images/admin.png') }}">
                            <div class="post__meta">
                                <h4>{{ $aboutpage->id }}</h4>
                                <span>No.Data</span>
                            </div>
                        </div>
                        <div class="categories__post__item__text">
                            <ul class="post__label--large">
                                <li>About Page</li>
                                <li>Introduction</li>
                            </ul>
                            <h3>{{ $aboutpage->about_title }}</h3>
                            <ul class="post__widget">
                                <li>by <span>Admin</span></li>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>{{ $aboutpage->about_long_description }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="categories__post__item">
                                <div class="categories__post__item__pic small__item set-bg"
                                    data-setbg="{{asset('Frontend')}}/img/categories/single-post/languages.webp">
                                    <div class="post__meta">
                                        <h4>{{ $work->id }}</h4>
                                        <span>No.Data</span>
                                    </div>
                                </div>
                                <div class="categories__post__item__text">
                                    <span class="post__label">Programming</span>
                                    <h3>{{ $work->programming_name }}</a></h3>
                                    <ul class="post__widget">
                                        <li>by <span>Admin</span></li>
                                        <li>{{ $work->created_at }}</li>
                                    </ul>
                                    <p>{{ $work->use_programming }}</p>
                                </div>
                            </div>

                            <div class="categories__post__item">
                                <div class="categories__post__item__pic set-bg"
                                    data-setbg="{{ (!empty($city->city_image)) ? url('Images/City_Page/'.$city->city_image) : url('Images/admin.png') }}">
                                    <div class="post__meta">
                                        <h4>{{ $city->id }}</h4>
                                        <span>No.Data</span>
                                    </div>
                                </div>
                                <div class="categories__post__item__text">
                                    <ul class="post__label--large">
                                        <li>City</li>
                                        <li>Travel</li>
                                    </ul>
                                    <h3>{{ $city->city_name }}</h3>
                                    <ul class="post__widget">
                                        <li>by <span>Admin</span></li>
                                        <li>{{ $city->created_at }}</li>
                                        <li>{{ $city->city_which_country }}</li>
                                    </ul>
                                    <p>{{ $city->city_description }}</p>
                                </div>
                            </div>

                            <div class="categories__post__item">
                                <div class="categories__post__item__pic smaller__large set-bg"
                                    data-setbg="{{asset('Frontend')}}/img/categories/Quotes.png">
                                    <div class="post__meta">
                                        <h4>{{ $quotes->id }}</h4>
                                        <span>No.Data</span>
                                    </div>
                                </div>
                                <div class="categories__post__item__text">
                                    <span class="post__label">Quotes Daily</span>
                                    <h3>Motivational Day</a></h3>
                                    <ul class="post__widget">
                                        <li>by <span>Admin</span></li>
                                        <li>{{ $quotes->created_at }}</li>
                                    </ul>
                                    <p>{{ $quotes->quotes_description }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="categories__post__item">
                                <div class="categories__post__item__pic smaller__large set-bg"
                                    data-setbg="{{ (!empty($food->food_image)) ? url('Images/Food_Page/'.$food->food_image) : url('Images/admin.png') }}">
                                    <div class="post__meta">
                                        <h4>{{ $food->id }}</h4>
                                        <span>No.Data</span>
                                    </div>
                                </div>
                                <div class="categories__post__item__text">
                                    <span class="post__label">Best Food</span>
                                    <h3>{{ $food->food_name }}</a>
                                    </h3>
                                    <ul class="post__widget">
                                        <li>by <span>Admin</span></li>
                                        <li>{{ $food->created_at }}</li>
                                        <li>{{ $food->food_which_country }}</li>
                                    </ul>
                                    <p>{{ $food->food_description }}</p>
                                </div>
                            </div>

                            <div class="categories__post__item__small">
                                <img src="{{asset('Frontend')}}/img/categories/categories-post/quote.png" alt="">
                                <p>{{ $quotes->quotes_description }}</p>
                                <div class="posted__by">Quotes Of The Day</div>
                            </div>

                            <div class="categories__post__item">
                                <div class="categories__post__item__pic smaller__large set-bg"
                                    data-setbg="{{ (!empty($animal->animal_image)) ? url('Images/Animal_Page/'.$animal->animal_image) : url('Images/admin.png') }}">
                                    <div class="post__meta">
                                        <h4>{{ $animal->id }}</h4>
                                        <span>No.Data</span>
                                    </div>
                                </div>
                                <div class="categories__post__item__text">
                                    <span class="post__label">National Animal</span>
                                    <h3>{{ $animal->food_name }}</h3>
                                    <ul class="post__widget">
                                        <li>by <span>Admin</span></li>
                                        <li>{{ $animal->created_at }}</li>
                                        <li>{{ $animal->animal_which_country }}</li>
                                    </ul>
                                    <p>{{ $animal->animal_description }}</p>
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
                                            <h4 class="num" data-val="{{ $numberQuotes }}">{{ $numberQuotes }}</h4>
                                            <span>No.Data</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Quotes</span>
                                            <h5>Daily Motivation Quotes</h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4 class="num" data-val="{{ $numberCity }}">{{ $numberCity }}</h4>
                                            <span>No.Data</span>
                                        </div>
                                        <div class="post__text">
                                            <span>City</span>
                                            <h5>Dream Place to Travel</h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4 class="num" data-val="{{ $numberFood }}">{{ $numberFood }}</h4>
                                            <span>No.Data</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Food</span>
                                            <h5>Best Food in The World</h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4 class="num" data-val="{{ $numberAnimal }}">{{ $numberAnimal }}</h4>
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
                                <img src="{{asset('Backend')}}/assets/images/big/2.png" alt="">
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

@endsection
