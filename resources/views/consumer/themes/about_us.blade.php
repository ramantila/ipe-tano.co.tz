<!DOCTYPE html>
<html lang="en">

<head>

    <title>IPE TANO |  {{ __('messages.about_us') }}</title>
         @include('consumer.themes.components.head')

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>
     @include('consumer.themes.components.special-css.about-us-page-css')
 <style>
.active a {
    font-weight: bold;
    color:rgb(178, 137, 16)!important; 
}

.language-selector select {
    background-color: #f8f9fa; 
    border: 1px solid #ccc;   
    border-radius: 5px;      
    padding: 3px 10px;    
    font-size: 16px;       
    color: #333;          
    cursor: pointer;    
    transition: all 0.3s ease;
    width: 100%;    
    max-width: 200px;          /* Max width to prevent it from being too large */
}

.language-selector select:focus {
    box-shadow: 0 0 5px rgba(29, 30, 32, 0.5); 
    outline: none;     
}

.language-selector select option {
    font-size: 16px;    
    padding: 5px;  
}

.language-selector select:hover {
    border-color:rgb(26, 28, 30);   
}
@media (max-width: 768px) {
    .language-selector {
        display: none!important;
    }
}
</style>
<body>

    <div id="page">

        <header class="header menu_fixed" style="z-index:1">
            <div id="logo">
                <a href="{{ url('/') }}">
                    <img src="themes/img/ipetano-logo.png" width="140" height="35" alt=""
                        class="logo_normal">
                    <img src="themes/img/ipetano-logo-primary.png" width="140" height="35" alt=""
                        class="logo_sticky">
                </a>
            </div>
            <ul id="top_menu">
                           <li>
                                <div class="language-selector mt-1" id="lang-selector">
                                    <select onchange="location = this.value;">
                                        <option value="{{ url('/lang/en') }}" {{ App::getLocale() == 'en' ? 'selected' : '' }}>
                                            {{ __('messages.english') }}
                                        </option>
                                        <option value="{{ url('/lang/sw') }}" {{ App::getLocale() == 'sw' ? 'selected' : '' }}>
                                            {{ __('messages.swahili') }}
                                        </option>
                                    </select>
                                </div>
                            </li>
                {{-- <li><a href="{{ url('/sign-up') }}" class="btn_top">Register For Bussiness</a></li> --}}
                {{-- <li><a href="{{ url('/terms-and-conditions') }}" class="btn_top">Register For Consumer</a></li> --}}
                <li><a href="{{ url('/login') }}" class="login" title="{{ __('messages.signin') }}">{{ __('messages.signin') }}</a></li>
            </ul>
            <!-- /top_menu -->
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <!-- /btn_mobile -->
            <nav id="menu" class="main-menu">
                <ul>
                                <li class="{{ Request::is('/') ? 'active' : '' }}">
                                        <span><a href="{{ url('/') }}">{{ __('messages.home') }}</a></span>
                                    </li>
                                    <li class="{{ Request::is('categories') ? 'active' : '' }}">
                                        <span><a href="{{ url('categories') }}">{{ __('messages.categories') }}</a></span>
                                    </li>
                                    <li class="{{ Request::is('businesses') ? 'active' : '' }}">
                                        <span><a href="{{ url('businesses') }}">{{ __('messages.businesses') }}</a></span>
                                    </li>
                                <li><span><a href="{{ url('/home') }}" class="">{{ __('messages.for_business') }}</a></span></li>

                 </ul>
            </nav>
        </header>
        <!-- /header -->

        <main>
            <section class="hero_single version_30">
                <div class="wrapper">
                    <div class="container">
                         <h1 class="animated-text">
                            <span class="static-part wow animate__fadeIn">{{ __('messages.about_us') }}</span>
                        </h1>
                    </div>
                </div>
            </section>
            <!-- /hero_single -->

            <div class="container margin_60_35">
                
                <div class="row row1 justify-content-center ">
                     <div class="row align-items-center">
                        <!-- Left Side: Text Content -->
                        <div class="col-md-6 about-content">
                        <h2 class="wow animate__slideInRight">{{ __('messages.about_our_journey') }}</h2>
                        <p class="wow animate__flipInX">{{ __('messages.we_are') }} <span class="highlight">Ipe Tano</span>!</p>
                        <p class="wow animate__zoomIn">
                            {{ __('messages.about_desc') }}
                        </p>
                         <h2 class="wow animate__zoomIn">{{ __('messages.our_mission') }}</h2>
                                <p class="wow animate__flipOutX">{{ __('messages.mission_desc') }}</p>
                            
                        </div>
                        
                        <!-- Right Side: Image Content -->
                        <div class="col-md-6 about-image wow animate__zoomIn">
                        <img src="{{asset('images/about_us-2.png')}}" alt="About Us Image">
                        </div>
                    </div>
                </div>

            </div>
            <!-- /container -->

            <div class="bg_color_1">
                <div class="container margin_60_355">
                   
                   <div class="main_title_2">
                </div>
                <div class="row row1 justify-content-center ">
                     <div class="row align-items-center">
                        <!-- Left Side: Text Content -->
                        <div class="col-md-6 about-image  wow animate__slideInRight">
                        <img src="{{asset('images/about_us_mrs.png')}}" alt="About Us Image">
                        </div>
                        <div class="col-md-6 about-contents">
                        <h2 class="mb-5 wow animate__slideInLeft" style="color: #B28910">{{ __('messages.how_we_empower') }}</h2>
                         <h3 class="wow animate__slideInLeft">{{ __('messages.for_consumer') }}</h3>
                         <p class="wow animate__slideInLeft">{{ __('messages.share_your_experience') }}</p>
                         <h3 class=" wow animate__slideInLeft">{{ __('messages.for_business_') }}</h3> 
                          <p class="wow animate__slideInLeft">{{ __('messages.for_business_desc') }}</p>    
                        </div>
                        
                        <!-- Right Side: Image Content -->
                        
                    </div>
                </div>

                </div>
            </div>
            <!-- /bg_color_1 -->

            <div class="call_section_2">
                <div class="wrapper">
                    <div class="container">
                        <h2 class="join wow animate__flipInX">{{ __('messages.join_community') }} 🎉🎉</h2>
                        <p class="jiunge mt-2 wow animate__zoomIn">{{ __('messages.learn_share') }}
                        </p>
                        <a class="btn_1 medium text-black wow animate__slideInLeft" href="{{ url('businesses') }}">{{ __('messages.review_now') }}</a>
                    </div>
                </div>
            </div>
            <!-- /call_section_2 -->
        </main>
        <!-- /main -->

        @include('consumer.themes.components.footer')
        <!--/footer-->
    </div>
    <!-- page -->

        {{-- <div class="small-dialog-header">
            <h3>Sign In</h3>
        </div> --}}
        {{-- <form>
            <div class="sign-in-wrapper">
                <a href="#0" class="social_bt facebook">Login with Facebook</a>
                <a href="#0" class="social_bt google">Login with Google</a>
                <div class="divider"><span>Or</span></div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-start">
                        <label class="container_check">Remember me
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-end mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a>
                    </div>
                </div>
                <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
                <div class="text-center">
                    Don’t have an account? <a href="register.html">Sign up</a>
                </div>
                <div id="forgot_pw">
                    <div class="form-group">
                        <label>Please confirm login email below</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <p>You will receive an email containing a link allowing you to reset your password to a new
                        preferred one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                </div>
            </div>
        </form> --}}
        <!--form -->
    </div>
    <!-- /Sign In Popup -->

    <div id="toTop"></div>
    <!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
         @include('consumer.themes.components.scripts')


  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
 <script>
    new WOW().init();
</script>
 

</body>

</html>
