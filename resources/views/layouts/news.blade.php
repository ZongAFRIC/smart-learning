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
                    <li class="active"><a href="#">Our news</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Our news</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="blog-one blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets/images/blog-1-1.jpg" alt="">
                                <a class="blog-one__plus" href="news-details.html"><i class="kipso-icon-plus-symbol"></i>
                                    <!-- /.kipso-icon-plus-symbol --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="Posted On Jan 19" href="#"><i class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="No Comments" href="#"><i class="fa fa-comments"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h2 class="blog-one__title"><a href="news-details.html">Summer high school journalism camp</a>
                                </h2><!-- /.blog-one__title -->
                                <p class="blog-one__text">Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                    amet finibus eros.</p><!-- /.blog-one__text -->
                                <a href="news-details.html" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets/images/blog-1-2.jpg" alt="">
                                <a class="blog-one__plus" href="news-details.html"><i class="kipso-icon-plus-symbol"></i>
                                    <!-- /.kipso-icon-plus-symbol --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="Posted On Jan 19" href="#"><i class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="No Comments" href="#"><i class="fa fa-comments"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h2 class="blog-one__title"><a href="news-details.html">Get a tips to develop a quality
                                        education</a>
                                </h2><!-- /.blog-one__title -->
                                <p class="blog-one__text">Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                    amet finibus eros.</p><!-- /.blog-one__text -->
                                <a href="news-details.html" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets/images/blog-1-3.jpg" alt="">
                                <a class="blog-one__plus" href="news-details.html"><i class="kipso-icon-plus-symbol"></i>
                                    <!-- /.kipso-icon-plus-symbol --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="Posted On Jan 19" href="#"><i class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="No Comments" href="#"><i class="fa fa-comments"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h2 class="blog-one__title"><a href="news-details.html">Learn variety of programs and
                                        courses</a>
                                </h2><!-- /.blog-one__title -->
                                <p class="blog-one__text">Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                    amet finibus eros.</p><!-- /.blog-one__text -->
                                <a href="news-details.html" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets/images/blog-1-4.jpg" alt="">
                                <a class="blog-one__plus" href="news-details.html"><i class="kipso-icon-plus-symbol"></i>
                                    <!-- /.kipso-icon-plus-symbol --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="Posted On Jan 19" href="#"><i class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="No Comments" href="#"><i class="fa fa-comments"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h2 class="blog-one__title"><a href="news-details.html">English lectures in french language
                                        courses</a>
                                </h2><!-- /.blog-one__title -->
                                <p class="blog-one__text">Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                    amet finibus eros.</p><!-- /.blog-one__text -->
                                <a href="news-details.html" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets/images/blog-1-5.jpg" alt="">
                                <a class="blog-one__plus" href="news-details.html"><i class="kipso-icon-plus-symbol"></i>
                                    <!-- /.kipso-icon-plus-symbol --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="Posted On Jan 19" href="#"><i class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="No Comments" href="#"><i class="fa fa-comments"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h2 class="blog-one__title"><a href="news-details.html">Subject that fits your busy life
                                        styles</a>
                                </h2><!-- /.blog-one__title -->
                                <p class="blog-one__text">Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                    amet finibus eros.</p><!-- /.blog-one__text -->
                                <a href="news-details.html" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets/images/blog-1-6.jpg" alt="">
                                <a class="blog-one__plus" href="news-details.html"><i class="kipso-icon-plus-symbol"></i>
                                    <!-- /.kipso-icon-plus-symbol --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="Posted On Jan 19" href="#"><i class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="No Comments" href="#"><i class="fa fa-comments"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h2 class="blog-one__title"><a href="news-details.html">Are you ready to become a best student
                                    </a>
                                </h2><!-- /.blog-one__title -->
                                <p class="blog-one__text">Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                    amet finibus eros.</p><!-- /.blog-one__text -->
                                <a href="news-details.html" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <div class="post-pagination">
                    <a href="#"><i class="fa fa-angle-double-left"></i><!-- /.fa fa-angle-double-left --></a>
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#"><i class="fa fa-angle-double-right"></i><!-- /.fa fa-angle-double-left --></a>
                </div><!-- /.post-pagination -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-page -->
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
                    <p class="site-footer__copy">&copy; Copyright 2020 by <a href="#">smarrlearning.com</a></p>
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