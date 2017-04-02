<?php
/**
 * Created by PhpStorm.
 * User: pijush
 * Date: 14-03-2017
 * Time: PM 11:44
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XY-Coupons</title>
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- theme stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/meanmenu.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/scrollToTop.css')}}">
    <link href="{{asset('assets/plugins/owl/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/owl/owl.theme.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">
</head>
<body>
<div class="get"><a href="$"><img src="{{asset('assets/images/get.png')}}" width="30" height="101" alt=""/></a></div>

<!-- Header START  -->
<header>
    <div class="container-fluid top-bar">
        <div class="container">
            <div class="col-md-5 col-sm-6 col-sm-offset-6 col-md-offset-7">
                <ul class="list-inline text-right centerB">
                    <li><a href="#"><i class="fa fa-lightbulb-o"></i> How it works?</a></li>
                    <li><a href="#"><i class="fa fa-bolt"></i> All stores</a></li>
                    <li><a href="#"><i class="fa fa-user"></i> Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- // top-bar -->
    <div class="container">
        <div class="col-md-3 col-sm-3 logo"><a href="#"><img src="{{asset('assets/images/logo.png')}}" alt=""/></a></div>
        <div class="col-md-7 col-sm-6">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg"
                           placeholder="Search favourite stores eg:Flipkart,Snapdeal..."/>
          <span class="input-group-btn">
          <button class="btn btn-info btn-lg" type="button"> <i class="fa fa-search"></i> </button>
          </span></div>
            </div>
        </div>
        <div class="col-md-2 col-sm-3"><a href="#" class="btn btn-block btn-info"><i class="fa fa-sign-in"></i> LOGIN /
                SIGNUP</a></div>
    </div>
    <!-- // Container  -->
    <!-- START menu -->
    <nav class="navbar navbar-default hidden-xs hidden-sm">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span></button>
                <a class="navbar-brand visible-xs" href="#">Menu</a></div>
            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Deal of the day</a></li>
                    <li class="active dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Top
                            Categories<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Travelguru</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Flipkart</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> ShopClues</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Myntra</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Refern n earn</a></li>
                    <li class="pull-right"><a href="#"><i class="fa fa-diamond"></i> Steps to earn cashback</a></li>
                </ul>
            </div>
        </div>
        <!-- /.nav-collapse -->
    </nav>
    <!-- END menu -->
    <!-- Start Mobile-menu -->
    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="container">
            <div class="col-xs-12">
                <nav id="mobile-menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Deal of the day</a></li>
                        <li><a href="index.html">Top Categories</a>
                            <ul>
                                <li><a href="#">Shoppers Stop</a></li>
                                <li><a href="#">Foodpanda</a></li>
                                <li><a href="#">Zovi</a></li>
                                <li><a href="#">Jabong</a></li>
                                <li><a href="#">Makemytrip</a></li>
                                <li><a href="#">Limeroad</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Refern n earn</a></li>
                        <li><a href="#">All Stores</a></li>
                        <li><a href="#"><i class="fa fa-diamond"></i> Steps to earn cashback</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Mobile-menu -->
</header>
<!-- Header END  -->
<!-- Mid Section START  -->
<section>
    @yield('content')
</section>
<!-- Footer START  -->
<footer>
    <div class="subWrap">
        <div class="container">
            <div class="col-md-5 col-sm-7">
                <form action="#">
                    <div class="input-group">
                        <input class="btn btn-lg" name="email" id="email" type="email" placeholder="Your Email"
                               required>
                        <button class="btn btn-info btn-lg" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-5 text-center fs">
                <ul class="list-inline">
                    <li><a href="#" target="_blank" class="btn-social btn-outline" title="facebook"><i
                                    class="fa fa-fw fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank" class="btn-social btn-outline" title="google-plus"><i
                                    class="fa fa-fw fa-google-plus"></i></a></li>
                    <li><a href="#" target="_blank" class="btn-social btn-outline" title="twitter"><i
                                    class="fa fa-fw fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank" class="btn-social btn-outline" title="youtube"><i
                                    class="fa fa-youtube-play"></i></a></li>
                    <li><a href="#" target="_blank" class="btn-social btn-outline" title="instagram"><i
                                    class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-5 text-center chext"><a href="#"><img src="{{asset('assets/images/chrome-extension.png')}}" alt=""/></a>
            </div>
        </div>
    </div>
    <!-- // subWrap-->
    <div class="container">
        <div class="col-md-12 reserv_logo"><a href="#"><img src="{{asset('assets/images/logo.png')}}" width="124" height="47" alt=""/></a>
        </div>
    </div>
    <!--  //footer-stats  -->
    <div class="populartag">
        <div class="container">
            <div class="col-md-12">
                <h2 class="text-center">XY.com - Your Trsusted Friend for Online Shopping</h2>
            </div>
            <div class="col-sm-4 col-xs-6">
                <ul>
                    <li><a href="#">Cashback</a></li>
                    <li><a href="#">Who are We?</a></li>
                    <li><a href="#">Coupons</a></li>
                    <li><a href="#">Health Products</a></li>
                    <li><a href="#">Offline Offers</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-xs-6">
                <ul>
                    <li><a href="#">Term & Conditions</a></li>
                    <li><a href="#">Missing Claim</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Write to us</a></li>
                    <li><a href="#">How to use our website</a></li>
                    <li><a href="#">Problem facing</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-xs-6">
                <ul>
                    <li><a href="#">Carrer</a></li>
                    <li><a href="#">Advertisement</a></li>
                    <li><a href="#">Input deals for reatailers</a></li>
                    <li><a href="#">Share n earn</a></li>
                    <li><a href="#"> email ( <i class="fa fa-envelope"></i> ) care@xy.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-menu">
        <div class="container">
            <div class="col-md-6 text-center">
                <p>Copyright 2017 AWK-Solutions Coupon-Deal - All Rights Reserved</p>
            </div>
            <div class="col-md-6 text-center">
                <ul class="list-inline">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Privacy & Cookie Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END  -->
<a href="#" class="scrollToTop scrollToTop_cycle scrollToTop_show"></a>
<!-- *** SCRIPTS TO INCLUDE *** -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.js')}}"></script>
<script src="{{asset('assets/js/respond.min.js')}}"></script>
<!-- meanmenu JS ============================================ -->
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<!-- plugins JS ============================================ -->
<script src="{{asset('assets/plugins/owl/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/plugins/waypoints/sticky.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-scrollToTop.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>