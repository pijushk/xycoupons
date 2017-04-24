@extends('layouts.app')
@section('content')
    @if(isset($data['categoryData']))
        <!-- Mid Section START  -->
        <section>
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Categories</a></li>
                    <li class="active">{{ $data['categoryData']['categoryName'] }}</li>
                </ol>
            </div>
            <!-- //breadcrumb  -->
            <div class="container storeWrap">
                <div class="col-md-3 col-sm-4 storeL"><img src="{{ $data['categoryData']['categoryLogo'] }}"
                                                           class="img-responsive"
                                                           alt="{{ $data['categoryData']['categoryName'] }}"/>
                    <div class="pull-left rating"><a href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                    class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a
                                href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> 4.5
                        out of 5
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="thumbnail">
                        <h4>Filter by Store</h4>
                        <div class="imaginary_container">
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon">
            <button type="submit"> <i class="fa fa-search"></i> </button>
            </span></div>
                        </div>
                        <div class="cclue-filter-cont">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class=" cr-icon fa fa-circle"></i></span> travelkhana</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class=" cr-icon fa fa-circle"></i></span> nearbuy</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class=" cr-icon fa fa-circle"></i></span> behrouz
                                    biryani</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class=" cr-icon fa fa-circle"></i></span> paytm</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class=" cr-icon fa fa-circle"></i></span> pizzahut</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class=" cr-icon fa fa-circle"></i></span> dominos</label>
                            </div>
                        </div>
                    </div>
                    <!-- //Filter By Type  -->
                    <div class="thumbnail">
                        <h4>Filter By Bank</h4>
                        <div class="imaginary_container">
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon">
            <button type="submit"> <i class="fa fa-search"></i> </button>
            </span></div>
                        </div>
                        <div class="cclue-filter-cont">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class=" cr-icon fa fa-circle"></i></span> Mobikwik
                                    Wallet</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class=" cr-icon fa fa-circle"></i></span> Paytm Wallet</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class=" cr-icon fa fa-circle"></i></span> Freecharge
                                    Wallet</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class=" cr-icon fa fa-circle"></i></span> Idbi</label>
                            </div>
                        </div>
                    </div>
                    <!-- //Filter By Brand  -->
                    <div class="widget trending-coupons hidden-xs">
                        <!-- /widget heading -->
                        <div class="widget-heading">
                            <h3 class="widget-title text-dark"><i class="fa fa-bell"></i> Trending Coupons </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                            <div class="media cclue-cpn-shw" data-coupon="3901"
                                 data-href="affiliateshopclues.com/?a=5588&amp;c=69&amp;p=r&amp;s1&amp;s2=Clue&amp;s3=coupon&amp;ckmrdr=http://www.shopclues.com/computers/laptop-special/i3.html"
                                 data-type="Deals"
                                 data-storeurl="https://www.couponclue.com/shopclues-coupon-codes?c=3901"
                                 data-category="968">
                                <div class="media-left media-middle"><img
                                            src="https://admin.couponclue.com/ins-upload/full/1484567625_7394650.png"
                                            alt="shopclues"></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Save Up To 40% On Laptops</h4>
                                </div>
                            </div>
                            <!--/coupon media -->
                            <div class="media cclue-cpn-shw" data-coupon="5604"
                                 data-href="https://www.snapdeal.com/offers/deal-of-the-day?utm_source=aff_prog&amp;utm_campaign=afts&amp;offer_id=17&amp;aff_id=12933"
                                 data-type="Deals"
                                 data-storeurl="https://www.couponclue.com/snapdeal-coupon-codes?c=5604"
                                 data-category="966">
                                <div class="media-left media-middle"><img
                                            src="https://admin.couponclue.com/ins-upload/full/1485154559_9281681.png"
                                            alt="snapdeal"></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Snapdeal Offers Today - Get Up To 90% Off On Electronics,
                                        Mobile, Fashion &amp; More</h4>
                                </div>
                            </div>
                            <!--/coupon media -->
                            <div class="media cclue-cpn-shw" data-coupon="14"
                                 data-href="http://adzperform.go2cloud.org/aff_c?offer_id=8&amp;aff_id=1002&amp;url=https%3A%2F%2Fwww.tatacliq.com%2Fwomens-clothing-inner-nightwear-bras%2Fc-msh1014100%3Fcid%3Daf%3Aproducts%3Aadzperform%3Acps%3A10112016"
                                 data-type="Deals"
                                 data-storeurl="https://www.couponclue.com/tata-cliq-coupon-codes?c=14"
                                 data-category="1386">
                                <div class="media-left media-middle"><img
                                            src="https://admin.couponclue.com/ins-upload/full/1485162713_2924487.png"
                                            alt="tata cliq"></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Get Up To 70% Off On Women Bra</h4>
                                </div>
                            </div>
                            <!--/coupon media -->
                            <div class="media cclue-cpn-shw" data-coupon="754"
                                 data-href="https://www.amazon.in/electronics/b/ref=as_li_ss_tl?ie=UTF8&amp;node=976419031&amp;linkCode=ll2&amp;tag=wwwcouponclue-21&amp;linkId=0e6da24c84d419b680020496f079c936"
                                 data-type="Deals" data-storeurl="https://www.couponclue.com/amazon-coupon-codes?c=754"
                                 data-category="1">
                                <div class="media-left media-middle"><img
                                            src="https://admin.couponclue.com/ins-upload/full/1484560964_464047.png"
                                            alt="amazon"></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Amazon Electronics Sale - Get Up To 55% Off</h4>
                                </div>
                            </div>
                            <!--/coupon media -->
                        </div>
                        <!-- // widget body -->
                    </div>
                    <!-- //Trending Coupons  -->

                    <div class="center-block"><img src="{{asset('assets/images/amazon-hpromo02122016.jpg')}}"
                                                   width="100%" height="100%"
                                                   alt=""/></div>
                    <!-- //Add Banner  -->

                </div>

                <!-- //col-md-3  -->
                <div class="col-md-9 col-sm-8">
                    <h2><span>{{ $data['categoryData']['categoryName'] }}</span> codes & promo code
                        ({{ $data['categoryData']['categoryCouponCount'] }})</h2>
                    <div class="widget-body">
                        <div class="widget">
                            <ul class="nav responsive-tabs list-inline">
                                <li class="active"><a class="cclue-coupon-filter" data-ctype="all"><i
                                                class="fa fa-bar-chart"></i>All <span
                                                class="badge badge-info">{{ $data['categoryData']['couponData']['count']['dls'] + $data['categoryData']['couponData']['count']['cpn'] }}</span>
                                    </a></li>
                                <li class=""><a class="cclue-coupon-filter" data-ctype="cpn"><i
                                                class="fa fa-scissors"></i> Coupons <span
                                                class="badge badge-danger">{{ $data['categoryData']['couponData']['count']['cpn'] }}</span></a>
                                </li>
                                <li class=""><a class="cclue-coupon-filter" data-ctype="dl"><i
                                                class="fa fa-paperclip"></i>Deals <span
                                                class="badge badge-danger">{{ $data['categoryData']['couponData']['count']['dls'] }}</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @if(isset($data['categoryData']['couponData']['coupon']))
                        @foreach($data['categoryData']['couponData']['coupon'] as $coupon)
                            <div class="bg-danger bg-hover">
                                <div class="ofrpctg">
                                    <div class="thumbnail">
                                        <div class="pctgcell"><img src="{{ $coupon['couponMerchantLogo'] }}"
                                                                   alt=""/></div>
                                        <div class="nw-offtype">
                                            @if($coupon['couponType'] == 'Coupon')
                                                Coupon
                                            @else
                                                Deal
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="nw-offrtxt">
                                    <div class="titel">{{ $coupon['couponTitle'] }}</div>
                                    <p class="ofr-descptxt">{{ $coupon['couponDesc'] }}</p>
                                </div>
                                <div class="offr-lnks">
                                    <div class="nwcid-btn">
                                        <a id="{{ $coupon['couponUID'] }}"
                                           href="javascript:void(0)"
                                           class="hvr-bounce-to-right xy-cpn-get"
                                           data-title="{{ $coupon['couponTitle'] }}"
                                           data-cpnid="{{ $coupon['couponID'] }}"
                                           data-type="{{ $coupon['couponType'] }}"
                                           data-cpn-merchant="{{ $coupon['couponMerchantID'] }}"
                                           data-cpn-expire="{{ $coupon['couponExpire'] }}"
                                           data-user-type="{{ Auth::guest() ? "nl" : "l" }}">
                                            @if($coupon['couponType'] == 'Coupon')
                                                Get Coupon
                                            @else
                                                Get Deal
                                            @endif
                                        </a>
                                    </div>
                                    <div class="grdcpnsmllnks">
                                        <ul>
                                            <li><i class="fa fa-check-square"></i> Verified Offer</li>
                                            <li><i class="fa fa-eye"></i>
                                                <label>Offer used 14 mints ago</label>
                                            </li>
                                            <li><i class="fa fa-clock-o"></i> Valid
                                                till {{ $coupon['couponExpire'] }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  // bg-danger bg-hover -->
                        @endforeach
                    @endif
                    <div class="dynamic_text">
                        {!! $data['categoryData']['categoryDesc'] !!}
                    </div>
                </div>
                <!-- //col-md-9  -->
            </div>

            <!-- // Hot Coupons & Offers-->
            <div class="recentUsed">
                <div class="container">
                    <div class="col-md-12">
                        <h2 class="separator-header separator-header3"><span>Recently used offers</span></h2>
                    </div>
                    <div class="col-md-12">
                        <ul class="owl-carousel02">
                            <li class="recent-offers-ctr">
                                <div class="center-block">
                                    <h5><i class="fa fa-clock-o"></i> Used 3 mins ago</h5>
                                    <div class="thumbnail"><img src="{{asset('assets/images/logo-stroe/1168.jpg')}}"
                                                                width="200"
                                                                height="100" alt=""/></div>
                                    <h4>Flat 40% Off on First Order + Extra 15% MobiKwik Cashback</h4>
                                    <h5><i class="fa fa-user"></i>542 Uses Today</h5>
                                </div>
                            </li>
                            <!--  // li -->
                            <li class="recent-offers-ctr">
                                <div class="center-block">
                                    <h5><i class="fa fa-clock-o"></i> Used 4 mins ago</h5>
                                    <div class="thumbnail"><img
                                                src="{{asset('assets/images/logo-stroe/Abof-Logo-110x50.png')}}"
                                                width="110"
                                                height="50" alt=""/></div>
                                    <h4>Flat Rs.300 Extra Off On Rs.1195 & Above – On First Purchase Only</h4>
                                    <h5><i class="fa fa-user"></i>42 Uses Today</h5>
                                </div>
                            </li>
                            <!--  // li -->
                            <li class="recent-offers-ctr">
                                <div class="center-block">
                                    <h5><i class="fa fa-clock-o"></i> Used 3 mins ago</h5>
                                    <div class="thumbnail"><img src="{{asset('assets/images/logo-stroe/45.jpg')}}"
                                                                width="200" height="100"
                                                                alt=""/></div>
                                    <h4>Electronics Sale – Upto 60% Off On Wide Of Electronic Products</h4>
                                    <h5><i class="fa fa-user"></i>12 Uses Today</h5>
                                </div>
                            </li>
                            <!--  // li -->
                            <li class="recent-offers-ctr">
                                <div class="center-block">
                                    <h5><i class="fa fa-clock-o"></i> Used 33 mins ago</h5>
                                    <div class="thumbnail"><img
                                                src="{{asset('assets/images/logo-stroe/amazon-coupons-110x50.jpg')}}"
                                                width="110" height="50" alt=""/></div>
                                    <h4>Big Fashion Sale – Minimum 50% To 70% Off On Footwear, Clothing &
                                        Accessories</h4>
                                    <h5><i class="fa fa-user"></i>142 Uses Today</h5>
                                </div>
                            </li>
                            <!--  // li -->
                            <li class="recent-offers-ctr">
                                <div class="center-block">
                                    <h5><i class="fa fa-clock-o"></i> Used 23 mins ago</h5>
                                    <div class="thumbnail"><img
                                                src="{{asset('assets/images/logo-stroe/ebay.com_coupons_promo_codes.jpg')}}"
                                                width="114" height="114" alt=""/></div>
                                    <h4>Flat 7% Off Across The Site – No Minimum Purchase</h4>
                                    <h5><i class="fa fa-user"></i>242 Uses Today</h5>
                                </div>
                            </li>
                            <!--  // li -->
                            <li class="recent-offers-ctr">
                                <div class="center-block">
                                    <h5><i class="fa fa-clock-o"></i> Used 2 mins ago</h5>
                                    <div class="thumbnail"><img
                                                src="{{asset('assets/images/logo-stroe/jabong-coupons_logo_4.png')}}"
                                                width="148" height="111" alt=""/></div>
                                    <h4>Upto 80% + Extra 20% Off On Lifestyle Products – No Min. Purchase</h4>
                                    <h5><i class="fa fa-user"></i>2 Uses Today</h5>
                                </div>
                            </li>
                            <!--  // li -->
                            <li class="recent-offers-ctr">
                                <div class="center-block">
                                    <h5><i class="fa fa-clock-o"></i> Used 3 mins ago</h5>
                                    <div class="thumbnail"><img src="{{asset('assets/images/logo-stroe/1168.jpg')}}"
                                                                width="200"
                                                                height="100" alt=""/></div>
                                    <h4>Flat 20% Extra Off On First Purchase – Across The Site</h4>
                                    <h5><i class="fa fa-user"></i>602 Uses Today</h5>
                                </div>
                            </li>
                            <!--  // li -->
                            <li class="recent-offers-ctr">
                                <div class="center-block">
                                    <h5><i class="fa fa-clock-o"></i> Used 13 mins ago</h5>
                                    <div class="thumbnail"><img src="{{asset('assets/images/logo-stroe/111.jpg')}}"
                                                                width="200" height="100"
                                                                alt=""/></div>
                                    <h4>Flat Rs.800 Cashback On All Domestic Flights</h4>
                                    <h5><i class="fa fa-user"></i>342 Uses Today</h5>
                                </div>
                            </li>
                            <!--  // li -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- // RECENTLY USED OFFERS -->
        </section>
    @endif
@endsection