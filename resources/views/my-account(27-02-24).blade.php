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
var sc_project=11981757;
var sc_invisible=1;
var sc_security="35d2687e";
var sc_https=1;
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

        .nav-pills-custom .nav-link {
    color: #aaa;
    background: #fff;
    position: relative;
}

.nav-pills-custom .nav-link.active {
    color:#920606;;
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

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: var(--bs-nav-pills-link-active-color);
    background-color: #ffa101 !important;
}
.nav-link:focus, .nav-link:hover{
  color: #920606 !important;
}
</style>
</head>

<body>


<!-- header -->
@include('include.header')
<section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">
    <div class="container">
    <h2 class="page-title">My Account</h2>
    <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li> My Account</li>
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
                <div class="row gutter-y-50 justify-content-center">

                    <div class="col-xl-12 col-md-12">
<!-- Demo header-->

        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-2 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <i class="fas fa-user mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Basic Information</span></a>

                    <a class="nav-link mb-3 p-2 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fas fa-fan mr-2"></i>
                        <span class="font-weight-bold small text-uppercase"> Socio Religious Attributes</span></a>

                    <a class="nav-link mb-3 p-2 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    <i class="fas fa-book mr-2"></i>
                        <span class="font-weight-bold small text-uppercase"> Education and Occupation</span></a>

                    <a class="nav-link mb-3 p-2 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    <i class="fas fa-eye mr-2"></i>
                        <span class="font-weight-bold small text-uppercase"> Physical Attributes</span></a>

                        <a class="nav-link mb-3 p-2 shadow" id="v-pills-settings-tab1" data-toggle="pill" href="#v-pills-settings1" role="tab" aria-controls="v-pills-settings1" aria-selected="false">
                    <i class="fas fa-eye mr-2"></i>
                        <span class="font-weight-bold small text-uppercase"> Contact Details</span></a>

                        <a class="nav-link mb-3 p-2 shadow" id="v-pills-settings-tab2" data-toggle="pill" href="#v-pills-settings2" role="tab" aria-controls="v-pills-settings2" aria-selected="false">
                        <i class="far fa-user-circle mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">  Profile</span></a>

                        <a class="nav-link mb-3 p-2 shadow" id="v-pills-settings-tab3" data-toggle="pill" href="#v-pills-settings3" role="tab" aria-controls="v-pills-settings3
                        " aria-selected="false">
                        <i class="fas fa-users mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">  Family Details</span></a>

                        <a class="nav-link mb-3 p-2 shadow" id="v-pills-settings-tab4" data-toggle="pill" href="#v-pills-settings4" role="tab" aria-controls="v-pills-settings4" aria-selected="false">
                        <i class="fas fa-heart mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">  Partner Preferences</span></a>

                        <a class="nav-link mb-3 p-2 shadow" id="v-pills-settings-tab5" data-toggle="pill" href="#v-pills-settings5" role="tab" aria-controls="v-pills-settings5" aria-selected="false">
                        <i class="fas fa-cube mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">  Hobbies</span></a>
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded  show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="font-italic mb-4" style="color: #920606;">EDIT BASIC INFORMATION</h4>
                        <form>
        <div class="row g-3">

          <div class="col-md-12">
            <label for="your-surname" class="form-label">Name</label>
            <input type="text" class="form-control" id="your-surname" name="your-surname" required>
          </div>
          <div class="col-md-12">
            <label for="your-email" class="form-label">Password</label>
            <input type="text" class="form-control" id="your-email" name="your-email" required>
          </div>
          <div class="col-md-12">
          <div class="row">
          <label for="your-email" class="form-label">Date Of Birth</label>
        <div class="col-4">
           <select class="form-select" aria-label="Default select example" required>
  <option selected>Select Date</option>
  <option value="1">1</option>
  <option value="2">197</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="15">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
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



</select>
        </div>
        <div class="col-4">
           <select class="form-select" aria-label="Default select example" required>
  <option selected>Select Month</option>
  <option value="1">January</option>
  <option value="2">February</option>
  <option value="3">March</option>
  <option value="3">April</option>
  <option value="3">May</option>
  <option value="3">June</option>
  <option value="3">July</option>
  <option value="3">August</option>
  <option value="3">September</option>
  <option value="3">October</option>
  <option value="3">November</option>
  <option value="3">December</option>

</select>
        </div>
        <div class="col-4">
        <select class="form-select" aria-label="Default select example" required>
  <option selected>Select Year</option>
  <option value="1">1950</option>
  <option value="2">1951</option>
  <option value="3">1952</option>
  <option value="4">1953</option>
  <option value="5">1954</option>
  <option value="6">1955</option>
  <option value="7">1956</option>
  <option value="8">1957</option>
  <option value="9">1958</option>
  <option value="10">1959</option>
  <option value="11">1960</option>
  <option value="12">1961</option>
  <option value="13">1962</option>
  <option value="14">1963</option>
  <option value="15">1964</option>
  <option value="15">1965</option>
  <option value="17">1966</option>
  <option value="18">1967</option>
  <option value="19">1968</option>
  <option value="20">1970</option>
  <option value="21">1971</option>
  <option value="22">1972</option>
  <option value="23">1973</option>
  <option value="24">1974</option>
  <option value="25">1975</option>
  <option value="26">1976</option>
  <option value="27">1977</option>
  <option value="28">1978</option>
  <option value="29">1979</option>
  <option value="20">1980</option>
  <option value="21">1981</option>
  <option value="22">1982</option>
  <option value="23">1983</option>
  <option value="24">1984</option>
  <option value="25">1985</option>
  <option value="26">1986</option>
  <option value="27">1987</option>
  <option value="28">1988</option>
  <option value="29">1989</option>
  <option value="30">1990</option>
  <option value="21">1991</option>
  <option value="22">1992</option>
  <option value="23">1993</option>
  <option value="24">1994</option>
  <option value="25">1995</option>
  <option value="26">1996</option>
  <option value="27">1997</option>
  <option value="28">1998</option>
  <option value="29">1999</option>
  <option value="30">2000</option>
  <option value="21">2001</option>
  <option value="22">2002</option>
  <option value="23">2003</option>
  <option value="24">2004</option>
  <option value="25">2005</option>
</select>
        </div>
          </div>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Mother Tongue</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="" selected="selected">- Select Your Mother Tongue -</option>

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
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Community</label>
          <select class="form-select" aria-label="Default select example" required>

          <option value="" selected="selected">- Select -</option>

                                            <option value="34"></option>


                                            <option value="5">Iyengar</option>


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
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Acharyan</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="" selected="">- Select -</option>

