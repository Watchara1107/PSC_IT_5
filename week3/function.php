<?php
    $total1 = null;
    $total2 = "";
    $total3 = 100;
    $total4 = "room5";

    echo "แสดงรายละเอียดของตัวแปรโดยการใช้ฟังก์ชัน var_dump() <br>";
    echo var_dump($total1)."<br>";
    echo var_dump($total2)."<br>";
    echo var_dump($total3)."<br>";
    echo var_dump($total4)."<br>";
    echo "<hr>";

    echo "ฟังก์ชัน isset ตรวจสอบว่ามีการกำหนดค่าหรือไม่ <br>";
    echo "ตัวแปร total1 เป็น".isset($total1)."<br>";
    echo "ตัวแปร total2 เป็น".isset($total2)."<br>";
    echo "ตัวแปร total3 เป็น".isset($total3)."<br>";
    echo "ตัวแปร total4 เป็น".isset($total4)."<br>";
    echo "<hr>";

    echo "ฟังก์ชัน empty ตรวจสอบว่ามีค่าว่างหรือมีเลขศูนย์หรือไม่ <br>";
    echo "ตัวแปร total1 เป็น".empty($total1)."<br>";
    echo "ตัวแปร total2 เป็น".empty($total2)."<br>";
    echo "ตัวแปร total3 เป็น".empty($total3)."<br>";
    echo "ตัวแปร total4 เป็น".empty($total4)."<br>";
    echo "<hr>";

    echo "ฟังก์ชัน is_null ตรวจสอบว่ามีค่าว่างหรือไม่ <br>";
    echo "ตัวแปร total1 เป็น".is_null($total1)."<br>";
    echo "ตัวแปร total2 เป็น".is_null($total2)."<br>";
    echo "ตัวแปร total3 เป็น".is_null($total3)."<br>";
    echo "ตัวแปร total4 เป็น".is_null($total4)."<br>";
    echo "<hr>";

    echo "ฟังก์ชัน unset ยกเลิกตัวแปรและคืนค่าให้หน่วยความจำ <br>";
    echo $total4;
    unset($total4);
    echo $total4;
?>