<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

// Define constants for your API credentials
define('APPSFLYER_API_URL', 'https://hq.appsflyer.com/export/');
define('APP_ID', 'YOUR_APP_ID');  // Replace with your actual App ID
define('API_TOKEN', 'YOUR_API_TOKEN'); // Replace with your actual API token

// Initialize the HTTP client
$client = new Client();

// Make a request to the AppsFlyer API
try {
    $response = $client->get(APPSFLYER_API_URL . APP_ID . '/daily', [
        'headers' => [
            'Authorization' => 'Bearer ' . API_TOKEN
        ],
        'query' => [
            // Add your query parameters here
            'from' => 'yyyy-mm-dd',
            'to' => 'yyyy-mm-dd'
        ]
    ]);

    // Parse the response
    $data = $response->getBody();
    echo $data;

} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}

?>
