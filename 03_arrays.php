<?php
/* ----------- Arrrays ----------- */
/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [99, 98, 97, 96, 95];

// Simple array of strings
$fruits = array('apple', 'orange', 'pear');

// We can use print_r() or var_dump() to see the contents of an array
print_r($numbers);
var_dump($fruits);

// Outputting values from an array
echo $fruits[0];
echo '<br>';
echo $numbers[3] + $numbers[4];


/* ------ Associative Arrays ----- */
/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
    1 => 'red',
    2 => 'green',
    3 => 'blue',
];
echo $colors[2];


$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];
echo $hex['blue'];


$person = [
    'firstName' => 'Azamat',
    'lastName' => 'Khabibullaev',
    'email' => 'frontend4every1@gmail.com'
];
echo $person['firstName'];


$people = [
    [
        'firstName' => 'Azamat',
        'lastName' => 'Khabibullaev',
        'email' => 'frontend4every1@gmail.com'
    ],
    [
        'firstName' => 'John',
        'lastName' => 'Doe',
        'email' => 'john@gmail.com'
    ],
    [
        'firstName' => 'Jane',
        'lastName' => 'Doe',
        'email' => 'jane@gmail.com'
    ]
];
echo $people[1]['email'];
var_dump(json_encode($people));
