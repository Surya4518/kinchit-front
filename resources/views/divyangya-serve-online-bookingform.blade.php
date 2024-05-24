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

        #selectCountry {
            padding: 11px 7px 11px 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            width: 100%;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #ced4da !important;
            border-radius: 4px;
            height: 44px !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 37px !important;
        }

        /* end */
    </style>
</head>

<body>


    <!-- header -->
    @include('include.header')

    <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">
        <div class="container">
            <h2 class="page-title"> DD Serve -Online Booking</h2>
            <ul class="breadcrumb-nav">
                <li><a href="index">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li>DD Serve -Online Booking</li>
            </ul>
        </div>
    </section>
    <section class="con-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 frms mb-5">
                    <form id="rd_booking_form" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label for="booker_name" class="form-label">First Name<span class="quform-required">*</span></label>
                                <input type="text" class="form-control" id="booker_name" name="booker_name" required oninput="this.value = this.value.replace(/[^A-Za-z]/g, '');">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="booker_lastname" class="form-label">Last Name<span class="quform-required">*</span></label>
                                <input type="text" class="form-control" id="booker_lastname" name="booker_lastname" oninput="this.value = this.value.replace(/[^A-Za-z]/g, '');" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="divyadesam"> Select a Divyadesam <span class="quform-required">*</span></label>
                                <select class="form-select" id="divyadesam" name="divyadesam" require>
                                    <option value="">Please select</option>
                                    <option value="KattumannarKoil">KattumannarKoil</option>
                                    <option value="Sirupuliyur">Sirupuliyur</option>
                                    <option value="Thirukannangudi">Thirukannangudi</option>
                                    <option value="Thirupper Nagar (Koviladi)">Thirupper Nagar (Koviladi)</option>
                                    <option value="Thiruvali Thirunagari">Thiruvali Thirunagari</option>
                                    <option value="Alwar Thirunagari">Alwar Thirunagari</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="no_of_ppl"> No. of Accompanying People <span class="quform-required">*</span></label>
                                <div class="d-flex">
                                    <div class="custom-control custom-radio custom-control-inline" style="margin:3px;">
                                        <input type="radio" id="no_of_ppl1" name="no_of_ppl" class="custom-control-input is-invalid" value="0">
                                        <label class="custom-control-label" for="no_of_ppl">0</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline" style="margin:3px;">
                                        <input type="radio" id="no_of_ppl2" name="no_of_ppl" class="custom-control-input is-invalid" value="1">
                                        <label class="custom-control-label" for="no_of_ppl">1</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline" style="margin:3px;">
                                        <input type="radio" id="no_of_ppl3" name="no_of_ppl" class="custom-control-input is-invalid" value="2">
                                        <label class="custom-control-label" for="no_of_ppl">2</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline" style="margin:3px;">
                                        <input type="radio" id="no_of_ppl4" name="no_of_ppl" class="custom-control-input is-invalid" value="3">
                                        <label class="custom-control-label" for="no_of_ppl">3</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline" style="margin:3px;">
                                        <input type="radio" id="no_of_ppl5" name="no_of_ppl" class="custom-control-input is-invalid" value="4">
                                        <label class="custom-control-label" for="no_of_ppl">4</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline" style="margin:3px;">
                                        <input type="radio" id="no_of_ppl" name="no_of_ppl" class="custom-control-input is-invalid" value="5">
                                        <label class="custom-control-label" for="no_of_ppl">5</label>
                                    </div>
                                </div>
                            </div>
                            <div id="peoples" class="row"></div>

                            <div class="col-md-6 mb-3">
                                <label for="date_from" class="form-label">Date from <span class="quform-required">*</span></label>
                                <input type="date" class="form-control" id="date_from" name="date_from">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="date_to" class="form-label">Date To<span class="quform-required">*</span></label>
                                <input type="date" class="form-control" id="date_to" name="date_to">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone_no" class="form-label">Phone Number<span class="quform-required">*</span></label>
                                <input type="number" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, ''); if(this.value.length > 10) this.value = this.value.slice(0, 10);" id="phone_no" name="phone_no" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address<span class="quform-required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="address1" class="form-label">Address Line 1<span class="quform-required">*</span></label>
                                <input type="text" class="form-control" id="address1" name="address1">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="address2" class="form-label">Address Line 2<span class="quform-required">*</span></label>
                                <input type="text" class="form-control" id="address2" name="address2">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="country_name" class="form-label">Country<span class="quform-required">*</span></label><br>
                                <input type="text" class="form-control" id="country_name" name="country_name" value="India" readonly="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="state_name" class="form-label">State<span class="quform-required">*</span></label>
                                <select class="form-select" id="state_name" name="state_name">
                                    <option value="">Select State</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="city_name" class="form-label">City / Town<span class="quform-required">*</span></label>
                                <select class="form-select" id="city_name" name="city_name">
                                    <option value="">Select City</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="pincode" class="form-label">Pincode<span class="quform-required">*</span></label>
                                <input type="text" class="form-control" id="pincode" oninput="this.value = this.value.replace(/[^0-9]/g, ''); if(this.value.length > 8) this.value = this.value.slice(0, 8);" name="pincode">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="kkt_or_not"> Are You KKT Member? <span class="quform-required">*</span></label>
                                <select class="form-select" id="kkt_or_not" name="kkt_or_not" onchange="showmemidinput(this.value)">
                                    <option value="">Please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3 member-id" style="display: none;">
                                <label for="membership_id" class="form-label">Membership ID<span class="quform-required">*</span></label>
                                <input type="text" class="form-control" id="membership_id" name="membership_id">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="exampleFormControlSelect1"> Disclaimer <span class="quform-required">*</span></label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                    <label class="custom-control-label" for="customCheck1" style="display: contents;">I confirm that the information provided above is
                                        true to the best of my knowledge</label>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <input type="submit" onclick="RDBookingSubmit()" class="sum">
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>


    <!-- END HEADER -->
    <!-- section starts -->


    <!-- section ends -->




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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let today = new Date().toISOString().split('T')[0];
            document.getElementById('date_from').setAttribute('min', today);
        });
        document.addEventListener('DOMContentLoaded', function() {
            let today = new Date().toISOString().split('T')[0];
            document.getElementById('date_to').setAttribute('min', today);
        });

        $(function() {
            $('#rd_booking_form').submit(function(event) {
                event.preventDefault();
            });
            $('input[name=no_of_ppl]').on('change', function() {
                var html = ``;
                for (let i = 0; i < $(this).val(); i++) {
                    html += `<div class="col-md-6 mb-3">
                                    <label for="ppl_names.${i}" class="form-label">Name of Accompanying People ${i+1} <span
                                            class="quform-required">*</span></label>
                                    <input type="text" class="form-control" id="ppl_names.${i}"
                                        name="ppl_names[]">
                                </div>`;
                }
                $('#peoples').html(html)
            });
            $('#state_name').select2({
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

            $('#city_name').select2({
                ajax: {
                    url: "{{ env('API_URL') }}get-city",
                    type: "post",
                    dataType: 'json',
                    delay: 400,
                    data: function(params) {
                        return {
                            search: params.term, // search term
                            state_id: $('#state_name').val()
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

        function showmemidinput(val) {
            if (val == 'yes') {
                $('.member-id').show()
            } else {
                $('.member-id').hide()
            }
        }

        var select = document.getElementById("selectCountry");

        var countries = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica",
            "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
            "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
            "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi",
            "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China",
            "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica",
            "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica",
            "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea",
            "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana",
            "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras",
            "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy",
            "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait",
            "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania",
            "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta",
            "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco",
            "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
            "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines",
            "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome",
            "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia",
            "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname",
            "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo",
            "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine",
            "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela",
            "Vietnam", "Yemen", "Zambia", "Zimbabwe");

        for (var i = 0; i < countries.length; i++) {

            var option = document.createElement("option");
            var txt = document.createTextNode(countries[i]);
            option.appendChild(txt);
            option.setAttribute("value", countries[i]);
            select.insertBefore(option, select.lastChild);

        }

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('select[name="selectCountry"]').onchange = alertCountry;
        }, false);

        function alertCountry(event) {
            if (!event.target.value) alert('Please select a country');
            else alert('You chose ' + event.target.value + '. Yay, grab a beer!');
        }

        function RDBookingSubmit() {
            var formdata = new FormData($('#rd_booking_form')[0]);
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}book-the-rd-booking",
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