@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Services') 
@section('description','Techphant - Mobile App Development, Web Development, Software Development, Cloud Based Services, e-Commerce Softwares, CRM Softwares, Collaborative CRM')
@section('keywords','www.techphant.com,A perfet IT-Tude, Web Scrapping Services, Techphant Raipur, IT Companies in Raipur')@section('content')

<section class="page-title overlay" style="background-image: url(images/background/techphant-services.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Web Development</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>Web Development</li>
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
                <h3 class="text-dark">Lets make something awesome
</h3>
            </div>
            <div class="col-lg-3 text-lg-right text-center align-self-center">
                <a href="{{route('contact')}}" class="btn btn-sm btn-primary">Send Free Enquiry</a>
            </div>
        </div>
    </div>
</section>
<!-- /cta -->

<!-- service -->
<section class="section">
    <div class="container">
        <div class="row">
           <!-- service item -->
           <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card text-center">
                    <h4 class="card-title pt-3">Mobile App Development</h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="images/service/techphant-service-1.jpeg" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-mobile"></i>
                        <p>iOS| ANDROID | HYBRID | CROSS PLATFORM</p>
                        <p class="card-text mx-2 mb-0">We are committed to deliver highly secure, stable and engaging iOS,Android and Cross platform App..</p>
                        <a href="{{route('mobile-app-services')}}" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>
            <!-- service item -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card text-center">
                    <h4 class="card-title pt-3">Web Development</h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="images/service/techphant-service-2.jpg" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-world"></i>
                        <p>ANGULAR | PYTHON | REACT | PHP</p>
                        <p class="card-text mx-2 mb-0">Take the advantage of our knack in developing highly scalable, stable and robust backend for your software product coupled with our..</p>
                        <a href="{{route('web-development-services')}}" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>
            <!-- service item -->
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center">
                    <h4 class="card-title pt-3">Cloud Computing</h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="images/service/techphant-service-3.png" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-cloud-up"></i>
                        <p>AWS | AZURE | DIGITAL OCEAN</p>
                        <p class="card-text mx-2 mb-0">Build, deploy and manage sophisticated application with enhanced scalability, reliability and scalability in cloud computing services..</p>
                        <a href="{{route('cloud-based-services')}}" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>
         
        </div>
        <br>
        <br>
        <div class="row">
             <!-- service item -->
             <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card text-center">
                    <h4 class="card-title pt-3">CRM Software Development</h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="images/service/techphant-service-4.jpg" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-basketball"></i>
                        <p>STRATEGIC | OPERATIONAL|  COLLABORATION </p>
                        <p class="card-text mx-2 mb-0">We are committed to deliver highly secure, stable and engaging iOS,Android and Cross platform App..</p>
                        <a href="{{route('crm-softwares-development-services')}}" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>
            <!-- service item -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card text-center">
                    <h4 class="card-title pt-3">Video Streaming APP / WEB </h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="images/service/techphant-service-5.png" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-video-clapper"></i>
                        <p>ANGULAR | PYTHON | REACT | PHP</p>
                        <p class="card-text mx-2 mb-0">Take the advantage of our knack in developing highly scalable, stable and robust backend for your software product coupled with our..</p>
                        <a href="{{route('video-on-demand-services')}}" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>
            <!-- service item -->
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center">
                    <h4 class="card-title pt-3">HTML5 Game Development</h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="images/service/techphant-service-9.jpeg" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-html5"></i>
                        <p>PIXIJS | PHASER | MELONJS</p>
                        <p class="card-text mx-2 mb-0">We develop most creative and engaging HTML  games which will delight your audiences..</p>
                        <a href="{{route('html5-development-services')}}" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
        <div class="col-lg-4 col-sm-6">
                <div class="card text-center">
                    <h4 class="card-title pt-3">E-commerce Development</h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="images/service/techphant-service-7.jpg" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-drupal"></i>
                        <p>OPENCART | MAGENTO | DRUPAL | PRESTASHOP</p>
                        <p class="card-text mx-2 mb-0">Enabling businesses to embrace change..</p>
                        <a href="{{route('e-commerce-services')}}" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>
              <!-- service item -->
              <div class="col-lg-4 col-sm-6">
                <div class="card text-center">
                    <h4 class="card-title pt-3">FinTech Solution And APP</h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="images/service/techphant-service-8.jpeg" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-layout-accordion-list"></i>
                        <p></p>
                        <p class="card-text mx-2 mb-0">Fintech is a line of business based on using software..
</p>
                        <a href="{{route('fintech-solution-services')}}" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- service -->

<section class="fun-facts overlay-dark section-sm" style="background-image: url(images/background/cta.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                    <i class="round-icon ti-server mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                    <div class="text-center text-sm-left">
                        <h2 class="count text-white mb-0" data-count="230">0</h2>
                        <p class="text-white mb-0">Projects Done</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                    <i class="round-icon ti-face-smile mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                    <div class="text-center text-sm-left">
                        <h2 class="count text-white mb-0" data-count="789">0</h2>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                    <i class="round-icon ti-thumb-up mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                    <div class="text-center text-sm-left">
                        <h2 class="count text-white mb-0" data-count="580">0</h2>
                        <p class="text-white mb-0">Cup Of Coffee</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                    <i class="round-icon ti-cup mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                    <div class="text-center text-sm-left">
                        <h2 class="count text-white mb-0" data-count="130">0</h2>
                        <p class="text-white mb-0">Awards Win</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- work process -->
<section class="section position-relative pb-xl-200-lg-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h5 class="section-title-sm">Know About</h5>
                <h2 class="section-title section-title-border mb-xl-150-lg-100">How We Do This</h2>
            </div>
            <!-- process step -->
            <div class="col-lg-4 col-sm-6 mb-md-50">
                <div class="process-item py-xl-4 pl-xl-5 pt-5 px-4 rounded border position-relative">
                    <div class="process-item-number">1</div>
                    <h5 class="text-primary">Consultation</h5>
                    <p>Lorem ipsum dolor amet consecte turadipisicing elit sed done eius mod empor enim.</p>
                </div>
            </div>
            <!-- process step -->
            <div class="col-lg-4 col-sm-6 mb-md-50">
                <div class="process-item py-xl-4 pl-xl-5 pt-5 px-4 rounded border position-relative">
                    <div class="process-item-number">2</div>
                    <h5 class="text-primary">Campaign</h5>
                    <p>Lorem ipsum dolor amet consecte turadipisicing elit sed done eius mod empor enim.</p>
                </div>
            </div>
            <!-- process step -->
            <div class="col-lg-4 col-sm-6 mb-md-50">
                <div class="process-item py-xl-4 pl-xl-5 pt-5 px-4 rounded border position-relative">
                    <div class="process-item-number">3</div>
                    <h5 class="text-primary">Progress</h5>
                    <p>Lorem ipsum dolor amet consecte turadipisicing elit sed done eius mod empor enim.</p>
                </div>
            </div>
        </div>
    </div>
    <img class="arrow-top" src="images/arrow-top.png" alt="">
    <img class="arrow-bottom" src="images/arrow-bottom.png" alt="">
</section> 
<!-- /work process -->
@endsection
