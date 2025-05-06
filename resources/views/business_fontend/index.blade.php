<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="themeturn.com">

    <title>IPE TANO  | {{ __('messages.for_business_') }} </title>



    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap.min css -->
    <link rel="shortcut icon" href="{{asset('themes/img/ipetano-logo-primary.png')}}" type="image/x-icon">

    {{-- <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.css"> --}}
    <link href="{{ asset('business/assets/vendors/bootstrap/bootstrap.css') }}" rel="stylesheet" />
    <!-- Iconfont Css -->
    {{-- <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css"> --}}
    <link href="{{ asset('business/assets/vendors/fontawesome/css/all.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="assets/vendors/flaticon/flaticon.css"> --}}
    <link href="{{ asset('business/assets/vendors/flaticon/flaticon.css') }}" rel="stylesheet" />
    <!-- animate.css -->
    {{-- <link rel="stylesheet" href="assets/vendors/animate-css/animate.css"> --}}
    <link href="{{ asset('business/assets/vendors/animate-css/animate.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="assets/vendors/owl/assets/owl.carousel.min.css"> --}}
    <link href="{{ asset('business/assets/vendors/owl/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="assets/vendors/owl/assets/owl.theme.default.min.css"> --}}
    <link href="{{ asset('business/assets/vendors/owl/assets/owl.theme.default.min.css') }}" rel="stylesheet" />

    <!-- Main Stylesheet -->
    {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
    <link href="{{ asset('business/assets/css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="{{ asset('business/assets/css/responsive.css') }}" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


</head>
<style>
.about-us-section {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem 1rem;
}

.about-us-wrapper {
    display: flex;
    flex-direction: row;
    gap: 2rem;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: auto;
}

.about-us-content {
    flex: 1;
    text-align: left;
    color: #fff; /* Adjust color based on your theme */
}

.about-us-content h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
    font-weight: bold;
}

.about-us-content p {
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.read-more {
    display: inline-block;
    background-color:#fff;
    color: #000;
    padding: 0.6rem 1rem;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease-in-out;
}

.read-more:hover {
    background-color: #000;
    color:#fff;
}

.about-us-image {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.about-us-image img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-us-wrapper {
        flex-direction: column;
        text-align: center;
    }

    .about-us-content h2 {
        font-size: 1.5rem;
    }

    .about-us-content p {
        font-size: 0.95rem;
    }
}

.cta {
    padding: 60px 0;
}

.bg-gray {
    background-color: #f9f9f9;
}

.fact-box {
    padding: 20px;
}

.fact-box h2 {
    font-size: 3rem;
    font-weight: 700;
    color:rgb(184, 141, 13);
}

.fact-box p {
    font-size: 1.4rem!important;
    color: #333;
}


.testimonial-item {
    text-align: center;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 10px;
}
.testimonial-info-title h4 {
    color: #333;
    font-size: 1.5rem;
    margin-bottom: 10px;
}
.testimonial-info-desc {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
}
.testionial-author {
    font-weight: bold;
    color: rgb(184, 141, 13);
}
.owl-carousel .owl-dots .owl-dot span {
    background:rgb(184, 141, 13);
    border-radius: 50%;
    width: 12px;
    height: 12px;
    margin: 5px;
    transition: all 0.3s;
}
.owl-carousel .owl-dots .owl-dot.active span {
    background: rgb(69, 64, 49);
    width: 15px;
    height: 15px;
}


.card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            overflow: hidden;
            background: #fff;
        }

        .card:hover {
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-10px);
        }

        .card img {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 15px 0 10px 0;
            text-align: center;
            color: #333;
        }

        .card-text {
            color: #666;
            text-align: center;
            margin-bottom: 20px;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .card-body {
            padding: 20px;
        }

        .cta h3 {
            font-size: 2.5rem;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .card:hover img {
            filter: brightness(0.9);
            transition: filter 0.3s ease;
        }

        .btn-join {
            display: block;
            width: 80%;
            margin: 10px auto 0 auto;
            padding: 10px 20px;
            background-color:rgb(184, 141, 13);
            color: #fff;
            text-align: center;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .btn-join:hover {
            background-color: rgb(184, 141, 13);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
</style>
<body id="top-header">


 @include('consumer.themes.components.business.header')

  <!-- Banner Section Start -->
<section class="banner-4 section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 " style="width:100%">
                <div class="banner-content text-center" style="position:relative;top:-3em;width:400px!">
                    <h1><span class="font-weight-normal">{{ __('messages.create_better') }}
                    </span></h1>
                   <h1><span id="typing-text"> </span></h1>
                    <div class="" style="margin-top:5em!important">
                        <a href="#" class="btn btn-main mr-2">{{ __('messages.lets_get_started') }}</a>
                        <a href="#" class="btn btn-solid-border mr-2">{{ __('messages.join_now') }}</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</section>
<!-- Banner Section End -->




    <!-- About Secection start -->
  <section class="bg-ipetano-primary section-padding-about mt-8">
    <section id="about-us" class="about-us-section">
        <div class="container">
            <div class="about-us-wrapper">
                <div class="about-us-content">
                    <h2 class="text-white">{{ __('messages.welcome_to_ipetano_platform') }}</h2>
                    <p>
                        At Ipe Tano, we empower consumers to make informed decisions through authentic reviews and ratings. Our platform not only helps individuals shop with confidence but also offers businesses valuable insights to enhance their products and services. The more consumers share their experiences, the more we can help businesses improve and build lasting trust with their customers.
                    </p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="about-us-image">
                    <img src="{{asset('business/assets/images/about-bg.png')}}" alt="About Us Image">
                </div>
            </div>
        </div>
    </section>
  </section>

 <section class="cta bg-gray section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <div class="fact-box p-4 bg-light rounded  text-center">
                    <h2 class=" mb-3">Did you know?</h2>
                    <p class="mb-0">Product reviews are <strong>12x more trusted</strong> than manufacturer descriptions. </p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- About Section end -->


    <!-- About Section Start -->
    <section class="about-section section-padding3">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-xl-6 col-lg-6">
                    <div class="section-heading pl-lg-5 ">
                        <h3>Grow trust in your brand
                        </h3>

                        <p>Ipe Tano reviews get you closer to your customers while pushing your business forward. <br>Create customer confidence with Ipe Tano.<br><br>Built on honesty and transparency, Ipe Tano helps you see your brand from customers point of view.</p> <a href="#" class="btn btn-solid-border">Join Now</a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <img src="{{asset('business/assets/images/features/trust.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->



       <!-- About Section Start -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <img src="{{asset('business/assets/images/features/customer-sell.png')}}" alt="" class="img-fluid">
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="section-heading pl-lg-5 ">
                        <h3>Let your customers sell on your behalf
                        </h3>

                        <p>Increase conversions and sales by displaying Ipe Tano reviews on your website with Ipe Tano widgets.<br><br> With a cut and paste of code, you can share Ipe Tano reviews on your site, email signatures, newsletters or anywhere your customers are looking.</p> <a href="#" class="btn btn-solid-border">Join Now</a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- About Section End -->


          <!-- About Section Start -->
          <section class="about-section">
              <div class="container">
               <div class="row align-items-center justify-content-center">


                <div class="col-xl-6 col-lg-6">
                    <div class="section-heading pl-lg-5 ">
                        <h3>Learn and Improve
                        </h3>
                        <p>
                        Gain new insight into your products Keep customers coming back with an ever-improving product selection. Product Attributes ratings help you understand your products from your customer’s point-of-view.<br> Let your reputation shine.
                        Show your customers that you are more than willing to join the conversation.<br><br>
                        Having your Company profile enables you to showcase the trust people have in your brand and as an independent review site, Ipe Tano reviews stand out as trustworthy in the eyes of your future customers.
                        </p>
                        <a href="#" class="btn btn-solid-border">Join Now</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <img src="{{asset('business/assets/images/features/learn-and-improve.png')}}" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
        </section>
    <!-- About Section End -->

     <section class="about-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <img src="{{asset('business/assets/images/features/seo.png')}}" alt="" class="img-fluid">
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="section-heading pl-lg-5 ">
                        <h3>Improve SEO
                        </h3>

                        <p>Stand out in the search results <br>Product Reviews draw people’s attention to your site with stars on all your product pages in the search results. Ipe Tano Product Reviews also give you more content for your pages, so you get more keywords that can improve your site’s SEO.
</p> <a href="#" class="btn btn-solid-border">Join Now</a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="about-section">
              <div class="container">
               <div class="row align-items-center justify-content-center">


                <div class="col-xl-6 col-lg-6">
                    <div class="section-heading pl-lg-5 ">
                        <h3>Let your reputation shine.
                        </h3>
                        <p>
                         Show your customers that you are more than willing to join the conversation.<br><br>
                         Having your Company profile enables you to showcase the trust people have in your brand and as an independent review site, Ipe Tano reviews stand out as trustworthy in the eyes of your future customers
                        </p>
                        <a href="#" class="btn btn-solid-border">Join Now</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <img src="{{asset('business/assets/images/features/reputation.png')}}" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
        </section>
  <!-- #region -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <img src="{{asset('business/assets/images/features/social-media.png')}}" alt="" class="img-fluid">
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="section-heading pl-lg-5 ">
                        <h3>Stand out in social media
                        </h3>

                        <p>Let your customers speak on your behalf and be a trusted brand on every social network.<br>
<strong>Did you know?</strong><br>
91% of 18–34-year-olds trust online reviews as much as personal recommendations, and 93% of consumers say that online reviews influenced their purchase decisions.

            </p> <a href="#" class="btn btn-solid-border">Join Now</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>

















            <!-- Testimonial section start -->
        <section class="testimonial-2 " style="margin:4em;!important">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 col-xl-12">
                        <div class="section-heading center-heading">
                            <h3>Ipe Tano Benefits</h3>
                            <p>Ipe Tano works for every business, big or small.</p>
                        </div>
                    </div>
                </div>
            <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="testimonials-slides owl-carousel owl-theme">
                    <div class="testimonial-item testimonial-style-2" style="height:30em!important">
                        <i class="fa fa-quote-right"></i>
                        <div class="testimonial-info-title">
                            <h4>Review invitations</h4>
                        </div>
                        <div class="testimonial-info-desc">
                            Automated review invitation emails make it easy for your customers to leave feedback, and a friendly reminder email gets you even more reviews. With Ipe Tano, you'll get reviews from your otherwise silent customers, and more reviews leads to more business
                        </div>
                        <div class="client-info d-flex justify-content-center">
                            <a class="btn btn-main" href="">Join Now</a>
                        </div>
                    </div>
                    <div class="testimonial-item testimonial-style-2" style="height:30em!important">
                        <i class="fa fa-quote-right"></i>
                        <div class="testimonial-info-title">
                            <h4>Review Image Generator</h4>
                        </div>
                        <div class="testimonial-info-desc">
                            Everybody is talking on social media, cut through the clutter.<br>
                         Turn your best reviews into attention-grabbing images fit for every social channel. The Image Generator does all the designing for you, saving you time, effort and much needed resource.

                        </div>
                        <div class="client-info d-flex justify-content-center">
                            <a class="btn btn-main" href="">Join Now</a>
                        </div>
                    </div>
                    <div class="testimonial-item testimonial-style-2" style="height:30em!important">
                        <i class="fa fa-quote-right"></i>
                        <div class="testimonial-info-title">
                            <h4>Facebook Integration</h4>
                        </div>
                        <div class="testimonial-info-desc">
                           Automatically share Ipe Tano reviews on your company’s Facebook page. Adding a Ipe Tano tab to your company's Facebook page adds social proof to your social media
                        </div>
                        <div class="client-info d-flex justify-content-center">
                            <a class="btn btn-main" href="">Join Now</a>
                        </div>
                    </div>
                    <div class="testimonial-item testimonial-style-2" style="height:30em!important">
                        <i class="fa fa-quote-right"></i>
                        <div class="testimonial-info-title">
                            <h4>Dashboards, Analytics and Insights</h4>
                        </div>
                        <div class="testimonial-info-desc">
                                See your brand from your customers' point-of-view<br>
                                Are customers happier today than yesterday? Is the new promotion working? Is there any new feedback on the latest product launched? How many people see your reviews? Ipe Tano Analytics make it simple to track your performance at a glance, or to dig into the data and get real-time insights on how you're doing.
                            </div>
                        <div class="client-info d-flex justify-content-center">
                            <a class="btn btn-main" href="">Join Now</a>
                        </div>
                    </div>
                    <div class="testimonial-item testimonial-style-2" style="height:30em!important">
                        <i class="fa fa-quote-right"></i>
                        <div class="testimonial-info-title">
                            <h4>Company API Link</h4>
                        </div>
                        <div class="testimonial-info-desc">
                            Generate an API Link to include in your email service to invite customers to leave a review on your Company Profile Page.
                        </div>
                        <div class="client-info d-flex justify-content-center">
                            <a class="btn btn-main" href="">Join Now</a>
                        </div>
                    </div>
                    <div class="testimonial-item testimonial-style-2" style="height:30em!important">
                        <i class="fa fa-quote-right"></i>
                        <div class="testimonial-info-title">
                            <h4>TV ads</h4>
                        </div>
                        <div class="testimonial-info-desc">
                            With big audiences, a small trust symbol goes a long way.<br><br> Add your IpeTanoScore and rating to any TV ad and give more credibility to your message.
                        </div>
                        <div class="client-info d-flex justify-content-center">
                            <a class="btn btn-main" href="">Join Now</a>
                        </div>
                    </div>
                    <div class="testimonial-item testimonial-style-2" style="height:30em!important">
                        <i class="fa fa-quote-right"></i>
                        <div class="testimonial-info-title">
                            <h4>Packaging and delivery vehicles</h4>
                        </div>
                        <div class="testimonial-info-desc">
                            Create confidence at every touchpoint.<br>
                            You never know where your next customer will discover your brand. Adding your Ipe Tano rating to your packaging and delivery vehicles can make your brand stand out as something special.

                        </div>
                        <div class="client-info d-flex justify-content-center">
                            <a class="btn btn-main" href="">Join Now</a>
                        </div>
                    </div>
                    <div class="testimonial-item testimonial-style-2" style="height:30em!important">
                        <i class="fa fa-quote-right"></i>
                        <div class="testimonial-info-title">
                            <h4>Brochures and print media</h4>
                        </div>
                        <div class="testimonial-info-desc">
                            Give customers a rating that’s easy to understand. <br><br> Putting your IpeTanoScore in product brochures or print ads can be the little nudge that convinces your next customer to buy.

                        </div>
                        <div class="client-info d-flex justify-content-center">
                            <a class="btn btn-main" href="">Join Now</a>
                        </div>
                    </div>
                    <div class="testimonial-item testimonial-style-2" style="height:30em!important">
                        <i class="fa fa-quote-right"></i>
                        <div class="testimonial-info-title">
                            <h4>Digital display and retargeting ads</h4>
                        </div>
                        <div class="testimonial-info-desc">
                            Own your good ratings. Eliminate any reason people might distrust your ads with your Ipe Tano rating.

                        </div>
                        <div class="client-info d-flex justify-content-center">
                            <a class="btn btn-main" href="">Join Now</a>
                        </div>
                    </div>
                    <div class="testimonial-item testimonial-style-2" style="height:30em!important">
                        <i class="fa fa-quote-right"></i>
                        <div class="testimonial-info-title">
                            <h4>Apps or events</h4>
                        </div>
                        <div class="testimonial-info-desc">
                            Share the trust in your brand<br><br>
                            Whether meeting new or returning customers, Ipe Tano reviews in your app or on displays at an event show how much people love your brand.


                        </div>
                        <div class="client-info d-flex justify-content-center">
                            <a class="btn btn-main" href="">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



            </div>
        </section>
        <!-- Testimonial section End -->





<section class="cta bg-gray section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="section-heading center-heading mb-5">
                    <h3>Boost Your Business with Ipe Tano</h3>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card">
                        <img src="{{asset('business/assets/images/features/conversation.png')}}" alt="" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Increase Conversions</h5>
                        <p class="card-text">
                            Let your customers sell your story. Display Ipe Tano reviews on your website effortlessly with our widgets, turning potential buyers into loyal patrons.
                        </p>
                        <a href="#" class="btn-join">Join Now</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card">
                        <img src="{{asset('business/assets/images/features/standout.jpg')}}" alt="" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Stand Out Everywhere</h5>
                        <p class="card-text">
                            From packaging to social media, integrate your Ipe Tano rating. Leverage our TV ads, brochures, and digital displays, ensuring your brand shines brightly at every touchpoint.
                        </p>
                        <a href="#" class="btn-join">Join Now</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card">
                        <img src="{{asset('business/assets/images/features/traffic.png')}}" alt="" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Drive Traffic</h5>
                        <p class="card-text">
                            Boost your online presence. Ipe Tano reviews enhance your SEO and drive traffic by drawing attention to your site in search results.
                        </p>
                        <a href="#" class="btn-join">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- CTA Sidebar end -->



    <!-- COunter Section start -->
    <section class="counter-block-2 mb--90 position-relative"  style="margin-top:4em!important;">
        <div class="container" style="background-color:none!important">
            <div class="row">

                <div class="col-xl-12 bg-black counter-inner">
                <div class="col-12 text-center m-4" style="margin-bottom:4em!important">
                    <h2 class="text-white">Our Impressive Achievements</h2>
                </div>
                    <div class="row mt-5">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item text-center">
                                <i class="flaticon-video-camera"></i>
                                <div class="count">
                                    <span class="counter">90</span>
                                </div>
                                <h6>Businesses</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item text-center">
                                <i class="flaticon-layers"></i>
                                <div class="count">
                                    <span class="counter">1450</span>
                                </div>
                                <h6>Consumers</h6>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item text-center">
                                <i class="flaticon-flag"></i>
                                <div class="count">
                                    <span class="counter">5697</span>
                                </div>
                                <h6>Product and Services</h6>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item text-center border-0">
                                <i class="flaticon-help"></i>
                                <div class="count">
                                    <span class="counter">100</span>%
                                </div>
                                <h6>Reviews</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COunter Section End -->

<style>
p,li,a{
    font-size:17px !important;
}
</style>


    <!-- Footer section start -->
        @include('consumer.themes.components.business.footer')

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Owl Carousel Initialization -->
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 1,                // Show one card at a time
                loop: true,              // Infinite loop
                autoplay: true,          // Enable autoplay
                autoplayTimeout: 2000,   // 3 seconds between slides
                autoplayHoverPause: true, // Pause autoplay when hovered
                nav: false,              // Disable navigation arrows
                dots: true,              // Enable dots for navigation
                smartSpeed: 500         // Smooth transition speed
            });
        });
    </script>
    <!--
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    {{-- <script src="assets/vendors/jquery/jquery.js"></script> --}}
    <script src="{{ asset('business/assets/vendors/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4.5 -->
    {{-- <script src="assets/vendors/bootstrap/bootstrap.js"></script> --}}
    <script src="{{ asset('business/assets/vendors/bootstrap/bootstrap.js') }}"></script>
    <!-- Counterup -->
    {{-- <script src="assets/vendors/counterup/waypoint.js"></script> --}}
     <script src="{{ asset('business/assets/vendors/counterup/waypoint.js') }}"></script>
    {{-- <script src="assets/vendors/counterup/jquery.counterup.min.js"></script> --}}
     <script src="{{ asset('business/assets/vendors/counterup/jquery.counterup.min.js') }}"></script>
    {{-- <script src="assets/vendors/jquery.isotope.js"></script> --}}
     <script src="{{ asset('business/assets/vendors/jquery.isotope.js') }}"></script>
    {{-- <script src="assets/vendors/imagesloaded.js"></script> --}}
     <script src="{{ asset('business/assets/vendors/imagesloaded.js') }}"></script>
    {{-- <script src="assets/vendors/owl/owl.carousel.min.js"></script> --}}
     <script src="{{ asset('business/assets/vendors/owl/owl.carousel.min.js') }}"></script>
    {{-- <script src="assets/vendors/google-map/map.js"></script> --}}
     <script src="{{ asset('business/assets/vendors/google-map/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>
    {{-- <script src="assets/js/script.js"></script> --}}
     <script src="{{ asset('business/assets/js/script.js') }}"></script>



   <!--Typing text effect--->
<script>
    var typingText = ["{{ __('messages.be_heard') }}",
        "{{ __('messages.be_seen') }}",
        ];
    var typingElement = document.getElementById("typing-text");
    var index = 0;
    var wordIndex = 0;

    function type() {
        if (index < typingText[wordIndex].length) {
            typingElement.textContent += typingText[wordIndex].charAt(index);
            index++;
            setTimeout(type, 100); // Adjust typing speed (milliseconds) here
        } else {
            setTimeout(erase, 1000); // Wait for a second before erasing
        }
    }

    function erase() {
        if (index > 0) {
            typingElement.textContent = typingText[wordIndex].substring(0, index - 1);
            index--;
            setTimeout(erase, 50); // Adjust erasing speed (milliseconds) here
        } else {
            wordIndex = (wordIndex + 1) % typingText.length; // Move to the next word
            setTimeout(type, 500); // Wait for half a second before typing the next word
        }
    }

    type(); // Start typing
</script>





</body>
</html>