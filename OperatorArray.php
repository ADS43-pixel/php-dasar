<?php

$first = [
    "first_name" => "Anggia"
];

$last = [
    "first_name" => "Anggia",
    "last_name" => "Dea"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Anggia",
    "last_name" => "Dea"
];

$b = [
    "last_name" => "Dea",
    "first_name" => "Anggia"
];

var_dump($a == $b);
var_dump($a === $b);