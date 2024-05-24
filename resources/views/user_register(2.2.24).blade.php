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

  <link href="https://fonts.googleapis.com/css4478.css?family=Oswald:200,300,400,500,600,700&amp;display=swap"
    rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css35c2.css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">

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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/{{ env('MAIN_URL') }}public/assets/owl.carousel.min.css">

  <script>

    var sc_project = 11981757;

    var sc_invisible = 1;

    var sc_security = "35d2687e";

    var sc_https = 1;

  </script>

  <script src="../../../www.statcounter.com/counter/counter.js" async></script>

  <style>
    .page-title {

      text-align: center;

      font-size: 60px;

      line-height: 1.35;

      color: #000 !important;

    }

    .breadcrumb-nav {

      margin-top: 20px;

      line-height: 1;

      display: flex;

      align-items: center;

      justify-content: center;

    }

    .breadcrumb-nav li {

      margin: 0 6px;

      font-size: 20px;

      font-weight: 500;

      list-style-type: none;

    }

    section {

      padding: 50px 0;

      position: relative;

      width: 100%;

      z-index: 1;

    }

    /* end */
  </style>

</head>



<body>





  <!-- header -->

  @include('include.header')



  <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

    <div class="container">

      <h2 class="page-title">User Registration</h2>

      <ul class="breadcrumb-nav">

        <li><a href="#">Home</a></li>

        <li><i class="fas fa-angle-right"></i></li>

        <li> User Registration</li>

      </ul>

    </div>

  </section>

  <section class="con-form">

    <div class="container">

      <div class="row">

        <div class="col-md-12 frms">

          <form>

            <div class="row g-3">
              <div class="col-md-12 mb-3">
                <h3>Personal Information</h3>
              </div>
              <div class="col-md-6 mb-3">

                <label for="your-name" class="form-label">Full Name<span class="quform-required">*</span></label>

                <input type="text" class="form-control" id="your-name" name="your-name" required>

              </div>
              <div class="col-md-6 mb-3">

                <label for="your-subject" class="form-label">Date of Birth<span class="quform-required">*</span></label>

                <input type="date" class="form-control" id="your-subject" name="your-subject">

              </div>
              <div class="col-md-6 mb-3">

                <label for="exampleFormControlSelect1 " class="fm-label">Gender<span
                    class="quform-required ">*</span></label>

                <select class="form-control" id="exampleFormControlSelect1">

                  <option>Please select</option>

                  <option>Male</option>

                  <option>Female</option>
                  <option>Others</option>

                </select>

              </div>

              <div class="col-md-6 mb-3">

                <label for="your-subject" class="form-label">Samasrayana Acharyan (if applicable)<span
                    class="quform-required">*</span></label>

                <input type="text" class="form-control" id="your-subject" name="your-subject">

              </div>
              <div class="col-md-12 mb-3">
                <h3> Contact Information</h3>
              </div>
              <div class="col-md-6 mb-3">

<label for="your-email" class="form-label">Mobile/SMS<span class="quform-required">*</span></label>

<input type="email" class="form-control" id="your-email" name="your-email" required>

</div>

<div class="col-md-6 mb-3">

<label for="your-subject" class="form-label">Mobile/Whatsapp<span
    class="quform-required">*</span></label>

<input type="text" class="form-control" id="your-subject" name="your-subject">

</div>

<div class="col-md-6 mb-3">

<label for="your-surname" class="form-label">Email Address <span
class="quform-required">*</span></label>

<input type="email" class="form-control" id="your-email" name="your-email" required>

</div>

<div class="col-md-6 mb-3">

<label for="your-subject" class="form-label">Address Line 1<span
    class="quform-required">*</span></label>

<input type="text" class="form-control" id="your-subject" name="your-subject">

</div>

<div class="col-md-6 mb-3">

<label for="your-subject" class="form-label">Address Line 2<span
    class="quform-required">*</span></label>

<input type="text" class="form-control" id="your-subject" name="your-subject">

</div>

<div class="col-md-6 mb-3">

  <label for="your-name" class="form-label fm-label">Country<span class="quform-required">*</span></label>

  <input type="text" class="form-control" id="your-name" name="your-name" required="" readonly="" placeholder="India">

</div>
<div class="col-md-6 mb-3">

  <label for="your-subject" class="form-label fm-label">State<span class="quform-required">*</span></label>

  <select class="form-control" id="exampleFormControlSelect1">

    <option value="SelectState">Select State</option>

    <option value="Andra Pradesh">Andra Pradesh</option>

    <option value="Arunachal Pradesh">Arunachal Pradesh</option>

    <option value="Assam">Assam</option>

    <option value="Bihar">Bihar</option>

    <option value="Chhattisgarh">Chhattisgarh</option>

    <option value="Goa">Goa</option>

    <option value="Gujarat">Gujarat</option>

    <option value="Haryana">Haryana</option>

    <option value="Himachal Pradesh">Himachal Pradesh</option>

    <option value="Jammu and Kashmir">Jammu and Kashmir</option>

    <option value="Jharkhand">Jharkhand</option>

    <option value="Karnataka">Karnataka</option>

    <option value="Kerala">Kerala</option>

    <option value="Madya Pradesh">Madya Pradesh</option>

    <option value="Maharashtra">Maharashtra</option>

    <option value="Manipur">Manipur</option>

    <option value="Meghalaya">Meghalaya</option>

    <option value="Mizoram">Mizoram</option>

    <option value="Nagaland">Nagaland</option>

    <option value="Orissa">Orissa</option>

    <option value="Punjab">Punjab</option>

    <option value="Rajasthan">Rajasthan</option>

    <option value="Sikkim">Sikkim</option>

    <option value="Tamil Nadu">Tamil Nadu</option>

    <option value="Telangana">Telangana</option>

    <option value="Tripura">Tripura</option>

    <option value="Uttaranchal">Uttaranchal</option>

    <option value="Uttar Pradesh">Uttar Pradesh</option>

    <option value="West Bengal">West Bengal</option>

    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>

    <option value="Chandigarh">Chandigarh</option>

    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>

    <option value="Daman and Diu">Daman and Diu</option>

    <option value="Delhi">Delhi</option>

    <option value="Lakshadeep">Lakshadeep</option>

    <option value="Pondicherry">Pondicherry</option>

  </select>

