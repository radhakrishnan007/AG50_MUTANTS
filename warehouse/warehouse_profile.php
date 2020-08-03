<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ind.php");
    exit;
}
// Include config file
require_once "../db/config.php";

$id=$_SESSION["id"];

// Prepare a select statement
$sql = "SELECT * FROM smfr_warehouse_registration WHERE warehouse_id =$id";

$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
$row = mysqli_fetch_assoc($result);
   
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
    <link rel="stylesheet" href="../css/styles.css">
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
</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="warehouse_profile.php" id="Profile">About me</a>
      <a href="product.php" id="product">My Products</a>
      <a href="stock.php" id="warehouse">Stock Availability</a>
      <a href="manage.php" id="order">Manage Products</a>
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
            <table cellpadding="10" cellspacing="5" border="1">
                <tr>
                    <td><label>Ware House Name</label></td>
                    <td><label><?php echo htmlspecialchars($_SESSION["warehouse_name"]);?></label></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td><label><?php echo $row['email_id'] ?></label></td>
                </tr>
                <tr>
                    <td><label>Mobile No</label></td>
                    <td><label><?php echo $row['mobile_no'] ?></label></td>
                </tr>
                <tr>
                    <td><label>Address</label></td>
                    <td><label><?php echo $row['location'] ?></label></td>
                </tr>
                
                <tr>
                    <td><label>Contact Person</label></td>
                    <td><label><?php echo $row['contact_person_name'] ?></label></td>
                </tr>
            </table>
            
        </div>
        
    </div>
</body>
</html>