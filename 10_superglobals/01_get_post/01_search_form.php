<?php
echo '<pre>';
var_dump($_GET);
echo '</pre>';

$keyword = '';
if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];
  // echo $keyword . '<br>';
  // Do whatever is necessary with keyword
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
  <form action="" method="get">
    <input type="text" name="keyword" placeholder="Type and hit enter" value="<?= $keyword ?>">
    <button>Search</button>
  </form>
</body>

</html>
