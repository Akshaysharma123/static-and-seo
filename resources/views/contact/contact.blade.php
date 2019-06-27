@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Contact Us')
@section('description','B-Block 304, Vineet Estate,Near Bottle House,New Shanti Nagar,Raipur,Chhattisgarh-India, Email-contact@techphant.com, IN: +91 98279-08960 , CA: +1(647) 808-3890')
@section('keywords','www.techphant.com,A perfet IT-Tude, Web Scrapping Services, Techphant Raipur, IT Companies in Raipur')
 @section('content')


<section class="page-title overlay" style="background-image: url(images/background/techphant-contact-us.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Contact Us</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- contact -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-1 col-md-5">

                <h1 class="section-title">Contact Us</h1>
                <ul class="pl-0">
                    <!-- contact items -->
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-mobile"></i>
                        <div class="align-self-center font-primary">

                            <p>IN: +91 98279-08960 <br> CA: +1(647) 808-3890</p>
                        </div>
                    </li>
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-email"></i>
                        <div class="align-self-center font-primary">
                            <p>contact@techphant.com</p>
                        </div>
                    </li>
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-map-alt"></i>
                        <div class="align-self-center font-primary">
                            <p>B-Block 304, Vineet Estate,<br>Near Bottle House,New Shanti Nagar,<br> Raipur
                                Chhattisgarh-India</p>
                        </div>
                    </li>
                      <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-map-alt"></i>
                        <div class="align-self-center font-primary">
                            <p>302-167,Church Street,<br> Toronto, ON
                                M5B 1Y6, Canada</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- form -->
            <div class="col-lg-6 col-md-7">
            @include('includes.alert')
                <div class="p-5 rounded box-shadow">
                    <form  class="row" role="form" method="POST" name="contact" action="{{route('contact_us')}}" id="contact">
                    @csrf
                        <div class="col-lg-12">
                            <h5>We love to serve you..</h5>
                            <p>We would love to see you as our best client.Fill free to drop a message.</p>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required
                                >
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address"
                                required >
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"
                                required >
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control p-2" name="message" id="message" placeholder="Your Message Here..."
                                required style="height: 150px;" minlength="5"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn1 btn-primary1 contact_btn" type="submit" value="send">Submit Now</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <!-- Google Map -->
    <div id="map_canvas"></div>
</section>

@endsection
