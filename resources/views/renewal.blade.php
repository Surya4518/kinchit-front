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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" />
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

        .ren-p {
            font-size: 20px;
            font-weight: 500;
            color: #636363;
        }

        .ren-head {
            font-size: 21px;
            color: #b50101;
        }

        .redeta-sec {
            /* border: 1px solid #cccccc; */
            border-radius: 10px;
            padding: 13px;
        }

        .redeta-sec:hover {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }

        .mem-ad:hover {
            color: orange !important;
        }

        .mem-ad {
            color: #b40808;
            font-weight: 600;
        }
    </style>
</head>

<body>


    <!-- header -->
    @include('include.header')
    <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">
        <div class="container">
            <h2 class="page-title">Renewal 2024-25</h2>
            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li> Renewal 2024-25</li>
            </ul>
        </div>
    </section>
    <section class="member-renewal mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <p class="ren-p">The subscription renewal is for the period April 2024 to March 2025 irrespective
                        of the month you register.</p>
                    <h2 class="ren-head">1. Donate Through UPI</h2>
                    <p>Please fill below form to view UPI ID and instructions to donate through UPI:</p>

                    <div class=" mt-3 ">
                        <div class="row p-2">

                            <form id="renewal_billing_form" enctype="multipart/form-data" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="billing_name" class="form-label fm-label">Full Name<span class="quform-required">*</span></label>

                                        <input type="text" class="form-control" id="billing_name" name="billing_name" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="billing_email" class="form-label fm-label">Email Address<span class="quform-required">*</span></label>

                                        <input type="text" class="form-control" id="billing_email" name="billing_email" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="billing_tel" class="form-label fm-label">Phone<span class="quform-required">*</span></label>

                                        <input type="text" class="form-control" id="billing_tel" name="billing_tel" required>
                                    </div>
                                </div>
                                <h2 class="ren-head">Enter Your Address</h2>
                                <div class="row">

                                    <div class="col-md-4">
                                        <label for="billing_address1" class="form-label fm-label">Address 1<span class="quform-required">*</span></label>

                                        <input type="text" class="form-control" id="billing_address1" name="billing_address1" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="billing_address2" class="form-label fm-label">Address 2<span class="quform-required">*</span></label>

                                        <input type="text" class="form-control" id="billing_address2" name="billing_address2" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="billing_country" class="form-label fm-label">Country<span class="quform-required">*</span></label>

                                        <input type="text" class="form-control" id="billing_country" name="billing_country" required readonly value="India">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="billing_state" class="form-label fm-label">State<span class="quform-required">*</span></label>

                                        <select class="form-select" id="billing_state" name="billing_state">
                                            <option value="">Select city</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="billing_city" class="form-label fm-label">Town / City<span class="quform-required">*</span></label>

                                        <!-- <input type="text" class="form-control" id="your-name" name="your-name" required> -->
                                        <select class="form-select" id="billing_city" name="billing_city">
                                            <option value="">Select city</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="billing_zip" class="form-label fm-label">Pincode<span class="quform-required">*</span></label>

                                        <input type="text" class="form-control" id="billing_zip" name="billing_zip">
                                    </div>
                                    <input type="hidden" name="pay_categories[]" id="pay_categories" value="1">
                                    <input type="hidden" name="pay_categories[]" id="pay_categories1" value="2">
                                    <input type="hidden" name="amount[]" id="amount" value="1000">
                                    <input type="hidden" name="amount[]" id="amount1" value="100">
                                </div>

                                <h2 class="ren-head mt-3 mb-3">2. Donate Through Online Payment Gateway</h2>
                                <p>You can click on the button below and follow the steps to pay your annual
                                    subscription through an Online Payment Gateway, using your Credit/Debit Card or Net
                                    Banking.</p>
                                <p>Please click donate button to contribute <strong>Rs.1000/-</strong> for the present
                                    financial year. To send you any complimentary spiritual material in hard form that
                                    the Trust may give to members such as calendar, etc., courier charges of
                                    <strong>Rs.100/-</strong> will be added.
                                </p>
                        </div>

                        <div class="row mb-5">
                            <div class="col-lg-6 col-md-6 mb-3">
                                <label for="exampleFormControlSelect1"> Calendar Version <span class="quform-required">*</span></label>
                            </div>
                            <div class="col-lg6 col-md-6">
                                <input type="hidden" name="pay_type" id="pay_type" value="member-renewal">
                                <select class="form-control" id="calendar_type" name="calendar_type">
                                    <option value="">Choose an Option</option>
                                    <option value="Tamil">Tamil</option>
                                    <option value="English">English</option>
                                </select>

                            </div>
                            <div class="know-more  mb-5">
                                <button onclick="SubmitBilling()" class="agree donate_btn">DONATE</button>

                            </div>
                        </div>
                        </form>
                        <form action="" method="post" id="send_gateway">
                            @csrf
                            <input type="hidden" name="encRequest" id="encRequest" value="">
                            <input type="hidden" name="access_code" id="access_code" value="">
                        </form>
                    </div>
                </div>





                <!--<div class="row mb-3">-->
                <!--<h2 class="ren-head">2. Donate Through NEFT from your Bank Website</h2>-->
                <!--                <p>If you use net banking, please log in to your Bank's website and add Kinchitkaram Trust as a Beneficiary in the Fund Transfer section. The Account Number and IFSC are given in the poster below. Once you complete this one-time registration, you can transfer your annual subscriptions via NEFT.</p>-->
                <!--                <img src="{{ env('MAIN_URL') }}public/assets/images/audio/NEFT-Member.jpeg" class="img-fluid mb-3">-->
                <!--                <p>If you needed detailed instructions -<a href="#" class="mem-ad">READ MORE</a></p>-->

                <!--</div>-->



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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script>
        // $('#calendar_type').on('change', function() {
        //     if ($('#calendar_type').val() != '') {
        //         $('.donate_btn').removeAttr('disabled');
        //     } else {
        //         $('.donate_btn').attr('disabled', 'disabled');
        //     }
        // });
        $('#renewal_billing_form').submit(function(event) {
            event.preventDefault();
        });
        $(function() {
            $('#billing_state').select2({
                ajax: {
                    url: "{{ env('API_URL') }}get-state",
                    type: "post",
                    dataType: 'json',
                    delay: 400,
                    data: function(params) {
                        return {
                            search: params.term, // search term
                        };
                    },
                    processResults: function(response) {
                        const data = response.data;
                        //  console.log(data.length);
                        if (data.length == 0) {
                            return {
                                results: []
                            };
                        }
                        if (data.length > 0) {
                            // console.log(data.length);
                            const formattedData = data.map(item => ({
                                id: item.id,
                                text: item.name
                            }));
                            return {
                                results: formattedData
                            };
                        }
                    },
                    cache: true
                }
            })

            $('#billing_city').select2({
                ajax: {
                    url: "{{ env('API_URL') }}get-city",
                    type: "post",
                    dataType: 'json',
                    delay: 400,
                    data: function(params) {
                        return {
                            search: params.term, // search term
                            state_id: $('#billing_state').val()
                        };
                    },
                    processResults: function(response) {
                        const data = response.data;
                        //  console.log(data.length);
                        if (data.length == 0) {
                            return {
                                results: []
                            };
                        }
                        if (data.length > 0) {
                            // console.log(data.length);
                            const formattedData = data.map(item => ({
                                id: item.id,
                                text: item.name
                            }));
                            return {
                                results: formattedData
                            };
                        }
                    },
                    cache: true
                }
            })
        })

        function SubmitBilling() {
            if ($('#calendar_type').val() == '') {
                $(`[id="calendar_type"]`).notify('Kindly select the calender type.', {
                    className: "error",
                    showDuration: 300,
                    autoHideDelay: 2000, // Set the duration in milliseconds
                })
                return false;
            }
            var finaltotal = 0;
            $('input[name="amount[]"]').each(function() {
                finaltotal += parseFloat($(this).val());
            });
            var formdata = new FormData($('#renewal_billing_form')[0]);
            formdata.append('finaltotal', finaltotal);
            formdata.append('token', getCookie('token'));
            formdata.append('device_id', 1);
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}entry-payment-details",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
                        var responseData = response['data']
                        // console.log(responseData.billing_name)
                        var formdata1 = new FormData();
                        formdata1.append('token', getCookie('token'));
                        formdata1.append('device_id', 1);
                        formdata1.append('user_id', responseData.user_id);
                        formdata1.append('transaction_id', responseData.tid);
                        $.ajax({
                            type: 'post',
                            url: "{{ env('API_URL') }}initiate-payment-gateway",
                            data: formdata1,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                if (response['status'] == 200) {
                                    $('#send_gateway').attr('action', response['data'].action_url)
                                    $('#encRequest').val(response['data'].encRequest)
                                    $('#access_code').val(response['data'].access_code)
                                    $('#send_gateway').submit()
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