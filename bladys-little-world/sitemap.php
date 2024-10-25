<?php
header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>https://bladyslittleworld.com/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <priority>1.00</priority>
  </url>
  <!-- Add more URLs dynamically if needed -->
</urlset>