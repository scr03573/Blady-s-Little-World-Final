<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blady's Little World</title>
    <meta name="description" content="Welcome to Blady's Little World, a warm and caring place for early childhood education and bilingual learning, run by a mother and daughter.">

    <!-- Favicon -->
    <link rel="icon" href="assets/optimized/favicon.png" type="image/png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/optimized/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/optimized/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/optimized/favicon-16x16.png">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="Blady, Little World, Early Childhood Education, Bilingual Learning, Daycare, Family Owned">
    <meta name="author" content="Blady's Little World">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Blady's Little World">
    <meta property="og:description" content="A warm and caring place for early childhood education and bilingual learning, run by a mother and daughter.">
    <meta property="og:image" content="https://bladyslittleworld.com/assets/optimized/logo.png">
    <meta property="og:url" content="https://bladyslittleworld.com/">
    <meta property="og:type" content="website">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Nunito:wght@700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous" />

    <!-- Animate.css CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Google Analytics Tracking Script -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E53BXH2GT2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-E53BXH2GT2', {
            'linker': {
                'domains': ['bladyslittleworld.com', 'scr03573.github.io', 'quick-glow-438420-v7.uk.r.appspot.com']
            }
        });
    </script>

    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Custom Scripts -->
    <script src="js/scripts.js"></script>
    <script src="js/translate.js"></script>

    <!-- Google Maps API -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAreJJMR6vs7b4hwXBYnJIOnHw2MCkJBAE&callback=initMap"></script>
</head>

