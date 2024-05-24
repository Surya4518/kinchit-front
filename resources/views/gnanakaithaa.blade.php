

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

    .bf-frm {

      background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);

      padding-top: 40px;

      padding-right: 40px;

      padding-bottom: 40px;

      padding-left: 40px;

      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);

      overflow: hidden;

      border-radius: 10px
    }

    .fm-label {

      color: #fff;

    }

    .sum {

      background: #8e0404 !important;

    }

    .notes {
      position: relative;
      border-radius: 4px;
      display: block;
      font-size: 14px;
      margin: 16px 0;
      padding: 12px 24px 12px 60px
    }

    .notes:before {
      float: left;
      font-size: 30px;
      font-family: FontAwesome;
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
      word-wrap: normal;
      margin-left: -46px;
    }



    .notes1:before {
      color: #f76f07;
      content: '\f087';
    }

    .notes1 {

      background: #fff179;

      color: #272626;

      font-size: 20px;

    }



    .notes1:hover:before {
      -webkit-animation: ripple 0.65s linear;
      -moz-animation: ripple 0.65s linear;
      -ms-animation: ripple 0.65s linear;
      -o-animation: ripple 0.65s linear;
      animation: ripple 0.65s linear
    }

    @keyframes ripple {
      100% {
        opacity: 0;
        transform: scale(2.5)
      }
    }

    .your-don {

      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);

      padding: 20px;

      border-radius: 10px;

    }
  </style>

</head>



<body>





  <!-- header -->

  @include('include.header')

  <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

    <div class="container">

      <h2 class="page-title">Gnanakaithaa</h2>

      <ul class="breadcrumb-nav">

        <li><a href="#">Home</a></li>

        <li><i class="fas fa-angle-right"></i></li>

        <li> Services</li>

        <li><i class="fas fa-angle-right"></i></li>

        <li> Gnanakaithaa</li>

      </ul>

    </div>

  </section>



  <section class="billing mb-5">

    <div class="container">

      <div class="row mb-2">

        <div class="col-md-12">

          <div class="Billing-frm">

            <form class="bf-frm" id="gnanakaithaa_form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                  <input type="hidden" name="device_id" id="device_id" value="1">
              <div class="row">
                <p style="text-align: center;color:#fff;"><strong>“ஞானக்கைதா” (பொருளாதாரத்தில் நலிந்த மாணவர்களுக்கான கல்வி உதவி திட்டம்)</strong><br>
                  <strong>“Gyanakaithaa” (Assistance for education of Economically weaker students)</strong></p>             
                <div class="col-md-6 mb-3">
                  <label for="your-name" class="form-label fm-label">மாணவரின் பெயர்/ Name of Student<span
                      class="quform-required">*</span></label>
                  <input type="text" class="form-control" id="name_of_student" name="name_of_student" required="">
                  <p class="validate_errors" id="name_of_student_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
                <div class="col-md-6 mb-3">

                  <label for="your-name" class="form-label fm-label">தொடர்பு எண் (இருப்பின்) / Contact no, if available.<span
                      class="quform-required">*</span></label>

                  <input type="number" class="form-control text-uppercase" id="contact_no" name="contact_no" required>
                  <p class="validate_errors" id="contact_no_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
                <div class="col-md-6 mb-3">

                  <label for="your-name" class="form-label fm-label">மின் அஞ்சல் (இருப்பின்) / Email, if available.<span
                      class="quform-required">*</span></label>

                  <input type="email" class="form-control text-uppercase" id="email" name="email" required>
                  <p class="validate_errors" id="email_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
                
                <div class="col-md-6 mb-3">

                  <label for="your-name" class="form-label fm-label">பிறந்த தேதி / DOB<span
                      class="quform-required">*</span></label>
                  <input type="date" class="form-control text-uppercase" id="dob" name="dob" max="{{ $birthDate = date("Y-m-d", strtotime("-18 years")); }}" required>
                  <p class="validate_errors" id="dob_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
                <div class="col-md-6 mb-3">

                  <label for="your-name" class="form-label fm-label">வயது / Age :<span
                      class="quform-required">*</span></label>

                  <input type="number" class="form-control text-uppercase" id="age" name="age" readonly required>
                  <p class="validate_errors" id="age_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
             
                <div class="col-md-12 mb-3">
                  <h3 class="text-white">நிரந்தர முகவரி / Permanent Address:</h3>
                </div>

                <div class="col-md-6 mb-3">

                  <label for="your-name" class="form-label fm-label">கதவு எண் & தெரு பெயர் / Door No. & Street Name <span
                      class="quform-required">*</span></label>

                  <input type="text" class="form-control" id="door_no" name="door_no" required>
                  <p class="validate_errors" id="door_no_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>

                <div class="col-md-6 mb-3">

                  <label for="your-name" class="form-label fm-label">மாநிலம் / State<span
                      class="quform-required">*</span></label>

                  <!--<input type="text" class="form-control" id="state" name="state" required>-->
                  <select class="form-control" id="state" name="state" required>
                      <option value="">Select State</option>
                  </select>
                  <p class="validate_errors" id="state_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>

                <div class="col-md-6 mb-3">

                  <label for="your-name" class="form-label fm-label">நகரம் / Town or City<span
                      class="quform-required">*</span></label>

                  <!--<input type="text" class="form-control" id="city" name="city" required>-->
                  <select class="form-control" id="city" name="city" required>
                      <option value="">Select city</option>
                  </select>
                  <p class="validate_errors" id="city_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>

                <div class="col-md-6 mb-3">

                  <label for="your-name" class="form-label fm-label">அஞ்சல் குறியீடு / Pincode</label>

                  <input type="text" class="form-control" id="pincode" name="pincode">
                  <p class="validate_errors" id="pincode_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
                <div class="col-md-12 mb-3">

                  <label for="your-name" class="form-label fm-label">Present Address is same as Permanent Address<span
                      class="quform-required">*</span></label>

                      <select class="form-select" id="door_no1" name="door_no1" require>
                        <option value="">Please select</option>   
                        <option value="Yes">Yes</option>   
                        <option value="No">No</option>
                      </select>
                      <p class="validate_errors" id="door_no1_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
                <div class="col-md-12 mb-3">

                  <label for="your-name" class="form-label fm-label">தந்தை/தாய்/காப்பாளரின் பெயர் / Name of Father/ Mother/ Guardian:<span
                      class="quform-required">*</span></label>

                  <input type="text" class="form-control" id="name_of_parent" name="name_of_parent" required>
                  <p class="validate_errors" id="name_of_parent_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>





                <div class="col-md-12 mb-3">

                  <label for="your-name" class="form-label fm-label">பெற்றோர் தொடர்பு எண் / Parent Contact Number:<span
                      class="quform-required">*</span></label>

                  <input type="text" class="form-control" id="volunteer_contact_number" name="volunteer_contact_number" required>          
                  <p class="validate_errors" id="volunteer_contact_number_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
                <div class="col-md-12 mb-3">

                  <label for="your-name" class="form-label fm-label">மின் அஞ்சல் (இருப்பின்)/Email, if available.<span
                      class="quform-required"></span></label>

                  <input type="text" class="form-control" id="email1" name="email1">          
                  <p class="validate_errors" id="email1_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>

                <div class="col-md-12 mb-3">

                  <label for="your-name" class="form-label fm-label">மாணவர் (அ) தந்தை/ தாய்/காப்பாளரின் ஆதார்  (அ) குடும்ப அட்டை எண். Aadhaar (or) Family card number of Student (or) Father/ Mother/ Guardian.<span
                      class="quform-required">*</span></label>

                  <input type="text" class="form-control" id="aadhaar_no" name="aadhaar_no" required>          
                  <p class="validate_errors" id="aadhaar_no_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>            

                <div class="col-md-12 mb-3">

                  <label for="your-name" class="form-label fm-label">உடன் பிறந்தோர் எண்ணிக்கை / No of Siblings:<span
                      class="quform-required">*</span></label>

                  <input type="text" class="form-control" id="no_of_siblings" name="no_of_siblings" required>
                  <p class="validate_errors" id="no_of_siblings_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>

                <div class="col-md-12 mb-3">

                  <label for="your-name" class="form-label fm-label">குடும்பத்தின் ஆண்டு வருமானம் / Family Annual Income:<span
                      class="quform-required">*</span></label>

                  <input type="text" class="form-control" id="family_annual_Income" name="family_annual_Income" required>
                  <p class="validate_errors" id="family_annual_Income_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>

                <div class="col-md-12 mb-3">
                <label for="your-name" class="form-label fm-label">தந்தை/தாய்/காப்பாளரின் தொழில் / Occupation of Father/ Mother/ Guardian:<span
                  class="quform-required">*</span></label>

              <input type="text" class="form-control" id="parent_work" name="parent_work" required>
              <p class="validate_errors" id="parent_work_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
            </div>

               
            <div class="col-md-12 mb-3">

                  <label for="your-name" class="form-label fm-label">முடித்த பள்ளி கல்வி வகுப்பு / இளநிலை கல்வி வருடம் (அ) செமஸ்டர் / Completed School standard/ UG year (or) Semester:<span
                      class="quform-required">*</span></label>

                  <input type="text" class="form-control" id="from_education" name="from_education" required>
                  <p class="validate_errors" id="from_education_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>

             

                <div class="col-md-12 mb-3">

                  <label for="your-name" class="form-label fm-label">பள்ளி (அ) கல்லூரியின் பெயர் / Name of School (or) College:<span
                      class="quform-required">*</span></label>

                  <input type="text" class="form-control" id="from_school" name="from_school" required>
                  <p class="validate_errors" id="from_school_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
                <div class="col-md-12 mb-3">

                  <label for="your-subject" class="form-label fm-label">பெற்ற மதிப்பெண் சதவீதம் (மதிப்பெண் சான்றிதழை இணைக்கவும்) / Percentage of marks obtained (Attach certified mark sheet)<span
                      class="quform-required">*</span></label>

                  <input type="file" class="form-control" id="from_mark_sheet" name="from_mark_sheet">
                  <p style="font-size: 12px;color: #fff;">(Maximum upload size: 1 MB | Allowed Files formats: jpg, jpeg, png, gif)</p>
                  <p class="validate_errors" id="from_mark_sheet_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>

                <div class="col-md-12 mb-3">

                  <label for="your-subject" class="form-label fm-label">சேரவுள்ள கல்வி வகை (பள்ளிக்கல்வி/கல்லூரிக்கல்வி)  / Joining Education Type (School/ College Education):<span
                      class="quform-required">*</span></label>

                      <select class="form-select" id="to_school" name="to_school" require>
                        <option value="">Please select</option>   
                        <option value="School">School</option>   
                        <option value="College">College</option>
                      </select>
                      <p class="validate_errors" id="to_school_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>

                </div>
                
                 <div class="col-md-12 mb-3">

                  <label for="your-subject" class="form-label fm-label">சேரவுள்ள பள்ளி கல்வி வகுப்பு/ இளநிலை கல்வி வருடம் (அ) செமஸ்டர் / Joining in standard / Year (or) Semester of U.G course:*
                      <span class="quform-required">*</span></label>

                     <input type="text" class="form-control" id="to_education" name="to_education">
                     <p class="validate_errors" id="to_education_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>


                      <div class="col-md-12 mb-3">

                  <label for="your-subject" class="form-label fm-label">ஆண்டு கட்டணம் (பள்ளி/ கல்லூரி சேர்க்கை ஆணை (ம) கட்டண கேட்பு சான்றிதழை இணைக்கவும்) / Annual fees (Attach school / college admission letter & fees demand certificate):
                      <span class="quform-required">*</span></label>

                  <input type="file" class="form-control" id="to_mark_sheet" name="to_mark_sheet">
                  <p style="font-size: 12px;color: #fff;">(Maximum upload size: 1 MB | Allowed Files formats: jpg, jpeg, png, gif)</p>
                  <p class="validate_errors" id="to_mark_sheet_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>


                <div class="col-md-12 mb-3">

                  <label for="your-subject" class="form-label fm-label">படிக்கும்/ சேரவுள்ள பள்ளி (அ) கல்லூரியின் பெயர் / Joining/ studying Name of School (or) College:<span
                      class="quform-required">*</span></label>

                  <input type="text" class="form-control" id="to_college_name" name="to_college_name">
                  <p class="validate_errors" id="to_college_name_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>
                
                 <div class="col-md-12 mb-3">

                  <label for="your-subject" class="form-label fm-label">பரிந்துரைத்த தன்னார்வத்தொண்டர்/அங்கத்தினர்/அர்ச்சகர்/பாகவதர் பெயர் / Referred by Volunteer / Member/ Archagar/ Bagavathar's Name.
                      <span class="quform-required">*</span></label>
                      <input type="text" class="form-control" id="bagavathar_name" name="bagavathar_name">
                      <p class="validate_errors" id="bagavathar_name_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>

                <div class="col-md-12 mb-3">

                  <label for="your-subject" class="form-label fm-label">பரிந்துரைத்த தொடர்பு எண் / Volunteer Contact Number<span
                      class="quform-required">*</span></label>

                      <input type="text" class="form-control" id="volunteer_contact_number" name="volunteer_contact_number">
                      <p class="validate_errors" id="volunteer_contact_number_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                </div>

                <div class="col-md-12 mb-3">
        <label class="quform-label-text" id="declaration" style="color:#fff;">ஒப்பளிப்பு / Declaration<span class="quform-required">*</span></label>
                  <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="declaration" name="declaration" >
                <p class="validate_errors" id="declaration_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                <label class="custom-control-label" for="declaration" style="display: contents;color:#fff;">இங்கு அளிக்கப்பட்டுள்ள தகவல்கள் உண்மை என நான் உறுதியளிக்கிறேன். உதவிதொகை வழங்குவதும் மறுப்பதும் அறக்கட்டளையின் முடிவிற்குட்பட்டது மற்றும் இறுதியானது என ஒப்புக்கொண்டு   அதன் முடிவிற்கு கட்டுப்படுவேன் என தெரிவித்துக்கொள்கிறேன். இந்த உதவி கல்வி பயில்வதற்கானது என உணர்ந்து, இதை பயன்படுத்தியதற்காக கல்விக்கட்டண ரசீதை 15 நாட்களுக்குள் சமர்ப்பிப்பேன் எனவும் தெரிவித்துக்கொள்கிறேன். / I affirm that the information given above is true. I agree that it is the sole discretion of the Trust to grant or not grant the aid and the decision of the Trust will be final and I will abide by th
                e same. I undertake that aid will be used only for educational purpose and fee receipt will be submitted in 15 days showing the use of aid.</label>
        
                </div>

                
                <label for="your-subject" class="form-label fm-label mt-4">தொகை வழங்கல் / Amount may be issued in the form of<span
                  class="quform-required">*</span></label>

                  <select id="payment_type" name="payment_type" class="form-select">
                    <option value="" >Please select</option>
                    <option value="காசோலை / Cheque">காசோலை / Cheque</option>
                    <option value="வங்கி பரிவர்த்தனை / Bank Transfer">வங்கி பரிவர்த்தனை / Bank Transfer</option>
                </select>
                <p class="validate_errors" id="payment_type_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
            </div>
        
                  </div>

                <div class="col-md-12 text-center">

                  <input type="submit" onclick="gnanakaithaa()" class="sum">

                </div>

              </div>

            </form>
            
            <div class="row mt-3">
                  <div class="col-md-12">
                      You can also download application form, fill, and send in courier to Old No.6, Bheemasena Garden Street, Mylapore, Chennai, Tamil Nadu – 600004.
    <ul class="dwn mt-4">
        
        <li class="dwn-li" style="list-style-type: none;margin: 4px;">
    <a href="{{ env('MAIN_URL') }}public/assets/images/Gyanakaitha Application.pdf" class="sum1" target="_blank">DOWNLOAD ENGLISH APPLICATION FORM</a>
            </li>
        <li class="dwn-li" style="list-style-type: none;margin: 4px;">
    <a href="{{ env('MAIN_URL') }}public/assets/images/Gyanakaitha Application Tamil.pdf" class="sum1" target="_blank">DOWNLOAD TAMIL APPLICATION FORM</a>
            
        </li>
    </ul>
                  </div>
              </div>

          </div>

        </div>

      </div>



    </div>

  </section>


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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>


  @include('include.footer')
