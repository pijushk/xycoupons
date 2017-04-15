@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Vouchers</h4>
                            <p class="category">Your vouchers</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>#ID</th>
                                <th>Merchant</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>PIN</th>
                                <th>Expiry Date</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                </thead>
                                <tbody>
                                @if($data['vouchers'])
                                    @foreach($data['vouchers'] as $voucher)
                                        <tr>
                                            <td>{{ $voucher['voucherID'] }}</td>
                                            <td><img src="{{ $voucher['merchantLogo'] }}" /> </td>
                                            <td>{{ $voucher['voucherDate'] }}</td>
                                            <td>{{ $voucher['voucherAmount'] }}</td>
                                            <td>{{ $voucher['voucherStatus'] }}</td>
                                            <td>{{ $voucher['voucherPIN'] }}</td>
                                            <td>{{ $voucher['voucherExpiry'] }}</td>
                                            <td>{{ $voucher['voucherEmail'] }}</td>
                                            <td>{{ $voucher['voucherMobile'] }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">You have no Transactions</td>
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