<?php 
  session_start();
  require_once("./php/config.php");
  if(isset($_SESSION["shopping_cart"])){
    if(isset($_SESSION["shopping_cart"]))
    {
        $count = count($_SESSION["shopping_cart"]);
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][$count] = $item_array; 
    }
  }

?>