</body>

<script>
     $(document).ready(function() {
            $('.form-control').on('keyup change', function() {
                $('.validate_errors').text('')
            })
            $('#dob').on('change', function(){
                var data = this.value;
                var dob = new Date(data);
                var today = new Date();
                var age = today.getFullYear() - dob.getFullYear();
                var monthDiff = today.getMonth() - dob.getMonth();
                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                    age--;
                }
                $('#age').val(age)
            })
            $('#state').select2({
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

            $('#city').select2({
                ajax: {
                    url: "{{ env('API_URL') }}get-city",
                    type: "post",
                    dataType: 'json',
                    delay: 400,
                    data: function(params) {
                        return {
                            search: params.term, // search term
                            state_id: $('#state').val()
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
        $('#gnanakaithaa_form').submit(function(event) {
            event.preventDefault();
        });

        function gnanakaithaa() {
            var formdata = new FormData($('#gnanakaithaa_form')[0]);
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}gnanakaithaa",
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
                                // close: function() {}
                            }
                        });
                    }
                    if (response['status'] == 401) {
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
                    }
                    if (response['status'] == 400) {
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
                    }
                    if (response['status'] == 500) {
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
                    }
                    // if (response['status'] == 501) {
                    //     sessionStorage.clear();
                    // deleteCookie('typeofuser');
                    // deleteCookie('token');
                    // deleteCookie('marital_acc');
                    // //window.location.href = '/user-login';
                    // }
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
