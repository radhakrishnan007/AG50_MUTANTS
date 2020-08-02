<?php
	header("refresh: 3; url = farmer_profile.php"); 
	exit;
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .content_block
        {
            margin-left: 180px;
            margin-right: 500px;
            width: 80%;
            height: 600px;
            background-color: #fff;
        }
    </style>
	<script>
var timer = null;
function auto_reload()
{
    window.location = 'farmer_profile.php';
}
</script>
</head>
<body onload="timer = setTimeout('auto_reload()',10000);">
<{section name=thisrsa loop=$rsa max=$max}>
    <div id="mySidenav" class="sidenav">
      <a href="farmer_profile.php" id="Profile">About me</a>
      <a href="products.php" id="product">My Products</a>
      <a href="ware.php" id="warehouse">Warehouse</a>
      <a href="order.php" id="order">My Orders</a>
    </div>
	<div class="content_block">
        <div class="page-header">
		</div>
    </div>
<{/section}>
</body>
</html>