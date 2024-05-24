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



  <title>Kinchitkaram Trust</title>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>

  <!-- SITE TITLE -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css">
  <script>
    $(document).ready(function() {
      $('#txtLooking').selectpicker();
    });
  </script>
  <script>
    var sc_project = 1191757;

    var sc_invsible = 1;

    var sc_securiy = "35d2687e";

    var sc_https = 1;
  </script>

  <script src="../../../www.statcounter.com/counter/counter.js" async></script>

  <style>
    .mug-btn-a:hover {
      background: #ffa101 !important;
      color: #fff !important;
    }

    .test-drop .nav-link {
      background: beige !important;
      color: #920606;
      margin: 0 3px 7px 3px;
    }

    #additionalInfo,
    #additionalInfo1,
    #additionalInfo2,
    #additionalInfo3,
    #additionalInfo4 {
      /* display: none; */
      margin-top: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      background-color: #f5f5f5;
    }

    .user-picture12 {
      overflow: hidden;
      object-fit: cover;
      width: 10rem;
      height: 10rem;
      /* border: 3px solid #f4d194; */
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      border-radius: 44px;
    }

    .user-picture1 {
      overflow: hidden;
      object-fit: cover;
      width: 11rem;
      height: 11rem;
      border: 3px solid #f4d194;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      border-radius: 44px;
    }

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



    .nav-pills-custom .nav-link {

      color: #920606;

      background: #fff;

      position: relative;

    }



    .nav-pills-custom .nav-link.active {

      color: #920606;
      ;

      background: #fff;

    }





    /* Add indicator arrow for the active tab */

    @media (min-width: 992px) {

      .nav-pills-custom .nav-link::before {

        content: '';

        display: block;

        border-top: 8px solid transparent;

        border-left: 10px solid #fff;

        border-bottom: 8px solid transparent;

        position: absolute;

        top: 50%;

        right: -10px;

        transform: translateY(-50%);

        opacity: 0;

      }

    }



    .nav-pills-custom .nav-link.active::before {

      opacity: 1;

    }



    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {

      color: var(--bs-nav-pills-link-active-color);

      background-color: #ffa101 !important;

    }

    .nav-link:focus,
    .nav-link:hover {

      color: #920606 !important;

    }

    span.select2.select2-container.select2-container--default {
      width: 100% !important;
    }
  </style>

</head>


