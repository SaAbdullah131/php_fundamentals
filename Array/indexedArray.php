// indexed array in php
// There are two ways to created indexed array in php.

// The index can be assigned automatically 

<?php
 $cars = array("Volvo","BMW","Mercedes","Toyota");
 // or index manually 
 $university[0]= "eub";
 $university[1]= "wub";
 $university[2]= "bub";
 $university[3]= "gub";

// loop through an indexed array
$uniLength = count($university); // count() method is used for count array length;

for($x = 0; $x<$uniLength;$x++){
    echo $university[$x];
    echo "<br>";
}

?>