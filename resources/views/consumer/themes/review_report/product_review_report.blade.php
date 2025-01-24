<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPE TANO</title>

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
    <link href="{{ asset('themes/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('themes/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('themes/css/vendors.css') }}" rel="stylesheet" type="text/css" />

    <!-- YOUR CUSTOM CSS -->
    {{--
    <link href="css/custom.css" rel="stylesheet"> --}}
    <link href="{{ asset('themes/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('themes/css/new.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div id="page">

        <header class="header_in is_fixed menu_fixed">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div id="logo">
                            <a href="{{ url('/') }}">
                                <img src="/themes/img/ipetano-logo-primary.png" width="140" height="35" alt=""
                                    class="logo_sticky">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">

                        <ul id="top_menu">
                            <li><a href="{{ url('/sign-up') }}" class="btn_top">Register For Bussiness</a></li>
                            {{-- <li><a href="{{ url('/register') }}" class="btn_top">Register For Consumer</a></li> --}}
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
            <div class="reviews_summary">
                <div class="wrapper">
                    <div class="container">

                    </div>
                    <!-- /container -->
                </div>
            </div>
            <!-- /reviews_summary -->

            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8">

                        <div class="review_card">
                            <div style="padding: 10px;">
                                <form id="regForm" action="{{ url('consumer/product/review/reported/'.$review_id) }}" method="POST">
                                    @csrf
                                    <div class="tab">
                                        <div class="small-dialog-header">
                                            <h1>Do you think there's a problem with this review?</h1>
                                        </div>
                                        <h5>You can use this reporting if you're a consumer</h5>
                                    </div>
                                    <div class="tab">
                                        <div class="small-dialog-header">
                                            <h1>Want to report this review?</h1>
                                        </div>
                                        <h1>Please choose a reason</h1>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" 
                                                name="reason" 
                                                value="hamful or illegal"
                                                id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Hamful or illegal
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" 
                                                name="reason"
                                                value="personal information"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Personal information
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" 
                                                name="reason"
                                                value="advertising or promotional"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Advertising or promotional
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="reason"
                                                value="not based on a genuine experience"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Not based on a genuine experience
                                            </label>
                                        </div>
                                    </div>
                                    <div style="overflow:auto;">
                                        <div style="float:right;">
                                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                        </div>
                                    </div>
                                  
                                    <!-- Circles which indicates the steps of the form: -->
                                    <div style="text-align:center;margin-top:40px;">
                                        <span class="step"></span>
                                        <span class="step"></span>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /col -->
                    <div class="col-lg-2">

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
                                <li><a href="#0">Faq</a></li>
                                <li><a href="#0">Help</a></li>
                                <li><a href="#0">My account</a></li>
                                <li><a href="#0">Create account</a></li>
                                <li><a href="#0">Contacts</a></li>
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


    <!-- /Sign In Popup -->

    <div id="toTop"></div>
    <!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('themes/js/common_scripts.js') }}"></script>
    <script src="{{ asset('themes/js/functions.js') }}"></script>
    <script src="{{ asset('themes/assets/validate.js') }}"></script>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

</body>

</html>