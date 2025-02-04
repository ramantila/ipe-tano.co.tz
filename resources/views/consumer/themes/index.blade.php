<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>IPE TANO | {{ __('messages.home') }}</title>
     @include('consumer.themes.components.head')

</head> 
     
     @include('consumer.themes.components.special-css.home-page-css')
         <link href="{{ asset('themes/css/new.css') }}" rel="stylesheet" type="text/css" />

<style>
body{
    background-color:#eef3f7!important;
}
@media (max-width: 767px) {
    
.col-31 {
    flex: 0 0 auto; 
    width: 6.5%; 
   
}

@media (max-width: 767px) {
    
.col-31 {
    flex: 0 0 auto; 
    width: 6.5%; 
   
}


}
}

.search-results{
    position: relative;
    top:0.5em;
    border-radius:10px;
}

</style>

<body>

    <div id="page">

       @include('consumer.themes.components._header')
        <!-- /header -->

        <main>



            <section class="hero_single version_2">
                <div class="wrapper">
                    <div class="container">
                        <div class="row justify-content-center pt-lg-5">
                            <div class="col-xl-8 col-lg-6">
                                {{-- <h3 class="hero_text_main ">Umeionaje bidhaa au huduma uliyotumia?</h3>
                                <p>Wajulishe wengine!.</p> --}}
                               <div class="hero_text">
                                    <h3 class="hero_text_main font-weight-normal dty" 
                                    style="font-size:3.5em;font-family: Kumbh Sans, sans-serif !important;">{{ __('messages.comment_product') }}</h3>
                                    <p class="wajulishe">{{ __('messages.share_experience') }}</p>
                                </div>

                                <form method="post" action="grid-listings-filterscol.html">
                                    <div class="custom-search-input-2">
                                        <div class="form-group">
                                            <input class="form-control" type="text" id="search-query"
                                                placeholder="{{ __('messages.search_companies') }}"
                                                onkeyup="searchCompanies()">
                                            <i class="icon_search"></i>
                                            <div id="results" class="search-results" style="height:20em!important; overflow-y: auto; overflow-x: hidden; position:sticky">
                                            </div>
                                            <input class="form-control" type="text" id="search-product-query"
                                                placeholder="{{ __('messages.product_or_service') }}" onkeyup="searchProduct()">
                                            <i class="icon_search"></i>
                                            <div id="search-results" class="search-results" style="height:20em!important; overflow-y: auto; overflow-x: hidden;">
                                                {{-- <input type="submit" value="Search"> --}}
                                            </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- <section class="hero_single version_2">
                <div class="wrapper">
                    <div class="container">
                        <div class="row justify-content-center pt-lg-5">
                            <div class="col-xl-8 col-lg-6">
                                <h3>Umeionaje bidhaa au huduma uliyotumia?</h3>
                                <p style="font-size: 45px;"> Wajulishe wengine!. </p>
                                <form id="search-form">
                                    <div class="custom-search-input-2">
                                        <div class="form-group">
                                            <input class="form-control" type="text" id="search-query"
                                                placeholder="Company or Category" onkeyup="searchCompanies()">
                                            <div id="results" class="search-results">
                                                {{-- <div class="row">
                                                    <h5>Company</h5>
                                                    <a href="business/reviews/4">
                                                        <div class="col-md-6">
                                                            <h6>Company Name</h6>
                                                            <p>6.5K Reviews</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <img src="/themes/img/colored.svg" alt=""
                                                                width="17" class="logo_sticky"> 4.6
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <h5>Category</h5>
                                                    <a href="business/reviews/4">
                                                        <div class="col-md-6">
                                                            <h6>Category Name</h6>
                                                            <p>6.5K Reviews</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <img src="/themes/img/colored.svg" alt=""
                                                                width="17" class="logo_sticky">
                                                            4.6
                                                        </div>
                                                    </a>
                                                </div> --}}
                                            </div>
                                            {{-- <i class="icon_search"></i> --}}
                                        </div>
                                        {{-- <button type="submit" class="btn btn-primary btn-block"
                                            style="width: 100%; background-color: #FEF08A; color: black; border: none; padding: 16px 33px;">Search
                                        </button> --}}
                                    </div>
                                </form>
                                <form id="search-product">
                                    <div class="custom-search-input-2">
                                        <div class="form-group">
                                            <input class="form-control" type="text" id="search-product-query"
                                                placeholder="Product or Service" onkeyup="searchProduct()">
                                            <div id="search-results" class="search-results">
                                                {{-- <div class="row">
                                                    <h5>Company</h5>
                                                    <a href="business/reviews/4">
                                                        <div class="col-md-6">
                                                            <h6>Company Name</h6>
                                                            <p>6.5K Reviews</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <img src="/themes/img/colored.svg" alt=""
                                                                width="17" class="logo_sticky"> 4.6
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <h5>Category</h5>
                                                    <a href="business/reviews/4">
                                                        <div class="col-md-6">
                                                            <h6>Category Name</h6>
                                                            <p>6.5K Reviews</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <img src="/themes/img/colored.svg" alt=""
                                                                width="17" class="logo_sticky">
                                                            4.6
                                                        </div>
                                                    </a>
                                                </div> --}}
                                            </div>
                                            {{-- <i class="icon_search"></i> --}}
                                        </div>
                                        {{-- <button type="submit" class="btn btn-primary btn-block"
                                            style="width: 100%; background-color: #FEF08A; color: black; border: none; padding: 16px 33px;">Search
                                        </button> --}}
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-5 col-lg-6 text-end d-none d-lg-block">
                                <img src="https://assets6.lottiefiles.com/packages/lf20_MeTWrj.json" alt=""
                                    class="img-fluid">
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_MeTWrj.json"
                                    background="" speed="1" style="width: 710px; height: 510px;" autoplay loop>
                                </lottie-player>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- /hero_single -->

           <div class="container margin_60_35">
    <div class="main_title_3">
        <h2 class="">{{ __('messages.top_categories') }}</h2>
        <p class="">{{ __('messages.discover_top_categories') }}</p>

        <a class="viewall bi1"href="{{ url('categories') }}">{{ __('messages.view_all1') }}</a>
    </div>

    <?php $categories = App\Models\Category::paginate(8); ?>

    <div class="scroll-indicator d-block d-md-none text-center">
        <span>← {{ __('messages.scroll') }} →</span>
    </div>

    <div class="row row1  ">
        @foreach ($categories as $key)
            <div class="col-31 col-md-6 my-3 ">
                <a href="{{ url('category-businesses/'.$key->category_name) }}" class="text-center category-item">
                    <img src="{{ url('images/category/' . $key->category_icon) }}" class="category-icon" alt="">
                    <h4 class="category-name">{{ __('messages.categories_list.' . strtolower(str_replace(' ', '_', $key->category_name))) }}</h4>
                </a>
            </div>
        @endforeach
    </div>

      
