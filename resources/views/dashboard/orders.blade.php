@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @if($data['orders'])
                        <div class="card card-nav-tabs">
                            <div class="card-header" data-background-color="purple">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">Orders:</span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="active">
                                                <a href="#pending" data-toggle="tab">
                                                    <i class="material-icons">bug_report</i>
                                                    Pending
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#approved" data-toggle="tab">
                                                    <i class="material-icons">code</i>
                                                    Approved
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#cancelled" data-toggle="tab">
                                                    <i class="material-icons">cloud</i>
                                                    Cancelled
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#disapproved" data-toggle="tab">
                                                    <i class="material-icons">cloud</i>
                                                    Disapproved
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="pending">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <th>#ID</th>
                                            <th>Merchant</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Cashback</th>
                                            <th>Approval Date</th>
                                            </thead>
                                            <tbody>
                                            @if(isset($data['orders']['pending']))
                                                @foreach($data['orders']['pending'] as $orders)
                                                    <tr>
                                                        <td>{{ $orders['orderID'] }}</td>
                                                        <td><img src="{{ $orders['orderMerchantLogo'] }}"
                                                                 style="width: 80px; height: 40px;"/></td>
                                                        <td>{{ $orders['orderDate'] }}</td>
                                                        <td>{{ $orders['orderAmount'] }}</td>
                                                        <td>{{ $orders['orderCommission'] }}</td>
                                                        <td>{{ $orders['orderApprovalDate'] }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="4">You have no Pending Orders.</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="approved">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <th>#ID</th>
                                            <th>Merchant</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Cashback</th>
                                            <th>Approval Date</th>
                                            </thead>
                                            <tbody>
                                            @if(isset($data['orders']['approved']))
                                                @foreach($data['orders']['approved'] as $orders)
                                                    <tr>
                                                        <td>{{ $orders['orderID'] }}</td>
                                                        <td><img src="{{ $orders['orderMerchantLogo'] }}"
                                                                 style="width: 80px; height: 40px;"/></td>
                                                        <td>{{ $orders['orderDate'] }}</td>
                                                        <td>{{ $orders['orderAmount'] }}</td>
                                                        <td>{{ $orders['orderCommission'] }}</td>
                                                        <td>{{ $orders['orderApprovalDate'] }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="4">You have no Approved Orders.</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="cancelled">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <th>#ID</th>
                                            <th>Merchant</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Cashback</th>
                                            <th>Approval Date</th>
                                            </thead>
                                            <tbody>
                                            @if(isset($data['orders']['cancelled']))
                                                @foreach($data['orders']['cancelled'] as $orders)
                                                    <tr>
                                                        <td>{{ $orders['orderID'] }}</td>
                                                        <td><img src="{{ $orders['orderMerchantLogo'] }}"
                                                                 style="width: 80px; height: 40px;"/></td>
                                                        <td>{{ $orders['orderDate'] }}</td>
                                                        <td>{{ $orders['orderAmount'] }}</td>
                                                        <td>{{ $orders['orderCommission'] }}</td>
                                                        <td>{{ $orders['orderApprovalDate'] }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="4">You have no Cancelled Orders.</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="disapproved">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <th>#ID</th>
                                            <th>Merchant</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Cashback</th>
                                            <th>Approval Date</th>
                                            </thead>
                                            <tbody>
                                            @if(isset($data['orders']['disapproved']))
                                                @foreach($data['orders']['disapproved'] as $orders)
                                                    <tr>
                                                        <td>{{ $orders['orderID'] }}</td>
                                                        <td><img src="{{ $orders['orderMerchantLogo'] }}"
                                                                 style="width: 80px; height: 40px;"/></td>
                                                        <td>{{ $orders['orderDate'] }}</td>
                                                        <td>{{ $orders['orderAmount'] }}</td>
                                                        <td>{{ $orders['orderCommission'] }}</td>
                                                        <td>{{ $orders['orderApprovalDate'] }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="4">You have no Disapproved Orders.</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="alert alert-primary">
                            You have no Orders yet.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection