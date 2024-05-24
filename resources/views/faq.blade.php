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

    <!-- Favicon Icon -->



    <script>
        var sc_project = 11981757;

        var sc_invisible = 1;

        var sc_security = "35d2687e";

        var sc_https = 1;
    </script>


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

        #main {
            margin: 50px 0;
        }

        #main #faq .card {
            margin-bottom: 15px;
            border: 0;
        }

        #main #faq .card .card-header {
            border: 0;
            -webkit-box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
            box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
            border-radius: 2px;
            padding: 0;
        }

        #main #faq .card .card-header .btn-header-link {
            color: #fff;
            display: block;
            text-align: left;
            background: #8e0404;
            color: #fff;
            padding: 20px;
        }

        #main #faq .card .card-header .btn-header-link:after {
            content: "\f107";
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            float: right;
        }

        #main #faq .card .card-header .btn-header-link.collapsed {
            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);
            color: #fff;
        }

        #main #faq .card .card-header .btn-header-link.collapsed:after {
            content: "\f106";
        }

        #main #faq .card .collapsing {
            background: #8e0404;
            line-height: 30px;
        }

        #main #faq .card .collapse {
            border: 0;
        }

        #main #faq .card .collapse.show {
            background: #8e0404;
            line-height: 30px;
            color: #fff;
        }

        .accordion .card-body {
            padding: 15px 15px 10px !important;
            border-bottom: 1px solid #ddd;
        }

        .card-body {
            color: #fff !important;
        }
    </style>

</head>



<body>





    <!-- header -->

    @include('include.header')

    <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

        <div class="container">

            <h2 class="page-title">Frequently Asked Question</h2>

            <ul class="breadcrumb-nav">

                <li><a href="index">Home</a></li>

                <li><i class="fas fa-angle-right"></i></li>

                <li>Frequently Asked Question</li>

            </ul>

        </div>

    </section>


   <section class="faq-sec mb-5">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div id="main">
                    <div class="container">
                        <div class="accordion faq-contents" id="faq"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>



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




    @include('include.footer')

    <script>
        $(function() {
            ShowFaqContents()
        })

        function ShowFaqContents() {
                $('.faq-contents').html(`<div class="row text-center">
                <div class="loading">
                  <span class="loading__dot"></span>
                  <span class="loading__dot"></span>
                  <span class="loading__dot"></span>
                </div>
                </div>`)
                $.ajax({
                    type: 'post',
                    url: "{{ env('API_URL') }}questions",
                    success: function(response) {
                        if (response['status'] == 200) {
                            console.log(response)
                            var html = ``;
                            for (var i = 0; i < response['data'].length; i++) {
                                html += `<div class="card">
                                <div class="card-header" id="faqhead${i}">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq${i}" aria-expanded="true" aria-controls="faq${i}">${response['data'][i]['tittle']}</a>
                                </div>

                                <div id="faq${i}" class="collapse" aria-labelledby="faqhead${i}" data-parent="#faq">
                                    <div class="card-body">${response['data'][i]['tittle']}</div>
                                </div>
                            </div>`;
                            }
                            console.log(html)
                            $('.faq-contents').html(html)
                        }
                        if (response['status'] == 400) {}
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
                        if (response['status'] == 501) {
                            sessionStorage.clear();
                            deleteCookie('typeofuser');
                            deleteCookie('token');
                            deleteCookie('marital_acc');
                            window.location.href = '/user-login';
                        }
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                })
            }
    </script>

</body>

</html>
