<?php

$todos = [];
$index = 0;

if (file_exists('todo.json')) {
  $json = file_get_contents('todo.json');
  $todos = json_decode($json, true);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="newtodo.php" method="post">
    <input type="text" name="todo_name" placeholder="Enter your todo">
    <button>New Todo</button>
  </form>

  <?php foreach ($todos as $todoName => $todo) : $index++ ?>
    <div style="margin: 20px; display:flex;">
      <form action="change_status.php" method="post">
        <input type="hidden" name="todo_name" value="<?= $todoName ?>">
        <label for="<?= 'todo_' . $index ?>">
          <input type="checkbox" <?= $todo['completed'] ? 'checked' : '' ?> id="<?= 'todo_' . $index ?>">
          <?= $todoName ?>
        </label>
      </form>
      <form action="delete.php" method="post" style="margin-left: 10px;">
        <input type="hidden" name="todo_name" value="<?= $todoName ?>" />
        <button>Delete</button>
      </form>
    </div>
  <?php endforeach; ?>

  <script>
    const checkboxes = document.querySelectorAll('input[type=checkbox]');
    checkboxes.forEach(checkbox => {
      checkbox.onclick = function() {
        this.parentNode.parentNode.submit();
      }
    })
  </script>

</body>

</html>
