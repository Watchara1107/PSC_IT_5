<?php 
    $country = ["TH"=>"ไทย", "JP"=>"ญี่ปุ่น","US"=>"สหรัฐอเมริกา","CN"=>"จีน"];
    shuffle($country); //สุ่มค่า
    print_r($country);
    echo "<hr>";

    $c = array_reverse($country); //กลับด้าน
    print_r($c);
?>