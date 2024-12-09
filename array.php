<?php
//การประกาศตัวแปรแบบธรรมดา
$name = "ปวช.2/3 <hr>";
echo $name;  
//การประกาศตัวแปรแบบอาเรย์ รูปแบบที่ 1 สัญลักษณ์ [] 
$department = ["ACC", "ME", "IT", "DMD", "TOUR", "FOOD", "MICE", "DBT",];

//การประกาศตัวแปรแบบอาเรย์ รูปแบบที่ 2 ฟังก์ชั่น array
$department1 = array ("ACC", "ME", "IT", "DMD", "TOUR", "FOOD", "MICE", "DBT",);

/* ชนิดของข้อมูล 6 ชนิด 
    1. string มีสัญญาลักษ์ "" คือข้อความ
    ตัวอักษร ตัวอักขระและสัญลักษ์ต่างๆ
    2. integer คือเลขจำนวนเต็มเช่น 1,2,3 เป็นต้น
    3. float หรือ dubel คือตัวเลขที่เป็นทศนิยม
    4. booleen คือ ค่าทางตรรกศาสตร์ที่เป็นจริง
    = 1 และเท็จจริง = 0
    5. object = คือคุณสมบัติของตัวแปรที่อยู่ในรูปแบบ OOP
    6. array = คือกลุ่มข้อมูลที่มีตัวแปรเป็นชนิดเดียว
*/

echo $department1[4]. "<br>";
echo $department[7];    

//loop for
for($i=0;$i<=7;$i++){
    echo $i." ". $department1[$i]."<br>";
}

//loop foraech
foreach($department1 as $num){
    echo $num."<br>";
}






?>