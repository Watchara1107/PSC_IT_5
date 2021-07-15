<?php 
    //การเรียงลำดับใน array แบบเดี่ยว
    $number = [10,5,8,20,35,25,21,40];
    sort($number); //น้อยไปมาก
    print_r($number);
    echo "<hr>";

    rsort($number);
    print_r($number); //มากไปน้อย
    echo "<hr>";

    $fruits = ["มะละกอ","กล้วย","ส้ม"];
    sort($fruits); //พยัญชนะไปสระ
    print_r($fruits);
    echo "<hr>";

    rsort($fruits); //สระไปพยัญชนะ
    print_r($fruits);
    echo "<hr>";
?>