
    <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url(images/background/5.jpg);">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="index-2.html"><img src="{{ asset('assets/front') }}/images/footer-logo.png" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">We specialize in high-quality apartment and villa finishing, delivering modern designs with precision and style. Our expert team turns your ideas into reality with creativity and professionalism.
.</div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $RecentPosts = $posts->take(2);
                            @endphp
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title">Recent Posts</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
@foreach ($RecentPosts as $post)

                                        <div class="post">
                                            <div class="thumb"><a href="{{ route('frontend.post.show',$post->slug) }}"><img src="{{ asset($post->images->first()->path) }}" alt=""></a></div>
                                            <h4><a href="{{ route('frontend.post.show',$post->slug) }}">{{ $post->title }}</a></h4>
                                            <ul class="info">
                                                {{-- <li>26 Aug</li>
                                                <li>3 Comments</li> --}}
                                            </ul>
                                        </div>
    
@endforeach
                                    </div>
                                </div>
                            </div>         
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                 <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Useful links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="projects.html">Project</a></li>
                                            <li><a href="blog-classic.html">News</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h2 class="widget-title">Recent Works</h2>
                                    <div class="widget-content">
                                        <div class="outer clearfix">
                                            @php
                                                $lightbox_image = $posts->take(6);
                                            @endphp
@foreach ($lightbox_image as $post)

                                            <figure class="image">
                                                <a href="{{ asset($post->images->first()->path) }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset($post->images->first()->path) }}" alt=""></a>
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
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="social-links">
                        <ul class="social-icon-two">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    
                    <div class="copyright-text">
                       <a href="https://www.templateshub.net" target="_blank">HHAD</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

</div>