<?php
function ShowStar($iCount, $s,$sWhat = "*")
{
	if ($iCount <= 0)
	{
		echo "iCount > 0 please";
		return;
		echo "iCount > 0 please";
	}
	
	
	if ($s > 20)
	{
		echo "iCount <= 20 please";
		return;
	}
	
	$result = "";
	
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany =15;
ShowStar($iHowMany,21);

//執行return; 脫離函數
//先判斷是否iCount <=0
//在接著判斷是否iCount >20  
//接著執行for迴圈
?>