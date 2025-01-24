
<!doctype html>
<html class="no-js" lang="en">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ __('messages.signin') }}| {{ __('messages.my_account') }}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('themes/img/favicon.ico')}}" type="image/x-icon">


        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/css/theme.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('src/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="auth-wrapper">
            @yield('content')
        </div>
        
        
        <script src="{{ asset('src/js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('plugins/screenfull/dist/screenfull.js') }}"></script>
        
    </body>
</html>
