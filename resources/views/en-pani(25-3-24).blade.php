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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" />


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

            background-color: #9c0505;

            border-radius: 10px;

        }



        .logo {

            fill: red;

        }



        .btn-action {

            cursor: pointer;

            padding-top: 10px;

            width: 30px;

        }



        .btn-ctn,
        .infos-ctn {

            display: flex;

            align-items: center;

            justify-content: center;

        }

        .infos-ctn {

            padding-top: 20px;

        }



        .btn-ctn>div {

            padding: 5px;

            margin-top: 18px;

            margin-bottom: 18px;

        }



        .infos-ctn>div {

            margin-bottom: 8px;

            color: #000;

        }



        .first-btn {

            margin-left: 3px;

        }



        .duration {

            margin-left: 10px;

        }



        .title {

            margin-left: 10px;

            width: 210px;

            text-align: center;

        }



        .player-ctn {

            border-radius: 15px;
            padding: 10px;
            background-color: #fdfdfd;
            margin: auto;
            box-shadow: 0 14px 28px rgb(0 0 0 / 11%), 0 10px 10px rgb(0 0 0 / 0%);
        }



        .playlist-track-ctn {

            display: flex;

            margin-top: 3px;

            border-radius: 5px;

            cursor: pointer;

            border: 1px solid #ffa101;

        }

        .playlist-track-ctn:last-child {

            /*border: 1px solid #ffc266; */

        }



        .playlist-track-ctn>div {

            margin: 6px;

        }

        .playlist-info-track {

            width: 80%;

        }

        .playlist-info-track,
        .playlist-duration {

            padding-top: 7px;

            padding-bottom: 7px;

            color: #000;

            font-size: 14px;

            pointer-events: none;

        }

        .playlist-ctn {

            padding-bottom: 20px;

        }

        .active-track {

            background: #ffb602;

            color: #ffc266 !important;

            font-weight: bold;

        }

        .active-track>.playlist-info-track,
        .active-track>.playlist-duration,
        .active-track>.playlist-btn-play {

            color: #fff !important;

        }



        .playlist-btn-play {

            pointer-events: none;

            padding-top: 5px;

            padding-bottom: 5px;

        }

        .fas {
            color: #7e0707;
            font-size: 16px;
        }

        .sng-ul {

            list-style-position: inside;

        }

        .sng-li {

            list-style-type: disclosure-closed;

            padding: 5px 0 5px 0;

            background: #ffff;

            border: 1px solid orange;

            border-radius: 10px;

            margin: 2px;

        }

        .sng-li:hover {

            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);

            color: #fff;

        }

        .sng-li a:hover {

            color: #fff !important;

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

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {

            color: #fff;

            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);

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

        .don-appbtn {

            list-style-type: none;

            margin: 10px
        }

        .hidden {
            display: none;
        }

        /* new audio design css */
        .new-audio-sec .media-controls {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* background: no-repeat 3vw 3vh url(https://assets.codepen.io/518555/sparkles1.svg), no-repeat right 5vw bottom 13vh url(https://assets.codepen.io/518555/sparkles4.svg), no-repeat 17vw 7vh / 19vw  url(https://assets.codepen.io/518555/blobStripe.svg); */
            background:
                url(https://assets.codepen.io/518555/sparkles1.svg) no-repeat 3vw 3vh,
                /* First background image */
                url(https://assets.codepen.io/518555/sparkles4.svg) no-repeat right 5vw bottom 13vh,
                /* Second background image */
                url(https://assets.codepen.io/518555/blobStripe.svg) no-repeat 17vw 7vh / 19vw;
            /* Third background image */
            /* background-color: #f5f5f5; */
            background-color: #ff9f0187;
            /* Background color */

        }

        .new-audio-sec .media-buttons {
            display: flex;
            gap: 10px;
        }

        .new-audio-sec .media-button {
        
            transition: background-color 0.3s;
        }

        .new-audio-sec .media-button:hover {
       
        }

        .new-audio-sec .play-button {
            background-color: transparent;
            border: 0;
        }

        .new-audio-sec .media-progress {
            width: 100%;
            /* margin-top: 20px; */
        }

        .new-audio-sec .progress-time {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #333;
        }

        .new-audio-sec .progress-time-current,
        .progress-time-total {
            flex: 0 0 auto;
        }

        .new-audio-sec button.speaker-button {
            border: 0;
            background: transparent;
        }

        .new-audio-sec .progress-bar-wrapper {
            flex: 1;
            height: 8px;
            background-color: #ecf0f1;
            border-radius: 4px;
            margin: 0 10px;
        }

        .new-audio-sec .progress-bar {
            height: 100%;
            width: 0;
            /* background-color: #3498db; */
            background: linear-gradient(to right, #fdd25f, #ff6b00);
            border-radius: 4px;
        }

        .new-audio-sec .progress-bar-handle {
            position: absolute;
            top: -5px;
            left: 0;
            width: 10px;
            height: 18px;
            cursor: pointer;
        }

        .new-audio-sec .progress-bar-handle i {
            font-size: 18px;
            color: #3498db;
        }

        .new-audio-sec .next-prev-buttons {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }

        .new-audio-sec .next-prev-button {
            background-color: transparent;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .new-audio-sec .new-audio-sec.next-prev-button:hover {
            background-color: #2980b9;
        }

        i.fas.fa-play.button-icons.delta {
            background: linear-gradient(to bottom left, #ffffff, #fff8e7);
            border: 1px solid #fff3eb;
            box-shadow: -1px 1px 1px rgba(255, 195, 153, 0.25), 1px -1px 1px rgba(255, 255, 255, 0.25), -2px 2px 2px rgba(255, 195, 153, 0.2), 2px -2px 2px rgba(255, 255, 255, 0.2), -4px 4px 4px rgba(255, 195, 153, 0.15), 4px -4px 4px rgba(255, 255, 255, 0.15), -8px 8px 8px rgba(255, 195, 153, 0.1), 8px -8px 8px rgba(255, 255, 255, 0.1), -16px 16px 16px rgba(255, 195, 153, 0.05), 16px -16px 16px rgba(255, 255, 255, 0.05);
            color: #f26600;
            margin-bottom: 8px;
            padding: 24px;
            border-radius: 50%;
        }

        i.fas.fa-pause.button-icons.delta {
            /* background: linear-gradient(to bottom left, #fd1d1d, #ffa101); */
            background: linear-gradient(to bottom left, #ff9b01, #e1a541de);
            border: 1px solid #ff9b01;
            box-shadow: -1px 1px 1px rgba(255, 195, 153, 0.25), 1px -1px 1px rgba(255, 255, 255, 0.25), -2px 2px 2px rgba(255, 195, 153, 0.2), 2px -2px 2px rgba(255, 255, 255, 0.2), -4px 4px 4px rgba(255, 195, 153, 0.15), 4px -4px 4px rgba(255, 255, 255, 0.15), -8px 8px 8px rgba(255, 195, 153, 0.1), 8px -8px 8px rgba(255, 255, 255, 0.1), -16px 16px 16px rgba(255, 195, 153, 0.05), 16px -16px 16px rgba(255, 255, 255, 0.05);
            color: #ffffff;
            margin-bottom: 8px;
            padding: 24px;
            border-radius: 50%;
            transition: all 4s ease-out;

        }

        i.fas.fa-step-backward,
        i.fas.fa-step-forward {
            background: linear-gradient(to bottom left, #fff8e7, #ffe1cc);
            color: #838383;
            border-radius: 100%;
            margin-bottom: 4px;
            margin-top: auto;
            padding: 16px;
            transition: all 4s ease-out;
        }

        i.fas.fa-volume-mute,
        i.fas.fa-volume-up {
            background: linear-gradient(to bottom left, #fff8e7, #ffe1cc);
            color: #838383;
            border-radius: 100%;
            margin-bottom: 4px;
            margin-top: auto;
            padding: 11px;
        }

        .i.fas.fa-volume-up {}

            {
            background: linear-gradient(to bottom left, #fff8e7, #ffe1cc);
            color: #838383;
            border-radius: 100%;
            margin-bottom: 4px;
            margin-top: auto;
            padding: 11px;
        }

        .audi-sec {
            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);
            padding: 10px !important;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgb(255 164 1 / 48%), 0 6px 6px rgb(255 164 1 / 42%);
        }

        .categories button {
            background: white;
            border: 1px solid #b0a7a7;
            margin-bottom: 11px;
            border-radius: 5px;
            width: 100%;
            text-align: justify;
            transition: all 2s ease-out;
        }

        .categories button:hover {
            background: #ffcc79;
            color: #fff;
            border: 1px solid #ffcc79;
        }

        #volumeSlider {
            width: 80px;
            margin: 0 10px;
            background: linear-gradient(to right, #3498db, #e74c3c);
            border: none;
            border-radius: 5px;
            outline: none;
        }

        .loading {
            align-items: center;
            display: flex;
            justify-content: center;
            position: fixed;
            top: 50%;
            left: 0%;
            right: 0%;
            width: 100%;
        }

        .loading__dot {
            animation: dot ease-in-out 1s infinite;
            background-color: grey;
            display: inline-block;
            height: 20px;
            margin: 10px;
            width: 20px;
        }

        .loading__dot:nth-of-type(2) {
            animation-delay: 0.2s;
        }

        .loading__dot:nth-of-type(3) {
            animation-delay: 0.3s;
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

        margin: 0 0 0 9px ">  <a href="{{ env('MAIN__URL') }}courses">Click Here to Listen   </a></span></h2>
        
            

        </div>

    </div>



</div>



<section class="new-audio-sec">

    <div class="container">

    <div class="row mb-4">
                <div class="col-md-12 mx-auto">
                    <div class="media-controls ">
                        <h5><i class="fa fa-music text-danger" aria-hidden="true"></i><span
                                id="show_audio_title"></span>
                        </h5>
                        <div class="media-buttons">
                            <div class="next-prev-buttons">
                                <button class="next-prev-button" onclick="playPrevious()">
                                    <i class="fas fa-step-backward"></i>
                                </button>
                                <button class="play-button media-button" label="play">
                                    <i class="fas fa-play button-icons delta"></i>
                                    <span class="button-text milli"></span>
                                </button>
                                <button class="next-prev-button" onclick="playNext()">
                                    <i class="fas fa-step-forward"></i>
                                </button>
                            </div>
                        </div>

                        <div class="media-progress">
                            <div class="progress-time">
                                <div class="progress-time-current milli">00:00</div>
                                <div class="progress-bar-wrapper progress" id="progressBarWrapper">
                                    <div class="progress-bar" style="width: 0;"></div>
                                </div>
                                <div class="progress-time-total milli">00:00</div>
                                <div class="volume-control">
                                    <button class="speaker-button" onclick="toggleMute()">
                                        <i class="fas fa-volume-up"></i> <!-- Font Awesome icon for unmuted speaker -->
                                    </button>
                                    <input type="range" min="0" max="1" step="0.01" value="1"
                                        id="volumeSlider" oninput="updateVolume()">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

    <div class="row">

            <div class="col-md-3">

                <h2 class="text-center"></h2>

                <!-- Tabs nav -->

                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <!-- <a class="nav-link mb-3 p-3 shadow def-anc active" id="v-pills-home1-tab" data-toggle="pill" href="#v-pills-home1" role="tab" aria-controls="v-pills-home1" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small ">All</span></a>


                        <a class="nav-link mb-3 p-3 shadow def-anc " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                         <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small ">Azhwars & Acharyas</span></a>
                        
                       
                         <a class="nav-link mb-3 p-3 shadow def-anc" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small ">Behaviour</span></a>



                    <a class="nav-link mb-3 p-3 shadow def-anc" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small ">Brahmam</span></a>



                    <a class="nav-link mb-3 p-3 shadow def-anc" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"> -->
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small ">Divyadesams</span></a>

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
                <div class="tab-pane fade shadow rounded bg-white show active p-2" id="v-pills-home1" role="tabpanel" aria-labelledby="v-pills-home1-tab">
                <div class="col-12   my-5 mt-0 p-3">
                <div class="audio-list">
                    <!-- <h2 Class="text-center my-3">Audio List</h2> -->
                    <div class="row justify-content-evenly audios-list-show">
                        <div class="col-md-12 ">
                            <div class="categories audi-sec" id="categories1">
                                <!-- <h5 class="py-1 text-white">001-Paratantryam</h5> -->
                                <!-- <div class="audios" id="audios1">
                                   
                                    <button onclick="playAudio(1,1)"> <i class="fa fa-music text-dark"
                                            aria-hidden="true"></i> 01 Theemai
                                        Neekki Nanmai Alikkum Thudhigal</button>
                                    <input type="hidden" name="audio1" id="audio1"
                                        value="https://kinchit-front.senthil.in.net/public/assets/Marubadi%20Nee.mp3">
                                </div>
                                <div class="audios" id="audios2">
                              
                                    <button onclick="playAudio(1,2)"> <i class="fa fa-music text-dark"
                                            aria-hidden="true"></i> 02 Theemai
                                        Neekki Nanmai Alikkum Thudhigal</button>
                                    <input type="hidden" name="audio2" id="audio2"
                                        value="https://kinchit-front.senthil.in.net/public/assets/Panjavarna%20Kiliye.mp3">
                                </div>
                                <div class="audios" id="audios3">
                             
                                    <button onclick="playAudio(1,3)"> <i class="fa fa-music text-dark"
                                            aria-hidden="true"></i> 03 Theemai
                                        Neekki Nanmai Alikkum Thudhigal</button>
                                    <input type="hidden" name="audio3" id="audio3"
                                        value="https://kinchit-front.senthil.in.net/public/assets/Marubadi%20Nee.mp3">
                                </div> -->
                            </div>
                        </div>
                    </div>


                </div>
                <audio id="audioPlayer" preload="metadata">
                    <!-- Add your audio sources here -->
                    <input type="hidden" name="main_audio_index" id="main_audio_index">
                    <input type="hidden" name="sub_audio_index" id="sub_audio_index">
                    <source src="" type="audio/mp3">
                    <!-- <source src="https://ia802900.us.archive.org/16/items/mythium/AC_TSOWAfucked_up.mp3" type="audio/mp3">
    <source src="https://archive.org/download/mythium/BS_ATKM.mp3" type="audio/mp3"> -->
                    Your browser does not support the audio element.
                </audio>
            </div>
                   </div>

                </div>

                <div class="row justify-content-center">



                    <div class="don-appbtn">

                    <h2>Download Kinchit En PaNi App</h2>

                        <ul class="d-flex">

                            <li class="don-appbtn"><a   href="https://itunes.apple.com/us/app/kinchit-en-pani/id1233136625" target="_blank" ><img src="{{ env('MAIN_URL') }}public/assets/images/audio/apple-store.png">

                        </a></li>

                        <li class="don-appbtn"><a href="https://play.google.com/store/apps/details?id=icm.kinchitkaram.androidapp&amp;hl=en" target="_blank"><img src="{{ env('MAIN_URL') }}public/assets/images/audio/kinchit-en-pani-app.png">

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>


<script>
 $(function() {
    getAndListAudios();
});

function getAndListAudios() {
    var formdata = new FormData();
    formdata.append('token', getCookie('token'));
    formdata.append('device_id', '1');
    
    $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-enpani-audios",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response.status == 200) {
                var html = '';
                response.data.forEach(function(item, index) {
                    var parentId = item.parent_id;
                    var parentTitle = item.parent_title;
                    var isActive = index === 0 ? 'active' : ''; // Add 'active' class to the first item
                    html += `<a href="#v-pills-home1" class="nav-link mb-3 p-3 shadow def-anc ${isActive}" data-parent-title="${parentTitle}" id="v-pills-${parentId}-tab" data-toggle="pill" href="#v-pills-${parentId}" role="tab" aria-controls="v-pills-${parentId}" aria-selected="${isActive ? 'true' : 'false'}">
                                <i class="fa fa-user-circle-o mr-2"></i>
                                <span class="font-weight-bold small">${parentTitle == 'Kinchit En PaNi - App Satsang' ? 'All' : parentTitle}</span>
                            </a>`;
                });
                $('.nav').html(html); 
                EnpaniAudios(response['data'][0].parent_title);
                $('.nav-link').on('click', function(e) {
                    e.preventDefault();
                    var parentTitle = $(this).data('parent-title');
                    EnpaniAudios(parentTitle);
                });
            } else if (response.status == 400) {
                // Handle 400 status
            } else if (response.status == 500) {
                // Handle 500 status
            }   else if (response['status'] == 501) {
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
                            action: function() {
                              sessionStorage.clear();
                              deleteCookie('typeofuser');
                              deleteCookie('token');
                              deleteCookie('marital_acc');
                              window.location.href = '/user-login';
                            }
                        }
                    }
                });
            }
        },
        error: function(data) {
            console.log('Error:', data);
        }
    });
}
function EnpaniAudios(parentTitle) {
    
    var formdata = new FormData();
    formdata.append('token', getCookie('token'));
    formdata.append('device_id', '1');
    formdata.append('parent_title', parentTitle);

    $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-enpani-audios",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
    if (response.status == 200) {
        console.log(response)
        var html = ``;
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].parent_title == parentTitle) {
                html += `<div class="col-md-12 mx-auto mb-3">
                    <div class="categories audi-sec" id="categories${i+1}">
                    <h2 class="py-1 text-white text-center">${response.data[i].parent_title}</h2>`;

                for (var j = 0; j < response.data[i].audios.length; j++) {
                    html += `<div class="audios" id="audios${j+1}">
                        <button id="audio_button${j+1}" class="audio-button-paly" onclick="playAudio(${i+1},${j+1})"> <i class="fa fa-music text-dark ms-2"
                                aria-hidden="true"></i>${response.data[i].audios[j].post_title}</button>
                        <input type="hidden" name="audio${j+1}" id="audio${j+1}"
                            value="${response.data[i].audios[j].guid}">
                    </div>`;
                }
                html += `</div>
                    </div>`;
            }
        }
        $('.audios-list-show').html(html);
    } else if (response.status == 400) {
        // Handle 400 status
    } else if (response.status == 500) {
        // Handle 500 status
    }   else if (response['status'] == 501) {
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
                            action: function() {
                              sessionStorage.clear();
                              deleteCookie('typeofuser');
                              deleteCookie('token');
                              deleteCookie('marital_acc');
                              window.location.href = '/user-login';
                            }
                        }
                    }
                });
            }
        },
    
        error: function(data) {
            console.log('Error:', data);
        }
    });
}





        const audio = document.getElementById('audioPlayer');
        const playButton = document.querySelector('.play-button');
        const progressBar = document.querySelector('.progress-bar');
        const progressBarWrapper = document.getElementById('progressBarWrapper');
        const progressBarHandle = document.getElementById('progressBarHandle');
        const currentTimeDisplay = document.querySelector('.progress-time-current');
        const totalTimeDisplay = document.querySelector('.progress-time-total');
        const speakerButton = document.querySelector('.speaker-button');
        const volumeSlider = document.getElementById('volumeSlider');

        let isMuted = false;

        function updateVolume() {
            audio.volume = volumeSlider.value;
            if (audio.volume === 0) {
                isMuted = true;
                updateVolumeIcon();
            } else {
                isMuted = false;
                updateVolumeIcon();
            }
        }

        function toggleMute() {
            if (isMuted) {
                audio.volume = 1; // Unmute
                speakerButton.innerHTML = '<i class="fas fa-volume-up"></i>'; // Change icon to unmuted speaker
            } else {
                audio.volume = 0; // Mute
                speakerButton.innerHTML = '<i class="fas fa-volume-mute"></i>'; // Change icon to muted speaker
            }
            isMuted = !isMuted;
        }
        let isPlaying = false;

        playButton.addEventListener('click', togglePlay);

        audio.addEventListener('timeupdate', updateProgressBar);
        audio.addEventListener('loadedmetadata', () => {
            totalTimeDisplay.textContent = formatTime(audio.duration);
            currentTimeDisplay.textContent = formatTime(audio.currentTime);
        });

        progressBarWrapper.addEventListener('click', handleProgressBarClick);
        progressBarHandle.addEventListener('mousedown', startProgressBarDrag);

        function togglePlay() {
            if (isPlaying) {
                audio.pause();
                playButton.innerHTML =
                    '<i class="fas fa-play button-icons delta"></i><span class="button-text milli"></span>';
            } else {
                audio.play();
                playButton.innerHTML =
                    '<i class="fas fa-pause button-icons delta"></i><span class="button-text milli"></span>';
            }
            isPlaying = !isPlaying;
        }

        function updateProgressBar() {
            const percentage = (audio.currentTime / audio.duration) * 100;
            progressBar.style.width = `${percentage}%`;
            currentTimeDisplay.textContent = formatTime(audio.currentTime);
        }

        function formatTime(time) {
            const minutes = Math.floor(time / 60);
            const seconds = Math.floor(time % 60);
            return `${padZero(minutes)}:${padZero(seconds)}`;
        }

        function padZero(num) {
            return num < 10 ? `0${num}` : num;
        }

        function playAudio(main, sub) {
            if (main == 0) {
                $('#main_audio_index').val(1);
            }
            if (sub == 0) {
                $('#sub_audio_index').val(1);
            }
            $('#main_audio_index').val(main);
            $('#sub_audio_index').val(sub);
            var source = $('#categories' + main + ' > #audios' + sub + ' #audio' + sub).val();
            if (source == undefined) {
                return false;
            }
            // alert(source);
            if (isPlaying) {
                var audio_name = $('#categories' + main + ' > #audios' + sub + ' #audio_button' + sub).text()
                $('#show_audio_title').html(audio_name)
                playButton.innerHTML =
                    '<i class="fas fa-play button-icons delta"></i><span class="button-text milli"> </span>';
                audio.pause();
                audio.src = source;
                audio.play();
                $('.audio-button-paly').removeClass('play-active');
                $('#categories' + main + ' > #audios' + sub + ' #audio_button' + sub).addClass('play-active');
                playButton.innerHTML =
                    '<i class="fas fa-pause button-icons delta"></i><span class="button-text milli"> </span>';
            } else {
                var audio_name = $('#categories' + main + ' > #audios' + sub + ' #audio_button' + sub).text()
                $('#show_audio_title').html(audio_name)
                playButton.innerHTML =
                    '<i class="fas fa-play button-icons delta"></i><span class="button-text milli"> </span>';
                audio.src = source;
                audio.play();
                $('.audio-button-paly').removeClass('play-active');
                $('#categories' + main + ' > #audios' + sub + ' #audio_button' + sub).addClass('play-active');
                playButton.innerHTML =
                    '<i class="fas fa-pause button-icons delta"></i><span class="button-text milli"> </span>';
            }
            isPlaying = !isPlaying;
        }

        function playNext() {
            var pre_main_index = parseInt($('#main_audio_index').val());
            var pre_sub_index = parseInt($('#sub_audio_index').val());
            var main_index = $('.categories').length;
            var sub_index = $('#categories' + pre_main_index + ' .audios').length;
            var set_main, set_sub;
            if (pre_sub_index >= sub_index) {
                set_main = pre_main_index + 1;
                set_sub = 1;
            } else {
                set_main = pre_main_index;
                set_sub = pre_sub_index + 1;
            }
            playAudio(set_main, set_sub);
        }

        function playPrevious() {
            var pre_main_index = parseInt($('#main_audio_index').val());
            var pre_sub_index = parseInt($('#sub_audio_index').val());
            var main_index = $('.categories').length;
            var sub_index = $('#categories' + pre_main_index + ' .audios').length;
            var set_main, set_sub;
            if (pre_sub_index == 1) {
                set_main = pre_main_index - 1;
                var sub_index = $('#categories' + set_main + ' .audios').length;
                set_sub = sub_index;
            } else {
                set_main = pre_main_index;
                set_sub = pre_sub_index - 1;
            }
            playAudio(set_main, set_sub);
        }

        function handleProgressBarClick(event) {
            const boundingRect = progressBarWrapper.getBoundingClientRect();
            const clickX = event.clientX - boundingRect.left;
            const percentage = (clickX / boundingRect.width) * 100;
            const seekTime = (percentage / 100) * audio.duration;

            audio.currentTime = seekTime;
        }

        function startProgressBarDrag(event) {
            event.preventDefault();
            document.addEventListener('mousemove', handleProgressBarDrag);
            document.addEventListener('mouseup', endProgressBarDrag);
        }

        function handleProgressBarDrag(event) {
            const boundingRect = progressBarWrapper.getBoundingClientRect();
            const dragX = event.clientX - boundingRect.left;

            if (dragX >= 0 && dragX <= boundingRect.width) {
                const percentage = (dragX / boundingRect.width) * 100;
                progressBar.style.width = `${percentage}%`;
            }
        }

        function endProgressBarDrag() {
            document.removeEventListener('mousemove', handleProgressBarDrag);
            document.removeEventListener('mouseup', endProgressBarDrag);

            const boundingRect = progressBarWrapper.getBoundingClientRect();
            const dragX = event.clientX - boundingRect.left;
            const percentage = (dragX / boundingRect.width) * 100;
            const seekTime = (percentage / 100) * audio.duration;

            audio.currentTime = seekTime;
        }
    </script>


</body>



</html>