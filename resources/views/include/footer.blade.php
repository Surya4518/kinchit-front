<!-- START FOOTER -->



<style>
    .sticky-icon {

        z-index: 1;

        position: fixed;

        top: 45%;

        right: 0%;

        width: 220px;

        display: flex;

        flex-direction: column;
    }

    .sticky-icon a {

        transform: translate(160px, 0px);

        border-radius: 50px 0px 0px 50px;

        text-align: left;

        margin: 2px;

        text-decoration: none;

        text-transform: uppercase;

        padding: 10px;

        font-size: 14px;

        font-family: 'Oswald', sans-serif;

        transition: all 0.8s;
    }

    .sticky-icon a:hover {

        color: #FFF;

        transform: translate(0px, 0px);
    }

    .sticky-icon a:hover i {

        transform: rotate(360deg);
    }

    /*.search_icon a:hover i  {

	transform:rotate(360deg);}*/

    .Facebook {

        background-color: #2C80D3;

        color: #FFF;
    }



    .Youtube {

        background-color: #fa0910;

        color: #FFF;
    }



    .Twitter {

        background-color: #53c5ff;

        color: #FFF;
    }



    .Instagram {

        background-color: #FD1D1D;

        color: #FFF;
    }



    .Google {

        background-color: #d34836;

        color: #FFF;
    }

    .sticky-icon a i {

        background-color: #FFF;

        height: 40px;

        width: 40px;

        color: #eb1010;

        text-align: center;

        line-height: 40px;

        border-radius: 50%;

        margin-right: 20px;

        font-size: 20px;

        transition: all 0.5s;
    }

    .sticky-icon a i.fa-facebook-f {

        background-color: #FFF;

        color: #2C80D3;

        font-size: 20px;

    }



    .sticky-icon a i.fa-google-plus-g {

        background-color: #FFF;

        color: #d34836;

        font-size: 20px;

    }



    .sticky-icon a i.fa-instagram {

        background-color: #FFF;

        color: #FD1D1D;

        font-size: 20px;

    }



    .sticky-icon a i.fa-youtube {

        background-color: #FFF;

        color: #fa0910;

        font-size: 20px;

    }



    .sticky-icon a i.fa-twitter {

        background-color: #FFF;

        color: #53c5ff;

        font-size: 20px;

    }

    .fas fa-shopping-cart {

        background-color: #FFF;



    }

    #myBtn {

        height: 50px;

        display: none;

        position: fixed;

        bottom: 20px;

        right: 30px;

        z-index: 99;

        text-align: center;

        padding: 10px;

        text-align: center;

        line-height: 40px;

        border: none;

        outline: none;

        background-color: #1e88e5;

        color: white;

        cursor: pointer;

        border-radius: 50%;

    }

    .fa-arrow-circle-up {

        font-size: 30px;
    }



    #myBtn:hover {

        background-color: #555;

    }
    .sticky-icon{
        display:none;
    }
</style>

<footer class="bg_dark footer_dark">

    <p style="position:absolute; left: 0; right: 0; bottom:486px; text-align: center;" class="footlogo"><img
            src="{{ env('MAIN_URL') }}public/assets/images/loading_logo.png" style=" margin:0 auto; text-align: center; width:20%;"></p>

    <div class="top_footer">

        <div class="container">

            <div class="row">



                <!-- <div class="col-lg-4 col-sm-5 mb-4 mb-lg-0">

                    <h5 class="widget_title">Services</h5>

                    <ul class="list_none widget_links links_style2"  style="list-style: none !important;">

                        <li><a href="maintanence-historical-places.php"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Maintenance of Historical Sites</a></li>

                        <li><a href="sanskrit-dravida-vedas.php"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Sanskrit & Dravida Vedas</a></li>

                 

                 <li><a href="#"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Abhyasa Kendra</a></li>

                 

                 <li><a href="#"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Goshala</a></li>

                 

                 <li><a href="#"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Yatra</a></li>

                 

                 <li><a href="#"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Gnanakaithaa</a></li>

                 

                 <li><a href="publications.php"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Publications</a></li>

                 

                 

                    </ul>

                </div> -->

                <!-- <div class="col-lg-4 col-sm-5 mb-4 mb-lg-0">

                    <h5 class="widget_title">Quick Links</h5>

                    <ul class="list_none widget_links links_style2" style="list-style: none !important;">







                        <li><a href="https://senthil.in.net/kinchit/"><i class="fa fa-angle-right"
                                    style="padding-right:10px;"></i>Home</a></li>

                        <li><a href="become-a-member.php"><i class="fa fa-angle-right"
                                    style="padding-right:10px;"></i>Become a Member</a></li>



                        <li><a href="become-a-volunteer.php"><i class="fa fa-angle-right"
                                    style="padding-right:10px;"></i>Apply to be a Volunteer</a></li>

                        <li><a href="audio.php"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Audio</a>
                        </li>



                        <li><a href="vedio.php"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Video</a>
                        </li>



                        <li><a href="en-pani.php"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Kinchit
                                En PaNi - App Satsang</a></li>





                        <li><a href="https://senthil.in.net/lakshmi_kalyanam/index.php"><i class="fa fa-angle-right"
                                    style="padding-right:10px;"></i>Lakshmi Kalyanam</a></li>



                        <li><a href="dharmasandheha.php"><i class="fa fa-angle-right"
                                    style="padding-right:10px;"></i>Dharma Sandeha</a></li>



                        <li><a href="contact.php"><i class="fa fa-angle-right"
                                    style="padding-right:10px;"></i>Contact</a></li>









                    </ul>

                </div> -->


   <div class="col-lg-4 col-sm-5 mb-4 mb-lg-0">

                    <h5 class="widget_title">Information</h5>

                    <ul class="list_none widget_links links_style2"  style="list-style: none !important;">
                        <li><a href="/about"><i class="fa fa-angle-right" style="padding-right:10px;"></i>About Us</a></li>
                        <li><a href="/contact"><i class="fa fa-angle-right" style="padding-right:10px;"></i> Contact Us</a></li>
                       <li><a href="/successstory"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Success Stories</a></li>
                       <li><a href="/faq"><i class="fa fa-angle-right" style="padding-right:10px;"></i>FAQ</a></li>
                        <li><a href="/complaint"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Report Abuse</a></li>
                        <li><a href="/disclaimer"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Disclaimer</a></li>
                        <li><a href="/privacy-policy"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Privacy Policy</a></li>
                         <li><a href="/terms-conditions"><i class="fa fa-angle-right" style="padding-right:10px;"></i>Terms & Condition</a></li>
                    </ul>

                </div>
                
                  <div class="col-lg-4 col-md-5">

                    <h5 class="widget_title">Contact Info</h5>

                    <ul class="contact_info list_none">


                        <h5>Kinchitkaram Trust</h5>
      <li>

             <span class="fa fa-map-marker " style="color:#fff;"></span>
 <address>


                                Old No 6, Bheemasena Garden Street, Mylapore,<br>

                                Chennai – 600 004. Tamilnadu, India.

                            </address>

                        </li>

                        <li>

                            <span class="fa fa-phone" style="color:#fff;"></span>

                            <p style="font-size:16px;"> 044 - 24992728</p>

                        </li>

                        <li>
                            
                              <span class="fa fa-envelope" style="color:#fff;"></span>
    <a href="mailto:kinchitkaram@yahoo.co.in" contenteditable="false" style="cursor: pointer;">kinchitkaram@yahoo.co.in</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-4 col-sm-5 mb-4 mb-lg-0">

<ul class="contact_info list_none">
<h5>Lakshmi Kalyanam</h5>
<li>
    <span class="fa fa-phone" style="color:#fff;"></span>
    <p style="font-size:16px;">  044 2499 2728
                        </p>
</li>

<li>
    <span class="fa fa-envelope" style="color:#fff;"></span>
    <a href="mailto:lakshmikalyanam@kinchit.org" contenteditable="false" style="cursor: pointer;">lakshmikalyanam@kinchit.org</a>
</li>

</ul>
</div>

              

            </div>

        </div>

    </div>

    <div class="container">

        <div class="row align-items-center">

            <div class="col-12">

                <div class="bottom_footer border_top_transparent">

                    <div class="row">

                        <div class="col-md-12">

                            <p class="copyright m-md-0 text-center text-md-center">Copyrights © 2023 - Kinchitkaram
                                Trust. All Rights Reserved.

                                <!--<a href="#" target="_blank" style="color:#000;">Disclaimer.</a>-->

                            </p>

                        </div>



                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="shape_img">

        <div class="ol_shape10">

            <img src="{{ env('MAIN_URL') }}public/assets/images/shape10.png" alt="shape36"/>

        </div>

    </div>



    <div class="sticky-icon">

        <a href="donation" class="Instagram"><i class="fa fa-money" aria-hidden="true"></i>Online Donation </a>

        <a href="https://www.facebook.com/466957886688797?ref=embed_page" class="Facebook"><i class="fab fa-facebook-f">
            </i> Facebook </a>

        <!-- <a href="https://aboutme.google.com/u/0/?referer=gplus" class="Google"><i class="fab fa-google-plus-g"> </i> Google + </a>

   <a href="https://www.youtube.com/" class="Youtube"><i class="fab fa-youtube"></i> Youtube </a>

   <a href="https://twitter.com/login" class="Twitter"><i class="fab fa-twitter"> </i> Twitter </a>     -->

    </div>



</footer>