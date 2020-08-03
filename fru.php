<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
 <script type = "text/javascript">
         <!--
            function Redirect() {
               window.location = "cart.php";
            }
         //-->
      </script>
 <script type = "text/javascript">
         <!--
            function Red() {
               window.location = "checkout.php";
            }
         //-->
      </script>
 <script>
function goBack() {
  window.history.back();
}
</script>
</head>
<body>
<button onclick="goBack()"class="button button1">Back</button>
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<h2 style="text-align:center">Products</h2>
<div class="row">
    <div class="column"> 
         <div class="card">
                   <img src="images/berry.jpg" alt="pear" style="width:40%">
                   <h1>Pear</h1>
                  <p class="price">Price: 50/ kg</p>
                  <p><button onclick="Redirect()">Add to Cart</button></p>
                 <p><button onclick="Red()">Buy</button></p>
          </div>
      </div>
 <div class="column">
   <div class="card">
      <img src="images/mango.jpg" alt="Mango" style="width:40%">
      <h1>Mango</h1>
      <p class="price">Price: 40/ kg</p>
      <p><button onclick="Redirect()">Add to Cart</button></p>
      <p><button onclick="Red()">Buy</button></p>
  </div>
 </div>

 <div class="column">
   <div class="card">
       <img src="images/papaya.jpg" alt="grape" style="width:40%">
       <h1>Papaya</h1>
       <p class="price">Price: 40/ kg</p>
       <p><button onclick="Redirect()">Add to Cart</button></p>
       <p><button onclick="Red()">Buy</button></p>
    </div>
 </div>
</div>
<div class="row">
 <div class="column">
   <div class="card">
      <img src="images/straw.jpg" alt="grape" style="width:40%">
      <h1>Strawberry</h1>
      <p class="price">Price: 60/ kg</p>
      <p><button onclick="Redirect()">Add to Cart</button></p>
     <p><button onclick="Red()">Buy</button></p>
    </div>
 </div>
 <div class="column">
    <div class="card">
        <img src="images/orange.jpg" alt="grape" style="width:40%">
        <h1>Orange</h1>
        <p class="price">Price: 40/ kg</p>
        <p><button onclick="Redirect()">Add to Cart</button></p>
       <p><button onclick="Red()">Buy</button></p>
      </div>
 </div>
 <div class="column">
   <div class="card">
       <img src="images/apple.jpg" alt="apple" style="width:40%">
       <h1>Apple</h1>
       <p class="price">Price: 50/ kg</p>
       <p><button onclick="Redirect()">Add to Cart</button></p>
       <p><button onclick="Red()">Buy</button></p>
    </div>
 </div>
</div>
<div class="row">
 <div class="column">
   <div class="card">
      <img src="images/water.jpg" alt="watermelon" style="width:40%">
      <h1>WaterMelon</h1>
      <p class="price">Price: 30/ kg</p>
     <p><button onclick="Redirect()">Add to Cart</button></p>
     <p><button onclick="Red()">Buy</button></p>
   </div>
 </div>
<div class="column">
   <div class="card">
      <img src="images/corn.jpg" alt="watermelon" style="width:40%">
      <h1>Corn</h1>
      <p class="price">Price: 30/ kg</p>
     <p><button onclick="Redirect()">Add to Cart</button></p>
    <p><button onclick="Red()">Buy</button></p>
   </div>
 </div>
<div class="column">
   <div class="card">
      <img src="images/pome.jpg" alt="watermelon" style="width:40%">
      <h1>Pomegranate</h1>
      <p class="price">Price: 30/ kg</p>
     <p><button onclick="Redirect()">Add to Cart</button></p>
     <p><button onclick="Red()">Buy</button></p>
   </div>
 </div>
</div>
</body>
</html>
