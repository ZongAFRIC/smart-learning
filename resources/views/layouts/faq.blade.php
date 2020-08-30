@extends ('layouts.main')

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="#">onezongos@gmail.com</a>
                    <a href="#">444 888 0000</a>
                </div><!-- /.topbar-one__left -->
                <div class="topbar-one__right">
                    <a href="#">Login</a>
                    <a href="#">Register</a>
                </div><!-- /.topbar-one__right -->
            </div><!-- /.container -->
        </div><!-- /.topbar-one -->
        <header class="site-header site-header__header-one ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo-dark.png" class="main-logo" width="128" alt="Awesome Image" />
                        </a>
                        <div class="header__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div><!-- /.header__social -->
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="kipso-icon-menu"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li class="current">
                            <li>
                                <a href="{{ url('/')}}">Home</a></li>
                            </li>
                            <li>
                                <a href="{{url('/courses')}}">Courses</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/courses')}}">Courses</a></li>
                                    <li><a href="{{url('/course-details')}}">Course Details</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="{{url('/teachers')}}">Teachers</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/teachers')}}">Teachers</a>
                                    </li>
                                    <li><a href="{{url('/team-details')}}">Teachers Details</a></li>
                                    <li><a href="{{url('/become-teacher')}}">Become Teacher</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="{{ url('/live')}}">Live</a></li>
                            </li>
                            <li>
                                <a href="#">Others</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/about')}}">About Page</a></li>
                                    <li><a href="{{url('/gallery')}}">Gallery</a></li>
                                    <li><a href="{{url('/pricing')}}">Pricing Plans</a></li>
                                    <li><a href="{{url('/faq')}}">FAQ'S</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>

                            <li>
                                <a href="{{url('/news')}}">News</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/news')}}">News Page</a>
                                    </li>
                                    <li><a href="{{url('/news-details')}}">News Details</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="{{url('/contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a class="header__search-btn search-popup__toggler" href="#"><i class="kipso-icon-magnifying-glass"></i>
                            <!-- /.kipso-icon-magnifying-glass --></a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
            <div class="site-header__decor">
                <div class="site-header__decor-row">
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-1"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-2"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-3"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                </div><!-- /.site-header__decor-row -->
            </div><!-- /.site-header__decor -->
        </header><!-- /.site-header -->
        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">FAQ</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">FAQ</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="faq-one">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="faq-one__single">
                            <div class="faq-one__icon">
                                <span>?</span>
                            </div><!-- /.faq-one__icon -->
                            <div class="faq-one__content">
                                <h2 class="faq-one__title">How long are your contracts?</h2><!-- /.faq-one__title -->
                                <p class="faq-one__text">We don't do contracts. You can cancel your monthly or annual
                                    subscription at any time from within your
                                    dashboard.</p><!-- /.faq-one__text -->
                            </div><!-- /.faq-one__content -->
                        </div><!-- /.faq-one__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="faq-one__single">
                            <div class="faq-one__icon">
                                <span>?</span>
                            </div><!-- /.faq-one__icon -->
                            <div class="faq-one__content">
                                <h2 class="faq-one__title">How long are your contracts?</h2><!-- /.faq-one__title -->
                                <p class="faq-one__text">We don't do contracts. You can cancel your monthly or annual
                                    subscription at any time from within your
                                    dashboard.</p><!-- /.faq-one__text -->
                            </div><!-- /.faq-one__content -->
                        </div><!-- /.faq-one__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="faq-one__single">
                            <div class="faq-one__icon">
                                <span>?</span>
                            </div><!-- /.faq-one__icon -->
                            <div class="faq-one__content">
                                <h2 class="faq-one__title">How long are your contracts?</h2><!-- /.faq-one__title -->
                                <p class="faq-one__text">We don't do contracts. You can cancel your monthly or annual
                                    subscription at any time from within your
                                    dashboard.</p><!-- /.faq-one__text -->
                            </div><!-- /.faq-one__content -->
                        </div><!-- /.faq-one__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="faq-one__single">
                            <div class="faq-one__icon">
                                <span>?</span>
                            </div><!-- /.faq-one__icon -->
                            <div class="faq-one__content">
                                <h2 class="faq-one__title">How long are your contracts?</h2><!-- /.faq-one__title -->
                                <p class="faq-one__text">We don't do contracts. You can cancel your monthly or annual
                                    subscription at any time from within your
                                    dashboard.</p><!-- /.faq-one__text -->
                            </div><!-- /.faq-one__content -->
                        </div><!-- /.faq-one__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="faq-one__single">
                            <div class="faq-one__icon">
                                <span>?</span>
                            </div><!-- /.faq-one__icon -->
                            <div class="faq-one__content">
                                <h2 class="faq-one__title">How long are your contracts?</h2><!-- /.faq-one__title -->
                                <p class="faq-one__text">We don't do contracts. You can cancel your monthly or annual
                                    subscription at any time from within your
                                    dashboard.</p><!-- /.faq-one__text -->
                            </div><!-- /.faq-one__content -->
                        </div><!-- /.faq-one__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="faq-one__single">
                            <div class="faq-one__icon">
                                <span>?</span>
                            </div><!-- /.faq-one__icon -->
                            <div class="faq-one__content">
                                <h2 class="faq-one__title">How long are your contracts?</h2><!-- /.faq-one__title -->
                                <p class="faq-one__text">We don't do contracts. You can cancel your monthly or annual
                                    subscription at any time from within your
                                    dashboard.</p><!-- /.faq-one__text -->
                            </div><!-- /.faq-one__content -->
                        </div><!-- /.faq-one__single -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.faq-one -->
        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__contact">
                                <h2 class="footer-widget__title">Courses</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__course-list">
                                    <li>
                                        <h2><a href="course-details.html">Introduction Web Design</a></h2>
                                        <p>Mike Hardson</p>
                                    </li>
                                    <li>
                                        <h2><a href="course-details.html"> Learning MBA Management </a></h2>
                                        <p>Jessica Brown</p>
                                    </li>
                                </ul><!-- /.footer-widget__course-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__link">
                                <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                                <div class="footer-widget__link-wrap">
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Overview</a></li>
                                        <li><a href="#">Teachers</a></li>
                                        <li><a href="#">Join Us</a></li>
                                        <li><a href="#">Our News</a></li>
                                    </ul><!-- /.footer-widget__link-list -->
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a href="#">Help </a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Register Now</a></li>
                                    </ul><!-- /.footer-widget__link-list -->
                                </div><!-- /.footer-widget__link-wrap -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__gallery">
                                <h2 class="footer-widget__title">Gallery</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__gallery-list">
                                    <li><a href="#"><img src="assets/images/footer-1-1.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer-1-2.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer-1-3.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer-1-4.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer-1-5.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer-1-6.png" alt=""></a></li>
                                </ul><!-- /.footer-widget__gallery -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__about">
                                <h2 class="footer-widget__title">About</h2><!-- /.footer-widget__title -->
                                <p class="footer-widget__text">Lorem ipsum dolor sit ametcon, sectetur adipiscing elit.
                                    Phasellus vehic sagittis euismod.</p><!-- /.footer-widget__text -->
                                <div class="footer-widget__btn-block">
                                    <a href="#" class="thm-btn">Contact</a><!-- /.thm-btn -->
                                    <a href="#" class="thm-btn">Purchase</a><!-- /.thm-btn -->
                                </div><!-- /.footer-widget__btn-block -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <p class="site-footer__copy">&copy; Copyright 2020 by <a href="#">smartlearning.com</a></p>
                    <div class="site-footer__social">
                        <a href="#" data-target="html" class="scroll-to-target site-footer__scroll-top"><i class="kipso-icon-top-arrow"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.site-footer__social -->
                    <!-- /.site-footer__copy -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->