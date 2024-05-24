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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/public/assets/owl.carousel.min.css">
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

    .fm-label {
      color: #fff;
      font-size: 18px;
    }

    .up-frm {
      padding: 10px;
      /*background: url({{env('MAIN_URL')}}public/assets/images/audio/up-bg.png);*/
      border-radius: 10px;
      background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);
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

    .profile-pic:hover {
      background-color: rgba(0, 0, 0, .5);
      z-index: 10000;
      color: #fff;
      transition: all .3s ease;
      text-decoration: none;
    }

    .profile-pic span {
      display: inline-block;
      padding-bottom: 4.5em;
    }

    form input[type="file"] {
      display: none;
      cursor: pointer;
    }

    .select2-container--default .select2-selection--single {
      background-color: #fff;
      border: 1px solid #ced4da;
      border-radius: 4px;
      height: 45px;
      padding: 10px 15px;
      font-size: 14px;
    }

    .select2-container--default .select2-selection--single {
      background-color: #fff;
      border: 1px solid #ced4da !important;
      border-radius: 4px;
      height: 48px !important;
    }
  </style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

<body>


  <!-- header -->
  @include('include.header')
  <section class="bred-crum" style="background-image:url({{env('MAIN_URL')}}public/assets/images/breadcrum/header.jpg);">
    <div class="container">
      <h2 class="page-title">Update Profile</h2>
      <ul class="breadcrumb-nav">
        <li><a href="/">Home</a></li>
        <li><i class="fas fa-angle-right"></i></li>
        <li> Update Profile</li>
      </ul>
    </div>
  </section>
  <section class="up-profile mb-5">
    <div class="container mb-5">
      <div class="row justify-content-center">
        <div class="col-md-10 uppr-cont">
          <form class="up-frm" id="updated-profile" method="post" name="updated-profile">
            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
            <input type="hidden" name="device_id" id="device_id" value="1">
            <input type="hidden" name="user_edit_id" id="user_edit_id">
            <div class="row mt-3 p-3">
              <div class="col-md-12 mb-3 text-center">
                <label for="user_photo">
                  <div class="profile-pic" id="user-profile">
                    <span class="glyphicon glyphicon-camera"></span>
                    <span>Change Image</span>
                  </div>
                </label>
                <input type="File" name="user_photo" id="user_photo">
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">User Name<span class="quform-required">*</span></label>
                <input type="text" class="form-control" id="user_login" name="user_login" required placeholder="">
                <p class="validate_errors" id="user_login_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"> First Name<span class="quform-required">*</span></label>
                <input type="text" class="form-control" id="first_name" name="first_name" required placeholder="">
                <p class="validate_errors" id="first_name_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"> Last Name<span class="quform-required">*</span></label>
                <input type="text" class="form-control" id="last_name" name="last_name" required placeholder="">
                <p class="validate_errors" id="last_name_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">Date of Birth<span class="quform-required">*</span></label>
                <input type="date" class="form-control" id="date_birth" name="date_birth" required placeholder="">
                <p class="validate_errors" id="dob_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 mb-3">
                <label for="your-subject" class="form-label fm-label">Gender </label><br>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="gender" name="gender" value="Male" class="custom-control-input gender-radio ">
                  <label class="custom-control-label fm-label" for="customRadioInline1">Male </label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="gender" name="gender" value="Female" class="custom-control-input gender-radio">
                  <label class="custom-control-label fm-label" for="customRadioInline2">Female</label>
                  <p class="validate_errors" id="gender_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
              </div>

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">Samasrayana Acharyan<span class="quform-required">*</span></label>
                <input type="text" class="form-control" id="acharyan" name="acharyan" required>
                <p class="validate_errors" id="acharyan_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">Email Address<span class="quform-required">*</span></label>
                <input type="text" class="form-control" id="user_email" name="user_email" required placeholder="">
                <p class="validate_errors" id="user_email_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">Landline<span class="quform-required">*</span></label>
                <input type="text" class="form-control" id="land_line" name="land_line" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required maxlength="10" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10);" placeholder="">
                <p class="validate_errors" id="land_line_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label">Mobile / SMS<span class="quform-required">*</span></label>
                <input type="text" class="form-control" id="user_sms_no" name="user_sms_no" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required maxlength="10" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10);" placeholder="">
                <p class="validate_errors" id="user_sms_no_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Mobile / WhatsApp</label><span class="quform-required">*</span></label>
                <input type="text" class="form-control" id="user_wa_no" name="user_wa_no" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required maxlength="10" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10);" placeholder="">
                <p class="validate_errors" id="user_wa_no_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Current Address</label><span class="quform-required">*</span></label>
                <input type="text" class="form-control" id="address1" name="address1" required placeholder="">
                <p class="validate_errors" id="address1_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Permanent Address</label><span class="quform-required">*</span></label>
                <input type="text" class="form-control" id="address2" name="address2" required placeholder="">
                <p class="validate_errors" id="address2_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>
              <!--<div class="col-md-6 ">-->
              <!--  <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Area</label><span class="quform-required">*</span></label>-->
              <!--  <input type="text" class="form-control" id="area" name="area" required placeholder="">-->
              <!--  <p class="validate_errors" id="area_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>-->
              <!--</div>-->

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">State</label><span class="quform-required">*</span></label>
                <!-- <input type="text" class="form-control" id="state_name" name="state_name" required placeholder=""> -->
                <select class="form-control" id="state_name" name="state_name" required>
                </select>
                <p class="validate_errors" id="state_name_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">City / Town</label><span class="quform-required">*</span></label>
                <!-- <input type="text" class="form-control" id="city_name" name="city_name" required placeholder=""> -->
                <select class="form-control" id="city_name" name="city_name" required>
                </select>
                <p class="validate_errors" id="city_name_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>


              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Pincode</label><span class="quform-required">*</span></label>
                <!--<input type="text" class="form-control" id="postcode" name="postcode" required placeholder="">-->
                <input type="text" class="form-control" id="postcode" name="postcode" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6)">
                <p class="validate_errors" id="postcode_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>
              <div class="col-md-6 ">
                <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Country</label><span class="quform-required">*</span></label>
                <input type="text" class="form-control" id="country_name" name="country_name" value="India"  required>
                <p class="validate_errors" id="country_name_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <!-- <div class="col-md-6 ">
            <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Change Password</label><span class="quform-required">*</span></label>        
          </div>
          <div class="col-md-6 mb-3">
          <input type="text" class="form-control" id="your-name" name="your-name" required placeholder="">
          </div> -->
              <!-- <div class="col-md-6 ">
            <label for="your-name" class="form-label fm-label"><label for="phone_number-876">Confirm Password</label><span class="quform-required">*</span></label>        
          </div>
          <div class="col-md-6 mb-3">
          <input type="text" class="form-control" id="your-name" name="your-name" required placeholder="">
          </div> -->
              <div class="col-md-12 text-center mt-4">
                <input type="submit" onclick="UpdatedProfile()" class="sum">
              </div>

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
      <a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0" target="_blank"><img src="{{env('MAIN_URL')}}public/assets/images/whatsapp.png"></a>
    </div>
  </div>
  <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

  <script src="assets/js/jquery-1.12.4.min.js"></script>
  <!-- jquery-ui js -->
  <script src="assets/js/jquery-ui.js"></script>
  <!-- popper min js -->
  <script src="assets/js/popper.min.js"></script>
  <!-- Latest compiled and minified Bootstrap -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- owl-carousel min js  -->
  <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
  <!-- magnific-popup min js  -->
  <script src="assets/js/magnific-popup.min.js"></script>
  <!-- waypoints min js  -->
  <script src="assets/js/waypoints.min.js"></script>
  <!-- parallax js  -->
  <script src="assets/js/parallax.js"></script>
  <!-- jquery dd js  -->
  <script src="assets/js/jquery.dd.min.js"></script>
  <!-- countdown js  -->
  <script src="assets/js/jquery.countdown.min.js"></script>
  <!-- jquery.counterup.min js -->
  <script src="assets/js/jquery.counterup.min.js"></script>
  <!-- jquery.parallax-scroll js -->
  <script src="assets/js/jquery.parallax-scroll.js"></script>
  <!-- fit video  -->
  <script src="assets/js/jquery.fitvids.js"></script>
  <!-- imagesloaded js -->
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <!-- isotope min js -->
  <script src="assets/js/isotope.min.js"></script>
  <!-- cookie js -->
  <script src="assets/js/js.cookie.js"></script>

  <script src="assets/js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</body>

