<?php 
    require_once("./php/config.php");
    $_SESSION = [];
    session_unset();
    session_destroy();
    header("Location: login.php");