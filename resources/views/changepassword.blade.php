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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/{{ env('MAIN_URL') }}public/assets/owl.carousel.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

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

    .mainDiv {

      display: flex;

      min-height: 100%;

      align-items: center;

      justify-content: center;

      background-color: #f9f9f9;

    }

    .cardStyle {

      width: 500px;

      border-color: white;

      background: #fff;

      padding: 36px 0;

      border-radius: 4px;

      margin: 30px 0;

      box-shadow: 0px 0 2px 0 rgba(0, 0, 0, 0.25);

    }

    #signupLogo {

      max-height: 100px;

      margin: auto;

      display: flex;

      flex-direction: column;

    }

    .formTitle {

      font-weight: 600;

      margin-top: 20px;

      color: #2F2D3B;

      text-align: center;

    }

    .inputLabel {

      font-size: 14px;

      color: #555;

      margin-bottom: 6px;

      margin-top: 24px;

    }

    .inputDiv {

      width: 70%;

      display: flex;

      flex-direction: column;

      margin: auto;

    }

    input {

      height: 40px;

      font-size: 16px;

      border-radius: 4px;

      border: none;

      border: solid 1px #ccc;

      padding: 0 11px;

    }

    input:disabled {

      cursor: not-allowed;

      border: solid 1px #eee;

    }

    .buttonWrapper {

      margin-top: 40px;

    }

    .submitButton {

      width: 70%;

      height: 40px;

      margin: auto;

      display: block;

      color: #fff;

      background-color: #ff7b00;

      border-color: #ff7b00;

      text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);

      box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);

      border-radius: 4px;

      font-size: 14px;

      cursor: pointer;

    }

    .submitButton:disabled,

    button[disabled] {

      border: 1px solid #cccccc;

      background-color: #cccccc;

      color: #666666;

    }



    #loader {

      position: absolute;

      z-index: 1;

      margin: -2px 0 0 10px;

      border: 4px solid #f3f3f3;

      border-radius: 50%;

      border-top: 4px solid #666666;

      width: 14px;

      height: 14px;

      -webkit-animation: spin 2s linear infinite;

      animation: spin 2s linear infinite;

    }



    @keyframes spin {

      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }

    }



    .field-icon {
      position: relative;
      float: right;
      /* right: 12px; */
      left: 86%;
      top: -34px;
      color: #000;
      font-size: 21px;
    }
  </style>

</head>