</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Diet</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="" selected="">- Select -</option>

                                        <option value="Veg">Veg</option>

                                        <option value="Eggetarian">Eggetarian</option>

                                        <option value="Occassionally Non-Veg">Occassionally Non-Veg</option>

                                        <option value="Non-Veg">Non Veg</option>

                                        <option value="Jain">Jain</option>

                                        <option value="Vegan">Vegan</option>
</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Special Category</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="Not Applicable">Not Applicable</option>

<option value="Archaka">Archaka</option>

<option value="Aacharya Purusha">Aacharya Purusha</option>

<option value="Veda Parayanam">Veda Parayanam</option>

<option value="Divya Prabanda Parayanam">Divya Prabanda Parayanam</option>
</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Profile Created By</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="Self">Self</option>

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
          <div class="col-md-12">
            <label for="your-surname" class="form-label">Email Address</label>
            <input type="text" class="form-control" id="your-surname" name="your-surname" required placeholder="Enter your Mail Id">
          </div>
          <div class="col-md-12">
            <label for="your-surname" class="form-label">Passowrd</label>
            <input type="Password" class="form-control" id="your-surname" name="your-surname" required>
          </div>
          <div class="col-md-12">
           <div class="row">
           <label for="your-surname" class="form-label">Mobile</label>
            <div class="col-md-3 mb-2">
            <select class="form-select" aria-label="Default select example" required>
            <option value="">--Select--</option>
											                                                <option value="0">Czeck Republic (+0)</option>
                                                                                            <option value="0">Select (+0)</option>
                                                                                            <option value="0">Select (+0)</option>
                                                                                            <option value="0">Select (+0)</option>
                                                                                            <option value="0">Select (+0)</option>
                                                                                            <option value="91">India (+91)</option>
                                                                                            <option value="1">USA (+1)</option>
                                                                                            <option value="1">Canada (+1)</option>
                                                                                            <option value="44">United Kingdom (+44)</option>
                                                                                            <option value="61">Australia (+61)</option>
                                                                                            <option value="93">Afghanistan (+93)</option>
                                                                                            <option value="355">Albania (+355)</option>
                                                                                            <option value="213">Algeria (+213)</option>
                                                                                            <option value="1684">American Samoa (+1684)</option>
                                                                                            <option value="376">Andorra (+376)</option>
                                                                                            <option value="244">Angola (+244)</option>
                                                                                            <option value="1264">Anguilla (+1264)</option>
                                                                                            <option value="0">Antarctica (+0)</option>
                                                                                            <option value="1268">Antigua and Barbuda (+1268)</option>
                                                                                            <option value="54">Argentina (+54)</option>
                                                                                            <option value="374">Armenia (+374)</option>
                                                                                            <option value="297">Aruba (+297)</option>
                                                                                            <option value="43">Austria (+43)</option>
                                                                                            <option value="994">Azerbaijan (+994)</option>
                                                                                            <option value="1242">Bahamas (+1242)</option>
                                                                                            <option value="973">Bahrain (+973)</option>
                                                                                            <option value="880">Bangladesh (+880)</option>
                                                                                            <option value="1246">Barbados (+1246)</option>
                                                                                            <option value="375">Belarus (+375)</option>
                                                                                            <option value="32">Belgium (+32)</option>
                                                                                            <option value="501">Belize (+501)</option>
                                                                                            <option value="229">Benin (+229)</option>
                                                                                            <option value="1441">Bermuda (+1441)</option>
                                                                                            <option value="975">Bhutan (+975)</option>
                                                                                            <option value="591">Bolivia (+591)</option>
                                                                                            <option value="387">Bosnia and Herzegovina (+387)</option>
                                                                                            <option value="267">Botswana (+267)</option>
                                                                                            <option value="0">Bouvet Island (+0)</option>
                                                                                            <option value="55">Brazil (+55)</option>
                                                                                            <option value="246">British Indian Ocean Territory (+246)</option>
                                                                                            <option value="673">Brunei Darussalam (+673)</option>
                                                                                            <option value="359">Bulgaria (+359)</option>
                                                                                            <option value="226">Burkina Faso (+226)</option>
                                                                                            <option value="257">Burundi (+257)</option>
                                                                                            <option value="855">Cambodia (+855)</option>
                                                                                            <option value="237">Cameroon (+237)</option>
                                                                                            <option value="238">Cape Verde (+238)</option>
                                                                                            <option value="1345">Cayman Islands (+1345)</option>
                                                                                            <option value="236">Central African Republic (+236)</option>
                                                                                            <option value="235">Chad (+235)</option>
                                                                                            <option value="56">Chile (+56)</option>
                                                                                            <option value="86">China (+86)</option>
                                                                                            <option value="61">Christmas Island (+61)</option>
                                                                                            <option value="672">Cocos (Keeling) Islands (+672)</option>
                                                                                            <option value="57">Colombia (+57)</option>
                                                                                            <option value="269">Comoros (+269)</option>
                                                                                            <option value="242">Congo (+242)</option>
                                                                                            <option value="242">Congo, the Democratic Republic of the (+242)</option>
                                                                                            <option value="682">Cook Islands (+682)</option>
                                                                                            <option value="506">Costa Rica (+506)</option>
                                                                                            <option value="225">Cote D'Ivoire (+225)</option>
                                                                                            <option value="385">Croatia (+385)</option>
                                                                                            <option value="53">Cuba (+53)</option>
                                                                                            <option value="357">Cyprus (+357)</option>
                                                                                            <option value="420">Czech Republic (+420)</option>
                                                                                            <option value="45">Denmark (+45)</option>
                                                                                            <option value="253">Djibouti (+253)</option>
                                                                                            <option value="1767">Dominica (+1767)</option>
                                                                                            <option value="1809">Dominican Republic (+1809)</option>
                                                                                            <option value="670">East Timor (+670)</option>
                                                                                            <option value="593">Ecuador (+593)</option>
                                                                                            <option value="20">Egypt (+20)</option>
                                                                                            <option value="503">El Salvador (+503)</option>
                                                                                            <option value="240">Equatorial Guinea (+240)</option>
                                                                                            <option value="291">Eritrea (+291)</option>
                                                                                            <option value="372">Estonia (+372)</option>
                                                                                            <option value="251">Ethiopia (+251)</option>
                                                                                            <option value="672">External Territories of Australia (+672)</option>
                                                                                            <option value="500">Falkland Islands (Malvinas) (+500)</option>
                                                                                            <option value="298">Faroe Islands (+298)</option>
                                                                                            <option value="679">Fiji (+679)</option>
                                                                                            <option value="358">Finland (+358)</option>
                                                                                            <option value="33">France (+33)</option>
                                                                                            <option value="594">French Guiana (+594)</option>
                                                                                            <option value="689">French Polynesia (+689)</option>
                                                                                            <option value="0">French Southern Territories (+0)</option>
                                                                                            <option value="241">Gabon (+241)</option>
                                                                                            <option value="220">Gambia (+220)</option>
                                                                                            <option value="995">Georgia (+995)</option>
                                                                                            <option value="49">Germany (+49)</option>
                                                                                            <option value="233">Ghana (+233)</option>
                                                                                            <option value="350">Gibraltar (+350)</option>
                                                                                            <option value="30">Greece (+30)</option>
                                                                                            <option value="299">Greenland (+299)</option>
                                                                                            <option value="1473">Grenada (+1473)</option>
                                                                                            <option value="590">Guadeloupe (+590)</option>
                                                                                            <option value="1671">Guam (+1671)</option>
                                                                                            <option value="502">Guatemala (+502)</option>
                                                                                            <option value="44">Guernsey and Alderney (+44)</option>
                                                                                            <option value="224">Guinea (+224)</option>
                                                                                            <option value="245">Guinea-Bissau (+245)</option>
                                                                                            <option value="592">Guyana (+592)</option>
                                                                                            <option value="509">Haiti (+509)</option>
                                                                                            <option value="0">Heard Island and Mcdonald Islands (+0)</option>
                                                                                            <option value="504">Honduras (+504)</option>
                                                                                            <option value="852">Hong Kong (+852)</option>
                                                                                            <option value="36">Hungary (+36)</option>
                                                                                            <option value="354">Iceland (+354)</option>
                                                                                            <option value="62">Indonesia (+62)</option>
                                                                                            <option value="98">Iran, Islamic Republic of (+98)</option>
                                                                                            <option value="964">Iraq (+964)</option>
                                                                                            <option value="353">Ireland (+353)</option>
                                                                                            <option value="972">Israel (+972)</option>
                                                                                            <option value="39">Italy (+39)</option>
                                                                                            <option value="1876">Jamaica (+1876)</option>
                                                                                            <option value="81">Japan (+81)</option>
                                                                                            <option value="44">Jersey (+44)</option>
                                                                                            <option value="962">Jordan (+962)</option>
                                                                                            <option value="7">Kazakhstan (+7)</option>
                                                                                            <option value="254">Kenya (+254)</option>
                                                                                            <option value="686">Kiribati (+686)</option>
                                                                                            <option value="850">Korea, Democratic People's Republic of (+850)</option>
                                                                                            <option value="82">Korea, Republic of (+82)</option>
                                                                                            <option value="965">Kuwait (+965)</option>
                                                                                            <option value="996">Kyrgyzstan (+996)</option>
                                                                                            <option value="856">Lao People's Democratic Republic (+856)</option>
                                                                                            <option value="371">Latvia (+371)</option>
                                                                                            <option value="961">Lebanon (+961)</option>
                                                                                            <option value="266">Lesotho (+266)</option>
                                                                                            <option value="231">Liberia (+231)</option>
                                                                                            <option value="218">Libyan Arab Jamahiriya (+218)</option>
                                                                                            <option value="423">Liechtenstein (+423)</option>
                                                                                            <option value="370">Lithuania (+370)</option>
                                                                                            <option value="352">Luxembourg (+352)</option>
                                                                                            <option value="853">Macao (+853)</option>
                                                                                            <option value="389">Macedonia, the Former Yugoslav Republic of (+389)</option>
                                                                                            <option value="261">Madagascar (+261)</option>
                                                                                            <option value="265">Malawi (+265)</option>
                                                                                            <option value="60">Malaysia (+60)</option>
                                                                                            <option value="960">Maldives (+960)</option>
                                                                                            <option value="223">Mali (+223)</option>
                                                                                            <option value="356">Malta (+356)</option>
                                                                                            <option value="44">Man (Isle of) (+44)</option>
                                                                                            <option value="692">Marshall Islands (+692)</option>
                                                                                            <option value="596">Martinique (+596)</option>
                                                                                            <option value="222">Mauritania (+222)</option>
                                                                                            <option value="230">Mauritius (+230)</option>
                                                                                            <option value="269">Mayotte (+269)</option>
                                                                                            <option value="52">Mexico (+52)</option>
                                                                                            <option value="691">Micronesia, Federated States of (+691)</option>
                                                                                            <option value="373">Moldova, Republic of (+373)</option>
                                                                                            <option value="377">Monaco (+377)</option>
                                                                                            <option value="976">Mongolia (+976)</option>
                                                                                            <option value="1664">Montserrat (+1664)</option>
                                                                                            <option value="212">Morocco (+212)</option>
                                                                                            <option value="258">Mozambique (+258)</option>
                                                                                            <option value="95">Myanmar (+95)</option>
                                                                                            <option value="264">Namibia (+264)</option>
                                                                                            <option value="674">Nauru (+674)</option>
                                                                                            <option value="977">Nepal (+977)</option>
                                                                                            <option value="31">Netherlands Antilles (+31)</option>
                                                                                            <option value="599">Netherlands (+599)</option>
                                                                                            <option value="687">New Caledonia (+687)</option>
                                                                                            <option value="64">New Zealand (+64)</option>
                                                                                            <option value="505">Nicaragua (+505)</option>
                                                                                            <option value="227">Niger (+227)</option>
                                                                                            <option value="234">Nigeria (+234)</option>
                                                                                            <option value="683">Niue (+683)</option>
                                                                                            <option value="672">Norfolk Island (+672)</option>
                                                                                            <option value="1670">Northern Mariana Islands (+1670)</option>
                                                                                            <option value="47">Norway (+47)</option>
                                                                                            <option value="968">Oman (+968)</option>
                                                                                            <option value="92">Pakistan (+92)</option>
                                                                                            <option value="680">Palau (+680)</option>
                                                                                            <option value="970">Palestinian Territory, Occupied (+970)</option>
                                                                                            <option value="507">Panama (+507)</option>
                                                                                            <option value="675">Papua New Guinea (+675)</option>
                                                                                            <option value="595">Paraguay (+595)</option>
                                                                                            <option value="51">Peru (+51)</option>
                                                                                            <option value="63">Philippines (+63)</option>
                                                                                            <option value="0">Pitcairn (+0)</option>
                                                                                            <option value="48">Poland (+48)</option>
                                                                                            <option value="351">Portugal (+351)</option>
                                                                                            <option value="1787">Puerto Rico (+1787)</option>
                                                                                            <option value="974">Qatar (+974)</option>
                                                                                            <option value="262">Reunion (+262)</option>
                                                                                            <option value="40">Romania (+40)</option>
                                                                                            <option value="70">Russian Federation (+70)</option>
                                                                                            <option value="250">Rwanda (+250)</option>
                                                                                            <option value="290">Saint Helena (+290)</option>
                                                                                            <option value="1869">Saint Kitts and Nevis (+1869)</option>
                                                                                            <option value="1758">Saint Lucia (+1758)</option>
                                                                                            <option value="508">Saint Pierre and Miquelon (+508)</option>
                                                                                            <option value="1784">Saint Vincent and the Grenadines (+1784)</option>
                                                                                            <option value="684">Samoa (+684)</option>
                                                                                            <option value="378">San Marino (+378)</option>
                                                                                            <option value="239">Sao Tome and Principe (+239)</option>
                                                                                            <option value="966">Saudi Arabia (+966)</option>
                                                                                            <option value="221">Senegal (+221)</option>
                                                                                            <option value="381">Serbia (+381)</option>
                                                                                            <option value="248">Seychelles (+248)</option>
                                                                                            <option value="232">Sierra Leone (+232)</option>
                                                                                            <option value="65">Singapore (+65)</option>
                                                                                            <option value="421">Slovakia (+421)</option>
                                                                                            <option value="386">Slovenia (+386)</option>
                                                                                            <option value="44">Smaller Territories of the UK (+44)</option>
                                                                                            <option value="677">Solomon Islands (+677)</option>
                                                                                            <option value="252">Somalia (+252)</option>
                                                                                            <option value="27">South Africa (+27)</option>
                                                                                            <option value="0">South Georgia and the South Sandwich Islands (+0)</option>
                                                                                            <option value="211">South Sudan (+211)</option>
                                                                                            <option value="34">Spain (+34)</option>
                                                                                            <option value="94">Sri Lanka (+94)</option>
                                                                                            <option value="249">Sudan (+249)</option>
                                                                                            <option value="597">Suriname (+597)</option>
                                                                                            <option value="47">Svalbard and Jan Mayen (+47)</option>
                                                                                            <option value="268">Swaziland (+268)</option>
                                                                                            <option value="46">Sweden (+46)</option>
                                                                                            <option value="41">Switzerland (+41)</option>
                                                                                            <option value="963">Syrian Arab Republic (+963)</option>
                                                                                            <option value="886">Taiwan, Province of China (+886)</option>
                                                                                            <option value="992">Tajikistan (+992)</option>
                                                                                            <option value="255">Tanzania, United Republic of (+255)</option>
                                                                                            <option value="66">Thailand (+66)</option>
                                                                                            <option value="228">Togo (+228)</option>
                                                                                            <option value="690">Tokelau (+690)</option>
                                                                                            <option value="676">Tonga (+676)</option>
                                                                                            <option value="1868">Trinidad and Tobago (+1868)</option>
                                                                                            <option value="216">Tunisia (+216)</option>
                                                                                            <option value="90">Turkey (+90)</option>
                                                                                            <option value="7370">Turkmenistan (+7370)</option>
                                                                                            <option value="1649">Turks and Caicos Islands (+1649)</option>
                                                                                            <option value="688">Tuvalu (+688)</option>
                                                                                            <option value="256">Uganda (+256)</option>
                                                                                            <option value="380">Ukraine (+380)</option>
                                                                                            <option value="971">United Arab Emirates (+971)</option>
                                                                                            <option value="1">United States Minor Outlying Islands (+1)</option>
                                                                                            <option value="598">Uruguay (+598)</option>
                                                                                            <option value="998">Uzbekistan (+998)</option>
                                                                                            <option value="678">Vanuatu (+678)</option>
                                                                                            <option value="39">Vatican City State (Holy See) (+39)</option>
                                                                                            <option value="58">Venezuela (+58)</option>
                                                                                            <option value="84">Viet Nam (+84)</option>
                                                                                            <option value="1284">Virgin Islands, British (+1284)</option>
                                                                                            <option value="1340">Virgin Islands, U.s. (+1340)</option>
                                                                                            <option value="681">Wallis and Futuna (+681)</option>
                                                                                            <option value="212">Western Sahara (+212)</option>
                                                                                            <option value="967">Yemen (+967)</option>
                                                                                            <option value="38">Yugoslavia (+38)</option>
                                                                                            <option value="260">Zambia (+260)</option>
                                                                                            <option value="263">Zimbabwe (+263)</option>
