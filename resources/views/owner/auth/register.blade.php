<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign Up | Radmin - Laravel Admin Starter</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://radmin.themicly.com/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/css/theme.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/css/theme-image.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('src/js/vendor/modernizr-2.8.3.min.js') }}"></script>


</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="auth-wrapper">
        <div class="container-fluid h-100">
            <div class="row flex-row h-100 bg-white">
                <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                    <div class="lavalite-bg">
                        <div class="lavalite-overlay"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                    <div class="authentication-form mx-auto">
                        <div class="logo-centered">
                            <img height="50" src="images/ipetano-logo-primary.png" alt="RADMIN" >
                        </div>
                        <p>Join us today! It takes only few steps</p>
                        <form action="{{ url('postSignup') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="name" class="form-control" placeholder="FirstName" name="first_name"
                                    value="" required>
                                <i class="ik ik-user"></i>
                            </div>

                            <div class="form-group">
                                <input type="name" class="form-control" placeholder="LastName" name="last_name"
                                    value="" required>
                                <i class="ik ik-user"></i>
                            </div>

                            <div class="form-group">
                                <select class="form-control select2" name="region_id" required="">
                                    <option value="">Select Region</option>
                                    @foreach ($regions as $key)
                                        <option value="{{ $key->id }}">{{ $key->name }}</option>
                                    @endforeach
                                </select>
                                <i class="ik ik-map"></i>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                    value="" required>
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    required>
                                <i class="ik ik-lock"></i>
                            </div>
                            <div class="row">
                                <div class="col-12 text-left">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="item_checkbox"
                                            name="item_checkbox" value="option1">
                                        <span class="custom-control-label">&nbsp;I Accept <a href="#">Terms and
                                                Conditions</a></span>
                                    </label>
                                </div>
                            </div>
                            <div class="sign-btn text-center">
                                <button class="btn btn-theme">Create Account</button>
                            </div>
                        </form>
                        <div class="register">
                            <p>Already have an account? <a href="{{ url('login') }}">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('src/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('plugins/screenfull/dist/screenfull.js') }}"></script>
</body>

</html>
