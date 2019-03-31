<?php
include("quote1con.php");
error_reporting(0);
?>
<html>
<head>
<title>quotes</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<form  class="form" action="" method="GET">
<input type="text" name="quote" placeholder="your thought goes here">
<input type="text" name="name" placeholder="and your name">
<input type="submit" name="submit"></a>
</form>
<?php
if($_GET['submit'])
    {
        $qt=$_GET['quote'];
        $nm=$_GET['name'];
        
        
        if($qt!="" && $nm!=""){
            $query ="INSERT INTO quotes VALUES('$qt','$nm')";
            echo "meta http-equiv='refresh' content='0'>";       

            mysqli_query($conn,$query);
            echo "thank you";
               
        }
        else{      
        echo "insert in all fields";
        } 
    }

?>
</body>
<?php

?>
</html>