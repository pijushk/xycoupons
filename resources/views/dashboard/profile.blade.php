@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Edit Profile</h4>
                            <p class="category">Complete your profile</p>
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
                            <form action="{{ url('dashboard/save') }}" method="post">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            {{ csrf_field() }}
                                            <label class="control-label">Name (disabled)</label>
                                            <input type="text" class="form-control" disabled
                                                   value="{{ $data['profile']['name'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Gender</label>
                                            <select name="gender" class="form-control" name="gender">
                                                @if($data['profile']['gender'] == 'male')
                                                    <option value="male" selected>Male</option>
                                                    <option value="female">Female</option>
                                                @else
                                                    <option value="male">Male</option>
                                                    <option value="female" selected>Female</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Date of Birth</label>
                                            <input type="text" class="form-control" name="dob"
                                                   value="{{ $data['profile']['dob'] }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Country</label>
                                            <input type="text" class="form-control" name="country"
                                                   value="{{ $data['profile']['country'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">City</label>
                                            <input type="text" class="form-control" name="city"
                                                   value="{{ $data['profile']['city'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">State</label>
                                            <input type="text" class="form-control" name="state"
                                                   value="{{ $data['profile']['state'] }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Area</label>
                                            <input type="text" class="form-control" name="area"
                                                   value="{{ $data['profile']['area'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Pincode</label>
                                            <input type="text" class="form-control" name="pincode"
                                                   value="{{ $data['profile']['pincode'] }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Address</label>
                                            <input type="text" class="form-control" name="address"
                                                   value="{{ $data['profile']['address'] }}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection