  <script>
            document.getElementById('searchForm').addEventListener('submit', function(e) {
            // Show the preloader when the form is submitted
            document.getElementById('preloader').style.display = 'flex';
            document.getElementById('no-results').style.display = 'none';  // Hide 'no results' message
            document.querySelector('button[type="submit"]').disabled = true;  // Disable the submit button
        });

        window.addEventListener('load', function() {
            // Assume we get the business count from the backend
            const businessesCount = @json($businesses->count());

            if (businessesCount === 0) {
                // No results found, show 'no results' message and hide the spinner
                document.getElementById('no-results').style.display = 'block';
            }

            // Hide the preloader and re-enable the submit button
            document.getElementById('preloader').style.display = 'none';
            document.querySelector('button[type="submit"]').disabled = false;
        });
   </script>
   <script>
    let currentIndex = 0;
    const cardsWrapper = document.querySelector('.cards-wrapper');
    const totalCards = document.querySelectorAll('.card').length;
    const cardsVisible = 3; // Number of cards to display at once
    const cardWidth = document.querySelector('.card').offsetWidth + 20; // Card width + margin

    // Function to slide the cards
    function slideCards() {
    if (currentIndex >= totalCards - cardsVisible) {
        currentIndex = 0; // Reset to the first card if it's the last one
    } else {
        currentIndex++;
    }
    
    // Update the transform property to slide the cards
    cardsWrapper.style.transform = `translateX(-${cardWidth * currentIndex}px)`;
    }

    // Automatic sliding every 2 seconds
    setInterval(slideCards, 2000);

   </script>