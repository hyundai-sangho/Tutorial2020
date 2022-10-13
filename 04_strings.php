<?php

// Create simple string
// $name = 'chosangho';
// $hello = 'hello ' . $name;
// $hello2 = "hello $name";
// echo $hello . '<br>';
// echo $hello2 . '<br>';

// String concatenation
// echo "Hello " . "World" . ' and PHP' . '<br>';

// String functions
$string = "   Hello World   ";

// echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
// echo "2 - " . trim($string) . '<br>' . PHP_EOL;
// echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
// echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
// echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
// echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
// echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
// echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
// echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
// echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
// echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
// echo "12 - " . strpos($string, 'World') . '<br>' . PHP_EOL;
// echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
// echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
// echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
// echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;

// $number1 = 100; //    00000100
// $number2 = 123456; // 00123456
// echo str_pad($number1, 8, '0', STR_PAD_LEFT) . '<br>';
// echo str_pad($number2, 8, '0', STR_PAD_LEFT) . '<br>';
// echo str_repeat("World", 3) . '<br>';

// Multiline text and line breaks
// $longText = "
// Hello, my name is chosangho
// I am 27,
// I love my daughter
// ";

// echo $longText . '<br>';
// echo nl2br($longText).'<br>';

// Multiline text and reserve html tags
$longText = "
Hello, my name is <b>chosangho</b>
I am <b>27</b>,
I love my daughter
";

echo "1 - " . $longText .'<br>';
echo "2 - " . nl2br($longText) .'<br>';
echo "3 - " . htmlentities($longText) .'<br>';
echo "4 - " . nl2br(htmlentities($longText)) .'<br>';
echo "5 - " . html_entity_decode(htmlentities($longText)) .'<br>';
echo "6 - " . htmlspecialchars($longText) .'<br>';

// http://www.php.net/manual/en/ref.strings.php
