<?php 
     require_once("./php/config.php");
     if(!empty($_SESSION["id_ses"])){
        $id = $_SESSION["id_ses"];
        $result = mysqli_query($conn,"SELECT * FROM site_user where User_ID = $id");
        $row = mysqli_fetch_assoc($result);
    }
    else{
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokTok Watch</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/profile.css">
    <link rel="stylesheet" href="CSS/table.css">
    <link rel="icon" href="">
    <script src="https://kit.fontawesome.com/8633768cc1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once("./php/header.php"); ?>
    <section class="container" style="padding: 100px 10px;">
        <div class="container">
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
        	<div class="card-body">
        		<div class="account-settings">
        			<div class="user-profile">
        				<div class="user-avatar">
        					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
        				</div>
        				<h5 class="user-name"><?php echo $row["First_Name"] ." ".$row["Last_Name"]?></h5>
        				<h6 class="user-email"><?php echo $row["Email"]?></h6>
        			</div>
                    <div class="about">
                        <h3>Manage My account</h3><br>
                        <h6>Address Book</h6><br>
                        <h6>My Order</h6>
			        </div>
                    <div class="about">
                        <a href="./logout.php" class="btn btn-warning btn-lg" role="button" style="margin-top:5px; align:center;">Logout</a>
			        </div>
        		</div>
        	</div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
        	<div class="card-body">
        		<div class="row gutters">
        			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        				<h6 class="mb-2 text-primary">Personal Details</h6>
        			</div>
        			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        				<div class="form-group">
        					<label for="fullName">First Name</label>
        					<input type="text" class="form-control" id="fullName" placeholder="Enter first name" value="<?php echo $row["First_Name"]?>">
        				</div>
        			</div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        				<div class="form-group">
        					<label for="fullName">Last Name</label>
        					<input type="text" class="form-control" id="fullName" placeholder="Enter last name" value="<?php echo $row["Last_Name"]?>">
        				</div>
        			</div>
        			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        				<div class="form-group">
        					<label for="eMail">Email</label>
        					<input type="email" class="form-control" id="eMail" placeholder="Enter email ID" value="<?php echo $row["Email"]?>">
        				</div>
        			</div>
        		
        		</div>

            
        		<div class="row gutters">
        			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        				<h6 class="mt-3 mb-2 text-primary">Address</h6>
        			</div>
                    <?php 
                        $addressque = "SELECT * FROM address where AUser_ID = $id";
                        $addresult = $conn->query($addressque);
                        if($addresult){
                            while($row=$addresult->fetch_array())
                            {
                    ?>
                                  <div id="div_content" class="usergroup">
                                        <table>
                                            <col width="20%">
                                            <col width="20%">
                                            <col width="20%">
                                            <col width="20%">
                                            <col width="15%">
                                            <col width="15%">

                                            <tr>
                                            <th>Name</th> 
                                            <th>PhoneNum</th>
                                            <th>Addres</th>
                                            <th>District</th>
                                            <th>Subdistrict</th>
                                            <th>PostCode</th>
                                            <th>Edit</th>
                                            <th>Del</th>
                                            </tr>
                                            <tr>
                                            <td><?php echo $row["Address_name"];?></td>
                                            <td><?php echo $row["Address_PhoneNum"];?></td>
                                            <td><?php echo $row["Address"];?></td>
                                            <td><?php echo $row["District"];?></td>
                                            <td><?php echo $row["Subdistrict"];?></td>
                                            <td><?php echo $row["PostCode"];?></td>
                                            <td><a href="delete_user.php?email='. $row['email']. '"><img src="https://cdn-icons-png.flaticon.com/512/32/32355.png" width="30" height="30"></td>
                                            <td><a href="delete_user.php?email='. $row['email']. '"><img src="https://cdn-icons-png.flaticon.com/512/3389/3389152.png" width="30" height="30"></td>
                                            </tr>
                                         </table>
                    
                    <?php
                            }
                        } 
                    ?>
        		</div>
        		<div class="row gutters">
        			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        				<div class="text-right">
        					<button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
        					<button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
        				</div>
        			</div>
        		</div>

    	</div>
     </section>
</body>
</html>