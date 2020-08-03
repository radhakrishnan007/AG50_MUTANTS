<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: farmer_profile.php");
    exit;
}
 
// Include config file
require_once "db/config.php";
//Define variables and initialize with empty values
$username = $password = $first_name= $last_name=$area="";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT registration_id,mobile_no,first_name,last_name,area,login_password FROM smfr_former_registration WHERE mobile_no = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            $param_first_name=$first_name;
            $param_last_name=$last_name;
            $param_area=$area;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $registration_id, $username, $first_name,$last_name,$area,$hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $registration_id;
                            $_SESSION["username"] = $username; 
                            $_SESSION["firstname"]=$first_name; 
                            $_SESSION["lastname"]=$last_name; 
                            $_SESSION["area"]=$area;                         
                            
                            // Redirect user to welcome page
                            header("location: farmer_profile.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
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
<head><meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="css/styles.css">
<script type = "text/javascript">
            function Redirect() {
               window.location = "farmer_register.php";
            }
</script> 
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<table align="center" width="400" >
<div class="container">
<caption><h1><b> <p style="color:white;">Farmer Login form</p></b></h1></caption>
<tr>
<th>Mobile No</th>
<td>
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>"></div>
<input type="text" name="username" id="fn1" maxlength="50" title="Username" placeholder="Enter your username" required value="<?php echo $username_err; ?>">
<span class="help-block"><?php echo $username_err; ?></span>
</td>
</tr>
<tr>
<th>Password</th>
<td>
<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">	
<input type="password"name="password" id="ln1" maxlength="50" title="Password" placeholder="Enter your password" required>
<span class="help-block"><?php echo $password_err; ?></span>
</td>
</tr>
<tr><a href="main.html"><td colspan="2" align="center">
	<div class="form-group">
        <input type="submit" class="btn btn-primary" value="Login">
    </div>
<input type='button' value="Create Account" class="button" onclick="Redirect()"/></td></tr>    
<tr><td><input type="checkbox"> Remember me</td>
<td><a href='forgot.html'>Forgot password?</a></td></tr>
</table>
</form>
</body>
</html>