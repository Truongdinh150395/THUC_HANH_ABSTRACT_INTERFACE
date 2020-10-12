<?php
include_once ("AbstractClass/Animal.php");
include_once ("Animals/Chicken.php");
include_once ("Animals/Tiger.php");
$conga = new Chicken();
echo $conga->makeSound();
$conho = new Tiger();
echo "<br>";
echo $conho->makeSound();