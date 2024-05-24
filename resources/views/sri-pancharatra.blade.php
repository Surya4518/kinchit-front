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

    #selectCountry {

      padding: 11px 7px 11px 10px;

      border: 1px solid #ced4da;

      border-radius: 4px;

      width: 100%;

    }

    .brouch.mb-4 {
      text-align: left;
    }

    iframe#viewPdf {
      height: 500px;
      width: -webkit-fill-available;
    }

    /* end */
    
    #viewPdf {
    border: 8px solid #da9a63;
    border-radius: 10px;
}

.not-found {
    display: none;
}

.not-found-message {
    text-align: center;
    font-size: 18px;
    color: red;
}
  </style>

</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">


<body>





  <!-- header -->

  @include('include.header')



  <section class="bred-crum" style="background-image:url({{env('MAIN_URL')}}public/assets/images/breadcrum/header.jpg);">

    <div class="container">

      <h2 class="page-title">Online Registration - Sri Pancharatra
        Education</h2>

      <ul class="breadcrumb-nav">

        <li><a href="index">Home</a></li>

        <li><i class="fas fa-angle-right"></i></li>
        <li> Courses</li>
        <li><i class="fas fa-angle-right"></i></li>
        <li> Pancharatra agama</li>


      </ul>

    </div>

  </section>

  <section class="con-form mb-5">

    <div class="container-fluid mttran">

      <div class="row justify-content-center">

        <div class="col-md-6 frms mb-5">

          <form id="assign_course" method="post" enctype="multipart/form-data">
            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
            <input type="hidden" name="device_id" id="device_id" value="1">
            <input type="hidden" name="url" id="url" value="{{$id}}">
            <div class="row g-3">

              <div class="col-md-12 mb-3">

                <label for="your-name" class="form-label">Student's Name<span class="quform-required">*</span></label>

                <input type="text" class="form-control" id="student_name" name="student_name" required>
                <p class="validate_errors" id="student_name" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-12 mb-3">

                <label for="your-name" class="form-label">Father's Name<span class="quform-required">*</span></label>

                <input type="text" class="form-control" id="father_name" name="father_name" required>
                <p class="validate_errors" id="father_name" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-12 mb-3">

                <label for="your-name" class="form-label">Samasrayana Acharyan<span class="quform-required">*</span></label>

                <input type="text" class="form-control" id="acharyan" name="acharyan" required>
                <p class="validate_errors" id="acharyan" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 mb-3">

                <label for="your-name" class="form-label">Name of the Temple Serving<span class="quform-required">*</span></label>

                <input type="text" class="form-control" id="name_of_serving" name="name_of_serving" required>
                <p class="validate_errors" id="name_of_serving" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 mb-3">

                <label for="your-name" class="form-label">Full Address of Temple Serving<span class="quform-required">*</span></label>

                <input type="text" class="form-control" id="full_address_serving" name="full_address_serving" required>
                <p class="validate_errors" id="full_address_serving" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-12 mb-3">

                <label for="your-name" class="form-label">School/College Education Details<span class="quform-required">*</span></label>

                <input type="text" class="form-control" id="education_details" name="education_details" required>
                <p class="validate_errors" id="education_details" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <!--<div class="col-md-12 mb-3">-->

              <!--  <label for="your-name" class="form-label">Date Of Birth<span class="quform-required">*</span></label>-->

              <!--  <input type="date" class="form-control" id="your-name" name="your-name" required>-->

              <!--</div>-->


              <div class="col-md-6 mb-3">

                <label for="your-email" class="form-label">Phone Number<span class="quform-required">*</span></label>

                <input type="number" class="form-control" id="mobile_number" name="phone_number" required>
                <p class="validate_errors" id="phone_number" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 mb-3">

                <label for="your-subject" class="form-label">Email Address<span class="quform-required">*</span></label>

                <input type="text" class="form-control" id="email" name="email">
                <p class="validate_errors" id="email" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 mb-3">

                <label for="your-subject" class="form-label">Address Line 1<span class="quform-required">*</span></label>

                <input type="text" class="form-control" id="address_line1" name="address_line1">
                <p class="validate_errors" id="address_line1" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <div class="col-md-6 mb-3">

                <label for="your-subject" class="form-label">Address Line 2<span class="quform-required">*</span></label>

                <input type="text" class="form-control" id="address_line2" name="address_line2">
                <p class="validate_errors" id="address_line2" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
              </div>

              <!--  <div class="col-md-6 mb-3">-->

              <!--  <label for="your-subject" class="form-label">Country<span class="quform-required">*</span></label><br>-->
              <!--  <input type="text" class="form-control" id="your-name" name="your-name" required="" readonly="" placeholder="India">-->
              <!-- <select id="selectCountry" name="selectCountry">

              <!--    <option value="">Choose Country</option>-->

              <!--  </select> -->

              <!--</div>-->
              <!--  <div class="col-md-6 mb-3">-->

              <!--  <label for="your-subject" class="form-label">State<span class="quform-required">*</span></label>-->

              <!--    <select class="form-select" id="exampleFormControlSelect12">-->

              <!--    <option value="SelectState">Select State</option>-->

              <!--    <option value="Andra Pradesh">Tamil Nadu</option>-->

              <!--    <option value="Arunachal Pradesh">Andrapradesh</option>-->
              <!--  </select>-->

              <!--</div>-->

              <!--<div class="col-md-6 mb-3">-->

              <!--  <label for="your-subject" class="form-label">City / Town<span class="quform-required">*</span></label>-->

              <!--  <select class="form-select" id="exampleFormControlSelect12">-->

              <!--    <option value="SelectState">Select City</option>-->

              <!--    <option value="Andra Pradesh">Chennai</option>-->

              <!--    <option value="Arunachal Pradesh">Nagapattinam</option>-->
              <!--  </select>-->

              <!--</div>-->



              <!--<div class="col-md-6 mb-3">-->

              <!--  <label for="your-subject" class="form-label">Pincode<span class="quform-required">*</span></label>-->

              <!--  <input type="text" class="form-control" id="your-subject" name="your-subject">-->

              <!--</div>-->





              <div class="col-md-12 text-center">
                <button type="submit" onclick="AssignCourse()" class="sum">Submit </button>

              </div>

            </div>

          </form>

        </div>



        <div class="col-md-6 text-center">

          <div class="brouch mb-4">

            <!-- <img src="{{env('MAIN_URL')}}public/assets/images/audio/sri-pancharatra-offline-reg-form.jpg" class="img-fluid" style="border: 8px solid #da9a63;border-radius: 10px;"> -->
            <iframe id="viewPdf" src="" class="img-fluid" style="border: 8px solid #da9a63;border-radius: 10px;"></iframe>

          </div>

          <div class="brouch">

            <a class="btn btn-white rounded-0 animation animated fadeInUp" id="pdf_view" href="" data-animation="fadeInUp" data-animation-delay="0.8s" style="animation-delay: 0.8s; opacity: 1; cursor: pointer;" contenteditable="false">Click Here to View</a>

          </div>

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>



  <script>
    $(function() {
      $('#assign_course').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      CourseList()
    })
    var select = document.getElementById("selectCountry");



    var countries = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");



    for (var i = 0; i < countries.length; i++) {



      var option = document.createElement("option");

      var txt = document.createTextNode(countries[i]);

      option.appendChild(txt);

      option.setAttribute("value", countries[i]);

      select.insertBefore(option, select.lastChild);



    }



    document.addEventListener('DOMContentLoaded', function() {

      document.querySelector('select[name="selectCountry"]').onchange = alertCountry;

    }, false);



    function alertCountry(event) {

      if (!event.target.value) alert('Please select a country');

      else alert('You chose ' + event.target.value + '. Yay, grab a beer!');

    }

    function AssignCourse() {
      var formdata = new FormData($('#assign_course')[0]);
      var phoneNumber = $('#mobile_number').val();
      //console.log(phoneNumber);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}assign-course",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
          if (response['status'] == 200) {
            var smsFormData = new FormData();
            smsFormData.append('mobile', phoneNumber);
            smsFormData.append('message', 'Welcome to Kinchitkaram Trust. Your volunteer code is tes. Below are your login details - kinchit.org/login. Your username and password is var');
            $.ajax({
              type: 'post',
              url: "{{ env('API_URL') }}sent-sms",
              data: smsFormData, // or any other data needed for the second API
              processData: false,
              contentType: false,
              success: function(response) {
                // Handle success of the second API call
              },
              error: function(data) {
                console.log('Error:', data);
              }
            });
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

    function CourseList() {
      var formdata = new FormData();
      formdata.append('token', "{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}");
      formdata.append('device_id', '1');
      formdata.append('url', $('#url').val());
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-course-data",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
          if (response['status'] == 200) {
            console.log(response['data']['course'][0]['down_frm_pdf'])
            // var pdfUrl = 'http://kinchit-admin.senthil.in.net/public/' + response['data']['course'][0]['down_frm_pdf'];
            // $('#viewPdf').attr('src', pdfUrl);
            var pdfUrl = response['data']['course'][0]['down_frm_pdf'];
            if (pdfUrl) {
                pdfUrl = 'http://kinchit-admin.kinchit.org/public/' + pdfUrl;
                $('#viewPdf').attr('src', pdfUrl);
                $('#viewPdf').removeClass('not-found').addClass('found');
                $('#pdf_view').click(function(e) {
                    e.preventDefault();
                    window.open(pdfUrl, '_blank');
                });
            } else {
                $('#viewPdf').attr('src', '').removeClass('found').addClass('not-found');
                // Display a message
                $('#viewPdf').replaceWith('<p class="not-found-message">PDF not found</p>');
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
  </script>



</body>



</html>