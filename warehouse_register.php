<?php
// Include config file
require_once "db/config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = $warehouse_name= $email= $address= $contact_person= $profile_picture= $area="";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){ 

    // Validate username
    if(empty(trim($_POST["mobile_no"]))){
        $username_err = "Please enter a mobile number.";
    } else{
        // Prepare a select statement
        $sql = "SELECT warehouse_id FROM smfr_warehouse_registration WHERE mobile_no = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["mobile_no"]);
            // $param_first_name = trim($_POST["first_name"]);
            // $param_last_name = trim($_POST["last_name"]);
            // $param_email = trim($_POST["email"]);
            // $param_address = trim($_POST["address"]);
            // $param_gender = trim($_POST["gender"]);
            // $param_state = trim($_POST["state"]);
            // $param_bank_details = trim($_POST["bank_details"]);
            // $param_profile_picture = trim($_POST["profile_picture"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["mobile_no"]);
                    $warehouse_name=trim($_POST["warehouse_name"]);
                    $email = trim($_POST["email"]);
                    $address = trim($_POST["address"]);
                    $contact_person = trim($_POST["contact_person"]);
                    $profile_picture = trim($_POST["profile_picture"]);
                    $area=trim($_POST["area"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // echo "Insert statement";
        // die;
        
        // Prepare an insert statement
        $sql = "INSERT INTO smfr_warehouse_registration 
        (warehouse_name,mobile_no,email_id,location,login_password,profile_picture,contact_person_name,area) 
         VALUES (?,?,?,?,?,?,?,?)";

         //$sql1 = "INSERT INTO smfr_former_registration(first_name,last_name,login_password)VALUES(?,?,?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssss", $param_warehouse_name,$param_username,$param_email,$param_address,$param_password,$param_profile_picture,$param_contact_person_name,$param_area);

            //mysqli_stmt_bind_param($stmt1, "sss", $param_first_name,$param_last_name,$param_password);

                        
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_warehouse_name = $warehouse_name;
            $param_email = $email;
            $param_address = $address;
            $param_profile_picture = $profile_picture;            
            $param_contact_person_name = $contact_person;
            $param_area=$area;

            // echo $param_username."<br>";
            // echo $param_password."<br>";
            // echo $param_first_name."<br>";
            // echo $param_last_name."<br>";
            // echo $param_email."<br>";
            // echo $param_address."<br>";
            // echo $param_gender."<br>";
            // echo $param_state."<br>";
            // echo $param_bank_details."<br>";
            // echo $param_profile_picture."<br>";

            // echo print_r($stmt);
            // die;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: ind.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="../css/styles.css">
<script type = "text/javascript">
            function Redirect() {
               window.location = "main.html";
               document.getElementById("fn1").innerHTML;               
            }
</script> 
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
<table align="center" width="400" >
<div class="container">
<caption><h1><b>Warehouse Registration</b></h1></caption>
<tr>
<th>Warehouse name</th>
<td><input type="text" name="warehouse_name" id="fn1" maxlength="50" title="Warehouse name" placeholder="Enter warehouse name" required value="<?php echo $warehouse_name; ?>"></td>
</tr>
<tr>
<th>Password</th>
<td><input type="password"name="password" id="ps1" maxlength="50" title="Password" placeholder="Enter your password" required value="<?php echo $password; ?>">
<span class="help-block"><?php echo $password_err; ?></span>
</td>
</tr>
<tr>
<th>Confirm your password</th>
<td><input type="password"name="confirm_password" id="pss1" maxlength="50" title="Password1" placeholder="Re-enter your password" required value="<?php echo $confirm_password; ?>">
<span class="help-block"><?php echo $confirm_password_err; ?></span>
</td>
</tr>
<tr>
<th>Email</th>
<td><input type="email"name="email" id="em1" maxlength="50" title="Email" placeholder="Enter your email" required value="<?php echo $email; ?>"></td>
</tr>
<tr>
<th>Contact Person Name</th>
<td><input type="text" name="contact_person" id="em1" maxlength="50" title="Contact Person" placeholder="Enter Contact Person Name" required value="<?php echo $email; ?>"></td>
</tr>
<tr>
<th>Mobile no</th>
<td><input type="number"name="mobile_no" id="phno1" maxlength="50" title="Phno" placeholder="Enter your mobile no" required value="<?php echo $username; ?>">
<span class="help-block"><?php echo $username_err; ?>
</td>
</tr>
<tr>
<th>Address</th>
<td><textarea rows="8" cols="20" name="address" id="add" title="First name" placeholder="Enter your address" required><?php echo $address; ?></textarea></td>
</tr>
<tr>
<tr>
<th>Area</th>
<td>
    <input type="text" name="area" id="em1" maxlength="50" title="Area" placeholder="Enter Area" required value="<?php echo $area; ?>">
</td>
</tr>
<tr>

<tr>
<th>Upload your pic</th>
<td><input type="file" name="profile_picture" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Register">
    <input type="reset" class="btn btn-default" value="Reset">
</div>
</td>
</tr>
</table>
</form>
</body>
</html>
