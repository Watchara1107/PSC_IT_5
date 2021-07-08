<?php 
    $product = array(
         array("keyboard","คีย์บอร์ด",1500,0),
         array("mouse","เมาส์",900,1),
         array("speaker","ลำโพง",2500,2),
         array("moniter","จอ",1000,3)
    );
    for($row=0;$row<count($product);$row++){
            echo "ชิ้นที่ ".$row."<br>";
        for($column=0;$column<count($product[$row]);$column++){
            echo $product[$row][$column]."\t";
        }
        echo"<hr>";
    }
?>