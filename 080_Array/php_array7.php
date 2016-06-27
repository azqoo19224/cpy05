<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
    
print_r($season);//印出$season
echo "<hr>";
var_dump($season);//$season 相關資訊
echo "<br>";
foreach($season as $k => $value){
    echo $k,$value;
}

?>