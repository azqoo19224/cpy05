<?php
$bloodType[1] = 'A';
$bloodType[3] = 'B';
$bloodType[2] = 'AB';
$bloodType[4] = 'O';
$bloodType[5] = 'qq';

for ($i = 0; $i <= 5; $i++) {
	echo $bloodType[$i] . "<br />";
}
foreach($bloodType as $v){
    echo "$v<br>";
}

//php陣列長度很彈性
?>