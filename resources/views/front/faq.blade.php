@extends('layouts.front.app')

@section('title')
    FAQ's
@endsection

@section('body')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/front') }}/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Faquality Ask Question</h1>
                    <span class="title">{{ config('app.name') }}</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li>FAQ's</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="auto-container">
            <div class="row">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('assets/front') }}/images/resource/faq-img.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>

                <div class="accordion-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text">some FAQ’s</span>
                            <h2>Frequality Asked Questions</h2>
                        </div>
                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Do you do the design and the execution yourselves? <div
                                        class="icon fa fa-plus-square"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">We give a Contra for a Period of 5 years and promise to rectify
                                            any fault arising out of faulty workmanship at our cost. However the guarantee
                                            does not hold good for mishandling and breakable items.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active">Do you give Contra and After sales service? <div
                                        class="icon fa fa-plus-square"></div>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">We give a Contra for a Period of 5 years and promise to rectify
                                            any fault arising out of faulty workmanship at our cost. However the guarantee
                                            does not hold good for mishandling and breakable items.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Will you be able to give a quote, if given the floor plan? <div
                                        class="icon fa fa-plus-square"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">We give a Contra for a Period of 5 years and promise to rectify
                                            any fault arising out of faulty workmanship at our cost. However the guarantee
                                            does not hold good for mishandling and breakable items.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">At what stage an interior designing work could be started?<div
                                        class="icon fa fa-plus-square"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">We give a Contra for a Period of 5 years and promise to rectify
                                            any fault arising out of faulty workmanship at our cost. However the guarantee
                                            does not hold good for mishandling and breakable items.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Do you charge for giving a Proposal?<div
                                        class="icon fa fa-plus-square"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">We give a Contra for a Period of 5 years and promise to rectify
                                            any fault arising out of faulty workmanship at our cost. However the guarantee
                                            does not hold good for mishandling and breakable items.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End FAQ Section -->

    <!-- Faq Form Section -->
    <section class="faq-form-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Question</span>
                <h2>Your Question Tell</h2>
            </div>


            <!-- Faq Form -->
            <div class="faq-form">
                <form method="post" action="{{ route('frontend.conact.store') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-4 col-md-12">
                            <input type="text" name="name" placeholder="Name" required>
                            <strong class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </strong>
                        </div>
                        <div class="form-group col-lg-4 col-md-12">
                            <input type="text" name="phone" placeholder="Phone" required>
                            <strong class="text-danger">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </strong>
                        </div>
                        <div class="form-group col-lg-4 col-md-12">

                            <input type="email" name="email" placeholder="Email" required>
                            <strong class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </strong>
                        </div>

                        <div class="form-group col-lg-12 col-md-12">
                            <textarea name="body" placeholder="Massage"></textarea>
                            <strong class="text-danger">
                                @error('body')
                                    {{ $message }}
                                @enderror
                            </strong>
                        </div>

                        <div class="form-group col-lg-12 col-md-12">
                            <button class="theme-btn btn-style-three" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Contact Section -->
    <br>
    <br>
    <br>
@endsection
