<?php
$a = 20;
function myFunction($b) {
	//echo "a = $a<br>";
	$a = 30;
	//echo "a = $a<br>";
	global $a, $c;
	//echo "a = $a<br>";
	return $c = ($b + $a);
}
// 請預測答案是多少?
//我猜是一百二

echo myFunction(40) + $c;

//好耶我猜對惹
?>