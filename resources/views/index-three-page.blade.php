@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
<!-- Hero Section Start -->
<section class="hero-section hero-3" style="background-image: url('img/hero/hero-bg-3.jpg');">
    <div class="line-shape">
        <img src="{{ asset('img/hero/line-shape.png') }}" alt="img">
    </div>
    <div class="container-fluid">
        <div class="row g-4 justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h6 class="wow fadeInUp">go for advertising</h6>
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">
                        Achieve <span>Top Search</span>
                        Rankings With Our <br>
                        SEO services
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".5s">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or  randomised
                    </p>
                    <div class="hero-button">
                        <div class="main-button wow fadeInUp" data-wow-delay=".3s">
                            <a href="{{ route('about') }}"> <span class="theme-btn">EXPLORE MORE </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                        </div>
                        <a href="about.blade.php" class="link-btn wow fadeInUp" data-wow-delay=".5s">EXPLORE MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <img src="{{ asset('img/hero/hero-image-3.png') }}" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Section Start -->
<section class="service-section fix section-padding" id="services">
    <div class="bg-shape-2">
        <img src="{{ asset('img/service/bg-shape-2.png') }}" alt="img">
    </div>
    <div class="right-shape-3">
        <img src="{{ asset('img/service/right-shape-3.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <div class="sub-title bg-color-2 wow fadeInUp">
                <span>OUR SERVICES</span>
            </div>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Use SEO to Drive Growth <br> at Your Business
            </h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-card-items style-2">
                    <div class="service-thumb">
                        <img src="{{ asset('img/service/01.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3 class="title-2">
                            <a href="{{ route('service.details') }}">SEO Marketing</a>
                        </h3>
                        <p>
                            Collaboratively formulate principle capital doing progressively evolve user
                        </p>
                        <a href="service-details.blade.php" class="service-btn">Read more <i class="fa-solid fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-card-items style-2">
                    <div class="service-thumb">
                        <img src="{{ asset('img/service/05.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3 class="title-2">
                            <a href="{{ route('service.details') }}">Social Media Marketing</a>
                        </h3>
                        <p>
                            Collaboratively formulate principle capital doing progressively evolve user
                        </p>
                        <a href="service-details.blade.php" class="service-btn">Read more <i class="fa-solid fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="service-card-items style-2">
                    <div class="service-thumb">
                        <img src="{{ asset('img/service/06.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3 class="title-2">
                            <a href="{{ route('service.details') }}">Email Marketing</a>
                        </h3>
                        <p>
                            Collaboratively formulate principle capital doing progressively evolve user
                        </p>
                        <a href="service-details.blade.php" class="service-btn">Read more <i class="fa-solid fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section Start -->
<section class="team-section fix section-padding bg-cover" style="background-image: url('assets/img/team/team-bg.jpg');">
    <div class="shape-img float-bob-y">
        <img src="{{ asset('img/service/rocket-shape.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="team-wrapper style-3">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="team-image-2">
                        <img src="{{ asset('img/team/02.png') }}" alt="img" class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="client-shape float-bob-x">
                            <img src="{{ asset('img/team/client-shape.png') }}" alt="img">
                        </div>
                        <div class="box-shape float-bob-y">
                            <img src="{{ asset('img/team/box-shape.png') }}" alt="img">
                        </div>
                        <a href="team.blade.php" class="circle-button">
                            <i class="fa-regular fa-arrow-up-right"></i>
                            <span class="text-circle">
                                <img src="{{ asset('img/about/white-text.png') }}" alt="img">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-content">
                        <div class="section-title">
                            <div class="sub-title bg-color-2 wow fadeInUp">
                                <span>OUR EXPERT TEAM</span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Let’s make something awesome together
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            Every pleasure is to be welcomed and every pain avoided. certain circumstances and owing to the claims welcomed and every pain avoided certain circumstances
                        </p>
                        <div class="list-items wow fadeInUp" data-wow-delay=".3s">
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#6A47ED"/>
                                    </svg>
                                    30-day money back guarantee
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#6A47ED"/>
                                    </svg>
                                    Web site Marketing Solutions
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#6A47ED"/>
                                    </svg>
                                    Unlimited Application
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#6A47ED"/>
                                    </svg>
                                    24/7 system Monitoring
                                </li>
                            </ul>
                        </div>
                        <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                            <a href="{{ route('team') }}">Our Team</a>
 <span class="theme-btn"> EXPLORE MORE </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Marque Section Start -->
