<?php 
    //array แบบเดี่ยว
    //รูปแบบที่ 1 ใชฟังก์ชัน array
    $school = array("A","B","C","D");
    $number = array(10,20,30,40);
    echo"รูปแบบที่ 1 ใชฟังก์ชัน array <br>";
    print_r($school);
    echo "<br>";
    echo $school[1]."<br>";
    echo $number[0]." ".$number[1]."<br>";
    echo $number[0]+$number[2]."<br>";
    echo "<hr>";

    //รูปแบบที่ 2 ใช้วงเล็บก้ามปู []
    echo"รูปแบบที่ 2 ใช้วงเล็บก้ามปู [] <br>";
    $city = ["นนทบุรี","กรุงเทพ","ปทุมธานี"];
    print_r($city);
    echo "<br>";
    echo $city[2];
    echo "<hr>";

    //รูปแบบที่ 3 ใช้ฟังก์ชัน range
    echo"รูปแบบที่ 3 ใช้ฟังก์ชัน range <br>";
    $std = range("A","Z");
    print_r($std);
    echo "<br><br>";
    echo $std[2];


?>