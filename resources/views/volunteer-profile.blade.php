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

        .dm-1:hover {
            transform: scale(1.1);
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
    <h2 class="page-title">Know Your Volunteer</h2>
    <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li> Know Your Volunteer</li>
            </ul>
    </div>
</section>

    <section class="know-your mb-5">
        <div class="container">
            <div class="row justify-content-center">
<h2 class="volun-head mt-3 mb-5">The Below table displays your volunteer details</h2>
                <div class="col-md-8 mb-4">

                    <div class="volun">
                        <form class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th scope="row">Volunteer Code</th>
                                        <td id="user_login">CHN999</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">First Name</th>
                                        <td id="first_name">KKT Mylapore</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Mobile/SMS</th>
                                        <td id="phone_number">044 24992728</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address Line 1</th>
                                        <td id="address_1">No. 6, Bheemasena Garden Street,</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Address Line 2</th>
                                        <td id="address_1">Mylapore</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">City/Town</th>
                                        <td id="city_name">Chennai</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">State</th>
                                        <td id="state_name">Tamil Nadu</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pincode</th>
                                        <td id="postcode">60004</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Country</th>
                                        <td id="">India</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Native</th>
                                        <td id="native">Tamil Nadu</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Do you listen to En Pani?</th>
                                        <td id="kinchit_enpani">No</td>
                                    <tr>
                                        <th scope="row">Are you tech-savvy?</th>
                                        <td id="tech_savvy">Yes</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Have you been able to listen to CDs</th>
                                        <td id="listen_cd">Yes</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Prefered method to receive your quarterly RM audio/video?
                                        </th>
                                        <td id="rm_method">Online Account kinchit.org</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Form Signed Date</th>
                                        <td id="form_signed_date">31-08-2020</td>
                                    <tr>
                                        <th scope="row">Form Signed Place</th>
                                        <td id="form_signed_place">Chennai</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No. of Family Members</th>
                                        <td id="family_members">3</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Enter Family Members Detail</th>
                                        <td id="family_details">No</td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <p class="volun-para mt-3 mb-3">If you have any queries, please send us a mail to <a
                                href="mailto:membership@kinchit.org" class="mem-ad">membership@kinchit.org</a></p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="dm-1 mb-4">
                        <h2 class="dwn-head">RM Online</h2>
                        <p>Listen weekly upanyasams</p>
                        <button type="button" class="btn btn-secondary sum" style="border:none;">Click Here to
                            Listen</button>
                    </div>
                    <div class="dm-1">
                        <h2 class="dwn-head mt-3">Download Kinchitkaram Trust</h2>
                        <p>Download Kinchitkaram Trust app in Google Play Store and Apple App Store.</p>
                        <ul class="d-flex">
                            <li class ="dwn-li"><a href="http://tiny.cc/kktapp" target="_blank"><img
                                        src="{{ env('MAIN_URL') }}public/assets/images/audio/apple-store.png"></a></li>
                            <li class ="dwn-li"><a href="http://tiny.cc/ktapp" target="_blank"><img
                                        src="{{ env('MAIN_URL') }}public/assets/images/audio/kinchit-en-pani-app.png"></li>
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
            VolunteerProfile()
        })

        function VolunteerProfile() {
            var formdata = new FormData();
            formdata.append('token', getCookie('token'));
            formdata.append('device_id', '1');
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}get-volunteer-profile",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
                        var userData = response['data'][0]; // Access the first object in the array
                        $('#user_login').text(userData['user_login']);
                        $('#first_name').text(userData['first_name']);
                        $('#phone_number').text(userData['phone_number']);
                        $('#address_1').text(userData['address_1']);
                        $('#address_2').text(userData['address_2']);
                        $('#city_name').text(userData['city_name']);
                        $('#state_name').text(userData['state_name']);
                        $('#postcode').text(userData['postcode']);
                        $('#native').text(userData['native']);
                        $('#kinchit_enpani').text(userData['kinchit_enpani']);
                        $('#tech_savvy').text(userData['tech_savvy']);
                        $('#listen_cd').text(userData['listen_cd']);
                        $('#rm_method').text(userData['rm_method']);
                        $('#form_signed_date').text(userData['form_signed_date']);
                        $('#form_signed_place').text(userData['form_signed_place']);
                        $('#family_members').text(userData['family_members']);
                        $('#family_details').text(userData['family_details']);
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
    </script>

</body>

</html>
