@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Vacancies') @section('content')
@section('description','Techphant - It has been brought to our attention that some unscrupulous element posing as consultants and /or official entities of Techphant Consulting Group is sending out fraudulent e-mails and offer letters and are asking the recipient to appear for a face-to-face interview and charging hefty amounts for a job opening with Techphant.Please note that Techphant does not indulge in any practice of sending emails to candidate(s) asking for money or requiring candidates to deposit any sum with any bank(s) at any stage of the recruitment process.Techphant technologies bears no responsibility for any loss or damage suffered by any individual in response to such fraudulent emails or false claims by consultants,fruadulent individuals.')
@section('keywords','www.techphant.com,A perfet IT-Tude, Web Scrapping Services, Techphant Raipur, IT Companies in Raipur')
@section('externalStyleSheets')
<link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">

@endsection
<section class="page-title overlay" style="background-image: url(images/background/techphant-vacancies.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Vacancies</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('vacancies')}}">Vacancies</a>
                    </li>
                    <li>Web Developer</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- service single -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- sidebar -->
            <aside class="col-lg-4 order-lg-1 order-2">
                <!-- service menu -->
                
                <!-- Brochure -->
                <div class="rounded border py-3 px-4 mb-50">
                    <i class="d-inline-block mr-1 text-dark ti-files" style="font-size: 20px;"></i>
                    <h4 class="mb-1 d-inline-block"> Service Brochure</h4>
                    <a class="font-secondary text-color d-block ml-4" href="#">Download pdf</a>
                </div>
                <!-- Opening Hours -->
                <div class="mb-50">
                    <h5 class="mb-20">Opening Hours</h5>
                    <ul class="pl-0 border rounded px-4 py-3">
                        <li class=" font-secondary my-3 text-color">
                            <span class="d-inline-block font-weight-light text-dark" style="width: 130px;">Sun-Tues:</span>08.00am
                            - 06.00pm</li>
                        <li class=" font-secondary my-3 text-color">
                            <span class="d-inline-block font-weight-light text-dark" style="width: 130px;">Thursday:</span>08.00am
                            - 01.00pm</li>
                        <li class="text-danger font-secondary my-3">
                            <span class="d-inline-block font-weight-light text-dark" style="width: 130px;">Friday:</span>Closed</li>
                    </ul>
                </div>
                <!-- Consultation -->
                <div class="mb-50">
                    <h5 class="mb-20">Request Free Consultation</h5>
                    <form action="#" class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                        </div>
                        <div class="col-lg-12">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address"
                                required>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="question" id="question" class="form-control p-2" placeholder="Your Question Here..."
                                style="height: 150px;"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-primary" type="submit" value="send">Submit Request</button>
                        </div>
                    </form>
                </div>
            </aside>
            <!-- service single content -->
            <div class="col-lg-8 order-lg-2 order-1">
                
                <h3 class="mb-10">SR.Web Developer</h3>
                <h5 class="mb-30">Job Description</h5>
                <p class="mb-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                
                <h4 class="mb-30">Marketing Improvement Strategy</h4>
                <!-- chart -->
                <img class="img-fluid w-100 mb-40" src="images/service/service-chart.jpg" alt="chart">
                <p class="mb-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                <div class="mb-md-50">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <h4 class="mb-10">Benifits Of Service</h4>
                            <p class="mb-20">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div>
                                <ul class="d-inline-block pl-0 float-sm-left mr-sm-4">
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                                </ul>
                                <ul class="d-inline-block pl-0">
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 mt-sm-4 mt-md-0">
                            <img class="img-fluid rounded" src="images/service/benifit.jpg" alt="benifit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /service single -->
@section('externalScripts')
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('plugins/validation/jquery.validate.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
@endsection
@endsection