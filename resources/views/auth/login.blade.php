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
                            <img height="60" src="{{asset('themes/img/ipetano-logo-primary.png')}}" alt="Ipe Tano Logo" >
                        </div>
                        <h4 class="text-center mb-2 text-black" style="color:black !important">{{ __('messages.signin') }} </h4>
                        <form action="{{ url('postLogin') }}" method="POST">
                            @csrf
                            @if (Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <input id="email" type="email" placeholder="{{ __('messages.email') }} " class="form-control "
                                    name="email" value="" required autocomplete="email" autofocus>
                                <i class="ik ik-user"></i>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" placeholder="{{ __('messages.password') }} " class="form-control "
                                    name="password"  required>
                                <i class="ik ik-lock"></i>
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="item_checkbox"
                                            name="item_checkbox" value="option1">
                                        <span class="custom-control-label">&nbsp;{{ __('messages.remember_me') }} </span>
                                    </label>
                                </div>
                                <div class="col text-right">
                                    <a class="btn text-danger" href="{{ url('password/forget') }}">
                                        {{ __('messages.forgot_password') }}
                                    </a>
                                </div>
                            </div>
                            <div class="sign-btn text-center">
                                <button type="submit" class="btn btn-custom">{{ __('messages.signin') }}</button>
                            </div>

                            <div class="register">
                                <a href="{{ url('register') }}" class="btn btn-custom text-center" style="padding-top: 10px;">{{ __('messages.create_account') }}</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
