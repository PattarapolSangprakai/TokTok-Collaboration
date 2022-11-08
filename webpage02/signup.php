<?php 
    require_once("./php/config.php");

    if(isset($_POST["register"])){
        $firstname = $_POST["first_name"];
        $lastname = $_POST["last_name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $duplicate = mysqli_query($conn,"SELECT * FROM site_user WHERE USER_NAME = '$username' OR Email ='$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script> alert('Username or email has already taken'); </script>";
        }
        else{
            if($password == $confirmpassword){
                //$encrype = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $query = "INSERT INTO site_user VALUES('','$firstname','$lastname','$username','$email','$password')";
                mysqli_query($conn,$query);
                echo
                "<script>alert('Registration Successful');</script>";
                header("Location: index.php");
            }
            else{
                echo
                "<script>alert('Password does not match');</script>";
            }
        }
    }


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokTok Watch</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="icon" href="img/Logo copy.PNG">
    <script src="https://kit.fontawesome.com/8633768cc1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once("./php/header.php"); ?>
    <div class="pop-links" id="pop-links">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">PRODUCT</a></li>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">BLOG</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </div>
    <section class="content">
        <div id="log-text-hold" style="height: 10vh;">
            <p style="margin: 20px auto 0;">M Y - T O K T O K - SIGN UP</p>
        </div>
        <div class="log-content">
            <div class="reg-sub">
                <div class="reg-sub-inner">
                    <form action="" method="post" id="login" class="log-input-group">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" class="input-field" placeholder="First Name" required>
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" id="pwf" class="input-field" placeholder="Last Name" required>
                        <label for="">User ID</label>
                        <input type="text" name="username" id="pwf" class="input-field" placeholder="User ID" required>
                        <label for="">Email</label>
                        <input type="text" name="email" id="pwf" class="input-field" placeholder="Email" required>
                        <label for="">Password</label>
                        <input type="password" name="password" id="pwf" class="input-field" placeholder="Password" required>
                        <label for="">Confirmed Password</label>
                        <input type="password" name="confirmpassword" id="pwf" class="input-field" placeholder="Confirmed Password" required>
                
                        <button type="submit" name="register">Sign UP</button>
                    </form>
                </div>
            </div>
                
        </div>
        
        
        

    </section>

    <script>
        var pop_links = document.getElementById("pop-links");
        var navText = document.getElementById("nav_text");
        var navIcon = document.getElementById("nav_icon");
        var num = 0;
        var pw = document.getElementById("pwf");
        var cb = document.getElementById("pw-check");
        var err =document.getElementById("log-error");

        function showMenu() {
            if (num == 0){
                pop_links.style.left = "0";
                navText.innerHTML = "CLOSE";
                navIcon.className = "fa-solid fa-xmark";
                num = 1;
            }
            else {
                pop_links.style.left = "-220px";
                navText.innerHTML = "MENU";
                navIcon.className = "fa-solid fa-bars";
                num = 0;
            }
            
        }

        function password() {
                if (cb.checked == true) {
                    pw.type = "text";
                }
                else {
                    pw.type = "password";
                }
            }

        function showErr() {
            err.style.visibility = "visible";
        }

        function hideErr() {
            err.style.visibility = "hidden";
        }
            

    </script>
    
</body>
</html>