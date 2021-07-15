<?php 
    $arr = ["A"=>20,"B"=>15,"C"=>30,"D"=>25];
    $country = ["TH"=>"ไทย", "JP"=>"ญี่ปุ่น","US"=>"สหรัฐอเมริกา","CN"=>"จีน"];
    //เรียงลำดับของมูล array แบบคู่
    print_r($arr);
    echo "<hr>";
    //เรียง value 
    asort($arr); //น้อยไปมาก
    print_r($arr);
    echo "<hr>";

    arsort($arr); //มากไปน้อย
    print_r($arr);
    echo "<hr>";

    //เรียง key
    ksort($country);
    print_r($country); //น้อยไปมาก
    echo "<hr>";

    krsort($country); //มากไปน้อย
    print_r($country);



?>