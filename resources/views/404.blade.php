@extends('layouts.app')

@section('title', '404 Page')

@section('content')

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('img/breadcrumb.jpg') }}');">
    <div class="left-shape">
        <img src="{{ asset('img/breadcrumb-shape.png') }}" alt="img">
    </div>
    <div class="right-shape">
        <img src="{{ asset('img/breadcrumb-shape-2.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Page Not Found</h1>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Page Not Found
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Error Section Start -->
<section class="Error-section section-padding fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="error-items">
                    <div class="error-image wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('img/404.png') }}" alt="img">
                    </div>
                    <div class="error-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".5s">
                            <span>Oops!</span> Page not found
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".3s">Whoops, this is embarrassing. Looks like the page you were looking for was not found.</p>
                        <div class="main-button justify-content-center wow fadeInUp" data-wow-delay=".5s">
                            <a href="{{ url('/') }}">
                                <span class="theme-btn"> BACK TO HOME </span>
                                <span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section Start -->
<section class="cta-section section-padding pb-0">
    <div class="rokect-shape float-bob-y">
        <img src="{{ asset('img/rokect.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="cta-wrapper bg-cover" style="background-image: url('{{ asset('img/cta-bg.jpg') }}');">
            <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <img src="{{ asset('img/cta-img.png') }}" alt="img">
            </div>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Stay Connected With <br> Cutting Edge IT
            </h2>
            <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                <a href="{{ url('contact') }}">
                    <span class="theme-btn"> TALK TO A SPECIALIST </span>
                    <span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
