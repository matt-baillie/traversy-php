<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
$numbers = [1, 2, 44, 55, 22];

$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);

// var_dump($numbers);
// echo $fruits[1];


// Associative Arrays
// similar to JS Object & python dictionary but uses the fat arrow instead of colon (:)
$colors = [
  1 => 'red',
  4 => "blue",
  6 => 'green'
];
// echo $colors[4];

$hex = [
  "red" => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'

];

// echo $hex['blue'];

// Tabular data
$person = [
  'first_name' => 'Matt',
  'last_name' => "Baillie",
  'email' => "mbaillie@gmail.com"
];
// echo $person['first_name'];

// Multi-dimensional array
// to access nested values, use the same way as JS arrays or Objects with square bracket notation
$people = [
  [
    'first_name' => 'Matt',
    'last_name' => "Baillie",
    'email' => "mbaillie@gmail.com"
  ],
  [
    'first_name' => 'Nat',
    'last_name' => "Shackleton",
    'email' => "nshack@gmail.com"
  ],
  [
    'first_name' => 'asdfsd',
    'last_name' => "asdfsd",
    'email' => "sdfck@gmail.com"
  ]
];
// print_r($people[1]['email']);

// Change to JSON using
var_dump(json_encode($people));
// json_decode() decodes json
