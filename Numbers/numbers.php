<?php
 $x = 5983;
 var_dump(is_int($x));

 $y= 59.234;
 var_dump($y);
 // php floats
var_dump(is_float($y));

// php infinity
$a = 1.9e411;
var_dump($a);
// var_dump(in_infinite($a));

// NaN(Not a Number) is_nan()

$nan = acos(8);
var_dump($nan);

// is_numeric()
$numeric = 598343;
var_dump(is_numeric($numeric));
$numString= "49343";
var_dump(is_numeric($numString));

$numAdd= '53.34' + 100;
var_dump(is_numeric($numAdd));

// php casting string and floats to integers

$num = 2343.234;
$init_cast = (int)$num;
echo $init_cast;

echo "<br>";

// cast string to int
$stToNumber = '2343.23';
$str_cast = (string)$stToNumber;
echo $str_cast;

 ?>