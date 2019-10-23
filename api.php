<?php
// LLave de la API ver https://developer.accuweather.com/user/me/apps
$apiKey = "14e4bd2eb6c78d28ec031536b968b0f9";
// ID de la ciudad
$cityId = "3667991";
// Llamada a la API
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=es&units=metric&APPID=" . $apiKey;

//Obtener .json
//http://api.openweathermap.org/data/2.5/weather?id=3667983&lang=es&units=metric&APPID=14e4bd2eb6c78d28ec031536b968b0f9

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>
