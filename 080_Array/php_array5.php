<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：<br>";


for($i = 0; $i <4; $i++){
   
    echo $season[$i]."<br>";
}

// foreach($season as $aaa){
//     echo $aaa,"<br>";
// }
// foreach ($season as $value){
// 	echo $value;
// }
//foreach 印出陣列

?>