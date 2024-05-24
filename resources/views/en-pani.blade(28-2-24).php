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

#myProgress {

  /* width: 420px; */

   background-color: #d9d9f2;

  cursor: pointer;

  border-radius: 10px;

}



#myBar {

  width: 0%;

  height: 5px;

  background-color:#9c0505;

  border-radius: 10px;

}



.logo {

  fill: red;

}



.btn-action{

  cursor: pointer;

  padding-top: 10px;

  width: 30px;

}



.btn-ctn, .infos-ctn{

  display: flex;

  align-items: center;

  justify-content: center;

}

.infos-ctn{

padding-top: 20px;

}



.btn-ctn > div {

 padding: 5px;

 margin-top: 18px;

 margin-bottom: 18px;

}



.infos-ctn > div {

 margin-bottom: 8px;

 color: #000;

}



.first-btn{

  margin-left: 3px;

}



.duration{

  margin-left: 10px;

}



.title{

  margin-left: 10px;

  width: 210px;

  text-align: center;

}



.player-ctn{

  border-radius: 15px;

  /* width: 420px; */

  padding: 10px;

  /* background: linear-gradient(90deg, rgba(255,178,2,1) 0%, rgba(255,123,0,1) 15%, rgba(255,165,1,1) 100%); */
background-color: aliceblue;
  margin:auto;

  /* margin-top: 100px; */

}



.playlist-track-ctn{

  display: flex;

  margin-top: 3px;

  border-radius: 5px;

  cursor: pointer;

  border: 1px solid #ffa101;

}

.playlist-track-ctn:last-child{

  /*border: 1px solid #ffc266; */

}



.playlist-track-ctn > div{

  margin:10px;

}

.playlist-info-track{

  width: 80%;

}

.playlist-info-track,.playlist-duration{

  padding-top: 7px;

  padding-bottom: 7px;

  color: #000;

  font-size: 14px;

  pointer-events: none;

}

.playlist-ctn{

   padding-bottom: 20px;

}

.active-track{

  background: linear-gradient(90deg, rgb(28 6 156) 0%, rgb(60 0 207) 15%, rgb(141 4 112) 100%);

  color: #ffc266 !important;

  font-weight: bold;



}



.active-track > .playlist-info-track,.active-track >.playlist-duration,.active-track > .playlist-btn-play{

  color: #fff !important;

}





.playlist-btn-play{

  pointer-events: none;

  padding-top: 5px;

  padding-bottom: 5px;

}

.fas{

  color: #000;

  font-size: 20px;

}

.sng-ul{

    list-style-position: inside;

}

.sng-li{

    list-style-type: disclosure-closed;

    padding: 5px 0 5px 0;

    background: #ffff;

    border: 1px solid orange;

    border-radius: 10px;

    margin: 2px;

}

.sng-li:hover{

    background: linear-gradient(90deg, rgba(255,178,2,1) 0%, rgba(255,123,0,1) 15%, rgba(255,165,1,1) 100%);

    color: #fff;

}

.sng-li a:hover{

    color:#fff !important;

}

.mmh{

    font-size: 20px;

    color: #fff;

}

.mm-con{

    padding: 20px 0 20px 0;

    background: #9a0e0e;

    border-radius: 10px;

    border-left: 5px solid #ff9900;

}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {

    color: #fff;

    background: linear-gradient(90deg, rgba(255,178,2,1) 0%, rgba(255,123,0,1) 15%, rgba(255,165,1,1) 100%);

}

.sng-li {

    list-style-type: disclosure-closed;

    padding: 5px 5px 5px 6px;

    background: #ffff;

    border: 1px solid orange;

    border-radius: 10px;

    margin: 3px;

    text-align: justify;

}

.don-appbtn{

    list-style-type: none;

    margin: 10px

}

</style>

</head>



<body>





<!-- header -->

@include('include.header')

<section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

    <div class="container">

    <h2 class="page-title">En-Pani</h2>

    <ul class="breadcrumb-nav">

                <li><a href="#">Home</a></li>

                <li><i class="fas fa-angle-right"></i></li>

                <li> En-Pani</li>

            </ul>

    </div>

