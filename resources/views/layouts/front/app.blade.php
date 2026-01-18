 <!DOCTYPE html>
<html lang="en">

<!-- index26:42-->
<head>
<meta charset="utf-8">
<title>{{ config('app.name') }} | @yield('title')</title>
<!-- Stylesheets -->
<link href="{{ asset('assets/front') }}/css/bootstrap.css" rel="stylesheet">
<link href="{{ asset('assets/front') }}/css/style.css" rel="stylesheet">
<link href="{{ asset('assets/front') }}/css/responsive.css" rel="stylesheet">   
<!--Color Switcher Mockup-->
<link href="{{ asset('assets/front') }}/css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{ asset('assets/front') }}/css/color-themes/default-theme.css" rel="stylesheet">

    <meta content="@yield('meta_desc')" name="description" />
    <meta name="robots" content="index, follow">
 
<link rel="shortcut icon" href="{{ asset('assets/front') }}/images/favicon.png" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/front') }}/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    @stack('header')
<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Ink&display=swap" rel="stylesheet">

<style>
    @media only screen and (max-width: 767px) {
    .subCategory
    {
                color: rgb(255, 255, 255);
                padding-left: 20px;
                

    }
    }





/* Direction */
.rtl {
    direction: rtl;
    text-align: right;
    
}

.ltr {
    direction: ltr;
    text-align: left;
}

</style>
</head>

<body class="{{ app()->getLocale() == 'ar' ? 'font-ar rtl' : '' }}">
    <div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

@include('layouts.front.header')
@yield('body')
@include('layouts.front.footer')

</div>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>
<script src="{{ asset('assets/front') }}/js/jquery.js"></script> 
<script src="{{ asset('assets/front') }}/js/popper.min.js"></script>
<script src="{{ asset('assets/front') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/front') }}/js/jquery.fancybox.js"></script>
<script src="{{ asset('assets/front') }}/js/owl.js"></script>
<script src="{{ asset('assets/front') }}/js/wow.js"></script>
<script src="{{ asset('assets/front') }}/js/appear.js"></script>
<script src="{{ asset('assets/front') }}/js/mixitup.js"></script>
<script src="{{ asset('assets/front') }}/js/script.js"></script>
<!-- Color Setting -->
<script src="{{ asset('assets/front') }}/js/color-settings.js"></script>
    @stack('js')

</body>

<!-- index26:42-->
</html> 





