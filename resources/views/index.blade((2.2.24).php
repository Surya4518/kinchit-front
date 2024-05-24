<!DOCTYPE html>
<html lang="en">


<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">

<!-- SITE TITLE -->
<title>Kinchitkaram Trust</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ env('MAIN_URL') }}public/assets/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/animate.css">
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css4478.css?family=Oswald:200,300,400,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css35c2.css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<!-- Icon Font CSS -->

<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/ionicons.min.css">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/all.min.css">
<!-- Flaticon Font CSS -->
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/flaticon.css">
<!-- Themify Font CSS -->
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/themify-icons.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/magnific-popup.css">
<!-- jquery-ui CSS -->
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/jquery-ui.css">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/style.css">
<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/responsive.css">
<link rel="stylesheet" id="layoutstyle" href="{{ env('MAIN_URL') }}public/assets/color/theme-default.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
var sc_project=11981757;
var sc_invisible=1;
var sc_security="35d2687e";
var sc_https=1;
</script>
<script src="../../../www.statcounter.com/counter/counter.js" async></script>

</head>

<body>

<div id="preloader" style="background-color:#ffd48c;">
    <div class="loading_wrap">
    	<img src="{{ env('MAIN_URL') }}public/assets/images/loading_logo.png" alt="logo" />
    </div>
</div>
<!-- header -->
@include('include.header')


<!-- END HEADER -->

<!-- START SECTION BANNER -->
<section class="banner_slider banner_slide_half p-0">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active bg_light_pink">
            	<div class="banner_slide_content">
                    <div class="container">
                        <div class="row justify-content-end align-items-center">
                        	<div class="col-xl-6 col-md-5">
								<div class="banner_img text-center">
                                    <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                        <img data-parallax='{"y": -30, "smoothness": 20}' src="{{ env('MAIN_URL') }}public/assets/images/banner_img1.png" alt="image" class="bannerimg1" />
                                    </div>
                                    <div class="circle_bg1">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-7">
                                <div class="banner_content animation" data-animation="zoomIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s"> <span >Welcome to </span><br><span style="color: #000;">Kinchitkaram</span> <span style="color: #000;">Trust</span></h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Kinchitkaram Trust was formed ten years ago to serve the needy and enhance the spiritual awareness of devotees.</p>
                                    <a class="btn btn-default rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Know More</a>
                                    <a class="btn btn-white rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                        		</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape1">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="{{ env('MAIN_URL') }}public/assets/images/slider_pattern1.png" alt="image"/>
                        </div>
                    </div>
                    <div class="shape2">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="{{ env('MAIN_URL') }}public/assets/images/slider_pattern2.png" alt="image"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg_light_yellow">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-5">
                                <div class="banner_img2 text-center">
                                    <div class="animation " data-animation="fadeInRight" data-animation-delay="0.5s">
                                        <img data-parallax='{"y": -30, "smoothness": 20}' src="{{ env('MAIN_URL') }}public/assets/images/banner_img2.png" alt="image"/>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 order-md-first">
                                <div class="banner_content animation" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s"><span>Swamy Ramanuja</span> <br>Guiding Light </h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Bhagavad Ramanuja is the guiding light for Kinchitkaram Trust. His vision was equanimity and devotion irrespective of caste and creed. To make this a reality, he advised his devotees to</p>
                                       <a class="btn btn-default rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Know More</a>
                                    <a class="btn btn-white rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                        		</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">

                    <div class="shape4">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="{{ env('MAIN_URL') }}public/assets/images/slider_pattern4.png" alt="image"/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
     <div class="carousel_nav">
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
    </div>
</section>



<!-- START SECTION BENIFIT -->
<section class="pb_70">
	<div class="container-fluid">

		<div class="row">

            <div class="col-lg-4 col-sm-6">
                <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">

                    <div class="intro_desc">
                        <h4>Ramanujarya Divyajna</h4>
                        <p> DD Serve</p>
                          <a class="btn btn-default rounded-0 animation" href="ramanuja-dd-serve.php" data-animation="fadeInUp" data-animation-delay="0.7s">Know More</a>
                                    <a class="btn btn-white rounded-0 animation" href="divyangya-serve-online-bookingform.php" data-animation="fadeInUp" data-animation-delay="0.8s">Advance Booking</a>
                    </div>
                </div>
            </div>
        	<div class="col-lg-4 col-sm-6">
            	<div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">

                    <div class="intro_desc">
                    	<h4>Sri Pancharatra</h4>
                        <p> Online Education</p>
                          <a class="btn btn-default rounded-0 animation" href="sri-pancharatra.php" data-animation="fadeInUp" data-animation-delay="0.7s">Register</a>
                                    <a class="btn btn-white rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.8s">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">

                    <div class="intro_desc">
                    	<h4>Gitamrtam </h4>
                               <p> Bhagavad Gita Online Class</p>
                                <a class="btn btn-default rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Click Here to Know More</a>

                    </div>
                </div>
            </div>




        </div>



    </div>
