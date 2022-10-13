<?php

// 1. Create array
$fruits = ['바나나', '사과', '오렌지'];
// $fruits = array('바나나', '사과', '오렌지');

// 2. Print the whole Array
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// 3. Get element by index
// echo $fruits[0] . '<br>';

// 4. Set element by index
// $fruits[0] = '복숭아';

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// 5. Check if array has element at index 2
// echo '<pre>';
// var_dump(isset($fruits[2]));
// echo '</pre>';

// 6. Append element
$fruits[] = '복숭아';

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// 7. Print the length of the Array
// echo count($fruits) . '<br>';

// 8. Add element at the end of the Array
// array_push($fruits, '자두');

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// 9. Remove element from the end of the array
// array_pop($fruits);

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// 10. Add element at the beginning of the array
// array_unshift($fruits, '낑깡');

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// 11. Remove element from the beginning of the array
// array_shift($fruits);

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// 12. Split the string into an array
// $string = "바나나, 사과, 복숭아";
// echo '<pre>';
// var_dump(explode(',', $string));
// echo '</pre>';

// 13. Combine array elements into string
// echo implode("&", $fruits). '<br>';

// print_r($fruits);

// 14. Check if element exist in the array
// echo in_array('사과', $fruits);

// 15. Search element index in the array
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// echo array_search('사과', $fruits);

// 16. Merge two arrays
// $vegetables = ['감자', '상추'];
// echo '<pre>';
// var_dump(array_merge($fruits, $vegetables));
// var_dump([...$fruits, ...$vegetables]);
// echo '</pre>';

// 17. Sorting of array (Reverse order also)
// function cmp($a, $b)
// {
//     if ($a == $b) {
//         return 0;
//     }
//     return ($a <pre $b) ? -1 : 1;
// }
// usort($fruits, 'cmp');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// 18. Filter, map, reduce of array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
// 짝수만 출력
// $evens = array_filter($numbers, fn($n) => $n % 2 === 0);
// echo '<pre>';
// var_dump($evens);
// echo '</pre>';

// $squares = array_map(fn ($n) => $n * $n, $numbers);
// echo '<pre>';
// var_dump($squares);
// echo '</pre>';

// echo array_reduce($numbers, fn($carry, $item) => $carry + $item);

// https://www.php.net/manual/en/ref.array.php

// ===========================================
// Associative arrays
// ===========================================

// 1. Create an associate array
$person = [
  'name' => 'sangho',
  'surname' => 'cho',
  'age' => 30,
  'hobbies' => ['테니스', '골프']
];

// 2. Get element by key
// echo $person['name'] . '<br>';
// echo $person['age'] . '<br>';

// 3. Set element by key
// $person['channel'] = 'choTube';

// echo '<pre>';
// var_dump($person);
// echo '</pre>';

// 4. Check if array has specific key
// var_dump(isset($person['age']));
// var_dump(isset($person['address']));

// 5. Print the keys of the array
// echo '<pre>';
// var_dump(array_keys($person));
// echo '</pre>';

// 6. Print the values of the array
// echo '<pre>';
// var_dump(array_values($person));
// echo '</pre>';

// 7. Sorting associative arrays by values, by keys

// 키를 기준으로 오름차순 정렬 ksort()
// 키를 기준으로 내림차순 정렬 krsort()
// arsort : 배열을 값으로 내림차순 정렬하고 인덱스의 상관관계를 유지
// asort : 배열을 값으로 오름차순 정렬하고 인덱스의 상관관계를 유지
// asort($person);
// echo '<pre>';
// var_dump($person);
// echo '</pre>';

// 8. Two dimensional arrays
$todoItems = [
  [
    "title" => "item 1",
    "completed" => true
  ],
  [
    "title" => "item 2",
    "completed" => false
  ],
  [
    "title" => "item 3",
    "completed" => true
  ],
];

echo '<pre>';
var_dump($todoItems);
echo '</pre>';
