<?php
//ฟังก์ชันแบบที่ 1 แบบสร้างขึ้นเอง



/*function name(){
    $num1 = 2;
    $num2 = 4;
        echo $num1 + $num2;
}
name();*/



//ฟังก์ชันแบบที่ 2 ฟังก์ชันมาตรฐาน
//ฟังก์ชัน if กำหนดเงื่อนไข
//โปรแกรมคำนวนคะแนน
/* if มี 3 แบบ
แบบที่ 1 แบบ 1 เงื่อนไข
แบบที่ 2 แบบ 2 เงื่อนไข
แบบที่ 3 แบบ หลายเงื่อนไข */
/*โปรแกรมคำนวนคะแนน
โจทย์ ข้อที่ 1 ถ้าได้ตะแนนมากกว่า 10 คะแนน 
ให้แสดงคำว่าผ่านถ้าน้อยกว่า 10 ไม่แสดงอะไรเลย 
โจทย์ ข้อที่ 2 ถ้าได้คะแนนมากกว่า 10 
ให้แสดงคำว่าผ่าน ถ้าได้คะแนนน้อยกว่า 10 ให้แสดงค่าว่าไม่ผ่าน 
โจทย์ ข้อที่ 3 ถ้าได้คะแนนน้อย 5 คะแนน
ให้แสดงค่าว่าควรปรับปรุง ถ้าคะแนนได้ 10 คะแนน
ให้แสดงคำว่าพอใช้ ถ้าได้คะแนบ 15 
คะแนนขึ้นไปให้แสดงคำว่าดีมาก */

$scor = 15;
if($scor>=10){
    echo "ข้อที่ 1 ผ่าน";
}
echo "<hr>";

if($scor>=10){
    echo "ผ่าน";
}else{
    echo "ไม่ผ่าน";

}echo "<hr>";

if($scor>=5){
    echo "ควรปรับปรุง";
}elseif($scor==10){
    echo "พอใช้";
}elseif($scor>=15){
    echo "ดีมาก";
}else{
    echo "ไม่เข้าเงื่อนไขใดๆเลย";
}





?>