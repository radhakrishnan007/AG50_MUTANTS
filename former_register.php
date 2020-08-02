












    
    
    
    
        
        
            
            
            
                
                        
                    $address = trim($_POST["address"]);
                    $bank_details = trim($_POST["bank_details"]);
                    $email = trim($_POST["email"]);
                    $first_name=trim($_POST["first_name"]);
                    $gender = trim($_POST["gender"]);
                    $last_name = trim($_POST["last_name"]);
                    $profile_picture = trim($_POST["profile_picture"]);
                    $state = trim($_POST["state"]);
                    $username = trim($_POST["mobile_no"]);
                    $username_err = "This username is already taken.";
                /* store result */
                // Redirect to login page
                echo "Oops! Something went wrong. Please try again later.";
                echo "Something went wrong. Please try again later.";
                header("location: index.php");
                if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_store_result($stmt);
                }
                } else{
               document.getElementById("fn1").innerHTML;               
               window.location = "main.html";
            $confirm_password_err = "Password did not match.";
            $param_address = $address;
            $param_bank_details = $bank_details;
            $param_email = $email;
            $param_first_name = $first_name;
            $param_gender = $gender;
            $param_last_name = $last_name;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_profile_picture = $profile_picture;
            $param_state = $state;
            $param_username = $username;
            $param_username = trim($_POST["mobile_no"]);
            // $param_address = trim($_POST["address"]);
            // $param_bank_details = trim($_POST["bank_details"]);
            // $param_email = trim($_POST["email"]);
            // $param_first_name = trim($_POST["first_name"]);
            // $param_gender = trim($_POST["gender"]);
            // $param_last_name = trim($_POST["last_name"]);
            // $param_profile_picture = trim($_POST["profile_picture"]);
            // $param_state = trim($_POST["state"]);
            // Attempt to execute the prepared statement
            // Attempt to execute the prepared statement
            // Bind variables to the prepared statement as parameters
            // Bind variables to the prepared statement as parameters
            // Close statement
            // Close statement
            // die;
            // echo $param_address."<br>";
            // echo $param_bank_details."<br>";
            // echo $param_email."<br>";
            // echo $param_first_name."<br>";
            // echo $param_gender."<br>";
            // echo $param_last_name."<br>";
            // echo $param_password."<br>";
            // echo $param_profile_picture."<br>";
            // echo $param_state."<br>";
            // echo $param_username."<br>";
            // echo print_r($stmt);
            // Set parameters
            // Set parameters
            //mysqli_stmt_bind_param($stmt1, "sss", $param_first_name,$param_last_name,$param_password);
            function Redirect() {
            if(mysqli_stmt_execute($stmt)){
            if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            mysqli_stmt_bind_param($stmt, "ssssssssss", $param_first_name,$param_last_name,$param_password,$param_email,$param_username,$param_address,$param_gender,$param_state,$param_bank_details,$param_profile_picture);
            mysqli_stmt_close($stmt);
            mysqli_stmt_close($stmt);
            }
            }
            }
            } else{
            } else{
         //$sql1 = "INSERT INTO smfr_former_registration(first_name,last_name,login_password)VALUES(?,?,?)";
         VALUES (?,?,?,?,?,?,?,?,?,?)";
        $confirm_password = trim($_POST["confirm_password"]);
        $confirm_password_err = "Please confirm password.";     
        $password = trim($_POST["password"]);
        $password_err = "Password must have atleast 6 characters.";
        $password_err = "Please enter a password.";     
        $sql = "INSERT INTO smfr_former_registration 
        $sql = "SELECT registration_id FROM smfr_former_registration WHERE mobile_no = ?";
        $username_err = "Please enter a mobile number.";
        (first_name,last_name,login_password,email,mobile_no,address,gender,state,bank_details,profile_picture) 
        // die;
        // echo "Insert statement";
        // Prepare a select statement
        // Prepare an insert statement
        if($stmt = mysqli_prepare($link, $sql)){
        if($stmt = mysqli_prepare($link, $sql)){
        if(empty($password_err) && ($password != $confirm_password)){
        }
        }
        }
    // Check input errors before inserting in database
    // Close connection
    // Validate confirm password
    // Validate password
    // Validate username
    <input type="reset" class="btn btn-default" value="Reset">
    <input type="submit" class="btn btn-primary" value="Register">
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
    if(empty(trim($_POST["confirm_password"]))){
    if(empty(trim($_POST["mobile_no"]))){
    if(empty(trim($_POST["password"]))){
    mysqli_close($link);
    }
    }
    }
    }
    } elseif(strlen(trim($_POST["password"])) < 6){
    } else{
    } else{
    } else{
$username = $password = $confirm_password = $first_name= $last_name= $email= $address= $gender= $state= $bank_details= $profile_picture="";
$username_err = $password_err = $confirm_password_err = "";
// Define variables and initialize with empty values
// Include config file
// Processing form data when form is submitted
</body>
</div>
</form>
</head>
</html>
</script> 
</select>
</table>
</td>
</td>
</td>
</td>
</td>
</td>
</tr>
</tr>
</tr>
</tr>
</tr>
</tr>
</tr>
</tr>
</tr>
</tr>
</tr>
</tr>
<?php
<body>
<caption><h1><b>Registration form</b></h1></caption>
<div class="container">
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
<div class="form-group">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<head>
<html>
<link rel="stylesheet" href="css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">  
<option value="" selected="selected" disabled="disabled">Select your state</option>
<option value="Kerala">Kerala</option>
<option value="Tamilnadu">TamilNadu</option>
<script type = "text/javascript">
<select name="state" value="<?php echo $state; ?>">
<span class="help-block"><?php echo $confirm_password_err; ?></span>
<span class="help-block"><?php echo $password_err; ?></span>
<span class="help-block"><?php echo $username_err; ?>
<table align="center" width="400" >
<td colspan="2" align="center">
<td>
<td>
<td><input type="email"name="email" id="em1" maxlength="50" title="Email" placeholder="Enter your email" required value="<?php echo $email; ?>"></td>
<td><input type="file" name="profile_picture" /></td>
<td><input type="number"name="mobile_no" id="phno1" maxlength="50" title="Phno" placeholder="Enter your mobile no" required value="<?php echo $username; ?>">
<td><input type="password"name="confirm_password" id="pss1" maxlength="50" title="Password1" placeholder="Re-enter your password" required value="<?php echo $confirm_password; ?>">
<td><input type="password"name="password" id="ps1" maxlength="50" title="Password" placeholder="Enter your password" required value="<?php echo $password; ?>">
<td><input type="text" name="first_name" id="fn1" maxlength="50" title="First name" placeholder="Enter your first name" required value="<?php echo $first_name; ?>"></td>
<td><input type="text"name="bank_details" id="b1" title="b1" placeholder="Enter the number" required value="<?php echo $bank_details; ?>"></td>
<td><input type="text"name="last_name" id="ln1" maxlength="50" title="Last name" placeholder="Enter your last name" required value="<?php echo $last_name; ?>"></td>
<td><textarea rows="8" cols="20" name="address" id="add" title="First name" placeholder="Enter your address" required><?php echo $address; ?></textarea></td>
<th>Address</th>
<th>Bank Account</th>
<th>Confirm your password</th>
<th>Email</th>
<th>First name</th>
<th>Gender</th>
<th>Last name</th>
<th>Mobile no</th>
<th>Password</th>
<th>Select your State</th>
<th>Upload your pic</th>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
?>
female<input type="radio" name="gender" value="<?php echo $gender; ?>" id="female"/>
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
male<input type="radio" name="gender" value="<?php echo $gender; ?>" id="male"/>
require_once "db/config.php";
}