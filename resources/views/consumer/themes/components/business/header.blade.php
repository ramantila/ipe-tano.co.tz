
    <header>
        <div class="header-top ">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 text-center text-md-left ">
                        <p>{{ __('messages.are_you_interested_to_join') }} <a href="#">{{ __('messages.contact') }} </a></p>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="header-right float-md-right text-center">
                            <div class="header-socials">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu Start -->
        <div class="site-navigation main_menu menu-style-2" id="mainmenu-area">
            <nav class="navbar navbar-expand-lg">
                <div class="container-lg" style="max-width:1300px!important">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('themes/img/ipetano-logo-primary.png')}}" alt="Eduhash" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/home') }}">
                               {{ __('messages.home') }} 
                            </a>

                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('for-business.about-us')}}" class="nav-link js-scroll-trigger">
                                 {{ __('messages.about_us') }} 
                            </a>
                            </li>

                            <li class="nav-item ">
                                <a href="{{ route('for-business.why-us')}}" class="nav-link js-scroll-trigger">
                                   {{ __('messages.why_ipe_tano') }} 
                                 </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbar3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Features<i class="fa fa-angle-down"></i>
                            </a>
                                <div class="dropdown-menu" aria-labelledby="navbar3">
                                    <a class="dropdown-item " href="course-grid.html">
                                        Get Reviews                                </a>
                                    <a class="dropdown-item " href="course-grid-2.html">
                                        Manage Reviews                                </a>

                                    <a class="dropdown-item " href="course-grid-3.html">
                                        Showcase Reviews                                </a>


                                </div>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('for-business.pricing')}}" class="nav-link">
                                {{ __('messages.pricing') }} 
                            </a>
                            </li>

                            <li class="nav-item ">
                                <a href="{{ route('for-business.contacts')}}" class="nav-link">
                                 {{ __('messages.contacts') }} 
                            </a>
                            </li>
                        </ul>

                        <div class="header-login">
                            <a href="{{ url('/login') }}" class="btn btn-solid-border btn-sm "> {{ __('messages.login') }} </a>
                            <a href="{{ url('/sign-up') }}" class="btn btn-main btn-sm"> {{ __('messages.register_') }} </a>
                        </div>

                    </div>
                    <!-- / .navbar-collapse -->
                </div>
                <!-- / .container -->
            </nav>
        </div>
    </header>
