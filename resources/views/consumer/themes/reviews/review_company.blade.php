<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="VANNO - Premium directory consumer reviews and listings template by Ansonika">
    <meta name="author" content="Ansonika">
    <title>VANNO | Premium directory consumer reviews and listings template by Ansonika.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- BASE CSS -->
    {{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('themes/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('themes/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('themes/css/vendors.css') }}" rel="stylesheet" type="text/css" />

    <!-- YOUR CUSTOM CSS -->
    {{-- <link href="css/custom.css" rel="stylesheet"> --}}
    <link href="{{ asset('themes/css/custom.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div id="page">

        <header class="header_in ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div id="logo">
                            <a href="{{ url('/') }}">
                                <img src="/themes/img/ipetano-logo-primary.png" width="140" height="35"
                                    alt="" class="logo_sticky">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">

                        <ul id="top_menu">
                            <li><a href="{{ url('/sign-up') }}" class="btn_top">Register For Bussiness</a></li>
                            <li><a href="{{ url('/terms-and-conditions') }}" class="btn_top">Register For Consumer</a></li>
                            <li><a href="{{ url('/login') }}" class="login" title="Sign In">Sign In</a></li>
                        </ul>
                        <!-- /top_menu -->
                        <a href="#menu" class="btn_mobile">
                            <div class="hamburger hamburger--spin" id="hamburger">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </a>
                        <nav id="menu" class="main-menu">
                            <ul>
                                <li><span><a href="{{ url('categories') }}">Categories</a></span></li>
                                <li><span><a href="{{ url('businesses') }}">Businesses</a></span></li>
                                <li class="d-block d-sm-none"><span><a href="#0" class="btn_top">For
                                            Bussiness</a></span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </header>
        <!-- /header -->

        <main>
            <div id="results">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-3 col-md-4 col-10">
                            <h1><strong>145</strong> result for "Category"</h1>
                        </div>
                        <div class="col-xl-5 col-md-6 col-2">
                            <a href="#0" class="search_mob btn_search_mobile"></a>
                            <!-- /open search panel -->
                            <div class="row g-0 custom-search-input-2 inner">
                                <div class="col-lg-7">
                                    <form action="{{ url('reviews/company') }}" method="GET">
                                        <div class="input-group">
                                            <input class="form-control" type="search" name="company"
                                                placeholder="Search a Company" id="example-search-input">
                                            <span class="input-group-append">
                                                <button class="btn " type="submit"
                                                    style="margin-right: 100%; margin-left: 60%; padding-bottom: 100%">
                                                    <i class="icon_search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-lg-4">
                                    <form action="{{ url('reviews/company/category') }}" method="GET">
                                        <select class="wide" name="categoryName">
                                            <option value="all">All Categories</option>
                                            @foreach ($categories as $key)
                                                <option value="{{ $key->category_name }}">{{ $key->category_name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <button class="btn " type="submit"> <i class="icon_search"></i> </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                    <div class="search_mob_wp">
                        <div class="custom-search-input-2">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Search reviews...">
                                <i class="icon_search"></i>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Where">
                                <i class="icon_pin_alt"></i>
                            </div>
                            <select class="wide">
                                <option>All Categories</option>
                                <option>Shops</option>
                                <option>Hotels</option>
                                <option>Restaurants</option>
                                <option>Bars</option>
                                <option>Events</option>
                                <option>Fitness</option>
                            </select>
                            <input type="submit" value="Search">
                        </div>
                    </div>
                    <!-- /search_mobile -->
                </div>
                <!-- /container -->
            </div>
            <!-- /results -->

            <div class="filters_listing sticky_horizontal">
                {{-- <div class="container">
                    <ul class="clearfix">
                        <li>
                            <div class="switch-field">
                                <input type="radio" id="all" name="listing_filter" value="all" checked
                                    data-filter="*" class="selected">
                                <label for="all">All</label>
                                <input type="radio" id="high" name="listing_filter" value="high"
                                    data-filter=".high">
                                <label for="high">High rated</label>
                                <input type="radio" id="low" name="listing_filter" value="low"
                                    data-filter=".low">
                                <label for="low">Low rated</label>
                            </div>
                        </li>
                        <li><a class="btn_filt" data-bs-toggle="collapse" href="#filters" aria-expanded="false"
                                aria-controls="filters" data-text-swap="Less filters"
                                data-text-original="More filters">More filters</a></li>
                    </ul>
                </div> --}}
                <!-- /container -->
            </div>
            <!-- /filters -->

            <div class="collapse" id="filters">
                <div class="container margin_30_5">
                    <div class="row">
                        <div class="col-md-4">
                            <h6>Rating</h6>
                            <ul>
                                <li>
                                    <label class="container_check">Superb 9+ <small>67</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Very Good 8+ <small>89</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Good 7+ <small>45</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Pleasant 6+ <small>78</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h6>Tags</h6>
                            <ul>
                                <li>
                                    <label class="container_check">Soluta mei <small>12</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Enim suscipit <small>11</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Duis veri <small>23</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Dicunt nam <small>56</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="add_bottom_30">
                                <h6>Distance</h6>
                                <div class="distance"> Radius around selected destination <span></span> km</div>
                                <input type="range" min="10" max="100" step="10" value="30"
                                    data-orientation="horizontal">
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /Filters -->

            <div class="container margin_60_35">

                <div class="isotope-wrapper">
                    @foreach ($businesses as $key)
                        <div class="company_listing isotope-item high">

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="company_info">
                                        <figure>
                                            <a href="reviews-page.html"><img
                                                    src="{{ url('images/business/' . $key->logo) }}"
                                                    alt=""></a>
                                        </figure>
                                        <h3>{{ $key->business_name }}</h3>
                                        <p> {{ \Illuminate\Support\Str::limit($key->description, 250, '...') }}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center float-lg-end">
                                        <span class="rating"><strong>Based on 265 reviews</strong>
                                            @php
                                                $stars = $key->total_rating; // Get the integer part of the rating
                                                $half_star = $key->total_rating - $stars >= 0.5; // Check if there is a half star
                                            @endphp
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $stars)
                                                    <img src="/themes/img/colored.svg" alt="" width="17"
                                                        class="logo_sticky">
                                                @elseif($half_star && $i == $stars + 1)
                                                    {{-- <i class="fas fa-star-half-alt"></i> --}}
                                                @else
                                                    <img src="/themes/img/gray.svg" alt="" width="17"
                                                        class="logo_sticky">
                                                @endif
                                            @endfor
                                        </span>
                                        <a href="{{ url('/business/reviews/' . $key->id) }}" class="btn_1 small">Read
                                            more</a>

                                        <a href="{{ url('consumer/business/write-review/' . $key->id) }}"
                                            class="btn_1 small">Write Review</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    @endforeach
                    <!-- /company_listing -->



                </div>
                <!-- /isotope-wrapper -->

                <p class="text-center"><a href="#0" class="btn_1 rounded add_top_15">Load more</a></p>

            </div>
            <!-- /container -->

        </main>
        <!--/main-->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_1" aria-expanded="false"
                            aria-controls="collapse_ft_1" class="collapse_bt_mobile">
                            <h3>Quick Links</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_1">
                            <ul class="links">
                                <li><a href="#0">About us</a></li>
                                {{-- <li><a href="#0">Faq</a></li> --}}
                                {{-- <li><a href="#0">Help</a></li> --}}
                                <li><a href="{{ url('login') }}">My account</a></li>
                                <li><a href="{{ url('register') }}">Create account</a></li>
                                {{-- <li><a href="#0">Contacts</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_2" aria-expanded="false"
                            aria-controls="collapse_ft_2" class="collapse_bt_mobile">
                            <h3>Categories</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_2">
                            <?php $categories = App\Models\Category::take(10)->get(); ?>
                            <ul class="links">
                                @foreach ($categories as $key)
                                <li><a href="{{ url("category-businesses/".$key->category_name) }}">{{ $key->category_name }}</a></li> 
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_3" aria-expanded="false"
                            aria-controls="collapse_ft_3" class="collapse_bt_mobile">
                            <h3>Contacts</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_3">
                            <ul class="contacts">
                                <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                                <li><i class="ti-headphone-alt"></i>+61 23 8093 3400</li>
                                <li><i class="ti-email"></i><a href="#0">info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_4" aria-expanded="false"
                            aria-controls="collapse_ft_4" class="collapse_bt_mobile">
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                            <h3>Keep in touch</h3>
                        </a>
                        <div class="collapse show" id="collapse_ft_4">
                            <div id="newsletter">
                                <div id="message-newsletter"></div>
                                <form method="post" action="assets/newsletter.php" name="newsletter_form"
                                    id="newsletter_form">
                                    <div class="form-group">
                                        <input type="email" name="email_newsletter" id="email_newsletter"
                                            class="form-control" placeholder="Your email">
                                        <input type="submit" value="Submit" id="submit-newsletter">
                                    </div>
                                </form>
                            </div>
                            <div class="follow_us">
                                <h5>Follow Us</h5>
                                <ul>
                                    <li><a href="#0"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#0"><i class="ti-google"></i></a></li>
                                    <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#0"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <ul id="footer-selector">
                            <li>
                                <div class="styled-select" id="lang-selector">
                                    <select>
                                        <option value="English" selected>English</option>
                                        <option value="French">French</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Russian">Russian</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul id="additional_links">
                            <li><a href="#0">Terms and conditions</a></li>
                            <li><a href="#0">Privacy</a></li>
                            <li><span>© 2023 Vanno</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->

    <!-- Sign In Popup -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Sign In</h3>
        </div>
        <form>
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
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Popup -->

    <div id="toTop"></div>
    <!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    {{-- <script src="js/common_scripts.js"></script> --}}
    <script src="{{ asset('themes/js/common_scripts.js') }}"></script>
    <script src="{{ asset('themes/js/functions.js') }}"></script>
    <script src="{{ asset('themes/assets/validate.js') }}"></script>
    {{-- <script src="js/functions.js"></script> --}}
    {{-- <script src="assets/validate.js"></script> --}}

    <!-- Masonry Filtering -->
    {{-- <script src="js/isotope.min.js"></script> --}}
    <script src="{{ asset('themes/js/isotope.min.js') }}"></script>
    <script>
        $(window).on('load', function() {
            var $container = $('.isotope-wrapper');
            $container.isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'masonry'
            });
        });

        $('.filters_listing').on('click', 'input', 'change', function() {
            var selector = $(this).attr('data-filter');
            $('.isotope-wrapper').isotope({
                filter: selector
            });
        });
    </script>

</body>

</html>
