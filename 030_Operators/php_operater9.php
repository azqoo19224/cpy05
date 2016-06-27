<?php

$x = 100;
$y = &$x;
//y 參用X



$y = 200;
echo "x = $x </br>";

unset($x);
// unset 取消設定 釋放
echo "y = $y </br>";
//


//echo $x;

//&址標


?>