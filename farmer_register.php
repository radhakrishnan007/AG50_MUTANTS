<?php
// Include config file
require_once "db/config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = $first_name= $last_name= $email= $address= $gender= $state= $bank_details= $profile_picture="";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){ 

    // Validate username
    if(empty(trim($_POST["mobile_no"]))){
        $username_err = "Please enter a mobile number.";
    } else{
        // Prepare a select statement
        $sql = "SELECT registration_id FROM smfr_former_registration WHERE mobile_no = ?";
        
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
                    $first_name=trim($_POST["first_name"]);
                    $last_name = trim($_POST["last_name"]);
		            $email = trim($_POST["email"]);
		            $address = trim($_POST["address"]);
		            $gender = trim($_POST["gender"]);
		            $state = trim($_POST["state"]);
		            $bank_details = trim($_POST["bank_details"]);
		            $profile_picture = trim($_POST["profile_picture"]);
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
        $sql = "INSERT INTO smfr_former_registration 
        (first_name,last_name,login_password,email,mobile_no,address,gender,state,bank_details,profile_picture) 
         VALUES (?,?,?,?,?,?,?,?,?,?)";

         //$sql1 = "INSERT INTO smfr_former_registration(first_name,last_name,login_password)VALUES(?,?,?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssss", $param_first_name,$param_last_name,$param_password,$param_email,$param_username,$param_address,$param_gender,$param_state,$param_bank_details,$param_profile_picture);

            //mysqli_stmt_bind_param($stmt1, "sss", $param_first_name,$param_last_name,$param_password);

                        
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_first_name = $first_name;
            $param_last_name = $last_name;
            $param_email = $email;
            $param_address = $address;
            $param_gender = $gender;
            $param_state = $state;
            $param_bank_details = $bank_details;
            $param_profile_picture = $profile_picture;

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
                header("location: index.php");
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
<link rel="stylesheet" href="css/styles.css">
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
<caption><h1><b>Registration form</b></h1></caption>
<tr>
<th>First name</th>
<td><input type="text" name="first_name" id="fn1" maxlength="50" title="First name" placeholder="Enter your first name" required value="<?php echo $first_name; ?>"></td>
</tr>
<tr>
<th>Last name</th>
<td><input type="text"name="last_name" id="ln1" maxlength="50" title="Last name" placeholder="Enter your last name" required value="<?php echo $last_name; ?>"></td>
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
<th>Gender</th>
<td>
male<input type="radio" name="gender" value="<?php echo $gender; ?>" id="male"/>
female<input type="radio" name="gender" value="<?php echo $gender; ?>" id="female"/>
</td>
</tr>
<tr>
<th>Select your State</th>
<td>
<select name="state" value="<?php echo $state; ?>">
<option value="" selected="selected" disabled="disabled">Select your state</option>
<option value="Tamilnadu">TamilNadu</option>
<option value="Kerala">Kerala</option>
</select>
</td>
</tr>
<tr>
<th>Bank Account</th>
<td><input type="text"name="bank_details" id="b1" title="b1" placeholder="Enter the number" required value="<?php echo $bank_details; ?>"></td>
</tr>
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