</select>
            </div>
            <div class="col-md-9">
            <input type="Password" class="form-control" id="your-surname" name="your-surname" required>
            </div>
           </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-3">
                <button  type="submit" class="btn btn-dark w-100 fw-bold abu-btn" >SAVE NOW</button>
              </div>
            </div>
          </div>
        </div>
      </form>
                    </div>

                    <div class="tab-pane fade shadow rounded  p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4" style="color: #920606;"> EDIT SOCIO RELIGIOUS ATTRIBUTES</h4>
                        <form>
        <div class="row g-3">

          <div class="col-md-12">
            <label for="your-surname" class="form-label">Name</label>
            <input type="text" class="form-control" id="your-surname" name="your-surname" required>
          </div>
          <div class="col-md-12">
            <label for="your-email" class="form-label">Password</label>
            <input type="text" class="form-control" id="your-email" name="your-email" required>
          </div>
          <div class="col-md-12">
          <div class="row">
          <label for="your-email" class="form-label">Date Of Birth</label>
        <div class="col-4">
           <select class="form-select" aria-label="Default select example" required>
  <option selected>Select Date</option>
  <option value="1">1</option>
  <option value="2">197</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="15">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
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



</select>
        </div>
        <div class="col-4">
           <select class="form-select" aria-label="Default select example" required>
  <option selected>Select Month</option>
  <option value="1">January</option>
  <option value="2">February</option>
  <option value="3">March</option>
  <option value="3">April</option>
  <option value="3">May</option>
  <option value="3">June</option>
  <option value="3">July</option>
  <option value="3">August</option>
  <option value="3">September</option>
  <option value="3">October</option>
  <option value="3">November</option>
  <option value="3">December</option>

