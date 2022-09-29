<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Galih", "rizki"];
var_dump($names);

$names[1] = "Rizkiansyah";
var_dump($names);

var_dump(count($values));

// array di php sangat sangat fleksible

$galih = array(
    "id" => "galih",
    "name" => "galih rizki",
    "age" => 22,
    "address" => array(
        "city" => "Tangerang",
        "country" => "Indonesia"
    ),
    "blood" => "AB resus Negatif",
    "certificate" => array(
        "vaksin" => "sudah",
        "ktp" => "sudah",
        "sim" => array(
            "perpanjang" => "2023"
        )
    )
);

var_dump($galih["blood"]);
var_dump($galih["address"]["city"]);
var_dump($galih["certificate"]["sim"]["perpanjang"]);
// nester array, yaitu array dalam array