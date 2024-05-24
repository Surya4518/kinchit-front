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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Favicon Icon -->



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

        .type-category a {
            color: #bb1b1b !important;
        }
    </style>

</head>



<body>





    <!-- header -->

    @include('include.header')

    <section class="bred-crum" style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

        <div class="container">

            <h2 class="page-title">Delivery Details</h2>

            <ul class="breadcrumb-nav">

                <li><a href="index">Home</a></li>

                <li><i class="fas fa-angle-right"></i></li>

                <li>Delivery Details</li>

            </ul>

        </div>

    </section>

    <section class="about-one about-one--home section-space1">
        <div class="about-one__bg">
            <div class="about-one__bg__border"></div>
            <!-- /.about-one__bg__border -->
            <div class="about-one__bg__inner"></div>
            <!-- /.about-one__left__bg__inner -->
        </div>
        <!-- /.about-one__left__bg -->
        <div class="container mb-5">
            <div class="row mb-3">
                <div class="col-md-12  mb-3">
                    <div class="mem-data">
                        <table id="members-table" class="table dataTable dtr-inline border" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Membership ID</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Last Donation</th>
                                    <th>Material Mode</th>
                                    <th>Last Material </th>
                                    <th>Edit </th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container -->
        <!--<img src="assets/images/shapes/about-shape-1-2.png" alt="cleenhearts" class="about-one__hand">-->
    </section>

    <div class="modal fade" id="details_modal" tabindex="-1" role="dialog" aria-labelledby="details_modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                <div class="modal-header">
                    <h5 class="modal-title" id="details_modalLabel">Form Editing</h5>
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
                </form>
                <div class="modal-body">
                    <div class="col-md-12">

                        <form action="" id="Rmsm-Delivery" method="post">
                        <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                            <input type="hidden" name="device_id" id="device_id" value="1">
                            <div class="row g-3">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><strong>Member ID</strong></td>
                                            <td id="mem_id"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Name</strong></td>
                                            <td id="mem_name"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone Number</strong></td>
                                            <td id="mem_phone"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Last Donation Paid</strong></td>
                                            <td id="last_donation"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Last Material Received</strong></td>
                                            <td id="last_mat_received"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h2>Details Of Donations Collected</h2>

                                <div class="col-md-12 mb-3">
                                    <label for="your-name" class="form-label">KKT<span class="quform-required">*</span></label>
                                     <select class="form-select" name="kkt" id="indi-form" style='width:400px;'>
                                        <option value="">Please select </option>
                                        <!--<option value="2024-25">2024-25</option>-->
                                        <!--<option value="2023-24">2023-24</option>-->
                                        <!--<option value="2022-23">2022-23</option>-->
                                        <!--<option value="None">None</option>-->
                                    </select>
                                        
                                </div>

                                <div class="col-md-12 mb-3" id="st1">
                                    <label for="your-name" class="form-label">Rs.<span class="quform-required">*</span></label>
                                    <select class="form-select" name="kkt_rs" id="kkt_rs" style='width:400px;'>
                                        <option value="test">Please select </option>
                                        <option value="1000" selected>1000</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="your-name" class="form-label">KDS<span class="quform-required">*</span></label>
                                    <select class="form-select" name="kds" id="st2" style='width:400px;'>
                                        <option value="test">Please select </option>
                                        <!-- <option value="1">2024-25</option>
                                        <option value="2">2023-24</option>
                                        <option value="3">2022-23</option>
                                        <option value="4">None</option> -->
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3" id="st3">
                                    <label for="your-name" class="form-label">Rs.<span class="quform-required">*</span></label>
                                    <select class="form-select" name="kds_rs" id='kds_rs' style='width:400px;'>
                                        <option value="test">Please select </option>
                                        <option value="300" selected>300</option>
                                    </select>
                                </div>

                                <h2>Mode Of Payment</h2>
                                <div class="col-md-12 mb-3">
                                    <label for="your-name" class="form-label">Payment Type<span class="quform-required">*</span></label>
                                    <select class="form-select" name="payment_type" id="st4" style='width:400px;'>
                                        <option value="test">Please select </option>
                                        <option value="1">cash</option>
                                        <option value="2">cheque</option>
                                        <option value="3">UPI</option>
                                        <option value="4">Online</option>
                                    </select>
                                </div>

                                <div class="chec-sel" id="cheq" style="display:none;">
                                    <div class="col-md-12 mb-3">
                                        <label for="your-name" class="form-label chek">Bank Name<span class="quform-required">*</span></label>
                                        <input type="text" class="form-control" id="che-name" style='width:400px;'>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="your-name" class="form-label chek">Cheque Number<span class="quform-required">*</span></label>
                                        <input type="text" class="form-control" id="che-name">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="your-name" class="form-label chek">Cheque Date<span class="quform-required">*</span></label>
                                        <input type="date" class="form-control" id="che-name" style='width:400px;'>
                                    </div>
                                </div>

                                <div class="chec-sel" id="cheq1" style="display:none;">
                                    <div class="col-md-12 mb-3">
                                        <label for="your-name" class="form-label ">Transaction Date<span class="quform-required">*</span></label>
                                        <input type="date" class="form-control" id="tr-date" style='width:400px;'>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="your-name" class="form-label">Transaction Id<span class="quform-required">*</span></label>
                                        <input type="text" class="form-control" id="tr-id" style='width:400px;'>
                                    </div>
                                </div>


                                <div class="col-md-12 mb-3">
                                    <label for="your-name" class="form-label">Direct Payment Type<span class="quform-required">*</span></label>
                                    <select class="form-select" name="direct_payment_type" id="ist5" style='width:400px;'>
                                        <option value="test">Please select </option>
                                        <option value="direct">Direct</option>
                                    </select>

                                </div>
                                <h2>Study Material </h2>
                                <div class="col-md-12 mb-3">

                                    <label for="your-name" class="form-label">Details Of Study Material Given<span class="quform-required">*</span></label>
                                    <select class="form-select" name="material_given" id="st6" style='width:400px;'>
                                        <option value="test">Please select </option>
                                        <!-- <option value="1">2024-25</option>
                                        <option value="2">2023-24</option>
                                        <option value="3">2022-23</option> -->
                                    </select>

                                </div>
                                <!--<div class="col-md-12 mb-3">-->

                                <!--    <label for="your-name" class="form-label">H1  &   H2<span class="quform-required">*</span></label>-->
                                <!--    <select class="form-select" name="is_which_half" id="flexCheckDefault" required style='width:400px;'>-->
                                <!--        <option value="">Please select </option>-->
                                <!--        <option value="h1">h1</option>-->
                                <!--        <option value="h2">h2</option>-->
                                        
                                <!--    </select>-->

                                <!--</div>-->
                                <div class="col-md-12 d-flex">
                                    <div class="form-check" style="margin: 0 11px 0px 0px;">
                                        <input class="form-check-input" name="is_which_half[]" type="checkbox" value="h1" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            H1
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="is_which_half[]" type="checkbox" value="h2" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            H2
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <input type="hidden" id="member_pri_id" name="member_pri_id">
                                    <button type="submit" onclick="RmsmDelivery()" class="sum" id="submit-btn">Submit </button>

                                </div>

                            </div>

                        </form>

                    </div>
                </div>
                <div class="modal-footer">
                    <!--    <a href="donar-details.php"><button type="button" class="btn btn-primary" style="background: red;-->
                    <!--border: none;">Save changes</button></a>-->
                </div>
            </div>
        </div>
    </div>


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


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script>
        $(function() {
            new DataTable('#members-table');
            ShowMemberList()
            $('.btn-close').on('click', function() {
                $('#details_modal').modal('hide')
            })
        })

        function ShowMemberList() {
            var existingTable = $('#members-table').DataTable();
            if (existingTable) {
                existingTable.destroy();
            }
            new DataTable('#members-table', {
                processing: true,
                searching: true,
                ajax: {
                    url: "{{ env('API_URL') }}rmsm-delivery-details",
                    method: 'POST',
                    data: {
                        token: getCookie('token'),
                        device_id: 1
                    },
                },
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        data: 'user_login',
                        name: 'user_login'
                    },
                    {
                        data: 'userdetails',
                        name: 'userdetails',
                        render: function(data) {
                            return data.length > 0 ? data[0].first_name : '';
                        }
                    },
                    {
                        data: 'userdetails',
                        name: 'userdetails',
                        render: function(data) {
                            return data.length > 0 ? data[0].phone_number : '';
                        }
                    },
                    {
                        data: 'rmsmdetails',
                        name: 'rmsmdetails',
                        render: function(data) {
                            return data.length > 0 ? moment(data[0].created_at).format(
                                'YYYY-MM-DD HH:mm:ss') : '';
                        }
                    },
                    {
                        data: 'rmsmdetails',
                        name: 'rmsmdetails',
                        render: function(data) {
                            return data.length > 0 ? data[0].direct_payment_type : '';
                        }
                    },
                    {
                        data: 'rmsmdetails',
                        name: 'rmsmdetails',
                        render: function(data) {
                            return data.length > 0 ? '(' + data[0].material_given + ') - ' + data[0]
                                .is_which_half : '';
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `<a href="javascript:void(0);" class="def-anc" data-toggle="modal" data-target="#details_modal" onclick="OpenDetailForm(${row.ID})"><i class="fa fa-edit"></i> Edit</a>`;
                        }
                    }
                ],
                //  responsive: {
                //       details: {
                //           type: 'column',
                //           target: 'tr'
                //       }
                //   }
            });
        }

        function OpenDetailForm(id) {
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}rmsm-delivery-details",
                data: {
                    token: getCookie('token'),
                    device_id: 1
                },
                success: function(response) {
                    if (response['status'] == 200) {
                        var key = 'ID';
                        var value = id;

                        var result = response['data'].find(function(obj) {
                            return obj[key] === value;
                        });
                        console.log(result);
                        $('#member_pri_id').val(result.ID)
                        $('#mem_id').text(result.user_login != '' ? result.user_login : '-');
                        $('#mem_name').text(result['userdetails'].length > 0 ? result['userdetails'][0].first_name : '-');
                        $('#mem_phone').text(result['userdetails'].length > 0 ? result['userdetails'][0].phone_number : '-');
                        // $('#last_donation').text(result['rmsmdetails'].length > 0 ? result['rmsmdetails'][0].last_donation_paid : '-');
                        // $('#last_mat_received').text(result['rmsmdetails'].length > 0 ? result['rmsmdetails'][0].material_received : '-');
                        $('#last_donation').text(result['rmsmdetails'].length > 0 ? moment(result['rmsmdetails'][0].created_at).format('YYYY-MM-DD HH:mm:ss') : '-');
                        $('#last_mat_received').html(result['rmsmdetails'].length > 0 ? '(' + result['rmsmdetails'][0].material_given + ') - ' + result['rmsmdetails'][0].is_which_half : '-');
                    }
                    if (response['status'] == 400) {}
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
            $('#details_modal').modal('show')
        }
    </script>

    <script>
        $("#st4").change(function() {

            var selectedValue = $(this).val();
            console.log(selectedValue);
            if (selectedValue == 2 || selectedValue == null) {
                $('#cheq').show();
                console.log(selectedValue)

            } else {

                $('#cheq').hide();
                console.log('t');

            }

        });
    </script>

    <script>
        $("#st4").change(function() {

            var selectedValue = $(this).val();
            console.log(selectedValue);
            if (selectedValue == 3 || selectedValue == 4 || selectedValue == null) {
                $('#cheq1').show();
                console.log(selectedValue)

            } else {

                $('#cheq1').hide();
                console.log('t');

            }

        });



        function updateSelectedYear() {
            var select = $("#st2");
            var currentYear = new Date().getFullYear();
            var nextYear = currentYear + 1;
            var defaultOption = $("<option></option>").attr("value", currentYear + "-" + nextYear).text(currentYear + "-" + nextYear).prop("selected", true);
            select.append(defaultOption);
            var previousYearOption = $("<option></option>").attr("value", (currentYear - 1) + "-" + currentYear).text((currentYear - 1) + "-" + currentYear);
            select.append(previousYearOption);
             var noneOption = $("<option></option>").attr("value", 'None').text('None');
            select.append(noneOption);
        }

        $(document).ready(function() {
            updateSelectedYear();
        });


        function ModeSelectedYear() {
            var select = $("#st6");
            var currentYear = new Date().getFullYear();
            var nextYear = currentYear + 1;
            var defaultOption = $("<option></option>").attr("value", currentYear + "-" + nextYear).text(currentYear + "-" + nextYear).prop("selected", true);
            select.append(defaultOption);
            var previousYearOption = $("<option></option>").attr("value", (currentYear - 1) + "-" + currentYear).text((currentYear - 1) + "-" + currentYear);
            select.append(previousYearOption);
        }

        $(document).ready(function() {
            ModeSelectedYear();
        });


        function SelectedYear() {
            var select = $("#indi-form");
            var currentYear = new Date().getFullYear();
            var nextYear = currentYear + 1;
            var defaultOption = $("<option></option>").attr("value", currentYear + "-25").text(currentYear + "-2025").prop("selected", true);
            select.empty().append(defaultOption);
            var previousYearOption = $("<option></option>").attr("value", (currentYear - 1) + "-24").text((currentYear - 1) + "-2024");
            select.append(previousYearOption);
            var noneOption = $("<option></option>").attr("value", "None").text( "None");
            select.append(noneOption);
        }

        $(document).ready(function() {
            SelectedYear();
        });

$(document).ready(function () {
    $("#indi-form").change(function () {
        var selectedOption = $(this).val();
        if (selectedOption === "None") {
            $("#kkt_rs").prop("disabled", true).val(null);
        } else {
            $("#kkt_rs").prop("disabled", false);
        }
    });

    $("#st2").change(function () {
        var selectedOption = $(this).val();
        if (selectedOption === "None") {
            $("#kds_rs").prop("disabled", true).val(null); // Disable and set value to null
        } else {
            $("#kds_rs").prop("disabled", false);
        }
    });
});
        function RmsmDelivery() {
      var formdata = new FormData($('#Rmsm-Delivery')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}rmsm-donation",
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
                    window.location.reload();
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
        },
        complete: function() {
          $('#submit_button').prop('disabled', false);
        }
      });
    }



    $(function() {
      $('#Rmsm-Delivery').submit(function(event) {
        event.preventDefault();
        $('.form-control').on('keyup change', function() {
          $('.validate_errors').text('');
        });
      });
      //ProfileEdit()
    })
    </script>

    @include('include.footer')
</body>



</html>