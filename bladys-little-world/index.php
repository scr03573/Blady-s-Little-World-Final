<?php
require 'vendor/autoload.php'; // Include Composer autoload

// Load environment variables from the .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Get the Google Analytics Measurement ID and Google Maps API key from the environment
$measurementId = $_ENV['GA_MEASUREMENT_ID']; // Updated key name
$mapsApiKey = $_ENV['GOOGLE_MAP_API_KEY']; // Updated key name

use GeoIp2\Database\Reader;

try {
	// Create the GeoIP2 reader
	$reader = new Reader('/Users/camroy/blady-web-app/bladys-little-world/geoip/GeoLite2-City_20241018/GeoLite2-City.mmdb');
	// Get the user's IP address
	$ipAddress = $_SERVER['REMOTE_ADDR'];

	// Get location data
	$record = $reader->city($ipAddress);

	$city = $record->city->name;
	$country = $record->country->name;

	// Log the user's IP address, city, and country to a file
	$logFile = '/Users/camroy/blady-web-app/bladys-little-world/user_logs.txt'; // Path to the log file
	$logEntry = "[" . date('Y-m-d H:i:s') . "] IP: $ipAddress, City: $city, Country: $country\n";
	file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

	echo "<script>console.log('User\'s IP: $ipAddress, City: $city, Country: $country');</script>";

} catch (Exception $e) {
	echo "<script>console.error('GeoIP2 Error: ".$e->getMessage()."');</script>";
}
?>

<!DOCTYPE html>
<html lang="es">

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
	<link rel="stylesheet" href="css/styles.css?v=1.0">
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NSSVW94M');</script>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSSVW94M"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<!-- Google Analytics Tracking Script -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $measurementId; ?>"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', '<?php echo $measurementId; ?>', {
			'linker': {
				'domains': ['bladyslittleworld.com', 'scr03573.github.io', 'quick-glow-438420-v7.uk.r.appspot.com']
			}
		});
	</script>

	<!-- Google reCAPTCHA -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<!-- WOW.js CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script>
		// Initialize WOW.js
		new WOW().init();
	</script>

	<!-- Custom Scripts -->
	<script defer src="js/scripts.js"></script>
	<script defer src="js/translate.js"></script>

	<!-- Google Maps API with Places Library -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo $mapsApiKey; ?>&callback=initMap&libraries=places&language=en&region=US"></script>
	
	<!-- Detect Scroll and Close Hamburger Menu -->
	<script>
		// Function to close the hamburger menu
		function closeHamburgerMenu() {
			const navbarToggler = document.querySelector('.navbar-toggler');
			const navbarCollapse = document.querySelector('.navbar-collapse');
			if (navbarToggler && navbarCollapse.classList.contains('show')) {
				navbarToggler.click(); // Trigger the button to close the menu
			}
		}

		// Listen for scroll event
		window.addEventListener('scroll', () => {
			closeHamburgerMenu(); // Close the menu when the user scrolls
		});
	</script>

	<!-- Device Orientation Event Listener -->
	<script>
		window.addEventListener('deviceorientation', function(event) {
			const orientation = event.alpha ? "Portrait" : "Landscape";
			console.log('Device Orientation:', orientation);
			// Send the orientation data to Google Analytics
			gtag('event', 'device_orientation', {
				'event_category': 'interaction',
				'event_label': orientation
			});
		});
	</script>
</head>

