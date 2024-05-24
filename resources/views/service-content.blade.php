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
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ env('MAIN_URL') }}public/assets/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css4478.css?family=Oswald:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css35c2.css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <!-- Icon Font CSS -->

    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/ionicons.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/all.min.css">
    <!-- Flaticon Font CSS -->
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/flaticon.css">
    <!-- Themify Font CSS -->
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/themify-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/magnific-popup.css">
    <!-- jquery-ui CSS -->
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/jquery-ui.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/style.css">
    <link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/responsive.css">
    <link rel="stylesheet" id="layoutstyle" href="{{ env('MAIN_URL') }}public/assets/color/theme-default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/{{ env('MAIN_URL') }}public/assets/owl.carousel.min.css">
    <script>
        var sc_project = 11981757;
        var sc_invisible = 1;
        var sc_security = "35d2687e";
        var sc_https = 1;
    </script>
    <script src="../../../www.statcounter.com/counter/counter.js" async></script>
    <style>
        img {
            max-width: 100%;
            height: auto;
        }

        section {
            padding: 60px 0;
        }

        #carousel-thumb .carousel-item:before {
            content: "";
            position: absolute;
            z-index: 999;
            background: #0000003d;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
        }

        #carousel-thumb .carousel-indicators li {
            width: 100px;
        }

        #carousel-thumb .carousel-indicators {
            bottom: 40px;
        }

        #carousel-thumb .carousel-indicators li img {
            border: 2px solid #e2e2e2;
        }

        /* second design start */
        .owl-nav button {
            position: absolute;
            top: 50%;
            background-color: #000;
            color: #fff;
            margin: 0;
            transition: all 0.3s ease-in-out;
        }

        .owl-nav button.owl-prev {
            left: 0;
        }

        .owl-nav button.owl-next {
            right: 0;
        }

        .owl-dots {
            text-align: center;
            padding-top: 15px;
            display: none;

        }

        .owl-dots button.owl-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
            background: #ccc;
            margin: 0 3px;
        }

        .owl-dots button.owl-dot.active {
            background-color: #000;
        }

        .owl-dots button.owl-dot:focus {
            outline: none;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgb(1 1 1 / 38%) !important;
            border: none;
        }

        .owl-nav button span {
            font-size: 59px;
            position: relative;
            top: 1px;
        }

        .owl-nav button:focus {
            outline: none;
        }

        .rent-p {
            font-size: 14px;
            text-align: start;
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

        @keyframes dot {
            0% {
                background-color: grey;
                transform: scale(1);
            }

            50% {
                background-color: #bada55;
                transform: scale(1.3);
            }

            100% {
                background-color: grey;
                transform: scale(1);
            }
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
            <h2 class="page-title service-title"></h2>
            <!--<ul class="breadcrumb-nav">-->
            <!--            <li><a href="#">Home</a></li>-->
            <!--            <li><i class="fas fa-angle-right"></i></li>-->
            <!--            <li> Contact</li>-->
            <!--        </ul>-->
        </div>
    </section>

    <!-- END HEADER -->
    <!-- section starts -->
    <section class="renovate">
        <div class="container">
            <div class="row service-contents"></div>
        </div>
    </section>

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

    <script>
        $(function() {
            ShowServiceContents()
        })

function ShowServiceContents() {
    $('.service-contents').html(`
        <div class="row text-center">
            <div class="loading">
                <span class="loading__dot"></span>
                <span class="loading__dot"></span>
                <span class="loading__dot"></span>
            </div>
        </div>
    `);

    var url = window.location.href;
    var parts = url.split("/");
    var lastPart = parts.pop();

    $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-services-contents-list",
        data: {
            service_id: lastPart
        },
        success: function(response) {
            if (response['status'] == 200) {
                var html = '';
                for (var i = 0; i < response['data'].length; i++) {
                    html += `
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h2 class="head-tit mb-4">${response['data'][i].title}</h2>
                                <span class="rent-p">${response['data'][i].description}</span>
                            </div>
                            <div class="col-md-6">
                                <div id="carousel-thumb-${i}" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                `;

                    for (var j = 0; j < response['data'][i]['images'].length; j++) {
                        html += `
                            <div class="carousel-item ${j == 0 ? 'active' : ''}">
                                <img class="d-block w-100" src="{{ env('ASSET_URL') }}images/${response['data'][i]['images'][j]}" alt="Slide ${j + 1}">
                            </div>
                        `;
                    }

                    html += `
                                </div>
                                <a class="carousel-control-prev" href="#carousel-thumb-${i}" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumb-${i}" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                `;
                }

                $('.service-title').text(response['service_title']);
                $('.service-contents').html(html);
            }
            if (response['status'] == 400) {}
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
    });
}

    </script>
    <!-- <script>
        jQuery("#carousel").owlCarousel({
            autoplay: true,
            rewind: true,
            /* use rewind if you don't want loop */
            margin: 20,
            /*
              animateOut: 'fadeOut',
              animateIn: 'fadeIn',
              */
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 2000,
            smartSpeed: 800,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 1
                },

                1024: {
                    items: 1
                },

                1366: {
                    items: 1
                }
            }
        });
    </script>
    <script>
        jQuery("#carousel1").owlCarousel({
            autoplay: true,
            rewind: true,
            /* use rewind if you don't want loop */
            margin: 20,
            /*
              animateOut: 'fadeOut',
              animateIn: 'fadeIn',
              */
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 4000,
            smartSpeed: 800,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 1
                },

                1024: {
                    items: 1
                },

                1366: {
                    items: 1
                }
            }
        });
    </script>
    <script>
        jQuery("#carousel2").owlCarousel({
            autoplay: true,
            rewind: true,
            /* use rewind if you don't want loop */
            margin: 20,
            /*
              animateOut: 'fadeOut',
              animateIn: 'fadeIn',
              */
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 4000,
            smartSpeed: 800,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 1
                },

                1024: {
                    items: 1
                },

                1366: {
                    items: 1
                }
            }
        });
    </script> -->
</body>

</html>
