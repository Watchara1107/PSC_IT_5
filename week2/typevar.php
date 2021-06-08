<?php
    $num1 = 12; //ประกาศตัวแปรแบบ Integer
    $num2 = 12.5; //ประกาศตัวแปรแบบ Float/Double
    $num3 = "15.5"; //ประกาศตัวแปรแบบ String

    echo "ตัวแปร num1 มีค่าเท่ากับ".$num1."<br>";
    echo "ตัวแปร num2 มีค่าเท่ากับ".$num2."<br>";
    echo "ตัวแปร num3 มีค่าเท่ากับ".$num3."<br>";

    echo "<hr>";

    //ตรวจสอบค่าชนิดของตัวแปรโดยใช้คำสั่ง gettype
    echo "ชนิดของมูลของตัวแปร num1 เป็น" .gettype($num1)."<br>";
    echo "ชนิดของมูลของตัวแปร num2 เป็น" .gettype($num2)."<br>";
    echo "ชนิดของมูลของตัวแปร num3 เป็น" .gettype($num3)."<br>";

    echo "<hr>";

    $total = $num3+$num1;
    echo "$num3"."+"."$num1"."=".$total."<br>";
    echo $num3+$num1."=".$total."<br>";

    echo "<hr>";

    //แปลงค่า String ให้เป็น Integer
    echo "ก่อนแปลง มีชนิดของข้อมูลของตัวแปร num3 เป็น".gettype($num3)."<br>";
    settype($num3,"integer");
    echo "หลังแปลง มีชนิดของข้อมูลของตัวแปร num3 เป็น".gettype($num3)."<br>";
    echo "ตัวแปร num3 มีค่าเท่ากับ".$num3;


?>