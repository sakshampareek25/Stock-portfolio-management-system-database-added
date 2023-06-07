<?php
//error_reporting(0);
$uname = $_POST["username"];
$email = $_POST["email"];
$pass = $_POST["password"]; 
$conn = mysqli_connect("localhost", "root", "", "nsp") or die("connection failed");
$sql = "INSERT INTO  userlogin(username, email, password) VALUES ('{$uname}','{$email}', '{$pass}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
echo "logged in successfully";
mysqli_close($conn);
?>