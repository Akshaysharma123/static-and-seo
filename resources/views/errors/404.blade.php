@extends('layouts.error_layout') @section('title','Page Not Found 404')
@section('content')
<!-- 404 page -->
<section class="page-404" style="background-image: url({{asset('images/background/404-page.png')}});">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="text-white font-weight-bold mb-2">Well, It Is Embarrassing, Right!</h1>
                <h4 class="text-white mb-40">But The Page You Are Searching For Does Not Exists.</h4>
                <a href="index.html" class="btn btn-primary"> <i class="ti-angle-double-left"></i> Back To Home</a>
            </div>
        </div>
    </div>
</section>
<!-- /404 page -->
@endsection