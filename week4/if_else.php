<?php 
    $balance = 0;
     //เงื่อนไข ถ้ามีเงินมากกว่า 0 บาท ให้แสดงข้อความว่า กดเงินได้
    //ถ้ามีเงินน้อย กว่า 0 บาท ให้แสดงข้อความว่า ไม่สามารถกดได้

    // if($balance>0){
    //     echo "กดเงินได้ <br>";
    // }else{
    //     echo "ไม่สามารถกดเงินได้ <br>";
    // }
    // echo "จบโปรแกรม";


   echo ($balance>0)? "กดเงินได้":"ไม่สามารถกดเงินได้";

?>