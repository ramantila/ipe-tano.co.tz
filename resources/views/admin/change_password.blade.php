@extends('layouts.master')
@section('title')
    Company
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    {{-- <i class="ik ik-lock bg-blue"></i> --}}
                    <div class="d-inline">
                        <h5>Change Password</h5>
                        <span>Change password</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Change Password</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- start message area-->
        <div class="col-md-12">
        </div> <!-- end message area-->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Change Password</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-6">
                            <form action="{{ url('users/change-password') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Current Password<span class="text-red">*</span></label>
                                            <input id="title" type="password" class="form-control" name="current_password"
                                                 placeholder="Current Password" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">New Password<span class="text-red">*</span></label>
                                            <input id="title" type="password" class="form-control" name="new_password"
                                                 placeholder="New Password" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Re-Type New Password<span class="text-red">*</span></label>
                                            <input id="title" type="password" class="form-control" name="renew_password"
                                                 placeholder="Re-Type New Password" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn " style="background: #B28910; color: #fff;">Change Password</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
