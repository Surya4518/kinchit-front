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

        .bf-frm {

            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);

            padding-top: 40px;

            padding-right: 40px;

            padding-bottom: 40px;

            padding-left: 40px;

            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);

            overflow: hidden;

            border-radius: 10px
        }

        .fm-label {

            color: #fff;

        }

        .sum {
            background: #8e0404 !important;
            border: 0;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 1.4;
            padding: 10px 23px 10px 23px;
            width: 147px;
            float: right;
            text-align: center;
        }

        .notes {
            position: relative;
            border-radius: 4px;
            display: block;
            font-size: 14px;
            margin: 16px 0;
            padding: 12px 24px 12px 60px
        }

        .notes:before {
            float: left;
            font-size: 30px;
            font-family: FontAwesome;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            word-wrap: normal;
            margin-left: -46px;
        }



        .notes1:before {
            color: #f76f07;
            content: '\f087';
        }

        .notes1 {

            background: #fff179;

            color: #272626;

            font-size: 20px;

        }



        .notes1:hover:before {
            -webkit-animation: ripple 0.65s linear;
            -moz-animation: ripple 0.65s linear;
            -ms-animation: ripple 0.65s linear;
            -o-animation: ripple 0.65s linear;
            animation: ripple 0.65s linear
        }

        @keyframes ripple {
            100% {
                opacity: 0;
                transform: scale(2.5)
            }
        }

        .your-don {

            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);

            padding: 20px;

            border-radius: 10px;

        }
    </style>

</head>



<body>





    <!-- header -->

    @include('include.header')

    @if (request()->isMethod('post'))
        @php
            $calendar_type = request('calendar_type');
            $pay_type = request('pay_type');
        @endphp
        <script>
            var calendar_type = "{{ $calendar_type }}";
            var pay_type = "{{ $pay_type }}";
            console.log(calendar_type);
            console.log(pay_type);
        </script>
    @endif

    <section class="bred-crum"
        style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

        <div class="container">

            <h2 class="page-title">Donate</h2>

            <ul class="breadcrumb-nav">

                <li><a href="index">Home</a></li>

                <li><i class="fas fa-angle-right"></i></li>
                <li> Membership</li>
                <li><i class="fas fa-angle-right"></i></li>
                <li> Become a Member</li>
                <li><i class="fas fa-angle-right"></i></li>
                <li> Donate</li>

            </ul>

        </div>

    </section>



    <section class="billing">

        <div class="container">

            <div class="row mb-4">

                <div class="col-md-12">

                    <h2 class="text-center">Billing Details</h2>

                    <div class="Billing-frm">

                        <form class="bf-frm" method="POST" id="billing_form" enctype="multipart/form-data">

                            <div class="row">

                                {{-- <div class="col-md-12 mb-2">

                                    <label for="your-name" class="form-label fm-label">Specify a date to use your
                                        donation for specified cause<span class="quform-required">*</span></label>

                                    <input type="date" class="form-control" id="your-name" name="your-name" required>

                                </div> --}}

                                <div class="col-md-6 mb-2">

                                    <label for="billing_name" class="form-label fm-label">Full Name<span
                                            class="quform-required">*</span></label>

                                    <input type="text" class="form-control" id="billing_name" name="billing_name"
                                        required>

                                </div>

                                {{-- <div class="col-md-6 mb-2">

                                    <label for="your-name" class="form-label fm-label">Last Name<span
                                            class="quform-required">*</span></label>

                                    <input type="text" class="form-control" id="your-name" name="your-name" required>

                                </div> --}}

                                <div class="col-md-6 mb-2">

                                    <label for="billing_email" class="form-label fm-label">Email Address<span
                                            class="quform-required">*</span></label>

                                    <input type="text" class="form-control" id="billing_email" name="billing_email"
                                        required>

                                </div>

                                <div class="col-md-6 mb-2">

                                    <label for="billing_tel" class="form-label fm-label">Phone<span
                                            class="quform-required">*</span></label>

                                    <input type="text" class="form-control" id="billing_tel" name="billing_tel"
                                        required>

                                </div>
                                {{-- <div class="col-md-6 mb-2">

                                    <label for="your-name" class="form-label fm-label">Membership
                                        Number(Optional)</label>

                                    <input type="text" class="form-control" id="your-name" name="your-name" required>

                                </div> --}}

                                {{-- <div class="col-md-6 mb-2">

                                    <label for="exampleFormControlSelect1 " class="form-label fm-label">Gender<span
                                            class="quform-required ">*</span></label>

                                    <select class="form-select" id="exampleFormControlSelect1">

                                        <option>Please select</option>

                                        <option>Male</option>

                                        <option>Female</option>

                                    </select>

                                </div> --}}
                                <div class="col-md-6 mb-2">

                                    <label for="billing_address1" class="form-label fm-label">Address 1<span
                                            class="quform-required">*</span></label>

                                    <input type="text" class="form-control" id="billing_address1"
                                        name="billing_address1" required>

                                </div>

                                <div class="col-md-6 mb-2">

                                    <label for="billing_address2" class="form-label fm-label">Address 2<span
                                            class="quform-required">*</span></label>

                                    <input type="text" class="form-control" id="billing_address2"
                                        name="billing_address2" required>

                                </div>
                                <div class="col-md-6 mb-2">

                                    <label for="billing_country" class="form-label fm-label">Country<span
                                            class="quform-required">*</span></label>

                                    <input type="text" class="form-control" id="billing_country"
                                        name="billing_country" required readonly value="India">

                                </div>

                                <div class="col-md-6 mb-2">

                                    <label for="billing_state" class="form-label fm-label">State<span
                                            class="quform-required">*</span></label>

                                    <select class="form-select" id="billing_state" name="billing_state">
                                        <option value="">Select city</option>
                                    </select>

                                </div>


                                <div class="col-md-6 mb-2">

                                    <label for="billing_city" class="form-label fm-label">Town / City<span
                                            class="quform-required">*</span></label>

                                    <!-- <input type="text" class="form-control" id="your-name" name="your-name" required> -->
                                    <select class="form-select" id="billing_city" name="billing_city">
                                        <option value="">Select city</option>
                                    </select>

                                </div>


                                <div class="col-md-6 mb-2">

                                    <label for="billing_zip" class="form-label fm-label">Pincode<span
                                            class="quform-required">*</span></label>

                                    <input type="text" class="form-control" id="billing_zip" name="billing_zip">

                                </div>

                                {{-- <div class="col-md-6 mb-2">

                                    <label for="your-subject" class="form-label fm-label">PAN Number Or AADHAAR
                                        Number<span class="quform-required">*</span></label>

                                    <input type="text" class="form-control" id="your-subject"
                                        name="your-subject">

                                </div> --}}

                                {{-- <div class="col-md-6 mb-2">

                                    <label for="your-subject" class="form-label fm-label">Nakshtram (Optional)</label>

                                    <input type="text" class="form-control" id="your-subject"
                                        name="your-subject">

                                </div>

                                <div class="col-md-6 mb-2">

                                    <label for="your-subject" class="form-label fm-label">Gotram (Optional)</label>

                                    <input type="text" class="form-control" id="your-subject"
                                        name="your-subject">

                                </div> --}}

                                <!-- <div class="col-md-12 mb-3">

            <label for="your-subject" class="form-label fm-label">Membership Optional<span class="quform-required">*</span></label>

            <input type="text" class="form-control" id="your-subject" name="your-subject" placeholder="Leave blank if you are a new member">

