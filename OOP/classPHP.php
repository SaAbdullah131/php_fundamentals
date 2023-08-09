<?php 
class Fruit{
    // properties
    public $name;
    public $color;

    // Methods
    function set_name($name){
        $this->name =$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color) {
        return $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }
}

$apple = new Fruit(); // create new object using Fruit() class
$banana = new Fruit(); 

$apple -> set_name("apple");
$apple -> set_color("RED");
$banana ->set_name("Banana");

echo $apple->get_name().' ';
echo $apple->get_color().' ';

echo $banana->get_name();


?>