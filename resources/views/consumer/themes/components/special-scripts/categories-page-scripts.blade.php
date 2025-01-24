  
  <script>
    const staticText = "{{ __('messages.fedha_halali') }}, "; 
    const dynamicWords = [
        "{{ __('messages.huduma_halali') }}",  
        "{{ __('messages.bidha_halali') }}"  
    ];

    let wordIndex = 0; 
    let charIndex = 0; 
    let isDeleting = false; 
    const typingSpeed = 150; 
    const deletingSpeed = 100; 
    const pauseDuration = 1500; 

    function type() {
        const currentWord = dynamicWords[wordIndex];

        if (!isDeleting) {
            // Typing phase
            document.querySelector(".dynamic-part").textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            if (charIndex === currentWord.length) {
                isDeleting = true; 
                setTimeout(type, pauseDuration); 
                return;
            }
        } else {
            // Deleting phase
            document.querySelector(".dynamic-part").textContent = currentWord.substring(0, charIndex);
            charIndex--;
            if (charIndex < 0) {
                isDeleting = false; // Switch to typing the next word
                wordIndex = (wordIndex + 1) % dynamicWords.length; // Loop through words
                setTimeout(type, pauseDuration); // Pause before typing the next word
                return;
            }
        }

        // Set the speed based on typing or deleting
        const speed = isDeleting ? deletingSpeed : typingSpeed;
        setTimeout(type, speed);
    }

    document.addEventListener("DOMContentLoaded", function() {
        // Initialize the static part and start typing animation
        document.querySelector(".static-part").textContent = staticText;
        type(); // Start typing animation
    });
</script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const heroSection = document.querySelector('.hero_single.version_3');
    const images = [
        '../../images/category-slideshow/ipetano_bg.jpg',
        '../../images/category-slideshow/ipetano_bg3.jpg',
        '../../images/category-slideshow/ipetano_bg4.jpg'
    ];

    let currentIndex = 0;
    const indicators = document.querySelectorAll('.carousel-indicators .indicator');
    const prevButton = document.querySelector('.prev-btn');
    const nextButton = document.querySelector('.next-btn');

    // Function to update the background and indicators
    const updateBackground = (index) => {
        heroSection.style.background = `#222 url("${images[index]}") center center no-repeat`;
        heroSection.style.backgroundSize = 'cover';

        // Update active indicator
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });

        currentIndex = index;
    };

    // Previous image handler
    const showPrevImage = () => {
        const prevIndex = (currentIndex - 1 + images.length) % images.length; // Wrap to last image if needed
        updateBackground(prevIndex);
    };

    // Next image handler
    const showNextImage = () => {
        const nextIndex = (currentIndex + 1) % images.length; // Wrap to first image if needed
        updateBackground(nextIndex);
    };

    // Automatic background change
    const changeBackgroundAutomatically = () => {
        showNextImage();
    };

    // Event listeners for buttons
    prevButton.addEventListener('click', showPrevImage);
    nextButton.addEventListener('click', showNextImage);

    // Event listeners for indicators
    indicators.forEach((indicator) => {
        indicator.addEventListener('click', () => {
            const index = parseInt(indicator.getAttribute('data-index'), 10);
            updateBackground(index);
        });
    });

    // Initialize
    updateBackground(currentIndex);

    // Start auto-changing backgrounds every 5 seconds
    setInterval(changeBackgroundAutomatically, 5000);
});

</script>