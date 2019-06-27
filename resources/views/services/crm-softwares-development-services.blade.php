@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Services') @section('content')


<section class="page-title overlay" style="background-image: url(images/background/techphant-crm.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">CRM Software Development</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li>CRM Software Development</li>
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
                <h3 class="text-dark">Bespoke CRM solution to increase business productivity

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
                        <h3>CRM Software Development</h3>
                    
                        <p>Get the right CRM solution to improve your sales productivity, boost up your win sales and grow your revenue.


                        </p>
                        
                        <h3>All inclusive CRM solutions

                        </h3>
                        <p>Our experts work closely with you ensuring your CRM solution delivers the functionality users expect and the flexibility required by your business to adapt and grow.

                            
                        </p>
                        <h4>Strategic CRM</h4>
                        <p>Strategic CRM is a kind of CRM in which the customers come first in place in the business. It does wonders in collecting, segregating and applying information about customers and market trends in order to help it come up with better value proposition for the customer.</p>
                        <h4>Operational CRM</h4>
                        <p>Operational CRM is mainly about customer-centric business processes like marketing, selling and services. This comprise of automations such as, Sales Force Automation, Marketing Automation and Service Automation. At TechPhant we have expertise in ZOHO and Sales Force.
</p>
                        <h4>Analytical CRM</h4>
                        <p>Based on capturing, interpreting, segregating, storing, modifying, processing and reporting customer-related data, Analytical CRM comprise of internal business-wide data such as Sales Data, Finance Data and Marketing Data.</p>
                        <h4>Collaboration CRM</h4>
                        <p>Smooth communication and transactions among businesses is possible via collaborative CRM. Collaborative CRM employs new communication systems such as chat rooms, web forums, Voice over Internet Protocol (VoIP) and Electronic Data Interchange (EDI). At Octal, we specialize in Sugar CRM.</p>
                       
                      
                       


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
