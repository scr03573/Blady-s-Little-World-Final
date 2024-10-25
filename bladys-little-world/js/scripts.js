async function init() {
    await customElements.whenDefined('gmp-map');
  
    const map = document.querySelector('gmp-map');
    const marker = document.querySelector('gmp-advanced-marker');
    const placePicker = document.querySelector('gmpx-place-picker');
    const infowindow = new google.maps.InfoWindow();
  
    // Set map options (removed styles)
    map.innerMap.setOptions({
        mapTypeControl: false,
        styles: [
            // Your existing map styles can be inserted here
        ]
    });
  
    // Listen for place changes
    placePicker.addEventListener('gmpx-placechange', () => {
        const place = placePicker.value;
  
        if (!place.location) {
            window.alert(
                "No details available for input: '" + place.name + "'"
            );
            infowindow.close();
            marker.position = null;
            return;
        }
  
        // Adjust map view based on the place selected
        if (place.viewport) {
            map.innerMap.fitBounds(place.viewport);
        } else {
            map.center = place.location;
            map.zoom = 17;
        }
  
        // Create a content element for the marker
        const content = document.createElement('div');
        content.style.textAlign = 'center';
        content.innerHTML = `
            <h3>Blady's Little World</h3>
            <p>Visit us for a nurturing experience!</p>
            <img src="assets/optimized/Blady_s Little World Logo.png" alt="Marker Image" style="width: 100px; height: auto;">
        `;
  
        // Set marker position and content
        marker.position = place.location;
        marker.content = content;  // Assign content correctly
        infowindow.setContent(content);
        infowindow.open(map.innerMap, marker);
    });
}

document.addEventListener('DOMContentLoaded', init);

/* ==========================================
   Document Ready Function
========================================== */
document.addEventListener('DOMContentLoaded', () => {
    /* ==========================================
       Back to Top Button
    ========================================== */
    const backToTopButton = document.getElementById('back-to-top');

    // Show or Hide Back to Top Button based on scroll position
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopButton.classList.add('show');
        } else {
            backToTopButton.classList.remove('show');
        }

        /* ==========================================
           Navbar Scroll Behavior
        ========================================== */
        const navbar = document.querySelector('.navbar');
        const mainContent = document.querySelector('main');

        if (navbar) {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
                if (mainContent) {
                    mainContent.classList.add('navbar-scrolled');
                }
            } else {
                navbar.classList.remove('scrolled');
                if (mainContent) {
                    mainContent.classList.remove('navbar-scrolled');
                }
            }
        }
    });

    // Smooth Scroll to Top
    if (backToTopButton) {
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /* ==========================================
       Smooth Scrolling for Anchor Links
    ========================================== */
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            // Exclude carousel controls and other non-scroll links
            if (this.getAttribute('href') !== '#' && !this.classList.contains('carousel-control-prev') && !this.classList.contains('carousel-control-next')) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    window.scrollTo({
                        top: target.offsetTop - navbarHeight,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    /* ==========================================
       Get Directions Button
    ========================================== */
    const getDirectionsBtn = document.getElementById('get-directions');
    if (getDirectionsBtn) {
        getDirectionsBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const destination = encodeURIComponent("84 Warren Ave, Marlborough, MA 01752");
            window.open(`https://www.google.com/maps/dir/?api=1&destination=${destination}`, '_blank');
        });
    }

    /* ==========================================
       Initialize WOW.js
    ========================================== */
    if (typeof WOW !== 'undefined') {
        new WOW().init();
    } else {
        console.error('WOW.js is not loaded');
    }

    /* ==========================================
       Carousel Mobile Adjustments
    ========================================== */
    const carouselElement = document.querySelector('#carouselExampleControls');

    if (window.innerWidth <= 768 && carouselElement) {
        const carouselItems = carouselElement.querySelectorAll('.carousel-item');

        // Remove all active classes and only keep one active
        carouselItems.forEach((item, index) => {
            if (index === 0) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });

        // Adjust the interval to a faster speed for mobile
        $('#carouselExampleControls').carousel({
            interval: 2000 // Set interval to 2 seconds for faster rotations on mobile
        });
    }

});