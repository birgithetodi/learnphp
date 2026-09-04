<?php
$test = true;
$test = false;
$test = true && false; //only time to get true is true && true, anything else is false
$test = true || false; //its true when 1 is atleast true
$test = !false; //! is not

$test = 10 > 5;
$test = 10 < 5;
$test = 10 < 10;
$test = 10 == 10; //
$test = 10 === 10; //
$test = 10 >= 5;
$test = 10 <= 5;
$test = 10 != 5; 
$test = 10 !== 5; //not equal
$test = 10 == '10'; //nr and text
$test = 10 === '10';
$test = true && true || (true && !true);

var_dump($test);
