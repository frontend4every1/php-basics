<?php
/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String    - A string is a series of characters surrounded by quotes
- Integer   - Whole numbers
- Float     - Decimal numbers
- Boolean   - true or false
- Array     - An array is a special variable, which can hold more than one value
- Object    - A class
- NULL      - Empty variable
- Resource  - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

// String // Can be single or double quotes
$name = 'Azamat';
var_dump($name);
echo '<br>';

// Int
$age = 26;
var_dump($age);
echo '<br>';

// Boolean
$has_kids = true; // shows 1
$has_kids = false; // doesn't show anything
var_dump($has_kids);
echo '<br>';

// Floats
$cash_on_hand = 19.09;
var_dump($cash_on_hand);
echo '<br>';

/* --- Adding variables to strings -- */
// Concatenate Strings
echo '$name is $age years old';
echo '<br>';
echo $name . ' is ' . $age . ' years old';
echo '<br>';
// Double quotes can be used to add variables to strings
echo "$name is $age years old";
// Better to do this
echo "${name} is ${age} years old";
echo '<br>';

// Arithmetic Operators
$x = '5' + '5';
$x = '5' + 5;
var_dump($x);
echo '<br>';
echo 19 - 9;
echo '<br>';
echo 5 * 10;
echo '<br>';
echo 10 / 2;
echo '<br>';
echo 10 % 3;
echo '<br>';

// Constants - Cannot be changed
define('HOST', 'localhost');
define('USER', 'root');

echo HOST;