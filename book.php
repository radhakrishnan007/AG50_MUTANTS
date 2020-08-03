<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script language="javascript" type="text/javascript">
	function include()
	{
		window.location="notify.php"
	}
</script>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="#" id="about">About me</a>
  <a href="product.php" id="product">My Products</a>
  <a href="ware.php" id="warehouse">Warehouse</a>
  <a href="order.php" id="order">My Orders</a>
</div>
<div style="margin-left:80px;">
<form method="post" action="">
<table align="center" width="300" >
<div class="container">
<tr>
<th>Kg</th>
<td><input type="text"name="kg" id="kg" maxlength="40" title="Kg" placeholder="Enter the kg" required></td>
</tr>
<tr><td colspan="2" align="center"><input type="submit" value="Submit" class="button" onclick="include()" />
<input type='reset' value="Reset" class="button"/></td></tr>    
</table>
</form>
</div>
</body>
</html>