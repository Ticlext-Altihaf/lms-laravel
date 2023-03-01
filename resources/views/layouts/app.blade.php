<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Lora:wght@400;700&amp;family=Montserrat:wght@400;500;600;700&amp;family=Nunito:wght@400;700&amp;display=swap"
        rel="stylesheet">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/fontawesome/fontawesome.css">
    <link rel="stylesheet" href="{{asset('assets')}}/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/libs/aos/dist/aos.css">
    <link rel="stylesheet" href="{{asset('assets')}}/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="{{asset('assets')}}/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/libs/highlightjs/styles/vs2015.css">
    <link rel="stylesheet" href="{{asset('assets')}}/libs/jarallax/dist/jarallax.css">
    <link rel="stylesheet" href="{{asset('assets')}}/libs/quill/dist/quill.core.css"/>

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet'/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/theme.min.css">

</head>
<body>

@include('layouts.navigation')


<!-- Page Content -->
<main>
    @yield('content')
</main>

@include('layouts.footer')


<!-- JAVASCRIPT
            ================================================== -->
<!-- Libs JS -->
<script src="{{asset('assets')}}/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('assets')}}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="{{asset('assets')}}/libs/aos/dist/aos.js"></script>
<script src="{{asset('assets')}}/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="{{asset('assets')}}/libs/countup.js/dist/countUp.min.js"></script>
<script src="{{asset('assets')}}/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="{{asset('assets')}}/libs/flickity/dist/flickity.pkgd.min.js"></script>
<script src="{{asset('assets')}}/libs/flickity-fade/flickity-fade.js"></script>
<script src="{{asset('assets')}}/libs/highlightjs/highlight.pack.min.js"></script>
<script src="{{asset('assets')}}/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('assets')}}/libs/isotope-layout/dist/isotope.pkgd.min.js"></script>
<script src="{{asset('assets')}}/libs/jarallax/dist/jarallax.min.js"></script>
<script src="{{asset('assets')}}/libs/jarallax/dist/jarallax-video.min.js"></script>
<script src="{{asset('assets')}}/libs/jarallax/dist/jarallax-element.min.js"></script>
<script src="{{asset('assets')}}/libs/parallax-js/dist/parallax.min.js"></script>
<script src="{{asset('assets')}}/libs/quill/dist/quill.min.js"></script>
<script src="{{asset('assets')}}/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
<script src="{{asset('assets')}}/libs/typed.js/lib/typed.min.js"></script>

<!-- Map -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Theme JS -->
<script src="{{asset('assets')}}/js/theme.min.js"></script>

</body>
</html>
