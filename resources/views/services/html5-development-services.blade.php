@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Services') @section('content')


<section class="page-title overlay" style="background-image: url(images/background/techphant-html5.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">HTML5 Game Development</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li>HTML5 Game Development</li>
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
                <h3 class="text-dark">We love to enjoy game development for you.


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
                        <h3>HTML5 Game Development</h3>

                        <p>We develop most creative and engaging HTML  games which will delight your audiences!<br>

                                We have expertise in various category of game development:
                                <ul class="customul">
                                    <li>HTML 5 Game Development: Our HTML5 game development expertise provides best technology and engine which works in multiple mobile and desktop screens 
                                        </li>   
                                <li>Mobile Game Development Mobile games which developed by our well qualified html5 developers are run smoothly on all kind of devices.</li>
                                <li>Educational & Sports Games  Our team can deliver the educational games featuring an amazing graphics effects and brilliant functionality.
                                    </li>   
                                </ul>
                        </p>
                        <p>We create cross-platform games for desktop, mobile and consoles to increase your game's reach and we do it using  HTML5, Flash, Unity and Phaser!                           
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
