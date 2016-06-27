<?php
  $d = mktime(13, 30, 0, 9, 10, 2012);
             //十 分 秒 月 日 年
  echo $d;
  echo "<br>";
  echo date("Y-m-d H:i:s", $d);
  //date 得到的結果為字串 (轉換格式)
?>
