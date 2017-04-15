@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Bank Transfer</h4>
                            <p class="category">Your Bank Transfer</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>#ID</th>
                                <th>A/C holder's Name</th>
                                <th>A/C Number</th>
                                <th>Bank</th>
                                <th>Branch</th>
                                <th>Amount</th>
                                <th>Order Date</th>
                                <th>Approval Date</th>
                                <th>Status</th>
                                <th>Remarks</th>
                                </thead>
                                <tbody>
                                @if($data['bankTransfer'])
                                    @foreach($data['bankTransfer'] as $bankTransfer)
                                        <tr>
                                            <td>{{ $bankTransfer['orderID'] }}</td>
                                            <td>{{ $bankTransfer['holdersName'] }}</td>
                                            <td>{{ $bankTransfer['acNumber'] }}</td>
                                            <td>{{ $bankTransfer['bank'] }}</td>
                                            <td>{{ $bankTransfer['branch'] }}</td>
                                            <td>{{ $bankTransfer['amount'] }}</td>
                                            <td>{{ $bankTransfer['orderDate'] }}</td>
                                            <td>{{ $bankTransfer['orderApprovalDare'] }}</td>
                                            <td>{{ $bankTransfer['status'] }}</td>
                                            <td>{{ $bankTransfer['remarks'] }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">You have no Bank Transfer History</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection