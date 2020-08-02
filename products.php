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
$sql = "SELECT * FROM smfr_products WHERE created_by_id =$id";

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
    </style>
</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="farmer_profile.php" id="Profile">About me</a>
      <a href="products.php" id="product">My Products</a>
      <a href="ware.php" id="warehouse">Warehouse</a>
      <a href="order.php" id="order">My Orders</a>
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
            <h1>Products</h1> 
            <a href="add_product.php" class="btn btn-danger" style="float: right;margin-right:50px; ">Add Product</a>           
        </div>
        <div>
        	<table border="1" cellpadding="10" cellspacing="5" style="width: 96%; margin-left:25px;margin-right:25px;margin-top: 25px;">
        		<tr>
        			<th>Product Id</th>
        			<th>Product Name</th>
        			<th>Type</th>
        			<th>Description</th>
        			<th>Price</th>
        			<th>Product Image</th>
        			<th>Qty</th>
        			<th>Unit</th>
        			<th>Options</th>
        		</tr>
        		<?php
                    $r=0;
                    while($r<$product_count)
                    {
			    ?>
        		<tr>
        			<td><?php echo $product_row[$r]['product_id']?></td>
        			<td><?php echo $product_row[$r]['product_name']?></td>
        			<td><?php echo $product_row[$r]['product_type']?></td>
        			<td><?php echo $product_row[$r]['product_description']?></td>
        			<td><?php echo $product_row[$r]['product_price']?></td>
        			<td><img src="uploads/<?php echo $product_row[$r]['product_picture']?>." style="width: 100px;height: 100px;"></td>
        			<td><?php echo $product_row[$r]['product_qty']?></td>
        			<td><?php echo $product_row[$r]['product_unit']?></td>
        			<td><a href="">Edit</a></td>
        		</tr>
        		<?php $r=$r+1;} ?>
        	</table>
        </div>
        
    </div>
</body>
</html>