</select>
        </div>
        <div class="col-4">
        <select class="form-select" aria-label="Default select example" required>
  <option selected>Select Year</option>
  <option value="1">1950</option>
  <option value="2">1951</option>
  <option value="3">1952</option>
  <option value="4">1953</option>
  <option value="5">1954</option>
  <option value="6">1955</option>
  <option value="7">1956</option>
  <option value="8">1957</option>
  <option value="9">1958</option>
  <option value="10">1959</option>
  <option value="11">1960</option>
  <option value="12">1961</option>
  <option value="13">1962</option>
  <option value="14">1963</option>
  <option value="15">1964</option>
  <option value="15">1965</option>
  <option value="17">1966</option>
  <option value="18">1967</option>
  <option value="19">1968</option>
  <option value="20">1970</option>
  <option value="21">1971</option>
  <option value="22">1972</option>
  <option value="23">1973</option>
  <option value="24">1974</option>
  <option value="25">1975</option>
  <option value="26">1976</option>
  <option value="27">1977</option>
  <option value="28">1978</option>
  <option value="29">1979</option>
  <option value="20">1980</option>
  <option value="21">1981</option>
  <option value="22">1982</option>
  <option value="23">1983</option>
  <option value="24">1984</option>
  <option value="25">1985</option>
  <option value="26">1986</option>
  <option value="27">1987</option>
  <option value="28">1988</option>
  <option value="29">1989</option>
  <option value="30">1990</option>
  <option value="21">1991</option>
  <option value="22">1992</option>
  <option value="23">1993</option>
  <option value="24">1994</option>
  <option value="25">1995</option>
  <option value="26">1996</option>
  <option value="27">1997</option>
  <option value="28">1998</option>
  <option value="29">1999</option>
  <option value="30">2000</option>
  <option value="21">2001</option>
  <option value="22">2002</option>
  <option value="23">2003</option>
  <option value="24">2004</option>
  <option value="25">2005</option>
