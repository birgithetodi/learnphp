<?php
function hello(): void {
   var_dump('Hello');
}
$hi = hello();
var_dump($hi);
hello();
hello();

function helloName() {
   var_dump("Hello, $name!");
}

helloName('Birgithe');
helloName('Trevor');

function helloNameAndAge($name, $age) {
   var_dump("Hello, $name! You are $age years old!");
}

helloNameAndAge('Birgithe, 18');
helloNameAndAge('Trevor, 18');

helloName();

$test = function() {

};
var_dump($test);

$numbers = [1, 2, 3, 4, 5];
array_map(function($n){
   return $n * $n;
}, $numbers);
$squares = array_map(fn ($n) => $n * $n, $numbers);
var_dump($sqares);


function cube(int $a): int|string{
   if($a < 0){
      return 'NAHHH NEGATIVE!';
   } else {
      return $a * $a * $a;
   }
   var_dump('BLAAAA');
}
var_dump(cube(4));

$answer = cube(5);
$text = "Cube of 5 is $answer";
echo $text;