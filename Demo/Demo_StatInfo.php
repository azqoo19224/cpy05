<?php
	session_start();
	$txt1 = $_POST["txt1"];
	$txt2 = $_POST["txt2"];
	
	if (isset($_POST["btnWriteSession"]))
		$_SESSION["userName"] = $_POST["txt1"];
	
	if (isset($_POST["btnReadSession"]))
		$txt1 = $_SESSION["userName"];
	
	if (isset($_POST["btnWriteCookie"]))
	{
		// setcookie("userid", $_POST["txt2"]);
		setcookie("userid", $_POST["txt2"], time() + 60 * 60 * 24 * 7);
		echo $_COOKIE["userid"];
		//如果coolie要失效 時間設為昨天 預防地區時間不同
	//	setcookie("變數名稱","變數值","存活時間","路徑","網域")
	}
	
	if (isset($_POST["btnReadCookie"]))
		 $txt2 = $_COOKIE["userid"];
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>State Infomation</title>
</head>
<body>
<form method="post">
	<input type="text" name="txt1" value="<?php echo $txt1; ?>">
	<input type="submit" name="btnWriteSession" value="Write Session">
	<input type="submit" name="btnReadSession" value="Read Session">
	<input type="submit" name="btnDummy" value="Dummy">
	<br>
	<input type="text" name="txt2" value="<?php echo $txt2; ?>">
	<input type="submit" name="btnWriteCookie" value="Write Cookie">
	<input type="submit" name="btnReadCookie" value="Read Cookie">
  </form>
</body>
</html>