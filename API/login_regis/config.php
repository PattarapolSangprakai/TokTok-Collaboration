<?php
$hostname = "localhost";
$authname = "root";
$pass = "";
$dbname = "relog";
session_start();
$conn = mysqli_connect($hostname, $authname, $pass, $dbname);