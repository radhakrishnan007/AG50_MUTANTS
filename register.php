<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="css/styles.css">
<script type = "text/javascript">
            function Redirect() {
               window.location = home.php";
			   document.getElementById("fn1").innerHTML;			   
            }
</script> 
</head>
<body>
<form method="post" action="profile.html">
<table align="center" width="400" >
<div class="container">
<caption><h1><b>Registration form</b></h1></caption>
<tr>
<th>First name</th>
<td><input type="text" name="fn" id="fn1" maxlength="50" title="First name" placeholder="Enter your first name" required></td>
</tr>
<tr>
<th>Last name</th>
<td><input type="text"name="ln" id="ln1" maxlength="50" title="Last name" placeholder="Enter your last name" required></td>
</tr>
<tr>
<th>Password</th>
<td><input type="password"name="ps" id="ps1" maxlength="50" title="Password" placeholder="Enter your password" required></td>
</tr>
<tr>
<th>Confirm your password</th>
<td><input type="password"name="pss" id="pss1" maxlength="50" title="Password1" placeholder="Re-enter your password" required></td>
</tr>
<tr>
<th>Email</th>
<td><input type="email"name="em" id="em1" maxlength="50" title="Email" placeholder="Enter your email" required></td>
</tr>
<tr>
<th>Mobile no</th>
<td><input type="number"name="phno" id="phno1" maxlength="50" title="Phno" placeholder="Enter your mobile no" required></td>
</tr>
<tr>
<th>Address</th>
<td><textarea rows="8" cols="20" name="add" id="add" title="First name" placeholder="Enter your address" required></textarea></td>
</tr>
<tr>
<th>Gender</th>
<td>
male<input type="radio" name="g" value="m" id="male"/>
female<input type="radio" name="g" value="f" id="female"/>
</td>
</tr>
<tr>
<th>Select your State</th>
<td>
<select name="country">
<option value="" selected="selected" disabled="disabled">Select your country</option>
<option value="1">TamilNadu</option>
<option value="2">Keralas</option>
</select>
</td>
</tr>
<tr>
<th>Bank Account</th>
<td><input type="text"name="txt" id="b1" maxlength="50" title="b1" placeholder="Enter the number" required></td>
</tr>
<tr>
<th>Upload your pic</th>
<td><input type="file"/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Register" class="button" onclick="Redirect()"/>
<input type="reset" value="Reset" class="button"/>
</td>
</tr>
</table>
</form>
</body>
</html>
