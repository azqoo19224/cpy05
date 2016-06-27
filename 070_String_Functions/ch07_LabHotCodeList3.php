<?php
$sData = "";
$f = fopen("pick3.txt", "r");
while (!feof($f))
//偵測檔案是否到了文件結束的位置
{
	$line = fgets($f);
	$sData .= Trim($line);
	// Trim  從目前的 String 物件中移除所有的開頭和結尾空白字元。

}
fclose($f);
echo $sData,"<br>";

// GetHotCodeList
$result = "01234567890";
$iLen = strlen($sData);
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);
	$result = $ch . str_replace($ch, "", $result);

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>