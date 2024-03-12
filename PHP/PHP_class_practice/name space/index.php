<?php
require "user.php";
require "student.php";
require "car.php";
use customer\User;
use pupil\Student;
use Carname\Car;
$object = new Car();
$object->info();
echo "<br>";
$obj = new student();
$obj->show();
echo "<br>";
$ob = new user();
$ob->display();