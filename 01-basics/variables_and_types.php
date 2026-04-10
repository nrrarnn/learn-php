<?php

// JANGAN LUPA TITIK KOMA!!!

// 1. Variable dan tipe data
$first_name = "Arin";            // string
$last_name = "Kannazuki";
$experience_years =  1;          // integer
$is_fullstack = true ;            // boolean

// menampilkan detail informasi tipe data dan nilainya
var_dump($first_name);
echo "<br><br>";

// array in php
// indexed array
$tech_stack = ["React", "NextJs", "Laravel", "HonoJS"]; 
echo $tech_stack[0];
echo "<br><br>";

// assosiative array
$myprofile = [
    "name" => "Nur arini",
    "age"  => 20,
    "role" => "Fullstack Developer",
    "is_active" => true
];
echo $myprofile["name"];

?>