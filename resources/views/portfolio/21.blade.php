@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Portfolio')
@section('description','Techphant - Portfolio,Products - Portfolio')
@section('keywords','www.techphant.com,A perfet IT-Tude, Web Scrapping Services, Techphant Raipur, IT Companies in Raipur')
@section('externalStyleSheets')
<style>
    .staticH{
        height: 160px;
    }
    </style>

@endsection
 @section('content')<section class="page-title overlay" style="background-image: url(images/background/techphant-portfolio.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Portfolio</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}vimeo">Home</a>
                    </li>
                    <li>Portfolio</li>
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

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mb-2">Portfolio</h2>
                <p class="mb-40">Let Our Work Do The Talking</p>
            </div>
            <div class="col-lg-12">
                <div class="project-menu text-center">
                    <ul class="controls list-inline">
                        <!-- filter item list -->
                        <li class="list-inline-item control active" data-filter="all">All</li>
                        <li class="list-inline-item control" data-filter=".WebDevelopment">Web Development</li>                     
                        <li class="list-inline-item control" data-filter=".AppDevelopment">App Development</li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" data-ref="mixitup-container">
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/1.png" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio1')}}" class="h4">VEN VICI PBS</a>
                        <p>
                            <i class="ti-tag"></i>VEN VICI PBS</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/5.png" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio2')}}" class="h4">Basic Tasar Silkworm seed org.</a>
                        <p>
                            <i class="ti-tag"></i>Basic Tasar Silkworm seed org.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/14.png" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio3')}}" class="h4">WMI Enterprise Pte Ltd.</a>
                        <p>
                            <i class="ti-tag"></i>WMI Enterprise Pte Ltd.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/26.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio4')}}" class="h4">DataBase Design & Scraping</a>
                        <p>
                            <i class="ti-tag"></i>Project 50i50</p>
                    </div>
                </div>
            </div>
         
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment " data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/3.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio5')}}" class="h4">Virtual Project Management Application</a>
                        <p>
                            <i class="ti-tag"></i>2 Tasks</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment " data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/9.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio6')}}" class="h4">Stock Management Application</a>
                        <p>
                            <i class="ti-tag"></i>.Net Application</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 AppDevelopment " data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/28.png" alt="project-image">
                    <div class="project-info">
                    <a href="{{route('portfolio7')}}" class="h4">MM2VIEW</a>
                        <p>
                            <i class="ti-tag"></i>App</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/11.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio8')}}" class="h4">Quote And Invoice System</a>
                        <p>
                            <i class="ti-tag"></i>Invoice</p>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/12.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio9')}}" class="h4">Event Sharing In Multiple Site</a>
                        <p>
                            <i class="ti-tag"></i>JD Legends</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 AppDevelopment " data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/29.png" alt="project-image">
                    <div class="project-info">
                    <a href="{{route('portfolio10')}}" class="h4">FX Hunter</a>
                        <p>
                            <i class="ti-tag"></i>App</p>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-3 col-md-4 col-sm-6 p-0  WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/16.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio11')}}" class="h4">Dealer Distributor System</a>
                        <p>
                            <i class="ti-tag"></i>NDD Pickup</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0  WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/27.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio12')}}" class="h4">CityVox Web Scraping</a>
                        <p>
                            <i class="ti-tag"></i>Images</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 AppDevelopment " data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/30.png" alt="project-image">
                    <div class="project-info">
                    <a href="{{route('portfolio13')}}" class="h4">PH Hunter</a>
                        <p>
                            <i class="ti-tag"></i>App</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0  WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/15.jpg" alt="project-image">
                    <div class="project-info">
                    <a href="{{route('portfolio14')}}" class="h4">Onvasortir Web Scrapping</a>
                        <p>
                            <i class="ti-tag"></i>Images</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0  WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/17.jpg" alt="project-image">
                    <div class="project-info">
                    <a href="{{route('portfolio15')}}" class="h4">Search Engine Optimazation</a>
                        <p>
                            <i class="ti-tag"></i>Protect Travel Insurance</p>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment " data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/19.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio16')}}" class="h4">Opencart Based E-commerce</a>
                        <p>
                            <i class="ti-tag"></i>Purer Skin</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 p-0  WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/22.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio17')}}" class="h4">Sugar Block</a>
                        <p>
                            <i class="ti-tag"></i>Sugar block</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/13.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio18')}}" class="h4">Magento Based E-commerce Portal</a>
                        <p>
                            <i class="ti-tag"></i>Mimart</p>
                    </div>
                </div>
            </div>
         
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/18.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio19')}}" class="h4">Multi Level Marketing</a>
                        <p>
                            <i class="ti-tag"></i>PTC profit</p>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment " data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/8.jpg" alt="project-image">
                    <div class="project-info">
                    <a href="{{route('portfolio20')}}" class="h4">Web Scraping And UI Design</a>
                        <p>
                            <i class="ti-tag"></i>Car Insurance</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment " data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/7.jpg" alt="project-image">
                    <div class="project-info">
                    <a href="{{route('portfolio21')}}" class="h4">C.A.P.E. Profile Consultancy</a>
                        <p>
                            <i class="ti-tag"></i>Profile Consultancy</p>
                    </div>
                </div>
            </div>
           
            
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/21.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio22')}}" class="h4">Real Estate Market Place</a>
                        <p>
                            <i class="ti-tag"></i>Sell By Swap</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment " data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/20.jpg" alt="project-image">
                    <div class="project-info">
                    <a href="{{route('portfolio23')}}" class="h4">Online Survey Application</a>
                        <p>
                            <i class="ti-tag"></i>RateMyPitch</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment " data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/24.jpg" alt="project-image">
                    <div class="project-info">
                    <a href="{{route('portfolio24')}}" class="h4">Timesheet Management System</a>
                        <p>
                            <i class="ti-tag"></i>Images</p>
                    </div>
                </div>
            </div>
           
         
            
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/2.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio1')}}" class="h4">Platform For Collaboration</a>
                        <p>
                            <i class="ti-tag"></i>A Team 4 Dream</p>
                    </div>
                </div>
            </div>
       
            <div class="col-lg-3 col-md-4 col-sm-6 p-0 WebDevelopment" data-ref="mixitup-target">
                <div class="position-relative">
                    <img class="img-fluid staticH w-100" src="images/portfolio/4.jpg" alt="project-image">
                    <div class="project-info">
                        <a href="{{route('portfolio1')}}" class="h4">Amazon Barcode Generator</a>
                        <p>
                            <i class="ti-tag"></i>Fairindigo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