<div class="marquee-section-1 marquee-2">
    <div class="mycustom-marque style-2 bg-2">
        <div class="scrolling-wrap">
            <div class="comm">
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
            </div>
        </div>
    </div>
    <div class="mycustom-marque style-3 bg-3">
        <div class="scrolling-wrap">
            <div class="comm">
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
                <div class="cmn-textslide"><img src="{{ asset('img/star-2.png') }}" alt="img">THE BEST SOULTION</div>
            </div>
        </div>
    </div>
</div>

<!-- Case Studies Section Start -->
<section class="case-studies-section-3 fix section-padding" id="projects">
    <div class="container">
        <div class="section-title text-center">
            <div class="sub-title wow fadeInUp">
                <span>Case Studies</span>
            </div>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                We Are A Creative Digital <br>
                Marketing Agency
            </h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="swiper project-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="case-studies-card-items">
                        <div class="thumb">
                            <img src="{{ asset('img/case-studies/02.jpg') }}" alt="img">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h3><a href="{{ route('project.details') }}">Digital Marketing</a></h3>
                                <p>Marketing</p>
                            </div>
                            <a href="project-details.blade.php" class="icon"><i class="fa-regular fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="case-studies-card-items">
                        <div class="thumb">
                            <img src="{{ asset('img/case-studies/03.jpg') }}" alt="img">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h3><a href="{{ route('project.details') }}">PPC Advertising</a></h3>
                                <p>Seo Design</p>
                            </div>
                            <a href="project-details.blade.php" class="icon"><i class="fa-regular fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="case-studies-card-items">
                        <div class="thumb">
                            <img src="{{ asset('img/case-studies/04.jpg') }}" alt="img">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h3><a href="{{ route('project.details') }}">Construction Planning</a></h3>
                                <p>Designer</p>
                            </div>
                            <a href="project-details.blade.php" class="icon"><i class="fa-regular fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section Start -->
<section class="team-section-3 fix section-padding">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <div class="sub-title wow fadeInUp">
                    <span>OUR expert</span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Use SEO to Drive Growth <br> at Your Business
                </h2>
            </div>
            <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                <a href="{{ route('team') }}">Our Team</a>
 <span class="theme-btn">EXPLORE MORE </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="team-card-items">
                    <div class="team-image">
                        <img src="{{ asset('img/team/01.jpg') }}" alt="img">
                    </div>
                    <div class="team-content">
                        <h3><a href="team-details.blade.php">Reful Miya</a></h3>
                        <p>CO-Leader</p>
                    </div>
                    <div class="icon-shape">
                        <img src="{{ asset('img/team/icon-shape.png') }}" alt="img">
                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="team-card-items">
                    <div class="team-image">
                        <img src="{{ asset('img/team/02.jpg') }}" alt="img">
                    </div>
                    <div class="team-content">
                        <h3><a href="team-details.blade.php">Shikhon Islam</a></h3>
                        <p>Web Developer</p>
                    </div>
                    <div class="icon-shape">
                        <img src="{{ asset('img/team/icon-shape.png') }}" alt="img">
                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="team-card-items">
                    <div class="team-image">
                        <img src="{{ asset('img/team/03.jpg') }}" alt="img">
                    </div>
                    <div class="team-content">
                        <h3><a href="team-details.blade.php">Abdullah Islam</a></h3>
                        <p>Web Development</p>
                    </div>
                    <div class="icon-shape">
                        <img src="{{ asset('img/team/icon-shape.png') }}" alt="img">
                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="team-card-items">
                    <div class="team-image">
                        <img src="{{ asset('img/team/04.jpg') }}" alt="img">
                    </div>
                    <div class="team-content">
                        <h3><a href="team-details.blade.php">Leslie Alexander</a></h3>
                        <p>Nursing Assistant</p>
                    </div>
                    <div class="icon-shape">
                        <img src="{{ asset('img/team/icon-shape.png') }}" alt="img">
                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<!-- Marque Section Start -->
