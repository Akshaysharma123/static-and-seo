@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Services') @section('content')


<section class="page-title overlay" style="background-image: url(images/background/techphant-web-development.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Web Development</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}">Services</a>
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
                <h3 class="text-dark">Delivering solutions that gives you wings to fly!
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
                        <h3>Web Development</h3>

                        <p>We are TechPhant, an ISO 9001:2008 & STPI India certified IT service Provider Company that
                            deals in Mobile app designing and development,Web application designing and development,
                            Startup and Enterprise Application,Custom Software Development.
                        </p>
                        <div class="bg-gray p-5 rounded mb-60">

                            <div>
                                <ul class="d-inline-block pl-0 float-sm-left mr-sm-5">
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>REACT</li>
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>ANGULAR</li>
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>NODE JS
                                    </li>

                                </ul>
                                <ul class="d-inline-block pl-0">
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>PHP</li>
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>PYTHON
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <h3>Front End Engineering

                        </h3><small>We will turn your graphic designs into best validated mark-ups.</small>
                        <p>Outstanding web image always need a fantastic front-end engineering. Our valuable and
                            talented team targeted solutions engineered on effective programming ideas.We transform
                            your idea of graphic style into a validated mark-up development.
                            Our Front-end Engineers team experts in:
                            <ul class="customul">
                                <li>User friendly UX</li>

                                <li>HTML5 Markups
                                </li>
                                <li>Animations and transforms of CSS3</li>
                                <li>Cross browser compatible applications
                                </li>
                                <li>Hands on jQuery effects
                                </li>
                                <li>Powerful knowledge of JavaScript and their frameworks
                                </li>
                                <li>Gaming consoles with latest web techniques( PIXIJS)</li>

                            </ul>
                        </p>
                        <h3>Customized Web Development


                        </h3><small>We know the fact that a customer or a client knows more than a web designer or web
                            developer.
                        </small>
                        <p>We always prefer your ideas and your business more than our suggested ideas or themes.
                            Because we know your business focused applications gives you more sales and profit. Our
                            team of experts have idea of both the techniques of front-end as well as back-end
                            programming.
                            Our Web Engineers team experts in:

                            <ul class="customul">
                                <li>Front-end engineering
                                </li>

                                <li>Back-end implementation

                                </li>
                                <li>Complex designs
                                </li>
                                <li>Web portals with multiple functionalities
                                </li>
                                <li>Application specially for social networking

                                </li>
                                <li>Customized Softwares

                                </li>
                                <li>Customized CRM applications
                                </li>

                            </ul>
                        </p>
                        <h3>Web Application Frameworks

                        </h3><small>We can deliver web projects with full features and functionalities to our
                            customers.

                        </small>
                        <p>We always believe in using latest technologies and techniques.
                            Web Application Frameworks we are expert in:


                            <ul class="customul">
                                <li>Laravel PHP Framework

                                </li>

                                <li>Cake PHP Framework


                                </li>
                                <li>CodeIgniter PHP Framework

                                </li>
                                <li>AngularJS
                                </li>
                                <li> React JS

                                </li>
                                <li>Django Python Framework


                                </li>
                                <li>Customized CRM applications
                                </li>

                            </ul>
                        </p>
                        <h3>Augumented Technology

                        </h3><small>Innovative Technology meets unreal experience!

                        
                        </small>
                                                <p>We embrace change and innovate.We embody creativity and push boundaries. We think and act with utmost integrity.
                        
                        
                        </p>
                        <p>We are TechPhant.

                            We understand that for training and learning ‘real life’ is not always practical from a time and cost perspective so we are creating immersive memorable experiences that make a real difference to how we will learn and interact in the future.
                            <ul class="customul">
                                <li>VIRTUAL REALITY </li>
                                <li>AUGMENT REALITY</li>
                                <li>MIXED REALITY</li>
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
