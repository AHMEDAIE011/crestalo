@php
    $isAr = App::getLocale() === 'ar';
    $RecentPosts = $posts->take(2);
    $lightbox_image = $posts->take(6);
@endphp

<!-- Main Footer -->
<footer class="main-footer" style="background-image: url({{ asset('images/background/5.jpg') }});">
    <div class="auto-container">
        <div class="widgets-section">
            <div class="row">

                <!-- Left Big Column -->
                <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">

                        <!-- About Widget -->
                        <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <a href="{{ route('frontend.index') }}">
                                        <img src="{{ asset('assets/front/images/logoss3.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="widget-content">
                                    <div class="text">
                                        {{ $isAr ? $getSetting->small_desc_ar : $getSetting->small_desc }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Posts -->
                        <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget recent-posts">
                                <h2 class="widget-title">{{ __('footer.recent_posts') }}</h2>

                                <div class="widget-content">
                                    @foreach ($RecentPosts as $post)
                                    <div class="post">
                                        <div class="thumb">
                                            <a href="{{ route('frontend.post.show', $post->slug) }}">
                                                <img src="{{ asset($post->images->first()->path) }}" alt="">
                                            </a>
                                        </div>

                                        <h4>
                                            <a href="{{ route('frontend.post.show', $post->slug) }}">
                                                {{ $isAr ? $post->title_ar : $post->title }}
                                            </a>
                                        </h4>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Big Column -->
                <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Useful Links -->
                        <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">{{ __('footer.useful_links') }}</h2>
                                <ul class="list">
                                    <li><a href="{{ route('frontend.about') }}">{{ __('footer.about') }}</a></li>
                                    <li><a href="{{ route('frontend.categories.posts') }}">{{ __('footer.services') }}</a></li>
                                    <li><a href="{{ route('frontend.conact.index') }}">{{ __('footer.contact') }}</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Gallery -->
                        <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget gallery-widget">
                                <h2 class="widget-title">{{ __('footer.recent_works') }}</h2>

                                <div class="widget-content">
                                    <div class="outer clearfix">
                                        @foreach ($lightbox_image as $post)
                                        <figure class="image">
                                            <a href="{{ asset($post->images->first()->path) }}"
                                               class="lightbox-image"
                                               title="{{ $isAr ? $post->title_ar : $post->title }}">
                                                <img src="{{ asset($post->images->first()->path) }}" alt="">
                                            </a>
                                        </figure>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <div class="social-links">
                    <ul class="social-icon-two">
                        <li><a href="{{ $getSetting->facebook }}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $getSetting->twitter }}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{ $getSetting->email }}"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="{{ $getSetting->insagram }}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{ $getSetting->whatsapp }}"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="{{ $getSetting->youtupe }}"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>

                <div class="copyright-text">
                    <a href="https://hhad1.com" target="_blank">HHAD</a>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- End Main Footer -->
