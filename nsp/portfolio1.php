<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/portfolio.css">  
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
	background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("../background10.jpg");
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
        padding:50px;
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
		width: 
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

.filter{
	position: absolute;
	left: 0;
	top: 0;
	bottom: 0;
	right: 0;
	z-index: 1;
	background: rgb(233,76,161);
   background: -moz-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
   background: -webkit-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
   background: linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
   filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e94ca1",endColorstr="#c74ae9",GradientType=1);
   opacity: .7;
   }
   table{
	position: absolute;
	z-index: 2;
	left: 50%;
	top: 50%;
	transform: translate(-50%,-50%);
	width: 60%; 
	border-collapse: collapse;
	border-spacing: 0;
	box-shadow: 0 2px 15px rgba(64,64,64,.7);
	border-radius: 12px 12px 0 0;
	overflow: hidden;
   
   }
   td , th{
	padding: 15px 20px;
	text-align: center;
	
   
   }
   th{
	background-color: #ba68c8;
	color: #fafafa;
	font-family: 'Open Sans',Sans-serif;
	font-weight: 200;
	text-transform: uppercase;
   
   }
   tr{
	width: 100%;
	background-color: #fafafa;
	font-family: 'Montserrat', sans-serif;
   }
   tr:nth-child(even){
	background-color: #eeeeee;
   }
   tr: hover{
   background-color:#ffff99;
   color:purple;
</style>

</head>
<body>
    <header> 
    <div class="wrapper">
         
<ul class="nav-area">
<li><a href="../ideal-portfolio.php/">Ideal Portfolio</a></li>
<li><a href="../pie page.php/">Stock Distribution Chart</a></li>
</ul>
</div>
<table >
<tr>
   
     <th>#</th>

     <th>Stock_Name</th>
   
     <th>Date_Bought</th>
   
     <th>Amount</th>
   
     <th>Price </th>
   
     <th>Current_Price </th>
   
    </tr>
 

    
   
    <tr>
   
     <td>1</td>
   
     <td>Meta Platforms Inc</td>
   
     <td>18 Nov 2020</td>
   
     <td>670$</td>
   
     <td>20$</td>
   
     <td>40$</td>
   
    </tr>
   
    <tr>
   
     <td>2</td>
   
     <td>Alphabet Inc Class A</td>
   
     <td>18 Nov 2020</td>
   
     <td>1330$</td>
   
     <td>20$</td>
   
     <td>30$</td>
   
    </tr>
   
    <tr>
   
     <td>3</td>
   
     <td>Microsoft Corp. (MSFT)</td>
   
     <td>19 Nov 2020</td>
   
     <td>1330$</td>
   
     <td>50$</td>
   
     <td>55$</td>
   
    </tr>
   
    <tr>
   
     <td>4</td>
   
     <td>Amazon.com Inc. (AMZN)</td>
   
     <td>18 Nov 2020</td>
   
     <td>1330$</td>
   
     <td>90$</td>
   
     <td>100$</td>
   
    </tr>
   
    <tr>
   
     <td>5</td>
   
     <td>Tesla Inc. (TSLA)</td>
   
     <td>18 Nov 2020</td>
   
     <td>2670$</td>
   
     <td>50$</td>
   
     <td>600$</td>
   
    </tr>
   
    <tr>
   
     <td>6</td>
   
     <td>Apple Inc. (AAPL)</td>
   
     <td>28 Nov 2020</td>
   
     <td>2670$</td>
   
     <td>100$</td>
   
     <td>150$</td>
    </tr>
	
    
   
    </table>
</header>

</body>
</html>
