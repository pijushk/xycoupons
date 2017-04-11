@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Transactions</h4>
                            <p class="category">Your transactions</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>#ID</th>
                                <th>Type</th>
                                <th>Purpose</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                                </thead>
                                <tbody>
                                @if($data['transactions'])
                                    @foreach($data['transactions'] as $transaction)
                                        <tr>
                                            <td>{{ $transaction['transactionID'] }}</td>
                                            <td>{{ $transaction['transactionType'] }}</td>
                                            <td>{{ $transaction['transactionFor'] }}</td>
                                            <td>{{ $transaction['transactionAmount'] }}</td>
                                            <td>{{ $transaction['transactionDate'] }}</td>
                                            <td>{{ $transaction['transactionStatus'] == "Conformed" ? 'Confirmed' : $transaction['transactionStatus'] }}</td>
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