</section>
<!-- END SECTION BENIFIT -->

<!-- START SECTION ABOUT -->
<section style="background-color:#fcc260;">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1">

                	<h2>About Kinchitkaram Trust</h2>
                </div>
                <p style="color:#000;"> Kinchitkaram Trust was formed ten years ago to serve the needy and enhance the spiritual awareness of devotees. The holy scriptures say “akinchitkarasya seshatva anupapatti:” (He who does not serve his little mite, is not a devotee). Drawing the message of this saying, your trust is engaged in little services and rightly named as “Kinchitkaram” or “My little mite”</p>
                <p>

Bhagavad Ramanuja is the guiding light for Kinchitkaram Trust. His vision was equanimity and devotion irrespective of caste and creed. To make this a reality, he advised his devotees to
</p>
<p>
    <ul>
    <li>Study Sribhashya, the commentary to Vedanta sutras and propagate</li>
   <li> Study the four thousand devotional hymns of Azhwars and propagate</li>
   <li> Study the Rahasya texts and propagate</li>
    <li>Renovate and Maintain the holy and historic shrines and offer daily food flower and chandan to the deity</li>
    <li>Build a hut in Melkote (Tirunarayana puram) and serve the needy</li>
    <li>Serve a devotee with absolute humility</li>
</ul>
<p>
Following the above guidance of Swamy Ramanuja, the undermentioned services are rendered by the Trust</p>

                <!--<a href="#" class="btn btn-default rounded-0" style="margin-top:20px;">Read More</a>-->
            </div>
            <div class="col-md-6" >
            	<iframe width="100%" height="615" src="https://www.youtube.com/embed/uwC0xe8wH0g?si=eYD2r2zSNtJ6PFmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="shape_img">
    	<div class="ol_shape1">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ env('MAIN_URL') }}public/assets/images/shape1.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape2">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ env('MAIN_URL') }}public/assets/images/shape2.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape3">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ env('MAIN_URL') }}public/assets/images/shape3.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape4">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ env('MAIN_URL') }}public/assets/images/shape4.png" alt="image"/>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

<!-- START SECTION CLASSES -->
<section class="pb_70">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1">
                	<span class="sub_heading">Know Our Services</span>
                	<h2> Our Services</h2>
                </div>

                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="classes_img">
                        <img src="{{ env('MAIN_URL') }}public/assets/images/s1.jpg" alt="image" />

                    </div>
                    <div class="classes_info">

                        <div class="classes_title" style="background-color: #ff9101;  text-align:center; padding:10px 0px 4px 0px;">





                            <h4 ><a href="#" style="color:#fff;">Maintenance of Historical Sites</a></h4>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="classes_img">
                        <img src="{{ env('MAIN_URL') }}public/assets/images/s3.jpg" alt="image" />

                    </div>
                    <div class="classes_info">

                          <div class="classes_title" style="background-color: #ff9101;  text-align:center; padding:10px 0px 4px 0px;">

                            <h4><a href="#" style="color:#fff;">Perpetuation of Sanskrit and Dravida Vedas </a></h4>
                        </div>

                    </div>
                </div>
            </div>
              <div class="col-lg-4 col-sm-6">
                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="classes_img">
                     <img src="{{ env('MAIN_URL') }}public/assets/images/s4.jpg" alt="image" />

                    </div>
                    <div class="classes_info">

                       <div class="classes_title" style="background-color: #ff9101;  text-align:center; padding:10px 0px 4px 0px;">

                            <h4><a href="#" style="color:#fff;">Abhyasa Kendra