</div>
<div class="col-md-6 mb-3">

<label for="your-name" class="form-label fm-label">City<span class="quform-required">*</span></label>

<!-- <input type="text" class="form-control" id="your-name" name="your-name" required> -->
<select class="form-control" id="exampleFormControlSelect12">

<option value="SelectState">Select State</option>

<option value="Andra Pradesh">Chennai</option>

<option value="Arunachal Pradesh">Nagapattinam</option>
</select>

</div>
<div class="col-md-6 mb-3">

<label for="your-subject" class="form-label">Pincode<span class="quform-required">*</span></label>

<input type="text" class="form-control" id="your-subject" name="your-subject">

</div>
              <div class="col-md-12 mb-3">
                <h3> Other
                  Information</h3>
              </div>







              <div class="col-md-6 mb-3">

                <label for="your-subject" class="form-label">Educational Qualification<span
                    class="quform-required">*</span></label>

                <input type="text" class="form-control" id="your-subject" name="your-subject">

              </div>

              <div class="col-md-6 mb-3">

                <label for="your-subject" class="form-label">Work Experience<span
                    class="quform-required">*</span></label>

                <input type="text" class="form-control" id="your-subject" name="your-subject">

              </div>

              <div class="col-md-6 mb-3">

                <label for="your-subject" class="form-label">Special Interest / Hobby<span
                    class="quform-required">*</span></label>

                <input type="text" class="form-control" id="your-subject" name="your-subject">

              </div>

              <div class="col-md-6 mb-3">

                <label for="your-subject" class="form-label">Any Special Skill Set ?Please Mention Below<span
                    class="quform-required">*</span></label>

                <input type="text" class="form-control" id="your-subject" name="your-subject">

              </div>

              <div class="col-md-6 mb-3">

                <label for="your-subject" class="form-label">Upload Profile Photo</label><br>

                <input type="file" class="cv-up">

              </div>



              <div class="col-md-12 text-center mb-5">

                <input type="submit" class="sum">

              </div>







            </div>

          </form>

        </div>

      </div>

    </div>



  </section>





  <!-- END HEADER -->

  <!-- section starts -->





  <!-- section ends -->









  <!-- START FOOTER -->

  @include('include.footer')

  <!-- hitwebcounter Code START -->





  <!-- END FOOTER -->

  <div class="wats">

    <div class="wats2">

      <a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0" target="_blank"><img
          src="{{ env('MAIN_URL') }}public/assets/images/whatsapp.png"></a>
    </div>

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



  <script>

    jQuery("#carousel").owlCarousel({

      autoplay: true,

      rewind: true, /* use rewind if you don't want loop */

      margin: 20,

      /*

     animateOut: 'fadeOut',

     animateIn: 'fadeIn',

     */

      responsiveClass: true,

      autoHeight: true,

      autoplayTimeout: 2000,

      smartSpeed: 800,

      nav: true,

      responsive: {

        0: {

          items: 1

        },



        600: {

          items: 1

        },



        1024: {

          items: 1

        },



        1366: {

          items: 1

        }

      }

    });



  </script>

  <script>

    jQuery("#carousel1").owlCarousel({

      autoplay: true,

      rewind: true, /* use rewind if you don't want loop */

      margin: 20,

      /*

     animateOut: 'fadeOut',

     animateIn: 'fadeIn',

     */

      responsiveClass: true,

      autoHeight: true,

      autoplayTimeout: 4000,

      smartSpeed: 800,

      nav: true,

      responsive: {

        0: {

          items: 1

        },



        600: {

          items: 1

        },



        1024: {

          items: 1

        },



        1366: {

          items: 1

        }

      }

    });

  </script>

  <script>

    jQuery("#carousel2").owlCarousel({

      autoplay: true,

      rewind: true, /* use rewind if you don't want loop */

      margin: 20,

      /*

     animateOut: 'fadeOut',

     animateIn: 'fadeIn',

     */

      responsiveClass: true,

      autoHeight: true,

      autoplayTimeout: 4000,

      smartSpeed: 800,

      nav: true,

      responsive: {

        0: {

          items: 1

        },



        600: {

          items: 1

        },



        1024: {

          items: 1

        },



        1366: {

          items: 1

        }

      }

    });

  </script>

</body>



</html>
