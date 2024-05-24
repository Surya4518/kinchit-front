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

        /* end */
    </style>
</head>

<body>


    <!-- header -->
    @include('include.header')

    <section class="bred-crum"
        style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">
        <div class="container">
            <h2 class="page-title" id="course_name">Yatiraja Saptati</h2>
            <ul class="breadcrumb-nav">
                <li><a href="index">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li>Kalakshepam</li>
                <li><i class="fas fa-angle-right"></i></li>
                <li id="course_name_bc"> Yatiraja Saptati</li>
            </ul>
        </div>
    </section>
    <section class="mem-sec mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="swami-img text-center mb-4">
                        <img id="course_image" src="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="nine columns">
                        <div class="gdlr-item gdlr-column-shortcode">
                            <h3 class="mb-4" style="color: #ff7e00;">Details:</h3>
                            <p class="det-p"><strong>Upanyasam: </strong><span id="upanyasam"></span></p>
                            <p class="det-p"><strong>Tutor: </strong><span id="tutor_name"></span></p>
                            <p class="det-p"><strong>Start Date: </strong><span id="start_date"></span></p>
                            <p class="det-p"><strong>Requirements:&nbsp;</strong>Computer / Laptop / Smartphone with
                                good internet speed (min. 2 Mbps)</p>
                            <p class="det-p">For any queries, please mail us at <a href="mailto:admin@kinchit.org"
                                    contenteditable="false" style="cursor: pointer;"
                                    class="def-anc">admin@kinchit.org</a></p>
                        </div>
                    </div>

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 ">
                    <p class="text-center">Date and time of next live streaming will be announced later</p>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-8">
                    <div class="recod">
                        <h2 style="color #930202;">Recorded Audio</h2>
                        <p>Recorded audios will be published below.</p>
                        <div class="red-anc lessons-list">
                        </div>
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
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

    <script>
        $(function() {
            ShowCourseDetail();
        });

        function ShowCourseDetail() {
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
                url: "{{ env('API_URL') }}get-course-data",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
                        var result = response['data']['course'][0];
                        // var key = 'post_name';
                        // var value = lastPart;
                        // var result = data.find(function(obj) {
                        //     return obj[key] === value;
                        // });
                        console.log(result)
                        $('#course_image').attr('src', result.guid != null ? '{{ env('ASSET_URL') }}' + result.guid : '{{ env('MAIN_URL') }}public/assets/images/kalakshepam/nammazhwar.jpg');
                        $('#upanyasam').text(result.upanyasam_name != null ? result.upanyasam_name : '  NIL  ')
                        $('#course_name').text(result.post_title != null ? result.post_title : '  NIL  ')
                        $('#course_name_bc').text(result.post_title != null ? result.post_title : '  NIL  ')
                        $('#tutor_name').text(result.tutor_name != null ? result.tutor_name : '  NIL  ')
                        $('#start_date').text(result.post_date_gmt != null ? moment(result.post_date_gmt)
                            .format('DD MMM YYYY') : 'NIL');
                        var lesson = response['data']['lessons'];
                        var html = ``;
                        for(var i = 0; i < lesson.length; i++){
                            html += `${i+1}.  <a href="{{ env('MAIN_URL') }}lesson/${lesson[i].post_name}" class="def-anc">${lesson[i].post_title}</a><br>`;
                        }
                        $('.lessons-list').html(html)
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
