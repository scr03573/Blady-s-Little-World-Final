/* ==========================================
   WOW.js Initialization for Scroll Animations
   ==========================================
   
   This script handles animations triggered when elements come into the viewport.
   It uses the WOW.js library in conjunction with Animate.css to animate HTML elements.
*/

document.addEventListener('DOMContentLoaded', function() {
    // Check if WOW.js is loaded and available
    if (typeof WOW !== 'undefined') {
        // Initialize WOW.js with custom settings
        new WOW({
            boxClass: 'wow',            // Class applied to elements to trigger animations
            animateClass: 'animate__animated', // Default animate.css class applied for animations
            offset: 0,                  // Distance in pixels from the bottom of the viewport that triggers animation
            mobile: true,               // Enable animations on mobile devices
            live: true                  // Continuously check for new elements (useful for dynamically added content)
        }).init();

        console.log('WOW.js successfully initialized with custom settings.');
    } else {
        // Log an error if WOW.js isn't available
        console.error('Error: WOW.js not loaded. Please ensure it is included in your project.');
    }

    // Optional: Logging for debugging if needed
    console.log('Page fully loaded and ready.');
    
    // You can add more custom behavior here if required
});