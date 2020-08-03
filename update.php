<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styles.css">
<script language="javascript" type="text/javascript" src="asd.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
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
	<div id="google_translate_element" style="float: right; margin-right: 25px;"></div>
<tr>
<th>Rate</th>
<td><input type="text" name="kg" id="kg" maxlength="40" title="rate" placeholder="Enter the rate" required></td>
</tr>
<tr>
<th>Kg</th>
<td><input type="text"name="kg" id="kg" maxlength="40" title="Kg" placeholder="Enter the kg" required></td>
</tr>
<tr><td colspan="2" align="center"><input type="submit" value="Submit" class="button" />
<input type='reset' value="Reset" class="button"/></td></tr>    
</table>
</form>
</div>
</body>
</html>
