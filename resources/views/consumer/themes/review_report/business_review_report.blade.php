<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPE TANO  | {{ __('messages.report_review') }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
    box-shadow: 0 0 5px rgb(178, 137, 16)!important; 
    outline: none;     
}

.language-selector select option {
    font-size: 16px;    
    padding: 5px;  
}

.language-selector select:hover {
    border-color:rgb(178, 137, 16)!important;   
}
@media (max-width: 768px) {
    .language-selector {
        display: none!important;
    }
}

</style>
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
                                <form id="regForm" action="{{ url('business/review/reported/'.$business_id) }}" method="POST">
                                    @csrf
                                    <div class="tab">
                                        <div class="small-dialog-header">
                                            <h1>{{ __('messages.have_problem') }}</h1>
                                        </div>
                                        <h5>{{ __('messages.if_you_are_consumer') }}</h5>
                                    </div>
                                    <div class="tab">
                                        <div class="small-dialog-header">
                                            <h1>{{ __('messages.want_to_report') }}</h1>
                                        </div>
                                        <h1>{{ __('messages.choose_a_reason') }}</h1>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" 
                                                name="reason" 
                                                value="hamful or illegal"
                                                id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                               {{ __('messages.hamful_or_illegal') }}
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" 
                                                name="reason"
                                                value="personal information"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                {{ __('messages.personal_information') }}
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" 
                                                name="reason"
                                                value="advertising or promotional"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                {{ __('messages.ads_or_promo') }}
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="reason"
                                                value="not based on a genuine experience"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                 {{ __('messages.not_genuine') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div style="overflow:auto;">
                                        <div style="float:right;">
                                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">{{ __('messages.previous') }}</button>
                                            <button type="button" id="nextBtn" onclick="nextPrev(1)">{{ __('messages.next') }}</button>
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
   @include('consumer.themes.components.footer')
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
                document.getElementById("nextBtn").innerHTML = "{{ __('messages.submit') }}";
            } else {
                document.getElementById("nextBtn").innerHTML = "{{ __('messages.next') }}";
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