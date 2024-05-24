<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<!-- Favicon Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" />
<link rel="shortcut icon" type="image/x-icon" href="{{ env('MAIN_URL') }}public/assets/images/favicon.png">

<!-- Animation CSS -->

<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/css/animate.css">

<!-- Latest Bootstrap min CSS -->

<link rel="stylesheet" href="{{ env('MAIN_URL') }}public/assets/bootstrap/css/bootstrap.min.css">

<!-- Google Font -->

<link href="https://fonts.googleapis.com/css4478.css?family=Oswald:200,300,400,500,600,700&amp;display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css35c2.css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

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

<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/public/assets/owl.carousel.min.css">

<header class="header_wrap dark_skin main_menu_uppercase main_menu_weight_600 menu_style1">
    
    @if(isset($_GET['token']) && $_GET['device_id'] == '2')
        <script>
            var url123 = window.location.origin + window.location.pathname;
            const token = "{{ $_GET['token'] }}";
    
            const formData = new FormData();
            formData.append('token', token);
            
            fetch('{{ env('API_URL') }}user-login-update', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data && data.status == 200) {
                    setCookie('typeofuser', data.user_type, 1);
                    setCookie('token', data.user_token, 1);
                    setCookie('marital_acc', data.marital_acc, 1);
                    console.log(data);
                    window.location.href = url123;
                }
                if(data && data.status == 400) {
                    console.log(data);
                }
            })
            .catch(error => {
                console.error('API Error:', error);
            });
        </script>
    @endif
    
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

                        <li><a href="mailto:kinchitkaram@yahoo.co.in"><i class="fa fa-envelope"></i><span>kinchitkaram@yahoo.co.in</span></a></li>

                        <li><a href="tel:+04424992728"><i class="fa fa-phone"></i><span>044 - 24992728</span></a></li>

                    </ul>

                </div>

                <div class="col-lg-3 col-md-6 mobileicons">

                    <ul class="list_none social_icons text-center social_white text-md-right mt-2 mt-md-0">

                        <li><a href="https://www.facebook.com/Kinchitkaram/" target="_blank"><i class="ion-social-facebook"></i></a></li>

                        <li><a href="https://twitter.com/velukkudik" target="_blank"><i class="ion-social-twitter"></i></a></li>



                        <li><a href="https://www.youtube.com/c/VelukkudiDiscourses" target="_blank"><i class="ion-social-youtube-outline"></i></a></li>

                        <li><a href="https://www.instagram.com/velukkudi/" target="_blank"><i class="ion-social-instagram-outline"></i></a></li>



                    </ul>

                </div>

                <div class="col-md-6 col-lg-4 mobileicons text-center">


                    @if ($token != null)
                    @if ($typeofuser != null)
                    <span style="background-color:#ff2a00; padding:10px 5.5px; color:#fff;border-radius:10px;font-size: 15px;"><a href="{{ env('MAIN_URL') }}my-profile" style="color:#fff;"><i class="fa fa-user" style="padding-right:10px; color:#fff;"></i>My
                            Profile</a></span>

                    <span class="head-btn" ><a href="javascript:Logout();" style="color:#fff;"> <i class="fa fa-lock" style="padding-right:10px; color:#fff;"></i>Logout</a></span>

                    <span class="dont"><a href="{{ env('MAIN_URL') }}donation" style="color:#fff;"> <i class="fa fa-money" style="padding-right:8px; color:#fff;"></i>Online Donation</a></span>
                    @else
                    <span class="head-btn" ><a href="{{ env('MAIN_URL') }}user-register" style="color:#fff;"><i class="fa fa-user" style="padding-right:10px; color:#fff;"></i>Register</a></span>

                    <span class="head-btn" ><a href="/user-login" style="color:#fff;"> <i class="fa fa-lock" style="padding-right:10px; color:#fff;"></i>Login</a></span>

                    <span  class="dont" ><a href="{{ env('MAIN_URL') }}donation" style="color:#fff;"> <i class="fa fa-money" style="padding-right:8px; color:#fff;"></i>Online Donation</a></span>
                    @endif
                    @else
                    <span class="head-btn"><a href="{{ env('MAIN_URL') }}user-register" style="color:#fff;"><i class="fa fa-user" style="padding-right:10px; color:#fff;"></i>Register</a> </span>

                    <span class="head-btn" ><a href="/user-login" style="color:#fff;"> <i class="fa fa-lock" style="padding-right:10px; color:#fff;"></i>Login</a></span>

                    <span class="dont" ><a href="{{ env('MAIN_URL') }}donation" style="color:#fff;"> <i class="fa fa-money" style="padding-right:8px; color:#fff;"></i>Online Donation</a></span>
                    @endif



                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="{{ env('MAIN_URL') }}">

                <img class="logo_light" src="{{ env('MAIN_URL') }}public/assets/images/logo_white.png" alt="logo" />

                <img class="logo_dark" src="{{ env('MAIN_URL') }}public/assets/images/logo_dark.png" alt="logo" />

                <img class="logo_default" src="{{ env('MAIN_URL') }}public/assets/images/logo_dark.png" alt="logo" />

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                <ul class="navbar-nav">

                    <li>

                        <a class=" nav-link active" href="/">Home</a>



                    </li>


                    <li class="dropdown">

                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Services</a>

                        <div class="dropdown-menu" style="width:300px;">

                            <ul id="show_menu">

                            </ul>

                        </div>

                    </li>


                    @if ($typeofuser == 'volunteer')
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Members</a>
                        <div class="dropdown-menu" style="width:300px;">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}addmember"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Add
                                        Member</a></li>
                            </ul>
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}view-member"><i class="fa fa-angle-right" style="padding-right:10px;"></i>My
                                        Members</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <!--<a class="nav-link" href="{{ env('MAIN_URL') }}rm-online">Mukta Bhogavali</a>-->
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">RM online Upanyasam</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}rm-online-audio">Audio</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}rm-online-video">Video </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">RMSM Services</a>
                        <div class="dropdown-menu" style="width:300px;">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}donation"><i class="fa fa-angle-right" style="padding-right:10px;"></i>RMSM Donation</a>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}delivery-details"><i class="fa fa-angle-right" style="padding-right:10px;"></i>RMSM Delivery</a>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}depository_details"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Deposit
                                        Details</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}challan"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Request Bank
                                        Challan</a></li>
                            </ul>
                        </div>
                    </li>
                    @elseif ($typeofuser == 'member')
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Volunteers</a>
                        <div class="dropdown-menu" style="width:300px;">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}volunteer-profile"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Know your
                                        Volunteer</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}change"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Change
                                        Volunteer</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}volunteer"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Apply to be
                                        a Volunteer</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <!--<a class="nav-link" href="{{ env('MAIN_URL') }}rm-online">Mukta Bhogavali</a>-->
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">RM online Upanyasam</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}rm-online-audio">Audio</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}rm-online-video">Video </a></li>
                            </ul>
                        </div>
                    </li>
                    @elseif ($typeofuser == 'general-user')
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Volunteers</a>
                        <div class="dropdown-menu" style="width:300px;">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Apply to be
                                        a
                                        Volunteer</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Membership</a>
                        <div class="dropdown-menu" style="width:300px;">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}become-member"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Become a
                                        Member</a></li>
                            </ul>
                        </div>
                    </li>
                    @else
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Volunteers</a>
                        <div class="dropdown-menu" style="width:300px;">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="volunteer"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Apply to be
                                        a
                                        Volunteer</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Membership</a>
                        <div class="dropdown-menu" style="width:300px;">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}become-member"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Become a
                                        Member</a></li>
                            </ul>
                        </div>
                    </li>
                    @endif

                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Online Content</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}audio">Audio</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}video">Video </a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}en-pani">Enpani</a></li>
                                <li>
                                    <a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}courses">
                                        Kalakshepam
                                    </a>
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
                                <li><a class="dropdown-item nav-link nav_item" href="/my-account"><i class="fa fa-angle-right" style="padding-right:10px;"></i>My Account</a>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="/my-matrimony"><i class="fa fa-angle-right" style="padding-right:10px;"></i>My Matrimony</a>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="/search-links"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Search</a></li>
                            </ul>
                        </div>
                    </li>
                    @else
                    <li>
                        <!-- <a class="nav-link" href="#" data-toggle="modal" data-target="#matrimony_account">Lakshmi Kalyanam</a> -->
                        <a class="nav-link" href="/lakshmi-home">Lakshmi Kalyanam</a>
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
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}update"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Update
                                        Profile</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}changepassword"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Change
                                        Password</a></li>
                            </ul>
                        </div>
                    </li>
                    @endif
                    @endif
                </ul>



        </nav>

    </div>

    <div class="modal fade" id="matrimony_account" tabindex="-1" role="dialog" aria-labelledby="matrimony_accountLabel" aria-hidden="true" style="top: 5%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="matrimony_accountLabel">Create Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form id="matrimony_create_account" method="post" enctype="multipart/form-data">
                            <div class="col-12 mt-2">
                                <label for="profilecreatedby">Profile Created By</label>
                                <select name="profilecreatedby" class="form-select" id="profilecreatedby">
                                    <option value="">Select</option>
                                    <option value="Self" selected>Self</option>
                                    <option value="Parents">Parents</option>
                                    <option value="Guardian">Guardian</option>
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Relative">Relative</option>
                                    <option value="Member of Marriage Bureau">Member of Marriage Bureau</option>
                                </select>
                            </div>
                            <div class="col-12 mt-2">
                                <label for="marital_status">Marital Status</label>
                                <select class="form-select" name="marital_status" id="marital_status">
                                    <option value="Unmarried">Never Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Seperated">Seperated</option>
                                </select>
                            </div>
                            <div class="col-12 mt-2 want-to-show" style="display: none;">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-12 mt-2 want-to-show" style="display: none;">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="col-12 mt-2 want-to-show" style="display: none;">
                                <label for="">Mobile Number</label>
                                <input type="text" class="form-control" name="phone_number" id="phone_number">
                            </div>
                            <div class="col-12 mt-2 want-to-show" style="display: none;">
                                <label for="">Gender</label>
                                <select class="form-select" name="gender" id="gender">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-12 mt-2 want-to-show" style="display: none;">
                                <label for="">Date Of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" min="2006-01-01" max="<%= Time.now.strftime('%Y-%m-%d') %>" onchange="disableOtherYears(this)">
                                <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                                <input type="hidden" name="device_id" id="device_id" value="1">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="sum" onclick="CreateMatrimonyAccount()">Submit</button>
                </div>
            </div>
        </div>
    </div>

