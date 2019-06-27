@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Request a Quote')
@section('description','We are here to support your business! Techphant provides impactful customer service solutions that helps your business grow. Get a quote today for a custom solution that fits your business.
                We trust that you will find our price quotation satisfactory and look forward to working with you. Please contact us should you have any questions at all.')
@section('keywords','www.techphant.com,A perfet IT-Tude, Web Scrapping Services, Techphant Raipur, IT Companies in Raipur') @section('content')

<section class="page-title overlay" style="background-image: url(images/background/techphant-quote.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Request a Quote</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>Request a Quote</li>
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
                <h2 class="section-title">Request a Quote</h2>
              
                <p>We are here to support your business! Techphant provides impactful customer service solutions that helps your business grow. Get a quote today for a custom solution that fits your business.</p>
                <p>We trust that you will find our price quotation satisfactory and look forward to working with you. Please contact us should you have any questions at all.</p>
                <p><small>Note: the submitted data will be used only to contact regarding your quote request</small></p>
                
                            
            </div>
            <!-- form -->
            <div class="col-lg-6 col-md-7">
            @include('includes.alert')
                <div class="p-5 rounded box-shadow">
                <form name="get_quote" role="form" method="post" action="{{route('request.quote')}}" enctype="multipart/form-data" id="get_quote">
                @csrf
                <fieldset class="form-group">
    <legend>Choose Services:</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="product"  value="MOBILEAPP" >Mobile Application
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="product"  value="WEBAPP" >Web Application
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="product"  value="DESSKTOPAPP" >Desktop Application
      </label>
    </div>
  </fieldset>
  <div class="form-group">
    <label for="exampleInputEmail1">Other Imformation for product:</label>
    <textarea name="other_information" class="form-control"  placeholder="Any other information you think may be important" rows="5"></textarea>
   
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Product Urgency:</label>
    <select class="form-control" name="product_urgency">
    <option value="">--Select One--</option>
      <option value="low">Low</option>
      <option value="normal">Normal</option>
      <option value="high">High</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Estimated Project Start Date:</label>
    <input type="date" class="form-control" name="project_start_date" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Product Budget:</label>
    <input type="number" class="form-control" name="product_budget" placeholder="Budget">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact Person:</label>
    <input type="text" class="form-control" name="contact_person" placeholder="First/Last Name Of Contact Person" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact Email:</label>
    <input type="email" class="form-control" name="email" required placeholder="Email Address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact Number:</label>
    <input type="text" class="form-control" name="contact_number" placeholder="Contact Number">
    <small id="fileHelp" class="form-text text-muted">Please leave your phone number if would like us to call you in response to your quote request.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Any Attachment:</label>
    <input type="file" class="form-control-file" name="attachment">
    
  </div>
  
  
  <button class="btn btn-primary get_quote" type="submit" value="send">Submit Now</button>
</form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
