<?php
$iSum = 0;
$i = 1;
while ($i <= 10)
{
	$iSum += $i;
	$i += 1;
}
echo $iSum;

echo "<hr>";

$iSum = 0;
$i = 0;
while (9)
{
	$i++;
	$iSum += $i;	
	break;
}
echo $iSum
?>


//while(判斷式)   判斷不為0, 執行