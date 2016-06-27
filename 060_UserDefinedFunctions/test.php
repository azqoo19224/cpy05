<?php
    
    function showStar($howMany){
        $result = "";
        
        if($howMany < 0 || $howMany >20){
            return;
        }
        
        for($i = 1 ; $i <= $howMany;$i++){
            $result = "";
            
            for($j =1 ; $j <= $howMany;$j++){
            $result .="*";
           
            }
             echo $result."<br>"; 
           
         
        
        }
        
    }
    if($_POST["btnOK"])
    {
        showStar($_POST["txtName"]);
    }elseif($_POST["btnclear"]){
        showStar(0);
    }
?>


<html>
    <head>
        <meta charset ="utf-8">
        
        <body>
            
            
            <form method="post">
                Your number 0-20: <input type="number" name="txtName" value="<?php echo $x ?>"/>
                <br> 
                
                
                <input type="submit" name="btnOK" value = "OK"/>
                <input type="submit" name="btnclear" value ="clear"/>
            </form>
        </body>
    </head>
    
</html>
