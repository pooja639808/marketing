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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Blog Details</h1>
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
                    Blog Details
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- News Details Section Start -->
<section class="news-details-section section-padding">
    <div class="container">
        <div class="news-details-wrapper">
            <div class="row g-4">
                <div class="col-12 col-lg-8">
                    <div class="news-post-details">
                        <div class="single-news-post">
                            <div class="post-featured-thumb">
                                <img src="assets/img/news/details-1.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <ul class="post-list d-flex align-items-center">
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        18 Dec, 2024
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        Technology
                                    </li>
                                </ul>
                                <h3>Choose The Best IT Service Company in the City.</h3>
                                <p class="mb-3">
                                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in reprehenderit.
                                </p>
                                <p class="mb-3">
                                    The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta arcu In hac habitasse the is platea augue thelorem turpoi dictumst. In lacus libero faucibus at malesuada sagittis placerat eros sed istincidunt augue ac ante rutrum sed the is sodales augue consequat.
                                </p>
                                <p class="mt-4 mb-5">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros.
                                </p>
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="details-image">
                                            <img src="assets/img/news/details-2.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="details-image">
                                            <img src="assets/img/news/details-3.jpg" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="hilight-text mt-4">
                                    <p>
                                        Pellentesque sollicitudin congue dolor non aliquam. Morbi volutpat, nisi vel ultricies urnacondimentum, sapien neque lobortis tortor, quis efficitur mi ipsum eu metus. Praesent eleifend orci sit amet est vehicula.
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                        <path d="M7.71428 20.0711H0.5V5.64258H14.9286V20.4531L9.97665 30.3568H3.38041L8.16149 20.7947L8.5233 20.0711H7.71428Z" stroke="#6A47ED"></path>
                                        <path d="M28.2846 20.0711H21.0703V5.64258H35.4989V20.4531L30.547 30.3568H23.9507L28.7318 20.7947L29.0936 20.0711H28.2846Z" stroke="#6A47ED"></path>
                                    </svg>
                                </div>
                                <p class="pt-5">
                                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in reprehenderit.
                                </p>
                            </div>
                        </div>
                        <div class="row tag-share-wrap mt-4 mb-5">
                            <div class="col-lg-8 col-12">
                                <div class="tagcloud"> 
                                    <span>Tags:</span>                                  
                                    <a href="{{ route('news.details') }}">Security</a>
                                    <a href="{{ route('news.details') }}">UI/UX Desing</a>
                                    <a href="{{ route('news.details') }}">Digital</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                <div class="social-share">
                                    <span class="me-3">Share:</span>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>                                    
                                    <a href="#"><i class="fab fa-youtube"></i></a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <div class="comments-heading">
                                <h3>02 Comments</h3>
                            </div>
                            <div class="blog-single-comment d-flex gap-4 pt-4 pb-5">
                                <div class="image">
                                    <img src="assets/img/news/comment-1.png" alt="image">
                                </div>
                                <div class="content">
                                    <div class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                        <div class="con">
                                            <h5><a href="{{ route('news.details') }}">Leslie Alexander</a></h5>
                                            <span>February 10, 2024 at 2:37 pm</span>
                                        </div>
                                        <a href="news-details.blade.php" class="reply">Reply</a>
                                    </div>
                                    <p class="mt-30 mb-4">
                                        Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy
                                    </p>
                                </div>
                            </div>
                            <div class="blog-single-comment d-flex gap-4 pt-4 pb-5">
                                <div class="image">
                                    <img src="assets/img/news/comment-2.png" alt="image">
                                </div>
                                <div class="content">
                                    <div class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                        <div class="con">
                                            <h5><a href="{{ route('news.details') }}">Ralph Edwards</a></h5>
                                            <span>February 10, 2024 at 2:37 pm</span>
                                        </div>
                                        <a href="news-details.blade.php" class="reply">Reply</a>
                                    </div>
                                    <p class="mt-30 mb-4">
                                        Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form-wrap pt-5">
                            <h3>Leave a Comment</h3>
                            <form action="#" id="contact-form" method="POST">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <span>Your Name*</span>
                                            <input type="text" name="name" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <span>Your Email*</span>
                                            <input type="text" name="email" id="email2" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <span>Message*</span>
                                            <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="theme-btn ">
                                            post comment<i class="fa-solid fa-arrow-right-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="main-sidebar sticky-style">
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>Search</h4>
                            </div>
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>All Services</h4>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
                                    <li><a href="{{ route('news.details') }}">Digital Agency</a> <span>(7)</span></li>
                                    <li><a href="{{ route('news.details') }}">Business</a> <span>(4)</span></li>
                                    <li class="active"><a href="{{ route('news.details') }}">Digital Product</a> <span>(5)</span></li>
                                    <li><a href="{{ route('news.details') }}">Social Marketing</a> <span>(3)</span></li>
                                    <li><a href="{{ route('news.details') }}">System</a> <span>(6)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="recent-post-area">
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="assets/img/news/pp3.jpg" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-calendar-days"></i>
                                                14 Feb, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="{{ route('news.details') }}">
                                                Which Yoga Hybrid is Right <br> for Your?
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="assets/img/news/pp4.jpg" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-calendar-days"></i>
                                                12 Mar, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="{{ route('news.details') }}">
                                                Keep Your Business Safe <br> Ensure High Availability
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="assets/img/news/pp5.jpg" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-calendar-days"></i>
                                                23 Feb, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="{{ route('news.details') }}">
                                                Tackling the Changes of <br> Retell Industry
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>Tag</h4>
                            </div>
                            <div class="news-widget-categories">
                                <div class="tagcloud">
                                    <a href="{{ route('news.details') }}">Security</a>     
                                    <a href="{{ route('news.details') }}">Business</a>
                                    <a href="{{ route('news.details') }}">Digital</a>
                                    <a href="{{ route('news.details') }}">Technology</a>
                                    <a href="{{ route('news.details') }}">Change</a>
                                    <a href="{{ route('news.details') }}">Video</a>
                                    <a href="{{ route('news.details') }}">UI/UX Desing</a>
                                    <a href="{{ route('news.details') }}">Startup</a>
                                    <a href="{{ route('news.details') }}">Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
        
  