<body class="warm-theme">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSSVW94M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
							<a class="nav-link active" aria-current="page" href="#home" data-translate="home">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about-us" data-translate="aboutUs">Sobre Nosotros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#gallery" data-translate="gallery">Galería</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#dietary-needs" data-translate="provideDietaryNeeds">Proporcione las Necesidades Dietéticas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#request-info" data-translate="request">Solicitar Información</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#schedule-tour" data-translate="scheduleTour">Programar una Visita</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#location-map" data-translate="getDirections">Obtener Direcciones</a>
						</li>
						<li class="nav-item">
							<button id="language-toggle" class="language-toggle-btn btn btn-link nav-link" aria-label="Toggle Language">
								<i class="fas fa-language"></i> <span id="current-language">ES</span>
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
				<h1 data-translate="welcome">BLADY’S LITTLE WORLD – UNA FAMILIA DE CORAZONES CARIÑOSOS</h1>
				<p data-translate="intro">Dirigido por una madre y una hija, creamos un espacio seguro y acogedor donde su hijo es tratado como familia, con un enfoque en el aprendizaje bilingüe.</p>
				<div class="d-flex justify-content-center gap-3">
					<a href="#dietary-needs" class="btn btn-primary btn-lg animate__animated animate__fadeInUp" data-translate="dietaryNeedsButton"
						aria-label="Provide Dietary Needs">Dietary Needs</a>
					<a href="#request-info" class="btn btn-secondary btn-lg animate__animated animate__fadeInUp" data-translate="requestInfo"
						aria-label="Request Information">Solicitar Información</a>
					<a href="#schedule-tour" class="btn btn-secondary btn-lg animate__animated animate__fadeInUp" data-translate="scheduleTour"
						aria-label="Schedule a Tour">Programar una Visita</a>
				</div>
				<div class="mt-4">
					<h4 data-translate="hours">Horario de Atención:</h4>
					<p data-translate="operatingHours">Lun-Vie: 7:00am - 5:00pm</p>
					<div class="social-links mt-3">
						<a href="https://www.facebook.com/profile.php?id=100081626233655" target="_blank" rel="noopener" aria-label="Facebook">
							<i class="fab fa-facebook-f fa-lg"></i>
						</a>
						<a href="https://www.instagram.com/bladyslittleworld/?hl=es" target="_blank" rel="noopener" aria-label="Instagram">
							<i class="fab fa-instagram fa-lg"></i>
						</a>
					</div>
				</div>
			</div>
		</section>

		<!-- Founders' Experience Section -->
		<section id="about-us" class="founders-experience py-5 wow animate__fadeIn">
			<div class="container">
				<h2 data-translate="aboutUs">SOBRE NOSOTROS</h2>
				<div class="row">
					<div class="col-md-6 mx-auto section-card">
						<h3 data-translate="founder1Title">SRA. BLADYMAR PORRAS - MAESTRA PRINCIPAL</h3>
						<p data-translate="founder1Desc">Bladymar, el corazón detrás de Blady’s Little World, ha dedicado su vida a crear un entorno amoroso y atractivo para los niños. Certificada como Asociada de Desarrollo Infantil (CDA), combina el aprendizaje interactivo con la educación bilingüe para garantizar que cada niño se sienta valorado y cuidado.</p>
					</div>

					<div class="col-md-6 mx-auto section-card">
						<h3 data-translate="founder2Title">SRA. PAOLA PEDRAZA - MAESTRA ASISTENTE</h3>
						<p data-translate="founder2Desc">La pasión de Paola por la educación temprana, combinada con su personalidad cálida, ayuda a los niños a sentirse cómodos y seguros. Con 7 años de experiencia, se especializa en desarrollo emocional y juego interactivo. Cada niño bajo el cuidado de Paola recibe la atención individual que necesita para prosperar.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Image Gallery Section -->
		<section id="gallery" class="py-5 bg-light wow animate__fadeIn">
			<div class="container">
				<h2 data-translate="gallery">Galería</h2>
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">
								<div class="col-md-4">
									<img src="assets/optimized/IMG_7981.png" class="d-block w-100" alt="IMG_7981" loading="lazy">
								</div>
								<div class="col-md-4">
									<img src="assets/optimized/IMG_7982.png" class="d-block w-100" alt="IMG_7982" loading="lazy">
								</div>
								<div class="col-md-4">
									<img src="assets/optimized/IMG_7987.png" class="d-block w-100" alt="IMG_7987" loading="lazy">
								</div>
							</div>
						</div>

						<div class="carousel-item">
							<div class="row">
								<div class="col-md-4">
									<img src="assets/optimized/IMG_7988.png" class="d-block w-100" alt="IMG_7988" loading="lazy">
								</div>
								<div class="col-md-4">
									<img src="assets/optimized/IMG_7993.png" class="d-block w-100" alt="IMG_7993" loading="lazy">
								</div>
								<div class="col-md-4">
									<img src="assets/optimized/IMG_7995.png" class="d-block w-100" alt="IMG_7995" loading="lazy">
								</div>
							</div>
						</div>

						<div class="carousel-item">
							<div class="row">
								<div class="col-md-4">
									<img src="assets/optimized/IMG_7996.png" class="d-block w-100" alt="IMG_7996" loading="lazy">
								</div>
								<div class="col-md-4">
									<img src="assets/optimized/IMG_7998.png" class="d-block w-100" alt="IMG_7998" loading="lazy">
								</div>
								<div class="col-md-4">
									<img src="assets/optimized/IMG_8003.png" class="d-block w-100" alt="IMG_8003" loading="lazy">
								</div>
							</div>
						</div>

						<div class="carousel-item">
							<div class="row">
								<div class="col-md-4">
									<img src="assets/optimized/IMG_8004.png" class="d-block w-100" alt="IMG_8004" loading="lazy">
								</div>
								<div class="col-md-4">
									<img src="assets/optimized/IMG_8006.png" class="d-block w-100" alt="IMG_8006" loading="lazy">
								</div>
								<div class="col-md-4">
									<img src="assets/optimized/IMG_8007.png" class="d-block w-100" alt="IMG_8007" loading="lazy">
								</div>
							</div>
						</div>

						<div class="carousel-item">
							<div class="row">
								<div class="col-md-4">
									<img src="assets/optimized/IMG_8008.png" class="d-block w-100" alt="IMG_8008" loading="lazy">
								</div>
								<div class="col-md-4">
									<img src="assets/optimized/IMG_8013.png" class="d-block w-100" alt="IMG_8013" loading="lazy">
								</div>
								<div class="col-md-4">
									<img src="assets/optimized/IMG_8014.png" class="d-block w-100" alt="IMG_8014" loading="lazy">
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
				<h2 data-translate="provideDietaryNeeds">Proporcione las Necesidades Dietéticas de su Hijo</h2>
				<form id="dietary-form" action="https://formspree.io/f/xzzbzblg" method="POST" novalidate autocomplete="on">
					<input type="hidden" name="dietary_form" value="1">
					<div class="mb-3">
						<label for="childName" class="form-label" data-translate="childNameLabel">Nombre del Niño:</label>
						<input type="text" id="childName" name="childName" class="form-control" required data-translate-placeholder="childNamePlaceholder" autocomplete="given-name">
						<div class="invalid-feedback">Por favor, introduzca el nombre de su hijo.</div>
					</div>
					<div class="mb-3">
						<label for="ageGroup" class="form-label" data-translate="ageGroupLabel">Grupo de Edad:</label>
						<select id="ageGroup" name="ageGroup" class="form-select" required autocomplete="off">
							<option value="" disabled selected data-translate="ageGroupPlaceholder">Seleccione el Grupo de Edad</option>
							<option value="infant" data-translate="ageGroupOption1">Infante (5 meses - 12 meses)</option>
							<option value="toddler" data-translate="ageGroupOption2">Niño Pequeño (1 - 3 años)</option>
						</select>
						<div class="invalid-feedback">Por favor, seleccione un grupo de edad.</div>
					</div>
					<div class="mb-3">
						<label for="dietaryRestrictions" class="form-label" data-translate="dietaryRestrictionsLabel">Restricciones Dietéticas:</label>
						<textarea id="dietaryRestrictions" name="dietaryRestrictions" rows="4" class="form-control" required data-translate-placeholder="dietaryRestrictionsPlaceholder" autocomplete="off"></textarea>
						<div class="invalid-feedback">Por favor, especifique cualquier restricción o alergia alimentaria.</div>
					</div>
					<div class="mb-3">
						<label for="preferredMeals" class="form-label" data-translate="preferredMealsLabel">Comidas Preferidas:</label>
						<textarea id="preferredMeals" name="preferredMeals" rows="4" class="form-control" data-translate-placeholder="preferredMealsPlaceholder" autocomplete="off"></textarea>
					</div>
					<button type="submit" class="btn btn-primary" data-translate="submitDietaryNeeds">Enviar Necesidades Dietéticas</button>
				</form>
			</div>
		</section>

		<!-- Request Information Form Section -->
		<section id="request-info" class="py-5 wow animate__fadeIn">
			<div class="container">
				<h2 data-translate="requestInformation">Solicitar Información</h2>
				<form id="contact-form" action="https://formspree.io/f/xeoqoqbz" method="POST" novalidate autocomplete="on">
					<div class="mb-3">
						<label for="parentName" class="form-label" data-translate="parentNameLabel">Nombre del Padre:</label>
						<input type="text" id="parentName" name="parentName" class="form-control" required data-translate-placeholder="parentNamePlaceholder" autocomplete="name">
						<div class="invalid-feedback">Por favor, introduzca su nombre.</div>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label" data-translate="emailLabel">Dirección de Correo Electrónico:</label>
						<input type="email" id="email" name="email" class="form-control" required data-translate-placeholder="emailPlaceholder" autocomplete="email">
						<div class="invalid-feedback">Por favor, introduzca una dirección de correo electrónico válida.</div>
					</div>
					<div class="mb-3">
						<label for="phone" class="form-label" data-translate="phoneLabel">Número de Teléfono:</label>
						<input type="tel" id="phone" name="phone" class="form-control" data-translate-placeholder="phonePlaceholder" autocomplete="tel">
					</div>
					<div class="mb-3">
						<label for="additionalInfo" class="form-label" data-translate="additionalInfoLabel">Información Adicional:</label>
						<textarea id="additionalInfo" name="additionalInfo" rows="4" class="form-control" data-translate-placeholder="additionalInfoPlaceholder" autocomplete="off"></textarea>
					</div>
					<button type="submit" class="btn btn-primary" data-translate="submitRequest">Enviar Solicitud</button>
				</form>
			</div>
		</section>

		<!-- Schedule a Tour Section -->
		<section id="schedule-tour" class="py-5 wow animate__fadeIn">
			<div class="container">
				<h2 data-translate="scheduleTour">Programar una Visita</h2>
				<form id="tour-form" action="https://formspree.io/f/xeoqoqbz" method="POST" novalidate autocomplete="on">
					<div class="mb-3">
						<label for="tourParentName" class="form-label" data-translate="parentNameLabel">Nombre del Padre:</label>
						<input type="text" id="tourParentName" name="parentName" class="form-control" required data-translate-placeholder="parentNamePlaceholder" autocomplete="name">
						<div class="invalid-feedback">Por favor, introduzca su nombre.</div>
					</div>
					<div class="mb-3">
						<label for="tourEmail" class="form-label" data-translate="emailLabel">Dirección de Correo Electrónico:</label>
						<input type="email" id="tourEmail" name="email" class="form-control" required data-translate-placeholder="emailPlaceholder" autocomplete="email">
						<div class="invalid-feedback">Por favor, introduzca una dirección de correo electrónico válida.</div>
					</div>
					<div class="mb-3">
						<label for="tourPhone" class="form-label" data-translate="phoneLabel">Número de Teléfono:</label>
						<input type="tel" id="tourPhone" name="phone" class="form-control" data-translate-placeholder="phonePlaceholder" autocomplete="tel">
					</div>
					<div class="mb-3">
						<label for="preferredTourDate" class="form-label" data-translate="preferredTourDateLabel">Fecha Preferida para la Visita:</label>
						<input type="date" id="preferredTourDate" name="preferredTourDate" class="form-control" required data-translate-placeholder="preferredTourDatePlaceholder">
						<div class="invalid-feedback">Por favor, seleccione una fecha preferida para la visita.</div>
					</div>
					<button type="submit" class="btn btn-primary" data-translate="scheduleTourButton">Schedule a Tour</button>
				</form>
			</div>
		</section>

		<!-- Location Section -->
		<section id="location-map" class="section">
			<div class="container">
				<h2 data-translate="ourLocation">Our Location</h2>
				<div id="map" class="map-container" style="height: 400px;"></div>
				<div class="text-center mt-3">
					<a href="https://www.google.com/maps/dir/?api=1&destination=84+Warren+Avenue,+Marlborough,+MA,+United+States" 
					target="_blank" class="btn btn-primary" data-translate="getDirections">Get Directions to Blady's Little World</a>
				</div>
			</div>
		</section>

		<!-- Google Maps Script -->
