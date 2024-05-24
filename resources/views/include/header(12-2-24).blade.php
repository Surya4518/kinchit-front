<link rel="shortcut icon" type="image/x-icon" href="{{ env('MAIN_URL') }}public/assets/images/favicon.png">

<!-- Animation CSS -->

<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/animate.css">

<!-- Latest Bootstrap min CSS -->

<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/bootstrap/css/bootstrap.min.css">

<!-- Google Font -->

<link href="https://fonts.googleapis.com/css4478.css?family=Oswald:200,300,400,500,600,700&amp;display=swap"
    rel="stylesheet">

<link href="https://fonts.googleapis.com/css35c2.css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>


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

<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/{{ env('MAIN_URL') }}public/assets/owl.carousel.min.css">

<header class="header_wrap dark_skin main_menu_uppercase main_menu_weight_600 menu_style1">

    @php
        if (isset($_COOKIE['token'])) {
            $token = $_COOKIE['token'];
        } else {
            $token = null;
        }

        if (isset($_COOKIE['typeofuser'])) {
            $typeofuser = $_COOKIE['typeofuser'];
        } else {
            $typeofuser = null;
        }

        if (isset($_COOKIE['marital_acc'])) {
            $marital_acc = $_COOKIE['marital_acc'];
        } else {
            $marital_acc = null;
        }
    @endphp
    <div class="top-header bg_dark light_skin">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 col-lg-5">

                    <ul class="contact_detail list_none text-center text-md-left">

                        <li><a href="mailto:kinchitkaram@yahoo.co.in"><i
                                    class="fa fa-envelope"></i><span>kinchitkaram@yahoo.co.in</span></a></li>

                        <li><a href="tel:+04424992728"><i class="fa fa-phone"></i><span>044 - 24992728</span></a></li>

                    </ul>

                </div>

                <div class="col-lg-3 col-md-6 mobileicons">

                    <ul class="list_none social_icons text-center social_white text-md-right mt-2 mt-md-0">

                        <li><a href="https://www.facebook.com/Kinchitkaram/" target="_blank"><i
                                    class="ion-social-facebook"></i></a></li>

                        <li><a href="https://twitter.com/velukkudik" target="_blank"><i
                                    class="ion-social-twitter"></i></a></li>



                        <li><a href="https://www.youtube.com/c/VelukkudiDiscourses" target="_blank"><i
                                    class="ion-social-youtube-outline"></i></a></li>

                        <li><a href="https://www.instagram.com/velukkudi/" target="_blank"><i
                                    class="ion-social-instagram-outline"></i></a></li>



                    </ul>

                </div>

                <div class="col-md-6 col-lg-4 mobileicons text-center">


                    @if ($token != null)
                        @if ($typeofuser != null)
                            <span style="background-color:#ff2a00; padding:12px 5.5px; color:#fff;"><a
                                    href="/my-profile" style="color:#fff;"><i class="fa fa-user"
                                        style="padding-right:10px; color:#fff;"></i>My Profile</a>/ <a
                                    href="javascript:Logout();" style="color:#fff;"> Logout</a></span>
                        @else
                            <span style="background-color:#ff2a00; padding:12px 5.5px; color:#fff;"><a
                                    href="/user-register" style="color:#fff;"><i class="fa fa-user"
                                        style="padding-right:10px; color:#fff;"></i>Register</a> / <a href="/user-login"
                                    style="color:#fff;"> Login</a></span>
                        @endif
                    @else
                        <span style="background-color:#ff2a00; padding:12px 5.5px; color:#fff;"><a href="/user-register"
                                style="color:#fff;"><i class="fa fa-user"
                                    style="padding-right:10px; color:#fff;"></i>Register</a> / <a href="/user-login"
                                style="color:#fff;"> Login</a></span>
                    @endif



                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="index">

                <img class="logo_light" src="{{ env('MAIN_URL') }}public/assets/images/logo_white.png" alt="logo" />

                <img class="logo_dark" src="{{ env('MAIN_URL') }}public/assets/images/logo_dark.png" alt="logo" />

                <img class="logo_default" src="{{ env('MAIN_URL') }}public/assets/images/logo_dark.png" alt="logo" />

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                <ul class="navbar-nav">

                    <li>

                        <a class=" nav-link active" href="index.php">Home</a>



                    </li>


                    <li class="dropdown">

                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Services</a>

                        <div class="dropdown-menu" style="width:300px;">

                            <ul>

                                <li><a class="dropdown-item nav-link nav_item" href="maintenance"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>Maintenance of
                                        Historical Sites</a></li>

                                <li><a class="dropdown-item nav-link nav_item" href="sanskrit"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>Sanskrit &
                                        Dravida Vedas </a></li>

                                <li><a class="dropdown-item nav-link nav_item" href="#"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>Abhyasa
                                        Kendra</a></li>

                                <li><a class="dropdown-item nav-link nav_item" href="#"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>Goshala </a>
                                </li>

                                <li><a class="dropdown-item nav-link nav_item" href="#"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>Yatra</a></li>

                                <li><a class="dropdown-item nav-link nav_item" href="#"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>Gnanakaithaa</a>
                                </li>

                                <li><a class="dropdown-item nav-link nav_item" href="publications"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>Publications</a>
                                </li>



                            </ul>

                        </div>

                    </li>


                    @if ($typeofuser == 'volunteer')
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Members</a>
                            <div class="dropdown-menu" style="width:300px;">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i
                                                class="fa fa-angle-right" style="padding-right:10px;"></i>Add
                                            Member</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i
                                                class="fa fa-angle-right" style="padding-right:10px;"></i>Edit
                                            Member</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link" href="/">Mukta Bhogavali</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">RMSM Services</a>
                            <div class="dropdown-menu" style="width:300px;">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i class="fa fa-angle-right" style="padding-right:10px;"></i>RMSM Donation</a></li>
                                      <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i class="fa fa-angle-right" style="padding-right:10px;"></i>RMSM Delivery</a></li>
                                     <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Deposit Details</a></li>
                                     <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Request Bank Challan</a></li>
                                </ul>
                            </div>
                        </li>
                    @elseif ($typeofuser == 'member')
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Volunteers</a>
                            <div class="dropdown-menu" style="width:300px;">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i
                                                class="fa fa-angle-right" style="padding-right:10px;"></i>Know your
                                            Volunteer</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i
                                                class="fa fa-angle-right" style="padding-right:10px;"></i>Change
                                            Volunteer</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i
                                                class="fa fa-angle-right" style="padding-right:10px;"></i>Apply to be
                                            a Volunteer</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link" href="/">Mukta Bhogavali</a>
                        </li>
                    @elseif ($typeofuser == 'general-user')
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Volunteers</a>
                            <div class="dropdown-menu" style="width:300px;">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i
                                                class="fa fa-angle-right" style="padding-right:10px;"></i>Apply to be
                                            a
                                            Volunteer</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Membership</a>
                            <div class="dropdown-menu" style="width:300px;">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="become"><i
                                                class="fa fa-angle-right" style="padding-right:10px;"></i>Become a
                                            Member</a></li>
                                </ul>
                            </div>
                        </li>
                    @else
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Volunteers</a>
                            <div class="dropdown-menu" style="width:300px;">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i
                                                class="fa fa-angle-right" style="padding-right:10px;"></i>Apply to be
                                            a
                                            Volunteer</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Membership</a>
                            <div class="dropdown-menu" style="width:300px;">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="become"><i
                                                class="fa fa-angle-right" style="padding-right:10px;"></i>Become a
                                            Member</a></li>
                                </ul>
                            </div>
                        </li>
                    @endif

                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Courses</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="audio"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>Audio</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="video"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>Video </a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="en-pani"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>Kinchit En PaNi
                                        - App Satsang</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i> General courses
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="audio"><i
                                                        class="fa fa-angle-right"
                                                        style="padding-right:10px;"></i>Online Courses</a></li>

                                            <li><a class="dropdown-item nav-link nav_item" href="video"><i
                                                        class="fa fa-angle-right"
                                                        style="padding-right:10px;"></i>Kalakshepam </a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @if ($token != null)
                    @if ($typeofuser != null)
                    @if ($marital_acc > 0)
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Lakshmi Kalyanam</a>
                        <div class="dropdown-menu" style="width:300px;">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i class="fa fa-angle-right" style="padding-right:10px;"></i>My Account</a></li>
                                  <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i class="fa fa-angle-right" style="padding-right:10px;"></i>My Matrimony</a></li>
                                   <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Search</a></li>
                            </ul>
                        </div>
                    </li>
                    @else
                        <li>
                            <a class="nav-link" href="/">Lakshmi Kalyanam</a>
                        </li>
                    @endif
                    @endif
                @endif

                    <li>
                        <a class="nav-link" href="dharmasandheha">Dharma Sandeha</a>
                    </li>

                    @if ($token != null)
                        @if ($typeofuser != null)
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">My
                                    Profile</a>
                                <div class="dropdown-menu" style="width:300px;">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i
                                                    class="fa fa-angle-right" style="padding-right:10px;"></i>Update
                                                Profile</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i
                                                    class="fa fa-angle-right" style="padding-right:10px;"></i>Change
                                                Profile</a></li>
                                    </ul>
                                </div>
                            </li>
                        @endif
                    @endif
                </ul>



        </nav>

    </div>

</header>
<script>
    function Logout() {
        sessionStorage.clear();
        deleteCookie('typeofuser');
        deleteCookie('token');
        deleteCookie('marital_acc');
        location.reload()
    }

    function setCookie(name, value, daysToExpire) {
        const date = new Date();
        date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
        const expires = `expires=${date.toUTCString()}`;
        const secureFlag = location.protocol === 'https:' ? '; secure' : '';
        document.cookie = `${name}=${value}; ${expires}; path=/${secureFlag}`;
    }

    // Get the value of a cookie by name
    function getCookie(name) {
        const cookieName = `${name}=`;
        const cookies = document.cookie.split(';');
        for (let i = 0; i < cookies.length; i++) {
            let cookie = cookies[i];
            while (cookie.charAt(0) === ' ') {
                cookie = cookie.substring(1);
            }
            if (cookie.indexOf(cookieName) === 0) {
                return cookie.substring(cookieName.length, cookie.length);
            }
        }
        return null;
    }

    // Delete a cookie by name
    function deleteCookie(name) {
        this.setCookie(name, '', -1); // Setting an expired date deletes the cookie
    }
</script>
