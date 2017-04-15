@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add Ticket</h4>
                            <p class="category">Add a new ticket</p>
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
                                <div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                        <span><b> Success - </b>
                                            {{ Session::get('error') }}
                                        </span>
                                </div>
                            @endif
                            <form action="{{ url('dashboard/ticket/save') }}" method="post"
                                  enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            {{ csrf_field() }}
                                            <label class="control-label">Issue Type</label>
                                            <select class="form-control" name="issue_type">
                                                @foreach($data['ticketIssueType'] as $issue)
                                                    <option value="{{ $issue->id }}">{{ $issue->issue_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Reference ID</label>
                                            <input class="form-control" type="text" name="ref_id"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Subject</label>
                                            <input type="text" class="form-control" name="subject"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Attachment</label>
                                            <input type="file" class="form-control" name="attachment"/>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Message</label>
                                            <textarea class="form-control" name="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Add Ticket</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection