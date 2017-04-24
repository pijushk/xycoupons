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
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-dialog.min.css')}}">
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
        <div class="col-md-3 col-sm-3 logo"><a href="#"><img src="{{asset('assets/images/logo.png')}}" alt=""/></a>
        </div>
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
        <div class="col-md-2 col-sm-3">
            @if(Auth::guest())
                <div class="dropdown">
                    <a class="btn btn-block btn-info dropdown-toggle" type="button" id="dropdownMenu"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        LOGIN / SIGNUP
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu" role="menu">
                        <li><a href="javascript:void(0)" class="lr-btn" data-type="2"><i
                                        class="fa fa-angle-double-right"></i> Login</a></li>
                        <li><a href="javascript:void(0)" class="lr-btn" data-type="1"><i
                                        class="fa fa-angle-double-right"></i> Register</a></li>
                    </ul>
                </div>
            @else
                <div class="dropdown">
                    <a class="btn btn-block btn-info dropdown-toggle" type="button" id="dropdownMenu"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        {{ Auth::user()->user_nicename }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu" role="menu">
                        <li><a href="{{ url('dashboard') }}" class="logout-btn"><i
                                        class="fa fa-angle-double-right"></i> Dashboard</a></li>
                        <li><a href="{{ url('logout') }}" class="logout-btn"><i
                                        class="fa fa-angle-double-right"></i> Logout</a></li>
                    </ul>
                </div>
            @endif
        </div>
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
                    <li><a href="{{ url('/') }}">Home</a></li>
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
            <div class="col-md-3 col-sm-5 text-center chext"><a href="#"><img
                            src="{{asset('assets/images/chrome-extension.png')}}" alt=""/></a>
            </div>
        </div>
    </div>
    <!-- // subWrap-->
    <div class="container">
        <div class="col-md-12 reserv_logo"><a href="#"><img src="{{asset('assets/images/logo.png')}}" width="124"
                                                            height="47" alt=""/></a>
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
@if(Auth::guest())
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content popWrap">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"><div
                                    class="cross"><a href="#"><i class="fa fa-times"></i></a></div></span></button>
                    <h4 class="modal-title" id="registerModalLabel">Signup For Free And Get Rs. 30 Cash Bonus</h4>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-md-12">
                        <form method="post" action="{{ url('/register') }}" id="register-form">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    {{ csrf_field() }}
                                    <input type="text" class="form-control" name="user_nicename" id=""
                                           placeholder="Enter User Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="user_email" id=""
                                           placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="mobile" id=""
                                           placeholder="Enter Mobile No">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password" id=""
                                           placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="">
                                    Update me on free coupons and savings</label>
                            </div>
                            <div class="form-group">
                                <button type="button"
                                        class="btn btn-primary btn-block login-button text-uppercase register-user-btn"
                                        style="margin-bottom:4px;">Sign Up
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <div class="center-block text-center">
                        <h5>Use Facebook or Google account to connect with Us</h5>
                        <div class="social-buttons"><a href="#" class="btn btn-sm btn-fb"><i class="fa fa-facebook"></i>
                                Facebook</a> <a
                                    href="#" class="btn btn-sm btn-gp"><i class="fa fa-google-plus"></i> Google Plus</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="center-block text-center"><a href="#" class="btn btn-default btn-block">Already have an
                            account? Login
                            Now</a></div>
                </div>
                <div class="modal-footer">
                    <div class="popFooter">
                        <h5> By joining, you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy
                                Policy</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content popWrap">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"><div
                                    class="cross"><a href="#"><i class="fa fa-times"></i></a></div></span></button>
                    <h4 class="modal-title" id="loginModalLabel">The Place Where You Get Best Coupons & Deals</h4>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-md-12">
                        <form method="post" action="{{ url('/login') }}" id="login-form">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    {{ csrf_field() }}
                                    <input type="text" class="form-control" name="user_email" id=""
                                           placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password" id=""
                                           placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button"
                                        class="btn btn-primary btn-block login-button text-uppercase login-user-button"
                                        style="margin-bottom:4px;">Sign In Now
                                </button>
                                <a href="#">Forgot Your Password?</a></div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <div class="center-block text-center">
                        <h5>Use Facebook or Google account to connect with Us</h5>
                        <div class="social-buttons"><a href="#" class="btn btn-sm btn-fb"><i class="fa fa-facebook"></i>
                                Facebook</a> <a href="#" class="btn btn-sm btn-gp"><i class="fa fa-google-plus"></i>
                                Google
                                Plus</a></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="center-block text-center"><a href="#" class="btn btn-default btn-block">Don't Have an
                            Account? SIGN UP TODAY!</a></div>
                </div>
                <div class="modal-footer">
                    <div class="popFooter">
                        <h5> By joining, you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy
                                Policy</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="modal fade" id="couponModal" tabindex="-1" role="dialog" aria-labelledby="couponModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content popWrap">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="couponModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h6 id="cpn-expire"></h6>
                </div>
                <hr>
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <button type="button" class="btn btn-primary btn-block login-button text-uppercase"
                            style="margin-bottom:4px;">Log in &amp; Get Code
                    </button>
                    Not registered? <a href="#">Sign Up</a>
                </div>
                <div class="clearfix"></div>
                <div class="text-center center-block">
                    <ul class="list-inline">
                        <li><a href="#" target="_blank" class="btn-social btn-outline"><i
                                        class="fa fa-fw fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank" class="btn-social btn-outline"><i
                                        class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li><a href="#" target="_blank" class="btn-social btn-outline"><i
                                        class="fa fa-fw fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="well text-center">
                    <h2>NO I don't want cashback</h2>
                    <h4><a href="#">Continue without Cash Back</a></h4>
                    <h6>*By joining, you agree to the Terms & Conditions and Privacy Policy. </h6>
                </div>
                <div class="center-block text-center"><a href="#" class="btn btn-default btn-block">View Cash Back and
                        FSON CASHBACK
                        Guidelines</a>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
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
<script src="{{asset('assets/js/bootstrap-dialog.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>