</section>

<div class="container mm-con mt-5">

    <div class="row">

        <div class="col-md-12">

            <h2 class="text-center mmh">You have been enrolled for Velukkudi Krishnan Swami’s Online Kalakshepam.<span style="color: #e8a71a;

    margin: 0 0 0 9px ">Click Here to Listen</span></h2>

        </div>

    </div>



</div>



<section class="enpani-sec">

    <div class="container">

    <div class="row">

            <div class="col-md-3">

                <h2 class="text-center"></h2>

                <!-- Tabs nav -->

                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home1-tab" data-toggle="pill" href="#v-pills-home1" role="tab" aria-controls="v-pills-home1" aria-selected="true">

                        <i class="fa fa-user-circle-o mr-2"></i>

                        <span class="font-weight-bold small text-uppercase">All</span></a>


                        <a class="nav-link mb-3 p-3 shadow " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">

<i class="fa fa-user-circle-o mr-2"></i>

<span class="font-weight-bold small text-uppercase">Azhwars & Acharyas</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">

                        <i class="fa fa-calendar-minus-o mr-2"></i>

                        <span class="font-weight-bold small text-uppercase">Behaviour</span></a>



                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">

                        <i class="fa fa-star mr-2"></i>

                        <span class="font-weight-bold small text-uppercase">Brahmam</span></a>



                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">

                        <i class="fa fa-check mr-2"></i>

                        <span class="font-weight-bold small text-uppercase">Divyadesams</span></a>

                    </div>
                    <br>
                    <div class="card bg-light p-3">
                        <h4>Recent Posts</h4>
                        <p> <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" style="
    fill: #fd1d1d;
"></path>
</svg> Kanyadhaanam</p>
                    </div>
            </div>





            <div class="col-md-9 mb-5" >

                <!-- Tabs content -->

                <div class="tab-content mt-0" id="v-pills-tabContent">
                <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home1" role="tabpanel" aria-labelledby="v-pills-home1-tab">

<h4 class=" mb-4">All</h4>

<div class="sng-dwnld text-center">

                    <ul class="sng-ul">

                        <li class="sng-li"><a href="">01 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">02 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">03 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">04 Theemai Neekki Nanmai Alikkum Thudhigal</a></i>

                        <li class="sng-li"><a href="">05 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">06 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">08 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">09 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">10 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">11 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">12 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>



                    </ul>



                </div>




</div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                        <h4 class=" mb-4">Azhwars & Acharyas</h4>

                        <audio id="myAudio" ontimeupdate="onTimeUpdate()">



 <source id="source-audio" src="" type="audio/mpeg">

</audio>



