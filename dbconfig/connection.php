<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baagd_2018_project";

$conn = mysqli_connect ($servername, $username, $password, $dbname) or die("error due to :".mysqli_connect_error($conn));
?>