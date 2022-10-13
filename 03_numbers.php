<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
// echo $a + $b . '<br>';
// echo $a - $b . '<br>';
// echo $a * $b . '<br>';
// echo $a / $b . '<br>';
// echo $a % $b . '<br>';

// Assignment with math operations
// $a += $b; echo $a.'<br>'; // $a = 9
// $a -= $b; echo $a.'<br>'; // $a = 1
// $a *= $b; echo $a.'<br>'; // $a = 20
// $a /= $b; echo $a.'<br>'; // $a = 1.25
// $a %= $b; echo $a .'<br>'; // $a = 1

// Increment operator
// echo $a++; // $a = 5
// echo ++$a; // $a = 6

// Decrement operator
// var_dump(is_float(4.1));
// var_dump(is_integer(3));
// var_dump(is_numeric(3));

// Number checking functions
// $strNumber = '12.34';
// $number = (int)$strNumber;
// var_dump($number);

// Conversion
// echo "abs(-15) " . abs(-15) . "<br>";
// echo "pow(2, 3) " . pow(2, 3) . "<br>";
// echo "sqrt(16) " . sqrt(16) . "<br>";
// echo "max(2, 3) " . max(2, 3) . "<br>";
// echo "min(2, 3) " . min(2, 3) . "<br>";
// echo "round(2.4) " . round(2.4) . "<br>";
// echo "round(2.6) " . round(2.6) . "<br>";
// echo "floor(2.6) " . floor(2.6) . "<br>";
// echo "ceil(2.4) " . ceil(2.4) . "<br>";

// Number functions
$number = 123456789.12345;
echo number_format($number, 2, '.', ',').'<br>';

// https://www.php.net/manual/en/ref.math.php
