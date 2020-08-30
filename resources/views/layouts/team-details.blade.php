@extends ('layouts.main')

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="#">onezongos@gmail.com</a>
                    <a href="#">+84 985536580</a>
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
                    <li class="active"><a href="#">Teacher Details</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Kevin martin</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="team-details">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="team-details__content">
                            <h2 class="team-details__title">Read my story</h2><!-- /.team-details__title -->
                            <p class="team-details__text">Lorem Ipsum is simply dummy text of the printing and type industry.
                                Lorem Ipsum has been the standard dummy text ever since the when an unknown was popularised. It
                                has survived not only five centuries, but also the leap into electronic typesetting remaining
                                unchanged.</p><!-- /.team-details__text -->
                            <h3 class="team-details__subtitle">Certificate</h3><!-- /.team-details__subtitle -->
                            <ul class="list-unstyled team-details__certificate-list">
                                <li>
                                    <img src="assets/images/certificate-1-1.png" alt="">
                                </li>
                                <li>
                                    <img src="assets/images/certificate-1-2.png" alt="">
                                </li>
                            </ul><!-- /.list-unstyled -->

                            <div class="progress-one__wrap">
                                <div class="progress-one__single">
                                    <div class="progress-one__top">
                                        <h3 class="progress-one__title">English</h3><!-- /.progress-one__title -->
                                        <h3 class="progress-one__percent"><span class="counter">98</span><!-- /.counter -->%
                                        </h3><!-- /.progress-one__percent -->
                                    </div><!-- /.progress-one__top -->
                                    <div class="progress-one__bar">
                                        <span style="width: 98%;" class="wow slideInLeft"></span>
                                    </div><!-- /.progress-one__bar -->
                                </div><!-- /.progress-one__single -->
                                <div class="progress-one__single">
                                    <div class="progress-one__top">
                                        <h3 class="progress-one__title">French</h3><!-- /.progress-one__title -->
                                        <h3 class="progress-one__percent"><span class="counter">64</span><!-- /.counter -->%
                                        </h3><!-- /.progress-one__percent -->
                                    </div><!-- /.progress-one__top -->
                                    <div class="progress-one__bar">
                                        <span style="width: 64%;" class="wow slideInLeft"></span>
                                    </div><!-- /.progress-one__bar -->
                                </div><!-- /.progress-one__single -->
                                <div class="progress-one__single">
                                    <div class="progress-one__top">
                                        <h3 class="progress-one__title">Spanish</h3><!-- /.progress-one__title -->
                                        <h3 class="progress-one__percent"><span class="counter">34</span><!-- /.counter -->%
                                        </h3><!-- /.progress-one__percent -->
                                    </div><!-- /.progress-one__top -->
                                    <div class="progress-one__bar">
                                        <span style="width: 34%;" class="wow slideInLeft"></span>
                                    </div><!-- /.progress-one__bar -->
                                </div><!-- /.progress-one__single -->
                            </div><!-- /.progress-one__wrap -->
                        </div><!-- /.team-details__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team-d-1.jpg" alt="">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <h2 class="team-one__name"><a href="team-details.html">Adelaide Hunter</a></h2>
                                <!-- /.team-one__name -->
                                <p class="team-one__designation">Teacher</p><!-- /.team-one__designation -->

                            </div><!-- /.team-one__content -->
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-one__social -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-details -->
        <section class="course-one__top-title thm-gray-bg">
            <div class="container">
                <div class="block-title mb-0">
                    <h2 class="block-title__title">Courses i am <br>
                        offering</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
            </div><!-- /.container -->
        </section><!-- /.course-one__top-title -->

        <section class="course-one course-one__teacher-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="course-one__single">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-1.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">development</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-1.jpg" alt="">
                                    by <a href="teacher-details.html">Lou Guerrero</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">New react bootcamp</a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="course-one__single">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-2.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">It & Software</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-2.jpg" alt="">
                                    by <a href="teacher-details.html">Cora Diaz</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">Improve editing skills</a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="course-one__single">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-3.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">marketing</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-3.jpg" alt="">
                                    by <a href="teacher-details.html">Ruth Becker</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">Marketing strategies</a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.course-one__carousel -->
            </div><!-- /.container -->
        </section><!-- /.course-one course-page -->
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