@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Home') @section('content')
@section('description','Techphant Consulting Group are a global technology and business consulting firm providing unique software development, application development and E-commerce solutions that felicitate companies and entrepreneur connect people, process and information. We strive to develop product which can have holistic impact to your business both in short term and long term')
@section('keywords','www.techphant.com,A perfet IT-Tude, Web Scrapping Services, Techphant Raipur, IT Companies in Raipur')



@include('includes.slider')

<!-- service -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h5 class="section-title-sm">Best Service</h5>
                <h1 class="section-title section-title-border">Service We Provide</h1>
            </div>
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
    </div>
</section>

<section class="about section-sm overlay" style="background-image: url(images/background/about-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto">
                <div class="rounded p-sm-5 px-3 py-5 bg-secondary">
                    <h3 class="section-title section-title-border-half text-white">Who We Are?</h3>
                    <p class="text-white mb-40">We are a global technology and business consulting firm providing unique software development, application development and E-commerce solutions that felicitate companies and entrepreneur connect people, process and information. We strive to develop product which can have holistic impact to your business both in short term and long term.</p>
                    <div>
                        <ul class="d-inline-block pl-0">
                            <li class="font-secondary mb-10 text-white float-sm-left mr-sm-5">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>WE LOVE WHAT WE DO</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>WHAT DEFINE US</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT CONTROL SOLUTIONS</li>
                        </ul>
                        <ul class="d-inline-block pl-0">
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>AGILE METHODOLOGY</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>BUSINESS CONSULTENT</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>BUSINESS PLANNING</li>
                        </ul>
                    </div>
                    <a href="{{route('about')}}" class="btn btn-primary mt-4">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- skill -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="section-title-sm">Best Service</h5>
                <h2 class="section-title section-title-border-half">Why Choose Us</h2>
            </div>
            <div class="col-lg-7">
                <div class="mb-40">
                   
                    <p class="text-dark mb-30">The great thing about our mind is that we can choose our attitude. Even if the problem seems unsolvable, we do try to solve it. We do not give up. We ask for help, consider other options, but never give up. We welcome changes in Technologies with open arms and strive to master it. We do not adjust our goal if we do not achieve it we adjust our action steps. After all its all in the action. We are in Information Technology business to embrace a PERFECT "IT-tude.</p>
                    <a href="{{route('about')}}" class="btn btn-primary mt-4">Know More</a>
                </div>
                <!-- fun-fact -->
                <div class="mb-md-50">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column flex-sm-row align-items-center">
                                <i class="round-icon mr-sm-3 ti-server"></i>
                                <div class="text-center text-sm-left">
                                    <h2 class="count mb-0" data-count="221">0</h2>
                                    <p class="mb-0">Projects Done</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column flex-sm-row align-items-center">
                                <i class="round-icon mr-sm-3 ti-face-smile"></i>
                                <div class="text-center text-sm-left">
                                    <h2 class="count mb-0" data-count="332">0</h2>
                                    <p class="mb-0">Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column flex-sm-row align-items-center">
                                <i class="round-icon mr-sm-3 ti-thumb-up"></i>
                                <div class="text-center text-sm-left">
                                    <h2 class="count mb-0" data-count="793">0</h2>
                                    <p class="mb-0">Cup Of Coffee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- progressbar -->
            <div class="col-lg-4 offset-lg-1">
            
                <div class="progressbar">
                        <h5 class="progressbar-title">Front-end (Angular,React)</h5>
                        <div class="progress" data-percent="85%">
                            <div class="progress-bar progress-bar-striped" style="width: 85%;">
                                <div class="progress-bar-value">85%</div>
                            </div>
                        </div>
                    </div>
                <div class="progressbar">
                    <h5 class="progressbar-title">Android/IOS Development</h5>
                    <div class="progress" data-percent="80%">
                        <div class="progress-bar progress-bar-striped" style="width: 80%;">
                            <div class="progress-bar-value">80%</div>
                        </div>
                    </div>
                </div> <div class="progressbar">
                        <h5 class="progressbar-title">PHP,Python</h5>
                        <div class="progress" data-percent="85%">
                            <div class="progress-bar progress-bar-striped" style="width: 85%;">
                                <div class="progress-bar-value">85%</div>
                            </div>
                        </div>
                    </div>
                <div class="progressbar">
                    <h5 class="progressbar-title">CMS</h5>
                    <div class="progress" data-percent="75%">
                        <div class="progress-bar progress-bar-striped" style="width: 75%;">
                            <div class="progress-bar-value">75%</div>
                        </div>
                    </div>
                </div>
                <div class="progressbar">
                    <h5 class="progressbar-title">e-Commerce</h5>
                    <div class="progress" data-percent="85%">
                        <div class="progress-bar progress-bar-striped" style="width: 85%;">
                            <div class="progress-bar-value">85%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /skill -->

