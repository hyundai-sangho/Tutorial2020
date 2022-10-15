<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$connection = require_once './Connection.php';

if ($_POST['id'] !== '' && $_POST['title'] !== '' && $_POST['description'] !== '') {
  $id = $_POST['id'] ?? '';
  echo '성공';
  $connection->updateNote($id, $_POST);
} elseif ($_POST['title'] !== '' && $_POST['description'] !== '') {
  echo '성공';
  $connection->addNote($_POST);
} else {
  echo '실패';
}

header('Location: index.php');
