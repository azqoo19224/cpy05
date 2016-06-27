<?php
function ShowStar($iCount, $sWhat = "*")
{
	if ($iCount > 0)
	{
		if ($iCount <= 20)
		{
			$result = "";
			for ($i = 1; $i <= $iCount; $i++)
			{
				$result .= $sWhat;
			}
			echo $result;
		}
		else 
			echo "iCount <= 20 please.";
	}
	else
	{
		echo "iCount > 0 please.";
	}
}

$iHowMany = 21;
ShowStar($iHowMany);
?>
//兩個if判斷iCount的值   介於 0<iCount<20