<!-- work -->
<section class="section bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="section-title-sm">Our Works</h5>
                <h2 class="section-title section-title-border-gray">Latest Projects</h2>
            </div>
        </div>
        <!-- work slider -->
        <div class="row work-slider">
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-1.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-1.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-2.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-2.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-3.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-3.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-4.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-4.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-1.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-1.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-2.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-2.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-3.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-3.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-4.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-4.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-1.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-1.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-2.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-2.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-3.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-3.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="images/works/work-4.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-4.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /work -->



<!-- testimonial -->
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="section-title-sm">Clients</h5>
                <h2 class="section-title section-title-border"> What client Say </h2>
            </div>
            <div class="col-lg-5 col-md-5 pr-0 align-self-center">
                <img class="img-fluid w-100" src="images/client.png" alt="clients-image">
            </div>
            <div class="col-lg-7 col-md-7 align-self-center pl-0">
                <div class="testimonial-slider p-5">
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">I've had the pleasure to work with Techphant on several projects, in particular Deepak, over the course
                                of my company's move to automation. Techphant was highly recommended by our outsourcing partner
                                in India, and always delivered in a timely and efficient manner, with consistent billings and it was a
                                pleasure working with Techphant.
                                I'd highly recommend Techphant and its team if you're looking for a turnkey IT project.</p>
                        <h4 class="font-weight-normal">Chua Teck Hiong,AutoMoneyBack Pte Ltd,Singapore</h4>
                        <h6 class="font-secondary text-color">Happy Clients</h6>
                    </div>
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Techphant were highly motivated and committed to my job. Always with the best approach and patience.
                                I will recommend them surely to anyone looking for a great provider which is not easy to find.</p>
                        <h4 class="font-weight-normal">Segi Meller,Founder ateam4adream.com</h4>
                        <h6 class="font-secondary text-color">Happy Clients</h6>
                    </div>
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Delivered ahead of schedule and checked in frequently during project with status updates. Very professional,
                                polite, patient with our limited IT knowledge. Would highly recommend.</p>
                        <h4 class="font-weight-normal">Robert Behnke, President, Fair Indigo</h4>
                        <h6 class="font-secondary text-color">Happy Clients</h6>
                    </div>
                    <!-- slider item -->
                    <div class="outline-0">
                            <i class="testimonial-icon ti-quote-left"></i>
                            <p class="text-dark">Wonderful job done! TechPhant Consulting Group is definitely the number one choice to work with. They
                                    have the professional knowledge and skills to complete all the requirements in the schedule. They are also very
                                    easy to communicate and are very patient with me as there were some changes added to this project. I am so
                                    glad that I have found TechPhant Consulting
                                    Group and will continue working with them in the future!</p>
                            <h4 class="font-weight-normal">Sharleen Hsu,PTC Profit</h4>
                            <h6 class="font-secondary text-color">Happy Clients</h6>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /testimonial -->

<section class="cta overlay-primary py-50 text-center text-lg-left" style="background-image: url(images/background/techphant-about.jpg);">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h3 class="text-white">Techphant give the smart solution for your business</h3>
                </div>
                <div class="col-lg-6 text-lg-right align-self-center">
                    <a href="{{route('quote')}}" class="btn btn-light">GET AN QUOTE</a>
                </div>
            </div>
        </div>
</section>



<!-- client logo slider -->
<section class="bg-white py-4">
    <div class="container">
        <div class="client-logo-slider align-self-center">
            <a  class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="images/client-logo/1.png"
                    alt="client-logo"></a>
            <a  class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="images/client-logo/2.png"
                    alt="client-logo"></a>
            <a  class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="images/client-logo/3.png"
                    alt="client-logo"></a>
            <a  class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="images/client-logo/4.png"
                    alt="client-logo"></a>
            <a  class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="images/client-logo/5.png"
                    alt="client-logo"></a>
            <a  class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="images/client-logo/6.png"
                    alt="client-logo"></a>
            <a  class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="images/client-logo/7.png"
                    alt="client-logo"></a>
            <a  class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="images/client-logo/8.png"
                    alt="client-logo"></a>
            <a  class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="images/client-logo/9.png"
                    alt="client-logo"></a>
            <a  class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="images/client-logo/10.png"
                    alt="client-logo"></a>
                    <a  class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="images/client-logo/11.png"
                    alt="client-logo"></a>
                  
        </div>
    </div>
</section>
<!-- /client logo slider -->
@endsection