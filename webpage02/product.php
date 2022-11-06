<?php 
    require_once("./php/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <br />
    <div class="col-md-4">
                    <?php 
                        $query = "SELECT * FROM product ORDER BY Product_ID ASC";
                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_array($result))
                            {
                        ?> 
                        <form method = "post" action="index.php?action=add&id=<?php echo $row["Product_id"];?>">
                            <img src="<?php echo $row["Product_img"]; ?>" alt="" class="img-responsive"> /></br>
                            <h4 class="text-info"><?php echo $row["Name"]; ?></h4>
                            <h4 class="text-danger">$ <?php echo $row["Price"];?></h4>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row["Name"];?>"/>
                            <input type="hidden" name="hidden_price" value="<?php echo $row["Price"];?>"/>
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                            </div>
                        </form> 
                        <?php
                            }
                        }
                    ?> 
                
    </div>  
</body>
</html>