<?php

// What is a variable

// Variable types
/*
String
Integer
Float
Boolean
Null
Array
Object
Resource
*/

// Declare variables
$name = 'cho';
$age = 29;
$isMale = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
// echo $name . '<br>';
// echo $age . '<br>';
// echo $isMale . '<br>';
// echo $height . '<br>';
// echo $salary . '<br>';

// Print types of the variables
// echo gettype($name)."<br>";
// echo gettype($age)."<br>";
// echo gettype($isMale)."<br>";
// echo gettype($height)."<br>";
// echo gettype($salary)."<br>";

// Print the whole variable
// var_dump($name, $age);
// var_dump($salary);

// Change the value of the variable
// $name = 28;

// Print type of the variable
// echo gettype($name);
// $name = true;
// echo gettype($name);

// Variable checking functions
// var_dump(is_string($name));
// var_dump(is_int($name));

// Check if variables is defined
// var_dump(isset($address));
// var_dump(isset($name));
// var_dump(isset($age));
// var_dump(isset($salary));
// echo $address;

// Constants
// define('PI', 3.14);
// echo PI . PHP_EOL;

// var_dump(defined('PI'));
// var_dump(defined('PI2'));

// Using PHP built-in constants
echo PHP_INT_MAX;
