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
                    <li class="active"><a href="#">Become a Teacher</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Become a Teacher</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="become-teacher">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="become-teacher__content">
                            <h2 class="become-teacher__title">Teaching benefits</h2><!-- /.become-teacher__title -->
                            <p class="become-teacher__text">Lorem Ipsum is simply dummy text of the printing and type industry.
                                Lorem Ipsum has been the standard dummy text ever since the when an unknown was popularised. It
                                has survived not only five centuries, but also the leap into electronic typesetting remaining
                                unchanged.</p><!-- /.become-teacher__text -->
                            <h2 class="become-teacher__subtitle">Health and Pension</h2><!-- /.become-teacher__subtitle -->
                            <p class="become-teacher__text">Lorem Ipsum has been the standard dummy text ever since the when an
                                unknown was popularised. It has survived not only five centuries. but also the leap into
                                electronic typesetting remaining unchanged.</p><!-- /.become-teacher__text -->
                            <h2 class="become-teacher__subtitle">Vacation Time</h2><!-- /.become-teacher__subtitle -->
                            <p class="become-teacher__text">Lorem Ipsum has been the standard dummy text ever since the when an
                                unknown was popularised. It has survived not only five centuries. but also the leap into
                                electronic typesetting remaining unchanged.</p><!-- /.become-teacher__text -->
                        </div><!-- /.become-teacher__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="become-teacher__form">
                            <div class="become-teacher__form-top">
                                <h2 class="become-teacher__form-title">
                                    Apply for teaching
                                </h2><!-- /.become-teacher__form-title -->
                            </div><!-- /.become-teacher__top -->
                            <div class="become-teacher__form-content">
                                <input type="text" placeholder="Your Name" name="name">
                                <input type="text" placeholder="Email Address" name="email">
                                <input type="text" placeholder="Phone Number" name="phone">
                                <input type="text" placeholder="Comment" name="message">
                                <button type="submit" class="thm-btn become-teacher__form-btn">Apply For It</button>
                            </div><!-- /.become-teacher__form-content -->
                        </div><!-- /.become-teacher__form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.become-teacher -->
        <section class="team-one team-one__become-teacher">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Meet the best <br>
                        teachers</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team-1-1.jpg" alt="">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <h2 class="team-one__name"><a href="team-details.html">Adelaide Hunter</a></h2>
                                <!-- /.team-one__name -->
                                <p class="team-one__designation">Teacher</p><!-- /.team-one__designation -->
                                <p class="team-one__text">There are many varia of passages of lorem.</p>
                                <!-- /.team-one__text -->
                            </div><!-- /.team-one__content -->
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-one__social -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team-1-2.jpg" alt="">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <h2 class="team-one__name"><a href="team-details.html">Christina Newman</a></h2>
                                <!-- /.team-one__name -->
                                <p class="team-one__designation">Teacher</p><!-- /.team-one__designation -->
                                <p class="team-one__text">There are many varia of passages of lorem.</p>
                                <!-- /.team-one__text -->
                            </div><!-- /.team-one__content -->
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-one__social -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team-1-3.jpg" alt="">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <h2 class="team-one__name"><a href="team-details.html">Gilbert Daniels</a></h2>
                                <!-- /.team-one__name -->
                                <p class="team-one__designation">Teacher</p><!-- /.team-one__designation -->
                                <p class="team-one__text">There are many varia of passages of lorem.</p>
                                <!-- /.team-one__text -->
                            </div><!-- /.team-one__content -->
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-one__social -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team-1-4.jpg" alt="">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <h2 class="team-one__name"><a href="team-details.html">Austin Caldwell</a></h2>
                                <!-- /.team-one__name -->
                                <p class="team-one__designation">Teacher</p><!-- /.team-one__designation -->
                                <p class="team-one__text">There are many varia of passages of lorem.</p>
                                <!-- /.team-one__text -->
                            </div><!-- /.team-one__content -->
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-one__social -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-one team-page -->
        <section class="cta-one">
            <div class="container">
                <h2 class="cta-one__title">Fill form for free to regitser <br>
                    yourself now</h2><!-- /.cta-one__title -->
                <div class="cta-one__btn-block">
                    <a href="#" class="thm-btn cta-one__btn">Start Learning Now</a><!-- /.thm-btn -->
                </div><!-- /.cta-one__btn-block -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->
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
                    <p class="site-footer__copy">&copy; Copyright 2020 by <a href="#">smartlearnign.com</a></p>
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