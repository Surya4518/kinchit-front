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
    <link href="https://fonts.googleapis.com/css4478.css?family=Oswald:200,300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css35c2.css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

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

        .frm {
            border: 1px solid grey;
            border-radius: 20px;

        }

        .img-section {
            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);
            padding: 20px;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        #scroll-to-top {
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
        }

        .fm-body {}

        .card-outline-secondary {
            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);
        }

        .fm-head {
            color: #fff;
            font-size: 20px;
        }

        .fm-head1 {
            float: right;
            margin: 0 0 0 0;
            color: #fff;
            font-size: 18px;
        }

        .fm-btn {
            background: #970000;
            border: #970000;
            padding: 10px 15px 10px 15px;
        }

        .fm-name {
            color: #fff;
        }

        .field-icon {
            position: relative;
            float: right !important;
            right: 21px;
            bottom: 33px;
            color: #000;
            font-size: 21px !important;
        }

        /* end */
    </style>
</head>

<body>


    <!-- header -->
    @include('include.header')

    <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">
        <div class="container">
            <h2 class="page-title">Login</h2>
            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li> Login</li>
            </ul>
        </div>
    </section>

    <section class="login-frm mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <p class="text-center"><strong>Note: </strong>Use your Registered Username Or Email Id to login</p>
                <div class="col-md-10 mb-5">
                    <span class="anchor" id="formLogin"></span>
                    <!-- form card login -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0 fm-head">Login</h3>
                            <!-- <a href="#"><h3 class="mb-0 fm-head1">Forgot Password</h3></a> -->
                        </div>
                        <div class="card-body fm-body">
                            <form method="post" enctype="multipart/form-data" id="login_form">
                                <div class="form-group">
                                    <label for="username" class="fm-name">Username Or Email <span class="quform-required">*</span> </label>
                                    <input class="form-control" id="username" name="username" type="text">
                                    <p class="validate_errors" id="username_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                                </div>
                                <div class="form-group">
                                    <label class="fm-name">Password<span class="quform-required">*</span></label>
                                    <input autocomplete="new-password" class="form-control" name="password" id="password" type="password">
                                    <i toggle="#password" class="fa fa-fw field-icon toggle-password pl-lg-3 fa-eye"></i>
                                    <input type="hidden" name="device_id" id="device_id" value="1">
                                    <p class="validate_errors" id="password_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                                </div>
                            </form>
                            <div class="form-check small  mt-2">
                                <a href="/forgot-password">
                                    <p class="mb-0 fm-head1" id="forgot-password-link">Forgot Password?</p>
                                </a>

                            </div>
                            <div class="text-center my-3">
                                <button class="sum" type="button user-login" onclick="LoginTheUser()">Login</button>
                            </div>
                            <div class="col-md-12 text-center">
                                <label class="Forgot-text text-white">Not Registered yet? </label> <a href="/user-register" class="Forgot-text pl-1 " contenteditable="false" style="cursor: pointer;text-decoration: underline;">Register Now</a>
                            </div>
                        </div><!--/card-block-->
                    </div><!-- /form card login -->
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
            <a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0" target="_blank"><img src="{{ env('MAIN_URL') }}public/assets/images/whatsapp.png"></a>
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
    <script src="{{ env('MAIN_URL') }}public/assets/js/notify.js"></script>
    <script src="{{ env('MAIN_URL') }}public/assets/js/notify.min.js"></script>

    <script src="{{ env('MAIN_URL') }}public/assets/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.form-control').on('keyup change', function() {
                $('.validate_errors').text('')
            })
        });

        function LoginTheUser() {
            $('.user-login').html(`<i class="fa fa-spinner"></i>`);
            $('.user-login').attr('disabled', 'disabled');
            var formdata = new FormData($('#login_form')[0]);
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}user-login",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
                        sessionStorage.setItem('typeofuser', response.user_type);
                        sessionStorage.setItem('token', response.user_token);
                        sessionStorage.setItem('marital_acc', response.marital_acc);
                        setCookie('typeofuser', response.user_type, 1);
                        setCookie('token', response.user_token, 1);
                        setCookie('marital_acc', response.marital_acc, 1);
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
                                        window.location.href = '/';
                                    }
                                },
                                // close: function() {}
                            }
                        });
                        setTimeout(function() {
                            $('.btn-green').click(); // Simulates a click on the 'OK' button
                        }, 2000);
                        window.location.href = '/';
                        $('.user-login').html(`Login`)
                        $('.user-login').removeAttr('disabled')
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
                        $('.user-login').html(`Login`)
                        $('.user-login').removeAttr('disabled')
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
                        $('.user-login').html(`Login`)
                        $('.user-login').removeAttr('disabled')
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
                        $('.user-login').html(`Login`)
                        $('.user-login').removeAttr('disabled')
                    }
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            })
        }

        $(".toggle-password").click(function () {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
    
    </script>

</body>

</html>