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
            color: #fff;
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
            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);
            margin: auto;
        }

        .playlist-track-ctn {
            display: flex;
            margin-top: 3px;
            border-radius: 5px;
            cursor: pointer;
            border: 1px solid #fff;
        }

        .playlist-track-ctn:last-child {
            /*border: 1px solid #ffc266; */
        }

        .playlist-track-ctn>div {
            margin: 5px;
        }

        .playlist-info-track {
            width: 80%;
        }

        .playlist-info-track,
        .playlist-duration {
            padding-top: 4px;
            padding-bottom: 4px;
            color: #fff;
            font-size: 14px;
            pointer-events: none;
        }

        .playlist-ctn {
            padding-bottom: 20px;
        }

        .active-track {
            background: linear-gradient(90deg, rgb(28 6 156) 0%, rgb(60 0 207) 15%, rgb(141 4 112) 100%);
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
            color: #000;
            font-size: 20px;
        }

        .sng-ul {
            list-style-position: inside;
        }

        .sng-li {
            list-style-type: disclosure-closed;
            padding: 5px 0 5px 0;
            background: #ffff;
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

        .upan-sec {
            background: #9a0e0e;
            height: 146px;
            padding: 15px;
            border-radius: 10px;
        }

        .upan-anc {
            color: #e8a71a;
            border: 1px solid #fff;
            padding: 10px;
            border-radius: 10px;
        }

        .upan-h3 {
            color: #fff;
            font-size: 21px;
        }

        .dwn-link {
            font-size: 17px;
            font-style: italic;
            color: #c10505;
        }

        .sng-dwnld {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            border-radius: 10px;
            padding: 12px 0 12px 0;
        }
    </style>
</head>

<body>


    <!-- header -->
    @include('include.header')
    <section class="bred-crum"
        style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">
        <div class="container">
            <h2 class="page-title">Rm Online Upanyasam</h2>
            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li> Rm Online Upanyasam</li>
            </ul>
        </div>
    </section>

    <section class="rm-online mb-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <h2 class="text-center mb-4 cat-name"></h2>
                <div class="audio-contents">
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-md-3 text-center">
                    <a href="javascript:void(0);" id="goBackButton" class="sum">Go Back</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

    <script>
        $(function() {
            rmOnlineAudios()
            $('#goBackButton').click(function() {
                window.history.back();
            });
        })

        function rmOnlineAudios() {
            var formdata = new FormData();
            formdata.append('token', getCookie('token'));
            formdata.append('device_id', '1');
            var url = window.location.href;
            var parts = url.split("/");
            var lastPart = parts.pop();
            console.log(lastPart);
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}get-upanyasam-audios",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
                        var key = 'category_slug';
                        var value = lastPart;

                        var result = response['data'].find(function(obj) {
                            return obj[key] === value;
                        });

                        console.log(result);
                        $('.sng-ul').empty();
                        $('.player-ctn').empty();
                        console.log(result['audios'])
                        $('.cat-name').text(result['category_name'])
                        var html = ``;
                        for (var i = 0; i < result['audios'].length; i++) {
                            var str = result['audios'][i]['download_url'];
                            var iframeContent = result['audios'][i].post_content.replace(/&lt;/g,
                                '<').replace(/&gt;/g, '>');
                            html += `<div class="row mt-5">
                            <div class="col-md-6">
                                <div class="player-ctn">
                                    <div class="playlist-ctn">${iframeContent}</div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="sng-dwnld text-center">
                                    <ul class="sng-ul">`;
                            var matches = str.match(/href="([^"]*)"[^>]*>([^<]*)/g);
                            var urlsAndNames = matches.map(function(match) {
                                var parts = match.match(/href="([^"]*)"[^>]*>([^<]*)/);
                                return {
                                    url: parts[1],
                                    name: parts[2]
                                };
                            });
                            for (var j = 0; j < urlsAndNames.length; j++) {
                                html +=
                                    `<li class="sng-li" id="download_url"><a href="${urlsAndNames[j].url}" class="download-link" title="" id="download-link-${urlsAndNames[j].name}">${urlsAndNames[j].name}</a></li>`;
                            }
                            html += `</ul>
                                </div>
                            </div>
                        </div>`;
                            $('.audio-contents').html(html);
                            // console.log(matches);

                        }
                    } else if (response['status'] == 401) {
                        const obj = response['errors'];
                        for (const fieldName in obj) {
                            if (obj.hasOwnProperty(fieldName)) {
                                $(`[id="${fieldName}"]`).notify(obj[fieldName][0], {
                                    className: "error",
                                    showDuration: 300,
                                    autoHideDelay: 2000,
                                });
                                const inputField = $(`[id="${fieldName}"]`);
                                inputField.focus();
                                break;
                            }
                        }
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
                    console.log('Error:', error);
                }
            });
        }
    </script>
</body>

</html>
