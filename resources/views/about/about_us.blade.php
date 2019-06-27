@extends('layouts.master_layout') @section('title',env('APP_NAME').' | About Us') @section('content')
@section('description','The great thing about our mind is that we can choose our attitude. Even
if the problem seems unsolvable, we do try to solve it. We do not give up. We ask for help,
consider other options, but never give up. We welcome changes in Technologies with open arms and
strive to master it. We do not adjust our goal if we do not achieve it we adjust our action steps.
After all its all in the action. We are in Information Technology business to embrace
a PERFECT "IT-tude"')
@section('keywords','www.techphant.com,A perfet IT-Tude, Web Scrapping Services, Techphant Raipur, IT Companies in Raipur')

@section('externalStyleSheets')
<style>
    .section-1 {
        padding: 100px 0 0 0;
    }
</style>
@endsection

<section class="page-title overlay" style="background-image: url(images/background/techphant-about.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">About Us</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>About Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- philosophy -->
<section class="section section-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1">
                <h5 class="section-title-sm">Know About</h5>
                <h1 class="section-title section-title-border-half">DEFINING "IT-TUDE"</h1>
                <p style="text-align: justify;">The great thing about our mind is that we can choose our attitude. Even
                    if the problem seems unsolvable, we do try to solve it. We do not give up. We ask for help,
                    consider other options, but never give up. We welcome changes in Technologies with open arms and
                    strive to master it. We do not adjust our goal if we do not achieve it we adjust our action steps.
                    After all its all in the action. We are in Information Technology business to embrace
                    a PERFECT "IT-tude".</p>


            </div>
            <!-- philosophy image -->
            <div class="col-lg-5 align-self-center order-1 order-lg-2 mb-md-50">
                <img class="img-fluid w-100 rounded" src="images/about/techphant-about-1.jpg" alt="techphant-about-us-image">
            </div>
        </div>
    </div>
</section>
<!-- /philosophy -->

<section class="section section-1">
    <div class="container">
        <div class="row">
            <!-- philosophy video -->

            <div class="col-lg-12 col-sm-12 col-md-12">

                <h2 class="section-title section-title-border-half">Who Are We?</h2>
                <p style="text-align: justify;">TechPhant is an IT firm, currently at the forefront of software
                    development to cater “YOU”. We spread our
                    wings in the business of Software Development, Mobile Application Development, Web Designing ,E-
                    Commerce Solutions, Business Software Services etc.</p>
                <p style="text-align: justify;">
                    TechPhant is founded with a view to provide our clients with the optimum IT solutions in terms of
                    software
                    services. We are in the market since year 2013 for our ability to deliver our client’s overall IT
                    needs. We
                    attempt to achieve maximum customer satisfaction through continuous feedback and continual
                    improvement
                    in Quality Management Systems. We are constantly in the process of updating our skills ,adopting
                    new
                    technologies that can perform better functions and can be operated in better manner. We believe in
                    mixing
                    our skills with our clients inputs to achieve business goals.</p>
                <p style="text-align: justify;">
                    We have much experienced and enthusiastic members. The strength of our team is
                    vast
                    experience in the field of IT Application Development and Support Services.<p>

            </div>
        </div>
    </div>
</section>

<!-- skill -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="section-title-sm">Best Reason</h5>
                <h2 class="section-title section-title-border-half">Why Choose Us</h2>
            </div>
            <!-- accordion -->
            <div class="col-lg-6">
                <div id="accordion" class="mb-md-50">
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-gray border p-0">
                            <a class="card-link h5 d-block tex-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseOne">
                                <i class="ti-minus text-primary mr-2"></i> Our Company Mission
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body font-secondary text-color pl-0 pb-0">
                                Our mission is to constantly grow as a professional IT solutions company
                                and support our clients and partners with cutting-edge solutions and
                                services that allow them ultimately to innovate, create and profit.We would continue to be a preferred technology partner and a chosen employer while striving for excellence in all that we do.
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-gray border p-0">
                            <a class="collapsed card-link h5 d-block tex-dark mb-0 py-10 px-4" data-toggle="collapse"
                                href="#collapseTwo">
                                <i class="ti-plus text-primary mr-2"></i> Our Company Vision
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body font-secondary text-color pl-0 pb-0">
                                Our vision is to be trusted & respected as a
                                world-class software development company in delivering and developing
                                state-of-the-art, innovative IT solutions for our clients to improve profits as
                                well as build efficiency.To be the first choice for optimizing and achieving operational excellence.

To be a process driven, professionally managed and highly profitable organization
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- progressbar -->
            <div class="col-lg-6">
               
                <div class="progressbar">
                    <h5 class="progressbar-title">Framework</h5>
                    <div class="progress" data-percent="81%">
                        <div class="progress-bar progress-bar-striped" style="width: 81%;">
                            <div class="progress-bar-value">81%</div>
                        </div>
                    </div>
                </div>
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

<section class="fun-facts overlay-dark section-sm" style="background-image: url(images/background/techphant-about.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                    <i class="round-icon ti-server mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                    <div class="text-center text-sm-left">
                        <h2 class="count text-white mb-0" data-count="221">0</h2>
                        <p class="text-white mb-0">Projects Done</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                    <i class="round-icon ti-face-smile mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                    <div class="text-center text-sm-left">
                        <h2 class="count text-white mb-0" data-count="332">0</h2>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                    <i class="round-icon ti-thumb-up mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                    <div class="text-center text-sm-left">
                        <h2 class="count text-white mb-0" data-count="795">0</h2>
                        <p class="text-white mb-0">Cup Of Coffee</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

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