<div class="player-ctn">

 <div class="infos-ctn">

   <div class="timer">00:00</div>

   <div class="title"></div>

   <div class="duration">00:00</div>

 </div>

 <div id="myProgress">

   <div id="myBar"></div>

 </div>

 <div class="btn-ctn">

    <div class="btn-action first-btn" onclick="previous()">

       <div id="btn-faws-back">

         <i class='fas fa-step-backward'></i>

       </div>

    </div>

    <div class="btn-action" onclick="rewind()">

       <div id="btn-faws-rewind">

         <i class='fas fa-backward'></i>

       </div>

    </div>

    <div class="btn-action" onclick="toggleAudio()">

       <div id="btn-faws-play-pause">

         <i class='fas fa-play' id="icon-play"></i>

         <i class='fas fa-pause' id="icon-pause" style="display: none"></i>

       </div>

    </div>

    <div class="btn-play" onclick="forward()">

       <div id="btn-faws-forward">

         <i class='fas fa-forward'></i>

       </div>

    </div>

    <div class="btn-action" onclick="next()">

       <div id="btn-faws-next">

         <i class='fas fa-step-forward'></i>

       </div>

    </div>

    <div class="btn-mute" id="toggleMute" onclick="toggleMute()">

       <div id="btn-faws-volume">

         <i id="icon-vol-up" class='fas fa-volume-up'></i>

         <i id="icon-vol-mute" class='fas fa-volume-mute' style="display: none"></i>

       </div>

    </div>

 </div>

 <div class="playlist-ctn"></div>

                    </div>

                    </div>



                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                    <h4 class=" mb-4">Behaviour</h4>

                    <div class="sng-dwnld text-center">

                    <ul class="sng-ul">

                        <li class="sng-li"><a href="">01 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">02 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">03 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">04 Theemai Neekki Nanmai Alikkum Thudhigal</a></i>

                        <li class="sng-li"><a href="">05 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">06 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">08 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">09 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">10 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">11 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">12 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>



                    </ul>



                </div>

                    </div>



                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                        <h4 class=" mb-4">Brahmam</h4>

                        <div class="sng-dwnld text-center">

                    <ul class="sng-ul">

                        <li class="sng-li"><a href="">01 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">02 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">03 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">04 Theemai Neekki Nanmai Alikkum Thudhigal</a></i>

                        <li class="sng-li"><a href="">05 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">06 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">08 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">09 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">10 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">11 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">12 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>



                    </ul>



                </div>

                    </div>



                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                        <h4 class=" mb-4">Divyadesams</h4>

                        <div class="sng-dwnld text-center">

                    <ul class="sng-ul">

                        <li class="sng-li"><a href="">01 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">02 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">03 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">04 Theemai Neekki Nanmai Alikkum Thudhigal</a></i>

                        <li class="sng-li"><a href="">05 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">06 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">08 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">09 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">10 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">11 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">12 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>



                    </ul>



                </div>

                    </div>

                </div>

                <div class="row justify-content-center">



                    <div class="don-appbtn">

                    <h2>Download Kinchit En PaNi App</h2>

                        <ul class="d-flex">

                            <li class="don-appbtn"><a   href="https://itunes.apple.com/us/app/kinchit-en-pani/id1233136625" target="_blank" ><img src="{{ env('MAIN_URL') }}public/assets/images/audio/apple-store.png">

                        </a></li>

                        <li class="don-appbtn"><a href="https://play.google.com/store/apps/details?id=icm.kinchitkaram.androidapp&amp;hl=en" target="_blank""><img src="{{ env('MAIN_URL') }}public/assets/images/audio/kinchit-en-pani-app.png">

                        </a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>



    </div>



</section>

<!-- <section  class="rm-online mb-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-6">

            <audio id="myAudio" ontimeupdate="onTimeUpdate()">



 <source id="source-audio" src="" type="audio/mpeg">

</audio>



<div class="player-ctn">

 <div class="infos-ctn">

   <div class="timer">00:00</div>

   <div class="title"></div>

   <div class="duration">00:00</div>

 </div>

 <div id="myProgress">

   <div id="myBar"></div>

 </div>

 <div class="btn-ctn">

    <div class="btn-action first-btn" onclick="previous()">

       <div id="btn-faws-back">

         <i class='fas fa-step-backward'></i>

       </div>

    </div>

    <div class="btn-action" onclick="rewind()">

       <div id="btn-faws-rewind">

         <i class='fas fa-backward'></i>

       </div>

    </div>

    <div class="btn-action" onclick="toggleAudio()">

       <div id="btn-faws-play-pause">

         <i class='fas fa-play' id="icon-play"></i>

         <i class='fas fa-pause' id="icon-pause" style="display: none"></i>

       </div>

    </div>

    <div class="btn-play" onclick="forward()">

       <div id="btn-faws-forward">

         <i class='fas fa-forward'></i>

       </div>

    </div>

    <div class="btn-action" onclick="next()">

       <div id="btn-faws-next">

         <i class='fas fa-step-forward'></i>

       </div>

    </div>

    <div class="btn-mute" id="toggleMute" onclick="toggleMute()">

       <div id="btn-faws-volume">

         <i id="icon-vol-up" class='fas fa-volume-up'></i>

         <i id="icon-vol-mute" class='fas fa-volume-mute' style="display: none"></i>

       </div>

    </div>

 </div>

 <div class="playlist-ctn"></div>

