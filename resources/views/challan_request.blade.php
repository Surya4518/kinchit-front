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

        .challa-frm {

            padding: 23px;

            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);

            border-radius: 10px;

        }
    </style>

</head>



<body>





    <!-- header -->

    @include('include.header')

    <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

        <div class="container">

            <h2 class="page-title">Request Bank Challan</h2>

            <ul class="breadcrumb-nav">

                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>

                <li> Volunteer</li>
                <li><i class="fas fa-angle-right"></i></li>

                <li>Request Bank Challan</li>

            </ul>

        </div>

    </section>



    <section class="challan-request mb-5">

        <div class="container">

            <div class="row  justify-content-center">

                <div class="col-md-8">

                    <div class="challa-frm">

                        <form method="post" id="challan-request-form">
                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <p>You can request for new bank challans only if you have less than 10 challans in hand.</p>
                                    <label for="your-name" class="form-label fm-label">Volunteer code.<span class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="your-name" name="volunteer_code" required placeholder="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="email" class="form-label fm-label">Email Address<span class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="email" name="volunteer_email" required placeholder="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="challan_in_hand" class="custom-control-input is-invalid">
                                        <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="challan_in_hand" class="custom-control-input is-invalid">
                                        <label class="custom-control-label" for="customRadioInline2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-3 mb-4">
                                    <button type="button" class="sum" id="chalan-submit" onclick="RequestChallan()">Send Request</button>
                                </div>
                            </div>
                        </form>


                    </div>

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



    <script src="{{ env('MAIN_URL') }}public/assets/js/scripts.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>



    <script>
        $('#chalan-submit').click(function(event) {
            event.preventDefault();
            // RequestChallan();
        });




        //     $('#chalan-submit').click(function(event) {
        //     event.preventDefault();
        //     $('.form-control').on('keyup change', function() {
        //         $('.validate_errors').text('');
        //     });
        //     RequestChallan();
        // });

        function RequestChallan() {
            var formdata = new FormData(document.getElementById('challan-request-form'));
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}request-bank-challan",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
                        $.confirm({
                            title: 'Success!',
                            content: response.message,
                            type: 'success',
                            typeAnimated: true,
                            closeIcon: true,
                            buttons: {
                                ok: {
                                    text: 'OK',
                                    btnClass: 'btn-success',
                                    action: function() {
                                        location.reload();
                                    }
                                },
                            }
                        });
                    }
                    if (response['status'] == 401) {
                        const obj = response['errors'];
                        for (const fieldName in obj) {
                            if (obj.hasOwnProperty(fieldName)) {
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
                        $.confirm({
                            title: 'Encountered an error!',
                            content: response.message,
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
                            }
                        });
                    }
                    if (response['status'] == 500) {
                        $.confirm({
                            title: 'Encountered an error!',
                            content: response.error,
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
                },
                complete: function() {
                    $('#submit_button').prop('disabled', false);
                }
            });
        }
    </script>
</body>



</html>