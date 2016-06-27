<?php
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
    //傳1 ==>交換
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");
//自定義比較
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>