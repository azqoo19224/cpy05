<?php
  $x = 3;
  if ($x >= 10 && foo())
  //一旦失敗  則立即判定失敗  跳脫IF
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo())
  //程式跑完再做判定
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>