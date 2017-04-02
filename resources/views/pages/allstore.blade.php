@extends('layouts.app')
@section('content')
    <!-- Mid Section START  -->
    <section class="categories">
        <div class="container">
            <div class="col-md-12">
                <h2 class="separator-header"><span><b>Popular</b> <em>Categories</em></span></h2>

                <ul class="ac-prom list-inline">
                    <li>
                        <div class="psl-b"><a href="#" title="Paytm"> <img
                                        src="{{asset('assets/images/logo-stroe/45.jpg')}}"
                                        alt="Paytm"> </a>
                            <p>144 Coupons</p>
                        </div>
                    </li>
                    <li>
                        <div class="psl-b"><a href="#" title="Paytm"> <img
                                        src="{{asset('assets/images/logo-stroe/amazon-coupons-110x50.jpg')}}"
                                        alt="Paytm"> </a>
                            <p>81 Coupons</p>
                        </div>
                    </li>
                    <li>
                        <div class="psl-b"><a href="#" title="Paytm"> <img
                                        src="{{asset('assets/images/logo-stroe/ebay.com_coupons_promo_codes.jpg')}}"
                                        alt="Paytm"> </a>
                            <p>13 Coupons</p>
                        </div>
                    </li>
                    <li>
                        <div class="psl-b"><a href="#" title="Paytm"> <img
                                        src="{{asset('assets/images/logo-stroe/1168.jpg')}}"
                                        alt="Paytm">
                            </a>
                            <p>46 Coupons</p>
                        </div>
                    </li>
                    <li>
                        <div class="psl-b"><a href="#" title="Paytm"> <img
                                        src="{{asset('assets/images/logo-stroe/yepme-coupons_logo_4.png')}}"
                                        alt="Paytm"> </a>
                            <p>72 Coupons</p>
                        </div>
                    </li>
                </ul>
            </div>
            @if(isset($data['storeData']))
                <div class="col-md-12">
                    <h2 class="separator-header"><span><b>All</b> <em>Stores</em></span></h2>
                    <ul class="pagination">
                        <li class="active"><a href="#">#</a></li>
                        @foreach(range('A', 'Z') as $term)
                            <li ><a href="{{ url('stores/'.strtolower($term)) }}">{{ $term }}</a></li>
                        @endforeach
                    </ul>
                    <!-- //pagination-->
                    <ul class="ac-prom list-inline">
                        @foreach($data['storeData'] as $store)
                            <li>
                                <div class="psl-b"><a href="{{ $store['merchantURL'] }}"
                                                      title="{{ $store['merchantName'] }}"> <img
                                                src="{{ $store['merchantLogo'] }}"
                                                alt="{{ $store['merchantName'] }}"> </a>
                                    <p>{{ $store['merchantCouponCount'] }} Coupons</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- //All Categories-->
            @endif
        </div>
    </section>
    <!-- Mid Section END  -->
@endsection