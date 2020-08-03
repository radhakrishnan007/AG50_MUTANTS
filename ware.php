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
$area=$_SESSION["area"];

// echo $area;
// die;

// Prepare a select statement
$sql = "SELECT * FROM smfr_warehouse_registration WHERE area ='$area'";

$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
$product_count=mysqli_num_rows($result);
$i=0;
if($i<$product_count)
{
    while($ware_row[$i]=mysqli_fetch_assoc($result))
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
            width: 85%;
            height: 100%;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="farmer_profile.php" id="Profile">About me</a>
      <a href="product.php" id="product">My Products</a>
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
<table id="tab">
<tr>
  <?php
  $r=0;
  while($r<$product_count)
  {
  ?>
  <td>
  <h1><?php echo $ware_row[$r]['warehouse_name']?></h1>
  <p>Location: <?php echo $ware_row[$r]['area']?></p>
  <p>Contact No: <?php echo $ware_row[$r]['mobile_no']?></p>
  <p>Contact Person: <?php echo $ware_row[$r]['contact_person_name']?></p>
  <p class='card'><a href="book.php"><button>Book Now</button></a></p>
  <p class='card'><button>Cancel</button></p>
  </td>
  <?php
  $r=$r+1;
  }
  ?>
 </tr>
</div> 
        
    </div>
</body>
</html>