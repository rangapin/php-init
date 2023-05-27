<?php

$cities = ["London", "Paris", "Brisbane", "Dublin"];

$cityPosition = array_rand($cities);

$city = $cities[$cityPosition];

echo $city;