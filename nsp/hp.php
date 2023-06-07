<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">  
<style>

* {
	margin: 0;
	padding: 0;
}
body {
	font-family: 'Poppins', sans-serif;
}
.wrapper {
	width: 1170px;
	margin: auto;
}
header {
	background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("../homebg.jpg");
	height: 100vh;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	position: relative;
}
.nav-area {
	float: right;
	list-style: none;
	height:100px;
}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color: #fff;
	text-decoration: none;
	padding: 0px 20px;
	font-family: poppins;
	font-size: 16px;
	text-transform: uppercase;
        
}
.nav-area li a:hover {
	background: #fff;
	color: #000;
        border-radius:7px;
}
logo{
float:left;
opacity:0.2;
flex: 1 1 auto;
margin-left:1 0%;
text-transform: uppercase;
letter-spacing: 1px;
font-weight: bold;
font-size: 35px;
} 
.logo {
	float: left;
       
}
.logo img {
	width: 20%;
       margin-top: 30px;
}
.welcome-text {
	position: absolute;
	width: 600px;
	height: 300px;
	margin: 20% 30%;
	text-align: center;
}
.welcome-text h1 {
	text-align: center;
	color: #fff;
	text-transform: uppercase;
	font-size: 60px;
}
.welcome-text h1 span {
	color: #00fecb;
}
.welcome-text a {
	border: 1px solid #fff;
	padding: 10px 25px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 14px;
	margin-top: 20px;
	display: inline-block;
	color: #fff;
}
.welcome-text a:hover {
	background: #fff;
	color: #333;
}

@media (max-width:600px) {
	.wrapper {
		width: 100%;
	}
	.logo {
		float: none;
		width: 50%;
		text-align: center;
		margin: auto;
	}
	img {
		width: ;
	}
	.nav-area {
		float: none;
		margin-top: 0;
	}
	.nav-area li a {
		padding: 5px;
		font-size: 11px;
	}
	.nav-area {
		text-align: center;
	}
	.welcome-text {
		width: 100%;
		height: auto;
		margin: 30% 0;
	}
	.welcome-text h1 {
		font-size: 30px;
	}
}

</style>

</head>
<body>
    <header> 
    <div class="wrapper">
         <div class="logo">
           <img src="../logo1.png" alt="">
        </div> 
<ul class="nav-area">
<li><a href="../tos.php/">Terms of Service</a></li>
<li><a href="../About.php/">About</a></li>
<li><a href="../Additional-info.php/">Complete Profile</a></li>
<li><a href="../portfolio1.php/">Portfolio</a></li>
<li><a href="../feedback.php/">Feedback</a></li>
<li><a href="../profile.php/">Your Profile</a></li>
</ul>
</div>
<div class="welcome-text">
<h1>Invest in Your <span>Future</span></h1>
<a href="../login-page.php/">Log In</a>
    </div>
</header>

</body>
</html>
