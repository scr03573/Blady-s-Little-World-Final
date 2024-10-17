// gtag.js
(function() {
    // Load the Google Analytics tag
    const gtag = document.createElement('script');
    gtag.src = "https://www.googletagmanager.com/gtag/js?id=G-E53BXH2GT2";
    gtag.async = true;
    document.head.appendChild(gtag);

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

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
            })
            .catch(error => console.error('Error updating analytics content:', error));
    }
})();