<footer class="bg-secondary">
    <div class="py-100 border-bottom" style="border-color: #454547 !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="mb-5 mb-md-0 text-center text-md-left">
                        <!-- logo -->
                        <a href="{{url('/')}}"><img class="mb-30" src="{{asset('images/footer_logo.png')}}" alt="logo"></a>

                        <ul class="pl-0 text-white">
                    <!-- contact items -->
                    <li class="d-flex">
                        <i class="mr-3 ti-mobile"></i>
                        <div class="align-self-center font-primary">

                            <p class="text-white">IN: +91 98279-08960 , CA: +1 (647) 806-3890</p>
                        </div>
                    </li>
                    <li class="d-flex">
                        <i class=" mr-3 ti-email"></i>
                        <div class="align-self-center font-primary">
                            <p class="text-white">contact@techphant.com</p>
                        </div>
                    </li>
                    <li class="d-flex">
                        <i class="mr-3 ti-map-alt"></i>
                        <div class="align-self-center font-primary">
                            <p class="text-white">B-Block 304, Vineet Estate,<br>Near Bottle House,New Shanti Nagar,<br> Raipur
                                Chhattisgarh-India</p>
                        </div>
                    </li>
                </ul>

                        <!-- social icon -->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="https://www.facebook.com/techphant" target="_blank">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="https://twitter.com/@TechphantCG" target="_blank">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="https://www.linkedin.com/company/techphant-consulting-group" target="_blank">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer links -->
                <div class="col-lg-2 col-md-4 col-6">
                <h4 class="text-white mb-4">Services</h4>
                <ul class="footer-links">
                    <li>
                        <a href="{{route('mobile-app-services')}}">App Development</a>
                    </li>
                    <li>
                        <a href="{{route('web-development-services')}}">Web Development</a>
                    </li>
                    <li>
                        <a href="{{route('cloud-based-services')}}">Cloud Based</a>
                    </li>
                    <li>
                        <a href="{{route('e-commerce-services')}}">e-Commerce</a>
                    </li>
                    <li>
                        <a href="{{route('crm-softwares-development-services')}}">CRM Softwares</a>
                    </li>
                </ul>
                </div>
                <!-- footer links -->
                <div class="col-lg-2 col-md-4 col-6">
                <h4 class="text-white mb-4">Quick Link</h4>
                <ul class="footer-links">

                    <li>
                        <a href="{{route('about')}}">About Us</a>
                    </li>
                    <li>
                        <a href="{{route('portfolio')}}">Portfolio</a>
                    </li>
                    <li>
                        <a href="{{route('products')}}">Products</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li>
                        <a href="{{route('quote')}}">Get an Quote</a>
                    </li>

                </ul>
                </div>
                <!-- subscribe form -->
                <div class="col-lg-3 col-md-12 offset-lg-1">
                    <div class="mt-5 mt-lg-0 text-center text-md-left">
                        <h4 class="mb-4 text-white">Subscribe Us</h4>
                        <p class="text-white mb-4">Signup here to get lastes news and updates directly to your inbox.</p>
                        <form action="{{route('subscribe_us')}}" class="position-relative" name="subscriber" id="subscriber" role="form" method="post">
                            @csrf
                            <input type="email" class="form-control subscribe" name="email" id="Subscribe" placeholder="Enter Your Email" required>
                            <button class="btn-subscribe subscribe_btn" type="submit" value="send">
                                <i class="ti-arrow-right"></i>
                            </button>
                        </form>
                        <!-- <p class="text-white mb-4">Registered unit in STPI</p>
                        <p><img src="images/stpi.png" alt="STPI" class="img-responsive"></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="pt-4 pb-3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <p class="text-white text-center text-md-left">
                        <span class="text-primary"><a style="color:#ffffff" href="{{route('home')}}">Techphant Consulting Group</span></a> &copy; {{Carbon\Carbon::now()->format('Y')}} All Right Reserved</p>
                </div>
                <div class="col-lg-6 col-md-7">
                    <ul class="list-inline text-center text-md-right">
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="#">Legal</a>
                        </li>
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="#">Sitemap</a>
                        </li>
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item ml-lg-3 my-lg-0 ml-2 my-2 ml-0">
                            <a class="font-secondary text-white" href="#">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- back to top -->
        <button class="back-to-top">
            <i class="ti-angle-up"></i>
        </button>
    </div>
</footer>