</select>
        </div>
          </div>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Mother Tongue</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="" selected="selected">- Select Your Mother Tongue -</option>

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
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Community</label>
          <select class="form-select" aria-label="Default select example" required>

          <option value="" selected="selected">- Select -</option>

                                            <option value="34"></option>


                                            <option value="5">Iyengar</option>


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
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Acharyan</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="" selected="">- Select -</option>

</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Diet</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="" selected="">- Select -</option>

                                        <option value="Veg">Veg</option>

                                        <option value="Eggetarian">Eggetarian</option>

                                        <option value="Occassionally Non-Veg">Occassionally Non-Veg</option>

                                        <option value="Non-Veg">Non Veg</option>

                                        <option value="Jain">Jain</option>

                                        <option value="Vegan">Vegan</option>
</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Special Category</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="Not Applicable">Not Applicable</option>

<option value="Archaka">Archaka</option>

<option value="Aacharya Purusha">Aacharya Purusha</option>

<option value="Veda Parayanam">Veda Parayanam</option>

<option value="Divya Prabanda Parayanam">Divya Prabanda Parayanam</option>
</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Profile Created By</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="Self">Self</option>

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
          <div class="col-md-12">
            <label for="your-surname" class="form-label">Email Address</label>
            <input type="text" class="form-control" id="your-surname" name="your-surname" required placeholder="Enter your Mail Id">
          </div>
          <div class="col-md-12">
            <label for="your-surname" class="form-label">Passowrd</label>
            <input type="Password" class="form-control" id="your-surname" name="your-surname" required>
          </div>
          <div class="col-md-12">
           <div class="row">
           <label for="your-surname" class="form-label">Mobile</label>
            <div class="col-md-3 mb-2">
            <select class="form-select" aria-label="Default select example" required>
            <option value="">--Select--</option>
											                                                <option value="0">Czeck Republic (+0)</option>
                                                                                            <option value="0">Select (+0)</option>
                                                                                            <option value="0">Select (+0)</option>
                                                                                            <option value="0">Select (+0)</option>
                                                                                            <option value="0">Select (+0)</option>
                                                                                            <option value="91">India (+91)</option>
                                                                                            <option value="1">USA (+1)</option>
                                                                                            <option value="1">Canada (+1)</option>
                                                                                            <option value="44">United Kingdom (+44)</option>
                                                                                            <option value="61">Australia (+61)</option>
                                                                                            <option value="93">Afghanistan (+93)</option>
                                                                                            <option value="355">Albania (+355)</option>
                                                                                            <option value="213">Algeria (+213)</option>
                                                                                            <option value="1684">American Samoa (+1684)</option>
                                                                                            <option value="376">Andorra (+376)</option>
                                                                                            <option value="244">Angola (+244)</option>
                                                                                            <option value="1264">Anguilla (+1264)</option>
                                                                                            <option value="0">Antarctica (+0)</option>
                                                                                            <option value="1268">Antigua and Barbuda (+1268)</option>
                                                                                            <option value="54">Argentina (+54)</option>
                                                                                            <option value="374">Armenia (+374)</option>
                                                                                            <option value="297">Aruba (+297)</option>
                                                                                            <option value="43">Austria (+43)</option>
                                                                                            <option value="994">Azerbaijan (+994)</option>
                                                                                            <option value="1242">Bahamas (+1242)</option>
                                                                                            <option value="973">Bahrain (+973)</option>
                                                                                            <option value="880">Bangladesh (+880)</option>
                                                                                            <option value="1246">Barbados (+1246)</option>
                                                                                            <option value="375">Belarus (+375)</option>
                                                                                            <option value="32">Belgium (+32)</option>
                                                                                            <option value="501">Belize (+501)</option>
                                                                                            <option value="229">Benin (+229)</option>
                                                                                            <option value="1441">Bermuda (+1441)</option>
                                                                                            <option value="975">Bhutan (+975)</option>
                                                                                            <option value="591">Bolivia (+591)</option>
                                                                                            <option value="387">Bosnia and Herzegovina (+387)</option>
                                                                                            <option value="267">Botswana (+267)</option>
                                                                                            <option value="0">Bouvet Island (+0)</option>
                                                                                            <option value="55">Brazil (+55)</option>
                                                                                            <option value="246">British Indian Ocean Territory (+246)</option>
                                                                                            <option value="673">Brunei Darussalam (+673)</option>
                                                                                            <option value="359">Bulgaria (+359)</option>
                                                                                            <option value="226">Burkina Faso (+226)</option>
                                                                                            <option value="257">Burundi (+257)</option>
                                                                                            <option value="855">Cambodia (+855)</option>
                                                                                            <option value="237">Cameroon (+237)</option>
                                                                                            <option value="238">Cape Verde (+238)</option>
                                                                                            <option value="1345">Cayman Islands (+1345)</option>
                                                                                            <option value="236">Central African Republic (+236)</option>
                                                                                            <option value="235">Chad (+235)</option>
                                                                                            <option value="56">Chile (+56)</option>
                                                                                            <option value="86">China (+86)</option>
                                                                                            <option value="61">Christmas Island (+61)</option>
                                                                                            <option value="672">Cocos (Keeling) Islands (+672)</option>
                                                                                            <option value="57">Colombia (+57)</option>
                                                                                            <option value="269">Comoros (+269)</option>
                                                                                            <option value="242">Congo (+242)</option>
                                                                                            <option value="242">Congo, the Democratic Republic of the (+242)</option>
                                                                                            <option value="682">Cook Islands (+682)</option>
                                                                                            <option value="506">Costa Rica (+506)</option>
                                                                                            <option value="225">Cote D'Ivoire (+225)</option>
                                                                                            <option value="385">Croatia (+385)</option>
                                                                                            <option value="53">Cuba (+53)</option>
                                                                                            <option value="357">Cyprus (+357)</option>
                                                                                            <option value="420">Czech Republic (+420)</option>
                                                                                            <option value="45">Denmark (+45)</option>
                                                                                            <option value="253">Djibouti (+253)</option>
                                                                                            <option value="1767">Dominica (+1767)</option>
                                                                                            <option value="1809">Dominican Republic (+1809)</option>
                                                                                            <option value="670">East Timor (+670)</option>
                                                                                            <option value="593">Ecuador (+593)</option>
                                                                                            <option value="20">Egypt (+20)</option>
                                                                                            <option value="503">El Salvador (+503)</option>
                                                                                            <option value="240">Equatorial Guinea (+240)</option>
                                                                                            <option value="291">Eritrea (+291)</option>
                                                                                            <option value="372">Estonia (+372)</option>
                                                                                            <option value="251">Ethiopia (+251)</option>
                                                                                            <option value="672">External Territories of Australia (+672)</option>
                                                                                            <option value="500">Falkland Islands (Malvinas) (+500)</option>
                                                                                            <option value="298">Faroe Islands (+298)</option>
                                                                                            <option value="679">Fiji (+679)</option>
                                                                                            <option value="358">Finland (+358)</option>
                                                                                            <option value="33">France (+33)</option>
                                                                                            <option value="594">French Guiana (+594)</option>
                                                                                            <option value="689">French Polynesia (+689)</option>
                                                                                            <option value="0">French Southern Territories (+0)</option>
                                                                                            <option value="241">Gabon (+241)</option>
                                                                                            <option value="220">Gambia (+220)</option>
                                                                                            <option value="995">Georgia (+995)</option>
                                                                                            <option value="49">Germany (+49)</option>
                                                                                            <option value="233">Ghana (+233)</option>
                                                                                            <option value="350">Gibraltar (+350)</option>
                                                                                            <option value="30">Greece (+30)</option>
                                                                                            <option value="299">Greenland (+299)</option>
                                                                                            <option value="1473">Grenada (+1473)</option>
                                                                                            <option value="590">Guadeloupe (+590)</option>
                                                                                            <option value="1671">Guam (+1671)</option>
                                                                                            <option value="502">Guatemala (+502)</option>
                                                                                            <option value="44">Guernsey and Alderney (+44)</option>
                                                                                            <option value="224">Guinea (+224)</option>
                                                                                            <option value="245">Guinea-Bissau (+245)</option>
                                                                                            <option value="592">Guyana (+592)</option>
                                                                                            <option value="509">Haiti (+509)</option>
                                                                                            <option value="0">Heard Island and Mcdonald Islands (+0)</option>
                                                                                            <option value="504">Honduras (+504)</option>
                                                                                            <option value="852">Hong Kong (+852)</option>
                                                                                            <option value="36">Hungary (+36)</option>
                                                                                            <option value="354">Iceland (+354)</option>
                                                                                            <option value="62">Indonesia (+62)</option>
                                                                                            <option value="98">Iran, Islamic Republic of (+98)</option>
                                                                                            <option value="964">Iraq (+964)</option>
                                                                                            <option value="353">Ireland (+353)</option>
                                                                                            <option value="972">Israel (+972)</option>
                                                                                            <option value="39">Italy (+39)</option>
                                                                                            <option value="1876">Jamaica (+1876)</option>
                                                                                            <option value="81">Japan (+81)</option>
                                                                                            <option value="44">Jersey (+44)</option>
                                                                                            <option value="962">Jordan (+962)</option>
                                                                                            <option value="7">Kazakhstan (+7)</option>
                                                                                            <option value="254">Kenya (+254)</option>
                                                                                            <option value="686">Kiribati (+686)</option>
                                                                                            <option value="850">Korea, Democratic People's Republic of (+850)</option>
                                                                                            <option value="82">Korea, Republic of (+82)</option>
                                                                                            <option value="965">Kuwait (+965)</option>
                                                                                            <option value="996">Kyrgyzstan (+996)</option>
                                                                                            <option value="856">Lao People's Democratic Republic (+856)</option>
                                                                                            <option value="371">Latvia (+371)</option>
                                                                                            <option value="961">Lebanon (+961)</option>
                                                                                            <option value="266">Lesotho (+266)</option>
                                                                                            <option value="231">Liberia (+231)</option>
                                                                                            <option value="218">Libyan Arab Jamahiriya (+218)</option>
                                                                                            <option value="423">Liechtenstein (+423)</option>
                                                                                            <option value="370">Lithuania (+370)</option>
                                                                                            <option value="352">Luxembourg (+352)</option>
                                                                                            <option value="853">Macao (+853)</option>
                                                                                            <option value="389">Macedonia, the Former Yugoslav Republic of (+389)</option>
                                                                                            <option value="261">Madagascar (+261)</option>
                                                                                            <option value="265">Malawi (+265)</option>
                                                                                            <option value="60">Malaysia (+60)</option>
                                                                                            <option value="960">Maldives (+960)</option>
                                                                                            <option value="223">Mali (+223)</option>
                                                                                            <option value="356">Malta (+356)</option>
                                                                                            <option value="44">Man (Isle of) (+44)</option>
                                                                                            <option value="692">Marshall Islands (+692)</option>
                                                                                            <option value="596">Martinique (+596)</option>
                                                                                            <option value="222">Mauritania (+222)</option>
                                                                                            <option value="230">Mauritius (+230)</option>
                                                                                            <option value="269">Mayotte (+269)</option>
                                                                                            <option value="52">Mexico (+52)</option>
                                                                                            <option value="691">Micronesia, Federated States of (+691)</option>
                                                                                            <option value="373">Moldova, Republic of (+373)</option>
                                                                                            <option value="377">Monaco (+377)</option>
                                                                                            <option value="976">Mongolia (+976)</option>
                                                                                            <option value="1664">Montserrat (+1664)</option>
                                                                                            <option value="212">Morocco (+212)</option>
                                                                                            <option value="258">Mozambique (+258)</option>
                                                                                            <option value="95">Myanmar (+95)</option>
                                                                                            <option value="264">Namibia (+264)</option>
                                                                                            <option value="674">Nauru (+674)</option>
                                                                                            <option value="977">Nepal (+977)</option>
                                                                                            <option value="31">Netherlands Antilles (+31)</option>
                                                                                            <option value="599">Netherlands (+599)</option>
                                                                                            <option value="687">New Caledonia (+687)</option>
                                                                                            <option value="64">New Zealand (+64)</option>
                                                                                            <option value="505">Nicaragua (+505)</option>
                                                                                            <option value="227">Niger (+227)</option>
                                                                                            <option value="234">Nigeria (+234)</option>
                                                                                            <option value="683">Niue (+683)</option>
                                                                                            <option value="672">Norfolk Island (+672)</option>
                                                                                            <option value="1670">Northern Mariana Islands (+1670)</option>
                                                                                            <option value="47">Norway (+47)</option>
                                                                                            <option value="968">Oman (+968)</option>
                                                                                            <option value="92">Pakistan (+92)</option>
                                                                                            <option value="680">Palau (+680)</option>
                                                                                            <option value="970">Palestinian Territory, Occupied (+970)</option>
                                                                                            <option value="507">Panama (+507)</option>
                                                                                            <option value="675">Papua New Guinea (+675)</option>
                                                                                            <option value="595">Paraguay (+595)</option>
                                                                                            <option value="51">Peru (+51)</option>
                                                                                            <option value="63">Philippines (+63)</option>
                                                                                            <option value="0">Pitcairn (+0)</option>
                                                                                            <option value="48">Poland (+48)</option>
                                                                                            <option value="351">Portugal (+351)</option>
                                                                                            <option value="1787">Puerto Rico (+1787)</option>
                                                                                            <option value="974">Qatar (+974)</option>
                                                                                            <option value="262">Reunion (+262)</option>
                                                                                            <option value="40">Romania (+40)</option>
                                                                                            <option value="70">Russian Federation (+70)</option>
                                                                                            <option value="250">Rwanda (+250)</option>
                                                                                            <option value="290">Saint Helena (+290)</option>
                                                                                            <option value="1869">Saint Kitts and Nevis (+1869)</option>
                                                                                            <option value="1758">Saint Lucia (+1758)</option>
                                                                                            <option value="508">Saint Pierre and Miquelon (+508)</option>
                                                                                            <option value="1784">Saint Vincent and the Grenadines (+1784)</option>
                                                                                            <option value="684">Samoa (+684)</option>
                                                                                            <option value="378">San Marino (+378)</option>
                                                                                            <option value="239">Sao Tome and Principe (+239)</option>
                                                                                            <option value="966">Saudi Arabia (+966)</option>
                                                                                            <option value="221">Senegal (+221)</option>
                                                                                            <option value="381">Serbia (+381)</option>
                                                                                            <option value="248">Seychelles (+248)</option>
                                                                                            <option value="232">Sierra Leone (+232)</option>
                                                                                            <option value="65">Singapore (+65)</option>
                                                                                            <option value="421">Slovakia (+421)</option>
                                                                                            <option value="386">Slovenia (+386)</option>
                                                                                            <option value="44">Smaller Territories of the UK (+44)</option>
                                                                                            <option value="677">Solomon Islands (+677)</option>
                                                                                            <option value="252">Somalia (+252)</option>
                                                                                            <option value="27">South Africa (+27)</option>
                                                                                            <option value="0">South Georgia and the South Sandwich Islands (+0)</option>
                                                                                            <option value="211">South Sudan (+211)</option>
                                                                                            <option value="34">Spain (+34)</option>
                                                                                            <option value="94">Sri Lanka (+94)</option>
                                                                                            <option value="249">Sudan (+249)</option>
                                                                                            <option value="597">Suriname (+597)</option>
                                                                                            <option value="47">Svalbard and Jan Mayen (+47)</option>
                                                                                            <option value="268">Swaziland (+268)</option>
                                                                                            <option value="46">Sweden (+46)</option>
                                                                                            <option value="41">Switzerland (+41)</option>
                                                                                            <option value="963">Syrian Arab Republic (+963)</option>
                                                                                            <option value="886">Taiwan, Province of China (+886)</option>
                                                                                            <option value="992">Tajikistan (+992)</option>
                                                                                            <option value="255">Tanzania, United Republic of (+255)</option>
                                                                                            <option value="66">Thailand (+66)</option>
                                                                                            <option value="228">Togo (+228)</option>
                                                                                            <option value="690">Tokelau (+690)</option>
                                                                                            <option value="676">Tonga (+676)</option>
                                                                                            <option value="1868">Trinidad and Tobago (+1868)</option>
                                                                                            <option value="216">Tunisia (+216)</option>
                                                                                            <option value="90">Turkey (+90)</option>
                                                                                            <option value="7370">Turkmenistan (+7370)</option>
                                                                                            <option value="1649">Turks and Caicos Islands (+1649)</option>
                                                                                            <option value="688">Tuvalu (+688)</option>
                                                                                            <option value="256">Uganda (+256)</option>
                                                                                            <option value="380">Ukraine (+380)</option>
                                                                                            <option value="971">United Arab Emirates (+971)</option>
                                                                                            <option value="1">United States Minor Outlying Islands (+1)</option>
                                                                                            <option value="598">Uruguay (+598)</option>
                                                                                            <option value="998">Uzbekistan (+998)</option>
                                                                                            <option value="678">Vanuatu (+678)</option>
                                                                                            <option value="39">Vatican City State (Holy See) (+39)</option>
                                                                                            <option value="58">Venezuela (+58)</option>
                                                                                            <option value="84">Viet Nam (+84)</option>
                                                                                            <option value="1284">Virgin Islands, British (+1284)</option>
                                                                                            <option value="1340">Virgin Islands, U.s. (+1340)</option>
                                                                                            <option value="681">Wallis and Futuna (+681)</option>
                                                                                            <option value="212">Western Sahara (+212)</option>
                                                                                            <option value="967">Yemen (+967)</option>
                                                                                            <option value="38">Yugoslavia (+38)</option>
                                                                                            <option value="260">Zambia (+260)</option>
                                                                                            <option value="263">Zimbabwe (+263)</option>
