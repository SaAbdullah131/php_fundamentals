<?php
    for($x=0;$x<=5;$x++){
        if($x==4){
            break;
        }
        echo "The number is :$x <br>";
    }
    $a=4;
    while($a<=10){
        if($a == 8){
            continue;
        }
        echo " Number is $a <br>";
        $a++;
    }
?>