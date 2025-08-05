<!-- Header Section Start -->
<header id="header-sticky" class="header-1">
    <div class="container-fluid">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="logo">
                    <a href="index.blade.php" class="header-logo">
                        <img src="{{ asset('img/logo/white-logo.svg') }}" alt="logo-img">
                    </a>
                    <a href="index.blade.php" class="header-logo-2">
                        <img src="{{ asset('img/logo/black-logo.svg') }}" alt="logo-img">
                    </a>
                </div>
                <div class="mean__menu-wrapper">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="has-dropdown active menu-thumb">
                                    <a href="/">
                                        Home 
                                    </a> 
                                </li>
                                <li>
                                    <a href="{{ route('service.details') }}">
                                        Services
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="service.blade.php">Service Page</a></li>
                                        <li><a href="{{ route('service.details') }}">Service Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <a href="#0" class="search-trigger search-icon"><i class="fa-regular fa-magnifying-glass"></i></a>
                     <div class="main-button">
                        <a href="{{ route('contact') }}"> <span class="theme-btn"> Login </span></a>
                    </div>
                    <div class="main-button">
                        <a href="{{ route('contact') }}"> <span class="theme-btn"> Registration </span></a>
                    </div>
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
