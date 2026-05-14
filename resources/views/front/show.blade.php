@extends('layouts.front.app')
@section('title')
    Show {{ $post->title }}
@endsection
@push('header')
    <link rel="canonical" href="{{ url()->full() }}" />
@endpush
@section('meta_desc')
    {{ $post->small_desc }}
@endsection

@php
    $isAr = App::getLocale() === 'ar';
@endphp


@section('body')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/front') }}/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Project Detail</h1>
                    
                    <span class="title">{{ $isAr ? $post->title  : $post->title_ar }}</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li>Project Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Project Detail Section-->
    <section class="project-details-section">
        <div class="project-detail">
            <div class="auto-container">
                <!-- Upper Box -->
                <div class="upper-box">
                    <!--Project Tabs-->
                    <div class="project-tabs tabs-box clearfix">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            @foreach ($post->images as $index => $image)
                                <li data-tab="#tab-{{ $index + 1 }}"
                                    class="tab-btn {{ $loop->first ? 'active-btn' : '' }}">
                                    <img src="{{ asset($image->path) }}" alt="{{ $post->title }}">
                                </li>
                            @endforeach
                        </ul>

                        <!--Tabs Container-->
                        <div class="tabs-content">
                            <!--Tab / Active Tab-->
                            @foreach ($post->images as $index => $image)
                                <div class="tab {{ $loop->first ? 'active-tab' : '' }}" id="tab-{{ $index + 1 }}">
                                    <figure class="image">
                                        <a href="{{ asset( $image->path) }}" class="lightbox-image"
                                            data-fancybox="images">
                                            <img src="{{ asset( $image->path) }}" alt="{{ $post->title }}">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!--Lower Content-->
                <div class="lower-content">
                    <div class="row clearfix">
                        <!--Content Column-->
                        <div class="content-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column">
                                {!! $isAr ? $post->desc : $post->desc_ar !!}
                            </div>
                        </div>

                        <!--Info Column-->
                        <div class="info-column col-lg-4 col-md-12 col-sm-12 ">
                            <div class="inner-column wow fadeInRight">
                                {!! $isAr ? $post->small_desc  : $post->small_desc_ar !!}
                                <!--Help Box-->
                                <div class="help-box-two">
                                    <div class="inner">
                                        <span class="title">Quick Contact</span>
                                        <h2>Get Solution</h2>
                                        <div class="text">Contact us at the Interior office nearest to you or submit a
                                            business inquiry online.</div>
                                        <a class="theme-btn btn-style-two" href="{{ route('frontend.conact.index') }}">Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio Details-->
@endsection
