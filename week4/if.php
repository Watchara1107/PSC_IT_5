<?php 
    $balance = 100;

    //เงื่อนไข ถ้ามีเงินมากกว่า 0 บาท ให้แสดงข้อความว่า กดเงินได้
    //ถ้ามีเงินน้อย กว่า 0 บาท ให้แสดงข้อความว่า จบโปรแกรม
    
    if($balance<0){
        echo "กดเงินได้ <br>";
    }
    echo "จบโปรแกรม";
?>