
<!-- Left Sidebar - style you can find in sidebar.scss  -->

<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('admin.dashboard') }}"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Mine Info</span></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Profile</span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('admin.profile') }}" class="sidebar-link"><span
                                    class="hide-menu"> My Profile
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('admin.calendar') }}" class="sidebar-link"><span
                            class="hide-menu"> Calendar
                        </span></a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                    aria-expanded="false"><i class="fas fa-balance-scale"></i><span
                        class="hide-menu">Main Home</span></a>
                <ul aria-expanded="false" class="collapse  first-level base-level-line">
                    <li class="sidebar-item"><a href="{{ route('about.add') }}" class="sidebar-link"><span
                                class="hide-menu"> About Page
                            </span></a>
                    </li>
                    <li class="sidebar-item"><a href="{{ route('contact.page') }}" class="sidebar-link"><span
                        class="hide-menu"> Contact
                    </span></a>
                    </li>

                </ul>
            </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Quotes</span></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i class="fas fa-chess-queen"></i><span
                            class="hide-menu">Daily Motivation</span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('quotes.page') }}" class="sidebar-link"><span
                                    class="hide-menu"> Quotes Page
                                </span></a>
                        </li>

                    </ul>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Work</span></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i class="fas fa-laptop"></i><span
                            class="hide-menu">Programming</span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('work.page') }}" class="sidebar-link"><span
                                    class="hide-menu"> Work Page
                                </span></a>
                        </li>

                    </ul>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">City</span></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i class="fas fa-plane"></i><span
                            class="hide-menu">City World</span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('city.page') }}" class="sidebar-link"><span
                                    class="hide-menu"> City Page
                                </span></a>
                        </li>

                    </ul>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Food</span></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i class="fas fa-utensils"></i><span
                            class="hide-menu">Food World</span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('food.page') }}" class="sidebar-link"><span
                                    class="hide-menu"> Food Page
                                </span></a>
                        </li>

                    </ul>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Animal</span></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i class="fas fa-paw"></i><span
                            class="hide-menu">Animal World</span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('animal.page') }}" class="sidebar-link"><span
                                    class="hide-menu"> Animal Page
                                </span></a>
                        </li>

                    </ul>
                </li>

                <li class="list-divider"></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

<!-- End Left Sidebar - style you can find in sidebar.scss  -->
