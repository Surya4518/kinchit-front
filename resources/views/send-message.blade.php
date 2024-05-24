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
  <script>
    pr = 1191757;
    var scinvsible = 1;
    var ecuriy = "8e";
    vrstps = 1;
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

    .h4_clr {
      color: #0033FF;
      border-bottom: 1px dashed #ccc;
      margin: 5px 0;
    }

    .high-row-content .high-mid-row label {
      font-size: 13px;
      font-weight: 500;
      text-transform: capitalize;
      color: #555;
      float: left;
      width: 40%;
    }

    .high-row-content .high-mid-row span {
      font-size: 13px;
      color: #555;
      float: left;
      width: 60%;
      font-weight: 400;
    }

    .user-picture1 {
      overflow: hidden;
      object-fit: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      background: #ebebeb;
      padding: 10px;
      border-radius: 10px;
      border: 1px solid #bababa;
      box-shadow: 0 6px 10px rgba(207, 212, 222, 1);
    }

    .veiwprof_partright {
      box-shadow: 0 1px 2px rgba(43, 59, 93, 0.29);
      overflow: hidden;
      background-color: #fff;
      padding: 15px 15px;
      margin: 5px;
      border-radius: 10px;
    }
  </style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

<body>
  <!-- header -->
  @include('include.header')
  <section class="bred-crum" style="background-image:url({{env('MAIN_URL')}}public/assets/images/breadcrum/header.jpg);">
    <div class="container">
      <h2 class="page-title">Send Personalised Message</h2>
      <ul class="breadcrumb-nav">
        <li><a href="#">Home</a></li>
        <li><i class="fas fa-angle-right"></i></li>
        <li>Send Personalised Message </li>
      </ul>
    </div>
  </section>
  <section class=" about-one--home section-space1">
    <div class="about-one__bg">
      <div class="about-one__bg__border"></div>
      <div class="about-one__bg__inner"></div>
    </div>
    <!-- /.about-one__left__bg -->
    <div class="container">
      <div class="row gutter-y-50 justify-content-center mb-5">
        <p class="text-center mb-4">You can send PERSONALIZED message to the below member.</p>
        <div class="col-xl-12 col-md-12">
          <!-- Demo header-->
          <div class="row">
            <div class="col-md-7">
              <div class="col-md-12 col-sm-12 container-fulid padding0 veiwprof_partright" style="background:#fff; overflow:hidden;">
                <div class="row">
                  <!--image part-->
                  <div class="col-md-3 col-sm-3" style="padding:0px -10px; margin:10px auto;" align="center">
                    <div align="center" class="allmargin-xs user-picture1">
                      <img src="" class="img-responsive" id="My-Image" width="170">
                    </div>
                  </div>

                  <!--image part-->
                  <div class="col-md-8 col-sm-7">
                    <div class="high-row-content">
                      <div class="mid-row-sec">
                        <div class="high-mid-row">
                          <h4 class="h4_clr" id="profileid"></h4>
                        </div>
                        <div class="high-mid-row">
                          <label>Age, Height</label><span id="AGE"></span>
                        </div>
                        <div class="high-mid-row">
                          <label>Community</label><span id="Community"></span>
                        </div>
                        <div class="high-mid-row">
                          <label>Education</label><span id="EducationName"></span>
                        </div>
                        <div class="high-mid-row">
                          <label>Occupation, Income</label><span id="OccupationName"></span>
                        </div>
                        <div class="high-mid-row">
                          <label>Location</label><span id="CityName"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <div>
                <form action="" id="send-mail">
                  <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                  <input type="hidden" name="device_id" id="device_id" value="1">
                  <input type="hidden" name="to_id" id="to_id" value="{{$id}}">
                  <textarea class="form-control" id="msg" name="msg"></textarea>
                  <button class="sum mt-3 mb-3" onclick="SendMail()"> SEND</button>
                </form>
              </div>
            </div>
          </div>
          <!-- /.about-one__content -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</body>

</html>

<script>
  function MyProfile() {
    const MatriId = '{{$id}}'
    var formdata = new FormData();
    formdata.append('token', "{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}");
    formdata.append('device_id', '1');
    formdata.append('matriid', MatriId);
    $.ajax({
      type: 'post',
      url: "{{ env('API_URL') }}get-myprofiles",
      data: formdata,
      processData: false,
      contentType: false,
      success: function(response) {
        if (response['status'] == 200) {
          var userData = response['data'];
          if (userData && userData['Photo1Approve'] === 'Yes') {

            $('#My-Image').attr('src', 'http://kinchitapi.senthil.in.net/public/' + userData['photo1']);
          } else if (userData && userData['Photo2Approve'] === 'Yes') {

            $('#My-Image').attr('src', 'http://kinchitapi.senthil.in.net/public/' + userData['Photo2']);
          } else if (userData && userData['Photo3Approve'] === 'Yes') {

            $('#My-Image').attr('src', 'http://kinchitapi.senthil.in.net/public/' + userData['Photo3']);
          } else {

            $('#My-Image').attr('src', 'http://kinchit-front.senthil.in.net/public/assets/images/Female.png');
          }

          $('#profileid').text((userData['MatriID'] !== null ? userData['MatriID'] : 'N/A'));
          $('#AGE').text((userData['Age'] !== null && userData['Height'] !== null) ? userData['Age'] + '/' + userData['Height'] : 'N/A');
          $('#Community').text(((userData['ReligionName'] !== null && userData['CasteName'] !== null) ? userData['ReligionName'] + ',' + userData['CasteName'] : 'N/A'));
          $('#EducationName').text((userData['EducationName'] !== null ? userData['EducationName'] : 'N/A'));
          $('#OccupationName').text(((userData['OccupationName'] !== null && userData['Annualincome'] !== null) ? userData['OccupationName'] + ',' + userData['Annualincome'] : 'N/A'));
          $('#CityName').text((userData['CityName'] !== null ? userData['CityName'] : 'N/A'));
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

  function SendMail() {
    var formdata = new FormData($('#send-mail')[0]);
    $.ajax({
      type: 'post',
      url: "{{ env('API_URL') }}send-message",
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

  $(function() {
    $('#assign_course').submit(function(event) {
      event.preventDefault();
      $('.form-control').on('keyup change', function() {
        $('.validate_errors').text('');
      });
    });
    MyProfile()
  })
  $(function() {
    $('#send-mail').submit(function(event) {
      event.preventDefault();
      $('.form-control').on('keyup change', function() {
        $('.validate_errors').text('');
      });
    });
  })
</script>