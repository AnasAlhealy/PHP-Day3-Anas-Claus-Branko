<?php
// using two different ways for foreach loop the second one just uncomment (echo "$value . <br>";) done forget to comment the line 21 before executing this .
$bmw = ["500", "3 Series", "Z4", "X7", "I4", "700P", "550x", "250Q", "750M", "300.sport"];
$cars = array(
    "bmw" => "500",
    "bmw2019" => "3 Series",
    "bmw 2020" => "Z4",
    "bmw2022"   => "X7",
    "bmw-pro2020" => "I4",
    "bmw2018" => "700P",
    "bmw2015" => "550x",
    "bmw 2012" => "250Q",
    "bmw2011"   => "750M",
    "bmw-pro2010" => "300.sport",
);
foreach ($cars as $key => $value) {
    // echo "$value . <br>";
}

foreach ($bmw as $value) {
    echo "Model: $value <br>";
};
