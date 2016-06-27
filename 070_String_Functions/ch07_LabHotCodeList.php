<?php
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);
//strlen()用来计算指定的字符串s 的长度
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);

	$result = $ch . str_replace($ch, "", $result);
			//$ch	+			//將$result裡面 $ch的字符改為空值
	//str_replace 將一個字串中的某一些指定字符更換為新的字符


	echo $result,"<br>";
}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
$s = "ADASDFEW1234";
$iPos = strpos($s, "1");
echo "<br>";

if($iPos !== false){
	echo "found";
	
} 
else{
	echo "not found";
}


//substr 來取得部分字串內容
?>