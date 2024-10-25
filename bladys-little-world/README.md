# Blady's Little World

## Overview
Blady's Little World is a warm and caring website designed for an early childhood education center, offering bilingual learning for young children. The website showcases information about the center, its programs, staff, and provides forms for parents to submit dietary needs, request information, and schedule tours.

## Features
- **Responsive Design**: The site is mobile-friendly, ensuring an optimal viewing experience across devices.
- **SEO Optimized**: Includes metadata, Open Graph tags, and a sitemap for search engine visibility.
- **Interactive Forms**: Users can submit their child's dietary needs, request information, and schedule tours using integrated forms via Formspree.
- **Image Gallery**: A carousel displays images of the daycare facilities to give parents a visual experience of the center.
- **Bilingual Support**: The site supports language toggling between English and Spanish.
- **Secure HTTPS Connection**: The site uses a CA-issued SSL certificate for secure data transmission.
- **User Tracking**: Google Analytics is implemented to monitor site traffic and user engagement.
- **Location Mapping**: Integrated Google Maps API provides directions and location details of the daycare center.
- **Custom Logging**: Captures user IP addresses for better understanding and analysis of website traffic through logs.
- **Error Handling**: Implemented to gracefully manage any issues that arise during form submissions or page loading.
- **GeoIP Tracking**: Detects user locations via GeoIP for enhanced user logging and analytics.

## Additional Features
- **IP Address Lookup**: A script is included to gather WHOIS information for any IP addresses interacting with the website.
- **GeoIP Integration**: The website integrates GeoIP functionality, leveraging the MaxMind GeoLite2 database to analyze user locations.
- **Image Optimization**: Another script automatically optimizes images uploaded to the website to ensure faster load times and better performance.

## Technology Stack
- HTML5
- CSS3
- PHP
- JavaScript (ES6)
- Formspree (for handling form submissions)
- Bootstrap 5 (for responsive layout and UI components)
- Font Awesome (for icons)
- Google Analytics (for tracking website visitors)
- Google Maps API (for displaying the location of the daycare center)
- Apache HTTP Server (for serving the website with SSL for secure connections)
- GeoIP2 (for IP address location tracking using MaxMind's GeoLite2 database)

## Setup Instructions
### Prerequisites
- A web server with PHP support (Apache, Nginx, etc.).
- Formspree for handling form submissions.
- Google Cloud for domain setup and deployment.
- SSL certificate (Let's Encrypt or CA-issued) for secure HTTPS connections.
- GeoIP2 database from MaxMind (GeoLite2) placed in the `geoip` folder for IP location tracking.
- Environment variables for sensitive information (such as API keys) in an `.env` file.

### Local Development
1. Clone the repository from GitHub.
2. Install the required dependencies using Composer.
3. Ensure the GeoLite2 database is placed in the correct folder for GeoIP tracking.
4. Set up the `.env` file with the necessary environment variables, including API keys and database credentials.
5. Serve the application locally using a PHP server or Apache.

## Logging and Monitoring
- **User Logs**: The site logs IP addresses and user interactions in a log file for traffic analysis.
- **Access Logs**: Detailed access logs are maintained for security and monitoring.
