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

        .trans-svg:hover {

            transform: scale(1.2);

        }

        .video_box1 {
            border-radius: 15px;
            padding: 22px;
            background: #ffa101;
        }

        .video_box1 h5 {
            font-size: 17px;
            text-align: center;
            color: #fff;
        }
    </style>

</head>



<body>





    <!-- header -->


    @include('include.header')


    <section class="bred-crum"
        style="background-image:url({{ env('MAIN_URL') }}public/assets/images/breadcrum/header.jpg);">

        <div class="container">

            <h2 class="page-title">Video</h2>

            <ul class="breadcrumb-nav">

                <li><a href="index">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>

                <li> Tutorials</li>
                <li><i class="fas fa-angle-right"></i></li>

                <li> Video</li>



            </ul>

        </div>

    </section>



    <section class="vedi-sec mb-5">

        <div class="container">
            <div class="row show-contents"></div>
        </div>
    </section>












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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
   
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    
   <script>
        $(function() {
            ShowContents()
        })
        function ShowContents() {
            $.ajax({
                type: 'post',
                url: "{{ env('API_URL') }}get-tutorial-videos",
                success: function(response) {
                    if (response['status'] == 200) {
                        if(response['data'].length > 0){
                        var html = ``;
                        for (var i = 0; i < response['data'].length; i++) {
                            html += `<div class="row my-3">
                            <div class="col-md-12 text-center">
                                <h3>${response['data'][i].category_name}</h3>
                            </div>
                        </div>
                        <div class=" row mb-3">`;
                            for (var j = 0; j < response['data'][i]['videos'].length; j++) {
                                var iframeContent = response['data'][i]['videos'][j].post_content.replace(/&lt;/g, '<').replace(/&gt;/g, '>');
                                html += `<div class="col-md-4 mb-2 video_box${j}">
                                  <div class="video_box1">
                                    ${iframeContent}
                                      <h5>${response['data'][i]['videos'][j].post_title}</h5>
                                  </div>
                              </div>`;
                            }
                            html += `</div>`;
                        }
                        // console.log(html)
                        $('.show-contents').html(html)
                        }else{
                            $('.show-contents').html(`<div class="row text-center"><h3>Data Not Found..!</h3></div>`)
                        }
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


    </script>



</body>



</html>
