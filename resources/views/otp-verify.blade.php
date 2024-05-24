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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
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



        .field-icon {
            position: absolute;
            /* float: right; */
            right: 38px;
            top: 45px;
            color: #000;
            font-size: 21px;
        }

        /* end */
    </style>

</head>



<body>





    <!-- header -->

    @include('include.header')



    <section class="bred-crum" style="background-image:url(public/assets/images/breadcrum/header.jpg);">

        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-5 mb-5">
                <div class="signup-card card ">
                    <form method="post" id="otp_form">
                        <!-- <h4>VERIFY YOUR MOBILE NUMBER</h4> -->
                        <div class="col-12 col-md-12 text-center my-3 text-center otp-text">
                            <p id="formThreeTxt"></p>
                            <br>
                            <h1>VERIFY YOUR ACCOUNT</h1>
                        </div>
                        <div class=" col-md-10 text-center my-2 otp-box justify-content-around m-auto text-center d-flex ">

                            <input class="otp ap-otp-input" type="tel" id="otp1" oninput="this.value = this.value.replace(/[^0-9]/g, '');" data-index="0" maxlength="1" autocomplete="off">
                            <input class="otp ap-otp-input" type="tel" id="otp2" oninput="this.value = this.value.replace(/[^0-9]/g, '');" data-index="0" maxlength="1" autocomplete="off">
                            <input class="otp ap-otp-input" type="tel" id="otp3" oninput="this.value = this.value.replace(/[^0-9]/g, '');" data-index="0" maxlength="1" autocomplete="off">
                            <input class="otp ap-otp-input" type="tel" id="otp4" oninput="this.value = this.value.replace(/[^0-9]/g, '');" data-index="0" maxlength="1" autocomplete="off">
                            <input class="otp ap-otp-input" type="tel" id="otp5" oninput="this.value = this.value.replace(/[^0-9]/g, '');" data-index="0" maxlength="1" autocomplete="off">
                            <input class="otp ap-otp-input" type="tel" id="otp6" oninput="this.value = this.value.replace(/[^0-9]/g, '');" data-index="0" maxlength="1" autocomplete="off">


                        </div>
                        <div class="col-12 col-md-12 text-center my-4">
                            <span id="otp_err" class="spanClass"></span>
                        </div>
                        <div class="col-12 col-md-12 text-center my-4" id="verifyBTN">
                            <button type="button" class="btn btn-success  n-btn mt-lg-0" onclick="otpverify()">Verify OTP</button>
                        </div>
                    </form>
                    <div class="col-12 col-md-12 text-center mt-1 mb-3" id="timer">
                        <div>Time left = <span id="timer">00:00</span></div>
                    </div>
                    <div class="col-12 col-md-12 text-center mt-1 mb-3" id="resendBTN">
                        <button class="by-click-text1 text-center my-2 under-line bg-transparent border-0" id="resendPbtn" onclick="resendotp('{{ env('API_URL') }}resend-otp')">Resend OTP</button>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>


    </section>


    <style>
        .otp-box input {
            font-size: 30px !important;
            width: 54px;
            height: 54px;
            text-align: center;
            border: 2px solid #c0c2c4;
            margin-right: 16px;
            border-radius: 10px;
        }

        .by-click-text1 {
            color: #0d3989;
            font-size: 18px;
            font-weight: 600;
            text-align: left;
            text-decoration: underline;
        }

        .signup-card h1 {
            font-family: Poppins, sans-serif !important;
            text-align: center;
            /* color: #0d3989; */
            font-size: 30px;
        }

        @media only screen and (max-width: 600px) {
            .otp-box input {
                font-size: 19px !important;
                width: 38px !important;
                height: 42px !important;
                border: 2px solid #c0c2c4;
                margin-right: 8px !important;
            }

            .signup-card h1 {
                font-size: 24px !important;
            }

            .signup-card {
                margin: 0 20px;
            }
        }
    </style>
    <br>

    <!-- END HEADER -->

    <!-- section starts -->





    <!-- section ends -->









    <!-- START FOOTER -->

    @include('include.footer')

    <!-- hitwebcounter Code START -->





    <!-- END FOOTER -->


    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>



    <script src="assets/js/jquery-1.12.4.min.js"></script>

    <!-- jquery-ui js -->

    <script src="assets/js/jquery-ui.js"></script>

    <!-- popper min js -->

    <script src="assets/js/popper.min.js"></script>

    <!-- Latest compiled and minified Bootstrap -->

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- owl-carousel min js  -->

    <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>

    <!-- magnific-popup min js  -->

    <script src="assets/js/magnific-popup.min.js"></script>

    <!-- waypoints min js  -->

    <script src="assets/js/waypoints.min.js"></script>

    <!-- parallax js  -->

    <script src="assets/js/parallax.js"></script>

    <!-- jquery dd js  -->

    <script src="assets/js/jquery.dd.min.js"></script>

    <!-- countdown js  -->

    <script src="assets/js/jquery.countdown.min.js"></script>

    <!-- jquery.counterup.min js -->

    <script src="assets/js/jquery.counterup.min.js"></script>

    <!-- jquery.parallax-scroll js -->

    <script src="assets/js/jquery.parallax-scroll.js"></script>

    <!-- fit video  -->

    <script src="assets/js/jquery.fitvids.js"></script>

    <!-- imagesloaded js -->

    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- isotope min js -->

    <script src="assets/js/isotope.min.js"></script>

    <!-- cookie js -->

    <script src="assets/js/js.cookie.js"></script>

    <script src="assets/js/notify.js"></script>
    <script src="assets/js/notify.min.js"></script>


    <script src="assets/js/scripts.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

