<html>
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
</head>
<body>
<h1> Recent Entries</h1>
<div class="row">
 <div class="column">
   <div class="card">
      <img src="images/black.jpg" alt="grape" style="width:40%">
      <h1>Black Jasmine Rice</h1>
      <p class="price">Price: 50/ kg</p>
      <p><button>Add to Cart</button></p>
    </div>
 </div>
 <div class="column">
    <div class="card">
        <img src="images/beet.jpg" alt="grape" style="width:40%">
        <h1>Beetroot</h1>
        <p class="price">Price: 30/ kg</p>
        <p><button>Add to Cart</button></p>
      </div>
 </div>
 <div class="column">
   <div class="card">
       <img src="images/couscous.jpg" alt="apple" style="width:40%">
       <h1>Couscous</h1>
       <p class="price">Price: 30/ kg</p>
       <p><button>Add to Cart</button></p>
    </div>
 </div>
</div>
</body>
</html> 