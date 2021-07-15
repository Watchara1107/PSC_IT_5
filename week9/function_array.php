<?php 
    $fruits = [
        "มะละกอ",
        "กล้วย",
        "ส้ม"
    ];
    //เพิ่มในตำแหน่งสุดท้าย
    array_push($fruits,"แอปเปิ้ล");
    array_push($fruits,"องุ่น");
    array_push($fruits,"เงาะ");
    //ลบในตำแหน่งสุดท้าย
    array_pop($fruits);
    array_pop($fruits);
    //เพิ่มในตำแหน่งแรก
    array_unshift($fruits,"ทุเรียน");
    array_unshift($fruits,"มังคุด");
    //ลบในตำแหน่งแรก
    array_shift($fruits);
    //เพิ่มและลบในตำแหน่งใดก็ได้
    //ลบ array_splice(ตัวแปรarray,ตำแหน่งของ index,จำนวนที่ต้องการลบ);
    array_splice($fruits,2,1);
    //เพิ่ม array_splice(ตัวแปรarray,ตำแหน่งของ index,จำนวนที่ต้องการลบ,ค่าที่ต้องการเพิ่ม);
    array_splice($fruits,1,0,"สัปปะรด");

    print_r($fruits);

?>