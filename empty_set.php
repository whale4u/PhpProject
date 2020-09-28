<?php
$var = 0;

//// Evaluates to true because $var is empty
//if (empty($var)) {
//    echo '$var is either 0, empty, or not set at all'.PHP_EOL;
//}
//
//// Evaluates as true because $var is set
//if (isset($var)) {
//    echo '$var is set even though it is empty'.PHP_EOL;
//}

$a = '';
$b = 'b';
$c = 'c';

$d = empty($a)?$b:$c;
echo $d.PHP_EOL;
?>