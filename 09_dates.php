<?php

// 출처: https://it77.tistory.com/281
// php.ini 기본 설정에 timezone이 'Asia/Seoul'이 아닐 때
// date_default_timezone_set('Asia/Seoul') 사용해서 시간 설정 변경
date_default_timezone_set('Asia/Seoul');

// Print current timestamp
// echo time() . '<br/>';

// Print current date
// echo date('Y-m-d H:i:s') . '<br/>';

// Print yesterday
// echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br/>';

// Different format: https://www.php.net/manual/en/function.date.php
// echo date('F j Y, H:i:s') . '<br/>';

// String to timestamp
// echo strtotime('+1 week') . '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
// $dateString = '2020-02-06 12:45:35';
// $parseDate = date_parse($dateString);
// echo '<pre>';
// var_dump($parseDate);
// echo '</pre>';

// Parse date from format
// https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35';

$parseDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parseDate);
echo '</pre>';
