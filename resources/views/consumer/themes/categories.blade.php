<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>IPE TANO | {{ __('messages.categories') }}</title>

       @include('consumer.themes.components.head')




</head>
     @include('consumer.themes.components.special-css.categories-page-css')

<body>

    <div id="page">

@include('consumer.themes.components._header')
       

        <main>
         <section class="hero_single version_3">
                    <div class="wrapper">
                        <div class="container">
                            <h1 class="animated-text">
                                <span class="static-part">{{ __('messages.fedha_halali') }}, </span>
                                <span class="dynamic-part"></span>
                            </h1>

                        </div>
                    </div>
                    <!-- Carousel Controls -->
                    <div class="carousel-controls">
                        <button class="prev-btn">❮</button>
                        <button class="next-btn">❯</button>
                    </div>
                    <div class="carousel-indicators">
                        <button class="indicator" data-index="0"></button>
                        <button class="indicator" data-index="1"></button>
                        <button class="indicator" data-index="2"></button>
                    </div>
                </section>


            <!-- /hero_single -->

            <div class="container margin_60_35">
                <div class="main_title_2">
                    <h1 class="">{{ __('messages.top_categories') }}</h1>
                    {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
                </div>
                <?php $categories = App\Models\Category::paginate(8); ?>
                <div class="row row1 justify-content-center">
                   
                    @foreach ($categories as $key)
                        <div class="col-31 col-md-6 my-3 ">
                            <a href="{{ url('category-businesses/'.$key->category_name) }}" class=" text-center category-item">
                                <img src="{{ url('images/category/' . $key->category_icon) }}" class="category-icon" alt="">
                                <h4 class="category-name">{{ __('messages.categories_list.' . strtolower(str_replace(' ', '_', $key->category_name))) }}</h4>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
            <!-- /container -->

            <div class="bg_color_1">
                <div class="container margin_60_35">
                    <div class="main_title_3 text-center">
                        <h2 class="">{{ __('messages.companies_categories') }}</h2>
                        {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
                    </div>
                 <div class="text-center">

                     <div class="row justify-content-center my-5" >
                    <div class="col-12 ">
                        <div class="clearfix add_bottom_30 ">
                            <ul class="list-unstyled row ">
                                @foreach ($data as $index => $key)
                                    <li class="col-md-4 mb-3 justify-content-center "> <!-- Remove text-center class -->
                                        <a href="{{ url('category-businesses/'.$key->category_name) }}" class="companiescat">
                                            {{ __('messages.categories_list.' . strtolower(str_replace(' ', '_', $key->category_name))) }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                 </div>
                 
                </div>


                </div>
                <!-- /container -->
            </div>
            <!-- /bg_color_1 -->

            <div class="call_section_2">
                <div class="wrapper">
                    <div class="container">
                        <h3 class="">{{ __('messages.ipetano_inspire') }}</h3>
                        <a class="btn_1 medium text-black " href="{{ url('/register') }}">{{ __('messages.join_ipetano') }}</a>
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

    <!-- Sign In Popup -->
    {{-- <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide"> --}}
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

    @include('consumer.themes.components.scripts')

    @include('consumer.themes.components.special-scripts.categories-page-scripts')


</body>

</html>
