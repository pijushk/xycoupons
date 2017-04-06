@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Clicks</h4>
                            <p class="category">Your clicks</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>#ID</th>
                                <th>Merchant</th>
                                <th>Date</th>
                                </thead>
                                <tbody>
                                @if($data['clicks'])
                                    @foreach($data['clicks'] as $clicks)
                                        <tr>
                                            <td>{{ $clicks['orderID'] }}</td>
                                            <td><img src="{{ $clicks['orderMerchantLogo'] }}" style="width: 80px; height: 40px;"/></td>
                                            <td>{{ $clicks['orderDate'] }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4">You have no clicks</td>
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