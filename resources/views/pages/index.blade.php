@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- Swiper -->
        <div class="sliderWrap">
            <div class="col-sm-4 featured-merchants">
                <div class="center-block plaunch">
                    <h3><i class="fa fa-arrow-circle-right"></i> Latest product launch</h3>
                    <img src="{{asset('assets/images/021317-jcpv2-quad.jpg')}}" alt=""/></div>
                @if($data['featuredStore'])
                    <ul class="list-inline fmerchants">
                        @foreach($data['featuredStore'] as $store)
                            <li>
                                <a href="{{ $store['merchantURL'] }}">
                                    <img src="{{$store['merchantLogo']}}" alt="{{$store['merchantName']}}"/>
                                    <div class="text-center"><em>{{$store['merchantCouponCount']}} coupons</em></div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="col-sm-8">
                <div class="slider_outer">
                    <div id="owl-carouselSlide">
                        @if(isset($data['slider']))
                            @foreach($data['slider'] as $slider)
                                <div>
                                    <img src="{{asset($slider['sliderImage'])}}"
                                         class="img-responsive" alt=""/>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="carousel-tabs hidden-xs">
                        @if($data['slider'])
                            @foreach($data['slider'] as $slider)
                                <a tab href="#{{$slider['sliderID']}}" class="col-sm-3 active">
                                    <h4>{{$slider['sliderTitle']}}</h4>
                                    <p>{{$slider['sliderCaption']}}</p>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- //  Slider  -->
    <!-- // Find the latest promotional codes and vouchers -->
    <div class="container-fluid step123">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Steps to Earn Cashback <i class="fa fa-arrow-circle-o-right"></i></h3>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="badge">1</div>
                    <img src="{{asset('assets/images/Shopping-Cart-03.png')}}" width="256" height="256" alt="">
                    <h4>Signup/Login</h4>
                    <p>with XY</p>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="badge">2</div>
                    <img src="{{asset('assets/images/active-search-2-xxl.png')}}" width="256" height="256" alt="">
                    <h4>Search your store</h4>
                    <p>Click on earn cashback</p>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="badge">3</div>
                    <img src="{{asset('assets/images/indian-rupee-xxl.png')}}" width="256" height="256" alt="">
                    <h4>Shop on the your searched website</h4>
                    <p> & pay amount/COD</p>
                </div>
            </div>
            <!-- //row -->
        </div>
        <!-- //container -->
    </div>
    <div class="container-fluid hot_coupons">
        <div class="container">
            <div class="col-md-12">
                <h2 class="separator-header separator-header2"><span>Cashback Offers</span></h2>
            </div>
            @if($data['featuredCoupons'])
                @foreach($data['featuredCoupons'] as $coupon)
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail text-center bg-hover">
                            <div class="styleimg"><img src="{{asset($coupon['couponMerchantLogo'])}}" width="200"
                                                       height="100" alt=""/></div>
                            <div class="cboxsq-head">30 Uses Today</div>
                            <div class="clearfix"></div>
                            <h3>{{ $coupon['couponTitle'] }}</h3>
                            <a id="{{ $coupon['couponUID'] }}"
                               href="javascript:void(0)"
                               class="btn btn-primary getO hvr-bounce-to-right xy-cpn-get"
                               data-title="{{ $coupon['couponTitle'] }}"
                               data-cpnid="{{ $coupon['couponID'] }}"
                               data-type="{{ $coupon['couponType'] }}"
                               data-cpn-merchant="{{ $coupon['couponMerchantID'] }}"
                               data-cpn-expire="{{ $coupon['couponExpire'] }}"
                               data-user-type="{{ Auth::guest() ? "nl" : "l" }}">Get
                                @if($coupon['couponType'] == 'Coupon')
                                    Coupon
                                @else
                                    Deal
                                @endif
                            </a>
                            <h6><a href="{{$coupon['couponMerchantURL']}}"><i class="fa fa-eye"></i> See
                                    All {{$coupon['couponMerchantName']}} Offers</a></h6>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="col-md-12 seeWarp"><a href="#" class="btn btn-default">View All Stores</a></div>
            <!--  // See all Button -->
        </div>
    </div>
    <!-- // Hot Coupons & Offers-->
    <section class="tdeals">
        <div class="container">
            <div class="col-md-12">
                <h2 class="separator-header separator-header2"><span><b>Live:</b> <em>Viral Deals</em></span></h2>
                <div class="clearfix"></div>
                <div class="owl-carousel-tbanner">
                    <div class="item"><img src="{{asset('assets/images/1-23dec2016u.jpg')}}" width="316" height="160"
                                           alt=""/></div>
                    <div class="item"><img src="{{asset('assets/images/10-23dec2016u.jpg')}}" width="316" height="160"
                                           alt=""/></div>
                    <div class="item"><img src="{{asset('assets/images/11-23dec2016u.jpg')}}" width="316" height="160"
                                           alt=""/></div>
                    <div class="item"><img src="{{asset('assets/images/3-23dec2016u.jpg')}}" width="316" height="160"
                                           alt=""/></div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section>
        <div class="container">
            <div class="col-md-12">
                @if($data['popularCategory'])
                    <h2 class="separator-header"><span>Select Your Product Category Wise</span></h2>
                    <div class="great-codes">
                        @foreach($data['popularCategory'] as $category)
                            <div class="col-md-3 col-sm-4 trad"><a href="{{ $category['categoryURL'] }}"><img
                                            src="{{asset( $category['categoryImage'] )}}" width="480"
                                            height="326" class="img-thumbnail"
                                            alt="Beauty"></a>
                                <div class="caption">{{$category['categoryName'] }}</div>
                            </div>
                        @endforeach
                    </div>
            @endif
            <!-- // great-deals   -->
            </div>
        </div>
    </section>
    <!-- // Best Offer  -->
@endsection

