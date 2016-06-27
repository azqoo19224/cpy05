<?php
	$contents = file_get_contents('data.txt');
	//得到檔案
	echo (str_replace("\r\n", "<br />", $contents));
?>