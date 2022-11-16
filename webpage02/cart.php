<?php

    require_once("./php/config.php");

    if(isset($_GET["action"]))
    {
        if($_GET["action"] == "delete")
        {
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
                if($values["item_id"] == $_GET["id"])
                {
                    unset($_SESSION["shopping_cart"][$keys]);
                    $_SESSION["item_count"] -= $values["item_quantity"];
                    echo '<script>alert("Item Removed")</script>';
                    echo '<script>window.location="cart.php"</script>';
                }
            }    
        } 
    }



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


    <?php 
        $total = 0;
        $quantity = 0;
        if(!empty($_SESSION["shopping_cart"]))
        {
            
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
        ?>      
             <div class="cart">
                    <div class="products">
                        <div class="product">
                         <img src="<?php echo $values["item_img"];?>" alt="">
                            <div class="product-info">
                            <h3 class="product-name"><?php echo $values["item_name"];?></h3>
                            <h2 class="product-price"><?php echo $values["item_price"];?></h2>
                            <p class="product-quality">Qnt: <input value="<?php echo $values["item_quantity"];?>" name="">
                            <p class="product-remove">
                                <i class="fa-regular fa-trash"></i>
                                <a href="cart.php?action=delete&id=<?php echo $values['item_id']; ?>" class="remove">Remove</a>
                            </p>   
                        </div>
                </div>
    <?php
           
             $total = $total + ($values["item_quantity"] *$values["item_price"]);
             $quantity = $quantity + $values["item_quantity"];
            }
        }
    
    ?>
        <div class="cart-total">
           <p>
                <span>Total Price</span>
                <span><?php echo number_format($total, 2);?>฿</span>
           </p>
            <p>
                <span>Number of Items</span>
                <span><?php echo $_SESSION["item_count"]; ?></span>
           </p>
           <p>

           </p>
           <a href="checkout.php">Proceed to checkout</a>
        </div>
    </div>
   </div> 
    </section>
    </main>
   
</body>
</html>