</header>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
<script>
    function disableOtherYears(input) {
    var selectedDate = new Date(input.value);
    var minDate = new Date("2006-01-01");
    var maxDate = new Date();
    if (selectedDate < minDate || selectedDate > maxDate) {
        input.value = "";
    }
}
    // $(function() {
    //     ShowServicesMenu()
    //     GetTheUser()
    //     CheckRoute()

    //     $('#profilecreatedby').on('change', function() {
    //         if ($(this).val() == 'Self') {
    //             $('.want-to-show').hide()
    //         } else {
    //             $('.want-to-show').show()
    //         }
    //     })

    // })
    
    // function CheckRoute(){
    //     var url = window.location.href;
    //     var parts = url.split("/");
    //     var lastPart = parts.pop();
    //     $.ajax({
    //         url: lastPart,
    //         type: 'HEAD',
    //         success: function () {
    //             console.log('Route exists');
    //         },
    //         error: function () {
    //             console.log('Route does not exist');
    //         }
    //     });
    // }
    
    // function GetTheUser() {
    //     var url = window.location.href;
    //     var parts = url.split("/");
    //     var lastPart = parts.pop();
    //     $.ajax({
    //         url: lastPart,
    //         type: 'HEAD',
    //         success: function () {
    //             if (lastPart != '' && lastPart != 'user-login' && lastPart != 'user-register' && lastPart != 'forgot-password' && lastPart != 'wasted') {
    //         $.ajax({
    //             type: 'post',
    //             url: "{{ env('API_URL') }}get-user-profile",
    //             data: {
    //                 token: getCookie('token'),
    //                 device_id: 1
    //             },
    //             success: function(response) {
    //                 if (response['status'] == 200) {
    //                     sessionStorage.setItem('typeofuser', response.user_type);
    //                     sessionStorage.setItem('token', response.user_token);
    //                     sessionStorage.setItem('marital_acc', response.marital_acc);
    //                     setCookie('typeofuser', response.user_type, 1);
    //                     setCookie('token', response.user_token, 1);
    //                     setCookie('marital_acc', response.marital_acc, 1);
    //                 }
    //                 if (response['status'] == 400) {}
    //                 if (response['status'] == 501) {
    //                     $.confirm({
    //                         title: 'error!',
    //                         content: 'Kindly login to proceed',
    //                         type: 'red',
    //                         typeAnimated: true,
    //                         icon: 'fa fa-warning',
    //                         closeIcon: true,
    //                         buttons: {
    //                             tryAgain: {
    //                                 text: 'OK',
    //                                 btnClass: 'btn-green',
    //                                 action: function() {
    //                                     sessionStorage.clear();
    //                                     deleteCookie('typeofuser');
    //                                     deleteCookie('token');
    //                                     deleteCookie('marital_acc');
    //                                     window.location.href = '/user-login';
    //                                 }
    //                             },
    //                             close: {
    //                                 text: 'Close',
    //                                 btnClass: 'btn-red',
    //                                 action: function() {
    //                                     sessionStorage.clear();
    //                                     deleteCookie('typeofuser');
    //                                     deleteCookie('token');
    //                                     deleteCookie('marital_acc');
    //                                     window.location.href = '/user-login';
    //                                 }
    //                             }
    //                         }
    //                     });

    //                     // sessionStorage.clear();
    //                     // deleteCookie('typeofuser');
    //                     // deleteCookie('token');
    //                     // deleteCookie('marital_acc');
    //                     // window.location.href = '/user-login';
    //                 }
    //             },
    //             error: function(data) {
    //                 console.log('Error:', data);
    //             }
    //         })
    //     }
    //         },
    //         error: function () {
    //             console.log('Route does not exist');
    //         }
    //     });
        
    // }

    // function GetTheUser() {
    //     var url = window.location.href;
    //     var parts = url.split("/");
    //     var lastPart = parts.pop();
    //     if (lastPart != '' && lastPart != 'user-login' && lastPart != 'user-register' && lastPart != 'forgot-password' && lastPart != 'wasted') {
    //         $.ajax({
    //             type: 'post',
    //             url: "{{ env('API_URL') }}get-user-profile",
    //             data: {
    //                 token: getCookie('token'),
    //                 device_id: 1
    //             },
    //             success: function(response) {
    //                 if (response['status'] == 200) {
    //                     sessionStorage.setItem('typeofuser', response.user_type);
    //                     sessionStorage.setItem('token', response.user_token);
    //                     sessionStorage.setItem('marital_acc', response.marital_acc);
    //                     setCookie('typeofuser', response.user_type, 1);
    //                     setCookie('token', response.user_token, 1);
    //                     setCookie('marital_acc', response.marital_acc, 1);
    //                 }
    //                 if (response['status'] == 400) {}
    //                 if (response['status'] == 501) {
    //                     $.confirm({
    //                         title: 'error!',
    //                         content: 'Kindly login to proceed',
    //                         type: 'red',
    //                         typeAnimated: true,
    //                         icon: 'fa fa-warning',
    //                         closeIcon: true,
    //                         buttons: {
    //                             tryAgain: {
    //                                 text: 'OK',
    //                                 btnClass: 'btn-green',
    //                                 action: function() {
    //                                     sessionStorage.clear();
    //                                     deleteCookie('typeofuser');
    //                                     deleteCookie('token');
    //                                     deleteCookie('marital_acc');
    //                                     window.location.href = '/user-login';
    //                                 }
    //                             },
    //                             close: {
    //                                 text: 'Close',
    //                                 btnClass: 'btn-red',
    //                                 action: function() {
    //                                     sessionStorage.clear();
    //                                     deleteCookie('typeofuser');
    //                                     deleteCookie('token');
    //                                     deleteCookie('marital_acc');
    //                                     window.location.href = '/user-login';
    //                                 }
    //                             }
    //                         }
    //                     });

    //                     // sessionStorage.clear();
    //                     // deleteCookie('typeofuser');
    //                     // deleteCookie('token');
    //                     // deleteCookie('marital_acc');
    //                     // window.location.href = '/user-login';
    //                 }
    //             },
    //             error: function(data) {
    //                 console.log('Error:', data);
    //             }
    //         })
    //     }
    // }


    // function ShowServicesMenu() {
    //     $.ajax({
    //         type: 'post',
    //         url: "{{ env('API_URL') }}get-services-list",
    //         success: function(response) {
    //             if (response['status'] == 200) {
    //                 console.log(response)
    //                 var html = '';
    //                 for (var i = 0; i < response['data'].length; i++) {
    //                     html += `<li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}service/${response['data'][i].page_slug}"><i
    //                                         class="fa fa-angle-right" style="padding-right:10px;"></i>${response['data'][i].service_title}</a></li>`;
    //                 }
    //                 html += `<li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}gnanakaithaa"><i
    //                                         class="fa fa-angle-right" style="padding-right:10px;"></i>Gnanakaithaa</a></li>`;
    //                 $('#show_menu').html(html)
    //             }
    //             if (response['status'] == 400) {}
    //             if (response['status'] == 501) {
    //                 sessionStorage.clear();
    //                 deleteCookie('typeofuser');
    //                 deleteCookie('token');
    //                 deleteCookie('marital_acc');
    //                 window.location.href = '/user-login';
    //             }
    //         },
    //         error: function(data) {
    //             console.log('Error:', data);
    //         }
    //     })
    // }

    // function Logout() {
    //     $.ajax({
    //         type: 'post',
    //         url: "{{ env('API_URL') }}logout",
    //         data: {
    //             token: getCookie('token'),
    //             device_id: 1
    //         },
    //         success: function(response) {
    //             if (response['status'] == 200) {
    //                 sessionStorage.clear();
    //                 deleteCookie('typeofuser');
    //                 deleteCookie('token');
    //                 deleteCookie('marital_acc');
    //                 location.reload()
    //             }
    //             if (response['status'] == 400) {}
    //             if (response['status'] == 501) {
    //                 sessionStorage.clear();
    //                 deleteCookie('typeofuser');
    //                 deleteCookie('token');
    //                 deleteCookie('marital_acc');
    //                 window.location.href = '/user-login';
    //             }
    //         },
    //         error: function(data) {
    //             console.log('Error:', data);
    //         }
    //     })
    // }


    // function setCookie(name, value, daysToExpire) {
    //     const date = new Date();
    //     date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
    //     const expires = `expires=${date.toUTCString()}`;
    //     const secureFlag = location.protocol === 'https:' ? '; secure' : '';
    //     document.cookie = `${name}=${value}; ${expires}; path=/${secureFlag}`;
    // }

    // // Get the value of a cookie by name
    // function getCookie(name) {
    //     const cookieName = `${name}=`;
    //     const cookies = document.cookie.split(';');
    //     for (let i = 0; i < cookies.length; i++) {
    //         let cookie = cookies[i];
    //         while (cookie.charAt(0) === ' ') {
    //             cookie = cookie.substring(1);
    //         }
    //         if (cookie.indexOf(cookieName) === 0) {
    //             return cookie.substring(cookieName.length, cookie.length);
    //         }
    //     }
    //     return null;
    // }

    // // Delete a cookie by name
    // function deleteCookie(name) {
    //     this.setCookie(name, '', -1); // Setting an expired date deletes the cookie
    // }

    // function CreateMatrimonyAccount() {
    //     var formdata = new FormData($('#matrimony_create_account')[0]);
    //     var phoneNumber = $('#phone_number').val();
    //     $.ajax({
    //         type: 'post',
    //         url: "{{ env('API_URL') }}create-account",
    //         data: formdata,
    //         processData: false, // Prevents jQuery from automatically transforming the data into a query string
    //         contentType: false,
    //         success: function(response) {
    //             if (response['status'] == 200) {
    //                 var smsFormData = new FormData();
    //                 smsFormData.append('mobile', phoneNumber);
    //                 smsFormData.append('message', 'Welcome to Kinchitkaram Trust. Your volunteer code is tes. Below are your login details - kinchit.org/login. Your username and password is var');
    //                 $.ajax({
    //                 type: 'post',
    //                 url: "{{ env('API_URL') }}sent-sms",
    //                 data: smsFormData, // or any other data needed for the second API
    //                 processData: false,
    //                 contentType: false,
    //                 success: function(response) {
    //                     // Handle success of the second API call
    //                 },
    //                 error: function(data) {
    //                     console.log('Error:', data);
    //                 }
    //                 });
    //                 $.confirm({
    //                     title: 'Success!',
    //                     content: response['message'],
    //                     type: 'green',
    //                     typeAnimated: true,
    //                     icon: 'fa fa-success',
    //                     closeIcon: true,
    //                     buttons: {
    //                         tryAgain: {
    //                             text: 'OK',
    //                             btnClass: 'btn-green',
    //                             action: function() {
    //                                 window.location.href = '/';
    //                             }
    //                         },
    //                         close: function() {
    //                             window.location.href = '/';
    //                         }
    //                     }
    //                 });
    //                 setCookie('marital_acc', '1', 1);
    //             }
    //             if (response['status'] == 401) {
    //                 const obj = response['errors'];
    //                 for (const fieldName in obj) {
    //                     if (obj.hasOwnProperty(fieldName)) {
    //                         // $(`[id="${fieldName}_error"]`).text(obj[fieldName][0])
    //                         // notify.js
    //                         $(`[id="${fieldName}"]`).notify(obj[fieldName][0], {
    //                             className: "error",
    //                             showDuration: 300,
    //                             autoHideDelay: 2000, // Set the duration in milliseconds
    //                         })
    //                         const inputField = $(`[id="${fieldName}"]`);
    //                         inputField.focus();
    //                         // $('html, body').animate({
    //                         //     scrollTop: inputField.offset().top -
    //                         //         80
    //                         // }, 500);
    //                         break;
    //                     }
    //                 }
    //             }
    //             if (response['status'] == 400) {
    //                 $.confirm({
    //                     title: 'Encountered an error!',
    //                     content: response['message'],
    //                     type: 'red',
    //                     typeAnimated: true,
    //                     icon: 'fa fa-warning',
    //                     closeIcon: true,
    //                     buttons: {
    //                         tryAgain: {
    //                             text: 'OK',
    //                             btnClass: 'btn-red',
    //                             action: function() {}
    //                         },
    //                         // close: function() {}
    //                     }
    //                 });
    //             }
    //             if (response['status'] == 501) {
    //                 $.confirm({
    //                     title: 'error!',
    //                     content: 'Kindly login to proceed',
    //                     type: 'red',
    //                     typeAnimated: true,
    //                     icon: 'fa fa-warning',
    //                     closeIcon: true,
    //                     buttons: {
    //                         tryAgain: {
    //                             text: 'OK',
    //                             btnClass: 'btn-red',
    //                             action: function() {
    //                                 sessionStorage.clear();
    //                                 deleteCookie('typeofuser');
    //                                 deleteCookie('token');
    //                                 deleteCookie('marital_acc');
    //                                 window.location.href = '/user-login';
    //                             }
    //                         },
    //                         close: function() {
    //                             sessionStorage.clear();
    //                             deleteCookie('typeofuser');
    //                             deleteCookie('token');
    //                             deleteCookie('marital_acc');
    //                             window.location.href = '/user-login';
    //                         }
    //                     }
    //                 });

    //             }
    //         },
    //         error: function(data) {
    //             console.log('Error:', data);
    //         }
    //     })
    // }
    
     $(function () {
        RestrictUserURL()
        ShowServicesMenu()
        GetTheUser()
        
        $('#profilecreatedby').on('change', function(){
            if($(this).val() == 'Self'){
                $('.want-to-show').hide()
            }else{
                $('.want-to-show').show()
            }
        })
        
    })
    
    function RestrictUserURL(){
        var url = window.location.href;
        var parts = url.split("/");
        var lastPart = parts.pop();
        var user_type = getCookie('typeofuser');
        // alert(user_type);
        var member = ['addmember','view-member','delivery-details','depository_details','challan','become-member'];
        var volunteer = ['volunteer-profile','change','volunteer','renewal','billing-details'];
        var general = ['addmember','view-member','delivery-details','depository_details','challan','volunteer-profile','change','renewal'];
        if(user_type == 'volunteer'){
            if(jQuery.inArray(lastPart, volunteer) !== -1){
                window.location.href = '/';
            }
        }
        if(user_type == 'member'){
            if(jQuery.inArray(lastPart, member) !== -1){
                window.location.href = '/';
            }
        }
        if(user_type == 'general-user'){
            if(jQuery.inArray(lastPart, general) !== -1){
                window.location.href = '/';
            }
        }
    }
    
    function GetTheUser() {
        var url = window.location.href;
        var parts = url.split("/");
        var lastPart = parts.pop();
        if (lastPart != '' && lastPart != 'user-login' && lastPart != 'user-register' && lastPart != 'forgot-password' && lastpart != 'otp-verify') {
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}get-user-profile",
                data: {
                    token: getCookie('token'),
                    device_id: 1
                },
                success: function(response) {
                    if (response['status'] == 200) {
                        sessionStorage.setItem('typeofuser', response.user_type);
                        sessionStorage.setItem('token', response.user_token);
                        sessionStorage.setItem('marital_acc', response.marital_acc);
                        setCookie('typeofuser', response.user_type, 1);
                        setCookie('token', response.user_token, 1);
                        setCookie('marital_acc', response.marital_acc, 1);
                    }
                    if (response['status'] == 400) {}
                    if (response['status'] == 501) {
                        $.confirm({
                            title: 'error!',
                            content: 'Kindly login to proceed',
                            type: 'red',
                            typeAnimated: true,
                            icon: 'fa fa-warning',
                            closeIcon: true,
                            buttons: {
                                tryAgain: {
                                    text: 'OK',
                                    btnClass: 'btn-green',
                                    action: function() {
                                        sessionStorage.clear();
                                        deleteCookie('typeofuser');
                                        deleteCookie('token');
                                        deleteCookie('marital_acc');
                                        window.location.href = '/user-login';
                                    }
                                },
                                close: {
                                        text: 'Close',
                                        btnClass: 'btn-red',
                                        action: function() {
                                            sessionStorage.clear();
                                            deleteCookie('typeofuser');
                                            deleteCookie('token');
                                            deleteCookie('marital_acc');
                                            window.location.href = '/user-login';
                                        }
                                    }
                            }
                        });

                        // sessionStorage.clear();
                        // deleteCookie('typeofuser');
                        // deleteCookie('token');
                        // deleteCookie('marital_acc');
                        // window.location.href = '/user-login';
                    }
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            })
        }
    }


    function ShowServicesMenu() {
        $.ajax({
            type: 'post',
            url: "{{ env('API_URL') }}get-services-list",
            success: function (response) {
                if (response['status'] == 200) {
                    console.log(response)
                    var html = '';
                    for(var i = 0; i < response['data'].length; i++){
                        html += `<li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}service/${response['data'][i].page_slug}"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>${response['data'][i].service_title}</a></li>`;
                    }
                    html += `<li><a class="dropdown-item nav-link nav_item" href="{{ env('MAIN_URL') }}gnanakaithaa"><i
                                            class="fa fa-angle-right" style="padding-right:10px;"></i>Gnanakaithaa</a></li>`;
                    $('#show_menu').html(html)
                }
                if (response['status'] == 400) {
                }
                if (response['status'] == 501) {
                    sessionStorage.clear();
                    deleteCookie('typeofuser');
                    deleteCookie('token');
                    deleteCookie('marital_acc');
                    window.location.href = '/user-login';
                }
            },
            error: function (data) {
                console.log('Error:', data);
            }
        })
    }

    function Logout() {
        $.ajax({
            type: 'post',
            url: "{{ env('API_URL') }}logout",
            data: {
                token: getCookie('token'),
                device_id: 1
            },
            success: function(response) {
                if (response['status'] == 200) {
                    sessionStorage.clear();
                    deleteCookie('typeofuser');
                    deleteCookie('token');
                    deleteCookie('marital_acc');
                    window.location.href = '/user-login';
                }
                if (response['status'] == 400) {}
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
    
    function CreateMatrimonyAccount(){
        var formdata = new FormData($('#matrimony_create_account')[0]);
          var phoneNumber = $('#phone_number').val();
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}create-account",
                data: formdata,
                processData: false,  // Prevents jQuery from automatically transforming the data into a query string
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
                        setCookie('marital_acc','1',1);
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
                    if (response['status'] == 501) {
                        $.confirm({
                            title: 'error!',
                            content: 'Kindly login to proceed',
                            type: 'red',
                            typeAnimated: true,
                            icon: 'fa fa-warning',
                            closeIcon: true,
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
                                close: function() {
                                    sessionStorage.clear();
                                    deleteCookie('typeofuser');
                                    deleteCookie('token');
                                    deleteCookie('marital_acc');
                                    window.location.href = '/user-login';
                                }
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