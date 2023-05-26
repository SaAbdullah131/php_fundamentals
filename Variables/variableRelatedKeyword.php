// some variable related keyword

<?php
$x = 5;
$y= 10;

function myTest() {
    // global $x, $y;
    // $y= $x+$y;
    // or using 
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo $y,"\n";

// static ..local variable normally for not delete use it further that's why use static.

function newTest() {
     static $s = 0;
     echo $s,"\n";
     $s++;
}
newTest();
newTest();
newTest();

?>