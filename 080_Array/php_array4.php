<?php
    header("content-type: text/html; charset=utf-8");
    
    $myArray = array('myName'=>'Jeremy', 'myHeight'=>191, 'myWeight'=>91);
    echo "大家好，我的名字叫".$myArray['myName'].$myArray['myHeight'].$myArray['myWeight']."<br>";
    
    foreach ($myArray as $key => $value) {
        	echo $key, "=>", $value, "<br>";
        
        // code...
    }
    //=> 傳Key
    //定義myArray 陣列
?>