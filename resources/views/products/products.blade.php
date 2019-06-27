@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Products')
@section('description','Techphant - Products- Explore Near By.')
@section('keywords','www.techphant.com,A perfet IT-Tude, Web Scrapping Services, Techphant Raipur, IT Companies in Raipur') @section('content')

<section class="page-title overlay" style="background-image: url(images/background/techphant-products.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Our Products</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>Products</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h1 class="section-title section-title-border-half">Our Products</h1>
                <p class="mb-5">We develop high quality standard mobile apps for various categories like games, entertainment, health and fitness, social media management and many more. We have expertise in working with diverse brands, organizations, start-ups and individuals to create powerful apps from excellent ideas.

We focus on providing strategic planning and industry’s best products to compete in the market.</p>
            </div>
            <!-- team member -->
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card text-center p-3">
                    <img class="card-img-top rounded" src="images/products/techphant-explore-near-by-min.png" alt="team member image">
                    <div class="card-body pb-0">
                        <a href="{{route('product1')}}" class="card-title h4 font-primary text-dark">Explore Near By</a>
                        <h6 class="text-color">Android | IOS App</h6>
                        <p class="card-text border-bottom pb-3">Explore Nearby simplifies finding places of your interest around and near you.This handy, easy-to-use places finder application help you search the places of your interest around you.</p>
                        <a href="{{route('product1')}}" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card text-center p-3">
                    <img class="card-img-top rounded" src="images/products/techphant-bprisma-min.png " alt="team member image">
                    <div class="card-body pb-0">
                        <a href="{{route('product2')}}" class="card-title h4 font-primary text-dark">Bprisma</a>
                        <h6 class="text-color">Micro Learning Framework</h6>
                        <p class="card-text border-bottom pb-3">Micro-learning ensures your sales reps are up to date with a fun and
engaging experience.In today’s ever-changing marketplace, it’s becoming more and more difficult
to get an edge over..</p>
                        <a href="{{route('product2')}}" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div> <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card text-center p-3">
                    <img class="card-img-top rounded" src="images/products/techphant-ar-min.png" alt="team member image">
                    <div class="card-body pb-0">
                        <a href="#" class="card-title h4 font-primary text-dark">CreatAR Pro</a>
                        <h6 class="text-color">Augment Reality Business Card App</h6>
                        <p class="card-text border-bottom pb-3">Thanks to our Augmented Reality, your clients can see, share and keep the details of your business card.Set up all your personal data, videos, pictures and functions that the Augmented Reality will.. </p>
                        <a href="#" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /team -->


@endsection
