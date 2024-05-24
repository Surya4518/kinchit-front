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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>

    <script src="../../../www.statcounter.com/counter/counter.js" async></script>

    <style>
        .text-search {
            border: 1px solid #f1dfcc;
            background: none;
            border-color: #f1dfcc !important;
        }

        input#thread_title {
            color: #000;
            font-weight: 600;
            font-size: 1.025em;
            width: 100%;
            padding: 14px;
            box-shadow: none;
            padding-left: 15px;
            padding-right: 15px;
            font-weight: 300;
            background: transparent;
            border: 0px transparent;
        }

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

        .frm {

            border: 1px solid grey;

            border-radius: 20px;



        }

        .img-section {

            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);

            padding: 20px;

            border-top-left-radius: 20px;

            border-bottom-left-radius: 20px;

        }

        #scroll-to-top {

            cursor: pointer;

            position: fixed;

            bottom: 20px;

            right: 20px;

            display: none;

        }

        .fm-body {}

        .card-outline-secondary {

            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);

        }

        .fm-head {

            color: #fff;

            font-size: 20px;

        }

        .fm-head1 {

            float: right;

            margin: -25px 0 0 0;

            color: #fff;

            font-size: 20px;

        }

        .fm-btn {

            background: #970000;

            border: #970000;

            padding: 10px 15px 10px 15px;

        }

        .fm-name {

            color: #fff;

        }

        .orthodepart-icon img {
            
            border-radius: 50%;

            border: 3px solid #ffa201;

        }

        .orthodepart-icon img:hover {



            box-shadow: 0 10px 20px rgb(0 0 0 / 19%), 0 6px 6px rgb(0 0 0 / 23%);

        }

        .times-create {

            font-size: 15px;

            color: #585858;

            word-spacing: 2px;

            font-weight: 300;

        }

        .type-category {

            position: relative;

            margin-left: 2px;

            font-size: 0.9em;

            color: #b3b3b3;

        }
        .social-icons{
            margin-left: 133px;
        }
        .type-category:hover {

            position: relative;

            margin-left: 2px;

            font-size: 0.9em;

            color: red !important;

        }

        .author {

            font-size: 0.89em;

            color: #b3b3b3;

            word-spacing: 2px;

        }

        .flag {

            margin: 0 5px 0px 0px;

        }

        .type-category a {

            color: #bb1b1b !important;

        }

        .rply a {

            color: #09dfdf !important;

        }

        .rply {

            font-size: 15px;

        }

        .orthodepart-sub-head {

            font-size: 21px;

        }

        .pro {

            border: 1px solid #e7e6e6;

            padding: 10px;

            border-radius: 10px;



            background: #f7f7f7;

        }

        .pro:hover {

            box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);

        }

        .stat-head {

            font-size: 23px;

        }

        .stats {

            box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);

            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);

            padding: 20px;

            border-radius: 10px;

            background: #f7f7f7;

        }

        .stats-icon {

            background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);

            padding: 10px;

            border-radius: 50%;

            color: #fff;

        }

        .stats-mem {

            margin: 0 0 0 15px;

        }

        .stats-icon1 {

            border-radius: 50%;

            color: #fff;

            padding: 2px 5px 4px 10px;

            background: #c50404;

        }

        .mmm {

            text-align: unset;

            margin: 0 0 15px 0;

            font-size: 14px;

        }

        .stats-icon2 {

            border-radius: 50%;

            color: #fff;

            padding: 2px 5px 4px 10px;

            background: #05b10f;

        }
        .rept{
            margin-left: 133px;
        }
        .stats-icon3 {

            border-radius: 50%;

            color: #fff;

            padding: 2px 5px 4px 10px;

            background: #8005b1;

        }

        .dm-p {

            font-size: 15px;

            color: #808080;

        }

        .social-li {

            list-style-type: none;

            margin: 5px;

        }

        .soci {

            font-size: 27px;

            color: #0866ff;

        }

        .soci:hover {

            color: #1dd5f1;

        }

        .reply-overlay {
            width: 100%;
            border: 1px solid #c7c7c7;
            height: 50px;
            border-radius: 3px;
            cursor: text;
            margin-bottom: 20px;
            color: #171818;
            padding: 10px 1px 0px 19px;
            margin-top: 8px;
            z-index: 9;
            display: block;
            position: relative;
            background: #ffff;
        }

        .comment {
            color: #b3b3b3;
            margin-left: 5px;
        }

        .like {
            color: #b3b3b3;
            margin-left: 5px;
        }

        .comment .icon {
            margin-right: 5px;
        }

        .like .icon {
            margin-right: 5px;
        }

        .name-preview {
            display: block;
            color: #656268;
            font-size: 0.9em;
            text-transform: uppercase;
            padding-bottom: 10px;
        }

        .avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
        }

        .single-thread .items-thread {
            min-height: 70px;
            height: auto !important;
        }

        .f-floatleft {
            float: left;
            width: 80px;
            text-align: center;
            margin-right: 18px;
            position: absolute;
        }

        .single-thread .f-floatright {
            margin-left: 90px;
        }

        .f-floatright {
            margin-left: 78px;
            word-wrap: break-word;
        }

        /* end */

        .d-flex {
            display: flex !important;
        }
    </style>

