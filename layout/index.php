<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesdesign.in/landsay/layout/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 05:57:12 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dharmasandheha -Search</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap v5.3.0 Landing Page Template" />
        <meta name="keywords" content="bootstrap v5.3.0, premium, marketing, multipurpose" />
        <meta content="Themesdesign" name="author" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ env('MAIN_URL') }}public/assets/images/favicon.png" />

        <!-- Bootstrap css-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- Materialdesign icon-->
        <link rel="stylesheet" href="css/materialdesignicons.min.css" type="text/css" />

        <!-- Swiper Slider css -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css" type="text/css" />

        <!-- Custom Css -->
        <link href="css/style.min.css" rel="stylesheet" type="text/css" />

        <!-- colors -->
        <link href="css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />

        <style>
            .search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
  background: #00b4cc;
  border-right: 1px solid #fff;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}
.searchTerm::placeholder{
    color: #fff;
}
/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.login-btn {
  background: transparent;
  position: relative;
  padding: 5px 15px;
  display: flex;
  align-items: center;
  font-size: 17px;
  font-weight: 600;
  text-decoration: none;
  cursor: pointer;
  border: 1px solid rgb(40, 144, 241);
  border-radius: 25px;
  outline: none;
  overflow: hidden;
  color: rgb(40, 144, 241);
  transition: color 0.3s 0.1s ease-out;
  text-align: center;
}

.login-btn span {
  margin: 10px;
}

.login-btn::before {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  content: '';
  border-radius: 50%;
  display: block;
  width: 20em;
  height: 20em;
  left: -5em;
  text-align: center;
  transition: box-shadow 0.5s ease-out;
  z-index: -1;
}

.login-btn:hover {
  color: #fff;
  border: 1px solid rgb(40, 144, 241);
}

.login-btn:hover::before {
  box-shadow: inset 0 0 0 10em rgb(40, 144, 241);
}
        </style>
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navbar-navList" data-bs-offset="60">

        <!--start page Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="load">
                    <hr />
                    <hr />
                    <hr />
                    <hr />
                </div>
            </div>
        </div> -->
        <!--end page Loader -->

        <!-- START NAVBAR -->
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
            <div class="container">
                <a class="navbar-brand" href="index-1.html"><img src="{{ env('MAIN_URL') }}public/assets/images/kinchit_logo.png" alt="" height="100"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="mdi mdi-menu text-muted"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navList">
                        <li class="nav-item" style="align-self: center;">
                        <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
      <i class="mdi mdi-magnify"></i>
     </button>
   </div>
                        </li>
                        <li class="nav-item">
                        <button class="login-btn">
    <svg viewBox="0 0 16 16" class="bi bi-twitter" fill="currentColor" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
    </svg>
    <span>Login</span>
