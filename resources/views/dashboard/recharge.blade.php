@extends('layouts.dashboard')
@section('content')
    <div class="content" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
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
                    <div class="card card-nav-tabs">
                        <div class="card-header" data-background-color="purple">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">Recharge:</span>
                                    <ul class="nav nav-tabs" data-tabs="tabs" id="rechargeTab">
                                        <li class="active">
                                            <a href="#prepaid" data-toggle="tab">
                                                <i class="material-icons">bug_report</i>
                                                PREPAID
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#postpaid" data-toggle="tab">
                                                <i class="material-icons">code</i>
                                                POSTPAID
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#dth" data-toggle="tab">
                                                <i class="material-icons">cloud</i>
                                                DTH
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#datacard" data-toggle="tab">
                                                <i class="material-icons">cloud</i>
                                                Datacard
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="tab-content">
                                <div class="tab-pane active" id="prepaid">
                                    <form action="{{ url('dashboard/do-recharge') }}" method="post"
                                          enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    {{ csrf_field() }}
                                                    <label class="control-label">Operator</label>
                                                    <select class="form-control" name="operator">
                                                        @if(isset($data['rechargeOperator']))
                                                            @foreach($data['rechargeOperator'] as $operator)
                                                                @if($operator->operator_type == "PREPAID")
                                                                    <option value="{{ $operator->operator_code }}">{{ $operator->operator_name }}</option>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mobile Number</label>
                                                    <input class="form-control" type="text" name="mobile"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Amount</label>
                                                    <input type="text" class="form-control" name="amount"/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Redeem</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="postpaid">
                                    <form action="{{ url('dashboard/do-recharge') }}" method="post"
                                          enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    {{ csrf_field() }}
                                                    <label class="control-label">Operator</label>
                                                    <select class="form-control" name="operator">
                                                        @if(isset($data['rechargeOperator']))
                                                            @foreach($data['rechargeOperator'] as $operator)
                                                                @if($operator->operator_type == "POSTPAID")
                                                                    <option value="{{ $operator->operator_code }}">{{ $operator->operator_name }}</option>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mobile Number</label>
                                                    <input class="form-control" type="text" name="mobile"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Amount</label>
                                                    <input type="text" class="form-control" name="amount"/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Redeem</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="dth">
                                    <form action="{{ url('dashboard/do-recharge') }}" method="post"
                                          enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    {{ csrf_field() }}
                                                    <label class="control-label">Operator</label>
                                                    <select class="form-control" name="operator">
                                                        @if(isset($data['rechargeOperator']))
                                                            @foreach($data['rechargeOperator'] as $operator)
                                                                @if($operator->operator_type == "DTH")
                                                                    <option value="{{ $operator->operator_code }}">{{ $operator->operator_name }}</option>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">DTH Number</label>
                                                    <input class="form-control" type="text" name="mobile"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Amount</label>
                                                    <input type="text" class="form-control" name="amount"/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Redeem</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="datacard">
                                    <form action="{{ url('dashboard/do-recharge') }}" method="post"
                                          enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    {{ csrf_field() }}
                                                    <label class="control-label">Operator</label>
                                                    <select class="form-control" name="operator">
                                                        @if(isset($data['rechargeOperator']))
                                                            @foreach($data['rechargeOperator'] as $operator)
                                                                @if($operator->operator_type == "DATACARD")
                                                                    <option value="{{ $operator->operator_code }}">{{ $operator->operator_name }}</option>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Data Card Number</label>
                                                    <input class="form-control" type="text" name="mobile"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Amount</label>
                                                    <input type="text" class="form-control" name="amount"/>
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
        </div>
    </div>
@endsection