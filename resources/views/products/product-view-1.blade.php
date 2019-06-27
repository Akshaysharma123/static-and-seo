@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Products') 
@section('description','Techphant - Products- Explore Near By.')
@section('keywords','www.techphant.com,A perfet IT-Tude, Web Scrapping Services, Techphant Raipur, IT Companies in Raipur') @section('content')


<section class="page-title overlay" style="background-image: url(../../images/background/techphant-products.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Products</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('products')}}">Products</a>
                    </li>
                    <li>Explore Near By</li>
                </ol>
            </div>
        </div>
    </div>
</section>



<section class="section">
    <div class="container">
        <div class="row">
            <aside class="col-lg-4 order-lg-1 order-2">
                <!-- overview -->
                <div class="p-4 rounded border mb-50">
                    <h4 class="text-color mb-20">Overview</h4>
                    <ul class="pl-0 mb-20">
                        <li class="py-3 border-bottom">
                            <span class="d-inline-block" style="width: 140px;">Project Name:</span><strong>Explore Near
                                By</strong></li>

                        <li class="py-3 border-bottom">
                            <span class="d-inline-block" style="width: 140px;">Category:</span>Location Finder</li>
                        <li class="py-3 border-bottom">
                            <span class="d-inline-block" style="width: 140px;">Expertise:</span>Mobile App</li>
                        <li class="py-3 border-bottom">
                            <span class="d-inline-block" style="width: 140px;">Date:</span>May, 2018</li>
                        <li class="py-3 border-bottom">
                            <span class="d-inline-block" style="width: 140px;">Website:</span><a href="http://explore-nearby.com/" target="_blank">http://explore-nearby.com/</a></li>
                    </ul>
                    <a href="{{route('contact')}}" class="btn btn-primary">Request For Demo</a>
                </div>
                <!-- case study -->
                <div class="rounded bg-gray border py-3 px-4 mb-10">
                    <a href="https://play.google.com/store/apps/details?id=com.techphant.nearby&hl=en_IN" target="_blank"
                        title="Download Android App"><i class="d-inline-block mr-1 text-dark ti-android" style="font-size: 20px;"></i>
                        <h4 class="mb-1 d-inline-block">Download Android App</h4>
                    </a>

                </div>
                <div class="rounded bg-gray border py-3 px-4 mb-10">
                    <a href="#" title="Download Android App"><i class="d-inline-block mr-1 text-dark ti-apple" style="font-size: 20px;"></i>
                        <h4 class="mb-1 d-inline-block">Download IOS App</h4>
                    </a>

                </div>

            </aside>
            <!-- project content -->
            <div class="col-lg-8 order-lg-2 order-1">
                <img class="img-fluid w-100 mb-60" src="../../images/background/techphant-explore-near-by.png" alt="project image">
                <h3 class="mb-10">Explore Nearby And Around You</h3>
                <p class="mb-40">Explore Nearby simplifies finding places of your interest around and near you.This
                    handy, easy-to-use places finder application help you search the places of your interest around
                    you.<p>

                        <!-- nav tabs menu -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="challanges-tab" data-toggle="tab" href="#challanges"
                                    role="tab" aria-controls="challanges" aria-selected="true">About Feature</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="solution-tab" data-toggle="tab" href="#solution" role="tab"
                                    aria-controls="solution" aria-selected="false">Silent Feature</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="results-tab" data-toggle="tab" href="#results" role="tab"
                                    aria-controls="results" aria-selected="false">Permissions</a>
                            </li>
                        </ul>
                        <!-- tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- tab 1 -->
                            <div class="tab-pane fade show active" id="challanges" role="tabpanel" aria-labelledby="challanges-tab">
                                <p>Explore Nearby is a places finding application which are around you and is designed
                                    to help you to find nearest utility places like Restaurant, Cafes ATM, Gas station,
                                    Banks, Malls, Metro/Subway, Bus Stops, Hotels and many more places of interest near
                                    you.</p>
                                <p>
                                    Once you have selected a place category and pointed your phone in a particular
                                    direction it generates all the available results around you. You can rotate your
                                    phone 360 degree around yourself and see the places or locations available in all
                                    the directions. This application also provides distance adjustment feature through
                                    which you can define the radius of your search. </p>

                            </div>
                            <!-- tab 2 -->
                            <div class="tab-pane fade" id="solution" role="tabpanel" aria-labelledby="solution-tab">

                                <div class="tab-content-item">
                                    <h6>Sort and search the details of places for the specific category like
                                        Restaurant, Cafes ATM, Gas station, Banks,Malls, Metro/Subway, Bus Stops,
                                        Hotels and more.</h6>

                                </div>
                                <div class="tab-content-item">
                                    <h6>See the images, reviews ,opening and closing hours of the places of your
                                        interest.</h6>

                                </div>
                                <div class="tab-content-item">
                                    <h6>Get the map navigation detail of a selected place right within the application.</h6>

                                </div>
                                <div class="tab-content-item">
                                    <h6>Define the distance radius of your search for any category.</h6>

                                </div>

                            </div>
                            <!-- tab 3 -->
                            <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                                <p>In order for our application to work properly, we need a few permissions.</p>
                                <div class="tab-content-item">
                                    <h6>Location</h6>
                                    <p>Explore Nearby locates your current location and help you search the places in
                                        your vicinity that interest you.</p>
                                </div>
                                <div class="tab-content-item">
                                    <h6>Network</h6>
                                    <p>This connects you to the Internet and allows us to send and receive location
                                        information.</p>
                                </div>
                                <div class="tab-content-item">
                                    <h6>Camera</h6>
                                    <p>This help us to cater an augment reality experience to the location marker
                                        around you in the direction you want to head to.</p>
                                </div>
                            </div>
                        </div>






            </div>
        </div>
    </div>
</section>

@endsection
