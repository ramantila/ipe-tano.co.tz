
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
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('themes/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('themes/css/vendors.css') }}" rel="stylesheet" />

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('themes/css/custom.css') }}" rel="stylesheet" />

</head>

<body>

    <div id="page">

        <header class="header_in is_fixed menu_fixed">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div id="logo">
                            <a href="index.html">
                                {{-- <img src="img/logo_sticky.svg" width="140" height="35" alt="" class="logo_sticky"> --}}
                                <img src="/themes/img/ipetano-logo-primary.png" width="140" height="35" alt="" class="logo_sticky">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <ul id="top_menu">
                            <li><a href="write-review.html" class="btn_top">Write a Review</a></li>
                            <li>
                                <div class="dropdown dropdown-user">
                                    <a href="#0" class="logged" data-bs-toggle="dropdown"><img src="img/avatar4.jpg" alt=""></a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a href="user-dashboard.html">My Reviews</a></li>
                                            <li><a href="user-settings.html">My Settings</a></li>
                                            <li><a href="#0">Log Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
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
                                <li><span><a href="#0">Home</a></span>
                                    <ul>
                                        <li><a href="index.html">Home version 1</a></li>
                                        <li><a href="index-3.html">Home version 2</a></li>
                                        <li><a href="index-2.html">Home version 3 (GDPR)</a></li>
                                    </ul>
                                </li>
                                <li><span><a href="#0">Reviews</a></span>
                                    <ul>
                                        <li>
                                            <span><a href="#0">Layouts</a></span>
                                            <ul>
                                                <li><a href="grid-listings-filterstop.html">Grid listings 1</a></li>
                                                <li><a href="grid-listings-filterscol.html">Grid listings 2</a></li>
                                                <li><a href="row-listings-filterscol.html">Row listings</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="reviews-page.html">Reviews page</a></li>
                                        <li><a href="write-review.html">Write a review</a></li>
                                        <li><a href="confirm.html">Confirm page</a></li>
                                        <li><a href="user-dashboard.html">User Dashboard</a></li>
                                        <li><a href="user-settings.html">User Settings</a></li>
                                    </ul>
                                </li>
                                <li><span><a href="pricing.html">Pricing</a></span></li>
                                <li><span><a href="#0">Pages</a></span>
                                    <ul>
                                        <li><a href="companies-landing.html">Compannies Landing Page</a></li>
                                        <li><a href="all-categories.html">Companies Categories Page</a></li>
                                        <li><a href="category-companies-listings-filterstop.html">Companies Listing Page</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="help.html">Help Section</a></li>
                                        <li><a href="faq.html">Faq Section</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li>
                                            <span><a href="#0">Icon Packs</a></span>
                                            <ul>
                                                <li><a href="icon-pack-1.html">Icon pack 1</a></li>
                                                <li><a href="icon-pack-2.html">Icon pack 2</a></li>
                                                <li><a href="icon-pack-3.html">Icon pack 3</a></li>
                                                <li><a href="icon-pack-4.html">Icon pack 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html">404 page</a></li>
                                    </ul>
                                </li>
                                <li><span><a href="#0">Buy template</a></span></li>
                                <li class="d-block d-sm-none"><span><a href="#0" class="btn_top">Write a review</a></span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </header>
        <!-- /header -->

        <main class="margin_main_container">
            <div class="user_summary">
                <div class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <figure>
                                    <img src="img/avatar4.jpg" alt="">
                                </figure>
                                <h1>Mark Steinberg</h1>
                                <span>United States</span>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        <strong>3</strong>
                                        <a href="#0" class="tooltips" data-bs-toggle="tooltip" data-placement="bottom" title="Reviews written by you"><i class="icon_star"></i> Reviews</a>
                                    </li>
                                    <li>
                                        <strong>12</strong>
                                        <a href="#0" class="tooltips" data-bs-toggle="tooltip" data-placement="bottom" title="Number of people who have read your reviews"><i class="icon-user-1"></i> Reads</a>
                                    </li>
                                    <li>
                                        <strong>36</strong>
                                        <a href="#0" class="tooltips" data-bs-toggle="tooltip" data-placement="bottom" title="Number of people who found your review useful"><i class="icon_like_alt"></i> Useful</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /container -->
                </div>
            </div>
            <!-- /user_summary -->
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="settings_panel">
                            <h3>Personal settings</h3>
                            <hr>
                            <div class="form-group">
                                <label>Edit Profile text</label>
                                <textarea class="form-control" style="height: 180px;" placeholder="Your profile"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Edit Photo</label>
                                <div class="fileupload"><input type="file" name="fileupload" accept="image/*"></div>
                            </div>
                            <div class="form-group">
                                <label>Edit Email</label>
                                <input class="form-control" type="email" placeholder="mark@domani.com">
                            </div>
                            <div class="form-group">
                                <label>Edit Full name</label>
                                <input class="form-control" type="text" placeholder="Mark Steinberg">
                            </div>
                            <div class="form-group">
                                <label>Edit City</label>
                                <input class="form-control" type="text" placeholder="Malaga">
                            </div>
                            <div class="form-group">
                                <label>Edit Country</label>
                                <input class="form-control" type="text" placeholder="Malaga">
                            </div>
                            <p class="text-end"><a class="btn_1 small add_top_15" href="#0">Save personal info</a></p>
                        </div>
                        <!-- /settings_panel -->
                        <div class="settings_panel">
                            <h3>Change password</h3>
                            <hr>
                            <div class="form-group">
                                <label>Current Password</label>
                                <input class="form-control" type="password" id="password">
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" type="password" id="password1">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" id="password2">
                            </div>
                            <div id="pass-info" class="clearfix"></div>
                            <p class="text-end"><a class="btn_1 small" href="#0">Save password</a></p>
                        </div>
                        <!-- /settings_panel -->
                    </div>
                    <!-- /col -->
                    <div class="col-lg-4" id="sidebar">
                        <div class="box_general">
                            <h5>Delete account</h5>
                            <p>At nec senserit aliquando intellegat, et graece facilisis pro. Per in ridens sensibus interesset, eos ei nonumes incorrupte, iriure diceret an eos.</p>
                            <a href="#" class="btn_1 small">Delete account</a>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
        <!--/main-->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_1" aria-expanded="false" aria-controls="collapse_ft_1" class="collapse_bt_mobile">
                            <h3>Quick Links</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_1">
                            <ul class="links">
                                <li><a href="#0">About us</a></li>
                                <li><a href="#0">Faq</a></li>
                                <li><a href="#0">Help</a></li>
                                <li><a href="#0">My account</a></li>
                                <li><a href="#0">Create account</a></li>
                                <li><a href="#0">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_2" aria-expanded="false" aria-controls="collapse_ft_2" class="collapse_bt_mobile">
                            <h3>Categories</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_2">
                            <ul class="links">
                                <li><a href="#0">Shops</a></li>
                                <li><a href="#0">Hotels</a></li>
                                <li><a href="#0">Restaurants</a></li>
                                <li><a href="#0">Bars</a></li>
                                <li><a href="#0">Events</a></li>
                                <li><a href="#0">View all</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_3" aria-expanded="false" aria-controls="collapse_ft_3" class="collapse_bt_mobile">
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
                        <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_4" aria-expanded="false" aria-controls="collapse_ft_4" class="collapse_bt_mobile">
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                            <h3>Keep in touch</h3>
                        </a>
                        <div class="collapse show" id="collapse_ft_4">
                            <div id="newsletter">
                                <div id="message-newsletter"></div>
                                <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                    <div class="form-group">
                                        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
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
                    <div class="float-end mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
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
                    <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
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
    <script src="{{ asset('themes/js/common_scripts.js') }}"></script>
    <script src="{{ asset('themes/js/functions.js') }}"></script>
    <script src="{{ asset('themes/assets/validate.js') }}"></script>

    <!-- SPECIFIC SCRIPTS -->
    {{-- <script src="js/pw_strenght.js"></script> --}}
    <script src="{{ asset('themes/js/pw_strenght.js') }}"></script>

</body>

</html>