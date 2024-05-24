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

        /* end */
    </style>

</head>



<body>





    <!-- header -->

    @include('include.header')



    <section class="bred-crum"
        style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

        <div class="container">

            <h2 class="page-title">Become a Volunteer</h2>

            <ul class="breadcrumb-nav">

                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>

                <li> Volunteer</li>
                <li><i class="fas fa-angle-right"></i></li>

                <li> Become a Volunteer</li>

            </ul>

        </div>

    </section>

    <section class="con-form mb-5">

        <div class="container">

            <div class="row">

                <div class="col-md-12 frms">

                    <form method="POST" enctype="multipart/form-data" id="become_volunteer">

                        <div class="row g-3">

                            <div class="col-md-12 mb-3">
                                <label for="your-subject" class="form-label">Are you Willing To visit Kinchitkaram
                                    Members within you Locality once in a quarter and hand over material like books ,
                                    news letters , card drivers etc that trust may distribute? </label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="question_1" name="question_1"
                                        class="custom-control-input is-invalid">
                                    <label class="custom-control-label" for="question_1">Yes</label>
                                </div>

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="question_1" name="question_1"
                                        class="custom-control-input is-invalid">
                                    <label class="custom-control-label" for="question_1">No</label>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="your-subject" class="form-label">Are you willing to volunteer from your home
                                    and be part of call team to communicate to members/donors etc </label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="question_2" name="question_2"
                                        class="custom-control-input is-invalid">
                                    <label class="custom-control-label" for="question_2">Yes</label>
                                </div>

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="question_2" name="question_2"
                                        class="custom-control-input is-invalid">
                                    <label class="custom-control-label" for="question_2">No</label>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="question_3">Are you willing to volunteer for pracharam in villages? If yes,
                                    when can you support</label>
                                <select class="form-control" id="question_3" name="question_3">
                                    <option value="">Select</option>
                                    <option value="Weekends and Holidays">Weekends and Holidays</option>
                                    <option value="Any day one of the week">Any day one of the week</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="question_4" class="form-label">How do you know about Kinchitkaram
                                    Trust?</label>
                                <input type="text" class="form-control" id="question_4" name="question_4" required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                    <label class="custom-control-label" for="customCheck1">Pls save +917824085880 in
                                        your phone contact as Kinchitkaram to receive updates through WhatsApp</label>
                                </div>
                                <input type="hidden" name="token" id="token"
                                    value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                                <input type="hidden" name="device_id" id="device_id" value="1">
                            </div>

                            <div class="col-md-3">
                                <input type="submit" onclick="BecomeAVolunteer()" class="sum">
                            </div>

                        </div>

                    </form>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script>
        $(function() {
            $('#become_volunteer').submit(function(event) {
                event.preventDefault();
            });
        })

        function BecomeAVolunteer() {
            var formdata = new FormData($('#become_volunteer')[0]);
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}become-volunteer",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
                         var userData = response['data'][0];
                         var smsFormData = new FormData();
            smsFormData.append('mobile', userData['phone_number']);
            smsFormData.append('message', 'Welcome to Kinchitkaram Trust. Your volunteer code is tes. Below are your login details - kinchit.org/login. Your username and password is var');
            $.ajax({
              type: 'post',
              url: "{{ env('API_URL') }}sent-sms",
              data: smsFormData, // or any other data needed for the second API
              processData: false,
              contentType: false,
              success: function(response) {
                // Handle success of the second API call
              },
              error: function(data) {
                console.log('Error:', data);
              }
            });
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
                                close: function() {
                                    window.location.href = '/';
                                }
                            }
                        });
                    }
                    if (response['status'] == 401) {
                        const obj = response['errors'];
                        for (const fieldName in obj) {
                            if (obj.hasOwnProperty(fieldName)) {
                                // notify.js
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
                }
            })
        }
    </script>
</body>



</html>
