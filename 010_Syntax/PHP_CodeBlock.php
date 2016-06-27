<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
</head>

<body>
<form method= post>
  <input type="text" name="number"/>
  <input type="submit" name="btnOK" value="Submit"/>
</form>
<?php 
  // It's PHP code block.
if(isset($_POST["btnOK"])){
  $x = 3;
  
  echo $x;

  echo $X; //無效
  // 區分大寫小寫   大小寫有區別
  // echo $X;
}
?>

</body>
</html>