<body>





  <!-- header -->

  @include('include.header')

  <section class="bred-crum" style="background-image:url({{env('MAIN_URL')}}public/assets/images/breadcrum/header.jpg);">

    <div class="container">

      <h2 class="page-title">My Account</h2>

      <ul class="breadcrumb-nav">

        <li><a href="#">Home</a></li>

        <li><i class="fas fa-angle-right"></i></li>

        <li> My Account</li>

      </ul>

    </div>

  </section>

  <section class=" about-one--home section-space1 mb-5">

    <div class="about-one__bg">

      <div class="about-one__bg__border"></div>

      <div class="about-one__bg__inner"></div>

    </div>

    <!-- /.about-one__left__bg -->

    <div class="container mb-5">

      <div class="row gutter-y-50 justify-content-center">



        <div class="col-xl-12 col-md-12">

          <!-- Demo header-->



          <div class="row">

            <div class="col-md-3">

              <h3 class="my-sc text-center">My Account</h3>

              <!-- Tabs nav -->

              <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a class="nav-link mb-3 p-2 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">

                  <i class="fas fa-user mr-2"></i>

                  <span class="font-weight-bold small text-uppercase">My Profile</span></a>



                <a class="nav-link mb-3 p-2 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">

                  <i class="fas fa-edit mr-2"></i>

                  <span class="font-weight-bold small text-uppercase"> Modify My Profile</span></a>



                <a class="nav-link mb-3 p-2 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">

                  <i class="fas fa-camera-retro mr-2"></i>

                  <span class="font-weight-bold small text-uppercase"> My Photo</span></a>



                <a class="nav-link mb-3 p-2 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">

                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 20px;">
                    <path d="M258.6 0c-1.7 0-3.4 .1-5.1 .5C168 17 115.6 102.3 130.5 189.3c2.9 17 8.4 32.9 15.9 47.4L32 224H29.4C13.2 224 0 237.2 0 253.4c0 1.7 .1 3.4 .5 5.1C17 344 102.3 396.4 189.3 381.5c17-2.9 32.9-8.4 47.4-15.9L224 480v2.6c0 16.2 13.2 29.4 29.4 29.4c1.7 0 3.4-.1 5.1-.5C344 495 396.4 409.7 381.5 322.7c-2.9-17-8.4-32.9-15.9-47.4L480 288h2.6c16.2 0 29.4-13.2 29.4-29.4c0-1.7-.1-3.4-.5-5.1C495 168 409.7 115.6 322.7 130.5c-17 2.9-32.9 8.4-47.4 15.9L288 32V29.4C288 13.2 274.8 0 258.6 0zM256 224a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" style="

                    fill: #920606;"></path>
                  </svg>

                  <span class="font-weight-bold small text-uppercase"> My Horoscope</span></a>



                <a class="nav-link mb-3 p-2 shadow" id="v-pills-settings-tab1" data-toggle="pill" href="#v-pills-settings1" role="tab" aria-controls="v-pills-settings1" aria-selected="false">

                  <i class="fas fa-paste mr-2"></i>

                  <span class="font-weight-bold small text-uppercase"> Verification Document</span></a>

                <a class="nav-link mb-3 p-2 shadow" target="_blank" href="{{ env('MAIN_URL') }}my-matrimony" role="tab" aria-controls="v-pills-settings1" aria-selected="false">

                  <i class="fas fa-paste mr-2"></i>

                  <span class="font-weight-bold small text-uppercase">My Matches</span></a>

              </div>

            </div>





            <div class="col-md-9">

              <!-- Tabs content -->

              <div class="tab-content" id="v-pills-tabContent">

                <div class="tab-pane fade shadow rounded  show active p-2" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                  <!--<h4 class="font-italic mb-4" style="color: #920606;">EDIT BASIC INFORMATION</h4>-->

                  <div class="dash-profile">

                    <div class="row justify-content-center">

                      <div class="col-lg-4 col-md-4">

                        <img src="{{env('MAIN_URL')}}public/assets/images/lakshmi/Male.png" class="img-fluid das-img">



                      </div>

                      <div class="col-lg-4 col-md-4 " style="align-self: center;">

                        <table class="table no-border">



                          <tbody>

                            <tr>

                              <td class="col-md-2 dp-tab"><strong>Profile ID</strong></td>

                              <td class="col-md-3 dp-tab" id="profileid"></td>

                            </tr>

                            <tr>

                              <td class="col-md-2 dp-tab"><strong>Gender</strong></td>

                              <td class="col-md-3 dp-tab" id="gender1"></td>

                            </tr>

                            <tr>

                              <td class="col-md-2 dp-tab"><strong>Date of Birth</strong></td>

                              <td class="col-md-3 dp-tab" id="dob"></td>

                            </tr>

                            <tr>

                              <td class="col-md-2 dp-tab"><strong>Community - Sub-Section</strong></td>

                              <td class="col-md-3 dp-tab" id="community"></td>

                            </tr>

                            <tr>

                              <td class="col-md-2 dp-tab"><strong>Looking</strong></td>

                              <td class="col-md-3 dp-tab" id="looking"></td>

                            </tr>

                          </tbody>

                        </table>

                      </div>

                      <div class="col-lg-4 col-md-4 " style="align-self: center;">

                        <table class="table no-border">



                          <tbody>

                            <tr>

                              <td class="col-md-2 dp-tab"><strong>Name</strong></td>

                              <td class="col-md-3 dp-tab" id="user_name"></td>

                            </tr>

                            <tr>

                              <td class="col-md-2 dp-tab"><strong>Status</strong></td>

                              <td class="col-md-3 dp-tab" id="status"></td>

                            </tr>

                            <tr>

                              <td class="col-md-2 dp-tab"><strong>Age</strong></td>

                              <td class="col-md-3 dp-tab" id="age"></td>

                            </tr>

                            <tr>

                              <td class="col-md-2 dp-tab"><strong>Created</strong></td>

                              <td class="col-md-3 dp-tab" id="created"></td>

                            </tr>

                            <tr>

                              <td class="col-md-2 dp-tab"><strong>Last Login</strong></td>

                              <td class="col-md-3 dp-tab" id="last_login"></td>

                            </tr>

                          </tbody>

                        </table>

                      </div>



                    </div>

                    <div class="row">

                      <div class="mt-2 mb-2">

                        <!-- <a  class="cleenhearts-btn" style="float: right;" onclick="document.querySelector('#v-pills-messages-tab').click();" > -->
                        <a href="lakshimi_profile" class="cleenhearts-btn" style="float: right;">
                          <div class="cleenhearts-btn__icon-box">

                            <div class="cleenhearts-btn__icon-box__inner"><span class=""><i class="fas fa-edit"></i></span></div>

                          </div>

                          <span class="cleenhearts-btn__text">View My Profile</span>

                        </a>

                      </div>

                    </div>

                  </div>







                </div>



                <div class="tab-pane fade shadow rounded pt-3 p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <!--mobile-->
                    <nav class="navbar navbar-expand-lg navbar-light">
                      <button class="navbar-toggler wrapper w-100 mt-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-bar select"> Modify My Profile</span>
                        <i class="fa fa-angle-down"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                        <ul class="nav nav-pills test-drop mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link slibar active" id="woman-tab" data-toggle="pill" href="#womantab" role="tab" aria-controls="showall" aria-selected="true" contenteditable="false" style="cursor: pointer;"> Basic Information</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link slibar" id="showall-tab" data-toggle="pill" href="#showall" role="tab" aria-controls="showall" aria-selected="true" contenteditable="false" style="cursor: pointer;"> Socio Religious Attributes</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link slibar" id="Cars-tab" data-toggle="pill" href="#Cars" role="tab" aria-controls="Cars" aria-selected="false" contenteditable="false" style="cursor: pointer;"> Education and Occupation</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link slibar" id="City-tab" data-toggle="pill" href="#City" role="tab" aria-controls="City" aria-selected="false" contenteditable="false" style="cursor: pointer;"> Physical Attributes</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link slibar" id="Forest-tab" data-toggle="pill" href="#Forest" role="tab" aria-controls="Forest" aria-selected="false" contenteditable="false" style="cursor: pointer;"> Contact Details</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link slibar" id="profile1-tab" data-toggle="pill" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" contenteditable="false" style="cursor: pointer;"> profile</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link slibar" id="family-tab" data-toggle="pill" href="#family" role="tab" aria-controls="family" aria-selected="false" contenteditable="false" style="cursor: pointer;"> Family Details</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link slibar" id="partner1-tab" data-toggle="pill" href="#partner1" role="tab" aria-controls="partner1" aria-selected="false" contenteditable="false" style="cursor: pointer;"> Partner Preference</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link slibar" id="hobby1-tab" data-toggle="pill" href="#hobby1" role="tab" aria-controls="hobby1" aria-selected="false" contenteditable="false" style="cursor: pointer;"> Hobbies and Interest </a>
                          </li>

                        </ul>
                      </div>
                    </nav>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="womantab" role="tabpanel" aria-labelledby="woman-tab">
                        <div class="heading-block my-2">
                          <h3>Edit Basic Information</h3>

                        </div>
                        <div class="col-md-12">

                          <form method="post" name="BasicForm" id="BasicForm" class="form" novalidate="novalidate" data-gtm-form-interact-id="0">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <input type="hidden" name="form_key" id="form_key" value="1">
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Name <small>*</small></label>
                              <input name="name" type="text" class="form-control valid" id="name_of_user" maxlength="50" onkeyup="clearText('name')" aria-required="true" aria-invalid="false">
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label class="radio_button">Gender <small>*</small></label>
                              <input name="gender" type="text" class="form-control" id="gender" maxlength="50" value="Male" readonly="readonly">
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Mother Tongue <small>*</small></label>
                              <select name="mother_tongue" class="form-select " id="mother_tongue" aria-required="true">
                                <option value="Sourashtra" selected="selected">Sourashtra</option>
                                <optgroup label="Top Mothertongue"> </optgroup>
                                <option value="Hindi" label="Hindi">Hindi</option>
                                <option value="Gujarati" label="Gujarati">Gujarati</option>
                                <option value="Urdu" label="Urdu">Urdu</option>
                                <option value="English" label="English">English</option>
                                <option value="Punjabi" label="Punjabi">Punjabi</option>
                                <option value="Tamil" label="Tamil">Tamil</option>
                                <option value="Marathi" label="Marathi">Marathi</option>
                                <option value="Telugu" label="Telugu">Telugu</option>
                                <option value="Malayalam" label="Malayalam">Malayalam</option>
                                <option value="Bengali" label="Bengali">Bengali</option>
                                <option value="Kannada" label="Kannada">Kannada</option>
                                <option value="Sindhi" label="Sindhi">Sindhi</option>
                                <option value="Konkani" label="Konkani">Konkani</option>
                                <option value="Oriya" label="Oriya">Oriya</option>
                                <option value="Assamese" label="Assamese">Assamese</option>
                                <option value="Marwari" label="Marwari">Marwari</option>
                                <optgroup label="All Mothertongue"> </optgroup>
                                <option value="Aka" label="Aka">Aka</option>
                                <option value="Arabic" label="Arabic">Arabic</option>
                                <option value="Arunachali" label="Arunachali">Arunachali</option>
                                <option value="Awadhi" label="Awadhi">Awadhi</option>
                                <option value="Baluchi" label="Baluchi">Baluchi</option>
                                <option value="Bhojpuri" label="Bhojpuri">Bhojpuri</option>
                                <option value="Bhutia" label="Bhutia">Bhutia</option>
                                <option value="Brahui" label="Brahui">Brahui</option>
                                <option value="Brij" label="Brij">Brij</option>
                                <option value="Burmese" label="Burmese">Burmese</option>
                                <option value="Chattisgarhi" label="Chattisgarhi">Chattisgarhi</option>
                                <option value="Chinese" label="Chinese">Chinese</option>
                                <option value="Coorgi" label="Coorgi">Coorgi</option>
                                <option value="Dogri" label="Dogri">Dogri</option>
                                <option value="French" label="French">French</option>
                                <option value="Garhwali" label="Garhwali">Garhwali</option>
                                <option value="Garo" label="Garo">Garo</option>
                                <option value="Haryanavi" label="Haryanavi">Haryanavi</option>
                                <option value="Himachali/Pahari" label="Himachali/Pahari">Himachali/Pahari</option>
                                <option value="Hindko" label="Hindko">Hindko</option>
                                <option value="Kakbarak" label="Kakbarak">Kakbarak</option>
                                <option value="Kanauji" label="Kanauji">Kanauji</option>
                                <option value="Kashmiri" label="Kashmiri">Kashmiri</option>
                                <option value="Khandesi" label="Khandesi">Khandesi</option>
                                <option value="Khasi" label="Khasi">Khasi</option>
                                <option value="Koshali" label="Koshali">Koshali</option>
                                <option value="Kumaoni" label="Kumaoni">Kumaoni</option>
                                <option value="Kutchi" label="Kutchi">Kutchi</option>
                                <option value="Ladakhi" label="Ladakhi">Ladakhi</option>
                                <option value="Lepcha" label="Lepcha">Lepcha</option>
                                <option value="Magahi" label="Magahi">Magahi</option>
                                <option value="Maithili" label="Maithili">Maithili</option>
                                <option value="Malay" label="Malay">Malay</option>
                                <option value="Manipuri" label="Manipuri">Manipuri</option>
                                <option value="Miji" label="Miji">Miji</option>
                                <option value="Mizo" label="Mizo">Mizo</option>
                                <option value="Monpa" label="Monpa">Monpa</option>
                                <option value="Nepali" label="Nepali">Nepali</option>
                                <option value="Pashto" label="Pashto">Pashto</option>
                                <option value="Persian" label="Persian">Persian</option>
                                <option value="Rajasthani" label="Rajasthani">Rajasthani</option>
                                <option value="Russian" label="Russian">Russian</option>
                                <option value="Sanskrit" label="Sanskrit">Sanskrit</option>
                                <option value="Santhali" label="Santhali">Santhali</option>
                                <option value="Seraiki" label="Seraiki">Seraiki</option>
                                <option value="Sinhala" label="Sinhala">Sinhala</option>
                                <option value="Sourashtra" label="Sourashtra">Sourashtra</option>
                                <option value="Spanish" label="Spanish">Spanish</option>
                                <option value="Swedish" label="Swedish">Swedish</option>
                                <option value="Tagalog" label="Tagalog">Tagalog</option>
                                <option value="Tulu" label="Tulu">Tulu</option>
                                <option value="Other" label="Other">Other</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <div class="col-md-12" style="margin-left:-15px;"><label class="radio_button">Marital
                                  Status <small>*</small></label></div>
                              <div class="col-md-6"><input name="marital_status" id="marital_status" type="radio" onclick="return HaveChildnp(this)" value="Never Married" checked=""> <label class="radio_button">Never Married</label></div>
                              <div class="col-md-6"><input name="marital_status" id="marital_status" type="radio" onclick="return HaveChildnp(this)" value="Widowed"> <label class="radio_button">Widowed</label></div>
                              <div class="col-md-6"><input name="marital_status" id="marital_status" type="radio" onclick="return HaveChildnp(this)" value="Divorced"> <label class="radio_button">Divorced</label></div>
                              <div class="col-md-6"><input name="marital_status" id="marital_status" type="radio" onclick="return HaveChildnp(this)" value="Seperated"> <label>Seperated</label></div>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px; display:none;" id="childliv">
                              <label for="template-contactform-name">No. of Children</label>
                              <select name="NOOFCHILDREN" id="NOOFCHILDREN" class="form-select" onchange="return HaveChildnp(this)">
                                <option value="" selected="">- Select -</option>
                                <option value="0" selected="">None</option>
                                <option value="One">1</option>
                                <option value="Two">2</option>
                                <option value="Three">3</option>
                                <option value="Four and above">4 and above</option>
                              </select>

                              <div class="col-md-12" style="margin-left:-15px;"><label class="radio_button">Children
                                  Living Status</label></div>
                              <div class="col-md-6"><input name="CHILDLIVINGWITHME" type="radio" value="Yes"> <label class="radio_button">Living with me</label></div>
                              <div class="col-md-6"><input name="CHILDLIVINGWITHME" type="radio" onfocus="if(disabled)blur();" value="No"> <label>Not living with me</label></div>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Community <small>*</small></label>
                              <select name="community" class="form-select  valid" id="community1" onchange="getSubcategory(this.value)" aria-required="true" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                <!-- <option value="" selected="selected">- Select -</option>  -->
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Sub-Section <small>*</small></label>
                              <div id="castediv">
                                <select name="sub_section" class="form-select valid" id="sub_section" data-gtm-form-interact-field-id="1" aria-invalid="false">
                                  <option value="" selected="selected">- Select -</option>
                                </select>
                              </div>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Acharyan</label>
                              <input name="acharayan" type="text" class="form-control" id="acharayan" maxlength="40" onkeyup="clearText('acharayan')" onblur="javascript:this.value=this.value.toLowerCase();">
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Special Category</label>
                              <select name="special_category" class="form-select" id="special_category">
                                <option value="Not Applicable">Not Applicable</option>
                                <option value="Archaka">Archaka</option>
                                <option value="Aacharya Purusha">Aacharya Purusha</option>
                                <option value="Veda Parayanam">Veda Parayanam</option>
                                <option value="Divya Prabanda Parayanam">Divya Prabanda Parayanam</option>
                              </select>
                            </div>

                            <div class="col_full nomargin">
                              <label for="template-contactform-name">Date of Birth <small>*</small></label>
                              <input type="date" name="date_of_birth" class="form-control" id="user_dob">
                            </div>
                            <div class="form-group" style=" margin-bottom: 10px;">
                              <label for="Profilecreatedby">Profile created by</label>
                              <select name="profile_created_by" class="form-select" id="profile_created_by">
                                <option value="Self" selected="">Self</option>
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
                            <div class="form-group" style=" margin-bottom: 10px;">
                              <label for="reference_by">Reference by</label>
                              <select name="reference_by" class="form-select" id="reference_by">
                                <option value="Friends">Friends</option>
                                <option value="En PaNi WhatsApp Satsang" selected="">En PaNi WhatsApp Satsang</option>
                                <option value="Search Engines">Search Engines</option>
                                <option value="Others">Others</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Email <small>*</small></label>
                              <input name="email" autocomplete="off" oncontextmenu="return false;" onselectstart="return false;" onpaste="return false;" type="email" class="form-control" id="user_email" maxlength="50" onblur="javascript:this.value=this.value.toLowerCase();">
                            </div>
                            <div class="col_full">
                              <button name="submit" onclick="BasicFormEdit()" type="submit" id="submit-button" value="Submit" class="btn mug-btn-a">Save Now </button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane fade show" id="showall" role="tabpanel" aria-labelledby="showall-tab">
                        <div class="heading-block py-3">
                          <h3>Edit Socio Religious Attributes</h3>
                        </div>
                        <div class="col-md-12">
                          <form method="post" name="SocioForm" id="SocioForm" class="form">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <input type="hidden" name="form_key" id="form_key" value="2">
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Gothram</label>
                              <input name="gothram" type="text" class="form-control" id="gothram" maxlength="50" value="Dakshya" onkeyup="clearText('gothram')">
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Manglik</label>
                              <select name="manglik" class="form-select" id="manglik">
                                <option value="No" selected="">No</option>
                                <option value="Yes">Yes</option>
                                <option value="Do Not Know">Do Not Know</option>
                                <option value="Not Applicable">Not Applicable</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Moonsign</label>
                              <select name="moonsign" class="form-select" id="moonsign">
                                <option value="Does not matter">Does not matter</option>
                                <option value="Mesh (Aries)" selected="">Mesh (Aries)</option>
                                <option value="Vrishabh (Taurus)">Vrishabh (Taurus)</option>
                                <option value="Mithun (Gemini)">Mithun (Gemini)</option>
                                <option value="Karka (Cancer)">Karka (Cancer)</option>
                                <option value="Simha (Leo)">Simha (Leo)</option>
                                <option value="Kanya (Virgo)">Kanya (Virgo)</option>
                                <option value="Tula (Libra)">Tula (Libra)</option>
                                <option value="Vrischika (Scorpio)">Vrischika (Scorpio)</option>
                                <option value="Dhanu (Sagittarious)">Dhanu (Sagittarious)</option>
                                <option value="Makar (Capricorn)">Makar (Capricorn)</option>
                                <option value="Kumbha (Aquarious)">Kumbha (Aquarious)</option>
                                <option value="Meen (Pisces)">Meen (Pisces)</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Star(Nakshatra)</label>
                              <select name="star_nakshatra" class="form-select" id="star_nakshatra">
                                <option value="Anuradha/Anusham/Anizham">Anuradha/Anusham/Anizham</option>
                                <option value="Ardra/Thiruvathira">Ardra/Thiruvathira</option>
                                <option value="Ashlesha/Ayilyam">Ashlesha/Ayilyam</option>
                                <option value="Ashwini/Ashwathi">Ashwini/Ashwathi</option>
                                <option value="Bharani" selected="">Bharani</option>
                                <option value="Chitra/Chitha">Chitra/Chitha</option>
                                <option value="Dhanista/Avittam">Dhanista/Avittam</option>
                                <option value="Hastha/Atham">Hastha/Atham</option>
                                <option value="Jyesta/Kettai">Jyesta / Kettai</option>
                                <option value="Krithika/Karthika">Krithika/Karthika</option>
                                <option value="Makha/Magam">Makha/Magam</option>
                                <option value="Moolam/Moola">Moolam/Moola</option>
                                <option value="Mrigasira/Makayiram">Mrigasira/Makayiram</option>
                                <option value="Poorvabadrapada/Puratathi">Poorvabadrapada/Puratathi</option>
                                <option value="Poorvapalguni/Puram/Pubbhe">Poorvapalguni/Puram/Pubbhe</option>
                                <option value="Poorvashada/Pooradam">Poorvashada/Pooradam</option>
                                <option value="Punarvasu/Punarpusam">Punarvasu/Punarpusam</option>
                                <option value="Pushya/Poosam/Pooyam">Pushya/Poosam/Pooyam</option>
                                <option value="Revathi">Revathi</option>
                                <option value="Rohini">Rohini</option>
                                <option value="Shatataraka/Sadayam/Satabishek">Shatataraka/Sadayam/Satabishek</option>
                                <option value="Shravan/Thiruvonam">Shravan/Thiruvonam</option>
                                <option value="Swati/Chothi">Swati/Chothi</option>
                                <option value="Uttarabadrapada/Uthratadhi">Uttarabadrapada/Uthratadhi</option>
                                <option value="Uttarapalguni/Uthram">Uttarapalguni/Uthram</option>
                                <option value="Uttarashada/Uthradam">Uttarashada/Uthradam</option>
                                <option value="Vishaka/Vishakam">Vishaka/Vishakam</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Padham</label>
                              <select name="padham" class="form-select" id="padham">
                                <option value="" selected="selected">---------- SELECT ----------</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Horoscope Match</label>
                              <select name="horoscope_match" class="form-select" id="horoscope_match">
                                <option value="No">No</option>
                                <option value="Yes" selected="">Yes</option>
                                <option value="Does Not Matter">Does Not Matter</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Place of Birth</label>
                              <input type="text" name="place_of_birth" class="form-control" id="place_of_birth" maxlength="50">
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Time of Birth</label>
                              <input type="date" class="form-control" name="time_of_birth" id="time_of_birth">
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Dasa Type</label>
                              <select name="dasa_type" id="dasa_type" class="form-select">
                                <option value="">-Select Dasa Type-</option>
                                <option value="Sun">Sun</option>
                                <option value="Moon">Moon</option>
                                <option value="Mars">Mars</option>
                                <option value="Mercury">Mercury</option>
                                <option value="Jupiter">Jupiter</option>
                                <option value="Venus">Venus</option>
                                <option value="Saturn">Saturn</option>
                                <option value="Rahu">Rahu</option>
                                <option value="Kethu">Kethu</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Thosham</label>
                              <select name="thosham" id="thosham" class="form-select">
                                <option value="">-Select Thosham-</option>
                                <option value="Chovvadosham">Chovvadosham</option>
                                <option value="Normal">Normal</option>
                                <option value="Sudha Jathakam">Sudha Jathakam</option>
                                <option value="No Mention">No Mention</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Birth Balance Dasa</label>
                              <input name="birth_balance_dasa" type="text" class="form-control" id="birth_balance_dasa" maxlength="50" value="" onkeyup="clearText('birth_balance_dasa')">
                            </div>
                            <div class="col_full">
                              <button name="submit" type="submit" onclick="SocioFormEdtit()" id="submit-button" value="Submit" class="btn mug-btn-a">Save Now </button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="Cars" role="tabpanel" aria-labelledby="Cars-tab">
                        <div class="heading-block my-3">
                          <h3>Edit Education and Occupation</h3>
                        </div>
                        <div class="col-md-12">

                          <form method="post" name="EduForm" id="EduForm" class="form" novalidate="novalidate">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <input type="hidden" name="form_key" id="form_key" value="3">
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Education <small>*</small></label>
                              <select name="education" class="form-select" id="education">
                                <option value="35">Company Secretary</option>
                                <option value="34">Others</option>
                                <option value="33">Medicine</option>
                                <option value="32">High School- 10th</option>
                                <option value="31">Nil</option>
                                <option value="30">Legal law</option>
                                <option value="29">Management Degree</option>
                                <option value="28">Chartered Accountant</option>
                                <option value="1">Less Than High School</option>
                                <option value="2">High School - 10th</option>
                                <option value="3">Higher Secondary - 12th</option>
                                <option value="4">Diploma in ITI</option>
                                <option value="5">Diploma in AMIE</option>
                                <option value="6">Bachelors in Arts</option>
                                <option value="7">Bachelors in Science</option>
                                <option value="8">Bachelors in Commerce</option>
                                <option value="9">Bachelors In Computers</option>
                                <option value="10" selected="">Bachelors in Engineering</option>
                                <option value="11">Bachelors in Education</option>
                                <option value="12">Bachelors in Technology</option>
                                <option value="13">Masters in Arts</option>
                                <option value="14">Masters in Science</option>
                                <option value="15">Masters in Commerce</option>
                                <option value="16">Masters in Computers</option>
                                <option value="17">Masters in Engineering</option>
                                <option value="18">Masters in Education</option>
                                <option value="19">Masters in Technology</option>
                                <option value="20">Management - BBA/MBA/Others</option>
                                <option value="21">Legal (Law) - BL/ML/LLB/others</option>
                                <option value="22">Medicine - General/Dental/Surgeon/Others</option>
                                <option value="23">ACA/FCA/Chartered Accountant</option>
                                <option value="24">ACA/FCA - Company Secretary</option>
                                <option value="25">ICWA</option>
                                <option value="26">PhD</option>
                                <option value="27">Services - IAS/IPS/Others</option>
                              </select>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Education Details</label>
                              <input name="education_details" type="text" maxlength="50" class="form-control" id="education_details" onkeyup="clearText('education_details')">
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Occupation <small>*</small></label>
                              <select name="occupation" class="form-select" id="occupation" onchange="occu3()">
                                <option value="99">Hotel and Restaurant Professional</option>
                                <option value="98">Insurance Professional</option>
                                <option value="97">Others</option>
                                <option value="96">Nil</option>
                                <option value="1">Not working</option>
                                <option value="2">Non-mainstream professional</option>
                                <option value="3">Accountant</option>
                                <option value="4">Acting Professional</option>
                                <option value="5">Actor</option>
                                <option value="6">Administration Professional</option>
                                <option value="7">Advertising Professional</option>
                                <option value="8">Air Hostess</option>
                                <option value="9">Architect</option>
                                <option value="10">Artisan</option>
                                <option value="11">Audiologist</option>
                                <option value="12">Banker</option>
                                <option value="13">Beautician</option>
                                <option value="14">Biologist / Botanist</option>
                                <option value="15" selected="">Business Person</option>
                                <option value="16">Chartered Accountant</option>
                                <option value="17">Civil Engineer</option>
                                <option value="18">Clerical Official</option>
                                <option value="19">Commercial Pilot</option>
                                <option value="20">Company Secretary</option>
                                <option value="21">Computer Professional</option>
                                <option value="22">Consultant</option>
                                <option value="23">Contractor</option>
                                <option value="24">Cost Accountant</option>
                                <option value="25">Creative Person</option>
                                <option value="26">Customer Support Professional</option>
                                <option value="27">Defence Employee</option>
                                <option value="28">Dentist</option>
                                <option value="29">Designer</option>
                                <option value="30">Doctor</option>
                                <option value="31">Economist</option>
                                <option value="32">Engineer</option>
                                <option value="33">Engineer (Mechanical)</option>
                                <option value="34">Engineer (Project)</option>
                                <option value="35">Entertainment Professional</option>
                                <option value="36">Event Manager</option>
                                <option value="37">Executive</option>
                                <option value="38">Factory worker</option>
                                <option value="39">Farmer</option>
                                <option value="40">Fashion Designer</option>
                                <option value="41">Finance Professional</option>
                                <option value="42">Flight Attendant</option>
                                <option value="43">Government Employee</option>
                                <option value="44">Health Care Professional</option>
                                <option value="45">Home Maker</option>
                                <option value="46">Hotel &amp; Restaurant Professional</option>
                                <option value="47">Human Resources Professional</option>
                                <option value="48">Interior Designer</option>
                                <option value="49">Investment Professional</option>
                                <option value="50">Insurance Advisor</option>
                                <option value="51">Insurance Professional </option>
                                <option value="52">IT / Telecom Professional</option>
                                <option value="53">Journalist</option>
                                <option value="54">Lawyer</option>
                                <option value="55">Lecturer</option>
                                <option value="56">Legal Professional</option>
                                <option value="57">Manager</option>
                                <option value="58">Marketing Professional</option>
                                <option value="59">Media Professional</option>
                                <option value="60">Medical Professional</option>
                                <option value="61">Medical Transcriptionist</option>
                                <option value="62">Merchant Naval Officer</option>
                                <option value="63">Nurse</option>
                                <option value="64">Occupational Therapist</option>
                                <option value="65">Optician</option>
                                <option value="66">Pharmacist</option>
                                <option value="67">Photographer</option>
                                <option value="68">Physician Assistant</option>
                                <option value="69">Physicist</option>
                                <option value="70">Physiotherapist</option>
                                <option value="71">Pilot</option>
                                <option value="72">Politician</option>
                                <option value="73">Production professional</option>
                                <option value="74">Professor</option>
                                <option value="75">Psychologist</option>
                                <option value="76">Public Relations Professional</option>
                                <option value="77">Real Estate Professional</option>
                                <option value="78">Research Scholar</option>
                                <option value="79">Retired Person</option>
                                <option value="80">Retail Professional</option>
                                <option value="81">Sales Professional</option>
                                <option value="82">Scientist</option>
                                <option value="83">Self-employed Person</option>
                                <option value="84">Social Worker</option>
                                <option value="85">Software Consultant</option>
                                <option value="86">Sportsman</option>
                                <option value="87">Student</option>
                                <option value="88">Teacher</option>
                                <option value="89">Technician</option>
                                <option value="90">Training Professional</option>
                                <option value="91">Transportation Professional</option>
                                <option value="92">Veterinary Doctor</option>
                                <option value="93">Volunteer</option>
                                <option value="94">Writer</option>
                                <option value="95">Zoologist</option>
                              </select>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Occupation Details <small>*</small></label>
                              <input name="occupation_details" type="text" class="form-control" id="occupation_details" maxlength="50" onkeyup="clearText('occupation_details')">
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Annual income <small>*</small></label>
                              <input name="annual_income" maxlength="40" type="text" class="form-control" id="annual_income" onkeyup="clearText('annual_income')">
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Employed in </label>
                              <select name="employed_in" class="form-select" id="employed_in">
                                <option value="Business" selected="">Business</option>
                                <option value="Business">Business</option>
                                <option value="Defence">Defence</option>
                                <option value="Government">Government</option>
                                <option value="Not employed">Not employed</option>
                                <option value="Private">Private</option>
                                <option value="Public Sector">Public Sector</option>
                                <option value="Others">Others</option>
                              </select>
                            </div>
                            <div class="col_full">
                              <button name="submit" type="submit" onclick="EduFormEdit()" id="submit-button" value="Submit" class="btn mug-btn-a">Save Now
                              </button>
                            </div>
                          </form>
                        </div>




                      </div>
                      <div class="tab-pane fade" id="City" role="tabpanel" aria-labelledby="City-tab">
                        <div class="heading-block py-3">
                          <h3>Edit Physical Attributes</h3>
                        </div>
                        <div class="col-md-12">
                          <form method="post" name="PhysicalForm" id="PhysicalForm" class="form">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <input type="hidden" name="form_key" id="form_key" value="4">
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Height</label>
                              <select name="height" class="form-select" id="height">
                                <option value="0">4ft ( 121 cm )</option>
                                <option value="1">4ft 1in ( 124cm )</option>
                                <option value="2">4ft 2in ( 127cm )</option>
                                <option value="3">4ft 3in ( 129cm )</option>
                                <option value="4">4ft 4in ( 132cm )</option>
                                <option value="5">4ft 5in ( 134cm )</option>
                                <option value="6">4ft 6in ( 137cm )</option>
                                <option value="7">4ft 7in ( 139cm )</option>
                                <option value="8">4ft 8in ( 142cm )</option>
                                <option value="9">4ft 9in ( 144cm )</option>
                                <option value="10">4ft 10in ( 147cm )</option>
                                <option value="11">4ft 11in ( 149cm )</option>
                                <option value="12">5ft ( 152cm )</option>
                                <option value="13">5ft 1in ( 154cm )</option>
                                <option value="14">5ft 2in ( 157cm )</option>
                                <option value="15">5ft 3in ( 160cm )</option>
                                <option value="16">5ft 4in ( 162cm )</option>
                                <option value="17">5ft 5in ( 165cm )</option>
                                <option value="18">5ft 6in ( 167cm )</option>
                                <option value="19">5ft 7in ( 170cm )</option>
                                <option value="20">5ft 8in ( 172cm )</option>
                                <option value="21">5ft 9in ( 175cm )</option>
                                <option value="22" selected="">5ft 10in ( 177cm )</option>
                                <option value="23">5ft 11in ( 180cm )</option>
                                <option value="24">6ft ( 182cm )</option>
                                <option value="25">6ft 1in ( 185cm )</option>
                                <option value="26">6ft 2in ( 187cm )</option>
                                <option value="27">6ft 3in ( 190cm )</option>
                                <option value="28">6ft 4in ( 193cm )</option>
                                <option value="29">6ft 5in ( 195cm )</option>
                                <option value="30">6ft 6in ( 198cm )</option>
                                <option value="31">6ft 7in ( 200cm )</option>
                                <option value="32">6ft 8in ( 203cm )</option>
                                <option value="33">6ft 9in ( 205cm )</option>
                                <option value="34">6ft 10in ( 208cm )</option>
                                <option value="35">6ft 11in ( 210cm )</option>
                                <option value="36">7ft ( 213cm )</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Weight</label>
                              <select name="weight" class="form-select" id="weight">
                                <option value="35 Kg">35 Kg</option>
                                <option value="36 Kg">36 Kg</option>
                                <option value="37 Kg">37 Kg</option>
                                <option value="38 Kg">38 Kg</option>
                                <option value="39 Kg">39 Kg</option>
                                <option value="40 Kg">40 Kg</option>
                                <option value="41 Kg">41 Kg</option>
                                <option value="42 Kg">42 Kg</option>
                                <option value="43 Kg">43 Kg</option>
                                <option value="44 Kg">44 Kg</option>
                                <option value="45 Kg">45 Kg</option>
                                <option value="46 Kg">46 Kg</option>
                                <option value="47 Kg">47 Kg</option>
                                <option value="48 Kg">48 Kg</option>
                                <option value="49 Kg">49 Kg</option>
                                <option value="50 Kg">50 Kg</option>
                                <option value="51 Kg">51 Kg</option>
                                <option value="52 Kg">52 Kg</option>
                                <option value="53 Kg">53 Kg</option>
                                <option value="54 Kg">54 Kg</option>
                                <option value="55 Kg">55 Kg</option>
                                <option value="56 Kg">56 Kg</option>
                                <option value="57 Kg">57 Kg</option>
                                <option value="58 Kg">58 Kg</option>
                                <option value="59 Kg">59 Kg</option>
                                <option value="60 Kg">60 Kg</option>
                                <option value="61 Kg">61 Kg</option>
                                <option value="62 Kg">62 Kg</option>
                                <option value="63 Kg">63 Kg</option>
                                <option value="64 Kg">64 Kg</option>
                                <option value="65 Kg">65 Kg</option>
                                <option value="66 Kg">66 Kg</option>
                                <option value="67 Kg">67 Kg</option>
                                <option value="68 Kg">68 Kg</option>
                                <option value="69 Kg">69 Kg</option>
                                <option value="70 Kg">70 Kg</option>
                                <option value="71 Kg">71 Kg</option>
                                <option value="72 Kg">72 Kg</option>
                                <option value="73 Kg">73 Kg</option>
                                <option value="74 Kg">74 Kg</option>
                                <option value="75 Kg">75 Kg</option>
                                <option value="76 Kg">76 Kg</option>
                                <option value="77 Kg">77 Kg</option>
                                <option value="78 Kg">78 Kg</option>
                                <option value="79 Kg">79 Kg</option>
                                <option value="80 Kg">80 Kg</option>
                                <option value="81 Kg">81 Kg</option>
                                <option value="82 Kg">82 Kg</option>
                                <option value="83 Kg">83 Kg</option>
                                <option value="84 Kg">84 Kg</option>
                                <option value="85 Kg">85 Kg</option>
                                <option value="86 Kg">86 Kg</option>
                                <option value="87 Kg">87 Kg</option>
                                <option value="88 Kg">88 Kg</option>
                                <option value="89 Kg">89 Kg</option>
                                <option value="90 Kg">90 Kg</option>
                                <option value="91 Kg">91 Kg</option>
                                <option value="92 Kg">92 Kg</option>
                                <option value="93 Kg">93 Kg</option>
                                <option value="94 Kg">94 Kg</option>
                                <option value="95 Kg">95 Kg</option>
                                <option value="96 Kg">96 Kg</option>
                                <option value="97 Kg">97 Kg</option>
                                <option value="98 Kg">98 Kg</option>
                                <option value="99 Kg">99 Kg</option>
                                <option value="100 Kg">100 Kg</option>
                                <option value="101 Kg">101 Kg</option>
                                <option value="102 Kg">102 Kg</option>
                                <option value="103 Kg">103 Kg</option>
                                <option value="104 Kg">104 Kg</option>
                                <option value="105 Kg">105 Kg</option>
                                <option value="106 Kg">106 Kg</option>
                                <option value="107 Kg">107 Kg</option>
                                <option value="108 Kg">108 Kg</option>
                                <option value="109 Kg">109 Kg</option>
                                <option value="110 Kg">110 Kg</option>
                                <option value="111 Kg">111 Kg</option>
                                <option value="112 Kg">112 Kg</option>
                                <option value="113 Kg">113 Kg</option>
                                <option value="114 Kg">114 Kg</option>
                                <option value="115 Kg">115 Kg</option>
                                <option value="116 Kg">116 Kg</option>
                                <option value="117 Kg">117 Kg</option>
                                <option value="118 Kg">118 Kg</option>
                                <option value="119 Kg">119 Kg</option>
                                <option value="120 Kg">120 Kg</option>
                                <option value="121 Kg">121 Kg</option>
                                <option value="122 Kg">122 Kg</option>
                                <option value="123 Kg">123 Kg</option>
                                <option value="124 Kg">124 Kg</option>
                                <option value="125 Kg">125 Kg</option>
                                <option value="126 Kg">126 Kg</option>
                                <option value="127 Kg">127 Kg</option>
                                <option value="128 Kg">128 Kg</option>
                                <option value="129 Kg">129 Kg</option>
                                <option value="130 Kg">130 Kg</option>
                                <option value="131 Kg">131 Kg</option>
                                <option value="132 Kg">132 Kg</option>
                                <option value="133 Kg">133 Kg</option>
                                <option value="134 Kg">134 Kg</option>
                                <option value="135 Kg">135 Kg</option>
                                <option value="136 Kg">136 Kg</option>
                                <option value="137 Kg">137 Kg</option>
                                <option value="138 Kg">138 Kg</option>
                                <option value="139 Kg">139 Kg</option>
                                <option value="140 Kg">140 Kg</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Blood Group</label>
                              <select name="blood_group" class="form-select" id="blood_group">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="A1+">A1+</option>
                                <option value="A1-">A1-</option>
                                <option value="A1B+">A1B+</option>
                                <option value="A1B-">A1B-</option>
                                <option value="A2+">A2+</option>
                                <option value="A2-">A2-</option>
                                <option value="A2B+">A2B+</option>
                                <option value="A2B-">A2B-</option>
                                <option value="AB-">AB-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Complexion</label>
                              <select name="complexion" class="form-select" id="complexion">
                                <option value="Very Fair">Very Fair</option>
                                <option value="Fair">Fair</option>
                                <option value="Wheatish">Wheatish</option>
                                <option value="Wheatish Medium" selected="">Wheatish Medium</option>
                                <option value="Wheatish Brown">Wheatish Brown</option>
                                <option value="Dark">Dark</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Body type</label>
                              <select name="body_type" class="form-select" id="bodytype">
                                <option value="Slim">Slim</option>
                                <option value="Average">Average</option>
                                <option value="Heavy">Heavy</option>
                                <option value="Athletic">Athletic</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Special Cases</label>
                              <select name="special_cases" class="form-select" id="special_cases">
                                <option value="None" selected="">None</option>
                                <option value="Physically challenged from birth">Physically challenged from birth
                                </option>
                                <option value="Physically challenged due to accident">Physically challenged due to
                                  accident</option>
                                <option value="Mentally challenged from birth">Mentally challenged from birth</option>
                                <option value="Mentally challenged due to accident">Mentally challenged due to accident
                                </option>
                                <option value="Physical abnormality affecting only looks">Physical abnormality affecting
                                  only looks</option>
                                <option value="Physical abnormality affecting bodily functions">Physical abnormality
                                  affecting bodily functions</option>
                                <option value="Physically and mentally challenged">Physically and mentally challenged
                                </option>
                                <option value="HIV positive">HIV positive</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Diet</label>
                              <select name="diet" class="form-select" id="diet">
                                <option value="Veg" selected="">Veg</option>
                                <option value="Eggetarian">Eggetarian</option>
                                <option value="Occasionally Non-Veg">Occasionally Non-Veg</option>
                                <option value="Non-Veg">Non-Veg</option>
                                <option value="Jain">Jain</option>
                                <option value="Vegan">Vegan</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Smoke</label>
                              <select name="smoke" class="form-select" id="smoke">
                                <option value="Yes">Yes</option>
                                <option value="No" selected="">No</option>
                                <option value="Occasionally">Occasionally</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Drink</label>
                              <select name="drink" class="form-select" id="drink">
                                <option value="Yes">Yes</option>
                                <option value="No" selected="">No</option>
                                <option value="Occasionally">Occasionally</option>
                              </select>
                            </div>
                            <div class="col_full">
                              <button name="submit" onclick="PhysicalFormEdit()" type="submit" id="submit-button" value="Submit" class="btn mug-btn-a">Save Now </button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="Forest" role="tabpanel" aria-labelledby="Forest-tab">
                        <div class="heading-block my-2">
                          <h3>Edit Contact Details</h3>
                        </div>
                        <div class="col-md-12">

                          <form method="post" name="MatriForm" id="MatriForm" class="form" novalidate="novalidate">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <input type="hidden" name="form_key" id="form_key" value="5">
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Address <small>*</small></label>
                              <textarea name="address" id="address" rows="4" class="form-control h-auto" maxlength="150" onkeyup="clearText('address')">32/2  Vallam Bangaru Street   Perumalpet  Purasawalkam</textarea>
                              <small>The contact address is only for official purpose and will not be disclosed to
                                others</small>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Country</label>
                              <select name="country" class="form-select " id="country" aria-required="true">
                                <option value="101" data-code="91">India</option>
                                <!-- <option value="256" data-code="0">Czeck Republic</option>
                                <option value="231" data-code="1">USA</option>
                                <option value="38" data-code="1">Canada</option>
                                <option value="230" data-code="44">United Kingdom</option>
                                <option value="13" data-code="61">Australia</option>
                                <option value="1" data-code="93">Afghanistan</option>
                                <option value="2" data-code="355">Albania</option>
                                <option value="3" data-code="213">Algeria</option>
                                <option value="4" data-code="1684">American Samoa</option>
                                <option value="5" data-code="376">Andorra</option>
                                <option value="6" data-code="244">Angola</option>
                                <option value="7" data-code="1264">Anguilla</option>
                                <option value="8" data-code="0">Antarctica</option>
                                <option value="9" data-code="1268">Antigua and Barbuda</option>
                                <option value="10" data-code="54">Argentina</option>
                                <option value="11" data-code="374">Armenia</option>
                                <option value="12" data-code="297">Aruba</option>
                                <option value="14" data-code="43">Austria</option>
                                <option value="15" data-code="994">Azerbaijan</option>
                                <option value="16" data-code="1242">Bahamas</option>
                                <option value="17" data-code="973">Bahrain</option>
                                <option value="18" data-code="880">Bangladesh</option>
                                <option value="19" data-code="1246">Barbados</option>
                                <option value="20" data-code="375">Belarus</option>
                                <option value="21" data-code="32">Belgium</option>
                                <option value="22" data-code="501">Belize</option>
                                <option value="23" data-code="229">Benin</option>
                                <option value="24" data-code="1441">Bermuda</option>
                                <option value="25" data-code="975">Bhutan</option>
                                <option value="26" data-code="591">Bolivia</option>
                                <option value="27" data-code="387">Bosnia and Herzegovina</option>
                                <option value="28" data-code="267">Botswana</option>
                                <option value="29" data-code="0">Bouvet Island</option>
                                <option value="30" data-code="55">Brazil</option>
                                <option value="31" data-code="246">British Indian Ocean Territory</option>
                                <option value="32" data-code="673">Brunei Darussalam</option>
                                <option value="33" data-code="359">Bulgaria</option>
                                <option value="34" data-code="226">Burkina Faso</option>
                                <option value="35" data-code="257">Burundi</option>
                                <option value="36" data-code="855">Cambodia</option>
                                <option value="37" data-code="237">Cameroon</option>
                                <option value="39" data-code="238">Cape Verde</option>
                                <option value="40" data-code="1345">Cayman Islands</option>
                                <option value="41" data-code="236">Central African Republic</option>
                                <option value="42" data-code="235">Chad</option>
                                <option value="43" data-code="56">Chile</option>
                                <option value="44" data-code="86">China</option>
                                <option value="45" data-code="61">Christmas Island</option>
                                <option value="46" data-code="672">Cocos (Keeling) Islands</option>
                                <option value="47" data-code="57">Colombia</option>
                                <option value="48" data-code="269">Comoros</option>
                                <option value="49" data-code="242">Congo</option>
                                <option value="50" data-code="242">Congo, the Democratic Republic of the</option>
                                <option value="51" data-code="682">Cook Islands</option>
                                <option value="52" data-code="506">Costa Rica</option>
                                <option value="53" data-code="225">Cote D'Ivoire</option>
                                <option value="54" data-code="385">Croatia</option>
                                <option value="55" data-code="53">Cuba</option>
                                <option value="56" data-code="357">Cyprus</option>
                                <option value="57" data-code="420">Czech Republic</option>
                                <option value="58" data-code="45">Denmark</option>
                                <option value="59" data-code="253">Djibouti</option>
                                <option value="60" data-code="1767">Dominica</option>
                                <option value="61" data-code="1809">Dominican Republic</option>
                                <option value="62" data-code="670">East Timor</option>
                                <option value="63" data-code="593">Ecuador</option>
                                <option value="64" data-code="20">Egypt</option>
                                <option value="65" data-code="503">El Salvador</option>
                                <option value="66" data-code="240">Equatorial Guinea</option>
                                <option value="67" data-code="291">Eritrea</option>
                                <option value="68" data-code="372">Estonia</option>
                                <option value="69" data-code="251">Ethiopia</option>
                                <option value="70" data-code="672">External Territories of Australia</option>
                                <option value="71" data-code="500">Falkland Islands (Malvinas)</option>
                                <option value="72" data-code="298">Faroe Islands</option>
                                <option value="73" data-code="679">Fiji</option>
                                <option value="74" data-code="358">Finland</option>
                                <option value="75" data-code="33">France</option>
                                <option value="76" data-code="594">French Guiana</option>
                                <option value="77" data-code="689">French Polynesia</option>
                                <option value="78" data-code="0">French Southern Territories</option>
                                <option value="79" data-code="241">Gabon</option>
                                <option value="80" data-code="220">Gambia</option>
                                <option value="81" data-code="995">Georgia</option>
                                <option value="82" data-code="49">Germany</option>
                                <option value="83" data-code="233">Ghana</option>
                                <option value="84" data-code="350">Gibraltar</option>
                                <option value="85" data-code="30">Greece</option>
                                <option value="86" data-code="299">Greenland</option>
                                <option value="87" data-code="1473">Grenada</option>
                                <option value="88" data-code="590">Guadeloupe</option>
                                <option value="89" data-code="1671">Guam</option>
                                <option value="90" data-code="502">Guatemala</option>
                                <option value="91" data-code="44">Guernsey and Alderney</option>
                                <option value="92" data-code="224">Guinea</option>
                                <option value="93" data-code="245">Guinea-Bissau</option>
                                <option value="94" data-code="592">Guyana</option>
                                <option value="95" data-code="509">Haiti</option>
                                <option value="96" data-code="0">Heard Island and Mcdonald Islands</option>
                                <option value="97" data-code="504">Honduras</option>
                                <option value="98" data-code="852">Hong Kong</option>
                                <option value="99" data-code="36">Hungary</option>
                                <option value="100" data-code="354">Iceland</option>
                                <option value="102" data-code="62">Indonesia</option>
                                <option value="103" data-code="98">Iran, Islamic Republic of</option>
                                <option value="104" data-code="964">Iraq</option>
                                <option value="105" data-code="353">Ireland</option>
                                <option value="106" data-code="972">Israel</option>
                                <option value="107" data-code="39">Italy</option>
                                <option value="108" data-code="1876">Jamaica</option>
                                <option value="109" data-code="81">Japan</option>
                                <option value="110" data-code="44">Jersey</option>
                                <option value="111" data-code="962">Jordan</option>
                                <option value="112" data-code="7">Kazakhstan</option>
                                <option value="113" data-code="254">Kenya</option>
                                <option value="114" data-code="686">Kiribati</option>
                                <option value="115" data-code="850">Korea, Democratic People's Republic of</option>
                                <option value="116" data-code="82">Korea, Republic of</option>
                                <option value="117" data-code="965">Kuwait</option>
                                <option value="118" data-code="996">Kyrgyzstan</option>
                                <option value="119" data-code="856">Lao People's Democratic Republic</option>
                                <option value="120" data-code="371">Latvia</option>
                                <option value="121" data-code="961">Lebanon</option>
                                <option value="122" data-code="266">Lesotho</option>
                                <option value="123" data-code="231">Liberia</option>
                                <option value="124" data-code="218">Libyan Arab Jamahiriya</option>
                                <option value="125" data-code="423">Liechtenstein</option>
                                <option value="126" data-code="370">Lithuania</option>
                                <option value="127" data-code="352">Luxembourg</option>
                                <option value="128" data-code="853">Macao</option>
                                <option value="129" data-code="389">Macedonia, the Former Yugoslav Republic of</option>
                                <option value="130" data-code="261">Madagascar</option>
                                <option value="131" data-code="265">Malawi</option>
                                <option value="132" data-code="60">Malaysia</option>
                                <option value="133" data-code="960">Maldives</option>
                                <option value="134" data-code="223">Mali</option>
                                <option value="135" data-code="356">Malta</option>
                                <option value="136" data-code="44">Man (Isle of)</option>
                                <option value="137" data-code="692">Marshall Islands</option>
                                <option value="138" data-code="596">Martinique</option>
                                <option value="139" data-code="222">Mauritania</option>
                                <option value="140" data-code="230">Mauritius</option>
                                <option value="141" data-code="269">Mayotte</option>
                                <option value="142" data-code="52">Mexico</option>
                                <option value="143" data-code="691">Micronesia, Federated States of</option>
                                <option value="144" data-code="373">Moldova, Republic of</option>
                                <option value="145" data-code="377">Monaco</option>
                                <option value="146" data-code="976">Mongolia</option>
                                <option value="147" data-code="1664">Montserrat</option>
                                <option value="148" data-code="212">Morocco</option>
                                <option value="149" data-code="258">Mozambique</option>
                                <option value="150" data-code="95">Myanmar</option>
                                <option value="151" data-code="264">Namibia</option>
                                <option value="152" data-code="674">Nauru</option>
                                <option value="153" data-code="977">Nepal</option>
                                <option value="154" data-code="31">Netherlands Antilles</option>
                                <option value="155" data-code="599">Netherlands</option>
                                <option value="156" data-code="687">New Caledonia</option>
                                <option value="157" data-code="64">New Zealand</option>
                                <option value="158" data-code="505">Nicaragua</option>
                                <option value="159" data-code="227">Niger</option>
                                <option value="160" data-code="234">Nigeria</option>
                                <option value="161" data-code="683">Niue</option>
                                <option value="162" data-code="672">Norfolk Island</option>
                                <option value="163" data-code="1670">Northern Mariana Islands</option>
                                <option value="164" data-code="47">Norway</option>
                                <option value="165" data-code="968">Oman</option>
                                <option value="166" data-code="92">Pakistan</option>
                                <option value="167" data-code="680">Palau</option>
                                <option value="168" data-code="970">Palestinian Territory, Occupied</option>
                                <option value="169" data-code="507">Panama</option>
                                <option value="170" data-code="675">Papua New Guinea</option>
                                <option value="171" data-code="595">Paraguay</option>
                                <option value="172" data-code="51">Peru</option>
                                <option value="173" data-code="63">Philippines</option>
                                <option value="174" data-code="0">Pitcairn</option>
                                <option value="175" data-code="48">Poland</option>
                                <option value="176" data-code="351">Portugal</option>
                                <option value="177" data-code="1787">Puerto Rico</option>
                                <option value="178" data-code="974">Qatar</option>
                                <option value="179" data-code="262">Reunion</option>
                                <option value="180" data-code="40">Romania</option>
                                <option value="181" data-code="70">Russian Federation</option>
                                <option value="182" data-code="250">Rwanda</option>
                                <option value="183" data-code="290">Saint Helena</option>
                                <option value="184" data-code="1869">Saint Kitts and Nevis</option>
                                <option value="185" data-code="1758">Saint Lucia</option>
                                <option value="186" data-code="508">Saint Pierre and Miquelon</option>
                                <option value="187" data-code="1784">Saint Vincent and the Grenadines</option>
                                <option value="188" data-code="684">Samoa</option>
                                <option value="189" data-code="378">San Marino</option>
                                <option value="190" data-code="239">Sao Tome and Principe</option>
                                <option value="191" data-code="966">Saudi Arabia</option>
                                <option value="192" data-code="221">Senegal</option>
                                <option value="193" data-code="381">Serbia</option>
                                <option value="194" data-code="248">Seychelles</option>
                                <option value="195" data-code="232">Sierra Leone</option>
                                <option value="196" data-code="65">Singapore</option>
                                <option value="197" data-code="421">Slovakia</option>
                                <option value="198" data-code="386">Slovenia</option>
                                <option value="199" data-code="44">Smaller Territories of the UK</option>
                                <option value="200" data-code="677">Solomon Islands</option>
                                <option value="201" data-code="252">Somalia</option>
                                <option value="202" data-code="27">South Africa</option>
                                <option value="203" data-code="0">South Georgia and the South Sandwich Islands</option>
                                <option value="204" data-code="211">South Sudan</option>
                                <option value="205" data-code="34">Spain</option>
                                <option value="206" data-code="94">Sri Lanka</option>
                                <option value="207" data-code="249">Sudan</option>
                                <option value="208" data-code="597">Suriname</option>
                                <option value="209" data-code="47">Svalbard and Jan Mayen</option>
                                <option value="210" data-code="268">Swaziland</option>
                                <option value="211" data-code="46">Sweden</option>
                                <option value="212" data-code="41">Switzerland</option>
                                <option value="213" data-code="963">Syrian Arab Republic</option>
                                <option value="214" data-code="886">Taiwan, Province of China</option>
                                <option value="215" data-code="992">Tajikistan</option>
                                <option value="216" data-code="255">Tanzania, United Republic of</option>
                                <option value="217" data-code="66">Thailand</option>
                                <option value="218" data-code="228">Togo</option>
                                <option value="219" data-code="690">Tokelau</option>
                                <option value="220" data-code="676">Tonga</option>
                                <option value="221" data-code="1868">Trinidad and Tobago</option>
                                <option value="222" data-code="216">Tunisia</option>
                                <option value="223" data-code="90">Turkey</option>
                                <option value="224" data-code="7370">Turkmenistan</option>
                                <option value="225" data-code="1649">Turks and Caicos Islands</option>
                                <option value="226" data-code="688">Tuvalu</option>
                                <option value="227" data-code="256">Uganda</option>
                                <option value="228" data-code="380">Ukraine</option>
                                <option value="229" data-code="971">United Arab Emirates</option>
                                <option value="232" data-code="1">United States Minor Outlying Islands</option>
                                <option value="233" data-code="598">Uruguay</option>
                                <option value="234" data-code="998">Uzbekistan</option>
                                <option value="235" data-code="678">Vanuatu</option>
                                <option value="236" data-code="39">Vatican City State (Holy See)</option>
                                <option value="237" data-code="58">Venezuela</option>
                                <option value="238" data-code="84">Viet Nam</option>
                                <option value="239" data-code="1284">Virgin Islands, British</option>
                                <option value="240" data-code="1340">Virgin Islands, U.s.</option>
                                <option value="241" data-code="681">Wallis and Futuna</option>
                                <option value="242" data-code="212">Western Sahara</option>
                                <option value="243" data-code="967">Yemen</option>
                                <option value="244" data-code="38">Yugoslavia</option>
                                <option value="245" data-code="260">Zambia</option>
                                <option value="246" data-code="263">Zimbabwe</option> -->
                              </select>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>State</label>
                              <select name="state" class="form-select " id="state" aria-required="true">
                                <option value="1">Andaman and Nicobar Islands</option>
                                <option value="2">Andhra Pradesh</option>
                                <option value="3">Arunachal Pradesh</option>
                                <option value="4">Assam</option>
                                <option value="5">Bihar</option>
                                <option value="6">Chandigarh</option>
                                <option value="7">Chhattisgarh</option>
                                <option value="8">Dadra and Nagar Haveli</option>
                                <option value="9">Daman and Diu</option>
                                <option value="10">Delhi</option>
                                <option value="11">Goa</option>
                                <option value="12">Gujarat</option>
                                <option value="13">Haryana</option>
                                <option value="14">Himachal Pradesh</option>
                                <option value="15">Jammu and Kashmir</option>
                                <option value="16">Jharkhand</option>
                                <option value="17">Karnataka</option>
                                <option value="18">Orissa</option>
                                <option value="19">Kerala</option>
                                <option value="20">Lakshadweep</option>
                                <option value="21">Madhya Pradesh</option>
                                <option value="22">Maharashtra</option>
                                <option value="23">Manipur</option>
                                <option value="24">Meghalaya</option>
                                <option value="25">Mizoram</option>
                                <option value="26">Nagaland</option>
                                <option value="29">Odisha</option>
                                <option value="31">Pondicherry</option>
                                <option value="32">Punjab</option>
                                <option value="33">Rajasthan</option>
                                <option value="34">Sikkim</option>
                                <option value="35" selected="">Tamil Nadu</option>
                                <option value="36">Telangana</option>
                                <option value="37">Tripura</option>
                                <option value="38">Uttar Pradesh</option>
                                <option value="39">Uttarakhand</option>
                                <option value="40">Uttaranchal</option>
                                <option value="41">West Bengal</option>
                              </select>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>City</label>
                              <select name="city" class="form-select " id="city" aria-required="true">
                                <option value="48315">Tiruchirappalli</option>
                                <option value="48317">Tamilnadu</option>
                                <option value="48319">Chennai tamilnAdu</option>
                                <option value="48321">Aminjikarai</option>
                                <option value="48322">Kancheepuram</option>
                                <option value="48324">TRICHIRAPALLI</option>
                                <option value="48326">Gobichettipalayam</option>
                                <option value="48329">trichy</option>
                                <option value="48331">No Results Found</option>
                                <option value="48333">THIRUCHIRAPALLI</option>
                                <option value="48335">NAGERCOIL</option>
                                <option value="48338">Trchy</option>
                                <option value="48339">Trichirappalli</option>
                                <option value="48340">KUMBAKONAM</option>
                                <option value="48343">guduvanchery</option>
                                <option value="48348">Denkanikotta</option>
                                <option value="48351">Thiruvallur</option>
                                <option value="48352">Chi</option>
                                <option value="48356">TIRUPUR</option>
                                <option value="48360">THANJAVORE</option>
                                <option value="48362">CHINMAYA NAGAR</option>
                                <option value="48363">Karaikudi</option>
                                <option value="48364">Chenai</option>
                                <option value="48367">Tiruchendur</option>
                                <option value="48370">TIRUCHIRAPALLI</option>
                                <option value="48372">sriperumbudur</option>
                                <option value="48374">SIRKALI</option>
                                <option value="48377">Tiruppur</option>
                                <option value="48378">SATHYAMNGALAM</option>
                                <option value="48379">Pudukkottai</option>
                                <option value="48385">MANNARGUDI</option>
                                <option value="48386">Devipattinam</option>
                                <option value="48387">Viluppuram</option>
                                <option value="48389">Srivilliputhur</option>
                                <option value="48390">chidambaram</option>
                                <option value="48396">BATLAGUNDU</option>
                                <option value="48397">Madurantakam</option>
                                <option value="48398">EastTambaram</option>
                                <option value="48401">sankarankoil</option>
                                <option value="48402">Chrompet Chenna</option>
                                <option value="48403">CHEANNAI</option>
                                <option value="48404">Thiruppuvanam</option>
                                <option value="48405">O</option>
                                <option value="48409">villupuram</option>
                                <option value="48414">Arakkonam</option>
                                <option value="48415">Perambalur tk</option>
                                <option value="48416">Others</option>
                                <option value="48417">Kallakurichi</option>
                                <option value="48418">ChennaiCHENNAI</option>
                                <option value="48419">Triplicane</option>
                                <option value="48420">TIRUNINRAVUR</option>
                                <option value="48423">Thiruvannamalai</option>
                                <option value="48425">Tenkasi dist</option>
                                <option value="48430">Cloimbatore</option>
                                <option value="48435">trichi</option>
                                <option value="48436">Anupuram</option>
                                <option value="48439">Nanganallur chennai</option>
                                <option value="48441">Tiruchi</option>
                                <option value="48444">POZHICHALUR</option>
                                <option value="48445">RASIPURAM</option>
                                <option value="48449">Thirukovalur</option>
                                <option value="48450">Pollach</option>
                                <option value="48452">THANJAVUR KUMBAKONAM</option>
                                <option value="48453">SIVAGIRI</option>
                                <option value="48456">Thuraiyur</option>
                                <option value="48457">Korattur</option>
                                <option value="48458">udamalpet</option>
                                <option value="48461">Korattur chennai</option>
                                <option value="48462">Sirkazhi</option>
                                <option value="48464">- Select City -</option>
                                <option value="48465">Thirukovilur</option>
                                <option value="48466">KATTUPAKKAM</option>
                                <option value="48467">KALPAKKAM</option>
                                <option value="48469">XHENNAI</option>
                                <option value="48472">mogappair west chennai</option>
                                <option value="48476">Kumbakonam-thanjavur district</option>
                                <option value="48477">Kanchiputam</option>
                                <option value="48482">Town</option>
                                <option value="48483">KALAPATTI</option>
                                <option value="48486">Chingleput Dist</option>
                                <option value="48487">MAHABALIPURAM</option>
                                <option value="48489">kattumannar koil</option>
                                <option value="48491">Ambattur</option>
                                <option value="48492">Thoothukkudi</option>
                                <option value="48493">MADIPAKKAM</option>
                                <option value="48494">Naagoor</option>
                                <option value="48496">CHENGALPUT</option>
                                <option value="48497">Alwarthirunagari</option>
                                <option value="48499">Chengapet</option>
                                <option value="3551">Abiramam</option>
                                <option value="3552">Achampudur</option>
                                <option value="3553">Acharapakkam</option>
                                <option value="3554">Acharipallam</option>
                                <option value="3555">Achipatti</option>
                                <option value="3556">Adikaratti</option>
                                <option value="3557">Adiramapattinam</option>
                                <option value="3558">Aduturai</option>
                                <option value="3559">Adyar</option>
                                <option value="3560">Agaram</option>
                                <option value="3561">Agasthiswaram</option>
                                <option value="3562">Akkaraipettai</option>
                                <option value="3563">Alagappapuram</option>
                                <option value="3564">Alagapuri</option>
                                <option value="3565">Alampalayam</option>
                                <option value="3566">Alandur</option>
                                <option value="3567">Alanganallur</option>
                                <option value="3568">Alangayam</option>
                                <option value="3569">Alangudi</option>
                                <option value="3570">Alangulam</option>
                                <option value="3571">Alanthurai</option>
                                <option value="3572">Alapakkam</option>
                                <option value="3573">Allapuram</option>
                                <option value="3574">Alur</option>
                                <option value="3575">Alwar Tirunagari</option>
                                <option value="3576">Alwarkurichi</option>
                                <option value="3577">Ambasamudram</option>
                                <option value="3578">Ambur</option>
                                <option value="3579">Ammainaickanur</option>
                                <option value="3580">Ammaparikuppam</option>
                                <option value="3581">Ammapettai</option>
                                <option value="3582">Ammavarikuppam</option>
                                <option value="3583">Ammur</option>
                                <option value="3584">Anaimalai</option>
                                <option value="3585">Anaiyur</option>
                                <option value="3586">Anakaputhur</option>
                                <option value="3587">Ananthapuram</option>
                                <option value="3588">Andanappettai</option>
                                <option value="3589">Andipalayam</option>
                                <option value="3590">Andippatti</option>
                                <option value="3591">Anjugramam</option>
                                <option value="3592">Annamalainagar</option>
                                <option value="3593">Annavasal</option>
                                <option value="3594">Annur</option>
                                <option value="3595">Anthiyur</option>
                                <option value="3596">Appakudal</option>
                                <option value="3597">Arachalur</option>
                                <option value="3598">Arakandanallur</option>
                                <option value="3599">Arakonam</option>
                                <option value="3600">Aralvaimozhi</option>
                                <option value="3601">Arani</option>
                                <option value="3602">Arani Road</option>
                                <option value="3603">Arantangi</option>
                                <option value="3604">Arasiramani</option>
                                <option value="3605">Aravakurichi</option>
                                <option value="3606">Aravankadu</option>
                                <option value="3607">Arcot</option>
                                <option value="3608">Arimalam</option>
                                <option value="3609">Ariyalur</option>
                                <option value="3610">Ariyappampalayam</option>
                                <option value="3611">Ariyur</option>
                                <option value="3612">Arni</option>
                                <option value="3613">Arulmigu Thirumuruganpundi</option>
                                <option value="3614">Arumanai</option>
                                <option value="3615">Arumbavur</option>
                                <option value="3616">Arumuganeri</option>
                                <option value="3617">Aruppukkottai</option>
                                <option value="3618">Ashokapuram</option>
                                <option value="3619">Athani</option>
                                <option value="3620">Athanur</option>
                                <option value="3621">Athimarapatti</option>
                                <option value="3622">Athipattu</option>
                                <option value="3623">Athur</option>
                                <option value="3624">Attayyampatti</option>
                                <option value="3625">Attur</option>
                                <option value="3626">Auroville</option>
                                <option value="3627">Avadattur</option>
                                <option value="3628">Avadi</option>
                                <option value="3629">Avalpundurai</option>
                                <option value="3630">Avaniapuram</option>
                                <option value="3631">Avinashi</option>
                                <option value="3632">Ayakudi</option>
                                <option value="3633">Ayanadaippu</option>
                                <option value="3634">Aygudi</option>
                                <option value="3635">Ayothiapattinam</option>
                                <option value="3636">Ayyalur</option>
                                <option value="3637">Ayyampalayam</option>
                                <option value="3638">Ayyampettai</option>
                                <option value="3639">Azhagiapandiapuram</option>
                                <option value="3640">Balakrishnampatti</option>
                                <option value="3641">Balakrishnapuram</option>
                                <option value="3642">Balapallam</option>
                                <option value="3643">Balasamudram</option>
                                <option value="3644">Bargur</option>
                                <option value="3645">Belur</option>
                                <option value="3646">Berhatty</option>
                                <option value="3647">Bhavani</option>
                                <option value="3648">Bhawanisagar</option>
                                <option value="3649">Bhuvanagiri</option>
                                <option value="3650">Bikketti</option>
                                <option value="3651">Bodinayakkanur</option>
                                <option value="3652">Brahmana Periya Agraharam</option>
                                <option value="3653">Buthapandi</option>
                                <option value="3654">Buthipuram</option>
                                <option value="3655">Chatrapatti</option>
                                <option value="3656">Chembarambakkam</option>
                                <option value="3657">Chengalpattu</option>
                                <option value="3658">Chengam</option>
                                <option value="3659" selected="">Chennai</option>
                                <option value="3660">Chennasamudram</option>
                                <option value="3661">Chennimalai</option>
                                <option value="3662">Cheranmadevi</option>
                                <option value="3663">Cheruvanki</option>
                                <option value="3664">Chetpet</option>
                                <option value="3665">Chettiarpatti</option>
                                <option value="3666">Chettipalaiyam</option>
                                <option value="3667">Chettipalayam Cantonment</option>
                                <option value="3668">Chettithangal</option>
                                <option value="3669">Cheyur</option>
                                <option value="3670">Cheyyar</option>
                                <option value="3671">Chidambaram</option>
                                <option value="3672">Chinalapatti</option>
                                <option value="3673">Chinna Anuppanadi</option>
                                <option value="3674">Chinna Salem</option>
                                <option value="3675">Chinnakkampalayam</option>
                                <option value="3676">Chinnammanur</option>
                                <option value="3677">Chinnampalaiyam</option>
                                <option value="3678">Chinnasekkadu</option>
                                <option value="3679">Chinnavedampatti</option>
                                <option value="3680">Chitlapakkam</option>
                                <option value="3681">Chittodu</option>
                                <option value="3682">Cholapuram</option>
                                <option value="3683">Coimbatore</option>
                                <option value="3684">Coonoor</option>
                                <option value="3685">Courtalam</option>
                                <option value="3686">Cuddalore</option>
                                <option value="3687">Dalavaipatti</option>
                                <option value="3688">Darasuram</option>
                                <option value="3689">Denkanikottai</option>
                                <option value="3690">Desur</option>
                                <option value="3691">Devadanapatti</option>
                                <option value="3692">Devakkottai</option>
                                <option value="3693">Devakottai</option>
                                <option value="3694">Devanangurichi</option>
                                <option value="3695">Devarshola</option>
                                <option value="3696">Devasthanam</option>
                                <option value="3697">Dhalavoipuram</option>
                                <option value="3698">Dhali</option>
                                <option value="3699">Dhaliyur</option>
                                <option value="3700">Dharapadavedu</option>
                                <option value="3701">Dharapuram</option>
                                <option value="3702">Dharmapuri</option>
                                <option value="3703">Dindigul</option>
                                <option value="3704">Dusi</option>
                                <option value="3705">Edaganasalai</option>
                                <option value="3706">Edaikodu</option>
                                <option value="3707">Edakalinadu</option>
                                <option value="3708">Elathur</option>
                                <option value="3709">Elayirampannai</option>
                                <option value="3710">Elumalai</option>
                                <option value="3711">Eral</option>
                                <option value="3712">Eraniel</option>
                                <option value="3713">Eriodu</option>
                                <option value="3714">Erode</option>
                                <option value="3715">Erumaipatti</option>
                                <option value="3716">Eruvadi</option>
                                <option value="3717">Ethapur</option>
                                <option value="3718">Ettaiyapuram</option>
                                <option value="3719">Ettimadai</option>
                                <option value="3720">Ezhudesam</option>
                                <option value="3721">Ganapathipuram</option>
                                <option value="3722">Gandhi Nagar</option>
                                <option value="3723">Gangaikondan</option>
                                <option value="3724">Gangavalli</option>
                                <option value="3725">Ganguvarpatti</option>
                                <option value="3726">Gingi</option>
                                <option value="3727">Gopalasamudram</option>
                                <option value="3728">Gopichettipalaiyam</option>
                                <option value="3729">Gudalur</option>
                                <option value="3730">Gudiyattam</option>
                                <option value="3731">Guduvanchery</option>
                                <option value="3732">Gummidipoondi</option>
                                <option value="3733">Hanumanthampatti</option>
                                <option value="3734">Harur</option>
                                <option value="3735">Harveypatti</option>
                                <option value="3736">Highways</option>
                                <option value="3737">Hosur</option>
                                <option value="3738">Hubbathala</option>
                                <option value="3739">Huligal</option>
                                <option value="3740">Idappadi</option>
                                <option value="3741">Idikarai</option>
                                <option value="3742">Ilampillai</option>
                                <option value="3743">Ilanji</option>
                                <option value="3744">Iluppaiyurani</option>
                                <option value="3745">Iluppur</option>
                                <option value="3746">Inam Karur</option>
                                <option value="3747">Injambakkam</option>
                                <option value="3748">Irugur</option>
                                <option value="3749">Jaffrabad</option>
                                <option value="3750">Jagathala</option>
                                <option value="3751">Jalakandapuram</option>
                                <option value="3752">Jalladiampet</option>
                                <option value="3753">Jambai</option>
                                <option value="3754">Jayankondam</option>
                                <option value="3755">Jolarpet</option>
                                <option value="3756">Kadambur</option>
                                <option value="3757">Kadathur</option>
                                <option value="3758">Kadayal</option>
                                <option value="3759">Kadayampatti</option>
                                <option value="3760">Kadayanallur</option>
                                <option value="3761">Kadiapatti</option>
                                <option value="3762">Kalakkad</option>
                                <option value="3763">Kalambur</option>
                                <option value="3764">Kalapatti</option>
                                <option value="3765">Kalappanaickenpatti</option>
                                <option value="3766">Kalavai</option>
                                <option value="3767">Kalinjur</option>
                                <option value="3768">Kaliyakkavilai</option>
                                <option value="3769">Kallakkurichi</option>
                                <option value="3770">Kallakudi</option>
                                <option value="3771">Kallidaikurichchi</option>
                                <option value="3772">Kallukuttam</option>
                                <option value="3773">Kallupatti</option>
                                <option value="3774">Kalpakkam</option>
                                <option value="3775">Kalugumalai</option>
                                <option value="3776">Kamayagoundanpatti</option>
                                <option value="3777">Kambainallur</option>
                                <option value="3778">Kambam</option>
                                <option value="3779">Kamuthi</option>
                                <option value="3780">Kanadukathan</option>
                                <option value="3781">Kanakkampalayam</option>
                                <option value="3782">Kanam</option>
                                <option value="3783">Kanchipuram</option>
                                <option value="3784">Kandanur</option>
                                <option value="3785">Kangayam</option>
                                <option value="3786">Kangayampalayam</option>
                                <option value="3787">Kangeyanallur</option>
                                <option value="3788">Kaniyur</option>
                                <option value="3789">Kanjikoil</option>
                                <option value="3790">Kannadendal</option>
                                <option value="3791">Kannamangalam</option>
                                <option value="3792">Kannampalayam</option>
                                <option value="3793">Kannankurichi</option>
                                <option value="3794">Kannapalaiyam</option>
                                <option value="3795">Kannivadi</option>
                                <option value="3796">Kanyakumari</option>
                                <option value="3797">Kappiyarai</option>
                                <option value="3798">Karaikkudi</option>
                                <option value="3799">Karamadai</option>
                                <option value="3800">Karambakkam</option>
                                <option value="3801">Karambakkudi</option>
                                <option value="3802">Kariamangalam</option>
                                <option value="3803">Kariapatti</option>
                                <option value="3804">Karugampattur</option>
                                <option value="3805">Karumandi Chellipalayam</option>
                                <option value="3806">Karumathampatti</option>
                                <option value="3807">Karumbakkam</option>
                                <option value="3808">Karungal</option>
                                <option value="3809">Karunguzhi</option>
                                <option value="3810">Karuppur</option>
                                <option value="3811">Karur</option>
                                <option value="3812">Kasipalaiyam</option>
                                <option value="3813">Kasipalayam G</option>
                                <option value="3814">Kathirvedu</option>
                                <option value="3815">Kathujuganapalli</option>
                                <option value="3816">Katpadi</option>
                                <option value="3817">Kattivakkam</option>
                                <option value="3818">Kattumannarkoil</option>
                                <option value="3819">Kattupakkam</option>
                                <option value="3820">Kattuputhur</option>
                                <option value="3821">Kaveripakkam</option>
                                <option value="3822">Kaveripattinam</option>
                                <option value="3823">Kavundampalaiyam</option>
                                <option value="3824">Kavundampalayam</option>
                                <option value="3825">Kayalpattinam</option>
                                <option value="3826">Kayattar</option>
                                <option value="3827">Kelamangalam</option>
                                <option value="3828">Kelambakkam</option>
                                <option value="3829">Kembainaickenpalayam</option>
                                <option value="3830">Kethi</option>
                                <option value="3831">Kilakarai</option>
                                <option value="3832">Kilampadi</option>
                                <option value="3833">Kilkulam</option>
                                <option value="3834">Kilkunda</option>
                                <option value="3835">Killiyur</option>
                                <option value="3836">Killlai</option>
                                <option value="3837">Kilpennathur</option>
                                <option value="3838">Kilvelur</option>
                                <option value="3839">Kinathukadavu</option>
                                <option value="3840">Kiramangalam</option>
                                <option value="3841">Kiranur</option>
                                <option value="3842">Kiripatti</option>
                                <option value="3843">Kizhapavur</option>
                                <option value="3844">Kmarasamipatti</option>
                                <option value="3845">Kochadai</option>
                                <option value="3846">Kodaikanal</option>
                                <option value="3847">Kodambakkam</option>
                                <option value="3848">Kodavasal</option>
                                <option value="3849">Kodumudi</option>
                                <option value="3850">Kolachal</option>
                                <option value="3851">Kolappalur</option>
                                <option value="3852">Kolathupalayam</option>
                                <option value="3853">Kolathur</option>
                                <option value="3854">Kollankodu</option>
                                <option value="3855">Kollankoil</option>
                                <option value="3856">Komaralingam</option>
                                <option value="3857">Komarapalayam</option>
                                <option value="3858">Kombai</option>
                                <option value="3859">Konakkarai</option>
                                <option value="3860">Konavattam</option>
                                <option value="3861">Kondalampatti</option>
                                <option value="3862">Konganapuram</option>
                                <option value="3863">Koradacheri</option>
                                <option value="3864">Korampallam</option>
                                <option value="3865">Kotagiri</option>
                                <option value="3866">Kothinallur</option>
                                <option value="3867">Kottaiyur</option>
                                <option value="3868">Kottakuppam</option>
                                <option value="3869">Kottaram</option>
                                <option value="3870">Kottivakkam</option>
                                <option value="3871">Kottur</option>
                                <option value="3872">Kovilpatti</option>
                                <option value="3873">Koyampattur</option>
                                <option value="3874">Krishnagiri</option>
                                <option value="3875">Krishnarayapuram</option>
                                <option value="3876">Krishnasamudram</option>
                                <option value="3877">Kuchanur</option>
                                <option value="3878">Kuhalur</option>
                                <option value="3879">Kulasekarappattinam</option>
                                <option value="3880">Kulasekarapuram</option>
                                <option value="3881">Kulithalai</option>
                                <option value="3882">Kumarapalaiyam</option>
                                <option value="3883">Kumarapalayam</option>
                                <option value="3884">Kumarapuram</option>
                                <option value="3885">Kumbakonam</option>
                                <option value="3886">Kundrathur</option>
                                <option value="3887">Kuniyamuthur</option>
                                <option value="3888">Kunnathur</option>
                                <option value="3889">Kunur</option>
                                <option value="3890">Kuraikundu</option>
                                <option value="3891">Kurichi</option>
                                <option value="3892">Kurinjippadi</option>
                                <option value="3893">Kurudampalaiyam</option>
                                <option value="3894">Kurumbalur</option>
                                <option value="3895">Kuthalam</option>
                                <option value="3896">Kuthappar</option>
                                <option value="3897">Kuttalam</option>
                                <option value="3898">Kuttanallur</option>
                                <option value="3899">Kuzhithurai</option>
                                <option value="3900">Labbaikudikadu</option>
                                <option value="3901">Lakkampatti</option>
                                <option value="3902">Lalgudi</option>
                                <option value="3903">Lalpet</option>
                                <option value="3904">Llayangudi</option>
                                <option value="3905">Madambakkam</option>
                                <option value="3906">Madanur</option>
                                <option value="3907">Madathukulam</option>
                                <option value="3908">Madhavaram</option>
                                <option value="3909">Madippakkam</option>
                                <option value="3910">Madukkarai</option>
                                <option value="3911">Madukkur</option>
                                <option value="3912">Madurai</option>
                                <option value="3913">Maduranthakam</option>
                                <option value="3914">Maduravoyal</option>
                                <option value="3915">Mahabalipuram</option>
                                <option value="3916">Makkinanpatti</option>
                                <option value="3917">Mallamuppampatti</option>
                                <option value="3918">Mallankinaru</option>
                                <option value="3919">Mallapuram</option>
                                <option value="3920">Mallasamudram</option>
                                <option value="3921">Mallur</option>
                                <option value="3922">Mamallapuram</option>
                                <option value="3923">Mamsapuram</option>
                                <option value="3924">Manachanallur</option>
                                <option value="3925">Manali</option>
                                <option value="3926">Manalmedu</option>
                                <option value="3927">Manalurpet</option>
                                <option value="3928">Manamadurai</option>
                                <option value="3929">Manapakkam</option>
                                <option value="3930">Manapparai</option>
                                <option value="3931">Manavalakurichi</option>
                                <option value="3932">Mandaikadu</option>
                                <option value="3933">Mandapam</option>
                                <option value="3934">Mangadu</option>
                                <option value="3935">Mangalam</option>
                                <option value="3936">Mangalampet</option>
                                <option value="3937">Manimutharu</option>
                                <option value="3938">Mannargudi</option>
                                <option value="3939">Mappilaiurani</option>
                                <option value="3940">Maraimalai Nagar</option>
                                <option value="3941">Marakkanam</option>
                                <option value="3942">Maramangalathupatti</option>
                                <option value="3943">Marandahalli</option>
                                <option value="3944">Markayankottai</option>
                                <option value="3945">Marudur</option>
                                <option value="3946">Marungur</option>
                                <option value="3947">Masinigudi</option>
                                <option value="3948">Mathigiri</option>
                                <option value="3949">Mattur</option>
                                <option value="3950">Mayiladuthurai</option>
                                <option value="3951">Mecheri</option>
                                <option value="3952">Melacheval</option>
                                <option value="3953">Melachokkanathapuram</option>
                                <option value="3954">Melagaram</option>
                                <option value="3955">Melamadai</option>
                                <option value="3956">Melamaiyur</option>
                                <option value="3957">Melanattam</option>
                                <option value="3958">Melathiruppanthuruthi</option>
                                <option value="3959">Melattur</option>
                                <option value="3960">Melmananbedu</option>
                                <option value="3961">Melpattampakkam</option>
                                <option value="3962">Melur</option>
                                <option value="3963">Melvisharam</option>
                                <option value="3964">Mettupalayam</option>
                                <option value="3965">Mettur</option>
                                <option value="3966">Meyyanur</option>
                                <option value="3967">Milavittan</option>
                                <option value="3968">Minakshipuram</option>
                                <option value="3969">Minambakkam</option>
                                <option value="3970">Minjur</option>
                                <option value="3971">Modakurichi</option>
                                <option value="3972">Mohanur</option>
                                <option value="3973">Mopperipalayam</option>
                                <option value="3974">Mudalur</option>
                                <option value="3975">Mudichur</option>
                                <option value="3976">Mudukulathur</option>
                                <option value="3977">Mukasipidariyur</option>
                                <option value="3978">Mukkudal</option>
                                <option value="3979">Mulagumudu</option>
                                <option value="3980">Mulakaraipatti</option>
                                <option value="3981">Mulanur</option>
                                <option value="3982">Mullakkadu</option>
                                <option value="3983">Muruganpalayam</option>
                                <option value="3984">Musiri</option>
                                <option value="3985">Muthupet</option>
                                <option value="3986">Muthur</option>
                                <option value="3987">Muttayyapuram</option>
                                <option value="3988">Muttupet</option>
                                <option value="3989">Muvarasampettai</option>
                                <option value="3990">Myladi</option>
                                <option value="3991">Mylapore</option>
                                <option value="3992">Nadukkuthagai</option>
                                <option value="3993">Naduvattam</option>
                                <option value="3994">Nagapattinam</option>
                                <option value="3995">Nagavakulam</option>
                                <option value="3996">Nagercoil</option>
                                <option value="3997">Nagojanahalli</option>
                                <option value="3998">Nallampatti</option>
                                <option value="3999">Nallur</option>
                                <option value="4000">Namagiripettai</option>
                                <option value="4001">Namakkal</option>
                                <option value="4002">Nambiyur</option>
                                <option value="4003">Nambutalai</option>
                                <option value="4004">Nandambakkam</option>
                                <option value="4005">Nandivaram</option>
                                <option value="4006">Nangavalli</option>
                                <option value="4007">Nangavaram</option>
                                <option value="4008">Nanguneri</option>
                                <option value="4009">Nanjikottai</option>
                                <option value="4010">Nannilam</option>
                                <option value="4011">Naranammalpuram</option>
                                <option value="4012">Naranapuram</option>
                                <option value="4013">Narasimhanaickenpalayam</option>
                                <option value="4014">Narasingapuram</option>
                                <option value="4015">Narasojipatti</option>
                                <option value="4016">Naravarikuppam</option>
                                <option value="4017">Nasiyanur</option>
                                <option value="4018">Natham</option>
                                <option value="4019">Nathampannai</option>
                                <option value="4020">Natrampalli</option>
                                <option value="4021">Nattam</option>
                                <option value="4022">Nattapettai</option>
                                <option value="4023">Nattarasankottai</option>
                                <option value="4024">Navalpattu</option>
                                <option value="4025">Nazarethpettai</option>
                                <option value="4026">Nazerath</option>
                                <option value="4027">Neikkarapatti</option>
                                <option value="4028">Neiyyur</option>
                                <option value="4029">Nellikkuppam</option>
                                <option value="4030">Nelliyalam</option>
                                <option value="4031">Nemili</option>
                                <option value="4032">Nemilicheri</option>
                                <option value="4033">Neripperichal</option>
                                <option value="4034">Nerkunram</option>
                                <option value="4035">Nerkuppai</option>
                                <option value="4036">Nerunjipettai</option>
                                <option value="4037">Neykkarappatti</option>
                                <option value="4038">Neyveli</option>
                                <option value="4039">Nidamangalam</option>
                                <option value="4040">Nilagiri</option>
                                <option value="4041">Nilakkottai</option>
                                <option value="4042">Nilankarai</option>
                                <option value="4043">Odaipatti</option>
                                <option value="4044">Odaiyakulam</option>
                                <option value="4045">Oddanchatram</option>
                                <option value="4046">Odugathur</option>
                                <option value="4047">Oggiyamduraipakkam</option>
                                <option value="4048">Olagadam</option>
                                <option value="4049">Omalur</option>
                                <option value="4050">Ooty</option>
                                <option value="4051">Orathanadu</option>
                                <option value="4052">Othakadai</option>
                                <option value="4053">Othakalmandapam</option>
                                <option value="4054">Ottapparai</option>
                                <option value="4055">Pacode</option>
                                <option value="4056">Padaividu</option>
                                <option value="4057">Padianallur</option>
                                <option value="4058">Padirikuppam</option>
                                <option value="4059">Padmanabhapuram</option>
                                <option value="4060">Padririvedu</option>
                                <option value="4061">Palaganangudy</option>
                                <option value="4062">Palaimpatti</option>
                                <option value="4063">Palakkodu</option>
                                <option value="4064">Palamedu</option>
                                <option value="4065">Palani</option>
                                <option value="4066">Palani Chettipatti</option>
                                <option value="4067">Palavakkam</option>
                                <option value="4068">Palavansathu</option>
                                <option value="4069">Palayakayal</option>
                                <option value="4070">Palayam</option>
                                <option value="4071">Palayamkottai</option>
                                <option value="4072">Palladam</option>
                                <option value="4073">Pallapalayam</option>
                                <option value="4074">Pallapatti</option>
                                <option value="4075">Pallattur</option>
                                <option value="4076">Pallavaram</option>
                                <option value="4077">Pallikaranai</option>
                                <option value="4078">Pallikonda</option>
                                <option value="4079">Pallipalaiyam</option>
                                <option value="4080">Pallipalaiyam Agraharam</option>
                                <option value="4081">Pallipattu</option>
                                <option value="4082">Pammal</option>
                                <option value="4083">Panagudi</option>
                                <option value="4084">Panaimarathupatti</option>
                                <option value="4085">Panapakkam</option>
                                <option value="4086">Panboli</option>
                                <option value="4087">Pandamangalam</option>
                                <option value="4088">Pannaikadu</option>
                                <option value="4089">Pannaipuram</option>
                                <option value="4090">Pannuratti</option>
                                <option value="4091">Panruti</option>
                                <option value="4092">Papanasam</option>
                                <option value="4093">Pappankurichi</option>
                                <option value="4094">Papparapatti</option>
                                <option value="4095">Pappireddipatti</option>
                                <option value="4096">Paramakkudi</option>
                                <option value="4097">Paramankurichi</option>
                                <option value="4098">Paramathi</option>
                                <option value="4099">Parangippettai</option>
                                <option value="4100">Paravai</option>
                                <option value="4101">Pasur</option>
                                <option value="4102">Pathamadai</option>
                                <option value="4103">Pattinam</option>
                                <option value="4104">Pattiviranpatti</option>
                                <option value="4105">Pattukkottai</option>
                                <option value="4106">Pazhugal</option>
                                <option value="4107">Pennadam</option>
                                <option value="4108">Pennagaram</option>
                                <option value="4109">Pennathur</option>
                                <option value="4110">Peraiyur</option>
                                <option value="4111">Peralam</option>
                                <option value="4112">Perambalur</option>
                                <option value="4113">Peranamallur</option>
                                <option value="4114">Peravurani</option>
                                <option value="4115">Periyakodiveri</option>
                                <option value="4116">Periyakulam</option>
                                <option value="4117">Periyanayakkanpalaiyam</option>
                                <option value="4118">Periyanegamam</option>
                                <option value="4119">Periyapatti</option>
                                <option value="4120">Periyasemur</option>
                                <option value="4121">Pernambut</option>
                                <option value="4122">Perumagalur</option>
                                <option value="4123">Perumandi</option>
                                <option value="4124">Perumuchi</option>
                                <option value="4125">Perundurai</option>
                                <option value="4126">Perungalathur</option>
                                <option value="4127">Perungudi</option>
                                <option value="4128">Perungulam</option>
                                <option value="4129">Perur</option>
                                <option value="4130">Perur Chettipalaiyam</option>
                                <option value="4131">Pethampalayam</option>
                                <option value="4132">Pethanaickenpalayam</option>
                                <option value="4133">Pillanallur</option>
                                <option value="4134">Pirkankaranai</option>
                                <option value="4135">Polichalur</option>
                                <option value="4136">Pollachi</option>
                                <option value="4137">Polur</option>
                                <option value="4138">Ponmani</option>
                                <option value="4139">Ponnamaravathi</option>
                                <option value="4140">Ponnampatti</option>
                                <option value="4141">Ponneri</option>
                                <option value="4142">Porur</option>
                                <option value="4143">Pothanur</option>
                                <option value="4144">Pothatturpettai</option>
                                <option value="4145">Pudukadai</option>
                                <option value="4146">Pudukkottai Cantonment</option>
                                <option value="4147">Pudukottai</option>
                                <option value="4148">Pudupalaiyam Aghraharam</option>
                                <option value="4149">Pudupalayam</option>
                                <option value="4150">Pudupatti</option>
                                <option value="4151">Pudupattinam</option>
                                <option value="4152">Pudur</option>
                                <option value="4153">Puduvayal</option>
                                <option value="4154">Pulambadi</option>
                                <option value="4155">Pulampatti</option>
                                <option value="4156">Puliyampatti</option>
                                <option value="4157">Puliyankudi</option>
                                <option value="4158">Puliyur</option>
                                <option value="4159">Pullampadi</option>
                                <option value="4160">Puluvapatti</option>
                                <option value="4161">Punamalli</option>
                                <option value="4162">Punjai Puliyampatti</option>
                                <option value="4163">Punjai Thottakurichi</option>
                                <option value="4164">Punjaipugalur</option>
                                <option value="4165">Puthalam</option>
                                <option value="4166">Putteri</option>
                                <option value="4167">Puvalur</option>
                                <option value="4168">Puzhal</option>
                                <option value="4169">Puzhithivakkam</option>
                                <option value="4170">Rajapalayam</option>
                                <option value="4171">Ramanathapuram</option>
                                <option value="4172">Ramapuram</option>
                                <option value="4173">Rameswaram</option>
                                <option value="4174">Ranipet</option>
                                <option value="4175">Rasipuram</option>
                                <option value="4176">Rayagiri</option>
                                <option value="4177">Rithapuram</option>
                                <option value="4178">Rosalpatti</option>
                                <option value="4179">Rudravathi</option>
                                <option value="4180">Sadayankuppam</option>
                                <option value="4181">Saint Thomas Mount</option>
                                <option value="4182">Salangapalayam</option>
                                <option value="4183">Salem</option>
                                <option value="4184">Samalapuram</option>
                                <option value="4185">Samathur</option>
                                <option value="4186">Sambavar Vadagarai</option>
                                <option value="4187">Sankaramanallur</option>
                                <option value="4188">Sankarankoil</option>
                                <option value="4189">Sankarapuram</option>
                                <option value="4190">Sankari</option>
                                <option value="4191">Sankarnagar</option>
                                <option value="4192">Saravanampatti</option>
                                <option value="4193">Sarcarsamakulam</option>
                                <option value="4194">Sathiyavijayanagaram</option>
                                <option value="4195">Sathuvachari</option>
                                <option value="4196">Sathyamangalam</option>
                                <option value="4197">Sattankulam</option>
                                <option value="4198">Sattur</option>
                                <option value="4199">Sayalgudi</option>
                                <option value="4200">Sayapuram</option>
                                <option value="4201">Seithur</option>
                                <option value="4202">Sembakkam</option>
                                <option value="4203">Semmipalayam</option>
                                <option value="4204">Sennirkuppam</option>
                                <option value="4205">Senthamangalam</option>
                                <option value="4206">Sentharapatti</option>
                                <option value="4207">Senur</option>
                                <option value="4208">Sethiathoppu</option>
                                <option value="4209">Sevilimedu</option>
                                <option value="4210">Sevugampatti</option>
                                <option value="4211">Shenbakkam</option>
                                <option value="4212">Shencottai</option>
                                <option value="4213">Shenkottai</option>
                                <option value="4214">Sholavandan</option>
                                <option value="4215">Sholinganallur</option>
                                <option value="4216">Sholingur</option>
                                <option value="4217">Sholur</option>
                                <option value="4218">Sikkarayapuram</option>
                                <option value="4219">Singampuneri</option>
                                <option value="4220">Singanallur</option>
                                <option value="4221">Singaperumalkoil</option>
                                <option value="4222">Sirapalli</option>
                                <option value="4223">Sirkali</option>
                                <option value="4224">Sirugamani</option>
                                <option value="4225">Sirumugai</option>
                                <option value="4226">Sithayankottai</option>
                                <option value="4227">Sithurajapuram</option>
                                <option value="4228">Sivaganga</option>
                                <option value="4229">Sivagiri</option>
                                <option value="4230">Sivakasi</option>
                                <option value="4231">Sivanthipuram</option>
                                <option value="4232">Sivur</option>
                                <option value="4233">Soranjeri</option>
                                <option value="4234">South Kannanur</option>
                                <option value="4235">South Kodikulam</option>
                                <option value="4236">Srimushnam</option>
                                <option value="4237">Sriperumpudur</option>
                                <option value="4238">Sriramapuram</option>
                                <option value="4239">Srirangam</option>
                                <option value="4240">Srivaikuntam</option>
                                <option value="4241">Srivilliputtur</option>
                                <option value="4242">Suchindram</option>
                                <option value="4243">Suliswaranpatti</option>
                                <option value="4244">Sulur</option>
                                <option value="4245">Sundarapandiam</option>
                                <option value="4246">Sundarapandiapuram</option>
                                <option value="4247">Surampatti</option>
                                <option value="4248">Surandai</option>
                                <option value="4249">Suriyampalayam</option>
                                <option value="4250">Swamimalai</option>
                                <option value="4251">TNPL Pugalur</option>
                                <option value="4252">Tambaram</option>
                                <option value="4253">Taramangalam</option>
                                <option value="4254">Tattayyangarpettai</option>
                                <option value="4255">Tayilupatti</option>
                                <option value="4256">Tenkasi</option>
                                <option value="4257">Thadikombu</option>
                                <option value="4258">Thakkolam</option>
                                <option value="4259">Thalainayar</option>
                                <option value="4260">Thalakudi</option>
                                <option value="4261">Thamaraikulam</option>
                                <option value="4262">Thammampatti</option>
                                <option value="4263">Thanjavur</option>
                                <option value="4264">Thanthoni</option>
                                <option value="4265">Tharangambadi</option>
                                <option value="4266">Thedavur</option>
                                <option value="4267">Thenambakkam</option>
                                <option value="4268">Thengampudur</option>
                                <option value="4269">Theni</option>
                                <option value="4270">Theni Allinagaram</option>
                                <option value="4271">Thenkarai</option>
                                <option value="4272">Thenthamaraikulam</option>
                                <option value="4273">Thenthiruperai</option>
                                <option value="4274">Thesur</option>
                                <option value="4275">Thevaram</option>
                                <option value="4276">Thevur</option>
                                <option value="4277">Thiagadurgam</option>
                                <option value="4278">Thiagarajar Colony</option>
                                <option value="4279">Thingalnagar</option>
                                <option value="4280">Thiruchirapalli</option>
                                <option value="4281">Thirukarungudi</option>
                                <option value="4282">Thirukazhukundram</option>
                                <option value="4283">Thirumalayampalayam</option>
                                <option value="4284">Thirumazhisai</option>
                                <option value="4285">Thirunagar</option>
                                <option value="4286">Thirunageswaram</option>
                                <option value="4287">Thirunindravur</option>
                                <option value="4288">Thirunirmalai</option>
                                <option value="4289">Thiruparankundram</option>
                                <option value="4290">Thiruparappu</option>
                                <option value="4291">Thiruporur</option>
                                <option value="4292">Thiruppanandal</option>
                                <option value="4293">Thirupuvanam</option>
                                <option value="4294">Thiruthangal</option>
                                <option value="4295">Thiruthuraipundi</option>
                                <option value="4296">Thiruvaivaru</option>
                                <option value="4297">Thiruvalam</option>
                                <option value="4298">Thiruvarur</option>
                                <option value="4299">Thiruvattaru</option>
                                <option value="4300">Thiruvenkatam</option>
                                <option value="4301">Thiruvennainallur</option>
                                <option value="4302">Thiruvithankodu</option>
                                <option value="4303">Thisayanvilai</option>
                                <option value="4304">Thittacheri</option>
                                <option value="4305">Thondamuthur</option>
                                <option value="4306">Thorapadi</option>
                                <option value="4307">Thottipalayam</option>
                                <option value="4308">Thottiyam</option>
                                <option value="4309">Thudiyalur</option>
                                <option value="4310">Thuthipattu</option>
                                <option value="4311">Thuvakudi</option>
                                <option value="4312">Timiri</option>
                                <option value="4313">Tindivanam</option>
                                <option value="4314">Tinnanur</option>
                                <option value="4315">Tiruchchendur</option>
                                <option value="4316">Tiruchengode</option>
                                <option value="4317">Tirukkalukkundram</option>
                                <option value="4318">Tirukkattuppalli</option>
                                <option value="4319">Tirukkoyilur</option>
                                <option value="4320">Tirumangalam</option>
                                <option value="4321">Tirumullaivasal</option>
                                <option value="4322">Tirumuruganpundi</option>
                                <option value="4323">Tirunageswaram</option>
                                <option value="4324">Tirunelveli</option>
                                <option value="4325">Tirupathur</option>
                                <option value="4326">Tirupattur</option>
                                <option value="4327">Tiruppuvanam</option>
                                <option value="4328">Tirupur</option>
                                <option value="4329">Tirusulam</option>
                                <option value="4330">Tiruttani</option>
                                <option value="4331">Tiruvallur</option>
                                <option value="4332">Tiruvannamalai</option>
                                <option value="4333">Tiruverambur</option>
                                <option value="4334">Tiruverkadu</option>
                                <option value="4335">Tiruvethipuram</option>
                                <option value="4336">Tiruvidaimarudur</option>
                                <option value="4337">Tiruvottiyur</option>
                                <option value="4338">Tittakudi</option>
                                <option value="4339">Tondi</option>
                                <option value="4340">Turaiyur</option>
                                <option value="4341">Tuticorin</option>
                                <option value="4342">Udagamandalam</option>
                                <option value="4343">Udagamandalam Valley</option>
                                <option value="4344">Udankudi</option>
                                <option value="4345">Udayarpalayam</option>
                                <option value="4346">Udumalaipettai</option>
                                <option value="4347">Udumalpet</option>
                                <option value="4348">Ullur</option>
                                <option value="4349">Ulundurpettai</option>
                                <option value="4350">Unjalaur</option>
                                <option value="4351">Unnamalaikadai</option>
                                <option value="4352">Uppidamangalam</option>
                                <option value="4353">Uppiliapuram</option>
                                <option value="4354">Urachikkottai</option>
                                <option value="4355">Urapakkam</option>
                                <option value="4356">Usilampatti</option>
                                <option value="4357">Uthangarai</option>
                                <option value="4358">Uthayendram</option>
                                <option value="4359">Uthiramerur</option>
                                <option value="4360">Uthukkottai</option>
                                <option value="4361">Uttamapalaiyam</option>
                                <option value="4362">Uttukkuli</option>
                                <option value="4363">Vadakarai Kizhpadugai</option>
                                <option value="4364">Vadakkanandal</option>
                                <option value="4365">Vadakku Valliyur</option>
                                <option value="4366">Vadalur</option>
                                <option value="4367">Vadamadurai</option>
                                <option value="4368">Vadavalli</option>
                                <option value="4369">Vadipatti</option>
                                <option value="4370">Vadugapatti</option>
                                <option value="4371">Vaithiswarankoil</option>
                                <option value="4372">Valangaiman</option>
                                <option value="4373">Valasaravakkam</option>
                                <option value="4374">Valavanur</option>
                                <option value="4375">Vallam</option>
                                <option value="4376">Valparai</option>
                                <option value="4377">Valvaithankoshtam</option>
                                <option value="4378">Vanavasi</option>
                                <option value="4379">Vandalur</option>
                                <option value="4380">Vandavasi</option>
                                <option value="4381">Vandiyur</option>
                                <option value="4382">Vaniputhur</option>
                                <option value="4383">Vaniyambadi</option>
                                <option value="4384">Varadarajanpettai</option>
                                <option value="4385">Varadharajapuram</option>
                                <option value="4386">Vasudevanallur</option>
                                <option value="4387">Vathirairuppu</option>
                                <option value="4388">Vattalkundu</option>
                                <option value="4389">Vazhapadi</option>
                                <option value="4390">Vedapatti</option>
                                <option value="4391">Vedaranniyam</option>
                                <option value="4392">Vedasandur</option>
                                <option value="4393">Velampalaiyam</option>
                                <option value="4394">Velankanni</option>
                                <option value="4395">Vellakinar</option>
                                <option value="4396">Vellakoil</option>
                                <option value="4397">Vellalapatti</option>
                                <option value="4398">Vellalur</option>
                                <option value="4399">Vellanur</option>
                                <option value="4400">Vellimalai</option>
                                <option value="4401">Vellore</option>
                                <option value="4402">Vellottamparappu</option>
                                <option value="4403">Velluru</option>
                                <option value="4404">Vengampudur</option>
                                <option value="4405">Vengathur</option>
                                <option value="4406">Vengavasal</option>
                                <option value="4407">Venghatur</option>
                                <option value="4408">Venkarai</option>
                                <option value="4409">Vennanthur</option>
                                <option value="4410">Veppathur</option>
                                <option value="4411">Verkilambi</option>
                                <option value="4412">Vettaikaranpudur</option>
                                <option value="4413">Vettavalam</option>
                                <option value="4414">Vijayapuri</option>
                                <option value="4415">Vikramasingapuram</option>
                                <option value="4416">Vikravandi</option>
                                <option value="4417">Vilangudi</option>
                                <option value="4418">Vilankurichi</option>
                                <option value="4419">Vilapakkam</option>
                                <option value="4420">Vilathikulam</option>
                                <option value="4421">Vilavur</option>
                                <option value="4422">Villukuri</option>
                                <option value="4423">Villupuram</option>
                                <option value="4424">Viraganur</option>
                                <option value="4425">Virakeralam</option>
                                <option value="4426">Virakkalpudur</option>
                                <option value="4427">Virapandi</option>
                                <option value="4428">Virapandi Cantonment</option>
                                <option value="4429">Virappanchatram</option>
                                <option value="4430">Viravanallur</option>
                                <option value="4431">Virudambattu</option>
                                <option value="4432">Virudhachalam</option>
                                <option value="4433">Virudhunagar</option>
                                <option value="4434">Virupakshipuram</option>
                                <option value="4435">Viswanatham</option>
                                <option value="4436">Vriddhachalam</option>
                                <option value="4437">Walajabad</option>
                                <option value="4438">Walajapet</option>
                                <option value="4439">Wellington</option>
                                <option value="4440">Yercaud</option>
                                <option value="4441">Zameen Uthukuli</option>
                              </select>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Postal / Zipcode</label>
                              <input name="postal" type="text" class="form-control valid" id="postal" onkeyup="clearText('postal')" aria-invalid="false">
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;"><label for="template-contactform-name">Whatsapp Number <small>*</small></label></div>
                            <div class="row">
                              <div class="col-sm mb-2"><input type="text" readonly="readonly" name="txtCC" id="txtCC" class="form-control valid" value="91" aria-invalid="false"></div>
                              <div class="col-sm"><input name="whatsapp_number" type="text" class="form-control" id="whatsapp_number" placeholder="Whatsapp Number" onkeyup="check_phone('whatsapp_number')" maxlength="12" value="">
                              </div>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Mobile <small>*</small></label>
                            </div>
                            <div class="row">
                              <div class="col-sm mb-2"><input type="text" readonly="readonly" name="txtMC" id="txtMC" class="form-control" value="91"></div>
                              <div class="col-sm mb-2"><input name="mobile" type="text" class="form-control" id="mobile" maxlength="12" value="9677333550" onkeyup="ChkValidChar();">
                              </div>
                            </div>


                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Residence Status</label>
                              <select name="residence_status" class="form-select" id="residence_status">
                                <option value="Citizen" selected="">Citizen</option>
                                <option value="Permanent Resident">Permanent Resident</option>
                                <option value="Student Visa">Student Visa</option>
                                <option value="Temporary Visa">Temporary Visa</option>
                                <option value="Work permit">Work permit</option>
                              </select>
                            </div>
                            <div class="col_full">
                              <button name="submit" type="submit" onclick="MatriFormEdit()" id="submit-button" value="Submit" class="btn mug-btn-a">Save Now </button>
                            </div>
                          </form>

                        </div>
                      </div>
                      <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile1-tab">
                        <div class="heading-block py-3">
                          <h3>Edit Profile</h3>
                        </div>
                        <div class="col-md-12">

                          <form method="post" name="DescripForm" id="DescripForm" class="form" novalidate="novalidate">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <input type="hidden" name="form_key" id="form_key" value="6">
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="template-contactform-name">Profile Description <small>*</small></label>
                              <textarea name="profile_description" id="profile_description" rows="7" onkeyup="clearText('profile_description')" class="form-control h-auto"></textarea>
                              <small>Please enter details or provide a brief description about yourself. <span class="style2">Max 1000</span> characters. If Profile contains any information
                                regarding your contact details, such as e-mail, phone number, etc., your profile will be
                                rejected.</small>
                            </div>
                            <div class="col_full">
                              <button name="submit" type="submit" onclick="DescripFormEdit()" id="submit-button" value="Submit" class="btn mug-btn-a">Save Now </button>
                            </div>
                          </form>
                        </div>
                      </div>


                      <div class="tab-pane fade" id="family" role="tabpanel" aria-labelledby="family-tab">
                        <div class="heading-block py-3">
                          <h3>Edit Family Details</h3>
                        </div>
                        <div class="col-md-12">

                          <form method="post" name="FamilyForm" id="FamilyForm" class="form">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <input type="hidden" name="form_key" id="form_key" value="7">
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Family Details</label>
                              <textarea name="family_details" type="text" class="form-control h-auto" id="family_details" maxlength="150" onkeyup="clearText('family_details')"></textarea>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Family Values </label>
                              <select name="family_values" class="form-select" id="family_values">
                                <option value="Traditional" selected="">Traditional</option>
                                <option value="Orthodox">Orthodox</option>
                                <option value="Liberal">Liberal</option>
                                <option value="Moderate">Moderate</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Family Type </label>
                              <select name="family_type" class="form-select" id="family_type">
                                <option value="Separate Family" selected="">Seperate Family</option>
                                <option value="Joint Family">Joint Family</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Family Status </label>
                              <select name="family_status" type="text" class="form-select" id="family_status">
                                <option value="Rich">Rich</option>
                                <option value="Upper Middle Class">Upper Middle Class</option>
                                <option value="Lower Middle Class" selected="">Lower Middle Class</option>
                                <option value="High Class">High Class</option>
                                <option value="Middle Class">Middle Class</option>
                                <option value="Do not want to tell at this time">Do not want to tell at this time
                                </option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Family Origin </label>
                              <input name="family_origin" type="text" class="form-control" id="family_origin" maxlength="20" value="" onkeyup="clearText('family_origin')">
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>No of Brothers </label>
                            </div>
                            <div class="row">
                              <div class="col-sm" style="magin-bottom:10ox;">
                                <label>Elder </label>
                              </div>
                              <div class="col-sm" style="magin-bottom:10ox;">
                                <select name="noof_bro" class="form-select" id="noof_bro" onchange="updtbromard()">
                                  <option value="0" selected="">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="4 +">4 +</option>
                                </select>
                              </div>
                              <div class="col-sm" style="magin-bottom:10ox;">
                                <label>Younger </label>
                              </div>
                              <div class="col-sm" style="magin-bottom:10ox;">
                                <select name="noyu_bro" class="form-select" id="noyu_bro" onchange="updtbromard()">
                                  <option value="0" selected="">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="4 +">4 +</option>
                                </select>
                              </div>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>No of Sisters </label>
                            </div>
                            <div class="row">
                              <div class="col-sm" style="magin-bottom:10ox;">
                                <label>Elder </label>
                              </div>
                              <div class="col-sm" style="magin-bottom:10ox;">
                                <select name="noof_sis" class="form-select" id="noof_sis" onchange="updtsismard()">
                                  <option value="0" selected="">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="4 +">4 +</option>
                                </select>
                              </div>
                              <div class="col-sm" style="magin-bottom:10ox;">
                                <label>Younger </label>
                              </div>
                              <div class="col-sm" style="magin-bottom:10ox;">
                                <select name="noyu_sis" class="form-select" id="noyu_sis" onchange="updtsismard()">
                                  <option value="0" selected="">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="4 +">4 +</option>
                                </select>
                              </div>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>No of Brothers Married </label>
                              <select name="nbm" class="form-select" id="nbm">
                                <option value="" selected="selected">---------- SELECT ----------</option>
                                <option value="No married brother">No married brother</option>
                                <option value="One married brother">One married brother</option>
                                <option value="Two married brothers">Two married brother</option>
                                <option value="Three married brothers">Three married brother</option>
                                <option value="Four married brothers">Four married brothers</option>
                                <option value="Above four married brothers">Above four married brother</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>No of Sisiters Married </label>
                              <select name="nsm" class="form-select" id="nsm">
                                <option value="" selected="selected">---------- SELECT ----------</option>
                                <option value="No married sister">No married sister</option>
                                <option value="One married sister">One married sister</option>
                                <option value="Two married sisters">Two married sisters</option>
                                <option value="Three married sisters">Three married sisters</option>
                                <option value="Four married sisters">Four married sisters</option>
                                <option value="Above four married sisters">Above four married sisters</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Father Name </label>
                              <input name="father_name" type="text" class="form-control" id="father_name" maxlength="50" value="" onkeyup="clearText('father_name')">
                            </div>
                            <div class="row">
                              <div class="col-sm" style=" margin-bottom: 10px;">
                                <input name="father_livin_status" id="father_livin_status" type="radio" class="required" value="Alive"> <label class="radio_button">Alive</label> &nbsp; <input name="father_livin_status" id="father_livin_status" type="radio" class="required" value="Not Alive"> <label>Not Alive</label>
                              </div>
                              <div class="col-sm" style=" margin-bottom: 10px;">
                                <label>Father Occupation </label>
                                <input name="father_occ" type="text" class="form-control" id="father_occ" maxlength="50" onkeyup="clearText('father_occ')" value="">
                              </div>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Mother Name </label>
                              <input name="mother_name" type="text" class="form-control" id="mother_name" maxlength="50" value="" onkeyup="clearText('mother_name')">
                            </div>
                            <div class="row">
                              <div class="col-sm" style=" margin-bottom: 10px;">
                                <input name="mother_livin_status" id="mother_livin_status" type="radio" class="required" value="Alive"> <label class="radio_button">Alive</label> &nbsp; <input name="mother_livin_status" id="mother_livin_status" type="radio" class="required" value="Not Alive"> <label>Not Alive</label>
                              </div>
                              <div class="col-sm" style=" margin-bottom: 10px;">
                                <label>Mother Occupation </label>
                                <input name="mother_occ" type="text" class="form-control" id="mother_occ" maxlength="50" onkeyup="clearText('mother_occ')" value="">
                              </div>
                            </div>
                            <div class="col_full">
                              <button name="submit" onclick="FamilyFormEdit()" type="submit" id="submit-button" value="Submit" class="btn mug-btn-a">Save Now </button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="partner1" role="tabpanel" aria-labelledby="partner1-tab">
                        <div class="heading-block py-3">
                          <h3>Edit Partner Preference </h3>
                        </div>
                        <div class="col-md-12">

                          <form method="post" name="PartnerForm" id="PartnerForm" class="form" novalidate="novalidate" data-gtm-form-interact-id="1">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <input type="hidden" name="form_key" id="form_key" value="8">
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Looking for <small>*</small></label>
                              <select name="looking_for[]" multiple="multiple" class="form-select " id="looking_for" data-gtm-form-interact-field-id="2" aria-invalid="false">
                                <option value="Unmarried" selected="">Never Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Seperated">Seperated</option>
                              </select>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Age <small>*</small></label>
                            </div>
                            <div class="row">
                              <div class="col-md-1"> From </div>
                              <div class="col-md-5">
                                <select name="from_age" class="form-select" id="from_age">
                                  <option value="18" selected="">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31">31</option>
                                  <option value="32">32</option>
                                  <option value="33">33</option>
                                  <option value="34">34</option>
                                  <option value="35">35</option>
                                  <option value="36">36</option>
                                  <option value="37">37</option>
                                  <option value="38">38</option>
                                  <option value="39">39</option>
                                  <option value="40">40</option>
                                  <option value="41">41</option>
                                  <option value="42">42</option>
                                  <option value="43">43</option>
                                  <option value="44">44</option>
                                  <option value="45">45</option>
                                  <option value="46">46</option>
                                  <option value="47">47</option>
                                  <option value="48">48</option>
                                  <option value="49">49</option>
                                  <option value="50">50</option>
                                  <option value="51">51</option>
                                  <option value="52">52</option>
                                  <option value="53">53</option>
                                  <option value="54">54</option>
                                  <option value="55">55</option>
                                  <option value="56">56</option>
                                  <option value="57">57</option>
                                  <option value="58">58</option>
                                  <option value="59">59</option>
                                  <option value="60">60</option>
                                </select>
                              </div>
                              <div class="col-md-1"> To </div>
                              <div class="col-md-5 col_last">
                                <select name="to_age" class="form-select" id="to_age">
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23" selected="">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31">31</option>
                                  <option value="32">32</option>
                                  <option value="33">33</option>
                                  <option value="34">34</option>
                                  <option value="35">35</option>
                                  <option value="36">36</option>
                                  <option value="37">37</option>
                                  <option value="38">38</option>
                                  <option value="39">39</option>
                                  <option value="40">40</option>
                                  <option value="41">41</option>
                                  <option value="42">42</option>
                                  <option value="43">43</option>
                                  <option value="44">44</option>
                                  <option value="45">45</option>
                                  <option value="46">46</option>
                                  <option value="47">47</option>
                                  <option value="48">48</option>
                                  <option value="49">49</option>
                                  <option value="50">50</option>
                                  <option value="51">51</option>
                                  <option value="52">52</option>
                                  <option value="53">53</option>
                                  <option value="54">54</option>
                                  <option value="55">55</option>
                                  <option value="56">56</option>
                                  <option value="57">57</option>
                                  <option value="58">58</option>
                                  <option value="59">59</option>
                                  <option value="60">60</option>
                                </select>
                              </div>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Expectations</label>
                              <textarea name="partner_expectations" class="form-control" id="partner_expectations" maxlength="150" onkeyup="clearText('partner_expectations')"></textarea>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Country Living In</label>
                              <select name="pe_country" class="form-select" aria-required="true" id="pe_country">
                                <option value="101" data-code="91">India</option>
                                <!-- <option value="256">Czeck Republic</option>
                                <option value="231">USA</option>
                                <option value="38">Canada</option>
                                <option value="230">United Kingdom</option>
                                <option value="13">Australia</option>
                                <option value="1">Afghanistan</option>
                                <option value="2">Albania</option>
                                <option value="3">Algeria</option>
                                <option value="4">American Samoa</option>
                                <option value="5">Andorra</option>
                                <option value="6">Angola</option>
                                <option value="7">Anguilla</option>
                                <option value="8">Antarctica</option>
                                <option value="9">Antigua and Barbuda</option>
                                <option value="10">Argentina</option>
                                <option value="11">Armenia</option>
                                <option value="12">Aruba</option>
                                <option value="14">Austria</option>
                                <option value="15">Azerbaijan</option>
                                <option value="16">Bahamas</option>
                                <option value="17">Bahrain</option>
                                <option value="18">Bangladesh</option>
                                <option value="19">Barbados</option>
                                <option value="20">Belarus</option>
                                <option value="21">Belgium</option>
                                <option value="22">Belize</option>
                                <option value="23">Benin</option>
                                <option value="24">Bermuda</option>
                                <option value="25">Bhutan</option>
                                <option value="26">Bolivia</option>
                                <option value="27">Bosnia and Herzegovina</option>
                                <option value="28">Botswana</option>
                                <option value="29">Bouvet Island</option>
                                <option value="30">Brazil</option>
                                <option value="31">British Indian Ocean Territory</option>
                                <option value="32">Brunei Darussalam</option>
                                <option value="33">Bulgaria</option>
                                <option value="34">Burkina Faso</option>
                                <option value="35">Burundi</option>
                                <option value="36">Cambodia</option>
                                <option value="37">Cameroon</option>
                                <option value="39">Cape Verde</option>
                                <option value="40">Cayman Islands</option>
                                <option value="41">Central African Republic</option>
                                <option value="42">Chad</option>
                                <option value="43">Chile</option>
                                <option value="44">China</option>
                                <option value="45">Christmas Island</option>
                                <option value="46">Cocos (Keeling) Islands</option>
                                <option value="47">Colombia</option>
                                <option value="48">Comoros</option>
                                <option value="49">Congo</option>
                                <option value="50">Congo, the Democratic Republic of the</option>
                                <option value="51">Cook Islands</option>
                                <option value="52">Costa Rica</option>
                                <option value="53">Cote D'Ivoire</option>
                                <option value="54">Croatia</option>
                                <option value="55">Cuba</option>
                                <option value="56">Cyprus</option>
                                <option value="57">Czech Republic</option>
                                <option value="58">Denmark</option>
                                <option value="59">Djibouti</option>
                                <option value="60">Dominica</option>
                                <option value="61">Dominican Republic</option>
                                <option value="62">East Timor</option>
                                <option value="63">Ecuador</option>
                                <option value="64">Egypt</option>
                                <option value="65">El Salvador</option>
                                <option value="66">Equatorial Guinea</option>
                                <option value="67">Eritrea</option>
                                <option value="68">Estonia</option>
                                <option value="69">Ethiopia</option>
                                <option value="70">External Territories of Australia</option>
                                <option value="71">Falkland Islands (Malvinas)</option>
                                <option value="72">Faroe Islands</option>
                                <option value="73">Fiji</option>
                                <option value="74">Finland</option>
                                <option value="75">France</option>
                                <option value="76">French Guiana</option>
                                <option value="77">French Polynesia</option>
                                <option value="78">French Southern Territories</option>
                                <option value="79">Gabon</option>
                                <option value="80">Gambia</option>
                                <option value="81">Georgia</option>
                                <option value="82">Germany</option>
                                <option value="83">Ghana</option>
                                <option value="84">Gibraltar</option>
                                <option value="85">Greece</option>
                                <option value="86">Greenland</option>
                                <option value="87">Grenada</option>
                                <option value="88">Guadeloupe</option>
                                <option value="89">Guam</option>
                                <option value="90">Guatemala</option>
                                <option value="91">Guernsey and Alderney</option>
                                <option value="92">Guinea</option>
                                <option value="93">Guinea-Bissau</option>
                                <option value="94">Guyana</option>
                                <option value="95">Haiti</option>
                                <option value="96">Heard Island and Mcdonald Islands</option>
                                <option value="97">Honduras</option>
                                <option value="98">Hong Kong</option>
                                <option value="99">Hungary</option>
                                <option value="100">Iceland</option>
                                <option value="102">Indonesia</option>
                                <option value="103">Iran, Islamic Republic of</option>
                                <option value="104">Iraq</option>
                                <option value="105">Ireland</option>
                                <option value="106">Israel</option>
                                <option value="107">Italy</option>
                                <option value="108">Jamaica</option>
                                <option value="109">Japan</option>
                                <option value="110">Jersey</option>
                                <option value="111">Jordan</option>
                                <option value="112">Kazakhstan</option>
                                <option value="113">Kenya</option>
                                <option value="114">Kiribati</option>
                                <option value="115">Korea, Democratic People's Republic of</option>
                                <option value="116">Korea, Republic of</option>
                                <option value="117">Kuwait</option>
                                <option value="118">Kyrgyzstan</option>
                                <option value="119">Lao People's Democratic Republic</option>
                                <option value="120">Latvia</option>
                                <option value="121">Lebanon</option>
                                <option value="122">Lesotho</option>
                                <option value="123">Liberia</option>
                                <option value="124">Libyan Arab Jamahiriya</option>
                                <option value="125">Liechtenstein</option>
                                <option value="126">Lithuania</option>
                                <option value="127">Luxembourg</option>
                                <option value="128">Macao</option>
                                <option value="129">Macedonia, the Former Yugoslav Republic of</option>
                                <option value="130">Madagascar</option>
                                <option value="131">Malawi</option>
                                <option value="132">Malaysia</option>
                                <option value="133">Maldives</option>
                                <option value="134">Mali</option>
                                <option value="135">Malta</option>
                                <option value="136">Man (Isle of)</option>
                                <option value="137">Marshall Islands</option>
                                <option value="138">Martinique</option>
                                <option value="139">Mauritania</option>
                                <option value="140">Mauritius</option>
                                <option value="141">Mayotte</option>
                                <option value="142">Mexico</option>
                                <option value="143">Micronesia, Federated States of</option>
                                <option value="144">Moldova, Republic of</option>
                                <option value="145">Monaco</option>
                                <option value="146">Mongolia</option>
                                <option value="147">Montserrat</option>
                                <option value="148">Morocco</option>
                                <option value="149">Mozambique</option>
                                <option value="150">Myanmar</option>
                                <option value="151">Namibia</option>
                                <option value="152">Nauru</option>
                                <option value="153">Nepal</option>
                                <option value="154">Netherlands Antilles</option>
                                <option value="155">Netherlands</option>
                                <option value="156">New Caledonia</option>
                                <option value="157">New Zealand</option>
                                <option value="158">Nicaragua</option>
                                <option value="159">Niger</option>
                                <option value="160">Nigeria</option>
                                <option value="161">Niue</option>
                                <option value="162">Norfolk Island</option>
                                <option value="163">Northern Mariana Islands</option>
                                <option value="164">Norway</option>
                                <option value="165">Oman</option>
                                <option value="166">Pakistan</option>
                                <option value="167">Palau</option>
                                <option value="168">Palestinian Territory, Occupied</option>
                                <option value="169">Panama</option>
                                <option value="170">Papua New Guinea</option>
                                <option value="171">Paraguay</option>
                                <option value="172">Peru</option>
                                <option value="173">Philippines</option>
                                <option value="174">Pitcairn</option>
                                <option value="175">Poland</option>
                                <option value="176">Portugal</option>
                                <option value="177">Puerto Rico</option>
                                <option value="178">Qatar</option>
                                <option value="179">Reunion</option>
                                <option value="180">Romania</option>
                                <option value="181">Russian Federation</option>
                                <option value="182">Rwanda</option>
                                <option value="183">Saint Helena</option>
                                <option value="184">Saint Kitts and Nevis</option>
                                <option value="185">Saint Lucia</option>
                                <option value="186">Saint Pierre and Miquelon</option>
                                <option value="187">Saint Vincent and the Grenadines</option>
                                <option value="188">Samoa</option>
                                <option value="189">San Marino</option>
                                <option value="190">Sao Tome and Principe</option>
                                <option value="191">Saudi Arabia</option>
                                <option value="192">Senegal</option>
                                <option value="193">Serbia</option>
                                <option value="194">Seychelles</option>
                                <option value="195">Sierra Leone</option>
                                <option value="196">Singapore</option>
                                <option value="197">Slovakia</option>
                                <option value="198">Slovenia</option>
                                <option value="199">Smaller Territories of the UK</option>
                                <option value="200">Solomon Islands</option>
                                <option value="201">Somalia</option>
                                <option value="202">South Africa</option>
                                <option value="203">South Georgia and the South Sandwich Islands</option>
                                <option value="204">South Sudan</option>
                                <option value="205">Spain</option>
                                <option value="206">Sri Lanka</option>
                                <option value="207">Sudan</option>
                                <option value="208">Suriname</option>
                                <option value="209">Svalbard and Jan Mayen</option>
                                <option value="210">Swaziland</option>
                                <option value="211">Sweden</option>
                                <option value="212">Switzerland</option>
                                <option value="213">Syrian Arab Republic</option>
                                <option value="214">Taiwan, Province of China</option>
                                <option value="215">Tajikistan</option>
                                <option value="216">Tanzania, United Republic of</option>
                                <option value="217">Thailand</option>
                                <option value="218">Togo</option>
                                <option value="219">Tokelau</option>
                                <option value="220">Tonga</option>
                                <option value="221">Trinidad and Tobago</option>
                                <option value="222">Tunisia</option>
                                <option value="223">Turkey</option>
                                <option value="224">Turkmenistan</option>
                                <option value="225">Turks and Caicos Islands</option>
                                <option value="226">Tuvalu</option>
                                <option value="227">Uganda</option>
                                <option value="228">Ukraine</option>
                                <option value="229">United Arab Emirates</option>
                                <option value="232">United States Minor Outlying Islands</option>
                                <option value="233">Uruguay</option>
                                <option value="234">Uzbekistan</option>
                                <option value="235">Vanuatu</option>
                                <option value="236">Vatican City State (Holy See)</option>
                                <option value="237">Venezuela</option>
                                <option value="238">Viet Nam</option>
                                <option value="239">Virgin Islands, British</option>
                                <option value="240">Virgin Islands, U.s.</option>
                                <option value="241">Wallis and Futuna</option>
                                <option value="242">Western Sahara</option>
                                <option value="243">Yemen</option>
                                <option value="244">Yugoslavia</option>
                                <option value="245">Zambia</option>
                                <option value="246">Zimbabwe</option> -->
                              </select>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Height</label>
                            </div>
                            <div class="row">
                              <div class="col-md-1"> From </div>
                              <div class="col-md-5">
                                <select name="pe_height" class="form-select" id="pe_height">
                                  <option value="0" selected="">4ft ( 121 cm )</option>
                                  <option value="1">4ft 1in ( 124cm )</option>
                                  <option value="2">4ft 2in ( 127cm )</option>
                                  <option value="3">4ft 3in ( 129cm )</option>
                                  <option value="4">4ft 4in ( 132cm )</option>
                                  <option value="5">4ft 5in ( 134cm )</option>
                                  <option value="6">4ft 6in ( 137cm )</option>
                                  <option value="7">4ft 7in ( 139cm )</option>
                                  <option value="8">4ft 8in ( 142cm )</option>
                                  <option value="9">4ft 9in ( 144cm )</option>
                                  <option value="10">4ft 10in ( 147cm )</option>
                                  <option value="11">4ft 11in ( 149cm )</option>
                                  <option value="12">5ft ( 152cm )</option>
                                  <option value="13">5ft 1in ( 154cm )</option>
                                  <option value="14">5ft 2in ( 157cm )</option>
                                  <option value="15">5ft 3in ( 160cm )</option>
                                  <option value="16">5ft 4in ( 162cm )</option>
                                  <option value="17">5ft 5in ( 165cm )</option>
                                  <option value="18">5ft 6in ( 167cm )</option>
                                  <option value="19">5ft 7in ( 170cm )</option>
                                  <option value="20">5ft 8in ( 172cm )</option>
                                  <option value="21">5ft 9in ( 175cm )</option>
                                  <option value="22">5ft 10in ( 177cm )</option>
                                  <option value="23">5ft 11in ( 180cm )</option>
                                  <option value="24">6ft ( 182cm )</option>
                                  <option value="25">6ft 1in ( 185cm )</option>
                                  <option value="26">6ft 2in ( 187cm )</option>
                                  <option value="27">6ft 3in ( 190cm )</option>
                                  <option value="28">6ft 4in ( 193cm )</option>
                                  <option value="29">6ft 5in ( 195cm )</option>
                                  <option value="30">6ft 6in ( 198cm )</option>
                                  <option value="31">6ft 7in ( 200cm )</option>
                                  <option value="32">6ft 8in ( 203cm )</option>
                                  <option value="33">6ft 9in ( 205cm )</option>
                                  <option value="34">6ft 10in ( 208cm )</option>
                                  <option value="35">6ft 11in ( 210cm )</option>
                                  <option value="36">7ft ( 213cm )</option>
                                </select>
                              </div>
                              <div class="col-md-1"> To </div>
                              <div class="col-md-5 col_last">
                                <select name="pe_height2" class="form-select" id="pe_height2">
                                  <option value="0" selected="">4ft ( 121 cm )</option>
                                  <option value="1">4ft 1in ( 124cm )</option>
                                  <option value="2">4ft 2in ( 127cm )</option>
                                  <option value="3">4ft 3in ( 129cm )</option>
                                  <option value="4">4ft 4in ( 132cm )</option>
                                  <option value="5">4ft 5in ( 134cm )</option>
                                  <option value="6">4ft 6in ( 137cm )</option>
                                  <option value="7">4ft 7in ( 139cm )</option>
                                  <option value="8">4ft 8in ( 142cm )</option>
                                  <option value="9">4ft 9in ( 144cm )</option>
                                  <option value="10">4ft 10in ( 147cm )</option>
                                  <option value="11">4ft 11in ( 149cm )</option>
                                  <option value="12">5ft ( 152cm )</option>
                                  <option value="13">5ft 1in ( 154cm )</option>
                                  <option value="14">5ft 2in ( 157cm )</option>
                                  <option value="15">5ft 3in ( 160cm )</option>
                                  <option value="16">5ft 4in ( 162cm )</option>
                                  <option value="17">5ft 5in ( 165cm )</option>
                                  <option value="18">5ft 6in ( 167cm )</option>
                                  <option value="19">5ft 7in ( 170cm )</option>
                                  <option value="20">5ft 8in ( 172cm )</option>
                                  <option value="21">5ft 9in ( 175cm )</option>
                                  <option value="22">5ft 10in ( 177cm )</option>
                                  <option value="23">5ft 11in ( 180cm )</option>
                                  <option value="24">6ft ( 182cm )</option>
                                  <option value="25">6ft 1in ( 185cm )</option>
                                  <option value="26">6ft 2in ( 187cm )</option>
                                  <option value="27">6ft 3in ( 190cm )</option>
                                  <option value="28">6ft 4in ( 193cm )</option>
                                  <option value="29">6ft 5in ( 195cm )</option>
                                  <option value="30">6ft 6in ( 198cm )</option>
                                  <option value="31">6ft 7in ( 200cm )</option>
                                  <option value="32">6ft 8in ( 203cm )</option>
                                  <option value="33">6ft 9in ( 205cm )</option>
                                  <option value="34">6ft 10in ( 208cm )</option>
                                  <option value="35">6ft 11in ( 210cm )</option>
                                  <option value="36">7ft ( 213cm )</option>
                                </select>
                              </div>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Complexion</label>
                              <select name="pe_complexion" class="form-select" id="pe_complexion">
                                <option value="Does Not Matter">Does Not Matter</option>
                                <option value="Very Fair">Very Fair</option>
                                <option value="Fair">Fair</option>
                                <option value="Wheatish">Wheatish</option>
                                <option value="Wheatish Medium">Wheatish Medium</option>
                                <option value="Wheatish Brown">Wheatish Brown</option>
                                <option value="Dark">Dark</option>
                              </select>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Education</label>
                              <select name="pe_education" class="form-select" id="pe_education">
                                <option value="">Does not matter</option>
                                <option value="35">Company Secretary</option>
                                <option value="34">Others</option>
                                <option value="33">Medicine</option>
                                <option value="32">High School- 10th</option>
                                <option value="31">Nil</option>
                                <option value="30">Legal law</option>
                                <option value="29">Management Degree</option>
                                <option value="28">Chartered Accountant</option>
                                <option value="1">Less Than High School</option>
                                <option value="2">High School - 10th</option>
                                <option value="3">Higher Secondary - 12th</option>
                                <option value="4">Diploma in ITI</option>
                                <option value="5">Diploma in AMIE</option>
                                <option value="6">Bachelors in Arts</option>
                                <option value="7">Bachelors in Science</option>
                                <option value="8">Bachelors in Commerce</option>
                                <option value="9">Bachelors In Computers</option>
                                <option value="10">Bachelors in Engineering</option>
                                <option value="11">Bachelors in Education</option>
                                <option value="12">Bachelors in Technology</option>
                                <option value="13">Masters in Arts</option>
                                <option value="14">Masters in Science</option>
                                <option value="15">Masters in Commerce</option>
                                <option value="16">Masters in Computers</option>
                                <option value="17">Masters in Engineering</option>
                                <option value="18">Masters in Education</option>
                                <option value="19">Masters in Technology</option>
                                <option value="20">Management - BBA/MBA/Others</option>
                                <option value="21">Legal (Law) - BL/ML/LLB/others</option>
                                <option value="22">Medicine - General/Dental/Surgeon/Others</option>
                                <option value="23">ACA/FCA/Chartered Accountant</option>
                                <option value="24">ACA/FCA - Company Secretary</option>
                                <option value="25">ICWA</option>
                                <option value="26">PhD</option>
                                <option value="27">Services - IAS/IPS/Others</option>
                              </select>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Community <small>*</small></label>
                              <select name="pe_religion" class="form-select" id="pe_religion" aria-required="true">
                                <option value="5" selected="">Iyengar</option>
                                <option value="18">Iyer</option>
                                <option value="19">Madhwa</option>
                                <option value="20">Chettiyar</option>
                                <option value="21">Naidu</option>
                                <option value="22">Vanniyar</option>
                                <option value="23">Mudaliyar</option>
                                <option value="24">Yadava</option>
                                <option value="25">Rediyyar</option>
                                <option value="26">Naicker</option>
                                <option value="27">Kshatriya / Raja</option>
                                <option value="28">Kallar</option>
                                <option value="29">Vishwakarma / Vishwabrahmin</option>
                                <option value="30">Adi Dravida</option>
                                <option value="31">Saiva Pillai</option>
                                <option value="32">Nadar</option>
                                <option value="33">Devar/Thevar</option>
                              </select>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Sub-Section <small>*</small></label>
                              <div id="partnercastediv">
                                <select name="pe_caste" class="form-select" id="pe_caste" aria-required="true">
                                  <option value="3" selected="">Thenkalai</option>
                                  <option value="6">Vadakalai</option>
                                  <option value="7">Hebbar</option>
                                  <option value="8">Mandyam</option>
                                  <option value="9">Chozhiar</option>
                                </select>
                              </div>
                            </div>

                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Resident Status</label>
                              <select name="pe_residentsstatus" class="form-select" id="pe_residentsstatus">
                                <option value="Does not Matter" selected="">Does not Matter</option>
                                <option value="Citizen">Citizen</option>
                                <option value="Permanent Resident">Permanent Resident</option>
                                <option value="Student Visa">Student Visa</option>
                                <option value="Temporary Visa">Temporary Visa</option>
                                <option value="Work permit">Work permit</option>
                              </select>
                            </div>

                            <div class="col_full">
                              <button name="submit" type="submit" onclick="PartnerFormEdit()" id="submit-button" value="Submit" class="btn mug-btn-a">Save Now
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="hobby1" role="tabpanel" aria-labelledby="hobby1-tab">
                        <div class="heading-block py-3">
                          <h3>Edit Hobbies and Interest</h3>
                        </div>
                        <div class="col-md-12">
                          <form method="post" name="HobbyForm" id="HobbyForm" class="form">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <input type="hidden" name="form_key" id="form_key" value="9">
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="Hobbies">Hobbies</label>
                              <select name="hobbies[]" id="hobbies" multiple="multiple" class="form-select">
                                <option value="Acting">Acting</option>
                                <option value="Astronomy">Astronomy</option>
                                <option value="Astrology">Astrology</option>
                                <option value="Collectibles">Collectibles</option>
                                <option value="Cooking">Cooking</option>
                                <option value="Crosswords">Crosswords</option>
                                <option value="Dancing">Dancing</option>
                                <option value="Film-making">Film-making</option>
                                <option value="Gardening/ landscaping">Gardening/ landscaping</option>
                                <option value="Graphology">Graphology</option>
                                <option value="Nature">Nature</option>
                                <option value="Numerology">Numerology</option>
                                <option value="Painting">Painting</option>
                                <option value="Palmistry">Palmistry</option>
                                <option value="Pets">Pets</option>
                                <option value="Photography">Photography</option>
                                <option value="Playing musical instruments">Playing musical instruments</option>
                                <option value="Puzzles">Puzzles</option>
                                <option value="No Hobbies">No Hobbies</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="Other Hobby">Other Hobby</label>
                              <input type="text" name="other_hobbies" id="other_hobbies" maxlength="50" class="form-control" value="Cricket" onkeyup="clearText('other_hobbies')">
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="Interests">Interests</label>
                              <select name="interests[]" id="interests" multiple="multiple" class="form-select">
                                <option value="Adventure sports">Adventure sports</option>
                                <option value="Book clubs">Book clubs</option>
                                <option value="Computer games">Computer games</option>
                                <option value="Health &amp; fitness">Health &amp; fitness</option>
                                <option value="Internet">Internet</option>
                                <option value="Learning new languages">Learning new languages</option>
                                <option value="Movies">Movies</option>
                                <option value="Music">Music</option>
                                <option value="Politics">Politics</option>
                                <option value="Reading">Reading</option>
                                <option value="Social service">Social service</option>
                                <option value="Sports">Sports</option>
                                <option value="Television">Television</option>
                                <option value="Theatre">Theatre</option>
                                <option value="Travel">Travel</option>
                                <option value="Writing">Writing</option>
                                <option value="Yoga">Yoga</option>
                                <option value="Alternative healing / medicine">Alternative healing / medicine</option>
                                <option value="No interest">No interest</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label for="Other Interest">Other Interest</label>
                              <input type="text" name="other_interests" id="other_interests" class="form-control">
                            </div>
                            <div class="col_full">
                              <button name="submit" type="submit" onclick="HobbyFormEdit()" id="submit-button" value="Submit" class="btn mug-btn-a">Save Now </button>
                            </div>
                          </form>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- <h4 class="font-italic mb-4" style="color: #920606;"> EDIT SOCIO RELIGIOUS ATTRIBUTES</h4> -->



                </div>



                <div class="tab-pane fade shadow rounded  p-5 mb-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                  <!--<h4 class="font-italic mb-4" style="color: #920606;">EDIT EDUCATION AND OCCUPATION</h4>-->

                  <div class="photo-addsec">

                    <p> "A picture is worth a thousand words". Adding your picture

                      is one of the most important aspects of your profile, as per statistics it increases your chances
                      up to 20 times. Most members won't even search a profile without a picture. Picture is the first
                      impression that is given to

                      the viewers and you don't want to give them a blank first impression.</p>

                    <div class="row justify-content-center">

                      <div class="col-md-4 mb-2">

                        <div class="card-client">
                          <div class="user-picture12" onclick="toggleAdditionalInfo2()">
                            <img src="" id="getphoto1">
                          </div>
                          <p class="name-client">Photo 1</p>
                          <span class="mug-btn-a mt-4 mb-4" onclick="toggleAdditionalInfo2()">Add Photo</span>
                        </div>

                      </div>

                      <div class="col-md-4 mb-2">

                        <div class="card-client">

                          <div class="user-picture12" onclick="toggleAdditionalInfo3()">
                            <img src="" id="getphoto2">

                            <!-- <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">

                              <path
                                d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                              </path>

                            </svg> -->

                          </div>

                          <p class="name-client"> Photo 2</p>

                          <span class="mug-btn-a mt-4 mb-4" onclick="toggleAdditionalInfo3()">Add Photo</span>



                        </div>

                      </div>

                      <div class="col-md-4 mb-2">

                        <div class="card-client">

                          <div class="user-picture12" onclick="toggleAdditionalInfo4()">

                            <!-- <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">

                              <path
                                d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                              </path>

                            </svg> -->
                            <img src="" id="getphoto3">


                          </div>

                          <p class="name-client"> Photo 3</p>

                          <span class="mug-btn-a mt-4 mb-4" onclick="toggleAdditionalInfo4()">Add Photo</span>



                        </div>

                      </div>
                      <div id="additionalInfo2" class="row" style="display: none;">
                        <div class="col-md-9">

                          <form id="addmyphoto1" method="post" enctype="multipart/form-data" novalidate="novalidate">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <div class="col-md-10 col-md-offset-2 mx-auto py-lg-3 py-2">
                              <p>Add Your Photo - <strong>1</strong></p>
                              <p>Manage Your photos: Add Photo/Change your photos here.</p>
                              <ul>
                                <li>Acceptable Format: JPG</li>
                                <li>Maximum File size: 2 MB</li>
                              </ul>

                              <div class="col_full" style="margin-bottom: 10px;">
                                <label>Upload Your Photo: <small>*</small></label><br>
                                <input id="Addphoto1" name="Addphoto1" type="file" class="form-control">
                                <input type="hidden" name="choice" id="choice" value="1">
                              </div>
                              <div class="col_full">
                                <button name="submit" onclick="MyPhoto1()" type="submit" id="submit-button" tabindex="5" value="Submit" class="btn mug-btn-a">Submit
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>

                      <div id="additionalInfo3" class="row" style="display: none;">
                        <div class="col-md-9">

                          <form id="addmyphoto2" method="post" enctype="multipart/form-data" novalidate="novalidate">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <div class="col-md-10 col-md-offset-2 mx-auto py-lg-3 py-2">
                              <p>Add Your Photo - <strong>2</strong></p>
                              <p>Manage Your photos: Add Photo/Change your photos here.</p>
                              <ul>
                                <li>Acceptable Format: JPG</li>
                                <li>Maximum File size: 2 MB</li>
                              </ul>

                              <div class="col_full" style="margin-bottom: 10px;">
                                <label>Upload Your Photo: <small>*</small></label><br>
                                <input id="Addphoto2" name="Addphoto2" type="file" class="form-control">
                                <input type="hidden" name="choice" id="choice" value="1">
                              </div>
                              <div class="col_full">
                                <button name="submit" type="submit" onclick="MyPhoto2()" id="submit-button" tabindex="5" value="Submit" class="btn mug-btn-a">Submit
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div id="additionalInfo4" class="row" style="display: none;">
                        <div class="col-md-9">

                          <form action="" method="post" enctype="multipart/form-data" novalidate="novalidate">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <div class="col-md-10 col-md-offset-2 mx-auto py-lg-3 py-2">
                              <p>Add Your Photo - <strong>3</strong></p>
                              <p>Manage Your photos: Add Photo/Change your photos here.</p>
                              <ul>
                                <li>Acceptable Format: JPG</li>
                                <li>Maximum File size: 2 MB</li>
                              </ul>

                              <div class="col_full" style="margin-bottom: 10px;">
                                <label>Upload Your Photo: <small>*</small></label><br>
                                <input id="Addphoto3" name="Addphoto3" type="file" class="form-control">
                                <input type="hidden" name="choice" id="choice" value="1">
                              </div>
                              <div class="col_full">
                                <button name="submit" type="submit" onclick="MyPhoto3()" id="submit-button" tabindex="5" value="Submit" class="btn mug-btn-a">Submit
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>




                      <h2 class="add-headd mt-5 mb-3">You have the option of uploading your photographs Here.

                        You can upload maximum of 3 photographs. Please follow the below instructions :</h2>



                      <ul class="add-ul">

                        <li class="add-li">The image file should be in JPG Format only</li>

                        <li class="add-li">Size of each photograph must not exceed 2 MB</li>

                        <li class="add-li">The ideal width & height is more than 260(W) x 360(H) pixels or 3.5(W) x 5(H)
                          inches or 9(W) x 13(H) cm</li>

                        <li class="add-li"> Your chosen photograph(s) must be in accordance with the socially acceptable
                          standards.</li>

                        <li class="add-li"> kinchit.org reserves the right to remove/delete any photograph that violates
                          socially accepted norms of decency.</li>

                        <li class="add-li"> Do not post caricatures or copyrighted images.</li>



                      </ul>

                    </div>




                  </div>



                </div>



                <div class="tab-pane fade shadow rounded  p-2 mb-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                  <div class="row">

                    <div class="mt-2 mb-2">

                      <a href="edit_horo" class="cleenhearts-btn" style="float: right" ;>

                        <div class="cleenhearts-btn__icon-box">

                          <div class="cleenhearts-btn__icon-box__inner"><span class=""><i class="fas fa-edit"></i></span></div>

                        </div>

                        <span class="cleenhearts-btn__text">EDIT HOROSCOPE</span>

                      </a>

                    </div>

                    <div class="col-md-6 mb-2">

                      <div class="horo">

                        <table class="table" id="RAASI" cellpadding="0" cellspacing="0" border="0" align="center" width="100%">

                          <tbody>
                            <tr>

                              <td class="rass-td" id="r12" width="25%">&nbsp;12</td>

                              <td class="rass-td" id="r1" width="25%">&nbsp;1</td>

                              <td class="rass-td" id="r2" width="25%">&nbsp;2</td>

                              <td class="rass-td" id="r3" width="25%">&nbsp;3</td>

                            </tr>

                            <tr>

                              <td class="rass-td" id="r11">&nbsp;11</td>

                              <td class="rass-td" colspan="2" rowspan="2" align="center" style="vertical-align:middle;">
                                <h3 class="nomargin">RAASI</h3>&nbsp;
                              </td>

                              <td class="rass-td" id="r4">&nbsp;4</td>

                            </tr>

                            <tr>

                              <td class="rass-td" id="r10">&nbsp;10</td>

                              <td class="rass-td" id="r5">&nbsp;5</td>

                            </tr>

                            <tr>

                              <td class="rass-td" id="r9">&nbsp;9</td>

                              <td class="rass-td" id="r8">&nbsp;8</td>

                              <td class="rass-td" id="r7">&nbsp;7</td>

                              <td class="rass-td" id="r6">&nbsp;6</td>

                            </tr>

                          </tbody>
                        </table>

                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="horo">

                      </div>

                      <table class="table" id="AMSAM" cellpadding="0" cellspacing="0" border="0" align="center" width="100%">

                        <tbody>
                          <tr>

                            <td class="rass-td" id="a12" width="25%">&nbsp;12</td>

                            <td class="rass-td" id="a1" width="25%">&nbsp;1</td>

                            <td class="rass-td" id="a2" width="25%">&nbsp;2</td>

                            <td class="rass-td" id="a3" width="25%">&nbsp;3</td>

                          </tr>

                          <tr>

                            <td class="rass-td" id="a11">&nbsp;11</td>

                            <td class="rass-td" colspan="2" rowspan="2" align="center" style="vertical-align:middle;">
                              <h3 class="nomargin">AMSAM</h3>&nbsp;
                            </td>

                            <td class="rass-td" id="a4">&nbsp;4</td>

                          </tr>

                          <tr>

                            <td class="rass-td" id="a10">&nbsp;10</td>

                            <td class="rass-td" id="a5">&nbsp;5</td>

                          </tr>

                          <tr>

                            <td class="rass-td" id="a9">&nbsp;9</td>

                            <td class="rass-td" id="a8">&nbsp;8</td>

                            <td class="rass-td" id="a7">&nbsp;7</td>

                            <td class="rass-td" id="a6">&nbsp;6</td>

                          </tr>

                        </tbody>
                      </table>

                    </div>

                    <hr>

                    <h2 class="up-sc-head mt-3 mb-3">Upload Scanned Horoscope</h2>

                    <div class="col-lg-6 col-md-12 mt-3 mb-3">

                      <input id="horoscopeimage" name="horoscopeimage" type="file" onchange="UpdateHoroscopeDocument()" class="form-control">
                      <!-- <a href="#" class="horo-a">CLICK HERE TO UPLOAD SCANNED HOROSCOPE</a> -->

                    </div>
                    <div class="col-lg-6 col-md-12 mt-3 ">
                      <button class="sum " type="sumbit" data-toggle="modal" data-target="#exampleModal">Click Here</button>
                    </div>

                  </div>


                </div>



                <div class="tab-pane fade shadow rounded  p-5 mb-5" id="v-pills-settings1" role="tabpanel" aria-labelledby="v-pills-settings-tab1">

                  <!--<h4 class="font-italic mb-4" style="color: #920606;">EDIT CONTACT DETAILS</h4>-->

                  <div class="photo-addsec">



                    <div class="row justify-content-center">

                      <!-- <div class="col-md-4 mb-2">

                        <div class="card-client">

                          <div class="user-picture">

                            <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">

                              <path
                                d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                              </path>

                            </svg>

                          </div>

                          <p class="name-client"> Photo 1

                          </p>

                          <a href="#" class="mug-btn-a mt-4 mb-4">Add Proof</a>

                        </div>

                      </div> -->

                      <div class="col-md-4 mb-2">

                        <div class="card-client">
                          <p class="name-client"> Proof of Identity</p>

                          <div class="user-picture1" onclick="toggleAdditionalInfo()">

                            <!-- <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">

                              <path
                                d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                              </path>

                            </svg> -->
                            <img id="proof_identity_image" src="">

                          </div>
                          <br>
                          <p style="text-align: center;" id="proof_identity"></p>
                          <br>
                          <span onclick="toggleAdditionalInfo()" class="mug-btn-a mt-4 mb-4">Add Proof</span>



                        </div>


                      </div>



                      <!-- <script>


                        function toggleAdditionalInfo() {
                          // Toggle the visibility of additional information
                          $("#additionalInfo").slideToggle();
                        }

                        function toggleAdditionalInfo1() {
                          // Toggle the visibility of additional information
                          $("#additionalInfo1").slideToggle();
                        }



                      </script> -->

                      <div class="col-md-4 mb-2">

                        <div class="card-client">
                          <p class="name-client"> Proof of Address</p>

                          <div class="user-picture1" onclick="toggleAdditionalInfo1()">
                            <!-- 
                            <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">

                              <path
                                d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                              </path>

                            </svg> -->
                            <img src="" id="proof_address_image">

                          </div>
                          <br>
                          <p style="text-align: center;" id="proof_address"></p>
                          <br>
                          <span onclick="toggleAdditionalInfo1()" class="mug-btn-a mt-4 mb-4">Add Proof</span>



                        </div>

                      </div>

                      <div id="additionalInfo" class="row" style="display: none;">
                        <form name="proof_of_ldentity" id="proof_of_ldentity" method="post">
                          <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                          <input type="hidden" name="device_id" id="device_id" value="1">
                          <input type="hidden" name="identity" id="identity" value="1">
                          <div class="col-md-10 mx-auto col-md-offset-2 py-lg-3 py-2">
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Type of Document <small>*</small></label><br>
                              <select name="document" id="document" class="form-select">
                                <option value="Aadhaar">Aadhaar(UID)</option>
                                <option value="Passport">Passport</option>
                                <option value="Driving License">Driving License</option>
                                <option value="Voter ID Card">Voter ID Card</option>
                                <option value="Ration Card with address">Ration Card with address</option>
                                <option value="Address card with photo issued by Department Of Posts Government of India">
                                  Address card with photo issued by Department Of Posts Government of India</option>
                                <option value="Current  passbook of Post Office / any scheduled Bank, having Photo">
                                  Current passbook of Post Office / any scheduled Bank, having Photo</option>
                                <option value="Photo Identity Card (of Central Govt. /PSU or State Govt. /PSU only)">
                                  Photo Identity Card (of Central Govt. /PSU or State Govt. /PSU only)</option>
                                <option value="Gas Bill (not older than last three months)">Gas Bill (not older than
                                  last three months)</option>
                                <option value="Telephone Bill of Fixed line/Postpaid Mobile (not older than last three months)">
                                  Telephone Bill of Fixed line/Postpaid Mobile (not older than last three months)
                                </option>
                                <option value="Electricity Bill ( not older than last three months)">Electricity Bill (
                                  not older than last three months)</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>ID<small>*</small></label><br>
                              <input id="identity_id" name="identity_id" type="text" class="form-control" maxlength="50">
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Upload Your Image: <small>*</small></label><br>
                              <input id="identity_image" name="identity_image" type="file" class="form-control">
                              <small>Please Upload Image within 2MB</small>
                              <input type="hidden" name="type" id="type" value="Address">
                            </div>
                            <div class="col_full">
                              <button name="submit" type="submit" onclick="ProofIdentity()" id="submit-button" value="Submit" class=" btn mug-btn-a">Submit </button>
                            </div>
                          </div>
                        </form>
                      </div>

                      <div id="additionalInfo1" class="row" style="display: none;">
                        <form name="proof_of_address" id="proof_of_address" method="post">
                          <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                          <input type="hidden" name="device_id" id="device_id" value="1">
                          <input type="hidden" name="identity" id="identity" value="2">
                          <div class="col-md-10 mx-auto col-md-offset-2 py-lg-3 py-2">
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Type of Document <small>*</small></label><br>
                              <select name="document" id="document" class="form-select">
                                <option value="Aadhaar">Aadhaar(UID)</option>
                                <option value="Passport">Passport</option>
                                <option value="Driving License">Driving License</option>
                                <option value="Voter ID Card">Voter ID Card</option>
                                <option value="Ration Card with address">Ration Card with address</option>
                                <option value="Address card with photo issued by Department Of Posts Government of India">
                                  Address card with photo issued by Department Of Posts Government of India</option>
                                <option value="Current  passbook of Post Office / any scheduled Bank, having Photo">
                                  Current passbook of Post Office / any scheduled Bank, having Photo</option>
                                <option value="Photo Identity Card (of Central Govt. /PSU or State Govt. /PSU only)">
                                  Photo Identity Card (of Central Govt. /PSU or State Govt. /PSU only)</option>
                                <option value="Gas Bill (not older than last three months)">Gas Bill (not older than
                                  last three months)</option>
                                <option value="Telephone Bill of Fixed line/Postpaid Mobile (not older than last three months)">
                                  Telephone Bill of Fixed line/Postpaid Mobile (not older than last three months)
                                </option>
                                <option value="Electricity Bill ( not older than last three months)">Electricity Bill (
                                  not older than last three months)</option>
                              </select>
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>ID<small>*</small></label><br>
                              <input id="identity_id" name="identity_id" type="text" class="form-control" maxlength="50">
                            </div>
                            <div class="col_full" style=" margin-bottom: 10px;">
                              <label>Upload Your Image: <small>*</small></label><br>
                              <input id="identity_image" name="identity_image" type="file" class="form-control">
                              <small>Please Upload Image within 2MB</small>
                              <input type="hidden" name="type" id="type" value="Address">
                            </div>
                            <div class="col_full">
                              <button name="submit" type="submit" onclick="ProofAddress()" id="submit-button1" value="Submit" class=" btn mug-btn-a">Submit </button>
                            </div>
                          </div>
                        </form>
                      </div>

                      <h2 class="add-headd mt-5 mb-3">Note</h2>

                      <ul class="add-ul">
                        <li class="add-li">We have implemented certain measures for the safety of our members. After
                          creating a profile, registered members have the option of uploading a copy of any specified
                          government issued identity proof to add credibility to their profiles.</li>
                        <li class="add-li">Members trust &amp; respond to profiles with verified information. The
                          UPLOADED ID proofs are not displayed in public and it is purely for ADMINISTRATIVE Purposes.
                        </li>
                        <li class="add-li">ID proofs once uploaded <strong>cannot be EDITED or DELETED.</strong> You
                          should contact the ADMIN for any updates to these documents with a valid reason for the EDIT
                          action.</li>
                      </ul>

                      <!-- <ul class="add-ul">

                        <li class="add-li">The image file should be in JPG Format only</li>

                        <li class="add-li">Size of each photograph must not exceed 2 MB</li>

                        <li class="add-li">The ideal width & height is more than 260(W) x 360(H) pixels or 3.5(W) x 5(H)
                          inches or 9(W) x 13(H) cm</li>

                        <li class="add-li"> Your chosen photograph(s) must be in accordance with the socially acceptable
                          standards.</li>

                        <li class="add-li"> kinchit.org reserves the right to remove/delete any photograph that violates
                          socially accepted norms of decency.</li>

                        <li class="add-li"> Do not post caricatures or copyrighted images.</li>



                      </ul> -->

                    </div>

                  </div>

                </div>



                <div class="tab-pane fade shadow rounded  p-5" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab2">

                  <h4 class="font-italic mb-4" style="color: #920606;">EDIT PROFILE</h4>

                  <form name="ProfileEdit" id="ProfileEdit" method="post">

                    <div class="row g-3">



                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">Profile Description</label>

                        <textarea type="text" class="form-control" id="your-surname" name="your-surname" required></textarea>

                        <p style="font-size:13px;">Please enter details or provide a brief description about yourself.
                          Max 1000 characters. If Profile contains any information regarding your contact details, such
                          as e-mail, phone number, etc., your profile will be rejected.</p>

                      </div>



                      <div class="col-12 mt-4">

                        <div class="row">

                          <div class="col-md-3">

                            <button type="submit" class="btn btn-dark w-100 fw-bold abu-btn">SAVE NOW</button>

                          </div>

                        </div>

                      </div>

                    </div>

                  </form>

                </div>



                <div class="tab-pane fade shadow rounded  p-5" id="v-pills-settings3" role="tabpanel" aria-labelledby="v-pills-settings-tab3">

                  <h4 class="font-italic mb-4" style="color: #920606;">EDIT FAMILY DETAILS</h4>

                  <form>

                    <div class="row g-3">



                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">Family Details</label>

                        <textarea type="text" class="form-control" id="your-surname" name="your-surname" required></textarea>

                      </div>

                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">Family Values</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="Traditional" selected="">Traditional</option>

                          <option value="Orthodox">Orthodox</option>

                          <option value="Liberal">Liberal</option>

                          <option value="Moderate">Moderate</option>

                        </select>

                      </div>

                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">Family Status</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="Rich">Rich</option>

                          <option value="Upper Middle Class">Upper Middle Class</option>

                          <option value="Lower Middle Class" selected="">Lower Middle Class</option>

                          <option value="High Class">High Class</option>

                          <option value="Middle Class">Middle Class</option>

                          <option value="Do not want to tell at this time">Do not want to tell at this time</option>

                        </select>

                      </div>

                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">Family Status</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="Rich">Rich</option>

                          <option value="Upper Middle Class">Upper Middle Class</option>

                          <option value="Lower Middle Class" selected="">Lower Middle Class</option>

                          <option value="High Class">High Class</option>

                          <option value="Middle Class">Middle Class</option>

                          <option value="Do not want to tell at this time">Do not want to tell at this time</option>

                        </select>

                      </div>



                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">Family Orgin</label>

                        <input type="text" class="form-control" id="your-email" name="your-email" required>

                      </div>



                      <div class="col-md-12">

                        No.Of Brothers

                        <div class="row">

                          <div class="col-3">

                            <label for="captcha-input" class="form-label">Elder</label>

                          </div>

                          <div class="col-3">

                            <select class="form-select" aria-label="Default select example" required>

                              <option value="Traditional" selected="">0</option>

                              <option value="Orthodox">2</option>

                              <option value="Liberal">3</option>

                              <option value="Moderate">4</option>

                            </select>

                          </div>

                          <div class="col-3">

                            <label for="captcha-input" class="form-label">Younger</label>

                          </div>

                          <div class="col-3">

                            <select class="form-select" aria-label="Default select example" required>

                              <option value="Traditional" selected="">0</option>

                              <option value="Orthodox">2</option>

                              <option value="Liberal">3</option>

                              <option value="Moderate">4</option>

                            </select>

                          </div>

                        </div>

                      </div>

                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">No.Of Brothers Married</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="" selected="selected">---------- SELECT ----------</option>
                          <option value="No married brother">No married brother</option>

                          <option value="One married brother">One married brother</option>

                          <option value="Two married brothers">Two married brother</option>

                          <option value="Three married brothers">Three married brother</option>

                          <option value="Four married brothers">Four married brothers</option>

                          <option value="Above four married brothers">Above four married brother</option>

                        </select>

                      </div>



                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">No.Of Sisters Married</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="" selected="selected">---------- SELECT ----------</option>
                          <option value="No married sister">No married sister</option>

                          <option value="One married sister">One married sister</option>

                          <option value="Two married sisters">Two married sisters</option>

                          <option value="Three married sisters">Three married sisters</option>

                          <option value="Four married sisters">Four married sisters</option>

                          <option value="Above four married sisters">Above four married sisters</option>

                        </select>

                      </div>





                      <div class="col-12 mt-4">

                        <div class="row">

                          <div class="col-md-3">

                            <button type="submit" class="btn btn-dark w-100 fw-bold abu-btn">SAVE NOW</button>

                          </div>

                        </div>

                      </div>

                    </div>

                  </form>

                </div>



                <div class="tab-pane fade shadow rounded  p-5" id="v-pills-settings4" role="tabpanel" aria-labelledby="v-pills-settings-tab4">

                  <h4 class="font-italic mb-4" style="color: #920606;">EDIT PARTNER PREFERENCE</h4>

                  <form>

                    <div class="row g-3">



                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">Family Details</label>

                        <textarea type="text" class="form-control" id="your-surname" name="your-surname" required></textarea>

                      </div>

                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">Family Values</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="Traditional" selected="">Traditional</option>

                          <option value="Orthodox">Orthodox</option>

                          <option value="Liberal">Liberal</option>

                          <option value="Moderate">Moderate</option>

                        </select>

                      </div>

                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">Family Status</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="Rich">Rich</option>

                          <option value="Upper Middle Class">Upper Middle Class</option>

                          <option value="Lower Middle Class" selected="">Lower Middle Class</option>

                          <option value="High Class">High Class</option>

                          <option value="Middle Class">Middle Class</option>

                          <option value="Do not want to tell at this time">Do not want to tell at this time</option>

                        </select>

                      </div>

                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">Family Status</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="Rich">Rich</option>

                          <option value="Upper Middle Class">Upper Middle Class</option>

                          <option value="Lower Middle Class" selected="">Lower Middle Class</option>

                          <option value="High Class">High Class</option>

                          <option value="Middle Class">Middle Class</option>

                          <option value="Do not want to tell at this time">Do not want to tell at this time</option>

                        </select>

                      </div>



                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">Family Orgin</label>

                        <input type="text" class="form-control" id="your-email" name="your-email" required>

                      </div>



                      <div class="col-md-12">

                        No.Of Brothers

                        <div class="row">

                          <div class="col-3">

                            <label for="captcha-input" class="form-label">Elder</label>

                          </div>

                          <div class="col-3">

                            <select class="form-select" aria-label="Default select example" required>

                              <option value="Traditional" selected="">0</option>

                              <option value="Orthodox">2</option>

                              <option value="Liberal">3</option>

                              <option value="Moderate">4</option>

                            </select>

                          </div>

                          <div class="col-3">

                            <label for="captcha-input" class="form-label">Younger</label>

                          </div>

                          <div class="col-3">

                            <select class="form-select" aria-label="Default select example" required>

                              <option value="Traditional" selected="">0</option>

                              <option value="Orthodox">2</option>

                              <option value="Liberal">3</option>

                              <option value="Moderate">4</option>

                            </select>

                          </div>

                        </div>

                      </div>

                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">No.Of Brothers Married</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="" selected="selected">---------- SELECT ----------</option>
                          <option value="No married brother">No married brother</option>

                          <option value="One married brother">One married brother</option>

                          <option value="Two married brothers">Two married brother</option>

                          <option value="Three married brothers">Three married brother</option>

                          <option value="Four married brothers">Four married brothers</option>

                          <option value="Above four married brothers">Above four married brother</option>

                        </select>

                      </div>



                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">No.Of Sisters Married</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="" selected="selected">---------- SELECT ----------</option>
                          <option value="No married sister">No married sister</option>

                          <option value="One married sister">One married sister</option>

                          <option value="Two married sisters">Two married sisters</option>

                          <option value="Three married sisters">Three married sisters</option>

                          <option value="Four married sisters">Four married sisters</option>

                          <option value="Above four married sisters">Above four married sisters</option>

                        </select>

                      </div>





                      <div class="col-12 mt-4">

                        <div class="row">

                          <div class="col-md-3">

                            <button type="submit" class="btn btn-dark w-100 fw-bold abu-btn">SAVE NOW</button>

                          </div>

                        </div>

                      </div>

                    </div>

                  </form>

                </div>



                <div class="tab-pane fade shadow rounded  p-5" id="v-pills-settings5" role="tabpanel" aria-labelledby="v-pills-settings-tab5">

                  <h4 class="font-italic mb-4" style="color: #920606;">EDIT HOBBIES</h4>

                  <form>

                    <div class="row g-3">

                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">HOBBIES</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="Acting">Acting</option>

                          <option value="Astronomy">Astronomy</option>

                          <option value="Astrology">Astrology</option>

                          <option value="Collectibles">Collectibles</option>

                          <option value="Cooking">Cooking</option>

                          <option value="Crosswords">Crosswords</option>

                          <option value="Dancing">Dancing</option>

                          <option value="Film-making">Film-making</option>

                          <option value="Gardening/ landscaping">Gardening/ landscaping</option>

                          <option value="Graphology">Graphology</option>

                          <option value="Nature">Nature</option>

                          <option value="Numerology">Numerology</option>

                          <option value="Painting">Painting</option>

                          <option value="Palmistry">Palmistry</option>

                          <option value="Pets">Pets</option>

                          <option value="Photography">Photography</option>

                          <option value="Playing musical instruments">Playing musical instruments</option>

                          <option value="Puzzles">Puzzles</option>

                          <option value="No Hobbies">No Hobbies</option>

                        </select>

                      </div>

                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">INTEREST</label>

                        <select class="form-select" aria-label="Default select example" required>

                          <option value="Adventure sports">Adventure sports</option>

                          <option value="Book clubs">Book clubs</option>

                          <option value="Computer games">Computer games</option>

                          <option value="Health &amp; fitness">Health &amp; fitness</option>

                          <option value="Internet">Internet</option>

                          <option value="Learning new languages">Learning new languages</option>

                          <option value="Movies">Movies</option>

                          <option value="Music">Music</option>

                          <option value="Politics">Politics</option>

                          <option value="Reading">Reading</option>

                          <option value="Social service">Social service</option>

                          <option value="Sports">Sports</option>

                          <option value="Television">Television</option>

                          <option value="Theatre">Theatre</option>

                          <option value="Travel">Travel</option>

                          <option value="Writing">Writing</option>

                          <option value="Yoga">Yoga</option>

                          <option value="Alternative healing / medicine">Alternative healing / medicine</option>

                          <option value="No interest">No interest</option>

                        </select>

                      </div>



                      <div class="col-md-12">

                        <label for="captcha-input" class="form-label">OTHER INTEREST</label>

                        <input type="text" class="form-control" id="your-email" name="your-email" required>

                      </div>

                      <div class="col-12 mt-4">

                        <div class="row">

                          <div class="col-md-3">

                            <button type="submit" class="btn btn-dark w-100 fw-bold abu-btn">SAVE NOW</button>

                          </div>

                        </div>

                      </div>

                    </div>

                  </form>

                </div>







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




  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Horoscope Image</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <img src="" id="Horoscope-image" alt="image">
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>




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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <script>
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
      $('#BasicForm').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      //ProfileEdit()
    })

    $(function() {
      $('#SocioForm').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })
    $(function() {
      $('#EduForm').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })
    $(function() {
      $('#PhysicalForm').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })

    $(function() {
      $('#MatriForm').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })

    $(function() {
      $('#DescripForm').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })

    $(function() {
      $('#FamilyForm').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })

    $(function() {
      $('#PartnerForm').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })

    $(function() {
      $('#PartnerForm').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })

    $(function() {
      $('#HobbyForm').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
      $('#hobbies').select2();
      $('#interests').select2();
      $('#looking_for').select2();

    })

    $(function() {
      $('#addmyphoto1').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })
    $(function() {
      $('#addmyphoto2').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })
    $(function() {
      $('#addmyphoto3').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })

    $(function() {
      $('#proof_of_ldentity').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })
    $(function() {
      $('#proof_of_address').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })

    $(function() {
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

      $('#community1').select2({
        ajax: {
          url: "{{ env('API_URL') }}get-religion",
          type: "post",
          dataType: 'json',
          delay: 400,
          data: function(params) {
            return {
              search: params.term,
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

      $('#sub_section').select2({
        ajax: {
          url: "{{ env('API_URL') }}get-caste",
          type: "post",
          dataType: 'json',
          delay: 400,
          data: function(params) {
            return {
              search: params.term,
              community: $('#community1').val()
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

    })

    function MyProfile() {
      var formdata = new FormData();
      formdata.append('token', "{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}");
      formdata.append('device_id', '1');
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-profile-data",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
          if (response['status'] == 200) {
            var userData = response['data'][0];
            var lookingValues = userData['Looking'].split(',');
            var hobbiesValues = userData['Hobbies'].split(',');
            var interestsValues = userData['Interests'].split(',');
            var caste = response['caste'];
            var religion = response['religion'];
            $('#profileid').text(':  ' + (userData['MatriID'] !== null ? userData['MatriID'] : 'N/A'));
            $('#gender1').text(':  ' + (userData['Gender'] !== null ? userData['Gender'] : 'N/A'));
            $('#dob').text(':  ' + (userData['DOB'] !== null ? userData['DOB'] : 'N/A'));
            $('#community').text(':  ' + (userData['religion_name'] !== null ? userData['religion_name'] : 'N/A'));
            $('#looking').text(':  ' + (userData['Looking'] !== null ? userData['Looking'] : 'N/A'));
            $('#user_name').text(':  ' + (userData['display_name'] !== null ? userData['display_name'] : 'N/A'));
            $('#status').text(':  ' + (userData['Status'] !== null ? userData['Status'] : 'N/A'));
            $('#age').text(':  ' + (userData['Age'] !== null ? userData['Age'] : 'N/A'));
            $('#created').text(':  ' + (userData['created_at'] !== null ? userData['created_at'] : 'N/A'));
            $('#last_login').text(':  ' + (userData['Lastlogin'] !== null ? userData['Lastlogin'] : 'N/A'));
            $('#getphoto1').attr('src', userData['Photo1'] !== 'nophoto.gif' ? 'http://kinchitapi.senthil.in.net/public/' + userData['Photo1'] : 'http://kinchit-front.senthil.in.net/public/assets/images/man.png');
            $('#getphoto2').attr('src', userData['Photo2'] !== 'nophoto.gif' ? 'http://kinchitapi.senthil.in.net/public/' + userData['Photo2'] : 'http://kinchit-front.senthil.in.net/public/assets/images/man.png');
            $('#getphoto3').attr('src', userData['Photo3'] !== 'nophoto.gif' ? 'http://kinchitapi.senthil.in.net/public/' + userData['Photo3'] : 'http://kinchit-front.senthil.in.net/public/assets/images/man.png');

            $('#Horoscope-image').attr('src', userData['Horoscheck'] !== 'nophoto.gif' ? 'http://kinchitapi.senthil.in.net/public/' + userData['Horoscheck'] : 'http://kinchit-front.senthil.in.net/public/assets/images/man.png');

            //  $('#document').val(userData['proof_identity_document']);
            //  $('#identity_id').val(userData['proof_identity_document']);

            $('#proof_identity_image').attr('src', userData['proof_identity_image'] !== null ? 'http://kinchitapi.senthil.in.net/public/' + userData['proof_identity_image'] : 'http://kinchit-front.senthil.in.net/images/no-image.jpg');
            $('#proof_address_image').attr('src', userData['proof_address_image'] !== null ? 'http://kinchitapi.senthil.in.net/public/' + userData['proof_address_image'] : 'http://kinchit-front.senthil.in.net/images/no-image.jpg');

            $('#r1').text(userData['r1'] !== null ? userData['r1'] : '1');
            $('#r2').text(userData['r2'] !== null ? userData['r2'] : '2');
            $('#r3').text(userData['r3'] !== null ? userData['r3'] : '3');
            $('#r4').text(userData['r4'] !== null ? userData['r4'] : '4');
            $('#r5').text(userData['r5'] !== null ? userData['r5'] : '5');
            $('#r6').text(userData['r6'] !== null ? userData['r6'] : '6');
            $('#r7').text(userData['r7'] !== null ? userData['r7'] : '7');
            $('#r8').text(userData['r8'] !== null ? userData['r8'] : '8');
            $('#r9').text(userData['r9'] !== null ? userData['r9'] : '9');
            $('#r10').text(userData['r10'] !== null ? userData['r10'] : '10');
            $('#r11').text(userData['r11'] !== null ? userData['r11'] : '11');
            $('#r12').text(userData['r12'] !== null ? userData['r12'] : '12');

            $('#a1').text(userData['a1'] !== null ? userData['a1'] : '1');
            $('#a2').text(userData['a2'] !== null ? userData['a2'] : '2');
            $('#a3').text(userData['a3'] !== null ? userData['a3'] : '3');
            $('#a4').text(userData['a4'] !== null ? userData['a4'] : '4');
            $('#a5').text(userData['a5'] !== null ? userData['a5'] : '5');
            $('#a6').text(userData['a6'] !== null ? userData['a6'] : '6');
            $('#a7').text(userData['a7'] !== null ? userData['a7'] : '7');
            $('#a8').text(userData['a8'] !== null ? userData['a8'] : '8');
            $('#a9').text(userData['a9'] !== null ? userData['a9'] : '9');
            $('#a10').text(userData['a10'] !== null ? userData['a10'] : '10');
            $('#a11').text(userData['a11'] !== null ? userData['a11'] : '11');
            $('#a12').text(userData['a12'] !== null ? userData['a12'] : '12');

            $('#proof_identity').text('Identity:  ' + (userData['proof_identity_id'] !== null ? userData['proof_identity_id'] : 'N/A'));
            $('#proof_address').text('Address:  ' + (userData['proof_address_id'] !== null ? userData['proof_address_id'] : 'N/A'));

            $('#name_of_user').val(userData['Name']);
            $('#gender').val(userData['Gender']);
            $('#mother_tongue').val(userData['Language']);
            $("input[name='marital_status'][value='" + userData['Maritalstatus'] + "']").prop('checked', true);
            // $('#community').val(userData['Religion']);
            // $('#sub_section').val(caste['name']);
            $.each(religion, function(index, value) {
              $('#community1').append($('<option>', {
                value: value['id'],
                text: value['name']
              }));
            });
            $('#community1').val(userData['Religion']);
            //   $('#sub_section').empty();
            // $.each(caste, function(index, value) {
            //     $('#sub_section').append($('<option>', {
            //         value: value['id'],
            //         text: value['name']
            //     }));
            // });
            $('#acharayan').val(userData['Subcaste']);
            $('#special_category').val(userData['specialcategory']);
            $('#user_dob').val(userData['DOB']);
            $('#profile_created_by').val(userData['Profilecreatedby']);
            $('#reference_by').val(userData['Referenceby']);
            $('#user_email').val(userData['ConfirmEmail']);


            $('#gothram').val(userData['Gothram']);
            $('#manglik').val(userData['Manglik']);
            $('#moonsign').val(userData['Moonsign']);
            $('#star_nakshatra').val(userData['Star']);
            $('#padham').val(userData['padham']);
            $('#horoscope_match').val(userData['Horosmatch']);
            $('#place_of_birth').val(userData['POB']);
            $('#time_of_birth').val(userData['TOB']);
            $('#dasa_type').val(userData['dasatype']);
            $('#thosham').val(userData['thosam']);
            $('#birth_balance_dasa').val(userData['birth_balance_dasa']);


            $('#education').val(userData['Education']);
            $('#education_details').val(userData['EducationDetails']);
            $('#occupation').val(userData['Occupation']);
            $('#occupation_details').val(userData['occupation_details']);
            $('#annual_income').val(userData['Annualincome']);
            $('#employed_in').val(userData['Employedin']);


            $('#height').val(userData['Height']);
            $('#weight').val(userData['Weight']);
            $('#blood_group').val(userData['BloodGroup']);
            $('#complexion').val(userData['Complexion']);
            $('#bodytype').val(userData['Bodytype']);
            $('#special_cases').val(userData['spe_cases']);
            $('#diet').val(userData['Diet']);
            $('#smoke').val(userData['Smoke']);
            $('#drink').val(userData['Drink']);


            $('#address').val(userData['Address']);
            $('#country').val(userData['Country']);
            $('#state').val(userData['State']);
            $('#city').val(userData['City']);
            $('#postal').val(userData['Postal']);
            $('#whatsapp_number').val(userData['whatsapp_number']);
            $('#mobile').val(userData['Mobile']);
            $('#residence_status').val(userData['Residencystatus']);


            $('#profile_description').val(userData['Profile']);


            $('#family_details').val(userData['FamilyDetails']);
            $('#family_values').val(userData['Familyvalues']);
            $('#family_type').val(userData['FamilyType']);
            $('#family_status').val(userData['FamilyStatus']);
            $('#family_origin').val(userData['FamilyOrigin']);
            $('#noof_bro').val(userData['noofbrothers']);
            $('#noyu_bro').val(userData['noyubrothers']);
            $('#noof_sis').val(userData['noofsisters']);
            $('#noyu_sis').val(userData['noyusisters']);
            $('#nbm').val(userData['nbm']);
            $('#nsm').val(userData['nsm']);
            $('#father_name').val(userData['Fathername']);
            $("input[name='father_livin_status'][value='" + userData['Fatherlivingstatus'] + "']").prop('checked', true);
            // $('#father_livin_status').val(userData['Fatherlivingstatus']);
            $('#father_occ').val(userData['Fathersoccupation']);
            $('#mother_name').val(userData['Mothersname']);
            $("input[name='mother_livin_status'][value='" + userData['Motherlivingstatus'] + "']").prop('checked', true);
            //$('#mother_livin_status').val(userData['Motherlivingstatus']);
            $('#mother_occ').val(userData['Mothersoccupation']);


            // $('#looking_for').val(userData['Looking']);
            $('#looking_for option').each(function() {
              if (lookingValues.includes($(this).val())) {
                $(this).prop('selected', true);
              }
            });
            // $('#looking_for').selectpicker('refresh');
            $('#from_age').val(userData['PE_FromAge']);
            $('#to_age').val(userData['PE_ToAge']);
            $('#partner_expectations').val(userData['PartnerExpectations']);
            $('#pe_country').val(userData['PE_Countrylivingin']);
            $('#pe_height').val(userData['PE_Height']);
            $('#pe_height2').val(userData['PE_Height2']);
            $('#pe_complexion').val(userData['PE_Complexion']);
            $('#pe_education').val(userData['PE_Education']);
            $('#pe_religion').val(userData['PE_Religion']);
            $('#pe_caste').val(userData['PE_Caste']);
            $('#pe_residentsstatus').val(userData['PE_Residentstatus']);


            //$('#hobbies').val(userData['Hobbies']);
            $('#hobbies option').each(function() {
              if (hobbiesValues.includes($(this).val())) {
                $(this).prop('selected', true);
              }
            });
            $('#other_hobbies').val(userData['OtherHobbies']);
            // $('#interests').val(userData['Interests']);
            $('#interests option').each(function() {
              if (interestsValues.includes($(this).val())) {
                $(this).prop('selected', true);
              }
            });
            $('#other_interests').val(userData['OtherInterests']);
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



    function BasicFormEdit() {
      var formdata = new FormData($('#BasicForm')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}basic-information",
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

    function SocioFormEdtit() {
      var formdata = new FormData($('#SocioForm')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}basic-information",
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

    function EduFormEdit() {
      var formdata = new FormData($('#EduForm')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}basic-information",
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

    function PhysicalFormEdit() {
      var formdata = new FormData($('#PhysicalForm')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}basic-information",
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

    function MatriFormEdit() {
      var formdata = new FormData($('#MatriForm')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}basic-information",
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

    function DescripFormEdit() {
      var formdata = new FormData($('#DescripForm')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}basic-information",
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

    function FamilyFormEdit() {
      var formdata = new FormData($('#FamilyForm')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}basic-information",
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

    function PartnerFormEdit() {
      var formdata = new FormData($('#PartnerForm')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}basic-information",
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

    function HobbyFormEdit() {
      var formdata = new FormData($('#HobbyForm')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}basic-information",
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

    function MyPhoto1() {
      var formdata = new FormData($('#addmyphoto1')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}my-photo-upload",
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

    function MyPhoto2() {
      var formdata = new FormData($('#addmyphoto2')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}my-photo-upload",
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

    function MyPhoto3() {
      var formdata = new FormData($('#addmyphoto3')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}my-photo-upload",
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

    function ProofIdentity() {
      var formdata = new FormData($('#proof_of_ldentity')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}verification-document",
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

    function ProofAddress() {
      var formdata = new FormData($('#proof_of_address')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}verification-document",
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

    function UpdateHoroscopeDocument() {
      var formData = new FormData();
      var fileInput = document.getElementById('horoscopeimage');

      if (fileInput.files.length > 0) {
        // Append the file to the FormData object
        formData.append('horoscopeimage', fileInput.files[0]);
      }
      formData.append('token', "{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}");
      formData.append('device_id', '1');
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}horoscope-upload-document",
        data: formData, // Use formData here instead of formdata
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




    function toggleAdditionalInfo() {
      $("#additionalInfo").slideToggle();
    }

    function toggleAdditionalInfo1() {
      $("#additionalInfo1").slideToggle();
    }

    function toggleAdditionalInfo2() {
      $("#additionalInfo2").slideToggle();
    }

    function toggleAdditionalInfo3() {
      $("#additionalInfo3").slideToggle();
    }

    function toggleAdditionalInfo4() {
      $("#additionalInfo4").slideToggle();
    }

    // $(document).ready(function () {
    //   $("#toggleAddphoto1").click(function () {
    //     $("#Addphoto1").slideToggle();
    //   });
    //   $("#toggleAddphoto2").click(function () {
    //     $("#Addphoto2").slideToggle();
    //   });
    //   $("#toggleAddphoto3").click(function () {
    //     $("#Addphoto3").slideToggle();
    //   });
    // });
  </script>


</body>



</html>