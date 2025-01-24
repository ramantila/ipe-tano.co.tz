<!DOCTYPE html>
<html lang="en">

<head>
  

    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPE TANO |  {{ $product->product_name }}</title>

    <!-- Favicons-->
   <link rel="shortcut icon" href="{{asset(path: 'themes/img/favicon.ico')}}" type="image/x-icon">
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
    {{-- <link href="css/custom.css" rel="stylesheet"> --}}
    <link href="{{ asset('themes/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('themes/css/new.css') }}" rel="stylesheet" type="text/css" />

</head>
 <style>


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

        <header class="header_in is_fixed menu_fixed" style="z-index:1!important">
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
                        <div class="row">
                           <div class="col-lg-8">
                        <figure>
                            <a href="{{ url('/business/reviews/' . $product->business_id) }}">
                                @if ($product->logo != '')
                                    <img src="{{ url('images/' . $product->logo) }}" alt="">
                                @else
                                    <img src="/themes/img/ipetano-logo-primary.png" alt="">
                                @endif
                            </a>
                        </figure>
                        <h1>{{ $product->product_name }}</h1>
                        <h6 class="text-white">{{ __('messages.provided_by') }} {{$product->business->business_name}}</h6>
                        <span class="rating">
                            @php
                                $stars = floor($product->total_rating); // Get the integer part of the rating
                                $half_star = ($product->total_rating - $stars) >= 0.5; // Check if there is a half star
                            @endphp
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $stars)
                                    <!-- Full Star -->
                                    <img src="/themes/img/colored.svg" alt="Full Star" width="17" class="logo_sticky">
                                @elseif ($half_star && $i == $stars + 1)
                                    <!-- Half Star -->
                                    <img src="/themes/img/half.svg" alt="Half Star" width="17" class="logo_sticky">
                                @else
                                    <!-- Empty Star -->
                                    <img src="/themes/img/gray.svg" alt="Empty Star" width="17" class="logo_sticky">
                                @endif
                                
                            @endfor
                            <em>{{ $product->total_rating }}/5.0 - {{ __('messages.based_on') }} {{ $product->total_review }} {{ __('messages.reviews') }}</em>
                        </span>
                    </div>
                           
                            <div class="col-lg-4 review_detail">
                                @php
                                    $reviewCounts = [
                                        5 => $product->where('total_rating', 5)->count(),
                                        4 => $product->where('total_rating', 4)->count(),
                                        3 => $product->where('total_rating', 3)->count(),
                                        2 => $product->where('total_rating', 2)->count(),
                                        1 => $product->where('total_rating', 1)->count(),
                                    ];
                                    $maxRating = $product->total_rating ?? 0; // Handle cases where total_rating is undefined
                                    $hasReviews = array_sum($reviewCounts) > 0; // Check if any reviews exist
                                @endphp

                                @if ($maxRating>0)
                                
                                    @foreach ([5, 4, 3, 2, 1] as $stars)
                                        @php
                                            if ($maxRating >= $stars) {
                                                $isFilled = 100;
                                            } elseif ($maxRating > $stars - 1) {
                                                $isFilled = ($maxRating - ($stars - 1)) * 100; 
                                            } else {
                                                $isFilled = 0;
                                            }
                                        @endphp
                                        <div class="row">
                                            <div class="col-lg-9 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: {{ $isFilled }}%"
                                                        aria-valuenow="{{ $isFilled }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-3 text-end">
                                                <strong>{{ $stars }} {{ __('messages.stars') }}</strong>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h5 class="text-center text-white mt-4">{{ __('messages.too_few_review_to_display') }}</h5>
                                @endif
                            </div>


                        </div>
                    </div>
                    <!-- /container -->
                </div>
            </div>
            <!-- /reviews_summary -->

            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="review_card">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-review" type="button" role="tab"
                                        aria-controls="nav-review" aria-selected="true">{{ __('messages.reviews') }}</button>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-review" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                @if ($product->productReview->count() > 0)
                                    <div class="card">
                                        <div class="card-body">
                                          <div class="col-md-12 text-center">
                                                    <h5><b>{{ __('messages.your_review_write') }}</b></h5>
                                                    <p>{{ __('messages.review_write_sev') }}</p>
                                                    <a href="{{ url('consumer/product/write-review/' . $product->id) }}" class="btn_1 small">{{__('messages.write_review')}}</a>
                                          </div>
                                        </div>
                                 </div>
                                    @foreach ($product->productReview as $review)
                                        <div class="review_card">
                                            <div class="row">
                                                <div class="col-md-2 user_info">
                                                    <figure><img src="themes/img/avatar4.jpg" alt=""></figure>
                                                    <h5>{{ $review->user->first_name }} {{ $review->user->last_name }}
                                                    </h5>
                                                </div>
                                                <div class="col-md-10 review_content">
                                                    <div class="clearfix add_bottom_15">
                                                        
                                                        <span class="rating">
                                                            @php
                                                                $stars = $review->rating; // Get the integer part of the rating
                                                                $half_star = $review->rating - $stars >= 0.5; // Check if there is a half star
                                                            @endphp
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $stars)
                                                                    <img src="/themes/img/colored.svg" alt=""
                                                                        width="17" class="logo_sticky">
                                                                @elseif($half_star && $i == $stars + 1)
                                                                    {{-- <i class="fas fa-star-half-alt"></i> --}}
                                                                @else
                                                                    <img src="/themes/img/gray.svg" alt=""
                                                                        width="17" class="logo_sticky">
                                                                @endif
                                                            @endfor
                                        
                                                            <em>{{ $review->rating }}/5.00</em>
                                                            <h4>{{ $review->review_title }}</h4>
                                                        </span>
                                                       
                                                        <em>
                                                            {{ __('messages.published') }}
                                                            @if ($review->created_at->isToday())
                                                                {{ $review->created_at->diffForHumans() }}
                                                            @elseif($review->created_at->isYesterday())
                                                                {{ $review->created_at->diffForHumans() }}
                                                            @else
                                                                {{ $review->created_at->diffForHumans() }}
                                                            @endif
                                                        </em>
                                                    </div>
                                                    {{-- <h4>"Avesome Experience"</h4> --}}
                                                    <p>{{ $review->review }}.</p>
                                                    <ul>
                                                        <li>
                                                            <span class=""></span>
                                                            <a href="#" class=""
                                                                data-review-id="{{ $review->id }}" data-liked="">
                                                                <a href="#0"><i
                                                                        class="icon_like_alt"></i><span>{{ __('messages.useful') }}</span></a>

                                                        </li>
                                                        <li><a  href="{{ url('consumer/product/review/reported/'.$review->id) }}" ><i
                                                                    class="icon_dislike_alt"></i><span>{{ __('messages.report') }}</span></a>
                                                        </li>
                                                        <li><span>{{ __('messages.share') }}</span> <a href="#0"><i
                                                                    class="ti-facebook"></i></a> <a href="#0"><i
                                                                    class="ti-twitter-alt"></i></a> <a
                                                                href="#0"><i class="ti-tiktok"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- /row -->
                                        </div>
                                    @endforeach
                                @else
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <h5><b>{{ __('messages.no_review') }}</b></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="card">
                                        <div class="card-body">
                                          <div class="col-md-12 text-center">
                                                    <h5><b>{{ __('messages.your_review_write') }}</b></h5>
                                                    <p>{{ __('messages.review_write_sev') }}</p>
                                                    <a href="{{ url('consumer/product/write-review/' . $product->id) }}" class="btn_1 small">{{__('messages.write_review')}}</a>
                                          </div>
                                        </div>
                                 </div>
                                @endif
                            </div>
                            
                        </div>
                        <!-- /review_card -->
                        <div class="pagination__wrapper add_bottom_15">
                            <ul class="pagination">
                                <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                                <li><a href="#0" class="active">1</a></li>
                                <li><a href="#0">2</a></li>
                                <li><a href="#0">3</a></li>
                                <li><a href="#0">4</a></li>
                                <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                            </ul>
                        </div>
                        <!-- /pagination -->
                    </div>
                    <!-- /col -->
                    <div class="col-lg-4">
                        <div class="box_general company_info">
                            <h3>{{ $product->product_name }}</h3>
                            <h6 class="" style="color:#7D6D0B;font-weight:bold">{{ __('messages.provided_by') }} {{$product->business->business_name}}</h6>
                            <p>{{ $product->description }}</p>
                            {{-- <p><strong>Website</strong><br><a href="#0">
                                    @if ($product->website != '')
                                        {{ $product->website }}
                                    @else
                                        NA
                                    @endif
                                </a></p>
                            <p><strong>Email</strong><br><a href="#0">
                                    @if ($product->product_email != '')
                                        {{ $product->product_email }}
                                    @else
                                        NA
                                    @endif
                                </a></p>
                            <p><strong>Telephone</strong><br>
                                @if ($product->product_phone != '')
                                    +255 {{ $product->product_phone }}
                                @else
                                    NA
                                @endif
                            </p> --}}
                            <p class="follow_company"><strong>{{ __('messages.follow_us') }}</strong><br><a href="#0"><i
                                        class="social_facebook_circle"></i></a><a href="#0"><i
                                        class="social_twitter_circle"></i></a><a href="#0"><i
                                        class="fab fa-tiktok"></i></a><a href="#0"><i
                                        class="social_instagram_circle"></i></a></p>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->

        </main>
        <!--/main-->

          @include('consumer.themes.components.footer')
    </div>
    <!-- page -->

    <!-- Sign In Popup -->
    <div id="report-dialog" class="zoom-anim-dialog mfp-hide">

        <form id="regForm" action="" method="POST">
            <form id="regForm" action="/action_page.php">
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
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Hamful or illegal 
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Personal information
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Advertising or promotional
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Not based on a genuine experience
                        </label>
                    </div>
                </div>
                <div class="tab">Birthday:
                    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
                    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
                    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
                </div>
                <div class="tab">Login Info:
                    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
                    <p><input placeholder="Password..." oninput="this.className = ''" name="pword"
                            type="password"></p>
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
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </form>
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Popup -->

    <div id="toTop"></div>
    <!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('themes/js/common_scripts.js') }}"></script>
    <script src="{{ asset('themes/js/functions.js') }}"></script>
    <script src="{{ asset('themes/assets/validate.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(".like-review").click(function(event) {
                alert('Test')
            });
        });
        // document.addEventListener("DOMContentLoaded", function() {
        //     const likeButtons = document.querySelectorAll(".like-review");
        //     const dislikeButtons = document.querySelectorAll(".dislike-review");

        //     likeButtons.forEach(button => {
        //         button.addEventListener("click", function(event) {
        //             event.preventDefault();
        //             alert("Test")
        //             const reviewId = button.getAttribute("data-review-id");
        //             const isLiked = button.getAttribute("data-liked");

        //             // Simulate an AJAX request to the server (replace with actual AJAX code)
        //             $.post('/review/like', {
        //                     review_id: reviewId
        //                 })
        //                 .done(function(response) {
        //                     if (isLiked === "1") {
        //                         button.setAttribute("data-liked", "0");
        //                     } else {
        //                         button.setAttribute("data-liked", "1");
        //                     }
        //                 })
        //                 .fail(function(error) {
        //                     console.error(error);
        //                 });
        //         });
        //     });

        //     dislikeButtons.forEach(button => {
        //         button.addEventListener("click", function(event) {
        //             event.preventDefault();
        //             const reviewId = button.getAttribute("data-review-id");
        //             const isDisliked = button.getAttribute("data-disliked");

        //             // Simulate an AJAX request to the server (replace with actual AJAX code)
        //             $.post('/review/dislike', {
        //                     review_id: reviewId
        //                 })
        //                 .done(function(response) {
        //                     if (isDisliked === "1") {
        //                         button.setAttribute("data-disliked", "0");
        //                     } else {
        //                         button.setAttribute("data-disliked", "1");
        //                     }
        //                 })
        //                 .fail(function(error) {
        //                     console.error(error);
        //                 });
        //         });
        //     });
        // });
    </script>

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

<script>

</script>

</body>

</html>
