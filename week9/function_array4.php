<?php 
    $country = [
        "TH"=>"ไทย", 
        "JP"=>"ญี่ปุ่น",
        "US"=>"สหรัฐอเมริกา",
        "CN"=>"จีน",
        "TH"=>"ไทย",
        "US"=>"สหรัฐอเมริกา",
        "US"=>"สหรัฐอเมริกา", 
    ]; 

     $key = array_keys($country); //ดึงคีย์ทั้งหมด
     print_r($key);
     echo "<hr>";

     $value = array_values($country); //ดึง value
     print_r($value);
     echo "<hr>";

     $flip = array_flip($country); //สลับ key และ value
     print_r($flip);
     echo "<hr>";

     $Delete = array_unique($country); //ลบข้อมูลที่ซ้ำออกไป
     print_r($Delete);

?>