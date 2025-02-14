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

</style>
 <header class="header menu_fixed" style="z-index:1">
            <div id="logo">
                <a href="{{ url('/') }}">
                    <img src="themes/img/ipetano-logo.png" width="170" height="45" alt=""
                        class="logo_normal">
                    <img src="themes/img/ipetano-logo-primary.png" width="170" height="45" alt=""
                        class="logo_sticky">
                </a>
            </div>
            <ul id="top_menu">
                {{-- <li><a href="{{ url('/sign-up') }}" class="btn_top">Register For Bussiness</a></li> --}}
                {{-- <li><a href="{{ url('/terms-and-conditions') }}" class="btn_top">Register For Consumer</a></li> --}}


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

                <li><a href="{{ url('/login') }}" class="login" title="{{ __('messages.signin') }}">{{ __('messages.signin') }}</a></li>
            </ul>
            <!-- /top_menu -->
            <a href="javascript:void(0);"  href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner" id="menu1"></div>
                    </div>
                </div>
            </a>
            <!-- /btn_mobile -->
            <nav id="menu" class="main-menu">
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
        </header>
        <!-- /header -->


        <script>
        document.getElementById('logo').addEventListener('click', function() {
            var menu = document.getElementById('menu1');
            console.log('cliked');
            menu.classList.toggle('close'); // Toggle 'open' class to show/hide the menu
        });
</script>