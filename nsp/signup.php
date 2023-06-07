<?php
//error_reporting(0);
$name = $_POST["name"];
$mobile = $_POST["phone"];
$uname = $_POST["uname"]; 
$pass = $_POST["pasw"]; 
$conn = mysqli_connect("localhost", "root", "", "nsp") or die("connection failed");
$sql = "INSERT INTO  signup( name ,mobile ,username, password) VALUES('{$name}','{$mobile}', '{$uname}','{$pass}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
echo"signed up successfully";
mysqli_close($conn);
?>