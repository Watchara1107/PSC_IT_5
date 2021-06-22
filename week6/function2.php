<?php 
   //แบบที่ 2 ฟังก์ชันมีการรับค่าแต่ไม่มีการส่งค่า
    // แสดงผลคำว่า PHP โดยใช้ฟังก์ที่มีการรับค่า
   
    function show($hi,$ht="HTML"){
        echo $hi."<br>";
        echo $ht."<br>";
    }

    show("PHP","Java");

?>