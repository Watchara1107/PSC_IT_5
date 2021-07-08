<?php 
     //foreach ใช้แบบเดี่ยว
    $days = array('อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'); 
    foreach($days as $d){
        echo $d."<br>";
    }
    echo "<hr>";
    //foreach ใช้แบบคู่
    $day = [
        'su'=>'อาทิตย์',
        'm'=>'จันทร์',
        'th'=>'อังคาร', 
        'w'=>'พุธ', 
        't'=>'พฤหัสบดี', 
        'f'=>'ศุกร์', 
        's'=>'เสาร์'
    ]; 
    foreach($day as $key=>$value){
        echo $key." ".$value."<br>";
    }

?>