<script>
  function initMap() {
    const location = { lat: 42.346570, lng: -71.539190 }; // Coordinates for Blady's Little World

    // Create the map
    const map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: location,
      mapId: 'GOOGLE_MAP_ID', // Replace with your actual Map ID
      styles: [
        {
          "elementType": "geometry",
          "stylers": [
            { "color": "#f5f5f5" }
          ]
        },
        {
          "elementType": "labels.icon",
          "stylers": [
            { "visibility": "off" }
          ]
        },
        {
          "elementType": "labels.text.fill",
          "stylers": [
            { "color": "#616161" }
          ]
        },
        {
          "elementType": "labels.text.stroke",
          "stylers": [
            { "color": "#f5f5f5" }
          ]
        },
        {
          "featureType": "administrative.land_parcel",
          "elementType": "labels",
          "stylers": [
            { "visibility": "off" }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
            { "color": "#eeeeee" }
          ]
        },
        {
          "featureType": "road",
          "elementType": "geometry",
          "stylers": [
            { "color": "#ffffff" }
          ]
        },
        {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [
            { "color": "#c9c9c9" }
          ]
        }
      ],
    });

    // Create a marker and set its position
    const marker = new google.maps.Marker({
      position: location,
      map: map,
      title: "Blady's Little World", // Title shown on hover
      icon: {
        url: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png', // Standard red pin icon
        scaledSize: new google.maps.Size(50, 50), // Scaled to your desired size
      }
    });

    // Optional: Add a click event to open the info window
    const infoWindow = new google.maps.InfoWindow({
      content: '<h4>Blady\'s Little World</h4><p>84 Warren Avenue, Marlborough, MA</p>'
    });

    marker.addListener('click', function () {
      infoWindow.open(map, marker);
    });

    // Optional: Add a map click event to open directions
    map.addListener('click', function () {
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
					<h5 data-translate="footerOperatingHoursTitle">Horario de Atención</h5>
					<ul class="list-unstyled">
						<li data-translate="footerOperatingHoursDetail">Lun-Vie: 7:00am - 5:00pm</li>
					</ul>
				</div>
				<!-- Our Programs -->
				<div class="col-md-3">
					<h5 data-translate="footerOurProgramsTitle">Nuestros Programas</h5>
					<ul class="list-unstyled">
						<li><a href="#about-us" data-translate="footerAboutUs">Sobre Nosotros</a></li>
						<li><a href="#gallery" data-translate="footerGallery">Galería</a></li>
						<li><a href="#dietary-needs" data-translate="footerDietaryNeeds">Necesidades Dietéticas</a></li>
						<li><a href="#schedule-tour" data-translate="footerScheduleTour">Programar una Visita</a></li>
					</ul>
				</div>
				<!-- Family Resources -->
				<div class="col-md-3">
					<h5 data-translate="footerFamilyResourcesTitle">Recursos para Familias</h5>
					<ul class="list-unstyled">
						<li><a href="https://www.facebook.com/profile.php?id=100081626233655" target="_blank" rel="noopener">Facebook</a></li>
						<li><a href="https://www.instagram.com/bladyslittleworld/?hl=es" target="_blank" rel="noopener">Instagram</a></li>
						<li><a href="#request-info" data-translate="footerRequestInfo">Solicitar Información</a></li>
					</ul>
				</div>
				<!-- Contact Us -->
				<div class="col-md-3">
					<h5 data-translate="footerContactUsTitle">Contáctanos</h5>
					<ul class="list-unstyled">
						<li><a href="tel:+17746230803" data-translate="footerPhone">+1 (774) 623-0803</a></li>
						<li><a href="mailto:info@bladyslittleworld.com" data-translate="footerEmail">bladyslittleworld@gmail.com</a></li>
						<li><a href="Privacy%20Policy%20for%20Blady.pdf" target="_blank" data-translate="privacyPolicy">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
			<!-- Copyright -->
			<p class="mt-3">&copy; <?php echo date("Y"); ?> Blady's Little World. <span data-translate="footerAllRights">Todos los derechos reservados.</span></p>
			<!-- Social Links in Footer -->
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

</body>

</html>