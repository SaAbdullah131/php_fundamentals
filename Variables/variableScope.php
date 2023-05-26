// Exploring variable Scope in php

<?php 
$x = 5;//global scope

function myTest() {
    // using x inside this function weill generate an error
    echo "<p> Variable x inside function is: $x</p>";
}
myTest();
echo"<p> Variable x outside function is: $x</p>";

// a variable declared within a function has a Local Scope and can only be accessed within that function.
function newTest() {
    $y=5;
    echo "<p> Variable x inside function is: $y</P>";    
}
newTest();
echo "<p> Variable x outside function is : $y</p>";

?>