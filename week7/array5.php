<?php
 echo "รูปแบบที่ 2 ใช้วงเล็บก้ามปู [] <br>";
 $animal = ["dog"=>"สุนัข", "cat"=>"แมว","pig"=>"หมู"];
 print_r($animal);
 echo "<br>";
 echo $animal["cat"]."<br>";
 echo "<hr>"; 
 while(list($eng,$th) = each($animal)){
     echo $th ." ". $eng."<br>";
 }
?>