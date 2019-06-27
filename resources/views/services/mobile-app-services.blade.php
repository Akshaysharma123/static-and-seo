@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Services') @section('content')


<section class="page-title overlay" style="background-image: url(images/background/techphant-mobileapp-development.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Mobile App Development</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li><li>
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li>Mobile App Development</li>
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
                <h3 class="text-dark">Work that your business loves
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
                        <h3>Mobile App Development</h3>
                      
                        <p>Amplify your software product with our expertise in mobile app development. The highly experienced and technical competent team at TechPhant design and develop breakthrough mobile apps that delivers enhance user engagement and retention.We discern the pulse of your business needs accurately after a sincere one to one conversation with you and endeavour to come up with the most fitting mobile app solution for your business need’s.</p>
                        <div class="bg-gray p-5 rounded mb-60">
                           
                            <div>
                                <ul class="d-inline-block pl-0 float-sm-left mr-sm-5">
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>iPHONE APP DEVELOPMENT</li>
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>CROSS PLATFORM APP</li>
                                  
                                </ul>
                                <ul class="d-inline-block pl-0">
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>ANDROID APP DEVELOPMENT</li>
                                        <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>HYBRID APP DEVELOPMENT
</li>
                                   
                                </ul>
                            </div>
                        </div>
                      
                        
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
