<?php

require_once './Person.php';
require_once './Student.php';

// What is class and instance

// $p = new Person('상호', 44, null);
// echo $p->name . '<br>';
// echo $p->age . '<br>';
// echo ($p->getSalary() ?? '0') . '원' . '<br>';
// $p->setSalary(1000);
// echo ($p->getSalary() ?? '0') . '원' . '<br>';

// echo '<pre>';
// var_dump($p);
// echo '</pre>';

$s = new Student('상호', 44, 1234);
echo $s->name . '<br>';
echo $s->age . '<br>';
echo ($s->getSalary() ?? '0') . '원' . '<br>';
