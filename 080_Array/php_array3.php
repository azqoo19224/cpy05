<?php

$bloodType = array("A", "B", "AB", "O");
$bloodType[3] = "aa"; 
for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}
//傳陣列array進去
//印出 A <br> B <br> AB<br> O <br>

?>
