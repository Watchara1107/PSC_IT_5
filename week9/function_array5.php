<?php 
    $country = ["TH"=>"ไทย", "JP"=>"ญี่ปุ่น","US"=>"สหรัฐอเมริกา","CN"=>"จีน"];
    if(array_key_exists("TH",$country)){
        echo "พบข้อมูลkey TH ในตัวแปร Country";
    }else{
        echo "ไม่พบข้อมูล";
    }
    echo "<hr>";

    if(in_array("นนทบุรี",$country)){
        echo "พบข้อมูลvalue ไทย ในตัวแปร Country";
    }else{
        echo "ไม่พบข้อมูล";
    }
?>