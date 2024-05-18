
@extends('Frontend.Body.master_front')
@section('content')

@section('title')
Exploredia | Programming
@endsection

@php
    $workMain = App\Models\WorkPage::all();
@endphp

<!-- Single Post Section Begin -->
<section class="single-post spad">
    <div class="single-post__hero set-bg" data-setbg="{{asset('Frontend')}}/img/categories/single-post/coding.webp" ></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="single-post__title">
                    <div class="single-post__title__meta">
                        <h3 class="num" data-val="{{ $numberWork }}">{{ $numberWork }}</h3>

                    </div>
                    <div class="single-post__title__text">
                        <ul class="label">
                            <li>Work</li>
                            <li>Programming</li>
                        </ul>
                        <h4>Main Page: Coding Week Page</h4>
                        <ul class="widget">
                            <li>by Admin</li>
                            <li>Created At</li>
                            <li>Updated At</li>
                        </ul>
                    </div>
                </div>
                <div class="single-post__social__item">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
                <div class="single-post__top__text">
                    <p></p>
                </div>

                <div class="single-post__tags">
                    @foreach($workMain as $key => $item)
                    <a href="#">{{ $item->programming_name }}</a>
                    @endforeach
                </div>

                @foreach($workMain as $key => $item)

                <div class="single-post__author__profile">
                    <div class="single-post__author__profile__pic">
                        <img src="{{asset('Frontend')}}/img/categories/single-post/languages.webp" alt="">
                    </div>
                    <div class="single-post__author__profile__text">
                        <h4>{{ $item->programming_name }}</h4>
                        <p>{{ $item->use_programming }}</p>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </div>
</section>
<!-- Single Post Section End -->

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
