<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-one">
        <div class="auto-container">
            <div class="header-lower">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="index-2.html"><img src="{{ asset('assets/front') }}/images/logo-.png"
                                    alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md ">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=" {{ request()->routeIs('frontend.index') ? 'current' : '' }}"><a
                                            href="{{ route('frontend.index') }}">Home</a></li>
                                    {{-- 
                                    <li class="current dropdown"><a href="#">Home</a>
                                        <ul>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header Style One</a></li>
                                                    <li><a href="index-3.html">Header Style Two</a></li>
                                                    <li><a href="index-4.html">Header Style Three</a></li>
                                                    <li><a href="index-5.html">Header Style Four</a></li>
                                                    <li><a href="index-6.html">Header Style Five</a></li>
                                                    <li><a href="index-7.html">Header Style Six</a></li>
                                                    <li><a href="about.html">Header Style Seven</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index-2.html">Home page 01</a></li>
                                            <li><a href="index-3.html">Home page 02</a></li>
                                            <li><a href="index-4.html">Home page 03</a></li>
                                            <li><a href="index-5.html">Home page 04</a></li>
                                            <li><a href="index-6.html">Home page 05</a></li>
                                            <li><a href="index-7.html">Home page 06</a></li>
                                        </ul>
                                    </li> --}}
                                    <li
                                        class="dropdown
                                     {{ request()->routeIs('frontend.about') ||
                                     request()->routeIs('frontend.faq') ||
                                     request()->routeIs('frontend.team')
                                         ? 'current'
                                         : '' }}">
                                        <a href="#">About</a>
                                        <ul>
                                            @php
                                                $isAbout = request()->routeIs('frontend.about');
                                                $isFaq = request()->routeIs('frontend.faq');
                                                $isTeam = request()->routeIs('frontend.team');
                                            @endphp
                                            <li><a href="{{ route('frontend.about') }}"
                                                    class="{{ $isAbout ? 'current' : '' }}">About Us</a></li>
                                            <li><a href="{{ route('frontend.faq') }}"
                                                    class="{{ $isFaq ? 'current' : '' }}">FAQ's</a></li>
                                            <li><a href="{{ route('frontend.team') }}"
                                                    class="{{ $isTeam ? 'current' : '' }}">Our Team</a></li>

                                        </ul>
                                    </li>
                                    <li
                                        class="dropdown {{ request()->routeIs('frontend.category.posts') || request()->routeIs('frontend.categories.posts') ? 'current' : '' }}">
                                        <a href="#">Services</a>
                                        <ul>
                                            {{-- All Services --}}
                                            @php
                                                $isAllServicesActive = request()->routeIs('frontend.categories.posts');
                                            @endphp
                                            <li>
                                                <a href="{{ route('frontend.categories.posts') }}"
                                                    class="{{ $isAllServicesActive ? 'current' : '' }}">
                                                    All Services
                                                </a>
                                            </li>

                                            @foreach ($oneCategory as $Category)
                                                <li class="dropdown">
                                                    <a href="service-detail.html">{{ $Category->name }}</a>
                                                    <ul>
                                                        @foreach ($Category->categories as $subCategory)
                                                            @php
                                                                // التحقق إذا كانت الصفحة الحالية هي صفحة نفس الـ subCategory
                                                                $iscurrent =
                                                                    request()->url() ===
                                                                    route(
                                                                        'frontend.category.posts',
                                                                        $subCategory->slug,
                                                                    );
                                                            @endphp

                                                            @if (App::getLocale() == 'ar')
                                                                <li>
                                                                    <a href="{{ route('frontend.category.posts', $subCategory->slug) }}"
                                                                        title="{{ $subCategory->name }}"
                                                                        class="{{ $iscurrent ? 'current' : '' }}">
                                                                        {{ $subCategory->name_ar }}
                                                                    </a>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <a href="{{ route('frontend.category.posts', $subCategory->slug) }}"
                                                                        title="{{ $subCategory->name }}"
                                                                        class="{{ $iscurrent ? 'current' : '' }}">
                                                                        {{ $subCategory->name }}
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    {{-- <li class="dropdown"><a href="#">Projects</a>
                                        <ul>
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="project-detail.html">Project Detail</a></li>
                                        </ul>
                                    </li> --}}
                                    {{--                                    
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-single.html">Product Details</a></li>
                                            <li><a href="shoping-cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="login.html">Registration Page</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{ route('frontend.conact.index') }}">Contact</a></li>
                                    <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                        <div class="mega-menu">
                                            <div class="mega-menu-bar row clearfix">
                                                <div class="column col-lg-3 col-md-3 col-sm-12">
                                                    <h3>About</h3>
                                                    <ul>
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="faq.html">FAQ's</a></li>
                                                        <li><a href="team.html">Our Team</a></li>
                                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-lg-3 col-md-3 col-sm-12">
                                                    <h3>Services</h3>
                                                    <ul>
                                                        <li><a href="services.html">All Services</a></li>
                                                        <li><a href="service-detail.html">Commercial Design</a></li>
                                                        <li><a href="service-detail.html">Landescape Design</a></li>
                                                        <li><a href="service-detail.html">Complete Interior</a></li>
                                                        <li><a href="service-detail.html">Service Detail</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-lg-3 col-md-3 col-sm-12">
                                                    <h3>Projects</h3>
                                                    <ul>
                                                        <li><a href="projects.html">Projects</a></li>
                                                        <li><a href="projects.html">Commercial Projects</a></li>
                                                        <li><a href="projects.html">Landescape Projects</a></li>
                                                        <li><a href="project-detail.html">Project Detail</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-lg-3 col-md-3 col-sm-12">
                                                    <h3>Blog</h3>
                                                    <ul>
                                                        <li><a href="blog.html">Blog Grid</a></li>
                                                        <li><a href="blog-classic.html">Blog Classic</a></li>
                                                        <li><a href="blog-detail.html">Blog Detail 01</a></li>
                                                        <li><a href="blog-detail-2.html">Blog Detail 01</a></li>
                                                        <li><a href="error-page.html">Error Page</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                     @auth
                                     
                                    <li class="dropdown"><a href="#">Account</a>
                                        <ul>
                                            <li><a href="{{ route('frontend.dashboard.profile') }}">Dashboard</a></li>
                                            <li>
  <a href="javascript:void(0)"
                              onclick="if(confirm('Do you want to logout')){document.getElementById('formLogout').submit()} return false">Logout</a> 
                           <form id="formLogout" action="{{ route('logout') }}" method="post" style="display: none;"> 
                              @csrf
                          </form>
                                                                    </li>
                                        </ul>
                                    </li>
                        
                      @endauth
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                        <!-- Outer Box-->
                        <div class="outer-box">
                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                            class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="{{ route('frontend.search') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" name="search" value="{{ $keyword ?? '' }}" placeholder="Search Here"
                                                            required>
                                                        <button type="submit" class="search-btn"><span
                                                                class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->
