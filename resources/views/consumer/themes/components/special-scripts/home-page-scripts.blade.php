<<<<<<< HEAD
<script>
  const heroTextMain = document.querySelector('.hero_text_main');
    const cursor = document.querySelector('.cursor');

    function startTyping() {
        cursor.classList.add('blink'); // Start blinking when typing stops
        // Add code here for typing effect
    }

    function stopTyping() {
        cursor.classList.remove('blink'); // Pause blinking during typing
    }
</script>




<script>
    $(document).ready(function() {
        const searchResults = document.getElementById("results");
        const productResults = document.getElementById("search-results");
        searchResults.style.display = "none";
        productResults.style.display = "none";
    });

    function searchCompanies() {
        var query = document.getElementById("search-query").value;
        const searchResults = document.getElementById("results");
        if (query !== "") {
            $('#search-product').hide();
            searchResults.style.display = "block"; // Display results if there's input
        } else {
            searchResults.style.display = "none"; // Hide results if no input
            $('#search-product').show();
        }
        $.ajax({
            url: "/search",
            method: "GET",
            data: { query: query },
            dataType: "json",
            success: function(data) {
                if (data.business.length > 0 || data.category.length > 0) {
                    $('#results').css('background-color', 'white');
                    displayResults(data);
                } else if (query === "" || query === null) {
                    searchResults.style.display = "none";
                    return;
                } else {
                    $('#results').css('background-color', 'white');
                    displayResults(data);
                }
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            },
        });
    }

    function displayResults(data) {
      
        const resultsContainer = document.getElementById('results');
        resultsContainer.innerHTML = "";
        
        if (data.business.length > 0 && data.category.length > 0) {
            var resultHTML = `<h5 style="padding-left:15px;">Company</h5>`;
            data.business.forEach(function(item) {
                resultHTML += `
                <div class="row" style="padding-left:15px;">
                    <a href="business/reviews/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6">
                            <h6 style="margin: 0;">${item.business_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;">
                            <img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky" style="margin-left:40px;"> ${item.total_rating}
                        </div>
                    </div>
                    </a>
                </div>`;
            });

            var resultHTMLCat = `<hr style="margin: 7px; border: 1px solid #ccc;"><h5 style="padding-left:15px;">Category</h5>`;
            data.category.forEach(function(item) {
                resultHTMLCat += `
                <div class="row" style="padding-left:15px;">
                    <a href="category-businesses/${item.category_name}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6" style="margin-top: 10px;">
                            <h6 style="margin: 0;">${item.category_name}</h6>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;"></div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTML + resultHTMLCat;
        } else if (data.business.length > 0 && data.category.length == 0) {
            var resultHTML = `<h5 style="padding-left:15px;">Company</h5>`;
            data.business.forEach(function(item) {
                resultHTML += `
                <div class="row" style="padding-left:15px;">
                    <a href="business/reviews/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6">
                            <h6 style="margin: 0;">${item.business_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;">
                            <img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky" style="margin-left:40px;"> ${item.total_rating}
                        </div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTML;
        } else if (data.business.length == 0 && data.category.length > 0) {
            var resultHTMLCat = `<hr style="margin: 7px; border: 1px solid #ccc;"><h5 style="padding-left:15px;">Category</h5>`;
            data.category.forEach(function(item) {
                resultHTMLCat += `
                <div class="row" style="padding-left:15px;">
                    <a href="category-businesses/${item.category_name}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6" style="margin-top: 10px;">
                            <h6 style="margin: 0;">${item.category_name}</h6>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;"></div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTMLCat;
        } else if (data.business.length == 0 && data.category.length == 0) {
            var resultHTML = `<h5 style="padding-left:15px;">No data found</h5>`;
            resultsContainer.innerHTML = resultHTML;
        }
    }

    function searchProduct() {

        var query = document.getElementById("search-product-query").value;
        const searchResults = document.getElementById("search-results");
        if (query !== "") {
            searchResults.style.display = "block"; // Display search-results if there's input
        } else {
            searchResults.style.display = "none"; // Hide search-results if no input
            $('#search-product').show();
        }
        $.ajax({
            url: "/search-product",
            method: "GET",
            data: { query: query },
            dataType: "json",
            success: function(data) {
                if (data.product.length > 0 || data.service.length > 0) {
                    $('#search-results').css('background-color', 'white');
                    displayProductResults(data);
                } else if (query === "" || query === null) {
                    searchResults.style.display = "none";
                    return;
                } else {
                    $('#search-results').css('background-color', 'white');
                    displayProductResults(data);
                }
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            },
        });
    }

    function displayProductResults(data) {
        console.log('data',data);
        const resultsContainer = document.getElementById('search-results');
        resultsContainer.innerHTML = "";
        
        if (data.product.length > 0 && data.service.length > 0) {
            var resultHTML = `<h5 style="padding-left:15px;">Products</h5>`;
            data.product.forEach(function(item) {
                resultHTML += `
                <div class="row" style="padding-left:15px;">
                    <a href="consumer/product/read-more/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6">
                            <h6 style="margin: 0;">${item.product_name} from  ${item.business_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;">
                            <img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky" style="margin-left:40px;"> ${item.total_rating}
                        </div>
                    </div>
                    </a>
                </div>`;
            });

            var resultHTMLCat = `<hr style="margin: 7px; border: 1px solid #ccc;"><h5 style="padding-left:15px;">Services</h5>`;
            data.service.forEach(function(item) {
                resultHTMLCat += `
                <div class="row" style="padding-left:15px;">
                    <a href="consumer/service/read-more/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6" style="margin-top: 10px;">
                            <h6 style="margin: 0;">${item.service_name} from ${item.business_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;"></div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTML + resultHTMLCat;
        } else if (data.product.length > 0 && data.service.length == 0) {
            var resultHTML = `<h5 style="padding-left:15px;">Products</h5>`;
            data.product.forEach(function(item) {
                resultHTML += `
                <div class="row" style="padding-left:15px;">
                    <a href="consumer/product/read-more/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6">
                            <h6 style="margin: 0;">${item.product_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;">
                            <img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky" style="margin-left:40px;"> ${item.total_rating}
                        </div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTML;
        } else if (data.product.length == 0 && data.service.length > 0) {
            var resultHTMLCat = `<hr style="margin: 7px; border: 1px solid #ccc;"><h5 style="padding-left:15px;">Services</h5>`;
            data.service.forEach(function(item) {
                resultHTMLCat += `
                <div class="row" style="padding-left:15px;">
                    <a href="consumer/service/read-more/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6" style="margin-top: 10px;">
                            <h6 style="margin: 0;">${item.service_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;"></div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTMLCat;
        } else if (data.product.length == 0 && data.service.length == 0) {
            var resultHTML = `<h5 style="padding-left:15px;">No data found</h5>`;
            resultsContainer.innerHTML = resultHTML;
        }
    }
</script>








  <script>
    // Pass translations from Laravel to JavaScript using the @lang directive
    const translations = {
        published: "@lang('messages.published')",
        readReview: "@lang('messages.read_review')",
        rating: "@lang('messages.rating')",
        reviews: "@lang('messages.reviews')",
        categoriesList: @json(trans('messages.categories_list'))  // Getting the categories list from Laravel to JS
    };

    // Translate function to get translated strings
    function translate(key) {
        return translations[key] || key;
    }

    // Fetch recent reviews via AJAX
    function fetchRecentReviews() {
        $.ajax({
            url: '/consumer/all-review-list', // URL ya route ya Laravel
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Call a function to update the HTML with the fetched data
                updateReviewsCard(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // Format date to day-month-year format
    function formatDateToDMY(dateString) {
        const dateObj = new Date(dateString);
        const day = dateObj.getUTCDate();
        const month = dateObj.getUTCMonth() + 1;
        const year = dateObj.getUTCFullYear();
        const formattedDay = String(day).padStart(2, "0");
        const formattedMonth = String(month).padStart(2, "0");
        return `${formattedDay}-${formattedMonth}-${year}`;
    }

    // Update the reviews card with the fetched reviews
    function updateReviewsCard(reviews) {
        function truncateText(text, maxLength) {
            if (text.length > maxLength) {
                return text.substring(0, maxLength) + '...';
            }
            return text;
        }

        // Assuming you have a container to display the reviews, set its ID as 'reviewsContainer'.
        var container = document.getElementById('reviewsContainer');
        container.innerHTML = ''; // Clear existing reviews

        reviews.forEach(function(review) {
            console.log("Category from review:", review.business.category.category_name);  // Log the category name for debugging

            // Ensure the category is correctly passed and translated
            var translatedCategory = getTranslatedCategory(review.business.category.category_name);
            console.log('translated'+translatedCategory)

            var companyLogo = review.company_logo !== null ? '/images/business/' + review.company_logo : '/themes/img/avatar3.jpg';

            var reviewHTML =
                '<div class="col-sm-4 ">' +
                    '<div class="item shadow transition-card mt-5 ml-4">' +
                        '<div class="review_listing">' +
                            '<div class="clearfix">' +
                                '<figure><img src="' + companyLogo + '" alt=""></figure>' +
                                '<span class="rating">' + getStarIcons(review.rating) + '<em>' +
                                review.rating + '/5.00</em></span>' +
                                '<small>' + review.business.business_name + '</small>' +
                                '<small>' + translatedCategory + '</small>' +  // Use translated category
                            '</div>' +
                            '<h3><strong>' + review.user.first_name + ' ' + review.user.last_name + '</strong></h3>' +
                            '<p>' + truncateText(review.review, 40) + '</p>' +
                            '<ul class="clearfix">' +
                                '<li><small>' + translate('published') + ': ' + formatDateToDMY(review.created_at) + '</small></li>' +
                                '<li><a href="business/reviews/' + review.business_id + '" class="btn_1 small">' + translate('readReview') + '</a></li>' +
                            '</ul>' +
                        '</div>' +
                    '</div>' +
                '</div>';

            container.innerHTML += reviewHTML;
        });
    }

    // Translate the category name using the categories list from translations
    function getTranslatedCategory(category) {
        // Log the full categories list for debugging
        console.log("Categories List:", translations.categoriesList);

        if (translations.categoriesList[category]) {
            return translations.categoriesList[category];
        } else {
            console.warn('Category not found:', category); // Log if category is not found
            return category; // Return the original category if not found
        }
    }

    // Function to generate star icons dynamically based on the rating value
    function getStarIcons(rating) {
        var filledStars = Math.floor(rating);
        var halfStar = rating - filledStars >= 0.5;
        var emptyStars = 5 - filledStars - (halfStar ? 1 : 0);

        var starIcons = '';
        for (var i = 0; i < filledStars; i++) {
            starIcons += '<img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky">';
        }
        if (halfStar) {
            starIcons += '<i class="icon_star-half_alt"></i>';
        }
        for (var j = 0; j < emptyStars; j++) {
            starIcons += '<img src="/themes/img/gray.svg" alt="" width="17" class="logo_sticky">';
        }
        return starIcons;
    }

    // Call the fetchRecentReviews function when the page loads or whenever you need to update the reviews card.
    document.addEventListener("DOMContentLoaded", function() {
        fetchRecentReviews();
    });
</script>
=======
<script>
  const heroTextMain = document.querySelector('.hero_text_main');
    const cursor = document.querySelector('.cursor');

    function startTyping() {
        cursor.classList.add('blink'); // Start blinking when typing stops
        // Add code here for typing effect
    }

    function stopTyping() {
        cursor.classList.remove('blink'); // Pause blinking during typing
    }
</script>




<script>
    $(document).ready(function() {
        const searchResults = document.getElementById("results");
        const productResults = document.getElementById("search-results");
        searchResults.style.display = "none";
        productResults.style.display = "none";
    });

    function searchCompanies() {
        var query = document.getElementById("search-query").value;
        const searchResults = document.getElementById("results");
        if (query !== "") {
            $('#search-product').hide();
            searchResults.style.display = "block"; // Display results if there's input
        } else {
            searchResults.style.display = "none"; // Hide results if no input
            $('#search-product').show();
        }
        $.ajax({
            url: "/search",
            method: "GET",
            data: { query: query },
            dataType: "json",
            success: function(data) {
                if (data.business.length > 0 || data.category.length > 0) {
                    $('#results').css('background-color', 'white');
                    displayResults(data);
                } else if (query === "" || query === null) {
                    searchResults.style.display = "none";
                    return;
                } else {
                    $('#results').css('background-color', 'white');
                    displayResults(data);
                }
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            },
        });
    }

    function displayResults(data) {
      
        const resultsContainer = document.getElementById('results');
        resultsContainer.innerHTML = "";
        
        if (data.business.length > 0 && data.category.length > 0) {
            var resultHTML = `<h5 style="padding-left:15px;">Company</h5>`;
            data.business.forEach(function(item) {
                resultHTML += `
                <div class="row" style="padding-left:15px;">
                    <a href="business/reviews/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6">
                            <h6 style="margin: 0;">${item.business_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;">
                            <img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky" style="margin-left:40px;"> ${item.total_rating}
                        </div>
                    </div>
                    </a>
                </div>`;
            });

            var resultHTMLCat = `<hr style="margin: 7px; border: 1px solid #ccc;"><h5 style="padding-left:15px;">Category</h5>`;
            data.category.forEach(function(item) {
                resultHTMLCat += `
                <div class="row" style="padding-left:15px;">
                    <a href="category-businesses/${item.category_name}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6" style="margin-top: 10px;">
                            <h6 style="margin: 0;">${item.category_name}</h6>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;"></div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTML + resultHTMLCat;
        } else if (data.business.length > 0 && data.category.length == 0) {
            var resultHTML = `<h5 style="padding-left:15px;">Company</h5>`;
            data.business.forEach(function(item) {
                resultHTML += `
                <div class="row" style="padding-left:15px;">
                    <a href="business/reviews/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6">
                            <h6 style="margin: 0;">${item.business_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;">
                            <img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky" style="margin-left:40px;"> ${item.total_rating}
                        </div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTML;
        } else if (data.business.length == 0 && data.category.length > 0) {
            var resultHTMLCat = `<hr style="margin: 7px; border: 1px solid #ccc;"><h5 style="padding-left:15px;">Category</h5>`;
            data.category.forEach(function(item) {
                resultHTMLCat += `
                <div class="row" style="padding-left:15px;">
                    <a href="category-businesses/${item.category_name}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6" style="margin-top: 10px;">
                            <h6 style="margin: 0;">${item.category_name}</h6>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;"></div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTMLCat;
        } else if (data.business.length == 0 && data.category.length == 0) {
            var resultHTML = `<h5 style="padding-left:15px;">No data found</h5>`;
            resultsContainer.innerHTML = resultHTML;
        }
    }

    function searchProduct() {

        var query = document.getElementById("search-product-query").value;
        const searchResults = document.getElementById("search-results");
        if (query !== "") {
            searchResults.style.display = "block"; // Display search-results if there's input
        } else {
            searchResults.style.display = "none"; // Hide search-results if no input
            $('#search-product').show();
        }
        $.ajax({
            url: "/search-product",
            method: "GET",
            data: { query: query },
            dataType: "json",
            success: function(data) {
                if (data.product.length > 0 || data.service.length > 0) {
                    $('#search-results').css('background-color', 'white');
                    displayProductResults(data);
                } else if (query === "" || query === null) {
                    searchResults.style.display = "none";
                    return;
                } else {
                    $('#search-results').css('background-color', 'white');
                    displayProductResults(data);
                }
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            },
        });
    }

    function displayProductResults(data) {
        console.log('data',data);
        const resultsContainer = document.getElementById('search-results');
        resultsContainer.innerHTML = "";
        
        if (data.product.length > 0 && data.service.length > 0) {
            var resultHTML = `<h5 style="padding-left:15px;">Products</h5>`;
            data.product.forEach(function(item) {
                resultHTML += `
                <div class="row" style="padding-left:15px;">
                    <a href="consumer/product/read-more/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6">
                            <h6 style="margin: 0;">${item.product_name} from ${item.business_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;">
                            <img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky" style="margin-left:40px;"> ${item.total_rating}
                        </div>
                    </div>
                    </a>
                </div>`;
            });

            var resultHTMLCat = `<hr style="margin: 7px; border: 1px solid #ccc;"><h5 style="padding-left:15px;">Services</h5>`;
            data.service.forEach(function(item) {
                resultHTMLCat += `
                <div class="row" style="padding-left:15px;">
                    <a href="consumer/service/read-more/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6" style="margin-top: 10px;">
                            <h6 style="margin: 0;">${item.service_name} from ${item.business_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;"></div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTML + resultHTMLCat;
        } else if (data.product.length > 0 && data.service.length == 0) {
            var resultHTML = `<h5 style="padding-left:15px;">Products</h5>`;
            data.product.forEach(function(item) {
                resultHTML += `
                <div class="row" style="padding-left:15px;">
                    <a href="consumer/product/read-more/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6">
                            <h6 style="margin: 0;">${item.product_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;">
                            <img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky" style="margin-left:40px;"> ${item.total_rating}
                        </div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTML;
        } else if (data.product.length == 0 && data.service.length > 0) {
            var resultHTMLCat = `<hr style="margin: 7px; border: 1px solid #ccc;"><h5 style="padding-left:15px;">Services</h5>`;
            data.service.forEach(function(item) {
                resultHTMLCat += `
                <div class="row" style="padding-left:15px;">
                    <a href="consumer/service/read-more/${item.id}" class="col-md-12">
                        <div class="row">
                        <div class="col-sm-6" style="margin-top: 10px;">
                            <h6 style="margin: 0;">${item.service_name}</h6>
                            <small style="margin: 0;">${item.total_review} Reviews</small>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="float: right;"></div>
                    </div>
                    </a>
                </div>`;
            });
            resultsContainer.innerHTML = resultHTMLCat;
        } else if (data.product.length == 0 && data.service.length == 0) {
            var resultHTML = `<h5 style="padding-left:15px;">No data found</h5>`;
            resultsContainer.innerHTML = resultHTML;
        }
    }
</script>








  <script>
    // Pass translations from Laravel to JavaScript using the @lang directive
    const translations = {
        published: "@lang('messages.published')",
        readReview: "@lang('messages.read_review')",
        rating: "@lang('messages.rating')",
        reviews: "@lang('messages.reviews')",
        categoriesList: @json(trans('messages.categories_list'))  // Getting the categories list from Laravel to JS
    };

    // Translate function to get translated strings
    function translate(key) {
        return translations[key] || key;
    }

    // Fetch recent reviews via AJAX
    function fetchRecentReviews() {
        $.ajax({
            url: '/consumer/all-review-list', // URL ya route ya Laravel
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Call a function to update the HTML with the fetched data
                updateReviewsCard(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // Format date to day-month-year format
    function formatDateToDMY(dateString) {
        const dateObj = new Date(dateString);
        const day = dateObj.getUTCDate();
        const month = dateObj.getUTCMonth() + 1;
        const year = dateObj.getUTCFullYear();
        const formattedDay = String(day).padStart(2, "0");
        const formattedMonth = String(month).padStart(2, "0");
        return `${formattedDay}-${formattedMonth}-${year}`;
    }

    // Update the reviews card with the fetched reviews
    function updateReviewsCard(reviews) {
        function truncateText(text, maxLength) {
            if (text.length > maxLength) {
                return text.substring(0, maxLength) + '...';
            }
            return text;
        }

        // Assuming you have a container to display the reviews, set its ID as 'reviewsContainer'.
        var container = document.getElementById('reviewsContainer');
        container.innerHTML = ''; // Clear existing reviews

        reviews.forEach(function(review) {
            console.log("Category from review:", review.business.category.category_name);  // Log the category name for debugging

            // Ensure the category is correctly passed and translated
            var translatedCategory = getTranslatedCategory(review.business.category.category_name);
            console.log('translated'+translatedCategory)

            var companyLogo = review.company_logo !== null ? '/images/business/' + review.company_logo : '/themes/img/avatar3.jpg';

            var reviewHTML =
                '<div class="col-sm-4 ">' +
                    '<div class="item shadow transition-card mt-5 ml-4">' +
                        '<div class="review_listing">' +
                            '<div class="clearfix">' +
                                '<figure><img src="' + companyLogo + '" alt=""></figure>' +
                                '<span class="rating">' + getStarIcons(review.rating) + '<em>' +
                                review.rating + '/5.00</em></span>' +
                                '<small>' + review.business.business_name + '</small>' +
                                '<small>' + translatedCategory + '</small>' +  // Use translated category
                            '</div>' +
                            '<h3><strong>' + review.user.first_name + ' ' + review.user.last_name + '</strong></h3>' +
                            '<p>' + truncateText(review.review, 40) + '</p>' +
                            '<ul class="clearfix">' +
                                '<li><small>' + translate('published') + ': ' + formatDateToDMY(review.created_at) + '</small></li>' +
                                '<li><a href="business/reviews/' + review.business_id + '" class="btn_1 small">' + translate('readReview') + '</a></li>' +
                            '</ul>' +
                        '</div>' +
                    '</div>' +
                '</div>';

            container.innerHTML += reviewHTML;
        });
    }

    // Translate the category name using the categories list from translations
    function getTranslatedCategory(category) {
        // Log the full categories list for debugging
        console.log("Categories List:", translations.categoriesList);

        if (translations.categoriesList[category]) {
            return translations.categoriesList[category];
        } else {
            console.warn('Category not found:', category); // Log if category is not found
            return category; // Return the original category if not found
        }
    }

    // Function to generate star icons dynamically based on the rating value
    function getStarIcons(rating) {
        var filledStars = Math.floor(rating);
        var halfStar = rating - filledStars >= 0.5;
        var emptyStars = 5 - filledStars - (halfStar ? 1 : 0);

        var starIcons = '';
        for (var i = 0; i < filledStars; i++) {
            starIcons += '<img src="/themes/img/colored.svg" alt="" width="17" class="logo_sticky">';
        }
        if (halfStar) {
            starIcons += '<i class="icon_star-half_alt"></i>';
        }
        for (var j = 0; j < emptyStars; j++) {
            starIcons += '<img src="/themes/img/gray.svg" alt="" width="17" class="logo_sticky">';
        }
        return starIcons;
    }

    // Call the fetchRecentReviews function when the page loads or whenever you need to update the reviews card.
    document.addEventListener("DOMContentLoaded", function() {
        fetchRecentReviews();
    });
</script>
>>>>>>> front-end
