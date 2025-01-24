<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>IPE TANO | {{ $service->service_name }} </title>

    @include('consumer.themes.components.head')

</head>
@include('consumer.themes.components.special-css.home-page-css')
<link href="{{ asset('themes/css/new.css') }}" rel="stylesheet" type="text/css" />

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
                            {{-- <li><a href="write-review.html" class="btn_top">Write a Review</a></li> --}}
                            <li><a href="companies-landing.html" class="btn_top company">{{ __('messages.for_business') }}</a></li>
                            @if (Sentinel::check())
                                <li><a href="{{ url('/logout') }}" class="login" title="{{ __('messages.signin') }}">{{ __('messages.signin') }}</a></li>
                            @else
                            @endif


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
                                {{-- <li><a href="{{ url('logout') }}" id="sign-in" class="login" title="Sign Out">Sign Out</a></li> --}}
                                <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <span><a href="{{ url('/') }}">{{ __('messages.home') }}</a></span>
                    </li>
                    <li class="{{ Request::is('categories') ? 'active' : '' }}">
                        <span><a href="{{ url('categories') }}">{{ __('messages.categories') }}</a></span>
                    </li>
                    <li class="{{ Request::is('businesses') ? 'active' : '' }}">
                        <span><a href="{{ url('businesses') }}">{{ __('messages.businesses') }}</a></span>
                    </li>

                                    {{-- <ul>
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
                                    </ul> --}}
                                </li>
                                {{-- <li><span><a href="pricing.html">Pricing</a></span></li>
                                <li><span><a href="#0">Pages</a></span>
                                    <ul>
                                        <li><a href="companies-landing.html">Compannies Landing Page</a></li>
                                        <li><a href="all-categories.html">Companies Categories Page</a></li>
                                        <li><a href="category-companies-listings-filterstop.html">Companies Listing
                                                Page</a></li>
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
                                </li> --}}
                                {{-- <li><span><a href="#0">Buy template</a></span></li> --}}
                                {{-- <li class="d-block d-sm-none"><span><a href="#0" class="btn_top">Write a
                                            review</a></span></li> --}}
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
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <form action="" id="reviewForm">
                            <div class="box_general write_review">
                                <h4>{{ __('messages.write_review_for') }} {{ $service->service_name }}</h4>
                                <input class="form-control" id="service_id" name="product_id" type="text"
                                    value="{{ $service->id }}" hidden>
                                <div id="alertMessage"></div>

                                <!-- /rating_submit -->

                                @if (Session::get('service_id') == '')
                                    <div class="rating_submit">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="d-block">{{ __('messages.overall_rating') }}</label>
                                                    <span class="rating">
                                                        <input type="radio" class="rating-input" id="5_star"
                                                            name="rating_input" value="5"><label for="5_star"
                                                            class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="4_star"
                                                            name="rating_input" value="4"><label for="4_star"
                                                            class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="3_star"
                                                            name="rating_input" value="3"><label for="3_star"
                                                            class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="2_star"
                                                            name="rating_input" value="2"><label for="2_star"
                                                            class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="1_star"
                                                            name="rating_input" value="1"><label for="1_star"
                                                            class="rating-star"></label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="d-block " style="color: transparent;">{{ __('messages.overall_rating') }}</label>
                                                <h5 class="d-block" id="displayhere"></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('messages.review_title') }}</label>
                                        <input class="form-control" name="review_title" type="text"
                                            placeholder="{{ __('messages.review_placeholder') }}" 
                                            required>
                                    </div>

                                    <input class="form-control" name="service_id" type="text"
                                        value="{{ $service->id }}" hidden>
                                    <div class="form-group">
                                        <label>{{ __('messages.your_review') }}</label>
                                        <textarea class="form-control" style="height: 180px;" name="review_input"
                                            placeholder="{{ __('messages.review_write') }}" required></textarea>
                                    </div>
                                @else
                                    <div class="rating_submit">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="d-block">{{ __('messages.overall_rating') }}</label>
                                                    <span class="rating">
                                                        <input type="radio" class="rating-input" id="5_star"
                                                            <?php echo Session::get('rating_input') == '5' ? 'checked' : ''; ?> name="rating_input"
                                                            value="5"><label for="5_star"
                                                            class="rating-star"></label>

                                                        <input type="radio" class="rating-input" id="4_star"
                                                            <?php echo Session::get('rating_input') == '4' ? 'checked' : ''; ?> name="rating_input"
                                                            value="4"><label for="4_star"
                                                            class="rating-star"></label>

                                                        <input type="radio" class="rating-input" id="3_star"
                                                            <?php echo Session::get('rating_input') == '3' ? 'checked' : ''; ?> name="rating_input"
                                                            value="3"><label for="3_star"
                                                            class="rating-star"></label>

                                                        <input type="radio" class="rating-input" id="2_star"
                                                            <?php echo Session::get('rating_input') == '2' ? 'checked' : ''; ?> name="rating_input"
                                                            value="2"><label for="2_star"
                                                            class="rating-star"></label>

                                                        <input type="radio" class="rating-input" id="1_star"
                                                            <?php echo Session::get('rating_input') == '1' ? 'checked' : ''; ?> name="rating_input"
                                                            value="1"><label for="1_star"
                                                            class="rating-star"></label>

                                                    </span>
                                                    <div class="col-md-6">
                                                        <label class="d-block " style="color: transparent;">{{ __('messages.overall_rating') }}</label>
                                                        <h5 class="d-block" id="displayhere"></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>{{ __('messages.review_title') }}</label>
                                            <input class="form-control" name="review_title" type="text"
                                                value="{{ Session::get('review_title') }}"
                                                placeholder="If you could say it in one sentence, what would you say?"
                                                required>
                                        </div>

                                        <input class="form-control" name="service_id" type="text"
                                            value="{{ Session::get('service_id') }}" hidden>
                                        <div class="form-group">
                                            <label>{{ __('messages.your_review') }}</label>
                                            <textarea class="form-control" style="height: 180px;" name="review_input"
                                                placeholder="{{ __('messages.review_write') }}" required>{{ Session::get('review_input') }}</textarea>
                                        </div>
                                    </div>
                                @endif

                                {{-- <div class="form-group">
										<label>Add your photo (optional)</label>
										<div class="fileupload"><input type="file" name="fileupload" accept="image/*"></div>
									</div> --}}
                                {{-- <div class="form-group">
										<div class="checkboxes float-start add_bottom_15 add_top_15">
											<label class="container_check">Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</div>
									</div> --}}
                                <button type="button" class="btn_1" id="submitBtn">{{ __('messages.submit') }}</button>
                            </div>
                        </form>
                    </div>

                    <!-- /col -->
                    <div class="col-lg-4">
                        <div class="latest_review">
                            <h4>{{ __('messages.recent_reviews_for') }}<br>{{ $service->service_name }}</h4>
                            <div id="reviewsContainer"></div>
                            <!-- /review_listing -->
                        </div>
                        <!-- /latest_review -->

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

    <div id="toTop"></div><!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('themes/js/common_scripts.js') }}"></script>
    <script src="{{ asset('themes/js/functions.js') }}"></script>
    <script src="{{ asset('themes/assets/validate.js') }}"></script>

    <script>
        function fetchRecentReviews() {

            let service_id = $('#service_id').val();

            $.ajax({
                url: '/consumer/service-review-list/' + service_id, // The URL to the Laravel route
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Call a function to update the HTML with the fetched data
                    console.log(data);
                    var reviews = data[0].service_review;
                    updateReviewsCard(reviews);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        function formatDateToDMY(dateString) {
            // Create a new Date object from the input string
            const dateObj = new Date(dateString);

            // Extract day, month, and year from the Date object
            const day = dateObj.getUTCDate();
            const month = dateObj.getUTCMonth() + 1; // Months are zero-based, so we add 1
            const year = dateObj.getUTCFullYear();

            // Format day, month, and year to two-digit format if needed (e.g., 07 instead of 7)
            const formattedDay = String(day).padStart(2, "0");
            const formattedMonth = String(month).padStart(2, "0");

            // Return the formatted date in "d-m-y" format
            return `${formattedDay}-${formattedMonth}-${year}`;
        }

        function updateReviewsCard(reviews) {
            // Assuming you have a container to display the reviews, set its ID as 'reviewsContainer'.
            var container = document.getElementById('reviewsContainer');

            // Clear any existing reviews
            container.innerHTML = '';

            // Loop through the fetched reviews and update the HTML
            reviews.forEach(item => {
                // console.log(item.reviews['rating']);
                // var review = item.reviews[0];
                // console.log(review.review)

                // Create the review listing HTML dynamically
                var reviewHTML =
                    '<div class="review_listing">' +
                    '<div class="clearfix add_bottom_10">' +
                    '<figure><img src="/themes/img/avatar1.jpg" alt=""></figure>' +
                    '<span class="rating ">' + getStarIcons(item.rating) + '<em>' +
                    item.rating + '/5.00</em></span>' +
                    // '<small>' + items.business.business_name + '</small>' +
                    '</div>' +
                    '<h3><strong>' + item.user.first_name + ' ' + item.user.last_name + '</strong></h3>' +
                    '<h4>"' + item.review_title + '"</h4>' +
                    '<p>' + item.review + '</p>' +
                    '<ul class="clearfix">' +
                    '<li><small>' + formatDateToDMY(item.created_at) + '</small></li>' +
                    // '<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>' +
                    '</ul>' +
                    '</div>';

                // Append the review listing HTML to the container
                container.innerHTML += reviewHTML;

            });

            // Function to generate star icons dynamically based on the rating value
            function getStarIcons(rating) {
                var filledStars = Math.floor(rating); // Get the integer part of the rating
                var halfStar = rating - filledStars >= 0.5; // Check if there is a half star
                var emptyStars = 5 - filledStars - (halfStar ? 1 : 0); // Calculate the number of empty stars

                var starIcons = '';
                for (var i = 0; i < filledStars; i++) {
                    starIcons += '<img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky">';
                }
                if (halfStar) {
                    starIcons +=
                        '<i class="icon_star-half_alt"></i>'; // You may need to use the appropriate class for a half star icon
                }
                for (var j = 0; j < emptyStars; j++) {
                    starIcons += '<img src="/themes/img/gray.svg" alt="" width="17" class="logo_sticky">';
                }
                return starIcons;
            }
        }

        // Call the fetchRecentReviews function when the page loads or whenever you need to update the reviews card.
        document.addEventListener("DOMContentLoaded", function() {
            fetchRecentReviews();
        });
    </script>
    <script>
        $(document).ready(function() {
            // Add a click event to the Submit button
            $("#submitBtn").on("click", function() {
                // Get form data
                var formData = $("#reviewForm").serialize();
                // alert(formData)
                // Send the AJAX request
                // alert(formData)
                $.ajax({
                    type: "POST",
                    url: "/consumer/service/review-store",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response)
                        if (response.message == "success") {
                            // console.log(response)
                            // $("#alertMessage").html(
                            //     '<div class="alert alert-success" role="alert">Review submitted successfully!</div>'
                            // );
                            location.reload();
                            $("#reviewForm")[0].reset();
                        } else {
                            // console.log(response)
                            window.location.href = '/login';
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error)
                        // Handle the error (if needed)
                        // alert("An error occurred while saving the review.");
                        $("#alertMessage").html(
                            '<div class="alert alert-danger" role="alert">Failed to submit the review.</div>'
                        );
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Add an event listener to radio buttons
            $("input[name='rating_input']").change(function() {
                var selectedRating = $("input[name='rating_input']:checked").val();
                var feedback = "";

                switch (selectedRating) {
                    case "5":
                        feedback = "Excellent";
                        break;
                    case "4":
                        feedback = "Good";
                        break;
                    case "3":
                        feedback = "Okay";
                        break;
                    case "2":
                        feedback = "Bad";
                        break;
                    case "1":
                        feedback = "Terrible";
                        break;
                    default:
                        feedback = "";
                }

                // Update the 'displayhere' element with the feedback
                $("#displayhere").text(feedback);
            });
        });
    </script>
</body>

</html>
