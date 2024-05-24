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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <!-- Favicon Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" />
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

    .up-frm {
      padding: 10px;
      background: url({{ env('MAIN_URL') }}public/assets/images/audio/up-bg.png);
      border-radius: 10px;
    }

    .custom-control-input.is-invalid~.custom-control-label,
    .was-validated .custom-control-input:invalid~.custom-control-label {
      color: #121212;
    }

    .profile-pic {
      border-radius: 50%;
      height: 150px;
      width: 150px;
      background-size: cover;
      background-position: center;
      background-blend-mode: multiply;
      vertical-align: middle;
      text-align: center;
      color: transparent;
      transition: all .3s ease;
      text-decoration: none;
      cursor: pointer;
    }

    .mmh {
      font-size: 20px;
      color: #fff;
    }

    .mm-con {
      padding: 20px 0 20px 0;
      background: #9a0e0e;
      border-radius: 10px;
      border-left: 5px solid #ff9900;
    }
  </style>
</head>

<body>


  <!-- header -->
  @include('include.header')
  <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg)">
    <div class="container">
      <h2 class="page-title"> Profile</h2>
      <ul class="breadcrumb-nav">
        <li><a href="/">Home</a></li>
        <li><i class="fas fa-angle-right"></i></li>
        <li> Profile</li>
      </ul>
    </div>
  </section>
  <section class="up-profile mb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 mm-con mb-4">
          <h2 class="text-center mmh">You have been enrolled for Velukkudi Krishnan Swami’s Online Kalakshepam.<span style="color: #e8a71a;
    margin: 0 0 0 9px "><a href="kalakshepam" style="color: orange;">Click Here to Listen</a></span></h2>
        </div>
        <div class="col-md-10 uppr-cont">
          <form class="up-frm">
            <div class="row mt-3 p-3">
              <div class="col-md-12 mb-3 text-center">
                <div class="profile-pic" id="user-profile" style="margin:auto;">
                </div>
                </label>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">Volunteer Code<span class="quform-required">*</span></label>

              </div>
              <div class="col-md-6 mb-3">
                <p id="volunteer_code"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"> First Name<span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="f_name"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"> Last Name<span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="l_name"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">Date of Birth<span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="dob"></p>
              </div>
              <div class="col-md-6 mb-3">
                <label for="your-subject" class="form-label">Gender </label><br>
              </div>
              <div class="col-md-6 mb-3">
                <p id="gender1"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">Samasrayana Acharyan<span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="acharyan"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">Email Address<span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="email_address"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">Landline<span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="landline"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">Mobile / SMS<span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="mobile_sms"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Mobile / WhatsApp</label><span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="mobile_whatsapp"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Address Line 1</label><span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="address1"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Address Line 2</label><span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="address2"></p>
              </div>
              <!--<div class="col-md-6 ">-->
              <!--  <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Area</label><span class="quform-required">*</span></label>-->
              <!--</div>-->
              <!--<div class="col-md-6 mb-3">-->
              <!--  <p id="area"></p>-->
              <!--</div>-->
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">City / Town</label><span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="city"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">State</label><span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="state"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Pincode</label><span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="pincode"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Country</label><span class="quform-required">*</span></label>
              </div>
              <div class="col-md-6 mb-3">
                <p id="country">India</p>
              </div>
              <!--<div class="col-md-6 ">-->
              <!--  <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Do you Listen to Enpani? </label><span class="quform-required">*</span></label>-->
              <!--</div>-->
              <!--<div class="col-md-6 mb-3">-->
              <!--  <p id="enpani">Yes</p>-->
              <!--</div>-->
              <!--<div class="col-md-6 ">-->
              <!--  <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Payment Method</label><span class="quform-required">*</span></label>-->
              <!--</div>-->
              <!--<div class="col-md-6 mb-3">-->
              <!--  <p id="payment_method">Volunteer</p>-->
              <!--</div>-->
            </div>

          </form>
        </div>
      </div>

    </div>

  </section>


  <!-- START FOOTER -->
  @include('include.footer')
  <!-- hitwebcounter Code START -->


  <!-- END FOOTER -->
  <div class="wats">
    <div class="wats2">
      <a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0" target="_blank"><img src="{{ env('MAIN_URL') }}public/assets/images/whatsapp.png"></a>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>


