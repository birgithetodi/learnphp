<?php
$test = 10; //integer
$test = 4.3; //float
$test = "Hello World"; //string
$test = "õpilane";
$test = "😶‍🌫️";
$test = true; //boolean
$test = false; //boolean
$test = null; //null
$lol;
var_dump($test); //var_dump() is used to display the data type and value of a variable
var_dump($lol); 


$test = array (1, 2, "three", true);
var_dump($test);

$test = new stdClass();
$test->name = "biku";
var_dump($test);

$num1 = 10;
$num2 = 10;
var_dump($num1 === $num2); //=== equal