<div class="marquee-section section-padding pt-0">
    <div class="mycustom-marque theme-blue-bg">
        <div class="scrolling-wrap">
            <div class="comm">
                
                <div class="cmn-textslide stroke-text"><img src="{{ asset('img/has.png') }}" alt="img">Business Grow</div>
                <div class="cmn-textslide"><img src="{{ asset('img/has.png') }}" alt="img">Digital Marketing </div>
                <div class="cmn-textslide stroke-text"><img src="{{ asset('img/has.png') }}" alt="img">SEO Marketing</div>
                <div class="cmn-textslide"><img src="{{ asset('img/has.png') }}" alt="img">Email Marketingimg</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide stroke-text"><img src="{{ asset('img/has.png') }}" alt="img">Business Grow</div>
                <div class="cmn-textslide"><img src="{{ asset('img/has.png') }}" alt="img">Digital Marketing </div>
                <div class="cmn-textslide stroke-text"><img src="{{ asset('img/has.png') }}" alt="img">SEO Marketing</div>
                <div class="cmn-textslide"><img src="{{ asset('img/has.png') }}" alt="img">Email Marketingimg</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide stroke-text"><img src="{{ asset('img/has.png') }}" alt="img">Business Grow</div>
                <div class="cmn-textslide"><img src="{{ asset('img/has.png') }}" alt="img">Digital Marketing </div>
                <div class="cmn-textslide stroke-text"><img src="{{ asset('img/has.png') }}" alt="img">SEO Marketing</div>
                <div class="cmn-textslide"><img src="{{ asset('img/has.png') }}" alt="img">Email Marketingimg</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide stroke-text"><img src="{{ asset('img/has.png') }}" alt="img">Business Grow</div>
                <div class="cmn-textslide"><img src="{{ asset('img/has.png') }}" alt="img">Digital Marketing </div>
                <div class="cmn-textslide stroke-text"><img src="{{ asset('img/has.png') }}" alt="img">SEO Marketing</div>
                <div class="cmn-textslide"><img src="{{ asset('img/has.png') }}" alt="img">Email Marketingimg</div>
            </div>
        </div>
    </div>
</div>

<!-- About Section Start -->
<section class="about-section-2 fix section-padding bg-cover" id="about" style="background-image: url('img/team/team-bg.jpg');">
    <div class="bg-shape">
        <img src="{{ asset('img/about/bg-shape-2.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="about-wrapper-2">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="about-image-2 wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img src="{{ asset('img/choose-us.png') }}" alt="img" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <div class="sub-title bg-color-2 wow fadeInUp">
                                <span>Why Choose us</span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Let’s make something awesome together
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            We're not just another agency – we're your digital growth partners. With
                            years of industry experience and a passion for innovation, our team is
                            dedicated to delivering measurable results propel your business forward.
                        </p>
                        <div class="icon-items-area">
                            <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                <div class="content mt-0">
                                    <h3>Analytics Reporting</h3>
                                    <p>Collaboratively formulate principle capital. Progressively evolve user </p>
                                </div>
                            </div>
                            <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="content mt-0">
                                    <h3>Data Guard Sentinel</h3>
                                    <p>Collaboratively formulate principle capital. Progressively evolve user </p>
                                </div>
                            </div>
                        </div>
                        <div class="main-button wow fadeInUp" data-wow-delay=".3s">
                            <a href="{{ route('about') }}"> <span class="theme-btn">EXPLORE MORE </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-marketing-2 section-padding pb-0">
        <div class="container">
            <div class="cta-marketing-wrapper">
                <div class="content">
                    <div class="section-title">
                        <div class="sub-title bg-color-3 wow fadeInUp">
                            <span>Free Marketing</span>
                        </div>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            Free digital marketing
                        </h2>
                    </div>
                    <ul class="list mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="white"/>
                            </svg>
                            Digital marketing
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="white"/>
                            </svg>
                            ECO optimization
                        </li>
                    </ul>
                </div>
                <div class="cta-input wow fadeInUp" data-wow-delay=".3s">
                    <input type="email" id="email" placeholder="Your email address">
                    <button class="newsletter-btn" type="submit">
                        <i class="fa-regular fa-arrow-right-long"></i>
                    </button>
                </div>
                <div class="cta-marketing-image wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <img src="{{ asset('img/cta-marketing.png') }}" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section Start -->
