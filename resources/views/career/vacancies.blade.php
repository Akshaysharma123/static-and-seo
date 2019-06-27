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
                    <li>Vacancies</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="section-title section-title-border-half">Vacancies</h2>
              
				
                <p style="text-align: justify;"><span style="color: #333333;">It has been brought to our attention that some unscrupulous element posing as consultants and /or official entities of Techphant Consulting Group is sending out fraudulent e-mails and offer letters and are asking the recipient to appear for a face-to-face interview and charging hefty amounts for a job opening with Techphant.Please note that Techphant does not indulge in any practice of sending emails to candidate(s) asking for money or requiring candidates to deposit any sum with any bank(s) at any stage of the recruitment process.Techphant technologies bears no responsibility for any loss or damage suffered by any individual in response to such fraudulent emails or false claims by consultants,fruadulent individuals.</span></p>
                <p style="text-align: justify;"><span style="color: #333333;">These emails sometimes may carry the ID or domain name of Techphant to make it look authentic but if you look closely at the headers, the from email will be of a different domain.</span></p>
                <p style="text-align: justify;"><span style="color: #333333;">Also please be advised that Techphant technologies issues offer letters to hired candidates in the form of hard copy only in person at Bangalore/Bhilai regional offices. It is the responsiblity of the candidate to cross verify the reference number mentioned in the offer letter with the HR Department by calling the office on the numbers as given in the Techphant Website or below.</span></p>
                <p style="text-align: justify;"><span style="color: #333333;">As a vigilant jobseeker,please make note of the above points. We advise candidates not to respond to any fraudulent emails and not to make any payments directly or indirectly.Incase of any doubt please contact</span></p>
                <p>
                <span style="color: #333333;"> For Enquiries : +91 98279-08960</span></p>
    <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                        <th>No</th>
                            <th>Title</th>
                            <th>City</th>
                            <th>Job Description</th>
                            <th>Skills</th>
                            <th>Exp.</th>
                            <th>Job Type</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                            <td>SR. Web Developer</td>
                            <td>Raipur</td>
                            <td>Designing, Coding and Implementation of complex web applications..</td>
                            <td>PHP, java, Python, ReactJS, AngularJS, Micro Framework Slim, Lumen</td>
                            <td>3-6 Yr</td>
                            <td>Full Time</td>
                            <td><a href="#" data-target="#myModal" data-toggle="modal" class="btn btn-sm">Apply</a></td>
                        </tr>
                        <tr>
                        <td>2</td>
                            <td>Senior Android Developer</td>
                            <td>Raipur</td>
                            <td>Design and build advanced applications for the Android platform..</td>
                            <td>Android</td>
                            <td>2+</td>
                            <td>Full Time</td>
                            <td><a href="#myModal" data-target="#myModal" data-toggle="modal" class="btn btn-sm">Apply</a></td>
                        </tr>
                        <tr>
                        <td>3</td>
                            <td>IOS Developer</td>
                            <td>Raipur</td>
                            <td>Experience in the area of software development for mobiles and web, which includes understanding requirement specification, working on software design, coding, testing and maintenance..</td>
                            <td>iOS Platform</td>
                            <td>2+</td>
                            <td>Full Time</td>
                            <td><a href="#" data-target="#myModal" data-toggle="modal" class="btn btn-sm">Apply</a></td>
                        </tr>
                       
                    </tbody>
                </table>
    </div>
                          
            </div>
          
        </div>
    </div>
</section>
<section>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header1">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="p-5 rounded box-shadow">
      <form action="{{route('send_resume.post')}}" class="row" name="send_resume" id="send_resume" method="post" enctype="multipart/form-data">
                    @csrf
      <div class="col-lg-12">
                            <h4 class="section-title section-title-border-half">Send Your Resume</h4>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                        </div>
                        <div class="col-lg-12">
                           <select name="post" class="form-control" required>
                               <option value="">--Select One--
                               </option>
                               <option value="Software Developer">Software Developer
                               </option>
                               <option value="Software Engineer">Software Engineer
                               </option>
                               <option value="Tester">Tester
                               </option>
                               <option value="Android Developer">Android Developer
                               </option>
                               <option value="IOS Developer">IOS Developer
                               </option>
                           </select>
                        </div>
                        <div class="col-lg-12">
                            <input type="number" class="form-control" name="total_experience"  placeholder="Total Experience" min=0 oninput="validity.valid||(value='');" >
                        </div>
                        <div class="col-lg-6">
                            <input type="number" class="form-control" name="current_ctc" placeholder="Current CTC" min=0 oninput="validity.valid||(value='');">
                        </div>
                        <div class="col-lg-6">
                            <input type="number" class="form-control" name="expected_ctc"  placeholder="Expected CTC" min=0 oninput="validity.valid||(value='');">
                        </div>
                        <div class="col-lg-12">
                            <input type="file" class="form-control" name="resume"  placeholder="Resume" required >
                        </div>
                        <div class="col-lg-12">
                            <textarea name="message" class="form-control pt-2" placeholder="Your Question Here..." style="height: 130px;"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn1 btn-primary1 send_resume" type="submit" value="send">Send Now</button>
                        </div>

      
    </div>
  </div>
</div>
</form>
</div>
</section>


@section('externalScripts')
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('plugins/validation/jquery.validate.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
@endsection
@endsection
<!-- The Modal -->

