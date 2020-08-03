<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("veg4.jpg");
  
  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header,h1 {
overflow: hidden;
  background-color: #333;
  text-align: center;
  color: red;
}
button {
  border: none;
  color: black;
  padding: 15px 32px;
  text-align:left;
  text-decoration: none;
  display: block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {background-color: #4CAF50;}
/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
	     list-style-type: none;
         width: 30%; 
         font-size:40px;
         clear: both; 
         display: block;
  
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
a:link, a:visited {
  background-color: white;
  color: black;
    border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display:block;
}
a:hover, a:active {
  background-color: green;
}
</style>
 <script>
function goBack() {
  window.history.back();
}
</script>
</head>
<body>
<div class="bg">
<div class="topnav">
<header><h1>Manage Products</h1></header>
<button onclick="goBack()"class="button button1">Back</button>
</div>
​<section>
  <nav>
    <ul>
      <li><a href="pulses.php">oil</a></li>
	  &nbsp
     <li><a href="vege.php">vegetables</a></li>
	 &nbsp
      <li><a href="fruit.php">fruits</a></li>
	  &nbsp
    </ul>
  </nav>

 ​</section>
</div>
</body>
</html>