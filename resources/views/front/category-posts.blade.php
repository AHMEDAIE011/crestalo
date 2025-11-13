@extends('layouts.front.app')
@section('title')
    Category {{  $category->name}}
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
                    <h1>News & Artical</h1>
                    <span class="title">{{  $category->desc}}</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li>{{  $category->name}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="auto-container">
            <div class="row">
              

@forelse ($posts as $post)
    
      <!-- News Block -->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset($post->images->first()->path) }}" alt=""></figure>
                            <div class="overlay-box"><a href="{{ route('frontend.post.show' , $post->slug) }}"><i class="fa fa-link"></i></a></div>
                        </div>
                        <div class="caption-box">
                            <div class="inner">
                                <h3><a href="{{ route('frontend.post.show' , $post->slug) }}">{{ $post->title }}</a></h3>
                                <ul class="info">
                                    <li>06 June 2018,</li>
                                    <li><a href="blog-detail-2.html">John Smith</a></li>
                                    <li><a href="blog-detail-2.html">3 Commets</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
@empty
     <div class="col-lg-12 alert-info">
                                Category is empty
                            </div>
@endforelse
                   {{ $posts->links('vendor.pagination.custom') }}

    

<!--Post Share Options-->
            {{-- <div class="styled-pagination">
                <ul class="clearfix">
                    <li class="prev-post"><a href="#"><span class="fa fa-long-arrow-left"></span> Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next-post"><a href="#"> Next <span class="fa fa-long-arrow-right"></span> </a></li>
                </ul>
            </div> --}}
        </div>
    </section>
    <!--End Blog Section -->

@endsection

