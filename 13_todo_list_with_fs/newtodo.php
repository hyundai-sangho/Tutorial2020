<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$todoName = $_POST['todo_name'] ?? '';
$todoName = trim($todoName);

if ($todoName) {
  if (file_exists('todo.json')) {
    $json = file_get_contents('todo.json');
    // json_decode() true는 array, false는 객체 클래스
    $jsonArray = json_decode($json, true);
  } else {
    $jsonArray = [];
  }

  $jsonArray[$todoName] = ['completed' => false];

  // echo '<pre>';
  // var_dump($jsonArray);
  // echo '</pre>';

  // json_encode flags 두개 한번에 사용하는 방법 => JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
  // json_encode 한글 문제 해결 방법 json_encode($arrJson, JSON_UNESCAPED_UNICODE);
  file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

header('Location: index.php');
