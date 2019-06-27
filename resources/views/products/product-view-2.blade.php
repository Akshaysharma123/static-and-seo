@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Products') 
@section('description','Techphant - Products- Explore Near By.')
@section('keywords','www.techphant.com,A perfet IT-Tude, Web Scrapping Services, Techphant Raipur, IT Companies in Raipur') @section('content')

<section class="page-title overlay" style="background-image: url(../../images/background/techphant-products.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Products</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('products')}}">Products</a>
                    </li>
                    <li>Bprisma</li>
                </ol>
            </div>
        </div>
    </div>
</section>



<section class="section">
    <div class="container">
        <div class="row">
            <aside class="col-lg-4 order-lg-1 order-2">
                <!-- overview -->
                <div class="p-4 rounded border mb-50">
                    <h4 class="text-color mb-20">Overview</h4>
                    <ul class="pl-0 mb-20">
                        <li class="py-3 border-bottom">
                            <span class="d-inline-block" style="width: 140px;">Project Name:</span><strong>Bprisma</strong></li>

                        <li class="py-3 border-bottom">
                            <span class="d-inline-block" style="width: 140px;">Category:</span>Micro Learning Framework</li>
                        <li class="py-3 border-bottom">
                            <span class="d-inline-block" style="width: 140px;">Expertise:</span>Web/App</li>
                      
                       
                    </ul>
                    <a href="{{route('contact')}}" class="btn btn-primary">Request For Demo</a>
                </div>
                <!-- case study -->
                <div class="rounded bg-gray border py-3 px-4 mb-10">
                    <a href="#" target="_blank"
                        title="Download Android App"><i class="d-inline-block mr-1 text-dark ti-android" style="font-size: 20px;"></i>
                        <h4 class="mb-1 d-inline-block">Download Android App</h4>
                    </a>

                </div>
                <div class="rounded bg-gray border py-3 px-4 mb-10">
                    <a href="#" title="Download Android App"><i class="d-inline-block mr-1 text-dark ti-apple" style="font-size: 20px;"></i>
                        <h4 class="mb-1 d-inline-block">Download IOS App</h4>
                    </a>

                </div>

            </aside>
            <!-- project content -->
            <div class="col-lg-8 order-lg-2 order-1">
                <!-- <img class="img-fluid w-100 mb-60" src="../../images/background/techphant-explore-near-by.png" alt="project image"> -->
                <h3 class="mb-10">Bprisma</h3>
                <p class="mb-40">In today’s ever-changing marketplace, it’s becoming more and more difficult
to get an edge over competitors. Developing a strong value proposition is
one way to clearly explain to prospects why they should buy your solution
over others. In fact, a great value proposition could be the difference between
losing a sale or closing it. According to HubSpot, only 69% of B2B firms have
established value propositions, yet 54 percent of companies do nothing to
optimise theirs. A strong value proposition alone is not enough to get ahead
of your business rivals. It takes a well-prepared salesforce who can
effectively leverage your value proposition to make the difference. The best
way to prepare them to do so is with the ongoing, bite-sized training that’s
accessible from anywhere. Here, we’ll show you how you’ll gain a
competitive sales advantage with virtual micro-learning.<p>

                        <!-- nav tabs menu -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="challanges-tab" data-toggle="tab" href="#challanges"
                                    role="tab" aria-controls="challanges" aria-selected="true">About Feature</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="solution-tab" data-toggle="tab" href="#solution" role="tab"
                                    aria-controls="solution" aria-selected="false">Silent Feature</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="results-tab" data-toggle="tab" href="#results" role="tab"
                                    aria-controls="results" aria-selected="false">Other Feature</a>
                            </li>
                        </ul>
                        <!-- tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- tab 1 -->
                            <div class="tab-pane fade show active" id="challanges" role="tabpanel" aria-labelledby="challanges-tab">
                               
                            <div class="tab-content-item">
                                    <h6>Attract and retain good talent</h6>
                                    <p>Sales rep engagement increases when micro-learning is used instead of
other training methods because it’s in a format that’s easily incorporated into
their routine while meeting their desire to learn. It also increases job
satisfaction, since sales staff feels more prepared and enjoys their work
more. Plus, micro-learning is fun!</p>

                                </div>
                                <div class="tab-content-item">
                                    <h6>Faster onboarding</h6>
                                    <p>Effective salespeople are masters of a complex skillset. It takes technical
