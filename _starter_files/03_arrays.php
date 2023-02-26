<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers)
// echo $fruits[0];

// Associative array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

// echo $colors[4];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

// echo $hex['green'];

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com'
];

// echo $person['first_name'];

$people = [
  [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com'
  ],
  [
    'first_name' => 'Tad',
    'last_name' => 'Universy',
    'email' => 'Tad@gmail.com'
  ],
  [
    'first_name' => 'Chad',
    'last_name' => 'Bluturkey',
    'email' => 'Chad@gmail.com'
    ]
];

// echo $people[1]['email'];
var_dump(json_encode($people));
