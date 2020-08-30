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
                    <li class="active"><a href="#">Course Details</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Course Details</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="course-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-details__content">
                            <p class="course-details__author">
                                <img src="assets/images/team-1-1.jpg" alt="">
                                by <a href="#">Addie Walters</a>
                            </p><!-- /.course-details__author -->

                            <div class="course-details__top">
                                <div class="course-details__top-left">
                                    <h2 class="course-details__title">Improve editing skills</h2>
                                    <!-- /.course-details__title -->
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
                                </div><!-- /.course-details__top-left -->
                                <div class="course-details__top-right">
                                    <a href="#" class="course-one__category">marketing</a><!-- /.course-one__category -->
                                </div><!-- /.course-details__top-right -->
                            </div><!-- /.course-details__top -->
                            <div class="course-one__image">
                                <img src="assets/images/course-d-1.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->

                            <ul class="course-details__tab-navs list-unstyled nav nav-tabs" role="tablist">
                                <li>
                                    <a class="active" role="tab" data-toggle="tab" href="#overview">Overview</a>
                                </li>
                                <li>
                                    <a class="" role="tab" data-toggle="tab" href="#curriculum">Curriculum</a>
                                </li>
                                <li>
                                    <a class="" role="tab" data-toggle="tab" href="#review">Reviews</a>
                                </li>
                            </ul><!-- /.course-details__tab-navs list-unstyled -->
                            <div class="tab-content course-details__tab-content ">
                                <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                                    <p class="course-details__tab-text">Aelltes port lacus quis enim var sed efficitur turpis
                                        gilla
                                        sed sit Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It has
                                        survived
                                        not only five centuries, but also the leap into electronic typesetting, remaining
                                        essentially unchanged.</p><!-- /.course-details__tab-text -->
                                    <br>
                                    <p class="course-details__tab-text">It was popularised in the 1960s with the release of
                                        Letraset
                                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software
                                        like Aldus PageMaker including versions of lorem ipsum amet finibus eros. Lorem Ipsum is
                                        simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                                        galley
                                        of type and scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting.</p>
                                    <!-- /.course-details__tab-text -->
                                    <br>
                                    <ul class="list-unstyled course-details__overview-list">
                                        <li>It has survived not only five centuries</li>
                                        <li>Lorem Ipsum is simply dummy text of the new design</li>
                                        <li>Printng and type setting ipsum</li>
                                        <li>Take a look at our round up of the best shows</li>
                                    </ul><!-- /.list-unstyled course-details__overview-list -->
                                </div><!-- /.course-details__tab-content -->
                                <div class="tab-pane  animated fadeInUp" role="tabpanel" id="curriculum">
                                    <h3 class="course-details__tab-title">Starting beginners level course</h3>
                                    <!-- /.course-details__title -->
                                    <br>
                                    <p class="course-details__tab-text">Aelltes port lacus quis enim var sed efficitur turpis
                                        gilla
                                        sed sit Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry’s standard dummy text ever since.</p>
                                    <!-- /.course-details__tab-text -->
                                    <br>
                                    <ul class="course-details__curriculum-list list-unstyled">
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon video-icon">
                                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                                </div><!-- /.course-details__icon -->
                                                <a href="#">Introduction to Editing</a> <span>Preview</span>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <div class="course-details__curriculum-list-right">16 minutes</div>
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon video-icon">
                                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                                </div><!-- /.course-details__icon -->
                                                <a href="#">Overview of Editing</a> <span>Preview</span>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <div class="course-details__curriculum-list-right">10 minutes</div>
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon file-icon">
                                                    <i class="fas fa-folder"></i><!-- /.far fa-folder -->
                                                </div><!-- /.course-details__icon -->
                                                <a href="#">Basic Editing Technology</a>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon quiz-icon">
                                                    <i class="fas fa-comment"></i><!-- /.fas fa-play -->
                                                </div><!-- /.course-details__icon -->
                                                <a href="#">Quiz</a>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <div class="course-details__curriculum-list-right">6 questions</div>
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                    </ul><!-- /.course-details__curriculum-list -->
                                    <br><br>
                                    <h3 class="course-details__tab-title">Intermediate Level</h3>
                                    <!-- /.course-details__title -->
                                    <br>
                                    <p class="course-details__tab-text">Aelltes port lacus quis enim var sed efficitur turpis
                                        gilla
                                        sed sit Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry’s standard dummy text ever since.</p>
                                    <!-- /.course-details__tab-text -->
                                    <br>
                                    <ul class="course-details__curriculum-list list-unstyled">
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon video-icon">
                                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                                </div><!-- /.course-details__icon -->
                                                <a href="#">Introduction to Editing</a> <span>Preview</span>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <div class="course-details__curriculum-list-right">16 minutes</div>
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon file-icon">
                                                    <i class="fas fa-folder"></i><!-- /.far fa-folder -->
                                                </div><!-- /.course-details__icon -->
                                                <a href="#">Basic Editing Technology</a>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon quiz-icon">
                                                    <i class="fas fa-comment"></i><!-- /.fas fa-play -->
                                                </div><!-- /.course-details__icon -->
                                                <a href="#">Quiz</a>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <div class="course-details__curriculum-list-right">6 questions</div>
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                    </ul><!-- /.course-details__curriculum-list -->
                                </div><!-- /.course-details__tab-content -->
                                <div class="tab-pane  animated fadeInUp" role="tabpanel" id="review">
                                    <div class="row">
                                        <div class="col-xl-7 d-flex">
                                            <div class="course-details__progress my-auto">
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Excellent</p>
                                                    <!-- /.course-details__progress-text -->
                                                    <div class="course-details__progress-bar">
                                                        <span style="width: 95%"></span>
                                                    </div><!-- /.course-details__progress-bar -->
                                                    <p class="course-details__progress-count">5</p>
                                                    <!-- /.course-details__progress-count -->
                                                </div><!-- /.course-details__progress-item -->
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Very Good</p>
                                                    <!-- /.course-details__progress-text -->
                                                    <div class="course-details__progress-bar">
                                                        <span style="width: 65%"></span>
                                                    </div><!-- /.course-details__progress-bar -->
                                                    <p class="course-details__progress-count">2</p>
                                                    <!-- /.course-details__progress-count -->
                                                </div><!-- /.course-details__progress-item -->
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Average</p>
                                                    <!-- /.course-details__progress-text -->
                                                    <div class="course-details__progress-bar">
                                                        <span style="width: 33%"></span>
                                                    </div><!-- /.course-details__progress-bar -->
                                                    <p class="course-details__progress-count">1</p>
                                                    <!-- /.course-details__progress-count -->
                                                </div><!-- /.course-details__progress-item -->
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Poor</p>
                                                    <!-- /.course-details__progress-text -->
                                                    <div class="course-details__progress-bar">
                                                        <span style="width: 0%" class="no-bubble"></span>
                                                    </div><!-- /.course-details__progress-bar -->
                                                    <p class="course-details__progress-count">0</p>
                                                    <!-- /.course-details__progress-count -->
                                                </div><!-- /.course-details__progress-item -->
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Terrible</p>
                                                    <!-- /.course-details__progress-text -->
                                                    <div class="course-details__progress-bar">
                                                        <span style="width: 0%" class="no-bubble"></span>
                                                    </div><!-- /.course-details__progress-bar -->
                                                    <p class="course-details__progress-count">0</p>
                                                    <!-- /.course-details__progress-count -->
                                                </div><!-- /.course-details__progress-item -->
                                            </div><!-- /.course-details__progress -->
                                        </div><!-- /.col-lg-8 -->
                                        <div class="col-xl-5 justify-content-xl-end justify-content-sm-center d-flex">
                                            <div class="course-details__review-box">
                                                <p class="course-details__review-count">4.6</p>
                                                <!-- /.course-details__review-count -->
                                                <div class="course-details__review-stars">
                                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                    <i class="fas fa-star-half"></i><!-- /.fas fa-star -->
                                                </div><!-- /.course-details__review-stars -->
                                                <p class="course-details__review-text">30 reviews</p>
                                                <!-- /.course-details__review-text -->
                                            </div><!-- /.course-details__review-box -->
                                        </div><!-- /.col-lg-4 -->
                                    </div><!-- /.row -->
                                    <div class="course-details__comment">
                                        <div class="course-details__comment-single">
                                            <div class="course-details__comment-top">
                                                <div class="course-details__comment-img">
                                                    <img src="assets/images/team-1-1.jpg" alt="">
                                                </div><!-- /.course-details__comment-img -->
                                                <div class="course-details__comment-right">
                                                    <h2 class="course-details__comment-name">Steven Meyer</h2>
                                                    <!-- /.course-details__comment-name -->
                                                    <div class="course-details__comment-meta">
                                                        <p class="course-details__comment-date">26 July, 2019</p>
                                                        <!-- /.course-details__comment-date -->
                                                        <div class="course-details__comment-stars">
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star star-disabled"></i><!-- /.fa fa-star -->
                                                        </div><!-- /.course-details__comment-stars -->
                                                    </div><!-- /.course-details__comment-meta -->
                                                </div><!-- /.course-details__comment-right -->
                                            </div><!-- /.course-details__comment-top -->
                                            <p class="course-details__comment-text">Lorem ipsum is simply free text used by
                                                copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore
                                                veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                            <!-- /.course-details__comment-text -->
                                        </div><!-- /.course-details__comment-single -->
                                        <div class="course-details__comment-single">
                                            <div class="course-details__comment-top">
                                                <div class="course-details__comment-img">
                                                    <img src="assets/images/team-1-2.jpg" alt="">
                                                </div><!-- /.course-details__comment-img -->
                                                <div class="course-details__comment-right">
                                                    <h2 class="course-details__comment-name">Lina Kelley</h2>
                                                    <!-- /.course-details__comment-name -->
                                                    <div class="course-details__comment-meta">
                                                        <p class="course-details__comment-date">26 July, 2019</p>
                                                        <!-- /.course-details__comment-date -->
                                                        <div class="course-details__comment-stars">
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star star-disabled"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star star-disabled"></i><!-- /.fa fa-star -->
                                                        </div><!-- /.course-details__comment-stars -->
                                                    </div><!-- /.course-details__comment-meta -->
                                                </div><!-- /.course-details__comment-right -->
                                            </div><!-- /.course-details__comment-top -->
                                            <p class="course-details__comment-text">Lorem ipsum is simply free text used by
                                                copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore
                                                veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                            <!-- /.course-details__comment-text -->
                                        </div><!-- /.course-details__comment-single -->
                                    </div><!-- /.course-details__comment -->
                                    <form action="#" class="course-details__comment-form">
                                        <h2 class="course-details__title">Add a review</h2><!-- /.course-details__title -->
                                        <p class="course-details__comment-form-text">Rate this Course? <a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a></p><!-- /.course-details__coment-form-text -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" placeholder="Your Name">
                                                <input type="text" placeholder="Email Address">
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-12">
                                                <textarea placeholder="Write Message"></textarea>
                                                <button type="submit" class="thm-btn course-details__comment-form-btn">Leave a
                                                    Review</button>
                                            </div><!-- /.col-lg-12 -->
                                        </div><!-- /.row -->
                                    </form><!-- /.course-details__comment-form -->
                                </div><!-- /.course-details__tab-content -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.course-details__content -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="course-details__price">
                            <p class="course-details__price-text">Course price </p><!-- /.course-details__price-text -->
                            <p class="course-details__price-amount">$18.00</p><!-- /.course-details__price-amount -->
                            <a href="#" class="thm-btn course-details__price-btn">Buy This Course</a><!-- /.thm-btn -->
                        </div><!-- /.course-details__price -->

                        <div class="course-details__meta">
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-clock"></i><!-- /.far fa-clock -->
                                </span><!-- /.course-details__icon -->
                                Durations: <span>10 hours</span>
                            </a><!-- /.course-details__meta-link -->
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-folder-open"></i><!-- /.far fa-folder-open -->
                                </span><!-- /.course-details__icon -->
                                Lectures: <span>6</span>
                            </a><!-- /.course-details__meta-link -->
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-user-circle"></i><!-- /.far fa-user-circle -->
                                </span><!-- /.course-details__icon -->
                                Students: <span>Max 4</span>
                            </a><!-- /.course-details__meta-link -->
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                </span><!-- /.course-details__icon -->
                                Video: <span>8 hours</span>
                            </a><!-- /.course-details__meta-link -->
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-flag"></i><!-- /.far fa-flag -->
                                </span><!-- /.course-details__icon -->
                                Skill Level: <span>Advanced</span>
                            </a><!-- /.course-details__meta-link -->
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-bell"></i><!-- /.far fa-bell -->
                                </span><!-- /.course-details__icon -->
                                Language: <span>English</span>
                            </a><!-- /.course-details__meta-link -->
                        </div><!-- /.course-details__meta -->
                        <div class="course-details__list">
                            <h2 class="course-details__list-title">New Courses</h2><!-- /.course-details__list-title -->
                            <div class="course-details__list-item">
                                <div class="course-details__list-img">
                                    <img src="assets/images/lc-1-1.jpg" alt="">
                                </div><!-- /.course-details__list-img -->
                                <div class="course-details__list-content">
                                    <a class="course-details__list-author" href="#">by <span>Lydia Byrd</span></a>
                                    <h3><a href="#">Marketing strategies</a></h3>
                                    <div class="course-details__list-stars">
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <span>4.8</span>
                                    </div><!-- /.course-details__list-stars -->
                                </div><!-- /.course-details__list-content -->
                            </div><!-- /.course-details__list-item -->
                            <div class="course-details__list-item">
                                <div class="course-details__list-img">
                                    <img src="assets/images/lc-1-2.jpg" alt="">
                                </div><!-- /.course-details__list-img -->
                                <div class="course-details__list-content">
                                    <a class="course-details__list-author" href="#">by <span>Lydia Byrd</span></a>
                                    <h3><a href="#">Marketing strategies</a></h3>
                                    <div class="course-details__list-stars">
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <span>4.8</span>
                                    </div><!-- /.course-details__list-stars -->
                                </div><!-- /.course-details__list-content -->
                            </div><!-- /.course-details__list-item -->
                            <div class="course-details__list-item">
                                <div class="course-details__list-img">
                                    <img src="assets/images/lc-1-3.jpg" alt="">
                                </div><!-- /.course-details__list-img -->
                                <div class="course-details__list-content">
                                    <a class="course-details__list-author" href="#">by <span>Lydia Byrd</span></a>
                                    <h3><a href="#">Marketing strategies</a></h3>
                                    <div class="course-details__list-stars">
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <span>4.8</span>
                                    </div><!-- /.course-details__list-stars -->
                                </div><!-- /.course-details__list-content -->
                            </div><!-- /.course-details__list-item -->
                        </div><!-- /.course-details__list -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.course-details -->
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