<?php
$num = 10;
if($num > 5) {
    var_dump('Bigger');
}

if($num > 5) {
    var_dump('Bigger');
} else {
    var_dump('Smaller');
}

if($num > 5) {
    var_dump('Bigger');
} elseif($num == 5) {
    var_dump('Smaller');
} else {
    var_dump('Equal');
}

$i = 1; 

switch($num) {
    case 1:
        var_dump('yx');
        break;
    case 2:
        var_dump('kaks');
        break;
        case 3:
        var_dump('kolm');
        break;
    case 4:
        var_dump('kolm neli');
        break;
    default:
        var_dump('dunno');
}