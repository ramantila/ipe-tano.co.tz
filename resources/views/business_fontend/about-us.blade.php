
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="themeturn.com">

    <title>IPE TANO  | {{ __('messages.for_business_') }} - About Us </title>

    <!-- Mobile Specific Meta-->
        <link rel="shortcut icon" href="{{asset('themes/img/ipetano-logo-primary.png')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap.min css -->
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

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

h1, h2, h4 {
    color: #333;
}

.text-center {
    text-align: center;
}

/* Hero Section */
.hero-section {
    background: #b88d0d;
    color: #fff;
}

.hero-section h1 {
    font-size: 2.5rem;
}

.hero-section p {
    font-size: 1.2rem;
}

/* What We Do Section */
.what-we-do-section .icon-box {
    margin-bottom: 15px;
}

.what-we-do-section .icon {
    width: 60px;
    height: 60px;
    margin-bottom: 10px;
}

/* Why Choose Us Section */
.why-choose-us-section {
    background: #b88d0d;
    color: #fff;
}

.why-choose-us-section h4 {
    margin-bottom: 1rem;
}

/* Get Involved Section */
.get-involved-section {
    background: #f8f9fa;
}

.get-involved-section .btn {
    background: #b88d0d;
    color: #fff;
    padding: 0.8rem 1.5rem;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
}

.get-involved-section .btn:hover {
    background:#b88d0d;
}
</style>
<body id="top-header">


       @include('consumer.themes.components.business.header')
<section class="about-page ">
    <!-- Hero Section -->
    <section class="bg-ipetano-primary section-padding-about mt-8">
    <section id="about-us" class="about-us-section">
        <div class="container">
            <div class="about-us-wrapper">
                <div class="about-us-content">
                    <h2 class="text-white text-bold">Welcome to Ipe Tano, Your Trusted Review Platform</h2>
                    <p>
                        At Ipe Tano, we’re more than just a review platform – we’re a community built on trust and transparency. Our mission is to empower consumers with reliable insights, helping them make confident choices in products, services, and businesses.
                    </p>
                    <p>
                     We believe that every review matters. By sharing authentic experiences, our users not only guide others but also provide businesses with invaluable feedback to grow and improve. At Ipe Tano, we bridge the gap between consumers and businesses, fostering better relationships and mutual trust.
                    </p>
                    <p>
                    Together, let’s create a world where informed decisions lead to better outcomes for everyone. Welcome to the future of reviews and ratings – welcome to Ipe Tano.


                    </p>
                </div>
                <div class="about-us-image">
                    <img src="{{asset('business/assets/images/about-bg.png')}}" alt="About Us Image">
                </div>
            </div>
        </div>
    </section>
</section>

    <!-- What We Do Section -->
    <section class="what-we-do-section py-5">
        <div class="container">
            <div class="section-header text-center mb-4">
                <h2>What We Do</h2>
                <p>Empowering consumers and businesses through honest feedback.</p>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="icon-box">
                        <img src="{{asset('images/product_review.png')}}" alt="Products" class="icon">
                    </div>
                    <h4>Product Reviews</h4>
                    <p>Find trusted reviews for the latest products and make informed decisions.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="icon-box">
                        <img src="{{asset('images/customer-service.png')}}" alt="Services" class="icon">
                    </div>
                    <h4>Service Feedback</h4>
                    <p>Explore ratings for service providers and choose the best option for your needs.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="icon-box">
                        <img src="{{asset('images/business-intelligence.png')}}" alt="Businesses" class="icon">
                    </div>
                    <h4>Business Insights</h4>
                    <p>Help businesses grow by sharing your honest experiences and feedback.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
   <section class="why-choose-us-section py-5 bg-grey text-light">
    <div class="container">
        <div class="section-header text-center mb-4">
            <h2 class="text-white">Why Choose Ipe Tano?</h2>
            <p  class="text-white">Discover why millions trust us for reliable reviews and insights.</p>
        </div>
        <div class="row">
            <!-- Trustworthy Reviews -->
            <div class="col-md-6 text-center">
                <div class="icon mb-3">
                    <i class="fas fa-check-circle fa-3x text-white"></i>
                </div>
                <h4 class="text-white">Trustworthy Reviews</h4>
                <p class="text-white">Our platform ensures that reviews come from real users, fostering trust and transparency.</p>
            </div>
            <!-- Empowering Consumers -->
            <div class="col-md-6 text-center">
                <div class="icon mb-3">
                    <i class="fas fa-users fa-3x text-white"></i>
                </div>
                <h4 class="text-white">Empowering Consumers</h4>
                <p  class="text-white">We help consumers make confident decisions by providing reliable information at their fingertips.</p>
            </div>
        </div>
    </div>
</section>


    <!-- Get Involved Section -->
    <section class="get-involved-section py-5">
        <div class="container text-center">
            <h2>Join Our Community</h2>
            <p>Become part of a community that values transparency and improvement. Share your reviews and help others make better choices.</p>
            <a href="#" class="btn ">Get Started</a>
        </div>
    </section>
</section>

 











  

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
    var typingText = ["Be Heard", "Be Seen", "Be Heard"];
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