@extends('layouts.auth')
@section('title')
    {{ trans_choice('general.login', 1) }}
@endsection
@section('content')
    <div class="container" style="padding-top: 10%;">
        <div class="container-fluid h-100">
            <div class="row flex-row h-100">
                <div class="col-xl-4 col-lg-4 col-md-4 m-auto">
                    <div class="authentication-form mx-auto">
                        <div class="logo-centered">
                            <img height="50" src="images/ipetano-logo-primary.png" alt="RADMIN" >
                        </div>
                        <p>Welcome back! </p>
                        <form action="{{ url('postLogin') }}" method="POST">
                            @csrf
                            @if (Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <input id="email" type="email" placeholder="Email" class="form-control "
                                    name="email" value="" required autocomplete="email" autofocus>
                                <i class="ik ik-user"></i>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" placeholder="Password" class="form-control "
                                    name="password" value="123456" required>
                                <i class="ik ik-lock"></i>
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="item_checkbox"
                                            name="item_checkbox" value="option1">
                                        <span class="custom-control-label">&nbsp;Remember Me</span>
                                    </label>
                                </div>
                                <div class="col text-right">
                                    <a class="btn text-danger" href="https://radmin.themicly.com/password/forget">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>

                           
                            <div class="sign-btn text-center">
                                <button type="submit" class="btn btn-custom">Sign In</button>
                            </div>
                            <div class="register">
                                <p>No account? <a href="{{ url('register') }}">Sign Up</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
