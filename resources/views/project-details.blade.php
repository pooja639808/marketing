@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
    <div class="left-shape">
        <img src="assets/img/breadcrumb-shape.png" alt="img">
    </div>
    <div class="right-shape">
        <img src="assets/img/breadcrumb-shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Case studies Details</h1>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="{{ route('index') }}">
                    Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Case studies Details
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Project Details Section Start -->
<section class="project-details-section fix section-padding">
    <div class="container">
        <div class="project-details-wrapper">
            <div class="project-details-items">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="details-top-items">
                            <div class="details-left">
                                <h2>Building digital products end to end</h2>
                                <ul class="post-cat">
                                    <li>
                                        <a href="{{ route('project.details') }}">creative</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('project.details') }}">Branding</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('project.details') }}">Analytics</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('project.details') }}">Audience</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="details-right">
                                <ul class="client-details">
                                    <li>
                                        Client: <span>David Martin</span>
                                    </li>
                                    <li>
                                        Year: <span>2024</span>
                                    </li>
                                    <li>
                                        Author: <span>Robart Mory</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details-content"> 
                <h3>Overview</h3>
                <div class="row g-4">
                    <div class="col-lg-7">
                        <p>
                            Nam posuere mauris enim, quis pretium elit placerat id  Fusce egestas nisi vel ipsum vehicula facilisis In pulvinar imperdiet venenatis  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eu pulvinar lorem. Etiam vestibulum ligula quis nisl feugiat, consectetur placerat augue vestibulum  Nulla aliquam elit eu diam pharetra.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <p>
                            Fusce egestas nisi vel ipsum vehicula facilisis. In pulvinar imperdiet venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eu pulvinar lorem. Etiam vestibulum ligula quis nisl feugiat, consectetur placerat augue vestibulum.
                        </p>
                    </div>
                </div>
                <h3 class="mt-5">Finial Results Of the Project</h3>
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="list-items">
                            <ul>
                                <li><span>consectetur placerat augue vestibulum</span></li>
                                <li><span>Mauris tincidunt a eget facilisis  Quisque</span></li>
                                <li><span>Lorem ipsum dolor sit amet, consectetur</span></li>
                            </ul>
                            <ul>
                                <li><span>adipiscing elit Etiam aliquam, enim vitae</span></li>
                                <li><span>Donec at augue ante Nam posuere mauris</span></li>
                                <li><span>quis pretium elit placerat id Fusce egestas</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="progress-area">
                            <div class="progress-wrap">
                                <div class="pro-items">
                                    <div class="pro-head">
                                        <h6 class="title">
                                            Branding Design
                                        </h6>
                                        <span class="point">
                                            86%
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-value"></div>
                                    </div>
                                </div>
                                <div class="pro-items">
                                    <div class="pro-head">
                                        <h6 class="title">
                                            Business
                                        </h6>
                                        <span class="point">
                                            96%
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-value style-two"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-md-6">
                        <div class="details-image">
                            <img src="assets/img/case-studies/details-1.jpg" alt="img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="details-image">
                            <img src="assets/img/case-studies/details-2.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-button d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-xxl-4 gap-3 gap-2">
                    <button class="cmn-prev cmn-border d-center">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <span class="fw-bold white-clr previus-text text-capitalize">
                        previous
                    </span>
                </div>
                <div class="d-flex align-items-center gap-xxl-4 gap-3 gap-2">
                    <span class="fw-bold white-clr previus-text text-capitalize">
                        Next
                    </span>
                    <button class="cmn-next cmn-border d-center">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Cta Section Start -->
<section class="cta-section section-padding pb-0">
    <div class="rokect-shape float-bob-y">
        <img src="assets/img/rokect.png" alt="img">
    </div>
    <div class="container">
        <div class="cta-wrapper bg-cover" style="background-image: url('assets/img/cta-bg.jpg');">
            <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <img src="assets/img/cta-img.png" alt="img">
            </div>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Stay Connected With <br> Cutting Edge IT
            </h2>
            <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                <a href="{{ route('contact') }}"> <span class="theme-btn"> talk TO  A SPECIALIST </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section Start -->
<section class="footer-section footer-bg fix">
    <div class="container">
        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="{{ route('index') }}">
                                <img src="assets/img/logo/white-logo.svg" alt="img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                                Phasellus ultricies aliquam volutpat 
                                ullamcorper laoreet neque, a lacinia
                                curabitur lacinia mollis
                            </p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Quick Links</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ route('about') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Innov Digital About
                                </a>
                            </li>
                            <li>
                                <a href="service.blade.php">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Our Services
                                </a>
                            </li>
                            <li>
                                <a href="news.blade.php">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Our Blogs
                                </a>
                            </li>
                            <li>
                                <a href="faq.blade.php">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    FAQ’S
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Recent Posts</h3>
                        </div>
                        <div class="recent-post-area">
                            <div class="recent-post-items">
                                <div class="thumb">
                                    <img src="assets/img/news/pp1.jpg" alt="post-img">
                                </div>
                                <div class="content">
                                    <ul class="post-date">
                                        <li>
                                            <i class="fa-solid fa-calendar-days me-2"></i>
                                            20 Feb, 2024
                                        </li>
                                    </ul>
                                    <h6>
                                        <a href="{{ route('news.details') }}">
                                            Top 5 Most Famous <br>
                                            Technology Trend In 2024
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <div class="recent-post-items mb-0">
                                <div class="thumb">
                                    <img src="assets/img/news/pp2.jpg" alt="post-img">
                                </div>
                                <div class="content">
                                    <ul class="post-date">
                                        <li>
                                            <i class="fa-solid fa-calendar-days me-2"></i>
                                            15 Dec, 2024
                                        </li>
                                    </ul>
                                    <h6>
                                        <a href="{{ route('news.details') }}">
                                            The Surfing Man Will Blow <br>
                                            Your Mind   
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footer-content">
                            <ul class="contact-info">
                                <li>
                                    <i class="fa-regular fa-envelope"></i>
                                    <a href="mailto:info@example.com">info@example.com</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <a href="tel:2086660112">+208-666-0112</a>
                                </li>
                            </ul>
                            <div class="footer-input">
                                <input type="email" id="email2" placeholder="Your email address">
                                <button class="newsletter-btn" type="submit">
                                    <i class="fa-regular fa-arrow-right-long"></i>
                                </button>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                <label class="form-check-label" for="flexCheckChecked">
                                    I agree to the <a href="{{ route('contact') }}">Privacy Policy.</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                    © All Copyright 2024 by Innov Digital
                </p>
                <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="{{ route('contact') }}">
                            Terms & Condition       
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="#" id="scrollUp" class="scroll-icon">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
</section>
    
   