</head>



<body>





    <!-- header -->

    @include('include.header')



    <section class="dharma">

        <div class="container">

            <div class="row">

                <div class="col-md-9">
                    <div class="nee text-center">
                        <div class="ul d-flex mb-3">
                            <li class="thread1-li"><input type="name" class="thread-input" placeholder="search...."> </li>
                            <li class="thread1-li search"><a href="" contenteditable="false" style="cursor: pointer;"> <i class="fa fa-search"></i></a></li>
                        </div>
                        <div class="tog" style="float: right;margin: -50px 0 0 0;">
                            <li class="thread-li"><a href="" data-toggle="modal" data-target="#exampleModal" contenteditable="false" style="cursor: pointer;"> <i class="fa fa-plus"></i> Following</a></li>
                        </div>
                    </div>

                    <div class="d-flex mb-4 pro reply">
                    </div>


                    <div class="d-flex mb-4 pro">

                        <div class="col-2 mr-1">

                            <div class="orthodepart-icon">

                                <a href="#"><img src="{{env('MAIN_URL')}}public/assets/images/audio/dhm1.png" width="80%"></a>

                            </div>

                        </div>

                        <div class="col-10" style="align-self:center;">
                            <div class="text-search">
                                <div class="input-container">
                                    <input class="inp-title" id="thread_title" maxlength="90" name="post_title" type="" autocomplete="off" placeholder="Click here to start your discussion...." onclick="showElement()">
                                </div>

                            </div>
                        </div>

                    </div>



                    <div class="con-hd" id="con-hd" style="display:none;">
                        <from>
                            <textarea class="form-control">
                            </textarea>
                        </from>
                        <div class="row mt-3 mb-3">
                            <div class="col-md-6 mb-3">
                                <div class=""><a href="#" class="def-anc" onclick="preclick(event)"><i class="fa fa-eye" style="background: #001fff;color: #fff;padding: 7px;border-radius: 9px;margin: 0 6px 0px 0px;"></i>Show Preview</a></div>
                            </div>
                            <div class="col-md-6">
                                <ul class="d-flex">
                                    <li class="" style="list-style-type: none;"><a href="" contenteditable="false" style="cursor: pointer;background: #a50b28;color: #fff;padding: 11px;border-radius: 10px;margin: 5px;">Reply</a></li>
                                    <li class="" style="list-style-type: none;"><a href="" id="cancel-btn" contenteditable="false" style="cursor: pointer;cursor: pointer;background: red;color: #fff;padding: 11px;border-radius: 10px;">X</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row mb-5 ">
                            <div id="thread_preview" class="reply-preview" style="display: none;">
                                <div class="name-preview">YOUR PREVIEW</div>
                                <div class="reply-item items-thread clearfix preview-item">
                                    <div class="f-floatleft">
                                        <img src="https://secure.gravatar.com/avatar/?s=64&amp;d=identicon&amp;r=g" class="avatar" alt="">
                                    </div>
                                    <div class="f-floatright">
                                        <div class="post-display">
                                            <div class="post-information">
                                                <div class="name">
                                                    <span class="user-action">
                                                        <span class="comment "><span class="icon" data-icon="w"><i class="fa fa-comment" style="font-size: 18px;"></i></span>1</span>
                                                        <span class="like "><span class="icon" data-icon="k"><i class="fa fa-heart" style="font-size: 18px;"></i></span>0</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="text-detail content"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-3">

                    <div class="stats mb-3">

                        <h2 class="stat-head mb-3">STATS</h2>

                        <p><i class="fa fa-users stats-icon" aria-hidden="true"></i><span class="stats-mem">2022 MEMBERS</span></p>

                        <p><i class="fa fa-book stats-icon" aria-hidden="true"></i><span class="stats-mem">2022 THREADS</span></p>

                        <p><i class="fa fa-pencil stats-icon" aria-hidden="true"></i><span class="stats-mem">2022 REPLIES</span></p>



                    </div>



                    <div class="stats mb-3">

                        <h2 class="stat-head mb-3">LATEST QUERIES</h2>

                        <p class="mmm"><span>1.</span><span class="stats-mem">Vaishnava lakshanam - Aatma Sakshatkaaram</span></p>

                        <p class="mmm"><span class="stats-icon1">2.</span><span class="stats-mem">Brahmam, Jiva and Jadam</span></p>

                        <p class="mmm"><span class="stats-icon2">3.</span><span class="stats-mem">Kshamikavum clarification for viewssamasreyanam vs Tatto</span></p>

                        <p class="mmm"><span class="stats-icon2">4.</span><span class="stats-mem">Why vaali is seen as Animal for killing reason! Not for his living</span></p>

                        <p class="mmm"><span class="stats-icon3">5.</span><span class="stats-mem"> Kinchit Dharma Sandeha - 1st in Google ranking</span></p>





                    </div>



                    <div class="stats mb-3">

                        <h2 class="stat-head mb-3">CATEGORIES</h2>

                        <p class="mmm"><span><img src="{{env('MAIN_URL')}}public/assets/images/audio/green.webp"></span><span class="stats-mem">General</span></p>

                        <p class="mmm"><span><img src="{{env('MAIN_URL')}}public/assets/images/audio/grey.webp"></span><span class="stats-mem">Holy Books </span></p>

                        <p class="mmm"><span><img src="{{env('MAIN_URL')}}public/assets/images/audio/red.webp"></span><span class="stats-mem">Aswars</span></p>

                        <p class="mmm"><span><img src="{{env('MAIN_URL')}}public/assets/images/audio/rectangle.webp"></span><span class="stats-mem">Karma</span></p>

                        <p class="mmm"><span><img src="{{env('MAIN_URL')}}public/assets/images/audio/green.webp"></span><span class="stats-mem"> Avatars</span></p>

                        <p class="mmm"><span><img src="{{env('MAIN_URL')}}public/assets/images/audio/grey.webp"></span><span class="stats-mem"> Festivals</span></p>

                        <p class="mmm"><span><img src="{{env('MAIN_URL')}}public/assets/images/audio/red.webp"></span><span class="stats-mem"> Goddess</span></p>

                        <p class="mmm"><span><img src="{{env('MAIN_URL')}}public/assets/images/audio/rectangle.webp"></span><span class="stats-mem"> Daily Rituals and Practice</span></p>

                        <p class="mmm"><span><img src="{{env('MAIN_URL')}}public/assets/images/audio/green.webp"></span><span class="stats-mem"> Good qualities for human</span></p>

                        <p class="mmm"><span><img src="{{env('MAIN_URL')}}public/assets/images/audio/grey.webp"></span><span class="stats-mem"> Divyadesams</span></p>

                        <p class="mmm"><span><img src="{{env('MAIN_URL')}}public/assets/images/audio/red.webp"></span><span class="stats-mem"> Acharyas</span></p>



                    </div>

                </div>

            </div>

        </div>



    </section>







    <!-- START FOOTER -->

    @include('include.footer')


    <!-- hitwebcounter Code START -->





    <!-- END FOOTER -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>



    <script>
        $('textarea#summernote').summernote({

            placeholder: 'Hello bootstrap 4',

            tabsize: 2,

            height: 100,

            toolbar: [

                ['style', ['style']],

                ['font', ['bold', 'italic', 'underline', 'clear']],

                ['color', ['color']],

                ['para', ['ul', 'ol', 'paragraph']],

                ['height', ['height']],

                ['table', ['table']],

                ['insert', ['link', 'picture', 'hr']],

                ['help', ['help']]

            ],

        });
    </script>
    <script>
        function showElement() {
            var element = document.getElementById("con-hd");
            element.style.display = "block";
        }
    </script>

    <script>
        document.getElementById("cancel-btn").onclick = function() {
            var content = document.getElementById("con-hd");
            if (content.style.display === "none" || content.style.display === "") {
                content.style.display = "block";
            } else {
                content.style.display = "none";
                content.innerHTML = '';
            }
        };
    </script>

    <script>
        function preclick(event) {
            event.preventDefault();
            var element = document.getElementById("thread_preview");

            if (element.style.display === "none") {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
            //   element.style.display = "block";
        }

        $(function() {
            replyList();
        });

    function replyList() {
    const url = '{{$id}}';
    var formdata = new FormData();
    formdata.append('token', getCookie('token'));
    formdata.append('device_id', '1');
    formdata.append('type', 'reply');
    formdata.append('url', url);

    $.ajax({
        type: 'post',
        url: "{{ env('API_URL') }}get-replies",
        data: formdata,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response['status'] == 200) {
                var data = response['data'][0]; // Accessing the first element of the data array
                // var userImage = data.guid ? `http://kinchit-admin.senthil.in.net/public/${data.guid}` : 'assets/images/kalakshepam/nammazhwar.jpg';
                var updatedAt = new Date(data.updated_at).toLocaleDateString('en-US', {
                    month: 'long',
                    day: 'numeric',
                    year: 'numeric'
                });
                // var userImage = data['userdetails'] && data['userdetails'][0] && data['userdetails'][0]['user_image'] ? data['userdetails'][0]['user_image'] : null;
                // var imageSrc = userImage ? userImage : "{{ env('MAIN_URL') }}public/assets/images/audio/dhm2.jpg";


                var html = `
                <div class="row">
                <div class="col-2 mr-1">

                <div class="orthodepart-icon">

                    <a href="#"><img src="{{env('MAIN_URL')}}public/assets/images/audio/dhm1.png" width="80%" class="mt-5"></a>

                </div>

                </div>
                    <div class="col-10 ">
                        <a href="" class="def-anc">
                            <h3 class="orthodepart-sub-head ">${data.post_title}<span class="times-create">Updated on ${updatedAt}</span></h3>
                        </a>
                        <hr>
                        <div class="mt-4">
                            <p>${data.post_content}</p>
                        </div>
                    </div>
                    <ul class="d-flex social-icons">
                        <li class="social-li"><a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fsharer%2Fsharer.php%3Fu%3Dhttps%253A%252F%252Fwww.kinchit.org%252Fdharma-sandeha%252Fthread%252Fvipassana-meditation%252F%26t%3DVipassana%2Bmeditation%253F%26quote&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=en_GB"><i class="fa fa-facebook-official soci" aria-hidden="true"></i></a></li>
                        <li class="social-li"><a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fintent%2Ftweet%3Ftext%3DVipassana%2520meditation%253F%2520https%253A%252F%252Fwww.kinchit.org%252Fdharma-sandeha%252Fthread%252Fvipassana-meditation%252F"><i class="fa fa-twitter-square soci" aria-hidden="true"></i></a></li>
                        <li class="social-li"><a href="https://www.kinchit.org/dharma-sandeha/thread/vipassana-meditation/"><i class="fa fa-plus-square soci" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="row mt-3 reply-text">
                        <div class="col-6">
                            <a href="#" class="rept"><i class="fa fa-commenting"></i> Reply</a>
                        </div>
                    </div>
                </div>`;

                $('.reply').html(html);
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
            console.log('AJAX Error:', error);
        }
    });
}

    </script>
</body>



</html>