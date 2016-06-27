<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);
	//排序
	var_dump($testArray);
	//相關資料
	echo "<br />";
	
	natsort($testArray);
	//自然排序
	var_dump($testArray);
?>
