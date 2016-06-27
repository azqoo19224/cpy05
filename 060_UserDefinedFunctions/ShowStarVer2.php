<?php
function ShowStar($iCount)
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= "*";
	}
	echo $result;
}

$iHowMany = 3;
ShowStar($iHowMany);
?>

//利用for迴圈  echo *