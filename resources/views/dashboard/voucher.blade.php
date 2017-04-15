@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('dashboard/voucher/history') }}" class="btn btn-primary pull-right" >Voucher History</a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Redeem Voucher</h4>
                            <p class="category">Redeem cashback using gift voucher</p>
                        </div>
                        <div class="card-content">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                        <span><b> Error - </b>
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </span>
                                </div>
                            @endif
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                        <span><b> Success - </b>
                                            {{ Session::get('success') }}
                                        </span>
                                </div>
                            @endif
                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                        <span><b> Error - </b>
                                            {{ Session::get('error') }}
                                        </span>
                                </div>
                            @endif
                            <form action="{{ url('dashboard/voucher/add') }}" method="post"
                                  enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            {{ csrf_field() }}
                                            <label class="control-label">Voucher Merchant</label>
                                            <select class="form-control" name="merchant">
                                                @foreach($data['voucherMerchant'] as $merchant)
                                                    <option value="{{ $merchant->id }}">{{ $merchant->merchant_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Amount</label>
                                            <input class="form-control" type="number" name="amount"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Mobile</label>
                                            <input type="text" class="form-control" name="mobile"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input type="text" class="form-control" name="email"/>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Redeem</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection