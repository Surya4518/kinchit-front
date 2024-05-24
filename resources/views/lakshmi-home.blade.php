

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
/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/


.blur{
    filter: blur(13px);
}
.ctt-btn {
    position: relative;
    top: -320px;
}
.modal-backdrop.show {
    opacity: var(--bs-backdrop-opacity);
    z-index: 99 !important;
}
</style>

</head>



<body>





  <!-- header -->

  @include('include.header')

  <section class="bred-crum" style="background-image:url({{env('MAIN_URL')}}public/assets/images/breadcrum/header.jpg);">

    <div class="container">

      <h2 class="page-title">Lakshmi Kalyanam</h2>

      <ul class="breadcrumb-nav">

        <li><a href="index">Home</a></li>

        <li><i class="fas fa-angle-right"></i></li>

        <li>Lakshmi Kalyanam</li>

      </ul>

    </div>

  </section>

<div class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
          <div class="blur">
        <img src="{{env('MAIN_URL')}}public/assets/images/slider-1-2.jpg">
          </div>
          <div class="text-center ctt-btn">
              <a href="#"  data-toggle="modal" data-target="#matrimony_account" class="sum">Create Account</a>
          </div>
        </div>
        </div>
    </div>
    
</div>

<div class="about-one about-one--home section-space mb-5">
            <div class="about-one__bg">
                <div class="about-one__bg__border"></div>
                <!-- /.about-one__bg__border -->
                <div class="about-one__bg__inner" style="background-image: url('assets/images/shapes/about-shape-1-1.png');"></div>
                <!-- /.about-one__left__bg__inner -->
            </div>
            <!-- /.about-one__left__bg -->
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-xl-6 wow fadeInLeft" >
                        <div class="about-one__left">
                           <img src="{{env('MAIN_URL')}}public/assets/images/banner_img1.png" class="img-fluid" style="width:400px;"> 
                        </div>
                        <!-- /.about-one__left -->
                    </div>
                    <div class="col-xl-6" style="align-self:center;">
                        <div class="about-one__content">
                            <div class="sec-title">

                                <h6 class="sec-title__tagline @@extraClassName mb-4" style="color: orange;">ABOUT Lakshmi Kalyanam</h6>
                                <!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title mb-4" style="color: #830000;">Welcome to Lakshmi Kalyanam !</h3>
                                <!-- /.sec-title__title -->
                            </div>
                            <!-- /.sec-title -->
                            <div class="about-one__text-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">                            
                                <!-- /.about-one__text-box__image -->
                                <p class="about-one__text">This is an exclusive matrimony portal catering to the spiritually inclined bhakta community. It offers several benefits to its members, the foremost being the ease and pleasure of searching for a likeminded life partner from across the globe at the click of a mouse. </p>

                                
                            </div>
                            <!-- /.about-one__text-box -->
                         
                       
                        </div>
                        <!-- /.about-one__content -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <!-- <img src="assets/images/shapes/about-shape-1-2.png" alt="cleenhearts" class="about-one__hand"> -->
        </div>

        <!-- <div class="modal fade" id="matrimony_account" tabindex="-1" role="dialog" aria-labelledby="matrimony_accountLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="matrimony_accountLabel">Create Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form id="matrimony_create_account" method="post" enctype="multipart/form-data">
                            <div class="col-12 mt-2">
                                <label for="profilecreatedby">Profile Created By</label>
                                <select name="profilecreatedby" class="form-select" id="profilecreatedby">
                                    <option value="">Select</option>
                                    <option value="Self" selected>Self</option>
                                    <option value="Parents">Parents</option>
                                    <option value="Guardian">Guardian</option>
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Relative">Relative</option>
                                    <option value="Member of Marriage Bureau">Member of Marriage Bureau</option>
                                </select>
                            </div>
                            <div class="col-12 mt-2">
                                <label for="marital_status">Marital Status</label>
                                <select class="form-select" name="marital_status" id="marital_status">
                                    <option value="Unmarried">Never Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Seperated">Seperated</option>
                                </select>
                            </div>
                            <div class="col-12 mt-2 want-to-show" style="display: none;">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-12 mt-2 want-to-show" style="display: none;">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="col-12 mt-2 want-to-show" style="display: none;">
                                <label for="">Mobile Number</label>
                                <input type="text" class="form-control" name="phone_number" id="phone_number">
                            </div>
                            <div class="col-12 mt-2 want-to-show" style="display: none;">
                                <label for="">Gender</label>
                                <select class="form-select" name="gender" id="gender">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-12 mt-2 want-to-show" style="display: none;">
                                <label for="">Date Of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
                                <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                                <input type="hidden" name="device_id" id="device_id" value="1">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="sum" onclick="CreateMatrimonyAccount()">Submit</button>
                </div>
            </div>
        </div>
    </div> -->
  <div class="wats">

    <div class="wats2">

      <a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0" target="_blank"><img
          src="{{env('MAIN_URL')}}public/assets/images/whatsapp.png"></a>
    </div>

  </div>

  <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>



  <script src="{{env('MAIN_URL')}}public/assets/js/jquery-1.12.4.min.js"></script>

  <!-- jquery-ui js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery-ui.js"></script>

  <!-- popper min js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/popper.min.js"></script>

  <!-- Latest compiled and minified Bootstrap -->

  <script src="{{env('MAIN_URL')}}public/assets/bootstrap/js/bootstrap.min.js"></script>

  <!-- owl-carousel min js  -->

  <script src="{{env('MAIN_URL')}}public/assets/owlcarousel/js/owl.carousel.min.js"></script>

  <!-- magnific-popup min js  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/magnific-popup.min.js"></script>

  <!-- waypoints min js  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/waypoints.min.js"></script>

  <!-- parallax js  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/parallax.js"></script>

  <!-- jquery dd js  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.dd.min.js"></script>

  <!-- countdown js  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.countdown.min.js"></script>

  <!-- jquery.counterup.min js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.counterup.min.js"></script>

  <!-- jquery.parallax-scroll js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.parallax-scroll.js"></script>

  <!-- fit video  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.fitvids.js"></script>

  <!-- imagesloaded js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/imagesloaded.pkgd.min.js"></script>

  <!-- isotope min js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/isotope.min.js"></script>

  <!-- cookie js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/js.cookie.js"></script>



  <script src="{{env('MAIN_URL')}}public/assets/js/scripts.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>




  @include('include.footer')
