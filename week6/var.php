<?php 
    $x = 100;
    $y = 50;

    function sum(){
        global $x;
        $GLOBALS ["y"] = 5;
        echo "ค่าของตัวแปร X = ".$x."<br>";    
    }
      
    sum();
    echo "ค่าของตัวแปร y = ".$y."<br>";
    
    ?>
