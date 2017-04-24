@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">settings_cell</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Recharge</p>
                            <h3 class="title">{{ $data['wallet'] }}<small></small></h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a href="{{ url('dashboard/recharge') }}" class="btn btn-primary">Redeem Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">card_giftcard</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Gift Voucher</p>
                            <h3 class="title">{{ $data['wallet'] }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a href="{{ url('dashboard/voucher') }}" class="btn btn-primary">Redeem Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">account_balance</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Bank Transfer</p>
                            <h3 class="title">{{ $data['wallet'] }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a href="{{ url('dashboard/bank-transfer') }}" class="btn btn-primary">Redeem Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection