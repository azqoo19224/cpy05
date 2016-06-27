<?php

echo MathTool::calcTotal(1, 2, 3, 4, 5);

class MathTool {
	static function calcTotal () {
		$args = func_get_args();
		//func_get_args --- 傳回包含函式的參數列表的陣列
		// var_dump($args);   //看變數的相關訊息
		$total = 0;
		foreach ($args as $value) {
			$total += $value;
		}
		//foreacj 印出
		return $total;
	}
}

?>
