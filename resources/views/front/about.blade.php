    @extends('layouts.front.app')

    @section('title')
ABOUT US
    @endsection

    @section('body')
        <!--Page Title-->
        <section class="page-title" style="background-image:url({{ asset('assets/front') }}/images/background/10.jpg);">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>ABOUT US</h1>
                        <span class="title">{{ __('about.about_subtitle') }}</span>

                    </div>
                    <ul class="bread-crumb clearfix"><li><a href="{{ route('frontend.index') }}">Home</a></li>
<li>About</li>

                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!-- About Section -->
        <section class="about-section" style="background-image: url({{ asset('assets/front') }}/images/background/1.jpg);">
            <div class="auto-container">
                <div class="row no-gutters">
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                                <h2>    {{ __('about.about_us1') }}<br>{{ __('about.about_us2') }} </h2>
                            </div>
                            <div class="image-box wow fadeInRight" data-wow-delay='600ms'>
                                <figure class="alphabet-img"><img
                                        src="{{ asset('assets/front') }}/images/resource/alphabet-image.png" alt="">
                                </figure>
                                <figure class="image"><img src="{{ asset('assets/front') }}/images/resource/image-1.jpg"
                                        alt=""></figure>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft">
                            <div class="content-box">
                                <div class="title">
                                    <h2>{{ __('about.complexity_title') }}</h2>
                                </div>
                                <div class="text">{{ __('home.about_desc') }}</div>
                                <div class="link-box"><a href="{{ route('frontend.conact.index') }}" class="theme-btn btn-style-one">{{ __('about.about_contact') }}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About Section -->

        <!-- Fun Fact And Features -->
        <section class="fun-fact-and-features alternate"
            style="background-image: url({{ asset('assets/front') }}/images/background/3.jpg);">
            <div class="outer-box">
                <div class="auto-container">
                    <!-- Fact Counter -->
                    <div class="fact-counter">
                        <div class="row">
                            <!--Column-->
                            <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="count-box">
                                    <div class="count"><span class="count-text" data-speed="5000" data-stop="14">0</span></div>
                                    <h4 class="counter-title">Years of <br>Experience</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                                <div class="count-box">
                                    <div class="count"><span class="count-text" data-speed="5000" data-stop="237">0</span>
                                    </div>
                                    <h4 class="counter-title">Project <br>Taken</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                                <div class="count-box">
                                    <div class="count"><span class="count-text" data-speed="5000" data-stop="11">0</span>K
                                    </div>
                                    <h4 class="counter-title">Twitter <br> Follower</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                                <div class="count-box">
                                    <div class="count"><span class="count-text" data-speed="5000" data-stop="12">0</span></div>
                                    <h4 class="counter-title">Awards<br>won</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="features">
                        <div class="row">
                            <!-- Feature Block -->
                            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-decorating"></span></div>
                                    <h3><a href="{{ route('frontend.categories.posts') }}">{{ __('about.perfect_design') }}</a></h3>
                                    <div class="text">{{ __('about.feature_desc') }}</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-plan"></span></div>
                                    <h3><a href="{{ route('frontend.categories.posts') }}">{{ __('about.carefully_planned') }}</a></h3>
                                    <div class="text">{{ __('about.feature_desc2') }}</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-sketch-3"></span></div>
                                    <h3><a href="{{ route('frontend.categories.posts') }}">{{ __('about.smart_execute') }}</a></h3>
                                    <div class="text">{{ __('about.feature_desc3') }}</div>
                                    {{-- <div class="link-box"><a href="{{ route('frontend.categories.posts') }}">Read More</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Fun Fact Section -->

        <!-- Testimonial Section Two-->
        <section class="testimonial-section-two">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="float-text">Testimonial</span>
                    <h2>{{ __('home.what_clients_say') }}</h2>
                </div>

                <div class="testimonial-carousel-two owl-carousel owl-theme">
                    <!-- Testimonial block two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="text">{{ __('home.testimonial_text1') }}</div>
                            <div class="info-box">
                                <div class="thumb"><img src="{{ asset('assets/front') }}/images/resource/thumb-2.jpg"
                                        alt=""></div>
                                <h5 class="name">{{ __('home.testimonial_name1') }}</h5>
                                <span class="date">July 28 - 2018</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial block two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="text">{{ __('home.testimonial_text2') }}</div>
                            <div class="info-box">
                                <div class="thumb"><img src="{{ asset('assets/front') }}/images/resource/thumb-3.jpg"
                                        alt=""></div>
                                <h5 class="name">{{ __('home.testimonial_name2') }}</h5>
                                <span class="date">July 28 - 2018</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial block two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="text">{{ __('home.testimonial_text3') }}</div>
                            <div class="info-box">
                                <div class="thumb"><img src="{{ asset('assets/front') }}/images/resource/team-2.jpg"
                                        alt=""></div>
                                <h5 class="name">{{ __('home.testimonial_name3') }}</h5>
                                <span class="date">July 28 - 2018</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial block two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="text">{{ __('home.testimonial_text4') }}</div>
                            <div class="info-box">
                                <div class="thumb"><img src="{{ asset('assets/front') }}/images/resource/team-3.jpg"
                                        alt=""></div>
                                <h5 class="name">{{ __('home.testimonial_name4') }}</h5>
                                <span class="date">July 28 - 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial Section Two-->

        <!--Clients Section-->
        <section class="clients-section style-two">
            <div class="auto-container">
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ asset('assets/front') }}/images/clients/1.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ asset('assets/front') }}/images/clients/2.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ asset('assets/front') }}/images/clients/3.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ asset('assets/front') }}/images/clients/4.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ asset('assets/front') }}/images/clients/5.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ asset('assets/front') }}/images/clients/1.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ asset('assets/front') }}/images/clients/2.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ asset('assets/front') }}/images/clients/3.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ asset('assets/front') }}/images/clients/4.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ asset('assets/front') }}/images/clients/5.png" alt=""></a></figure>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Clients Section-->

        <!-- Process Section -->
        <section class="process-section" style="background-image: url({{ asset('assets/front') }}/images/background/8.jpg);">
            <div class="auto-container">
                <div class="sec-title light">
                    <span class="float-text">HOW WE WORK</span>
                    <h2>{{ __('about.title') }}</h2>
                </div>
                <div class="row">
                    <!-- Process Block -->
                    <div class="process-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <span class="count">01</span>
                            <h4><a href="{{ route('frontend.categories.posts') }}">{{ __('about.step1_title') }}</a></h4>
                            <div class="text">{{ __('about.step1_desc') }}
                            </div>
                            <div class="link-box"><a href="{{ route('frontend.categories.posts') }}">Read More</a></div>
                        </div>
                    </div>

                    <!-- Process Block -->
                    <div class="process-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <span class="count">02</span>
                            <h4><a href="{{ route('frontend.categories.posts') }}">{{ __('about.step2_title') }}</a></h4>
                            <div class="text">{{ __('about.step2_desc') }}
                            </div>
                            <div class="link-box"><a href="{{ route('frontend.categories.posts') }}">Read More</a></div>
                        </div>
                    </div>

                    <!-- Process Block -->
                    <div class="process-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <span class="count">03</span>
                            <h4><a href="{{ route('frontend.categories.posts') }}">{{ __('about.step3_title') }}</a></h4>
                            <div class="text">{{ __('about.step3_desc') }}
                            </div>
                            <div class="link-box"><a href="{{ route('frontend.categories.posts') }}">Read More</a></div>
                        </div>
                    </div>

                    <!-- Process Block -->
                    <div class="process-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <span class="count">04</span>
                            <h4><a href="{{ route('frontend.categories.posts') }}">{{ __('about.step4_title') }}</a></h4>
                            <div class="text">{{ __('about.step4_desc') }}
                            </div>
                            <div class="link-box"><a href="{{ route('frontend.categories.posts') }}">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Process Section -->

        <!-- Team Section -->
        @if ($team)
        <section class="team-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="title">Our Team</span>
                    <h2>Profect Expert</h2>
                </div>

                <div class="row clearfix">
                    @foreach ($team as $user)
                    @php
                        $user->whatsapp = "https://wa.me/".$user->phone;
                    @endphp
                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="{{ $user->facebook }}"><img src="{{ asset($user->image) }}" alt=""></a></div>
                                <ul class="social-links">
                                    <li><a href="{{ $user->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $user->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{ $user->email }}"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="{{ $user->insagram }}"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="{{ $user->whatsapp }}"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                                <h3 class="name"><a href="{{ $user->facebook }}">{{ $user->name }}</a></h3>
                            </div>
                            <span class="designation">{{ $user->jop }}</span>
                        </div>
                    </div>

    @endforeach
                </div>
            </div>
        </section>
        @else
            <br>
            <br>
            <br>
        @endif
        <!--End Team Section -->

        <!-- Offer Section -->
        <section class="offer-section" style="background-image: url({{ asset('assets/front') }}/images/background/6.jpg);">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <span class="title">Contact Me </span>
                            <h2><span>How to contact </span> <br>All you have to do </h2>
                            <span class="discount">NOW</span>
                            <div class="text">Fill out the form to submit <br> We will contact you</div>
                        </div>
                    </div>

                    <div class="form-column order-last col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="discount-form">
                                <!--Comment Form-->
                                <form method="post" action="{{ route('frontend.conact.store') }}">
                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Name" required>
                                            <strong class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </strong>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">

                                            <input type="email" name="email" placeholder="Email" required>
                                            <strong class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </strong>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone" required>
                                            <strong class="text-danger">
                                                @error('phone')
                                                    {{ $message }}
                                                @enderror
                                            </strong>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="body" placeholder="Massage"></textarea>
                                            <strong class="text-danger">
                                                @error('body')
                                                    {{ $message }}
                                                @enderror
                                            </strong>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                            <button class="theme-btn btn-style-one" type="submit">send Now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Offer Section -->

        <!-- Video Section -->
        <section class="video-section style-two">
            <div class="outer-box">
                <div class="auto-container">
                    <div class="row">
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="sec-title">
                                    <span class="float-text">See Video</span>
                                    <h2>{{ __('about.campaign_video_title') }}</h2>
                                </div>
                                <span class="title">{{ __('about.campaign_video_subtitle') }}</span>
                                <div class="text">{{ __('about.campaign_video_desc') }}</div>
                            </div>
                        </div>

                        <!-- Video Column -->
                        <div class="video-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="video-box">
                                    <figure class="image"><img
                                            src="{{ asset('assets/front') }}/images/resource/video-img.jpg" alt="">
                                        <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link"
                                            data-fancybox="gallery" data-caption=""><span class="icon fa fa-play"></span></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Video Section -->
    @endsection
