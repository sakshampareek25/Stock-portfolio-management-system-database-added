<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
     
    <style>

*{
    padding: 0px ;
    margin: 0px;
    font-family:sans-serif ;
}

body{
   background-image: url("../image5.jpg");
    background-size: cover;
    text-align: center;
}

.contact-form{
    margin-top: 100px;
    color:#26d7ab ;
    text-transform: uppercase;
    transition: all 4s ease-in-out;
}

.contact-form h1{
    font-size: 32px;
}


form{
    margin-top: 50px;
    transition: all 4s ease-in-out ;
}

.form-control{
    width: 400px;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid gray;
    color: #fff;
    font-size: 18px;
    margin-bottom: 18px;
}


input{
    height: 45px;
}

form .submit{
    background:linear-gradient(to right, #26d7ab , #5b86e5);
    border: transparent;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 2px;
    height: 50px;
    margin-top: 20px;
    border-radius:20px;
}

form .submit:hover{
    background:linear-gradient(to left, #26d7ab , #5b86e5);
    cursor: pointer;
}


        </style>
</head>
<body>
    <div class="contact-form">
        <h1>Feedback form</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="uname"   class="form-control" placeholder="Enter Username"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
            <input type="text" name="review"  class="form-control" placeholder="Review"> <br>
           <input type="submit" class="form-control submit" value="submit" >
       </form>
    </div>

    <?php
error_reporting(0);
$uname = $_POST["uname"];
$email = $_POST["email"];
$review = $_POST["review"]; 
$conn = mysqli_connect("localhost", "root", "", "nsp") or die("connection failed");
$sql = "INSERT INTO  feedback(username, email, review) VALUES('{$uname}','{$email}', '{$review}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");

mysqli_close($conn);
?>
</body>
</html>