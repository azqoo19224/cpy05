<?php
$result = '';
function glue ($val)
{
	global $result;
	$result .= $val;
}
$array = array ('a', 'b', 'c', 'd');
array_walk ($array, 'glue');
//將每組array帶入glue()函數  
echo $result;
?>