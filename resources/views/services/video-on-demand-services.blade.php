@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Services') @section('content')


<section class="page-title overlay" style="background-image: url(images/background/techphant-video.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Video On Demand Streaming App/Web Development</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li>Video On Demand Streaming App/Web Development</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- cta -->
<section class="cta py-50 overlay-white" style="background-image: url(images/background/techphant-about.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center text-lg-left mb-3 mb-lg-0">
                <h3 class="text-dark">We stream it right!

                </h3>
            </div>
            <div class="col-lg-3 text-lg-right text-center align-self-center">
                <a href="{{route('contact')}}" class="btn btn-sm btn-primary">Send Free Enquiry</a>
            </div>
        </div>
    </div>
</section>
<!-- /cta -->

<!-- blog single -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 py-100">
                <div class="border rounded bg-white">

                    <div class="p-4">
                        <h3>V.O.D App Development</h3>

                        <p>We empower the V.O.D platform of big movie production house in South East Asia!

                        </p>
                        
                        <h3>Salient Features


                        </h3>
                        <p>Salient Features of the on demand video streaming app development-

                            <ul class="customul">
                                <li><strong>Advanced Backed Configuration</strong> - You get an advanced backend in the live match streaming app that allows you to configure your settings and provide other details.
 

</li>

                                <li><strong>Attractive UI
</strong> - An attractive user interface and beautiful design that keeps your live sports streaming app highly appealing for your users.


                                </li>
                                <li><strong>Multiple Categories </strong>- The live streaming application has hundreds of video categories/playlists/artists that make it easier for the users to find the best videos.

</li>
                                <li><strong>Cloud Management</strong> -The live tv streaming app is managed by clouds with all the important content is stored on clouds. This makes the app run faster and safe.

                                </li>
                                <li> <strong>Menu of Settings </strong>- The live video broadcasting app comes with a dedicated setting menu that allows the users to set their preferences in the application.

                                </li>
                                <li> <strong>Registration With Security </strong>- Users of on demand video streaming app may signup/login with their email/password, social media accounts and phone number with a one-time password.


</li>

                            </ul>
                        </p>
                       
                      
                       


                    </div>
                </div>



            </div>
            <div class="col-lg-4">
                <!-- Sidebar -->
                @include('services.includes.right_bar')
            </div>
        </div>
    </div>
</section>
<!-- /blog-single -->
@endsection