</div>

            </div>

            <div class="col-md-5">

                <div class="sng-dwnld text-center">

                    <ul class="sng-ul">

                        <li class="sng-li"><a href="">01 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">02 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">03 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">04 Theemai Neekki Nanmai Alikkum Thudhigal</a></i>

                        <li class="sng-li"><a href="">05 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">06 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">08 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">09 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">10 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">11 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>

                        <li class="sng-li"><a href="">12 Theemai Neekki Nanmai Alikkum Thudhigal</a></li>



                    </ul>



                </div>

            </div>

        </div>

    </div>



</section> -->



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



<script> function createTrackItem(index,name,duration){

    var trackItem = document.createElement('div');

    trackItem.setAttribute("class", "playlist-track-ctn");

    trackItem.setAttribute("id", "ptc-"+index);

    trackItem.setAttribute("data-index", index);

    document.querySelector(".playlist-ctn").appendChild(trackItem);



    var playBtnItem = document.createElement('div');

    playBtnItem.setAttribute("class", "playlist-btn-play");

    playBtnItem.setAttribute("id", "pbp-"+index);

    document.querySelector("#ptc-"+index).appendChild(playBtnItem);



    var btnImg = document.createElement('i');

    btnImg.setAttribute("class", "fas fa-play");

    btnImg.setAttribute("height", "40");

    btnImg.setAttribute("width", "40");

    btnImg.setAttribute("id", "p-img-"+index);

    document.querySelector("#pbp-"+index).appendChild(btnImg);



    var trackInfoItem = document.createElement('div');

    trackInfoItem.setAttribute("class", "playlist-info-track");

    trackInfoItem.innerHTML = name

    document.querySelector("#ptc-"+index).appendChild(trackInfoItem);



    var trackDurationItem = document.createElement('div');

    trackDurationItem.setAttribute("class", "playlist-duration");

    trackDurationItem.innerHTML = duration

    document.querySelector("#ptc-"+index).appendChild(trackDurationItem);

  }



  var listAudio = [

    {

      name:"Artist 1 - audio 1",

      file:"https://www.soundhelix.com/examples/mp3/SoundHelix-Song-10.mp3",

      duration:"08:47"

    },

    {

      name:"Artist 2 - audio 2",

      file:"https://www.soundhelix.com/examples/mp3/SoundHelix-Song-5.mp3",

      duration:"05:53"

    },

    {

      name:"Artist 3 - audio 3",

      file:"https://file-examples.com/wp-content/uploads/2017/11/file_example_MP3_1MG.mp3",

      duration:"00:27"

    },

    {

      name:"Artist 4 - audio 4",

      file:"https://file-examples.com/wp-content/uploads/2017/11/file_example_MP3_1MG.mp3",

      duration:"00:27"

    },





  ]



  for (var i = 0; i < listAudio.length; i++) {

      createTrackItem(i,listAudio[i].name,listAudio[i].duration);

  }

  var indexAudio = 0;



  function loadNewTrack(index){

    var player = document.querySelector('#source-audio')

    player.src = listAudio[index].file

    document.querySelector('.title').innerHTML = listAudio[index].name

    this.currentAudio = document.getElementById("myAudio");

    this.currentAudio.load()

    this.toggleAudio()

    this.updateStylePlaylist(this.indexAudio,index)

    this.indexAudio = index;

  }



  var playListItems = document.querySelectorAll(".playlist-track-ctn");



  for (let i = 0; i < playListItems.length; i++){

    playListItems[i].addEventListener("click", getClickedElement.bind(this));

  }



  function getClickedElement(event) {

    for (let i = 0; i < playListItems.length; i++){

      if(playListItems[i] == event.target){

        var clickedIndex = event.target.getAttribute("data-index")

        if (clickedIndex == this.indexAudio ) { // alert('Same audio');

            this.toggleAudio()

        }else{

            loadNewTrack(clickedIndex);

        }

      }

    }

  }



  document.querySelector('#source-audio').src = listAudio[indexAudio].file

  document.querySelector('.title').innerHTML = listAudio[indexAudio].name





  var currentAudio = document.getElementById("myAudio");



  currentAudio.load()



  currentAudio.onloadedmetadata = function() {

        document.getElementsByClassName('duration')[0].innerHTML = this.getMinutes(this.currentAudio.duration)

  }.bind(this);



  var interval1;



  function toggleAudio() {



    if (this.currentAudio.paused) {

      document.querySelector('#icon-play').style.display = 'none';

      document.querySelector('#icon-pause').style.display = 'block';

      document.querySelector('#ptc-'+this.indexAudio).classList.add("active-track");

      this.playToPause(this.indexAudio)

      this.currentAudio.play();

    }else{

      document.querySelector('#icon-play').style.display = 'block';

      document.querySelector('#icon-pause').style.display = 'none';

      this.pauseToPlay(this.indexAudio)

      this.currentAudio.pause();

    }

  }



  function pauseAudio() {

    this.currentAudio.pause();

    clearInterval(interval1);

  }



  var timer = document.getElementsByClassName('timer')[0]



  var barProgress = document.getElementById("myBar");





  var width = 0;



  function onTimeUpdate() {

    var t = this.currentAudio.currentTime

    timer.innerHTML = this.getMinutes(t);

    this.setBarProgress();

    if (this.currentAudio.ended) {

      document.querySelector('#icon-play').style.display = 'block';

      document.querySelector('#icon-pause').style.display = 'none';

      this.pauseToPlay(this.indexAudio)

      if (this.indexAudio < listAudio.length-1) {

          var index = parseInt(this.indexAudio)+1

          this.loadNewTrack(index)

      }

    }

  }





  function setBarProgress(){

    var progress = (this.currentAudio.currentTime/this.currentAudio.duration)*100;

    document.getElementById("myBar").style.width = progress + "%";

  }





  function getMinutes(t){

    var min = parseInt(parseInt(t)/60);

    var sec = parseInt(t%60);

    if (sec < 10) {

      sec = "0"+sec

    }

    if (min < 10) {

      min = "0"+min

    }

    return min+":"+sec

  }



  var progressbar = document.querySelector('#myProgress')

  progressbar.addEventListener("click", seek.bind(this));





  function seek(event) {

    var percent = event.offsetX / progressbar.offsetWidth;

    this.currentAudio.currentTime = percent * this.currentAudio.duration;

    barProgress.style.width = percent*100 + "%";

  }



  function forward(){

    this.currentAudio.currentTime = this.currentAudio.currentTime + 5

    this.setBarProgress();

  }



  function rewind(){

    this.currentAudio.currentTime = this.currentAudio.currentTime - 5

    this.setBarProgress();

  }





  function next(){

    if (this.indexAudio <listAudio.length-1) {

        var oldIndex = this.indexAudio

        this.indexAudio++;

        updateStylePlaylist(oldIndex,this.indexAudio)

        this.loadNewTrack(this.indexAudio);

    }

  }



  function previous(){

    if (this.indexAudio>0) {

        var oldIndex = this.indexAudio

        this.indexAudio--;

        updateStylePlaylist(oldIndex,this.indexAudio)

        this.loadNewTrack(this.indexAudio);

    }

  }



  function updateStylePlaylist(oldIndex,newIndex){

    document.querySelector('#ptc-'+oldIndex).classList.remove("active-track");

    this.pauseToPlay(oldIndex);

    document.querySelector('#ptc-'+newIndex).classList.add("active-track");

    this.playToPause(newIndex)

  }



  function playToPause(index){

    var ele = document.querySelector('#p-img-'+index)

    ele.classList.remove("fa-play");

    ele.classList.add("fa-pause");

  }



  function pauseToPlay(index){

    var ele = document.querySelector('#p-img-'+index)

    ele.classList.remove("fa-pause");

    ele.classList.add("fa-play");

  }





  function toggleMute(){

    var btnMute = document.querySelector('#toggleMute');

    var volUp = document.querySelector('#icon-vol-up');

    var volMute = document.querySelector('#icon-vol-mute');

    if (this.currentAudio.muted == false) {

       this.currentAudio.muted = true

       volUp.style.display = "none"

       volMute.style.display = "block"

    }else{

      this.currentAudio.muted = false

      volMute.style.display = "none"

      volUp.style.display = "block"

    }

  }</script>

</body>



</html>