</div> -->



                                <div class="col-md-3">

                                    <!--<input type="submit" class="sum">-->
                                    <input type="hidden" name="pay_categories[]" id="pay_categories"
                                        value="1">
                                    <input type="hidden" name="pay_categories[]" id="pay_categories1"
                                        value="2">
                                    <input type="hidden" name="amount[]" id="amount" value="1000">
                                    <input type="hidden" name="amount[]" id="amount1" value="100">
                                    <input type="hidden" name="token" id="token"
                                        value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                                    <input type="hidden" name="device_id" id="device_id" value="1">
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>



            <div class="row mb-3">

                <div class="col-md-12">

                    <table class="table table-bordered table-hover">

                        <thead class="thead-dark bill-th">

                            <tr>

                                <th scope="col">Description</th>

                                <th scope="col">Sub Total</th>



                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <th scope="row">Kinchitkaram Trust eMember Annual Contribution 2023-24 (India Only)
                                </th>

                                <td>1,000.00</td>



                            </tr>

                            <tr>

                                <th scope="row">Subtotal</th>

                                <td>1,000.00</td>



                            </tr>

                            <tr>

                                <th scope="row">Courier Charges</th>

                                <td>100.00</td>



                            </tr>

                            <tr>

                                <th scope="row">Total</th>

                                <td>1,100.00</td>



                            </tr>



                        </tbody>

                    </table>

                </div>

            </div>



            <div class="row mb-5">

                <div class="col-md-12 ">

                    <div class="your-don">

                        <h2>Online</h2>

                        <div class="notes notes1">You can use your credit card, debit card or net banking</div>

                        <h2>Transaction Processing Fee</h2>

                        <p>1) 2.75% for Visa / Master Credit Card</p>

                        <p>2) 1.00% for the value of up to Rs.2000/- (Visa/Master) Debit Card</p>

                        <p>3) 25% for the value above Rs.2000/- (Visa/Master) Debit Card</p>

                        <p>4) 25% for Net Banking transaction</p>
                        <!-- <br> -->

                        <p>All transaction processing fee is subjected to a minimum of Rs.10/- per
                            transaction<br>Services taxes and other Govt. Levies as applicable would be charged extra on
                            the above.</p>

                        <!-- <br> -->

                        <h2>Declaration</h2>

                        <p>As per the regulations in India, our Trust can accept donations from donor who fulfil
                            following conditions: I declare that I am:</p>

                        <p>1) Indian Resident</p>

                        <p>2) Holder of Indian Passport</p>

                        <p>3) Donating from a bank that is situated in India only</p>

                        <p>4) Donated currency will be only in INR</p>



                        <div class="custom-control custom-checkbox">

                            <p class="bg-light px-3 py-2" style=" border-left: 5px solid  #b1e605;">Please save
                                +917824085880 in your phone contact as Kinchitkaram to receive latest events & updates
                                through WhatsApp.</p>
                            </p>

                        </div>

                        <div class="custom-control custom-checkbox">

                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                            <label class="custom-control-label" for="customCheck1" style="display: contents;">
                                I’ve read the above conditions and declare that I fulfill all these conditions to
                                donate</label>

                        </div>

                        <div class="col-md-12 mt-3 mb-5">

                            <a href="javascript:void(0);" onclick="SubmitBilling()" class="sum">Submit</a>

                        </div>

                        <form action="" method="post" id="send_gateway">
                            @csrf
                            <input type="hidden" name="encRequest" id="encRequest" value="">
                            <input type="hidden" name="access_code" id="access_code" value="">
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
            var finaltotal = 0;
            $('input[name="amount[]"]').each(function() {
                finaltotal += parseFloat($(this).val());
            });
            var formdata = new FormData($('#billing_form')[0]);
            formdata.append('finaltotal', finaltotal);
            formdata.append('calendar_type', calendar_type);
            formdata.append('pay_type', pay_type);
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
