<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Your Profile</title>
	<link href="CSS/profile.css" rel="stylesheet">
<style>
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	outline: none;
	border: none;
	font-family: 'Poppins', sans-serif;
}
body {
	background: #000;
}
.wrapper {
	width: 1152px;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	margin: 0 auto;
	position: relative;
}

.box {
	width: 350px;
	height: 450px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	background: #ffffff1a;
	backdrop-filter: blur(20px);
	padding: 1.5em;
	border-radius: 25px;
	border: 2px solid #ffffff30;
	box-shadow: 0 0 30px #fff;
	text-align: center;
}
.box h2 {
	color: #ffffff60;
	text-transform: capitalize;
	margin: 15px 0;
}
.box h2 span {
	display: block;
	font-size: 15px;
	font-weight: 300;
	text-transform: capitalize;
}
.box p {
	color: #ffffff90;
	font-size: 14px;
}
.btn-area a {
	text-decoration: none;
	color: #262626;
	background: rgba(255, 255, 255, 0.6);
	display: inline-block;
	padding: 8px 15px;
	margin: 15px 5px;
	border: 2px solid rgba(255, 255, 255, 0.6);
}
.btn-area a.ex {
	background: transparent;
	color: #fff;
}
.socials {
	margin-top: 20px;
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
}
.socials div {
	width: 40px;
	height: 40px;
	border-radius: 50%;
	line-height: 45px;
	color: #fff;
	margin: 0 5px;
}
.socials div.a1 {
	background: #3b5998;
}
.socials div.a2 {
	background: #55acee;
}
.socials div.a3 {
	background: #bd081c;
}
.socials div.a4 {
	background: #dc4e41;
}
.socials i {
	font-size: 20px;
}
.profile-img {
	width: 120px;
	height: 120px;
	border-radius: 50%;
	overflow: hidden;
	object-fit: cover;
}
.profile-img img {
	width: 100%;
}


</style>
</head>
<body>
	<div class="round-1"></div>
	<div class="round-2"></div>
	<div class="wrapper">
		<div class="box">
			<div class="profile-img"><img src="../pfp.png"></div>
			<h2>Saksham Pareek <span>CSE,PIET</span></h2>
			<p>Intermediate<br>
			</p>
			<p class="btn-area"><a href="login-page.html">Logout</a> <a class="ex" href="Additional-info.html">Edit Details</a></p>
			<div class="socials">
				<div class="a1">
					<i class="fa fa-facebook"></i>
				</div>
				<div class="a2">
					<i class="fa fa-twitter"></i>
				</div>
				<div class="a3">
					<i class="fa fa-pinterest"></i>
				</div>
				<div class="a4">
					<i class="fa fa-google-plus"></i>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
