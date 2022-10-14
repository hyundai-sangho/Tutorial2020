<?php
date_default_timezone_set('Asia/Seoul');
setcookie('name', 'chosangho', time() + 60, '/');

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';
