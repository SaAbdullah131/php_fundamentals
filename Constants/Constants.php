<?php
    // to create a constant , use the define() function
    // syntax of it define(name,value,case-insensitive)

    // create a constant with a case-sensitive name;
    define("GRETTING","Welcome to learning PHP");
    echo GRETTING;

    define("HELLO","Welcome to PHP World",true);
    // echo hello;
    // create an array constant 
    define("cars",[
        "Alfa Romeo",
        "BMW",
        "Toyoto"
    ]);
    echo cars[0];

    // constants are automatically global and can be used across the entire script
    function myTest(){
        echo GRETTING;
    }
    myTest();
?>