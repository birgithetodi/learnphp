<?php
$test = [1, 2, 'word', true];
var_dump($test[2]); //[nr] writes down only one thing from the array
$test[2] = asdhas;
var_dump($test);
$test[4] = 'new value';
var_dump($test);
$test[] = 'another value';
var_dump($test);
array_push($test, 'pushed value');
var_dump($test);

$test = [ "name " => 'Birgithe', 'age' => 18];
var_dump($test['name']);
var_dump($test);

$test = [ 
    "name " => 'Birgithe', 
    'age' => 18,
    1,
    3,
    'bdasihbdhajs',
    100=> 'new value',
    5,
];
var_dump($test['name']);
var_dump($test);
$test = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
var_dump($test[1][2]); 