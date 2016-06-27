<?php
header("Content-Type: image/png");

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");
echo fread($fileHandle, filesize($filename));
//fread() 函數讀取文件  filesize() 函數返回指定文件的大小

fclose($filename);
//檔案關閉
?>