<?php
session_start();

function ShowStar($iCount, $High, $sWhat = "*")
{      
    
	if($iCount > 0 && $High > 0)
	{
		
		$result = "";
		
		for ($i = 1; $i <= $iCount; $i++)
		{
			for($j = 1;$j <=$High; $j++)
			{
				$result .= $sWhat;
				echo $result ."<br>";
			
				
			}
			$result = "";
			
			}
		}
			else {
		   echo "errror".$iCount;
		
		}
	}	
	ShowStar($_SESSION["iHowMany"], $_SESSION["iHighMany"],"*");
	
?>