</select>
            </div>
            <div class="col-md-9">
            <input type="Password" class="form-control" id="your-surname" name="your-surname" required>
            </div>
           </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-3">
                <button  type="submit" class="btn btn-dark w-100 fw-bold abu-btn" >SAVE NOW</button>
              </div>
            </div>
          </div>
        </div>
      </form>
                    </div>

                    <div class="tab-pane fade shadow rounded  p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="font-italic mb-4" style="color: #920606;">EDIT EDUCATION AND OCCUPATION</h4>
                        <form>
        <div class="row g-3">

          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Education</label>
          <select class="form-select" aria-label="Default select example" required>
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
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Education Details</label>
          <input type="text" class="form-control" id="your-surname" name="your-surname" required placeholder="Mecotronix">
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Occupation</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="99">Hotel  and  Restaurant Professional</option>
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
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Occupation Details</label>
          <input type="text" class="form-control" id="your-surname" name="your-surname" required placeholder="">
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Annual Income</label>
          <input type="text" class="form-control" id="your-surname" name="your-surname" required placeholder="5550000">
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Employed In</label>
          <input type="text" class="form-control" id="your-surname" name="your-surname" required placeholder="">
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-3">
                <button  type="submit" class="btn btn-dark w-100 fw-bold abu-btn" >SAVE NOW</button>
              </div>
            </div>
          </div>
        </div>
      </form>
                    </div>

                    <div class="tab-pane fade shadow rounded  p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="font-italic mb-4" style="color: #920606;">EDIT PHYSICAL ATTRIBUTES</h4>
                        <form>
        <div class="row g-3">

          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Height</label>
          <select class="form-select" aria-label="Default select example" required>
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
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Weight</label>
          <select class="form-select" aria-label="Default select example" required>
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
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Blood Group</label>
          <select class="form-select" aria-label="Default select example" required>
           <option>A+</option>
            <option>A-</option>
            <option>A1 +</option>
            <option>A1 -</option>
            <option>A1B +</option>
            <option>A1B -</option>
            <option>A2 +</option>
            <option>A2 -</option>
            <option>A2B +</option>
            <option>A2B -</option>
            <option>AB+</option>
            <option>AB-</option>
            <option selected="">B+</option>
            <option>B-</option>
            <option>O+</option>
			<option>O-</option>