<section class="testimonial-section-3 section-padding pt-0">
    <div class="overlay-shape">
        <img src="{{ asset('img/testimonial/overlay-shape.png') }}" alt="img">
    </div>
    <div class="overlay-shape-2">
        <img src="{{ asset('img/testimonial/overlay-shape-2.png') }}" alt="img">
    </div>
    <div class="left-shape">
        <img src="{{ asset('img/testimonial/left-shape.png') }}" alt="img">
    </div>
    <div class="right-shape">
        <img src="{{ asset('img/testimonial/right-shape.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="testimonial-wrapper-3">
            <div class="client-1">
                <img src="{{ asset('img/testimonial/06.png') }}" alt="img">
            </div>
            <div class="client-2">
                <img src="{{ asset('img/testimonial/07.png') }}" alt="img">
            </div>
            <div class="client-3">
                <img src="{{ asset('img/testimonial/08.png') }}" alt="img">
            </div>
            <div class="client-4">
                <img src="{{ asset('img/testimonial/09.png') }}" alt="img">
            </div>
            <div class="swiper testimonial-slider-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-content">
                            <div class="icon">
                                <img src="{{ asset('img/testimonial/quote.png') }}" alt="img">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris nullam the as integer quam dolor nunc semper.  faucibus pulvinar neque. The as Suscipit tristique mauris consectetur platea.
                            </p>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="{{ asset('img/testimonial/05.png') }}" alt="img">
                                </div>
                                <div class="content">
                                    <h6>Esther Howard</h6>
                                    <span>Trader, USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-content">
                            <div class="icon">
                                <img src="{{ asset('img/testimonial/quote.png') }}" alt="img">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris nullam the as integer quam dolor nunc semper.  faucibus pulvinar neque. The as Suscipit tristique mauris consectetur platea.
                            </p>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="assets/img/testimonial/05.png" alt="img">
                                </div>
                                <div class="content">
                                    <h6>Esther Howard</h6>
                                    <span>Trader, USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-content">
                            <div class="icon">
                                <img src="{{ asset('img/testimonial/quote.png') }}" alt="img">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris nullam the as integer quam dolor nunc semper.  faucibus pulvinar neque. The as Suscipit tristique mauris consectetur platea.
                            </p>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="{{ asset('img/testimonial/05.png') }}" alt="img">
                                </div>
                                <div class="content">
                                    <h6>Esther Howard</h6>
                                    <span>Trader, USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cta Counter Section Start -->
