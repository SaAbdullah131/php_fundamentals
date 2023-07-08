
<?php
// PHP Supports the Following data types;
/*
    1.String
    2.Integer
    3.Float
    4.Boolean
    5.Array
    6.Object
    7.NULL
    8.Resource
*/

// string 
$name="SA Abdullah";
$learning = "PHP";
var_dump($name,"\n");
echo "I am $name and started exploring $learning\n";

// integer
$integer = 55598;
var_dump($integer); // checking the variable data type using var_dump() 
// float 
$floatTypes = 10.343;
var_dump($floatTypes,"\n");
echo $floatTypes,"\n";

// Boolean 
$t = true;
$f = false;
var_dump($t , $f);
echo "$t and $f";

// array 
$cars = array('Volvo',"BMW","Toyota");
var_dump($cars);
$friends = array("Mukter","Rion","Shakibe");

// object
class Car {
    public $color;
    public $model;
    public function  _construct($color,$model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a".$this->color. " ".$this->model ."! ";
    }
}
$myCar = new Car("Black","Volvo");
echo $myCar -> message();
echo "<br>"

?>