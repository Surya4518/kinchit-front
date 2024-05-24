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

        #family1,
        #family2,
        #family3,
        #family4,
        #family5,
        #family6,
        #family7,
        #family8,
        #family9,
        #family10 {
            display: none;
        }
    </style>

</head>



<body>





    <!-- header -->

    @include('include.header')

    <section class="bred-crum"
        style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

        <div class="container">

            <h2 class="page-title">Add New Member</h2>

            <ul class="breadcrumb-nav">

                <li><a href="index">Home</a></li>

                <li><i class="fas fa-angle-right"></i></li>

                <li> Add New Member</li>

            </ul>

        </div>

    </section>

    <section class="billing mb-5">

        <div class="container">

            <div class="row mb-2">

                <div class="col-md-12">

                    <div class="Billing-frm">

                        <form method="POST" enctype="multipart/form-data" id="add-member-form" class="bf-frm">

                            <div class="row">

                                <div class="col-md-12 mb-3">
                                    <h3 class="text-white">Personal Information</h3>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="first_name" class="form-label fm-label">First Name:<span
                                            class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        required="">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="last_name" class="form-label fm-label">Last Name:<span
                                            class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        required="">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="gender " class="form-label fm-label">Gender<span
                                            class="quform-required ">*</span></label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="">Please select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="dob" class="form-label fm-label">Date Of Birth<span
                                            class="quform-required">*</span></label>
                                    <input type="date" class="form-control text-uppercase" id="dob"
                                        name="dob" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="acharyan" class="form-label fm-label">Samasrayana Acharyan (if
                                        applicable)<span class="quform-required">*</span></label>
                                    <input type="text" class="form-control text-uppercase" id="acharyan"
                                        name="acharyan" required>
                                </div>


                                <div class="col-md-12 mb-3">
                                    <h3 class="text-white"> Contact Information</h3>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label fm-label">Email Address <span
                                            class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="mobile" class="form-label fm-label">Mobile/SMS<span
                                            class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="whatsapp" class="form-label fm-label">Mobile/Whatsapp<span
                                            class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                        required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="landline" class="form-label fm-label">Landline</label>
                                    <input type="text" class="form-control" id="landline" name="landline">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="address_line_1" class="form-label fm-label">Address 1<span
                                            class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="address_line_1"
                                        name="address_line_1" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="address_line_2" class="form-label fm-label">Address 2<span
                                            class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="address_line_2"
                                        name="address_line_2" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="country" class="form-label fm-label">Country<span
                                            class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="country" name="country"
                                        required readonly value="India">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="state" class="form-label fm-label">State<span
                                            class="quform-required">*</span></label>
                                    <select class="form-select" id="state" name="state">
                                        <option value="">Select State</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="city" class="form-label fm-label">City<span
                                            class="quform-required">*</span></label>
                                    <select class="form-select" id="city" name="city">
                                        <option value="">Select city</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <h3 class="text-white"> Additional Information</h3>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="native" class="form-label fm-label">Native<span
                                            class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="native" name="native"
                                        required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="special_interest" class="form-label fm-label">Special
                                        Interest/Hobby<span class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="special_interest"
                                        name="special_interest" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="enpani" class="form-label fm-label">Do you listen to Enpani?<span
                                            class="quform-required">*</span></label>
                                    <select class="form-select" id="enpani" name="enpani">
                                        <option value="">Please Select </option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="tech_savvy" class="form-label fm-label">Are you Tech Savvy?<span
                                            class="quform-required">*</span></label>
                                    <select class="form-select" id="tech_savvy" name="tech_savvy">
                                        <option value="">Please select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>


                                <div class="col-md-6 mb-3">
                                    <label for="cd" class="form-label fm-label">Have you been able to listen
                                        to CDs?<span class="quform-required">*</span></label>
                                    <select class="form-select" id="cd" name="cd">
                                        <option value="">Please select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="rm_audio" class="form-label fm-label">Which method you prefer to
                                        receive your quarterly RM audio/video? (Select one option from below that you
                                        prefer the most)<span class="quform-required">*</span></label>
                                    <select class="form-select" id="rm_audio" name="rm_audio">
                                        <option value="">Please select</option>
                                        <option value="Volunteer (CD/DVD)">Volunteer (CD/DVD)</option>
                                        <option value="Courier (CD/DVD)">Courier (CD/DVD)</option>
                                        <option value="Online (Web/App)">Online (Web/App)</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="signed_date" class="form-label fm-label">Form Signed Date<span
                                            class="quform-required">*</span></label>
                                    <input type="date" class="form-control" id="signed_date" name="signed_date">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="signed_place" class="form-label fm-label">Form Signed Place<span
                                            class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="signed_place"
                                        name="signed_place">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="family_members" class="form-label fm-label" id="hockey">No. of
                                        Family Members<span class="quform-required">*</span></label>
                                    <select class="form-select" id="family_members" name="family_members"
                                        onchange="ShowFamilyDetailForm(this.value)">
                                        <option value="">Please select</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="sub-form show-hide family-details">
                                </div>

                                <!--<div class="col-md-12 my-3">-->
                                <!--    <h3 style="color:#fff;">Create Credential</h3>-->
                                <!--</div>-->
                                <!--<div class="col-md-6 mb-3">-->
                                <!--    <label for="user_name" class="form-label" style="color:#fff;">Username<span-->
                                <!--            class="quform-required">*</span></label>-->
                                <!--    <input type="text" class="form-control" id="user_name" name="user_name">-->
                                    
                                <!--</div>-->

                                <div class="col-md-12 text-center">
                                    <input type="hidden" name="token" id="token"
                                        value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                                    <input type="hidden" name="device_id" id="device_id" value="1">
                                    <input type="submit" onclick="AddMemberByVolunteer()" class="sum">
                                </div>

                            </div>
                        </form>

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
    <script>
        $(function() {
            $('#add-member-form').submit(function(event) {
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
        })

        function AddMemberByVolunteer() {
            var formdata = new FormData($('#add-member-form')[0]);
            var phoneNumber = $('#mobile').val();
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}add-member",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
                      var smsFormData = new FormData();
                      smsFormData.append('mobile', phoneNumber);
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

        function ShowFamilyDetailForm(val) {
            var html = ``;
            for (let i = 0; i < val; i++) {
                html += `<div class="row">
                       <div class="col-md-6 mb-2">
                        <label for="family_members_name.${i}" class="form-label fm-label">Family Member ${i+1}: Name<span
                      class="quform-required">*</span></label>
                       <input type="text" class="form-control" id="family_members_name.${i}" name="family_members_name[]">
                       </div>
                           <div class="col-md-6 mb-2">
                        <label for="family_members_relationship.${i}" class="form-label fm-label">Family Member ${i+1}: Relationship<span
                      class="quform-required">*</span></label>
                       <input type="text" class="form-control" id="family_members_relationship.${i}" name="family_members_relationship[]">
                       </div>
                         <div class="col-md-6 mb-2">
                        <label for="family_members_gender.${i}" class="form-label fm-label">Family Member ${i+1}: Gender<span
                      class="quform-required">*</span></label>
                       <select class="form-select" id="family_members_gender.${i}" name="family_members_gender[]">
                        <option value="">Please select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                       </div>
                          <div class="col-md-6 mb-2">
                        <label for="family_members_email.${i}" class="form-label fm-label">Family Member ${i+1}: Email address<span
                      class="quform-required">*</span></label>
                       <input type="text" class="form-control" id="family_members_email.${i}" name="family_members_email[]">
                       </div>
                         <div class="col-md-6 mb-2">
                        <label for="family_members_mobile.${i}" class="form-label fm-label">Family Member ${i+1}: Mobile<span
                      class="quform-required">*</span></label>
                       <input type="text" class="form-control" id="family_members_mobile.${i}" name="family_members_mobile[]">
                       </div>
                          <div class="col-md-6 mb-2">
                        <label for="family_members_landline.${i}" class="form-label fm-label">Family Number ${i+1}: Landline<span
                      class="quform-required">*</span></label>
                       <input type="text" class="form-control" id="family_members_landline.${i}" name="family_members_landline[]">
                       </div>
                         <div class="col-md-6 mb-2">
                        <label for="family_members_dob.${i}" class="form-label fm-label">Family Member ${i+1}: Date of Birth<span
                      class="quform-required">*</span></label>
                       <input type="date" class="form-control" id="family_members_dob.${i}" name="family_members_dob[]">
                       </div>
                         <div class="col-md-6 mb-2">
                        <label for="family_members_acharyan.${i}" class="form-label fm-label">Family Member ${i+1}: Samasrayana Acharyan<span
                      class="quform-required">*</span></label>
                       <input type="text" class="form-control" id="family_members_acharyan.${i}" name="family_members_acharyan[]">
                       </div>
                        <div class="col-md-6 mb-2">
                        <label for="family_members_occupation.${i}" class="form-label fm-label">Family Member ${i+1}: Occupation<span
                      class="quform-required">*</span></label>
                       <input type="text" class="form-control" id="family_members_occupation.${i}" name="family_members_occupation[]">
                       </div>
                          <div class="col-md-6 mb-2">
                        <label for="family_members_city.${i}" class="form-label fm-label">Family Member ${i+1}: City<span
                      class="quform-required">*</span></label>
                       <input type="text" class="form-control" id="family_members_city.${i}" name="family_members_city[]">
                       </div>
                        </div>`;
            }
            $('.family-details').html(html)
        }
    </script>


    @include('include.footer')
</body>



</html>
