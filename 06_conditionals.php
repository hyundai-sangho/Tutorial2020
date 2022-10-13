<?php

$age = 28;
$salary = 600000;

// if condition
// if ($age > 25) {
//   echo "You are not young" . "<br>";
// }

// if ($age < 25) {
//   echo "You are young" . "<br>";
// }

// if condition - else
// if ($age > 25) {
//   echo "You are not young" . "<br>";
// } else {
//   echo "You are young" . "<br>";
// }

// if condition 1 AND condition 2
// if ($age < 22 && $salary > 500000) {
//   echo 'You are young and Very rich' . '<br>';
// }

// if condition 1 OR condition 2
// if ($age < 22 || $salary > 500000) {
//   echo 'You are young or you are rich' . '<br>';
// }

// if condition - elseif condition 2 - else
// if ($age < 22) {
//   echo 'Young' . '<br>';
// } elseif ($age < 30) {
//   echo 'You are not young but not old' . '<br>';
// } elseif ($age < 60) {
//   echo 'You are old but not too old' . '<br>';
// } else {
//   echo 'You are too old' . '<br>';
// }

// if condition 1 and condition 2 - elseif condition 1 and condition 2 - else
// if ($age < 22 && $salary >= 500000) {
//   echo 'You are young man AND rich!!<br>';
// } elseif ($age < 22 && $salary >= 500000) {
//   echo 'You are young, and not so rich<br>';
// } elseif ($age > 60 && $salary >= 500000) {
//   echo 'You are old, but rich<br>';
// } elseif ($age > 60 && $salary >= 500000) {
//   echo 'You are old and NOT rich also<br>';
// }

// Ternary if 삼항연산
// echo $age < 22 ? 'Young' : ($age < 30 ? 'Not young but not old' : 'old');

// Null coalescing operator
// $myAge = $age ? $age : 18;
// echo $myAge;

// 7.1
// $myAge = $age ?: 18;
// echo $myAge;

// $myAddress = isset($address) ? $address : 'Current location';
// $myAddress = $address ? $address : 'Current location';
// $myAddress = $address ?? 'Current location';
// echo $myAddress;

// Null coalescing assignment operator. Since PHP 7.4
$person = [
  'name' => 'Cho'
];

// if (!isset($person['name'])) {
//   $person['name'] = 'Anonymous';
// }

$person['name'] ??= 'Anonymous';
echo $person['name'] . '<br>';

// switch
$userRole = 'admin';
$userRole = 'editor';
$userRole = '';

switch ($userRole) {
  case 'admin':
    echo 'You are admin';
    break;
  case 'editor':
    echo 'You can edit articles';
    break;
  default:
    echo 'Unknown role';
}
