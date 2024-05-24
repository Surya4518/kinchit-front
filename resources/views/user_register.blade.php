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

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
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
position: relative;
float: right !important;
right: 21px;
bottom: 33px;
color: #000;
font-size: 21px !important;
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 4px;
    height: 45px;
    padding: 10px 15px;
    font-size: 14px;
}
.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #ced4da !important;
    border-radius: 4px;
    height: 48px !important;
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

            <h2 class="page-title">User Registration</h2>

            <ul class="breadcrumb-nav">

                <li><a href="#">Home</a></li>

                <li><i class="fas fa-angle-right"></i></li>

                <li> User Registration</li>

            </ul>

        </div>

    </section>

    <section class="con-form mb-5">

        <div class="container">

            <div class="row">

                <div class="col-md-12 frms mb-5">

                    <form method="post" enctype="multipart/form-data" id="register_form">

                        <div class="row g-3">
                            <div class="col-md-12 mb-3">
                                <h3>Personal Information</h3>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="hidden" name="device_id" id="device_id" value="1">
                                <label for="your-name" class="form-label">First Name<span
                                        class="quform-required">*</span></label>

                                <input type="text" class="form-control" id="your_firstname" name="your_firstname"
                                    required>
                                <p class="validate_errors" id="fname_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>
                            <div class="col-md-6 mb-3">

                                <label for="your-name" class="form-label">last Name<span
                                        class="quform-required">*</span></label>

                                <input type="text" class="form-control" id="your_lastname" name="your_lastname"
                                    required>
                                <p class="validate_errors" id="lname_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>
                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label">Date of Birth<span
                                        class="quform-required">*</span></label>

                                <input type="date" class="form-control" id="your_dob" name="your_dob">
                                <p class="validate_errors" id="date_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>
                            <div class="col-md-6 mb-3">

                                <label for="exampleFormControlSelect1 " class="form-label">Gender<span
                                        class="quform-required ">*</span></label>

                                <select class="form-select" id="your_gender" name="your_gender" required>

                                    <option value="">Please select</option>

                                    <option value="Male">Male</option>

                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>

                                </select>
                                <p class="validate_errors" id="gender_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label">Samasrayana Acharyan (if applicable)<span
                                        class="quform-required">*</span></label>

                                <input type="text" class="form-control" id="your_acharyan" name="your_acharyan">
                                <p class="validate_errors" id="acharyan_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>
                            <div class="col-md-12 mb-3">
                                <h3> Contact Information</h3>
                            </div>
                            <div class="col-md-6 mb-3">

                                <label for="your-email" class="form-label">Mobile/SMS<span
                                        class="quform-required">*</span></label>

                                <input type="text" class="form-control" id="your_mobile" name="your_mobile" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                    required   maxlength="10" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10);">
                                <p class="validate_errors" id="your_mobile_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label">Mobile/Whatsapp<span
                                        class="quform-required">*</span></label>

                               <input type="text" class="form-control" id="your_whatsapp" name="your_whatsapp" 
       maxlength="10" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10);">
                                <p class="validate_errors" id="your_whatsapp_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="your-surname" class="form-label">Email Address <span
                                        class="quform-required">*</span></label>

                                <input type="email" class="form-control" id="your_email" name="your_email"
                                    required>
                                <p class="validate_errors" id="your_email_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label">Address Line 1<span
                                        class="quform-required">*</span></label>

                                <input type="text" class="form-control" id="address_line_1"
                                    name="address_line_1">
                                <p class="validate_errors" id="address1_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label">Address Line 2<span
                                        class="quform-required">*</span></label>

                                <input type="text" class="form-control" id="address_line_2"
                                    name="address_line_2">
                                <p class="validate_errors" id="address2_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="your-name" class="form-label fm-label">Country<span
                                        class="quform-required">*</span></label>

                                <input type="text" class="form-control" id="country" value="India"
                                    name="country" required="" readonly="" placeholder="India">
                                <p class="validate_errors" id="country_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>
                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label fm-label">State<span
                                        class="quform-required">*</span></label>

                                <select class="form-control" id="state" name="state" required>
                                </select>
                                <p class="validate_errors" id="state_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>
                            <div class="col-md-6 mb-3">

                                <label for="your-name" class="form-label fm-label">City<span
                                        class="quform-required">*</span></label>

                                <!-- <input type="text" class="form-control" id="your-name" name="your-name" required> -->
                                <select class="form-control" id="city_town" name="city_town">

                                </select>
                                <p class="validate_errors" id="city_town_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>
                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label">Pincode<span
                                        class="quform-required">*</span></label>

                                <!--<input type="text" class="form-control" id="pincode" name="pincode">-->
                                <input type="text" class="form-control" id="pincode" name="pincode" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6)">
                                <p class="validate_errors" id="pincode_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>
                            <div class="col-md-12 mb-3">
                                <h3> Other
                                    Information</h3>
                            </div>







                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label">Educational Qualification<span
                                        class="quform-required">*</span></label>

                                <input type="text" class="form-control" id="educational_qualification"
                                    name="educational_qualification">
                                <p class="validate_errors" id="education_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label">Work Experience<span
                                        class="quform-required">*</span></label>

                                <input type="text" class="form-control" id="work_experience"
                                    name="work_experience">
                                <p class="validate_errors" id="work_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label">Special Interest / Hobby<span
                                        class="quform-required">*</span></label>

                                <input type="text" class="form-control" id="special_interest"
                                    name="special_interest">
                                <p class="validate_errors" id="hobby_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label">Any Special Skill Set ?Please Mention
                                    Below<span class="quform-required">*</span></label>

                                <input type="text" class="form-control" id="skill_set" name="skill_set">
                                <p class="validate_errors" id="skill_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="your-subject" class="form-label">Upload Profile Photo</label><br>

                                <input type="file" class="cv-up">
                                <p class="validate_errors" id="file_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>


                            <div class="col-md-12 my-3">
                                <h3>Create credential</h3>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Username</label>
                                <input type="text" class="form-control" id="user_name" name="user_name">
                                <p class="validate_errors" id="username_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>
                            </div>
                            <div class="col-md-6 mb-3">



                                <label class="form-label" for="confirmPassword">Password</label>

                                <input type="password" id="user_password" class="form-control" name="user_password">
                                <i toggle="#confirmPassword"
                                    class="fa fa-fw field-icon toggle-password pl-lg-3 fa-eye"></i>

                                <p class="validate_errors" id="password_error"
                                    style="color: #f90404;font-size: 13px;font-family: 'circular';"></p>

                            </div>
                            <!-- <div class="col-md-12 text-center mb-5 mt-2">

                <input type="submit" class="sum"  onclick="RegisterUser()">

              </div> -->

                            <div class="text-center my-3">
                                <button class="sum" type="button user-register"
                                    onclick="RegisterUser()">Submit</button>
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

    <script src="{{ env('MAIN_URL') }}public/assets/js/notify.js"></script>
    <script src="{{ env('MAIN_URL') }}public/assets/js/notify.min.js"></script>


    <script src="{{ env('MAIN_URL') }}public/assets/js/scripts.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script></script>

</body>

<script>
     $(function() {
      $('#register_form').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      // SocioFormEdtit()
    })
    $(document).ready(function() {
        $('.form-control').on('keyup change', function() {
            $('.validate_errors').text('')
        })
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $('#user_password');
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
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
    });

    function RegisterUser() {
        var formdata = new FormData($('#register_form')[0]);
        $.ajax({
            type: 'post',
            url: "{{ env('API_URL') }}usercreate",
            data: formdata,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response['status'] == 200) {
                    sessionStorage.setItem('responseData', JSON.stringify(response.data));
                    let storedResponse = sessionStorage.getItem('responseData');
                    let responseData = JSON.parse(storedResponse);
                    console.log(responseData);
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
                                    window.location.href = '/otp-verify';
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
</script>

</html>
