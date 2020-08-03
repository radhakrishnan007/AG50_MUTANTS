<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
// Include config file
require_once "db/config.php";

$id=$_SESSION["id"];

// Prepare a select statement
$sql = "SELECT * FROM master_product_price";

$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
$product_count=mysqli_num_rows($result);
$i=0;
if($i<$product_count)
{
    while($product_row[$i]=mysqli_fetch_assoc($result))
    {
        $i=$i+1;
    }
}	
   
} else {
  echo "0 results";
}

mysqli_close($link);
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
            height: 100%;
            background-color: #fff;
        }
        #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
    </style>
</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="farmer_profile.php" id="Profile">About me</a>
      <a href="products.php" id="product">My Products</a>
      <a href="ware.php" id="warehouse">Warehouse</a>
      <a href="order.php" id="order">My Orders</a>
      <a href="product_price.php" id="order">Price</a>
    </div>
    <div class="content_block">
        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["firstname"]);echo " "; echo htmlspecialchars($_SESSION["lastname"]); ?></b></h1>
            <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
            </p>
        </div>
        <div>
            <h1>Product Price</h1> 
            <!-- <a href="add_product.php" class="btn btn-danger" style="float: right;margin-right:50px; ">Add Product</a> -->           
        </div>
        <div>
        	<table border="1" cellpadding="10" cellspacing="10" style="width: 96%; margin-left:25px;margin-right:25px;margin-top: 25px;" id="customers">
        		<tr>
        			<th style="text-align: center;">Product Id</th>
        			<th style="text-align: center;">Product Name</th>
        			<th style="text-align: center;">Type</th>
        			<th style="text-align: center;">Price</th>
        			<th style="text-align: center;">Qty</th>
        			<th style="text-align: center;">Unit</th>
                    <th style="text-align: center;">Update On</th>
        		</tr>
        		<?php
                    $r=0;
                    while($r<$product_count)
                    {
			    ?>
        		<tr>
        			<td><?php echo $product_row[$r]['product_price_id']?></td>
        			<td style="text-align: left;"><?php echo $product_row[$r]['product_name']?></td>
        			<td><?php echo $product_row[$r]['product_type']?></td>
        			<td><?php echo $product_row[$r]['buying_price']?></td>
        			<td><?php echo $product_row[$r]['qty']?></td>        			
        			<td><?php echo $product_row[$r]['unit']?></td>
        			<td><?php echo $product_row[$r]['updated_on']?></td>        			
        		</tr>
        		<?php $r=$r+1;} ?>
        	</table>
        </div>
        
    </div>
</body>
</html>