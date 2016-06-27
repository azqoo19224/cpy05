<?php
  $x = getdate();
  echo gettype($x), "<br>";
  //得到陣列
  
  $x = date('Y-m-d H:i:s');
  echo $x, "<br>";
  echo gettype($x), "<br><br>";
  //時間型態   date得到的為字串
  
  $x = gmdate('Y-m-d H:i:s');
  echo $x, "<br>";
  echo gettype($x);
  //gmdate 格林威治時間
  
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));
  //strtotime 時間轉字串
  
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
?>