
@extends('Frontend.Body.master_front')
@section('content')

@section('title')
Exploredia | City
@endsection

<!-- Categories Section Begin -->
<section class="categories categories-grid spad">
    <div class="categories__post">
        <div class="container">
            <div class="categories__grid__post">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="breadcrumb__text">
                            <h2>Main Page: <span>City</span></h2>
                            <div class="breadcrumb__option">
                                <a href="{{ route('city.main') }}">Home</a>
                                <span>City Page</span>
                            </div>
                        </div>

                        @foreach($cityMain as $key => $item)

                        <div class="categories__list__post__item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="categories__post__item__pic set-bg">
                                    <img src="{{ (!empty($item->city_image)) ? url('Images/City_Page/'.$item->city_image) : url('Images/admin.png') }}"
                                    height="250px;" width="400;">
                                        <div class="post__meta">
                                            <h4>{{ $key+1 }}</h4>
                                            <span>No.Data</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Famous City</span>
                                        <h3>{{ $item->city_name }}</h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>{{ $item->created_at }}</li>
                                            <li>{{ $item->city_which_country }}</li>
                                        </ul>
                                        <p>{{ $item->city_description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="categories__pagination">
                                    {{ $cityMain->links('pagination::simple-tailwind') }}
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
