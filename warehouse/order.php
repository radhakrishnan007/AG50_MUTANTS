<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
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
      <a href="warehouse_profile.php" id="Profile">About me</a>
      <a href="products.php" id="product">My Products</a>
      <a href="ware.php" id="warehouse">Warehouse</a>
      <a href="order.php" id="order">My Orders</a>
    </div>
    <div class="content_block">
        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["warehouse_name"]);?></b></h1>
            <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
            </p>
        </div>
        <div>
<table id="tab" style="width: 80%">
  <tr>
    <th>Buyers</th>
    <th>Bill Amount</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>aaa</td>
    <td>Rs.500</td>
    <td>Paid</td>
  </tr>
  <tr>
    <td>bbb</td>
    <td>Rs.300</td>
    <td>Not Paid</td>
  </tr>
  
  <tr>
    <td>Cccc</td>
    <td>Rs.100</td>
    <td>Not Paid</td>
  </tr>
  <tr>
    <td>Cccc</td>
    <td>Rs.100</td>
    <td>Not Paid</td>
  </tr>
  <tr>
    <td>Cccc</td>
    <td>Rs.100</td>
    <td>Not Paid</td>
  </tr>
  <tr>
    <td>Cccc</td>
    <td>Rs.100</td>
    <td>Not Paid</td>
  </tr>
</table>

        
    </div>
</body>
</html>