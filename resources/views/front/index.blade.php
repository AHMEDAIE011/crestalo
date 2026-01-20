@extends('layouts.front.app')
@section('title')
 {{ __('home.home')}}
@endsection
@section('meta_desc')
    {{ $getSetting->small_desc }}
@endsection
@push('header')
<link rel="canonical" href="{{ url()->full() }}" />
@endpush
@section('body')

@php
    $isAr = App::getLocale() === 'ar';
@endphp

<!-- Banner Section -->
<section class="banner-section">
    <div class="banner-carousel owl-carousel owl-theme">

        @foreach ($header_images as $header)
        <div class="slide-item" style="background-image: url({{ asset($header->image) }});">
            <div class="auto-container">
                <div class="content-box">

                    <h2>
                        {{ $isAr ? $header->title_ar : $header->title }}
                        <br>
                        {{ $isAr ? $header->title2_ar : $header->title2 }}
                    </h2>

                    <div class="text">
                        {{ $isAr ? $header->desc_ar : $header->desc }}
                    </div>

                    <div class="link-box">
                        <a href="{{ route('frontend.categories.posts') }}" class="theme-btn btn-style-one">
                            {{ __('home.check_art') }}
                        </a>
                    </div>

                </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="bottom-box">
        <div class="auto-container clearfix">
            <ul class="contact-info">
                <li><span>{{ __('home.phone') }} :</span> <a href="{{ $getSetting->whatsapp }}">{{ $getSetting->phone }}</a></li>
                <li><span>{{ __('home.email') }} :</span> <a href="{{ $getSetting->email }}">{{ $getSetting->email }}</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Banner Section -->

<!-- About Section -->
<section class="about-section" style="background-image: url({{ asset('assets/front/images/background/1.jpg') }});">
    <div class="auto-container">
        <div class="row no-gutters">

            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box wow fadeInLeft">
                        <h2>ABOUT <br> US</h2>
                    </div>
                    <div class="image-box">
                        <figure class="alphabet-img"><img src="{{ asset('assets/front/images/resource/alphabet-image.png') }}"></figure>
                        <figure class="image"><img src="{{ asset('assets/front/images/resource/image-1.jpg') }}"></figure>
                    </div>
                </div>
            </div>

            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="content-box">
                        <div class="title">
                            <h2>{!! __('home.about_heading') !!}</h2>
                        </div>
                        <div class="text">{{ __('home.about_desc') }}</div>
                        <div class="link-box">
                            <a href="{{ route('frontend.about') }}" class="theme-btn btn-style-one">
                                {{ __('home.about_us') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Services Section -->
<section class="services-section">
    <div class="upper-box">
        <div class="auto-container">
            <div class="sec-title text-center light">
                <span class="float-text">Specialization</span>
                <h2>{{ __('home.our_specialization') }}</h2>
            </div>
        </div>
    </div>

    <div class="services-box">
        <div class="auto-container">
            <div class="services-carousel owl-carousel owl-theme">

                @foreach ($categories as $category)
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ route('frontend.category.posts', $category->slug) }}">
                                    <img src="{{ asset($category->image) }}">
                                </a>
                            </figure>
                        </div>

                        <div class="lower-content">
                            <h3>
                                <a href="{{ route('frontend.category.posts',$category->slug)}}">
                                    {{ $isAr ? $category->name_ar : $category->name }}
                                </a>
                            </h3>

                            <div class="text">
                                {{ $isAr ? $category->desc_ar : $category->desc }}
                            </div>

                            <div class="link-box">
                                <a href="{{ route('frontend.category.posts', $category->slug) }}">
                                    {{ __('home.learn_more') }}
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->


    <!-- Fun Fact Section -->
    <section class="fun-fact-section">
        <div class="outer-box" style="background-image: url({{ asset('assets/front') }}/images/background/3.jpg);">
            <div class="auto-container">
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
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="237">0</span></div>
                                <h4 class="counter-title">Project <br>Taken</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="11">0</span>K</div>
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
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->


    <!-- Project Section -->
    <section class="projects-section">
        <div class="auto-container">
            <div class="sec-title text-right">
                <span class="float-text">Project</span>
                <h2>Our Project</h2>
            </div>
        </div>

        <div class="inner-container">
            <div class="projects-carousel owl-carousel owl-theme">
                @foreach ($posts as $post)
                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset($post->images->first()->path) }}" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="{{ route('frontend.post.show',$post->slug) }}">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="{{ asset($post->images->first()->path) }}" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="{{ route('frontend.post.show',$post->slug) }}"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>


                @endforeach
            </div>
        </div>
    </section>
    <!--End Project Section -->

