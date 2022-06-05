<?php
/* ------------ Functions ----------- */
/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
  - Functions have their own local scope as opposed to global scope
*/

// Creating function
function registerUser() {
    echo 'User has been registered!';
}
// Running a function
//registerUser();


$y = 12; // global variable $y
function foo() {
    global $y; // you need to register global variables inside function
    echo $y;
}
//foo();


function foo2() {
    $x = 10; // local scoped variable $x
}
//foo2();
// echo $x; // undefined variable $x


// Adding params
function registerUser2($username) { // argument $username
    echo "User ${username} has been registered!";
}
// Pass in an argument
// registerUser2('Azamat'); // parameter Azamat


// Returning values
function sum($n1, $n2) {
    return $n1 + $n2;
}
$result = sum(5, 5);
echo $result;


// Adding default values
function subtract($num1 = 10, $num2 = 5) {
    return $num1 - $num2;
}
echo subtract();


// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function($num1, $num2) {
    return $num1 + $num2;
};
echo $add(5, 5);

// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;
echo $multiply(5, 5);
