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
        				<h5 class="user-name"><?php echo $row["First_Name"] ."".$row["Last_Name"]?></h5>
        				<h6 class="user-email"><?php echo $row["Email"]?></h6>
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
        			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        				<div class="form-group">
        					<label for="Street">Street</label>
        					<input type="name" class="form-control" id="Street" placeholder="Enter Street">
        				</div>
        			</div>
        			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        				<div class="form-group">
        					<label for="ciTy">City</label>
        					<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
        				</div>
        			</div>
        			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        				<div class="form-group">
        					<label for="sTate">State</label>
        					<input type="text" class="form-control" id="sTate" placeholder="Enter State">
        				</div>
        			</div>
        			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        				<div class="form-group">
        					<label for="zIp">Zip Code</label>
        					<input type="text" class="form-control" id="zIp" placeholder="Zip Code">
        				</div>
        			</div>
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