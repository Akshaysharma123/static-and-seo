@extends('layouts.master_layout') @section('title',env('APP_NAME').' | Services') @section('content')


<section class="page-title overlay" style="background-image: url(images/background/techphant-ecommerce.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">E-Commerce Development</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li>E-Commerce Development</li>
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
                <h3 class="text-dark">Enabling businesses to embrace change!


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
                        <h3>E-Commerce Web Development</h3>

                        <p>E-commerce is a perfect way to buy and sell the products online and is a quick and
                            convenient way to exchange goods and services and we at TechPhant develop high quality
                            e-commerce websites that suits the needs of our clients in a brilliant way. Our e-commerce
                            web development team works on custom design layout and develops a secured gateway to
                            payments which is highly important to run a website 24x7 successfully. <br>
                            As e-commerce sales are growing every year, the competition has become very tough and we at
                            TechPhant can help you think beyond the competition and keep your buyers happy

                        </p>
                        <p>The complete ecommerce package will be delivered at affordable costing with full featured
                            cart and interactive designs.
                            If you are starting your new business, like B2B or B2C, then our team have experts who are
                            professional in delivering full featured e-commerce applications with featured carts,
                            interactive portfolios and safe payment process to bring more sales for your business.
                            We can build online stores using licensed, open source as well as hosted services like
                            Opencart, Magento, WordPress, Joomla, Big Commerce, Drupal etc.
                            E-commerce Development Areas we are expert in:
                            <ul class="customul">
                                <li>Magento</li>
                                <li>Opencart</li>
                                <li>Prestashop</li>
                                <li>Shopify</li>
                                <li>Bigcommerce</li>
                                <li>OSCommerce</li>
                                <li>Woocommerce</li>
                            </ul>
                        </p>

                        <h3>E-Commerce Features

                        </h3>
                        <p>Open Source eCommerce App Development, Modification and Customization.
                            <ul class="customul">

                                <li>Build user-friendly and feature-rich eCommerce websites and mobile apps. All features of the online e-shop are limitless, and you'll be provided 100% of the database and source code.</li>
                                <li>Only one-time investment. No monthly installment to pay. Complete use of open-source technology. No license fees.
                                    </li>
                                <li>We offer help for payment gateway addition. Available payment gateways are PayTM, PayU, Atom, PayPal, Google Wallet, EMVANTAGE, ICICI PaySeal, 2Checkout, Sage Pay, EBS, CCAvenue and many more.
                                    </li>
                                    <li>Total support for shipping integration in form of barcode creation, shipment tracking, pin code confirmation, and automatic shipment generation with Gati, Delhivery, DTDC, Blue Dart, FirstFlight and all. 
                                        </li>
                                        <li> Easily shift eCommerce website linked products and client details to a new e-shop site with our latest data management tools. </li>
                                        <li>Complete help for warehousing and fulfillment with Management Information System and latest reports. We have tie-up with ERP systems available.</li>
                                        <li>After website / app development, take benefit of our expertise for preservation, digital marketing, social media promotion, SMO, SEO and reputation management of your e-shop. 
                                            </li>
                            </ul>
                        </p>
                        <p>Use our committed development service if you wish to be adjustable on development work horizon with everyday reporting!</p>





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
