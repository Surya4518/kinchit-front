<!DOCTYPE html>

<style>
  .preloder{
  height: 100vh;
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #111;
}


.loder {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 5px solid #c3c3c3;
    border-top: 8px solid #ffa101;
    animation: spinner 1s linear infinite;
    position: absolute;
    top: 14%;
    left: 457px;
}

@keyframes spinner{
  0%{
    transform: rotate(0deg);

  }
  50%{
    border-top-width: 5px;
  }
  100%{
    transform: rotate(360deg);
  }
}

@media screen and (max-width: 668px){
  .loder{
    height: 60px;
    width: 60px;
    border-top: 6px solid #3775FF;
  }
}
</style>
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

    .nav-pills-custom .nav-link {

      color: #920606;

      background: #fff;

      position: relative;

    }



    .nav-pills-custom .nav-link.active {

      color: #920606;
      ;

      background: #fff;

    }





    /* Add indicator arrow for the active tab */

    @media (min-width: 992px) {

      .nav-pills-custom .nav-link::before {

        content: '';

        display: block;

        border-top: 8px solid transparent;

        border-left: 10px solid #fff;

        border-bottom: 8px solid transparent;

        position: absolute;

        top: 50%;

        right: -10px;

        transform: translateY(-50%);

        opacity: 0;

      }

    }


    .nav-pills-custom .nav-link.active::before {

      opacity: 1;

    }



    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {

      color: var(--bs-nav-pills-link-active-color);

      background-color: #ffa101 !important;

    }

    .nav-link:focus,
    .nav-link:hover {

      color: #920606 !important;

    }

    .card {

      border-radius: 20px;

      background: #fff;

      position: relative;

      padding: 14px 0 24px 0;

      border: 2px solid #c3c6ce;

      transition: 0.5s ease-out;

      overflow: visible;

      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);

    }



    .card-details {

      color: black;

      height: 100%;

      gap: .5em;

      display: grid;

      place-content: center;

    }



    .card-button {

      transform: translate(-50%, 125%);

      width: 60%;

      border-radius: 1rem;

      border: none;

      background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);

      color: #fff;

      font-size: 1rem;

      padding: 4px 3px 6px 4px;

      position: absolute;

      left: 50%;

      bottom: 0;

      opacity: 0;

      transition: 0.3s ease-out;

    }



    .text-body {

      color: rgb(134, 134, 134);

    }



    /*Text*/

    .text-title {
      font-size: 18px;
      color: orange;
      text-align: center;
    }

    .text-title:hover {

      color: #8d0505;

    }

    /*Hover*/

    .card:hover {

      border-color: #ff9a05;

      box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);

    }



    .card:hover .card-button {

      transform: translate(-50%, 50%);

      opacity: 1;

    }

    .kalak-img {

      margin: auto;

    }
  </style>

</head>



<body>





  <!-- header -->

  @include('include.header')

  <section class="bred-crum" style="background-image:url({{env('MAIN_URL')}}public/assets/images/breadcrum/header.jpg);">

    <div class="container">

      <h2 class="page-title">Courses</h2>

      <ul class="breadcrumb-nav">

        <li><a href="index">Home</a></li>

        <li><i class="fas fa-angle-right"></i></li>

        <li>Courses</li>

      </ul>

    </div>

  </section>

  <section class="tab-concept mb-5">
    <div class="container  mb-5">
      <div class="row">
        <div class="col-md-3">

          <h3 class="my-sc text-center"> Courses</h3>

          <!-- Tabs nav -->

          <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link mb-3 p-2 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
              <span class="font-weight-bold small text-uppercase">Ongoing Courses</span></a>

            <a class="nav-link mb-3 p-2 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
              <span class="font-weight-bold small text-uppercase"> Completed Courses</span></a>

            <a class="nav-link mb-3 p-2 shadow" id="v-pills-assign-tab" data-toggle="pill" href="#v-pills-assign" role="tab" aria-controls="v-pills-assign" aria-selected="false">
              <span class="font-weight-bold small text-uppercase"> Assign Courses</span></a>

          </div>

        </div>
        <div class="col-md-9">

          <!-- Tabs content -->

          <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade shadow rounded  show active p-2" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

              <!--<h4 class="font-italic mb-4" style="color: #920606;">EDIT BASIC INFORMATION</h4>-->

              <div class="dash-profile">

                <div class="row ongoing">
                </div>
                <div class="loder">
      
                </div>
              </div>

            </div>

            <div class="tab-pane fade shadow rounded pt-3 p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

              <div class="dash-profile">

                <div class="row completed">

                </div>
                <div class="loder">
      
                </div>
              </div>


            </div>

            <div class="tab-pane fade shadow rounded pt-3 p-5" id="v-pills-assign" role="tabpanel" aria-labelledby="v-pills-assign-tab">

              <div class="dash-assign">

                <div class="row assign">
                </div>
                <div class="loder">
      
                </div>
              </div>


            </div>

          </div>

        </div>
      </div>
    </div>

  </section>


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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">


  @include('include.footer')
