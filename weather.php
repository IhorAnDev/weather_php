<?php
$weather = '';

if (isset($_GET["city"])) {

    $urlContent =  file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=' . $_GET["city"] . 
    '&units=metric&appid=6a1d4b752c16ad51dc5d01b4656b9682');

    $forcastArray = json_decode($urlContent, true);

    $weather = $forcastArray["weather"][0]["description"];

    $weather = $weather." The temperature ".$forcastArray["main"]["temp"].' C';
}
?>