<body>





  <!-- header -->

  @include('include.header')

  <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

    <div class="container">

      <h2 class="page-title">Change Password</h2>

      <ul class="breadcrumb-nav">

        <li><a href="#">Home</a></li>
        <!--<li><i class="fas fa-angle-right"></i></li>-->
        <!--<li> Membership</li>-->
        <li><i class="fas fa-angle-right"></i></li>

        <li> Change Password</li>

      </ul>

    </div>

  </section>

  <section class="change-ps">

    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <div class="mainDiv">

            <div class="cardStyle">

              <form method="post" id="updatedpassword">
                <h2 class="formTitle">Please enter your new password and confirm</h2>
                <div class="inputDiv">
                  <label class="inputLabel" for="password">New Password</label>
                  <input id="new_pass" type="password" class="form-control" name="new_pass" maxlength="15">
                  <i toggle="#new_pass" class="fa fa-fw fa-eye field-icon toggle-password pl-lg-3"></i>
                  <p class="validate_errors" id="new_pass_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
                <div class="inputDiv">
                  <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                  <input type="password" id="confirm_pass" class="form-control" name="confirm_pass">
                  <i toggle="#confirm_pass" class="fa fa-fw fa-eye field-icon toggle-confirm-password pl-lg-3"></i>
                  <p class="validate_errors" id="confirm_pass_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
                <div class="buttonWrapper">
                  <button type="button" onclick="ChangePassword()" class="submitButton pure-button pure-button-primary">
                    <span>Continue</span>
                    <span id="loader"></span>
                  </button>
                </div>
              </form>

            </div>

          </div>

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

  <script src="{{ env('MAIN_URL') }}public/assets/js/notify.js"></script>
  <script src="{{ env('MAIN_URL') }}public/assets/js/notify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

  <script>
    $(".toggle-password").click(function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") === "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });

    $(".toggle-confirm-password").click(function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") === "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
  </script>

  <script>
    var password = document.getElementById("password")

      ,
      confirm_password = document.getElementById("confirmPassword");



    // document.getElementById('signupLogo').src = "https://s3-us-west-2.amazonaws.com/shipsy-public-public/assets/shipsy/SHIPSY_LOGO_BIRD_BLUE.png";

    enableSubmitButton();



    function validatePassword() {

      if (password.value != confirm_password.value) {

        confirm_password.setCustomValidity("Passwords Don't Match");

        return false;

      } else {

        confirm_password.setCustomValidity('');

        return true;

      }

    }



    password.onchange = validatePassword;

    confirm_password.onkeyup = validatePassword;



    function enableSubmitButton() {

      //document.getElementById('submitButton').disabled = false;

      document.getElementById('loader').style.display = 'none';

    }



    function disableSubmitButton() {

      //document.getElementById('submitButton').disabled = true;

      document.getElementById('loader').style.display = 'unset';

    }



    function validateSignupForm() {

      var form = document.getElementById('signupForm');



      for (var i = 0; i < form.elements.length; i++) {

        if (form.elements[i].value === '' && form.elements[i].hasAttribute('required')) {

          console.log('There are some required fields!');

          return false;

        }

      }



      if (!validatePassword()) {

        return false;

      }



      onSignup();

    }



    function onSignup() {

      var xhttp = new XMLHttpRequest();

      xhttp.onreadystatechange = function() {



        disableSubmitButton();



        if (this.readyState == 4 && this.status == 200) {

          enableSubmitButton();

        } else {

          console.log('AJAX call failed!');

          setTimeout(function() {

            enableSubmitButton();

          }, 1000);

        }



      };



      xhttp.open("GET", "ajax_info.txt", true);

      xhttp.send();

    }


    $(document).ready(function() {
      $('.form-control').on('keyup change', function() {
        $('.validate_errors').text('');
      });
    });

    function ChangePassword() {
      var password = $('#new_pass').val();
  var confirmPassword = $('#confirm_pass').val();

  // Validate if passwords match`
  if (password !== confirmPassword) {
    $('#confirm_pass_error').text("Passwords do not match");
    return; // Exit function if passwords don't match
  } else {
    $('#confirm_pass_error').text(""); // Clear error message if passwords match
  }

      function getCookie(name) {
        var cookieValue = null;
        if (document.cookie && document.cookie !== '') {
          var cookies = document.cookie.split(';');
          for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();
            // Check if this cookie name is the one we're looking for
            if (cookie.substring(0, name.length + 1) === (name + '=')) {
              cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
              break;
            }
          }
        }
        return cookieValue;
      }

      // Construct the data to be sent
      var remember_token = '{{ $id }}';
      var formData = {
        new_pass: password,
        confirm_pass: confirmPassword,
        device_id: 1,
        token: getCookie('token'),
        remember_token: remember_token,
      };

      if (remember_token !== '') {
        $.ajax({
          type: 'post',
          url: "{{ env('API_URL') }}forgot-updated-password",
          data: formData, // Send the entire formData object
          success: function(response) {
            // handleResponse(response);
            if (response['status'] == 200) {
              sessionStorage.setItem('responseData', JSON.stringify(response.data));
              $.confirm({
                title: 'Success!',
                content: response['message'],
                type: 'success',
                typeAnimated: true,
                closeIcon: true,
                buttons: {
                  ok: {
                    text: 'OK',
                    btnClass: 'btn-success',
                    action: function() {
                      window.location.href = '/user-login';
                    }
                  },
                }
              });
            }
          },
          error: function(xhr, status, error) {
            console.log('Error:', error);
          }
        });
      } else {
        $.ajax({
          type: 'post',
          url: "{{ env('API_URL') }}update-password",
          data: formData,
          success: function(response) {
            handleResponse(response);
          },
          error: function(xhr, status, error) {
            console.log('Error:', error);
          }
        });
      }
    }

    function handleResponse(response) {
      if (response['status'] == 200) {
        sessionStorage.setItem('responseData', JSON.stringify(response.data));
        $.confirm({
          title: 'Success!',
          content: response['message'],
          type: 'success',
          typeAnimated: true,
          closeIcon: true,
          buttons: {
            ok: {
              text: 'OK',
              btnClass: 'btn-success',
              action: function() {
                window.location.href = '/';
              }
            },
          }
        });
      } else if (response['status'] == 401) {
        const obj = response['errors'];
        for (const fieldName in obj) {
          if (obj.hasOwnProperty(fieldName)) {
            // $(`[id="${fieldName}_error"]`).text(obj[fieldName][0])
            // notify.js
            $(`[id="${fieldName}"]`).notify(obj[fieldName][0], {
              className: "error",
              showDuration: 300,
              autoHideDelay: 2000, // Set the duration in milliseconds
            })
            const inputField = $(`[id="${fieldName}"]`);
            inputField.focus();
            // $('html, body').animate({
            //     scrollTop: inputField.offset().top -
            //         80
            // }, 500);
            break;
          }
        }
      } else if (response['status'] == 400) {
        // confirm.js
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
            // close: function() {}
          }
        });
      } else if (response['status'] == 402) {
        // confirm.js
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
            // close: function() {}
          }
        });
      } else if (response['status'] == 500) {
        // confirm.js
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
            // close: function() {}
          }
        });
      }  if (response['status'] == 501) {
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
    }

    function deleteCookie(name) {
      document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/;';
    }
  </script>

</body>



</html>