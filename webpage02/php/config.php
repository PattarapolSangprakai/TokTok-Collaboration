<?php
$hostname = "localhost";
$authname = "root";
$pass = "";
$dbname = "toktok";
session_start();
$conn = mysqli_connect($hostname, $authname, $pass, $dbname);