<?php
include("quote1con.php");
error_reporting(0);
$query = "select * from quotes";
$data=mysqli_query($conn,$query);
$quotes = mysqli_fetch_all($data,MYSQLI_ASSOC);

?>
<!-- yha html start -->
<html>
<head><title>quotes</title>
<link rel="stylesheet" href="css/bootstrap.min.css"></head>
<body>
<nav class="navbar  navbar-light bg-warning text-center ">
    
            
    <div > <h1 class="flow-center bg-basic">quotes</h1></div>
   
    <div class="pull-right">
    <button class="btn btn-info bg-danger" type="submit">---------</button>
  </div>
    
  </nav>

<div class="container bg-info">
<?php
foreach ($quotes as $quote) {?>
    <div class="card outline-danger bg-success ">
  
    <h4><?php echo ($quote['quote']);?>
</h4>
    <p><?php echo ($quote['name']);  ?></p>
</div>

<?php }?>
<div class="container bg-success"><?php include("quote2insert.php")?></div>


</body>

</html>