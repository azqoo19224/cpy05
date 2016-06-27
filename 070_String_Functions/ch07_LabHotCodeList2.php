<?php
$f = fopen("pick3.txt", "r");

//打開檔案
while (!feof($f))
{
	$line = fgets($f);
	//fgets(file,length)  從指定文件讀取一行
	echo "$line<br>";
}
fclose($f);
echo "--End--";
?>