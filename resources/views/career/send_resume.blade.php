@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Send Your Resume')
@section('description','Techphant - It has been brought to our attention that some unscrupulous element posing as consultants and /or official entities of Techphant is sending out fraudulent e-mails and offer letters and are asking the recipient to appear for a face-to-face interview and charging hefty amounts for a job opening with Globussoft.Please note that Globussoft does not indulge in any practice of sending emails to candidate(s) asking for money or requiring candidates to deposit any sum with any bank(s) at any stage of the recruitment process.Techphant bears no responsibility for any loss or damage suffered by any individual in response to such fraudulent emails or false claims by consultants,fruadulent individuals.')
@section('keywords','www.techphant.com,A perfet IT-Tude, Web Scrapping Services, Techphant Raipur, IT Companies in Raipur')
 @section('content')


<section class="page-title overlay" style="background-image: url(images/background/techphant-send-cv.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Send Your Resume</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>Send Your Resume</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <h2 class="section-title section-title-border-half">Send Your Resume</h2>
               
				
<p style="text-align: justify;"><span style="color: #333333;">It has been brought to our attention that some unscrupulous element posing as consultants and /or official entities of Techphant is sending out fraudulent e-mails and offer letters and are asking the recipient to appear for a face-to-face interview and charging hefty amounts for a job opening with Globussoft.Please note that Globussoft does not indulge in any practice of sending emails to candidate(s) asking for money or requiring candidates to deposit any sum with any bank(s) at any stage of the recruitment process.Techphant bears no responsibility for any loss or damage suffered by any individual in response to such fraudulent emails or false claims by consultants,fruadulent individuals.</span></p>
<p style="text-align: justify;"><span style="color: #333333;">These emails sometimes may carry the ID or domain name of Globussoft to make it look authentic but if you look closely at the headers, the from email will be of a different domain.</span></p>
<p style="text-align: justify;"><span style="color: #333333;">Also please be advised that Techphant issues offer letters to hired candidates in the form of hard copy only in person at Bangalore/Bhilai regional offices. It is the responsiblity of the candidate to cross verify the reference number mentioned in the offer letter with the HR Department by calling the office on the numbers as given in the Globussoft Website or below.</span></p>
<p style="text-align: justify;"><span style="color: #333333;">As a vigilant jobseeker,please make note of the above points. We advise candidates not to respond to any fraudulent emails and not to make any payments directly or indirectly.Incase of any doubt please contact</span></p>
<p>
<span style="color: #333333;"> For Enquiries : +91 98279-08960</span></p>

			
            </div>
            <div class="col-lg-4">
                <div class="rounded p-5 box-shadow position-sticky" style="top:50px;">
                    <!-- form -->
                    <form action="{{route('send_resume.post')}}" class="row" name="send_resume" id="send_resume" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="col-lg-12">
                            <h4 class="mb-20">Send Your Resume</h4>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
                        </div>
                        <div class="col-lg-12">
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
                            <input type="number" class="form-control" name="total_experience"  placeholder="Total Experience" min=0 oninput="validity.valid||(value='');>
                        </div>
                        <div class="col-lg-12">
                            <input type="number" class="form-control" name="current_ctc" placeholder="Current CTC" min=0 oninput="validity.valid||(value='');>
                        </div>
                        <div class="col-lg-12">
                            <input type="number" class="form-control" name="expected_ctc"  placeholder="Expected CTC" min=0 oninput="validity.valid||(value='');>
                        </div>
                        <div class="col-lg-12">
                            <input type="file" class="form-control" name="resume"  placeholder="Resume" required >
                        </div>
                        <div class="col-lg-12">
                            <textarea name="message" class="form-control pt-2" placeholder="Your Question Here..." style="height: 130px;"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-primary send_resume" type="submit" value="send">Send Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
