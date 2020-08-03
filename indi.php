<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="css/styles.css">
<script type = "text/javascript">
            function Redirect() {
               window.location = "register.php";
            }
</script> 
<script type = "text/javascript">
            function Red() {
               window.location = "index1.php";
            }
</script> 
</head>
<body>
<form method="post" action="">
<table align="center" width="400" >
<div class="container">
<caption><h1><b><p style="color:white;"> Buyers Login form</p></b></h1></caption>
<tr>
<th>Mobile No</th>
<td><input type="text" name="fn" id="fn1" maxlength="50" title="Username" placeholder="Enter your username" required></td>
</tr>
<tr>
<th>Password</th>
<td><input type="text"name="ln" id="ln1" maxlength="50" title="Last name" placeholder="Enter your password" required></td>
</tr>
<tr><a href="index1.php"><td colspan="2" align="center"><input type="submit" value="Login" class="button" onclick="Red()" />
<input type='button' value="Create Account" class="button" onclick="Redirect()"/></td></tr>    
<tr><td><input type="checkbox"> Remember me</td>
<td><a href='forgot.html'>Forgot password?</a></td></tr>
</table>
</form>
</body>
</html>