</a></h4>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="classes_img">
                        <img src="{{ env('MAIN_URL') }}public/assets/images/s5.jpg" alt="image" />

                    </div>
                    <div class="classes_info">

                      <div class="classes_title" style="background-color: #ff9101;  text-align:center; padding:10px 0px 4px 0px;">

                            <h4><a href="goshala.php" style="color:#fff;">Goshala</a></h4>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="classes_img">
                 <img src="{{ env('MAIN_URL') }}public/assets/images/s6.jpg" alt="image" />

                    </div>
                    <div class="classes_info">

                         <div class="classes_title" style="background-color: #ff9101;  text-align:center; padding:10px 0px 4px 0px;">

                            <h4><a href="#" style="color:#fff;">Yatra</a></h4>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="classes_img">
                      <img src="{{ env('MAIN_URL') }}public/assets/images/s2.jpg" alt="image" />
                        <div class="link_container">
                            <a href="#"><i class="ion-plus"></i></a>
                        </div>
                    </div>
                    <div class="classes_info">

                          <div class="classes_title" style="background-color: #ff9101;  text-align:center; padding:10px 0px 4px 0px;">

                            <h4><a href="#" style="color:#fff;">Gnanakaithaa</a></h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>

     <p style="text-align: center; margin: 0 auto;">
     <!--<a href="#" class="btn btn-default rounded-0 mt-md-2" style="text-align: center; margin: 0 auto;">More Services</a></p>-->
    </div>
</section>
<!-- END SECTION CLASSES -->





<section style="background-color:#ffb937;"><div class="container animation" data-animation="fadeInUp" data-animation-delay="0.2s"><h2 style="text-align:center;">For Admissions, Please Contact Sriram Muralidharan <i class="fa fa-whatsapp" style="padding-left:20px;"></i> +91 87544 83776</h2></div></section>



<!-- START SECTION CALL TO ACTION -->
<section class="bg_light_pink" style="padding:100px 0px;">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-8 col-lg-6 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1">
                    <h2>Sri Rama Anuyatra – <span class="text_default">2023</span> </h2>
                </div>
                <p style="color:#000; text-align: center ;">With “Sri Ramayana” Upanyasam by Velukkudi Sri U.Ve. Krishnan Swamy
 </p>
                <a href="#" class="btn btn-default rounded-0 mt-md-2">Know More Details</a>
            </div>
        </div>
    </div>
    <div class="shape_img">
    	<div class="ol_shape5">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ env('MAIN_URL') }}public/assets/images/shape5.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape6">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ env('MAIN_URL') }}public/assets/images/shape6.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape7">

        </div>
    </div>
</section>

<!-- START FOOTER -->
@include('include.footer')
<!-- hitwebcounter Code START -->


<!-- END FOOTER -->
<div class="wats">
    <div class="wats2">
<a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0" target="_blank"><img src="{{ env('MAIN_URL') }}public/assets/images/whatsapp.png"></a></div>
</div>
<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<script src="{{ env('MAIN_URL') }}public/assets/js/jquery-1.12.4.min.js"></script>
<!-- jquery-ui js -->
<script src="{{ env('MAIN_URL') }}public/assets/js/jquery-ui.js"></script>
<!-- popper min js -->
<script src="{{ env('MAIN_URL') }}public/assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{ env('MAIN_URL') }}public/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="{{ env('MAIN_URL') }}public/assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="{{ env('MAIN_URL') }}public/assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="{{ env('MAIN_URL') }}public/assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="{{ env('MAIN_URL') }}public/assets/js/parallax.js"></script>
<!-- jquery dd js  -->
<script src="{{ env('MAIN_URL') }}public/assets/js/jquery.dd.min.js"></script>
<!-- countdown js  -->
<script src="{{ env('MAIN_URL') }}public/assets/js/jquery.countdown.min.js"></script>
<!-- jquery.counterup.min js -->
<script src="{{ env('MAIN_URL') }}public/assets/js/jquery.counterup.min.js"></script>
<!-- jquery.parallax-scroll js -->
<script src="{{ env('MAIN_URL') }}public/assets/js/jquery.parallax-scroll.js"></script>
<!-- fit video  -->
<script src="{{ env('MAIN_URL') }}public/assets/js/jquery.fitvids.js"></script>
<!-- imagesloaded js -->
<script src="{{ env('MAIN_URL') }}public/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js -->
<script src="{{ env('MAIN_URL') }}public/assets/js/isotope.min.js"></script>
<!-- cookie js -->
<script src="{{ env('MAIN_URL') }}public/assets/js/js.cookie.js"></script>

<script src="{{ env('MAIN_URL') }}public/assets/js/scripts.js"></script>

</body>

</html>
