<?php
$a = 20;
//全域變數
//$a 在function 中未指定值。

function myfunction($b) {
//	global $a;
 
	print "a=$a<br>";
	//$a 區域變數
	$a = 30;
	print "a=$a<br>";
	global $a, $c;
	print "a=$a<br>";
	return $c = ($b + $a);
}
print myfunction(40) + $c;



/*

function g(){
	global $z;
	$z = 10;
}
function gg(){
	global $z;
	echo "<br>".$z;
}

g();
gg();

*/



?>
