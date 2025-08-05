@extends('layouts.app')

@section('title', 'Home Page')
@section('content')

<!-- Breadcrumb Section Start -->
 
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('img/breadcrumb.jpg');">
    <div class="left-shape">
        <img src="{{ asset('img/breadcrumb-shape.png') }}" alt="img">
    </div>
    <div class="right-shape">
        <img src="{{ asset('img/breadcrumb-shape-2.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
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
                    Contact Us
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Contact Info Section Start -->
<section class="contact-info-section fix section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="contact-info-items text-center active">
                    <div class="icon">
                        <i class="icon-09"></i>
                    </div>
                    <div class="content">
                        <h3>Our Address</h3>
                        <p>
                            2464 Royal Ln. Mesa, New Jersey <br> 45463.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="contact-info-items text-center">
                    <div class="icon">
                        <i class="icon-10"></i>
                    </div>
                    <div class="content">
                        <h3><a href="mailto:info@example.com">info@example.com</a></h3>
                        <p>
                            Email us anytime for anykind <br>
                            ofquety.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="contact-info-items text-center">
                    <div class="icon">
                        <i class="icon-11"></i>
                    </div>
                    <div class="content">
                        <h3>Hot:<a href="tel:+2086660112">+208-666-0112</a></h3>
                        <p>
                            Call us any kind suppor,we <br>
                            will wait for it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section Start -->
<section class="contact-section-33 fix section-padding pt-0">
    <div class="container">
        <div class="contact-wrapper-2">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="map-items">
                        <div class="googpemap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-content">
                        <h2>Ready to Get Started?</h2>
                        <p>
                            Nullam varius, erat quis iaculis dictum, eros urna varius eros, ut blandit felis odio in turpis. Quisque rhoncus, eros in auctor ultrices,
                        </p>
                        <form action="contact.php" id="contact-form" method="POST" class="contact-form-items">
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt">
                                        <span>Your name*</span>
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <span>Your Email*</span>
                                        <input type="text" name="email" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="form-clt">
                                        <span>Write Message*</span>
                                        <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                    <button type="submit" class="theme-btn">
                                        Send Message <i class="fa-solid fa-arrow-right-long"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cta Section Start -->
<section class="cta-section section-padding pb-0">
    <div class="rokect-shape float-bob-y">
        
        <img src="{{ asset('img/rokect.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="cta-wrapper bg-cover" style="background-image: url('img/cta-bg.jpg');">
            <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <img src="{{ asset('img/cta-img.png') }}" alt="img">
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

