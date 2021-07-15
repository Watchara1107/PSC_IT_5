<?php 
 $arr = ["A"=>20,"B"=>15,"C"=>30,"D"=>25];
 $country = ["TH"=>"ไทย", "JP"=>"ญี่ปุ่น","US"=>"สหรัฐอเมริกา","CN"=>"จีน"];

$result = array_merge($arr,$country);
print_r($result);
echo "<hr>";

$result1  = array_merge_recursive($arr,$country);
print_r($result1);
echo "<hr>";

$result2 = array_combine($arr,$country);
print_r($result2);
echo "<hr>";
?>