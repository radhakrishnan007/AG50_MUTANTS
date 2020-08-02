<?php ini_set("memory_limit", "200000000");?>
<?php
// Initialize the session
session_start();

// Include config file
require_once "db/config.php";
include('resize.php');
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
$id=$_SESSION["id"];



$product_name=$type=$description=$price=$qty=$unit=$product_picture=$created_by_id="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $name=$_FILES['product_picture']['name'];
        $image = new SimpleImage();
        $image->load($_FILES['product_picture']['tmp_name']);
        $image->save('uploads/'.$name);
        

        
        $product_name=trim($_POST["product_name"]);
        $type=trim($_POST["type"]);
        $description=trim($_POST["description"]);
        $price=trim($_POST["price"]);
        $qty=trim($_POST["qty"]);
        $unit=trim($_POST["unit"]);
        $product_picture=$name;
        $created_by_id=$id;

        

        // Prepare an insert statement
        $sql = "INSERT INTO smfr_products 
        (product_name,product_type,product_description,product_price,created_by_id,product_picture,product_qty,product_unit)VALUES (?,?,?,?,?,?,?,?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssiisis", $param_product_name,$param_type,$param_description,$param_price,$param_created_by_id,$param_product_picture,$param_qty,$param_unit);
            $param_product_name=$product_name;
            $param_type=$type;
            $param_description=$description;
            $param_price=$price;
            $param_created_by_id=$id;
            $param_product_picture=$product_picture;
            $param_qty=$qty;
            $param_unit=$unit;

            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: products.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
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
            <h1>Add New Product</h1> 
            <a href="products.php" class="btn btn-danger" style="float: right;margin-right:50px; ">Products</a>           
        </div>
        <div class="container">
        	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <table align="center" width="400" >
                <div class="container">
                <tr>
                <th>Product Name</th>
                <td><input type="text" name="product_name" id="pro_name" maxlength="50" title="Product Name" placeholder="Enter Product Name" required value="<?php echo $product_name; ?>"></td>
                </tr>
                <th>Product Type</th>
                <td align="left" style="padding-left: 7px;">
                <select name="type" value="<?php echo $type; ?>">
                <option value="" selected="selected" disabled="disabled">Select Product Type</option>
                <option value="Vegetables">Vegetables</option>
                <option value="Fruits">Fruits</option>
                <option value="Pulses and Oil">Pulses and Oil</option>
                </select>
                </td>
                </tr>
                <tr>
                <th>Description</th>
                <td><textarea rows="8" cols="20" name="description" id="dec" title="Product Description" placeholder="Enter Product Description" required><?php echo $description; ?></textarea></td>
                </tr>
                <tr>
                <th>Price</th>
                <td><input type="text" name="price" id="price" title="price" placeholder="Enter product price" required value="<?php echo $price; ?>"></td>
                </tr>
                <tr>
                <th>Product Qty</th>
                <td><input type="text" name="qty" id="qty" title="Qty" placeholder="Enter Product Qty" required value="<?php echo $qty; ?>"></td>
                </tr>
                <tr>
                <th>Unit</th>
                <td><input type="text" name="unit" id="unit" title="unit" placeholder="Enter Product Unit" required value="<?php echo $unit; ?>"></td>
                </tr>
                <tr>
                <th>Product Picture</th>
                <td><input type="file" name="product_picture" /></td>
                </tr>
                <tr>
                <td colspan="2" align="center">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
                </td>
                </tr>
                </table>
            </form>
        </div>
        
    </div>
</body>
</html>