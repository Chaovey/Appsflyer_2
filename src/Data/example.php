<?php
// filename: appsflyer_integration.php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

class AppsFlyerIntegration {
    const APPSFLYER_API_URL = 'https://hq.appsflyer.com/export/';
    private $appId;
    private $apiToken;
    private $client;

    public function __construct($appId, $apiToken) {
        $this->appId = $appId;
        $this->apiToken = $apiToken;
        $this->client = new Client();
    }

    public function fetchData($from, $to) {
        try {
            $response = $this->client->get(self::APPSFLYER_API_URL . $this->appId . '/daily', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiToken
                ],
                'query' => [
                    'from' => $from,
                    'to' => $to
                ]
            ]);
            return json_decode($response->getBody(), true);
        } catch (Exception $e) {
            return "An error occurred: " . $e->getMessage();
        }
    }
}

$appId = 'YOUR_APP_ID'; // replace with your actual App ID
$apiToken = 'YOUR_API_TOKEN'; // replace with your actual API token
$fromDate = 'yyyy-mm-dd'; // replace with your start date
$toDate = 'yyyy-mm-dd'; // replace with your end date

$af = new AppsFlyerIntegration($appId, $apiToken);
$data = $af->fetchData($fromDate, $toDate);
print_r($data);


?>
