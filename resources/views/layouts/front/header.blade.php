@php
    $isAr = App::getLocale() === 'ar';
@endphp

<!-- Main Header-->
<header class="main-header header-style-one">
    <div class="auto-container">
        <div class="header-lower">
            <div class="main-box clearfix">

                <!-- Logo -->
                <div class="logo-box">
                    <div class="logo">
                        <a href="{{ route('frontend.index') }}">
                            <img src="{{ asset($getSetting->logo ) }}" alt="" title="">
                        </a>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="nav-outer clearfix">
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">

                                <!-- Home -->
                                <li class="{{ request()->routeIs('frontend.index') ? 'current' : '' }}">
                                    <a href="{{ route('frontend.index') }}">{{ __('home.home') }}</a>
                                </li>

                                <!-- About Dropdown -->
                                <li class="dropdown {{ request()->routeIs('frontend.about') || request()->routeIs('frontend.faq') || request()->routeIs('frontend.team') ? 'current' : '' }}">
                                    <a href="#">{{ __('home.about') }}</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('frontend.about') }}"
                                               class="{{ request()->routeIs('frontend.about') ? 'current' : '' }}">
                                                {{ __('home.about_us') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('frontend.faq') }}"
                                               class="{{ request()->routeIs('frontend.faq') ? 'current' : '' }}">
                                                {{ __('home.faqs') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('frontend.team') }}"
                                               class="{{ request()->routeIs('frontend.team') ? 'current' : '' }}">
                                                {{ __('home.our_team') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Services Dropdown -->
                                <li class="dropdown {{ request()->routeIs('frontend.category.posts') || request()->routeIs('frontend.categories.posts') ? 'current' : '' }}">
                                    <a href="#">{{ __('home.services') }}</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('frontend.categories.posts') }}"
                                               class="{{ request()->routeIs('frontend.categories.posts') ? 'current' : '' }}">
                                                {{ __('home.all_services') }}
                                            </a>
                                        </li>

                                        @foreach ($oneCategory as $Category)
                                            <li class="dropdown">
                                                <a href="#">
                                                    {{ $isAr ? $Category->name_ar : $Category->name }}
                                                </a>
                                                <ul>
                                                    @foreach ($Category->categories as $subCategory)
                                                        <li>
                                                            <a href="{{ route('frontend.category.posts', $subCategory->slug) }}"
                                                               class="{{ request()->url() === route('frontend.category.posts', $subCategory->slug) ? 'current' : '' }}">
                                                                {{ $isAr ? $subCategory->name_ar : $subCategory->name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <!-- Pages / Mega Menu -->
                                <li class="dropdown has-mega-menu">
                                    <a href="#">{{ __('home.pages') }}</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu-bar row clearfix">

                                            <!-- About Pages -->
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>{{ __('home.about') }}</h3>
                                                <ul>
                                                    <li><a href="{{ route('frontend.about') }}">{{ __('home.about_us') }}</a></li>
                                                    <li><a href="{{ route('frontend.faq') }}">{{ __('home.faqs') }}</a></li>
                                                    <li><a href="{{ route('frontend.team') }}">{{ __('home.our_team') }}</a></li>
                                                </ul>
                                            </div>

                                            <!-- Services Pages -->
                                            @forelse ($oneCategory as $category)
                                                <div class="column col-lg-3 col-md-3 col-sm-12">
                                                    <h3>{{ $isAr ? $category->name_ar : $category->name }}</h3>
                                                    <ul>
                                                        @foreach ($category->categories as $subCategory)
                                                            <li>
                                                                <a href="{{ route('frontend.category.posts', $subCategory->slug) }}">
                                                                    {{ $isAr ? $subCategory->name_ar : $subCategory->name }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @empty
                                                <div class="column col-lg-3 col-md-3 col-sm-12">
                                                    <h3>{{ __('home.services') }}</h3>
                                                    <ul>
                                                        <li>{{ __('home.services_empty') }}</li>
                                                    </ul>
                                                </div>
                                            @endforelse

                                        </div>
                                    </div>
                                </li>

                                <!-- Contact -->
                                <li>
                                    <a href="{{ route('frontend.conact.index') }}">{{ __('home.contact') }}</a>
                                </li>

                                <!-- Account -->
                                @auth
                                <li class="dropdown">
                                    <a href="#">{{ __('home.account') }}</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('frontend.dashboard.profile') }}">{{ __('home.dashboard') }}</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"
                                               onclick="if(confirm('{{ __('home.logout_confirm') }}')){document.getElementById('formLogout').submit()} return false">
                                                {{ __('home.logout') }}
                                            </a>
                                        </li>
                                    </ul>
                                    <form id="formLogout" action="{{ route('logout') }}" method="post" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                @endauth

                            </ul>
                        </div>
                    </nav>

                    <!-- Search Box -->
                    <div class="outer-box">
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fa fa-search"></span>
                                </button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="{{ route('frontend.search') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="search" value="{{ $keyword ?? '' }}"
                                                           placeholder="{{ __('home.search_here') }}" required>
                                                    <button type="submit" class="search-btn">
                                                        <span class="fa fa-search"></span>
                                                    </button>
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
