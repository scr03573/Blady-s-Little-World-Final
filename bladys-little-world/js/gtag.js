// gtag.js
(function() {
    // Load the Google Analytics tag
    const gtag = document.createElement('script');
    gtag.src = "https://www.googletagmanager.com/gtag/js?id=G-E53BXH2GT2";
    gtag.async = true;
    document.head.appendChild(gtag);

    // Initialize the data layer
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    // Configure GA4 with Measurement ID
    gtag('config', 'G-E53BXH2GT2', {
        'linker': {
            'domains': ['bladyslittleworld.com']
        }
    });

    // Function to handle content updates
    function updateAnalyticsContent(url) {
        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Handle your content updates here
                console.log('Analytics content updated:', data);
                // Optionally send a custom event to GA4
                gtag('event', 'content_update', {
                    'event_category': 'Content',
                    'event_label': 'Updated Content',
                    'value': data.value // Modify according to your data structure
                });
            })
            .catch(error => console.error('Error updating analytics content:', error));
    }

    // Example usage of the update function
    // updateAnalyticsContent('https://example.com/api/content'); // Uncomment and modify for real use
})();