@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Services') @section('content')


<section class="page-title overlay" style="background-image: url(images/background/techphant-cloud-computing.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Cloud Computing</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li>Cloud Computing</li>
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
                <h3 class="text-dark">Harness the power of internet!
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
                        <h3>Cloud Computing</h3>

                        <p>Cloud Computing has gained widespread acceptance as a means to steady growth. The 'cloud' harnesses the power of the internet to offer various pay-per-use hosted services- servers, storage, networking, data centers and applications- on demand.
                        </p>
                        
                        <h3>Cloud Computing Services &
Deployment Models


                        </h3>
                        <p>Cloud computing offers various deployment models, you can read the following and choose one that best suits your requirement -
                            <ul class="customul">
                                <li><strong>Public Cloud</strong> - Resources are offered as a solution through web applications/web services, based on the standard cloud computing model.
</li>

                                <li><strong>Community Cloud</strong> - This is best suited where more than one organization combine to build a computing solution by sharing infrastructure for a higher level of privacy, security and/or policy compliance. The costs are borne by more than one participants of the community.

                                </li>
                                <li><strong>Hybrid Cloud and Hybrid IT Delivery </strong>- A hybrid storage cloud uses a combination of public and private storage clouds. These are useful for archiving and backup functions, allowing local data to be replicated to a public cloud.
</li>
                                <li><strong>Combined Cloud</strong> - Combined cloud environment consists of multiple internal and/or external providers to ease the transition to public cloud services.

                                </li>
                                <li> <strong>Private Cloud </strong>- These are used essentially by the enterprises and IT organizations where information and security concerns are critical.
                                </li>
                              

                            </ul>
                        </p>
                       
                        <p>Why Choose TechPhant for Cloud Computing-
Our professionals with great industry knowledge & years of expertise ensure that your business reaches unrivalled position & sets a new level of success.


                        </p>
                       


                    </div>
                </div>



            </div>
            <div class="col-lg-4">
              @include('services.includes.right_bar')
            </div>
        </div>
    </div>
</section>
<!-- /blog-single -->
@endsection
