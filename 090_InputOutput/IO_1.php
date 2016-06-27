<?php

echo "Path and FileName:" . __FILE__ . "<br />";
//echo __FILE__;  取得 檔名
echo "Path: " . dirname ( __FILE__ ),"<br>";
//echo dirname(__FILE__); 取得 到上層目錄前的完整 PATH (要取得 /var/www)
echo "Filename: " . basename ( __FILE__ ) . "<br />";
//echo basename(__FILE__);    取得 不含附檔名的檔名 (要取得 test)
echo "Filesize: " . filesize ( __FILE__ )
//filesize() 函數返回指定文件的大小



?>
