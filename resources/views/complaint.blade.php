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

        .sec-title__title {
            position: relative;
            z-index: 2;
            margin: 0;
            font-size: 32px;
            color: #8a0410;
            font-weight: bold;
            line-height: 1.2;
            letter-spacing: var(--cleenhearts-letter-space-xl, -1.5px);
        }

        .about-one__text {
            margin-bottom: 0;
        }

        .sec-title__title:hover {
            color: #e09409 !important;
        }

        .about-one .sec-title__tagline {
            margin-bottom: 23px;
        }

        .abu-d {
            background: #e9e3e3;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }
    </style>

</head>



<body>





    <!-- header -->

    @include('include.header')

    <section class="bred-crum" style="background-image:url({{env('MAIN_URL')}}public/assets/images/breadcrum/header.jpg);">

        <div class="container">

            <h2 class="page-title">Abuse Category</h2>

            <ul class="breadcrumb-nav">

                <li><a href="index">Home</a></li>

                <li><i class="fas fa-angle-right"></i></li>

                <li>Abuse Category</li>

            </ul>

        </div>

    </section>

    <section class="about-one about-one--home section-space1 mb-5">
        <div class="container">
            <div class="row gutter-y-50">

                <div class="col-xl-6 col-md-12">
                    <div class="about-one__content">
                        <div class="sec-title">
                        </div>
                        <!-- /.sec-title -->
                        <div class="about-one__text-box wow fadeInUp mb-4" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <!-- /.about-one__text-box__image -->
                            <p class="about-one__text">We have stringent policies against those members who misuse our services. For us to act and stop any abuse or violation, we need all your support and extended co-operation.</p>
                            <p class="about-one__text">Alert us by writing to us: <strong><a href="mailto:lakshmikalyanam@kinchit.org" class="def-anc">lakshmikalyanam@kinchit.org</a></strong>, for us to initiate necessary action against the offender.</p>
                            <p>Also, while reporting such complaints, please provide all evidence including any e-mail (Full header of the e-mail) you may have received.</p>
                            <h3 class="sec-title__title mt-3 mb-3">Your personal details will not be disclosed.</h3>
                            <p>The following are considered as abuse of our services :</p>
                            <div>
                                <ul class="liss-ulll">
                                    <li>
                                        If a member sends obscene or unfitting e-mails
                                    </li>
                                    <li>If a member seeks marriage proposal with a fraudulent or obscene profile</li>
                                    <li>If a member provokes you with harassing email remarks</li>
                                    <li>If a photograph of a member is miss-represented or not real.</li>
                                    <li>If a member found to be using our services for private business purposes with advertisements or other business material. Please Report Anything Offensive, Fraudulent or Suspicious with proper evidence to us by sending mail to lakshmikalyanam@kinchit.org</li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.about-one__text-box -->


                    </div>
                    <!-- /.about-one__content -->
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="about-one__content">
                        <!-- /.sec-title -->
                        <div class="about-one__text-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="abu-d">
                                <form id="abuse_form" method="post" enctype="multi">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label for="your-name" class="form-label" name="abuse_category">Select your abuse category <span class="quform-required">*</span></label>
                                            <select class="form-select" require aria-label="Default select example" id="abuse_type" name="abuse_type">
                                                <option value="">Select</option>
                                                <option value="Illicit email">Illicit email</option>
                                                <option value="Unsolicited email">Unsolicited email</option>
                                                <option value="Fraudulent Profile">Fraudulent Profile</option>
                                                <option value="Photograph being Suspect">Photograph being Suspect</option>
                                                <option value="Any Other">Any Other</option>
                                            </select>
                                            <p class="validate_errors" id="abuse_type_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="your-surname" class="form-label">Complaint against Profile ID <span class="quform-required">*</span></label>
                                            <input type="text" class="form-control" id="profile_id" name="profile_id" required>
                                            <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                                            <input type="hidden" name="device_id" id="device_id" value="1">
                                            <p class="validate_errors" id="profile_id_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>

                                        </div>
                                        <div class="col-md-12">
                                            <label for="your-email" class="form-label">(His / Her )Email ID <span class="quform-required">*</span></label>
                                            <input type="email" class="form-control" id="email_id" name="email_id" required>
                                            <p class="validate_errors" id="email_id_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="subject" class="form-label"> Subject <span class="quform-required">*</span></label>
                                            <textarea class="form-control" id="subject" name="subject" rows="3"></textarea>
                                            <p class="validate_errors" id="subject_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                                        </div>
                                        <div class="col-12">
                                            <label for="complaint_details" class="form-label">Complaint Details <span class="quform-required">*</span></label>
                                            <textarea class="form-control" id="complaint_details" name="complaint_details" rows="5" required></textarea>
                                            <p class="validate_errors" id="complaint_details_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Your Email ID <span class="quform-required">*</span></label>
                                            <input type="text" class="form-control" id="email" name="email" required>
                                            <p class="validate_errors" id="email_error" style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-center">
                                                <div class="col-md-3">
                                                    <button type="submit" onclick="AbuseCategory()" class="btn btn-dark w-100 fw-bold sum">Send</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.about-one__text-box -->


                    </div>
                    <!-- /.about-one__content -->
                </div>


            </div>
            <!-- /.row -->
        </div>
    </section>


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

    <script src="assets/js/js.cookie.js"></script>
    <script src="assets/js/notify.js"></script>
    <script src="assets/js/notify.min.js"></script>

    <script src="assets/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>




    @include('include.footer')

    <script>
        $(document).ready(function() {
            $('#abuse_form').submit(function(event) {
                event.preventDefault(); // Corrected method name
            });
            $('.form-control').on('keyup change', function() {
                $('.validate_errors').text('');
            });
        });


        function AbuseCategory() {
            var formdata = new FormData($('#abuse_form')[0]);
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}abuse-form",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response['status'] == 200) {
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
                                        window.location.reload(); // Reload the page
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
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            })
        }
    </script>
</body>



</html>