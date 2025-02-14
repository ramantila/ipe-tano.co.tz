
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="themeturn.com">

    <title>IPE TANO  | {{ __('messages.for_business_') }} - Contacts </title>

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


.contacts-page {
    background-color: #f8f9fa;
    padding: 5rem 0;
}

.section-header h2 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #007bff;
    animation: fadeInDown 1s ease-in-out;
}

.section-header p {
    font-size: 1rem;
    color: #6c757d;
    animation: fadeInUp 1s ease-in-out;
}

.contact-form input, 
.contact-form textarea {
    border: 1px solid #ced4da;
    border-radius: 5px;
    padding: 0.75rem;
}

.contact-form input:focus, 
.contact-form textarea:focus {
    border-color:#b88d0d;
    outline: none;
    box-shadow: 0 0 5px #b88d0d;
}

.contact-form button {
       background: #b88d0d;
    border: none;
    padding: 0.75rem;
    border-radius: 5px;
    font-size: 1rem;
    color: white;
    transition: background-color 0.3s ease-in-out;
}



.contact-form button:hover {
     background:#b88d0d;
}

/* Contact Info Icons */
.text-primary {
    color: rgb(29, 29, 29) !important;
}

.list-unstyled i {
    font-size: 1.2rem;
    margin-right: 10px;
}

/* Animations */
@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-header {
    animation: fadeInDown 1s;
}

.animate-text {
    animation: fadeInUp 1.2s;
}

.animate-info {
    animation: fadeInLeft 1s;
}

.animate-form {
    animation: fadeInRight 1s;
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
</style>
<body id="top-header">


       @include('consumer.themes.components.business.header')

 

<section class="contacts-page bg-light py-5">
    <div class="container">
        <!-- Header Section -->
        <div class="section-header text-center mb-5">
            <h2 class="text-primary animate-header">Get in Touch with Us</h2>
            <p class="text-muted animate-text">
                We'd love to hear from you! Whether you have a question, feedback, or just want to say hi, feel free to contact us.
            </p>
        </div>

        <!-- Contact Information & Form -->
        <div class="row align-items-center">
            <!-- Contact Information -->
            <div class="col-md-6 mb-4 animate-info">
                <h4 class="text-primary mb-3">Contact Information</h4>
                <ul class="list-unstyled text-muted">
                    <li class="mb-3">
                        <i class="fas fa-phone text-primary"></i> Phone: +1 (234) 567-890
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-envelope text-primary"></i> Email: info@ipetano.com
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-map-marker-alt text-primary"></i> Address: 123 Main St, Nairobi, Kenya
                    </li>
                    <li>
                        <i class="fas fa-clock text-primary"></i> Working Hours: Mon - Fri, 9:00 AM - 6:00 PM
                    </li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6">
                <form action="#" class="contact-form animate-form">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
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