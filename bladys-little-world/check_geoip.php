<?php
// Include the necessary GeoIP2 library
require 'vendor/autoload.php';

use GeoIp2\Database\Reader;

try {
    // Debug: Indicate the script has started
    echo "<pre>Script started...</pre>";

    // Path to the GeoLite2-City.mmdb database
    $dbPath = __DIR__ . '/geoip/GeoLite2-City_20241018/GeoLite2-City.mmdb';
    echo "<pre>GeoLite2 database path: $dbPath</pre>";

    if (!file_exists($dbPath)) {
        throw new Exception("GeoLite2 database file not found at: $dbPath");
    }

    $reader = new Reader($dbPath);

    // Path to your log file where IPs and timestamps are stored
    $logFile = __DIR__ . '/user_logs.txt';
    echo "<pre>Log file path: $logFile</pre>";

    // Capture the user's IP address
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $time = date('Y-m-d H:i:s');
    $logEntry = "[$time] IP: $ipAddress\n";

    // Append the log entry to the log file
    file_put_contents($logFile, $logEntry, FILE_APPEND);

    // Output the log entry for debugging
    echo "<pre>Log Entry Created: $logEntry</pre>";

    // Check if the log file exists
    if (!file_exists($logFile)) {
        throw new Exception('Log file not found.');
    }

    // Read the log file line by line
    $lines = file($logFile);
    echo "<pre>Log file read, total lines: " . count($lines) . "</pre>";

    // Begin HTML table output
    echo '<table border="1" cellpadding="10" cellspacing="0">';
    echo '<tr><th>Time</th><th>IP Address</th><th>Country</th><th>Region</th><th>City</th><th>Postal Code</th><th>Latitude</th><th>Longitude</th></tr>';

    foreach ($lines as $line) {
        // Output each log line to verify it's being read properly
        echo "<pre>Processing line: $line</pre>"; 

        // Extract the Time and IP address (assuming '[2024-10-24 19:45:00] IP: ...' format)
        preg_match('/\[(.*?)\] IP: (.*?)(?:\s|$)/', $line, $matches);
        $time = $matches[1] ?? null;
        $ipAddress = $matches[2] ?? null;

        // Debug: Show extracted time and IP address
        echo "<pre>Extracted - Time: $time, IP Address: $ipAddress</pre>";

        if ($ipAddress) {
            try {
                // Lookup the IP address in the GeoLite2 database
                $record = $reader->city($ipAddress);

                // Output the geo-location information and time for each IP in a table row
                echo "<tr>";
                echo "<td>" . htmlspecialchars($time) . "</td>";
                echo "<td>" . htmlspecialchars($ipAddress) . "</td>";
                echo "<td>" . htmlspecialchars($record->country->name) . "</td>";
                echo "<td>" . htmlspecialchars($record->mostSpecificSubdivision->name) . "</td>";
                echo "<td>" . htmlspecialchars($record->city->name) . "</td>";
                echo "<td>" . htmlspecialchars($record->postal->code) . "</td>";
                echo "<td>" . htmlspecialchars($record->location->latitude) . "</td>";
                echo "<td>" . htmlspecialchars($record->location->longitude) . "</td>";
                echo "</tr>";

            } catch (Exception $geoipEx) {
                // Debug: If there's an error with the GeoIP lookup, show it
                echo "<pre>GeoIP Error: " . $geoipEx->getMessage() . "</pre>";
            }
        } else {
            // Debug: If the IP address extraction failed, show it
            echo "<pre>No IP Address found in this line.</pre>";
        }
    }

    // End table
    echo '</table>';

} catch (Exception $e) {
    // General error handling
    echo "<pre>Error: " . $e->getMessage() . "</pre>";
}
?>