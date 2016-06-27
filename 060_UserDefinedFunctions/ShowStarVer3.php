<?php
session_start();


if(isset($_POST["btnOK"])){
	$_SESSION["iHowMany"] =$_POST["nubw"];
	$_SESSION["iHighMany"] =$_POST["nub"];
	header("Location:demo.php");
	
}



?>
<html>
    <head>
        <meta charset ="utf-8">
        
        <body>
            
            
            <form method="post">
                Your 組數: <input type="number" name="nubw" value="1"/>
                <br>
                Your 底: <input type="number" name="nub" value="1"/>
                <input type="radio" name="bar">ㄎㄎ 要點我<br>
                
                
                <input type="submit" name="btnOK" value = "OK"/>
                <input type="reset" value ="clear"/>
               

            </form>
        </body>
    </head>
    
</html>
//印出三角形