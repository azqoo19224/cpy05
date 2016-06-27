<?php
header("content-type: text/html; charset=utf-8");
$a = array('xxx', 'book' => '書籍', 'yyy', 'desk' => '書桌', 'pen' => '筆');

foreach ($a as $k => $s)
{
	 echo "$k = $s<br>";
}
//foreach
//xxx key 0   yyy  key 1
?>