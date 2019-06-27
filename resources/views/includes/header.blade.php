
<header>
    <!-- top header -->
   @include('includes.header_top')
    <!-- nav bar -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('images/logo.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item {{ request()->is('home') ? 'active' : '' }}{{ request()->is('/') ? 'active' : '' }}" >
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="nav-item {{ request()->is('services') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('services')}}">Services</a>
                        </li>
                        <li class="nav-item {{ request()->is('products') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('products')}}">Products</a>
                        </li>
                        <li class="nav-item {{ request()->is('portfolio') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
                        </li>
                        
                        <li class="nav-item dropdown {{ request()->is('send-your-resume') ? 'active' : '' }}{{ request()->is('vacancies') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Career
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="{{route('vacancies')}}">Vacancies</a>
                                <a class="dropdown-item" href="{{route('send_resume')}}">Send Your Resume</a>
                            </div>
                        </li>
                        <li class="nav-item {{ request()->is('contact') ? 'active' : '' }} {{ request()->is('get-quote') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary btn-sm" href="{{route('quote')}}">get a quote</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>