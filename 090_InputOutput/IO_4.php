<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";
}   //把預定義的字符 "<" （小於）和 ">" （大於）轉換為 HTML

?> 