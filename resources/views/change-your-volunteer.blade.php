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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/public/assets/owl.carousel.min.css">
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

        form.table-responsive {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            padding: 12px;
            border-radius: 11px;
            background: #d5d5d5;
        }

        .volun-head {
            color: orange;
        }

        .volun-head:hover {
            color: #b22b05;
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
            background: #9e0606 !important;
        }

        .dwn-li {
            list-style-type: none;
            margin: 2px;
        }

        .dwn-head {
            font-size: 22px;
            color: orange;
        }

        .dm-1 {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            padding: 16px;
            border-radius: 10px;
            border-left: 4px solid orange;
        }

        .rm-sum {
            text-align: center !important;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #ced4da !important;
            border-radius: 4px;
            height: 48px !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 42px !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 26px;
            position: absolute;
            top: 11px !important;
            right: 1px;
            width: 20px;
        }
    </style>
</head>

<body>
    <!-- header -->
    @include('include.header')
    <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">
        <div class="container">
            <h2 class="page-title">Change Volunteer</h2>
            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li> Volunteer</li>
                <li><i class="fas fa-angle-right"></i></li>
                <li> Change Volunteer</li>
            </ul>
        </div>
    </section>
    <section class="know-your mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mb-4">
                    <p class="volun-para">If you have moved to a new location and wish to change to the nearest
                        volunteer, please fill and submit the below form:</p>
                    <div class="volun">
                        <form class="bf-frm" id="change_volunteer_form" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="from_id" class="form-label fm-label">Membership No.<span class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="from_id" name="from_id" required value="" readonly>
                                </div>
                                <div class="col-md-12 ">
                                    <h5 class="text-white">Enter your new address below: -</h5>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="address_1" class="form-label fm-label">Current Address<span class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="address_1" name="address_1" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="address_2" class="form-label fm-label">Permanent Address<span class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="address_2" name="address_2" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="country" class="form-label fm-label">Country<span class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="country" name="country" required readonly value="India">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state" class="form-label fm-label">State<span class="quform-required">*</span></label>
                                    <select class="form-select" id="state" name="state">
                                        <option value="">Select State</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="city" class="form-label fm-label">Town / City<span class="quform-required">*</span></label>
                                    <select class="form-select" id="city" name="city">
                                        <option value="">Select city</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="postcode" class="form-label fm-label">Pincode<span class="quform-required">*</span></label>
                                    <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6)" id="postcode" name="postcode">
                                    <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                                    <input type="hidden" name="device_id" id="device_id" value="1">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="to_id " class="form-label fm-label">Select Your
                                        Nearest Volunteer <span class="quform-required ">*</span></label>
                                    <select class="form-select" id="to_id" name="to_id">
                                        <option value="">Please select</option>
                                    </select>
                                </div>

                                <div class="col-md-12 rm-sum">
                                    <input type="submit" onclick="RequestToBeChangeVolunteer()" class="sum">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dm-1 mb-4">
                        <h2 class="dwn-head">RM Online</h2>
                        <p>Listen weekly upanyasams</p>
                        <a href="rm-online" class="sum ccc">CLICK HERE TO LISTEN</a>
                    </div>
                    <div class="dm-1">
                        <h2 class="dwn-head ">Download Kinchitkaram Trust</h2>
                        <p>Download Kinchitkaram Trust app in Google Play Store and Apple App Store.</p>
                        <ul class="d-flex">
                            <li class="dwn-li"><a href="http://tiny.cc/kktapp" target="_blank"><img src="{{ env('MAIN_URL') }}public/assets/images/audio/apple-store.png"></a>
                            </li>
                            <li class="dwn-li">
                                <a href="http://tiny.cc/ktapp" target="_blank">
                                    <img src="{{ env('MAIN_URL') }}public/assets/images/audio/kinchit-en-pani-app.png">
                            </li>
                        </ul>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

    <script>
        $(function() {
            myProfiledata()
            $('#change_volunteer_form').submit(function(event) {
                event.preventDefault();
            });
            $('#state').select2({
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

            $('#city').select2({
                ajax: {
                    url: "{{ env('API_URL') }}get-city",
                    type: "post",
                    dataType: 'json',
                    delay: 400,
                    data: function(params) {
                        return {
                            search: params.term, // search term
                            state_id: $('#state').val()
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

            $('#to_id').select2({
                ajax: {
                    url: "{{ env('API_URL') }}get-volunteers",
                    type: "post",
                    dataType: 'json',
                    delay: 400,
                    data: function(params) {
                        // const searchTerm = params.term ? params.term : $('#city').val();
                        return {
                            search: params.term, // search term
                            token: getCookie('token'),
                            device_id: 1,
                            city: $('#city').val()
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
                                id: item.user_login,
                                text: item.user_login + ' - ' + item.first_name + ' - ' +
                                    item.name
                            }));
                            return {
                                results: formattedData
                            };
                        }
                    },
                    cache: true
                }
            })

            $('#city').on('change', function() {
                var formdata = new FormData();
                formdata.append('token', getCookie('token'));
                formdata.append('device_id', '1');
                formdata.append('city', this.value);
                $.ajax({
                    type: 'post',
                    url: "{{ env('API_URL') }}get-volunteers",
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response['status'] == 200) {
                            if (response['count'] === 0) {
                                $.confirm({
                                    title: 'Note..!',
                                    content: 'Volunteer not found in this city. Kindly continue with our common volunteer has shown in the volunteer list.',
                                    type: 'red',
                                    typeAnimated: true,
                                    icon: 'fa fa-warning',
                                    closeIcon: false,
                                    buttons: {
                                        tryAgain: {
                                            text: 'OK',
                                            btnClass: 'btn-green',
                                            action: function() {
                                                $('#to_id').empty();
                                                var option = new Option('CHN999 - KKT Mylapore - Chennai', 'CHN999', true, true);
                                                // $(option).attr('data-select2-id', '119');
                                                $('#to_id').append(option).trigger('change');
                                            }
                                        }
                                    }
                                });
                            }
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
                                }
                            });
                        }
                        if (response['status'] == 500) {
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
            })

        })

        function myProfiledata() {
            var formdata = new FormData();
            formdata.append('token', getCookie('token'));
            formdata.append('device_id', '1');
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}my-profile",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
                        var userData = response['data'][0]; // Access the first object in the array
                        $('#from_id').val(userData['user_login']);
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
                            }
                        });
                    }
                    if (response['status'] == 500) {
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

        function RequestToBeChangeVolunteer() {
            var formdata = new FormData($('#change_volunteer_form')[0]);
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}change-the-volunteer",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
                        var userData = response['userdetails'];
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
                                        location.reload()
                                    }
                                },
                                close: function() {
                                    location.reload()
                                }
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