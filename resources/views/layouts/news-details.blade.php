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
                    <li class="active"><a href="#">News Details</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">News Details</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets/images/blog-d-1-1.jpg" alt="">

                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="Posted On Jan 19" href="#"><i class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="No Comments" href="#"><i class="fa fa-comments"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h2 class="blog-one__title">Are you ready to become a best student

                                </h2><!-- /.blog-one__title -->
                                <p class="blog-one__text">Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                                    galley of type and scrambled it to make a type specimen book. It has survived not only five
                                    centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p><!-- /.blog-one__text -->
                                <p class="blog-one__text">It was popularised in the 1960s with the release of Letraset sheets
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of lorem ipsum amet finibus eros. Lorem Ipsum is simply
                                    dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived not only five centuries, but also
                                    the leap into electronic typesetting.</p><!-- /.blog-one__text -->
                                <p class="blog-one__text">It was popularised in the 1960s with the release of Letraset sheets
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of lorem ipsum.</p><!-- /.blog-one__text -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                        <div class="share-block">
                            <div class="left-block">
                                <p>Tags: <a href="#">Business,</a> <a href="#">Agency,</a> <a href="#">Technology</a></p>
                            </div><!-- /.left-block -->
                            <div class="social-block">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div><!-- /.social-block -->
                        </div><!-- /.share-block -->
                        <div class="blog-details__author">
                            <div class="blog-details__author-image">
                                <img src="assets/images/author-1-1.jpg" alt="Awesome Image" />
                            </div><!-- /.blog-details__image -->
                            <div class="blog-details__author-content">
                                <h3>Christine Eve</h3>
                                <p>Lorem Ipsum is simply dummy text of the rinting and typesetting been the industry standard
                                    dummy text ever sincer condimentum purus. In non ex at ligula fringilla lobortis et not the
                                    aliquet.</p>
                            </div><!-- /.blog-details__content -->
                        </div><!-- /.blog-details__author -->
                        <h2 class="blog-details__content-title">2 Comments</h2><!-- /.blog-details__content-title -->
                        <div class="comment-one">
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <div class="inner-block">
                                        <img src="assets/images/comment-1-1.jpg" alt="Awesome Image" />
                                    </div><!-- /.inner-block -->
                                </div><!-- /.comment-one__image -->
                                <div class="comment-one__content">
                                    <div class="comment-one__content-top">
                                        <div class="comment-one__top-left">
                                            <h3 class="comment-one__author">Laquanda Bachmeier</h3>
                                            <!-- /.comment-one__author -->
                                            <p class="comment-one__date">20 April, 2019 <span class="comment-one__date-sep">-</span> 4:00 pm</p>
                                            <!-- /.comment-one__date -->
                                            <p class="comment-one__text">Lorem Ipsum is simply dummy text of the rinting and
                                                typesetting been the industry standard dummy text ever sincer condimentum purus.
                                                In non ex at ligula fringilla lobortis et not the aliquet.</p>
                                            <!-- /.comment-one__text -->
                                        </div><!-- /.comment-one__top-left -->
                                        <div class="comment-one__top-right">
                                            <a href="#" class="thm-btn comment-one__reply">Reply</a>
                                        </div><!-- /.comment-one__top-right -->
                                    </div><!-- /.comment-one__content-top -->
                                </div><!-- /.comment-one__content -->
                            </div><!-- /.comment-one__single -->
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <div class="inner-block">
                                        <img src="assets/images/comment-1-2.jpg" alt="Awesome Image" />
                                    </div><!-- /.inner-block -->
                                </div><!-- /.comment-one__image -->
                                <div class="comment-one__content">
                                    <div class="comment-one__content-top">
                                        <div class="comment-one__top-left">
                                            <h3 class="comment-one__author">Vicente Elmore</h3><!-- /.comment-one__author -->
                                            <p class="comment-one__date">20 April, 2019 <span class="comment-one__date-sep">-</span> 4:00 pm</p>
                                            <!-- /.comment-one__date -->
                                            <p class="comment-one__text">Lorem Ipsum is simply dummy text of the rinting and
                                                typesetting been the industry standard dummy text ever sincer condimentum purus.
                                                In non ex at ligula fringilla lobortis et not the aliquet.</p>
                                            <!-- /.comment-one__text -->
                                        </div><!-- /.comment-one__top-left -->
                                        <div class="comment-one__top-right">
                                            <a href="#" class="thm-btn comment-one__reply">Reply</a>
                                        </div><!-- /.comment-one__top-right -->
                                    </div><!-- /.comment-one__content-top -->
                                </div><!-- /.comment-one__content -->
                            </div><!-- /.comment-one__single -->
                        </div><!-- /.comment-one -->
                        <h2 class="blog-details__content-title">Leave a Comment</h2><!-- /.blog-details__content-title -->
                        <form action="#" class="reply-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your name" class="reply-form__field">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Enter email" class="reply-form__field">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea placeholder="Write message" class="reply-form__field"></textarea>
                                    <button class="reply-form__btn thm-btn" type="submit">Submit Comment</button>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form><!-- /.reply-form -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="text" name="search" placeholder="Search here...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Posts</h3><!-- /.sidebar__title -->
                                <div class="sidebar__post-wrap">
                                    <div class="sidebar__post__single">
                                        <div class="sidebar__post-image">
                                            <div class="inner-block"><img src="assets/images/lp-1-1.jpg" alt="Awesome Image" /></div>
                                            <!-- /.inner-block -->
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h4 class="sidebar__post-title"><a href="#">Pre launch mobile app marketing pitfalls</a></h4>
                                            <!-- /.sidebar__post-title -->
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post__single -->
                                    <div class="sidebar__post__single">
                                        <div class="sidebar__post-image">
                                            <div class="inner-block"><img src="assets/images/lp-1-2.jpg" alt="Awesome Image" /></div>
                                            <!-- /.inner-block -->
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h4 class="sidebar__post-title"><a href="#">Social currency per- formance keywords or</a></h4>
                                            <!-- /.sidebar__post-title -->
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post__single -->
                                    <div class="sidebar__post__single">
                                        <div class="sidebar__post-image">
                                            <div class="inner-block"><img src="assets/images/lp-1-3.jpg" alt="Awesome Image" /></div>
                                            <!-- /.inner-block -->
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h4 class="sidebar__post-title"><a href="#">Prioritize these items quarterly sales are at</a></h4>
                                            <!-- /.sidebar__post-title -->
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post__single -->
                                </div><!-- /.sidebar__post-wrap -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3><!-- /.sidebar__title -->
                                <ul class="sidebar__category-list">
                                    <li class="sidebar__category-list-item"><a href="#">Business</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">Introductions</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">One Page Template</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">Parallax Effects</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">New Technologies</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">Video Backgrounds</a></li>
                                </ul><!-- /.sidebar__category-list -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3><!-- /.sidebar__title -->
                                <ul class="sidebar__tags-list">
                                    <li class="sidebar__tags-list-item"><a href="#">Business,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Agency,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Technology,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Parallax,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Innovative,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Professional,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Experience,</a></li>
                                </ul><!-- /.sidebar__category-list -->
                            </div><!-- /.sidebar__single -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details -->
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
                    <p class="site-footer__copy">&copy; Copyright 2019 by <a href="#">Layerdrops.com</a></p>
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