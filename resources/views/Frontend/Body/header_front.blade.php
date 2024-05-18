
@php
    $route= Route::current()->getName();
@endphp

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
                    <li class="{{ ($route == 'main.dashboard')? 'active' : '' }}"><a href="{{ route('main.dashboard') }}">Home</a></li>

                    <li class="{{ ($route == 'about.main')? 'active' : '' }}"><a href="{{ route('about.main') }}">About</a></li>

                    <li class="{{ ($route == 'quotes.main')? 'active' : '' }}"><a href="{{ route('quotes.main') }}">Quotes</a></li>

                    <li class="{{ ($route == 'work.main')? 'active' : '' }}"><a href="{{ route('work.main') }}">Programming</a></li>

                    <li class="{{ ($route == 'city.main')? 'active' : '' }}"><a href="{{ route('city.main') }}">City</a></li>

                    <li class="{{ ($route == 'food.main')? 'active' : '' }}" ><a href="{{ route('food.main') }}">Food</a></li>

                    <li class="{{ ($route == 'animal.main')? 'active' : '' }}"><a href="{{ route('animal.main') }}">Animal</a></li>

                    <li class="{{ ($route == 'contact.main')? 'active' : '' }}"><a href="{{ route('contact.main') }}">Contact</a></li>
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
                    <a href=""><img src="{{asset('Backend')}}/assets/images/logo.png" width="248" height="60"></a>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- Header Section End -->
