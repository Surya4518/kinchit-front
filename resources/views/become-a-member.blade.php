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

        .modal-dialog {
            top: 11%;
        }

        .modal-content {
            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);
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
            <h2 class="page-title">Become a Member</h2>
            <ul class="breadcrumb-nav">
                <li><a href="index">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li> Membership</li>
                <li><i class="fas fa-angle-right"></i></li>
                <li> Become a Member</li>
            </ul>
        </div>
    </section>
    <section class="mem-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="swami-img text-center mb-4">
                        <img src="{{ env('MAIN_URL') }}public/assets/images/breadcrum/Velukkudi-Swamy.webp"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="swami-sec">
                        <p>The holy scriptures say “akinchitkarasya seshatva anupapatti:” (He who does not serve his
                            little mite, is not a devotee). Drawing the message from this saying, your trust is engaged
                            in rendering small services and rightly named as “Kinchitkaram” or “My little
                            mite.”<br><br>Kinchitkaram Trust carries out several charitable activities. Please click
                            “Services” to know the details. If you wish to contribute your little mite, perform your
                            Kinchitkaram towards these activities, you could become a member of Kinchitkaram Trust which
                            involves making a regular contribution/donation once every year to the Trust and also avail
                            opportunities to render physical service. The membership at present is open only to Indian
                            residents.<br><br>The membership is annual corresponding to the financial year, which needs
                            to be renewed every year by renewing the contribution. At present, the annual
                            contribution/donation is kept at Rs.1000/-. The Trust reserves it discretion and right to
                            accept/reject the membership.<br><br>By clicking on “I Agree” below you confirm that, of
                            your own volition and without any expectation of material benefit/service, you desire to
                            become a member and contribute.</p>
                    </div>
                    <div class="know-more mt-5 mb-5 text-center">
                        <button class="agree border-0" data-toggle="modal" data-target="#exampleModal1">I Agree</button>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="text-white">Please click donate button to contribute <strong>Rs.1000/- </strong> for the
                        present financial year. To send you any complimentary spiritual material in hard form that the
                        Trust may give to members such as calendar, etc., courier charges of <strong>Rs.100/-</strong>
                        will be added.</p>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 ">
                            <label class="text-white" for="exampleFormControlSelect1"> PREFERRED LANGUAGE FOR SPIRITUAL
                                MATERIAL <span class="quform-required">*</span></label>
                        </div>
                        <form action="billing-details" method="POST" id="calendar_form">
                            @csrf
                        <div class="col-lg6 col-md-6">
                            <select class="form-select" id="calendar_type" name="calendar_type" required>
                                <option value="">Choose an Option</option>
                                <option value="Tamil">Tamil</option>
                                <option value="English">English</option>
                            </select>
                            <input type="hidden" name="pay_type" id="pay_type" value="member">
                        </div>
                    </form>
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <a href="billing-details"> --}}
                    <button type="button" id="calendar_btn" class="btn btn-primary" disabled
                        style="background: red;
    border: none;">Save changes</button>
                    {{-- </a> --}}
                </div>
            </div>
        </div>
    </div>

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
            $('#calendar_type').on('change', function() {
                if ($('#calendar_type').val()) {
                    $('#calendar_btn').removeAttr('disabled');
                } else {
                    $('#calendar_btn').attr('disabled', 'disabled');
                }
            });
            $('#calendar_btn').on('click', function() {
                $('#calendar_form').submit()
            })
        })
    </script>
</body>

</html>
