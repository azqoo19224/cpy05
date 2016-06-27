<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 

echo "每年的四季分別為：<br>";

for($i = 0; $i <4; $i++){
     
    echo  $season[$i]."<br>";
}
foreach ($season as $key => $value){
	echo $key, "=>", $value, "<br>";
}


//foreach   輸出索引 adnr 元數值
?>