</button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blog <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="nav-link" href="#blog">Blog</a></li>
                                <li><a class="nav-link" href="blog-list.html">Blog List</a></li>
                                <li><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <!--end navbar-nav-->

                </div>
                <!--end collapse-->
            </div>
            <!--end container-->
        </nav>
        <!-- END NAVBAR -->

        <!-- START HOME -->
        <section class="bg-home4 overflow-hidden" id="home">
            <div class="container">
                <div class="position-relative" style="z-index: 1;">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div>
                                <h6 class="home-subtitle text-primary mb-4">Awesome</h6>
                                <h1>We are Startup Creative Landsay Agency</h1>
                                <p class="text-black-50 fs-17 pt-4">Carefully crafted after analyzing the needs of different
                                    industries and the design achieves a great balance between purpose & presentation.</p>
                                <div class="text-center subscribe-form mt-5">
                                    <form action="#">
                                        <input type="text" class="control-form" id="inputemail" placeholder="Enter your email">
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6 offset-xl-1">
                            <div class="mt-lg-0 mt-5">
                                <img src="{{ env('MAIN_URL') }}public/assets/images/home/home1.png" alt="home04" class="home-img">
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
            <!--end container-->
        </section>
        <div class="position-relative">
            <div class="shape overflow-hidden text-white position-absolute">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 100%;" height="250" preserveAspectRatio="none"
                    viewBox="0 0 1440 250">
                    <g mask="url(&quot;#SvgjsMask1006&quot;)" fill="none">
                        <path d="M 0,246 C 288,210 1152,102 1440,66L1440 250L0 250z" fill="rgba(255, 255, 255, 1)"></path>
                    </g>
                    <defs>
                        <mask id="SvgjsMask1006">
                            <rect width="1440" height="250" fill="#ffffff"></rect>
                        </mask>
                    </defs>
                </svg>
            </div>
        </div>
        <!-- END HOME -->

        <!-- START FEATURES -->
        <section class="section" id="features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            <h3>Product Features</h3>
                            <p class="text-muted">It is a long established fact that a reader will be of a page when
                                established fact looking at its layout.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box card border-0 mt-3">
                            <div class="card-body">
                                <div class="feature-icon mx-auto">
                                    <i class="mdi mdi-chart-areaspline"></i>
                                </div>
                                <div class="mt-4">
                                    <h6 class="mb-3 fs-17">Digital Design</h6>
                                    <p class="text-muted"> Some quick example text to build on the card title and make up
                                        the bulk of the card the platform.</p>
                                </div>
                                <div class="feature-link">
                                    <a href="#" class="text-primary text-decoration-underline">Learn More <i
                                            class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end feature-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box card border-0 mt-3">
                            <div class="card-body">
                                <div class="feature-icon mx-auto">
                                    <i class="mdi mdi-gift"></i>
                                </div>
                                <div class="mt-4">
                                    <h6 class="mb-3 fs-17">Unlimited Colors</h6>
                                    <p class="text-muted">Credibly brand stanaads compliant user exteible services College
                                        Anibh ocean euismod tincidunt laoreet.</p>
                                </div>
                                <div class="feature-link">
                                    <a href="#" class="text-primary text-decoration-underline">Learn More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end feature-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box card border-0 mt-3">
                            <div class="card-body">
                                <div class="feature-icon mx-auto">
                                    <i class="mdi mdi-xml"></i>
                                </div>
                                <div class="mt-4">
                                    <h6 class="mb-3 fs-17">Strategy Solutions</h6>
                                    <p class="text-muted"> Separated they live in Bookmarks grove right at the coast of the Semantics, a large ocean regelialia.</p>
                                </div>
                                <div class="feature-link">
                                    <a href="#" class="text-primary text-decoration-underline">Learn More <i
                                            class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end feature-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box card border-0 mt-3">
                            <div class="card-body">
                                <div class="feature-icon mx-auto">
                                    <i class="mdi mdi-webpack"></i>
                                </div>
                                <div class="mt-4">
                                    <h6 class="mb-3 fs-17">Awesome Support</h6>
                                    <p class="text-muted">Passage you need sure there anything embrassing text hidden all
                                        necessary making generator Internet.</p>
                                </div>
                                <div class="feature-link">
                                    <a href="#" class="text-primary text-decoration-underline">Learn More <i
                                            class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end feature-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box card border-0 mt-3">
                            <div class="card-body">
                                <div class="feature-icon mx-auto">
                                    <i class="mdi mdi-responsive"></i>
                                </div>
                                <div class="mt-4">
                                    <h6 class="mb-3 fs-17">Truly Multipurpose</h6>
                                    <p class="text-muted"> Nor again is there anyone who loves or pursues or desires to
                                        obtain pain of itself, because it is pain.</p>
                                </div>
                                <div class="feature-link">
                                    <a href="#" class="text-primary text-decoration-underline">Learn More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end feature-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box card border-0 mt-3">
                            <div class="card-body">
                                <div class="feature-icon mx-auto">
                                    <i class="mdi mdi-leaf"></i>
                                </div>
                                <div class="mt-4">
                                    <h6 class="mb-3 fs-17">Easy to customize</h6>
                                    <p class="text-muted"> Donec dolor eget augue commodo varius Aenean
                                        iaculis arcu in est facilisis, vitae auctor ipsum aliquet.</p>
                                </div>
                                <div class="feature-link">
                                    <a href="#" class="text-primary text-decoration-underline">Learn More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end feature-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END FEATURES -->


        <!-- START Process -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <h3>How It Works?</h3>
                            <p class="text-muted">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-10">
                        <div class="timeline-page position-relative py-4">
                            <div class="timeline-item mb-lg-5 pb-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="text-center mb-5 mb-lg-0">
                                            <img src="{{ env('MAIN_URL') }}public/assets/images/work-1.png" alt="Work" class="img-fluid">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="works-description-right text-start bg-light mx-lg-3 mx-4">
                                            <h5 class="fs-18">Tell us your idea</h5>
                                            <p class="text-muted mb-0">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout. The
                                                point of using Lorem Ipsum is that it has a more-or-less. It is a long
                                                established fact that a reader will be distracted.</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end timeline-item-->

                            <div class="timeline-item mb-5 pb-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="works-description-left text-start bg-light mx-lg-3 mx-4 text-lg-end">
                                            <h5 class="fs-18">Debut with users</h5>
                                            <p class="text-muted mb-0">Some quick example text to build on the card title
                                                and make up the bulk of the card's content. Moltin gives you the platform.
                                            </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6 order-first order-lg-last">
                                        <div class="text-center mb-5 mb-lg-0">
                                            <img src="{{ env('MAIN_URL') }}public/assets/images/work-2.png" alt="Work" class="img-fluid">
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end timeline-item-->
                            <div class="timeline-item">
                                <div class="row align-items-start">
                                    <div class="col-lg-6">
                                        <div class="text-center mb-5 mb-lg-0">
                                            <img src="{{ env('MAIN_URL') }}public/assets/images/work-3.png" alt="Work" class="img-fluid">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="works-description-right text-start bg-light mx-lg-3 mx-4">
                                            <h5 class="fs-18">Research and Develop</h5>
                                            <p class="text-muted mb-0">High life accusamus terry richardson ad squid. 3 wolf
                                                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                nesciunt laborum eiusmod. Due to its widespread use as filler text for
                                                layouts, non-readability is of great importance.</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end timeline-item-->
                        </div><!-- timeline-page -->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END Process -->


        <!-- START CTA -->
        <section class="bg-cta" style="background-image: url('images/bg-cta01.jpg');">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center text-white">
                            <h3 class="mb-3">Video Presentation</h3>
                            <p>Start working with Landsay that can provide everything you need to generate awareness, drive
                                traffic, connect.</p>
                            <a href="#presentationVideo" class="play-btn mt-4" data-bs-toggle="modal">
                                <i class="mdi mdi-play text-white"></i>
                            </a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END CTA -->


        <!-- START CLIENTS -->
        <section class="section bg-client bg-light" id="client"
            style="background-image: url('images/bg.jpg');background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h3>What your client says</h3>
                            <p class="text-muted mt-2 mb-0">The Big Oxmox advised her not to do so, because there were
                                thousands of bad Commas, wild Question Marks and devious pulvinar metus molestie sed
                                Semikoli.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="swiper-container testimonialslider">
                            <div class="swiper-wrapper pb-5">
                                <div class="swiper-slide">
                                    <div class="testimonial-box text-center card border-0">
                                        <div>
                                            <div class="testi-img position-relative d-inline-block">
                                                <img src="{{ env('MAIN_URL') }}public/assets/images/users/img1.jpg" alt="" class="img-fluid rounded-circle">
                                                <div class="quote-icon">
                                                    <i class="mdi mdi-format-quote-open"></i>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <h6 class="mb-0 fs-17">David Strange</h6>
                                                <p class="text-muted mb-0">Chicago</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted mb-0">" Very well thought out and articulate communication.
                                                Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                                shortcuts. Even if the client is being careless. The best part...always
                                                solving problems with great original ideas!. "</p>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end testimonial-box-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box text-center card border-0">
                                        <div>
                                            <div class="testi-img position-relative d-inline-block">
                                                <img src="{{ env('MAIN_URL') }}public/assets/images/users/img2.jpg" alt="" class="img-fluid rounded-circle">
                                                <div class="quote-icon">
                                                    <i class="mdi mdi-format-quote-open"></i>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <h6 class="mb-0 fs-17">John Emmanuel</h6>
                                                <p class="text-muted mb-0">New Jersey</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted mb-0">" It looks perfect on all major browsers, tablets,
                                                and mobile devices. All files are organized we believe it will be easy to
                                                use and edit them. This template is well organized and very easy to
                                                customize. We have added a Dark version with RTL supported. "</p>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end testimonial-box-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box text-center card border-0">
                                        <div>
                                            <div class="testi-img position-relative d-inline-block">
                                                <img src="{{ env('MAIN_URL') }}public/assets/images/users/img4.jpg" alt="" class="img-fluid rounded-circle">
                                                <div class="quote-icon">
                                                    <i class="mdi mdi-format-quote-open"></i>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <h6 class="mb-0 fs-17">Charlize Theron</h6>
                                                <p class="text-muted mb-0">Washington</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted mb-0">" All your client websites if you are an agency or
                                                freelancer. It got all the tools needs to create super fast responsive
                                                websites with amazing user experience. Our ever-growing library of
                                                components and pre-designed layouts will make your life easier. "</p>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end testimonial-box-->
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="row row-cols-md-5 row-cols-1 mt-4">
                    <div class="col">
                        <div class="client-images text-center mt-4">
                            <img src="{{ env('MAIN_URL') }}public/assets/images/clients/01.png" alt="img1" class="img-fluid">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="client-images text-center mt-4">
                            <img src="{{ env('MAIN_URL') }}public/assets/images/clients/02.png" alt="img2" class="img-fluid">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="client-images text-center mt-4">
                            <img src="{{ env('MAIN_URL') }}public/assets/images/clients/03.png" alt="img3" class="img-fluid">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="client-images text-center mt-4">
                            <img src="{{ env('MAIN_URL') }}public/assets/images/clients/04.png" alt="img4" class="img-fluid">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="client-images text-center mt-4">
                            <img src="{{ env('MAIN_URL') }}public/assets/images/clients/05.png" alt="img5" class="img-fluid">
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END CLIENTS -->


        <!-- START FEATURE  -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="features-box">
                            <h3 class="mb-4">We are digital creative Landing Page</h3>
                            <p class="text-muted mb-4">The difference between a successful person and others is not a lack
                                of strength, not a lack of knowledge, but rather a lack of will.Composed in a pseudo-Latin
                                language which more or less pseudo-Latin language corresponds.</p>
                            <div class="row" id="counter">
                                <div class="col-md-5 col-6">
                                    <div>
                                        <h5 class="counter_value" data-target="4954">&nbsp;</h5>
                                        <h6 class="text-muted">Happy User</h6>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-5 col-6">
                                    <div>
                                        <h5 class="counter_value" data-target="1599">&nbsp;</h5>
                                        <h6 class="text-muted">Complate Project</h6>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary">Learn More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--end feature-box-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-6 offset-lg-1">
                        <div class="text-center mt-5 mt-lg-0">
                            <img src="{{ env('MAIN_URL') }}public/assets/images/features.png" alt="Features" class="img-fluid">
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END FEATURE -->


        <!-- START PRICING -->
        <section class="section bg-light" id="price">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <h3>Our Pricing</h3>
                            <p class="text-muted mt-2">It is a long established fact that a reader will be of a page when
                                established fact looking at its layout.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="price-box card border-0 mt-4">
                            <div class="text-center">
                                <h5 class="mb-0">Starter</h5>
                            </div>
                            <div class="plan-price text-center mt-4">
                                <h1 class="text-primary mb-0 display-4 fw-medium"><sup>$</sup>9<sub class="text-muted">/month</sub></h1>
                            </div>
                            <div class="price-features mt-5">
                                <p><i class="mdi mdi-check text-primary"></i> Bandwidth: <span class="fw-medium float-end">1GB</span></p>
                                <p><i class="mdi mdi-check text-primary"></i> Onlinespace: <span class="fw-medium float-end">500MB</span></p>
                                <p><i class="mdi mdi-close text-primary"></i> Support: <span class="fw-medium float-end">No</span></p>
                                <p><i class="mdi mdi-check text-primary"></i> Domain: <span class="fw-medium float-end">1</span> </p>
                                <p><i class="mdi mdi-check text-primary"></i> Hidden Fees: <span class="fw-medium float-end">No</span></p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="#" class="btn btn-outline-primary w-100">Join Now</a>
                            </div>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-4">
                        <div class="price-box card border-0 mt-4">
                            <div class="ribbon">20% sale</div>
                            <div class="text-center">
                                <h5 class="mb-0">Advanced</h5>
                            </div>
                            <div class="plan-price text-center mt-4">
                                <h1 class="text-primary mb-0 display-4 fw-medium"><sup>$</sup>19<sub
                                        class="text-muted">/month</sub></h1>
                            </div>
                            <div class="price-features mt-5">
                                <p><i class="mdi mdi-check text-primary"></i> Bandwidth: <span
                                        class="fw-medium float-end">2GB</span></p>
                                <p><i class="mdi mdi-check text-primary"></i> Onlinespace: <span
                                        class="fw-medium float-end">1GB</span></p>
                                <p><i class="mdi mdi-check text-primary"></i> Support: <span
                                        class="fw-medium float-end">Yes</span></p>
                                <p><i class="mdi mdi-check text-primary"></i> Domain: <span
                                        class="fw-medium float-end">3</span> </p>
                                <p><i class="mdi mdi-check text-primary"></i> Hidden Fees: <span
                                        class="fw-medium float-end">No</span></p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="#" class="btn btn-primary w-100">Join Now</a>
                            </div>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-4">
                        <div class="price-box card border-0 mt-4">
                            <div class="text-center">
                                <h5 class="mb-0">Professional</h5>
                            </div>
                            <div class="plan-price text-center mt-4">
                                <h1 class="text-primary mb-0 display-4 fw-medium"><sup>$</sup>29<sub
                                        class="text-muted">/month</sub></h1>
                            </div>
                            <div class="price-features mt-5">
                                <p><i class="mdi mdi-check text-primary"></i> Bandwidth: <span
                                        class="fw-medium float-end">3GB</span></p>
                                <p><i class="mdi mdi-check text-primary"></i> Onlinespace: <span
                                        class="fw-medium float-end">2GB</span></p>
                                <p><i class="mdi mdi-check text-primary"></i> Support: <span
                                        class="fw-medium float-end">Yes</span></p>
                                <p><i class="mdi mdi-check text-primary"></i> Domain: <span
                                        class="fw-medium float-end">Unlimited</span></p>
                                <p><i class="mdi mdi-check text-primary"></i> Hidden Fees: <span
                                        class="fw-medium float-end">No</span></p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="#" class="btn btn-outline-primary w-100">Join Now</a>
                            </div>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END PRICING -->


        <!-- START FAQ -->
        <section class="section" id="faq">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5 pb-2">
                            <h3>How can we Help you?</h3>
                            <p class="text-muted mt-2">It is a long established fact that a reader will be of a page when
                                established fact looking at its layout.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-4 pb-2">
                            <div class="faq d-flex">
                                <div class="icon flex-shrink-0 me-3">
                                    ?
                                </div>
                                <div class="content">
                                    <h5 class="fs-17">Design Your FAQ Page?</h5>
                                    <p class="text-muted mb-0">If your FAQ page does consist of multiple pages, then one
                                        critical element you'll need to consider is your navigation bar. If your search bar
                                        is tricky to use or doesn't yield desired results, customers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="faq d-flex">
                                <div class="icon flex-shrink-0 me-3">
                                    ?
                                </div>
                                <div class="content">
                                    <h5 class="fs-17">Monitor the FAQ Page's Performance?</h5>
                                    <p class="text-muted mb-0">In this detailed guide, we’re going to dive deep into the
                                        whole concept of FAQs. To
                                        discover their main purpose and to find out how it can help generate more sales and
                                        leads for your business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="faq d-flex">
                                <div class="icon flex-shrink-0 me-3">
                                    ?
                                </div>
                                <div class="content">
                                    <h5 class="fs-17">Why you should make an FAQ page?</h5>
                                    <p class="text-muted mb-0">Every business and product website comes with a set of
                                        default pages like an “About”
                                        page, “Contact” page, “Privacy Policy” page, and more. A FAQ page is one of the few
                                        must-have pages on this list.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="mb-4 pb-4">
                            <div class="faq d-flex">
                                <div class="icon flex-shrink-0 me-3">
                                    ?
                                </div>
                                <div class="content">
                                    <h5 class="fs-17"> Regularly update each page?</h5>
                                    <p class="text-muted mb-0"> Most online support teams spend hours of their valuable time
                                        every day answering
                                        these general questions. While it could’ve been easily avoided by placing a FAQs
                                        section on the website.</p>
                                </div>
                            </div>
                        </div>
                        <div class="query-form">
                            <h6 class="fs-18">Have any quetions?</h6>
                            <p class="text-muted">Send your quetions in our mail</p>
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your email">
                                    <button class="btn btn-primary" type="submit">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END FAQ -->


        <!-- START ABOUT -->
        <section class="section bg-light" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center">
                            <h3>We'r dynamic team of talented people of innovative & marketing expert</h3>
                            <p class="text-muted pt-2">To achieve this, it would be necessary to have uniform grammar,
                                pronunciation and more common words. If several languages of the resulting language.</p>
                        </div>
                    </div>
                </div>
                <!--end row-->

                <div class="row justify-content-center mt-5">
                    <div class="col-md-6 col-lg-3">
                        <div class="text-center mt-3">
                            <h3>
                                <span class="counter_value" data-target="1499">120</span><span>+</span>
                            </h3>
                            <p class="text-muted">Complete Projects</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="text-center mt-3">
                            <h3>
                                <span class="counter_value" data-target="1080">120</span><span>K</span>
                            </h3>
                            <p class="text-muted">Satisfied Clients</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="text-center mt-3">
                            <h3 class="counter_value" data-target="608"></h3>
                            <p class="text-muted">Team Members</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="text-center mt-3">
                            <h3 class="counter_value" data-target="252"></h3>
                            <p class="text-muted">Employee</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <!-- START TEAM -->
                <div class="row mt-5">
                    <div class="col-md-6 col-lg-3">
                        <div class="card team-box border-0 bg-transparent mt-3">
                            <div class="position-relative mx-auto">
                                <img src="{{ env('MAIN_URL') }}public/assets/images/users/img5.jpg" alt="team" height="200"
                                    class="img-fluid rounded-circle img-thumbnail">
                                <ul class="team-social list-unstyled">
                                    <li><a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="my-1"><a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="primary-link"><i class="mdi mdi-skype"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="mb-0"><a href="#" class="primary-link">Wade G. Wilhite</a></h6>
                                <p class="text-muted fs-14 mb-0">CEO/Founder</p>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card team-box border-0 bg-transparent mt-3">
                            <div class="position-relative mx-auto">
                                <img src="{{ env('MAIN_URL') }}public/assets/images/users/img6.jpg" alt="team" class="img-fluid rounded-circle img-thumbnail">
                                <ul class="team-social list-unstyled">
                                    <li><a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="my-1"><a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="primary-link"><i class="mdi mdi-skype"></i></a></li>
                                </ul>
                                <!--end team-social-->
                            </div>
                            <div class="card-body text-center">
                                <h6 class="mb-0"><a href="#" class="primary-link">William S. Blay</a></h6>
                                <p class="text-muted fs-14 mb-0">CTO/Co-Founder</p>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card team-box border-0 bg-transparent mt-3">
                            <div class="position-relative mx-auto">
                                <img src="{{ env('MAIN_URL') }}public/assets/images/users/img7.jpg" alt="team" class="img-fluid rounded-circle img-thumbnail">
                                <ul class="team-social list-unstyled">
                                    <li><a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="my-1"><a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="primary-link"><i class="mdi mdi-skype"></i></a></li>
                                </ul>
                                <!--end team-social-->
                            </div>
                            <div class="card-body text-center">
                                <h6 class="mb-0"><a href="#" class="primary-link">Matthew B. Morales</a></h6>
                                <p class="text-muted fs-14 mb-0">Web Designer</p>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card team-box border-0 bg-transparent mt-3">
                            <div class="position-relative mx-auto">
                                <img src="{{ env('MAIN_URL') }}public/assets/images/users/img8.jpg" alt="team" class="img-fluid rounded-circle img-thumbnail">
                                <ul class="team-social list-unstyled">
                                    <li><a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="my-1"><a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="primary-link"><i class="mdi mdi-skype"></i></a></li>
                                </ul>
                                <!--end team-social-->
                            </div>
                            <div class="card-body text-center">
                                <h6 class="mb-0"><a href="#" class="primary-link">Luke L. Johnston</a></h6>
                                <p class="text-muted fs-14 mb-0">Web Developer</p>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <!--END TEAM-->
            </div>
            <!--end container-->
        </section>
        <!-- END ABOUT -->


        <!-- START CTA -->
        <section class="bg-cta" style="background-image: url('images/bg-cta02.jpg');">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center text-white">
                            <h2 class="mb-3">Let's get started with Landsay</h2>
                            <p class="text-white-50 mb-0">They are a good way to get you started if you want to build
                                something similar or use from existing apps which will reduce the cost, efforts and time of
                                the developers.</p>
                            <div class="mt-4 pt-4">
                                <a href="#subscribe" class="btn btn-outline-white" data-bs-toggle="modal">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END CTA -->

        <!-- START BLOG -->
        <section class="section" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <h3>Our Blog</h3>
                            <p class="text-muted mt-2 mb-0">It is a long established fact that a reader will be of a page when
                                established fact looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card blog-box border-0 mt-4">
                            <div class="blog-img position-relative">
                                <img src="{{ env('MAIN_URL') }}public/assets/images/blog/blog-01.jpg" alt="Blog" class="img-fluid rounded">
                                <div class="bg-overlay rounded"></div>
                                <div class="author">
                                    <h6 class="fs-16 mb-0"><i class="mdi mdi-account-outline fs-17 align-middle me-1"></i>
                                        Calvin Carlo</h6>
                                    <small><i class="mdi mdi-clock-outline fs-17 align-middle me-1"></i> 20th March
                                        2021</small>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="primary-link">
                                    <h6 class="fs-20">Doing a cross country road trip</h6>
                                </a>
                                <p class="text-muted">We craft digital, graphic and dimensional thinking, to create category
                                    leading brand.</p>
                                <div class="mt-3">
                                    <a href="#" class="text-primary">Read More <i
                                            class="mdi mdi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card blog-box border-0 mt-4">
                            <div class="blog-img position-relative">
                                <img src="{{ env('MAIN_URL') }}public/assets/images/blog/blog-02.jpg" alt="Blog" class="img-fluid rounded">
                                <div class="bg-overlay rounded"></div>
                                <div class="author">
                                    <h6 class="fs-16 mb-0"><i class="mdi mdi-account-outline fs-17 align-middle me-1"></i>
                                        Theresa Sinclair</h6>
                                    <small><i class="mdi mdi-clock-outline fs-17 align-middle me-1"></i> 01th July
                                        2021</small>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="primary-link">
                                    <h6 class="fs-20">New exhibition at our Museum</h6>
                                </a>
                                <p class="text-muted">Even the all-powerful Pointing has no control about the blind almost
                                    unorthographic.</p>
                                <div class="mt-3">
                                    <a href="#" class="text-primary">Read More <i
                                            class="mdi mdi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card blog-box border-0 mt-4">
                            <div class="blog-img position-relative">
                                <img src="{{ env('MAIN_URL') }}public/assets/images/blog/blog-03.jpg" alt="Blog" class="img-fluid rounded">
                                <div class="bg-overlay rounded"></div>
                                <div class="author">
                                    <h6 class="fs-16 mb-0"><i class="mdi mdi-account-outline fs-17 align-middle me-1"></i>
                                        Ruben Reed</h6>
                                    <small><i class="mdi mdi-clock-outline fs-17 align-middle me-1"></i> 25th July
                                        2021</small>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="primary-link">
                                    <h6 class="fs-20">Design your apps in your own way</h6>
                                </a>
                                <p class="text-muted">Pityful a rethoric question ran over her cheek, then she continued her
                                    way.</p>
                                <div class="mt-3">
                                    <a href="#" class="text-primary">Read More <i
                                            class="mdi mdi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BLOG -->


        <!--start contact-->
        <section class="section bg-light" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            <h3>Contact Us</h3>
                            <p class="text-muted mt-2">It is a long established fact that a reader will be of a page when
                                established fact looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-details mb-4 mb-lg-0">
                            <p class="mb-3"><i class="mdi mdi-email-outline align-middle text-muted fs-20 me-2"></i> <span
                                    class="fw-medium">support@website.com</span></p>
                            <p class="mb-3"><i class="mdi mdi-web align-middle text-muted fs-20 me-2"></i> <span
                                    class="fw-medium">www.website.com</span></p>
                            <p class="mb-3"><i class="mdi mdi-phone align-middle text-muted fs-20 me-2"></i> <span
                                    class="fw-medium">+245 1234 5678</span></p>
                            <p class="mb-3"><i class="mdi mdi-hospital-building text-muted fs-20 me-2"></i> <span
                                    class="fw-medium">9:00 AM - 6:00 PM</span></p>
                            <p class="mb-3"><i class="mdi mdi-map-marker-outline text-muted fs-20 me-2"></i> <span
                                    class="fw-medium">412, Plantation Rd, Morehead City, NC, 28557.</span></p>
                        </div>
                        <!--end contact-details-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-7">
                        <form method="post" onsubmit="return validateForm()" class="contact-form" name="myForm" id="myForm">
                            <span id="error-msg"></span>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Enter your name*">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <span class="input-group-text"><i class="mdi mdi-email-outline"></i></span>
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Enter your email*">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-12">
                                    <div class="position-relative mb-3">
                                        <span class="input-group-text"><i class="mdi mdi-file-document-outline"></i></span>
                                        <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-12">
                                    <div class="position-relative mb-3">
                                    <span  class="input-group-text align-items-start"><i class="mdi mdi-comment-text-outline"></i></span>
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message*"></textarea>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-sm-12 text-end">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary"
                                        value="Send Message">
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </form>
                        <!--end form-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end contact-->


        <!-- START FOOTER -->
        <footer class="bg-dark section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <ul class="list-inline social-list mb-0">
                                <li class="list-inline-item"><a href="#" class="social-icon footer-link"><i
                                            class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon footer-link"><i
                                            class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon footer-link"><i
                                            class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon footer-link"><i
                                            class="mdi mdi-google-plus"></i></a></li>
                            </ul>
                            <!--end social-->
                        </div>
                        <div class="footer-terms">
                            <ul class="mb-0 list-inline text-center mt-4">
                                <li class="list-inline-item"><a href="#" class="footer-link">Terms & Condition</a></li>
                                <li class="list-inline-item"><a href="#" class="footer-link">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="#" class="footer-link">Contact Us</a></li>
                            </ul>
                        </div>
                        <!--end footer-terms-->
                        <div class="mt-4 pt-2 text-center">
                            <p class="text-white-50 mb-0">
                                <script>document.write(new Date().getFullYear())</script> &copy; Landsay - Design with <i
                                class="mdi mdi-heart text-danger"></i> by
                                <a href="https://themeforest.net/search/themesdesign" class="text-muted">Themesdesign.</a>
                            </p>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </footer>
        <!-- END FOOTER -->


        <!-- Modal -->
        <div class="modal fade" id="presentationVideo" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content  bg-transparent border-0">
                    <div class="modal-body p-0">
                        <div class="text-end">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="ratio ratio-16x9">
                            <video id="VisaChipCardVideo" class="video-box" controls>
                                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!--end modal-body-->
                </div>
                <!--end modal-content-->
            </div>
            <!--end modal-dialog-->
        </div>
        <!--end modal-->


        <!--start subscribe-Modal -->
        <div class="subscribe-modal modal fade" id="subscribe" tabindex="-1" aria-labelledby="subscribeform"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!--end modal-header-->
                    <div class="modal-body text-center pt-0">
                        <img src="{{ env('MAIN_URL') }}public/assets/images/subscribe.png" alt="subscribe" class="img-fluid" />
                        <h5 class="modal-title mt-2 mb-2" id="subscribeform">Subscribe</h5>
                        <p class="text-muted mb-4">
                            Join your hand with us for a better life <br /> and beautiful future.
                        </p>
                        <form action="#">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control border" id="subscribeemail"
                                    placeholder="Enter your email" />
                                <button class="btn btn-primary btn-sm" type="submit" id="button-addon2">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <!--end modal-body-->
                </div>
                <!--end modal-content-->
            </div>
            <!--end modal-dialog-->
        </div>
        <!--end SUBSCRIBE modal-->

        <!-- Style switcher -->
        <div id="style-switcher" onclick="toggleSwitcher()" style="left: -189px;">
            <div>
                <h6>Select your color</h6>
                <ul class="pattern list-unstyled mb-0">
                    <li>
                        <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                    </li>
                    <li>
                        <a class="color2" href="javascript: void(0);" onclick="setColor('success')"></a>
                    </li>
                    <li>
                        <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                    </li>
                    <li>
                        <a class="color4" href="javascript: void(0);" onclick="setColor('orange')"></a>
                    </li>
                    <li>
                        <a class="color5" href="javascript: void(0);" onclick="setColor('info')"></a>
                    </li>
                    <li>
                        <a class="color6" href="javascript: void(0);" onclick="setColor('purple')"></a>
                    </li>
                </ul>
            </div>
            <div class="bottom">
                <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
            </div>
        </div>
        <!-- end switcher-->

        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
        <!--end back-to-top-->


        <!-- Bootstrap Bundale js -->
        <script src="js/bootstrap.bundle.min.js"></script>

        <!-- Swiper Slider js -->
        <script src="js/swiper-bundle.min.js"></script>

        <!-- Contact Js -->
        <script src="js/contact.js"></script>

        <!-- Index-init Js -->
        <script src="js/index.init.js"></script>

        <!-- App js -->
        <script src="js/app.js"></script>
    </body>


<!-- Mirrored from themesdesign.in/landsay/layout/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 05:57:20 GMT -->
</html>
