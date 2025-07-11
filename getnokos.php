<?php
$apiKey = "CtpY04TP5X6nohWwX7oRdJH8W";
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://qpanel.org/api/numbers?api_key=" . $apiKey,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => ["Accept: application/json"]
]);
$response = curl_exec($curl);
curl_close($curl);
header("Content-Type: application/json");
echo $response;
?>