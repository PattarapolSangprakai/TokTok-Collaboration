<?php 
   require_once("./php/config.php");

   if(isset($_POST["add_to_cart"])){
        if(isset($_SESSION["shopping_cart"]))
        {
            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
            if(!in_array($_GET["Product_ID"], $item_array_id))
            {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'item_id' => $_GET["id"],
                    'item_name' => $_GET["hidden_name"],
                    'item_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                    'item_img' => $_POST["hidden_img"]
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
            }
            else
            {
                echo '<script>alert("Item Alrady Added!!")</script>';
                echo '<script>window.location="product.php"</script>';
            }
            
        }

        else
        {
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_GET["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
                'item_img' => $_POST["hidden_img"]
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="icon" href="">
    <script src="https://kit.fontawesome.com/8633768cc1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
       <?php require_once("./php/header.php"); ?>
       <main style="padding-top: 100px">
       <br />  
           <div class="container" style="width: 700px;">  
                <br />  
                <?php 
                    $query = "SELECT * FROM product ORDER BY Product_ID ASC";
                    $result = mysqli_query($conn, $query);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result))
                        {
                    ?>
                    <div class="col-md-3" style="padding: 20px; border: top 20px;">
                        <form method = "post" action="product.php?action=add&id=<?php echo $row["Product_ID"];?>">
                            <img src="<?php echo $row["Product_img"]; ?>" alt="" class="img-responsive"></br>
                            <h4 class="text-info"><?php echo $row["Name"]; ?></h4>
                            <h4 class="text-danger"><?php echo $row["Price"];?>฿</h4>
                            <input type="text" name="quantity" class="form-control" value="1"/>
                            <input type="hidden" name="hidden_name" value="<?php echo $row["Name"];?>"/>
                            <input type="hidden" name="hidden_price" value="<?php echo $row["Price"];?>"/>
                            <input type="hidden" name="hidden_img" value="<?php echo $row["Product_img"];?>"/>
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                            </div>
                        </form>       
                    <?php         
                            
                        }
                    }
                    ?>
            </div>
            <br />
    </main>
</body>
</html>