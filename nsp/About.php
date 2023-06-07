<html>
<head>
<title>About</title>
<link rel="stylesheet" href="CS/About-style.css">
<style>
body{
margin:0;
padding:0;
font-family:Poppins;
}
.navbar{
postion: fixed;
display: flex;
justify-content: center;
align-items: center;
flex-direction: row;
flex-wrap: wrap;
background-color: #000000;
width: 100%;
height: 70px;
z-index: 1;
}
.nav{
display:flex;
justify-content:right;
list-style:none;
margin-right:15%;

}
.logo{
flex: 1 1 auto;
margin-left:1 0%;
text-transform: uppercase;
letter-spacing: 1px;
font-weight: bold;
font-size: 35px;
} 
a{
margin: 15px;
color:#000;
text-decoration:none;
text-transform:uppercase;
color:#fff;
}
a:hover{
color:#ff4545;
}
.banner-area{
position:relative;
background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url("../bull.jpg");
width:100%;
height:120vh;
background-repeat:no-repeat;
-webkit-background-size:cover;
background-size:cover;  
}

.about-area, .port-area, .service-area, .contact-area{
position:relative;
display:flex;
justify-content:space-around;
align-items:left;
align-text:left;
flex-wrap:wrap;
flex-directions:row;
width:100%;
height:700px;
} 

.text-part{
font-size:50px;
font-family: Audiowide;
}
p{
font-size:24px;
line-height:50px;
}
.about-area, .service-area{
background:#fefefe;
}
.port-area, .contact-area{
background:#262626;
color:#fff;
}
html{
scroll-behavior:smooth;
}
</style>
</head>
<body link="white" vlink="white">
<div class="navbar">
<a href="../hp.php/" class="logo">Stockaholic</a>
<ul class="nav">
<li><a href="hp.html"></a></li>
<li><a href="#about">About</a></li>
<li><a href="#portfolio">Our Mission</a></li>
<li><a href="#services">Why Us</a></li>
<li><a href="#contact">Contacts</a></li>
</ul>
</div>
<div class="banner-area" id="home">

</div>
<div class="about-area" id="about">
<div class="text-part">
<h1>About</h1> 
<p>Stockaholic is a stock portfolio management system in which you can link your account<br> 
and sync it with your Stock exchange service and you can check a lot of data about your portfolio<br> 
like which of your stock is going up and increasing in value and which one is going down. </p>
</div>
</div>
<div class="port-area" id="portfolio">
<div class="text-part">
<h1>Our Mission</h1> 
<p>sjdiojsiojasijdixiasnxiasoncncdcnsdnvnujndjdnfbuhuhudhduahjasndjajbfshfbbsudasudsanudsvbijknjubudbui
cndondondocndcndscndcdnhdheuheueuewjcubvdhbdcjksbaskjsbjcbjcbdjcbsjckbdsjcbdsjcbdsjcbdsjcbsdjcbdsjc
dcdjcjcbdcbcbubciucucbdssucbcudbcbdcbdcbducbdsucbucbducbdsuccbdscbsdcbucduc</p>
</div>
</div>
<div class="service-area" id="services">
<div class="text-part">
<h1>Why Us</h1> 
<p>sjdiojsiojasijdixiasnxiasoncncdcnsdnvnujndjdnfbuhuhudhduahjasndjajbfshfbbsudasudsanudsvbijknjubudbui
cndondondocndcndscndcdnhdheuheueuewjcubvdhbdcjksbaskjsbjcbjcbdjcbsjckbdsjcbdsjcbdsjcbdsjcbsdjcbdsjc
dcdjcjcbdcbcbubciucucbdssucbcudbcbdcbdcbducbdsucbucbducbdsuccbdscbsdcbucduc</p>
</div>
</div> 
<div class="contact-area" id="contact">
<div class="text-part">
<h1 style="text-align:left;">Contact </h1> 
<p><h7>Email-</h7> Stockaholic@info.in<br>
<h7>Contact-</h7>+91 9876543210<br>
<h7>Costumer Service-</h7> +91 9999077779<br>
</p>
</div>
</div>
   
</body>
</html>
    