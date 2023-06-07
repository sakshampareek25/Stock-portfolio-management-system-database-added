  <?php
//error_reporting(0);
$uname = $_POST["uname"];
$email = $_POST["email"];
$review = $_POST["review"]; 
$conn = mysqli_connect("localhost", "root", "", "nsp") or die("connection failed");
$sql = "INSERT INTO  feedback(username, email, review) VALUES('{$uname}','{$email}', '{$review}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");

mysqli_close($conn);
?>