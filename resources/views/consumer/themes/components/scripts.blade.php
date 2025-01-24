 <!-- COMMON SCRIPTS -->
    {{-- <script src="js/common_scripts.js"></script> --}}
    <script src="{{ asset('themes/js/common_scripts.js') }}"></script>
    <script src="{{ asset('themes/js/functions.js') }}"></script>
    <script src="{{ asset('themes/assets/validate.js') }}"></script>
    {{-- <script src="js/functions.js"></script> --}}
    {{-- <script src="assets/validate.js"></script> --}}

    <!-- SPECIFIC SCRIPTS -->
    {{-- <script src="js/jquery.cookiebar.js"></script> --}}
    <script src="{{ asset('themes/js/jquery.cookiebar.js') }}"></script>
    <script>
        (function($) {
            'use strict';
            $.cookieBar({
                fixed: true
            });
        })(window.jQuery);
    </script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>