</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Body Types</label>
          <select class="form-select" aria-label="Default select example" required>
          <option>Slim</option>
			<option selected="">Average</option>
			<option>Heavy</option>
			<option>Athletic</option>
</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Special Cases</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="None" selected="">None</option>
            <option value="Physically challenged from birth">Physically challenged from birth</option>
            <option value="Physically challenged due to accident">Physically challenged due to accident</option>
            <option value="Mentally challenged from birth">Mentally challenged from birth</option>
            <option value="Mentally challenged due to accident">Mentally challenged due to accident</option>
            <option value="Physical abnormality affecting only looks">Physical abnormality affecting only looks</option>
            <option value="Physical abnormality affecting bodily functions">Physical abnormality affecting bodily functions</option>
            <option value="Physically and mentally challenged">Physically and mentally challenged</option>
            <option value="HIV positive">HIV positive</option>
</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Diet</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="Veg" selected="">Veg</option>
            <option value="Eggetarian">Eggetarian</option>
            <option value="Occasionally Non-Veg">Occasionally Non-Veg</option>
            <option value="Non-Veg">Non-Veg</option>
            <option value="Jain">Jain</option>
            <option value="Vegan">Vegan</option>
</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Smoke</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="Yes">Yes</option>
        	<option value="No" selected="">No</option>
        	<option value="Occasionally">Occasionally</option>
