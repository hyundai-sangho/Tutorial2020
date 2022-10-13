<?php

// while
// while(true){
//   // Do somethings
// }

// Loop with $counter
// $counter = 0;
// $loop = true;
// while ($loop) {
//   echo "Counter $counter" . "<br>";
//   if ($counter >= 10) {
//     $loop = false;
//   }
//   $counter++;
// }

// do - while
// $counter = 1;
// do {
//   echo "Counter $counter"."<br>";
//   $counter++;
// } while ($counter < 10);

// for
// for ($i = 1; $i < 10; $i++) {
//   echo "Counter: $i" . "<br>";
// }

// foreach
// $fruits = ['바나나', '사과', '오렌지'];
// foreach ($fruits as $i => $fruit) {
//   echo $i . ' ' . $fruit . '<br>';
// }

// Iterate Over associative array
$person = [
  'name' => 'sangho',
  'surname' => 'cho',
  'age' => 30,
  'hobbies' => ['테니스', '골프']
];
foreach ($person as $key => $value) {
  if ($key === 'hobbies') {
    break;
  }
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}