<br>
    <br>
    <br>
    <br>


    <!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="outer-container clearfix">

        <!-- Title Column -->
        <div class="title-column clearfix">
            <div class="inner-column">
                <div class="sec-title">
                    <span class="float-text">Testimonial</span>
                    <h2>{{ __('home.what_clients_say') }}</h2>
                </div>

                <div class="text">
                    {{ __('home.testimonial_desc') }}
                </div>
            </div>
        </div>

        <!-- Testimonial Column -->
        <div class="testimonial-column clearfix"
             style="background-image: url({{ asset('assets/front/images/background/4.jpg') }});">

            <div class="inner-column">
                <div class="testimonial-carousel owl-carousel owl-theme">

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/front/images/resource/thumb-1.jpg') }}" alt="">
                            </div>

                            <div class="text">
                                {{ __('home.testimonial_text1') }}
                            </div>

                            <div class="info-box">
                                <h4 class="name">{{ __('home.testimonial_name1') }}</h4>
                                <span class="designation">
                                    {{ __('home.testimonial_position1') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/front/images/resource/thumb-1.jpg') }}" alt="">
                            </div>

                            <div class="text">
                                {{ __('home.testimonial_text2') }}
                            </div>

                            <div class="info-box">
                                <h4 class="name">{{ __('home.testimonial_name2') }}</h4>
                                <span class="designation">
                                    {{ __('home.testimonial_position2') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/front/images/resource/thumb-1.jpg') }}" alt="">
                            </div>

                            <div class="text">
                                {{ __('home.testimonial_text3') }}
                            </div>

                            <div class="info-box">
                                <h4 class="name">{{ __('home.testimonial_name3') }}</h4>
                                <span class="designation">
                                    {{ __('home.testimonial_position3') }}
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Testimonial Section -->


    <!-- Team Section -->
    @if ($team)
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Our Team</span>
                <h2>{{ __('home.profect_expert') }}</h2>
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
    <!--End Testimonial Section -->


    {{-- <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Blogs</span>
                <h2>News & Articals</h2>
            </div>
            <div class="row">
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('assets/front') }}/images/resource/news-1.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
                        </div>
                        <div class="caption-box">
                            <h3><a href="blog-detail.html">In Good Taste: Mark Finlay Architects & Interiors.</a></h3>
                            <ul class="info">
                                <li>06 June 2018,</li>
                                <li>John Smith</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('assets/front') }}/images/resource/news-2.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
                        </div>
                        <div class="caption-box">
                            <h3><a href="blog-detail.html">The Lexury Apartment of sepcial interiors.</a></h3>
                            <ul class="info">
                                <li>06 June 2018,</li>
                                <li>John Smith</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('assets/front') }}/images/resource/news-3.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
                        </div>
                        <div class="caption-box">
                            <h3><a href="blog-detail.html">The Business metting room interior in the rank.</a></h3>
                            <ul class="info">
                                <li>06 June 2018,</li>
                                <li>John Smith</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section --> --}}

    <!--Clients Section-->
    <section class="clients-section">
        <div class="inner-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/front') }}/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/front') }}/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/front') }}/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/front') }}/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/front') }}/images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/front') }}/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/front') }}/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/front') }}/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/front') }}/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/front') }}/images/clients/5.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->



@endsection

