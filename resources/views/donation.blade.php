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

        .don-li {

            list-style-type: disclosure-closed;

            color: #830404;

        }

        .don-link {

            color: red;

        }

        .btn-donate {

            --clr-font-main: hsla(0 0% 20% / 100);

            --btn-bg-1: hsl(43deg 100% 50%);

            --btn-bg-2: hsl(34deg 100% 50%);

            --btn-bg-color: hsla(360 100% 100% / 1);

            --radii: 0.5em;

            cursor: pointer;

            min-width: 120px;

            min-height: 44px;

            font-size: var(--size, 1rem);

            font-family: "Segoe UI", system-ui, sans-serif;

            font-weight: 500;

            transition: 0.8s;

            background-size: 280% auto;

            background-image: linear-gradient(325deg, var(--btn-bg-2) 0%, var(--btn-bg-1) 55%, var(--btn-bg-2) 90%);

            border: none;

            border-radius: var(--radii);

            color: var(--btn-bg-color);
            transition: background-position 0.8s ease;
            /* box-shadow: 0px 0px 20px rgb(255 146 0), 0px 5px 5px -1px #ffc107, inset 4px 4px 8px rgb(255 161 1), inset -4px -4px 8px #ffc107; */

        }

        .btn-donate:hover {

            background-position: right top;
            background-position: 100% 50%;
            transition: background-position 0.8s ease;
            /* --btn-bg-color: hsla(360 100% 100% / 1); */
            background-image: linear-gradient(325deg, hsl(0deg 98.25% 55.29%) 55%, hsl(272.93deg 49.9% 64.71%) 90%);
            box-shadow: unset;

        }



        .btn-donate:is(:focus, :focus-visible, :active) {

            outline: none;

            box-shadow: 0 0 0 3px var(--btn-bg-color), 0 0 0 6px var(--btn-bg-2);

        }



        @media (prefers-reduced-motion: reduce) {

            .btn-donate {

                transition: linear;

            }

        }

        .feed {

            align-self: center;

        }

        .fff {

            box-shadow: 0 10px 20px rgb(0 0 0 / 19%), 0 6px 6px rgb(0 0 0 / 23%);

            padding: 19px;

            border-radius: 10px;

        }

        .fee-para {

            text-align: unset;

            line-height: 20px;

        }

        .spinner-box {
            width: 300px;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent;
        }

        .three-quarter-spinner {
            width: 50px;
            height: 50px;
            border: 3px solid #fb5b53;
            border-top: 3px solid transparent;
            border-radius: 50%;
            animation: spin .5s linear 0s infinite;
        }

        .loading-wave {
            width: 300px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        .loading-bar {
            width: 20px;
            height: 10px;
            margin: 0 5px;
            background-color: #3498db;
            border-radius: 5px;
            animation: loading-wave-animation 1s ease-in-out infinite;
        }

        .loading-bar:nth-child(2) {
            animation-delay: 0.1s;
        }

        .loading-bar:nth-child(3) {
            animation-delay: 0.2s;
        }

        .loading-bar:nth-child(4) {
            animation-delay: 0.3s;
        }

        @keyframes loading-wave-animation {
            0% {
                height: 10px;
            }

            50% {
                height: 50px;
            }

            100% {
                height: 10px;
            }
        }
    </style>

</head>



<body>





    <!-- header -->

    @include('include.header')

    <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

        <div class="container">

            <h2 class="page-title">Donations</h2>

            <ul class="breadcrumb-nav">

                <li><a href="/">Home</a></li>

                <li><i class="fas fa-angle-right"></i></li>

                <li> Donations</li>

            </ul>

        </div>

    </section>

    <section class="donate-sec">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-3 text-center mb-2">

                    <div class="don-img">

                        <img src="{{ env('MAIN_URL') }}public/assets/images/breadcrum/velukkudi-krishnan-swami.webp" class="img-fluid">



                    </div>

                </div>

                <div class="col-md-9">

                    <div class="don-sec">

                        <p><strong>General Donations</strong>&nbsp;&nbsp;&nbsp;will be used for the following services:</p>

                        <ul style="list-style-position: inside;">

                            <li class="don-li">Patashala</li>

                            <li class="don-li">Temple Renovation</li>

                            <li class="don-li">Donation for Single Teacher School</li>

                            <li class="don-li">Gnanakaitha</li>

                            <li class="don-li">Yuva Vikas</li>

                        </ul>

                        <p class="mt-3 mb-2"><strong>Abhyasa Kendra -</strong>&nbsp;This is our project at Srirangam. Schools and training centres for special children are mostly concentrated in urban cities catering to the age group of less than 15 years. To take quality facilities to rural areas, in collaboration with V-Excel foundation, we have started a vocational training centre for special children. Started in October 2015, 35 students are benefited by this Kendra now. We are planning to have a larger facility at Srirangam which can serve 50 children. We also plan to start satellite training centres at our village facilities in Tirunagari, Tirukkannangudi, Sirupuliyur and Koviladi.</p>

                        <p class="mt-3 mb-3"><strong>Goshala</strong>&nbsp;The Trust has a goshala at Thirunagari and Kattumannar Koil to take care of not just milch cows but also aged ones and aims at ensuring distribution of milk to the rural children. Goshalas are going to be set up at other rural locations also.</p>

                        <p class="mt-3 mb-3"><strong>Note:</strong>&nbsp; All donations to Kinchitkaram Trust whether for specific purposes or general donations will be eligible for S.<strong>80G Income Tax benefits</strong></p>

                        <p style="color:#2c80d3;"><span style="">If you wish to become a member and make an annual contribution to Kinchitkaram, please</span><a href="/become-member" class="def-anc">&nbsp;Click Here</a></p>

                    </div>

                </div>

            </div>



        </div>



    </section>

    <section class="feed-sec p-0 mb-5">

        <div class="container ">

            <div class="row justify-content-center p-3">

                <div class="col-md-9 fff mb-5 donation_categories">
                    <div class="loading-wave" style="margin:auto;">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
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
        $(document).ready(function() {

            $(window).scroll(function() {

                if ($(this).scrollTop() > 50) {

                    $('#scroll-to-top').fadeIn();

                } else {

                    $('#scroll-to-top').fadeOut();

                }

            });

            // scroll body to 0px on click

            $('#scroll-to-top').click(function() {

                $('#scroll-to-top').tooltip('hide');

                $('body,html').animate({

                    scrollTop: 0

                }, 800);

                return false;

            });



            $('#scroll-to-top').tooltip('show');



        });

        $(function() {
            ShowTheDonationCategories()
            $('#donation-form').submit(function(event) {
                event.preventDefault();
                if ($('input[name="pay_categories[]"]:checked').length === 0) {
                    alert('Please select at least one donation option.');
                    return false; // Prevent form submission
                }
            });
        })

        function ShowTheDonationCategories() {
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}get-donation-categories",
                data: {
                    token: getCookie('token'),
                    device_id: 1
                },
                success: function(response) {
                    if (response['status'] == 200) {
                        console.log(response);
                        var html = `<form action="donation-billing" method="POST" id="donation-form" enctype="multipart/form-data">
                     @csrf`;
                        for (var i = 0; i < response['data'].length; i++) {
                            html += `<div class="row mb-2">
                   <div class="feed col-7">
                       <p class="fee-para m-0">
                           <span class="check-sp">
                               <input type="checkbox" id="pay_categories${response['data'][i].id}" name="pay_categories[]" value="${response['data'][i].id}">
                           </span> 
                           ${response['data'][i].category_name}
                       </p>
                   </div>
                   <div class="feed col-5">
                       <p class="fee-head text-right">
                           <input type="hidden" name="amount[]" id="amount${response['data'][i].id}" value="${response['data'][i].amount}">
                           ₹${response['data'][i].amount}
                       </p>
                   </div>  
                </div>`;
                        }
                        html += `<div class="row mb-2 mt-2">
                 <input type="hidden" name="pay_type" value="general-donate">
                  <p class="text-center"><button class="btn-donate" onclick="return validateCheckboxes()">ADD DONATION</button></p>
             </div>
         </form>`;

                        $('.donation_categories').html(html);
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

        function validateCheckboxes() {
            var checkboxes = document.getElementsByName('pay_categories[]');
            var isChecked = false;
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    isChecked = true;
                    break;
                }
            }
            if (!isChecked) {
                $.confirm({
                            title: 'error!',
                            content: 'Please select at least one category.',
                            type: 'red',
                            typeAnimated: true,
                            icon: 'fa fa-warning',
                            closeIcon: false,
                            buttons: {
                                tryAgain: {
                                    text: 'OK',
                                    btnClass: 'btn-red',
                                    // action: function() {
                                    //     sessionStorage.clear();
                                    //     deleteCookie('typeofuser');
                                    //     deleteCookie('token');
                                    //     deleteCookie('marital_acc');
                                    // }
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
                //alert('Please select at least one category.');
                return false;
            }
            return true; // Allow form submission
        }
    </script>

</body>



</html>