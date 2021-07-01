<?php 
    echo "Array ประเภทที่ 2 Array แบบคู่ <br>";
    echo "รูปแบบที่ 1 ใช้ฟังก์ชัน array <br>";
    $color = array("yellow"=>"สีเหลือง","red"=>"สีแดง","orange"=>"สีส้ม");
    echo $color["red"];
    echo "<hr>";

    echo "รูปแบบที่ 2 ใช้วงเล็บก้ามปู [] <br>";
    $animal = ["dog"=>"สุนัข", "cat"=>"แมว","pig"=>"หมู"];
    print_r($animal);
    echo "<br>";
    echo $animal["cat"]."<br>";
    echo "<hr>";
    
    echo "รูปแบบที่ 3 ใช้ฟังชัน range <br>";
    $number = range(1,10);
    print_r($number);
    echo "<br>";
    echo $number[4];

?>