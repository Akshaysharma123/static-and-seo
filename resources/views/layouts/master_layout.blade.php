<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>@yield("title")</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   
    <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
   
    <link href="{{asset('plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('plugins/magnific-popup/magnific-popup.css')}}">
  
    <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick/slick-theme.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
 
    <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('plugins/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield("externalStyleSheets")
  </head>

  <body>
<!-- BEGIN JIVOSITE CODE {literal} -->
<!-- <script type='text/javascript'>
(function(){ var widget_id = 'lvNnv5fXeK';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script> -->
<!-- {/literal} END JIVOSITE CODE -->
    <!-- preloader start -->
    @include('components.preloader')
    <!-- @include('components.socialbar') -->
   
    {{--@include('components.contact_form')--}}
    <!-- preloader end -->

    <!-- navigation -->
    @include('includes.header')

    <!-- Search Form -->
    @include('includes.header_search')
    <!-- /navigation -->
    @yield("content")

    <!-- footer -->
    @include('includes.footer')
    <!-- /footer -->


    <script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script>

    <script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
   
    <script src="{{asset('plugins/magnific-popup/jquery.magnific.popup.min.js')}}"></script>
  
    <script src="{{asset('plugins/slick/slick.min.js')}}"></script>
   
    <script src="{{asset('plugins/mixitup/mixitup.min.js')}}"></script>
   
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
    <script src="{{asset('plugins/google-map/gmap.js')}}"></script>
  
    <script src="{{asset('plugins/syotimer/jquery.syotimer.js')}}"></script>

    <script src="{{asset('plugins/aos/aos.js')}}"></script>
    <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('plugins/validation/jquery.validate.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>

    @yield("externalScripts")
  </body>

</html>