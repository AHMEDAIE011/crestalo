@extends('layouts.front.app')

@section('title')
    Our Team
@endsection

@section('body')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/front') }}/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Our Team</h1>
                    <span class="title">{{ config('app.name') }}</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li>Our Team</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

        <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
           
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
    <!--End Team Section -->
<br>
<br>
<br>

@endsection