expertise and fine-tuned people skills to translate product specs into
persuasive value. Micro-learning shortens ramp time. This means less time
to full productivity and more reps selling at their full potential at all times. This
reduces the financial drain on the organization and creates a stronger selling
team compared to those of competitors.</p>

                                </div>
                                <div class="tab-content-item">
                                    <h6>Always up-to-date</h6>
                                    <p>n today’s marketplace there’s always something new to learn and changes
to know. They include updates relating to product, marketplace, prospect
challenges, industry information, competitors, and the best sales techniques.
With micro-learning, your reps are continually learning and always up to date
on the latest need-to-know information. It helps them easily keep their
knowledge and skills fresh. Consistently improving through reinforcement
with practice and application, they’re always ready for any prospect or
scenario.</p>

                                </div>
                                <div class="tab-content-item">
                                    <h6>The right information at the right time</h6>
                                    <p>Since virtual micro-learning is available from anywhere on any device, sales
reps can review the information they need, when they need it. For example,
2
they can refresh on value propositions for specific prospects just prior to
presenting to, or meeting with, them. This easy-to-access information makes
it possible for reps to respond promptly to prospect and customer questions
too, resulting in increased sales and customer satisfaction. The individualised
learning experience that micro-learning provides keeps reps interested and
wanting to learn more to fill their individual learning gaps.</p>

                                </div>
                                <div class="tab-content-item">
                                    <h6>Increased productivity</h6>
                                    <p>Unlike other learning methods, micro-learning doesn’t interrupt your reps’
daily work, it fits right in. They remain on-the-job instead of sitting in a training
room where they aren’t productive. Also, your team members learn faster and
retain more with micro-learning, so they’re better prepared to close more
business in less time.</p>

                                </div>
                                <div class="tab-content-item">
                                    <h6>More Agile</h6>
                                    <p>Matching the pace of today’s business, virtual micro-learning is more agile
than other forms of training and communication. Due to their brevity, microlearning
courses can be produced quickly and updated on the go. Plus,
notifications about changes to your company, competition, product, and more
are easily created and distributed with just a few clicks. This allows your
organisation to adapt to change quickly and easily in the marketplace.
As you can see, micro-learning enables your salesforce to be better prepared
to meet with various prospects, differentiate your solution, and win more
deals. With top talent that’s always up-to-date and continually improving,
you’ll already have an edge over your rivals. The resulting productivity
combined with your ability to rapidly change with the marketplace, your
industry opponents will be no match. It’s time for you to give this method of
learning a try and experience the competitive sales advantage with virtual
micro-learning in your company.</p>

                                </div>

                            </div>
                            <!-- tab 2 -->
                            <div class="tab-pane fade" id="solution" role="tabpanel" aria-labelledby="solution-tab">

                                <div class="tab-content-item">
                                    <h6>Quickly disseminate critical information to reps
anywhere, anytime.</h6>
<p>
    <ul style="list-style-type:disc">
        <li>Create and publish quick updates in less than 10 minutes</li>
        <li>Leverage mobile and web delivery to reach reps at any time</li>
        <li>Ensure knowledge retention with interactive quizzes</li>
        <li>Certify reps on key capabilities</li>
        <li>Track content engagement and identify gaps</li>
        <li>Create a communication channel unique to the sales team</li>
        <li>Keep your reps engaged on the field, during SKOs and in office</li>
        <li>Enable reps to learn with a fun and mobile experience</li>
        
    </ul>
</p>

                                </div>
                               

                            </div>
                            <!-- tab 3 -->
                            <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                            <div class="tab-content-item">
                                    <h6>A Single User Experience for Onboarding, Skills,
Updates, Coaching, and Analytics</h6>
<p>
    <ul style="list-style-type:disc">
        <li>Awesome User Experience</li>
        <li>Engaging Gamification</li>
        <li>Alerts/Notifications</li>
        <li>Any Content Source</li>
        <li>Intelligent Workflows</li>
        <li>Assessments</li>
        <li>Polls/Quizzes</li>
        <li>Certifications</li>
        
    </ul>
</p>

                                </div>
                            </div>
                        </div>
                       






            </div>
        </div>
    </div>
</section>



@endsection
