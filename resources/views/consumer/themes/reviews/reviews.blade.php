<!DOCTYPE html>
<html lang="en">

<head>

    <title>IPE TANO  | {{ __('messages.businesses') }}</title>

    @include('consumer.themes.components.head')





</head>

    @include('consumer.themes.components.special-css.reviews-page-css')

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

        
        <header class="header_in ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 ">
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


                            {{-- <li><a href="{{ url('/register') }}" class="btn_top">Register For Consumer</a></li> --}}
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
                        <nav id="menu" class="main-menu ">
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

        <main class="">
            <div id="results" class="">
                <div class="container ">
                    <div class="row justify-content-between">
                        <div class="col-lg-12 ">
                        <div class="d-flex my-4">
                          <h1 class="mt-1 h1foryou">{{ __('messages.discover') }}</h1>
                             <a href="#0" class="search_mob btn_search_mobile px-2" style="margin-left:3em"></a>
                        </div>
                            

                        </div>
                        <div class="col-xl-5 col-md-6 col-2">
                            <!-- /open search panel -->
                            <div class="row g-0 custom-search-input-2 inner ">
                                {{-- <div class="col-lg-7">
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
                                    <div class="form-group">
                                        <input class="form-control" type="text"
                                            placeholder="Search a company">
                                        <i class="icon_search"></i>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-lg-4">
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
                                </div> --}}

                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                    <div class="search_mob_wp ">
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

          
            <!-- /filters -->

            <div class="collapse" id="filters">
                <div class="container margin_30_5">
                    <div class="row">
                        <div class="col-md-4">
                            <h6>Rating</h6>
                            <ul>
                                <li>
                                    <label class="container_check">Excellent 9+ <small>67</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Good 8+ <small>89</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Okay 7+ <small>45</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Bad 6+ <small>78</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Terrible 2+ <small>28</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            {{-- <h6>Tags</h6>
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
                            </ul> --}}
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



            <div class="container ">
                <div class="row">   
                    <!-- Left Section (Company Listings) -->
                        <div class="col-md-8 mt-5">
                                <div class="col-md-12">
                                    <form action="#" method="GET" class="form-inline d-flex" id="searchForm">
                                        <input type="text" name="search" value="{{ request()->input('search') }}" class="form-control mb-5" style="margin-right:3em!important" placeholder="{{ __('messages.search_companies') }}">
                                        <button type="submit" class="btn_2 ml-5 mb-5">{{ __('messages.search') }}</button>
                                    </form>

                                    <div id="preloader" style="display:none;">
                                        <div class="spinner"></div>
                                    </div>

                                    <div id="no-results" style="display: none; text-align: center; margin-top: 20px;">
                                        <p>No results found for your search.</p>
                                    </div>
                                </div>
                                <div id="isotope-wrapper" class="isotope-">
                                        @foreach ($businesses as $key)
                                            <div class="company_listing isotope-item high ">
                                                <!-- Card content goes here -->
                                                    <div class="row">
                                                            <div class="col-12 col-md-9 wrapper">
                                                                <div class="company_info">
                                                                    <figure>
                                                                        <a href="{{ url('/business/reviews/' . $key->id) }}">
                                                                            <img src="{{ url('images/business/'.$key->logo) }}" alt="{{ __('messages.business_logo') }}" class="img-fluid">
                                                                        </a>
                                                                    </figure>
                                                                    <h3>
                                                                        <a href="{{ url('/business/reviews/' . $key->id) }}">
                                                                            {{ $key->business_name }}
                                                                        </a>
                                                                    </h3>
                                                                    <p>{{ \Illuminate\Support\Str::limit($key->description, 250, '...') }}</p>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-md-3 mt-3 mt-md-0">
                                                                <div class="text-center float-md-end">
                                                                    <span class="rating">
                                                                        <strong>{{ __('messages.based_on') }} {{ $key->total_review }} {{ __('messages.reviews') }} </strong>
                                                                        @php
                                                                            $stars = $key->total_rating; 
                                                                            $half_star = $key->total_rating - $stars >= 0.5; 
                                                                        @endphp
                                                                        @for ($i = 1; $i <= 5; $i++)
                                                                            @if ($i <= $stars)
                                                                                <img src="/themes/img/colored.svg" alt="star" width="17" class="logo_sticky">
                                                                            @elseif($half_star && $i == $stars + 1)
                                                                                <!-- Add Half Star Icon if needed -->
                                                                            @else
                                                                                <img src="/themes/img/gray.svg" alt="star" width="17" class="logo_sticky">
                                                                            @endif
                                                                        @endfor
                                                                    </span>
                                                                    <a href="{{ url('/business/reviews/' . $key->id) }}" class="btn_1 small mt-2 mt-md-3">{{ __('messages.read_more') }}</a>
                                                                    <a href="{{ url('consumer/business/write-review/' . $key->id) }}" class="btn_1 small mt-2 mt-md-3">{{ __('messages.write_review') }}</a>
                                                                </div>
                                                            </div>
                                                    </div>
                                            </div>
                                        @endforeach
                                </div>
                                <div id="pagination-controls" class="pagination-controls">
                                {{ $businesses->links('pagination::bootstrap-5') }}
                                </div>
                        </div>

                        <div class="col-md-4 mt-5">
                        <h3 class="categories-title  ">{{ __('messages.top_categories') }}</h3> 
                            <div class="card-slider" style="width:24em;padding:10px;text-align:center">
                        <div class="cards-wrapper mt-1 ">
                           @foreach($topCategories as $topCat)
                                    <a href="{{ url('category-businesses/'.$topCat->category_name) }}" class="card" style="height:14em;text-align:center">
                                        <img src="{{ url('images/category/'.$topCat->category_icon) }}"  alt="{{ __('messages.category_icon') }}">
                                        <h5>{{ __('messages.categories_list.' . strtolower(str_replace(' ', '_', $topCat->category_name))) }}</h5>
                                    </a>
                           @endforeach
                                </div>

                            </div>

                            <div class="card shadow-lg mb-4 "  style="width:auto;margin:2em 0.2em">
                            
                                <div class="company-container">
                                    <span class="company-title">{{ __('messages.best_rated') }}</</span>
                                    <div class="logos-container">
                                        <img src="/themes/img/colored.svg" alt="Logo 1" width="17" class="logo-image">
                                        <img src="/themes/img/colored.svg" alt="Logo 2" width="17" class="logo-image">
                                        <img src="/themes/img/colored.svg" alt="Logo 3" width="17" class="logo-image">
                                        <img src="/themes/img/colored.svg" alt="Logo 3" width="17" class="logo-image">
                                        <img src="/themes/img/colored.svg" alt="Logo 3" width="17" class="logo-image">

                                    </div>
                                </div>
                            @foreach($bestCompanies as $best)
                         
                            <div class="company-card">
                                    <a href="{{ url('/business/reviews/' . $best->id) }}" class="" >
                                    <div class="row">
                                      <div class="col-4 col-md-3 col-sm-4">
                                             <img src="{{ url('images/business/'.$best->logo) }}" alt="{{$best->business_logo}}" class="company-logo">
                                      </div>
                                      <div class="col-8 col-md-9 col-sm-8">
                                           <span class="company-name" style="white-space: nowrap; ">{{$best->business_name}}</span>

                                      </div>
                                    </div>
                                    </a>
                                </div>
                            @endforeach
                               

                            </div>

                            

                            

                        </div>
            </div>



            

            <!-- /container -->

        </main>
        <!--/main-->
        @include('consumer.themes.components.footer')
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
          @include('consumer.themes.components.scripts')

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
      @include('consumer.themes.components.special-scripts.reviews-page-scripts')



</body>

</html>
