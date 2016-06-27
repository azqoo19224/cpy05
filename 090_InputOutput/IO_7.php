<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");
	// $line = fgets($f);
while ($line = fgets($f))
{
	// $line = fgets($f);
	$sData .= Trim($line) . "<br>";
	// $line = fgets($f);
}
fclose($f);
echo $sData;

?>