<body class="warm-theme">

    <!-- Header with Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/optimized/Blady_s Little World Logo.png" alt="Blady's Little World Logo" class="navbar-logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home" data-translate="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us" data-translate="aboutUs">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery" data-translate="gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#dietary-needs" data-translate="provideDietaryNeeds">Provide Dietary Needs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#request-info" data-translate="request">Request Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#schedule-tour" data-translate="scheduleTour">Schedule a Tour</a>
                        </li>
                        <li class="nav-item">
                            <button id="language-toggle" class="language-toggle-btn btn btn-link nav-link" aria-label="Toggle Language">
                                <i class="fas fa-language"></i> <span id="current-language">EN</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main id="main-content">
        <!-- Hero Section -->
        <section id="home" class="hero d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container text-center position-relative z-index-1">
                <h1 data-translate="welcome">Blady’s Little World – A Family of Caring Hearts</h1>
                <p data-translate="intro">Run by a mother and daughter, we create a safe, nurturing space where your child is treated like family, with a focus on bilingual learning.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#request-info" class="btn btn-primary btn-lg animate__animated animate__fadeInUp" data-translate="requestInfo"
                        aria-label="Request Information">Request Information</a>
                    <a href="#schedule-tour" class="btn btn-secondary btn-lg animate__animated animate__fadeInUp" data-translate="scheduleTour"
                        aria-label="Schedule a Tour">Schedule a Tour</a>
                </div>
                <div class="mt-4">
                    <h4 data-translate="hours">Operating Hours:</h4>
                    <p data-translate="operatingHours">Mon-Fri: 7:00am - 5:00pm</p>
                </div>
            </div>
        </section>

        <!-- Founders' Experience Section -->
        <section id="about-us" class="founders-experience py-5 wow animate__fadeIn">
            <div class="container">
                <h2 data-translate="aboutUs">About Us</h2>
                <div class="row">
                    <div class="col-md-6 mx-auto section-card">
                        <h3 data-translate="founder1Title">Ms. Bladymar Porras - Lead Teacher</h3>
                        <p data-translate="founder1Desc">Bladymar, the heart behind Blady’s Little World, has dedicated her life to creating a loving and engaging environment for children. Certified as a Child Development Associate (CDA), she blends interactive learning with bilingual education to ensure that each child feels valued and nurtured.</p>
                    </div>

                    <div class="col-md-6 mx-auto section-card">
                        <h3 data-translate="founder2Title">Ms. Paola Pedraza - Assistant Teacher</h3>
                        <p data-translate="founder2Desc">Paola’s passion for early education, combined with her warm personality, helps children feel comfortable and confident. With 7 years of experience, she specializes in emotional development and interactive play. Every child in Paola’s care is given the individual attention they need to flourish.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Image Gallery Section -->
        <section id="gallery" class="py-5 bg-light wow animate__fadeIn">
            <div class="container">
                <h2 data-translate="gallery">Gallery</h2>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_7981.png" class="d-block w-100" alt="IMG_7981">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_7982.png" class="d-block w-100" alt="IMG_7982">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_7987.png" class="d-block w-100" alt="IMG_7987">
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_7988.png" class="d-block w-100" alt="IMG_7988">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_7993.png" class="d-block w-100" alt="IMG_7993">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_7995.png" class="d-block w-100" alt="IMG_7995">
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_7996.png" class="d-block w-100" alt="IMG_7996">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_7998.png" class="d-block w-100" alt="IMG_7998">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_8003.png" class="d-block w-100" alt="IMG_8003">
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_8004.png" class="d-block w-100" alt="IMG_8004">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_8006.png" class="d-block w-100" alt="IMG_8006">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_8007.png" class="d-block w-100" alt="IMG_8007">
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_8008.png" class="d-block w-100" alt="IMG_8008">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_8013.png" class="d-block w-100" alt="IMG_8013">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_8014.png" class="d-block w-100" alt="IMG_8014">
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_8016.png" class="d-block w-100" alt="IMG_8016">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_8017.png" class="d-block w-100" alt="IMG_8017">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_8019.png" class="d-block w-100" alt="IMG_8019">
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/optimized/IMG_8020.png" class="d-block w-100" alt="IMG_8020">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Dietary Needs Form Section -->
        <section id="dietary-needs" class="py-5 bg-light wow animate__fadeIn">
            <div class="container">
                <h2 data-translate="provideDietaryNeeds">Provide Your Child's Dietary Needs</h2>
                <form id="dietary-form" action="https://formspree.io/f/xzzbzblg" method="POST" novalidate autocomplete="on">
                    <input type="hidden" name="dietary_form" value="1">
                    <div class="mb-3">
                        <label for="childName" class="form-label" data-translate="childNameLabel">Child's Name:</label>
                        <input type="text" id="childName" name="childName" class="form-control" required data-translate-placeholder="childNamePlaceholder" autocomplete="given-name">
                        <div class="invalid-feedback">Please enter your child's name.</div>
                    </div>
                    <div class="mb-3">
                        <label for="ageGroup" class="form-label" data-translate="ageGroupLabel">Age Group:</label>
                        <select id="ageGroup" name="ageGroup" class="form-select" required autocomplete="off">
                            <option value="" disabled selected data-translate="ageGroupPlaceholder">Select Age Group</option>
                            <option value="infant" data-translate="ageGroupOption1">Infant (5 months - 12 months)</option>
                            <option value="toddler" data-translate="ageGroupOption2">Toddler (1 - 3 years)</option>
                        </select>
                        <div class="invalid-feedback">Please select an age group.</div>
                    </div>
                    <div class="mb-3">
                        <label for="dietaryRestrictions" class="form-label" data-translate="dietaryRestrictionsLabel">Dietary Restrictions:</label>
                        <textarea id="dietaryRestrictions" name="dietaryRestrictions" rows="4" class="form-control" required data-translate-placeholder="dietaryRestrictionsPlaceholder" autocomplete="off"></textarea>
                        <div class="invalid-feedback">Please specify any dietary restrictions or allergies.</div>
                    </div>
                    <div class="mb-3">
                        <label for="preferredMeals" class="form-label" data-translate="preferredMealsLabel">Preferred Meals:</label>
                        <textarea id="preferredMeals" name="preferredMeals" rows="4" class="form-control" data-translate-placeholder="preferredMealsPlaceholder" autocomplete="off"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" data-translate="submitDietaryNeeds">Submit Dietary Needs</button>
                </form>
            </div>
        </section>

        <!-- Request Information Form Section -->
        <section id="request-info" class="py-5 wow animate__fadeIn">
            <div class="container">
                <h2 data-translate="requestInformation">Request Information</h2>
                <form id="contact-form" action="https://formspree.io/f/xeoqoqbz" method="POST" novalidate autocomplete="on">
                    <div class="mb-3">
                        <label for="parentName" class="form-label" data-translate="parentNameLabel">Parent's Name:</label>
                        <input type="text" id="parentName" name="parentName" class="form-control" required data-translate-placeholder="parentNamePlaceholder" autocomplete="name">
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" data-translate="emailLabel">Email Address:</label>
                        <input type="email" id="email" name="email" class="form-control" required data-translate-placeholder="emailPlaceholder" autocomplete="email">
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label" data-translate="phoneLabel">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" class="form-control" data-translate-placeholder="phonePlaceholder" autocomplete="tel">
                    </div>
                    <div class="mb-3">
                        <label for="additionalInfo" class="form-label" data-translate="additionalInfoLabel">Additional Information:</label>
                        <textarea id="additionalInfo" name="additionalInfo" rows="4" class="form-control" data-translate-placeholder="additionalInfoPlaceholder" autocomplete="off"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" data-translate="submitRequest">Submit Request</button>
                </form>
            </div>
        </section>

        <!-- Schedule a Tour Section -->
        <section id="schedule-tour" class="py-5 wow animate__fadeIn">
            <div class="container">
                <h2 data-translate="scheduleTour">Schedule a Tour</h2>
                <form id="tour-form" action="https://formspree.io/f/xeoqoqbz" method="POST" novalidate autocomplete="on">
                    <div class="mb-3">
                        <label for="tourParentName" class="form-label" data-translate="parentNameLabel">Parent's Name:</label>
                        <input type="text" id="tourParentName" name="parentName" class="form-control" required data-translate-placeholder="parentNamePlaceholder" autocomplete="name">
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>
                    <div class="mb-3">
                        <label for="tourEmail" class="form-label" data-translate="emailLabel">Email Address:</label>
                        <input type="email" id="tourEmail" name="email" class="form-control" required data-translate-placeholder="emailPlaceholder" autocomplete="email">
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>
                    <div class="mb-3">
                        <label for="tourPhone" class="form-label" data-translate="phoneLabel">Phone Number:</label>
                        <input type="tel" id="tourPhone" name="phone" class="form-control" data-translate-placeholder="phonePlaceholder" autocomplete="tel">
                    </div>
                    <div class="mb-3">
                        <label for="preferredTourDate" class="form-label" data-translate="preferredTourDateLabel">Preferred Tour Date:</label>
                        <input type="date" id="preferredTourDate" name="preferredTourDate" class="form-control" required data-translate-placeholder="preferredTourDatePlaceholder">
                        <div class="invalid-feedback">Please select a preferred tour date.</div>
                    </div>
                    <button type="submit" class="btn btn-primary" data-translate="submitTour">Schedule Tour</button>
                </form>
            </div>
        </section>

        <!-- Google Maps Section -->
        <section id="location-map" class="py-5 wow animate__fadeIn">
            <div class="container">
                <h2 data-translate="locationTitle">Our Location</h2>
                <div id="map" class="map-container" style="height: 400px;"></div>
                <div class="text-center mt-3">
                    <a href="https://www.google.com/maps/dir/?api=1&destination=84+Warren+Avenue,+Marlborough,+MA,+United+States" target="_blank" class="btn btn-primary">
                        Get Directions to Blady's Little World
                    </a>
                </div>
            </div>
        </section>

        <!-- Google Maps Script -->
        <script>
            function initMap() {
                var location = {lat: 42.3476, lng: -71.5564}; // Coordinates for 84 Warren Avenue, Marlborough, MA
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 14,
                    center: location
                });

                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    title: 'Blady\'s Little World Location'
                });

                var infoWindow = new google.maps.InfoWindow({
                    content: '<h4>Blady\'s Little World</h4><p>84 Warren Avenue, Marlborough, MA</p>'
                });

                marker.addListener('click', function() {
                    infoWindow.open(map, marker);
                });

                // Make the map clickable to open directions in a new tab
                map.addListener('click', function() {
                    window.open("https://www.google.com/maps/dir/?api=1&destination=84+Warren+Avenue,+Marlborough,+MA,+United+States", "_blank");
                });
            }
        </script>

    <!-- Footer -->
    <footer class="py-4">
        <div class="container text-center">
            <div class="row">
                <!-- Operating Hours -->
                <div class="col-md-3">
                    <h5 data-translate="footerOperatingHoursTitle">Operating Hours</h5>
                    <ul class="list-unstyled">
                        <li data-translate="footerOperatingHoursDetail">Mon-Fri: 7:00am - 5:00pm</li>
                    </ul>
                </div>
                <!-- Our Programs -->
                <div class="col-md-3">
                    <h5 data-translate="footerOurProgramsTitle">Our Programs</h5>
                    <ul class="list-unstyled">
                        <li><a href="#about-us" data-translate="footerAboutUs">About Us</a></li>
                        <li><a href="#gallery" data-translate="footerGallery">Gallery</a></li>
                        <li><a href="#dietary-needs" data-translate="footerDietaryNeeds">Dietary Needs</a></li>
                        <li><a href="#schedule-tour" data-translate="footerScheduleTour">Schedule a Tour</a></li>
                    </ul>
                </div>
                <!-- Family Resources -->
                <div class="col-md-3">
                    <h5 data-translate="footerFamilyResourcesTitle">Family Resources</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/profile.php?id=100081626233655" target="_blank" rel="noopener">Facebook</a></li>
                        <li><a href="https://www.instagram.com/bladyslittleworld/?hl=es" target="_blank" rel="noopener">Instagram</a></li>
                        <li><a href="#request-info" data-translate="footerRequestInfo">Request Info</a></li>
                    </ul>
                </div>
                <!-- Contact Us -->
                <div class="col-md-3">
                    <h5 data-translate="footerContactUsTitle">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="tel:+1234567890" data-translate="footerPhone">+1 (234) 567-890</a></li>
                        <li><a href="mailto:info@bladyslittleworld.com" data-translate="footerEmail">bladyslittleworld@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <!-- Copyright -->
            <p class="mt-3">&copy; <?php echo date("Y"); ?> Blady's Little World. <span data-translate="footerAllRights">All rights reserved.</span></p>
            <!-- Social Links -->
            <div class="social-links">
                <a href="https://www.facebook.com/profile.php?id=100081626233655" target="_blank" rel="noopener" aria-label="Facebook">
                    <i class="fab fa-facebook-f fa-lg"></i>
                </a>
                <a href="https://www.instagram.com/bladyslittleworld/?hl=es" target="_blank" rel="noopener" aria-label="Instagram">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="btn btn-primary animate__animated animate__bounce" aria-label="Back to Top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- WOW.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

</body>

</html>