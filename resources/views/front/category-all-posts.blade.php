@extends('layouts.front.app')
@section('title')
All Services 
@endsection
@push('header')
<link rel="canonical" href="{{ url()->full() }}" />
@endpush


@section('body')


    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/front') }}/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Project Detail</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li>Project Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <!-- Specialize Section -->
    <section class="specialize-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Services</span>
                <h2>Our Specialization</h2>
            </div>

            <div class="services-carousel-two owl-carousel owl-theme">
               
@forelse ($categories as $category)
     <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="{{ route('frontend.category.posts', $category->slug) }}"><img src="{{ asset($category->image) }}" alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="{{ route('frontend.category.posts', $category->slug) }}">{{ $category->name }}</a></h3>
                            <div class="link-box"><a href="{{ route('frontend.category.posts', $category->slug) }}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>
@empty
    
@endforelse
            </div>
        </div>
    </section>
    <!-- End Specialize Section -->

     <!-- Fun Fact And Features -->
    <section class="fun-fact-and-features"  style="background-image: url({{ asset('assets/front') }}/images/background/3.jpg);">
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

                <!-- Features -->
                <div class="features">
                    <div class="row">
                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-decorating"></span></div>
                                <h3><a href="#">Perfect Design</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                                {{-- <div class="link-box"><a href="#">Read More</a></div> --}}
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-plan"></span></div>
                                <h3><a href="#">Carefully Planned</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                                {{-- <div class="link-box"><a href="#">Read More</a></div> --}}
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-sketch-3"></span></div>
                                <h3><a href="#">Smartly Execute</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                                {{-- <div class="link-box"><a href="#">Read More</a></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="inner-container">
            <div class="sec-title">
                <span class="float-text">informaer</span>
                <h2>Contact Us</h2>
            </div>

            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h4>Need Support</h4>
                        <ul class="contact-info">
                            <li>Complax interprice company, 882 <br> street Latrobe, PA 15786</li>
                            <li>+88 169 787 5256 <br>+88 165 358 5678</li>
                            <li><a href="#">support@contra.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Contact Form -->
                        <div class="contact-form">
                        <form action="{{ route('frontend.conact.store') }}" method="POST">
                              @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="name" placeholder="Name" required>
                                   <strong class="text-danger">@error('name')
                                        {{ $message }}
                                    @enderror</strong>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                   <strong class="text-danger">@error('phone')
                                        {{ $message }}
                                    @enderror</strong>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="title" placeholder="Company" required>
                                   <strong class="text-danger">@error('title')
                                        {{ $message }}
                                    @enderror</strong>
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="email" name="email" placeholder="Email" required>
                                   <strong class="text-danger">@error('email')
                                        {{ $message }}
                                    @enderror</strong>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12">
                                        <textarea name="body" placeholder="Massage"></textarea>
                                        <strong class="text-danger">@error('body')
                                        {{ $message }}
                                    @enderror</strong>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="theme-btn btn-style-three" type="submit">Submit</button>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->

@endsection

