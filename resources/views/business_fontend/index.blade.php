
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="themeturn.com">

    <title>IPE TANO  | {{ __('messages.for_business_') }}</title>

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
</style>
<body id="top-header">


 @include('consumer.themes.components.business.header')

  <!-- Banner Section Start -->
<section class="banner-4 section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 " style="width:100%">
                <div class="banner-content text-center" style="position:relative;top:-3em;width:200px!">
                    <h1><span class="font-weight-normal">{{ __('messages.create_better') }}
        </span><span id="typing-text"> </span></h1>
                   
                    <p class="mb-4">Ipe Tano gives you an opportunity to see your brand from your customers' point of view.</p>

                    <a href="#" class="btn btn-main mr-2">{{ __('messages.lets_get_started') }}</a>
                    <a href="#" class="btn btn-solid-border mr-2">{{ __('messages.join_now') }}</a>
                </div>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
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
    <!-- About Section end -->

    <!-- Testimonial section start -->
<section class="testimonial-2 section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7 col-xl-7">
                <div class="section-heading center-heading">
                    <h3>Why Join Ipe Tano?</h3>
                    <p>Did you know that product reviews are 12 times more trusted than manufacturer descriptions? Now, imagine what they can do for your business.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="testimonials-slides-3 owl-carousel owl-theme">
                    <div class="testimonial-item testimonial-style-2">
                        <i class="fa fa-quote-right"></i>
                        
                        <div class="testimonial-info-title">
                            <h4>Gain new insight into your products </h4>
                        </div>

                        <div class="testimonial-info-desc">
                        Keep customers coming back with an ever-improving product selection. Product Attributes ratings help you understand your products from your customer’s point-of-view.                    </div>
                        
                        <div class="client-info">
                       
                            <div class="testionial-author">Join Now</div>
                        </div>
                    </div>

                    <div class="testimonial-item testimonial-style-2">
                        <i class="fa fa-quote-right"></i>
                        
                        <div class="testimonial-info-title">
                            <h4>Review Invitations</h4>
                        </div>

                        <div class="testimonial-info-desc">
                        Our automated review invitation emails make it effortless for your customers to leave feedback. A friendly reminder email ensures even more reviews. With Ipe Tano, you'll hear from your otherwise silent customers, and more reviews mean more business.
                    </div>
                        
                        <div class="client-info">
                       
                            <div class="testionial-author">Join Now</div>
                        </div>
                    </div>

                    <div class="testimonial-item testimonial-style-2">
                        <i class="fa fa-quote-right"></i>
                        
                        <div class="testimonial-info-title">
                            <h4>Boost Your SEO.</h4>
                        </div>

                        <div class="testimonial-info-desc">
                        Stand out in search results with product reviews. The star ratings on your product pages attract attention and increase visibility. Additionally, Ipe Tano Product Reviews provide you with more content for your web pages, enriching them with keywords that can improve your site's search engine optimization.
                    </div>
                        
                        <div class="client-info">
                       
                            <div class="testionial-author">Join Now</div>
                        </div>
                    </div>


          
                 </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section End -->

    <!-- About Section Start -->
    <section class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
            
                <div class="col-xl-6 col-lg-6">
                    <div class="section-heading pl-lg-5 ">
                        <h3>Grow trust in your brand
                        </h3>

                        <p>Ipe Tano hosts reviews and ratings to help consumers shop with confidence and deliver rich insights to help businesses improve the experiences and products they offer. <br><br>The more consumers use our platform and share their
                            own experiences, the richer the insights we offer businesses, and the more opportunities they have to improve where needed and earn trust of their customers.</p> <a href="#" class="btn btn-solid-border">Join Now</a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <img src="business/assets/images/about-bg-2.png" alt="" class="img-fluid">                
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
                        <img src="business/assets/images/about-bg.png" alt="" class="img-fluid">                
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="section-heading pl-lg-5 ">
                        <h3>Let your customers sell on your behalf
                        </h3>

                        <p>Ipe Tano hosts reviews and ratings to help consumers shop with confidence and deliver rich insights to help businesses improve the experiences and products they offer. <br><br>The more consumers use our platform and share their
                            own experiences, the richer the insights we offer businesses, and the more opportunities they have to improve where needed and earn trust of their customers.</p> <a href="#" class="btn btn-solid-border">Join Now</a>
                    </div>
                </div>

             
            </div>
        </div>
    </section>
    <!-- About Section End -->


          <!-- About Section Start -->
          <section class="about-section section-padding">
              <div class="container">
               <div class="row align-items-center justify-content-center">
     

                <div class="col-xl-6 col-lg-6">
                    <div class="section-heading pl-lg-5 ">
                        <h3>Learn and Improve
                        </h3>
                        <p>Ipe Tano empowers you with new insights into your products. Product Attributes ratings help you understand your offerings from your customers' perspective, which, in turn, keeps them coming back for more.</p>
 <a href="#" class="btn btn-solid-border">Join Now</a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <img src="business/assets/images/about-bg-3.png" alt="" class="img-fluid">                
                </div>
             
            </div>
        </div>
    </section>
    <!-- About Section End -->




    <!-- Feature section start -->
    <section class="feature section-padding-btn ">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading center-heading">
                        <span class="subheading">Ipe Tano Features</span>
                        <h3>Why should you create your Brand Profile on Ipe Tano?</h3>
                        <p style="color:#222;">The ultimate planning solution for busy women who want to reach their personal goals</p>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="feature-item feature-style-2">
                        <div class="feature-icon">
                            <i class="flaticon-flag"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Review Image Generator</h4>
                            <p>Transform your best reviews into eye-catching images that are perfect for sharing on all your social channels.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="feature-item feature-style-2">
                        <div class="feature-icon">
                            <i class="flaticon-flag"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Facebook Integration</h4>
                            
                            <p>Adding an Ipe Tano tab to your Facebook page adds social proof to your social media presence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="feature-item feature-style-2">
                        <div class="feature-icon">
                            <i class="flaticon-flag"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Hootsuite Integration</h4>
                           <p>Share, monitor, and respond to reviews directly from Hootsuite.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="feature-item feature-style-2">
                        <div class="feature-icon">
                            <i class="flaticon-flag"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Dashboards, Analytics, and Insights</h4>
                                <p> Our analytics provide real-time insights into your performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="feature-item feature-style-2">
                        <div class="feature-icon">
                            <i class="flaticon-flag"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Company API Link</h4>
                            <p>Generate an API Link to include in your email service to invite customers to leave a review on your Company Profile Page.</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="feature-item feature-style-2">
                        <div class="feature-icon">
                            <i class="flaticon-flag"></i>
                        </div>
                        <div class="feature-text">
                            <h4>TV Ads</h4>
                            <p>With large audiences, a small trust symbol can go a long way. Add your IpeTanoScore and rating to any TV ad to give more credibility to your message.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-solid-border">Explore Features</a>
                        <a href="#" class="btn btn-main">Join now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature section End -->



 
    <!-- CTA Sidebar start -->
    <section class="cta bg-gray section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading center-heading mb-0">
                        <span class="subheading">be a instructor</span>
                        <h3>Gain new insight into your products
                        </h3>
                        <p class="mb-4">Keep customers coming back with an ever-improving product selection. Product Attributes ratings help you understand your products from your customer’s point-of-view.</p>
                        <a href="#" class="btn btn-main">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Sidebar end -->


    <section class="testimonial-2 section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7 col-xl-7">
                <div class="section-heading center-heading">
                    <h3>Unleash the Power of Reviews: Boost Your Business with Ipe Tano</h3>
                             <p>Ipe Tano isn't just a platform; it's your ticket to an empowered, trusted brand presence. With Ipe Tano, you can:</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="testimonials-slides-3 owl-carousel owl-theme">
                    <div class="testimonial-item testimonial-style-2">
                        <i class="fa fa-quote-right"></i>
                        
                        <div class="testimonial-info-title">
                            <h4>Increase Conversions </h4>
                        </div>

                        <div class="testimonial-info-desc">
                        Let your customers sell your story. Display Ipe Tano reviews on your website effortlessly with our widgets, turning potential buyers into loyal patrons.
                    </div>
                        
                        <div class="client-info">
                       
                            <div class="testionial-author">Join Now</div>
                        </div>
                    </div>

                    <div class="testimonial-item testimonial-style-2">
                        <i class="fa fa-quote-right"></i>
                        
                        <div class="testimonial-info-title">
                            <h4>Stand Out Everywhere:</h4>
                        </div>

                        <div class="testimonial-info-desc">
                        From packaging to social media, integrate your Ipe Tano rating. Leverage our TV ads, brochures, digital displays, and even events, ensuring your brand shines brightly at every touchpoint.                    </div>
                        
                        <div class="client-info">
                       
                            <div class="testionial-author">Join Now</div>
                        </div>
                    </div>

                    <div class="testimonial-item testimonial-style-2">
                        <i class="fa fa-quote-right"></i>
                        
                        <div class="testimonial-info-title">
                            <h4>Drive Traffic</h4>
                        </div>

                        <div class="testimonial-info-desc">
                        Boost your online presence. Ipe Tano reviews not only enhance your SEO but also drive traffic by drawing attention to your site in search results.                    </div>
                        
                        <div class="client-info">
                       
                            <div class="testionial-author">Join Now</div>
                        </div>
                    </div>


          
                 </div>
            </div>
        </div>
    </div>
</section>
    <!-- COunter Section start -->
    <section class="counter-block-2 mb--90 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 bg-black counter-inner">
                    <div class="row">
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
        "{{ __('messages.be_heard') }}"];
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