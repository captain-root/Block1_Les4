<?php 
    $response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=1488754&appid=de649efb6c4dc96d792106d010e18149');
    //id=1488754 - Tyumen
    $weather =  json_decode($response, true);
echo 'City Name: ' . $weather['name'] . "<br>".
    'Weather: ' . $weather['weather'][0]['main'] . "<br>" .
    'Description: ' . $weather['weather'][0]['description'].  "<br>" .
    'Temperature: ' . (($weather['main']['temp'])-273) .  " by Celsius <br>" .
    'Visibility: ' . (($weather['visibility'])*0.3048).  " meters <br>" .
    'Pressure: ' . (($weather['main']['pressure'])*0.75) . " mm of mercury <br>";
    //'Snow: ' . $weather['weather'][0]['snow'];
?>
