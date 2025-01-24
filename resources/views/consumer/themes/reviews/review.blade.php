<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPE TANO | {{$business->business_name}}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('themes/img/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

   
    {{-- font awesome added for tiktok --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- GOOGLE WEB FONT -->
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


@media (max-width: 768px) {
 .nav-link{
    padding:1.5em 0 !important;
    margin:0 0.5em;
}
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
.btn_1{
    color:#fff;
}

</style>
<body>

    <div id="page">

        <header class="header_in is_fixed menu_fixed" style="z-index:1">
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
                        <nav  id="menu" class="main-menu ">
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
                                <a href="{{ url('category-businesses/' . $business->category->category_name) }}">
                                    @if ($business->logo != '')
                                        <img src="{{ url('images/business/' . $business->logo) }}" alt="">
                                    @else
                                        <img src="/themes/img/ipetano-logo-primary.png" alt="">
                                    @endif
                                </a>
                            </figure>
                            <small>{{ __('messages.categories_list.' . strtolower(str_replace(' ', '_', $business->category->category_name))) }}</small>
                            <h1>{{ $business->business_name }}</h1>
                            <span class="rating">
                                @php
                                    $stars = floor($business->total_rating); // Full stars
                                    $half_star = $business->total_rating - $stars >= 0.5; // Half star
                                @endphp
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $stars)
                                        <img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky">
                                    @elseif ($half_star && $i == $stars + 1)
                                        <img src="/themes/img/half.svg" alt="" width="17" class="logo_sticky">
                                    @else
                                        <img src="/themes/img/gray.svg" alt="" width="17" class="logo_sticky">
                                    @endif
                                @endfor
                                <em>{{ $business->total_rating }}/5.0 - {{ __('messages.based_on') }} {{ $business->total_review }} {{ __('messages.reviews') }}</em>
                            </span>
                        </div>

                     <div class="col-lg-4 review_detail">
                                @php
                                    $reviewCounts = [
                                        5 => $business->where('total_rating', 5)->count(),
                                        4 => $business->where('total_rating', 4)->count(),
                                        3 => $business->where('total_rating', 3)->count(),
                                        2 => $business->where('total_rating', 2)->count(),
                                        1 => $business->where('total_rating', 1)->count(),
                                    ];
                                    $maxRating = $business->total_rating ?? 0; // Handle cases where total_rating is undefined
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
                    <div class="col-lg-8 col-md-4">
                        <div class="review_card ">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link " id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-product" type="button" role="tab"
                                        aria-controls="nav-product" aria-selected="false">{{ __('messages.products') }}</button>

                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-services" type="button" role="tab"
                                        aria-controls="nav-services" aria-selected="false">{{ __('messages.services') }}</button>
                                    <button class="nav-link active" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-review" type="button" role="tab"
                                        aria-controls="nav-review" aria-selected="true">{{ __('messages.business_review') }}</button>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content wow animate__slideInLeft" id="nav-tabContent">
                            <div class="tab-pane fade" id="nav-product" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                @if ($business->products->count() > 0)
                                    
                                    @foreach ($business->products as $product)
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h5><b>{{ $product->product_name }}</b></h5>
                                                        <p>{{ $product->description }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        @php
                                                            $stars = $product->total_rating; // Get the integer part of the rating
                                                            $half_star = $product->total_rating - $stars >= 0.5; // Check if there is a half star
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
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ __('messages.got') }} {{ $product->total_rating }}/5 {{ __('messages.based_on') }} {{ __('messages.reviews') }}
                                                        {{ $product->total_review }}
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="{{ url('consumer/product/read-more/' . $product->id) }}"
                                                            class="btn_1 small">{{ __('messages.read_more') }}</a>

                                                        <a href="{{ url('consumer/product/write-review/' . $product->id) }}"
                                                            class="btn_1 small">{{ __('messages.write_review') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <h5><b>{{ __('messages.no_product_found') }}</b></h5>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                            <div class="tab-pane fade " id="nav-services" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                @if ($business->services->count() > 0)
                                     
                                            
                                    @foreach ($business->services as $service)
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h5><b>{{ $service->service_name }}</b></h5>
                                                        <p>{{ $service->description }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        @php
                                                            $stars = $service->total_rating; // Get the integer part of the rating
                                                            $half_star = $service->total_rating - $stars >= 0.5; // Check if there is a half star
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
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{__('messages.got')}} {{ $service->total_rating }}/5 {{__('messages.based_on')}} {{__('messages.reviews')}}
                                                        {{ $service->total_review }}
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="{{ url('consumer/service/read-more/' . $service->id) }}"
                                                            class="btn_1 small">{{__('messages.read_more')}}</a>

                                                        <a href="{{ url('consumer/service/write-review/' . $service->id) }}"
                                                            class="btn_1 small">{{__('messages.write_review')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <h5><b>{{ __('messages.no_service_found') }}</b></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                
                                @endif
                            </div>
                            <div class="tab-pane fade  show active" id="nav-review" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                @if ($business->reviews->count() > 0)
                                 <div class="card">
                                        <div class="card-body">
                                          <div class="col-md-12 text-center">
                                                    <h5><b>{{ __('messages.your_review_write') }}</b></h5>
                                                    <p>{{ __('messages.review_write') }}</p>
                                                    <a href="{{ url('consumer/business/write-review/' . $business->id) }}" class="btn_1 small mt-2 mt-md-3">{{__('messages.write_review')}}</a>
                                          </div>
                                        </div>
                                 </div>
                                    @foreach ($business->reviews as $review)
                                        <div class="review_card">
                                            <div class="row">
                                                <div class="col-md-2 user_info">
                                                    <figure><img src="themes/img/avatar4.jpg" alt=""></figure>
                                                    <h5>{{ $review->user->first_name }} {{ $review->user->last_name }}
                                                    </h5>
                                                </div>
                                                <div class="col-md-10 review_content wow animate__slideInUp">
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
                                                           {{__('messages.published')}}
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
                                                        <li><a href="#0"><i
                                                                    class="icon_like_alt"></i><span>{{ __('messages.useful') }}</span></a>
                                                        </li>
                                                        <li><a
                                                                href="{{ url('business/review/reported/' . $review->id) }}"><i
                                                                    class="icon_dislike_alt"></i><span>{{ __('messages.report') }}</span></a>
                                                        </li>
                                                        <li><span>{{ __('messages.share') }}</span> 
                                                        <a href="https://www.facebook.com/sharer.php?u=" id="facebookShare" target="_blank"><i class="ti-facebook"></i></a>
                                                        <a href="https://www.instagram.com/" target="_blank"><i class="ti-instagram"></i></a>
                                                        <a href="#" id="twitterShare" target="_blank"><i class="ti-twitter-alt"></i></a>
                                                        <a href="https://www.tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
                                                        <a href="https://api.whatsapp.com/send/?text=" id="whatsappShare" target="_blank"><i class="fab fa-whatsapp"></i></a>
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
                                                    <h5><b>{{ __('messages.be_first') }}</b></h5>
                                                    <p>{{ __('messages.review_write') }}</p>
                                                    <a href="{{ url('consumer/business/write-review/' . $business->id) }}" class="btn_1 small mt-2 mt-md-3">{{ __('messages.write_a_review') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>


                        <!-- /review_card -->
                        {{-- <div class="review_card">
                            <div class="row">
                                <div class="col-md-2 user_info">
                                    <figure><img src="themes/img/avatar6.jpg" alt=""></figure>
                                    <h5>Marika</h5>
                                </div>
                                <div class="col-md-10 review_content">
                                    <div class="clearfix add_bottom_15">
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i
                                                class="icon_star"></i><i class="icon_star"></i><i
                                                class="icon_star empty"></i><em>4.50/5.00</em></span>
                                        <em>Published 54 minutes ago</em>
                                    </div>
                                    <h4>"Avesome Experience"</h4>
                                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et
                                        nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has
                                        ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer
                                        petentium cu his. Tollit molestie suscipiantur his et.</p>
                                    <ul>
                                        <li><a href="#0"><i class="icon_like_alt"></i><span>Useful</span></a>
                                        </li>
                                        <li><a href="#0"><i class="icon_dislike_alt"></i><span>Not
                                                    useful</span></a></li>
                                        <li><span>Share</span> <a href="#0"><i class="ti-facebook"></i></a> <a
                                                href="#0"><i class="ti-twitter-alt"></i></a> <a
                                                href="#0"><i class="ti-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row reply">
                                <div class="col-md-2 user_info">
                                    <figure><img src="img/avatar.jpg" alt=""></figure>
                                </div>
                                <div class="col-md-10">
                                    <div class="review_content">
                                        <strong>Reply from Good Electronics</strong>
                                        <em>Published 3 minutes ago</em>
                                        <p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros
                                            eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus
                                            te, erat legere fabulas has ut. Rebum laudem cum ea, ius
                                            essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur
                                            his et.<br><br>Thanks</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /reply -->
                        </div>
                        <!-- /review_card -->
                        <div class="review_card">
                            <div class="row">
                                <div class="col-md-2 user_info">
                                    <figure><img src="themes/img/avatar7.jpg" alt=""></figure>
                                    <h5>Lukas</h5>
                                </div>
                                <div class="col-md-10 review_content">
                                    <div class="clearfix add_bottom_15">
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i
                                                class="icon_star"></i><i class="icon_star"></i><i
                                                class="icon_star"></i><em>5.00/5.00</em></span>
                                        <em>Published 54 minutes ago</em>
                                    </div>
                                    <h4>"Avesome Experience"</h4>
                                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et
                                        nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has
                                        ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer
                                        petentium cu his. Tollit molestie suscipiantur his et.</p>
                                    <ul>
                                        <li><a href="#0"><i class="icon_like_alt"></i><span>Useful</span></a>
                                        </li>
                                        <li><a href="#0"><i class="icon_dislike_alt"></i><span>Not
                                                    useful</span></a></li>
                                        <li><span>Share</span> <a href="#0"><i class="ti-facebook"></i></a> <a
                                                href="#0"><i class="ti-twitter-alt"></i></a> <a
                                                href="#0"><i class="ti-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->
                        </div> --}}
                        <!-- /review_card -->
                        <div class="pagination__wrapper add_bottom_15 ">
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
                    <div class="col-lg-4 ">
                        <div class="box_general company_info">
                            <h3>{{ $business->business_name }}</h3>
                            <p>{{ $business->description }}</p>
                            <p><strong>{{ __('messages.website') }}</strong><br><a href="#0">
                                    @if ($business->website != '')
                                        {{ $business->website }}
                                    @else
                                        NA
                                    @endif
                                </a></p>
                            <p><strong>{{ __('messages.email') }}</strong><br><a href="#0">
                                    @if ($business->business_email != '')
                                        {{ $business->business_email }}
                                    @else
                                        NA
                                    @endif
                                </a></p>
                            <p><strong>{{__('messages.telephone')}}</strong><br>
                                @if ($business->business_phone != '')
                                    +255 {{ $business->business_phone }}
                                @else
                                    NA
                                @endif
                            </p>
                            <p class="follow_company"><strong>{{ __('messages.follow_us') }}</strong><br>
                            <a href="#" target="_blank"><i class="social_facebook_circle"></i></a>
                            <a href="#" target="_blank"><i class="social_twitter_circle"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-tiktok"></i></a>
                            <a href="#" target="_blank"><i class="social_instagram_circle"></i></a>
                            </p>
                        </div>
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

          @include('consumer.themes.components.scripts')


<script>
    const currentUrl = encodeURIComponent(window.location.href);
    const shareText = encodeURIComponent("Check this out!"); // Customize your text here
    
    // Update the WhatsApp share link
    document.getElementById('whatsappShare').href += `${shareText}%20${currentUrl}`;
    // Update other social media links
    document.getElementById('facebookShare').href += currentUrl;
    document.getElementById('twitterShare').href = `https://x.com/intent/tweet?url=${currentUrl}&text=${shareText}`;
    document.getElementById('tiktokShare').href += currentUrl;
</script>

</body>

</html>
