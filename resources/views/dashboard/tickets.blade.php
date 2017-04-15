@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-primary pull-right" href="{{ url('dashboard/ticket/add') }}">Add New Ticket</a>
                </div>
                <div class="col-lg-12 col-md-12">
                    @if($data['tickets'])
                        <div class="card card-nav-tabs">
                            <div class="card-header" data-background-color="purple">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">Tickets:</span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="active">
                                                <a href="#unsolved" data-toggle="tab">
                                                    <i class="material-icons">bug_report</i>
                                                    Unsolved
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#solved" data-toggle="tab">
                                                    <i class="material-icons">code</i>
                                                    Solved
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="unsolved">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <th>#ID</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            </thead>
                                            <tbody>
                                            @if(isset($data['tickets']['unsolved']))
                                                @foreach($data['tickets']['unsolved'] as $tickets)
                                                    <tr>
                                                        <td>{{ $tickets['ticketToken'] }}</td>
                                                        <td>{{ $tickets['ticketDate'] }}</td>
                                                        <td><a class="btn btn-primary" href="{{ url('dasboard\ticket\view') }}">View Ticket</a></td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="4">You have no Unsolved Tickets.</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="solved">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <th>#ID</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            </thead>
                                            <tbody>
                                            @if(isset($data['tickets']['solved']))
                                                @foreach($data['tickets']['solved'] as $tickets)
                                                    <tr>
                                                        <td>{{ $tickets['ticketToken'] }}</td>
                                                        <td>{{ $tickets['ticketDate'] }}</td>
                                                        <td><a class="btn btn-primary" href="{{ url('dasboard\ticket\view') }}">View Ticket</a></td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="4">You have no Unsolved Tickets.</td>
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
                            You have no Tickets yet.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection