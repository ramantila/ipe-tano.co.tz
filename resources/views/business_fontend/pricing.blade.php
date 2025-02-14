
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="themeturn.com">

    <title>IPE TANO  | {{ __('messages.for_business_') }} - Pricing </title>

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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

.section {

    text-align: center;
}

.section:nth-child(odd) {
    background-color: #f8f8f8;
}

.pricing-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 50px 0;
    cursor: pointer;
}

/* Make Cards More Flexible */
.pricing-card {
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
}

.pricing-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}

.pricing-card h2 {
    margin: 0;
    background-color: #b88d0d;
    color: white;
    padding: 15px 0;
}

.pricing-card h3 {
    color:  #b88d0d;
    margin: 10px 0;
}

.pricing-card ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.pricing-card ul li {
    padding: 10px;
    border-bottom: 1px solid #eee;
}

.pricing-card ul li:last-child {
    border-bottom: none;
}

.pricing-card .price {
    font-size: 24px;
    font-weight: bold;
}

.pricing-card .price span {
    font-size: 14px;
    font-weight: normal;
    color: gray;
}

.cta-section {
    padding: 40px;
    background-color: #b88d0d;
    color: white;
}

.cta-section button {
    padding: 10px 20px;
    background-color: white;
    color:  #b88d0d;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.cta-section button:hover {
    background-color: #fff;
    color: #000;
}

p, li {
    font-size: 17px !important;
}

/* Mobile Device Styles */
@media (max-width: 768px) {
    .pricing-section {
        flex-direction: column; /* Stack pricing cards vertically */
        align-items: center;
        justify-content: center;
    }

    .pricing-card {
        width: 25em; /* Make the pricing cards take up more space */
        margin-bottom: 20px; /* Add some space between cards */
    }

    .pricing-card h2 {
        font-size: 22px; /* Adjust heading size */
    }

    .pricing-card h3 {
        font-size: 18px; 
    }

    .pricing-card ul li {
        font-size: 14px; 
    }

    .pricing-card .trybutton {
        width: 80%; 
        padding: 12px;
    }

.trybutton {
    margin-top: 2em;
    margin-bottom: 2em;
    display: inline-block;
    padding: 12px 10px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 25px;
    background-color: #b88d0d;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.trybutton:hover {
    background-color: #b88d0d;
    transform: scale(1.05);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
   color:  #000;
}

.trybutton:active {
    transform: scale(1);
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.15);
}
}

/* Small screen styles */
@media (max-width: 480px) {
    .pricing-card h2 {
        font-size: 20px; 
    }

    .pricing-card h3 {
        font-size: 16px;
    }

    .pricing-card ul li {
        font-size: 12px; 
    }

    .pricing-card .trybutton {
        font-size: 14px;
    }
}
.trybutton {
    margin-top: 2em;
     margin-bottom: 2em;
    display: inline-block;
    padding: 12px 50px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 25px;
    background-color: #b88d0d;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.trybutton:hover {
    background-color: #fff;
    transform: scale(1.05);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    color:  #000;
    border:1px solid #ff;
}

.trybutton:active {
    transform: scale(1);
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.15);
}


.trybutton11 {

    display: inline-block;
    padding: 12px 50px;
    font-size: 16px;
    font-weight: bold;
    color: #b88d0d;
    text-decoration: none;
    border: none;
    border-radius: 25px;
    background-color: #fff;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.trybutton11:hover {
    background-color: #fff;
    transform: scale(1.05);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    color:  #000;
    border:1px solid #ff;
}

.trybutton11:active {
    transform: scale(1);
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.15);
}





.section1 {
    background-color: #f8f9fa; 
    padding-top:70px;
    padding-bottom:4px 
    text-align: center; 
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); 
}

/* Title Styling */
.pricing-title {
    font-size: 36px; 
    font-weight: bold;
    color: #000; 
    margin-bottom: 20px; 
    letter-spacing: 1px; 
}

/* Description Styling */
.pricing-description {
    font-size: 18px;
    color: #555; 
    line-height: 1.6; /* Increased line height for readability */
    margin: 0 auto;
    max-width: 700px; 
}
    </style>
</head>
<body id="top-header">
    @include('consumer.themes.components.business.header')

    <!-- Section 1: Introduction -->
   <div class="section section1">
    <h1 class="pricing-title">Our Pricing Plans</h1>
    <p class="pricing-description">Choose a plan that fits your needs and helps you grow. Find the perfect solution for your business.</p>
