<?php
    $num1 = 20; //Integer
    $num2 = "25";//String
    $name = "room";//String
    $num3 = 30.5;//Double

    //แสดงค่าในตัวแปร
    echo "ตัวแปร num1 มีค่าเท่ากับ " .$num1. "<br>";
    echo "ตัวแปร num2 มีค่าเท่ากับ " .$num2. "<br>";
    echo "ตัวแปร name มีค่าเท่ากับ " .$name. "<br>";
    echo "ตัวแปร num3 มีค่าเท่ากับ " .$num3. "<br>";
    echo "<hr>";

    echo "ก่อนแปลง num1 มีชนิดของข้อมูลเป็น ".gettype($num1)."<br>";
    echo "ก่อนแปลง num2 มีชนิดของข้อมูลเป็น ".gettype($num2)."<br>";
    echo "ก่อนแปลง name มีชนิดของข้อมูลเป็น ".gettype($name)."<br>";
    echo "ก่อนแปลง num3 มีชนิดของข้อมูลเป็น ".gettype($num3)."<br>";
    echo "<hr>";

    //แปลงค่าโดยการใช้คำสั่ง casting
    $num1=(string)$num1;
    $num2=(integer)$num2;
    $name=(integer)$name;
    $num3=(string)$num3;
    echo "หลังแปลง num1 มีชนิดของข้อมูลเป็น ".gettype($num1)."<br>";
    echo "หลังแปลง num2 มีชนิดของข้อมูลเป็น ".gettype($num2)."<br>";
    echo "หลังแปลง name มีชนิดของข้อมูลเป็น ".gettype($name)."<br>";
    echo "หลังแปลง num3 มีชนิดของข้อมูลเป็น ".gettype($num3)."<br>";
    
    


?>