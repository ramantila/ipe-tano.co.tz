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
                            <a href="{{ url('/') }}"><img height="50" src="/images/ipetano-logo-primary.png"
                                    alt="RADMIN"></a>
                        </div>
                        <h3>Reset Password</h3>
                        {{-- <p>We will send you a link to reset password.</p> --}}
                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ url('password/reset') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control  is-invalid " placeholder="Your email address"
                                    name="email" required>
                                <i class="ik ik-mail"></i>
                            </div>


                            <div class="form-group">
                                <input type="password" class="form-control  is-invalid " placeholder="New Password"
                                    name="newpassword" required>
                                <i class="ik ik-lock"></i>
                            </div>

                            <div class="sign-btn text-center">
                                <button class="btn btn-theme">Submit</button>
                            </div>
                        </form>
                        {{-- <div class="register">
                            <p>Not a member? <a href="{{ url('register') }}">Create an account</a></p>
                        </div> --}}
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
