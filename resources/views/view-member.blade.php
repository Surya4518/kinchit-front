

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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">

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
span.select2-dropdown.select2-dropdown--above {
    z-index: 9999 !important;
}
.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    width: 100% !important;
    /* height: 48px; */
}
.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 45px;
    user-select: none;
    -webkit-user-select: none;
}
.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #ced4da !important;
    border-radius: 4px;
}
  </style>

</head>



<body>





  <!-- header -->

  @include('include.header')

  <section class="bred-crum" style="background-image:url({{env('MAIN_URL')}}public/assets/images/breadcrum/header.jpg);">

    <div class="container">

      <h2 class="page-title">My Members</h2>

      <ul class="breadcrumb-nav">

        <li><a href="index">Home</a></li>

        <li><i class="fas fa-angle-right"></i></li>

        <li>My Members</li>

      </ul>

    </div>

  </section>

 <section class="about-one about-one--home section-space1 mb-5">
            <div class="about-one__bg ">
                <div class="about-one__bg__border"></div>
                <!-- /.about-one__bg__border -->
                <div class="about-one__bg__inner"></div>
                <!-- /.about-one__left__bg__inner -->
            </div>
            <!-- /.about-one__left__bg -->
            <div class="container">
            <div class="row mb-3">
                <h2 class="text-center" style="color: #198754;">Active Members</h2>
                  <div class="col-md-12  mb-3">
                  <div class="mem-data">
                  <div class="table-responsive">
                <table id="active-table" class="table table-bordered table-striped ">
                    <thead class="thead-light">
                      <tr>
                        <th>MemberShip No.</th>
                        <th>Name</th>
                        <th>Mobile No.</th>
                        <th>Email</th>
                        <th>Address 1</th>
                        <th>Address 2</th>
                        <th>Area</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pin Code</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mb-3">
          <h2 class="text-center" style="color: #97170a;">Inactive Members</h2>
          <div class="col-md-12  mb-3">
            <div class="mem-data">
            <!-- <div class="card mt-5"> -->
              <div class="card-body">
                <div class="table-responsive">
                  <table id="inactive-table" class="table table-bordered table-striped mt-5">
                    <thead class="thead-light">
                      <tr>
                        <th>MemberShip No.</th>
                        <th>Name</th>
                        <th>Mobile No.</th>
                        <th>Email</th>
                        <th>Address 1</th>
                        <th>Address 2</th>
                        <th>Area</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pin Code</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            <!-- </div> -->
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


  <div class="wats">

    <div class="wats2">

      <a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0" target="_blank"><img
          src="{{env('MAIN_URL')}}public/assets/images/whatsapp.png"></a>
    </div>

  </div>

  <div class="modal fade" id="my-member-active" tabindex="-1" role="dialog" aria-labelledby="my-member-activeLabel" aria-hidden="true" style="top: 5%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-member-activeLabel">Edit My Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form id="my_member_upadte" method="post" enctype="multipart/form-data">
                            <div class="col-12 mt-2">
                                <label for="">Member Ship No</label>
                                <input type="text" name="user_login" id="member_ship_no" class="form-control">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Name</label>
                                <input type="text" name="first_name" id="user_name" class="form-control">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Mobile No</label>
                                <input type="number" name="phone_number" id="mobile_number" class="form-control">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Email</label>
                                <input type="email" name="user_email" id="user_email" class="form-control">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Address1</label>
                                <input type="text" name="address1" id="address1" class="form-control">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Address2</label>
                                <input type="text" name="address2" id="address2" class="form-control">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Area</label>
                                <input type="text" name="area" id="area" class="form-control">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">State</label>
                                <!--<input type="text" name="state" id="state" class="form-control">-->
                                <select name="state" id="state" class="form-control" style="z-index: 9999; !important">
                                    <option value="">Select State</option>
                                </select>
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">City</label>
                                <!--<input type="text" name="city" id="city" class="form-control">-->
                                <select name="city" id="city" class="form-control">
                                    <option value="">Select City</option>
                                </select>
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Pincode</label>
                                <input type="number" name="pincode" id="pincode" class="form-control">
                                <input type="hidden" name="user_id" id="user_id" class="form-control">
                                <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
                                <input type="hidden" name="device_id" id="device_id" value="1">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="sum" onclick="MemberUpdate()">Submit</button>
                </div>
            </div>
        </div>
    </div>


  <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>



  <script src="{{env('MAIN_URL')}}public/assets/js/jquery-1.12.4.min.js"></script>

  <!-- jquery-ui js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery-ui.js"></script>

  <!-- popper min js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/popper.min.js"></script>

  <!-- Latest compiled and minified Bootstrap -->

  <script src="{{env('MAIN_URL')}}public/assets/bootstrap/js/bootstrap.min.js"></script>

  <!-- owl-carousel min js  -->

  <script src="{{env('MAIN_URL')}}public/assets/owlcarousel/js/owl.carousel.min.js"></script>

  <!-- magnific-popup min js  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/magnific-popup.min.js"></script>

  <!-- waypoints min js  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/waypoints.min.js"></script>

  <!-- parallax js  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/parallax.js"></script>

  <!-- jquery dd js  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.dd.min.js"></script>

  <!-- countdown js  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.countdown.min.js"></script>

  <!-- jquery.counterup.min js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.counterup.min.js"></script>

  <!-- jquery.parallax-scroll js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.parallax-scroll.js"></script>

  <!-- fit video  -->

  <script src="{{env('MAIN_URL')}}public/assets/js/jquery.fitvids.js"></script>

  <!-- imagesloaded js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/imagesloaded.pkgd.min.js"></script>

  <!-- isotope min js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/isotope.min.js"></script>

  <!-- cookie js -->

  <script src="{{env('MAIN_URL')}}public/assets/js/js.cookie.js"></script>

  <script src="{{env('MAIN_URL')}}public/assets/js/scripts.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  
  
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script>
         $(document).ready(function() {
      $('.form-control').on('keyup change', function() {
        $('.validate_errors').text('');
      });
      showList();
      showInactive();
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


    function showList() {
      var formData = {
        device_id: 1,
        token: getCookie('token'),
      };

      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-active-members",
        data: formData,
        success: function(response) {
          // Destroy existing DataTable, if any
          $('#active-table').DataTable().destroy();
          // Initialize DataTable with response data
          $('#active-table').DataTable({
            processing: true,
            searching: true,
            data: response.data,
            columns: [
              {
                data: 'user_login',
                name: 'user_login'
              },
              {
                data: 'first_name',
                name: 'first_name'
              },
              {
                data: 'phone_number',
                name: 'phone_number'
              },
              {
                data: 'user_email',
                name: 'user_email'
              },
              {
                data: 'address_1',
                name: 'address_1'
              },
              {
                data: 'address_2',
                name: 'address_2'
              },
              {
                data: 'area',
                name: 'area'
              },
              {
                data: 'city',
                name: 'city'
              },
              {
                data: 'state',
                name: 'state'
              },
              {
                data: 'postcode',
                name: 'postcode'
              },
              {
                data: 'id',
                render: function(data, type, row) {
                  return `<a href="#" data-toggle="modal" data-target="#my-member-active" class="sum" data-id="${data}">Edit</a>`;
                }
              }
            ]
          });
        },
        error: function(xhr, status, error) {
          console.log('AJAX Error:', error);
        }
      });
    }

    $('#active-table tbody').on('click', '.sum', function() {
  var memberId = $(this).data('id');
  var rowData = $('#active-table').DataTable().row($(this).parents('tr')).data();
  
  // Populate modal fields with row data
  $('#member_ship_no').val(rowData.user_login);
  $('#user_name').val(rowData.first_name);
  $('#mobile_number').val(rowData.phone_number);
  $('#user_email').val(rowData.user_email);
  $('#address1').val(rowData.address_1);
  $('#address2').val(rowData.address_2);
  $('#area').val(rowData.area);
  $('#city').val(rowData.city);
  $('#state').val(rowData.state);
  $('#pincode').val(rowData.postcode);
  $('#user_id').val(rowData.ID);
  // Add a hidden input field to store the member ID
  $('#my_member_upadte').append(`<input type="hidden" name="member_id" value="${memberId}">`);
});
    function showInactive() {
      var formData = {
        device_id: 1,
        token: getCookie('token'),
      };
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-inactive-members",
        data: formData,
        success: function(response) {
          $('#inactive-table').DataTable().destroy();
          $('#inactive-table').DataTable({
            processing: true,
            searching: true,
            data: response.data,
            columns: [{
                data: 'user_login',
                name: 'user_login'
              },
              {
                data: 'first_name',
                name: 'first_name'
              },
              {
                data: 'phone_number',
                name: 'phone_number'
              },
              {
                data: 'user_email',
                name: 'user_email'
              },
              {
                data: 'address_1',
                name: 'address_1'
              },
              {
                data: 'address_2',
                name: 'address_2'
              },
              {
                data: 'area',
                name: 'area'
              },
              {
                data: 'city',
                name: 'city'
              },
              {
                data: 'state',
                name: 'state'
              },
              {
                data: 'postcode',
                name: 'postcode'
              },
              {
                data: 'id',
                render: function(data, type, row) {
                  return `<a href="#" data-toggle="modal" data-target="#my-member-active" class="sum" data-id="${data}">Edit</a>`;
                }
              }
            ]
          });
        },
        error: function(xhr, status, error) {
          console.log('AJAX Error:', error);
        }
      });
    }
    $('#inactive-table tbody').on('click', '.sum', function() {
  var memberId = $(this).data('id');
  var rowData = $('#inactive-table').DataTable().row($(this).parents('tr')).data();
  
  // Populate modal fields with row data
  $('#member_ship_no').val(rowData.user_login);
  $('#user_name').val(rowData.first_name);
  $('#mobile_number').val(rowData.phone_number);
  $('#user_email').val(rowData.user_email);
  $('#address1').val(rowData.address_1);
  $('#address2').val(rowData.address_2);
  $('#area').val(rowData.area);
  $('#city').val(rowData.city);
  $('#state').val(rowData.state);
  $('#pincode').val(rowData.postcode);
  $('#user_id').val(rowData.ID);
  // Add a hidden input field to store the member ID
  $('#my_member_upadte').append(`<input type="hidden" name="member_id" value="${memberId}">`);
});     

function MemberUpdate() {
        var formdata = new FormData($('#my_member_upadte')[0]);
        $.ajax({
            type: 'post',
            url: "{{ env('API_URL') }}member-update",
            data: formdata,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response['status'] == 200) {
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
                                    window.location.href = '/view-member';
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



  @include('include.footer')
</body>



</html>