</body>
<script>
    var timeLimitInMinutes = 1;
    var timeLimitInSeconds = timeLimitInMinutes * 60;
    var timerElement = document.getElementById('timer');
    var timerInterval;

    function resendotp(url) {
        // Retrieve responseData from sessionStorage
        var storedResponse = sessionStorage.getItem('responseData');
        // Parse responseData to JSON
        let responseData = JSON.parse(storedResponse);
        console.log(responseData);

        // Assuming formdata is defined elsewhere in your code
        var formdata = new FormData();

        formdata.append('email', responseData.user_email);

        $.ajax({
            type: 'post',
            url: url,
            data: formdata,
            processData: false,
            contentType: false,
            success: function(response) {
                clearInterval(timerInterval);
                timeLimitInSeconds = timeLimitInMinutes * 60;
                timerInterval = setInterval(startTimer, 1000);
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    }

    function otpverify() {
        var formdata = new FormData($('#otp_form')[0]);

        var otpValue = '';
        $('.otp').each(function() {
            otpValue += $(this).val();
        });
        formdata.append('otp', otpValue);
        $.ajax({
            type: 'post',
            url: "{{ env('API_URL') }}verify-otp",
            data: formdata,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response['status'] == 200) {
                    $.confirm({
                        title: 'Success!',
                        content: response['message'],
                        type: 'success',
                        typeAnimated: true,
                        closeIcon: true,
                        buttons: {
                            ok: {
                                text: 'OK',
                                btnClass: 'btn-success',
                                action: function() {
                                    window.location.href = '/user-login';
                                }
                            },
                        }
                    });
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
            },
            error: function(data) {
                console.log('Error:', data);
            }
        })
    }

    const $inp1 = $(".ap-otp-input");

    $inp1.on({

        paste(t) {

            let e = t.originalEvent.clipboardData.getData("text").trim();

            if (!/\d{6}/.test(e)) return t.preventDefault();

            let i = [...e];

            $inp1.val(t => i[t]).eq(5).focus();

        },

        input(t) {

            let e = $inp1.index(this);

            if (this.value) $inp1.eq(e + 1).focus();

        },

        keydown(t) {

            let e = $inp1.index(this);

            if (!this.value && t.key === "Backspace" && e) $inp1.eq(e - 1).focus();

        }

    });

    function startTimer() {
        var minutes = Math.floor(timeLimitInSeconds / 60);
        var seconds = timeLimitInSeconds % 60;

        if (timeLimitInSeconds <= 0) {
            timerElement.textContent = '00:00';
            clearInterval(timerInterval);
            callUpdatedOTP(); // Call function to update OTP when timer ends
            return;
        }

        if (minutes < 10) {
            minutes = '0' + minutes;
        }
        if (seconds < 10) {
            seconds = '0' + seconds;
        }

        timerElement.textContent = minutes + ':' + seconds;

        // Check if the time remaining is one minute
        //   if (timeLimitInSeconds === 60) {
        //     callUpdatedOTP(); // Call function to update OTP when one minute is left
        //   }

        // Check if the time has completed 60 seconds
        if (timeLimitInSeconds === 0) {
            callUpdatedOTP(); // Call function to update OTP when 60 seconds are completed
        }

        timeLimitInSeconds--;
    }

    function callUpdatedOTP() {
        var storedResponse = sessionStorage.getItem('responseData');
        if (!storedResponse) {
            console.log('Error: No response data available');
            return;
        }
        // Parse responseData to JSON
        var responseData = JSON.parse(storedResponse);

        // Assuming formdata is defined elsewhere in your code
        var formdata = new FormData();
        formdata.append('otp', responseData.otp);

        // Make AJAX request
        $.ajax({
            type: 'POST',
            url: '{{ env('API_URL') }}updated-otp',
            data: formdata,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Updated OTP request successful:', response);
                // Handle the success response if needed
            },
            error: function(xhr, status, error) {
                console.log('Error:', error);
            }
        });
    }

    var timerInterval = setInterval(startTimer, 1000);
</script>

</html>