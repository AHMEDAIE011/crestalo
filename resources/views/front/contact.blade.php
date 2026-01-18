@extends('layouts.front.app')
@section('title')
    Contact-Us
@endsection
@section('body')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/front') }}/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Contact Us</h1>
                    <span class="title">{{ config('app.name') }}</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row">
                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text">informaer</span>
                            <h2>{{  __('alll-cate.contact_us') }}</h2>
                        </div>

                        <div class="contact-form">
                            <form  action="{{ route('frontend.conact.store') }}" method="post"  >
                                <div class="row">
                                      @csrf
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
  <input type="text" name="name" placeholder="{{  __('alll-cate.name') }}" required>
                                   <strong class="text-danger">@error('name')
                                        {{ $message }}
                                    @enderror</strong>                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
  <input type="text" name="phone" placeholder="{{  __('alll-cate.phone') }}" required>
                                   <strong class="text-danger">@error('phone')
                                        {{ $message }}
                                    @enderror</strong>                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
<input type="text" name="title" placeholder="{{  __('alll-cate.company') }}" required>
                                   <strong class="text-danger">@error('title')
                                        {{ $message }}
                                    @enderror</strong>                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
  <input type="email" name="email" placeholder="{{  __('alll-cate.email') }}" required>
                                   <strong class="text-danger">@error('email')
                                        {{ $message }}
                                    @enderror</strong>                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
     <textarea name="body" placeholder="{{  __('alll-cate.message') }}"></textarea>
                                        <strong class="text-danger">@error('body')
                                        {{ $message }}
                                    @enderror</strong>                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-three" type="submit">{{  __('alll-cate.submit') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="contact-info">
                            <div class="row">
                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>Location</h4>
                                        <p>{{ $getSetting->street }} , {{ $getSetting->city }} <br>
                               {{ $getSetting->country }}</p>
                                    </div>
                                </div>

                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>Call Us</h4>
                                        <p>+{{ $getSetting->phone }}</p>
                                    </div>

                                </div>

                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>Email</h4>
                                        <p><a href="{{ $getSetting->email }}">{{ $getSetting->email }}</a></p>
                                      
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<div class="map-column col-lg-5 col-md-12 col-sm-12">
    <div class="inner-column">
        <div class="map-outer">
            <a href="https://www.google.com/maps/search/?api=1&query=R7PX%2B5FJ%20Helwan%20El%20Balad%20Cairo" target="_blank">
                <div class="map-canvas"
                data-zoom="16"
                data-lat="29.8356466"
                data-lng="31.298987"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="اثر للأثاث - حلوان"
                    data-icon-path="{{ asset('assets/front/images/icons/map-marker.png') }}"
                    data-content="Cairo, Egypt<br><a href='mailto:info@ather.com'>info@ather.com</a>"
                >
                </div>
            </a>
        </div>
    </div>
</div>

            </div>
        </div>
    </section>
    <!--End Contact Page Section -->


    <!--Clients Section-->
    <section class="clients-section style-two">
        <div class="auto-container">
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
<br>
<br>
<br>

@endsection
@push('js')
    
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="{{ asset('assets/front') }}/js/map-script.js"></script>
<!--End Google Map APi-->
<script src="{{ asset('assets/front') }}/js/validate.js"></script>
@endpush