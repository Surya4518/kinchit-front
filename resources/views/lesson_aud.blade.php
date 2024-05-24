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

        .modal-dialog {
            top: 11%;
        }

        .modal-content {
            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);
        }

        .det-p {
            color
        }

        .recod {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            border-radius: 10px;
            padding: 14px;
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

        .new-audio-sec .media-button:hover {}

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

        /* end */
    </style>
</head>

<body>


    <!-- header -->
    @include('include.header')

    <section class="bred-crum"
        style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">
        <div class="container">
            <h2 class="page-title" id="lesson_name"></h2>
            <ul class="breadcrumb-nav">
                <li><a href="index">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li id="course_name"></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li id="lesson_name_bc"> </li>
            </ul>
        </div>
    </section>
    <section class="mem-sec new-audio-sec mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="nine columns lesson-details">
                        <div class="gdlr-item gdlr-column-shortcode">
                            <h3 class="mb-4" style="color: #ff7e00;">Namaskaram:</h3>
                            <p><strong>Topic:</strong> Yatiraja Saptati – Day 01</p>
                            <p><strong>Time:</strong> Jan 28, 2024 4.15 PM Chennai, Mumbai, Kolkata, New Delhi</p>
                        </div>
                    </div>

                </div>


            </div>
            <hr>
            <p>If you have any queries, please mail us at <a href="mailto:admin@kinchit.org" contenteditable="false"
                    style="cursor: pointer;" class="def-anc
">admin@kinchit.org</a></p>
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
            <a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0"
                target="_blank"><img src="{{ env('MAIN_URL') }}public/assets/images/whatsapp.png"></a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script>
        $(function() {
            ShowLessonDetail();
        });

        function ShowLessonDetail() {
            var formdata = new FormData();
            formdata.append('token', getCookie('token'));
            formdata.append('device_id', '1');
            var url = window.location.href;
            var parts = url.split("/");
            var lastPart = parts.pop();
            console.log(lastPart);
            formdata.append('url', lastPart);
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}get-lesson-data",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
                        var result = response['data'][0];
                        // var key = 'post_name';
                        // var value = lastPart;
                        // var result = data.find(function(obj) {
                        //     return obj[key] === value;
                        // });
                        console.log(result)
                        $('#course_image').attr('src', result.guid != null ? '{{ env('ASSET_URL') }}' + result
                            .guid : '{{ env('MAIN_URL') }}public/assets/images/kalakshepam/nammazhwar.jpg');
                        $('#course_name').text(response['course'] != null ? response['course'] : '  NIL  ')
                        $('#lesson_name').text(result.post_title != null ? result.post_title : '  NIL  ')
                        $('#lesson_name_bc').text(result.post_title != null ? result.post_title : '  NIL  ')
                        $('.lesson-details').html(result.post_content)
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
                },
                error: function(xhr, status, error) {
                    console.log('AJAX Error:', error);
                }
            });
        }
    </script>
</body>

</html>
