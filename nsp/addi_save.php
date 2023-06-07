<?php
//error_reporting(0);
$mobile = $_POST["mobile"];
$aadhar = $_POST["aadhar"];
$pan = $_POST["pan"]; 
$dob = $_POST["dob"]; 
$prof = $_POST["prof"]; 
$income = $_POST["income"]; 
$conn = mysqli_connect("localhost", "root", "", "nsp") or die("connection failed");
$sql = "INSERT INTO add_info(mobile, aadhar, pan,dob, prof, income) VALUES ('{$mobile}','{$aadhar}', '{$pan}','{$dob}', '{$prof}','{$income}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
echo"entries updated successfully";
mysqli_close($conn);
?>