<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title')</title>
     <meta name="description" content="@yield('meta_description')">
     <meta name="keyword" content="@yield('meta_keyword')">
     @php
     $setting =App\Models\Setting::find(1)
     @endphp
     @if($setting)
     <link rel="shortcut icon" href="{{asset('uploads/settings/'.$setting->favicon)}}" type="image/x-icon">
     @endif
     <meta name="author" content="udemy">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}"> 


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        @include('layouts.inc.frontend-navbar')
      
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<script src="{{asset('assets/js/bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/jquery.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
 <script>
    $('.category-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
 </script>
 @yield('scripts')
</body>
</html>