</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Drink</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="Yes">Yes</option>
        	<option value="No" selected="">No</option>
        	<option value="Occasionally">Occasionally</option>
</select>
          </div>
          <div class="col-12 mt-4">
            <div class="row">
              <div class="col-md-3">
                <button type="submit" class="btn btn-dark w-100 fw-bold abu-btn" >SAVE NOW</button>
              </div>
            </div>
          </div>
        </div>
      </form>
                    </div>

                    <div class="tab-pane fade shadow rounded  p-5" id="v-pills-settings1" role="tabpanel" aria-labelledby="v-pills-settings-tab1">
                        <h4 class="font-italic mb-4" style="color: #920606;">EDIT CONTACT DETAILS</h4>
                        <form>
        <div class="row g-3">

          <div class="col-md-12">
          <label for="captcha-input" class="form-label">COUNTRY</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="256" data-code="0">Czeck Republic</option>
                                    <option value="257" data-code="0">Select</option>
                                    <option value="258" data-code="0">Select</option>
                                    <option value="259" data-code="0">Select</option>
                                    <option value="260" data-code="0">Select</option>
                                    <option value="101" selected="" data-code="91">India</option>
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
                                    <option value="246" data-code="263">Zimbabwe</option>
</select>
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">State</label>
          <select class="form-select" aria-label="Default select example" required>
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
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">City</label>
          <select class="form-select" aria-label="Default select example" required>
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
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Postal Pincode</label>
          <input type="text" class="form-control" id="your-surname" name="your-surname" required placeholder="600071">
          </div>
          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Residence Status</label>
          <select class="form-select" aria-label="Default select example" required>
          <option value="Citizen" selected="">Citizen</option>
                <option value="Permanent Resident">Permanent Resident</option>
                <option value="Student Visa">Student Visa</option>
                <option value="Temporary Visa">Temporary Visa</option>
                <option value="Work permit">Work permit</option>
        </select>

          </div>
          <div class="col-12 mt-4">
            <div class="row">
              <div class="col-md-3">
                <button  type="submit" class="btn btn-dark w-100 fw-bold abu-btn" >SAVE NOW</button>
              </div>
            </div>
          </div>
        </div>
      </form>
                    </div>

                    <div class="tab-pane fade shadow rounded  p-5" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab2">
                        <h4 class="font-italic mb-4" style="color: #920606;">EDIT PROFILE</h4>
                        <form>
        <div class="row g-3">

          <div class="col-md-12">
          <label for="captcha-input" class="form-label">Profile Description</label>
          <textarea type="text" class="form-control" id="your-surname" name="your-surname" required></textarea>
          <p style="font-size:13px;">Please enter details or provide a brief description about yourself. Max 1000 characters. If Profile contains any information regarding your contact details, such as e-mail, phone number, etc., your profile will be rejected.</p>
          </div>

          <div class="col-12 mt-4">
            <div class="row">
              <div class="col-md-3">
                <button  type="submit" class="btn btn-dark w-100 fw-bold abu-btn" >SAVE NOW</button>
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
          <option value="" selected="selected">---------- SELECT ----------</option>                <option value="No married brother">No married brother</option>
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
          <option value="" selected="selected">---------- SELECT ----------</option>                <option value="No married sister">No married sister</option>
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
                <button  type="submit" class="btn btn-dark w-100 fw-bold abu-btn" >SAVE NOW</button>
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
          <option value="" selected="selected">---------- SELECT ----------</option>                <option value="No married brother">No married brother</option>
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
          <option value="" selected="selected">---------- SELECT ----------</option>                <option value="No married sister">No married sister</option>
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
                <button  type="submit" class="btn btn-dark w-100 fw-bold abu-btn" >SAVE NOW</button>
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
                <button  type="submit" class="btn btn-dark w-100 fw-bold abu-btn" >SAVE NOW</button>
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
            <img src="{{ env('MAIN_URL') }}public/assets/images/shapes/about-shape-1-2.png" alt="cleenhearts" class="about-one__hand">
        </section>


<!-- START FOOTER -->
@include('include.footer')
<!-- hitwebcounter Code START -->


<!-- END FOOTER -->
<div class="wats">
    <div class="wats2">
<a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0" target="_blank"><img src="{{ env('MAIN_URL') }}public/assets/images/whatsapp.png"></a></div>
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


</body>

</html>
