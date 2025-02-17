
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

.bg-light {
    background-color: #f8f9fa !important;
}

.text-primary {
    color: rgb(29, 29, 29) !important;
}

.text-muted {
    color: #6c757d !important;
}

.img-fluid1 {
   height:210px;
   width:200px;
}

.rounded {
    border-radius: 8px;
}

 .btn {
    background: #b88d0d;
    color: #fff;
    padding: 0.8rem 1.5rem;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
}

.btn:hover {
    background:#b88d0d;
}

</style>
<body id="top-header">


       @include('consumer.themes.components.business.header')

 


<section class="why-us-page py-5 bg-light">
    <div class="container">
        <!-- Section 1: Introduction -->
        <div class="section-header text-center mb-5">
            <h2 class="text-primary">Why Choose Ipe Tano?</h2>
            <p class="text-muted">
                At Ipe Tano, we go beyond reviews to offer trust, transparency, and valuable insights for consumers and businesses alike.
            </p>
        </div>

        <!-- Section 2: Trustworthy Reviews -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{asset('images/thumbup.png')}}" height="50px" alt="Trustworthy Reviews" class="img-fluid1 rounded">
            </div>
            <div class="col-md-6">
                <h3 class="text-primary">Trustworthy Reviews</h3>
                <p class="text-muted">
                    Our platform is built on trust and transparency. All reviews are verified to ensure they come from real users, helping consumers make confident decisions.
                </p>
            </div>
        </div>

        <!-- Section 3: Empowering Consumers -->
        <div class="row align-items-center flex-md-row-reverse mb-5">
            <div class="col-md-6">
                <img src="{{asset('images/empower.png')}}" alt="Empowering Consumers"  class="img-fluid1 rounded">
            </div>
            <div class="col-md-6">
                <h3 class="text-primary">Empowering Consumers</h3>
                <p class="text-muted">
                    Ipe Tano provides reliable information at your fingertips, helping you make informed choices about products, services, and businesses.
                </p>
            </div>
        </div>

        <!-- Section 4: Valuable Insights for Businesses -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{asset('images/analyst.png')}}" alt="Valuable Insights" class="img-fluid1 rounded">
            </div>
            <div class="col-md-6">
                <h3 class="text-primary">Valuable Insights for Businesses</h3>
                <p class="text-muted">
                    We help businesses grow by providing actionable feedback and insights directly from their customers, fostering improvement and trust.
                </p>
            </div>
        </div>

        <!-- Section 5: Community-Driven Platform -->
        <div class="row align-items-center flex-md-row-reverse mb-5">
            <div class="col-md-6">
                <img src="{{asset('images/community.png')}}" alt="Community Driven" class="img-fluid1 rounded">
            </div>
            <div class="col-md-6">
                <h3 class="text-primary">Community-Driven Platform</h3>
                <p class="text-muted">
                    Join a growing community of users who share their experiences to guide others and shape better services for everyone.
                </p>
            </div>
        </div>

        <!-- Section 6: Call to Action -->
        <div class="text-center mt-5">
            <h3 class="text-primary">Experience the Ipe Tano Difference</h3>
            <p class="text-muted">Start sharing your reviews today and help us build a more transparent world.</p>
            <a href="#" class="btn ">Get Started</a>
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