</div>

    <!-- Section 2: Pricing Cards -->
    <div class="section">
        <div class="pricing-section">
            <!-- Free Plan -->
            <div class="pricing-card">
                <h2>Free Plan</h2>
                <h3 class="price">0 Tsh</h3>
                <ul>
                    <li>Engage with customers and show ratings.</li>
                    <li>Claim profile page.</li>
                    <li>Invite customer reviews.</li>
                    <li>Receive support.</li>
                    <li>See basic performance reports.</li>
                    <li>Use 2 IpeTano widgets.</li>
                </ul>
                <a href="" class="trybutton" style="margin-top:10em">Subscribe Now</a>
            </div>

            <!-- Standard Plan -->
            <div class="pricing-card">
                <h2>Standard Plan</h2>
                <h3 class="price">From 300,000 Tsh <span>per month, paid annually</span></h3>
                <ul>
                    <li>Showcase full reviews in your marketing.</li>
                    <li>Upgrade your profile page.</li>
                    <li>Invite more customer reviews.</li>
                    <li>Access to Customer Success team.</li>
                    <li>Learn from detailed analysis.</li>
                    <li>Use 4 IpeTano widgets.</li>
                    <li>Gains access to marketing assets.</li>
                    <li>Customize Standard with Add-Ons.</li>
                </ul>
                 <a href="" class="trybutton" >Subscribe Now</a>

            </div>

            <!-- Premium Plan -->
            <div class="pricing-card">
                <h2>Premium Plan</h2>
                <h3 class="price">From 500,000 Tsh <span>per month, paid annually</span></h3>
                <ul>
                    <li>Access to advanced analytics tools.</li>
                    <li>Dedicated account manager.</li>
                    <li>10 IpeTano widgets included.</li>
                    <li>Exclusive marketing campaigns.</li>
                    <li>Priority customer support.</li>
                    <li>Unlimited verified reviews.</li>
                    <li>Integrate reviews with ads seamlessly.</li>
                </ul>
                                 <a href="" class="trybutton" style="margin-top:5em">Subscribe Now</a>

            </div>

            <!-- Enterprise Plan -->
            <div class="pricing-card">
                <h2>Enterprise Plan</h2>
                <h3 class="price">From 1,500,000 Tsh <span> paid annually</span></h3>
                <ul>
                    <li>Fully customizable solution for enterprises.</li>
                    <li>Unlimited widgets and integrations.</li>
                    <li>Tailored marketing and support solutions.</li>
                    <li>Dedicated team for your business needs.</li>
                    <li>Advanced security and compliance.</li>
                </ul>
                                 <a href="" class="trybutton" style="margin-top:7em">Subscribe Now</a>

            </div>
        </div>
    </div>

    <!-- Section 3: Call to Action -->
    <div class="section cta-section">
        <h2 class="text-white">Ready to Get Started?</h2>
        <p class="text-white">Contact our team to find the perfect plan for your business.</p>
        <a href="{{ route('for-business.contacts')}}" class="trybutton11" >Contact Us</a>

    </div>

    @include('consumer.themes.components.business.footer')

    <!-- Essential Scripts -->
    <script src="{{ asset('business/assets/vendors/jquery/jquery.js') }}"></script>
    <script src="{{ asset('business/assets/vendors/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('business/assets/vendors/counterup/waypoint.js') }}"></script>
    <script src="{{ asset('business/assets/vendors/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('business/assets/vendors/jquery.isotope.js') }}"></script>
    <script src="{{ asset('business/assets/vendors/imagesloaded.js') }}"></script>
    <script src="{{ asset('business/assets/vendors/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('business/assets/vendors/google-map/map.js') }}"></script>
    <script src="{{ asset('business/assets/js/script.js') }}"></script>

    <!-- Typing Text Effect -->
    <script>
        const typingText = ["Be Heard", "Be Seen", "Be Heard"];
        const typingElement = document.getElementById("typing-text");
        let index = 0;
        let wordIndex = 0;

        function type() {
            if (index < typingText[wordIndex].length) {
                typingElement.textContent += typingText[wordIndex].charAt(index);
                index++;
                setTimeout(type, 100);
            } else {
                setTimeout(erase, 1000);
            }
        }

        function erase() {
            if (index > 0) {
                typingElement.textContent = typingText[wordIndex].substring(0, index - 1);
                index--;
                setTimeout(erase, 50);
            } else {
                wordIndex = (wordIndex + 1) % typingText.length;
                setTimeout(type, 500);
            }
        }

        type();
    </script>

</body>
</html>