<?php
  $d = strtotime("2012-09-10");
  //strtotime 時間轉成字串
  
  // $d = strtotime("2012-09-10 -3 days");
  // $d = strtotime("2012-09-10 +1 month");
  
  //可以直接加減 年日月
  
  echo $d;
  echo "<br>";
  echo date("Y-m-d", $d);
?>
