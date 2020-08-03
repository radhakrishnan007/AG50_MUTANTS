<html>
    <head>
        <title>Agri Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />

 <script type = "text/javascript">
         <!--
            function Red() {
               window.location = "checkout.php";
            }
         //-->
      </script>


</head>
<body>
<section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
                <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="images/apple.jpg" width="100" height="100">
                        <span class="cart-item-title">Apple</span>
                    </div>
                    <span class="cart-price cart-column">49.99</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="1">
                        <button class="btn btn-danger" type="button">REMOVE</button>
                    </div>
                </div>
                <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="images/onion.jpg" width="100" height="100">
                        <span class="cart-item-title">Onion</span>
                    </div>
                    <span class="cart-price cart-column">49.99</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="2">
                        <button class="btn btn-danger" type="button">REMOVE</button>
                    </div>
                </div>
            </div>
  <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="images/mango.jpg" width="100" height="100">
                        <span class="cart-item-title">Mango</span>
                    </div>
                    <span class="cart-price cart-column">39.99</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="2">
                        <button class="btn btn-danger" type="button">REMOVE</button>
                    </div>
                </div>
            </div>

  <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="images/fen.jpg" width="100" height="100">
                        <span class="cart-item-title">Fenugreek</span>
                    </div>
                    <span class="cart-price cart-column">29.99</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="2">
                        <button class="btn btn-danger" type="button">REMOVE</button>
                    </div>
                </div>
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">98.97</span>
            </div>
            <button onclick="Red()"type="button">PURCHASE</button>
        </section>
</body>
</html>