<section class="cta-counter-section-2 section-padding bg-cover" style="background-image: url('img/cta-counter-bg.jpg');">
    <div class="container">
        <div class="cta-counter-wrapper-2">
            <div class="section-title-area">
                <div class="section-title">
                    <div class="sub-title bg-color-3 wow fadeInUp">
                        <span>Counter</span>
                    </div>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        Make your marketing <br> more effective
                    </h2>
                </div>
                <div class="counter-box-area">
                    <div class="counter-text wow fadeInUp" data-wow-delay=".3s">
                        <h2>
                            <span class="count">19.4</span>K
                        </h2>
                        <p>Projects Done</p>
                    </div>
                    <div class="counter-text wow fadeInUp" data-wow-delay=".5s">
                        <h2>
                            <span class="count">95.2</span>K
                        </h2>
                        <p>Happy Clients</p>
                    </div>
                    <div class="counter-text wow fadeInUp" data-wow-delay=".7s">
                        <h2>
                            <span class="count">142.6</span>K
                        </h2>
                        <p>Team Members</p>
                    </div>
                </div>
            </div>
            <div class="cta-video-image wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <img src="assets/img/cta-video.jpg" alt="img">
                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-icon video-popup">
                        <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- News Section Start -->
<section class="news-section pt-0 section-padding" id="blog">
    <div class="container">
        <div class="section-title text-center">
            <div class="sub-title bg-color-2 wow fadeInUp">
                <span>BLOG & NEWS</span>
            </div>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Featured News And Insights
            </h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ asset('img/news/05.jpg') }}" alt="img">
                    </div>
                    <div class="news-content">
                        <ul class="post-cat">
                            <li>
                                <i class="fa-regular fa-user"></i>
                                By Admin
                            </li>
                            <li>
                                <i class="fa-regular fa-tag"></i>
                                Business
                            </li>
                        </ul>
                        <h5><a href="{{ route('news.details') }}">About Personal Finance You Need to Stop Believing</a></h5>
                        <a href="{{ route('news.details') }}" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                        <div class="post-date">
                            <i class="fa-light fa-calendar-days"></i>
                            Oct  05, 2024
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ asset('img/news/06.jpg') }}" alt="img">
                    </div>
                    <div class="news-content">
                        <ul class="post-cat">
                            <li>
                                <i class="fa-regular fa-user"></i>
                                By Admin
                            </li>
                            <li>
                                <i class="fa-regular fa-tag"></i>
                                Business
                            </li>
                        </ul>
                        <h5><a href="{{ route('news.details') }}">Ways to Unnecessary Expenses and Save Money</a></h5>
                        <a href="{{ route('news.details') }}" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                        <div class="post-date">
                            <i class="fa-light fa-calendar-days"></i>
                            Oct  05, 2024
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ asset('img/news/07.jpg') }}" alt="img">
                    </div>
                    <div class="news-content">
                        <ul class="post-cat">
                            <li>
                                <i class="fa-regular fa-user"></i>
                                By Admin
                            </li>
                            <li>
                                <i class="fa-regular fa-tag"></i>
                                Business
                            </li>
                        </ul>
                        <h5><a href="{{ route('news.details') }}">Budgeting Hacks for a Stress-Free Financial Life</a></h5>
                        <a href="{{ route('news.details') }}" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                        <div class="post-date">
                            <i class="fa-light fa-calendar-days"></i>
                            Oct  05, 2024
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ asset('img/news/08.jpg') }}" alt="img">
                    </div>
                    <div class="news-content">
                        <ul class="post-cat">
                            <li>
                                <i class="fa-regular fa-user"></i>
                                By Admin
                            </li>
                            <li>
                                <i class="fa-regular fa-tag"></i>
                                Business
                            </li>
                        </ul>
                        <h5><a href="{{ route('news.details') }}">Things You Must Quit Believing About Finances</a></h5>
                        <a href="{{ route('news.details') }}" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                        <div class="post-date">
                            <i class="fa-light fa-calendar-days"></i>
                            Oct  05, 2024
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

<!-- Footer Section Start -->
<section class="footer-section footer-bg fix">
    <div class="container">
        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('img/logo/white-logo.svg') }}" alt="img">
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
                                    <img src="{{ asset('img/news/pp1.jpg') }}" alt="post-img">
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
                                    <img src="{{ asset('img/news/pp2.jpg') }}" alt="post-img">
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
        
   