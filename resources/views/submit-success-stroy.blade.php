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


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <!-- SITE TITLE -->

  <title>Kinchitkaram Trust</title>

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

    .trans-svg:hover {

      transform: scale(1.2);

    }

    .abu-d {
      background: #e9e3e3;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }

    .rep-lab {
      color: #fff;
    }

    .abu-btn {
      background: #9b0606;
      border: none;
    }

    .quform-required {
      color: #fff !important;
    }

    input#your-surname::placeholder {
      color: #fff;
      text-align: center;
      font-size: 20px;
    }
  </style>

</head>



<body>





  <!-- header -->


  @include('include.header')


  <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

    <div class="container">

      <h2 class="page-title">Submit Success Story</h2>

      <ul class="breadcrumb-nav">

        <li><a href="index">Home</a></li>
        <li><i class="fas fa-angle-right"></i></li>

        <li>Success Story </li>
        <li><i class="fas fa-angle-right"></i></li>

        <li> Submit Success Story</li>



      </ul>

    </div>

  </section>



  <div class="container mt-5 mb-5 pb-5">
    <div class="row gutter-y-50 justify-content-center">

      <div class="col-xl-12 col-md-12">
        <div class="about-one__content">
          <!-- /.sec-title -->
          <div class="about-one__text-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="abu-d" style="background-image: url({{ env('MAIN_URL') }}public/assets/images/lakshmi/wedding_bg.jpg);background-size: cover;background-position: center;background-repeat: no-repeat;">
              <form id="success_form" method="post" enctype="multipart/form-data">
                <div class="row g-3">
                  <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                  <input type="hidden" name="device_id" id="device_id" value="1">
                  <div class="col-md-6">
                    <label for="your-surname" class="form-label rep-lab">BRIDE'S NAME <span class="quform-required">*</span></label>
                    <input type="text" class="form-control" id="bride_name" name="bride_name" required>
                    <p class="validate_errors" id="bride_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                  </div>
                  <div class="col-md-6">
                    <label for="your-email" class="form-label rep-lab">BRIDE'S PROFILE ID <span class="quform-required">*</span></label>
                    <input type="text" class="form-control" id="bride_profile_id" name="bride_profile_id" required>
                    <p class="validate_errors" id="bride_profile_id_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                  </div>
                  <div class="col-md-6">
                    <label for="your-surname" class="form-label rep-lab">GROOM'S NAME <span class="quform-required">*</span></label>
                    <input type="text" class="form-control" id="groom_name" name="groom_name" required>
                    <p class="validate_errors" id="groom_name_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>

                  </div>
                  <div class="col-md-6">
                    <label for="your-email" class="form-label rep-lab">GROOM'S PROFILE ID <span class="quform-required">*</span></label>
                    <input type="text" class="form-control" id="groom_profile_id" name="groom_profile_id" required>
                    <p class="validate_errors" id="groom_profile_id_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                  </div>
                  <div class="col-md-6">
                    <label for="your-surname" class="form-label rep-lab">EMAIL ID <span class="quform-required">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <p class="validate_errors" id="email_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                  </div>
                  <div class="col-md-6">
                    <label for="your-email" class="form-label rep-lab">MOBILE NUMBER <span class="quform-required">*</span></label>
                    <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
                    <p class="validate_errors" id="mobile_number_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                  </div>
                  <div class="col-md-6">
                    <label for="your-surname" class="form-label rep-lab">CONTACT ADDRESS <span class="quform-required">*</span></label>
                    <textarea type="text" class="form-control" id="contact_address" name="contact_address" required></textarea>
                    <p class="validate_errors" id="contact_address_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                  </div>
                  <div class="col-md-6">
                    <label for="your-email" class="form-label rep-lab">YOUR COMMENTS OF KINCHIT ORG <span class="quform-required">*</span></label>
                    <textarea type="text" class="form-control" id="your_comments" name="your_comments" required></textarea>
                  </div>
                  <div class="col-md-6">
                    <label for="your-email" class="form-label rep-lab">WEDDING DATE <span class="quform-required">*</span></label>
                    <input type="date" class="form-control" id="weding_date" name="weding_date" required>
                    <p class="validate_errors" id="weding_date_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                  </div>
                  <div class="col-md-6">
                    <label for="captcha-input" class="form-label rep-lab">WEDDING PHOTO <span class="quform-required">*</span></label>
                    <input type="file" class="form-control" id="wedding_photo" name="wedding_photo" required>
                    <p class="validate_errors" id="wedding_photo_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                  </div>
                  <div class="col-md-6 mb-2">
                    <label for="your-email" class="form-label rep-lab">VERFICATION CODE(CASE SENSITIVE) <span class="quform-required">*</span></label>
                    <input type="text" class="form-control" id="verify_code" name="verify_code" required>
                    <p class="validate_errors" id="verify_code_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                  </div>
                  <div class="col-md-2 rand-btn">
                    <input type="text" class="form-control" id="your-surname" name="your-surname" required readonly placeholder="637643" style="background: #c5c5c5;border: none;">
                  </div>
                  <div class="col-12">
                    <div class="row justify-content-center">
                      <div class="col-md-3">
                        <button type="submit" onclick="SuccessStory()" class="btn btn-dark w-100 fw-bold abu-btn" style="background: #9b0606; border: none;">SEND MESSAGE</button>
                      </div>

                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /.about-one__text-box -->


        </div>
        <!-- /.about-one__content -->
      </div>


    </div>
    <!-- /.row -->
  </div>












  @include('include.footer')

  <!-- hitwebcounter Code START -->





  <!-- END FOOTER -->

  <div class="wats">

    <div class="wats2">

      <a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0" target="_blank"><img src="{{ env('MAIN_URL') }}public/assets//images/whatsapp.png"></a>
    </div>

  </div>

  <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>



  <script src="{{ env('MAIN_URL') }}public/assets//js/jquery-1.12.4.min.js"></script>

  <!-- jquery-ui js -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/jquery-ui.js"></script>

  <!-- popper min js -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/popper.min.js"></script>

  <!-- Latest compiled and minified Bootstrap -->

  <script src="{{ env('MAIN_URL') }}public/assets//bootstrap/js/bootstrap.min.js"></script>

  <!-- owl-carousel min js  -->

  <script src="{{ env('MAIN_URL') }}public/assets//owlcarousel/js/owl.carousel.min.js"></script>

  <!-- magnific-popup min js  -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/magnific-popup.min.js"></script>

  <!-- waypoints min js  -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/waypoints.min.js"></script>

  <!-- parallax js  -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/parallax.js"></script>

  <!-- jquery dd js  -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/jquery.dd.min.js"></script>

  <!-- countdown js  -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/jquery.countdown.min.js"></script>

  <!-- jquery.counterup.min js -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/jquery.counterup.min.js"></script>

  <!-- jquery.parallax-scroll js -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/jquery.parallax-scroll.js"></script>

  <!-- fit video  -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/jquery.fitvids.js"></script>

  <!-- imagesloaded js -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/imagesloaded.pkgd.min.js"></script>

  <!-- isotope min js -->

  <script src="{{ env('MAIN_URL') }}public/assets//js/isotope.min.js"></script>

  <!-- cookie js -->

  <script src="assets/js/js.cookie.js"></script>
  <script src="assets/js/notify.js"></script>
  <script src="assets/js/notify.min.js"></script>

  <script src="assets/js/scripts.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>




  <script>
    $(document).ready(function() {
      var randomNumber = Math.floor(100000 + Math.random() * 900000);
      $('#your-surname').val(randomNumber.toString());

      $('#success_form').submit(function(event) {
        event.preventDefault();
      });

      $('.form-control').on('keyup change', function() {
        $('.validate_errors').text('');
      });

    });


    function SuccessStory() {
      formSubmitHandler();
      var formdata = new FormData($('#success_form')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}success-story",
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


    function formSubmitHandler() {
      var verifycode = $('#verify_code').val();
      if (verifycode === $('#your-surname').val()) {
        return true;
      } else {
        var randomNumber = Math.floor(100000 + Math.random() * 900000);
        $('#your-surname').val(randomNumber.toString());
        $.confirm({
          title: 'Encountered an error!',
          content: 'Invalid verification code',
          type: 'red',
          typeAnimated: true,
          icon: 'fa fa-warning',
          closeIcon: true,
          buttons: {
            tryAgain: {
              text: 'OK',
              btnClass: 'btn-red',
              action: function() {

              },
              close: function() {

              }
            },
          }
        });
        return false;
      }

    }
  </script>



</body>



</html>