</body>
<script>
  $(function(){
    myProfile()
  })
  function myProfile() {
    var formdata = new FormData();
    formdata.append('token', getCookie('token'));
    formdata.append('device_id', '1');
    $.ajax({
      type: 'post',
      url: "{{ env('API_URL') }}my-profile",
      data:formdata,
      processData: false,
      contentType: false,
      success: function(response) {
        if (response['status'] == 200) {
          var userData = response['data'][0]; // Access the first object in the array
        $('#volunteer_code').text(userData['user_login']);
        $('#f_name').text(userData['first_name']);
        $('#l_name').text(userData['last_name']);
        $('#dob').text(userData['dob']);
        $('#gender1').text(userData['gender']);
        $('#acharyan').text(userData['acharyan']);
        $('#email_address').text(userData['user_email']);
        $('#landline').text(userData['landline_ph_no']);
        $('#mobile_sms').text(userData['phone_number']);
        $('#mobile_whatsapp').text(userData['phone_number_wa']);
        $('#address1').text(userData['address_1']);
        $('#address2').text(userData['address_2']);
        $('#area').text(userData['area']);
        $('#city').text(userData['CityName']);
        $('#state').text(userData['StateName']);
        $('#pincode').text(userData['postcode']);
        $('#country').text(userData['CountryName']);
        
         var imageUrl = 'http://kinchit-api.kinchit.org/public/' + userData['user_image'];

          if (userData['user_image'] && userData['user_image'].trim() !== '') {
            $('#user-profile').css('background-image', 'url(' + imageUrl + ')');

          } else {
            $('#user-profile').css('background-image', 'url({{env('
              MAIN_URL ')}}public/assets/images/man.png)');

          }

        $('#enpani').text(userData['kinchit_enpani']);
        $('#payment_method').text(userData['payment_method']);
        }
        if (response['status'] == 401) {
          const obj = response['errors'];
          for (const fieldName in obj) {
            if (obj.hasOwnProperty(fieldName)) {
              $(`[id="${fieldName}"]`).notify(obj[fieldName][0], {
                className: "error",
                showDuration: 300,
                autoHideDelay: 2000,
              })
              const inputField = $(`[id="${fieldName}"]`);
              inputField.focus();
              break;
            }
          }
        }
        if (response['status'] == 400) {
          $.confirm({
            title: 'Encountered an error!',
            content: response['message'],
            type: 'red',
            typeAnimated: true,
            icon: 'fa fa-warning',
            closeIcon: true,
            buttons: {
              tryAgain: {
                text: 'OK',
                btnClass: 'btn-red',
                action: function() {}
              },
            }
          });
        }
        if (response['status'] == 500) {
          $.confirm({
            title: 'Encountered an error!',
            content: response['error'],
            type: 'red',
            typeAnimated: true,
            icon: 'fa fa-warning',
            closeIcon: true,
            buttons: {
              tryAgain: {
                text: 'OK',
                btnClass: 'btn-red',
                action: function() {}
              },
            }
          });
        }
          if (response['status'] == 501) {
                    $.confirm({
                        title: 'error!',
                        content: 'Kindly login to proceed',
                        type: 'red',
                        typeAnimated: true,
                        icon: 'fa fa-warning',
                        closeIcon: false,
                        buttons: {
                            tryAgain: {
                                text: 'OK',
                                btnClass: 'btn-red',
                                action: function() {
                                    sessionStorage.clear();
                                    deleteCookie('typeofuser');
                                    deleteCookie('token');
                                    deleteCookie('marital_acc');
                                    window.location.href = '/user-login';
                                }
                            },
                            // close: function() {
                            //     sessionStorage.clear();
                            //     deleteCookie('typeofuser');
                            //     deleteCookie('token');
                            //     deleteCookie('marital_acc');
                            //     window.location.href = '/user-login';
                            // }
                        }
                    });

                }
      },
      error: function(data) {
        console.log('Error:', data);
      }
    })
  }
</script>

</html>