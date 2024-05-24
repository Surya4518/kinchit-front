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

    .type-category a {
      color: #bb1b1b !important;
    }
  </style>

</head>



<body>





  <!-- header -->

  @include('include.header')

  <section class="bred-crum" style="background-image:url({{env('MAIN_URL')}}public/assets/images/breadcrum/header.jpg);">

    <div class="container">

      <h2 class="page-title">Depository Details</h2>

      <ul class="breadcrumb-nav">

        <li><a href="index">Home</a></li>

        <li><i class="fas fa-angle-right"></i></li>

        <li>Depository Details</li>

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
    <div class="container">
      <div class="row mb-3">
        <div class="row mb-3">
          <div class="col-12 m-auto text-end">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addModal">Add</button>
          </div>

        </div>
        <div class="col-md-12  mb-3">
          <div class="mem-data " id="deposit-details">
            <table id="example" class="table dataTable dtr-inline border nobottommargin" style="width:100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Phone Number</th>
                  <th>Deposit to</th>
                  <th>Donation_year</th>
                  <th>No Of Members</th>
                  <th>Total amount deposited</th>
                  <th>Payment Type</th>
                  <th>Payment Date</th>
                  <th>Edit </th>

                </tr>
              </thead>
              <tbody>
                <!-- <tr>
                <td>1</td>
                <td>CHN002/123456</td>
                <td>Ranganathan	</td>
                <td>9841271926	</td>
                <td>2023-24 Rs. 1000</td>
                <td>Online / Direct</td>
                <td>2022-23 H1/H2</td>
                <td><a href="" class="def-anc" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i>Edit</a></td>
               
            </tr> -->

                <!-- <tr>
                <td>2</td>
                <td>CHN002/123456</td>
                <td>Sonu	</td>
                <td>9841271926	</td>
                <td>2023-24 Rs. 1000</td>
                <td>Online / Direct</td>
                <td>2022-23 H1/H2</td>
                <td><a href="" class="def-anc" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i>Edit</a></td>
               
            </tr>
            
              <tr>
                <td>3</td>
                <td>CHN002/123456</td>
                <td>Ezhil	</td>
                <td>9841271926	</td>
                <td>2023-24 Rs. 1000</td>
                <td>Online / Direct</td>
                <td>2022-23 H1/H2</td>
                <td><a href="" class="def-anc" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i>Edit</a></td>
               
            </tr>
              <tr>
                <td>4</td>
                <td>CHN002/123456</td>
                <td>Jeeva	</td>
                <td>9841271926	</td>
                <td>2023-24 Rs. 1000</td>
                <td>Online / Direct</td>
                <td>2022-23 H1/H2</td>
                <td><a href="" class="def-anc" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i>Edit</a></td>
               
            </tr>
              <tr>
                <td>5</td>
                <td>CHN002/123456</td>
                <td>Pandian	</td>
                <td>9841271926	</td>
                <td>2023-24 Rs. 1000</td>
                <td>Online / Direct</td>
                <td>2022-23 H1/H2</td>
                <td><a href="" class="def-anc" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i>Edit</a></td>
               
            </tr>
              <tr>
                <td>6</td>
                <td>CHN002/123456</td>
                <td>Deva	</td>
                <td>9841271926	</td>
                <td>2023-24 Rs. 1000</td>
                <td>Online / Direct</td>
                <td>2022-23 H1/H2</td>
                <td><a href="" class="def-anc" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i>Edit</a></td>
               
            </tr>
              <tr>
                <td>7</td>
                <td>CHN002/123456</td>
                <td>Tamil	</td>
                <td>9841271926	</td>
                <td>2023-24 Rs. 1000</td>
                <td>Online / Direct</td>
                <td>2022-23 H1/H2</td>
                <td><a href="" class="def-anc" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i>Edit</a></td>
               
            </tr> -->

              </tbody>
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

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Editing</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">



            <form method="post" id="Rmsm-Deposit">
              <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
              <input type="hidden" name="device_id" id="device_id" value="1">
              <div class="row g-3">

                <div class="col-md-6 mb-3">

                  <label for="your-name" class="form-label">Deposit To<span class="quform-required">*</span></label>

                  <select class="form-select" name="deposit_to" id="deposit-to">
                    <option value="test">Please select </option>
                    <option value="kkt">KKT</option>
                    <option value="kds">KDS</option>
                  </select>
                </div>

                <div class="col-md-6 mb-3">

                  <label for="your-name" class="form-label">Donation Year<span class="quform-required">*</span></label>

                  <select class="form-select" name="donation_year" id="donation">
                    <option value="">Please select </option>

                  </select>
                </div>


                <div class="col-md-6 mb-3">
                  <label for="your-name" class="form-label">Number Of Members<span class="quform-required">*</span></label>
                  <input type="text" class="form-control" id="number-of-mem" name="no_of_members" required="">
                </div>

                <div class=" col-md-6 mb-3">
                  <label for="your-name" class="form-label">Total Amount Deposited Rs.<span class="quform-required">*</span></label>
                  <input type="text" class="form-control" id="total" name="ttl_amt_deposited" required="">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="mode-of-payment" class="form-label">Mode of Payment<span class="quform-required">*</span></label>
                  <select class="form-select" name="payment_type" id="mode-of-payment">
                    <option value="test">Please select</option>
                    <option value="cash">Cash</option>
                    <option value="upi">UPI</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="your-name" class="form-label">Date<span class="quform-required">*</span></label>
                  <input type="date" class="form-control" id="date" name="payment_date" required="">
                </div>
                <div class="col-md-6 mb-3" id="challan-input" style="display: none;">
                  <label for="challan" class="form-label">Challan No.<span class="quform-required">*</span></label>
                  <input type="text" class="form-control" id="challan" name="challan_number" required>
                </div>

                <div class="col-md-6 mb-3" id="transaction-id-input" style="display: none;">
                  <label for="transa-id" class="form-label">Transaction ID<span class="quform-required">*</span></label>
                  <input type="text" class="form-control" id="transa-id" name="upi_transaction_id" required>
                </div>



                <!-- <div class="col-md-6 mb-3">
                  <label for="your-name" class="form-label">Challan No.<span class="quform-required">*</span></label>
                  <input type="text" class="form-control" id="challan" name="challan" required="">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="your-name" class="form-label">Transaction ID<span class="quform-required">*</span></label>
                  <input type="text" class="form-control" id="transa-id" name="your-name" required="">
                </div> -->

                <div class="col-md-12 text-center">
                    <input type="hidden" name="deposit_id" id="deposit_id">
                  <button type="submit" class="sum" id="sub-btn" onclick="updateDeposit()">Submit </button>

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

  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add Form</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <form method="post" id="Add-Deposit">
              <input type="hidden" name="token" id="token" value="{{ isset($_COOKIE['token']) ? $_COOKIE['token'] : '' }}">
              <input type="hidden" name="device_id" id="device_id" value="1">
              <div class="row g-3">
                <div class="col-md-6 mb-3">
                  <label for="deposit-to" class="form-label">Deposit To<span class="quform-required">*</span></label>
                  <select class="form-select" name="deposit_to" id="deposit-to-add">
                    <option value="test">Please select</option>
                    <option value="kkt">KKT</option>
                    <option value="kds">KDS</option>
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="donation" class="form-label">Donation Year<span class="quform-required">*</span></label>
                  <select class="form-select" name="donation_year" id="donation-add">
                    <option value="">Please select</option>
                    <!-- Add options for donation years here -->
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="number-of-mem" class="form-label">Number Of Members<span class="quform-required">*</span></label>
                  <input type="text" class="form-control" id="number-of-mem-add" name="no_of_members" required="">
                </div>

                <div class="col-md-6 mb-3">
                  <label for="total" class="form-label">Total Amount Deposited Rs.<span class="quform-required">*</span></label>
                  <input type="text" class="form-control" id="total-add" name="ttl_amt_deposited" required="">
                </div>

                <div class="col-md-6 mb-3">
                  <label for="mode-of-payment" class="form-label">Mode of Payment<span class="quform-required">*</span></label>
                  <select class="form-select" name="payment_type" id="mode-of-payment-add">
                    <option value="">Please select</option>
                    <option value="cash">Cash</option>
                    <option value="upi">UPI</option>
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="date" class="form-label">Date<span class="quform-required">*</span></label>
                  <input type="date" class="form-control" id="date-add" name="payment_date" required="">
                </div>

                <div class="col-md-6 mb-3" id="challan-input-add" style="display: none;">
                  <label for="challan" class="form-label">Challan No.<span class="quform-required">*</span></label>
                  <input type="text" class="form-control" id="challan-add" name="challan_number" required>
                </div>

                <div class="col-md-6 mb-3" id="transaction-id-input-add" style="display: none;">
                  <label for="transa-id" class="form-label">Transaction ID<span class="quform-required">*</span></label>
                  <input type="text" class="form-control" id="transa-id-add" name="upi_transaction_id" required>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" class="sum" id="sub-btn-add" onclick="AddDeposit()">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <a href="donar-details.php"><button type="button" class="btn btn-primary" style="background: red; border: none;">Save changes</button></a> -->
        </div>
      </div>
    </div>
  </div>

  <div class="wats">

    <div class="wats2">

      <a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0" target="_blank"><img src="{{env('MAIN_URL')}}public/assets/images/whatsapp.png"></a>
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
  <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        responsive: true
      });
      $('#example1').DataTable({
        responsive: true
      });
      $('.pagination #example_previous a').html('Prev');
      $('.pagination #example1_previous a').html('Prev');
    });
  </script>

  <script>
    $("#indi-form").change(function() {

      var selectedValue = $(this).val();
      if (selectedValue == 4 || selectedValue == null) {
        $('#st1').hide();

      } else {

        $('#st1').show();

      }

    });



    $(function() {
      new DataTable('#example');
      DepositDetails()
      // $('.btn-close').on('click', function() {
      //     $('#details_modal').modal('hide')
      // })
    })

    function DepositDetails() {
      var existingTable = $('#example').DataTable();
      if (existingTable) {
        existingTable.destroy();
      }

      $('#example').DataTable({
        processing: true,
        searching: true,
        ajax: {
          url: "{{ env('API_URL') }}rmsm-deposit-details",
          method: 'POST',
          data: {
            token: getCookie('token'),
            device_id: 1
          },
        },
        columns: [{
            data: null,
            render: function(data, type, row, meta) {
              if (type === 'display') {
                return meta.row + 1;
              }
              return data;
            }
          },
          {
            data: 'user_id',
            name: 'user_id'
          },
          {
            data: 'userdetails[0].first_name',
            name: 'userdetails[0].first_name'
          },
          {
            data: 'userdetails[0].phone_number',
            name: 'userdetails[0].phone_number'
          },
          {
            data: 'deposit_to',
            name: 'deposit_to'
          },
          {
            data: 'donation_year',
            name: 'donation_year'
          },
          {
            data: 'no_of_members',
            name: 'no_of_members'
          },
          {
            data: 'ttl_amt_deposited',
            name: 'ttl_amt_deposited'
          },
          {
            data: 'payment_type',
            name: 'payment_type'
          },
          {
            data: 'payment_date',
            name: 'payment_date'
          },
          {
            data: null,
            render: function(data, type, row) {
              return `<a href="javascript:void(0);" class="def-anc" data-toggle="modal" data-target="#exampleModal"onclick="rmsmDepositDetail(${row.id})"><i class="fa fa-edit"></i>Edit</a>`;
            }
          }
        ]
      });
    }





    function rmsmDepositDetail(id) {
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-deposit-detail",
        data: {
          token: getCookie('token'),
          device_id: 1,
          id: id
        },
        success: function(response) {
          console.log("Response:", response);
          if (response.status == 200) {
            var result = response.data[0];
            console.log("Result:", result);
            
            if (result.id !== undefined) {
              console.log("Setting deposit-to:", result.deposit_to);
              $('#deposit_id').val(result.id);
            }

            if (result.deposit_to !== undefined) {
              console.log("Setting deposit-to:", result.deposit_to);
              $('#deposit-to').val(result.deposit_to);
            }
            if (result.donation_year !== undefined) {
              console.log("Setting donation:", result.donation_year);
              $('#donation').val(result.donation_year);
            }

            if (result.no_of_members !== undefined) {
              console.log("Setting number-of-mem:", result.no_of_members);
              $('#number-of-mem').val(result.no_of_members);
            }
            if (result.ttl_amt_deposited !== undefined) {
              console.log("Setting total:", result.ttl_amt_deposited);
              $('#total').val(result.ttl_amt_deposited);
            }
            if (result.payment_type !== undefined) {
              console.log("Setting mode-of-payment:", result.payment_type);
              $('#mode-of-payment').val(result.payment_type);

              if (result.payment_type === 'cash') {
                console.log("Payment type is Cash");
                $('#challan-input').show();
                $('#transaction-id-input').hide();
                $('#challan').val(result.challan_number);
              } else if (result.payment_type === 'upi') {
                console.log("Payment type is UPI");
                $('#challan-input').hide();
                $('#transaction-id-input').show();
                $('#transa-id').val(result.upi_transaction_id);
              }
            }

            if (result.payment_date !== undefined) {
              console.log("Setting date:", result.payment_date);
              $('#date').val(result.payment_date);
            }


          } else {
            $.confirm({
              title: 'Error!',
              content: 'Failed to delete message.',
              type: 'red',
              typeAnimated: true,
              buttons: {
                ok: {
                  text: 'OK',
                  btnClass: 'btn-red',
                  action: function() {}
                }
              }
            });
          }
        },
        error: function(data) {
          console.log('Error:', data);
        }
      });
      $('#details_modal').modal('show');
    }





    $('#sub-btn').submit(function(event) {
      event.preventDefault();
      $('.form-control').on('keyup change', function() {
        $('.validate_errors').text('');
      });
      updateDeposit()
    });




    function updateDeposit() {
      var formdata = new FormData($('#Rmsm-Deposit')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}rmsm-deposit-details-update",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
          if (response['status'] == 200) {
            $.confirm({
              title: 'Success!',
              content: response.message, // Use dot notation to access message
              type: 'success',
              typeAnimated: true,
              closeIcon: true,
              buttons: {
                ok: {
                  text: 'OK',
                  btnClass: 'btn-success',
                  action: function() {
                    location.reload();
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
  </script>

  <script>
    $("#st2").change(function() {

      var selectedValue = $(this).val();
      if (selectedValue == 4 || selectedValue == null) {
        $('#st3').hide();

      } else {

        $('#st3').show();

      }

    });


    function updateSelectedYear() {
      var select = $("#donation");
      var currentYear = new Date().getFullYear();
      var nextYear = currentYear + 1;
      var defaultOption = $("<option></option>").attr("value", currentYear + "-" + nextYear).text(currentYear + "-" + nextYear).prop("selected", true);
      select.append(defaultOption);
      var previousYearOption = $("<option></option>").attr("value", (currentYear - 1) + "-" + currentYear).text((currentYear - 1) + "-" + currentYear);
      select.append(previousYearOption);
    }

    $(document).ready(function() {
      updateSelectedYear();
    });

    function AddSelectedYear() {
      var select = $("#donation-add");
      var currentYear = new Date().getFullYear();
      var nextYear = currentYear + 1;
      var defaultOption = $("<option></option>").attr("value", currentYear + "-" + nextYear).text(currentYear + "-" + nextYear).prop("selected", true);
      select.append(defaultOption);
      var previousYearOption = $("<option></option>").attr("value", (currentYear - 1) + "-" + currentYear).text((currentYear - 1) + "-" + currentYear);
      select.append(previousYearOption);
    }

    $(document).ready(function() {
      AddSelectedYear();
    });
    $(document).ready(function() {
      $("#mode-of-payment").change(function() {
        console.log("Selected value:", $(this).val());
        if ($(this).val() === "cash") {
          console.log("Payment type is Cash");
          $("#challan-input").show();
          $("#transaction-id-input").hide();
        } else if ($(this).val() === "upi") {
          console.log("Payment type is UPI");
          $("#challan-input").hide();
          $("#transaction-id-input").show();
        } else {
          console.log("Payment type is something else");
          $("#challan-input").hide();
          $("#transaction-id-input").hide();
        }
      });
    });
    $(document).ready(function() {
      $("#mode-of-payment-add").change(function() {
        console.log("Selected value:", $(this).val());
        if ($(this).val() === "cash") {
          console.log("Payment type is Cash");
          $("#challan-input-add").show();
          $("#transaction-id-input-add").hide();
        } else if ($(this).val() === "upi") {
          console.log("Payment type is UPI");
          $("#challan-input-add").hide();
          $("#transaction-id-input-add").show();
        } else {
          console.log("Payment type is something else");
          $("#challan-input-add").hide();
          $("#transaction-id-input-add").hide();
        }
      });
    });





    
    $('#sub-btn-add').submit(function(event) {
      event.preventDefault();
      $('.form-control').on('keyup change', function() {
        $('.validate_errors').text('');
      });
      AddDeposit()
    });




    function AddDeposit() {
      var formdata = new FormData($('#Add-Deposit')[0]);
      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}deposit-details",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
          if (response['status'] == 200) {
            var userData = response['depositdetails'];
            console.log(userData);
            var smsFormData = new FormData();
            smsFormData.append('mobile', userData['phone_number']);
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
              content: response.message, 
              type: 'success',
              typeAnimated: true,
              closeIcon: true,
              buttons: {
                ok: {
                  text: 'OK',
                  btnClass: 'btn-success',
                  action: function() {
                    location.reload();
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
  </script>

  @include('include.footer')
</body>



</html>