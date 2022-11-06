<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="./CSS/cart.css">
    <link rel="stylesheet" type="text/css" href="./CSS/main.css">
	<script src="https://kit.fontawesome.com/5fb47ecfb8.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php require_once("./php/header.php");?>
    <main>
    <section class="content">
    <div class="container">
    <h1>My Shopping Cart</h1>
    <div class="cart">
        <div class="products">
            <div class="product">
                <img src="https://images.pexels.com/photos/1120275/pexels-photo-1120275.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                <div class="product-info">
                    <h3 class="product-name">watch 1</h3>
                    <h2 class="product-price">1000$</h2>
                    <p class="product-quality">Qnt: <input value="1" name="">
                    <p class="product-remove">
                        <i class="fa-regular fa-trash"></i>
                        <span class="remove">Remove</span>
                    </p>   
                </div>
            </div>

            <div class="product">
                <img src="https://images.pexels.com/photos/9878687/pexels-photo-9878687.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                <div class="product-info">
                    <h3 class="product-name">watch 2</h3>
                    <h2 class="product-price">1000$</h2>
                    <p class="product-quality">Qnt: <input value="1" name="">
                    <p class="product-remove">
                        <i class="fa-regular fa-trash"></i>
                        <span class="remove">Remove</span>
                    </p>   
                </div>
            </div>
        </div>

        <div class="cart-total">
           <p>
                <span>Total Price</span>
                <span>3000$</span>
           </p>
            <p>
                <span>Number of Items</span>
                <span>2</span>
           </p>
           <p>
            <span>You save</span>
            <span>3000$</span>
           </p>
           <a href="">Proceed to checkout</a>
        </div>
    </div>
   </div> 
    </section>
    </main>
   
</body>
</html>