</body>



</html>
<script>
   $(function() {
      OngoingCourse();
      CompletedCourse();
      AssignCourse();
    });

    function OngoingCourse(){
      $('.loder').show(); 
      var formdata = new FormData();
      formdata.append('token', getCookie('token'));
      formdata.append('device_id', '1');

      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-ongoing-courses",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
          $('.loder').hide();
          if (response['status'] == 200) {
        var data = response['data'];
        var html = '';
        data.forEach(function(course) {
          if (course.guid != null) {
          html += `<div class="col-md-4 mb-5">
                    <div class="card">
                      <div class="card-details">
                        <h2 class="text-title">${course.post_title}</h2>
                        <img src="http://kinchit-admin.senthil.in.net/public/${course.guid}" alt="${course.post_title}">
                      </div>
                      <button class="card-button">Ongoing Courses</button>
                    </div>
                  </div>`;
          } else {
        html += `
        <div class="col-md-4 mb-5">
            <a href="course/${course.post_name}">
                <div class="card">
                    <div class="card-details">
                        <h2 class="text-title">${course.post_title}</h2>
                        <img src="{{ env('MAIN_URL') }}public/assets/images/kalakshepam/nammazhwar.jpg" class="img-fluid kalak-img">
                    </div>
                    <button class="card-button">Ongoing Courses</button>
                </div>
            </a>
        </div>`;
                        }
        });
        $('.ongoing').append(html); // Append the generated HTML to the '.row' element
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
        error: function(xhr, status, error) {
          $('.loder').hide();
          console.log('AJAX Error:', error);
        }
      });
    }

    function CompletedCourse(){
      $('.loder').show(); 
      var formdata = new FormData();
      formdata.append('token', getCookie('token'));
      formdata.append('device_id', '1');

      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-completed-courses",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
          $('.loder').hide();
          if (response['status'] == 200) {
        var data = response['data'];
        var html = '';
        data.forEach(function(course) {
          if (course.guid != null) {
          html += `<div class="col-md-4 mb-5">
          <a href="course/${course.post_name}">
                    <div class="card">
                      <div class="card-details">
                        <h2 class="text-title">${course.post_title}</h2>
                        <img src="http://kinchit-admin.senthil.in.net/public/${course.guid}" alt="${course.post_title}">
                      </div>
                      <button class="card-button">Completed Courses</button>
                    </div>
                    </a>
                  </div>`;
          } else {
        html += `
        <div class="col-md-4 mb-5">
            <a href="course/${course.post_name}">
                <div class="card">
                    <div class="card-details">
                        <h2 class="text-title">${course.post_title}</h2>
                        <img src="{{ env('MAIN_URL') }}public/assets/images/kalakshepam/nammazhwar.jpg" class="img-fluid kalak-img">
                    </div>
                    <button class="card-button">Completed Courses</button>
                </div>
            </a>
        </div>`;
                        }
        });
        $('.completed').append(html); // Append the generated HTML to the '.row' element
      }
        },
        error: function(xhr, status, error) {
          $('.loder').hide();
          console.log('AJAX Error:', error);
        }
      });
    }

    function AssignCourse(){
      $('.loder').show(); 
      var formdata = new FormData();
      formdata.append('token', getCookie('token'));
      formdata.append('device_id', '1');

      $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-course-for-user",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
          $('.loder').hide();
          if (response['status'] == 200) {
        var data = response['data'];
        var html = '';
        data.forEach(function(course) {
          if (course.guid != null) {
          html += `<div class="col-md-4 mb-5">
          <a href="course/${course.post_name}">
                    <div class="card">
                      <div class="card-details">
                        <h2 class="text-title">${course.post_title}</h2>
                        <img src="http://kinchit-admin.senthil.in.net/public/${course.guid}" alt="${course.post_title}">
                      </div>
                      <button class="card-button">Assgin Courses</button>
                    </div>
                    </a>
                  </div>`;
          } else {
        html += `
        <div class="col-md-4 mb-5">
            <a href="course/${course.post_name}">
                <div class="card">
                    <div class="card-details">
                        <h2 class="text-title">${course.post_title}</h2>
                        <img src="{{ env('MAIN_URL') }}public/assets/images/kalakshepam/nammazhwar.jpg" class="img-fluid kalak-img">
                    </div>
                    <button class="card-button">Assgin Courses</button>
                </div>
            </a>
        </div>`;
                        }
        });
        $('.assign').append(html); // Append the generated HTML to the '.row' element
      }
        },
        error: function(xhr, status, error) {
          $('.loder').hide();
          console.log('AJAX Error:', error);
        }
      });
    }

</script>