</div>

    </div>


    <!-- /container -->

    <div class="bg_color_1">
        <div class="container margin_60">
            <div class="main_title_3">
                <h2 class=" ">{{ __('messages.latest_reviews') }}</h2>
                {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
            </div>
            <div class="row  " id="reviewsContainer">

            </div>
            {{-- <div id="reccomended" class="owl-carousel owl-theme"> --}}


                {{-- <div class="item">
                    <div class="review_listing">
                        <div class="clearfix">
                            <figure><img src="img/avatar2.jpg" alt=""></figure>
                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i
                                    class="icon_star"></i><i class="icon_star empty"></i><i
                                    class="icon_star empty"></i><em>4.50/5.00</em></span>
                            <small>Shops</small>
                        </div>
                        <h3><strong>Marika</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                        <h4>"Great products"</h4>
                        <p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
                        <ul class="clearfix">
                            <li><small>Published: 26.08.2018</small></li>
                            <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                        </ul>
                    </div>
                </div> --}}

                {{-- <div class="item">
                    <div class="review_listing">
                        <div class="clearfix">
                            <figure><img src="img/avatar3.jpg" alt=""></figure>
                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i
                                    class="icon_star"></i><i class="icon_star"></i><i
                                    class="icon_star empty"></i><em>4.50/5.00</em></span>
                            <small>Shops</small>
                        </div>
                        <h3><strong>Lukas Lee</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                        <h4>"Excellent Support"</h4>
                        <p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
                        <ul class="clearfix">
                            <li><small>Published: 26.08.2018</small></li>
                            <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                        </ul>
                    </div>
                </div> --}}

                {{-- <div class="item">
                    <div class="review_listing">
                        <div class="clearfix">
                            <figure><img src="img/avatar4.jpg" alt=""></figure>
                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i
                                    class="icon_star"></i><i class="icon_star"></i><i
                                    class="icon_star"></i><em>4.50/5.00</em></span>
                            <small>Shops</small>
                        </div>
                        <h3><strong>Margaret</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                        <h4>"Perfect"</h4>
                        <p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
                        <ul class="clearfix">
                            <li><small>Published: 26.08.2018</small></li>
                            <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="review_listing">
                        <div class="clearfix">
                            <figure><img src="img/avatar5.jpg" alt=""></figure>
                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i
                                    class="icon_star"></i><i class="icon_star"></i><i
                                    class="icon_star empty"></i><em>4.50/5.00</em></span>
                            <small>Shops</small>
                        </div>
                        <h3><strong>Mark Twain</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                        <h4>"Shipping Very Fast"</h4>
                        <p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
                        <ul class="clearfix">
                            <li><small>Published: 26.08.2018</small></li>
                            <li><a href="#0" class="btn_1 small">Read review</a></li>
                        </ul>
                    </div>
                </div> --}}

                {{--
            </div> --}}
            <!-- /carousel -->
        </div>
        <!-- /container -->
    </div>

    <div class="container margin_60_35 main">
        <div class="main_title_3">
            <h2 class="">{{ __('messages.top_businesses') }}</h2>
            <a class="viewall " href="{{ url('businesses') }}">{{ __('messages.view_all')}}</a>
        </div>
        <?php $categories = App\Models\Category::paginate(12); ?>
        <div class="container margin_60_35">
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="row ">
                    
                    @foreach ($topCompanies as $top)
                    {{-- first option --}}
                    {{-- <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow transition-card ">
                           
                            <div class="card-body" >
                                <h5 class="card-title"><a href="blog-post.html">{{ $top->business_name }}</a></h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($top->description, 100, '...') }}</p>
                            </div>
                            <div class=" text-center">
                                <a href="{{ url('/business/reviews/' . $top->id) }}" class="viewall ">View Company</a>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-md-4 mb-4">
                        <div class="card h-80 shadow transition-card">
                            <div class="card-body d-flex align-items-center">
                                <img src="{{ url('images/business/' . $top->logo) }}" alt="Company Image" class="rounded-circle me-3" style="width: 60px; height: 60px; ">
                                <div>
                                
                                    <h5 class="card-title mb-0"><a href="blog-post.html">{{ \Illuminate\Support\Str::limit($top->business_name, 20, '...') }}</a></h5>
                                    <div class="rating">
                                        <!-- Example using Font Awesome for the star icons -->
                                       
                                         <p class="category" style="margin-bottom:0px !important">{{ __(key: 'messages.categories_list.' . strtolower(str_replace(' ', '_', $top->category->category_name))) }}</p>
                                        <span class="rating"><em>{{$top->total_rating}}/5.00</em></span>
                                        {{-- '<span class="rating">' + getStarIcons(review.rating) + '<em>' +
                            review.rating + '/5.00</em></span>' + --}}
                                      
                                    </div>
                                </div>
                        </div>
                        <!-- Full-width description at the bottom -->
                        <div class="card-body mt-4">
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($top->description, 80, '...') }}</p>
                        </div>
                        <div class="text-center mb-1 mt-4">
                            <a href="{{ url('/business/reviews/' . $top->id) }}" class="viewall">{{ __('messages.view_company')}}</a>
                        </div>
                    </div>
                </div>










                    {{-- second option --}}
                    {{-- <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow transition-card">
                            <div class="card-body d-flex align-items-start">
                                <figure class="profile-photo me-3">
                                    <img src="{{ $top->company_logo }}" alt="{{ $top->business_name }}" class="img-fluid" />
                                </figure>
                                <div>
                                    <h5 class="card-title">
                                        <a href="blog-post.html">{{ $top->business_name }}</a>
                                    </h5>
                                    <span class="rating">
                                        <em>{{ $top->rating }}/5.00</em>
                                    </span>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($top->description, 100, '...') }}</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="{{ url('/business/reviews/' . $top->id) }}" class="viewall">View Company</a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- third option --}}
                    {{-- <div class="col-sm-4">
                        <div class="item shadow transition-card mt-5">
                            <div class="review_listing">
                                <div class="d-flex align-items-start mb-3">
                                    <figure class="me-3">
                                        <img src="${review.companyLogo}" alt="" class="img-fluid" />
                                    </figure>
                                    <div>
                                        <span class="rating">
                                            ${getStarIcons(review.rating)}<em>${review.rating}/5.00</em>
                                        </span>
                                        <small>${review.business.business_name}</small><br />
                                        <small>${review.business.category.category_name}</small>
                                    </div>
                                </div>
                                <h3><strong>${review.user.first_name} ${review.user.last_name}</strong></h3>
                                <p>${truncateText(review.review, 40)}</p>
                                <ul class="clearfix">
                                    <li><small>Published: ${formatDateToDMY(review.created_at)}</small></li>
                                    <li><a href="business/reviews/${review.business_id}" class="btn_1 small">Read review</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}


                    @endforeach
                </div>

                </div>
            </div>

        </div>
    </div>


  {{-- contact form --}}

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  {{-- end contact form --}}


    <!-- /bg_color_1 -->


    <!-- /call_section -->

    </main>
    <!-- /main -->
    @include('consumer.themes.components.footer')
    <!--/footer-->
    </div>
    <!-- page -->

    <!-- Sign In Popup -->
    {{-- <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
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
                    <p>You will receive an email containing a link allowing you to reset your password to a new
                        preferred one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                </div>
            </div>
        </form>
        <!--form -->
    </div> --}}
    <!-- /Sign In Popup -->

    <div id="toTop"></div>
    <!-- Back to top button -->

   
    
    @include('consumer.themes.components.scripts')
    @include('consumer.themes.components.special-scripts.home-page-scripts')



</body>

</html>