</body>

<script>
  //  function CreateMatrimonyAccount() {
  //       var formdata = new FormData($('#matrimony_create_account')[0]);
  //       $.ajax({
  //           type: 'post',
  //           url: "{{ env('API_URL') }}create-account",
  //           data: formdata,
  //           processData: false, // Prevents jQuery from automatically transforming the data into a query string
  //           contentType: false,
  //           success: function(response) {
  //               if (response['status'] == 200) {
  //                   $.confirm({
  //                       title: 'Success!',
  //                       content: response['message'],
  //                       type: 'green',
  //                       typeAnimated: true,
  //                       icon: 'fa fa-success',
  //                       closeIcon: true,
  //                       buttons: {
  //                           tryAgain: {
  //                               text: 'OK',
  //                               btnClass: 'btn-green',
  //                               action: function() {
  //                                   window.location.href = '/';
  //                               }
  //                           },
  //                           close: function() {
  //                               window.location.href = '/';
  //                           }
  //                       }
  //                   });
  //                   setCookie('marital_acc', '1', 1);
  //               }
  //               if (response['status'] == 401) {
  //                   const obj = response['errors'];
  //                   for (const fieldName in obj) {
  //                       if (obj.hasOwnProperty(fieldName)) {
  //                           // $(`[id="${fieldName}_error"]`).text(obj[fieldName][0])
  //                           // notify.js
  //                           $(`[id="${fieldName}"]`).notify(obj[fieldName][0], {
  //                               className: "error",
  //                               showDuration: 300,
  //                               autoHideDelay: 2000, // Set the duration in milliseconds
  //                           })
  //                           const inputField = $(`[id="${fieldName}"]`);
  //                           inputField.focus();
  //                           // $('html, body').animate({
  //                           //     scrollTop: inputField.offset().top -
  //                           //         80
  //                           // }, 500);
  //                           break;
  //                       }
  //                   }
  //               }
  //               if (response['status'] == 400) {
  //                   $.confirm({
  //                       title: 'Encountered an error!',
  //                       content: response['message'],
  //                       type: 'red',
  //                       typeAnimated: true,
  //                       icon: 'fa fa-warning',
  //                       closeIcon: true,
  //                       buttons: {
  //                           tryAgain: {
  //                               text: 'OK',
  //                               btnClass: 'btn-red',
  //                               action: function() {}
  //                           },
  //                           // close: function() {}
  //                       }
  //                   });
  //               }
  //               if (response['status'] == 501) {
  //                   $.confirm({
  //                       title: 'error!',
  //                       content: 'Kindly login to proceed',
  //                       type: 'red',
  //                       typeAnimated: true,
  //                       icon: 'fa fa-warning',
  //                       closeIcon: true,
  //                       buttons: {
  //                           tryAgain: {
  //                               text: 'OK',
  //                               btnClass: 'btn-red',
  //                               action: function() {
  //                                   sessionStorage.clear();
  //                                   deleteCookie('typeofuser');
  //                                   deleteCookie('token');
  //                                   deleteCookie('marital_acc');
  //                                   window.location.href = '/user-login';
  //                               }
  //                           },
  //                           close: function() {
  //                               sessionStorage.clear();
  //                               deleteCookie('typeofuser');
  //                               deleteCookie('token');
  //                               deleteCookie('marital_acc');
  //                               window.location.href = '/user-login';
  //                           }
  //                       }
  //                   });

  //               }
  //           },
  //           error: function(data) {
  //               console.log('Error:', data);
  //           }
  //       })
  //   }
</script>

</html>