</html>

<script>
  // $(function() {
  //   $('#updated-profile').submit(function(event) {
  //     event.preventDefault();
  //     $('.form-control').on('keyup change', function() {
  //       $('.validate_errors').text('');
  //     });
  //   });
  //   MyProfile()
  // })

  $(document).ready(function() {
    MyProfile()
    //   $('#city_name').select2();
    //  $('#state_name').select2();
    $('#state_name').select2({
      ajax: {
        url: "{{ env('API_URL') }}get-state",
        type: "post",
        dataType: 'json',
        delay: 400,
        data: function(params) {
          return {
            search: params.term, // search term
          };
        },
        processResults: function(response) {
          const data = response.data;
          //  console.log(data.length);
          if (data.length == 0) {
            return {
              results: []
            };
          }
          if (data.length > 0) {
            // console.log(data.length);
            const formattedData = data.map(item => ({
              id: item.id,
              text: item.name
            }));
            return {
              results: formattedData
            };
          }
        },
        cache: true
      }
    })

    $('#city_name').select2({
      ajax: {
        url: "{{ env('API_URL') }}get-city",
        type: "post",
        dataType: 'json',
        delay: 400,
        data: function(params) {
          return {
            search: params.term, // search term
            state_id: $('#state_name').val()
          };
        },
        processResults: function(response) {
          const data = response.data;
          //  console.log(data.length);
          if (data.length == 0) {
            return {
              results: []
            };
          }
          if (data.length > 0) {
            // console.log(data.length);
            const formattedData = data.map(item => ({
              id: item.id,
              text: item.name
            }));
            return {
              results: formattedData
            };
          }
        },
        cache: true
      }
    })
  });

  function MyProfile() {
    var formdata = new FormData();
    formdata.append('token', "{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}");
    formdata.append('device_id', '1');
    $.ajax({
      type: 'post',
      url: "{{ env('API_URL') }}my-profile",
      data: formdata,
      processData: false,
      contentType: false,
      success: function(response) {
        if (response['status'] == 200) {
          var userData = response['data'][0];
          $('#user_edit_id').val(userData['ID']);
          $('#user_login').val(userData['user_login']);
          $('#first_name').val(userData['first_name']);
          $('#last_name').val(userData['last_name']);
          $('#date_birth').val(userData['dob']);
          $(".gender-radio").each(function() {
            if ($(this).val() === userData['gender']) {
              $(this).prop("checked", true);
            }
          });

          $('#acharyan').val(userData['acharyan']);
          $('#user_email').val(userData['user_email']);
          $('#land_line').val(userData['landline_ph_no']);
          $('#user_sms_no').val(userData['phone_number']);
          $('#user_wa_no').val(userData['phone_number_wa']);
          $('#address1').val(userData['address_1']);
          $('#address2').val(userData['address_2']);
          $('#area').val(userData['area']);
          // $('#city_name').val(userData['CityName']);
          // $('#state_name').val(userData['StateName']);

          $('#city_name').append('<option value="' + userData['city'] + '">' + userData['CityName'] + '</option>');
          $('#state_name').append('<option value="' + userData['state'] + '">' + userData['StateName'] + '</option>');

          // Set the selected options
          $('#city_name').val(userData['city']).trigger('change');
          $('#state_name').val(userData['state']).trigger('change');
          $('#postcode').val(userData['postcode']);
          $('#country_name').val(userData['country']);
          var imageUrl = 'http://kinchit-api.kinchit.org/public/' + userData['user_image'];

          if (userData['user_image'] && userData['user_image'].trim() !== '') {
            $('#user-profile').css('background-image', 'url(' + imageUrl + ')');

          } else {
            $('#user-profile').css('background-image', 'url({{env('
              MAIN_URL ')}}public/assets/images/man.png)');

          }


          // $.confirm({
          //   title: 'Success!',
          //   content: response['message'],
          //   type: 'green',
          //   typeAnimated: true,
          //   icon: 'fa fa-success',
          //   closeIcon: true,
          //   buttons: {
          //     tryAgain: {
          //       text: 'OK',
          //       btnClass: 'btn-green',
          //       action: function() {
          //         window.location.reload();
          //       }
          //     },
          //   }
          // });

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
      },
      complete: function() {
        $('#submit_button').prop('disabled', false);
      }
    });
  }

  function UpdatedProfile() {
    var formdata = new FormData($('#updated-profile')[0]);
    $.ajax({
      type: 'post',
      url: "{{ env('API_URL') }}update-the-profile",
      data: formdata,
      processData: false,
      contentType: false,
      success: function(response) {
        if (response['status'] == 200) {

          $.confirm({
            title: 'Success!',
            content: response['message'],
            type: 'green',
            typeAnimated: true,
            icon: 'fa fa-success',
            closeIcon: true,
            buttons: {
              tryAgain: {
                text: 'OK',
                btnClass: 'btn-green',
                action: function() {
                  window.location.reload();
                }
              },
            }
          });

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
      },
      complete: function() {
        $('#submit_button').prop('disabled', false);
      }
    });
  }
</script>